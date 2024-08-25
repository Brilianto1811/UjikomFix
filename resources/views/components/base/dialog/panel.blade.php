@props(['as' => 'div'])
@aware(['size' => 'md'])

<{{ $as }}
    data-tw-merge
    {{ $attributes->class([
            'w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600',
            $size == 'md' ? 'sm:w-[460px]' : null,
            $size == 'sm' ? 'sm:w-[300px]' : null,
            $size == 'lg' ? 'sm:w-[600px]' : null,
            $size == 'xl' ? 'sm:w-[600px] lg:w-[900px]' : null,
        ])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
