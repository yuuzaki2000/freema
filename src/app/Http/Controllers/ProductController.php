<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Listing;
use App\Models\User;
use App\Models\Profile;
use App\Http\Requests\ExhibitionRequest;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Favorite;
use App\Models\Comment;


class ProductController extends Controller
{
    //
    public function index(Request $request) {
        $particularFavorites = Favorite::where('user_id', Auth::id())->get();

        $particularListings = Listing::where('user_id', Auth::id())->get();

        if($request->page == null){
            $products = Product::all();
            $page = $request->page;
            $keyword = "";
        }else if($request->page == "mylist"){
            $particularProducts = collect();
            if(empty($particularFavorites)){
                return;
            }else{
                foreach($particularFavorites as $particularFavorite){
                    $product = Product::find($particularFavorite->product_id);
                    $particularProducts->push($product);
                }
            }
            $page = $request->page;
            $keyword = $request->keyword;
            if(!$keyword){
            }else{
                $products = $particularProducts->filter(function ($product) use ($keyword) {
                    return strpos($product->name, $keyword) !== false;
                });
                /*
                $filtered = $records->filter(function ($record) use ($key, $val) {
                    return strpos($record[$key], $val) !== false;
                });
                */
                /*dd($products);*/
            }
        }else{
            $products = Product::all();
            $keyword = $request->keyword;

            if(empty($particularListings)){
                return;
            }else{
                foreach($particularListings as $particularListing){
                    $product = Product::find($particularListing->product_id);
                    if(!$product){
                    }else{
                        $products->pull($product->id);
                    }
                }
            }
            $page = "";
        }

        foreach($products as $product){
            $purchase = Purchase::where('product_id', $product->id)->first();
            if($purchase){
                $product['isSold'] = 'Sold';
            }else{
                $product['isSold'] = '';
            }
            
        }

        return view('index', compact('products', 'page', 'keyword'));
    }

    public function add(){
        $imageFilePath = '';
        $data = [
            'imageFilePath' => $imageFilePath,
        ];
        return view('listing', $data);
    }

    public function store(ExhibitionRequest $request){
        try{

            DB::beginTransaction();

            $dir = 'product_img';
            $file_name = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/' . $dir, $file_name);

            $product = new Product();
            $product->name = $request->name;
            $product->image = 'storage/' . $dir . '/' . $file_name;
            $product->brand = $request->brand;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->condition = $request->condition;
            $product->save();

            $product->categories()->sync($request->input('category'));

            $productId = $product->id;

            $listing = new Listing();
            $listing->user_id = Auth::id();
            $listing->product_id = $productId;
            $listing->save();

            DB::commit();

            return redirect('/');

        }catch(Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', 'エラーが発生しました。');
        }
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $page = $request->page;
        $products = Product::where('name', 'like', "%{$keyword}%")->get();
        return view('index', compact('products', 'keyword','page'));
    }

    public function getDetail($product_id, Request $request){
        $product = Product::find($product_id);
        $categories = Category::all();
        $favorites = Favorite::where('product_id', $product_id)->get();
        $favoriteCount = $favorites->count();
        $comments = Comment::where('product_id', $product_id)->get();
        if(!$request){
            $isPushed = false;
            $imageUrl = 'img/star_icon.png';
        }else{
            $isPushed = $request->isPushed;
            if($isPushed){
                $imageUrl = 'img/red_star.png';
            }else{
                $imageUrl = 'img/star_icon.png';
            }
        }

        $data = [
            'product' => $product,
            'categories' => $categories,
            'favoriteCount' => $favoriteCount,
            'comments' => $comments,
            'isPushed' => $isPushed,
            'imageUrl' => $imageUrl,
        ];
        return view('product_detail', $data);
    }

    public function purchase($product_id){
        $product = Product::find($product_id);
        $profile = Profile::where('user_id', Auth::id())->first();
        return view('purchase', compact('product', 'profile'));
    }
}
