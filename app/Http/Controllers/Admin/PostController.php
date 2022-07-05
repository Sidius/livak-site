<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poem;
use App\Models\PoemCategory;
use App\Models\Post;
use Illuminate\Http\Request;
use function Psy\debug;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $title = 'Список статей';

        $posts = Post::query()->paginate(5);
        return view('admin.posts.index', compact('posts', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $title = 'Создать статью';

        return view('admin.posts.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
        ]);

        Post::query()->create($request->all());

        return redirect()->route('admin.poems.index')->with('success', 'Статья создана');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $title = 'Редактировать статью';
        $post = Post::query()->find($id);

        if ($post) {
            return view('admin.posts.edit', compact('post', 'title'));
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
        ]);

        $post = Post::query()->find($id);
        $post->update($request->all());

        return redirect()->route('admin.posts.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $post = Post::query()->find($id);
        if ($post) {
            $post->delete();
            return redirect()->route('admin.posts.index')->with('success', 'Статья удалена');
        }
        abort(404);
    }
}
