<x-base.form-check.label {{ $attributes->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}</x-base.form-check.label>
