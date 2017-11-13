<?php

namespace App\Http\Controllers;

use App\category ;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index ()
   {
   		$data['categories'] = category::all() ; 
   		return View('category.index', $data);
   }

   public function create()
   {
   		return View('category.create');
   }
   
   public function show()
   {

   }
   
   public function edit()
   {
   		return View('category.edit');
   }

   public function destroy()
   {}
}
