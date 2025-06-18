<div class="page-content_in">
    <div class="container" role="main">
        <h1 class="page-title">Vaše firma</h1>


        <a href="/pages/administration/securitydashboard.aspx">

            <div class="alert-v2_container">
                <div class="alert-v2 alert-v2--fullWidth alert-v2--transparent">
                    <div class="alert-v2_iconContainer alert-v2_iconContainer--big">
                        <i class="alert-v2_icon--big icon icon-security-success text-lightGreen"></i>
                    </div>
                    <div class="alert-v2_copy" style="display: flex; align-items: center;">
                        <strong>

                            Váš účet je zabezpečen na nejvyšší možné úrovni. Děkujeme, že tento stav udržujete.

                        </strong>
                    </div>
                </div>
            </div>

        </a>


        <div class="panel-bar">
            <div class="panel-bar_body">
                <div class="panel-bar_title">Hlavní údaje</div>
            </div>
        </div>

        <div class="panel firma-info">
            <div class="panel-body">
                <div class="panel-table">
                    <div class="panel">
                        <div class="panel-body">

                            <div class="firma-info_item">
                                <span class="firma-info_label">Přihlašovací jméno</span>
                                <strong class="firma-info_value">{{ auth()->user()->email }}</strong>
                            </div>

                            <div class="firma-info_item">
                                <span class="firma-info_label">Název</span>
                                <strong class="firma-info_value">{{ auth()->user()->name }}
                                    {{ auth()->user()->surname }}</strong>
                            </div>
                            <div class="firma-info_item">
                                <span class="firma-info_label">Firma</span>
                                <strong class="firma-info_value">{{ auth()->user()->company_name }}</strong>
                            </div>
                            <div class="firma-info_item">
                                <span class="firma-info_label">Ulice</span>
                                <strong class="firma-info_value">{{ auth()->user()->address }}</strong>
                            </div>
                            <div class="firma-info_item">
                                <span class="firma-info_label">Město</span>
                                <strong class="firma-info_value">{{ auth()->user()->city }}</strong>
                            </div>
                            <div class="firma-info_item">
                                <span class="firma-info_label">PSČ</span>
                                <strong class="firma-info_value">{{ auth()->user()->postcode }}</strong>
                            </div>
                            <div class="firma-info_item">
                                <span class="firma-info_label">Stát</span>
                                <strong class="firma-info_value">{{ auth()->user()->state }}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="firma-info_item">
                                <span class="firma-info_label">IČO</span>
                                <strong class="firma-info_value">{{ auth()->user()->ic }}</strong>
                            </div>
                            <div class="firma-info_item">
                                <span class="firma-info_label">DIČ</span>
                                <strong class="firma-info_value">{{ auth()->user()->dic ?? '' }}</strong>
                            </div>
                            <div class="firma-info_item">
                                <span class="firma-info_label">Email</span>
                                <div class=" strong firma-info_value"><a
                                        href="mailto:binapi.web@gmail.com">{{ auth()->user()->email }}</a></div>

                                {{-- <div class="text-success firma-info_verified">
                                    <i class="icon-check btn_icon "></i>
                                    <span
                                         class="firma-info_verified-text">Ověřeno
                                    </span>
                                </div> --}}


                            </div>
                            <div class="firma-info_item">
                                <span class="firma-info_label">Telefon</span>
                                <div class="firma-info_value">{{ auth()->user()->phone }}</div>

                                {{-- <div class="text-success firma-info_verified">
                                    <i class="icon-check btn_icon "></i><span
                                        class="firma-info_verified-text">Ověřeno</span>
                                </div> --}}


                            </div>
                            <div class="firma-info_item">
                                <span class="firma-info_label">Měna</span>
                                <strong class="firma-info_value">CZK</strong>
                            </div>
                            <div class="firma-info_item">
                                <span class="firma-info_label">Jazyk</span>
                                <strong class="firma-info_value">Czech</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="buttons-area">
            <input type="submit" name="ctl00$MainContent$ctl06" value="Změnit heslo" class="btn btn--primary">
        </div>

        <div class="panel panel--no-border panel--has-table">
            <div class="panel-body">
                <h2 class="panel-title">Adresy</h2>
            </div>
            <table class="table documents-tbl-list">
                <thead>
                    <tr>
                        {{-- <th class="table-head-cell table-col_name">Název adresy</th> --}}
                        <th class="table-head-cell table-col_street">Ulice</th>
                        <th class="table-head-cell table-col_city">Město</th>
                        <th class="table-head-cell table-col_zipcode">PSČ</th>
                        <th class="table-head-cell table-col_country">Stát</th>
                        <th class="table-head-cell table-col_phone">Telefon</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="licha">
                        {{-- <td data-th="Název adresy" class="table-col_name">
                            <div class="table-cell_in">
                                <a href="address.aspx?cla_id=1793325">MILLENIUM INTERNATIONAL s.r.o. v likvidaci</a>
                            </div>
                        </td> --}}
                        <td data-th="Ulice" class="table-col_street">{{ auth()->user()->address }}</td>
                        <td data-th="Město" class="table-col_city">{{ auth()->user()->city }}</td>
                        <td data-th="PSČ" class="table-col_zipcode">{{ auth()->user()->postcode }}</td>
                        <td data-th="Stát" class="table-col_country">{{ auth()->user()->state }}</td>
                        <td data-th="Telefon" class="table-col_phone">{{ auth()->user()->phone }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
        {{-- <div class="buttons-area">

            <a href="address.aspx?cla_id=0" class="btn btn--submit">
                <span class="btn_label">Nová adresa</span>
            </a>

        </div> --}}


        <div class="panel panel--no-border panel--has-table">
            <div class="panel-body">
                <h2 class="panel-title">Kontakty</h2>
            </div>
            <table class="table documents-tbl-list">
                <thead>
                    <tr>
                        <th class="table-head-cell table-col_name">Jméno a Příjmení</th>
                        <th class="table-head-cell table-col_contact-department">Oddělení</th>
                        <th class="table-head-cell table-col_contact-job">Funkce</th>
                        <th class="table-head-cell table-col_phone">Telefon</th>
                        <th class="table-head-cell table-col_email">E-mail</th>
                        <th class="table-head-cell table-col_contact-rules"></th>
                    </tr>
                </thead>

                <tbody>


                    <tr class="suda">
                        <td data-th="Jméno a Příjmení" class="table-col_name">
                            <div class="table-cell_in">
                                <a href="kontaktinfo.aspx?change_con_id=1443048&amp;change_cla_id=1793325">{{ auth()->user()->name }} {{ auth()->user()->surname }}</a>
                            </div>
                        </td>
                        <td data-th="Oddělení" class="table-col_contact-department"></td>
                        <td data-th="Funkce" class="table-col_contact-job">B2CF</td>
                        <td data-th="Telefon" class="table-col_phone">{{ auth()->user()->phone }}</td>
                        <td data-th="E-mail" class="table-col_email">{{ auth()->user()->email }}</td>
                        <td data-th="" class="table-col_contact-rules">
                            <div class="status-icons">
                                <i class="icon icon-cart-remove js-tooltip text-disabled"
                                    title="Přístup na e-shop: NE"></i><i
                                    class="icon icon-cellphone-check js-tooltip text-success"
                                    title="Ověření kontaktů: VŠE"></i>
                            </div>
                        </td>
                    </tr>
                </tbody>


            </table>
        </div>
        {{-- <div class="buttons-area">

            <a class="btn btn--submit" href="kontakt.aspx">
                <span class="btn_label">Nový kontakt</span>
            </a>

        </div> --}}


        <div class="panel">
            <div class="panel-body">
                <h2 class="panel-title">Odebrání souhlasu se zasíláním obchodních oznámení</h2>
                <p>
                    <input type="submit" name="ctl00$MainContent$ctl09" value="Odvolat souhlas"
                        class="btn btn--submit">
                </p>
                <p>Udělený / neudělený souhlas bude mít vliv na to, zda od nás do své e-mailové schránky registrované
                    s&nbsp;tímto účtem, budete dostávat e-maily s informacemi o aktuálních promoakcích, zajímavých
                    produktech a akcích eD.</p>
                <p>Naše e-maily vám budou chodit několikrát do týdne v závislosti na vašich preferencích a předchozím
                    zájmu o různá témata a akce.</p>
                <p>Váš udělený souhlas můžete kdykoliv odvolat klikem na tlačíko „Odvolat souhlas“ (zasílání zrušíme do
                    2 pracovních dnů) nebo klikem na odkaz odhlásit se z odběru v patičce našich e-mailů (zasílání
                    zrušíme okamžitě).</p>
                <ul>
                    <li role="menuitem">
                        <a href="{{ route('admin.my-settings.my-account.gdpr') }}">Zpracování osobních údajů</a>
                    </li>
                </ul>
            </div>
        </div>


    </div>
</div>
