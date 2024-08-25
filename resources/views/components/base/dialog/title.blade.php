@props(['as' => 'div'])

<{{ $as }}
    {{ $attributes->class(['flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
