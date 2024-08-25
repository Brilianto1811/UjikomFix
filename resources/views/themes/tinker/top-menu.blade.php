@extends('../themes/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div @class([
        'tinker md:bg-black/[0.15] dark:bg-transparent relative py-5 px-5 md:py-0 sm:px-8 md:px-0',
        "after:content-[''] after:bg-gradient-to-b after:from-theme-1 after:to-theme-2 dark:after:from-darkmode-800 dark:after:to-darkmode-800 after:fixed after:inset-0 after:z-[-2]",
    ])>
        <x-mobile-menu />
        <!-- BEGIN: Top Bar -->
        <div
            class="relative z-[51] -mx-5 mb-10 mt-12 h-[70px] border-b border-white/[0.08] px-4 sm:-mx-8 sm:px-8 md:mx-0 md:mb-8 md:mt-0 md:px-6">
            <div class="flex h-full items-center">
                <!-- BEGIN: Logo -->
                <a
                    class="-intro-x hidden md:flex"
                    href=""
                >
                    <img
                        class="w-6"
                        src="{{ Vite::asset('resources/images/logo.svg') }}"
                        alt="Midone Tailwind HTML Admin Template"
                    />
                    <span class="ml-3 text-lg text-white"> Tinker </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <x-base.breadcrumb
                    class="-intro-x mr-auto h-full border-white/[0.08] md:ml-10 md:border-l md:pl-10"
                    light
                >
                    <x-base.breadcrumb.link :index="0">Application</x-base.breadcrumb.link>
                    <x-base.breadcrumb.link
                        :index="1"
                        :active="true"
                    >
                        Dashboard
                    </x-base.breadcrumb.link>
                </x-base.breadcrumb>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <x-base.form-input
                            class="w-56 rounded-full border-transparent bg-slate-200 pr-8 shadow-none transition-[width] duration-300 ease-in-out focus:w-72 focus:border-transparent dark:bg-darkmode-400/70"
                            type="text"
                            placeholder="Search..."
                        />
                        <x-base.lucide
                            class="absolute inset-y-0 right-0 my-auto mr-3 h-5 w-5 text-slate-600 dark:text-slate-500"
                            icon="Search"
                        />
                    </div>
                    <a
                        class="relative text-white/70 sm:hidden"
                        href=""
                    >
                        <x-base.lucide
                            class="h-5 w-5 dark:text-slate-500"
                            icon="Search"
                        />
                    </a>
                    <x-base.transition
                        class="search-result absolute right-0 z-10 mt-[3px] hidden"
                        selector=".show"
                        enter="transition-all ease-linear duration-150"
                        enterFrom="mt-5 invisible opacity-0 translate-y-1"
                        enterTo="mt-[3px] visible opacity-100 translate-y-0"
                        leave="transition-all ease-linear duration-150"
                        leaveFrom="mt-[3px] visible opacity-100 translate-y-0"
                        leaveTo="mt-5 invisible opacity-0 translate-y-1"
                    >
                        <div class="box w-[450px] p-5">
                            <div class="mb-2 font-medium">Pages</div>
                            <div class="mb-5">
                                <a
                                    class="flex items-center"
                                    href=""
                                >
                                    <div
                                        class="flex h-8 w-8 items-center justify-center rounded-full bg-success/20 text-success dark:bg-success/10">
                                        <x-base.lucide
                                            class="h-4 w-4"
                                            icon="Inbox"
                                        />
                                    </div>
                                    <div class="ml-3">Mail Settings</div>
                                </a>
                                <a
                                    class="mt-2 flex items-center"
                                    href=""
                                >
                                    <div
                                        class="flex h-8 w-8 items-center justify-center rounded-full bg-pending/10 text-pending">
                                        <x-base.lucide
                                            class="h-4 w-4"
                                            icon="Users"
                                        />
                                    </div>
                                    <div class="ml-3">Users & Permissions</div>
                                </a>
                                <a
                                    class="mt-2 flex items-center"
                                    href=""
                                >
                                    <div
                                        class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary/80 dark:bg-primary/20">
                                        <x-base.lucide
                                            class="h-4 w-4"
                                            icon="CreditCard"
                                        />
                                    </div>
                                    <div class="ml-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="mb-2 font-medium">Users</div>
                            <div class="mb-5">
                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                    <a
                                        class="mt-2 flex items-center"
                                        href=""
                                    >
                                        <div class="image-fit h-8 w-8">
                                            <img
                                                class="rounded-full"
                                                src="{{ Vite::asset($faker['photos'][0]) }}"
                                                alt="Midone Tailwind HTML Admin Template"
                                            />
                                        </div>
                                        <div class="ml-3">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                            {{ $faker['users'][0]['email'] }}
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="mb-2 font-medium">Products</div>
                            @foreach (array_slice($fakers, 0, 4) as $faker)
                                <a
                                    class="mt-2 flex items-center"
                                    href=""
                                >
                                    <div class="image-fit h-8 w-8">
                                        <img
                                            class="rounded-full"
                                            src="{{ Vite::asset($faker['images'][0]) }}"
                                            alt="Midone Tailwind HTML Admin Template"
                                        />
                                    </div>
                                    <div class="ml-3">{{ $faker['products'][0]['name'] }}</div>
                                    <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                        {{ $faker['products'][0]['category'] }}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </x-base.transition>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <x-base.popover class="intro-x mr-4 sm:mr-6">
                    <x-base.popover.button
                        class="relative block text-white/70 outline-none before:absolute before:right-0 before:top-[-2px] before:h-[8px] before:w-[8px] before:rounded-full before:bg-danger before:content-['']"
                    >
                        <x-base.lucide
                            class="h-5 w-5 dark:text-slate-500"
                            icon="Bell"
                        />
                    </x-base.popover.button>
                    <x-base.popover.panel class="mt-2 w-[280px] p-5 sm:w-[350px]">
                        <div class="mb-5 font-medium">Notifications</div>
                        @foreach (array_slice($fakers, 0, 5) as $fakerKey => $faker)
                            <div @class([
                                'cursor-pointer relative flex items-center',
                                'mt-5' => $fakerKey,
                            ])>
                                <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                                    <img
                                        class="rounded-full"
                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                        alt="Midone Tailwind HTML Admin Template"
                                    />
                                    <div
                                        class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a
                                            class="mr-5 truncate font-medium"
                                            href=""
                                        >
                                            {{ $faker['users'][0]['name'] }}
                                        </a>
                                        <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                            {{ $faker['times'][0] }}
                                        </div>
                                    </div>
                                    <div class="mt-0.5 w-full truncate text-slate-500">
                                        {{ $faker['news'][0]['short_content'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </x-base.popover.panel>
                </x-base.popover>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <x-base.menu>
                    <x-base.menu.button
                        class="image-fit zoom-in intro-x block h-8 w-8 scale-110 overflow-hidden rounded-full shadow-lg"
                    >
                        <img
                            src="{{ Vite::asset($faker['photos'][0]) }}"
                            alt="Midone Tailwind HTML Admin Template"
                        />
                    </x-base.menu.button>
                    <x-base.menu.items
                        class="relative mt-px w-56 bg-primary/80 text-white before:absolute before:inset-0 before:z-[-1] before:block before:rounded-md before:bg-black"
                    >
                        <x-base.menu.header class="font-normal">
                            <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                            <div class="mt-0.5 text-xs text-white/70 dark:text-slate-500">
                                {{ $fakers[0]['jobs'][0] }}
                            </div>
                        </x-base.menu.header>
                        <x-base.menu.divider class="bg-white/[0.08]" />
                        <x-base.menu.item class="hover:bg-white/5">
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="User"
                            /> Profile
                        </x-base.menu.item>
                        <x-base.menu.item class="hover:bg-white/5">
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="Edit"
                            /> Add Account
                        </x-base.menu.item>
                        <x-base.menu.item class="hover:bg-white/5">
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="Lock"
                            /> Reset Password
                        </x-base.menu.item>
                        <x-base.menu.item class="hover:bg-white/5">
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="HelpCircle"
                            /> Help
                        </x-base.menu.item>
                        <x-base.menu.divider class="bg-white/[0.08]" />
                        <x-base.menu.item class="hover:bg-white/5">
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="ToggleRight"
                            /> Logout
                        </x-base.menu.item>
                    </x-base.menu.items>
                </x-base.menu>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <!-- BEGIN: Top Menu -->
        <nav class="top-nav relative z-50 -mt-[3px] hidden translate-y-[50px] opacity-0 md:block">
            <ul class="flex h-[58px] flex-wrap px-6 xl:px-[50px]">
                @foreach ($mainMenu as $menuKey => $menu)
                    <li>
                        <a
                            href="{{ isset($menu['route_name']) ? route($menu['route_name'], isset($menu['params']) ? $menu['params'] : []) : 'javascript:;' }}"
                            @class([
                                $firstLevelActiveIndex == $menuKey
                                    ? 'top-menu top-menu--active'
                                    : 'top-menu',
                            ])
                        >
                            <div class="top-menu__icon">
                                <x-base.lucide icon="{{ $menu['icon'] }}" />
                            </div>
                            <div class="top-menu__title">
                                {{ $menu['title'] }}
                                @if (isset($menu['sub_menu']))
                                    <x-base.lucide
                                        class="top-menu__sub-icon"
                                        icon="chevron-down"
                                    />
                                @endif
                            </div>
                        </a>
                        @if (isset($menu['sub_menu']))
                            <ul class="{{ $firstLevelActiveIndex == $menuKey ? 'top-menu__sub-open' : '' }}">
                                @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                    <li>
                                        <a
                                            class="top-menu"
                                            href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], isset($subMenu['params']) ? $subMenu['params'] : []) : 'javascript:;' }}"
                                        >
                                            <div class="top-menu__icon">
                                                <x-base.lucide icon="{{ $subMenu['icon'] }}" />
                                            </div>
                                            <div class="top-menu__title">
                                                {{ $subMenu['title'] }}
                                                @if (isset($subMenu['sub_menu']))
                                                    <x-base.lucide
                                                        class="top-menu__sub-icon"
                                                        icon="chevron-down"
                                                    />
                                                @endif
                                            </div>
                                        </a>
                                        @if (isset($subMenu['sub_menu']))
                                            <ul
                                                class="{{ $secondLevelActiveIndex == $subMenuKey ? 'top-menu__sub-open' : '' }}">
                                                @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                    <li>
                                                        <a
                                                            class="top-menu"
                                                            href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], isset($lastSubMenu['params']) ? $lastSubMenu['params'] : []) : 'javascript:;' }}"
                                                        >
                                                            <div class="top-menu__icon">
                                                                <x-base.lucide icon="{{ $lastSubMenu['icon'] }}" />
                                                            </div>
                                                            <div class="top-menu__title">{{ $lastSubMenu['title'] }}</div>
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
                @endforeach
            </ul>
        </nav>
        <!-- END: Top Menu -->
        <!-- BEGIN: Content -->
        <div @class([
            'rounded-[30px] md:rounded-[35px_35px_0px_0px] min-w-0 min-h-screen max-w-full md:max-w-none bg-slate-100 flex-1 pb-10 px-4 md:px-6 relative mt-8 dark:bg-darkmode-700',
            "before:content-[''] before:w-full before:h-px before:block",
            "after:content-[''] after:z-[-1] after:rounded-[40px_40px_0px_0px] after:w-[97%] after:inset-y-0 after:absolute after:left-0 after:right-0 after:bg-white/10 after:-mt-4 after:mx-auto after:dark:bg-darkmode-400/50",
        ])>
            @yield('subcontent')
        </div>
        <!-- END: Content -->
    </div>
@endsection

@pushOnce('styles')
    @vite('resources/css/themes/tinker/top-nav.css')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/themes/tinker/top-bar.js')
@endPushOnce
