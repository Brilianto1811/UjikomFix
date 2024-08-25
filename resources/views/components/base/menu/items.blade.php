<x-base.transition
    class="dropdown-menu absolute z-[9999] hidden"
    selector=".show"
    enter="transition-all ease-linear duration-150"
    enterFrom="absolute !mt-5 invisible opacity-0 translate-y-1"
    enterTo="!mt-1 visible opacity-100 translate-y-0"
    leave="transition-all ease-linear duration-150"
    leaveFrom="!mt-1 visible opacity-100 translate-y-0"
    leaveTo="absolute !mt-5 invisible opacity-0 translate-y-1"
>
    <div
        data-tw-merge
        {{ $attributes->class(['dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >
        {{ $slot }}
    </div>
</x-base.transition>
