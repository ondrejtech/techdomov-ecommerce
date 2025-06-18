<main class="page-content" role="main" aria-label="Hlavní obsah">






    <div class="security-settings page-content_in">
        <div class="container" role="main">
            <div class="page-content_heading">
                <h1 class="page-title">Nastavení bezpečnosti</h1>
                <div class="page-content_tools">
                    <div class="page-content_tools_item">
                        <a href="/bezpecne-chovani/article-cSEC_SAFE_INTERNET" target="_blank"
                            class="text-black">Přečtěte si zásady bezpečného chování na internetu</a>
                    </div>
                </div>
            </div>
            <div class="alert-v2_container">
                <div class="alert-v2 alert-v2--fullWidth alert-v2--transparent">
                    <div class="alert-v2_iconContainer alert-v2_iconContainer--big">
                        <i class="alert-v2_icon--big icon icon-security-success text-lightGreen"></i>
                    </div>
                    <div class="alert-v2_copy">
                        <strong>

                            Váš účet je zabezpečen na nejvyšší možné úrovni. Děkujeme, že tento stav udržujete.

                        </strong>
                    </div>
                </div>
            </div>
            <div class="panel-body--grid">
                <div class="panel panel-inside  security-options">
                    <div class="panel-body panel-body--big ">

                        <div>
                            <h2 class="panel-title">Vaše kontakty</h2>
                            <h2 class="text-lightGreen panel-title--info">Kontakty ověřeny</h2>
                            <p class="panel-text">Máte ověřen e-mail i mobilní telefonní kontakt.</p>
                        </div>
                        <div class="divider"></div>
                        <h3 class="panel-text">Udržujte úroveň zabezpečení</h3>
                        <p class="panel-text">Dodržováním bezpečnostních zásad chráníte svůj účet před zneužitím.</p>
                        <div class="divider"></div>
                        <a class="text-black" href="/overena-zarizeni/article-cSEC_VERIFIED_DEVICES" target="_blank">Jak
                            ověřená zařízení pomáhají se zabezpečením účtu.</a>

                    </div>
                </div>
                <div class="panel panel-inside ">
                    <div class="panel-body panel-body--big">

                        <div>
                            <h2 class="panel-title">Vaše heslo</h2>
                            <h2 class="text-lightGreen panel-title--info">bezpečné</h2>
                            {{-- <p class="panel-text">Heslo jste změnili před 10 dny</p> --}}
                        </div>
                        <div class="divider"></div>
                        <h3 class="panel-text">Jak zachovat toto zabezpečení?</h3>
                        <p class="panel-text">Nedovolte, aby heslo bylo starší než 3 měsíce.</p>
                        <div class="divider"></div>
                        <button type="button" class="btn btn--outline-primary text-uppercase bold"
                            onclick="changePassword();return false;">Změnit heslo</button>
                        <a class="text-black" href="/silne-heslo/article-cSEC_PASSWORD" target="_blank">Návod, jak
                            vytvořit silné heslo a důvody, proč jej měnit.</a>

                    </div>
                </div>
                <div class="panel panel-inside ">
                    <div class="panel-body panel-body--big">
                        <div>
                            <h2 class="panel-title">Multifaktorové ověření</h2>

                            <h2 class="text-lightGreen panel-title--info">aktivní</h2>

                            <p class="panel-text">Nastavením multifaktorového ověření zvýšíte zabezpečení svého účtu.
                            </p>
                        </div>
                        <div>

                            <h3 class="panel-text">Ověřená zařízení</h3>
                            <div class="chips-area">
                                <span class="chip">
                                    <span class="chip--text js-tooltip"
                                        title="Firefox on Windows (Expires: 2025-06-17)">Firefox on Window...</span>
                                    <button type="button" class="chip--close-btn" title="Odstranit"
                                        onclick="deleteAuthMethod(3,'97b62cd0-624b-4140-ab04-63763e6e5a9d', 0);return false;"><i
                                            class="icon icon-close"></i></button>
                                </span>

                                <span class="chip">
                                    <span class="chip--text js-tooltip" data-hasqtip="1"
                                        oldtitle="Chrome on Windows (Expires: 2025-06-16)" title="">Chrome on
                                        Windows...</span>
                                    <button type="button" class="chip--close-btn" title="Odstranit"
                                        onclick="deleteAuthMethod(3,'17b014f0-9e50-49a0-b30b-d42664cd1868', 0);return false;"><i
                                            class="icon icon-close"></i></button>
                                </span>

                                <span class="chip">
                                    <span class="chip--text js-tooltip"
                                        title="Firefox on Windows (Expires: 2025-06-16)">Firefox on Window...</span>
                                    <button type="button" class="chip--close-btn" title="Odstranit"
                                        onclick="deleteAuthMethod(3,'4f675ca9-1efa-4241-b434-7b08a70c5f1b', 0);return false;"><i
                                            class="icon icon-close"></i></button>
                                </span>
                            </div>


                        </div>
                        <a class="text-black" href="/jak-funguje-overene-zarizeni/article-cSEC_VERIFIED_DEV_FUNC"
                            target="_blank">Jak funguje ověřené zařízení a jaký má výhody je mít nastaveno.</a>
                    </div>
                </div>
            </div>

            {{-- <h1 class="page-title" id="MFA">Možnosti multifaktorového ověření</h1> --}}
            {{-- <div class="panel panel-inside">
                <div class="panel-body panel-body--medium">
                    <div class="security-panel">
                        <div class="security-tab">
                            <h2 class="multifactor-title">SMS <i class="icon-info js-tooltip"
                                    data-title="tip_mfa_sms"></i></h2>
                            <i class="icon icon-security-success icon-huge text-lightGreen"></i>
                            <div class="chips-area">
                                <span class="chip">
                                    <span class="chip--text">721178847</span>

                                    <button type="button" class="chip--close-btn" title="Odstranit"
                                        onclick="deleteAuthMethod(2,'8bba0845-a6ab-467d-bbcc-3fc7be6d1055', 1);return false;"><i
                                            class="icon icon-close"></i></button>

                                </span>
                            </div>

                            <button type="button" class="btn btn--primary btn-cta text-uppercase"
                                onclick="openSaveAuthMethodForm(2,1, '8bba0845-a6ab-467d-bbcc-3fc7be6d1055');return false;">Změnit</button>

                        </div>
                        <div class="security-tab">
                            <h2 class="multifactor-title">Autentizační aplikace <i class="icon-info js-tooltip"
                                    data-title="tip_mfa_otp"></i></h2>
                            <i class="icon icon-security-error icon-huge text-danger"></i>


                            <button type="button" class="btn btn--primary btn-cta text-uppercase"
                                onclick="saveAuthMethod(5);return false;">Přidat</button>
                        </div>
                        <div class="security-tab">
                            <h2 class="multifactor-title">Hardwarová autentifikace <i class="icon-info js-tooltip"
                                    data-title="tip_mfa_webauthn"></i></h2>
                            <i class="icon icon-security-error icon-huge text-danger"></i>


                            <button type="button" class="btn btn--primary btn-cta text-uppercase"
                                onclick="saveAuthMethod(4);return false;">Přidat</button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <input type="text" id="hdnAuth" class="hide" value="Cz%2f%2bcocr2iF%2bwjs0ByeOogbZhej%2fIReO">


</main>
