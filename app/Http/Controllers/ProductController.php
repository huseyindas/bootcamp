<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Imports\ProductImport;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use phpDocumentor\Reflection\Utils;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with("category", "user")->simplePaginate(8);
        return view("tables.products", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            "product_name"=>"required",
            "price"=>"required|integer",
        ]);

        $product = new Product([
            $request->all()
        ]);
        $product->product_name = $request->get("product_name");
        $product->price = $request->get("price");
        $product->photo = $request->get("photo");
        $product->description = $request->get("description");
        $product->user_id = $request->get("user_id");
        $product->category_id = $request->get("category_id");

        $product->save();

        return redirect("/products")->with("success","Products added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $users = User::all();
        return view("product.edit", compact("product", "categories", "users"));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_name = $request->get("product_name");
        $product->price = $request->get("price");
        $product->photo = $request->get("photo");
        $product->description = $request->get("description");
        $product->user_id = $request->get("user_id");
        $product->category_id = $request->get("category_id");

        $product->save();

        return redirect("/products")->with("success","Products added.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect("/products");
    }

    public function export() {
        return Excel::download(new ProductExport, "products.xlsx");
    }

    public function deneme(){
        return view("product.import");
    }
    public function import() {

        Excel::import(new ProductImport, request()->file("file"));
        return redirect("/products");

    }

}
