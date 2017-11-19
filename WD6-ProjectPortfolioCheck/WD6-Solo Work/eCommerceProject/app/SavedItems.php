<?php

namespace App;

use Session;

class SavedItems
{
    public $items = [];
	
	public function __construct(){
		$this->items = (Session::has('savedItems') ? Session::get('savedItems')->items : []);
	}
	
	public function add($id){
		
		$id = intval($id);
		
		if(in_array($id,$this->items)) return redirect()->route('product.index')->send();
		
		array_push($this->items,$id);
		return redirect()->route('user.viewCart')->send();
	}
	
	public function remove($id){
		if (($key = array_search($id, $this->items)) !== false) {
			unset($this->items[$key]);
		}
		
		else Session::put('savedItems',$this->items);
		
		return redirect()->route('user.viewCart')->send();
	}
}
