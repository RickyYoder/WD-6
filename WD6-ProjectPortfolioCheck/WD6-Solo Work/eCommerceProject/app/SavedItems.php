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
		
		if(in_array($id,$this->items)) return redirect()->route('product.index')->send();
		
		array_push($this->items,$id);
	}
}
