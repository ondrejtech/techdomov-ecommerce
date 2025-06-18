

<div id="subCategoryMenu" class="aside-nav aside-main-menu">
    <nav class="aside-nav_in" role="navigation" aria-label="Postranní navigace">
        <ul class="level-1 aside-nav_group aside-nav_group--level-1">
            <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link aside-nav_link--highlight" onclick="GAAction(5,0,$(this));" href="{{ route('vendor.page') }}"><span class="aside-nav_link-label">Podle výrobce</span></a></div></li>
{{--            <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link aside-nav_link--highlight" onclick="GAAction(5,0,$(this));" href="{{ route('product.index') }}"><span class="aside-nav_link-label">Ceníkové řazení</span></a></div></li>--}}


            <li class="has-childs aside-nav_item aside-nav_item--has-childs aside-nav_item--konfiguratory">
                <div class="nav-link-wrap aside-nav_link-wrap">
                    <div class="nav-link aside-nav_link aside-nav_link--has-childs aside-nav_link--extra-highlight"><span class="aside-nav_link-label">Konfigurátory</span></div>
                    <div class="btn-toggle aside-nav_btn-toggle-subgroup"><i class="icon-arrow_right aside-nav_toggle-icon"></i></div>
                </div>
                <div class="sub-menu aside-nav_sub-menu">
                    <button type="button" class="btn btn-sub-menu-close aside-nav_sub-menu_btn-close" onclick="MainMenu.navChildClose($(this).closest('li'));">
                        <i class="icon-arrow_left btn_icon"></i>
                        <span class="btn_label">Zpět: Konfigurátory</span>
                    </button>
                    <strong class="aside-nav_sub-menu_label">Konfigurátory eDshopu</strong>
                    <ul class="level-2 aside-nav_group aside-nav_group--level-2">
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="http://edsystemb2b.avacom.cz/" target="_blank"><span class="aside-nav_link-label">AVACOM baterie</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/hpiquotelogin.aspx?mfr=HPE" target="_blank" title="Konfigurační nástroj pro HP servery, storage a networking"><span class="aside-nav_link-label">HPE iQuote (BTO servers &amp; storages)</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/hpiquotelogin.aspx?mfr=HPI" target="_blank" title="Konfigurační nástroj pro HP PC a tiskárny"><span class="aside-nav_link-label">HPI  iQuote (printing &amp; PC systems)</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/kingstonkonfig.aspx" target="_blank"><span class="aside-nav_link-label">Kingston</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/konfigurator.aspx?konfurl=KONF_LYNX" target="_blank"><span class="aside-nav_link-label">LYNX</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/wizard.aspx?wiz_code=BATTEST"><span class="aside-nav_link-label">Baterie UPS</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/wizard.aspx?wiz_code=SHOME"><span class="aside-nav_link-label">Smart Home</span></a></div></li>
                    </ul>
                    <strong class="aside-nav_sub-menu_label">Externí konfigurátory</strong>
                    <ul class="level-2 aside-nav_group aside-nav_group--level-2">
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="https://www.adata.com/cz/support/dms" target="_blank"><span class="aside-nav_link-label">ADATA</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="http://www.apc.com/site/Yourbusiness/index.cfm/resellerspartner/product-selectors/?ISOCountryCode=cz" target="_blank"><span class="aside-nav_link-label">APC konfigurátory</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="http://www.cyberpower-eu.com/products/ups_sizing_tool.htm" target="_blank"><span class="aside-nav_link-label">CBP konfigurátor</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="https://ssc.hpe.com/portal/site/ssc/?selectedCountry=CZ&amp;lang=cs_CZ" target="_blank"><span class="aside-nav_link-label">HP Carepack</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="https://www.hpe.com/us/en/networking.html" target="_blank"><span class="aside-nav_link-label">HP Networking</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="https://h20195.www2.hpe.com/v2/Library.aspx?doctype=41&amp;doccompany=HPE&amp;footer=41&amp;filter_doctype=no&amp;filter_doclang=no&amp;country=&amp;filter_country=no&amp;cc=us&amp;lc=en&amp;filter_status=rw#doctype-41&amp;doccompany-HPE&amp;sortorder-csdisplayorder&amp;teasers-off&amp;isRetired-false&amp;isRHParentNode-false" target="_blank"><span class="aside-nav_link-label">HP Prod. Bulletin</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="https://www.hpe.com/cz/en/storage/product-portfolio.html" target="_blank"><span class="aside-nav_link-label">HP Storage</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="https://dcsc.lenovo.com" target="_blank"><span class="aside-nav_link-label">Lenovo servers and storages (EN)</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="http://uk.transcend-info.com/Support/compatibility" target="_blank"><span class="aside-nav_link-label">Transcend konfigurátor (EN)</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="https://h22174.www2.hpe.com/SimplifiedConfig/Welcome" target="_blank"><span class="aside-nav_link-label">HPE One Config Simple</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="https://www.dicota.com/en/finder" target="_blank"><span class="aside-nav_link-label">DICOTA Productfinder</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="http://ups.legrand.com/selection-guide/ups-configurator" target="_blank"><span class="aside-nav_link-label">UPS Legrand</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="http://powerquality.eaton.com/UPS/selector/SolutionOverview.asp" target="_blank"><span class="aside-nav_link-label">UPS Eaton</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="https://i-tec.pro/konfigurator/?kctg=DOCKING-STATIONS" target="_blank"><span class="aside-nav_link-label">iTec produktový konfigurátor</span></a></div></li>
                    </ul>
                </div>
            </li>

            <li class="has-childs aside-nav_item aside-nav_item--has-childs">
                <div class="nav-link-wrap aside-nav_link-wrap">
                    <a class="nav-link aside-nav_link aside-nav_link--has-childs aside-nav_link--extra-highlight" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?vyhnab=1"><span class="aside-nav_link-label">Výhodná nabídka</span></a>
                    <div class="btn-toggle aside-nav_btn-toggle-subgroup"><i class="icon-arrow_right aside-nav_toggle-icon"></i></div>
                </div>
                <div class="sub-menu aside-nav_sub-menu">
                    <button type="button" class="btn btn-sub-menu-close aside-nav_sub-menu_btn-close" onclick="MainMenu.navChildClose($(this).closest('li'));">
                        <i class="icon-arrow_left btn_icon"></i>
                        <span class="btn_label">Zpět: Výhodná nabídka</span>
                    </button>
                    <ul class="level-2 aside-nav_group aside-nav_group--level-2">
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?plt_id=1"><span class="aside-nav_link-label"><i class="icon-prod-attr-new"></i>Novinky</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?is_top=1"><span class="aside-nav_link-label"><i class="icon-prod-attr-offer"></i>TOP produkt</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?spec_offer=6"><span class="aside-nav_link-label"><i class="icon-prod-attr-offer"></i>Promoakce</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/vyprodej"><span class="aside-nav_link-label"><i class="icon-prod-attr-offer"></i>Výprodej</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?plt_id=9"><span class="aside-nav_link-label"><i class="icon-prod-attr-csale"></i>Doprodej</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/bazar"><span class="aside-nav_link-label"><i class="icon-bazaar"></i>Bazar</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?pse_ids=2,3"><span class="aside-nav_link-label"><i class="icon-prod-attr-offer"></i>Sada a hák</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?crossell=2"><span class="aside-nav_link-label"><i class="icon-prod-attr-offer"></i>Speciální doplňky</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?b2fstat=1"><span class="aside-nav_link-label"><i class="icon-prod-attr-profi"></i>Nabídka sítě eD Profi</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?license=1"><span class="aside-nav_link-label"><i class="icon-licence"></i>Elektronická licence</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?plt_id_or_ext=8"><span class="aside-nav_link-label"><i class="icon-prod-attr-used"></i>Použité</span></a></div></li>
                        <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/productlist.aspx?plt_id_or_ext=43"><span class="aside-nav_link-label"><i class="icon-prod-attr-repas"></i>Repasované</span></a></div></li>
                    </ul>
                </div>
            </li>
{{--            <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="/pages/specialdealprices.aspx"><span class="aside-nav_link-label">Projektové a množstevní ceny</span></a></div></li>--}}
            <li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="{{ url('https://www.itsasa.cz/') }}"><span class="aside-nav_link-label">Microsoft CSP</span></a></div></li><li class="aside-nav_item"><div class="nav-link-wrap aside-nav_link-wrap"><a class="nav-link aside-nav_link" onclick="GAAction(5,0,$(this));" href="https://www.itdasa.cz/"><span class="aside-nav_link-label">Služby DaaS</span></a></div></li>


        </ul>
    </nav>


    <nav class="aside-nav_in" role="navigation" aria-label="Postranní navigace">
        <ul class="level-1 aside-nav_group aside-nav_group--level-1">

            @foreach($categories as $category)
                <li class="aside-nav_item has-childs aside-nav_item--has-childs">
                    <div class="nav-link-wrap aside-nav_link-wrap">
                        @php
                            $RootCategoryCode = request()->route('$RootCategoryCode');
                            $default = '52';
                        @endphp
                        <a class="nav-link aside-nav_link aside-nav_link--has-childs" onclick="extAction(1,1,$(this));" data-nav-id="11" href="{{ route('category.super',['RootCategoryCode' => $RootCategoryCode ?? $default, 'SuperCategoryName' => $category->SuperCategoryName,'SuperCategoryCode' => $category->SuperCategoryCode]) }}">
                            {{ $category->SuperCategoryName }}
                        </a>

                        @if($category->childrenCategory->isNotEmpty())
                            <div class="btn-toggle aside-nav_btn-toggle-subgroup">
                                <i class="icon-arrow_right aside-nav_toggle-icon"></i>
                            </div>
                        @endif

                    </div>

                    @if($category->childrenCategory->isNotEmpty())
                        <div class="sub-menu aside-nav_sub-menu">
                            <button type="button"
                                    class="btn btn-sub-menu-close aside-nav_sub-menu_btn-close"
                                    onclick="MainMenu.navChildClose($(this).closest('li'));">
                                <i class="icon-arrow_left btn_icon"></i>
                                <span class="btn_label">Zpět: {{ $category->SuperCategoryName }}</span>
                            </button>

                            <ul class="level-2 aside-nav_group aside-nav_group--level-2">
                                @foreach($category->childrenCategory as $subcategory)
                                    <li class="aside-nav_item">
                                        <div class="nav-link-wrap aside-nav_link-wrap">
                                            <a class="nav-link aside-nav_link"
                                               onclick="extAction(1,2,$(this));"
                                               href="{{ route('category',['RootCategoryCode' => $RootCategoryCode ?? $default, 'SuperCategoryCode' => $category->SuperCategoryCode,'CategoryName' => $subcategory->CategoryName,'CategoryCode' => $subcategory->CategoryCode]) }}">
                                                <span class="aside-nav_link-label">{{ $subcategory->CategoryName }}</span>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </li>
            @endforeach

        </ul>
    </nav>


</div>



