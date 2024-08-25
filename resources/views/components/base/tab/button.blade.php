@props(['as' => 'a', 'target' => null, 'unstyled' => false])
@aware(['variant' => 'tabs', 'selected' => false, 'id' => null])

@if (substr($as, 0, 2) == 'x-')
    <x-dynamic-component
        data-tw-merge
        data-tw-target="#{{ $target ? $target : str_replace('-tab', '', uncamelize($id, '-')) }}"
        role="tab"
        {{ $attributes->class(
                merge([
                    !$unstyled
                        ? 'cursor-pointer block appearance-none px-5 py-2.5 border border-transparent text-slate-700 dark:text-slate-400'
                        : null,
                    !$unstyled ? '[&.active]:text-slate-800 [&.active]:dark:text-white' : null,
        
                    // Default
                    !$unstyled && $variant == 'tabs' ? 'block border-transparent rounded-t-md dark:border-transparent' : null,
                    !$unstyled && $variant == 'tabs'
                        ? '[&.active]:bg-white [&.active]:border-slate-200 [&.active]:border-b-transparent [&.active]:font-medium [&.active]:dark:bg-transparent [&.active]:dark:border-t-darkmode-400 [&.active]:dark:border-b-darkmode-600 [&.active]:dark:border-x-darkmode-400'
                        : null,
                    !$unstyled && $variant == 'tabs'
                        ? '[&:not(.active)]:hover:bg-slate-100 [&:not(.active)]:dark:hover:bg-darkmode-400 [&:not(.active)]:dark:hover:border-transparent'
                        : null,
        
                    // Pills
                    !$unstyled && $variant == 'pills' ? 'rounded-md border-0' : null,
                    !$unstyled && $variant == 'pills'
                        ? '[&.active]:bg-primary [&.active]:text-white [&.active]:font-medium'
                        : null,
        
                    // Boxed tabs
                    !$unstyled && $variant == 'boxed-tabs' ? 'shadow-[0px_3px_20px_#0000000b] rounded-md' : null,
                    !$unstyled && $variant == 'boxed-tabs'
                        ? '[&.active]:bg-primary [&.active]:text-white [&.active]:font-medium'
                        : null,
        
                    // Link tabs
                    !$unstyled && $variant == 'link-tabs' ? 'border-b-2 border-transparent dark:border-transparent' : null,
                    !$unstyled && $variant == 'link-tabs'
                        ? '[&.active]:border-b-primary [&.active]:font-medium [&.active]:dark:border-b-primary'
                        : null,
        
                    $selected ? 'active' : null,
                ]),
            )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
        :component="substr($as, 2)"
    >{{ $slot }}</x-dynamic-component>
@else
    <{{ $as }}
        data-tw-merge
        data-tw-target="#{{ $target ? $target : str_replace('-tab', '', uncamelize($id, '-')) }}"
        role="tab"
        {{ $attributes->class(
                merge([
                    !$unstyled
                        ? 'cursor-pointer block appearance-none px-5 py-2.5 border border-transparent text-slate-700 dark:text-slate-400'
                        : null,
                    !$unstyled ? '[&.active]:text-slate-800 [&.active]:dark:text-white' : null,
        
                    // Default
                    !$unstyled && $variant == 'tabs' ? 'block border-transparent rounded-t-md dark:border-transparent' : null,
                    !$unstyled && $variant == 'tabs'
                        ? '[&.active]:bg-white [&.active]:border-slate-200 [&.active]:border-b-transparent [&.active]:font-medium [&.active]:dark:bg-transparent [&.active]:dark:border-t-darkmode-400 [&.active]:dark:border-b-darkmode-600 [&.active]:dark:border-x-darkmode-400'
                        : null,
                    !$unstyled && $variant == 'tabs'
                        ? '[&:not(.active)]:hover:bg-slate-100 [&:not(.active)]:dark:hover:bg-darkmode-400 [&:not(.active)]:dark:hover:border-transparent'
                        : null,
        
                    // Pills
                    !$unstyled && $variant == 'pills' ? 'rounded-md border-0' : null,
                    !$unstyled && $variant == 'pills'
                        ? '[&.active]:bg-primary [&.active]:text-white [&.active]:font-medium'
                        : null,
        
                    // Boxed tabs
                    !$unstyled && $variant == 'boxed-tabs' ? 'shadow-[0px_3px_20px_#0000000b] rounded-md' : null,
                    !$unstyled && $variant == 'boxed-tabs'
                        ? '[&.active]:bg-primary [&.active]:text-white [&.active]:font-medium'
                        : null,
        
                    // Link tabs
                    !$unstyled && $variant == 'link-tabs' ? 'border-b-2 border-transparent dark:border-transparent' : null,
                    !$unstyled && $variant == 'link-tabs'
                        ? '[&.active]:border-b-primary [&.active]:font-medium [&.active]:dark:border-b-primary'
                        : null,
        
                    $selected ? 'active' : null,
                ]),
            )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >{{ $slot }}</{{ $as }}>
@endif
