<footer class="page-footer font-small unique-color-dark pt-4">
  <div class="container">
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-block btn-info">
            <i class="fab fa-google mr-1"></i>Googleで登録
        </a>
      </li>
    </ul>
    <div class="footer-copyright text-center py-3">© 2020 Tiika
    </div>
  </div>
</footer>
