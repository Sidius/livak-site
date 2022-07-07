<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Poem;
use App\Models\PoemCategory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $poem_categories = PoemCategory::query()->get();
        $poems = Poem::query()->where('poem_category_id', '=', null)->get();

        return view('index', compact('poem_categories', 'poems'));
    }
}
