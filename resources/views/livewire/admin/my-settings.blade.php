<div>
    <h1 style="margin-top: 1%" class="page-title">Moje nastavení</h1>
    <div class="panel">
        <div class="panel-table">
            <div class="panel">
                <div class="panel-body">
                    <h2 class="panel-title">Informace</h2>
                    <ul class="nav nav-menu-list">
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.my-settings.my-account') }}">Základní údaje</a></li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('admin.my-settings.secured') }}">Nastavení bezpečnosti
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('admin.my-settings.settings-eshop') }}">Nastavení eshopu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('admin.my-settings.access-history') }}">Historie přístupů
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('admin.my-settings.overview-users-by-branch') }}">Přehled uživatelů podle poboček
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('admin.my-settings.settings-b2c') }}">Nastavení B2C
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body">
                    <h2 class="panel-title">Chci reklamovat zboží</h2>
                    <ul class="nav nav-menu-list">
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.create-complaint-number') }}">Vytvořit
                                AVZ</a></li>

                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.complaint-list') }}">Moje AVZ</a></li>

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

</div>
