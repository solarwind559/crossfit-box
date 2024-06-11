<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('post.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            'created_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('images', $filename, 'public');
        $fullUrl = Storage::disk('public')->url($path);
            \Log::info('Generated URL: ' . $fullUrl);

        }

        else {
            $path = asset('images/blog_image.jpg');
        }

        $post = new Post;
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->image = $fullUrl;
        $post->save();

        return redirect()->route('post.show', ['id' => $post->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);

        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::findOrFail($id);
        // $post->update($request->all());
        $post->update($request->except('image'));

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'public');
            $fullUrl = Storage::disk('public')->url($path);

            $post->image = $fullUrl;
            $post->save();
        }
        return redirect()->route('post.edit', ['id' => $post->id])->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('blog')->with('deleted', 'Post deleted successfully');
    }
}
