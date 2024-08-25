<div
    data-tw-merge
    {{ $attributes->class(['flex group input-group'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</div>
