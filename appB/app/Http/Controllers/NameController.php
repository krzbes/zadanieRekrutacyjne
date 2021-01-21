<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    /**
     * Returns every name from table
     */
    public function showNames(){
        return Name::all();
    }

    /**
     * Returns name connected to this id
     * 
     * @var int $id id of that name 
     */
    public function showName($id){
        return Name::where("id",$id)->get();
    }
    
    public function addName(string $name){
        $name = strrev($name);
        Name::insertGetId(['name'=>$name]);
    }
}
