<div {{ $attributes->class(['p-2 font-medium'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}
</div>
