<?php

namespace App\Http\Controllers;

use App\Category;
use App\Feedback;
use Illuminate\Http\Request;
use App\User;
use App\Bid;
use App\Message;
use App\Product;
use App\City;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function home(Request $request){

        return view('admin.admin');
    }

    public function admin_detail(){

        $users = User::get();
        $users_html = view('admin.users',['users'=>$users])->render();
        $bids = Bid::get();
        $bidding_html = view('admin.bidding',['bids'=>$bids])->render();
        $messages = Message::get();
        $message_html = view('admin.messages',['messages'=>$messages])->render();
        $products = Product::get();
        $product_html = view('admin.products',['products'=>$products])->render();
        $reviews = Feedback::get();
        $review_html = view('admin.review',['reviews'=>$reviews])->render();
        $category = Category::get();
        $category_html = view('admin.category',['category'=>$category])->render();
        $city = City::get();
        $city_html = view('admin.city',['city'=>$city])->render();
        return response()->json([
            'status'=>true,
            'users_html'=>$users_html,
            'bidding_html'=>$bidding_html,
            'message_html'=>$message_html,
            'product_html'=>$product_html,
            'review_html'=>$review_html,
            'category_html'=>$category_html,
            'city_html'=>$city_html,

        ]);
    }
}
