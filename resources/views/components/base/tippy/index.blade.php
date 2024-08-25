@props(['as' => 'span', 'content' => null, 'placement' => 'top'])

@if (substr($as, 0, 2) == 'x-')
    <x-dynamic-component
        data-placement="{{ $placement }}"
        title="{{ $content }}"
        {{ $attributes->class(merge(['tooltip cursor-pointer', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
        :component="substr($as, 2)"
    >{{ $slot }}</x-dynamic-component>
@else
    @if ($as == 'img')
        <{{ $as }}
            data-placement="{{ $placement }}"
            title="{{ $content }}"
            {{ $attributes->class(merge(['tooltip cursor-pointer', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
        >
        @else
            <{{ $as }}
                data-placement="{{ $placement }}"
                title="{{ $content }}"
                {{ $attributes->class(merge(['tooltip cursor-pointer', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
            >{{ $slot }}</{{ $as }}>
    @endif
@endif

@pushOnce('styles')
    @vite('resources/css/vendors/tippy.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/tippy.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/tippy.js')
@endPushOnce
