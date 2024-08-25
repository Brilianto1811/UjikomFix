@props(['src' => null])

<img
    data-action="zoom"
    src="{{ $src }}"
    {{ $attributes->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
/>

@pushOnce('styles')
    @vite('resources/css/vendors/zoom-vanilla.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/image-zoom.js')
@endPushOnce
