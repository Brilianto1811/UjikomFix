@props(['index' => null, 'id' => null])
@aware(['variant' => null])

@pushOnce('vendors')
    @vite('resources/js/vendors/accordion.js')
@endPushOnce

<div
    data-tw-merge
    {{ $attributes->class(
            merge([
                'accordion-item py-4 first:-mt-4 last:-mb-4',
                '[&:not(:last-child)]:border-b [&:not(:last-child)]:border-slate-200/60 [&:not(:last-child)]:dark:border-darkmode-400',
                $variant == 'boxed'
                    ? 'p-4 first:mt-0 last:mb-0 border border-slate-200/60 mt-3 dark:border-darkmode-400'
                    : null,
            ]),
        )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</div>
