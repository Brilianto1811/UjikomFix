@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Profile - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Profile Layout</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 flex flex-col-reverse lg:col-span-4 lg:block 2xl:col-span-3">
            <div class="intro-y box mt-5 lg:mt-0">
                <div class="relative flex items-center p-5">
                    <div class="image-fit h-12 w-12">
                        <img
                            class="rounded-full"
                            src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                            alt="Midone - Tailwind Admin Dashboard Template"
                        />
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="text-base font-medium">
                            {{ $fakers[0]['users'][0]['name'] }}
                        </div>
                        <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <x-base.menu>
                        <x-base.menu.button
                            class="block h-5 w-5"
                            href="#"
                            tag="a"
                        >
                            <x-base.lucide
                                class="h-5 w-5 text-slate-500"
                                icon="MoreHorizontal"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="w-56">
                            <x-base.menu.header>Export Options</x-base.menu.header>
                            <x-base.menu.divider />
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Activity"
                                />
                                English
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Box"
                                />
                                Indonesia
                                <div class="ml-auto rounded-full bg-danger px-1 text-xs text-white">
                                    10
                                </div>
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Layout"
                                />
                                English
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Sidebar"
                                />
                                Indonesia
                            </x-base.menu.item>
                            <x-base.menu.divider />
                            <x-base.menu.footer>
                                <x-base.button
                                    class="px-2 py-1"
                                    type="button"
                                    variant="primary"
                                >
                                    Settings
                                </x-base.button>
                                <x-base.button
                                    class="ml-auto px-2 py-1"
                                    type="button"
                                    variant="secondary"
                                >
                                    View Profile
                                </x-base.button>
                            </x-base.menu.footer>
                        </x-base.menu.items>
                    </x-base.menu>
                </div>
                <div class="border-t border-slate-200/60 p-5 dark:border-darkmode-400">
                    <a
                        class="flex items-center font-medium text-primary"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Activity"
                        /> Personal
                        Information
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Box"
                        /> Account Settings
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Lock"
                        /> Change Password
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Settings"
                        /> User
                        Settings
                    </a>
                </div>
                <div class="border-t border-slate-200/60 p-5 dark:border-darkmode-400">
                    <a
                        class="flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Activity"
                        /> Email
                        Settings
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Box"
                        /> Saved Credit
                        Cards
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Lock"
                        /> Social Networks
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Settings"
                        /> Tax
                        Information
                    </a>
                </div>
                <div class="flex border-t border-slate-200/60 p-5 dark:border-darkmode-400">
                    <x-base.button
                        class="px-2 py-1"
                        type="button"
                        variant="primary"
                    >
                        New Group
                    </x-base.button>
                    <x-base.button
                        class="ml-auto px-2 py-1"
                        type="button"
                        variant="outline-secondary"
                    >
                        New Quick Link
                    </x-base.button>
                </div>
            </div>
            <div class="intro-y box mt-5 bg-primary p-5 text-white">
                <div class="flex items-center">
                    <div class="text-lg font-medium">Important Update</div>
                    <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700 dark:bg-primary dark:text-white">
                        New
                    </div>
                </div>
                <div class="mt-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s.
                </div>
                <div class="mt-5 flex font-medium">
                    <x-base.button
                        class="border-white px-2 py-1 text-white dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300"
                        type="button"
                    >
                        Take Action
                    </x-base.button>
                    <x-base.button
                        class="ml-auto border-transparent px-2 py-1 text-white dark:border-transparent"
                        type="button"
                    >
                        Dismiss
                    </x-base.button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center border-b border-slate-200/60 px-5 py-5 dark:border-darkmode-400 sm:py-3">
                        <h2 class="mr-auto text-base font-medium">Daily Sales</h2>
                        <x-base.menu class="ml-auto sm:hidden">
                            <x-base.menu.button
                                class="block h-5 w-5"
                                href="#"
                                tag="a"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 text-slate-500"
                                    icon="MoreHorizontal"
                                />
                            </x-base.menu.button>
                            <x-base.menu.items class="w-40">
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="File"
                                    /> Download
                                    Excel
                                </x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                        <x-base.button
                            class="hidden sm:flex"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="File"
                            /> Download Excel
                        </x-base.button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="image-fit h-12 w-12 flex-none">
                                <img
                                    class="rounded-full"
                                    src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                    alt="Midone - Tailwind Admin Dashboard Template"
                                />
                            </div>
                            <div class="ml-4 mr-auto">
                                <a
                                    class="font-medium"
                                    href=""
                                >
                                    {{ $fakers[0]['users'][0]['name'] }}
                                </a>
                                <div class="mr-5 text-slate-500 sm:mr-5">
                                    Bootstrap 4 HTML Admin Template
                                </div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">
                                +$19
                            </div>
                        </div>
                        <div class="relative mt-5 flex items-center">
                            <div class="image-fit h-12 w-12 flex-none">
                                <img
                                    class="rounded-full"
                                    src="{{ Vite::asset($fakers[1]['photos'][0]) }}"
                                    alt="Midone - Tailwind Admin Dashboard Template"
                                />
                            </div>
                            <div class="ml-4 mr-auto">
                                <a
                                    class="font-medium"
                                    href=""
                                >
                                    {{ $fakers[1]['users'][0]['name'] }}
                                </a>
                                <div class="mr-5 text-slate-500 sm:mr-5">
                                    Tailwind Admin Dashboard Template
                                </div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">
                                +$25
                            </div>
                        </div>
                        <div class="relative mt-5 flex items-center">
                            <div class="image-fit h-12 w-12 flex-none">
                                <img
                                    class="rounded-full"
                                    src="{{ Vite::asset($fakers[2]['photos'][0]) }}"
                                    alt="Midone - Tailwind Admin Dashboard Template"
                                />
                            </div>
                            <div class="ml-4 mr-auto">
                                <a
                                    class="font-medium"
                                    href=""
                                >
                                    {{ $fakers[2]['users'][0]['name'] }}
                                </a>
                                <div class="mr-5 text-slate-500 sm:mr-5">
                                    Vuejs HTML Admin Template
                                </div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">
                                +$21
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Announcement -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center border-b border-slate-200/60 px-5 py-3 dark:border-darkmode-400">
                        <h2 class="mr-auto text-base font-medium">Announcement</h2>
                        <x-base.button
                            class="tiny-slider-navigator mr-2 px-2"
                            data-carousel="announcement"
                            data-target="prev"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="ChevronLeft"
                            />
                        </x-base.button>
                        <x-base.button
                            class="tiny-slider-navigator px-2"
                            data-carousel="announcement"
                            data-target="next"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="ChevronRight"
                            />
                        </x-base.button>
                    </div>
                    <x-base.tiny-slider
                        class="py-5"
                        id="announcement"
                    >
                        <div class="px-5">
                            <div class="text-lg font-medium">
                                Midone Admin Template
                            </div>
                            <div class="mt-2 text-slate-600 dark:text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever. <br />
                                <br />
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry since the 1500s.
                            </div>
                            <div class="mt-5 flex items-center">
                                <div
                                    class="rounded bg-primary/10 px-3 py-2 font-medium text-primary dark:bg-darkmode-400 dark:text-slate-300">
                                    02 June 2021
                                </div>
                                <x-base.button
                                    class="ml-auto"
                                    variant="outline-secondary"
                                >
                                    View Details
                                </x-base.button>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="text-lg font-medium">
                                Midone Admin Template
                            </div>
                            <div class="mt-2 text-slate-600 dark:text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever. <br />
                                <br />
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry since the 1500s.
                            </div>
                            <div class="mt-5 flex items-center">
                                <div
                                    class="rounded bg-primary/10 px-3 py-2 font-medium text-primary dark:bg-darkmode-400 dark:text-slate-300">
                                    02 June 2021
                                </div>
                                <x-base.button
                                    class="ml-auto"
                                    variant="outline-secondary"
                                >
                                    View Details
                                </x-base.button>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="text-lg font-medium">
                                Midone Admin Template
                            </div>
                            <div class="mt-2 text-slate-600 dark:text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever. <br />
                                <br />
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry since the 1500s.
                            </div>
                            <div class="mt-5 flex items-center">
                                <div
                                    class="rounded bg-primary/10 px-3 py-2 font-medium text-primary dark:bg-darkmode-400 dark:text-slate-300">
                                    02 June 2021
                                </div>
                                <x-base.button
                                    class="ml-auto"
                                    variant="secondary"
                                >
                                    View Details
                                </x-base.button>
                            </div>
                        </div>
                    </x-base.tiny-slider>
                </div>
                <!-- END: Announcement -->
                <!-- BEGIN: Projects -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center border-b border-slate-200/60 px-5 py-3 dark:border-darkmode-400">
                        <h2 class="mr-auto text-base font-medium">Projects</h2>
                        <x-base.button
                            class="tiny-slider-navigator mr-2 px-2"
                            data-carousel="projects"
                            data-target="prev"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="ChevronLeft"
                            />
                        </x-base.button>
                        <x-base.button
                            class="tiny-slider-navigator px-2"
                            data-carousel="projects"
                            data-target="next"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="ChevronRight"
                            />
                        </x-base.button>
                    </div>
                    <x-base.tiny-slider
                        class="py-5"
                        id="projects"
                    >
                        <div class="px-5">
                            <div class="text-lg font-medium">
                                Midone Admin Template
                            </div>
                            <div class="mt-2 text-slate-600 dark:text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s.
                            </div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <x-base.progress class="mt-2 h-1">
                                    <x-base.progress.bar
                                        class="w-1/2 bg-primary"
                                        role="progressbar"
                                        aria-valuenow="0"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    ></x-base.progress.bar>
                                </x-base.progress>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="text-lg font-medium">
                                Midone Admin Template
                            </div>
                            <div class="mt-2 text-slate-600 dark:text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s.
                            </div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <x-base.progress class="mt-2 h-1">
                                    <x-base.progress.bar
                                        class="w-1/2 bg-primary"
                                        role="progressbar"
                                        aria-valuenow="0"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    ></x-base.progress.bar>
                                </x-base.progress>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="text-lg font-medium">
                                Midone Admin Template
                            </div>
                            <div class="mt-2 text-slate-600 dark:text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s.
                            </div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <x-base.progress class="mt-2 h-1">
                                    <x-base.progress.bar
                                        class="w-1/2 bg-primary"
                                        role="progressbar"
                                        aria-valuenow="0"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    ></x-base.progress.bar>
                                </x-base.progress>
                            </div>
                        </div>
                    </x-base.tiny-slider>
                </div>
                <!-- END: Projects -->
                <!-- BEGIN: Today Schedules -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center border-b border-slate-200/60 px-5 py-3 dark:border-darkmode-400">
                        <h2 class="mr-auto text-base font-medium">
                            Today Schedules
                        </h2>
                        <x-base.button
                            class="tiny-slider-navigator mr-2 px-2"
                            data-carousel="today-schedule"
                            data-target="prev"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="ChevronLeft"
                            />
                        </x-base.button>
                        <x-base.button
                            class="tiny-slider-navigator px-2"
                            data-carousel="today-schedule"
                            data-target="prev"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="ChevronRight"
                            />
                        </x-base.button>
                    </div>
                    <x-base.tiny-slider
                        class="py-5"
                        id="today-schedule"
                    >
                        <div class="px-5 text-center sm:text-left">
                            <div class="text-lg font-medium">
                                Developing rest API with Laravel 7
                            </div>
                            <div class="mt-2 text-slate-600 dark:text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry
                            </div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="mt-5 flex flex-col items-center sm:flex-row">
                                <div class="flex items-center text-slate-500">
                                    <x-base.lucide
                                        class="mr-2 hidden h-4 w-4 sm:block"
                                        icon="MapPin"
                                    />
                                    1396 Pooh Bear Lane, New Market
                                </div>
                                <x-base.button
                                    class="sm:mt-0sm:ml-auto mt-3 px-2 py-1 sm:ml-auto sm:mt-0"
                                    variant="secondary"
                                >
                                    View On Map
                                </x-base.button>
                            </div>
                        </div>
                        <div class="px-5 text-center sm:text-left">
                            <div class="text-lg font-medium">
                                Developing rest API with Laravel 7
                            </div>
                            <div class="mt-2 text-slate-600 dark:text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry
                            </div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="mt-5 flex flex-col items-center sm:flex-row">
                                <div class="flex items-center text-slate-500">
                                    <x-base.lucide
                                        class="mr-2 hidden h-4 w-4 sm:block"
                                        icon="MapPin"
                                    />
                                    1396 Pooh Bear Lane, New Market
                                </div>
                                <x-base.button
                                    class="sm:mt-0sm:ml-auto mt-3 px-2 py-1 sm:ml-auto sm:mt-0"
                                    variant="secondary"
                                >
                                    View On Map
                                </x-base.button>
                            </div>
                        </div>
                        <div class="px-5 text-center sm:text-left">
                            <div class="text-lg font-medium">
                                Developing rest API with Laravel 7
                            </div>
                            <div class="mt-2 text-slate-600 dark:text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry
                            </div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="mt-5 flex flex-col items-center sm:flex-row">
                                <div class="flex items-center text-slate-500">
                                    <x-base.lucide
                                        class="mr-2 hidden h-4 w-4 sm:block"
                                        icon="MapPin"
                                    />
                                    1396 Pooh Bear Lane, New Market
                                </div>
                                <x-base.button
                                    class="sm:mt-0sm:ml-auto mt-3 px-2 py-1 sm:ml-auto sm:mt-0"
                                    variant="secondary"
                                >
                                    View On Map
                                </x-base.button>
                            </div>
                        </div>
                    </x-base.tiny-slider>
                </div>
                <!-- END: Today Schedules -->
                <!-- BEGIN: Top Products -->
                <x-base.tab.group class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400">
                        <h2 class="mr-auto text-base font-medium">Top Products</h2>
                        <x-base.menu class="ml-auto">
                            <x-base.menu.button
                                class="block h-5 w-5"
                                href="#"
                                tag="a"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 text-slate-500"
                                    icon="MoreHorizontal"
                                />
                            </x-base.menu.button>
                            <x-base.menu.items class="w-40">
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Edit"
                                    /> New Chat
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Trash"
                                    /> Delete
                                </x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                    </div>
                    <div class="p-5">
                        <x-base.tab.list
                            class="flex-col justify-center sm:flex-row"
                            variant="boxed-tabs"
                        >
                            <x-base.tab
                                id="top-products-laravel-tab"
                                :fullWidth="false"
                                selected
                            >
                                <x-base.tab.button
                                    class="mb-2 w-full cursor-pointer px-0 py-2 text-center sm:mx-2 sm:mb-0 sm:w-20"
                                >
                                    <x-base.lucide
                                        class="mx-auto mb-2 block h-6 w-6"
                                        icon="Box"
                                    />
                                    Laravel
                                </x-base.tab.button>
                            </x-base.tab>
                            <x-base.tab
                                id="top-products-symfony-tab"
                                :fullWidth="false"
                            >
                                <x-base.tab.button
                                    class="mb-2 w-full cursor-pointer px-0 py-2 text-center sm:mx-2 sm:mb-0 sm:w-20"
                                >
                                    <x-base.lucide
                                        class="mx-auto mb-2 block h-6 w-6"
                                        icon="Inbox"
                                    />
                                    Symfony
                                </x-base.tab.button>
                            </x-base.tab>
                            <x-base.tab
                                id="top-products-bootstrap-tab"
                                :fullWidth="false"
                            >
                                <x-base.tab.button
                                    class="mb-2 w-full cursor-pointer px-0 py-2 text-center sm:mx-2 sm:mb-0 sm:w-20"
                                >
                                    <x-base.lucide
                                        class="mx-auto mb-2 block h-6 w-6"
                                        icon="Activity"
                                    />
                                    Bootstrap
                                </x-base.tab.button>
                            </x-base.tab>
                        </x-base.tab.list>
                        <x-base.tab.panels class="mt-8">
                            <x-base.tab.panel
                                id="top-products-laravel"
                                selected
                            >
                                <div class="flex flex-col items-center sm:flex-row">
                                    <div class="mr-auto">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Wordpress Template
                                        </a>
                                        <div class="mt-1 text-slate-500">
                                            HTML, PHP, Mysql
                                        </div>
                                    </div>
                                    <div class="mt-3 flex w-full items-center sm:mt-0 sm:w-auto">
                                        <div class="mr-5 rounded bg-success/20 px-2 text-success">
                                            +20%
                                        </div>
                                        <x-base.progress class="mt-2 h-1 sm:w-40">
                                            <x-base.progress.bar
                                                class="w-1/2 bg-primary"
                                                role="progressbar"
                                                aria-valuenow="0"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></x-base.progress.bar>
                                        </x-base.progress>
                                    </div>
                                </div>
                                <div class="mt-5 flex flex-col items-center sm:flex-row">
                                    <div class="mr-auto">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Laravel Template
                                        </a>
                                        <div class="mt-1 text-slate-500">PHP, Mysql</div>
                                    </div>
                                    <div class="mt-3 flex w-full items-center sm:mt-0 sm:w-auto">
                                        <div class="mr-5 rounded bg-success/20 px-2 text-success">
                                            +55%
                                        </div>
                                        <x-base.progress class="mt-2 h-1 sm:w-40">
                                            <x-base.progress.bar
                                                class="w-2/3 bg-primary"
                                                role="progressbar"
                                                aria-valuenow="0"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></x-base.progress.bar>
                                        </x-base.progress>
                                    </div>
                                </div>
                                <div class="mt-5 flex flex-col items-center sm:flex-row">
                                    <div class="mr-auto">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Tailwind HTML Template
                                        </a>
                                        <div class="mt-1 text-slate-500">HTML, CSS, JS</div>
                                    </div>
                                    <div class="mt-3 flex w-full items-center sm:mt-0 sm:w-auto">
                                        <div class="mr-5 rounded bg-success/20 px-2 text-success">
                                            +40%
                                        </div>
                                        <x-base.progress class="mt-2 h-1 sm:w-40">
                                            <x-base.progress.bar
                                                class="w-3/4 bg-primary"
                                                role="progressbar"
                                                aria-valuenow="0"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></x-base.progress.bar>
                                        </x-base.progress>
                                    </div>
                                </div>
                            </x-base.tab.panel>
                        </x-base.tab.panels>
                    </div>
                </x-base.tab.group>
                <!-- END: Top Products -->
                <!-- BEGIN: Work In Progress -->
                <x-base.tab.group class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center border-b border-slate-200/60 px-5 py-5 dark:border-darkmode-400 sm:py-0">
                        <h2 class="mr-auto text-base font-medium">
                            Work In Progress
                        </h2>
                        <x-base.menu class="ml-auto sm:hidden">
                            <x-base.menu.button
                                class="block h-5 w-5"
                                href="#"
                                tag="a"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 text-slate-500"
                                    icon="MoreHorizontal"
                                />
                            </x-base.menu.button>
                            <x-base.menu.items class="w-40">
                                <x-base.menu.item
                                    class="w-full"
                                    id="work-in-progress-mobile-new-tab"
                                    target="work-in-progress-new"
                                    as="x-base.tab.button"
                                    unstyled
                                    selected
                                >
                                    New
                                </x-base.menu.item>
                                <x-base.menu.item
                                    class="w-full"
                                    id="work-in-progress-mobile-last-week-tab"
                                    target="work-in-progress-last-week"
                                    as="x-base.tab.button"
                                    unstyled
                                    :selected="false"
                                >
                                    Last Week
                                </x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                        <x-base.tab.list
                            class="ml-auto hidden w-auto sm:flex"
                            variant="link-tabs"
                        >
                            <x-base.tab
                                id="work-in-progress-new-tab"
                                :fullWidth="false"
                                selected
                            >
                                <x-base.tab.button class="cursor-pointer py-5">
                                    New
                                </x-base.tab.button>
                            </x-base.tab>
                            <x-base.tab
                                id="work-in-progress-last-week-tab"
                                :fullWidth="false"
                                :selected="false"
                            >
                                <x-base.tab.button class="cursor-pointer py-5">
                                    Last Week
                                </x-base.tab.button>
                            </x-base.tab>
                        </x-base.tab.list>
                    </div>
                    <div class="p-5">
                        <x-base.tab.panels>
                            <x-base.tab.panel
                                id="work-in-progress-new"
                                selected
                            >
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <x-base.progress class="mt-2 h-1">
                                        <x-base.progress.bar
                                            class="w-1/2 bg-primary"
                                            role="progressbar"
                                            aria-valuenow="0"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></x-base.progress.bar>
                                    </x-base.progress>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <x-base.progress class="mt-2 h-1">
                                        <x-base.progress.bar
                                            class="w-1/4 bg-primary"
                                            role="progressbar"
                                            aria-valuenow="0"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></x-base.progress.bar>
                                    </x-base.progress>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <x-base.progress class="mt-2 h-1">
                                        <x-base.progress.bar
                                            class="w-3/4 bg-primary"
                                            role="progressbar"
                                            aria-valuenow="0"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></x-base.progress.bar>
                                    </x-base.progress>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Review</div>
                                        <div>70%</div>
                                    </div>
                                    <x-base.progress class="mt-2 h-1">
                                        <x-base.progress.bar
                                            class="w-4/5 bg-primary"
                                            role="progressbar"
                                            aria-valuenow="0"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></x-base.progress.bar>
                                    </x-base.progress>
                                </div>
                                <x-base.button
                                    class="mx-auto mt-5 block w-40"
                                    href=""
                                    as="a"
                                    variant="secondary"
                                >
                                    View More Details
                                </x-base.button>
                            </x-base.tab.panel>
                        </x-base.tab.panels>
                    </div>
                </x-base.tab.group>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Latest Tasks -->
                <x-base.tab.group class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center border-b border-slate-200/60 px-5 py-5 dark:border-darkmode-400 sm:py-0">
                        <h2 class="mr-auto text-base font-medium">Latest Tasks</h2>
                        <x-base.menu class="ml-auto sm:hidden">
                            <x-base.menu.button
                                class="block h-5 w-5"
                                href="#"
                                tag="a"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 text-slate-500"
                                    icon="MoreHorizontal"
                                />
                            </x-base.menu.button>
                            <x-base.menu.items class="w-40">
                                <x-base.menu.item
                                    class="w-full"
                                    id="latest-tasks-mobile-new-tab"
                                    target="latest-tasks-new"
                                    as="x-base.tab.button"
                                    unstyled
                                    selected
                                >
                                    New
                                </x-base.menu.item>
                                <x-base.menu.item
                                    class="w-full"
                                    id="latest-tasks-mobile-last-week-tab"
                                    target="latest-tasks-last-week"
                                    as="x-base.tab.button"
                                    unstyled
                                    :selected="false"
                                >
                                    Last Week
                                </x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                        <x-base.tab.list
                            class="ml-auto hidden w-auto sm:flex"
                            variant="link-tabs"
                        >
                            <x-base.tab
                                id="latest-tasks-new-tab"
                                :fullWidth="false"
                                selected
                            >
                                <x-base.tab.button class="cursor-pointer py-5">
                                    New
                                </x-base.tab.button>
                            </x-base.tab>
                            <x-base.tab
                                id="latest-tasks-last-week-tab"
                                :fullWidth="false"
                                :selected="false"
                            >
                                <x-base.tab.button class="cursor-pointer py-5">
                                    Last Week
                                </x-base.tab.button>
                            </x-base.tab>
                        </x-base.tab.list>
                    </div>
                    <div class="p-5">
                        <x-base.tab.panels>
                            <x-base.tab.panel
                                id="latest-tasks-new"
                                selected
                            >
                                <div class="flex items-center">
                                    <div class="border-l-2 border-primary pl-4 dark:border-primary">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Create New Campaign
                                        </a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <x-base.form-switch class="ml-auto">
                                        <x-base.form-switch.input type="checkbox" />
                                    </x-base.form-switch>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="border-l-2 border-primary pl-4 dark:border-primary">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Meeting With Client
                                        </a>
                                        <div class="text-slate-500">02:00 PM</div>
                                    </div>
                                    <x-base.form-switch class="ml-auto">
                                        <x-base.form-switch.input type="checkbox" />
                                    </x-base.form-switch>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="border-l-2 border-primary pl-4 dark:border-primary">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Create New Repository
                                        </a>
                                        <div class="text-slate-500">04:00 PM</div>
                                    </div>
                                    <x-base.form-switch class="ml-auto">
                                        <x-base.form-switch.input type="checkbox" />
                                    </x-base.form-switch>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="border-l-2 border-primary pl-4 dark:border-primary">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Meeting With Client
                                        </a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <x-base.form-switch class="ml-auto">
                                        <x-base.form-switch.input type="checkbox" />
                                    </x-base.form-switch>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="border-l-2 border-primary pl-4 dark:border-primary">
                                        <a
                                            class="font-medium"
                                            href=""
                                        >
                                            Create New Repository
                                        </a>
                                        <div class="text-slate-500">11:00 PM</div>
                                    </div>
                                    <x-base.form-switch class="ml-auto">
                                        <x-base.form-switch.input type="checkbox" />
                                    </x-base.form-switch>
                                </div>
                            </x-base.tab.panel>
                        </x-base.tab.panels>
                    </div>
                </x-base.tab.group>
                <!-- END: Latest Tasks -->
                <!-- BEGIN: General Statistics -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center border-b border-slate-200/60 px-5 py-5 dark:border-darkmode-400 sm:py-3">
                        <h2 class="mr-auto text-base font-medium">
                            General Statistics
                        </h2>
                        <x-base.menu class="ml-auto">
                            <x-base.menu.button
                                class="block h-5 w-5 sm:hidden"
                                href="#"
                                tag="a"
                            >
                                <x-base.lucide
                                    class="h-5 w-5 text-slate-500"
                                    icon="MoreHorizontal"
                                />
                            </x-base.menu.button>
                            <x-base.menu.button
                                class="hidden font-normal sm:flex"
                                as="x-base.button"
                                variant="outline-secondary"
                            >
                                Export
                                <x-base.lucide
                                    class="ml-2 h-4 w-4"
                                    icon="ChevronDown"
                                />
                            </x-base.menu.button>
                            <x-base.menu.items class="w-40">
                                <x-base.menu.header>Export Tools</x-base.menu.header>
                                <x-base.menu.divider />
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Printer"
                                    />
                                    Print
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="ExternalLink"
                                    />
                                    Excel
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="FileText"
                                    />
                                    CSV
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Archive"
                                    />
                                    PDF
                                </x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col items-center sm:flex-row">
                            <div class="mr-auto flex flex-wrap sm:flex-nowrap">
                                <div class="mb-1 mr-5 flex items-center sm:mb-0">
                                    <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                    <span>Author Sales</span>
                                </div>
                                <div class="mb-1 mr-5 flex items-center sm:mb-0">
                                    <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                    <span>Product Profit</span>
                                </div>
                            </div>
                            <x-base.menu class="mr-auto mt-3 sm:mr-0 sm:mt-0">
                                <x-base.menu.button
                                    class="font-normal"
                                    as="x-base.button"
                                    variant="outline-secondary"
                                >
                                    Filter by Month
                                    <x-base.lucide
                                        class="ml-2 h-4 w-4"
                                        icon="ChevronDown"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="h-32 w-40 overflow-y-auto">
                                    <x-base.menu.item>January</x-base.menu.item>
                                    <x-base.menu.item>February</x-base.menu.item>
                                    <x-base.menu.item>March</x-base.menu.item>
                                    <x-base.menu.item>June</x-base.menu.item>
                                    <x-base.menu.item>July</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                        <div @class([
                            'mt-8 relative',
                            'before:content-[\'\'] before:block before:absolute before:w-16 before:left-0 before:top-0 before:bottom-0 before:ml-10 before:mb-7 before:bg-gradient-to-r before:from-white before:via-white/80 before:to-transparent before:dark:from-darkmode-600',
                            'after:content-[\'\'] after:block after:absolute after:w-16 after:right-0 after:top-0 after:bottom-0 after:mb-7 after:bg-gradient-to-l after:from-white after:via-white/80 after:to-transparent after:dark:from-darkmode-600',
                        ])>
                            <x-report-line-chart height="h-[212px]" />
                        </div>
                    </div>
                </div>
                <!-- END: General Statistics -->
            </div>
        </div>
    </div>
@endsection
