@extends('app')

@section('title', '投稿一覧')

@section('content')
　@include('nav')
<div class="container mt-4">
  <div class="row d-flex justify-content-center">
  
    <div class="row col-md-12">
      <aside class="col-3 d-none d-md-block">
        <button type="button" class="btn btn-warning btn-rounded">
          <a href="{{ route('articles.about') }}">ザツバコとは</a>
        </button>
        @include('sidebar.list')
      </aside>
      <div class="col-md-7">
        <div class="text-center p-2 bd-highlight">
          <h3>新着雑学</h3>
          @include('articles.new_post_btn')
        </div>
        
        <div class="col mx-auto" style="width: 40rem">
          @foreach($articles as $article)
      
          @include('articles.card')
          @endforeach
 
        </div>
      
        <div class="text-center p-2">
          
        </div>
      </div>
      

    </div>
  </div>
</div>

@include('footer')

@endsection
