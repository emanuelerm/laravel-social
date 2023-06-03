<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
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
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $this->validation($request->all());
        $newPost = new Post();
        $newPost->fill($form_data);
        $newPost->save();
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.index', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.index', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $form_data = $this->validation($request->all());
        $post->update($form_data);
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('message', "{$post->title} has been deleted");
    }

    private function validation($data)
	{
		$validator = Validator::make(
			$data,
			[
				'title' => 'required|max:255|min:3',
				'description' => 'required|min:50',
				'image' => 'required'
			],
			[
				'title.required' => 'Il titolo è obbligatorio',
				'title.max' => 'Il titolo non deve superare 255 caratteri',
				'title.min' => 'Il titolo deve contenere almeno tre caratteri',
				'description.min' => 'Il minimo dei caratteri accettati è 50',
				'description.required' => 'questo campo è obbligatorio',
				'image.required' => 'Devi inserire l\' url di un immagine presa da google'
			]
		)->validate();
		return $validator;
	}
}
