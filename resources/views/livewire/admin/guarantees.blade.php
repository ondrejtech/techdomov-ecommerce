<div class="page-content_in">
    <div class="container" role="main">
        <h1 class="page-title">Záruky</h1>

        <button class="btn filter-base-btn-toggle js-collapse collapsed" type="button" data-toggle="collapse"
            data-target="#documents_filterBase">
            <span class="btn_label">Schovat / Zobrazit filtr</span>
        </button>

        <div id="documents_filterBase" class="panel filter-base collapse in">
            <div class="panel-body">
                <div class="filter-base_row">
                    <div class="filter-base_item">
                        <div class="filter-base_field form-group">
                            <label for="ddlSubtype">Číslo faktury</label>
                            <input name="ctl00$MainContent$txtINV_SYM" type="text" maxlength="10"
                                id="MainContent_txtINV_SYM" class="form-control" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="filter-base_item">
                        <div class="filter-base_field form-group">
                            <label for="txtDEL_SYM">Číslo dodacího listu</label>
                            <input name="ctl00$MainContent$txtDEL_SYM" type="text" maxlength="10"
                                id="MainContent_txtDEL_SYM" class="form-control">
                        </div>
                    </div>
                    <div class="filter-base_item">
                        <div class="filter-base_field form-group">
                            <label for="txtPRO_CODE">Kód</label>
                            <input name="ctl00$MainContent$txtPRO_CODE" type="text" id="MainContent_txtPRO_CODE"
                                class="form-control">
                        </div>
                    </div>
                    <div class="filter-base_item">
                        <div class="filter-base_field form-group">
                            <label for="txtSN">Serial No.</label>
                            <input name="ctl00$MainContent$txtSN" type="text" maxlength="30" id="MainContent_txtSN"
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="filter-base_row">
                    <div class="filter-base_item filter-base_item--date-from-to">
                        <div class="filter-base_item-groups">
                            <div class="filter-base_item-groups_title">Záruky vystavené</div>
                            <div class="filter-base_item-groups_fields-wrap">
                                <div class="filter-base_field form-group">
                                    <label for="txtDATE1">od</label>
                                    <input name="ctl00$MainContent$txtDATE1" type="text" maxlength="10"
                                        id="MainContent_txtDATE1" class="form-control js-datepicker hasDatepicker"
                                        myname="datepicker" autocomplete="off">
                                </div>
                                <div class="filter-base_field form-group">
                                    <label for="txtDATE2">do</label>
                                    <input name="ctl00$MainContent$txtDATE2" type="text" maxlength="10"
                                        id="MainContent_txtDATE2" class="form-control js-datepicker hasDatepicker"
                                        myname="datepicker" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-base_item filter-base_item--choose-group">
                        <div class="filter-base_item-groups">
                            <div class="filter-base_item-groups_fields-wrap">
                                <div class="filter-base_field form-group">
                                    <div class="checkbox">
                                        <input id="cbNotEmptySN" type="checkbox" name="ctl00$MainContent$cbNotEmptySN">
                                        <label for="cbNotEmptySN">
                                            <span id="MainContent_Label1">Pouze záznamy se SN</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-base_item"></div>
                    <div class="filter-base_item"></div>
                    <div class="filter-base_item"></div>
                </div>
            </div>

            <div class="buttons-area filter-base-buttons">
                <button type="reset" class="btn btn--reset" onclick="resetFilterPanel(this);">
                    <span class="btn_label">Smazat filtr</span>
                </button>
                <input type="submit" name="ctl00$MainContent$btFind" value="Hledej" id="MainContent_btFind"
                    class="btn btn--search">
            </div>
        </div>


    </div>
</div>
