<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Poem;
use App\Models\PoemCategory;
use Illuminate\Http\Request;

class PoemController extends Controller
{
    public function showCategory($slug)
    {
        $poem_categories = PoemCategory::query()->get();
        $poem_category = PoemCategory::query()->where('slug', $slug)->with('poems')->firstOrFail();

        $title = 'Категория '.$poem_category->title;
        $poems = Poem::query()->where('poem_category_id', null)->get();

        return view('poems.category', compact('title', 'poem_category', 'poem_categories', 'poems'));
    }

    public function show($slug)
    {
        $poem = Poem::query()->where('slug', $slug)->with('poemCategory')->firstOrFail();
        $poem->views++;
        $poem->update();

        $title = $poem->title;

        return view('poems.show', compact('poem', 'title'));
    }
}
