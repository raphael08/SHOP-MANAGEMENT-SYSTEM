<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Branch;
use App\Models\Sales;
use App\Models\Stock;
class ApiController extends Controller
{

     //---------------------PRODUCT CRUD----------------------------------------------------------------
    public function createProduct(Request $request){

        $validate = Validator::make($request->all(),[
            'name'=>'required',
            'image'=>'required|image|mimes:png,jpg|max:2048',
            'price'=>'required',
        ]);

         if ($validate->fails()){
            return response()->json($validate->errors(),422);
         }

        $image = $request->file('image');
        $image->storeAs('public/product',$image->hashName());

        $product = Product::create([
            'name'=> $request->name,
            'image'=>$image->hashName(),
            'price'=>$request->price,
        ]);

        return response()->json($product);
    }


    public function showProducts(){

        $product = Product::all();

        return response()->json($product);
    }

    public function getProduct($id){

        $product = Product::find($id);

        if ($product)
        {
            return response()->json($product);

        }
        return response()->json([
            "message"=>"user not found"
        ]
    );

    }

    public function editProduct(Request $request,$id){

          $validate = Validator::make($request->all(),[
            'name'=>'required',
            'image'=>'required|image|mimes:png,jpg|max:2048',
            'price'=>'required',
        ]);

         if ($validate->fails()){
            return response()->json($validate->errors(),422);
         }

        $image = $request->file('image');
        $image->storeAs('public/product',$image->hashName());

        $product = Product::where('id',$id)->update(
            [
            'name'=> $request->name,
            'image'=>$image->hashName(),
            'price'=>$request->price,
        ]
    );
        $product = Product::find($id);
        return response()->json($product);
    }

    public function deleteProduct($id){

        $product = Product::where('id',$id)->delete();

        if ($product){
            return response()->json(['message'=>'successful']);

        }

        return response()->json(['message'=>'un-successful']);


    }


    //---------------------BRANCH CRUD----------------------------------------------------------------
    public function createBranch(Request $request){

        $validate = Validator::make($request->all(),[
            'name'=>'required',

            'location'=>'required',
        ]);

         if ($validate->fails()){
            return response()->json($validate->errors(),422);
         }



        $branch = Branch::create([
            'name'=> $request->name,

            'location'=>$request->location,
        ]);

        return response()->json($branch);
    }

    public function showBranches(){

        $branch = Branch::all();

        return response()->json($branch);
    }

    public function getBranch($id){

        $branch = Branch::find($id);

        if ($branch)
        {
            return response()->json($branch);

        }
        return response()->json([
            "message"=>"user not found"
        ]
    );

    }

    public function editBranch(Request $request,$id){

        $validate = Validator::make($request->all(),[
          'name'=>'required',

          'location'=>'required',
      ]);

       if ($validate->fails()){
          return response()->json($validate->errors(),422);
       }



      $branch = Branch::where('id',$id)->update(
          [
          'name'=> $request->name,

          'location'=>$request->location,
      ]
  );
      $branch = Branch::find($id);
      return response()->json($branch);
  }

  public function deleteBranch($id){

    $product = Branch::where('id',$id)->delete();

    if ($product){
        return response()->json(['message'=>'successful']);

    }

    return response()->json(['message'=>'un-successful']);


}

 //---------------------SALES CRUD----------------------------------------------------------------
public function createSales(Request $request){

    $validate = Validator::make($request->all(),[
        'product_id'=>'required',

        'quantity'=>'required',

    ]);

     if ($validate->fails()){
        return response()->json($validate->errors(),422);
     }



    $sales = Sales::create([
        'product_id'=> $request->product_id,

        'quantity'=>$request->quantity,
    ]);

    $stock =Stock::find($request->product_id);
// $sales = Sales::find($id);
$sale = $sales['quantity'];

$old_available = $stock['available_product'];
$branch = $stock['branch_id'];
// $sale = $sales['quantity'];
$new_available = $old_available - $sale;

$stock = Stock::where('product_id',$request->product_id)->update([
     'product_id' => $request->product_id,
    'branch_id' => $branch,
    'available_product'=>$new_available,
]);

    return response()->json($sales);
}

public function showSales(){

    $sales = Sales::with('product')->get();

    return response()->json($sales);
}

public function getSales($id){

    $sales = Sales::with('product')->find($id);

    if ($sales)
    {
        return response()->json($sales);

    }
    return response()->json([
        "message"=>"user not found"
    ]
);

}
public function editSales(Request $request,$id){

$validate = Validator::make($request->all(),[
    'product_id'=>'required',

    'quantity'=>'required',

]);

 if ($validate->fails()){
    return response()->json($validate->errors(),422);
 }



$sales = Sales::where('id',$id)->update([
    'product_id'=> $request->product_id,

    'quantity'=>$request->quantity,
]);

// $stock = Stock::select('available_product')->where('product_id',$request->product_id)->get();
$stock =Stock::find($request->product_id);
$sales = Sales::find($id);
$sale = $sales['quantity'];

$old_available = $stock['available_product'];
$branch = $stock['branch_id'];
// $sale = $sales['quantity'];
$new_available = $old_available - $sale;

$stock = Stock::where('product_id',$request->product_id)->update([
     'product_id' => $request->product_id,
    'branch_id' => $branch,
    'available_product'=>$new_available,
]);

return response()->json($sales);

}



public function deleteSales($id){

    $sales = Sales::where('id',$id)->delete();

    if ($sales){
        return response()->json(['message'=>'successful']);

    }

    return response()->json(['message'=>'un-successful']);


}

 //---------------------STOCK CRUD----------------------------------------------------------------
public function createStock(Request $request){

    $validate = Validator::make($request->all(),[
        'product_id'=>'required',
        'branch_id'=>'required',
        'available_product'=>'required',

    ]);

     if ($validate->fails()){
        return response()->json($validate->errors(),422);
     }

    $stock = Stock::create([
        'product_id'=> $request->product_id,
        'branch_id'=>$request->branch_id,
        'available_product'=>$request->available_product,
    ]);
     $stock =Stock::with('product')->get();
    return response()->json($stock);
}

public function showStock(){

    $stock = Stock::with('product','branch')->get();

    return response()->json($stock);
}

public function getStock($id){

    $stock = Stock::with('product','branch')->find($id);

    if ($stock)
    {
        return response()->json($stock);

    }
    return response()->json([
        "message"=>"stock not found"
    ]
);

}

public function editStock(Request $request,$id){

    $validate = Validator::make($request->all(),[
        'product_id'=>'required',
        'branch_id'=>'required',
        'available_product'=>'required',

    ]);

     if ($validate->fails()){
        return response()->json($validate->errors(),422);
     }


     $stock = Stock::find($id);
  $stock = Stock::where('id',$id)->update(
      [
        'product_id'=> $request->product_id,
        'branch_id'=>$request->branch_id,
        'available_product'=>$request->available_product,
  ]
);
  $stock = Stock::find($id);
  return response()->json($stock);
}

public function deleteStock($id){

$stock = Stock::where('id',$id)->delete();

if ($stock){
    return response()->json(['message'=>'successful']);

}

return response()->json(['message'=>'un-successful']);


}

 //---------------------ROLES CRUD----------------------------------------------------------------



}

