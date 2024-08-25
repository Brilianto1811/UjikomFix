@props(['variant' => null])

<thead
    data-tw-merge
    {{ $attributes->class(
            merge([
                $variant === 'light' ? 'bg-slate-200/60 dark:bg-slate-200' : null,
                $variant === 'dark' ? 'bg-dark text-white dark:bg-black/30' : null,
            ]),
        )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</thead>
