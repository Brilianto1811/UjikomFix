@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Inbox - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
            <h2 class="intro-y mr-auto mt-2 text-lg font-medium">Inbox</h2>
            <!-- BEGIN: Inbox Menu -->
            <div class="intro-y box mt-6 bg-primary p-5">
                <x-base.button
                    class="mt-1 w-full bg-white text-slate-600 dark:border-darkmode-300 dark:bg-darkmode-300 dark:text-slate-300"
                    type="button"
                >
                    <x-base.lucide
                        class="mr-2 h-4 w-4"
                        icon="Edit"
                    /> Compose
                </x-base.button>
                <div class="mt-6 border-t border-white/10 pt-6 text-white dark:border-darkmode-400">
                    <a
                        class="flex items-center rounded-md bg-white/10 px-3 py-2 font-medium dark:bg-darkmode-700"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Mail"
                        /> Inbox
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Star"
                        /> Marked
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Inbox"
                        /> Draft
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Send"
                        /> Sent
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Trash"
                        /> Trash
                    </a>
                </div>
                <div class="mt-4 border-t border-white/10 pt-4 text-white dark:border-darkmode-400">
                    <a
                        class="flex items-center truncate px-3 py-2"
                        href=""
                    >
                        <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                        Custom Work
                    </a>
                    <a
                        class="mt-2 flex items-center truncate rounded-md px-3 py-2"
                        href=""
                    >
                        <div class="mr-3 h-2 w-2 rounded-full bg-success"></div>
                        Important Meetings
                    </a>
                    <a
                        class="mt-2 flex items-center truncate rounded-md px-3 py-2"
                        href=""
                    >
                        <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                        Work
                    </a>
                    <a
                        class="mt-2 flex items-center truncate rounded-md px-3 py-2"
                        href=""
                    >
                        <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                        Design
                    </a>
                    <a
                        class="mt-2 flex items-center truncate rounded-md px-3 py-2"
                        href=""
                    >
                        <div class="mr-3 h-2 w-2 rounded-full bg-danger"></div>
                        Next Week
                    </a>
                    <a
                        class="mt-2 flex items-center truncate rounded-md px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Plus"
                        /> Add New Label
                    </a>
                </div>
            </div>
            <!-- END: Inbox Menu -->
        </div>
        <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
            <!-- BEGIN: Inbox Filter -->
            <div class="intro-y flex flex-col-reverse items-center sm:flex-row">
                <div class="relative mr-auto mt-3 w-full sm:mt-0 sm:w-auto">
                    <x-base.lucide
                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 text-slate-500"
                        icon="Search"
                    />
                    <x-base.form-input
                        class="!box w-full px-10 sm:w-64"
                        type="text"
                        placeholder="Search mail"
                    />
                    <x-base.menu
                        class="absolute inset-y-0 right-0 mr-3 flex items-center"
                        placement="bottom-start"
                    >
                        <x-base.menu.button
                            class="block h-4 w-4"
                            href="#"
                            role="button"
                            as="a"
                        >
                            <x-base.lucide
                                class="h-4 w-4 cursor-pointer text-slate-500"
                                icon="ChevronDown"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="!-ml-[228px] mt-2.5 w-[478px] pt-2">
                            <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-1"
                                    >
                                        From
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-1"
                                        type="text"
                                        placeholder="example@gmail.com"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-2"
                                    >
                                        To
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-2"
                                        type="text"
                                        placeholder="example@gmail.com"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-3"
                                    >
                                        Subject
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-3"
                                        type="text"
                                        placeholder="Important Meeting"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-4"
                                    >
                                        Has the Words
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-4"
                                        type="text"
                                        placeholder="Job, Work, Documentation"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-5"
                                    >
                                        Doesn't Have
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-5"
                                        type="text"
                                        placeholder="Job, Work, Documentation"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-6"
                                    >
                                        Size
                                    </x-base.form-label>
                                    <x-base.form-select
                                        class="flex-1"
                                        id="input-filter-6"
                                    >
                                        <option>10</option>
                                        <option>25</option>
                                        <option>35</option>
                                        <option>50</option>
                                    </x-base.form-select>
                                </div>
                                <div class="col-span-12 mt-3 flex items-center">
                                    <x-base.button
                                        class="ml-auto w-32"
                                        variant="secondary"
                                    >
                                        Create Filter
                                    </x-base.button>
                                    <x-base.button
                                        class="ml-2 w-32"
                                        variant="primary"
                                    >
                                        Search
                                    </x-base.button>
                                </div>
                            </div>
                        </x-base.menu.items>
                    </x-base.menu>
                </div>
                <div class="flex w-full sm:w-auto">
                    <x-base.button
                        class="mr-2 shadow-md"
                        variant="primary"
                    >
                        Start a Video Call
                    </x-base.button>
                    <x-base.menu>
                        <x-base.menu.button
                            class="box px-2"
                            as="x-base.button"
                        >
                            <span class="flex h-5 w-5 items-center justify-center">
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="Plus"
                                />
                            </span>
                        </x-base.menu.button>
                        <x-base.menu.items class="w-40">
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="User"
                                /> Contacts
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Settings"
                                /> Settings
                            </x-base.menu.item>
                        </x-base.menu.items>
                    </x-base.menu>
                </div>
            </div>
            <!-- END: Inbox Filter -->
            <!-- BEGIN: Inbox Content -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col-reverse border-b border-slate-200/60 p-5 text-slate-500 sm:flex-row">
                    <div
                        class="-mx-5 mt-3 flex items-center border-t border-slate-200/60 px-5 pt-5 sm:mx-0 sm:mt-0 sm:border-0 sm:px-0 sm:pt-0">
                        <x-base.form-check.input
                            class="border-slate-400 checked:border-primary"
                            type="checkbox"
                        />
                        <x-base.menu
                            class="ml-1"
                            placement="bottom-start"
                        >
                            <x-base.menu.button
                                class="block h-5 w-5"
                                href="#"
                            >
                                <x-base.lucide
                                    class="h-5 w-5"
                                    icon="ChevronDown"
                                />
                            </x-base.menu.button>
                            <x-base.menu.items class="w-32 text-slate-800 dark:text-slate-300">
                                <x-base.menu.item>All</x-base.menu.item>
                                <x-base.menu.item>None</x-base.menu.item>
                                <x-base.menu.item>Read</x-base.menu.item>
                                <x-base.menu.item>Unread</x-base.menu.item>
                                <x-base.menu.item>Starred</x-base.menu.item>
                                <x-base.menu.item>Unstarred</x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                        <a
                            class="ml-5 flex h-5 w-5 items-center justify-center"
                            href="#"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="RefreshCw"
                            />
                        </a>
                        <a
                            class="ml-5 flex h-5 w-5 items-center justify-center"
                            href="#"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="MoreHorizontal"
                            />
                        </a>
                    </div>
                    <div class="flex items-center sm:ml-auto">
                        <div class="">1 - 50 of 5,238</div>
                        <a
                            class="ml-5 flex h-5 w-5 items-center justify-center"
                            href="#"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="ChevronLeft"
                            />
                        </a>
                        <a
                            class="ml-5 flex h-5 w-5 items-center justify-center"
                            href="#"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="ChevronRight"
                            />
                        </a>
                        <a
                            class="ml-5 flex h-5 w-5 items-center justify-center"
                            href="#"
                        >
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="Settings"
                            />
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto sm:overflow-x-visible">
                    @foreach ($fakers as $faker)
                        <div class="intro-y">
                            <div @class([
                                'transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400',
                                'hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded',
                                'bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70' => !$faker[
                                    'true_false'
                                ][0],
                                'bg-white text-slate-800 dark:text-slate-300 dark:bg-darkmode-600' =>
                                    $faker['true_false'][0],
                            ])>
                                <div class="flex px-5 py-3">
                                    <div class="mr-5 flex w-72 flex-none items-center">
                                        <x-base.form-check.input
                                            class="flex-none border-slate-400 checked:border-primary"
                                            type="checkbox"
                                            checked="{{ $faker['true_false'][0] }}"
                                        />
                                        <a
                                            class="ml-4 flex h-5 w-5 flex-none items-center justify-center text-slate-400"
                                            href="#"
                                        >
                                            <x-base.lucide
                                                class="h-4 w-4"
                                                icon="Star"
                                            />
                                        </a>
                                        <a
                                            class="ml-2 flex h-5 w-5 flex-none items-center justify-center text-slate-400"
                                            href="#"
                                        >
                                            <x-base.lucide
                                                class="h-4 w-4"
                                                icon="Bookmark"
                                            />
                                        </a>
                                        <div class="image-fit relative ml-5 h-6 w-6 flex-none">
                                            <img
                                                class="rounded-full"
                                                src="{{ Vite::asset($faker['photos'][0]) }}"
                                                alt="Midone - Tailwind Admin Dashboard Template"
                                            />
                                        </div>
                                        <div @class(['ml-3 truncate', 'font-medium' => $faker['true_false'][0]])>
                                            {{ $faker['users'][0]['name'] }}
                                        </div>
                                    </div>
                                    <div class="w-64 truncate sm:w-auto">
                                        <span @class(['ml-3 truncate', 'font-medium' => $faker['true_false'][0]])>
                                            {{ $faker['news'][0]['super_short_content'] }}
                                        </span>
                                        {{ $faker['news'][0]['short_content'] }}
                                    </div>
                                    <div @class([
                                        'pl-10 ml-auto whitespace-nowrap',
                                        'font-medium' => $faker['true_false'][0],
                                    ])>
                                        {{ $faker['times'][0] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-col items-center p-5 text-center text-slate-500 sm:flex-row sm:text-left">
                    <div>4.41 GB (25%) of 17 GB used Manage</div>
                    <div class="mt-2 sm:ml-auto sm:mt-0">
                        Last account activity: 36 minutes ago
                    </div>
                </div>
            </div>
            <!-- END: Inbox Content -->
        </div>
    </div>
@endsection
