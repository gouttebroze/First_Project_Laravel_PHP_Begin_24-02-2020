<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Product as ProductRequest;

class ProductController extends Controller
{
    public function create()
{
    return view('create');
}
public function store(ProductRequest $productRequest)
{
    Product::create($productRequest->all());
    return redirect()->route('films.index')->with('info', 'Le film a bien été créé');
}
}
