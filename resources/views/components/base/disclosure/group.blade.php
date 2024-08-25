@props(['as' => 'div', 'selectedIndex' => null, 'variant' => null])

<{{ $as }}
    data-tw-merge
    {{ $attributes->class(merge(['accordion', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
