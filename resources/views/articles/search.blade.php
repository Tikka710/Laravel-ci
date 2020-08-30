@extends('app')

@section('title', '検索結果')

@section('content')
  @include('nav')
  <div class="container">

    @if(!empty($search))
      @foreach($search as $article)
          @include('articles.card')
      @endforeach

    @endif
  </div>
@endsection
