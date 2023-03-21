<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        if($request->ajax()){
           $data = Product::where('name','LIKE',$request->name.'%')->get();
           $output = '';
           if(count($data) > 0){
            $output = '<ul class="list-group" style="display:block; position:relative;z-index:1">';
            foreach($data as $row){
                $output .='<li class="list-group-item">'.$row->name.'</li>';
            }
            $output .='</ul>';
           }else{
            $output .= '<li class="list-group-item">Not Found Data</li>';
           }
           return $output;
        }
        return view('home');
    }
}
