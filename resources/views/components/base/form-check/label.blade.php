<label
    data-tw-merge
    {{ $attributes->class(merge(['cursor-pointer ml-2', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</label>
