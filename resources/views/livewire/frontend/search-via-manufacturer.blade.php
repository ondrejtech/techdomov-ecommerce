<div class="container" role="main">
    <div class="panel-bar">
        <div class="panel-bar_body">
            <h1 class="panel-bar_title">{{ ucfirst($producerName) }}</h1>
            <div class="panel-bar_actions">
                <a class="btn btn--open-detail"
                   href="/{{ Str::slug($producerName) }}/n-0%2c0%2c478"
                   title="Přejít na všechny produkty {{ $producerName }}">
                    Přejít na produkty výrobce
                </a>
            </div>
        </div>
    </div>
    @foreach($categories as $category)
        <div class="panel">
            <div class="panel-body">
                <a class="panel-title"
                   href="/{{ Str::slug($producerName) }}/{{ Str::slug($category->CategoryName) }}/n-18%2c0%2c478">
                    {{ $category->CategoryName }}
                </a>
                <ul class="nav nav-menu-list">
                    <li class="nav-item">
                        <a class="nav-link nav-link--highlight head"
                           href="/{{ Str::slug($producerName) }}/{{ Str::slug($category->CategoryName) }}/prislusenstvi-k-mobilum-a-tabletum/n-18%2c262%2c478">
                            Příslušenství k Mobilům a Tabletům
                        </a>

                        <span class="badge">1</span>
                        <ul class="nav nav-menu-list nav-menu-list--inline">
                            {{-- Případné další úrovně --}}
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    @endforeach
</div>
