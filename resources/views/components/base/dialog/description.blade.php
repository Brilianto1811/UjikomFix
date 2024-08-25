@props(['as' => 'div'])

<{{ $as }}
    data-tw-merge
    {{ $attributes->class(['p-5'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
