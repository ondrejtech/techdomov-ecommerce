<div>
    <div class="page-content_in">
        <div class="container" role="main">
            <h1 class="page-title">Přehled objednávek</h1>

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
                                        <input name="ctl00$MainContent$txtDAT1" type="text" maxlength="10"
                                            id="txtDAT1" class="form-control js-datepicker hasDatepicker"
                                            autocomplete="off">
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
                                <label for="ddlRelApt">Typ způsobu pořízení</label>
                                <div class="ux-combo">
                                    <select id="ret_id" class="form-control ux-combo_field" name="ret_id">
                                        <option value="0"></option>
                                        <option value="4">Osobně</option>
                                        <option value="6">eDlink</option>
                                        <option value="57">eD SHOP - CZ</option>
                                        <option value="37">Datová výměna</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter-base_item">
                            <div class="filter-base_field form-group">
                                <label for="ddlRelStat">Stav</label>
                                <div class="ux-combo">
                                    <select name="ctl00$MainContent$ddlRelStat" id="ddlRelStat"
                                        class="form-control ux-combo_field">
                                        <option selected="selected" value=""></option>
                                        <option value="1">Čeká na zpracování poznámky</option>
                                        <option value="2">Čeká na potvrzení cen</option>
                                        <option value="3">Čeká na fakturaci</option>
                                        <option value="4">Částečně fakturováno</option>
                                        <option value="5">Fakturace - stojí v autofakturační frontě</option>
                                        <option value="6">Fakturováno - čeká se na převzetí logistikou</option>
                                        <option value="7">V LS - zařazeno do fronty práce logistiky</option>
                                        <option value="8">Připraveno pro dopravce/osobky</option>
                                        <option value="9">Předáno dopravci/osobky</option>
                                        <option value="10">Předáno dopravcem</option>
                                        <option value="11">Storno objednávky</option>
                                        <option value="12">Reportováno</option>

                                    </select>
                                </div>
                            </div>
                        </div>
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
                    <div class="filter-base_row">
                        <div class="filter-base_item filter-base_item--choose-group">
                            <div class="filter-base_item-groups">
                                <div class="filter-base_item-groups_fields-wrap">
                                    <div class="filter-base_field form-group">
                                        <div class="checkbox">
                                            <input id="notDeliv" type="checkbox" name="ctl00$MainContent$notDeliv">
                                            <label for="notDeliv">Nedodáno</label>
                                        </div>
                                    </div>
                                    <div class="filter-base_field form-group">
                                        <div class="checkbox">
                                            <input id="chkKumul" type="checkbox" name="ctl00$MainContent$chkKumul">
                                            <label for="chkKumul">Kumulované</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="buttons-area filter-base-buttons">
                    <button type="reset" class="btn btn--reset" onclick="resetFilterPanel(this);">
                        <span class="btn_label">Smazat filtr</span>
                    </button>
                    <button type="submit" class="btn btn--search">
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

                <table class="table documents-tbl-list order-tbl-list">
                    <thead>
                        <tr>
                            <th class="table-head-cell table-col_sym" data-touchtable-el="true">Číslo</th>
                            <th class="table-head-cell table-col_orig-sym">Vaše ozn. obj.</th>
                            <th class="table-head-cell table-col_date" data-touchtable-el="true">Datum</th>
                            <th class="table-head-cell table-col_price" data-touchtable-el="true">Cena</th>
                            <th class="table-head-cell table-col_order-from">Objednáno</th>
                            <th class="table-head-cell table-col_transport">Doprava</th>
                            <th class="table-head-cell table-col_address">Adresa dodání</th>
                            <th class="table-head-cell table-col_sym">Faktury</th>
                            {{-- <th class="table-head-cell table-col_control table-col_control--append">Detail</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="licha">
                                <td data-th="Číslo" data-touchtable-el="true"
                                    class="table-col_sym table-cell_status--storno">
                                    <div class="table-cell_in">
                                        <a href="order.aspx?rel_id=10038564">{{ $order->order_number }}</a>
                                    </div>
                                </td>
                                <td data-th="Vaše ozn. obj." class="table-col_orig-sym"></td>
                                <td data-th="Datum" data-touchtable-el="true" class="table-col_date">{{ $order->created_at->format('d-m-Y') }}</td>
                                <td data-th="Cena" data-touchtable-el="true" class="table-col_price">0,00&nbsp;Kč</td>
                                <td data-th="Objednáno" class="table-col_order-from">CZ SHOP</td>
                                <td data-th="Doprava" class="table-col_transport">Balík</td>
                                <td data-th="Adresa dodání" class="table-col_address">{{ $order->user->name.' '.$order->user->surname.' '.$order->user->address.' '.$order->user->city.' '.$order->user->postcode.' '.$order->user->state }}</td>
                                <td data-th="Faktury" class="table-col_sym">
                                    {{ $order->invoice->invoice_number ?? '' }}
                                </td>
                                {{-- <td data-th="Detail" class="table-col_control table-col_control--append">


                                    <a title="Zobrazit položky objednávky"
                                        class="btn btn--icon btn--item-show-detail js-tooltip"
                                        href="javascript:__doPostBack('ctl00$MainContent$rptOrder$ctl01$ctl00','')">
                                        <i class="icon-list btn_icon"></i>
                                    </a>

                                    <a href="/reports/print/orderpdf.aspx?docid=10038564" target="_blank"
                                        class="btn btn--icon btn-icon--print js-tooltip" data-title="tip_print">
                                        <i class="icon-print btn_icon"></i>
                                    </a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>

            {{-- <div class="panel-bottom-tools">



                <div class="buttons-area">
                    <input type="submit" name="ctl00$MainContent$btnExport" value="Export do XML"
                        onclick="GAAction(14,4,$(this));" id="MainContent_btnExport" class="btn btn--export">
                </div>
            </div> --}}


            <div class="legend">
                <span class="legend_title">Legenda:</span>
                <ul class="legend_items">

                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--storno"></span>
                        <span class="legend_item-label">Objednávka stornována</span>
                    </li>

                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--no-delivered"></span>
                        <span class="legend_item-label">Objednávka čeká na zpracování</span>
                    </li>

                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--partly-delivered"></span>
                        <span class="legend_item-label">Objednávka částečně vyřízená</span>
                    </li>

                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--complete-delivered"></span>
                        <span class="legend_item-label">Objednávka vyřízená</span>
                    </li>

                    <li class="legend_item">
                        <span class="legend_item-picto legend_item-picto--rejected"></span>
                        <span class="legend_item-label">Vyřazený produkt</span>
                    </li>
                </ul>
            </div>



        </div>
    </div>
</div>
