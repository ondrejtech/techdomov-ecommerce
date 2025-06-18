<div>
    <div class="page-content_in">
        <div class="container" role="main">

            <h1 class="page-title">Faktury</h1>


            <div class="nav nav-buttons">

                <a class="nav-link" href="/pages/documents/invoicelist.aspx?ity_typ=2">
                    <span class="btn_label">Proforma faktury</span>
                </a>

                <a class="nav-link" href="/pages/documents/invoicepay.aspx">
                    <span class="btn_label">Platba neuhrazených faktur</span>
                </a>
            </div>


            <button class="btn filter-base-btn-toggle js-collapse collapsed" type="button" data-toggle="collapse"
                data-target="#documents_filterBase">
                <span class="btn_label">Schovat / Zobrazit filtr</span>
            </button>

            <div id="documents_filterBase" class="panel filter-base collapse in">
                <div class="panel-body">
                    <div class="filter-base_row">
                        <div class="filter-base_item">
                            <div class="filter-base_field form-group">
                                <label for="txtINV_SYM">Číslo faktury</label>
                                <input name="ctl00$MainContent$txtINV_SYM" type="text" maxlength="12" id="txtINV_SYM"
                                    class="form-control" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="filter-base_item">
                            <div class="filter-base_field form-group">
                                <label for="txtREL_SYM">Číslo objednávky</label>
                                <input name="ctl00$MainContent$txtREL_SYM" type="text" maxlength="12" id="txtREL_SYM"
                                    class="form-control">
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
                                <label for="ddPayed">Stav</label>
                                <div class="ux-combo">
                                    <select name="ctl00$MainContent$ddPayed" id="ddPayed"
                                        class="form-control ux-combo_field">
                                        <option selected="selected" value="-1">Všechny</option>
                                        <option value="1">Uhrazené</option>
                                        <option value="0">Neuhrazené</option>
                                        <option value="3">Po splatnosti</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter-base_item filter-base_item--choose-group">
                            <div class="filter-base_item-groups">
                                <div class="filter-base_item-groups_fields-wrap">
                                    <div class="filter-base_field form-group">
                                        <div class="checkbox">
                                            <input id="chbNotCompl" type="checkbox"
                                                name="ctl00$MainContent$chbNotCompl">
                                            <label for="chbNotCompl">Nevyřízené</label>
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

                </div>
            </div>

            <div id="MainContent_pnlNotPayedSum">

                <div class="panel-summary">
                    <div class="panel-summary_item panel-summary_item--danger">
                        <span class="panel-summary_item-label">Po splatnosti</span>
                        <span class="panel-summary_item-value"> 0,00 Kč</span>
                    </div>
                    <div class="panel-summary_item panel-summary_item--warning">
                        <span class="panel-summary_item-label">Ve splatnosti</span>
                        <span class="panel-summary_item-value"> 0,00 Kč</span>
                    </div>
                    <div class="panel-summary_item panel-summary_item--total-sum">
                        <span class="panel-summary_item-label">Celkem</span>
                        <span class="panel-summary_item-value"> 0,00 Kč</span>
                    </div>
                    <div class="panel-summary_item">
                        <span class="panel-summary_item-label">Váš kredit</span>
                        <span class="panel-summary_item-value"> 0,00 Kč</span>
                    </div>
                    <div class="panel-summary_item">
                        <span class="panel-summary_item-label">Váš volný kredit</span>
                        <span class="panel-summary_item-value"> 0,00 Kč</span>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
