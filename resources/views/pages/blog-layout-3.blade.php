@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Blog - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y box mt-8 p-5 xl:w-3/5">
        <!-- BEGIN: Blog Layout -->
        <h2 class="intro-y text-xl font-medium sm:text-2xl">
            {{ $fakers[0]['news'][0]['title'] }}
        </h2>
        <div class="intro-y mt-3 text-xs text-slate-600 dark:text-slate-500 sm:text-sm">
            {{ $fakers[0]['dates'][0] }} <span class="mx-1">•</span>
            <a
                class="text-primary"
                href=""
            >
                {{ $fakers[0]['products'][0]['category'] }}
            </a>
            <span class="mx-1">•</span> 7 Min read
        </div>
        <div class="intro-y mt-6">
            <div class="image-fit h-[250px] md:h-[400px]">
                <img
                    class="rounded-md"
                    src="{{ Vite::asset($fakers[0]['images'][0]) }}"
                    alt="Midone - Tailwind Admin Dashboard Template"
                />
            </div>
        </div>
        <div class="intro-y relative flex items-center pb-6 pt-16 sm:pt-6">
            <x-base.tippy
                class="intro-x mr-2 flex h-8 w-8 flex-none items-center justify-center rounded-full border border-slate-300 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 sm:h-10 sm:w-10"
                href=""
                as="a"
                content="Bookmark"
            >
                <x-base.lucide
                    class="h-3 w-3"
                    icon="Bookmark"
                />
            </x-base.tippy>
            <div class="intro-x mr-3 flex">
                <div class="intro-x image-fit h-8 w-8 sm:h-10 sm:w-10">
                    <x-base.tippy
                        class="zoom-in rounded-full border border-white"
                        src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                        alt="Midone - Tailwind Admin Dashboard Template"
                        as="img"
                        content="{{ $fakers[0]['users'][0]['name'] }}"
                    />
                </div>
                <div class="intro-x image-fit -ml-4 h-8 w-8 sm:h-10 sm:w-10">
                    <x-base.tippy
                        class="zoom-in rounded-full border border-white"
                        src="{{ Vite::asset($fakers[0]['photos'][1]) }}"
                        alt="Midone - Tailwind Admin Dashboard Template"
                        as="img"
                        content="{{ $fakers[0]['users'][1]['name'] }}"
                    />
                </div>
                <div class="intro-x image-fit -ml-4 h-8 w-8 sm:h-10 sm:w-10">
                    <x-base.tippy
                        class="zoom-in rounded-full border border-white"
                        src="{{ Vite::asset($fakers[0]['photos'][2]) }}"
                        alt="Midone - Tailwind Admin Dashboard Template"
                        as="img"
                        content="{{ $fakers[0]['users'][2]['name'] }}"
                    />
                </div>
            </div>
            <div
                class="absolute -mt-12 flex w-full text-xs text-slate-600 dark:text-slate-500 sm:relative sm:mt-0 sm:text-sm">
                <div class="intro-x mr-1 sm:mr-3">
                    Comments:
                    <span class="font-medium">{{ $fakers[0]['totals'][0] }}</span>
                </div>
                <div class="intro-x mr-1 sm:mr-3">
                    Views:
                    <span class="font-medium">{{ $fakers[0]['totals'][1] }}k</span>
                </div>
                <div class="intro-x ml-auto sm:mr-3">
                    Likes:
                    <span class="font-medium">{{ $fakers[0]['totals'][2] }}k</span>
                </div>
            </div>
            <x-base.tippy
                class="intro-x ml-auto flex h-8 w-8 flex-none items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-darkmode-300 dark:text-slate-300 sm:ml-0 sm:h-10 sm:w-10"
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
                class="intro-x ml-2 flex h-8 w-8 flex-none items-center justify-center rounded-full bg-primary text-white sm:h-10 sm:w-10"
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
        <div class="intro-y text-justify indent-[30px] leading-relaxed">
            <p class="mb-5">{{ $fakers[1]['news'][0]['content'] }}</p>
            <p class="mb-5">{{ $fakers[2]['news'][0]['content'] }}</p>
            <p>{{ $fakers[3]['news'][0]['content'] }}</p>
        </div>
        <div
            class="intro-y mt-5 flex flex-col items-center border-t border-slate-200/60 pt-5 text-xs dark:border-darkmode-400 sm:flex-row sm:text-sm">
            <div class="flex items-center">
                <div class="image-fit h-12 w-12 flex-none">
                    <img
                        class="rounded-full"
                        src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                        alt="Midone - Tailwind Admin Dashboard Template"
                    />
                </div>
                <div class="ml-3 mr-auto">
                    <a
                        class="font-medium"
                        href=""
                    >
                        {{ $fakers[0]['users'][0]['name'] }}
                    </a>
                    , Author
                    <div class="text-slate-500">Senior Frontend Engineer</div>
                </div>
            </div>
            <div class="mt-5 flex items-center text-slate-600 dark:text-slate-500 sm:ml-auto sm:mt-0">
                Share this post:
                <x-base.tippy
                    class="zoom-in ml-2 flex h-8 w-8 items-center justify-center rounded-full border text-slate-400 dark:border-darkmode-400 sm:h-10 sm:w-10"
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
                    class="zoom-in ml-2 flex h-8 w-8 items-center justify-center rounded-full border text-slate-400 dark:border-darkmode-400 sm:h-10 sm:w-10"
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
                    class="zoom-in ml-2 flex h-8 w-8 items-center justify-center rounded-full border text-slate-400 dark:border-darkmode-400 sm:h-10 sm:w-10"
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
        <!-- END: Blog Layout -->
        <!-- BEGIN: Comments -->
        <div class="intro-y mt-5 border-t border-slate-200/60 pt-5 dark:border-darkmode-400">
            <div class="text-base font-medium sm:text-lg">2 Responses</div>
            <div class="news__input relative mt-5 h-[69px]">
                <x-base.lucide
                    class="absolute inset-y-0 left-0 my-auto ml-6 h-5 w-5 text-slate-500"
                    icon="MessageCircle"
                />
                <x-base.form-textarea
                    class="resize-none border-transparent bg-slate-100 py-6 pl-16"
                    rows="1"
                    placeholder="Post a comment..."
                ></x-base.form-textarea>
            </div>
        </div>
        <div class="intro-y mt-5 pb-10">
            <div class="pt-5">
                <div class="flex">
                    <div class="image-fit h-10 w-10 flex-none sm:h-12 sm:w-12">
                        <img
                            class="rounded-full"
                            src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                            alt="Midone - Tailwind Admin Dashboard Template"
                        />
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex items-center">
                            <a
                                class="font-medium"
                                href=""
                            >
                                {{ $fakers[0]['users'][0]['name'] }}
                            </a>
                            <a
                                class="ml-auto text-xs text-slate-500"
                                href=""
                            >
                                Reply
                            </a>
                        </div>
                        <div class="text-xs text-slate-500 sm:text-sm">
                            {{ $fakers[0]['formatted_times'][0] }}
                        </div>
                        <div class="mt-2">{{ $fakers[0]['news'][0]['short_content'] }}</div>
                    </div>
                </div>
            </div>
            <div class="mt-5 border-t border-slate-200/60 pt-5 dark:border-darkmode-400">
                <div class="flex">
                    <div class="image-fit h-10 w-10 flex-none sm:h-12 sm:w-12">
                        <img
                            class="rounded-full"
                            src="{{ Vite::asset($fakers[0]['photos'][1]) }}"
                            alt="Midone - Tailwind Admin Dashboard Template"
                        />
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex items-center">
                            <a
                                class="font-medium"
                                href=""
                            >
                                {{ $fakers[0]['users'][1]['name'] }}
                            </a>
                            <a
                                class="ml-auto text-xs text-slate-500"
                                href=""
                            >
                                Reply
                            </a>
                        </div>
                        <div class="text-xs text-slate-500 sm:text-sm">
                            {{ $fakers[1]['formatted_times'][0] }}
                        </div>
                        <div class="mt-2">{{ $fakers[1]['news'][0]['short_content'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Comments -->
    </div>
@endsection
