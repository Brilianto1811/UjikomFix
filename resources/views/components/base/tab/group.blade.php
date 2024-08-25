<div {{ $attributes->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}
</div>
