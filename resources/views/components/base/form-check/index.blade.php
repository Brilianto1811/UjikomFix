<div
    data-tw-merge
    {{ $attributes->class(merge(['flex items-center', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</div>
