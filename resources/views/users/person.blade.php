<div class="card mt-3">
  <div class="card-body">
    <div class="d-flex justify-content-between row">
      <div class="col-2">
      <a href="{{ route('users.show', ['name' => $person->name]) }}" class="text-dark">
        <i class="far fa-user-circle fa-3x"></i>
      </a>
    </div>
    <div class="col-2">
      @if( Auth::id() !== $person->id )
        <follow-button
          class="ml-auto"
          :initial-is-followed-by='@json($person->isFollowedBy(Auth::user()))'
          :authorized='@json(Auth::check())'
          endpoint="{{ route('users.follow', ['name' => $person->name]) }}"
        >
        </follow-button>
      @endif
      </div>
    </div>
    <h2 class="h5 card-title ml-auto">
      <a href="{{ route('users.show', ['name' => $person->name]) }}" class="text-dark">{{ $person->name }}</a>
    </h2>
  </div>
</div>
