@aware(['selectedIndex' => null, 'index' => null])
@aware(['id' => null])

<div
    id="{{ $id }}-collapse"
    aria-labelledby="{{ $id }}"
    @class([
        'accordion-collapse collapse mt-3 text-slate-700 leading-relaxed dark:text-slate-400',
        '[&.collapse:not(.show)]:hidden [&.collapse.show]:visible',
        'show' => $selectedIndex == $index,
    ])
>
    <div
        data-tw-merge
        {{ $attributes->class(merge(['accordion-body', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
        a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.
    </div>
</div>
