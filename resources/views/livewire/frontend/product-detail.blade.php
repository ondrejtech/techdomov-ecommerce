<div class="page-content_in">
    <div class="container">
        <article class="pro-detail pro-detail--has-gallery">
        <div class="grid-wrapper pro-detail_head-info-wrap">

            <h1 class="page-title pro-detail_name">
                {{ $product->Name }}
            </h1>

            <div class="pro-detail_aside">
                <div class="pro-detail_aside-in">

                    <div class="pro-detail_attributes">
                        <strong class="pro-attr pro-attr--ed-cupon pro-detail_attr"
                                onclick="showFidelityCampaigns('1303');">
                            <span class="pro-attr_label">Odměna 38</span>
                            <i class="pro-attr_icon icon-ed-cupon"></i>
                        </strong>
                        <strong class="pro-attr pro-attr--special-offer-4 pro-attr--spo pro-detail_attr">
                            <i class="pro-attr_icon icon-prod-attr-offer"></i>
                            <span class="pro-attr_label">Něco navíc</span>
                        </strong>
                        <strong class="pro-attr pro-attr--special-offer-5 pro-attr--spo pro-detail_attr">
                            <i class="pro-attr_icon icon-prod-attr-offer"></i>
                            <span class="pro-attr_label">Top produkt</span>
                        </strong>
                        <a href="#" onclick="openTabCampaigns(this);" data-targetid="linkCampaigns">
                            <strong
                                class="pro-attr pro-attr--special-offer-6 pro-attr--spo pro-detail_attr">
                                <i class="pro-attr_icon icon-prod-attr-offer"></i>
                                <span class="pro-attr_label">Promoakce</span>
                            </strong>
                        </a>
                    </div>
                    <figure class="pro-detail_head-img">
                        <a href="{{ optional($product->images->first())->URL ?? asset('images/no_image.jpg') }}"
                           title="Pro větší náhled klikněte na obrázek"
                           data-title="{{ $product->Name }}"
                           data-fancybox-group="gallery"
                           data-thumbnail="{{ optional($product->images->first())->URL ?? asset('images/no_image.jpg') }}"
                           style="width: 100%"
                           data-itemindex="0" class="fancybox fn-detail-pic">
                            <img style="width: 50%" class="pro-img"
                                 src="{{ optional($product->images->first())->URL ?? asset('images/no_image.jpg') }}"
                                 alt="{{ $product->Name }}">
                        </a>
                    </figure>

                        <div class="pro-detail_gallery">
                            <div class="pro-detail_gallery_items js-carousel owl-carousel owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(0px, 0px, 0px); transition: all; width: 2200px;">
                                        @foreach($product->images as $image)
                                            <div class="owl-item active" style="width: 220px;">
                                                <div class="pro-detail_gallery_item">
                                                    <a href="{{ $image->URL ?? asset('images/no_image.jpg') }}"
                                                       title="Pro větší náhled klikněte na obrázek"
                                                       data-title="{{ $product->Name }}"
                                                       data-fancybox-group="gallery"
                                                       data-thumbnail="{{ $image->URL ?? asset('images/no_image.jpg') }}"
                                                       style="width: 100%"
                                                       data-itemindex="1"
                                                       class="pro-detail_gallery_link fancybox fn-detail-pic img-b">
                                                        <img class="owl-lazy pro-img"
                                                             src="{{ $image->URL ?? asset('images/no_image.jpg') }}"
                                                             data-src="{{ $image->URL ?? asset('images/no_image.jpg') }}"
                                                             alt="{{ $product->Name }}"
                                                             style="opacity: 1; width: 100%;">
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev"><span
                                            aria-label="Previous">‹</span></button>
                                    <button type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                            <span id="slider-prev"
                                  class="pro-detail_gallery_pager pro-detail_gallery_pager--prev disabled">
                                    <i class="icon-arrow-left"></i>
                                </span>
                            <span id="slider-next"
                                  class="pro-detail_gallery_pager pro-detail_gallery_pager--next">
                                    <i class="icon-arrow-right"></i>
                                </span>
                        </div>

                </div>
            </div>
            <div class="pro-detail_head-info">
                <p class="pro-detail_desc">
                    {{ $product->DescriptionShort }}
                </p>
                <div class="pro-detail_overview">
                    <div class="pro-detail_prices-order-wrap">
                        <div class="pro-detail_order">
                            <div class="pro-detail_prices">
                                <div class="panel-body">
                                    <div class="pro-detail_content">
                                        <div class="pro-detail_your-price-info">
                                            <div class="pro-detail_your-price">
                                                <span class="pro-detail_your-price-label">Vaše cena:</span>
                                                <strong class="pro-detail_your-price-value">
                                                    {{ number_format($product->YourPriceWithFees,2,',',' ') }}&nbsp;Kč
                                                </strong>
                                            </div>
                                            <div class="pro-detail_basket-info">
                                                <h3 class="pro-detail_basket-info_title">Košík:</h3>
                                                <div class="pro-detail_order-box">
                                                    <div class="pro-detail_quantity">
                                                        <div class="form-group ">
{{--                                                            @php--}}
{{--                                                                dump($quantity)--}}
{{--                                                            @endphp--}}
                                                            <label
                                                                class="pro-detail_quantity-text pro-detail_quantity-text--prepend"
                                                                for="txtQty_1713260">Množství</label>
                                                            <div class="form-control-inc">
                                                                <input wire:model="quantity" value="{{ $quantity }}" class="form-control pro-detail_quantity-inp" type="text">
                                                                <button wire:click="incrementQuantity" type="button" class="btn form-control-inc_btn-plus">
                                                                    <i class="">+</i>
                                                                </button>
                                                                <button type="button" wire:click="decrementQuantity" class="btn form-control-inc_btn-minus">
                                                                    <i class="">-</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="pro-detail_quantity-text pro-detail_quantity-text--append">ks</span>
                                                    </div>
                                                    <a class="btn pro-detail_btn-add-basket btn-add-basket"
                                                       aria-label="Vložit do košíku" wire:click.prevent="addNewBasket"
                                                       href=""><i
                                                            class="btn_icon"></i><span
                                                            class="btn_label">Koupit</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-detail_interactive-section">
                                            <div class="pro-detail_stock ">
                                                <div class="pro-stock pro-stock--available">
                                                <span
                                                    class="pro-stock_text pro-stock_text--prepend">Dostupnost:</span>
                                                    <a href="javascript:void(null)"
                                                       onclick="openDialogStock(1713260,0);"
                                                       class="pro-stock_text pro-stock_text--append">Skladem
                                                        19 ks</a>
                                                </div>
                                            </div>
                                            <div id="product-special-prices"
                                                 class="pro-detail_special-prices">
                                                <link
                                                    href="https://edshopb2b.edsystem.cz/assets/bundles/css/documents?v=mDn5P7GBg7XiLCm8FHe3BLYNrS8_ywCTUVnewMn3Ai81"
                                                    rel="stylesheet">
{{--                                                <script--}}
{{--                                                    src="https://edshopb2b.edsystem.cz/assets/bundles/js/documentslist?v=K-KnBu2piVfKKq7KNYpiXRafHF1WH780L4sPGaRBk4o1"></script>--}}
{{--                                                <div class="product-special-prices-wrapper">--}}
{{--                                                    <a class="product-special-prices-btn btn btn--outline"--}}
{{--                                                       data-targetid="linkDisQuantity"--}}
{{--                                                       onclick="openTabSpecialPrices(this);" href="#">--}}
{{--                                                        <i class="icon-handshake pro-detail_btn-icon"></i>--}}
{{--                                                        <span>Množstevní slevy</span>--}}
{{--                                                        <span class="badge badge--primary">1</span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="pro-detail_link">--}}
{{--                                <a class="js-tooltip dasa-link" href="https://www.itdasa.cz/"--}}
{{--                                   target="_blank" data-hasqtip="0" oldtitle="Objednat přes službu DaaS"--}}
{{--                                   title="">--}}
{{--                                    <img style="height: 10px;margin-right:5px;"--}}
{{--                                         src="/Images/loga/dasa_logo.svg" alt="DaaS"><span--}}
{{--                                        class="btn_label">Objednat přes službu DaaS</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="pro-detail_prices-order-wrap_vertical-split"></div>
                        <div class="pro-detail_price-info">
                            <div class="panel-body">
                                <div class="pro-detail_price-info_wrapper">
                                    <h3 class="pro-detail_price-info_title">Informace o ceně</h3>
                                    <div class="pro-detail_SNC-price">
                                        <span class="list-items_item_label">Vaše cena bez SNC:</span>
                                        <div class="list-items_item_value">
                                            {{ number_format($product->YourPrice,2,',',' ') }}&nbsp;Kč
                                        </div>
                                    </div>
                                    <ul class="list-items collapse list-items--full"
                                        id="proDetail_PriceList">
{{--                                        <li class="pro-detail_list-item">--}}
{{--                                                <span--}}
{{--                                                    class="list-items_item_label">Koncová cena pro klienta:</span>--}}
{{--                                            <div class="list-items_item_value">--}}
{{--                                                44 807,00&nbsp;Kč--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
                                        <li class="pro-detail_list-item">
                                            <span class="list-items_item_label">SNC:</span>
                                            <div class="list-items_item_value">
                                                {{ number_format($product->GarbageFee,2,',',' ') }}&nbsp;Kč
                                            </div>
                                        </li>
                                        <li class="pro-detail_list-item">
                                            <span class="list-items_item_label">AO:</span>
                                            <div class="list-items_item_value">
                                                {{ number_format($product->AuthorFee,2,',',' ') }}&nbsp;Kč
                                            </div>
                                        </li>
                                        <li class="pro-detail_list-item">
                                        <span class="list-items_item_label">Vaše cena vč. DPH:
                                            <i class="icon-info js-tooltip"
                                               title="Na produkt může být uplatněn Režim přenesení daňové povinnosti"></i>
                                        </span>
                                            <div class="list-items_item_value">
                                                {{ number_format($product->YourPriceWithFees,2,',',' ') }}&nbsp;Kč
                                            </div>
                                        </li>
                                    </ul>
{{--                                    <button type="button"--}}
{{--                                            class="btn pro-detail_other-prices-btn collapsed pro-detail_other-prices-btn--disabled"--}}
{{--                                            data-toggle="collapse" data-target="#proDetail_PriceList"--}}
{{--                                            aria-expanded="false" aria-controls="proDetail_PriceList">--}}
{{--                                        <i class="icon-comparsion2 btn_icon"></i>--}}
{{--                                        <span class="btn_label">Detailní rozpis ceny</span>--}}
{{--                                        <div class="dropdown-caret pro-detail_dropdown-caret"></div>--}}
{{--                                    </button>--}}
                                </div>
                                <div id="product_variants" class="pro-detail_product-variants"></div>
                                <div id="product-special-prices"></div>
                                <div id="product_bazar" class="pro-detail_product-bazaar"></div>
                            </div>
                        </div>
                    </div>
{{--                    <button type="button" class="btn pro-detail_base-params-btn collapsed"--}}
{{--                            data-toggle="collapse" data-target="#proDetail_BaseParams" aria-expanded="false"--}}
{{--                            aria-controls="proDetail_BaseParams">--}}
{{--                        <i class="icon-orders btn_icon"></i>--}}
{{--                        <span class="btn_label">Produktové informace</span>--}}
{{--                    </button>--}}
                    <div id="proDetail_BaseParams" class="" aria-expanded="true" style="">
                        <div class="panel-body">
                            <div class="pro-detail_code-info">
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">Kód:</span>
                                    <div class="list-items_item_value">{{ $product->Code }}</div>
                                </div>
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">P/N:</span>
                                    <div class="list-items_item_value">{{ $product->PartNumber }}</div>
                                </div>
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">Záruka:</span>
                                    <div class="list-items_item_value">{{ $product->WarrantyUnit }}</div>
                                </div>
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">Výrobce:</span>
                                    <div class="list-items_item_value">{{ $product->ProducerName }}</div>
                                </div>
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">Zástupce v EU:</span>
                                    <div class="list-items_item_value"><a href="#" onclick="openProducerInfo(1713260);return false;"></a>
                                    </div>
                                </div>
                                <div class="pro-detail_info-item">
                                    <span class="list-items_item_label pro-detail_info-label">EAN:</span>
                                    <div class="list-items_item_value">{{ $product->EANCode }}</div>
                                </div>
                            </div>

                        </div>
                    </div>
{{--                    <div class="pro-detail_overview_buttons">--}}
{{--                        <a class="btn js-tooltip pro-detail_overview_btn"--}}
{{--                           onclick="openPrintProductOfferDialog(1713260);" href="javascript:void(null);"--}}
{{--                           data-hasqtip="7" oldtitle="Vytisknout produktovou nabídku" title="">--}}
{{--                            <i class="icon-print btn_icon"></i>--}}
{{--                            <span class="btn_label">Tisk produktové nabídky</span>--}}
{{--                        </a>--}}
{{--                        <a href="javascript:void(null);" class="btn btn-compare js-tooltip"--}}
{{--                           title="Porovnání produktů" onclick="compareBar.addToCompare(1713260, 115);">--}}
{{--                            <i class="btn_icon icon-collation"></i>--}}
{{--                            <span class="btn_label">Porovnat produkt</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>

        </div>
        <div class="panel-tabs pro-detail_more-info js-tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
            <ul style="cursor: pointer" class="nav nav-tabs pro-detail_tabs ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all"
                role="tablist">
                @foreach($productDetailTabs as $index => $productDetailTab)
                    <li wire:click.prevent="setActiveTab({{ $index }})" class="nav-item ui-state-default ui-corner-top ui-tabs-active ui-state-active">
                        <a class="nav-link ui-tabs-anchor {{ $activeTab == $index ? 'nav-link--active' : '' }}">{{ $productDetailTab }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="panel pro-detail_tabs-panel">
                <div class="panel-body">

                    @foreach($productDetailTabs as $index => $productDetailTab)
                        <div id="tabPanel1" aria-labelledby="ui-id-2"
                             class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel"
                             aria-expanded="true" aria-hidden="false" style="{{ $activeTab == $index ? 'display: block;' : 'display: none' }}">

                            @if($index == 0)
                                <div  class="pro-detail_more-info_wrap">
                                    <div class="more-details">
                                        @if($product->Description)
                                            {!! $product->Description !!}
                                        @else
                                            <p>{{ $product->DescriptionShort }}</p><br>
                                            {!! $product->Description !!}
                                        @endif
                                    </div><br>
                                    <div class="product-description-rating alert-v2_container">
                                        <div class="alert-v2 alert-v2--info">
                                            <div class="alert-v2_iconContainer">
                                                <i class="alert-v2_icon icon icon-orders"></i>
                                            </div>
                                            <div class="alert-v2_copy">
                                                <div class="flexbox-grid">
                                                    <div
                                                        class="flexbox-grid_item product-description-rating_text-container">
                                                        <strong>Našli jste chybu v popisu produktu?</strong>
                                                    </div>
                                                    <div class="flexbox-grid_item product-description-rating_btn-container">
                                                        <a class="btn btn--info"
                                                           onclick="openDialogBadDescription(1713260,'1517424');"
                                                           href="javascript:void(null);">
                                                            <span class="btn_label">Nahlásit špatný popis</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        Technické specifikace se mohou změnit bez předchozího upozornění. Obsah aktuálního
                                        balení se může lišit i v závislosti na datu prodeje. Obrázky mají pouze informativní
                                        charakter.
                                    </p>
                                </div>
                                {{-- <div class="pro-detail_more-info_aside">


                                    <div class="panel pro-detail_params-list">
                                        <div class="panel-body">
                                            <h2 class="panel-title">Technické parametry</h2>
                                            <ul class="pro-detail_params-list_items">


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Typ zařízení:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/typ-zarizeni-notebook/n-11,115,0,875,10877">
                                                        Notebook
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Použití:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/pouziti-kancelarsky/n-11,115,0,2016,74314">
                                                        Kancelářský
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Operační systém:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/operacni-system-windows-11-pro/n-11,115,0,182,35252">
                                                        Windows 11 Pro
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Řada procesorů:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rada-procesoru-intel-core-ultra-7/n-11,115,0,58,72143">
                                                        Intel Core Ultra 7
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Model procesoru:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/model-procesoru-intel-core-ultra-7-155h/n-11,115,0,1738,72150">
                                                        Intel Core Ultra 7 155H
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Výkon CPU dle PassMark:</span>
                                                    25&nbsp;029
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Počet jader:</span>
                                                    16
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Maximální frekvence procesoru (GHz):</span>
                                                    4,9
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Frekvence procesoru (GHz):</span>
                                                    3,8
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">TDP:</span>
                                                    28
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Model grafické karty:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/model-graficke-karty-intel-arc/n-11,115,0,797,71393">
                                                        Intel Arc
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Kapacita paměti grafické karty (GB):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Velikost paměti RAM (GB):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Typ panelu:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/typ-panelu-ips/n-11,115,0,1679,40177">
                                                        IPS
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Úhlopříčka displeje ("):</span>
                                                    14
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Rozlišení displeje:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozliseni-displeje-1920x1200/n-11,115,0,691,9975">
                                                        1920x1200
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Obnovovací frekvence displeje (Hz):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Formát obrazovky:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/format-obrazovky-16-10/n-11,115,0,16,8607">
                                                        16:10
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Povrchová úprava displeje:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/povrchova-uprava-displeje-matny/n-11,115,0,601,9280">
                                                        Matný
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Typ disku:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/typ-disku-ssd-nvme/n-11,115,0,690,40335">
                                                        SSD NVMe
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">HDD Kapacita (GB):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">SSD Kapacita (GB):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Rozhraní:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozhrani-usb-3-2-gen-2/n-11,115,0,833,44292">
                                                        USB 3.2 Gen 2
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Rozhraní:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozhrani-3-5mm-jack/n-11,115,0,833,10626">
                                                        3.5mm Jack
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Rozhraní:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozhrani-hdmi/n-11,115,0,833,10619">
                                                        HDMI
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Rozhraní:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozhrani-usb-3-2-gen-1/n-11,115,0,833,44291">
                                                        USB 3.2 Gen 1
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Rozhraní:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozhrani-thunderbolt/n-11,115,0,833,10873">
                                                        Thunderbolt
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Počet USB 2.0:</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Počet USB 3.0:</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Počet USB 3.1:</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Počet USB 3.1 Type-C:</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Počet USB 3.2:</span>
                                                    2
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Počet USB 3.2 Type-C:</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Počet USB 4 Type-C:</span>
                                                    2
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Výbava:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/vybava-ctecka-otisku-prstu/n-11,115,0,876,10887">
                                                        Čtečka otisků prstů
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Výbava:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/vybava-web-kamera/n-11,115,0,876,10892">
                                                        Web kamera
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Výbava:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/vybava-podsvicena-klavesnice/n-11,115,0,876,10888">
                                                        Podsvícená klávesnice
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Hmotnost notebooku:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/hmotnost-notebooku-1-5-2-0-kg/n-11,115,0,195,875">
                                                        1.5 - 2.0 kg
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Typ baterie:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/typ-baterie-li-ion/n-11,115,0,1473,25623">
                                                        Li-Ion
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Max.výdrž na baterie (v hodinách):</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/max-vydrz-na-baterie-v-hodinach-18/n-11,115,0,194,57617">
                                                        18
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Kapacita baterie (mAh):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Napětí baterie (V):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Počet článků baterie:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/pocet-clanku-baterie-6/n-11,115,0,1847,45793">
                                                        6
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Lokalizace klávesnice:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/lokalizace-klavesnice-cz-sk/n-11,115,0,86,11616">
                                                        CZ/SK
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Druh optické mechaniky:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/druh-opticke-mechaniky-bez-opticke-mechaniky/n-11,115,0,179,1233">
                                                        Bez optické mechaniky
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">USB počet:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/usb-pocet-4/n-11,115,0,189,855">
                                                        4
                                                    </a>

                                                </li>


                                            </ul>
                                        </div>
                                    </div>


                                </div> --}}
                            @elseif($index == 1)
                                <div class="pro-detail_more-info_wrap">
                                    <div class="more-details">
                                        <table class="table table--auto documents-tbl-list">
                                            <thead>
                                            <tr>
                                                <th class="table-head-cell table-col_desc" data-touchtable-el="true">Typ balení</th>
                                                <th class="table-head-cell table-col_dimension">Délka (cm)</th>
                                                <th class="table-head-cell table-col_dimension">Šířka (cm)</th>
                                                <th class="table-head-cell table-col_dimension">Výška (cm)</th>
                                                <th class="table-head-cell table-col_weight">Hmotnost (kg)</th>
                                                <th class="table-head-cell table-col_quantity" data-touchtable-el="true">Počet kusů v balení</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($product->logisticData as $logisticData) @endforeach
                                                <tr class="suda">
                                                    <td data-th="Typ balení" class="table-col_desc" data-touchtable-el="true">{{ $logisticData->typ }}</td>
                                                    <td data-th="Délka (cm)" class="table-col_dimension">{{ $logisticData->width }}</td>
                                                    <td data-th="Šířka (cm)" class="table-col_dimension">{{ $logisticData->length }}</td>
                                                    <td data-th="Výška (cm)" class="table-col_dimension">{{ $logisticData->height }}</td>
                                                    <td data-th="Hmotnost (kg)" class="table-col_weight">{{ $logisticData->weight }}</td>
                                                    <td data-th="Počet kusů v balení" class="table-col_quantity" data-touchtable-el="true">{{ $logisticData->count }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{-- <div class="pro-detail_more-info_aside">


                                    <div class="panel pro-detail_params-list">
                                        <div class="panel-body">
                                            <h2 class="panel-title">Technické parametry</h2>
                                            <ul class="pro-detail_params-list_items">


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Typ zařízení:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/typ-zarizeni-notebook/n-11,115,0,875,10877">
                                                        Notebook
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Použití:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/pouziti-kancelarsky/n-11,115,0,2016,74314">
                                                        Kancelářský
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Operační systém:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/operacni-system-windows-11-pro/n-11,115,0,182,35252">
                                                        Windows 11 Pro
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Řada procesorů:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rada-procesoru-intel-core-ultra-7/n-11,115,0,58,72143">
                                                        Intel Core Ultra 7
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Model procesoru:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/model-procesoru-intel-core-ultra-7-155h/n-11,115,0,1738,72150">
                                                        Intel Core Ultra 7 155H
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Výkon CPU dle PassMark:</span>
                                                    25&nbsp;029
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Počet jader:</span>
                                                    16
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Maximální frekvence procesoru (GHz):</span>
                                                    4,9
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Frekvence procesoru (GHz):</span>
                                                    3,8
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">TDP:</span>
                                                    28
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Model grafické karty:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/model-graficke-karty-intel-arc/n-11,115,0,797,71393">
                                                        Intel Arc
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Kapacita paměti grafické karty (GB):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Velikost paměti RAM (GB):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Typ panelu:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/typ-panelu-ips/n-11,115,0,1679,40177">
                                                        IPS
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Úhlopříčka displeje ("):</span>
                                                    14
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Rozlišení displeje:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozliseni-displeje-1920x1200/n-11,115,0,691,9975">
                                                        1920x1200
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Obnovovací frekvence displeje (Hz):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Formát obrazovky:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/format-obrazovky-16-10/n-11,115,0,16,8607">
                                                        16:10
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Povrchová úprava displeje:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/povrchova-uprava-displeje-matny/n-11,115,0,601,9280">
                                                        Matný
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Typ disku:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/typ-disku-ssd-nvme/n-11,115,0,690,40335">
                                                        SSD NVMe
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">HDD Kapacita (GB):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">SSD Kapacita (GB):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Rozhraní:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozhrani-usb-3-2-gen-2/n-11,115,0,833,44292">
                                                        USB 3.2 Gen 2
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Rozhraní:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozhrani-3-5mm-jack/n-11,115,0,833,10626">
                                                        3.5mm Jack
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Rozhraní:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozhrani-hdmi/n-11,115,0,833,10619">
                                                        HDMI
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Rozhraní:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozhrani-usb-3-2-gen-1/n-11,115,0,833,44291">
                                                        USB 3.2 Gen 1
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Rozhraní:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/rozhrani-thunderbolt/n-11,115,0,833,10873">
                                                        Thunderbolt
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Počet USB 2.0:</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Počet USB 3.0:</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Počet USB 3.1:</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Počet USB 3.1 Type-C:</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Počet USB 3.2:</span>
                                                    2
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Počet USB 3.2 Type-C:</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Počet USB 4 Type-C:</span>
                                                    2
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Výbava:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/vybava-ctecka-otisku-prstu/n-11,115,0,876,10887">
                                                        Čtečka otisků prstů
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Výbava:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/vybava-web-kamera/n-11,115,0,876,10892">
                                                        Web kamera
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Výbava:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/vybava-podsvicena-klavesnice/n-11,115,0,876,10888">
                                                        Podsvícená klávesnice
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Hmotnost notebooku:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/hmotnost-notebooku-1-5-2-0-kg/n-11,115,0,195,875">
                                                        1.5 - 2.0 kg
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Typ baterie:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/typ-baterie-li-ion/n-11,115,0,1473,25623">
                                                        Li-Ion
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">Max.výdrž na baterie (v hodinách):</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/max-vydrz-na-baterie-v-hodinach-18/n-11,115,0,194,57617">
                                                        18
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Kapacita baterie (mAh):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Napětí baterie (V):</span>
                                                    0
                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Počet článků baterie:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/pocet-clanku-baterie-6/n-11,115,0,1847,45793">
                                                        6
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Lokalizace klávesnice:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/lokalizace-klavesnice-cz-sk/n-11,115,0,86,11616">
                                                        CZ/SK
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                        <span
                                            class="pro-detail_params-list_item_label">Druh optické mechaniky:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/druh-opticke-mechaniky-bez-opticke-mechaniky/n-11,115,0,179,1233">
                                                        Bez optické mechaniky
                                                    </a>

                                                </li>


                                                <li class="pro-detail_params-list_item">
                                                    <span class="pro-detail_params-list_item_label">USB počet:</span>

                                                    <a class="pro-detail_params-list_item_value"
                                                       href="/pc-a-notebooky/notebooky-a-ultrabooky/usb-pocet-4/n-11,115,0,189,855">
                                                        4
                                                    </a>

                                                </li>


                                            </ul>
                                        </div>
                                    </div>


                                </div> --}}
                            @endif
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
</article>
    </div>
</div>
