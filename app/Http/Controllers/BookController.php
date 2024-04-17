<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('kategori')->latest()->paginate(20);
        return view('book.index', ['books' => $books], ['activePage' => 'book']);
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('book.create', compact('kategoris'), ['activePage' => 'book']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'id_kategori' => 'required',
            'sinopsis' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah' => 'required',
            'halaman' => 'required',
            'barcode' => 'required',
        ]);

        $image = $request->file('image');
        $barcode = $request->barcode;
        $title = $request->judul;
        $imageName =  str_replace(" ", "_", $title) . "_" . $barcode . '.jpg';
        $image->storeAs('public/image', $imageName);
        $path = storage_path('app/public/image/' . $imageName);

        $img = null;
        if ($image->getClientOriginalExtension() === 'jpeg' || $image->getClientOriginalExtension() === 'jpg') {
            $img = imagecreatefromjpeg($image->path());
        } elseif ($image->getClientOriginalExtension() === 'png') {
            $img = imagecreatefrompng($image->path());
        }

        if ($img) {
            imagejpeg($img, $path, 15);
            imagedestroy($img);
        }

        Book::create([
            'image' => $imageName,
            'judul' => $request->judul,
            'id_kategori' => $request->id_kategori,
            'sinopsis' => $request->sinopsis,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah' => $request->jumlah,
            'halaman' => $request->halaman,
            'barcode' => $request->barcode,
        ]);

        return redirect()->route('book.index');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $kategoris = Kategori::all();
        return view('book.edit', [
            'activePage' => 'book',
            'book' => $book,
            'kategoris' => $kategoris,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'id_kategori' => 'required',
            'sinopsis' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah' => 'required',
            'halaman' => 'required',
            'barcode' => 'required',
        ]);

        $book = Book::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/image/' . $book->image);
            $image = $request->file('image');
            $imageName = str_replace([" ", "'", '"'], "_", $request->judul) . "_" . $request->barcode . time() . '.jpg';
            $image->storeAs('public/image', $imageName);
            $path = storage_path('app/public/image/' . $imageName);

            $img = null;
            if ($image->getClientOriginalExtension() === 'jpeg' || $image->getClientOriginalExtension() === 'jpg') {
                $img = imagecreatefromjpeg($image->path());
            } elseif ($image->getClientOriginalExtension() === 'png') {
                $img = imagecreatefrompng($image->path());
            }

            if ($img) {
                imagejpeg($img, $path, 15);
                imagedestroy($img);
            }

            $book->update([
                'image' => $imageName,
                'judul' => $request->judul,
                'id_kategori' => $request->id_kategori,
                'sinopsis' => $request->sinopsis,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request->tahun_terbit,
                'jumlah' => $request->jumlah,
                'halaman' => $request->halaman,
                'barcode' => $request->barcode,
            ]);
        } else {
            $imageRename = str_replace([" ", "'", '"'], "_", $request->judul) . "_" . $request->barcode . time() . '.jpg';
            Storage::move('public/image/' . $book->image, 'public/image/' . $imageRename);
            $book->update([
                'image' => $imageRename,
                'judul' => $request->judul,
                'id_kategori' => $request->id_kategori,
                'sinopsis' => $request->sinopsis,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request->tahun_terbit,
                'jumlah' => $request->jumlah,
                'halaman' => $request->halaman,
                'barcode' => $request->barcode,
            ]);
        }

        return redirect()->to('book');
    }
}
