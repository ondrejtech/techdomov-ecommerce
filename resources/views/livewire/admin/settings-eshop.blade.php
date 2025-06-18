<div class="page-content_in">
    <div class="container" role="main">
        <h1 class="page-title">Nastavení eD SHOP</h1>


        <div class="panel panel--no-border panel--has-table">
            <div class="alert alert-info">
                <p>Některá nastavení může měnit pouze administrátor.</p>
            </div>

            <table class="table documents-tbl-list">
                <thead>
                    <tr>
                        <th class="table-head-cell table-col_name">Název</th>
                        <th class="table-head-cell">Hodnota</th>
                        <th class="table-head-cell table-col_desc">Popis</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="licha">
                        <td data-th="Název" class="table-col_name">
                            <div class="table-cell_in">


                                Košík
                            </div>
                        </td>
                        <td data-th="Hodnota">
                            <div class="ux-combo">
                                <select name="ctl00$MainContent$rptWebSetting$ctl01$ddItems"
                                    id="MainContent_rptWebSetting_ddItems_0" class="form-control ux-combo_field">
                                    <option value="1">Společný pro firmu</option>
                                    <option value="2">Společný pro pobočku</option>
                                    <option selected="selected" value="3">Rozdělený</option>

                                </select>
                            </div>

                        </td>
                        <td data-th="Popis" class="table-col_desc">
                            Nastavení košíku
                        </td>
                    </tr>

                    <tr class="suda">
                        <td data-th="Název" class="table-col_name">
                            <div class="table-cell_in">


                                Dodací adresa na košíku
                            </div>
                        </td>
                        <td data-th="Hodnota">
                            <div class="ux-combo">
                                <select name="ctl00$MainContent$rptWebSetting$ctl02$ddItems"
                                    id="MainContent_rptWebSetting_ddItems_1" class="form-control ux-combo_field">
                                    <option value="9">ANO</option>
                                    <option selected="selected" value="10">NE</option>

                                </select>
                            </div>

                        </td>
                        <td data-th="Popis" class="table-col_desc">
                            Pokud bude nastaveno na „Ano“, tak při vytvoření nového košíku se Vám předvyplní dodací
                            adresa z vašeho nastavení (tj. adresa, na kterou jste aktuálně přihlášeni), jinak se bude
                            adresa přebírat z poslední vytvořené objednávky.
                        </td>
                    </tr>

                    <tr class="licha">
                        <td data-th="Název" class="table-col_name">
                            <div class="table-cell_in">


                                Přidat do balíku mou fakturu
                            </div>
                        </td>
                        <td data-th="Hodnota">
                            <div class="ux-combo">
                                <select name="ctl00$MainContent$rptWebSetting$ctl03$ddItems"
                                    id="MainContent_rptWebSetting_ddItems_2" class="form-control ux-combo_field">
                                    <option value="11">ANO</option>
                                    <option selected="selected" value="12">NE</option>

                                </select>
                            </div>

                        </td>
                        <td data-th="Popis" class="table-col_desc">
                            Tato volba zajistí, že přidáme do balíku fakturu vystavenou vaším jménem na vašého
                            zákazníka. Výchozí nastavení.
                        </td>
                    </tr>

                    <tr class="suda">
                        <td data-th="Název" class="table-col_name">
                            <div class="table-cell_in">


                                Informace k věrnostnímu systému
                            </div>
                        </td>
                        <td data-th="Hodnota">
                            <div class="ux-combo">
                                <select name="ctl00$MainContent$rptWebSetting$ctl04$ddItems"
                                    id="MainContent_rptWebSetting_ddItems_3" class="form-control ux-combo_field">
                                    <option selected="selected" value="13">ANO</option>
                                    <option value="14">NE</option>

                                </select>
                            </div>

                        </td>
                        <td data-th="Popis" class="table-col_desc">
                            Tato volba zajistí, že uvidíte informace k věrnostnímu systému.
                        </td>
                    </tr>

                    <tr class="licha">
                        <td data-th="Název" class="table-col_name">
                            <div class="table-cell_in">


                                Bezpečnostní notifikace
                            </div>
                        </td>
                        <td data-th="Hodnota">
                            <div class="ux-combo">
                                <select name="ctl00$MainContent$rptWebSetting$ctl05$ddItems"
                                    id="MainContent_rptWebSetting_ddItems_4" class="form-control ux-combo_field">
                                    <option selected="selected" value="15">ANO</option>
                                    <option value="16">NE</option>

                                </select>
                            </div>

                        </td>
                        <td data-th="Popis" class="table-col_desc">
                            Zasílání bezpečnostních informací administrátorovi
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div wire:click="save_settings" class="buttons-area">
            <input type="btn" name="ctl00$MainContent$rptWebSetting$ctl06$btnSaveSetting" value="Uložit nastavení"
                id="MainContent_rptWebSetting_btnSaveSetting" class="btn btn--primary">
        </div>


    </div>
</div>
