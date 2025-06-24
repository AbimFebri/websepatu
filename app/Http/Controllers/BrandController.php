<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::with('shoes')->get();
        return view('brands.index', compact('brands'));
    }

    public function show($id)
    {
        $brand = Brand::with('shoes')->findOrFail($id);
        return view('brands.show', compact('brand'));
    }
}

