@extends('app')

@section('title', '投稿一覧')

@section('content')
　@include('nav')
 <div class="container">
   <div class="d-flex p-3 bd-highlight">
     <h3>新着雑学</h3>
   </div>
   <hr>
   @foreach($articles as $article)


   @include('articles.card')
   @endforeach

 </div>

@endsection
