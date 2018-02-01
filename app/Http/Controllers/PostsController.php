<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $posts = Post::Latest();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {


        //save file to database

        $input = $request->all();

        if($file = $request->file('file')){

            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $input['path'] = $name;

        }

        Post::create($input);



        //get file details

//        $file = $request->file('file');
//
//        echo $file->getClientOriginalName();
//        echo "<br>";
//        echo $file->getClientSize();


        //validations

//        $this->validate($request, [
//
//            'title'=>'required|max:4'
//
//
//
//        ]);


        //
        //return $request->all();
        //return $request->get('title');

        //method 1
//        Post::create($request->all());
//
//
//         return redirect('/posts');
//
//

//        //method 2
//        $input = $request->all();
//        $input['title'] = $request->title;
//
//        //method 3
//        $post = new Post;
//        $post->title = $request->title;
//        $post->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::findOrfail($id);

        return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $post = Post::findOrfail($id);
        $post->delete();

        return redirect('/posts');

    }

    public function contact() {


        $people = ['saikat', 'sajan', 'sabbir', 'didar', 'ratul'];

        return view('contact', compact('people'));
    }

    public function about() {
        return view('about');
    }

    public function show_post($id, $name, $password) {


        //return view('post')->with('id', $id);
        return view('post', compact('id','name', 'password'));
    }

    public function helpLine($name, $phone, $contactHour) {


        return view('helpLine', compact('name', 'phone', 'contactHour'));
    }

    public function employee($id, $salary, $name ) {


        return view('employee', compact('id', 'salary', 'name'));
    }

    public function post() {
        return view('post');
    }


}
