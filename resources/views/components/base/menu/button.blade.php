@props(['as' => 'button'])

@if (substr($as, 0, 2) == 'x-')
    <x-dynamic-component
        data-tw-toggle="dropdown"
        aria-expanded="false"
        {{ $attributes->class(['cursor-pointer'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
        :component="substr($as, 2)"
    >{{ $slot }}</x-dynamic-component>
@else
    <{{ $as }}
        data-tw-toggle="dropdown"
        aria-expanded="false"
        {{ $attributes->whereDoesntStartWith('href')->class(['cursor-pointer'])->merge($attributes->whereDoesntStartWith(['class', 'href'])->getAttributes())->merge($as == 'a' ? ['href' => 'javascript:;'] : []) }}
    >{{ $slot }}
        </{{ $as }}>
@endif
