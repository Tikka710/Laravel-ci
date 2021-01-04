@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container">
    <div id="tileList" class="tileList">
      @include('articles.card')
    </div>

    <div class="mb-3">
      <ul class="list-group card mt-3">
          <li class="card-header sunny-morning-gradient text-white text-center">コメント</li>
          @guest
            <li class="list-group-item">
              <p class="mb-0 text-secondary">ログインするとコメントできるようになります。</p>
            </li>
          @endguest

          @auth
          <!-- コメント投稿フォーム -->
          @include('comments.form')

          @endauth
          <!-- コメント一覧 -->
          @include('comments.card')
      </ul>
      {{ $comments->links('pagination::default') }}
  </div>
  </div>
@endsection
