@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Blog - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Blog Layout</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.button
                class="mr-2 shadow-md"
                variant="primary"
            >
                Add New Post
            </x-base.button>
            <x-base.menu class="ml-auto sm:ml-0">
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
                            icon="Share"
                        /> Share Post
                    </x-base.menu.item>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Download"
                        /> Download
                        Post
                    </x-base.menu.item>
                </x-base.menu.items>
            </x-base.menu>
        </div>
    </div>
    <div class="intro-y mt-5 grid grid-cols-12 gap-6">
        <!-- BEGIN: Blog Layout -->
        @foreach (array_slice($fakers, 0, 6) as $faker)
            <div class="intro-y box col-span-12 md:col-span-6">
                <div
                    class="image-fit h-[320px] before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-black/90 before:to-black/10">
                    <img
                        class="rounded-t-md"
                        src="{{ Vite::asset($faker['images'][0]) }}"
                        alt="Midone - Tailwind Admin Dashboard Template"
                    />
                    <div class="absolute z-10 flex w-full items-center px-5 pt-6">
                        <div class="image-fit h-10 w-10 flex-none">
                            <img
                                class="rounded-full"
                                src="{{ Vite::asset($faker['photos'][0]) }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                            />
                        </div>
                        <div class="ml-3 mr-auto text-white">
                            <a
                                class="font-medium"
                                href=""
                            >
                                {{ $faker['users'][0]['name'] }}
                            </a>
                            <div class="mt-0.5 text-xs">
                                {{ $faker['formatted_times'][0] }}
                            </div>
                        </div>
                        <x-base.menu class="ml-3">
                            <x-base.menu.button
                                class="flex h-8 w-8 items-center justify-center rounded-full bg-white/20"
                                href="#"
                                as="a"
                            >
                                <x-base.lucide
                                    class="h-4 w-4 text-white"
                                    icon="MoreVertical"
                                />
                            </x-base.menu.button>
                            <x-base.menu.items class="w-40">
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Edit"
                                    /> Edit Post
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Trash"
                                    /> Delete
                                    Post
                                </x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                    </div>
                    <div class="absolute bottom-0 z-10 px-5 pb-6 text-white">
                        <span class="rounded bg-white/20 px-2 py-1">
                            {{ $faker['products'][0]['category'] }}
                        </span>
                        <a
                            class="mt-3 block text-xl font-medium"
                            href=""
                        >
                            {{ $faker['news'][0]['title'] }}
                        </a>
                    </div>
                </div>
                <div class="p-5 text-slate-600 dark:text-slate-500">
                    {{ $faker['news'][0]['short_content'] }}
                </div>
                <div class="flex items-center border-t border-slate-200/60 px-5 py-3 dark:border-darkmode-400">
                    <x-base.tippy
                        class="intro-x mr-2 flex h-8 w-8 items-center justify-center rounded-full border border-slate-300 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300"
                        href=""
                        as="a"
                        content="Bookmark"
                    >
                        <x-base.lucide
                            class="h-3 w-3"
                            icon="Bookmark"
                        />
                    </x-base.tippy>
                    <div class="intro-x mr-2 flex">
                        <div class="intro-x image-fit h-8 w-8">
                            <x-base.tippy
                                class="zoom-in rounded-full border border-white"
                                src="{{ Vite::asset($faker['photos'][0]) }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                                as="img"
                                content="{{ $faker['users'][0]['name'] }}"
                            />
                        </div>
                        <div class="intro-x image-fit -ml-4 h-8 w-8">
                            <x-base.tippy
                                class="zoom-in rounded-full border border-white"
                                src="{{ Vite::asset($faker['photos'][1]) }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                                as="img"
                                content="{{ $faker['users'][1]['name'] }}"
                            />
                        </div>
                        <div class="intro-x image-fit -ml-4 h-8 w-8">
                            <x-base.tippy
                                class="zoom-in rounded-full border border-white"
                                src="{{ Vite::asset($faker['photos'][2]) }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                                as="img"
                                content="{{ $faker['users'][2]['name'] }}"
                            />
                        </div>
                    </div>
                    <x-base.tippy
                        class="intro-x ml-auto flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-darkmode-300 dark:text-slate-300"
                        href=""
                        as="a"
                        content="Share"
                    >
                        <x-base.lucide
                            class="h-3 w-3"
                            icon="Share"
                        />
                    </x-base.tippy>
                    <x-base.tippy
                        class="intro-x ml-2 flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white"
                        href=""
                        as="a"
                        content="Download PDF"
                    >
                        <x-base.lucide
                            class="h-3 w-3"
                            icon="Share"
                        />
                    </x-base.tippy>
                </div>
                <div class="border-t border-slate-200/60 px-5 pb-5 pt-3 dark:border-darkmode-400">
                    <div class="flex w-full text-xs text-slate-500 sm:text-sm">
                        <div class="mr-2">
                            Comments:
                            <span class="font-medium">{{ $faker['totals'][0] }}</span>
                        </div>
                        <div class="mr-2">
                            Views: <span class="font-medium">{{ $faker['totals'][1] }}k</span>
                        </div>
                        <div class="ml-auto">
                            Likes: <span class="font-medium">{{ $faker['totals'][2] }}k</span>
                        </div>
                    </div>
                    <div class="mt-3 flex w-full items-center">
                        <div class="image-fit mr-3 h-8 w-8 flex-none">
                            <img
                                class="rounded-full"
                                src="{{ Vite::asset($faker['photos'][0]) }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                            />
                        </div>
                        <div class="relative flex-1 text-slate-600 dark:text-slate-200">
                            <x-base.form-input
                                class="border-transparent bg-slate-100 pr-10"
                                type="text"
                                rounded
                                placeholder="Post a comment..."
                            />
                            <x-base.lucide
                                class="absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"
                                icon="Smile"
                            />
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagiantion -->
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
        <!-- END: Pagiantion -->
    </div>
@endsection
