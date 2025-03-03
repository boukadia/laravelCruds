<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;

class produitController extends Controller
{
    public function store()
    {
        $produits = produit::all();
        return view("index", ["produits" => $produits]);
    }
    public function show()
    {
        return view("form");
    }
    public function create(request $request)
    {
        // dd($request);
        // $produits=new produit();
        $produit = $request->validate([
            "name" => "required",
            "description" => "required",
            "price" => "required",
        ]);
        //     $produits->create([
        //     "name"=>$request->name,
        //     "description"=>$request->description,
        //     "price"=>$request->price,
        // ]);
        $produits = produit::create($produit);
    }
    public function delete($id)
    {
        produit::where('id', $id)->delete();
    }
    public function edit($id)
    {
        $produit = produit::find($id);
        return view("edit", ["produit" => $produit]);
    }
    public function update(request $request, $id)
    {
        $produit = $request->validate([
            "name" => 'required',
            "description" => 'required',
            "price" => 'required',
        ]);
        produit::where('id', $id)->update($produit);
    }
}
    