@forelse ($comments as $comment)
<li class="list-group-item">
  <div class="py-3 w-100 d-flex">
    <div class="ml-2 d-flex flex-column">
    </div>
    <div class="d-flex justify-content-end flex-grow-1">
        <p class="mb-0 font-weight-lighter">
            {{ $comment->created_at->format('Y-m-d H:i') }}
        </p>
    </div>
  </div>
    <div class="py-3">
      {!! nl2br(e($comment->comment)) !!}
    </div>
</li>
 @empty
  <li class="list-group-item ">
    <p class="mb-0 text-secondary">コメントはまだありません。</p>
  </li>
@endforelse