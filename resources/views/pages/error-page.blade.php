@extends('../themes/base')

@section('head')
    <title>Error Page - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('content')
    <div class="bg-gradient-to-b from-theme-1 to-theme-2 py-2">
        <div class="container">
            <!-- BEGIN: Error Page -->
            <div class="error-page flex h-screen flex-col items-center justify-center text-center lg:flex-row lg:text-left">
                <div class="-intro-x lg:mr-20">
                    <img
                        class="h-48 w-[450px] lg:h-auto"
                        src="{{ Vite::asset('resources/images/error-illustration.svg') }}"
                        alt="Midone - Tailwind Admin Dashboard Template"
                    />
                </div>
                <div class="mt-10 text-white lg:mt-0">
                    <div class="intro-x text-8xl font-medium">404</div>
                    <div class="intro-x mt-5 text-xl font-medium lg:text-3xl">
                        Oops. This page has gone missing.
                    </div>
                    <div class="intro-x mt-3 text-lg">
                        You may have mistyped the address or the page may have moved.
                    </div>
                    <x-base.button
                        class="intro-x mt-10 border-white px-4 py-3 text-white dark:border-darkmode-400 dark:text-slate-200"
                    >
                        Back to Home
                    </x-base.button>
                </div>
            </div>
            <!-- END: Error Page -->
        </div>
    </div>
@endsection
