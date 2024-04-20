<x-layout>
    <x-slot name="dashboard">
        @include('components.dashboard') <!-- Memasukkan komponen dashboard -->
    </x-slot>
    <div class="mx-5 pt-5">
        <div class="card" style="border-color: brown;">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <td>Nama:</td>
                        <td>{{ $anggota->nama }}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{ $anggota->email }}</td>
                    </tr>
                    <tr>
                        <td>Telpon:</td>
                        <td><a href="https://wa.me/62{{ substr($anggota->telpon, 1) }}"
                                target="_blank">{{ $anggota->telpon }}</a></td>
                    </tr>
                    <tr>
                        <td>Alamat:</td>
                        <td>{{ $anggota->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir:</td>
                        <td>{{ $anggota->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin:</td>
                        <td>{{ $anggota->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Total denda:</td>
                        <td>{{ $anggota->total_denda ?? '0' }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-layout>
