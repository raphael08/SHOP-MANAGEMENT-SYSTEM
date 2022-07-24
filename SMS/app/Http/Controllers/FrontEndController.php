<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
class FrontEndController extends Controller
{
    public function index(){


        return view('index');
    }

    public function product(){


        return view('layouts.product');
    }
    //the fuction for the admin
    public function admin(){
        return view('layouts.admin');
    }
    //The function for Bidhaa
    public function bidhaa(){
        return view('layouts.bidhaa');
    }
    //The function for the Dashboard
    public function dashboard(){
        return view('layouts.dashboard');
    }
    //The function for the empty
    public function empty(){
        return view('layouts.empty');
    }
    //The function for the historia ya mauzo
    public function historiamauzo(){
        return view('layouts.historiamauzo');
    }

    //The function for the matawi
    public function matawi(Request $request){
        $branch = Branch::all();

        return view('layouts.matawi',compact('branch'));
    }
    //The function for the mauzo
    public function mauzo(){
        return view('layouts.mauzo');
    }
    //The function for the mauzomuuzaji
    public function mauzomuuzaji(){
        return view('layouts.mauzomuuzaji');
    }
    //The function for the reported
    public function printirisiti(){
        return view('layouts.printirisiti');
    }
    //The function for the sale_report
    public function report(){
        return view('layouts.report');
    }
    //The function for the risiti.html"
    public function risiti(){
        return view('layouts.risiti');
    }

    //The function for the sale_report
    public function sale_report(){
        return view('layouts.sale_report');
    }
    //The function for the setting
    public function setting(){
        return view('layouts.setting');
    }
    //The function for the Wateja
    public function wateja(){
        return view('layouts.wateja');
    }
    //The function for the wauzaji
    public function wauzaji(){
        return view('layouts.wauzaji');
    }
    //The function for the welcome
    public function welcome(){
        return view('layouts.welcome');
    }
    //The function for the logOut
    public function logOut(){
        return view('layouts.logOut');
    }
    //The function of mauzomuuzaji
    public function mauzomuaji(){
        return view('layouts.mauzomuaji');
    }
}
