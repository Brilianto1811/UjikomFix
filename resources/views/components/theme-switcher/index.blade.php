<div>
    <x-base.slideover id="theme-switcher">
        <x-base.slideover.panel>
            <a
                class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                data-tw-dismiss="modal"
                href="javascript:;"
            >
                <x-base.lucide
                    class="h-3 w-3 stroke-[1] sm:h-8 sm:w-8"
                    icon="X"
                />
            </a>
            <x-base.slideover.description class="p-0">
                <div class="flex flex-col">
                    <div class="px-8 pb-8 pt-6">
                        <div class="text-base font-medium">Themes</div>
                        <div class="mt-0.5 text-slate-500">Choose your theme</div>
                        <div class="mt-5 grid grid-cols-2 gap-x-5 gap-y-3.5">
                            @foreach (['rubick', 'icewall', 'tinker', 'enigma'] as $themeKey => $theme)
                                <div>
                                    <a
                                        href="{{ route('theme-switcher', ['activeTheme' => $theme]) }}"
                                        @class([
                                            'h-28 cursor-pointer bg-slate-50 box p-1 block',
                                            'border-2 border-theme-1/60' => $activeTheme == $theme,
                                        ])
                                    >
                                        <div class="image-fit h-full w-full overflow-hidden rounded-md">
                                            <img
                                                class="h-full w-full"
                                                src="{{ Vite::asset('resources/images/themes/' . $theme . '.png') }}"
                                                alt="Midone - Admin Dashboard Template"
                                            >
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        {{ $theme }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="border-b border-dashed"></div>
                    <div class="px-8 pb-8 pt-6">
                        <div class="text-base font-medium">Layouts</div>
                        <div class="mt-0.5 text-slate-500">Choose your layout</div>
                        <div class="mt-5 grid grid-cols-3 gap-x-5 gap-y-3.5">
                            @foreach (['side-menu', 'simple-menu', 'top-menu'] as $layoutKey => $layout)
                                <div>
                                    <a
                                        href="{{ route('layout-switcher', ['activeLayout' => $layout]) }}"
                                        @class([
                                            'h-24 cursor-pointer bg-slate-50 box p-1 block',
                                            'border-2 border-theme-1/60' => $activeLayout == $layout,
                                        ])
                                    >
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img
                                                class="h-full w-full"
                                                src="{{ Vite::asset('resources/images/layouts/' . $layout . '.png') }}"
                                                alt="Midone - Admin Dashboard Template"
                                            >
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        {{ str_replace('-', ' ', $layout) }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="border-b border-dashed"></div>
                    <div class="px-8 pb-8 pt-6">
                        <div class="text-base font-medium">Accent Colors</div>
                        <div class="mt-0.5 text-slate-500">
                            Choose your accent color
                        </div>
                        <div class="mt-5 grid grid-cols-2 gap-3.5">
                            @foreach (['default', 'theme-1', 'theme-2', 'theme-3', 'theme-4'] as $colorKey => $colorScheme)
                                <div>
                                    <a
                                        data-theme-color="{{ $colorScheme }}"
                                        @class([
                                            'h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block',
                                            '[&.active]:border-2 [&.active]:border-theme-1/60',
                                        ])
                                    >
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="-mx-2 flex h-full items-center gap-1">
                                                <div @class(['w-1/2 h-[200%] bg-theme-1 rotate-12', $colorScheme])></div>
                                                <div @class(['w-1/2 h-[200%] bg-theme-2 rotate-12', $colorScheme])></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="border-b border-dashed"></div>
                    <div class="px-8 pb-8 pt-6">
                        <div class="text-base font-medium">Appearance</div>
                        <div class="mt-0.5 text-slate-500">
                            Choose your appearance
                        </div>
                        <div class="mt-5 grid grid-cols-2 gap-3.5">
                            <div>
                                <a
                                    data-appearance-mode="light"
                                    @class([
                                        'h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block',
                                        '[&.active]:border-2 [&.active]:border-theme-1/60',
                                    ])
                                >
                                    <div class="h-full overflow-hidden rounded-md bg-slate-200"></div>
                                </a>
                                <div class="mt-2.5 text-center text-xs capitalize">
                                    Light
                                </div>
                            </div>
                            <div>
                                <a
                                    data-appearance-mode="dark"
                                    @class([
                                        'h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block',
                                        '[&.active]:border-2 [&.active]:border-theme-1/60',
                                    ])
                                >
                                    <div class="h-full overflow-hidden rounded-md bg-slate-900"></div>
                                </a>
                                <div class="mt-2.5 text-center text-xs capitalize">
                                    Dark
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-base.slideover.description>
        </x-base.slideover.panel>
    </x-base.slideover>
    <div
        class="fixed bottom-0 right-0 z-50 mb-5 mr-5 flex h-14 w-14 cursor-pointer items-center justify-center rounded-full bg-theme-1 text-white shadow-lg"
        data-tw-toggle="modal"
        data-tw-target="#theme-switcher"
    >
        <x-base.lucide
            class="h-5 w-5 animate-spin"
            icon="Settings"
        />
    </div>
</div>
