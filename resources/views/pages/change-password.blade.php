@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Update Profile - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Change Password</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 flex flex-col-reverse lg:col-span-4 lg:block 2xl:col-span-3">
            <div class="intro-y box mt-5">
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
                            <x-base.menu.header> Export Options</x-base.menu.header>
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
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Change Password -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">Change Password</h2>
                </div>
                <div class="p-5">
                    <div>
                        <x-base.form-label for="change-password-form-1">
                            Old Password
                        </x-base.form-label>
                        <x-base.form-input
                            id="change-password-form-1"
                            type="password"
                            placeholder="Input text"
                        />
                    </div>
                    <div class="mt-3">
                        <x-base.form-label for="change-password-form-2">
                            New Password
                        </x-base.form-label>
                        <x-base.form-input
                            id="change-password-form-2"
                            type="password"
                            placeholder="Input text"
                        />
                    </div>
                    <div class="mt-3">
                        <x-base.form-label for="change-password-form-3">
                            Confirm New Password
                        </x-base.form-label>
                        <x-base.form-input
                            id="change-password-form-3"
                            type="password"
                            placeholder="Input text"
                        />
                    </div>
                    <x-base.button
                        class="mt-4"
                        type="button"
                        variant="primary"
                    >
                        Change Password
                    </x-base.button>
                </div>
            </div>
            <!-- END: Change Password -->
        </div>
    </div>
@endsection
