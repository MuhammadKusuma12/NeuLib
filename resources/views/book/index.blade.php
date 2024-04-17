<x-layout>
    <x-slot name="dashboard">
        @include('components.dashboard')
    </x-slot>
    <div class="mx-5 pt-5  ">
        <a href="{{ url('book/create') }}" class="btn btn-cMedium mb-3">+ Tambah</a>
        @forelse ($books as $book)
            <div class="card mb-3" style="border-color: brown;">
                <div class="row g-0">
                    <div class="card-header p-3 bg-cMedium text-white">
                        <h5 class="card-title mb-0">Info Buku</h5>
                    </div>
                    <div class="col-md-2 border-end px-1">
                        <img src="{{ asset('/storage/image/' . $book->image) }}" class="image-fluid mt-1"
                            alt="{{ $book->judul }}" style="max-width: 150px;">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <strong>Judul :</strong> {{ $book->judul }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Kategori :</strong> {{ $book->kategori->nama }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Pengarang :</strong> {{ $book->pengarang }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Penerbit :</strong> {{ $book->penerbit }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Terbit :</strong> {{ $book->tahun_terbit }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Halaman :</strong> {{ $book->halaman }} halaman
                                </li>
                                <div class="card mt-2">
                                    <div class="card-body">
                                        <p><strong>Jumlah :</strong> {{ $book->jumlah }}</p>
                                        <p class="mb-0">
                                            <strong>Barcode :</strong> {{ $book->barcode }}
                                        </p>
                                    </div>
                                </div>
                                <li class="list-group-item">
                                    <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="m-0" />
                <div class="card-body">
                    <h5 class="card-title">Sinopsis</h5>
                    <p class="card-text">{!! nl2br(e($book->sinopsis)) !!}</p>
                </div>
            </div>
        @empty
            <div class="alert alert-danger">
                <ul class="m-0">
                    <li>Belum ada Data</li>
                </ul>
            </div>
        @endforelse
    </div>
</x-layout>
