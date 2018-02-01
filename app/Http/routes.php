<?php

use App\Post;
use App\User;
use App\Country;
use App\Photo;
use App\Tag;
use App\Comment;
use Carbon\Carbon;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about', function() {
//    return "hello how are you ?";
//});
//
//Route::get('/posts/{id}/{name}', function($id, $name){
//
//    return "This is a post number of " . $id ." ". $name;
//
//});
//
//Route::get('admin/post/example', array('as' => 'admin.home', function() {
//
//    $url = route('admin.home');
//    return 'This page url is ' . $url;
//
//}));

//Route::get('/posts/create', 'PostsController@create');



//Route::get('/post', 'PostsController@post');




//Route::get('/contact', 'PostsController@contact');

//Route::get('/about', 'PostsController@about');

//Route::get('/post/{id}/{name}/{password}', 'PostsController@show_post');

//Route::get('/help/{name}/{phone}/{contactHour}', 'PostsController@helpLine');

//Route::get('/employee/{id}/{salary}/{name}', 'PostsController@employee');



//
//|---------------------------------------
//|---------------DATABASE RAW SQL QUERIES
//|---------------------------------------
//

//Route::get('/insert', function () {
//
//
//    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP laravel courese 2', 'really it is petty cool stuff']);
//
//});
//
//Route::get('/read', function () {
//
//
//    $results = DB::select('select * from posts where id = ?', [1]);

    //return $results;

//    foreach ($results as $post){
//
//        return $post->title;
//
//    }


//});

//Route::get('/update', function () {
//
//
//   $update = DB::update('update posts set title="update title" where id=?', [1]);
//   return $update;
//
//
//});
//
//Route::get('/deleted', function() {
//
//
//    $deleted = DB::delete('delete from posts where id=?', [1]);
//
//    return $deleted;
//
//
//
//});


//
//|---------------------------------------
//|----------------------ELOQUENT DATABASE
//|---------------------------------------
//



//Route::get('/read', function () {
//
//
//    $posts = Post::all();
//
//    foreach ($posts as $post) {
//        return $post->title;
//    }
//
//});
//
//Route::get('/find', function () {
//
//    $posts = Post::find(2);
//
//    return $posts->title;
//
//});


//Route::get('/findwhere', function () {
//
//
//
//    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//
//
//
//});


//Route::get('/findmore', function () {
//
//
//   $posts=Post::findOrFail(1);
//
//   return $posts;
//
//
//
//
//});


//Route::get('basicinsert', function (){
//
//    $post = new Post;
//
//    $post->title = 'New Eloquent Insert Title';
//    $post->content = 'Eloquent is awesome for learning thanks Edwin';
//
//    $post->save();
//
//
//
//});

//
//Route::get('/basicupdate', function (){
//
//
//    $post = Post::find(2);
//
//    $post->title = 'New Eloquent Insert Title2';
//    $post->content = 'Eloquent is awesome for learning thanks Edwin2';
//
//    $post->save();
//
//
//
//
//});


Route::get('/create', function () {


   Post::create(['title'=>'the create method', 'content'=>'WOW I\'m learning php laravel']);



});

//
//Route::get('/update', function (){
//
//
//   Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP LARAVEL', 'content'=>'new updated data with eloquent']);
//
//
//
//});

//Route::get('/delete', function (){
//
//    $post = Post::find(2);
//
//    $post->delete();
//
//});


//Route::get('/delete2', function (){
//
//
//    Post::destroy(3);
//
//    Post::destroy([4,5]);
//
//
//});


//
//|---------------------------------------
//|----------------------------SOFT DELETE
//|---------------------------------------
//

//Route::get('/softdelete', function () {
//
//   Post::find(2)->delete();
//
//
//});
//
//Route::get('/readsoftdelete', function () {
//
//
//  // $post = Post::find(1);
//   //return $post;
////
////    $post = Post::withTrashed()->where('id', 1)->get();
////    return $post;
//
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//    return $post;
//
//});



