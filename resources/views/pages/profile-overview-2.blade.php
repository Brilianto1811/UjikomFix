@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Profile - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Profile Layout</h2>
    </div>
    <x-base.tab.group>
        <!-- BEGIN: Profile Info -->
        <div class="intro-y box mt-5 px-5 pt-5">
            <div class="-mx-5 flex flex-col border-b border-slate-200/60 pb-5 dark:border-darkmode-400 lg:flex-row">
                <div class="flex flex-1 items-center justify-center px-5 lg:justify-start">
                    <div class="image-fit relative h-20 w-20 flex-none sm:h-24 sm:w-24 lg:h-32 lg:w-32">
                        <img
                            class="rounded-full"
                            src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                            alt="Midone - Tailwind Admin Dashboard Template"
                        />
                    </div>
                    <div class="ml-5">
                        <div class="w-24 truncate text-lg font-medium sm:w-40 sm:whitespace-normal">
                            {{ $fakers[0]['users'][0]['name'] }}
                        </div>
                        <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                </div>
                <div
                    class="mt-6 flex-1 border-l border-r border-t border-slate-200/60 px-5 pt-5 dark:border-darkmode-400 lg:mt-0 lg:border-t-0 lg:pt-0">
                    <div class="text-center font-medium lg:mt-3 lg:text-left">
                        Contact Details
                    </div>
                    <div class="mt-4 flex flex-col items-center justify-center lg:items-start">
                        <div class="flex items-center truncate sm:whitespace-normal">
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="Mail"
                            />
                            {{ $fakers[0]['users'][0]['email'] }}
                        </div>
                        <div class="mt-3 flex items-center truncate sm:whitespace-normal">
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="Instagram"
                            /> Instagram
                            {{ $fakers[0]['users'][0]['name'] }}
                        </div>
                        <div class="mt-3 flex items-center truncate sm:whitespace-normal">
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="Twitter"
                            /> Twitter
                            {{ $fakers[0]['users'][0]['name'] }}
                        </div>
                    </div>
                </div>
                <div
                    class="mt-6 flex flex-1 items-center justify-center border-t border-slate-200/60 px-5 pt-5 dark:border-darkmode-400 lg:mt-0 lg:border-0 lg:pt-0">
                    <div class="w-20 rounded-md py-3 text-center">
                        <div class="text-xl font-medium text-primary">201</div>
                        <div class="text-slate-500">Orders</div>
                    </div>
                    <div class="w-20 rounded-md py-3 text-center">
                        <div class="text-xl font-medium text-primary">1k</div>
                        <div class="text-slate-500">Purchases</div>
                    </div>
                    <div class="w-20 rounded-md py-3 text-center">
                        <div class="text-xl font-medium text-primary">492</div>
                        <div class="text-slate-500">Reviews</div>
                    </div>
                </div>
            </div>
            <x-base.tab.list
                class="flex-col justify-center text-center sm:flex-row lg:justify-start"
                variant="link-tabs"
            >
                <x-base.tab
                    id="profile-tab"
                    :fullWidth="false"
                    selected
                >
                    <x-base.tab.button class="flex cursor-pointer items-center py-4">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="User"
                        /> Profile
                    </x-base.tab.button>
                </x-base.tab>
                <x-base.tab
                    id="account-tab"
                    :fullWidth="false"
                >
                    <x-base.tab.button class="flex cursor-pointer items-center py-4">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Shield"
                        /> Account
                    </x-base.tab.button>
                </x-base.tab>
                <x-base.tab
                    id="change-password-tab"
                    :fullWidth="false"
                >
                    <x-base.tab.button class="flex cursor-pointer items-center py-4">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Lock"
                        /> Change Password
                    </x-base.tab.button>
                </x-base.tab>
                <x-base.tab
                    id="settings-tab"
                    :fullWidth="false"
                >
                    <x-base.tab.button class="flex cursor-pointer items-center py-4">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Settings"
                        /> Settings
                    </x-base.tab.button>
                </x-base.tab>
            </x-base.tab.list>
        </div>
        <!-- END: Profile Info -->
        <x-base.tab.panels class="mt-5">
            <x-base.tab.panel selected>
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Latest Uploads -->
                    <div class="intro-y box col-span-12 lg:col-span-6">
                        <div
                            class="flex items-center border-b border-slate-200/60 px-5 py-5 dark:border-darkmode-400 sm:py-3">
                            <h2 class="mr-auto text-base font-medium">
                                Latest Uploads
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
                                    <x-base.menu.item>All Files</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.button
                                class="hidden sm:flex"
                                variant="outline-secondary"
                            >
                                All Files
                            </x-base.button>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center">
                                <x-base.file-icon
                                    class="file w-12"
                                    variant="directory"
                                />
                                <div class="ml-4">
                                    <a
                                        class="font-medium"
                                        href=""
                                    >
                                        Documentation
                                    </a>
                                    <div class="mt-0.5 text-xs text-slate-500">40 KB</div>
                                </div>
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
                                                icon="Users"
                                            /> Share
                                            File
                                        </x-base.menu.item>
                                        <x-base.menu.item>
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                            </div>
                            <div class="mt-5 flex items-center">
                                <x-base.file-icon
                                    class="file w-12 text-xs"
                                    type="MP3"
                                    variant="file"
                                />
                                <div class="ml-4">
                                    <a
                                        class="font-medium"
                                        href=""
                                    >
                                        Celine Dion - Ashes
                                    </a>
                                    <div class="mt-0.5 text-xs text-slate-500">40 KB</div>
                                </div>
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
                                                icon="Users"
                                            /> Share
                                            File
                                        </x-base.menu.item>
                                        <x-base.menu.item>
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                            </div>
                            <div class="mt-5 flex items-center">
                                <x-base.file-icon
                                    class="file w-12"
                                    variant="empty-directory"
                                />
                                <div class="ml-4">
                                    <a
                                        class="font-medium"
                                        href=""
                                    >
                                        Resources
                                    </a>
                                    <div class="mt-0.5 text-xs text-slate-500">0 KB</div>
                                </div>
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
                                                icon="Users"
                                            /> Share
                                            File
                                        </x-base.menu.item>
                                        <x-base.menu.item>
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Trash"
                                            />
                                            Delete
                                        </x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                            </div>
                        </div>
                    </div>
                    <!-- END: Latest Uploads -->
                    <!-- BEGIN: Work In Progress -->
                    <x-base.tab.group class="intro-y box col-span-12 lg:col-span-6">
                        <div
                            class="flex items-center border-b border-slate-200/60 px-5 py-5 dark:border-darkmode-400 sm:py-0">
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
                    <!-- BEGIN: Daily Sales -->
                    <div class="intro-y box col-span-12 lg:col-span-6">
                        <div
                            class="flex items-center border-b border-slate-200/60 px-5 py-5 dark:border-darkmode-400 sm:py-3">
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
                                /> Download
                                Excel
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
                    <!-- BEGIN: Latest Tasks -->
                    <x-base.tab.group class="intro-y box col-span-12 lg:col-span-6">
                        <div
                            class="flex items-center border-b border-slate-200/60 px-5 py-5 dark:border-darkmode-400 sm:py-0">
                            <h2 class="mr-auto text-base font-medium">
                                Latest Tasks
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
                                </x-base.tab.panel>
                            </x-base.tab.panels>
                        </div>
                    </x-base.tab.group>
                    <!-- END: Latest Tasks -->
                    <!-- BEGIN: New Products -->
                    <div class="intro-y box col-span-12">
                        <div class="flex items-center border-b border-slate-200/60 px-5 py-3 dark:border-darkmode-400">
                            <h2 class="mr-auto text-base font-medium">
                                New Products
                            </h2>
                            <x-base.button
                                class="tiny-slider-navigator mr-2 px-2"
                                data-carousel="new-products"
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
                                data-carousel="new-products"
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
                            id="new-products"
                        >
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="px-5">
                                    <div class="flex flex-col items-center pb-5 lg:flex-row">
                                        <div
                                            class="flex flex-col items-center border-slate-200/60 pr-5 dark:border-darkmode-400 sm:flex-row lg:border-r">
                                            <div class="sm:mr-5">
                                                <div class="image-fit h-20 w-20">
                                                    <img
                                                        class="rounded-full"
                                                        src="{{ Vite::asset($faker['images'][0]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mr-auto mt-3 text-center sm:mt-0 sm:text-left">
                                                <a
                                                    class="text-lg font-medium"
                                                    href=""
                                                >
                                                    {{ $faker['products'][0]['name'] }}
                                                </a>
                                                <div class="mt-1 text-slate-500 sm:mt-0">
                                                    {{ $faker['news'][0]['short_content'] }}
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mt-6 flex w-full flex-1 items-center justify-center border-t border-slate-200/60 px-5 pt-4 dark:border-darkmode-400 lg:mt-0 lg:w-auto lg:border-t-0 lg:pt-0">
                                            <div class="w-20 rounded-md py-3 text-center">
                                                <div class="text-xl font-medium text-primary">
                                                    {{ $faker['totals'][0] }}
                                                </div>
                                                <div class="text-slate-500">Orders</div>
                                            </div>
                                            <div class="w-20 rounded-md py-3 text-center">
                                                <div class="text-xl font-medium text-primary">
                                                    {{ $faker['totals'][1] }}k
                                                </div>
                                                <div class="text-slate-500">Purchases</div>
                                            </div>
                                            <div class="w-20 rounded-md py-3 text-center">
                                                <div class="text-xl font-medium text-primary">
                                                    {{ $faker['totals'][0] }}
                                                </div>
                                                <div class="text-slate-500">Reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-col items-center border-t border-slate-200/60 pt-5 dark:border-darkmode-400 sm:flex-row">
                                        <div
                                            class="flex w-full items-center justify-center border-b border-slate-200/60 pb-5 dark:border-darkmode-400 sm:w-auto sm:justify-start sm:border-b-0 sm:pb-0">
                                            <div
                                                class="mr-3 rounded bg-primary/10 px-3 py-2 font-medium text-primary dark:bg-darkmode-400 dark:text-slate-300">
                                                {{ $faker['dates'][0] }}
                                            </div>
                                            <div class="text-slate-500">
                                                Date of Release
                                            </div>
                                        </div>
                                        <div class="mt-5 flex sm:ml-auto sm:mt-0">
                                            <x-base.button
                                                class="ml-auto w-20"
                                                variant="secondary"
                                            >
                                                Preview
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-2 w-20"
                                                variant="secondary"
                                            >
                                                Details
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </x-base.tiny-slider>
                    </div>
                    <!-- END: New Products -->
                    <!-- BEGIN: New Authors -->
                    <div class="intro-y box col-span-12">
                        <div class="flex items-center border-b border-slate-200/60 px-5 py-3 dark:border-darkmode-400">
                            <h2 class="mr-auto text-base font-medium">New Authors</h2>
                            <x-base.button
                                class="tiny-slider-navigator mr-2 px-2"
                                data-carousel="new-authors"
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
                                data-carousel="new-authors"
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
                            id="new-authors"
                        >
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="px-5">
                                    <div class="flex flex-col items-center pb-5 lg:flex-row">
                                        <div
                                            class="flex flex-1 flex-col items-center border-slate-200/60 pr-5 dark:border-darkmode-400 sm:flex-row lg:border-r">
                                            <div class="sm:mr-5">
                                                <div class="image-fit h-20 w-20">
                                                    <img
                                                        class="rounded-full"
                                                        src="{{ Vite::asset($faker['photos'][0]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mr-auto mt-3 text-center sm:mt-0 sm:text-left">
                                                <a
                                                    class="text-lg font-medium"
                                                    href=""
                                                >
                                                    {{ $faker['users'][0]['name'] }}
                                                </a>
                                                <div class="mt-1 text-slate-500 sm:mt-0">
                                                    {{ $faker['jobs'][0] }}
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mt-6 flex w-full flex-1 flex-col items-center justify-center border-t border-slate-200/60 px-5 pt-4 dark:border-darkmode-400 lg:mt-0 lg:w-auto lg:items-start lg:border-t-0 lg:pt-0">
                                            <div class="flex items-center">
                                                <a
                                                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-full border text-slate-400"
                                                    href=""
                                                >
                                                    <x-base.lucide
                                                        class="h-3 w-3 fill-current"
                                                        icon="Facebook"
                                                    />
                                                </a>
                                                {{ $faker['users'][0]['email'] }}
                                            </div>
                                            <div class="mt-2 flex items-center">
                                                <a
                                                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-full border text-slate-400"
                                                    href=""
                                                >
                                                    <x-base.lucide
                                                        class="h-3 w-3 fill-current"
                                                        icon="Twitter"
                                                    />
                                                </a>
                                                {{ $faker['users'][0]['name'] }}
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-col items-center border-t border-slate-200/60 pt-5 dark:border-darkmode-400 sm:flex-row">
                                        <div
                                            class="flex w-full items-center justify-center border-b border-slate-200/60 pb-5 dark:border-darkmode-400 sm:w-auto sm:justify-start sm:border-b-0 sm:pb-0">
                                            <div
                                                class="mr-3 rounded bg-primary/10 px-3 py-2 font-medium text-primary dark:bg-darkmode-400 dark:text-slate-300">
                                                {{ $faker['dates'][0] }}
                                            </div>
                                            <div class="text-slate-500">Joined Date</div>
                                        </div>
                                        <div class="mt-5 flex sm:ml-auto sm:mt-0">
                                            <x-base.button
                                                class="ml-auto w-20"
                                                variant="secondary"
                                            >
                                                Message
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-2 w-20"
                                                variant="secondary"
                                            >
                                                Profile
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </x-base.tiny-slider>
                    </div>
                    <!-- END: New Authors -->
                </div>
            </x-base.tab.panel>
        </x-base.tab.panels>
    </x-base.tab.group>
@endsection
