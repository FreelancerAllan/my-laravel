<?php

use App\Http\Controllers\blog;
use App\Http\Controllers\Blogcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Singlecontroller;
use App\Models\blog as ModelsBlog;
use Illuminate\Support\Facades\Route;

//using controller to display index.blade.php view file as function method this helps to make codes small
Route::get('/', [HomeController::class,'index']);

//singleaction controller has always one method
Route::get('/single-action', Singlecontroller::class);


//routes without using ciontroller its not a must to use controller
         Route::get('/welcome', function () {
            return view('welcome');
                });

        // contact blade file inside the contact folder
         Route::get('/contact', function () {
            return view('contact.contact');
                });
        
        
            //http://127.0.0.1:8000/about
         //naming route
     Route::get('/about', function () {
         return "This is a home page";
     })->name('about');
        
        
     //routes with parameters
     Route::get('/user/{id}/{slug}', function ($id,$slug) {
            return "Hello"  .$id.'-'.$slug;
        })->name('user');



//grouping routes
//http://127.0.0.1:8000/blog/create
//http://127.0.0.1:8000/blog/edit
//http://127.0.0.1:8000/blog/show
Route::group(['prefix'=>'blog'],   function(){
    Route::get('/create', function () {
        return "Blog Create Page";
            })->name('create');

            Route::get('/edit', function () {
                return "Blog edit Page";
                    })->name('edit');

                    Route::get('/show', function () {
                        return "Blog show Page";
                            })->name('show');

});


//routes methods
// 1, Get // Get data from the server
// 2. POST //submit or store data
// 3. PUT // update data
// 4. PATCH // update data update only one row in a database
// 5. DELETE // delete data from the server

  Route::get('s',function () {
                        return "Blog show Page";
                            });

                            
Route::post('p',function(){

    return "POST";
});

Route::put('put-route',function(){

    return "POST";
});


//fallback route
//used to redirect someone after not finding the right page 403 or 404
Route::fallback(function(){
return"oops we couldnt find the page";

});

//blog CRUD Resource Controller
Route::resource('/blog',Blogcontroller::class);


//working with the model
Route::get('/blogmodel',function(){

//query that will run SELECT * FROM blogs    
$blogs= ModelsBlog::all();

//function in laravel to display data 
dd($blogs);

});
                            

