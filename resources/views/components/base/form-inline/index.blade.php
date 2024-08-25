<div
    data-tw-merge
    {{ $attributes->class(['block sm:flex items-center group form-inline'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</div>
