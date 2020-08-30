@extends('app')

@section('title', '雑学投稿')

@include('nav')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card mt-3">
        <h2 class="text-center mt-2">雑学投稿</h2>
        <div class="card-body pt-0">
          @include('error_card_list')
          <div class="card-text">
            <form method="POST" action="{{ route('articles.store') }}">
              @include('articles.form')
              <button type="submit" class="btn btn-outline-warning btn-block">投稿する</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
