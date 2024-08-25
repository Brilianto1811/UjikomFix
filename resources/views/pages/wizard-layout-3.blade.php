@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Wizard - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="intro-y mr-auto text-lg font-medium">Wizard Layout</h2>
    </div>
    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y box mt-5 py-10 sm:py-20">
        <div
            class="relative flex flex-col justify-center px-5 before:absolute before:bottom-0 before:top-0 before:mt-4 before:hidden before:h-[3px] before:w-[69%] before:bg-slate-100 before:dark:bg-darkmode-400 sm:px-20 lg:flex-row before:lg:block">
            <div class="intro-x z-10 flex flex-1 items-center lg:block lg:text-center">
                <x-base.button
                    class="h-10 w-10 rounded-full"
                    variant="primary"
                >
                    1
                </x-base.button>
                <div class="ml-3 text-base font-medium lg:mx-auto lg:mt-3 lg:w-32">
                    Create New Account
                </div>
            </div>
            <div class="intro-x z-10 mt-5 flex flex-1 items-center lg:mt-0 lg:block lg:text-center">
                <x-base.button
                    class="h-10 w-10 rounded-full bg-slate-100 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400"
                >
                    2
                </x-base.button>
                <div class="ml-3 text-base text-slate-600 dark:text-slate-400 lg:mx-auto lg:mt-3 lg:w-32">
                    Setup Your Profile
                </div>
            </div>
            <div class="intro-x z-10 mt-5 flex flex-1 items-center lg:mt-0 lg:block lg:text-center">
                <x-base.button
                    class="h-10 w-10 rounded-full bg-slate-100 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400"
                >
                    3
                </x-base.button>
                <div class="ml-3 text-base text-slate-600 dark:text-slate-400 lg:mx-auto lg:mt-3 lg:w-32">
                    Setup Your Business Details
                </div>
            </div>
            <div class="intro-x z-10 mt-5 flex flex-1 items-center lg:mt-0 lg:block lg:text-center">
                <x-base.button
                    class="h-10 w-10 rounded-full bg-slate-100 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400"
                >
                    4
                </x-base.button>
                <div class="ml-3 text-base text-slate-600 dark:text-slate-400 lg:mx-auto lg:mt-3 lg:w-32">
                    Setup Billing Account
                </div>
            </div>
            <div class="intro-x z-10 mt-5 flex flex-1 items-center lg:mt-0 lg:block lg:text-center">
                <x-base.button
                    class="h-10 w-10 rounded-full bg-slate-100 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400"
                >
                    5
                </x-base.button>
                <div class="ml-3 text-base text-slate-600 dark:text-slate-400 lg:mx-auto lg:mt-3 lg:w-32">
                    Finalize your purchase
                </div>
            </div>
        </div>
        <div class="mt-10 border-t border-slate-200/60 px-5 pt-10 dark:border-darkmode-400 sm:px-20">
            <div class="text-base font-medium">Profile Settings</div>
            <div class="mt-5 grid grid-cols-12 gap-4 gap-y-5">
                <div class="intro-y col-span-12 sm:col-span-6">
                    <x-base.form-label for="input-wizard-1">From</x-base.form-label>
                    <x-base.form-input
                        id="input-wizard-1"
                        type="text"
                        placeholder="example@gmail.com"
                    />
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <x-base.form-label for="input-wizard-2">To</x-base.form-label>
                    <x-base.form-input
                        id="input-wizard-2"
                        type="text"
                        placeholder="example@gmail.com"
                    />
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <x-base.form-label for="input-wizard-3">Subject</x-base.form-label>
                    <x-base.form-input
                        id="input-wizard-3"
                        type="text"
                        placeholder="Important Meeting"
                    />
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <x-base.form-label for="input-wizard-4">Has the Words</x-base.form-label>
                    <x-base.form-input
                        id="input-wizard-4"
                        type="text"
                        placeholder="Job, Work, Documentation"
                    />
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <x-base.form-label for="input-wizard-5">Doesn't Have</x-base.form-label>
                    <x-base.form-input
                        id="input-wizard-5"
                        type="text"
                        placeholder="Job, Work, Documentation"
                    />
                </div>
                <div class="intro-y col-span-12 sm:col-span-6">
                    <x-base.form-label for="input-wizard-6">Size</x-base.form-label>
                    <x-base.form-select id="input-wizard-6">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </x-base.form-select>
                </div>
                <div class="intro-y col-span-12 mt-5 flex items-center justify-center sm:justify-end">
                    <x-base.button
                        class="w-24"
                        variant="secondary"
                    >
                        Previous
                    </x-base.button>
                    <x-base.button
                        class="ml-2 w-24"
                        variant="primary"
                    >
                        Next
                    </x-base.button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Wizard Layout -->
@endsection
