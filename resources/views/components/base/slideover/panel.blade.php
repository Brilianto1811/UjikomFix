@props(['as' => 'div'])
@aware(['size' => 'md'])

<{{ $as }}
    data-tw-merge
    {{ $attributes->class([
            'w-[90%] ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600',
            $size == 'md' ? 'sm:w-[460px]' : null,
            $size == 'sm' ? 'sm:w-[300px]' : null,
            $size == 'lg' ? 'sm:w-[600px]' : null,
            $size == 'xl' ? 'sm:w-[600px] lg:w-[900px]' : null,
        ])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
