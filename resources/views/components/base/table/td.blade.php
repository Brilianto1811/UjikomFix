@aware(['dark' => null, 'bordered' => null, 'sm' => null])

<td
    data-tw-merge
    {{ $attributes->class(
            merge([
                'px-5 py-3 border-b dark:border-darkmode-300',
                $dark ? 'border-slate-600 dark:border-darkmode-300' : null,
                $bordered ? 'border-l border-r border-t' : null,
                $sm ? 'px-4 py-2' : null,
            ]),
        )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</td>
