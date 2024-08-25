<nav {{ $attributes->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
        {{ $slot }}
    </ul>
</nav>
