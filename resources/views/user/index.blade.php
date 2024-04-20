<x-layout>
    <x-slot name="dashboard">
        @include('components.dashboard') <!-- Memasukkan komponen dashboard -->
    </x-slot>
    <div class="mx-5 pt-5">
        <a href="{{ url('user/create') }}" class="btn btn-cMedium mb-3">+ Tambah</a>
        <div class="card mb-5" style="border-color: brown;">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="p-1">Username</th>
                            <th class="p-1" style="width: 50%">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td class="p-1">{{ $user->username }}</td>
                                <td class="p-1 d-flex justify-content-between" >
                                    <a href="{{ route('user.show', $user->id) }}">Detail</a>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">Reset password</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="p-1">
                                    <div class="alert alert-danger m-0">
                                        Belum ada data
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-layout>
