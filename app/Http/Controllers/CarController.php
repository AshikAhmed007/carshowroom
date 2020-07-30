<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function show(){
        $allcars = Car::latest()->get();
        return view('index', compact('allcars'));
    }

    public function create(){
        $cars= Car::create($this->validateArticle());
        return redirect('/')->with('message','Info Added Successfuly');
    }

     protected function validateArticle(){
   return request()->validate([
   		'name'=>'required',
   		'brand'=>'required',
   		'year'=>'required'
   		]);
}
}
