<div
    data-tw-merge
    {{ $attributes->class(['bg-primary h-full rounded text-xs text-white flex justify-center items-center'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</div>
