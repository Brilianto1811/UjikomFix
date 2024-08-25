<div
    {{ $attributes->class(merge(['py-5 pl-5 pr-14 bg-white border border-slate-200/60 rounded-lg shadow-xl dark:bg-darkmode-600 dark:text-slate-300 dark:border-darkmode-600 hidden flex', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}
</div>

@pushOnce('styles')
    @vite('resources/css/vendors/toastify.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/toastify.js')
@endPushOnce
