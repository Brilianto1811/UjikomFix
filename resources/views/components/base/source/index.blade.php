<div
    {{ $attributes->class('source hide relative [&.hide]:overflow-hidden [&.hide]:h-0')->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}
</div>

@pushOnce('scripts')
    @vite('resources/js/components/base/source.js')
@endPushOnce
