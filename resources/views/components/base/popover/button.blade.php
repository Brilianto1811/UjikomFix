@props(['as' => 'div'])

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
        {{ $attributes->class(['cursor-pointer'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >{{ $slot }}</{{ $as }}>
@endif
