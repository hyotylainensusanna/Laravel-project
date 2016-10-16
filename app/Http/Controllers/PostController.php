<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\User;
use Image;
use PDF;
use Excel;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $users = User::all();
        return view('admin')->withPosts($posts)->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function posts()
    {
        $posts = Post::all();
        return view('welcome')->withPosts($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'excerpt' => 'required|max:255',
            'description' => 'required'
        ));
        $post = new Post;

        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->description = $request->description;

        //img
        if($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            $image = Image::make($img);

            $watermark = Image::make('279a7cd0-c14c-476c-a19d-c1b264eef942.jpg');
            $image->insert($watermark, 'bottom-right');
            $image->resize(600, null);
            $image->save($location);

            $img2 = $request->file('image');
            $filename2 = time() . '.' . $img2->getClientOriginalExtension();
            $location2 = public_path('images/pixelated/' . $filename2);
            $image2 = Image::make($img2);
            $image2->resize(600, null);
            $image2->pixelate(12);
            $image2->save($location2);

            $post->image = $filename;
        }

        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
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
        $this->validate($request, array(
            'title' => 'required|max:255',
            'excerpt' => 'required|max:255',
            'description' => 'required'
        ));

        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->excerpt = $request->input('excerpt');
        $post->description = $request->input('description');

        if($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            $image = Image::make($img);

            $watermark = Image::make('279a7cd0-c14c-476c-a19d-c1b264eef942.jpg');
            $image->insert($watermark, 'bottom-right');
            $image->resize(600, null);
            $image->save($location);

            $img2 = $request->file('image');
            $filename2 = time() . '.' . $img2->getClientOriginalExtension();
            $location2 = public_path('images/pixelated' . $filename2);
            $image2 = Image::make($img2);
            $image2->resize(600, null);
            $image2->pixelate(12);
            $image2->save($location2);

            $post->image = $filename;
        }

        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function toPDF()
    {
        $posts = Post::all();
        $pdf = PDF::loadView('posts.export',['posts' => $posts]);
        return $pdf->download('blogposts.pdf');
    }
    public function toExcel()
    {
        Excel::create('Blogposts', function ($excel) {
            $excel->sheet('blogposts', function ($sheet) {
                $data = [];
                array_push($data, array('Id', 'Title', 'Excerpt', 'Description'));
                $sheet->fromArray($data, null, "A1", false, false);
                $posts = Post::all();
                foreach ($posts as $post) {
                    $data = [];
                    array_push($data, array($post->id, $post->title, $post->excerpt, $post->description));
                    $sheet->fromArray($data, null, "A1", false, false);
                }
            });
        })->download('xlsx');
    }
}
