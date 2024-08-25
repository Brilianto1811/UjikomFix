<x-base.form-check.input
    {{ $attributes->class(
            merge([
                // Default
                'w-[38px] h-[24px] p-px rounded-full relative',
                'before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600',
    
                // On checked
                'checked:bg-primary checked:border-primary checked:bg-none',
                'before:checked:ml-[14px] before:checked:bg-white',
    
                $attributes->whereStartsWith('class')->first(),
            ]),
        )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</x-base.form-check.input>
