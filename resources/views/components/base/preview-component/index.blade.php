<div {{ $attributes->class('preview-component')->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}
</div>

@pushOnce('scripts')
    @vite('resources/js/components/base/preview-component.js')
@endPushOnce
