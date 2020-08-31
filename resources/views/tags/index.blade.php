@extends('app')

@section('title', 'タグ一覧')

@section('content')
  @include('nav')
<div class="container">

  <ul class="list-group list-group-flush">
    @foreach(tags as $allTagNames)
    <li class="list-group-item">
    <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="border p-1 mr-1 mt-1 text-muted">
      {{ $tag->name }}
    </a>
   </li>
    @endforeach
 </ul>

</div>
@endsection
