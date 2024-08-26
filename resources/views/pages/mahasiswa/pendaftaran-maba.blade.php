@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Pendaftaran</title>
@endsection

@section('subcontent')
    <h2 class="intro-y mt-5 mb-5 text-lg font-medium text-center py-2 bg-primary"
        style="color: white; text-align: center; padding: 10px; border-radius: 5px;">
        ISIAN FORM PENDAFTARAN MAHASISWA BARU
    </h2>

    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">
        <form action="{{ route('halamandaftar.proses-edit') }}" method="POST" id="formMahasiswabaru"
            enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <!-- Nama -->
                <div>
                    <x-base.form-label for="crud-form-2">Nama Lengkap (Sesuai ijazah disertai
                        gelar)</x-base.form-label>
                    <x-base.form-input class="w-full" id="crud-form-2" type="text" placeholder="Nama" name="nama_akun"
                        value="{{ $halamandaftarShowEdit->nama_akun ?? '-' }}" required />
                    <p id="namaMahasiswaError" class="text-red-500 text-sm hidden">Nama Mahasiswa harus diisi!</p>
                </div>

                <!-- Alamat KTP -->
                <div>
                    <x-base.form-label for="crud-form-2">Alamat KTP</x-base.form-label>
                    <x-base.form-textarea class="w-full" id="crud-form-2" placeholder="Alamat KTP" name="alamatktp_akun"
                        required>{{ $halamandaftarShowEdit->alamatktp_akun ?? '-' }}</x-base.form-textarea>

                </div>

                <!-- Alamat Domisili -->
                <div>
                    <x-base.form-label for="crud-form-2">Alamat Lengkap Saat Ini</x-base.form-label>
                    <x-base.form-textarea class="w-full" id="crud-form-2" placeholder="Alamat Domisili"
                        name="alamatdomisili_akun"
                        required>{{ $halamandaftarShowEdit->alamatdomisili_akun ?? '-' }}</x-base.form-textarea>

                </div>

                <!-- Provinsi -->
                <div>
                    <x-base.form-label for="form-prov">Provinsi</x-base.form-label>
                    <x-base.form-select id="form-prov" name="id_provinsi" required>
                        <option value="" disabled selected>--Pilih Provinsi--</option>
                        @foreach ($dataProv as $data)
                            <option value="{{ $data->id_provinsi }}"
                                {{ optional($halamandaftarShowEdit)->id_provinsi == $data->id_provinsi ? 'selected' : '' }}>
                                {{ $data->nama_provinsi }}
                            </option>
                        @endforeach
                    </x-base.form-select>
                </div>


                <!-- Kota/Kabupaten -->
                <div>
                    <x-base.form-label for="form-kabkot">Kota/Kabupaten</x-base.form-label>
                    <x-base.form-select id="form-kabkot" name="id_kabkot" required>
                        <option value="" disabled selected>--Pilih Kota/Kabupaten--</option>
                        @foreach ($dataKabkot as $data)
                            <option data-provinsi-id="{{ $data->id_provinsi }}" value="{{ $data->id_kabkot }}"
                                {{ optional($halamandaftarShowEdit)->id_kabkot == $data->id_kabkot ? 'selected' : '' }}>
                                {{ $data->nama_kabkot }}
                            </option>
                        @endforeach
                    </x-base.form-select>
                </div>


                <!-- Kecamatan -->
                <div>
                    <x-base.form-label for="form-kec">Kecamatan</x-base.form-label>
                    <x-base.form-input class="w-full" id="crud-form-2" type="text" placeholder="Kecamatan"
                        name="nama_kecamatan" value="{{ $halamandaftarShowEdit->nama_kecamatan ?? '-' }}" required />
                </div>


                <!-- No Telp -->
                <div>
                    <x-base.form-label for="crud-form-2">No Telp</x-base.form-label>
                    <x-base.form-input class="w-full" id="crud-form-2" type="number" placeholder="No Telp"
                        name="nomortelepon_akun" value="{{ $halamandaftarShowEdit->nomortelepon_akun ?? '-' }}" required />
                </div>

                <!-- No Hp -->
                <div>
                    <x-base.form-label for="crud-form-2">No Hp</x-base.form-label>
                    <x-base.form-input class="w-full" id="crud-form-2" type="number" placeholder="No Hp"
                        name="nomorhp_akun" value="{{ $halamandaftarShowEdit->nomorhp_akun ?? '-' }}" required />
                </div>

                <!-- Email -->
                <div>
                    <x-base.form-label for="crud-form-2">Email</x-base.form-label>
                    <x-base.form-input class="w-full" id="crud-form-2" type="email" placeholder="Email" name="email_akun"
                        value="{{ $halamandaftarShowEdit->email_akun ?? '-' }}" required />
                </div>

                <div class="mb-4">
                    <x-base.form-label for="kewarganegaraan"><strong>Kewarganegaraan</strong></x-base.form-label>
                    <small style="color: red;">*</small>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" name="kewarganegaraan_akun" value="WNI Asli"
                                @if (optional($halamandaftarShowEdit)->kewarganegaraan_akun == 'WNI Asli') checked @endif required>
                            <span class="ml-2">WNI Asli</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" name="kewarganegaraan_akun" value="WNI Keturunan"
                                @if (optional($halamandaftarShowEdit)->kewarganegaraan_akun == 'WNI Keturunan') checked @endif required>
                            <span class="ml-2">WNI Keturunan</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" name="kewarganegaraan_akun" value="WNA" id="wnaRadio"
                                @if (optional($halamandaftarShowEdit)->kewarganegaraan_akun == 'WNA') checked @endif required>
                            <span class="ml-2">WNA</span>
                        </label>
                    </div>
                    <p id="kewarganegaraanError" class="text-red-500 text-sm hidden">Kewarganegaraan harus diisi!</p>
                </div>

                <div class="mb-4" id="negaraDiv" style="display: none;">
                    <x-base.form-label for="negara"><strong>Negara</strong></x-base.form-label>
                    <x-base.form-input class="w-full" id="negara" type="text" placeholder="Masukkan Negara"
                        name="wna" value="{{ $halamandaftarShowEdit->wna_akun ?? '' }}" />
                    <p id="negaraError" class="text-red-500 text-sm hidden">Negara harus diisi jika WNA dipilih!</p>
                </div>

                <div>
                    <x-base.form-label for="tanggalLahir"><strong>Tanggal Lahir Sesuai Ijazah</strong></x-base.form-label>
                    <small style="color: red;">*</small>
                    <x-base.litepicker data-single-mode="true" class="w-full" id="tanggalLahir"
                        placeholder="Pilih Tanggal Lahir" name="tanggallahir_akun"
                        value="{{ $halamandaftarShowEdit->tanggallahir_akun ?? '' }}" required />
                    <p id="tanggalLahirError" class="text-red-500 text-sm hidden">Tanggal Lahir harus diisi!</p>
                </div>

                <div>
                    <x-base.form-label for="tempatLahirMahasiswa"><strong>Tempat Lahir Sesuai
                            Ijazah</strong></x-base.form-label>
                    <small style="color: red;">*</small>
                    <x-base.form-input class="w-full" id="tempatLahirMahasiswa" type="text"
                        placeholder="Masukkan Tempat Lahir" name="tempatlahir_akun"
                        value="{{ $halamandaftarShowEdit->tempatlahir_akun ?? '' }}" required />
                    <p id="tempatLahirMahasiswaError" class="text-red-500 text-sm hidden">Tempat Lahir harus diisi!</p>
                </div>

                <div>
                    <x-base.form-label for="provinsilahir"><strong>Provinsi Lahir</strong></x-base.form-label>
                    <small style="color: red;">*</small>
                    <x-base.form-select id="form-prov" name="provinsilahir_akun" required>
                        <option value="" disabled selected>--Pilih Provinsi--</option>
                        @foreach ($dataProv as $data)
                            <option value="{{ $data->id_provinsi }}"
                                {{ optional($halamandaftarShowEdit)->id_provinsi == $data->id_provinsi ? 'selected' : '' }}>
                                {{ $data->nama_provinsi }}
                            </option>
                        @endforeach
                    </x-base.form-select>
                    <p id="provinsilahirError" class="text-red-500 text-sm hidden">Provinsi Lahir harus diisi!</p>
                </div>


                <div>
                    <x-base.form-label for="KabKotLahir"><strong>Kabkot Lahir</strong></x-base.form-label>
                    <small style="color: red;">*</small>
                    <x-base.form-select id="form-kabkot" name="kabkotlahir_akun" required>
                        <option value="" disabled selected>--Pilih Kota/Kabupaten--</option>
                        @foreach ($dataKabkot as $data)
                            <option data-provinsi-id="{{ $data->id_provinsi }}" value="{{ $data->id_kabkot }}"
                                {{ optional($halamandaftarShowEdit)->id_kabkot == $data->id_kabkot ? 'selected' : '' }}>
                                {{ $data->nama_kabkot }}
                            </option>
                        @endforeach
                    </x-base.form-select>
                    <p id="KabKotLahirError" class="text-red-500 text-sm hidden">Kabkot Lahir harus diisi!</p>
                </div>


                <div>
                    <x-base.form-label for="wnaLahir"><strong>Isi Jika Lahir Di Luar Negeri</strong></x-base.form-label>
                    <x-base.form-input class="w-full" id="wnaLahir" type="text"
                        placeholder="Masukkan Negara Tempat Lahir" name="luarlahir_akun"
                        value="{{ $halamandaftarShowEdit->luarlahir_akun ?? '' }}" />
                    <p id="wnaLahirError" class="text-red-500 text-sm hidden">Tempat Lahir harus diisi!</p>
                </div>

                <div>
                    <x-base.form-label for="jenisKelamin"><strong>Jenis Kelamin</strong></x-base.form-label>
                    <small style="color: red;">*</small>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" id="pria" name="jk_akun" value="Pria"
                                {{ isset($halamandaftarShowEdit->jk_akun) && $halamandaftarShowEdit->jk_akun == 'Pria' ? 'checked' : '' }}>
                            <span class="ml-2">Pria</span>
                        </label>
                        <label class="inline-flex items-center ml-4">
                            <input type="radio" id="wanita" name="jk_akun" value="Wanita"
                                {{ isset($halamandaftarShowEdit->jk_akun) && $halamandaftarShowEdit->jk_akun == 'Wanita' ? 'checked' : '' }}>
                            <span class="ml-2">Wanita</span>
                        </label>
                    </div>
                    <p id="jenisKelaminError" class="text-red-500 text-sm hidden">Jenis Kelamin harus diisi!</p>
                </div>

                <div>
                    <x-base.form-label for="statusnikah"><strong>Status Nikah</strong></x-base.form-label>
                    <small style="color: red;">*</small>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" id="Belum Menikah" name="statusnikah_akun" value="Belum Menikah"
                                {{ isset($halamandaftarShowEdit->statusnikah_akun) && $halamandaftarShowEdit->statusnikah_akun == 'Belum Menikah' ? 'checked' : '' }}>
                            <span class="ml-2">Belum Menikah</span>
                        </label>
                        <label class="inline-flex items-center ml-4">
                            <input type="radio" id="Menikah" name="statusnikah_akun" value="Menikah"
                                {{ isset($halamandaftarShowEdit->statusnikah_akun) && $halamandaftarShowEdit->statusnikah_akun == 'Menikah' ? 'checked' : '' }}>
                            <span class="ml-2">Menikah</span>
                        </label>
                        <label class="inline-flex items-center ml-4">
                            <input type="radio" id="Lain-lain (Janda/Duda)" name="statusnikah_akun"
                                value="Lain-lain (Janda/Duda)"
                                {{ isset($halamandaftarShowEdit->statusnikah_akun) && $halamandaftarShowEdit->statusnikah_akun == 'Lain-lain (Janda/Duda)' ? 'checked' : '' }}>
                            <span class="ml-2">Lain-lain (Janda/Duda)</span>
                        </label>
                    </div>
                    <p id="statusnikahError" class="text-red-500 text-sm hidden">Jenis Kelamin harus diisi!</p>
                </div>

                <div>
                    <x-base.form-label for="agamaMahasiswa"><strong>Agama</strong></x-base.form-label>
                    <small style="color: red;">*</small>
                    <x-base.form-select class="w-full" id="agamaMahasiswa" name="id_agama" required>
                        <option value="">Pilih Agama</option>
                        @foreach ($dataAgama as $agama)
                            <option value="{{ $agama->id_agama }}"
                                {{ optional($halamandaftarShowEdit)->id_agama == $agama->id_agama ? 'selected' : '' }}>
                                {{ $agama->nama_agama }}
                            </option>
                        @endforeach
                    </x-base.form-select>
                    <p id="agamaMahasiswaError" class="text-red-500 text-sm hidden">Agama harus diisi!</p>
                </div>

            </div>
            <div class="mt-5 text-right">
                <x-base.button class="mr-1 w-24" type="button" variant="soft-dark" as="a"
                    href="{{ route('pendaftaranmahasiswa.index') }}">
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
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                function handleChangeProvinsi(provinsiID) {
                    $('#form-kabkot option').hide(); // Hide all kabkot options
                    $('#form-kec option').hide(); // Hide all kecamatan options
                    if (provinsiID) {
                        // Show only the kabkot options with the selected provinsiID
                        $('#form-kabkot option[data-provinsi-id="' + provinsiID + '"]').show();
                    }
                }

                function handleChangeKabkot(kabkotID) {
                    $('#form-kec option').hide(); // Hide all kecamatan options
                    if (kabkotID) {
                        // Show only the kecamatan options with the selected kabkotID
                        $('#form-kec option[data-kabkot-id="' + kabkotID + '"]').show();
                    }
                }

                // Event listener for the Provinsi dropdown
                $('#form-prov').on('change', function() {
                    const selectedProvinsiID = $(this).val();
                    handleChangeProvinsi(selectedProvinsiID);
                });

                // Event listener for the Kabkot dropdown
                $('#form-kabkot').on('change', function() {
                    const selectedKabkotID = $(this).val();
                    handleChangeKabkot(selectedKabkotID);
                });

                // Initial setup - hide all kabkot and kec options
                $('#form-kabkot option').hide();
                $('#form-kec option').hide();
            });

            $(document).ready(function() {
                function handleChangeProvinsiLahir(provinsiID) {
                    $('#form-kabkot-lahir option').hide(); // Hide all kabkot options
                    $('#form-kec-lahir option').hide(); // Hide all kecamatan options
                    if (provinsiID) {
                        // Show only the kabkot options with the selected provinsiID
                        $('#form-kabkot-lahir option[data-provinsi-id="' + provinsiID + '"]').show();
                    }
                }

                function handleChangeKabkotLahir(kabkotID) {
                    $('#form-kec-lahir option').hide(); // Hide all kecamatan options
                    if (kabkotID) {
                        // Show only the kecamatan options with the selected kabkotID
                        $('#form-kec-lahir option[data-kabkot-id="' + kabkotID + '"]').show();
                    }
                }

                // Event listener for the Provinsi dropdown
                $('#form-prov-lahir').on('change', function() {
                    const selectedProvinsiID = $(this).val();
                    handleChangeProvinsiLahir(selectedProvinsiID);
                });

                // Event listener for the Kabkot dropdown
                $('#form-kabkot-lahir').on('change', function() {
                    const selectedKabkotID = $(this).val();
                    handleChangeKabkotLahir(selectedKabkotID);
                });

                // Initial setup - hide all kabkot and kec options
                $('#form-kabkot-lahir option').hide();
                $('#form-kec-lahir option').hide();
            });

            document.addEventListener('DOMContentLoaded', function() {
                const wnaRadio = document.getElementById('wnaRadio');
                const negaraDiv = document.getElementById('negaraDiv');

                // Show the Negara input if WNA is already selected
                if (wnaRadio.checked) {
                    negaraDiv.style.display = 'block';
                }

                document.querySelectorAll('input[name="kewarganegaraan_akun"]').forEach(function(radio) {
                    radio.addEventListener('change', function() {
                        if (wnaRadio.checked) {
                            negaraDiv.style.display = 'block';
                        } else {
                            negaraDiv.style.display = 'none';
                            document.getElementById('negara').value =
                                ''; // Clear the Negara input if WNA is deselected
                        }
                    });
                });
            });

            document.querySelector('form').addEventListener('submit', function(event) {
                let valid = true;

                // Check if all fields are filled
                if (!document.getElementById('namaMahasiswa').value) {
                    document.getElementById('namaMahasiswaError').classList.remove('hidden');
                    valid = false;
                } else {
                    document.getElementById('namaMahasiswaError').classList.add('hidden');
                }

                if (!document.getElementById('emailMahasiswa').value) {
                    document.getElementById('emailMahasiswaError').classList.remove('hidden');
                    valid = false;
                } else {
                    document.getElementById('emailMahasiswaError').classList.add('hidden');
                }

                if (!document.getElementById('passwordMahasiswa').value) {
                    document.getElementById('passwordMahasiswaError').classList.remove('hidden');
                    valid = false;
                } else {
                    document.getElementById('passwordMahasiswaError').classList.add('hidden');
                }

                // Email validation
                const email = document.getElementById('emailMahasiswa').value;
                const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if (!emailPattern.test(email)) {
                    document.getElementById('emailMahasiswaError').classList.remove('hidden');
                    valid = false;
                } else {
                    document.getElementById('emailMahasiswaError').classList.add('hidden');
                }

                if (!valid) {
                    event.preventDefault();
                }
            });
        </script>
    @endpush
@endsection
