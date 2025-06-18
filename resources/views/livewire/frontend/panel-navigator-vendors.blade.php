<div class="panel-tabs">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a onclick="GAAction(6,0,$(this));" class="nav-link nav-link--active" href="{{ route('vendor.page') }}">Výrobce</a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a onclick="GAAction(7,0,$(this));" class="nav-link" href="/pages/productindexlist.aspx">Ceníkové řazení</a>--}}
{{--        </li>--}}
    </ul>

    <div class="panel">
        {{-- A-Z písmena --}}
        <div class="panel-body">
            <div class="letters">
                <div class="letters_in">
                    @foreach($producers->keys() as $letter)
                        <a href="#{{$letter}}" onclick="findLetterBox(event, this);" class="letters_letter letter">{{ $letter }}</a>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Výrobci podle písmen --}}
        @foreach($producers as $letter => $group)
            <div class="panel vendors-list">
                <div class="panel-heading">
                    <h2 id="{{ $letter }}" class="panel-title">{{ $letter }}</h2>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-menu-list vendors">
                        @foreach($group as $producer)
                            <li class="nav-item">
{{--                                <button type="button"--}}
{{--                                        onclick="showSubCat(event, this);"--}}
{{--                                        class="nav-btn-toggle js-tooltip"--}}
{{--                                        title="Klikněte pro zobrazení stromu podkategorií"--}}
{{--                                        data-url="/{{ Str::slug($producer->ProducerName) }}/hledani-pres-vyrobce/n-0%2c0%2c1360">--}}
{{--                                    <i class="icon-plus btn_icon"></i>--}}
{{--                                </button>--}}

                                <a href="{{ route('search-via.manufacturer', ['ProducerName' => Str::slug($producer->ProducerName)]) }}" class="nav-link vendor">
                                    {{ $producer->ProducerName }}
                                </a>

                                {{-- Fiktivní podkategorie --}}
                                <ul class="nav nav-menu-list collapsed">
                                    <li class="nav-item">
                                        <button type="button" class="nav-btn-toggle sup-category"
                                                onclick="showCategories(event, this,1360,3,0,0)">
                                            <i class="icon-plus btn_icon"></i>
                                        </button>
                                        <a href="javascript:void(null)" class="nav-link sup-category"
                                           onclick="showCategories(event, this,1360,3,0,0)">
                                            Komponenty
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
