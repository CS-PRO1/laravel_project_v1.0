<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        //importing necessary inputs
        $product=$request->all();
        $validator = Validator::make($product, [
            'name' => 'required|string|between:2,100',
            'owner_id' => 'required|numeric|min:1',
            'category_id' => 'required|numeric|min:1',
            'image' => 'required',
            'contact_info' => 'required',
            'quantity' => 'required|numeric',
            'initial_price' => 'required|numeric',
            'first_evaluation_date' => 'required|date',
            'second_evaluation_date' => 'required|date',
            'expiration_date' => 'required|date',
            'first_discount_percentage' => 'required|numeric|between:1,100',
            'second_discount_percentage' => 'required|numeric|between:1,100',
            'third_discount_percentage' => 'required|numeric|between:1,100',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $product=Product::create($product);
        return response()->json(['message'=>'Product was added successfuly', 'Product' => $product]);
        }

    public function destroy($id)
    {
            $product= Product::find($id);
            $product->delete();
            return $this->returnSuccessMessage("Product was deleted successfully");
    }

    public function index()
    {
        //
    }
    
    public function update($productId, Request $request)
    {
        //
    }


        public function show($id)
        {
            $product= Product::find($id);
            if (is_null($product)) {
                return $this->returnError(404, 'notfound');
            }
            return $this->returnData('show',$product,'success');
        }
}
