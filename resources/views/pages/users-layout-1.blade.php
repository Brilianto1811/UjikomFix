@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Users Layout - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <h2 class="intro-y mt-10 text-lg font-medium">Users Layout</h2>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
            <x-base.button
                class="mr-2 shadow-md"
                variant="primary"
            >
                Add New User
            </x-base.button>
            <x-base.menu>
                <x-base.menu.button
                    class="!box px-2"
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
                            icon="Users"
                        /> Add Group
                    </x-base.menu.item>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="MessageCircle"
                        /> Send
                        Message
                    </x-base.menu.item>
                </x-base.menu.items>
            </x-base.menu>
            <div class="mx-auto hidden text-slate-500 md:block">
                Showing 1 to 10 of 150 entries
            </div>
            <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                <div class="relative w-56 text-slate-500">
                    <x-base.form-input
                        class="!box w-56 pr-10"
                        type="text"
                        placeholder="Search..."
                    />
                    <x-base.lucide
                        class="absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"
                        icon="Search"
                    />
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        @foreach (array_slice($fakers, 0, 10) as $faker)
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div
                        class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 lg:flex-row">
                        <div class="image-fit h-24 w-24 lg:mr-1 lg:h-12 lg:w-12">
                            <img
                                class="rounded-full"
                                src="{{ Vite::asset($faker['photos'][0]) }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                            />
                        </div>
                        <div class="mt-3 text-center lg:ml-2 lg:mr-auto lg:mt-0 lg:text-left">
                            <a
                                class="font-medium"
                                href=""
                            >
                                {{ $faker['users'][0]['name'] }}
                            </a>
                            <div class="mt-0.5 text-xs text-slate-500">
                                {{ $faker['jobs'][0] }}
                            </div>
                        </div>
                        <div class="-ml-2 mt-3 flex lg:ml-0 lg:mt-0 lg:justify-end">
                            <x-base.tippy
                                class="zoom-in ml-2 flex h-8 w-8 items-center justify-center rounded-full border text-slate-400 dark:border-darkmode-400"
                                href=""
                                as="a"
                                content="Facebook"
                            >
                                <x-base.lucide
                                    class="h-3 w-3 fill-current"
                                    icon="Facebook"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="zoom-in ml-2 flex h-8 w-8 items-center justify-center rounded-full border text-slate-400 dark:border-darkmode-400"
                                href=""
                                as="a"
                                content="Twitter"
                            >
                                <x-base.lucide
                                    class="h-3 w-3 fill-current"
                                    icon="Twitter"
                                />
                            </x-base.tippy>
                            <x-base.tippy
                                class="zoom-in ml-2 flex h-8 w-8 items-center justify-center rounded-full border text-slate-400 dark:border-darkmode-400"
                                href=""
                                as="a"
                                content="Linked In"
                            >
                                <x-base.lucide
                                    class="h-3 w-3 fill-current"
                                    icon="Linkedin"
                                />
                            </x-base.tippy>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-center p-5 lg:flex-nowrap">
                        <div class="mb-4 mr-auto w-full lg:mb-0 lg:w-1/2">
                            <div class="flex text-xs text-slate-500">
                                <div class="mr-auto">Progress</div>
                                <div>20%</div>
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
                        <x-base.button
                            class="mr-2 px-2 py-1"
                            variant="primary"
                        >
                            Message
                        </x-base.button>
                        <x-base.button
                            class="px-2 py-1"
                            variant="outline-secondary"
                        >
                            Profile
                        </x-base.button>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Users Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
            <x-base.pagination class="w-full sm:mr-auto sm:w-auto">
                <x-base.pagination.link>
                    <x-base.lucide
                        class="h-4 w-4"
                        icon="ChevronsLeft"
                    />
                </x-base.pagination.link>
                <x-base.pagination.link>
                    <x-base.lucide
                        class="h-4 w-4"
                        icon="ChevronLeft"
                    />
                </x-base.pagination.link>
                <x-base.pagination.link>...</x-base.pagination.link>
                <x-base.pagination.link>1</x-base.pagination.link>
                <x-base.pagination.link active>2</x-base.pagination.link>
                <x-base.pagination.link>3</x-base.pagination.link>
                <x-base.pagination.link>...</x-base.pagination.link>
                <x-base.pagination.link>
                    <x-base.lucide
                        class="h-4 w-4"
                        icon="ChevronRight"
                    />
                </x-base.pagination.link>
                <x-base.pagination.link>
                    <x-base.lucide
                        class="h-4 w-4"
                        icon="ChevronsRight"
                    />
                </x-base.pagination.link>
            </x-base.pagination>
            <x-base.form-select class="!box mt-3 w-20 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </x-base.form-select>
        </div>
        <!-- END: Pagination -->
    </div>
@endsection
