<?php
/**
 * Created by PhpStorm.
 * User: chuong
 * Date: 11/22/2016
 * Time: 9:42 PM
 */

namespace App\Http\Controllers;




use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller  {
    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function index()
    {
        $items = Item::all();
        return view('items',compact('items'));
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function create(Request $request)
    {
        $this->validate($request,['title'=>'required']);
        $items = Item::create($request->all());
        return back();
    }

    public function show($slugString){
        $items = Item::where("slug",$slugString)->first();
        return view('show',['item' => $items]);
    }
} 