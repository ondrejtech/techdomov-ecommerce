<div>
    <div class="page-content_in">
        <div class="container" role="main">

            <h1 class="page-title">Položky objednávek</h1>

            <button class="btn filter-base-btn-toggle js-collapse collapsed" type="button" data-toggle="collapse"
                data-target="#documents_filterBase">
                <span class="btn_label">Schovat / Zobrazit filtr</span>
            </button>

            {{-- <div id="documents_filterBase" class="panel filter-base collapse in"> --}}
                {{-- <div class="panel-body">
                    <div class="filter-base_row">
                        <div class="filter-base_item">
                            <div class="filter-base_field form-group">
                                <label for="txtREL_SYM">Číslo objednávky</label>
                                <input name="ctl00$MainContent$txtREL_SYM" type="text" maxlength="12" id="txtREL_SYM"
                                    class="form-control" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="filter-base_item">
                            <div class="filter-base_field form-group">
                                <label for="txtREL_ORIG">Vaše označení obj.</label>
                                <input name="ctl00$MainContent$txtREL_ORIG" type="text" maxlength="36"
                                    id="MainContent_txtREL_ORIG" class="form-control">
                            </div>
                        </div>
                        <div class="filter-base_item filter-base_item--date-from-to">
                            <div class="filter-base_item-groups">
                                <div class="filter-base_item-groups_title">Datum</div>
                                <div class="filter-base_item-groups_fields-wrap">
                                    <div class="filter-base_field form-group">
                                        <label for="txtDAT1">od</label>
                                        <input name="ctl00$MainContent$txtDAT1" type="text" value="27.05.2025"
                                            maxlength="10" id="txtDAT1"
                                            class="form-control js-datepicker hasDatepicker" autocomplete="off">
                                    </div>
                                    <div class="filter-base_field form-group">
                                        <label for="txtDAT2">do</label>
                                        <input name="ctl00$MainContent$txtDAT2" type="text" maxlength="10"
                                            id="txtDAT2" class="form-control js-datepicker hasDatepicker"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-base_item">
                            <div class="filter-base_field form-group">
                                <label for="txtFullText">Název produktu</label>
                                <input name="ctl00$MainContent$txtFullText" type="text" maxlength="100"
                                    id="txtFullText" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="filter-base_row">
                        <div class="filter-base_item">
                            <div class="filter-base_field form-group">
                                <label for="ddlOpen">Otevřené</label>
                                <div class="ux-combo">
                                    <select name="ctl00$MainContent$ddlOpen" id="ddlOpen"
                                        class="form-control ux-combo_field">
                                        <option selected="selected" value="-1"></option>
                                        <option value="1">Ano</option>
                                        <option value="0">Ne</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter-base_item">
                            <div class="filter-base_field form-group">
                                <label for="ddlAlloc">S blokacemi</label>
                                <div class="ux-combo">
                                    <select name="ctl00$MainContent$ddlAlloc" id="ddlAlloc"
                                        class="form-control ux-combo_field">
                                        <option selected="selected" value="-1"></option>
                                        <option value="1">Ano</option>
                                        <option value="0">Ne</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="buttons-area filter-base-buttons">
                    <button type="reset" class="btn btn--reset" onclick="resetFilterPanel(this);">
                        <span class="btn_label">Smazat filtr</span>
                    </button>
                    <button class="btn btn--search">
                        <span class="btn_label">Hledej</span>
                    </button>

                </div> --}}
            {{-- </div> --}}


            <div class="panel panel--has-table panel-documents">
                <div class="panel-body">


                    <div class="number-records-page">
                        <div class="number-records-page_records-count">
                            <span class="number-records-page_records-count_label">Počet záznamů:</span>
                            <strong class="number-records-page_records-count_value">{{ $this->count }}</strong>
                        </div>
                        <div class="number-records-page_paging">
                            <span class="number-records-page_label">Počet záznamů na stránku:</span>
                            <a id="MainContent_pg1_lnk1" class="number-records-page_item"
                                href="javascript:__doPostBack('ctl00$MainContent$pg1$lnk1','')">10</a>
                            <a id="MainContent_pg1_lnk2"
                                class="number-records-page_item number-records-page_item--selected"
                                href="javascript:__doPostBack('ctl00$MainContent$pg1$lnk2','')">20</a>
                            <a id="MainContent_pg1_lnk3" class="number-records-page_item"
                                href="javascript:__doPostBack('ctl00$MainContent$pg1$lnk3','')">30</a>
                        </div>
                    </div>
                </div>


                <table class="table documents-tbl-list">
                    <thead>
                        <tr>
                            <th class="table-head-cell table-col_sym">Objednávka</th>
                            <th class="table-head-cell table-col_code">Kód</th>
                            <th class="table-head-cell table-col_partno">PartNo</th>
                            <th class="table-head-cell table-col_name" data-touchtable-el="true">Název</th>
                            <th class="table-head-cell table-col_price">Cena<br>
                                bez SNC</th>
                            <th class="table-head-cell table-col_price">SNC*</th>
                            <th class="table-head-cell table-col_price">Cena<br>
                                bez DPH</th>
                            <th class="table-head-cell table-col_qty js-tooltip" data-title="tip_order_created"
                                data-touchtable-el="true"><i class="icon-ordered"></i></th>
                            <th class="table-head-cell table-col_qty js-tooltip" data-title="tip_order_blocked"
                                data-touchtable-el="true"><i class="icon-blocked"></i></th>
                            <th class="table-head-cell table-col_qty js-tooltip" data-title="tip_order_delivered"
                                data-touchtable-el="true"><i class="icon-delivered"></i></th>
                            <th class="table-head-cell table-col_qty js-tooltip" data-title="tip_order_cancel"
                                data-touchtable-el="true"><i class="icon-cancel"></i></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($orderItems as $item)
                            <tr class="licha">
                            <td data-th="Objednávka" class="table-col_sym">
                                <div class="table-cell_in">
                                    <a href="order.aspx?rel_sym=2225186755">{{ $item->order_number }}</a>
                                </div>
                            </td>
                            <td data-th="Kód" class="table-col_code  no-delivered">
                                {{ $item->product->Code }}
                            </td>
                            <td data-th="PartNo" class="table-col_partno">
                                {{ $item->product->PartNumber }}
                            </td>
                            <td data-th="Název" class="table-col_name" data-touchtable-el="true">
                                <a
                                    href="/connect-it-kancelarska-podsvicena-klavesnice-chocolate-whitestar-cz-sk-verze-cerna/product-1630266">{{ $item->product->Name }}</a>
                            </td>
                            @php 
                                $snc = ($item->product->YourPriceWithFees - $item->product->YourPrice) * $item->quantity;
                                $priceSNC = ($item->product->YourPrice - $snc) * $item->quantity;
                                $price = $item->product->YourPrice * $item->quantity;
                            @endphp
                            <td data-th="Cena bez SNC" class="table-col_price">{{ number_format($priceSNC, 2,',',' ') }} Kč</td>
                            <td data-th="SNC*" class="table-col_price">{{ $snc * $item->quantity }} Kč</td>
                            <td data-th="Cena bez DPH" class="table-col_price">{{ number_format($price,2,',',' ') }} Kč</td>
                            <td data-th="Objednáno" data-touchtable-el="true" class="table-col_qty js-tooltip"
                                data-title="tip_order_created">{{ $item->quantity }}</td>
                            <td data-th="Blokováno" data-touchtable-el="true" class="table-col_qty js-tooltip"
                                data-title="tip_order_blocked">{{ $item->quantity }}</td>
                            <td data-th="Expedováno" data-touchtable-el="true" class="table-col_qty js-tooltip"
                                data-title="tip_order_delivered">0</td>
                            <td data-th="Storno" data-touchtable-el="true" class="table-col_qty js-tooltip"
                                data-title="tip_order_cancel">0</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="panel-bottom-tools">


            </div>

            <div class="legend">
                <span class="legend_title">Legenda:</span>
                <ul class="legend_items">
                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--no-delivered"></span>
                        <span class="legend_item-label">Nedodaná položka objednávky</span>
                    </li>
                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--rejected"></span>
                        <span class="legend_item-label">Vyřazený produkt</span>
                    </li>
                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--icon">
                            <i class="icon-ordered"></i>
                        </span>
                        <span class="legend_item-label">Objednáno</span>
                    </li>
                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--icon">
                            <i class="icon-blocked"></i>
                        </span>
                        <span class="legend_item-label">Blokováno</span>
                    </li>
                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--icon">
                            <i class="icon-delivered"></i>
                        </span>
                        <span class="legend_item-label">Expedováno</span>
                    </li>
                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--icon">
                            <i class="icon-cancel"></i></span>
                        <span class="legend_item-label">Storno</span>
                    </li>
                </ul>
            </div>

            <p class="info-text">
                * Smluvní navýšení ceny o náklady vyplývající ze zák č. 185/2001 Sb. v platném znění na likvidaci
                elektroodpadu bude prodávajícím stanoveno v té výši,
                v jaké jej prodávající stanoví ve svém ceníku v den fakturace za toto objednané zboží a náklady na
                autorské odměny dle zák. č. 121/2000 Sb. v platném znění bude prodávajícím stanoveno v té výši,
                v jaké jej prodávající stanoví ve svém ceníku v den fakturace za toto objednané zboží.
            </p>

        </div>
    </div>
</div>
