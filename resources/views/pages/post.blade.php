@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Add New Post - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Add New Post</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.menu class="mr-2">
                <x-base.menu.button
                    class="!box flex items-center"
                    as="x-base.button"
                >
                    English
                    <x-base.lucide
                        class="ml-2 h-4 w-4"
                        icon="ChevronDown"
                    />
                </x-base.menu.button>
                <x-base.menu.items class="w-40">
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Activity"
                        />
                        <span class="truncate">English</span>
                    </x-base.menu.item>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Activity"
                        />
                        <span class="truncate">Indonesian</span>
                    </x-base.menu.item>
                </x-base.menu.items>
            </x-base.menu>
            <x-base.button
                class="!box ml-auto mr-2 flex items-center sm:ml-0"
                type="button"
            >
                <x-base.lucide
                    class="mr-2 h-4 w-4"
                    icon="Eye"
                /> Preview
            </x-base.button>
            <x-base.menu>
                <x-base.menu.button
                    class="flex items-center shadow-md"
                    as="x-base.button"
                    variant="primary"
                >
                    Save
                    <x-base.lucide
                        class="ml-2 h-4 w-4"
                        icon="ChevronDown"
                    />
                </x-base.menu.button>
                <x-base.menu.items class="w-40">
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="FileText"
                        /> As New Post
                    </x-base.menu.item>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="FileText"
                        /> As Draft
                    </x-base.menu.item>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="FileText"
                        /> Export to
                        PDF
                    </x-base.menu.item>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="FileText"
                        /> Export to
                        Word
                    </x-base.menu.item>
                </x-base.menu.items>
            </x-base.menu>
        </div>
    </div>
    <div class="intro-y mt-5 grid grid-cols-12 gap-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <x-base.form-input
                class="intro-y !box px-4 py-3 pr-10"
                type="text"
                placeholder="Title"
            />
            <x-base.tab.group class="intro-y box mt-5 overflow-hidden">
                <x-base.tab.list
                    class="flex-col border-transparent bg-slate-200 dark:border-transparent dark:bg-darkmode-800 sm:flex-row"
                >
                    <x-base.tab
                        id="content-tab"
                        :fullWidth="false"
                        selected
                    >

                        <x-base.tab.button
                            @class([
                                'flex items-center justify-center w-full px-0 py-0 sm:w-40 text-slate-500',
                                '[&:not(.active)]:hover:border-transparent [&:not(.active)]:hover:bg-transparent [&:not(.active)]:hover:text-slate-600 [&:not(.active)]:hover:dark:bg-transparent [&:not(.active)]:hover:dark:text-slate-300',
                                '[&.active]:text-primary [&.active]:border-transparent [&.active]:dark:bg-darkmode-600 [&.active]:dark:border-x-transparent [&.active]:dark:border-t-transparent [&.active]:dark:text-white',
                            ])
                            as="button"
                        >
                            <x-base.tippy
                                class="flex w-full items-center justify-center py-4"
                                aria-controls="content"
                                aria-selected="true"
                                content="Fill in the article content"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="FileText"
                                />
                                Content
                            </x-base.tippy>
                        </x-base.tab.button>

                    </x-base.tab>
                    <x-base.tab
                        id="meta-title-tab"
                        :fullWidth="false"
                    >

                        <x-base.tab.button
                            @class([
                                'flex items-center justify-center w-full px-0 py-0 sm:w-40 text-slate-500',
                                '[&:not(.active)]:hover:border-transparent [&:not(.active)]:hover:bg-transparent [&:not(.active)]:hover:text-slate-600 [&:not(.active)]:hover:dark:bg-transparent [&:not(.active)]:hover:dark:text-slate-300',
                                '[&.active]:text-primary [&.active]:border-transparent [&.active]:dark:bg-darkmode-600 [&.active]:dark:border-x-transparent [&.active]:dark:border-t-transparent [&.active]:dark:text-white',
                            ])
                            as="button"
                        >
                            <x-base.tippy
                                class="flex w-full items-center justify-center py-4"
                                aria-selected="false"
                                content="Adjust the meta title"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Code"
                                /> Meta Title
                            </x-base.tippy>
                        </x-base.tab.button>

                    </x-base.tab>
                    <x-base.tab
                        id="keywords-tab"
                        :fullWidth="false"
                    >

                        <x-base.tab.button
                            @class([
                                'flex items-center justify-center w-full px-0 py-0 sm:w-40 text-slate-500',
                                '[&:not(.active)]:hover:border-transparent [&:not(.active)]:hover:bg-transparent [&:not(.active)]:hover:text-slate-600 [&:not(.active)]:hover:dark:bg-transparent [&:not(.active)]:hover:dark:text-slate-300',
                                '[&.active]:text-primary [&.active]:border-transparent [&.active]:dark:bg-darkmode-600 [&.active]:dark:border-x-transparent [&.active]:dark:border-t-transparent [&.active]:dark:text-white',
                            ])
                            as="button"
                        >
                            <x-base.tippy
                                class="flex w-full items-center justify-center py-4"
                                aria-selected="false"
                                content="Use search keywords"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="AlignLeft"
                                />
                                Keywords
                            </x-base.tippy>
                        </x-base.tab.button>

                    </x-base.tab>
                </x-base.tab.list>
                <x-base.tab.panels>
                    <x-base.tab.panel
                        class="p-5"
                        id="content"
                        selected
                    >
                        <div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 font-medium dark:border-darkmode-400">
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="ChevronDown"
                                /> Text
                                Content
                            </div>
                            <div class="mt-5">
                                <x-base.classic-editor>
                                    <p>Content of the editor.</p>
                                </x-base.classic-editor>
                            </div>
                        </div>
                        <div class="mt-5 rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 font-medium dark:border-darkmode-400">
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="ChevronDown"
                                />
                                Caption & Images
                            </div>
                            <div class="mt-5">
                                <div>
                                    <x-base.form-label for="post-form-7">Caption</x-base.form-label>
                                    <x-base.form-input
                                        id="post-form-7"
                                        type="text"
                                        placeholder="Write caption"
                                    />
                                </div>
                                <div class="mt-3">
                                    <x-base.form-label>Upload Image</x-base.form-label>
                                    <div class="rounded-md border-2 border-dashed pt-4 dark:border-darkmode-400">
                                        <div class="flex flex-wrap px-4">
                                            @foreach (array_slice($fakers, 0, 4) as $faker)
                                                <div class="image-fit zoom-in relative mb-5 mr-5 h-24 w-24 cursor-pointer">
                                                    <img
                                                        class="rounded-md"
                                                        src="{{ Vite::asset($faker['images'][0]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                    <x-base.tippy
                                                        class="absolute right-0 top-0 -mr-2 -mt-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white"
                                                        as="div"
                                                        content="Remove this image?"
                                                    >
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="X"
                                                        />
                                                    </x-base.tippy>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="relative flex cursor-pointer items-center px-4 pb-4">
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="Image"
                                            />
                                            <span class="mr-1 text-primary">
                                                Upload a file
                                            </span>
                                            or drag and drop
                                            <x-base.form-input
                                                class="absolute left-0 top-0 h-full w-full opacity-0"
                                                type="file"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-base.tab.panel>
                </x-base.tab.panels>
            </x-base.tab.group>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y box p-5">
                <div>
                    <x-base.form-label>Written By</x-base.form-label>
                    <x-base.menu class="[&>div:nth-child(2)]:w-full">
                        <x-base.menu.button
                            class="flex w-full items-center justify-start dark:border-darkmode-800 dark:bg-darkmode-800"
                            role="button"
                            as="x-base.button"
                            variant="outline-secondary"
                        >
                            <div class="image-fit mr-3 h-6 w-6">
                                <img
                                    class="rounded"
                                    src="{{ Vite::asset($faker['photos'][0]) }}"
                                    alt="Midone - Tailwind Admin Dashboard Template"
                                />
                            </div>
                            <div class="truncate">{{ $fakers[0]['users'][0]['name'] }}</div>
                            <x-base.lucide
                                class="ml-auto h-4 w-4"
                                icon="ChevronDown"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items>
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <x-base.menu.item>
                                    <div class="image-fit absolute mr-3 h-6 w-6">
                                        <img
                                            class="rounded"
                                            src="{{ Vite::asset($faker['photos'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                    <div class="ml-8 pl-1">{{ $faker['users'][0]['name'] }}</div>
                                </x-base.menu.item>
                            @endforeach
                        </x-base.menu.items>
                    </x-base.menu>
                </div>
                <div class="mt-3">
                    <x-base.form-label for="post-form-2">Post Date</x-base.form-label>
                    <x-base.litepicker />
                </div>
                <div class="mt-3">
                    <x-base.form-label for="post-form-3">Categories</x-base.form-label>
                    <x-base.tom-select
                        class="w-full"
                        id="post-form-3"
                        multiple
                    >
                        <option
                            value="1"
                            selected
                        >Horror</option>
                        <option value="2">Sci-fi</option>
                        <option
                            value="3"
                            selected
                        >Action</option>
                        <option value="4">Drama</option>
                        <option value="5">Comedy</option>
                    </x-base.tom-select>
                </div>
                <div class="mt-3">
                    <x-base.form-label for="post-form-4">Tags</x-base.form-label>
                    <x-base.tom-select
                        class="w-full"
                        id="post-form-4"
                        multiple
                    >
                        <option
                            value="1"
                            selected
                        >Leonardo DiCaprio</option>
                        <option value="2">Johnny Deep</option>
                        <option
                            value="3"
                            selected
                        >Robert Downey, Jr</option>
                        <option value="4">Samuel L. Jackson</option>
                        <option value="5">Morgan Freeman</option>
                    </x-base.tom-select>
                </div>
                <x-base.form-switch class="mt-3 flex flex-col items-start">
                    <x-base.form-switch.label
                        class="mb-2 ml-0"
                        for="post-form-5"
                    >
                        Published
                    </x-base.form-switch.label>
                    <x-base.form-switch.input
                        id="post-form-5"
                        type="checkbox"
                    />
                </x-base.form-switch>
                <x-base.form-switch class="mt-3 flex flex-col items-start">
                    <x-base.form-switch.label
                        class="mb-2 ml-0"
                        for="post-form-6"
                    >
                        Show Author Name
                    </x-base.form-switch.label>
                    <x-base.form-switch.input
                        id="post-form-6"
                        type="checkbox"
                    />
                </x-base.form-switch>
            </div>
        </div>
        <!-- END: Post Info -->
    </div>
@endsection
