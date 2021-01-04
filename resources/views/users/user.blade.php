<div class="card shadow-none mt-3">
  <div class="card-body mx-auto">
    <div class="d-flex flex-row">
      <div class="mr-auto">
        <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
          <i class="far fa-user-circle fa-3x"></i>
        </a>
      </div>
      <div class="col-5 text-center pr-0">
      @if( Auth::id() !== $user->id )
        <follow-button
          class="ml-auto"
          :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
          :authorized='@json(Auth::check())'
          endpoint="{{ route('users.follow', ['name' => $user->name]) }}"
        >
        </follow-button>
 
      @endif
      </div>
    </div>
    <h2 class="h5 card-title mr-auto">
      <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
        {{ $user->name }}
      </a>
    </h2>
  </div>
  <div class="card-body mx-auto">
    <div class="card-text">
      <a href="{{ route('users.followings', ['name' => $user->name]) }}" class="text-muted">
        {{ $user->count_followings }} フォロー
      </a>
      <a href="{{ route('users.followers', ['name' => $user->name]) }}" class="text-muted">
        {{ $user->count_followers }} フォロワー
      </a>
    </div>
  </div>
</div>
