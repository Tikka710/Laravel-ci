<div class="card mb-4 sidebar-content">
  <div class="card-header text-center"><i class="fas fa-tags mr-2"></i>メインタグ</div>
  <div class="card-body main-tag-list py-3 mx-auto">
      <a href="{{
            \App\Tag::where('name', '生き物')->first()
            ? route('tags.show', ['name' => '生き物'])
            : ''
        }}" class="link-dark">
            <p>#生き物</p>
      </a>
      <a href="{{
            \App\Tag::where('name', '宇宙')->first()
            ? route('tags.show', ['name' => '宇宙'])
            : ''
        }}" class="link-dark">
            <p>#宇宙</p>
        </a>
        <a href="{{
            \App\Tag::where('name', '漢字')->first()
            ? route('tags.show', ['name' => '漢字'])
            : ''
        }}">
            <p>#漢字</p>
        </a>
  </div>





</div>