<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use Illuminate\Support\Facades\Validator;
class BackendController extends Controller
{
    public function createBranch(Request $request){

       $data = Branch::where('name', '=' ,$request->branchname)->first();

       if ($data != null){
        return back()->with('error','Jina La Tawi Tayari Lipo! Chagua Lingine');
       }

        $validate = Validator::make($request->all(),[
            'branchname'=>'required',

            'location'=>'required',
        ]);

         if ($validate->fails()){
            $messages = $validate->messages();
            return back()->with('errors','Kuna Kosa wakati wa uwekaji data');
         }



        $branch = Branch::create([
            'name'=> $request->branchname,

            'location'=>$request->location,
        ]);

        return back()->with('message','Data zimeingia kikamilifu');
    }
}
