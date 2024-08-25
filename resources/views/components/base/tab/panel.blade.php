@props(['id' => null, 'selected' => false])

<x-base.transition
    id="{{ $id }}"
    role="tabpanel"
    aria-labelledby="{{ uncamelize($id, '-') }}-tab"
    selector=".active"
    enter="transition-[visibility,opacity] ease-linear duration-150"
    enterFrom="!p-0 !h-0 overflow-hidden invisible opacity-0"
    enterTo="visible opacity-100"
    leave="transition-[visibility,opacity] ease-linear duration-150"
    leaveFrom="visible opacity-100"
    leaveTo="!p-0 !h-0 overflow-hidden invisible opacity-0"
    {{ $attributes->class(merge(['tab-pane', $selected ? 'active' : null]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</x-base.transition>
