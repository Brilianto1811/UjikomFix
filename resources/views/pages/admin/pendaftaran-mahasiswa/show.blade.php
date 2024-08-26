@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Detail Pendaftaran Mahasiswa</title>
@endsection

@section('subcontent')
    <h2 class="intro-y mt-5 mb-5 text-lg font-medium text-center py-2 bg-primary"
        style="color: white; text-align: center; padding: 10px; border-radius: 5px;">
        DETAIL PENDAFTARAN MAHASISWA
    </h2>

    <!-- BEGIN: Table Layout -->
    <div class="intro-y box p-5">
        <x-base.button class="mr-1 w-24 text-white " type="button" variant="success" onclick="printTable()">
            Print
        </x-base.button>
        <x-base.table id="printhere" class="to-print" striped class="border border-gray-300 mt-3">
            <x-base.table.tbody>
                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Nama
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->nama_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Alamat KTP
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->alamatktp_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Alamat Domisili
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->alamatdomisili_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Provinsi
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->nama_provinsi ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Kota/Kabupaten
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->nama_kabkot ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Kecamatan
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->nama_kecamatan ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        No Telp
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->nomortelepon_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        No Hp
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->nomorhp_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Email
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->email_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Kewarganegaraan
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->kewarganegaraan_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        WNA
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->wna ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Tanggal Lahir
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->tanggallahir_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Tempat Lahir
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->tempatlahir_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Provinsi Lahir
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->nama_provinsi ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Kota/Kabupaten Lahir
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->nama_kabkot ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        WNA Lahir
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->luarlahir_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Jenis Kelamin
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->jk_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Status Nikah
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->statusnikah_akun ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>

                <x-base.table.tr>
                    <x-base.table.td class="whitespace-nowrap">
                        Agama
                    </x-base.table.td>
                    <x-base.table.td class="whitespace-nowrap">
                        {{ $pendaftaranmahasiswaShowDetail->id_agama ?? '-' }}
                    </x-base.table.td>
                </x-base.table.tr>
            </x-base.table.tbody>
        </x-base.table>

        <div class="mt-5 text-right">
            <x-base.button class="mr-1 w-24" type="button" variant="soft-dark" as="a"
                href="{{ route('pendaftaranmahasiswa.index') }}">
                Kembali
            </x-base.button>

        </div>
    </div>
    <!-- END: Table Layout -->
@endsection

<script>
    function printTable() {
        // Ambil elemen tabel
        var tableContent = document.querySelector('#printhere').innerHTML;
        console.log(tableContent, 'tableContent')
        // var tableContent = document.querySelector('.intro-y.box.p-5').innerHTML;

        // Buat jendela baru untuk mencetak
        var printWindow = window.open('', '', 'height=500,width=800');
        printWindow.document.write('<html><head><title>Print Table</title>');
        printWindow.document.write(
            `<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">`
        ); // Pastikan ini memuat CSS yang sesuai
        printWindow.document.write('</head><body>');
        printWindow.document.write('<table border="1" cellpadding="5" cellspacing="0" style="width:100%">');
        printWindow.document.write(tableContent);
        printWindow.document.write('</table>');
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        // Tunggu hingga konten dimuat lalu cetak
        printWindow.onload = function() {
            printWindow.focus();
            printWindow.print();
            printWindow.close();
        };
    }
</script>
