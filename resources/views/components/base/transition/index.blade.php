@props([
    'as' => 'div',
    'selector' => null,
    'enter' => null,
    'enterFrom' => null,
    'enterTo' => null,
    'leave' => null,
    'leaveFrom' => null,
    'leaveTo' => null,
])

@pushOnce('vendors')
    @vite('resources/js/vendors/transition.js')
@endPushOnce

@if (substr($as, 0, 2) == 'x-')
    <x-dynamic-component
        data-transition
        data-selector="{{ $selector }}"
        data-enter="{{ $enter }}"
        data-enter-from="{{ $enterFrom }}"
        data-enter-to="{{ $enterTo }}"
        data-leave="{{ $leave }}"
        data-leave-from="{{ $leaveFrom }}"
        data-leave-to="{{ $leaveTo }}"
        {{ $attributes }}
        :component="substr($as, 2)"
    >{{ $slot }}</x-dynamic-component>
@else
    <{{ $as }}
        data-transition
        data-selector="{{ $selector }}"
        data-enter="{{ $enter }}"
        data-enter-from="{{ $enterFrom }}"
        data-enter-to="{{ $enterTo }}"
        data-leave="{{ $leave }}"
        data-leave-from="{{ $leaveFrom }}"
        data-leave-to="{{ $leaveTo }}"
        {{ $attributes }}
    >{{ $slot }}</{{ $as }}>
@endif
