<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class TagController extends Controller
{
  public function show(string $name)
  {
      $tag = Tag::where('name', $name)->first();

      return view('tags.show', ['tag' => $tag]);
  }

  public function index()
  {
    $allTagNames = Tag::all()->map(function ($tag) {
            return ['text' => $tag->name];
        });

    return view('tags.index', [
            'allTagNames' => $allTagNames,
        ]);

  }
}
