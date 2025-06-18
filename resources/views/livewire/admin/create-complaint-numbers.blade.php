<div>
    <div class="page-content_in">
        <div class="container" role="main">
            <h1 class="page-title">Reklamační číslo AVZ</h1>
            <div class="alert alert-error" style="display: none;">Nemáte právo vytvářet AVZ. Musíte byt admin nebo mít
                právo na vytváření AVZ. Právo vám může přidělit administrátor vaší firmy v sekci <a href="">Vaše
                    kontakty</a></div>



            <div id="MainContent_pnlForm">



                <p>Jako první krok úspěšné reklamace, zadejte prosím nějakou hodnotu do filtru (např. číslo faktury,
                    dodacího listu, sériové číslo ...), přes kterou se pokusíme najít produkt, který budete chtít
                    reklamovat a zvolte tlačítko "Hledej". Pokud jste nenalezli produkt, možná produkt byl původně
                    zakoupen u jiného dodavatele, proto vyzkoušejte změnit možnost "Zakoupeno u".</p>

                <div id="mainFilterPanel" class="panel filter-base">
                    <div class="panel-body">
                        <div class="filter-base_row">
                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="ddWaeComSym">Zakoupeno u</label>
                                    <select name="ctl00$MainContent$ddWaeComSym" id="ddWaeComSym"
                                        class="form-control js-combo select2-hidden-accessible">
                                        <option value="0">{{ config('app.APP_NAME') }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-base_item filter-base_item--date-from-to">
                                <div class="filter-base_item-groups">
                                    <div class="filter-base_item-groups_title">Datum zakoupení</div>
                                    <div class="filter-base_item-groups_fields-wrap">
                                        <div class="filter-base_field form-group">
                                            <label for="txtDAT1" id="dateSaleFrom">od</label>
                                            <input name="ctl00$MainContent$txtDAT1" type="text" maxlength="10"
                                                id="txtDAT1" class="form-control js-datepicker hasDatepicker"
                                                myname="datepicker" autocomplete="off">
                                        </div>
                                        <div class="filter-base_field form-group">
                                            <label for="txtDAT2" id="dateSaleTo">do</label>
                                            <input name="ctl00$MainContent$txtDAT2" type="text" maxlength="10"
                                                id="txtDAT2" class="form-control js-datepicker hasDatepicker"
                                                myname="datepicker" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="txtFulltext">Vyhledat (Název prod., Kód, Part.No)</label>
                                    <input name="ctl00$MainContent$txtFulltext" type="text" maxlength="100"
                                        id="txtFulltext" class="form-control validate-group-1 is-required"><span
                                        class="form-control-validate-info"></span>
                                </div>
                            </div>

                        </div>
                        <div class="filter-base_row">
                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="txbInvSymbol">Číslo faktury</label>
                                    <input name="ctl00$MainContent$txbInvSymbol" type="text" maxlength="12"
                                        id="txbInvSymbol"
                                        class="form-control validate-group-1 validate-group-2 is-required"
                                        autofocus="autofocus"><span class="form-control-validate-info"></span>
                                </div>
                            </div>
                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="txbDelSymbol">Číslo dodacího listu</label>
                                    <input name="ctl00$MainContent$txbDelSymbol" type="text" maxlength="12"
                                        id="txbDelSymbol"
                                        class="form-control validate-group-1 validate-group-2 is-required"><span
                                        class="form-control-validate-info"></span>
                                </div>
                            </div>
                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="txbSerialNum">Sériové číslo</label>
                                    <input name="ctl00$MainContent$txbSerialNum" type="text" maxlength="30"
                                        id="txbSerialNum"
                                        class="form-control validate-group-1 validate-group-2 is-required"><span
                                        class="form-control-validate-info"></span>
                                </div>
                            </div>
                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="txbProductCode">Kód produktu</label>
                                    <input name="ctl00$MainContent$txbProductCode" type="text" maxlength="32"
                                        id="txbProductCode" class="form-control validate-group-1 is-required"><span
                                        class="form-control-validate-info"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="buttons-area filter-base-buttons">
                    <button type="reset" class="btn btn--reset" onclick="ClaimFilterForm.resetFilter();">
                        <span class="btn_label">Smazat filtr</span>
                    </button>
                    <input type="submit" name="ctl00$MainContent$btnFind" value="Hledej"
                        onclick="return ClaimFilterForm.validate();" id="btnFind" class="btn btn--search">
                </div>

                <hr>



                <div id="MainContent_pnWarrantyChoose">

                    <div class="panel panel--no-border panel--has-table">
                        <div>

                        </div>
                        <div>

                        </div>
                        <div>

                        </div>
                    </div>

                </div>

                <p>Pokud jste v předchozím kroku našli a vybrali produkt, který chcete reklamovat, tak doplněte
                    dodatečné informace pro úspěšné vytvoření reklamace a klikněte na tlačítko "Vytvořit AVZ".</p>

                <div class="panel filter-base">
                    <div class="panel-body">
                        <div class="filter-base_row">
                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="ddlShipAddresses">Dodací adresa</label>
                                    <select name="ctl00$MainContent$ddlShipAddresses" id="ddlShipAddresses"
                                        disabled=""
                                        class="aspNetDisabled form-control js-combo select2-hidden-accessible is-required"
                                        tabindex="-1" aria-hidden="true">
                                        <option selected="selected" value="0"></option>
                                        <option value="1793325">{{ auth()->user()->name }}</option>

                                    </select>
                                </div>
                            </div>

                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="txbCamSymExt">Vaše číslo reklamace</label>
                                    <input name="ctl00$MainContent$txbCamSymExt" type="text" maxlength="256"
                                        id="txbCamSymExt" class="form-control">
                                </div>
                            </div>
                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="txtTelefon">Telefon (povinný při objednání svozu)</label>
                                    <input name="ctl00$MainContent$txtTelefon" type="text" maxlength="20"
                                        id="txtTelefon" class="form-control">
                                </div>
                            </div>
                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="txtEUIncDate">Datum přijetí od koncového zákazníka</label>
                                    <input name="ctl00$MainContent$txtEUIncDate" type="text" maxlength="10"
                                        id="txtEUIncDate" class="js-datepicker form-control hasDatepicker"
                                        autocomplete="off">
                                    <span id="MainContent_cvTxtEUIncDate" style="display:none;">Musí byt datum!</span>
                                </div>
                            </div>

                        </div>
                        <div class="filter-base_row">
                            <div class="filter-base_item">
                                <div class="filter-base_field form-group">
                                    <label for="txbNote">Popis závady</label>
                                    <textarea name="ctl00$MainContent$txbNote" rows="3" cols="20" id="txbNote"
                                        class="form-control is-required"></textarea><span class="form-control-validate-info"></span><span
                                        class="form-control-validate-info"></span>
                                </div>
                            </div>
                        </div>
                        <div class="filter-base_row">
                            <div class="filter-base_item filter-base_item--choose-group">
                                <div class="filter-base_item-groups">
                                    <div class="filter-base_item-groups_fields-wrap">
                                        <div class="filter-base_field form-group">
                                            <span class="checkbox"><input id="chkCamNoExp" type="checkbox"
                                                    name="ctl00$MainContent$chkCamNoExp"><label
                                                    for="chkCamNoExp">Osobní odběr</label></span>
                                        </div>

                                        <div class="filter-base_field form-group">
                                            <div class="checkbox">
                                                <input id="cbPickUp" type="checkbox"
                                                    name="ctl00$MainContent$cbPickUp"
                                                    onclick="NewClaimForm.cbPickUp_change();">
                                                <label for="cbPickUp">Svezení reklamace za výhodných podmínek <span
                                                        class="text-primary">(Cena služby 70,-Kč s DPH)</span>.<i
                                                        class="icon-info js-tooltip"
                                                        title="Vztahuje se pouze pro reklamace se servisním střediskem eD System a.s. Svoz je automaticky objednán."></i></label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="panel-bottom-tools ">
                    <div class="info-bar">
                        <div class="form-group">
                            <label for="ddPhemail">E-maily pro reklamace <i class="icon-info js-tooltip"
                                    title="Při zadání Vaší emailové adresy Vás budeme informovat dojde-li k vyřízení reklamace"></i></label>
                            <select name="ctl00$MainContent$ddPhemail" id="ddPhemail"
                                class="form-control js-combo select2-hidden-accessible is-required" tabindex="-1"
                                aria-hidden="true">

                            </select><span class="form-control-validate-info"></span><span
                                class="form-control-validate-info"></span><span
                                class="select2 select2-container select2-container--default select2-container--below"
                                dir="ltr" style="width: 216px;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-ddPhemail-container"><span
                                            class="select2-selection__rendered"
                                            id="select2-ddPhemail-container"></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <a class="link-edit" href="/pages/administration/kontaktavz.aspx">Spravovat e-maily</a>
                    </div>
                    <div id="MainContent_pnlButtonSave" class="buttons-area">


                        <div class="buttons-area">
                            <input type="button" name="ctl00$MainContent$btnSave" value="Vytvořit AVZ"
                                id="btnSave" disabled="disabled" class="aspNetDisabled btn btn--primary">
                        </div>

                    </div>
                </div> --}}




            </div>

        </div>
    </div>
</div>
