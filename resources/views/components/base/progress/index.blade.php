<div
    data-tw-merge
    {{ $attributes->class(['w-full h-2 bg-slate-200 rounded dark:bg-black/20'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</div>
