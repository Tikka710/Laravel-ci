@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container">
    <div id="tileList" class="tileList">
      @include('articles.card')
    </div>
  </div>
@endsection
