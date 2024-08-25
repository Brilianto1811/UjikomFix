@extends('../themes/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div @class([
        'icewall px-5 sm:px-8 py-5 relative',
        "after:content-[''] after:bg-gradient-to-b after:from-theme-1 after:to-theme-2 dark:after:from-darkmode-800 dark:after:to-darkmode-800 after:fixed after:inset-0 after:z-[-2]",
    ])>
        <x-mobile-menu />
        <x-themes.icewall.top-bar />
        <div @class([
            'wrapper relative',
            "before:content-[''] before:z-[-1] before:translate-y-[35px] before:opacity-0 before:w-[95%] before:rounded-[1.3rem] before:bg-white/10 before:h-full before:-mt-4 before:absolute before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/50",
        ])>
            <div @class([
                'wrapper-box bg-gradient-to-b from-theme-1 to-theme-2 flex rounded-[1.3rem] -mt-[7px] md:mt-0 dark:from-darkmode-400 dark:to-darkmode-400 translate-y-[35px]',
                'before:block before:absolute before:inset-0 before:bg-black/[0.15] before:rounded-[1.3rem] before:z-[-1]',
            ])>
                <!-- BEGIN: Side Menu -->
                <nav class="side-nav hidden w-[100px] overflow-x-hidden px-5 pb-16 pt-8 md:block xl:w-[250px]">
                    <ul>
                        @foreach ($mainMenu as $menuKey => $menu)
                            @if ($menu == 'divider')
                                <li class="side-nav__divider my-6"></li>
                            @else
                                <li>
                                    <a
                                        href="{{ isset($menu['route_name']) ? route($menu['route_name'], isset($menu['params']) ? $menu['params'] : []) : 'javascript:;' }}"
                                        @class([
                                            $firstLevelActiveIndex == $menuKey
                                                ? 'side-menu side-menu--active'
                                                : 'side-menu',
                                        ])
                                    >
                                        <div class="side-menu__icon">
                                            <x-base.lucide icon="{{ $menu['icon'] }}" />
                                        </div>
                                        <div class="side-menu__title">
                                            {{ $menu['title'] }}
                                            @if (isset($menu['sub_menu']))
                                                <div
                                                    class="side-menu__sub-icon {{ $firstLevelActiveIndex == $menuKey ? 'transform rotate-180' : '' }}">
                                                    <x-base.lucide icon="ChevronDown" />
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                    @if (isset($menu['sub_menu']))
                                        <ul class="{{ $firstLevelActiveIndex == $menuKey ? 'side-menu__sub-open' : '' }}">
                                            @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                                <li>
                                                    <a
                                                        href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], isset($subMenu['params']) ? $subMenu['params'] : []) : 'javascript:;' }}"
                                                        @class([
                                                            $secondLevelActiveIndex == $subMenuKey
                                                                ? 'side-menu side-menu--active'
                                                                : 'side-menu',
                                                        ])
                                                    >
                                                        <div class="side-menu__icon">
                                                            <x-base.lucide icon="{{ $subMenu['icon'] }}" />
                                                        </div>
                                                        <div class="side-menu__title">
                                                            {{ $subMenu['title'] }}
                                                            @if (isset($subMenu['sub_menu']))
                                                                <div
                                                                    class="side-menu__sub-icon {{ $secondLevelActiveIndex == $subMenuKey ? 'transform rotate-180' : '' }}">
                                                                    <x-base.lucide icon="ChevronDown" />
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </a>
                                                    @if (isset($subMenu['sub_menu']))
                                                        <ul
                                                            class="{{ $secondLevelActiveIndex == $subMenuKey ? 'side-menu__sub-open' : '' }}">
                                                            @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                                <li>
                                                                    <a
                                                                        href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], isset($lastSubMenu['params']) ? $lastSubMenu['params'] : []) : 'javascript:;' }}"
                                                                        @class([
                                                                            $thirdLevelActiveIndex == $lastSubMenuKey
                                                                                ? 'side-menu side-menu--active'
                                                                                : 'side-menu',
                                                                        ])
                                                                    >
                                                                        <div class="side-menu__icon">
                                                                            <x-base.lucide
                                                                                icon="{{ $lastSubMenu['icon'] }}"
                                                                            />
                                                                        </div>
                                                                        <div class="side-menu__title">
                                                                            {{ $lastSubMenu['title'] }}
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div
                    class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[1.3rem] bg-slate-100 px-4 pb-10 shadow-sm before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
                    @yield('subcontent')
                </div>
                <!-- END: Content -->
            </div>
        </div>
    </div>
@endsection

@pushOnce('styles')
    @vite('resources/css/vendors/tippy.css')
    @vite('resources/css/themes/icewall/side-nav.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/tippy.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/themes/icewall.js')
@endPushOnce
