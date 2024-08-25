<canvas
    {{ $attributes->class(merge(['chart', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
></canvas>

@pushOnce('vendors')
    @vite('resources/js/vendors/chartjs.js')
@endPushOnce
