<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages/products', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product([
            'nama_produk' => $request->get('nama_produk'),
            'jenis_produk' => $request->get('jenis_produk'),
            'harga' => $request->get('harga')
        ]);
        $product->save();
        return redirect('products')->with('success', 'Product has been added');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->nama_produk = $request->get('nama_produk');
        $product->jenis_produk = $request->get('jenis_produk');
        $product->harga = $request->get('harga');
        $product->save();
        return redirect('/products')->with('success', 'Product has been updated');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'Product has been deleted');
    }
}
