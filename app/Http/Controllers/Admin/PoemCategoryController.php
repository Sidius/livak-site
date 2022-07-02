<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PoemCategory;
use Illuminate\Http\Request;

class PoemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $title = 'Список категорий поэм';

        $poem_categories = PoemCategory::query()->paginate(5);
        return view('admin.poem_categories.index', compact('poem_categories', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $title = 'Создать категорию поэмы';
        return view('admin.poem_categories.create', compact('title'));
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
        ]);

        PoemCategory::query()->create($request->all());

        return redirect()->route('admin.poem_categories.index')->with('success', 'Категория поэмы создана');
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
        $title = 'Редактировать категорию поэмы';
        $poem_category = PoemCategory::query()->find($id);

        if ($poem_category) {
            return view('admin.poem_categories.edit', compact('poem_category', 'title'));
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
        ]);

        $poem_category = PoemCategory::query()->find($id);
        $poem_category->update($request->all());

        return redirect()->route('admin.poem_categories.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $poem_category = PoemCategory::query()->find($id);
        if ($poem_category) {
            $poem_category->delete();
            return redirect()->route('admin.poem_categories.index')->with('success', 'Категория поэмы удалена');
        }
        abort(404);
    }
}
