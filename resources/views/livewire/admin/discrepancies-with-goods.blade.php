<div>
    <div class="container">



        <div class="breadcrumbs no-print" role="navigation" aria-label="Drobečková navigace">
            <div class="breadcrumbs_in">


                <a class="breadcrumbs_item" href="/"><i class="icon-home breadcrumbs_item_icon"></i><span
                        class="breadcrumbs_item_label">Úvodní stránka</span></a>

            </div>
        </div>

        <article class="detail" role="main">
            <h1>Nesrovnalosti se zbožím</h1>
            <h2>balíková help linka</h2>
            <p>v rámci zkvalitnění služeb a pro Váš komfort jsme pro Vás připravili dopravní "balíkovou help linku", kde
                na
                jednom místě, jedním mailem či telefonátem vyřídíte případné problémy s dodávkou zboží od nás <br>
                tel.: {{ config('app.business_phone') }}<br>
                <a href="maito:{{ config('app.reklamacni_mail') }}">{{ config('app.reklamacni_mail') }}</a>
                <strong>Pracovní doba: od 8.30 do 17:00 hod</strong>
            </p>
            <h2>nepřevzaté nebo nedoručené zásilky</h2>
            <p>Pokud se jedná o zásilku, která Vámi NEBYLA PŘEVZATA nebo Vám VŮBEC NEBYLA DORUČENA, prosíme, obraťte se
                přímo na balíkovou službu <a
                    href="maito:{{ config('app.reklamacni_mail') }}">{{ config('app.reklamacni_mail') }}</a>.<br>
                Při hlášení reklamace e-mailem prosíme NESPOJUJTE dvě nebo více různých zásilek / palet. Každou
                záležitost
                řešte vždy jedním e-mailem.<br>
                Pokud jste již škodu nahlásili a máte sepsaný zápis, prosím, ohlaste reklamaci na e-mail
                {{ config('app.reklamacni_mail') }},
                kam zašlete společně se zápisem všechny důležité údaje. Pokud nemáte možnost přiložit do e-mailu zápis,
                zašlete jej na fax: 597444171 a podejte o tom zprávu na e-mail <a
                    href="maito:{{ config('app.reklamacni_mail') }}">{{ config('app.reklamacni_mail') }}</a><br>
                Děkujeme a prosíme o dodržování uvedeného postupu. Jedině tak může být Vaše reklamace kladně vyřízena a
                může
                být vystaven dobropis.</p>

            <h2>nesrovnalosti v dodávce zboží</h2>
            <p>Pokud se jedná o nesrovnalosti v dodávce nebo o zboží, které od nás vůbec neodešlo, prosím, kontaktuje
                balíkovou službu <a
                    href="maito:{{ config('app.reklamacni_mail') }}">{{ config('app.reklamacni_mail') }}</a>.</p>
        </article>
    </div>

</div>
