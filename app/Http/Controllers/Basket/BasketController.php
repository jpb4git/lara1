<?php

namespace App\Http\Controllers\Basket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasketController extends Controller
{
    public function index()
    {
        return  view("pages.basket.panier");
    }
}
