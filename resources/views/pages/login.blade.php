@extends('../themes/base')

@section('head')
    <title>Login - Desa Digital</title>
@endsection

@section('content')
    <section class="bg-center bg-no-repeat bg-blend-multiply h-screen"
        style="background-image: url('{{ Vite::asset('resources/images/wallpaper3.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div
            class="fixed inset-0 flex justify-center items-center bg-black/60 transition-[visibility,opacity] w-screen h-screen">
            <div class="flex items-center justify-center w-full h-full mx-4 md:mx-8 lg:mx-16">
                <div
                    class="mx-auto my-auto w-full max-w-lg rounded-md bg-white px-5 py-8 shadow-md dark:bg-darkmode-600 sm:w-3/4 sm:px-8 lg:w-2/4 xl:w-auto xl:bg-transparent xl:p-0 xl:shadow-none">
                    <h2 class="intro-y text-lg font-medium text-center py-2 bg-primary"
                        style="color: white; text-align: center; padding: 10px; border-radius: 5px;">
                        PENERIMAAN MAHASISWA BARU
                    </h2>
                    <x-base.preview-component class="intro-y box mt-3">
                        <div class="p-5">
                            <x-base.preview>
                                <h2 class="intro-y text-lg font-medium text-center py-2" style=" text-align: center;">
                                    LOGIN
                                </h2>
                                <form action="{{ route('login.user') }}" method="POST">
                                    @csrf
                                    <div class="intro-x mt-3">
                                        <x-base.form-label for="form-kec-register">Email</x-base.form-label>
                                        <x-base.form-input class="intro-x block w-full px-4 py-3" type="text"
                                            placeholder="Email" name="email_akun" required />
                                        <x-base.form-label for="form-kec-register"
                                            class="mt-3">Password</x-base.form-label>
                                        <x-base.form-input class="intro-x block w-full px-4 py-3" type="password"
                                            placeholder="Password" name="password" required />
                                    </div>
                                    <div class="flex justify-end mt-5 space-x-2">
                                        <x-base.button class="w-full px-4 py-3 text-white" size="md" variant="success"
                                            type="submit">
                                            Login
                                        </x-base.button>
                                    </div>
                                </form>
                            </x-base.preview>
                        </div>
                    </x-base.preview-component>
                </div>
            </div>
        </div>
    </section>
@endsection
