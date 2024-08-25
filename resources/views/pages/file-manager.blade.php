@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>File Manager - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
            <h2 class="intro-y mr-auto mt-2 text-lg font-medium">
                File Manager
            </h2>
            <!-- BEGIN: File Manager Menu -->
            <div class="intro-y box mt-6 p-5">
                <div class="mt-1">
                    <a
                        class="flex items-center rounded-md bg-primary px-3 py-2 font-medium text-white"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Image"
                        /> Images
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Video"
                        /> Videos
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="File"
                        /> Documents
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Users"
                        /> Shared
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
                <div class="mt-4 border-t border-slate-200 pt-4 dark:border-darkmode-400">
                    <a
                        class="flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                        Custom Work
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <div class="mr-3 h-2 w-2 rounded-full bg-success"></div>
                        Important Meetings
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                        Work
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                        Design
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <div class="mr-3 h-2 w-2 rounded-full bg-danger"></div>
                        Next Week
                    </a>
                    <a
                        class="mt-2 flex items-center rounded-md px-3 py-2"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Plus"
                        /> Add New Label
                    </a>
                </div>
            </div>
            <!-- END: File Manager Menu -->
        </div>
        <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
            <!-- BEGIN: File Manager Filter -->
            <div class="intro-y flex flex-col-reverse items-center sm:flex-row">
                <div class="relative mr-auto mt-3 w-full sm:mt-0 sm:w-auto">
                    <x-base.lucide
                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 text-slate-500"
                        icon="Search"
                    />
                    <x-base.form-input
                        class="!box w-full px-10 sm:w-64"
                        type="text"
                        placeholder="Search files"
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
                        <x-base.menu.items class="-ml-[228px] mt-2.5 w-[478px] pt-2">
                            <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-1"
                                    >
                                        File Name
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-1"
                                        type="text"
                                        placeholder="Type the file name"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-2"
                                    >
                                        Shared With
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
                                        Created At
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
                                        Size
                                    </x-base.form-label>
                                    <x-base.form-select
                                        class="flex-1"
                                        id="input-filter-4"
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
                        Upload New Files
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
                                    icon="File"
                                /> Share Files
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
            <!-- END: File Manager Filter -->
            <!-- BEGIN: Directory & Files -->
            <div class="intro-y mt-5 grid grid-cols-12 gap-3 sm:gap-6">
                @foreach ($fakers as $faker)
                    <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                        <div class="file box zoom-in relative rounded-md px-3 pb-5 pt-8 sm:px-5">
                            <div class="absolute left-0 top-0 ml-3 mt-3">
                                <x-base.form-check.input
                                    class="border"
                                    type="checkbox"
                                    checked="{{ $faker['true_false'][0] }}"
                                />
                            </div>
                            @if ($faker['files'][0]['type'] == 'Empty Folder')
                                <x-base.file-icon
                                    class="mx-auto w-3/5"
                                    variant="empty-directory"
                                />
                            @elseif ($faker['files'][0]['type'] == 'Folder')
                                <x-base.file-icon
                                    class="mx-auto w-3/5"
                                    variant="directory"
                                />
                            @elseif ($faker['files'][0]['type'] == 'Image')
                                <x-base.file-icon
                                    class="mx-auto w-3/5"
                                    src="{{ Vite::asset(strtolower($faker['files'][0]['file_name'])) }}"
                                    variant="image"
                                />
                            @else
                                <x-base.file-icon
                                    class="mx-auto w-3/5"
                                    type="{{ $faker['files'][0]['type'] }}"
                                    variant="file"
                                />
                            @endif
                            <a
                                class="mt-4 block truncate text-center font-medium"
                                href=""
                            >
                                {{ explode('/', $faker['files'][0]['file_name'])[count(explode('/', $faker['files'][0]['file_name'])) - 1] }}
                            </a>
                            <div class="mt-0.5 text-center text-xs text-slate-500">
                                {{ $faker['files'][0]['size'] }}
                            </div>
                            <x-base.menu class="absolute right-0 top-0 ml-auto mr-2 mt-3">
                                <x-base.menu.button
                                    class="block h-5 w-5"
                                    href="#"
                                    as="a"
                                >
                                    <x-base.lucide
                                        class="h-5 w-5 text-slate-500"
                                        icon="MoreVertical"
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
                                        /> Delete
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- END: Directory & Files -->
            <!-- BEGIN: Pagination -->
            <div class="intro-y mt-6 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
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
    </div>
@endsection
