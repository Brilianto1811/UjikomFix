@props(['as' => 'a'])

@if (substr($as, 0, 2) == 'x-')
    <x-dynamic-component
        {{ $attributes->class(['cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
        :component="substr($as, 2)"
    >{{ $slot }}</x-dynamic-component>
@else
    <{{ $as }}
        {{ $attributes->class(['cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >{{ $slot }}</{{ $as }}>
@endif
