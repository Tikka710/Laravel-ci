  
<li class="list-group-item card">
  <div class="py-3">
      <form method="POST" action="{{ route('comments.store') }}">
          @csrf

          <div class="form-group row mb-0">
  
              <div class="col-md-12">
                  <input type="hidden" name="article_id" value="{{ $article->id }}">
                  <textarea class="form-control @error('comment') is-invalid @enderror" name="comment" rows="4">
                  @error('comment')
                      {{ old('comment') }}
                  @enderror
                  </textarea>
                  @error('comment')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="form-group row mb-0">
              <div class="col-md-12 text-right">
                  <p class="mb-4 text-danger">250文字以内</p>
                  <button type="submit" class="btn sunny-morning-gradient">
                      コメントする
                  </button>
              </div>
          </div>
      </form>
  </div>
</li>