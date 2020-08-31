<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers;
use App\Article;
use App\Tag;
use App\User;


class SearchController extends Controller
{
  public function search(Request $request)
  {

    $keyword = $request->input('keyword');

    $query = Article::query();

    $keyword_kana = mb_convert_kana($request->keyword,"KVC");
    $keyword_katakana = mb_convert_kana($request->keyword,"KVc");

   if(!empty($keyword))
   {
    $query->where('title','like','%'.$keyword.'%')
          ->orWhere('title','LIKE','%'.$keyword_kana.'%')
          ->orWhere('title','LIKE','%'.$keyword_katakana.'%');
   };

   $search = $query->orderBy('created_at')->get();

    return view('articles.search')->with(compact("search","keyword"));

  }
}
