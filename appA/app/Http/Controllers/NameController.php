<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NameController extends Controller
{
    public function addName(string $name){
        return Http::post("http://host.docker.internal/api/name/".$name); 
    }
}
