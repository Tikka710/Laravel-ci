@csrf

<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}s" placeholder="雑学のタイトルを入力してください">
</div>
<div class="form-group">
  <label></label>
　　<textarea name="body" required class="form-control" rows="10" placeholder="本文を入力してください">{{ $article->body ?? old('body') }}</textarea>
</div>