//Route::get('/restore', function () {
//
//
//    Post::withTrashed()->where('is_admin', 0)->restore();
//
//
//
//
//});

//Route::get('/forcedelete', function (){
//
//
//   Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//
//
//});



//
//|---------------------------------------
//|--------------------RELATIONAL DATABASE
//|---------------------------------------
//

//
////one to one relationship
//Route::get('/user/{id}/post', function ($id){
//
//
//    return User::find($id)->post;
//
//
//});
//
////reverse
//
//Route::get('/post/{id}/user', function ($id){
//
//
//
//   return Post::find($id)->user->name;
//
//
//
//});
//
//
//// ONE TO MANY RELATIONSHIP
//
//Route::get('/posts', function (){
//
//   $user = User::find(1);
//
//   foreach ($user->posts as $post){
//       echo $post->title . "<br>";
//   }
//
//
//
//});
//
//
////many to may relationship
//
//Route::get('/roles/{id}', function ($id){
//
//
//    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//    return $user;
//
////    foreach ($user->roles as $role){
////
////        return $role->name;
////
////    }
//
//
//});


//ACCESSING INTERMIDIATE TABLE

//Route::get('/user/pivot', function (){
//
//
//    $user = User::find(1);
//
//    foreach ($user->roles as $role){
//
//        return $role->pivot->created_at;
//
//    }
//
//
//});


//Route::get('/user/country', function (){
//
//
//    $country = Country::find(1);
//
//    foreach ($country->posts as $post){
//
//        return $post->title;
//
//    }
//
//
//
//});


// polymorphic relationship

//
//Route::get('/user/photo', function (){
//
//   $user = User::find(1);
//
//   foreach ($user->photos as $photo){
//
//
//       echo $photo->path . "<br>";
//
//   }
//
//
//
//});
//
//
//Route::get('/user/post', function () {
//
//    $post = Post::find(1);
//
//    foreach ($post->photos as $photo) {
//
//
//        echo $photo->path . "<br>";
//
//    }
//
//
//});
//
//
//Route::get('photo/{id}/post', function ($id){
//
//
//   $photo = Photo::findOrFail($id);
//
//   return $photo->imageable;
//
//
//
//
//
//
//});
//
//
//
//// polymorphic many to many
//
//
//Route::get('/post/tag', function (){
//
//
//   $posts = Post::find(1);
//
//   foreach ($posts->tags as $tag){
//
//       echo $tag->name;
//
//   }
//
//
//});
//
//
//
//Route::get('/tag/post', function (){
//
//
//   $tag = Tag::find(2);
//
//
//   foreach ($tag->posts as $post){
//
//
//       return $post->title;
//
//
//   }
//
//
//
//
//});
//
//
//// one to many relationship from laravel documentation
//
//Route::get('/post/{id}/comment', function ($id) {
//
//   $post = Post::find($id);
//
//   foreach ($post->comment as $comment){
//
//
//       echo $comment->comment . "<br>";
//
//   }
//
//
//});
//
//
//Route::get('/comment', function (){
//
//    $comment = Comment::find(1);
//
//    echo $comment->post->title;
//
//
//});



//
//|---------------------------------------
//|--------------CRUD APPLICATION FORM
//|---------------------------------------
//










Route::group(['middleware' => ['web']], function(){

    Route::resource('/posts', 'PostsController');

    Route::get('/dates', function (){

        $date = new DateTime('+1 week');

        echo $date->format('m-d-y');
        echo '<br>';
        echo Carbon::now()->addDays(10)->diffForHumans();
        echo '<br>';
        echo Carbon::now()->subMonths(5)->diffForHumans();
        echo '<br>';
        echo Carbon::now()->yesterday()->diffForHumans();


    });
//accesors route
    Route::get('/getname', function (){

       $user = User::findOrFail(1);

       echo $user->name;

    });


    //mutator route
    Route::get('/setname', function (){

        $user = User::find(1);

        $user->name = "jahan";
        $user->save();

    });


});
