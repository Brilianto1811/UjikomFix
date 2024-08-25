@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('head')
    <title>Landing Page - Manajemen Web</title>
@endsection

@section('custom-style')
    <style>
        @keyframes slideDown {
            0% {
                transform: translateY(-50%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-sliding-down {
            animation: slideDown 0.5s ease-out forwards;
        }
    </style>
@endsection

@section('content')
    <section class="bg-center bg-no-repeat bg-dark bg-blend-multiply h-screen"
        style="background-image: url('{{ Vite::asset('resources/images/monitoring.gif') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56 animate-sliding-down">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Manajemen
                Web</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">E-ticketing dan monitoring
                aplikasi dan layanan pemerintah Kabupaten Bogor.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                {{-- <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900" variant="">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a> --}}
                <x-base.button class="w-full md:w-1/6 px-4 py-3 align-top xl:mr-3" variant="primary" type="submit"
                    as="a" href="{{ route('login') }}">
                    LOGIN
                </x-base.button>
                <a href="{{ route('webPublic') }}"
                    class="w-full md:w-1/6 inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Web Kabupaten Bogor
                </a>
            </div>
        </div>
    </section>
@endsection
