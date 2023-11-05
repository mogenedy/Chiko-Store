<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function redirect()
    {
         $usertype=Auth::User()->usertype;
        if($usertype=='1'){
            return view('admin.home');
        }else{
            // return view('home.userpage');
            $product=Product::paginate(6);
        return view('home.userpage',compact('product'));
        }
    }

    public function index(){
        $product=Product::paginate(6);
        return view('home.userpage',compact('product'));
    }
}
