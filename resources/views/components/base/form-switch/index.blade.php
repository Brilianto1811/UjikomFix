<x-base.form-check {{ $attributes->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}</x-base.form-check>
