<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class BrowseController extends Controller {
    public function index() {
        $items = DB::table('items')->select('name','rating','description','photo')->take(60)->get();
        return view("pages/browse",['items'=>$items]);
    }
    public function add(){
        for($i=0;$i<10;$i++){
            $item = new Item;
            $item -> name = "Item ".strval($i);
            $item -> description = "Description ".strval($i);
            $item -> rating = rand(0,5);
            $item -> photo = "bee".strval(rand(0,4).".jpg");
            $item -> user_id = 0;
            $item->save();
        }
        return redirect('/');
    }
}
