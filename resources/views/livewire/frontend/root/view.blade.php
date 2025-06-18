<section class="products-catalog">
    <div class="grid-wrapper data-product-items">
        @foreach($products['data'] as $product)
            <article id="product_1713260" class="product-item pro-tile">
                <div class="pro-tile_in">
                    <a class="js-html5-storage" style="color: black; text-align: center" href="{{ route('product.view', ['CategoryCode' => $product->CategoryCode, 'ProId' => $product->ProId]) }}">
                        {{ $product->Name }}
                    </a>
                    <h2 class="pro-tile_Name">

                    </h2>
                    <figure class="pro-tile_img">
                        <a class="js-html5-storage" href="">
                            <img class="pro-img b-lazy b-loaded" alt="{{ $product->Name }}" src="{{ optional($product->images->first())->URL ?? asset('images/no_image.jpg') }}">
                        </a>
                    </figure>
                    <div class="pro-tile_hover-box">
                        <div class="pro-tile_desc product-desc">
                            <div class="pro-tile_desc_in">
                                {{ $product->DescriptionShort }}
                            </div>
                        </div>
                        <div class="pro-tile_prices">
                            <div class="pro-tile_price">
                                <span class="pro-tile_price-text pro-tile_price-text--prepend">Vaše cena:</span>
                                <strong class="pro-tile_price-value">{{ number_format($product->EndUserPrice,2,","," ") }}&nbsp;Kč</strong>
                                <span class="pro-tile_price-text pro-tile_price-text--append">s DPH</span>
                            </div>
                        </div>
                    </div>
                    <div class="pro-tile_attributes">
                        <strong class="pro-attr pro-attr--ed-cupon pro-tile_attr" onclick="showFidelityCampaigns('1303');">
                            <span class="pro-attr_label">Odměna 38</span>
                            <i class="pro-attr_icon icon-ed-cupon"></i>
                        </strong>
                        <strong class="pro-attr pro-attr--special-offer-4 pro-tile_attr">
                            <i class="pro-attr_icon icon-prod-attr-offer"></i>
                            <span class="pro-attr_label">Výhodná nabídka</span>
                        </strong>
                    </div>
                    <div class="pro-tile_prices">
                        <div class="pro-tile_price">
                            <span class="pro-tile_price-text pro-tile_price-text--prepend">Vaše cena:</span>
                            <strong class="pro-tile_price-value">{{ number_format($product->EndUserPrice,2,","," ") }}&nbsp;Kč</strong>
                            <span class="pro-tile_price-text pro-tile_price-text--append">s DPH</span>
                        </div>
                    </div>
                    <div class="pro-tile_footer">
                        <div class="pro-tile_footer-in">
                            <div class="pro-tile_stock">
                                <div class="pro-stock pro-stock--available">
                                    <span class="pro-stock_text pro-stock_text--prepend">Dostupnost:</span>
                                    <a href="javascript:void(null)" class="pro-stock_text pro-stock_text--append" onclick="openDialogStock(1713260,0);">Skladem <span class="pro-stock_br">{{ random_int(1,99) }} ks</span></a>
                                </div>
                            </div>
                            <div class="pro-tile_order-box">
                                <div class="pro-tile_quantity">
                                    <label class="pro-tile_quantity-text pro-tile_quantity-text--prepend" for="txtQty_1713260">Množství:</label>
                                    <input id="txtQty_1713260" class="form-control form-control--qty pro-tile_quantity-inp" type="text" value="1" maxlength="5">
                                    <span class="pro-tile_quantity-text pro-tile_quantity-text--append">ks</span>
                                </div>
                                <div class="btn-group" wire:click="addNewBasket({{ $product->ProId }})">
                                    <a class="btn btn-add-basket pro-tile_btn-add-basket" data-title="tip_add_basket" aria-label="Vložit do košíku"><span class="btn_icon"></span><span class="btn_label">Vložit do košíku</span></a>
{{--                                    <button type="button" class="btn pro-tile_dropdown-toggle dropdown-toggle dropdown-toggle--primary dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <span class="dropdown-caret"></span>--}}
{{--                                    </button>--}}
                                    <div class="dropdown-menu dropdown-menu--right dropdown-menu--dropup">
                                        <button type="button" class="dropdown-item" onclick="compareBar.addToCompare(1713260, 115);">
                                            <i class="icon-collation dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Porovnat</span>
                                        </button>
                                        <a class="dropdown-item" title="Vytisknout produktovou nabídku" onclick="openPrintProductOfferDialog(1713260);" href="javascript:void(null);">
                                            <i class="icon-print dropdown-item_icon"></i>
                                            <span class="dropdown-item_label">Tisk produktové nabídky</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>
