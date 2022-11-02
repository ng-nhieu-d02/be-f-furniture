<?php

namespace App\Http\Controllers;

use App\Models\san_pham;
use App\Models\loai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function show(Request $request) {
        if ($request->keyword) {
            $product = san_pham::where('ten_san_pham','like','%'.$request->keyword.'%')
            ->orderBy('id','desc')->paginate(9);
        } elseif ($request->loai) {
            $product = san_pham::where('ma_loai','=',$request->loai)->orderBy('id','desc')
            ->paginate(9);
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
    public function store_category(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'status'    => 'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $category = loai::create([
            'name'  => $request->name,
            'status'    => $request->status,
        ]);
        return response()->json([
            'message' => 'User successfully create category',
            'category'  => $category
        ], 201);
    }
    public function update_category(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'status'    => 'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $category = loai::find($request->id)->update([
            'name'  => $request->name,
            'status'    => $request->status,
        ]);
        return response()->json([
            'message' => 'User successfully update category',
            'category'  => $category
        ], 201);
    }
    public function delete_category(Request $request)
    {
        loai::find($request->id)->delete();
        return response()->json([
            'message' => 'User successfully delete category',
        ], 203);
    }
}
