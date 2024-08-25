@props(['as' => 'div', 'staticBackdrop' => false, 'size' => 'md'])

@pushOnce('vendors')
    @vite('resources/js/vendors/modal.js')
@endPushOnce

<{{ $as }}
    data-tw-backdrop="{{ $staticBackdrop ? 'static' : null }}"
    aria-hidden="true"
    tabindex="-1"
    {{ $attributes->class([
            'modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0',
            '[&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0',
            '[&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]',
        ])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
