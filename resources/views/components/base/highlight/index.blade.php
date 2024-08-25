@props(['type' => 'html'])

@pushOnce('vendors')
    @vite('resources/js/utils/helper.js')
    @vite('resources/js/vendors/highlight.js')
@endPushOnce

<div class="highlight">
    <x-base.button
        variant="outline-secondary"
        {{ $attributes->class(merge(['py-1 px-2 copy-code', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >
        <x-base.lucide
            class="copy-code mr-2 h-4 w-4"
            icon="File"
        /> Copy example code
    </x-base.button>
    <div class="relative mt-3 overflow-hidden rounded-md">
        <pre class="relative grid">
            <code @class([
                'text-xs leading-relaxed [&.hljs]:bg-slate-50 [&.hljs]:px-5 [&.hljs]:py-4',
                '[&.hljs]:dark:text-slate-200 [&.hljs]:dark:bg-darkmode-700 [&.hljs_.hljs-string]:dark:text-slate-200 [&.hljs_.hljs-tag]:dark:text-slate-200 [&.hljs_.hljs-name]:dark:text-emerald-500 [&.hljs_.hljs-attr]:dark:text-sky-500',
                "before:content-['HTML'] before:font-roboto before:font-medium before:px-4 before:py-2 before:block before:absolute before:top-0 before:right-0 before:rounded-bl before:bg-slate-200 before:bg-opacity-70 before:dark:bg-darkmode-400",
                "[&.javascript]:before:content-['JS']",
                $type,
            ])>
                {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', $slot)) }}
            </code>
        </pre>
    </div>
</div>

@pushOnce('styles')
    @vite('resources/css/vendors/highlight.css')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/highlight.js')
@endPushOnce
