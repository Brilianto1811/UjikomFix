@extends('../themes/base')

@section('head')
    <title>Register - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('content')
    <div @class([
        'p-3 sm:px-8 relative h-screen lg:overflow-hidden bg-primary xl:bg-white dark:bg-darkmode-800 xl:dark:bg-darkmode-600',
        'before:hidden before:xl:block before:content-[\'\'] before:w-[57%] before:-mt-[28%] before:-mb-[16%] before:-ml-[13%] before:absolute before:inset-y-0 before:left-0 before:transform before:rotate-[-4.5deg] before:bg-primary/20 before:rounded-[100%] before:dark:bg-darkmode-400',
        'after:hidden after:xl:block after:content-[\'\'] after:w-[57%] after:-mt-[20%] after:-mb-[13%] after:-ml-[13%] after:absolute after:inset-y-0 after:left-0 after:transform after:rotate-[-4.5deg] after:bg-primary after:rounded-[100%] after:dark:bg-darkmode-700',
    ])>
        <div class="container relative z-10 sm:px-10">
            <div class="block grid-cols-2 gap-4 xl:grid">
                <!-- BEGIN: Register Info -->
                <div class="hidden min-h-screen flex-col xl:flex">
                    <a
                        class="-intro-x flex items-center pt-5"
                        href=""
                    >
                        <img
                            class="w-6"
                            src="{{ Vite::asset('resources/images/logo.svg') }}"
                            alt="Midone - Tailwind Admin Dashboard Template"
                        />
                        <span class="ml-3 text-lg text-white"> Enigma </span>
                    </a>
                    <div class="my-auto">
                        <img
                            class="-intro-x -mt-16 w-1/2"
                            src="{{ Vite::asset('resources/images/illustration.svg') }}"
                            alt="Midone - Tailwind Admin Dashboard Template"
                        />
                        <div class="-intro-x mt-10 text-4xl font-medium leading-tight text-white">
                            A few more clicks to <br />
                            sign up to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">
                            Manage all your e-commerce accounts in one place
                        </div>
                    </div>
                </div>
                <!-- END: Register Info -->
                <!-- BEGIN: Register Form -->
                <div class="my-10 flex h-screen py-5 xl:my-0 xl:h-auto xl:py-0">
                    <div
                        class="mx-auto my-auto w-full rounded-md bg-white px-5 py-8 shadow-md dark:bg-darkmode-600 sm:w-3/4 sm:px-8 lg:w-2/4 xl:ml-20 xl:w-auto xl:bg-transparent xl:p-0 xl:shadow-none">
                        <h2 class="intro-x text-center text-2xl font-bold xl:text-left xl:text-3xl">
                            Sign Up
                        </h2>
                        <div class="intro-x mt-2 text-center text-slate-400 dark:text-slate-400 xl:hidden">
                            A few more clicks to sign in to your account. Manage all your
                            e-commerce accounts in one place
                        </div>
                        <div class="intro-x mt-8">
                            <x-base.form-input
                                class="intro-x block min-w-full px-4 py-3 xl:min-w-[350px]"
                                type="text"
                                placeholder="First Name"
                            />
                            <x-base.form-input
                                class="intro-x mt-4 block min-w-full px-4 py-3 xl:min-w-[350px]"
                                type="text"
                                placeholder="Last Name"
                            />
                            <x-base.form-input
                                class="intro-x mt-4 block min-w-full px-4 py-3 xl:min-w-[350px]"
                                type="text"
                                placeholder="Email"
                            />
                            <x-base.form-input
                                class="intro-x mt-4 block min-w-full px-4 py-3 xl:min-w-[350px]"
                                type="text"
                                placeholder="Password"
                            />
                            <div class="intro-x mt-3 grid h-1 w-full grid-cols-12 gap-4">
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                            </div>
                            <a
                                class="intro-x mt-2 block text-xs text-slate-500 sm:text-sm"
                                href=""
                            >
                                What is a secure password?
                            </a>
                            <x-base.form-input
                                class="intro-x mt-4 block min-w-full px-4 py-3 xl:min-w-[350px]"
                                type="text"
                                placeholder="Password Confirmation"
                            />
                        </div>
                        <div class="intro-x mt-4 flex items-center text-xs text-slate-600 dark:text-slate-500 sm:text-sm">
                            <x-base.form-check.input
                                class="mr-2 border"
                                id="remember-me"
                                type="checkbox"
                            />
                            <label
                                class="cursor-pointer select-none"
                                for="remember-me"
                            >
                                I agree to the Envato
                            </label>
                            <a
                                class="ml-1 text-primary dark:text-slate-200"
                                href=""
                            >
                                Privacy Policy
                            </a>
                            .
                        </div>
                        <div class="intro-x mt-5 text-center xl:mt-8 xl:text-left">
                            <x-base.button
                                class="w-full px-4 py-3 align-top xl:mr-3 xl:w-32"
                                variant="primary"
                            >
                                Register
                            </x-base.button>
                            <x-base.button
                                class="mt-3 w-full px-4 py-3 align-top xl:mt-0 xl:w-32"
                                variant="outline-secondary"
                            >
                                Sign in
                            </x-base.button>
                        </div>
                    </div>
                </div>
                <!-- END: Register Form -->
            </div>
        </div>
    </div>
@endsection
