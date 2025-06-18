<div class="container">
    <div class="breadcrumbs no-print" role="navigation" aria-label="Drobečková navigace">
        <div class="breadcrumbs_in">


            <a class="breadcrumbs_item" href="/"><i class="icon-home breadcrumbs_item_icon"></i><span
                    class="breadcrumbs_item_label">Úvodní stránka</span></a>

        </div>
    </div>

    <article class="detail" role="main">
        <h1>Jak a kde reklamovat</h1>
        <h2>Jak a kde reklamovat</h2>
        <p><strong>Přidělení čísla AVZ (autorizace vadného zboží) je prvním krokem úspěšné reklamace</strong><br>Před
            odesláním reklamace je nutné zjistit, zda pro Váš vadný produkt existuje autorizovaný servis. <a
                href="/pages/documents/claimservicecenterlist.aspx">Seznam autorizovaných servisů naleznete zde</a>,
            případně si tuto informaci můžete ověřit z originálního záručního listu výrobku. Pokud výrobek nemá
            autorizovaný servis nebo je neopravitelný, tak reklamaci řešte s eD system dle níže uvedeného. Pokud výrobek
            nemá autorizovaný servis nebo je neopravitelný, tak reklamaci řešte s eD system přes webový formulář nebo na
            email : <a href="mailto:{{ config('app.reklamacni_mail') }}">{{ config('app.reklamacni_mail') }}</a>. Každé zboží určené na reklamaci
            musí mít vytvořeno AVZ číslo.</p>
        <h2>Možnosti vytvoření AVZ</h2>
        <p>Online vytvoření AVZ</p>
        <p>Při zadání reklamaci máte možnost si sami vytvořit číslo AVZ přes <a
                href="{{ route('admin.create-complaint-number')}}"><strong>"Chci reklamovat"</strong></a></p>
        <h2>Jak správně zabalit a co zaslat společně s reklamací</h2>
        <ul>
            <li>Viditelně označit balík přiděleným AVZ číslem.</li>
            <li>Pokud je v balíku více než jeden vadný produkt, musí být zásilka označena soupiskou reklamovaného zboží
                , tzn. na zásilku prosím napište seznam čísel reklamací AVZ. V případě, že tento seznam nebude uveden,
                nelze nárokovat rozdíly v obsahu zásilky.</li>
            <li>Reklamované zboží prosím zašlete v kompletním balení. Výjimku tvoří produkty – základní desky, grafické
                karty, ty prosím zasílejte bez příslušenství.</li>
            <li>V případě opakované reklamace prosím předložte i doklady o předchozích záručních opravách provedených v
                servisních střediscích.</li>
            <li>Reklamovaní zboží musí obsahovat originální nálepky (sériové čísla, záruční přelepky aj.), které nesmí
                být poškozeny nebo odstraněny.</li>
        </ul>
        <h2>Možnosti zasílání reklamace</h2>
        <ul>
            <ul>
                <li>Vyzvednutí reklamace našim smluvním přepravcem DPD</li>
                Nově Vám přinášíme možnost odvozu reklamaci z Vaší společnosti a to v hodnotě 70,- Kč za jeden balík .
                Svoz je prováděn přepravní společnosti DPD, která nabízí nejkvalitnější služby v oboru dopravy v ČR.
                Pokud Vás tato nabídka oslovila, neváhejte při vytvoření reklamace tuto možnost zvolit
            </ul>
        </ul>
        <p><br><strong>Podmínky služby:</strong></p>
        <ul>
            <ul>Reklamace pro zboží bez servisního partnera v ČR</ul>
        </ul>
        <p> </p>
        <ul>
            <ul>Maximální hmotnost 31.5kg</ul>
        </ul>
        <p> </p>
        <ul>
            <ul>Volba dodací adresy totožná s adresou pro vyzvednutí reklamace</ul>
        </ul>
        <p><br>Po vytvořeni reklamačního čísla AVZ je svoz automaticky vytvořen a bude následující den svezen pod číslem
            daného AVZ</p>
        <p><br><br></p>
        <ul>
            <ul>Zaslaní reklamace smluvními přepravci DPD, PPL, GEIS, Gebrüder Weiss, UPS</ul>
        </ul>
        <p><strong>Reklamaci prosím zašlete na centrálu:</strong></p>
        <ul>
            <ul>{{ config('app.business_name')}} - reklamace AVZ "číslo"</ul>
        </ul>
        <p> </p>
        <ul>
            <ul>{{ config('app.business_address') }}</ul>
        </ul>
        <p>{{ config('app.business_state') }}</p>
        <p><br><br></p>
        <ul>
            <ul>
                <ul>Vysvětlivky:</ul>
            </ul>
        </ul>
        <p><br><strong>Co znamená "číslo AVZ"</strong></p>
        <ul>
            <ul>Číslo AVZ (autorizace vrácení zboží) je přiděleno každé reklamaci produktu, který je dále pod tímto
                číslem veden v IS eD System. Při vytvoření reklamace si číslo AVZ uschovejte - snadněji je reklamace
                dohledávána a kontrolována.</ul>
        </ul>
        <p><br><br><strong>DOA reklamace</strong></p>
        <ul>
            <ul>eD'System Vám nabízí u produktů využívat tzv. DOA reklamaci. Jedná se o možnost ve vybraném časovém
                horizontu získat automaticky nový kus nebo opravný daňový doklad. U většiny produktů nabízíme uplatnit
                DOA reklamaci do 3 dnů. Vybrané IT značky mají tuto dobu prodlouženou - viz tabulka níže.</ul>
        </ul>
        <p> </p>
        <ul>
            <ul>
                <ul>
                    <li>reklamaci je třeba neprodleně po zavedení reklamace odeslat eD system Ostrava, v jiném případě
                        nebude nárok na DOA reklamaci uznán.</li>
                    <li>DOA reklamace zasílejte kompletní, mechanicky nepoškozený v původním a neznehodnoceném obalu.
                    </li>
                    <li>DOA reklamace se nevztahuje na spotřební materiál uvedených značek.</li>
                </ul>
            </ul>
        </ul>
        <p><br><br><strong>Dotaz k reklamaci</strong></p>
        <p><br>Přes tuto aplikaci kontaktujete reklamační oddělení: </p>
        <form method="post" action="./marketingcampaigndetailarticle.aspx?mct_code=10695"
            onsubmit="javascript:return WebForm_OnSubmit();" id="ctl00">
            <div class="aspNetHidden">
                <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
                <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                    value="/wEPDwUKLTQ3Njg3NzU4Mg8WAh4TVmFsaWRhdGVSZXF1ZXN0TW9kZQIBFgJmD2QWDGYPZBYIAgIPFQEQbm9pbmRleCxub2ZvbGxvd2QCBw8VBRMvSW1hZ2VzL2Zhdmljb24uaWNvIS9TY3JpcHRzL2xpYnJhcnkvaHRtbDVzaGl2Lm1pbi5qcx8vU2NyaXB0cy9saWJyYXJ5L3Jlc3BvbmQubWluLmpzHC9TdHlsZXMvZm9udHMvR290aGFtL2tpdC5jc3MbL1N0eWxlcy9pY29ucy9zdHlsZS5jc3M/dj0yZAIJDxUCATiLBjxzY3JpcHQ+DQp2YXIgY29uc2VudEFuYWx5dGljYWwgPSBoYXNDb25zZW50Rm9yQ2F0ZWdvcnkoMyk7DQp2YXIgY29uc2VudE1hcmtldGluZyA9IGhhc0NvbnNlbnRGb3JDYXRlZ29yeSg0KTsNCndpbmRvdy5kYXRhTGF5ZXIgPSB3aW5kb3cuZGF0YUxheWVyIHx8IFtdOw0KZnVuY3Rpb24gZ3RhZygpIHsgZGF0YUxheWVyLnB1c2goYXJndW1lbnRzKTsgfQ0KZ3RhZygnY29uc2VudCcsICd1cGRhdGUnLCB7DQonYWRfc3RvcmFnZSc6IGNvbnNlbnRNYXJrZXRpbmcgPyAnZ3JhbnRlZCcgOiAnZGVuaWVkJywNCidhbmFseXRpY3Nfc3RvcmFnZSc6IGNvbnNlbnRBbmFseXRpY2FsID8gJ2dyYW50ZWQnIDogJ2RlbmllZCcsDQonYWRfdXNlcl9kYXRhJzogY29uc2VudE1hcmtldGluZyA/ICdncmFudGVkJyA6ICdkZW5pZWQnLA0KJ2FkX3BlcnNvbmFsaXphdGlvbic6IGNvbnNlbnRNYXJrZXRpbmcgPyAnZ3JhbnRlZCcgOiAnZGVuaWVkJywNCn0pOw0KPC9zY3JpcHQ+DQo8IS0tR29vZ2xlIHRhZyhndGFnLmpzKS0tPg0KPHNjcmlwdCBhc3luYyBzcmM9J2h0dHBzOi8vd3d3Lmdvb2dsZXRhZ21hbmFnZXIuY29tL2d0YWcvanM/aWQ9VUEtMjE1ODA2Mi01NSc+PC9zY3JpcHQ+DQo8c2NyaXB0Pg0Kd2luZG93LmRhdGFMYXllciA9IHdpbmRvdy5kYXRhTGF5ZXIgfHwgW107IA0KZnVuY3Rpb24gZ3RhZygpe2RhdGFMYXllci5wdXNoKGFyZ3VtZW50cyk7fSANCmd0YWcoJ2pzJywgbmV3IERhdGUoKSk7DQpndGFnKCdjb25maWcnLCAnVUEtMjE1ODA2Mi01NScpOyANCjwvc2NyaXB0Pg0KZAILDxUD7wc8c2NyaXB0IHR5cGU9J3RleHQvamF2YXNjcmlwdCc+DQp2YXIgYXBwSW5zaWdodHMgPSB3aW5kb3cuYXBwSW5zaWdodHMgfHwgZnVuY3Rpb24oY29uZmlnKSB7DQpmdW5jdGlvbiByKGNvbmZpZykgeyB0W2NvbmZpZ10gPSBmdW5jdGlvbigpIHsgdmFyIGkgPSBhcmd1bWVudHM7IHQucXVldWUucHVzaChmdW5jdGlvbigpIHsgdFtjb25maWddLmFwcGx5KHQsIGkpIH0pIH0gfQ0KdmFyIHQgPSB7IGNvbmZpZzogY29uZmlnIH0sIHUgPSBkb2N1bWVudCwgZSA9IHdpbmRvdywgbyA9ICdzY3JpcHQnLCBzID0gdS5jcmVhdGVFbGVtZW50KG8pLCBpLCBmOyBmb3IgKHMuc3JjID0gY29uZmlnLnVybCB8fCAnLy9hejQxNjQyNi52by5tc2VjbmQubmV0L3NjcmlwdHMvYS9haS4wLmpzJywgdS5nZXRFbGVtZW50c0J5VGFnTmFtZShvKVswXS5wYXJlbnROb2RlLmFwcGVuZENoaWxkKHMpLCB0LmNvb2tpZSA9IHUuY29va2llLCB0LnF1ZXVlID0gW10sIGkgPSBbJ0V2ZW50JywgJ0V4Y2VwdGlvbicsICdNZXRyaWMnLCAnUGFnZVZpZXcnLCAnVHJhY2UnLCAnQWpheCddOyBpLmxlbmd0aDspIHIoJ3RyYWNrJyArIGkucG9wKCkpOyByZXR1cm4gcignc2V0QXV0aGVudGljYXRlZFVzZXJDb250ZXh0JyksIHIoJ2NsZWFyQXV0aGVudGljYXRlZFVzZXJDb250ZXh0JyksIGNvbmZpZy5kaXNhYmxlRXhjZXB0aW9uVHJhY2tpbmcgfHwgKGkgPSAnb25lcnJvcicsIHIoJ18nICsgaSksIGYgPSBlW2ldLCBlW2ldID0gZnVuY3Rpb24oY29uZmlnLCByLCB1LCBlLCBvKSB7IHZhciBzID0gZiAmJiBmKGNvbmZpZywgciwgdSwgZSwgbyk7IHJldHVybiBzICE9PSAhMCAmJiB0WydfJyArIGldKGNvbmZpZywgciwgdSwgZSwgbyksIHMgfSksIHQNCn0gKHsNCmluc3RydW1lbnRhdGlvbktleTogJ2YwZmQ1YmZlLTRhYzktNDY4OS1hZTZjLThlNmQxZjdlOTAyYycNCn0pOw0Kd2luZG93LmFwcEluc2lnaHRzID0gYXBwSW5zaWdodHM7DQphcHBJbnNpZ2h0cy50cmFja1BhZ2VWaWV3KCk7DQo8L3NjcmlwdD4NCtUEPHNjcmlwdCB0eXBlPSd0ZXh0L2phdmFzY3JpcHQnPg0Kd2luZG93LnNtYXJ0bG9va3x8KGZ1bmN0aW9uKGQpew0KdmFyIG89c21hcnRsb29rPWZ1bmN0aW9uKCkNCntvLmFwaS5wdXNoKGFyZ3VtZW50cyl9DQosaD1kLmdldEVsZW1lbnRzQnlUYWdOYW1lKCdoZWFkJylbMF07DQp2YXIgYz1kLmNyZWF0ZUVsZW1lbnQoJ3NjcmlwdCcpO28uYXBpPW5ldyBBcnJheSgpO2MuYXN5bmM9dHJ1ZTtjLnR5cGU9J3RleHQvamF2YXNjcmlwdCc7DQpjLmNoYXJzZXQ9J3V0Zi04JztjLnNyYz0naHR0cHM6Ly9yZWMuc21hcnRsb29rLmNvbS9yZWNvcmRlci5qcyc7aC5hcHBlbmRDaGlsZChjKTsNCn0pKGRvY3VtZW50KTsNCnNtYXJ0bG9vaygnaW5pdCcsICc2ZmE4M2Y1NTZkMjA3ZmIyOTA4NjljZjNkZDJlYmE5NGRjMzA5YzM0Jyk7DQpzbWFydGxvb2soJ2NvbnNlbnRJUCcsJ0NvbnNlbnRlZC4nKTsNCnNtYXJ0bG9vaygnY29uc2VudEFQSScsICdDb25zZW50ZWQuJyk7DQpzbWFydGxvb2soJ2lkZW50aWZ5JywgMTQ0MzA0Nywgew0KJ3N1YmpfbmFtZSc6ICdNSUxMRU5JVU0gSU5URVJOQVRJT05BTCBzLnIuby4gdiBsaWt2aWRhY2knDQp9KTsNCjwvc2NyaXB0Pg0Khgc8IS0tIEdvb2dsZSBUYWcgTWFuYWdlciAtLT4NCjxzY3JpcHQ+DQp2YXIgY29uc2VudEFuYWx5dGljYWwgPSBoYXNDb25zZW50Rm9yQ2F0ZWdvcnkoMyk7DQp2YXIgY29uc2VudE1hcmtldGluZyA9IGhhc0NvbnNlbnRGb3JDYXRlZ29yeSg0KTsNCndpbmRvdy5kYXRhTGF5ZXIgPSB3aW5kb3cuZGF0YUxheWVyIHx8IFtdOw0KZnVuY3Rpb24gZ3RhZygpIHsgZGF0YUxheWVyLnB1c2goYXJndW1lbnRzKTsgfQ0KZ3RhZygnY29uc2VudCcsICd1cGRhdGUnLCB7DQonYWRfc3RvcmFnZSc6IGNvbnNlbnRNYXJrZXRpbmcgPyAnZ3JhbnRlZCcgOiAnZGVuaWVkJywNCidhbmFseXRpY3Nfc3RvcmFnZSc6IGNvbnNlbnRBbmFseXRpY2FsID8gJ2dyYW50ZWQnIDogJ2RlbmllZCcsDQonYWRfdXNlcl9kYXRhJzogY29uc2VudE1hcmtldGluZyA/ICdncmFudGVkJyA6ICdkZW5pZWQnLA0KJ2FkX3BlcnNvbmFsaXphdGlvbic6IGNvbnNlbnRNYXJrZXRpbmcgPyAnZ3JhbnRlZCcgOiAnZGVuaWVkJywNCn0pOw0KPC9zY3JpcHQ+DQo8c2NyaXB0PihmdW5jdGlvbih3LGQscyxsLGkpe3dbbF09d1tsXXx8W107d1tsXS5wdXNoKHsnZ3RtLnN0YXJ0JzpuZXcgRGF0ZSgpLmdldFRpbWUoKSxldmVudDonZ3RtLmpzJ30pO3ZhciBmPWQuZ2V0RWxlbWVudHNCeVRhZ05hbWUocylbMF0saj1kLmNyZWF0ZUVsZW1lbnQocyksZGw9bCE9J2RhdGFMYXllcic/JyZsPScrbDonJztqLmFzeW5jPXRydWU7ai5zcmM9Jy8vd3d3Lmdvb2dsZXRhZ21hbmFnZXIuY29tL2d0bS5qcz9pZD0nK2krZGw7Zi5wYXJlbnROb2RlLmluc2VydEJlZm9yZShqLGYpO30pKHdpbmRvdyxkb2N1bWVudCwnc2NyaXB0JywnZGF0YUxheWVyJywnR1RNLVc4NkczOEsnKTs8L3NjcmlwdD4NCjwhLS0gRW5kIEdvb2dsZSBUYWcgTWFuYWdlciAtLT4NCmQCAg8VAdoBPCEtLSBHb29nbGUgVGFnIE1hbmFnZXIgLS0+DQo8bm9zY3JpcHQ+PGlmcmFtZSBzcmM9Jy8vd3d3Lmdvb2dsZXRhZ21hbmFnZXIuY29tL25zLmh0bWw/aWQ9R1RNLVc4NkczOEsnIGhlaWdodD0nMCcgd2lkdGg9JzAnIHN0eWxlPSdkaXNwbGF5Om5vbmU7dmlzaWJpbGl0eTpoaWRkZW4nPjwvaWZyYW1lPjwvbm9zY3JpcHQ+DQo8IS0tIEVuZCBHb29nbGUgVGFnIE1hbmFnZXIgLS0+DQpkAgMPZBYCZg8VAwkgc2VsZWN0ZWQAJi9wYWdlcy9hZG1pbmlzdHJhdGlvbi9iYXNrZXRhZG1pbi5hc3B4ZAIED2QWAmYPFQEBMGQCBQ9kFgJmDxYCHgtfIUl0ZW1Db3VudAIHFg4CAQ9kFgJmDxUHC2l0LXByb2R1Y3RzJSBoYXMtY2hpbGRzIGhlYWQtbmF2X2l0ZW0tLWhhcy1jaGlsZHM1IGhlYWQtbmF2X2xpbmstLWhhcy1jaGlsZHMgaGVhZC1uYXZfbGluay0taXQtcHJvZHVjdHMCNTIRL2luZm8vaXQvbi01MiwwLDALaXQtcHJvZHVjdHMCSVRkAgIPZBYCZg8VBwtlbGVjdHJvbmljcyUgaGFzLWNoaWxkcyBoZWFkLW5hdl9pdGVtLS1oYXMtY2hpbGRzNSBoZWFkLW5hdl9saW5rLS1oYXMtY2hpbGRzIGhlYWQtbmF2X2xpbmstLWVsZWN0cm9uaWNzAjUzIC9pbmZvLW90aGVyL2VsZWt0cm9uaWthL24tNTMsMCwwC2VsZWN0cm9uaWNzC0VsZWt0cm9uaWthZAIDD2QWAmYPFQcQc21hbGwtYXBwbGlhbmNlcyUgaGFzLWNoaWxkcyBoZWFkLW5hdl9pdGVtLS1oYXMtY2hpbGRzOiBoZWFkLW5hdl9saW5rLS1oYXMtY2hpbGRzIGhlYWQtbmF2X2xpbmstLXNtYWxsLWFwcGxpYW5jZXMCNTQeL2luZm8tb3RoZXIvZG9tYWNub3N0L24tNTQsMCwwEHNtYWxsLWFwcGxpYW5jZXMKRG9tw6Fjbm9zdGQCBA9kFgJmDxUHCWJvZHktY2FyZSUgaGFzLWNoaWxkcyBoZWFkLW5hdl9pdGVtLS1oYXMtY2hpbGRzMyBoZWFkLW5hdl9saW5rLS1oYXMtY2hpbGRzIGhlYWQtbmF2X2xpbmstLWJvZHktY2FyZQI1OCAvaW5mby1vdGhlci9wZWNlLW8tdGVsby9uLTU4LDAsMAlib2R5LWNhcmUOUMOpxI1lIG8gdMSbbG9kAgUPZBYCZg8VBw1zcG9ydC1vdXRkb29yJSBoYXMtY2hpbGRzIGhlYWQtbmF2X2l0ZW0tLWhhcy1jaGlsZHM3IGhlYWQtbmF2X2xpbmstLWhhcy1jaGlsZHMgaGVhZC1uYXZfbGluay0tc3BvcnQtb3V0ZG9vcgI1NiYvaW5mby1vdGhlci9zcG9ydC1hLXZvbG55LWNhcy9uLTU2LDAsMA1zcG9ydC1vdXRkb29yE1Nwb3J0IGEgdm9sbsO9IMSNYXNkAgYPZBYCZg8VBwxob3VzZS1nYXJkZW4lIGhhcy1jaGlsZHMgaGVhZC1uYXZfaXRlbS0taGFzLWNoaWxkczYgaGVhZC1uYXZfbGluay0taGFzLWNoaWxkcyBoZWFkLW5hdl9saW5rLS1ob3VzZS1nYXJkZW4CNTckL2luZm8tb3RoZXIvaG9iYnktYS16YWhyYWRhL24tNTcsMCwwDGhvdXNlLWdhcmRlbg9Ib2JieSBhIHphaHJhZGFkAgcPZBYCZg8VBxBsYXJnZS1hcHBsaWFuY2VzJSBoYXMtY2hpbGRzIGhlYWQtbmF2X2l0ZW0tLWhhcy1jaGlsZHM6IGhlYWQtbmF2X2xpbmstLWhhcy1jaGlsZHMgaGVhZC1uYXZfbGluay0tbGFyZ2UtYXBwbGlhbmNlcwI1NSUvaW5mby1vdGhlci92ZWxrZS1zcG90cmViaWNlL24tNTUsMCwwEGxhcmdlLWFwcGxpYW5jZXMTVmVsa8OpIHNwb3TFmWViacSNZWQCBw9kFgYCAQ9kFgpmDxUCAABkAgEPFQIAAGQCAg8VAQEwZAIDDxUBAGQCBA8VBAABMAEwATBkAgIPFQEVSmFrICBhIGtkZSByZWtsYW1vdmF0ZAIDD2QWBGYPFQEAZAICD2QWAmYPZBYCAh0PZBYCAgMPDxYCHghJbWFnZVVybAU3fi9wYWdlcy9pbWFnZS5hc3B4P2ltZz04MjFFNTM2QTk4NjE1N0YxRDE1NTQ2Q0FDMEMwQ0U4OWRkZIwvhSbr5o/aKgL7BhaccNua/TJKq+nZ4WY+Okc92rPl">
            </div>

            <script type="text/javascript">
                //<![CDATA[
                var theForm = document.forms['ctl00'];
                if (!theForm) {
                    theForm = document.ctl00;
                }

                function __doPostBack(eventTarget, eventArgument) {
                    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                        theForm.__EVENTTARGET.value = eventTarget;
                        theForm.__EVENTARGUMENT.value = eventArgument;
                        theForm.submit();
                    }
                }
                //]]>
            </script>


            <script
                src="/WebResource.axd?d=p3sPsDclNhnA1ciLCyVGI1vJoRxdfhT5KKZn-rUvIVi9LLFN2tHOs_MKWtH2n_YTDzrP1LHa3Wl76xRVurve54oWhQ79TnCubodHHAGHEOg1&amp;t=638563344220000000"
                type="text/javascript"></script>


            <script
                src="/WebResource.axd?d=75dNh86CENiQ-0jY3TkIDB3Ahl6wNErHHVJxQ3kRtoIwxAFBqkWwINeqDRHujeeUySiPOlRZQ5Cmz6yYQ92iOcNcsaEy9n14427ngGlHeEU1&amp;t=638563344220000000"
                type="text/javascript"></script>
            <script type="text/javascript">
                //<![CDATA[
                function WebForm_OnSubmit() {
                    if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
                    return true;
                }
                //]]>
            </script>

            <div class="aspNetHidden">

                <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="9966187F">
            </div>

            <input type="hidden" name="TO" value="{{ config('app.reklamacni_email') }}">
            <input type="hidden" name="SUBJECT" value="AVZ Dotaz">
            <input type="hidden" name="FROMCLIENT" value="false">
            <input type="hidden" name="OKM" value="Děkujeme za odeslání AVZ kontaktního formuláře.">
            <input name="ctl00$MainContent$ctlclaimform1$ctl01" type="hidden" value="3">
            <input type="hidden" name="ctl00$MainContent$ctlclaimform1$REDIRECT" id="REDIRECT"
                value="/pages/marketingcampaigndetailarticle.aspx?mct_code=10695">

            <div class="panel">
                <div class="panel-table">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="form-base">
                                <div class="form-base_item">
                                    <div class="form-group">
                                        <label for="txtFullName"><span id="MainContent_ctlclaimform1_lblFullName"
                                                for="txtFullName">Jméno a příjmení</span></label>
                                        <input name="ctl00$MainContent$ctlclaimform1$txtFullName" type="text"
                                            maxlength="32" id="txtFullName" class="form-control">
                                        <span id="MainContent_ctlclaimform1_RequiredFieldValidator1" class="alert-error"
                                            style="display:none;">Vyplňte jméno a příjmení!</span>
                                    </div>
                                </div>
                                <div class="form-base_row">
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="FROM"><span id="MainContent_ctlclaimform1_lblEmail"
                                                    for="FROM">E-mail</span></label>
                                            <input name="ctl00$MainContent$ctlclaimform1$FROM" type="text"
                                                maxlength="50" id="FROM" class="form-control">
                                            <span id="MainContent_ctlclaimform1_RequiredFieldValidator2"
                                                class="alert-error" style="display:none;">Vyplňte e-mail!</span>
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtPhone"><span id="MainContent_ctlclaimform1_lblPhone"
                                                    for="txtPhone">Telefon</span></label>
                                            <input name="ctl00$MainContent$ctlclaimform1$txtPhone" type="text"
                                                maxlength="32" id="txtPhone" class="form-control">
                                            <span id="MainContent_ctlclaimform1_RequiredFieldValidator3"
                                                class="alert-error" style="display:none;">Vyplňte telefon!</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="form-base">
                                <div class="form-base_item">
                                    <div class="form-group">
                                        <label for="txtBody"><span for="MultiLine">Zpráva</span></label>
                                        <textarea name="ctl00$MainContent$ctlclaimform1$txtBody" rows="4" cols="40" id="txtBody"
                                            class="form-control"></textarea>
                                        <span id="MainContent_ctlclaimform1_RequiredFieldValidator7"
                                            class="alert-error" style="display:none;">Vyplňte zprávu!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="MainContent_ctlclaimform1_pnlButton">

                <div class="buttons-area">
                    <div class="form-group form-group--captcha">
                        <label for="txtCaptcha">Opište zobrazené slovo</label>
                        <input name="ctl00$MainContent$ctlclaimform1$txtCaptcha" type="text" maxlength="20"
                            id="txtCaptcha" class="form-control" notusetxt="true" style="width:160px;">
                        <img id="MainContent_ctlclaimform1_imgCaptcha"
                            src="image.aspx?img=821E536A986157F1D15546CAC0C0CE89" style="width:150px;">
                        <input type="hidden" name="ctl00$MainContent$ctlclaimform1$hdnCaptchaCode"
                            id="MainContent_ctlclaimform1_hdnCaptchaCode" value="821E536A986157F1D15546CAC0C0CE89">
                    </div>
                    <input type="submit" name="ctl00$MainContent$ctlclaimform1$btnSendForm" value="Odeslat"
                        onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$MainContent$ctlclaimform1$btnSendForm&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))"
                        id="MainContent_ctlclaimform1_btnSendForm" title="Odeslat" class="btn btn--submit"
                        style="width:160px;">
                </div>

            </div>


            <script type="text/javascript">
                //<![CDATA[
                var Page_Validators = new Array(document.getElementById("MainContent_ctlclaimform1_RequiredFieldValidator1"),
                    document.getElementById("MainContent_ctlclaimform1_RequiredFieldValidator2"), document.getElementById(
                        "MainContent_ctlclaimform1_RequiredFieldValidator3"), document.getElementById(
                        "MainContent_ctlclaimform1_RequiredFieldValidator7"));
                //]]>
            </script>

            <script type="text/javascript">
                //<![CDATA[
                var MainContent_ctlclaimform1_RequiredFieldValidator1 = document.all ? document.all[
                    "MainContent_ctlclaimform1_RequiredFieldValidator1"] : document.getElementById(
                    "MainContent_ctlclaimform1_RequiredFieldValidator1");
                MainContent_ctlclaimform1_RequiredFieldValidator1.controltovalidate = "txtFullName";
                MainContent_ctlclaimform1_RequiredFieldValidator1.display = "Dynamic";
                MainContent_ctlclaimform1_RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
                MainContent_ctlclaimform1_RequiredFieldValidator1.initialvalue = "";
                var MainContent_ctlclaimform1_RequiredFieldValidator2 = document.all ? document.all[
                    "MainContent_ctlclaimform1_RequiredFieldValidator2"] : document.getElementById(
                    "MainContent_ctlclaimform1_RequiredFieldValidator2");
                MainContent_ctlclaimform1_RequiredFieldValidator2.controltovalidate = "FROM";
                MainContent_ctlclaimform1_RequiredFieldValidator2.display = "Dynamic";
                MainContent_ctlclaimform1_RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
                MainContent_ctlclaimform1_RequiredFieldValidator2.initialvalue = "";
                var MainContent_ctlclaimform1_RequiredFieldValidator3 = document.all ? document.all[
                    "MainContent_ctlclaimform1_RequiredFieldValidator3"] : document.getElementById(
                    "MainContent_ctlclaimform1_RequiredFieldValidator3");
                MainContent_ctlclaimform1_RequiredFieldValidator3.controltovalidate = "txtPhone";
                MainContent_ctlclaimform1_RequiredFieldValidator3.display = "Dynamic";
                MainContent_ctlclaimform1_RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
                MainContent_ctlclaimform1_RequiredFieldValidator3.initialvalue = "";
                var MainContent_ctlclaimform1_RequiredFieldValidator7 = document.all ? document.all[
                    "MainContent_ctlclaimform1_RequiredFieldValidator7"] : document.getElementById(
                    "MainContent_ctlclaimform1_RequiredFieldValidator7");
                MainContent_ctlclaimform1_RequiredFieldValidator7.controltovalidate = "txtBody";
                MainContent_ctlclaimform1_RequiredFieldValidator7.display = "Dynamic";
                MainContent_ctlclaimform1_RequiredFieldValidator7.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
                MainContent_ctlclaimform1_RequiredFieldValidator7.initialvalue = "";
                //]]>
            </script>


            <script type="text/javascript">
                //<![CDATA[

                var Page_ValidationActive = false;
                if (typeof(ValidatorOnLoad) == "function") {
                    ValidatorOnLoad();
                }

                function ValidatorOnSubmit() {
                    if (Page_ValidationActive) {
                        return ValidatorCommonOnSubmit();
                    } else {
                        return true;
                    }
                }
                //]]>
            </script>
        </form>
        <p></p>
        <h2>podmínky doa reklamace</h2>
        <table class="list">
            <tbody>
                <tr>
                    <th align="left" width="300">Firma</th>
                    <th align="left" width="300">Popis</th>
                </tr>
                <tr class="licha">
                    <td>ACER</td>
                    <td>7 dní (5 pracovních) od data prodeje</td>
                </tr>
                <tr class="suda">
                    <td>Asus MB, VGA</td>
                    <td>7 dní (5 pracovních) od data prodeje koncovému zákazníkovi. Jako DOA bude vyřešeno po vyjádření
                        servisu.</td>
                </tr>
                <tr class="licha">
                    <td>ASUS Notebook</td>
                    <td>30 dní od prodeje</td>
                </tr>
                <tr class="suda">
                    <td>Epson</td>
                    <td>30 dní od prodeje koncovému zákazníkovi</td>
                </tr>
                <tr class="licha">
                    <td>Fujitsu</td>
                    <td>14 dní od prodeje koncovému zákazníkovi</td>
                </tr>
                <tr class="suda">
                    <td>Fujitsu-Siemens</td>
                    <td>7 dní od data nákupu</td>
                </tr>
                <tr class="licha">
                    <td>GSM</td>
                    <td>3 dny od prodeje koncovému zákazníkovi</td>
                </tr>
                <tr class="licha">
                    <td>GSM</td>
                    <td>DOA – zařízeni nesmí být používáno více 10 min.</td>
                </tr>
                <tr class="suda">
                    <td>
                        <p>HP (tiskárny, LCD ,Notebooky, PC, příslušenství pro notebooky a PC)</p>
                    </td>
                    <td>SWISS , Pavlovická 272/18, Olomouc, 77900 , DOA reklamace v České republice =HW vady do 30 dní
                        od prodeje označte viditelně zásilku do servisního střediska červeným nápisem DOA. Zásilka musí
                        pro uznaní DOA reklamace obsahovat – kompletní balení, doklad o prodeji (nebo nákupní doklad),
                        Vaše kontaktní údaje - tel.+ mailový kontakt, přesný popis vady a název Vašeho distributora a
                        způsob řešení který požadujete. Na základě diagnostiky vady Vám bude vystaven protokol, kterým
                        uplatníte výměnu za nový kus/ vrácení peněz/ u svého distributora. V případě dotazů nás prosím
                        kontaktujte na <a href="mailto:{{ config('app.reklamacni_mail') }}">{{ config('app.reklamacni_mail') }}</a></td>
                </tr>
                <tr class="licha">
                    <td>INTEL základní desky</td>
                    <td>30 dní od data prodeje</td>
                </tr>
                <tr class="suda">
                    <td>Konica Minolta</td>
                    <td>Nárok vyhodnotí servisní středisko Dileris v Brně <a
                            href="http://www.dileris.cz/pobocky?kraj=jihomoravsky ">Dileris</a></td>
                </tr>
                <tr class="licha">
                    <td>Lenovo</td>
                    <td>Registrace do 14 dnů od prodeje na koncového zákazníka <a
                            href="http://www.lenovoservices.cz/servis-a-sluzby/nahlaseni-a-sledovani-zavady/stav-zakazky">servis</a>
                    </td>
                </tr>
                <tr class="suda">
                    <td>OKI</td>
                    <td>Nárok vyhodnotí servisní středisko Daruma <a href="http://www.edaruma.cz/kontakt/">servis</a>
                    </td>
                </tr>
                <tr class="licha">
                    <td>Packard Bell</td>
                    <td>7 dní (5 pracovních) od data prodeje</td>
                </tr>
                <tr class="suda">
                    <td>Samsung (kromě spotřební elektroniky)</td>
                    <td>3 dny od prodeje koncovému zákazníkovi, nebo 2 měsíce od nákupu (neoražený ZL)</td>
                </tr>
                <tr class="licha">
                    <td>Sony Vaio</td>
                    <td>10 dní od data prodeje koncovému zákazníkovi (je nutné vždy doložit doklad o prodeji koncovému
                        zákazníkovi)</td>
                </tr>
                <tr class="suda">
                    <td>Tom Tom</td>
                    <td>14 dní od data prodeje koncovému zákazníkovi (je nutné vždy doložit doklad o prodeji koncovému
                        zákazníkovi)</td>
                </tr>
                <tr class="licha">
                    <td>Toshiba</td>
                    <td>7 dní od prodeje koncovému zákazníkovi. Nárok nejprve vyhodnotí servisní středisko Český servis
                        Brno a Praha: <a href="http://www.ceskyservis.cz/">www.ceskyservis.cz</a>, kde Vám bude
                        přiděleno “Commercial Return"</td>
                </tr>
                <tr class="suda">
                    <td>Xerox (kromě spotřebního materiálu)</td>
                    <td>7 dní od prodeje koncovému zákazníkovi. Nárok nejprve vyhodnotí servisní středisko S&amp;T <a
                            href="http://www.sntcz.cz">www.sntcz.cz </a></td>
                </tr>
            </tbody>
        </table>
        <p>* HP: na některé produkty HP se vztahuje servis na místě přímo u zákazníka(onsite servis). Týká se převážně
            serverů, plotrů a některých stolních pc. Více informaci u reklamačního pracovníka nebo produkt
            managera.<br>* Repair: reklamované zboží musí být zakoupené jako nové, tedy ne opravované (Repair), nebo
            jako náhrada za zboží již jednou reklamované<br>* Dárek: reklamované zboží nesmí být dárek/promo aby byla
            uznána DOA reklamace</p>
    </article>
</div>
