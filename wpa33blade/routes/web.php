<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("hello",function(){
    $data = "foo foo foo";
    return view("hello",compact('data'));
});

Route::get("howdy",function(){
    return view("howdy");
});

Route::get("foo",function(){
    return view("foo");
});

Route::get("test-json",function(){
    $data = [
        [
            "id" => 1,
            "name" => 'Aung Aung',
        ],
        [
            "id" => 2,
            "name" => 'Maung Maung',
        ]
    ];
    $age = 56;
    $count = [];
    return view("myjson")
    ->with("data",$data)
    ->with("age",$age)
    ->with("color","RED")
    ->with("count",$count);
});

Route::get("students",function(){
    $students = [
        [ 'id' => 1, 'name' => 'Aung Aung' ],
        [ 'id' => 2, 'name' =>  'ko ko' ],
        [ 'id' => 3, 'name' => 'lae lae' ],
        [ 'id' => 4, 'name' => 'soe soe' ],
        [ 'id' => 5, 'name' => 'mg mg' ]

    ];
    return view("students",compact("students"));
});

Route::get("myform",function(){
    return view("myform");
});

Route::post("myform",function(Request $request){
    $validData = $request->validate([
        'name' => 'required|min:4'
    ]);
    var_dump($validData);
})->name("myform");