<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function abaoutMe() {
        $users = User::all();
        return view("abaoutMe", compact("users"));
    }

    function showProductsView() {
        $products = DB::table("products")->get();
        return view("products", compact("products"));
    }

    function showUserProductsView() {

        $userProducts = DB::table('user_products')
            ->join('users', 'user_products.user_id', '=', 'users.id')
            ->join('products', 'user_products.product_id', '=', 'products.id')
            ->select('user_products.*', 'users.name', 'products.pName', 'products.price')
            ->get();

        return view('userProducts', compact('userProducts'));
    }
}

