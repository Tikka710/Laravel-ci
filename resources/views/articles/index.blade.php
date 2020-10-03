@extends('app')

@section('title', '投稿一覧')

@section('content')
　@include('nav')
 <div class="d-flex flex-column">
   <div class="text-center p-3 bd-highlight">
     <h3>新着雑学</h3>
   </div>
   <hr>
   <div class="col-md">
    @foreach($articles as $article)


    @include('articles.card')
    @endforeach
  </div>

 </div>

@endsection
