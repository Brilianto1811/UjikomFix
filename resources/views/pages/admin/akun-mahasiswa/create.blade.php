@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Tambah Data</title>
@endsection

@section('subcontent')
    <h2 class="intro-y mt-5 mb-5 text-lg font-medium text-center py-2 bg-primary"
        style="color: white; text-align: center; padding: 10px; border-radius: 5px;">
        TAMBAH DATA ADMIN AKUN MAHASISWA
    </h2>

    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">
        <form action="{{ route('akunmahasiswa.proses-add') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <!-- Nama -->
                <div>
                    <x-base.form-label for="crud-form-2">Nama</x-base.form-label>
                    <x-base.form-input class="w-full" id="crud-form-2" type="text" placeholder="Nama" name="nama_akun"
                        required />
                </div>

                <!-- Email -->
                <div>
                    <x-base.form-label for="crud-form-2">Email</x-base.form-label>
                    <x-base.form-input class="w-full" id="crud-form-2" type="text" placeholder="Email" name="email_akun"
                        required />
                </div>

                <!-- Password -->
                <div>
                    <x-base.form-label for="crud-form-2">Password</x-base.form-label>
                    <x-base.form-input class="w-full" id="crud-form-2" type="password" placeholder="Password"
                        name="password" required />
                </div>
            </div>
            <div class="mt-5 text-right">
                <x-base.button class="mr-1 w-24" type="button" variant="soft-dark" as="a"
                    href="{{ route('akunmahasiswa.index') }}">
                    Kembali
                </x-base.button>
                <x-base.button class="w-24 text-white" type="submit" variant="success">
                    Simpan
                </x-base.button>
            </div>
        </form>
    </div>
    <!-- END: Form Layout -->
    </div>
@endsection
