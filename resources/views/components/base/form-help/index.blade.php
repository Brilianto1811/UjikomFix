<div
    data-tw-merge
    {{ $attributes->class(['text-xs text-slate-500 mt-2'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</div>
