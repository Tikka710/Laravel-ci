@extends('app')

@section('title', $tag->hashtag)

@section('content')
  @include('nav')
  <div class="container">
    <div class="card card-cascade wider reverse mt-3">
      <div class="card-body card-body-cascade text-center">
        <h2 class="h4 card-title m-0"><strong>{{ $tag->hashtag }}の雑学</strong></h2>
        <div class="card-text text-right">
          {{ $tag->articles->count() }}件
        </div>
      </div>
    </div>
      </hr>
    @foreach($tag->articles as $article)
      @include('articles.card')
    @endforeach
  </div>
@endsection
