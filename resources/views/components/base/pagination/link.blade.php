@props(['as' => 'a', 'active' => null])

<li class="flex-1 sm:flex-initial">
    <x-base.button
        data-tw-merge
        as="{{ $as }}"
        {{ $attributes->class(
                merge([
                    'min-w-0 sm:min-w-[40px] shadow-none font-normal flex items-center justify-center border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3',
                    $active ? '!box font-medium dark:bg-darkmode-400' : null,
                ]),
            )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >
        {{ $slot }}
    </x-base.button>
</li>
