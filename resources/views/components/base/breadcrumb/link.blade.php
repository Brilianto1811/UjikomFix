@props(['active' => null, 'index' => 0])
@aware(['light' => null])

<li
    {{ $attributes->whereStartsWith('class')->class(
            merge([
                $index > 0 ? 'relative ml-5 pl-0.5' : null,
    
                !$light && $index > 0
                    ? "before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0"
                    : null,
    
                $light && $index > 0
                    ? "before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0"
                    : null,
                $index > 0 ? 'dark:before:bg-chevron-white' : null,
    
                !$light && $active ? 'text-slate-800 cursor-text dark:text-slate-400' : null,
                $light && $active ? 'text-white/70' : null,
            ]),
        ) }}>
    <a {{ $attributes->merge(['href' => ''])->whereDoesntStartWith('class') }}>{{ $slot }}</a>
</li>
