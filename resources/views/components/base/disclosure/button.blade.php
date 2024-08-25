@props(['as' => 'div', 'variant' => null])
@aware(['selectedIndex' => null, 'index' => null, 'id' => null])

<div
    class="accordion-header"
    id="{{ $id }}"
>
    <button
        data-tw-merge
        data-tw-toggle="collapse"
        data-tw-target="#{{ $id }}-collapse"
        type="button"
        aria-expanded="true"
        aria-controls="{{ $id }}-collapse"
        {{ $attributes->class(
                merge([
                    'accordion-button outline-none py-4 -my-4 font-medium w-full text-left dark:text-slate-400',
                    '[&:not(.collapsed)]:text-primary [&:not(.collapsed)]:dark:text-slate-300',
                    $selectedIndex != $index ? 'collapsed' : null,
                    $attributes->whereStartsWith('class')->first(),
                ]),
            )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >{{ $slot }}</button>
</div>
