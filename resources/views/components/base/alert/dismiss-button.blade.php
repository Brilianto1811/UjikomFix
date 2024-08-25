@props(['as' => 'button'])

<{{ $as }}
    data-tw-merge
    data-tw-dismiss="alert"
    type="button"
    aria-label="Close"
    {{ $attributes->class(['text-slate-800 py-2 px-3 absolute right-0 my-auto mr-2'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
