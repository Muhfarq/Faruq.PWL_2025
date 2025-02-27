<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
public function hello() {
return 'Hello World';
}
public function index()
{
    return "Welcome Message";
}

public function about()
{
    return "Name: Muhammad Faruq, NIM: 2341760197"; 
}

public function articles($id)
{
    return "Article Page with ID: " . $id;
}

public function greeting(){ 
    return view('blog.hello')
    ->with('name','Faruq')
    ->with('occupation','Sukses');
}

}