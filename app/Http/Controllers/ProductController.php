<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Menampilkan daftar semua produk
    public function index()
    {
        $products = Product::with('images')->get(); // Ambil semua produk beserta gambar terkait
        $title = "Product Manager"; // Menetapkan judul halaman
        return view('products.index', compact('products', 'title')); // Kirim produk dan title ke view
    }


    // Menampilkan formulir untuk membuat produk baru
    public function create()
    {
        return view('products.create', ["title" => "Product Manager"]);
    }

    // Menyimpan produk baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif', // Validasi gambar
        ]);

        // Buat produk baru
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        // Simpan gambar produk
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Simpan gambar ke storage
                $path = $image->store('product_images', 'public');

                // Simpan informasi gambar ke dalam database
                $product->images()->create(['url' => '/storage/' . $path]);
            }
        }

        // Redirect ke halaman produk setelah penyimpanan berhasil
        return redirect('/products')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Menampilkan produk berdasarkan ID
    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return response()->json($product);
    }

    // Menampilkan formulir untuk mengedit produk
    public function edit($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return view('products.edit', compact('product'))->with('title', 'Produk Manager');
    }

    // Mengupdate produk yang ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif', // Validasi gambar
        ]);

        // Temukan produk berdasarkan ID
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        // Simpan gambar produk
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Simpan gambar ke storage
                $path = $image->store('product_images', 'public');

                // Simpan informasi gambar ke dalam database
                $product->images()->create(['url' => '/storage/' . $path]);
            }
        }

        // Redirect ke halaman produk setelah pembaruan berhasil
        return redirect('/products')->with('success', 'Produk berhasil diperbarui!');
    }

    // Menghapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        // Redirect ke halaman produk setelah penghapusan
        return redirect('/products')->with('success', 'Produk berhasil dihapus!');
    }

    public function destroyImage($id)
    {
        // Temukan gambar berdasarkan ID
        $image = ProductImg::findOrFail($id);

        // Hapus gambar dari penyimpanan
        Storage::delete($image->url); // Hapus file gambar

        // Hapus entri gambar dari database
        $image->delete();

        // Redirect kembali ke halaman produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Gambar berhasil dihapus!');
    }
}
