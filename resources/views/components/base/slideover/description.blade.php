@props(['as' => 'div'])

<{{ $as }}
    data-tw-merge
    {{ $attributes->class(['p-5 overflow-y-auto flex-1'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
