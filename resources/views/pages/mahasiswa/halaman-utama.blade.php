@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Halaman Utama</title>
@endsection

@section('subcontent')
    <div class="mt-3 text-center">
        <x-base.button as="a" href="{{ route('halamandaftar.index') }}" class="mr-2 shadow-md text-white"
            variant="success">
            PENDAFTARAN MAHASISWA BARU
        </x-base.button>
    </div>
    <img src="{{ Vite::asset('resources/images/gambar1.png') }}" alt="Gambar 1"
        style="width: 100%; height: auto; margin-top: 20px; border-radius: 15px;">
    <img src="{{ Vite::asset('resources/images/gambar2.png') }}" alt="Gambar 2"
        style="width: 100%; height: auto; margin-top: 20px; border-radius: 15px;">
@endsection
