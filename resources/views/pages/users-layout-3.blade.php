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
        @foreach (array_slice($fakers, 0, 9) as $faker)
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                <div class="box">
                    <div class="flex items-start px-5 pt-5">
                        <div class="flex w-full flex-col items-center lg:flex-row">
                            <div class="image-fit h-16 w-16">
                                <img
                                    class="rounded-full"
                                    src="{{ Vite::asset($faker['photos'][0]) }}"
                                    alt="Midone - Tailwind Admin Dashboard Template"
                                />
                            </div>
                            <div class="mt-3 text-center lg:ml-4 lg:mt-0 lg:text-left">
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
                        </div>
                        <x-base.menu class="absolute right-0 top-0 mr-5 mt-3">
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
                                    /> Edit
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
                    <div class="p-5 text-center lg:text-left">
                        <div>{{ $faker['news'][0]['short_content'] }}</div>
                        <div class="mt-5 flex items-center justify-center text-slate-500 lg:justify-start">
                            <x-base.lucide
                                class="mr-2 h-3 w-3"
                                icon="Mail"
                            />
                            {{ $faker['users'][0]['email'] }}
                        </div>
                        <div class="mt-1 flex items-center justify-center text-slate-500 lg:justify-start">
                            <x-base.lucide
                                class="mr-2 h-3 w-3"
                                icon="Instagram"
                            />
                            {{ $faker['users'][0]['name'] }}
                        </div>
                    </div>
                    <div class="border-t border-slate-200/60 p-5 text-center dark:border-darkmode-400 lg:text-right">
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
