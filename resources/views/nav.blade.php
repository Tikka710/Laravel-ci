<nav class="navbar navbar-light navbar-dark orange lighten-4">

 <a class="navbar-brand" href="/"><img src="{{ secure_asset('/images/zatu.png') }}" class="logo mr-1" width="100" height="50">
   <p class="float-right text-muted h6 mt-3">知識が集まる場所</p>
 </a>

<ul class="navbar-nav ml-auto">

 @include('form')

</ul>
<!-- Hunberger -->

<button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="text-dark"><i
class="fas fa-bars fa-1x"></i></span></button>



   <div class="collapse navbar-collapse " id="navbarSupportedContent1">
    <ul class="navbar-nav ml-auto">

    @guest
    <li class="nav-item">
      <a class="nav-link text-dark" href="{{ route('register') }}">ユーザー登録</a>
    </li>
    @endguest

     @guest
     <li class="nav-item">
       <a class="nav-link text-dark" href="{{ route('login') }}">ログイン</a>
     </li>
     @endguest

     @guest
     <li class="nav-item">
       <a href="{{ route('articles.about') }}">ザツバコとは</a>
     </li>
     @endguest

     @auth
     <li class="nav-item">
       <a class="nav-link text-dark" href="{{ route('articles.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
     </li>

     @endauth


     @auth
     <!-- Dropdown -->
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle text-dark" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-user-circle"></i>
       </a>
       <div class="dropdown-menu dropdown-menu-right dropdown-success" aria-labelledby="navbarDropdownMenuLink">
         <button class="dropdown-item" type="button"
                 onclick="location.href='{{ route("users.show", ["name" => Auth::user()->name]) }}'">
           マイページ
         </button>
         <div class="dropdown-divider"></div>
         <button form="logout-button" class="dropdown-item" type="submit">
           ログアウト
         </button>
       </div>
     </li>
     <form id="logout-button" method="POST" action="{{ route('logout') }}">
       @csrf
     </form>
     <!-- Dropdown -->
     @endauth

   </ul>
 </div>
  <!-- Hunberger -->

  </nav>
