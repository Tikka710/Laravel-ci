@extends('app')

@section('title', '投稿一覧')

@section('content')
　@include('nav')

<div class="container mt-4">
  <div class="row d-flex justify-content-center">
  
    <div class="row col-md-12">
      <aside class="col-3 d-none d-md-block position-fixed">
        <button type="button" class="btn btn-warning btn-rounded">
          <a class="link-dark" href="{{ route('articles.about') }}">ザツバコとは</a>
        </button>
        
        @include('sidebar.list')
      </aside>
      <main class="col-md-7 offset-md-5">
        
        <div class="text-center p-2 bd-highlight">
          <h3 class="text-dark">新着雑学</h3>
          
        </div>
        
        <div class="col">
          @foreach($articles as $article)
      
          @include('articles.card')
          @endforeach
         
        </div>
        
        <div class="text-center p-2">
          {{ $articles->links() }}
        </div>

        @include('articles.new_post_btn')
      </main>
      
      
    </div>
    
  </div>
  
</div>

@include('footer')

@endsection
