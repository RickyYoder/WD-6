<?php

namespace App\Http\Controllers;
use Session;

use App\Cart;
use App\SavedItems;
use App\Product;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function getIndex(){
		$products = Product::all();
		
		return view('index',[
			"products"=>$products
		]);
	}
	
	public function getSaveItem(Request $request, $id){
		if(!(Product::where('id','=',$id)->exists())) return redirect()->route('product.index');
		
		$savedItems = new SavedItems();
		
		$savedItems->add($id);
		
		$request->session()->put("savedItems",$savedItems);
	}
	
	public function getUnsaveItem(Request $request, $id){
		#$request->session()->flush();
		if(!Session::has('savedItems') || !(Product::where('id','=',$id)->exists())) return redirect()->route('product.index');
		$savedItems = new SavedItems();
		
		$savedItems->remove($id);
		
		$request->session()->put("savedItems",$savedItems);
		
		return redirect('/cart');
	}
	
	public function getAddToCart(Request $request, $id){
		$product = Product::find($id);
		
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		$cart->add($product, $product->id);
		
		$request->session()->put('cart',$cart);
		#dd($request->session()->get('cart'));
		return redirect()->route('product.index');
	}
	
	public function getCart(){
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		$saved = new SavedItems();
		$savedItems = [];
		
		//dd($saved);
		
		foreach($saved->items as $id=>$pId){
			
			$item = Product::find($pId);
			array_push($savedItems,$item);
			
		}
		
		//dd($savedItems);
		return view('myCart.view',["savedItems"=>$savedItems,"products"=>$cart->items, "totalPrice"=>$cart->totalPrice]);
	}
	
	public function getRemoveFromCart(Request $request, $id){
		if(!Session::has('cart')){
			return redirect()->route('product.index');
		}
		else{
			$oldCart = Session::get('cart');
			$cart = new Cart($oldCart);
			
			$product = $cart->items[$id];
			
			$cart->totalQty -= $product['qty'];
			$cart->totalPrice -= $product['price'];
			
			unset($cart->items[$id]);
			
			$request->session()->forget('cart');
			$request->session()->set('cart',$cart);
			
			return redirect()->route('user.viewCart');
		}
	}
}
