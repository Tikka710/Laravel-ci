<form class="active-cyan-4" action="{{ url('/search')}}">
     <input class="form-control" type="text" name="keyword" value="@if (isset( $keyword )) $keyword @endif" placeholder="雑学のタイトルを入力">
</form>
