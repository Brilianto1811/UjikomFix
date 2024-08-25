@php
    use App\Models\AppMdDesauser;

    $user = null;
    if (Auth::guard('admin')->check()) {
        $user = Auth::guard('admin')->user();
    } elseif (Auth::guard('mahasiswa')->check()) {
        $user = Auth::guard('mahasiswa')->user();
    }

@endphp
<!-- BEGIN: Top Bar -->
<div class="relative z-[51] flex h-[67px] items-center border-b border-slate-200">
    <!-- BEGIN: Breadcrumb -->
    <x-base.breadcrumb class="-intro-x mr-auto hidden sm:flex">
        <span>
            Halo {{ $user->nama_akun }}, Selamat Datang di Website Penerimaan Mahasiswa Baru
        </span>
    </x-base.breadcrumb>

    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->
    <div class="search intro-x relative mr-3 sm:mr-6">
        {{-- <div class="relative hidden sm:block">
            <x-base.form-input
                class="w-56 rounded-full border-transparent bg-slate-300/50 pr-8 shadow-none transition-[width] duration-300 ease-in-out focus:w-72 focus:border-transparent dark:bg-darkmode-400/70"
                type="text" placeholder="Search..." />
            <x-base.lucide class="absolute inset-y-0 right-0 my-auto mr-3 h-5 w-5 text-slate-600 dark:text-slate-500"
                icon="Search" />
        </div> --}}
        <a class="relative text-slate-600 sm:hidden" href="">
            <x-base.lucide class="h-5 w-5 dark:text-slate-500" icon="Search" />
        </a>
        <x-base.transition class="search-result absolute right-0 z-10 mt-[3px] hidden" selector=".show"
            enter="transition-all ease-linear duration-150" enterFrom="mt-5 invisible opacity-0 translate-y-1"
            enterTo="mt-[3px] visible opacity-100 translate-y-0" leave="transition-all ease-linear duration-150"
            leaveFrom="mt-[3px] visible opacity-100 translate-y-0" leaveTo="mt-5 invisible opacity-0 translate-y-1">
            <div class="box w-[450px] p-5">
                <div class="mb-2 font-medium">Pages</div>
                <div class="mb-5">
                    <a class="flex items-center" href="">
                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-success/20 text-success dark:bg-success/10">
                            <x-base.lucide class="h-4 w-4" icon="Inbox" />
                        </div>
                        <div class="ml-3">Mail Settings</div>
                    </a>
                    <a class="mt-2 flex items-center" href="">
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-pending/10 text-pending">
                            <x-base.lucide class="h-4 w-4" icon="Users" />
                        </div>
                        <div class="ml-3">Users & Permissions</div>
                    </a>
                    <a class="mt-2 flex items-center" href="">
                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary/80 dark:bg-primary/20">
                            <x-base.lucide class="h-4 w-4" icon="CreditCard" />
                        </div>
                        <div class="ml-3">Transactions Report</div>
                    </a>
                </div>
                <div class="mb-2 font-medium">Users</div>
                <div class="mb-5">
                    @foreach (array_slice($fakers, 0, 4) as $faker)
                        <a class="mt-2 flex items-center" href="">
                            <div class="image-fit h-8 w-8">
                                <img class="rounded-full" src="{{ Vite::asset($faker['photos'][0]) }}"
                                    alt="Midone - Tailwind Admin Dashboard Template" />
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
                    <a class="mt-2 flex items-center" href="">
                        <div class="image-fit h-8 w-8">
                            <img class="rounded-full" src="{{ Vite::asset($faker['images'][0]) }}"
                                alt="Midone - Tailwind Admin Dashboard Template" />
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
    <!-- END: Search  -->
    <!-- BEGIN: Account Menu -->
    <x-base.menu>
        <x-base.menu.button class="image-fit zoom-in intro-x block h-8 w-8 overflow-hidden rounded-full shadow-lg">
            <img src="{{ Vite::asset('resources/images/profile.png') }}"
                alt="Midone - Tailwind Admin Dashboard Template" />
        </x-base.menu.button>
        <x-base.menu.items class="mt-px w-56 bg-theme-1 text-white">
            <x-base.menu.header class="font-normal">
                <div class="font-medium">{{ $user->nama_akun }}</div>
            </x-base.menu.header>
            <x-base.menu.divider class="bg-white/[0.08]" />
            <x-base.menu.item class="hover:bg-white/5" data-tw-merge data-tw-toggle="modal"
                data-tw-target="#delete-modal-preview">
                <x-base.lucide class="mr-2 h-4 w-4" icon="ToggleRight" />
                Logout
            </x-base.menu.item>
        </x-base.menu.items>
    </x-base.menu>
    <!-- END: Account Menu -->
</div>
<!-- END: Top Bar -->

<!-- BEGIN: Modal Content -->
<div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="delete-modal-preview"
    class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
    <div data-tw-merge
        class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
        <div class="p-5 text-center">
            <div class="mt-5 text-3xl">Apakah Anda Yakin ingin Logout?</div>
        </div>
        <div class="px-5 pb-8 text-center flex justify-center space-x-2">
            <x-base.button data-tw-dismiss="modal"
                class="transition duration-200 shadow-sm flex items-center justify-center w-full px-4 py-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10"
                variant="soft-dark" type="button">
                Kembali
            </x-base.button>
            <x-base.button as="a" data-tw-merge href="{{ route('logout') }}"
                class="transition duration-200 shadow-sm flex items-center justify-center px-4 py-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed w-full"
                variant="danger" type="button">
                Logout
            </x-base.button>
        </div>
    </div>
</div>
<!-- END: Modal Content -->

@pushOnce('scripts')
    @vite('resources/js/components/themes/rubick/top-bar.js')
@endPushOnce
