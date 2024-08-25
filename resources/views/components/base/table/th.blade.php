@aware(['variant' => null, 'dark' => null, 'bordered' => null, 'sm' => null])

<th
    data-tw-merge
    {{ $attributes->class(
            merge([
                'font-medium px-5 py-3 border-b-2 dark:border-darkmode-300',
                $variant === 'light' ? 'border-b-0 text-slate-700' : null,
                $variant === 'dark' ? 'border-b-0' : null,
                $dark ? 'border-slate-600 dark:border-darkmode-300' : null,
                $bordered ? 'border-l border-r border-t' : null,
                $sm ? 'px-4 py-2' : null,
            ]),
        )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</th>
