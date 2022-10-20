<?php

namespace App\Http\Controllers;

use App\Models\san_pham;
use App\Models\loai;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request) {
        if ($request->keyword) {
            $product = san_pham::where('ten_san_pham','like','%'.$request->keyword.'%')->orderBy('id','desc')->paginate(9);
        } elseif ($request->loai) {
            $product = san_pham::where('ma_loai','=',$request->loai)->orderBy('id','desc')->paginate(9);
        } else {
            $product = san_pham::orderBy('id','desc')->paginate(9);
        }
        return response()->json($product, 200);
    }
    public function category()
    {
        $category = loai::get();
        return response()->json($category, 200);
    }
}
