<header id="pageHeader" class="page-header" role="banner" aria-label="Záhlaví">
    <div class="page-header_container">
        <div id="pageHeaderIn" class="page-header_in">

            {{--            Logo --}}
            <div class="page-header_item logo-box">
                <div class="logo-box_in">
                    <a href="/" class="logo" title="Přejít na úvodní stránku">
                        {{--                        <img itemprop="logo" src="https://edshopb2b.edsystem.cz/Images/logo_ci.svg" alt="eD system a.s. [logo]"> --}}
                        {{--                        <span itemprop="legalName" class="hide-common-user text-hidden-desc">eD system a.s.</span> --}}
                    </a>
                </div>
            </div>

            <hr class="hide">

            <div id="searchForm_wrap" class="page-header_item search-form-wrap">
                <form id="searchForm" class="search-form validate" role="search" aria-label="Vyhledávání"
                    action="/pages/productlist.aspx" novalidate="novalidate">
                    <div class="search-form_in">
                        <div class="input-group">
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input wire:model.live='search' type="search" value="" name="fulltext"
                                id="quick_search_fulltext" class="form-control search-form_field ui-autocomplete-input"
                                placeholder="Hledaný výraz nebo kód produktu">
                            <div class="input-group-btn">
                                <button class="btn search-form_btn" type="submit" title="Vyhledat"
                                    aria-label="Vyhledat">
                                    <i class="btn_icon icon-search"></i>
                                    <span class="btn_label">Hledat</span>
                                </button>
                            </div>
                        </div>
                        @if (sizeof($products) > 1)
                            <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all whisperer"
                                id="ui-id-1" tabindex="0"
                                style="z-index: 100; max-height: 683px; top: 40px; left: 0px; width: 604px;">
                                <li class="ui-autocomplete-category whisperer_item whisperer_header">Produkty</li>
                                @foreach ($products as $product)
                                    <li class="whisperer_item ui-menu-item" role="presentation">
                                    {{-- <a href="/pages/productlist.aspx?navdata=0,0,190" class="whisperer_box-img whisperer_box-img--vendor ui-corner-all" id="ui-id-34"
                                            tabindex="-1">
                                            <img class="pro-img" src="/IMGCACHE/ven/190_0a_0.jpg"
                                                alt="">
                                    </a> --}}
                                    <a href="{{ route('product.search', ['ProId' => $product->ProId]) }}" class="whisperer_name whisperer_name--vendor item-vendor ui-corner-all"
                                            data-vendor-id="190"
                                            id="ui-id-35" tabindex="-1">
                                            {{ $product->Name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <span class="search-form_info-icon js-tooltip" data-hasqtip="0"
                        oldtitle="Zadaný výraz hledá přes kód produktu, id produktu, název produktu, výrobce, kategorii"
                        title=""><i class="icon-info"></i></span>
                </form>
            </div>

            <hr class="hide">

            @if (auth()->check())
                <div class="page-header_item">
                    <button id="searchForm_touchBtn" class="btn search-form_touch-btn" type="button">
                        <i class="icon-search btn_icon"></i>
                    </button>

                    {{--                Head user menu --}}
                    <div id="headUserMenu" class="head-user-menu">

                        <div class="dropdown">
                            <button class="btn dropdown-toggle user-info" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-user btn_icon user-info_icon"></i>
                                <span class="btn_label user-info_label">
                                    <strong class="user-info_name js-tooltip js-tooltip--top-left"
                                        title="Ondrej Zelina ">{{ auth()->user()->name . ' ' . auth()->user()->surname . ' | ' }}</strong>
                                    <span class="user-info_id">
                                        <span class="highlight">
                                            ID: 1440560
                                        </span>
                                    </span>
                                </span>
                                <span class="dropdown-caret"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu--right">
                                <div class="dropdown-menu_in">
                                    <ul class="dropdown-menu-group">
                                        <li class="dropdown-item-wrap dropdown-item-wrap--user-logout visible-touch">
                                            <a href="#" wire:click.prevent="logout"
                                                class="dropdown-item dropdown-item--user-logout" title="Odhlásit">
                                                <i class="icon-logout dropdown-item_icon"></i>
                                                <span class="dropdown-item_label">Odhlásit</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item-wrap"><a
                                                class="dropdown-item dropdown-item--highlight"
                                                href="{{ route('admin.dashboard') }}"><span
                                                    class="dropdown-item_label">Můj přehled</span></a></li>
                                        {{-- <li class="dropdown-item-wrap"><a class="dropdown-item dropdown-item--highlight" href="/pages/administration/basketadmin.aspx"><span class="dropdown-item_label">Košíky a nabídky</span></a></li> --}}
                                        <li class="dropdown-item-wrap"><a
                                                class="dropdown-item dropdown-item--highlight"
                                                href="{{ route('admin.my-orders') }}"><span
                                                    class="dropdown-item_label">Objednávky</span></a></li>
                                        <li class="dropdown-item-wrap"><a
                                                class="dropdown-item dropdown-item--highlight"
                                                href="{{ route('admin.orders-items') }}"><span
                                                    class="dropdown-item_label">Položky objednávek</span></a></li>
                                        <li class="dropdown-item-wrap"><a
                                                class="dropdown-item dropdown-item--highlight"
                                                href="{{ route('admin.my-invoices') }}"><span
                                                    class="dropdown-item_label">Faktury</span></a></li>
                                        {{-- <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/orderlist.aspx?notdeliv=on"><span class="dropdown-item_label">Nedodané objednávky</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/orderbacklog.aspx?backlogonly=1"><span class="dropdown-item_label">Nedodané zboží</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/expeditionlist.aspx?sent=on"><span class="dropdown-item_label">Odeslané zboží</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/deliverylist.aspx"><span class="dropdown-item_label">Dodací listy</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/deliverylist.aspx?deliv=on"><span class="dropdown-item_label">Vyfakturované zboží</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/invoicelist.aspx?nocompl=on"><span class="dropdown-item_label">Nevyřízené faktury</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/invoicepay.aspx"><span class="dropdown-item_label">Platba neuhrazených faktur</span></a></li> --}}
                                    </ul>
                                    <ul class="dropdown-menu-group">
                                        {{-- <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/dashboard.aspx#documents"><span class="dropdown-item_label">Další doklady/nastavení</span></a></li> --}}
                                        <li class="dropdown-item-wrap"><a class="dropdown-item"
                                                href="{{ route('admin.statistics-sales-by-category') }}"><span
                                                    class="dropdown-item_label">Statistika prodeje</span></a></li>
                                        {{-- <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/expeditionlist.aspx"><span class="dropdown-item_label">Expedice (balíky)</span></a></li> --}}
                                        <li class="dropdown-item-wrap"><a class="dropdown-item"
                                                href="{{ route('admin.my-complaints') }}"><span
                                                    class="dropdown-item_label">Reklamace</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item"
                                                href="{{ route('admin.credit-note') }}"><span
                                                    class="dropdown-item_label">Dobropisy</span></a></li>
                                        {{-- <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/invoiceretsummary.aspx"><span class="dropdown-item_label">Žádosti o vratku</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/pay.aspx"><span class="dropdown-item_label">Platby</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/documents/licenselist.aspx"><span class="dropdown-item_label">Přehled licencí</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/reports/export/exportws.aspx"><span class="dropdown-item_label">Ceník</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/fidelitystatkonto.aspx"><span class="dropdown-item_label">Motivační programy</span></a></li>
                                        <li class="dropdown-item-wrap"><a class="dropdown-item" href="/pages/productcompare.aspx"><span class="dropdown-item_label">Porovnání produktů</span></a></li> --}}
                                        <li class="dropdown-item-wrap"><a class="dropdown-item"
                                                href="{{ route('admin.my-settings') }}"><span
                                                    class="dropdown-item_label">Moje nastavení</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="#" wire:click.prevent="logout" class="btn btn-user-logout" title="Odhlásit">
                            <i class="icon-logout btn_icon btn-user-logout_icon"></i>
                            <span class="btn_label btn-user-logout_label">Odhlásit</span>
                        </a>

                    </div>
                    {{--                end  head user menu --}}
                    <hr class="hide">
                    {{--                head shopping-cart --}}
                    <div id="headerBasket" class="basket-header">


                        <div id="basketsList" class="baskets-list">
                            <input type="hidden" name="b2c" value="0">
                            <div class="dropdown">
                                <button type="button" id="basketsList_btnToggle"
                                    class="btn dropdown-toggle baskets-list_btn-toggle"
                                    data-label="Zobrazit seznam košíků" onclick="GAAction(10,0,$(this));">
                                    <i id="basketsList_preloader" class="icon-folder"></i>
                                </button>
                            </div>
                            <div id="basketsList_overviewBox" class="dropdown-menu baskets-list_overview-box"
                                aria-labelledby="basketsList">
                                <div class="dropdown-buttons dropdown-buttons--is-top">
                                    <div class="dropdown-buttons_btn-item">
                                        <button id="basketsList_btnBaskets" type="button"
                                            class="btn dropdown-buttons_btn baskets-list_btn baskets-list_btn--ovrw-baskets selected"
                                            data-type-basket="0" onclick="Header.basketsList_control.open(0);">
                                            <span class="btn_label">Přehled košíků</span>
                                        </button>
                                    </div>
                                    <div class="dropdown-buttons_btn-item">
                                        <button id="basketsList_btnOffers" type="button"
                                            class="btn dropdown-buttons_btn baskets-list_btn baskets-list_btn--ovrw-offers"
                                            data-type-basket="1" onclick="Header.basketsList_control.open(1);">
                                            <span class="btn_label">Přehled nabídek</span>
                                        </button>
                                    </div>
                                </div>
                                <div id="basketsList_placeholder" class="baskets-list_placeholder"></div>
                                <div class="dropdown-item baskets-list_item baskets-list_item--btn-show-add-form">
                                    <button id="basketsList_btnShowAddForm" type="button"
                                        class="baskets-list_btn-show-add-form"
                                        onclick="GAAction(10,0,$(this));Header.basketsList_control.toggleShowAddForm();">
                                        <i class="btn_icon icon-plus"></i>
                                        <span class="btn_label">Založit nový košík</span>
                                    </button>
                                    <form id="basketsList_addForm" class="baskets-list_add-form">
                                        <div class="form-group">
                                            <input id="basketsList_addForm_inp" type="text" class="form-control"
                                                placeholder="Zadejte název nového košíku"
                                                onkeypress="if (event.which == 13) {event.preventDefault(); Header.basketsList_control.addNewBasket();}">
                                        </div>
                                        <div class="buttons-area">
                                            <button type="button"
                                                class="btn baskets-list_add-form_btn baskets-list_add-form_btn--close"
                                                data-title="tip_cancel"
                                                onclick="Header.basketsList_control.toggleShowAddForm();">
                                                <i class="btn_icon icon-close"></i>
                                                <span class="btn_label">Zrušit</span>
                                            </button>

                                            <button type="button"
                                                class="btn baskets-list_add-form_btn baskets-list_add-form_btn--add"
                                                data-title="tip_insert"
                                                onclick="Header.basketsList_control.addNewBasket();">
                                                <i class="btn_icon icon-plus"></i>
                                                <span class="btn_label">Vložit</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="dropdown-buttons">
                                    <div class="dropdown-buttons_btn-item">
                                        <a href="/pages/administration/basketadmin.aspx" id="basketsList_btnGoAdmin"
                                            class="btn dropdown-buttons_btn baskets-list_btn baskets-list_btn--go-admin"
                                            onclick="GAAction(10,0,$(this));">
                                            <span class="btn_label">Přejít na stránku administrace</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <input type="hidden" id="BasketID" value="22502293">
                        <input type="hidden" id="BasketCurID" value="8">

                        <div id="basketInfo" class="basket-info">
                            <div class="dropdown">
                                <a href="{{ route('shopping-cart') }}" id="basketInfo_btnToggle"
                                    class="btn dropdown-toggle basket-info_btn-toggle">
                                    <i id="basketInfo_preloader" class="icon-basket icon-basket-info_btn-toggle"></i>

                                    <span id="basketInfo_itemsCount"
                                        class="badge badge--primary basket-info_items-count">{{ $itemCount }}</span>

                                    <span id="basketInfo_price"
                                        class="basket-info_price">{{ number_format($total, 2, ',', ' ') }} Kč</span>
                                    <span class="dropdown-caret"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{--                    <button id="headMainMenu_btnToggle" class="btn head-main-menu_btn-toggle-menu" type="button"><i class="icon-menu btn_icon"></i><span class="btn_label">Zobrazit menu</span></button> --}}
                    {{--                end head shopping-cart --}}
                </div>
            @else
                <div class="page-header_item">
                    <button id="searchForm_touchBtn" class="btn search-form_touch-btn" type="button">
                        <i class="icon-search btn_icon"></i>
                    </button>
                    <div id="headUserMenu" class="head-user-menu">

                        <a href="{{ route('admin.register') }}" type="button"
                            class="btn btn--other btn-user-login user-info">
                            <i class="icon-invoice btn_icon btn-user-login_icon"></i>
                            <span class="btn_label btn-user-login_label">Registrace</span>
                        </a>
                        <a href="{{ route('admin.login') }}" class="btn btn-user-login user-info">
                            <i class="icon-user btn_icon btn-user-login_icon"></i>
                            <span class="btn_label btn-user-login_label">Přihlášení</span>
                        </a>

                    </div>



                    <hr class="hide">

                    {{--                    <button id="headMainMenu_btnToggle" class="btn head-main-menu_btn-toggle-menu" type="button"><i class="icon-menu btn_icon"></i><span class="btn_label">Zobrazit menu</span></button> --}}
                </div>
            @endif

            <div class="flex-line-break"></div>

            {{--            Main Menu --}}
            <div id="headMainMenu" class="head-nav head-main-menu">
                <nav class="head-nav_in" role="navigation" aria-label="Hlavní navigace">
                    <ul class="head-nav_group head-nav_group--level-1 level-1" role="menu">

                        @foreach ($categories as $category)
                            <li
                                class="head-nav_item head-nav_item--level-1 head-nav_item--it-products has-childs head-nav_item--has-childs is-current-floor is-current">
                                <div class="nav-link-wrap head-nav_link-wrap">
                                    <a class="nav-link head-nav_link head-nav_link--level-1 head-nav_link--has-childs head-nav_link--is-current head-nav_link{{ $category->background }}"
                                        onclick="extAction(1,1,$(this));" data-nav-id="52"
                                        href="{{ route('category.root', ['RootCategoryCode' => $category->SuperCategoryCode, 'RootCategoryName' => $category->SuperCategoryName]) }}">
                                        <i class="icon icon-it-products head-nav_link-icon"></i>
                                        <span class="head-nav_link-label">{{ $category->SuperCategoryName }}</span>
                                    </a>

                                    <div class="btn-toggle head-nav_btn-toggle-subgroup"><i
                                            class="icon-arrow-right head-nav_toggle-icon"></i></div>

                                </div>

                                <div
                                    class="sub-menu head-nav_sub-menu head-nav_sub-menu--level-1 head-nav_sub-menu{{ $category->background }}">
                                    <button type="button" class="btn btn-sub-menu-close head-nav_sub-menu_btn-close"
                                        onclick="MainMenu.navChildClose($(this).closest('li'));">
                                        <i class="icon-arrow_left btn_icon"></i>
                                        <span class="btn_label">{{ $category->SuperCategoryName }}</span>
                                    </button>
                                    <ul class="level-2 head-nav_group head-nav_group--level-2">

                                        @foreach ($category->children as $subcategory)
                                            <li
                                                class="head-nav_item head-nav_item--level-2 has-childs head-nav_item--has-childs">
                                                <div class="nav-link-wrap head-nav_link-wrap">
                                                    <a class="nav-link head-nav_link nav-link head-nav_link--level-2 head-nav_link--has-childs"
                                                        href="{{ route('category.super', ['RootCategoryCode' => $category->SuperCategoryCode, 'SuperCategoryCode' => $subcategory->SuperCategoryCode, 'SuperCategoryName' => $subcategory->SuperCategoryName]) }}">

                                                        @php
                                                            $firstCategory = $subcategory->childrenCategory->first();
                                                        @endphp

                                                        @if ($firstCategory && $firstCategory->ImageList)
                                                            <img style="width: 22%"
                                                                class="head-nav_link-media head-nav_link-media--img"
                                                                src="{{ $firstCategory->ImageList }}"
                                                                alt="{{ $firstCategory->CategoryName }}">
                                                        @endif
                                                        <span
                                                            class="head-nav_link-label">{{ $subcategory->SuperCategoryName }}</span>
                                                    </a>

                                                    <div class="btn-toggle head-nav_btn-toggle-subgroup"><i
                                                            class="icon-arrow_right head-nav_toggle-icon"></i></div>

                                                </div>

                                                <div class="sub-menu head-nav_sub-menu head-nav_sub-menu--level-2">
                                                    <button type="button"
                                                        class="btn btn-sub-menu-close head-nav_sub-menu_btn-close"
                                                        onclick="MainMenu.navChildClose($(this).closest('li'));">
                                                        <i class="icon-arrow_left btn_icon"></i>
                                                        <span
                                                            class="btn_label">{{ $subcategory->SuperCategoryName }}</span>
                                                    </button>
                                                    <ul class="level-3 head-nav_group head-nav_group--level-3">

                                                        @foreach ($subcategory->childrenCategory as $item)
                                                            <li data-menu-pnc="115" data-menu-pnsub="11"
                                                                class="head-nav_item head-nav_item--level-3 has-childs head-nav_item--has-childs has-childs head-nav_item--has-childs">

                                                                <div class="nav-link-wrap head-nav_link-wrap">
                                                                    <a class="nav-link head-nav_link head-nav_link--level-3 has-childs head-nav_link--has-childs"
                                                                        onclick="extAction(1,2,$(this));"
                                                                        data-nav-id="115"
                                                                        href="{{ route('category', ['RootCategoryCode' => $category->SuperCategoryCode, 'SuperCategoryCode' => $subcategory->SuperCategoryCode, 'CategoryName' => $item->CategoryName, 'CategoryCode' => $item->CategoryCode]) }}">
                                                                        <span class="head-nav_link-label">
                                                                            {{ $item->CategoryName . ' | ' }}</span>
                                                                    </a>

                                                                    <div
                                                                        class="btn-toggle head-nav_btn-toggle-subgroup">
                                                                        <i
                                                                            class="icon-arrow_right head-nav_toggle-icon"></i>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>

                                            </li>
                                        @endforeach

                                        {{--                                    <li class="head-nav_item head-nav_item--level-2"><div class="nav-link-wrap head-nav_link-wrap hide-nav-mobile"><a class="nav-link head-nav_link head-nav_link--level-3" href="/pages/microsoftcsp.aspx"><img class="head-nav_link-media head-nav_link-media--img" style="width:60px" src="https://edshopb2b.edsystem.cz/Images/ed_logo.png"><span class="head-nav_link-label bold">Microsoft CSP</span></a></div><div class="nav-link-wrap head-nav_link-wrap hide-nav-mobile"><a class="nav-link head-nav_link head-nav_link--level-3" href="https://www.itdasa.cz/"><span class="head-nav_link-label bold">Služby DaaS</span></a></div></li><li class="head-nav_item head-nav_item--level-2 hide-nav-desktop"><div class="nav-link-wrap head-nav_link-wrap"><a class="nav-link head-nav_link head-nav_link--level-2" href="/pages/microsoftcsp.aspx"><span class="head-nav_link-label">Microsoft CSP</span></a></div></li><li class="head-nav_item head-nav_item--level-2 hide-nav-desktop"><div class="nav-link-wrap head-nav_link-wrap"><a class="nav-link head-nav_link head-nav_link--level-2" href="https://www.itdasa.cz/"><span class="head-nav_link-label">Služby DaaS</span></a></div></li> --}}


                                    </ul>
                                </div>

                            </li>
                        @endforeach


                        <li class="head-nav_item head-nav_item--level-1 head-nav_item--invisible">
                            <div class="nav-link-wrap head-nav_link-wrap">
                                <a class="nav-link head-nav_link head-nav_link--level-1"
                                    onclick="GAAction(5,0,$(this));" href="/pages/panelnavigatorvendor.aspx">
                                    <span class="head-nav_link-label">Podle výrobce</span>
                                </a>
                            </div>
                        </li>
                        <li class="head-nav_item head-nav_item--level-1 head-nav_item--invisible">
                            <div class="nav-link-wrap head-nav_link-wrap">
                                <a class="nav-link head-nav_link head-nav_link--level-1"
                                    onclick="GAAction(5,0,$(this));" href="/pages/productindexlist.aspx">
                                    <span class="head-nav_link-label">Ceníkové řazení</span>
                                </a>
                            </div>
                        </li>
                        <li class="head-nav_item head-nav_item--level-1 head-nav_item--invisible">
                            <div class="nav-link-wrap head-nav_link-wrap">
                                <a class="nav-link head-nav_link head-nav_link--level-1"
                                    onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?vyhnab=1">
                                    <span class="head-nav_link-label">Výhodná nabídka</span>
                                </a>

                                <div class="btn-toggle head-nav_btn-toggle-subgroup"><i
                                        class="icon-arrow-right head-nav_toggle-icon"></i></div>

                            </div>
                            <div class="sub-menu head-nav_sub-menu head-nav_sub-menu--level-2">
                                <button type="button" class="btn btn-sub-menu-close head-nav_sub-menu_btn-close"
                                    onclick="MainMenu.navChildClose($(this).closest('li'));">
                                    <i class="icon-arrow_left btn_icon"></i>
                                    <span class="btn_label">Zpět: Výhodná nabídka</span>
                                </button>
                                <ul class="level-3 head-nav_group head-nav_group--level-3">
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));"
                                                href="/pages/productlist.aspx?plt_id=1">
                                                <i class="icon icon-prod-attr-new  head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">Novinky</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));"
                                                href="/pages/productlist.aspx?is_top=1">
                                                <i class="icon icon-prod-attr-offer head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">TOP produkt</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));"
                                                href="/pages/productlist.aspx?spec_offer=6">
                                                <i class="icon icon-prod-attr-offer head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">Promoakce</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));" href="/vyprodej">
                                                <i class="icon icon-prod-attr-offer head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">Výprodej</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));"
                                                href="/pages/productlist.aspx?plt_id=9">
                                                <i class="icon icon-prod-attr-csale head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">Doprodej</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));" href="/bazar">
                                                <i class="icon icon-bazaar head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">Bazar</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));"
                                                href="/pages/productlist.aspx?pse_ids=2,3">
                                                <i class="icon icon-prod-attr-offer head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">Sada a hák</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));"
                                                href="/pages/productlist.aspx?crossell=2">
                                                <i class="icon icon-prod-attr-offer head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">Speciální doplňky</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));"
                                                href="/pages/productlist.aspx?license=1">
                                                <i class="icon icon-licence head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">Elektronická licence</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));"
                                                href="/pages/productlist.aspx?plt_id_or_ext=8">
                                                <i class="icon icon-prod-attr-used head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">Použité</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="head-nav_item head-nav_item--level-3">
                                        <div class="nav-link-wrap head-nav_link-wrap">
                                            <a class="nav-link head-nav_link head-nav_link--level-3"
                                                onclick="GAAction(5,0,$(this));"
                                                href="/pages/productlist.aspx?plt_id_or_ext=43">
                                                <i class="icon icon-prod-attr-repas head-nav_link-icon"></i>
                                                <span class="head-nav_link-label">Repasované</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="head-nav_item head-nav_item--level-1 head-nav_item--invisible">
                            <div class="nav-link-wrap head-nav_link-wrap">
                                <a class="nav-link head-nav_link head-nav_link--level-1"
                                    onclick="GAAction(5,0,$(this));" href="/pages/specialdealprices.aspx">
                                    <span class="head-nav_link-label">Projektové a množstevní ceny</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
