@extends('app')

@section('title', '投稿一覧')

@section('content')
　@include('nav')
<div class="container">
 <div class="d-flex flex-column">
   <div class="text-center">
      <button type="button" class="btn btn-warning btn-rounded">
        <a href="{{ route('articles.about') }}">ザツバコとは</a>
      </button>
  </div>
  <hr>
   <div class="text-center p-2 bd-highlight">
     <h3>新着雑学</h3>
   </div>
   <div class="col mx-auto" style="width: 40rem">
    @foreach($articles as $article)


    @include('articles.card')
    @endforeach
  </div>

    <div class="mx-auto p-2">
      {{ $articles->links() }}
    </div>

 </div>
</div>
@include('footer')

@endsection
