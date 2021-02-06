<!-- ハンバーガーメニューボタン -->
<section class="hamburger d-md-none">
  <a href="#" class="nav-button">
    <span></span>
    <span></span>
    <span></span>
  </a>
</section>

<!-- ハンバーガーメニューのモダル -->
<nav class="menu-area navbar-dark orange lighten-4 d-md-none">
  <ul class="nav-modal mb-0 text-center">
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

</nav>