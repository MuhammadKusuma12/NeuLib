<x-layout>
    <x-slot name="dashboard">
        @include('components.dashboard')
    </x-slot>
    <div class="d-flex align-items-center justify-content-center my-5">
        <div class="card w-50">
            <div class="card-body">
                <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data" class="flex flex-col">
                    @csrf
                    <div class="d-flex ">
                        <div style="width: 180px; height: 230px; display: grid; place-items: center;"
                            class="border border-black overflow-hidden" id="noImage">
                            <p>No Image</p>
                        </div>
                        <img id="previewImage" src="" alt="Preview" style="display: none;" width="180px"
                            height="100%">
                        <div class="container">
                            <label for="image">Gambar</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <label for="judul">Judul</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="form-group my-2">
                                <label for="kategori">Kategori</label>
                                <select class="form-control" id="kategori" name="id_kategori">
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <label for="pengarang">Pengarang</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="pengarang" name="pengarang">
                    </div>
                    <label for="penerbit">Penerbit</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="penerbit" name="penerbit">
                    </div>
                    <label for="tahun_terbit">Terbit</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
                    </div>
                    <label for="jumlah">Jumlah</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="jumlah" name="jumlah">
                    </div>
                    <label for="halaman">Halaman</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="halaman" name="halaman">
                    </div>
                    <label for="barcode">Barcode</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="barcode" name="barcode">
                    </div>
                    <div class="form-group my-2">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea class="form-control" name="sinopsis" id="sinopsis" rows="5"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-cMedium text-white" type="submit">Submit</button>
                    </div>

                </form>
                <script>
                    document.getElementById('image').addEventListener('change', function(event) {
                        const [file] = event.target.files;
                        if (file) {
                            const previewImage = document.getElementById('previewImage');
                            previewImage.src = URL.createObjectURL(file);
                            previewImage.style.display = 'block';
                            document.getElementById('noImage').style.display = 'none';
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</x-layout>
