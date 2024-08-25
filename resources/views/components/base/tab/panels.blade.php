<div
    {{ $attributes->class(merge(['tab-content']))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}
</div>
