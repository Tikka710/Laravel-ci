@extends('app')

@section('title', '投稿一覧')

@section('content')
　@include('nav')
 <div class="container-fluid">
   <div class="d-flex p-3 bd-highlight justify-content-center">
     <h3>新着雑学</h3>
   </div>
   <hr>
   <div class="d-flex">
    @foreach($articles as $article)


    @include('articles.card')
    @endforeach
   </div>

 </div>

@endsection
