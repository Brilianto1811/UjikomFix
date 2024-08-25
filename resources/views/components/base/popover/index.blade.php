@props(['as' => 'div', 'placement' => 'bottom-end'])

@pushOnce('vendors')
    @vite('resources/js/vendors/dropdown.js')
@endPushOnce

<{{ $as }}
    data-tw-merge
    data-tw-placement="{{ $placement }}"
    {{ $attributes->class(['dropdown relative'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
