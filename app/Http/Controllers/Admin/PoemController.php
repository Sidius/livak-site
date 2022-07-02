<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poem;
use App\Models\PoemCategory;
use Illuminate\Http\Request;
use function Psy\debug;

class PoemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $title = 'Список поэм';

        $poems = Poem::query()->paginate(5);
        return view('admin.poems.index', compact('poems', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $title = 'Создать поэму';

        $poem_categories = PoemCategory::query()->pluck('title', 'id')->all();

        return view('admin.poems.create', compact('title', 'poem_categories'));
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
            'title' => 'required',
            'text' => 'required',
            'poem_category_id' => 'nullable|integer',
        ]);

        Poem::query()->create($request->all());

        return redirect()->route('admin.poems.index')->with('success', 'Поэма создана');
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
        $title = 'Редактировать поэму';
        $poem = Poem::query()->find($id);

        if ($poem) {
            $poem_categories = PoemCategory::query()->pluck('title', 'id')->all();;

            return view('admin.poems.edit', compact('poem', 'poem_categories', 'title'));
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
            'title' => 'required',
            'text' => 'required',
            'poem_category_id' => 'integer',
        ]);

        $poem = Poem::query()->find($id);
        $poem->update($request->all());

        return redirect()->route('admin.poems.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $poem = Poem::query()->find($id);
        if ($poem) {
            $poem->delete();
            return redirect()->route('admin.poems.index')->with('success', 'Поэма удалена');
        }
        abort(404);
    }
}
