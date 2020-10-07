@csrf

<div class="md-form">
  <label>タイトル(50)</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}" placeholder="雑学のタイトルを入力してください(必須)">
</div>
<div class="form-group">
  <article-tags-input :initial-tags='@json($tagNames ?? [])' :autocomplete-items='@json($allTagNames ?? [])'>
  </article-tags-input>
</div>
<div class="form-group">
  <label></label>
　　<textarea name="body" required class="form-control" rows="6" placeholder="説明を入力してください">{{ $article->body ?? old('body') }}</textarea>
</div>
