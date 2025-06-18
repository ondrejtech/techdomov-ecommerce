<div class="page-content_in">
    <div class="container" role="main">
        <h1 class="page-title">Reklamace</h1>

        <div class="panel">
            <div class="panel-table">
                <div class="panel">
                    <div class="panel-body">
                        <h2 class="panel-title">Informace</h2>
                        <ul class="nav nav-menu-list">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('admin.how-complaints')}}">Jak a kde
                                    reklamovat</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.complaint-list') }}">Moje
                                    reklamace</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('admin.claims-technicians') }}">Kontakty</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('admin.guarantees') }}">Záruky</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('admin.complaint-order') }}">Reklamační
                                    řád</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <h2 class="panel-title">Chci reklamovat zboží</h2>
                        <ul class="nav nav-menu-list">
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.create-complaint-number') }}">Vytvořit
                                    AVZ</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="/pages/documents/newclaimpc.aspx">Reklamovat
                                    PC LYNX</a></li> --}}
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.complaint-list') }}">Moje AVZ</a></li>
                            {{-- <li class="nav-item"><a class="nav-link"
                                    href="/pages/documents/newclaimirreparable.aspx">Neopravitelné a DOA reklamace</a>
                                <i class="icon-question js-tooltip form-control_tooltip-help"
                                    title="Reklamace vyhodnocena servisním střediskem jako neopravitelná."></i></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <h2 class="panel-title">Chci reklamovat balík</h2>
                        <ul class="nav nav-menu-list">
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('admin.discrepancies-with-goods') }}">Nesrovnalosti
                                    se zbožím</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('admin.inconsistencies-with-forwarding') }}">Nesrovnalosti
                                    se zásilkou</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-body">
                <p>Našim cílem je ulehčit Vám co nejvíce i druhou stránku obchodu a tím jsou reklamace zboží. </p>
                <p>
                    Pokud Vás tato nemilá situace potká, náš zkušený reklamační tým je připraven Vám maximálně pomoci
                    tuto situaci v co nejkratší době vyřešit. Průměrná doba vyřízení reklamace je 5 dní, což zajisté
                    oceníte nejen vy, ale hlavně Vaši zákazníci.
                    Pro usnadnění vašeho podnikání nabízíme možnost uplatnit reklamaci produktů nezakoupených u naší
                    společnosti.
                </p>
                <p>Spokojenost Vás i Vašeho zákazníka je naší prioritou .</p>
            </div>
        </div>

        <div class="panel panel-inside panel-inside--default panel-promo">
            <div class="panel-heading">
                <h2 class="panel-title">Vaše průměrná doba vyřízení</h2>
            </div>
            <div class="panel-body">
                <i class="icon-like panel-promo_icon"></i>
                <p class="info-text">
                    Vaši reklamaci vyřídíme v průměru za <strong>1

                        den</strong>.
                </p>
            </div>
        </div>
    </div>
</div>
