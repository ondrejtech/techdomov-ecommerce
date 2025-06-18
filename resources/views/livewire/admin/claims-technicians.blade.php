<div class="page-content_in">
    <div class="container" role="main">
        <h1 class="page-title">Reklamační technici</h1>

        <button class="btn filter-base-btn-toggle js-collapse collapsed" type="button" data-toggle="collapse"
            data-target="#documents_filterBase">
            <span class="btn_label">Schovat / Zobrazit filtr</span>
        </button>

        {{-- <div id="documents_filterBase" class="panel filter-base collapse in"> --}}
            {{-- <div class="panel-body"> --}}
                {{-- <div class="filter-base_row">
                    <div class="filter-base_item">
                        <div class="filter-base_field form-group">
                            <label for="ddlSubtype">Komodita</label>
                            <div class="ux-combo">
                                <select name="ctl00$MainContent$ddlSubtype"
                                    onchange="javascript:setTimeout('__doPostBack(\'ctl00$MainContent$ddlSubtype\',\'\')', 0)"
                                    id="ddlSubtype" class="form-control ux-combo_field">
                                    <option selected="selected" value="0">Nepřiřazeno</option>
                                    <option value="471">3D TISK</option>
                                    <option value="512">3MK</option>
                                    <option value="264">A-DATA</option>
                                    <option value="530">ABBYY</option>
                                    <option value="18">ACER NTB &amp; PC</option>
                                    <option value="412">ACER PERIFERIE</option>
                                    <option value="19">ACER RETAIL</option>
                                    <option value="488">ACRONIS</option>
                                    <option value="22">ADOBE</option>
                                    <option value="635">AKASA</option>
                                    <option value="501">ALIGÁTOR</option>
                                    <option value="276">AMD</option>
                                    <option value="28">AOC</option>
                                    <option value="29">APC</option>
                                    <option value="342">APPLE</option>
                                    <option value="691">APPLE REPAS</option>
                                    <option value="634">ARCTIC</option>
                                    <option value="270">ARMOR</option>
                                    <option value="31">ASROCK</option>
                                    <option value="707">ASROCK MONITORY</option>
                                    <option value="440">ASUS COMMERCIAL</option>
                                    <option value="309">ASUS CONSUMER</option>
                                    <option value="690">ASUS GAMING</option>
                                    <option value="296">ASUS LCD</option>
                                    <option value="32">ASUS MB, VGA</option>
                                    <option value="584">ASUS MINI-PC</option>
                                    <option value="228">ASUS NETWORKING</option>
                                    <option value="594">ASUS SK</option>
                                    <option value="679">ASUSTOR</option>
                                    <option value="435">ATTACK</option>
                                    <option value="356">AVER</option>
                                    <option value="269">AVG</option>
                                    <option value="643">AVTECH</option>
                                    <option value="358">AXAGON</option>
                                    <option value="36">BATERIE PRO NOTEBOOKY</option>
                                    <option value="38">BENQ</option>
                                    <option value="397">BENQ PL</option>
                                    <option value="639">BITDEFENDER</option>
                                    <option value="502">BLACKBERRY</option>
                                    <option value="334">BROTHER</option>
                                    <option value="633">BROTHER SK</option>
                                    <option value="470">C3M</option>
                                    <option value="543">CALCULATORS</option>
                                    <option value="47">CANON FOTO</option>
                                    <option value="44">CANON PRINTERS</option>
                                    <option value="45">CASE/ZDROJ</option>
                                    <option value="503">CATERPILLAR</option>
                                    <option value="60">CISCO</option>
                                    <option value="251">CLUB-3D</option>
                                    <option value="56">COMPUTER ASSOCIATES</option>
                                    <option value="452">CONRAD</option>
                                    <option value="525">CONSUMER PRODUCTS/ACCESSORIES</option>
                                    <option value="642">COOLER MASTER</option>
                                    <option value="64">COREL</option>
                                    <option value="366">CORSAIR</option>
                                    <option value="63">CREATIVE</option>
                                    <option value="475">Crucial</option>
                                    <option value="432">CYBER POWER</option>
                                    <option value="69">D-LINK</option>
                                    <option value="685">DAHUA</option>
                                    <option value="418">DCLEAN</option>
                                    <option value="425">DELL LCD</option>
                                    <option value="597">DELL SK</option>
                                    <option value="277">DICOTA</option>
                                    <option value="589">DIGITAL SIGNAGE</option>
                                    <option value="426">DOERR</option>
                                    <option value="668">Dr Mayer</option>
                                    <option value="667">DR MAYER PROFI</option>
                                    <option value="521">DRONY</option>
                                    <option value="619">Dům a zahrada</option>
                                    <option value="313">DYNABOOK</option>
                                    <option value="444">EATON</option>
                                    <option value="493">EATON XCOMFORT</option>
                                    <option value="410">EBEAM</option>
                                    <option value="577">ECOVACS</option>
                                    <option value="472">EIZO</option>
                                    <option value="583">ELEKTROPŘÍSLUŠENSTVÍ</option>
                                    <option value="422">EPM AGEM</option>
                                    <option value="74">EPSON</option>
                                    <option value="605">ESET</option>
                                    <option value="433">ESET PL</option>
                                    <option value="368">EUROCASE</option>
                                    <option value="413">EVOLVEO</option>
                                    <option value="704">FORTINET</option>
                                    <option value="318">FORTRON</option>
                                    <option value="303">FOTO PŘÍSLUŠENSTVÍ</option>
                                    <option value="700">FOTOMIX</option>
                                    <option value="187">FUJITSU</option>
                                    <option value="673">GARETT</option>
                                    <option value="523">GARMIN</option>
                                    <option value="257">GENIUS</option>
                                    <option value="84">GIGABYTE</option>
                                    <option value="664">GIGABYTE LCD</option>
                                    <option value="443">GIGABYTE NTB</option>
                                    <option value="522">GIGASET</option>
                                    <option value="504">GOCLEVER</option>
                                    <option value="554">GOODRAM</option>
                                    <option value="541">GSM ACC OTHERS</option>
                                    <option value="89">GSM DEV OTHERS</option>
                                    <option value="578">GSM MIX</option>
                                    <option value="484">HANNSPREE</option>
                                    <option value="415">HERNÍ PŘÍSLUŠENSTVÍ</option>
                                    <option value="102">HGST</option>
                                    <option value="686">HIKVISION</option>
                                    <option value="658">HIKVISION MEMORY</option>
                                    <option value="628">HITACHI-LG</option>
                                    <option value="702">HP HyperX</option>
                                    <option value="96">HP IPG PRINTERS</option>
                                    <option value="97">HP IPG SUPPLIES</option>
                                    <option value="693">HP POLY</option>
                                    <option value="93">HP PSG COMMERCIAL</option>
                                    <option value="384">HP PSG CONSUMER</option>
                                    <option value="636">HP PSG HPmarket</option>
                                    <option value="688">HPE Aruba Networking</option>
                                    <option value="95">HPE Networking</option>
                                    <option value="94">HPE SERVERY &amp; STORAGE</option>
                                    <option value="423">HTC</option>
                                    <option value="498">HUAWEI</option>
                                    <option value="666">HUAWEI CONSUMER</option>
                                    <option value="357">CHIEFTEC</option>
                                    <option value="531">I-STAY</option>
                                    <option value="671">IBM</option>
                                    <option value="101">IBM CZ</option>
                                    <option value="104">IMATION</option>
                                    <option value="414">INOXLED</option>
                                    <option value="275">INTEL Desktop</option>
                                    <option value="108">INTEL Server</option>
                                    <option value="490">INTELIGENTNÍ ELEKTRONIKA</option>
                                    <option value="398">INTELLINET</option>
                                    <option value="348">IP PHONES, CAMERAS</option>
                                    <option value="576">IPEVO</option>
                                    <option value="302">ITEC</option>
                                    <option value="505">JABRA</option>
                                    <option value="262">KABELY/BOXY/OBALY</option>
                                    <option value="491">KAMERY</option>
                                    <option value="469">KANCELÁŘSKÁ TECHNIKA</option>
                                    <option value="663">KARCHER</option>
                                    <option value="111">KINGSTON</option>
                                    <option value="369">KINGSTON FLASH</option>
                                    <option value="651">KINGSTON SSD</option>
                                    <option value="135">KONICA MINOLTA</option>
                                    <option value="609">KONICA MINOLTA SK</option>
                                    <option value="506">Krusell</option>
                                    <option value="614">LEGRAND</option>
                                    <option value="601">LENOVO CONS SK</option>
                                    <option value="600">LENOVO DCG NO SK</option>
                                    <option value="599">LENOVO DCG SK</option>
                                    <option value="602">LENOVO PCG NO SK</option>
                                    <option value="703">LENOVO REL CZ</option>
                                    <option value="278">LENOVO SMB CZ</option>
                                    <option value="603">LENOVO SMB SK</option>
                                    <option value="116">LEXMARK</option>
                                    <option value="607">LEXMARK SK</option>
                                    <option value="500">LG MOB</option>
                                    <option value="117">LG MONITORS, OSD</option>
                                    <option value="326">LG SK</option>
                                    <option value="349">LINKSYS</option>
                                    <option value="119">LOGITECH</option>
                                    <option value="346">LYNX KABELÁŽ</option>
                                    <option value="361">LYNX PC</option>
                                    <option value="446">LYNX POKLADNÍ SYSTÉMY</option>
                                    <option value="166">LYNX PRODUKTY</option>
                                    <option value="617">Malé domácí spotřebiče</option>
                                    <option value="411">MANHATTAN</option>
                                    <option value="575">MEDIASHOP</option>
                                    <option value="588">MEIZU</option>
                                    <option value="579">METEOSTANICE</option>
                                    <option value="133">MICROSOFT</option>
                                    <option value="649">MICROSOFT CSP</option>
                                    <option value="489">MICROSOFT HW</option>
                                    <option value="136">MICROSOFT OEM</option>
                                    <option value="134">MICROSOFT OLP</option>
                                    <option value="590">MICROSOFT XBOX</option>
                                    <option value="682">MIKROTIK</option>
                                    <option value="367">MIO MIX</option>
                                    <option value="508">Mobiola</option>
                                    <option value="507">MOTOROLA SOLUTIONS</option>
                                    <option value="142">MSI - MB, VGA</option>
                                    <option value="395">MSI - NTB, LCD</option>
                                    <option value="623">MUSIC</option>
                                    <option value="485">MYBALO</option>
                                    <option value="146">NEC</option>
                                    <option value="437">NEDIS</option>
                                    <option value="41">NEOX</option>
                                    <option value="212">NERO</option>
                                    <option value="657">NETATMO</option>
                                    <option value="298">NETGEAR</option>
                                    <option value="149">NIKON</option>
                                    <option value="632">NOCTUA</option>
                                    <option value="151">NOKIA (MSFT)</option>
                                    <option value="509">NOKIA ACC (MSFT)</option>
                                    <option value="559">nonIT MIX</option>
                                    <option value="550">NORTON</option>
                                    <option value="448">NVIDIA</option>
                                    <option value="159">OKI</option>
                                    <option value="638">OKI SPARE PARTS</option>
                                    <option value="160">OLYMPUS</option>
                                    <option value="684">OPPO</option>
                                    <option value="585">OPTIMA</option>
                                    <option value="436">OPTOMA</option>
                                    <option value="591">OSTATNÍ SW</option>
                                    <option value="479">OSVĚTLENÍ</option>
                                    <option value="317">OTHER SUPPLIES</option>
                                    <option value="396">PACKARD BELL</option>
                                    <option value="283">PANASONIC</option>
                                    <option value="593">PANASONIC FOTO</option>
                                    <option value="637">PC VYPRODEJ</option>
                                    <option value="629">PEACH</option>
                                    <option value="557">Pet</option>
                                    <option value="167">PHILIPS</option>
                                    <option value="692">PLANET</option>
                                    <option value="454">POCKETBOOK</option>
                                    <option value="547">PODPORA</option>
                                    <option value="434">POKLADNÍ SYSTÉMY</option>
                                    <option value="532">PRIMÁRNÍ BATERIE</option>
                                    <option value="661">PŘÍSLUŠENSTVÍ NTB a PC</option>
                                    <option value="511">PURO</option>
                                    <option value="477">QNAP</option>
                                    <option value="515">REALME</option>
                                    <option value="494">REPAS NTB/PC</option>
                                    <option value="353">REPOTEC</option>
                                    <option value="625">RETLUX</option>
                                    <option value="687">ROBOROCK</option>
                                    <option value="622">RugGear</option>
                                    <option value="646">SAMSONITE</option>
                                    <option value="497">SAMSUNG ACC</option>
                                    <option value="496">SAMSUNG DEV</option>
                                    <option value="468">SAMSUNG LFD</option>
                                    <option value="183">SAMSUNG MEMORY</option>
                                    <option value="182">SAMSUNG MONITORY</option>
                                    <option value="400">SAMSUNG NTB</option>
                                    <option value="544">SAMSUNG STORAGE</option>
                                    <option value="616">SAMSUNG Tablet</option>
                                    <option value="551">SANDISK</option>
                                    <option value="34">SAPPHIRE ATI</option>
                                    <option value="580">SATELITNÍ TECHNIKA</option>
                                    <option value="185">SEAGATE</option>
                                    <option value="486">SEN.SE</option>
                                    <option value="586">SHARP LFD</option>
                                    <option value="611">SHARP PRINTING SK</option>
                                    <option value="481">SILENTIUMPC</option>
                                    <option value="652">SMART ECO</option>
                                    <option value="621">SMART HOME</option>
                                    <option value="655">SOLARIX</option>
                                    <option value="190">SONY AUDIO/VIDEO</option>
                                    <option value="513">SONY MOB</option>
                                    <option value="304">SONY PLAYSTATION</option>
                                    <option value="467">SONY PROFESSIONAL</option>
                                    <option value="526">SONY SLUCHÁTKA</option>
                                    <option value="194">SONY VAIO</option>
                                    <option value="612">STYGIAN SK</option>
                                    <option value="701">SUPERMICRO</option>
                                    <option value="205">SYMANTEC</option>
                                    <option value="483">SYNOLOGY</option>
                                    <option value="608">SYNOLOGY SK</option>
                                    <option value="582">TEAMGROUP</option>
                                    <option value="680">TECNO</option>
                                    <option value="648">TELCO EU</option>
                                    <option value="537">TELEVIZE A AUDIO</option>
                                    <option value="478">TENDA</option>
                                    <option value="665">TESLA SMART</option>
                                    <option value="514">THL</option>
                                    <option value="517">TOMTOM</option>
                                    <option value="365">TOSHIBA HDD/ODD</option>
                                    <option value="474">TOSHIBA TV</option>
                                    <option value="476">TP-LINK</option>
                                    <option value="694">TP-LINK KAMERY</option>
                                    <option value="463">TRANSCEND</option>
                                    <option value="364">TRITON</option>
                                    <option value="273">TRUST</option>
                                    <option value="535">TRUST SMARTHOME SOLUTION</option>
                                    <option value="681">UBIQUITI</option>
                                    <option value="218">UMAX</option>
                                    <option value="527">VEEAM</option>
                                    <option value="618">Velké domácí spotřebiče</option>
                                    <option value="221">VERBATIM</option>
                                    <option value="674">VIKING</option>
                                    <option value="683">VIRTUÁLNÍ REALITA</option>
                                    <option value="540">VMWARE</option>
                                    <option value="345">VYPRODEJ BGS</option>
                                    <option value="227">WESTERN DIGITAL</option>
                                    <option value="630">Wi Acc</option>
                                    <option value="350">WIFI AKT. PRVKY</option>
                                    <option value="347">WIFI PŘÍSL.</option>
                                    <option value="528">WMIX</option>
                                    <option value="473">XEROX -TISKOVÁ MÉDIA</option>
                                    <option value="234">XEROX</option>
                                    <option value="519">XIAOMI</option>
                                    <option value="626">XIAOMI ECO</option>
                                    <option value="631">Yeelight</option>
                                    <option value="627">YI TECHNOLOGY</option>
                                    <option value="536">ZALMAN</option>
                                    <option value="241">ZYXEL</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="filter-base_item"></div>
                    <div class="filter-base_item"></div>
                    <div class="filter-base_item"></div>
                </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}


        <div class="panel panel--has-table panel-documents">
            <div class="panel-body">
                <h2 class="panel-title">Reklamační technici</h2>
            </div>

            <table class="table documents-tbl-list">
                <thead>
                    <tr>
                        <th class="table-head-cell table-col_contact-photo">Foto</th>
                        <th class="table-head-cell table-col_contact-job">Funkce</th>
                        <th class="table-head-cell table-col_contact-name">Jméno</th>
                        <th class="table-head-cell table-col_phone">Telefon</th>
                        <th class="table-head-cell table-col_email">E-mail</th>
                        <th class="table-head-cell table-col_lync-status">Stav</th>
                        <th class="table-head-cell table-col_desc">Činnost</th>
                    </tr>
                </thead>
                <tbody>


                    <tr class="people-list licha">
                        <td data-th="Barcal Jiří" class="table-col_contact-photo">
                            <img class="js-tooltip" alt="Jiří Barcal" src="/IMGCACHE/no_image/usr/no_image_1.jpg"
                                data-hasqtip="6" oldtitle="Barcal Jiří" title="">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Asistent(ka) expedice a reklamací</td>
                        <td data-th="Jméno" class="table-col_contact-name">Barcal Jiří</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597 444 312</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:jbarcal@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">jbarcal@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="" alt="Lync status"
                                style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            ATTACK | BENQ PL | DOERR | KANCELÁŘSKÁ TECHNIKA | PANASONIC | SILENTIUMPC
                        </td>
                    </tr>


                    <tr class="people-list suda">
                        <td data-th="Bialek Ivo" class="table-col_contact-photo">
                            <img class="js-tooltip" title="Bialek Ivo" alt="Ivo Bialek"
                                src="/IMGCACHE/usr/13251_0a_1.jpg">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Vedoucí oddělení</td>
                        <td data-th="Jméno" class="table-col_contact-name">Bialek Ivo</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597444335</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:ibialek@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">ibialek@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="ibialek@elx.cz"
                                alt="Lync status" style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            APC | ASUS COMMERCIAL | ASUS CONSUMER | ASUS MINI-PC | ASUS SK | CREATIVE | EBEAM | HP
                            HyperX | HP IPG PRINTERS | HP IPG SUPPLIES | HP POLY | HP PSG COMMERCIAL | HP PSG CONSUMER |
                            HP PSG HPmarket | HPE Aruba Networking | HPE Networking | HPE SERVERY &amp; STORAGE | IBM CZ
                            | SAMSUNG NTB | TRUST | TRUST SMARTHOME SOLUTION
                        </td>
                    </tr>


                    <tr class="people-list licha">
                        <td data-th="Čajan Jan" class="table-col_contact-photo">
                            <img class="js-tooltip" alt="Jan Čajan" src="/IMGCACHE/usr/12896_0a_1.jpg"
                                title="Čajan Jan">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Vedoucí oddělení</td>
                        <td data-th="Jméno" class="table-col_contact-name">Čajan Jan</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597444304</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:jcajan@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">jcajan@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="jcajan@elx.cz"
                                alt="Lync status" style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            3D TISK | ASROCK | ASUSTOR | BROTHER | BROTHER SK | CANON PRINTERS | CLUB-3D | Crucial |
                            DAHUA | DYNABOOK | ECOVACS | EPSON | FUJITSU | HUAWEI | HUAWEI CONSUMER | IMATION | INTEL
                            Desktop | INTEL Server | INTELLINET | IP PHONES, CAMERAS | IPEVO | JABRA | KONICA MINOLTA |
                            KONICA MINOLTA SK | MANHATTAN | MSI - MB, VGA | MSI - NTB, LCD | NEC | NEDIS | NETGEAR | OKI
                            | OSVĚTLENÍ | OTHER SUPPLIES | POKLADNÍ SYSTÉMY | SEN.SE | SHARP PRINTING SK | TEAMGROUP |
                            TOSHIBA TV | XEROX -TISKOVÁ MÉDIA
                        </td>
                    </tr>


                    <tr class="people-list suda">
                        <td data-th="Čtvrtková Zuzana" class="table-col_contact-photo">
                            <img class="js-tooltip" alt="Zuzana Čtvrtková" src="/IMGCACHE/usr/14209_0a_1.jpg"
                                data-hasqtip="3" oldtitle="Čtvrtková Zuzana" title="">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Asistent(ka) expedice a reklamací</td>
                        <td data-th="Jméno" class="table-col_contact-name">Čtvrtková Zuzana</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597 444 304</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:zctvrtkova@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">zctvrtkova@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="zctvrtkova@elx.cz"
                                alt="Lync status" style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            ACRONIS | ATTACK | BLACKBERRY | CATERPILLAR | HTC | MEDIASHOP | NEDIS | NOKIA ACC (MSFT) |
                            NVIDIA | OSVĚTLENÍ | PANASONIC | QNAP
                        </td>
                    </tr>


                    <tr class="people-list licha">
                        <td data-th="Hercová Vladislava" class="table-col_contact-photo">
                            <img class="js-tooltip" alt="Vladislava Hercová" src="/IMGCACHE/usr/13256_0a_1.jpg"
                                data-hasqtip="2" oldtitle="Hercová Vladislava" title="">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Asistent(ka) expedice a reklamací</td>
                        <td data-th="Jméno" class="table-col_contact-name">Hercová Vladislava</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597444322</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:vhercova@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">vhercova@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="vhercova@elx.cz"
                                alt="Lync status" style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            ADOBE | AVG | C3M | CONRAD | COREL | DIGITAL SIGNAGE | GARETT | GIGABYTE | GIGABYTE LCD |
                            GIGABYTE NTB | GOODRAM | HANNSPREE | INOXLED | ITEC | KINGSTON | KINGSTON FLASH | KINGSTON
                            SSD | LEXMARK | LEXMARK SK | MICROSOFT | MICROSOFT HW | MICROSOFT OEM | MICROSOFT XBOX |
                            Mobiola | MOTOROLA SOLUTIONS | NERO | NOKIA (MSFT) | nonIT MIX | NVIDIA | PEACH | QNAP |
                            SAMSUNG ACC | SAMSUNG DEV | SAMSUNG LFD | SAMSUNG MEMORY | SAMSUNG MONITORY | SAMSUNG NTB |
                            SAMSUNG Tablet | SYMANTEC | TELCO EU | TELEVIZE A AUDIO | TRANSCEND | VIKING
                        </td>
                    </tr>


                    <tr class="people-list suda">
                        <td data-th="Malcharek Lukáš" class="table-col_contact-photo">
                            <img class="js-tooltip" alt="Lukáš Malcharek" src="/IMGCACHE/no_image/usr/no_image_1.jpg"
                                data-hasqtip="1" oldtitle="Malcharek Lukáš" title="">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Asistent(ka) expedice a reklamací</td>
                        <td data-th="Jméno" class="table-col_contact-name">Malcharek Lukáš</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597 444 315</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:lmalcharek@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">lmalcharek@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="" alt="Lync status"
                                style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            ACRONIS | AMD | AOC | APPLE | APPLE REPAS | BENQ | BENQ PL | BLACKBERRY | CALCULATORS |
                            CATERPILLAR | CISCO | D-LINK | DELL SK | DICOTA | Dr Mayer | DR MAYER PROFI | Dům a zahrada
                            | EATON XCOMFORT | EVOLVEO | FORTRON | FOTO PŘÍSLUŠENSTVÍ | GARMIN | GIGASET | GSM MIX |
                            HIKVISION | HIKVISION MEMORY | HITACHI-LG | CHIEFTEC | I-STAY | KANCELÁŘSKÁ TECHNIKA |
                            KARCHER | LG MOB | LG MONITORS, OSD | LG SK | Malé domácí spotřebiče | METEOSTANICE | MIO
                            MIX | MYBALO | NOCTUA | nonIT MIX | Pet | PHILIPS | PRIMÁRNÍ BATERIE | PŘÍSLUŠENSTVÍ NTB a
                            PC | REALME | REPAS NTB/PC | RETLUX | ROBOROCK | SILENTIUMPC | SMART ECO | SONY PROFESSIONAL
                            | SYNOLOGY | TESLA SMART | UBIQUITI | Velké domácí spotřebiče | WMIX | XEROX | ZYXEL
                        </td>
                    </tr>


                    <tr class="people-list licha">
                        <td data-th="Oprchal Zdeněk" class="table-col_contact-photo">
                            <img class="js-tooltip" alt="Zdeněk Oprchal" src="/IMGCACHE/usr/12972_0a_1.jpg"
                                title="Oprchal Zdeněk">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Asistent(ka) expedice a reklamací</td>
                        <td data-th="Jméno" class="table-col_contact-name">Oprchal Zdeněk</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597444301</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:zoprchal@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">zoprchal@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="zoprchal@elx.cz"
                                alt="Lync status" style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            ACER NTB &amp; PC | ACER PERIFERIE | ACER RETAIL | AKASA | ALIGÁTOR | ARCTIC | ASUS GAMING |
                            ASUS LCD | ASUS MB, VGA | ASUS NETWORKING | AXAGON | CASE/ZDROJ | COOLER MASTER | DCLEAN |
                            EPM AGEM | EUROCASE | GENIUS | HGST | KABELY/BOXY/OBALY | Krusell | LOGITECH | LYNX KABELÁŽ
                            | LYNX PC | LYNX POKLADNÍ SYSTÉMY | LYNX PRODUKTY | MUSIC | NEOX | OPTIMA | OPTOMA | PLANET
                            | POCKETBOOK | PURO | SATELITNÍ TECHNIKA | SONY AUDIO/VIDEO | SONY MOB | SONY PLAYSTATION |
                            SONY SLUCHÁTKA | TOMTOM | TRITON | UMAX | VIRTUÁLNÍ REALITA | WESTERN DIGITAL
                        </td>
                    </tr>


                    <tr class="people-list suda">
                        <td data-th="Orság Dalibor" class="table-col_contact-photo">
                            <img class="js-tooltip" title="Orság Dalibor" alt="Dalibor Orság"
                                src="/IMGCACHE/usr/13839_0a_1.jpg">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Asistent(ka) expedice a reklamací</td>
                        <td data-th="Jméno" class="table-col_contact-name">Orság Dalibor</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597444325</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:dorsag@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">dorsag@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="dorsag@elx.cz"
                                alt="Lync status" style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            AOC | BATERIE PRO NOTEBOOKY | CANON FOTO | CYBER POWER | EATON | GOCLEVER | GSM ACC OTHERS |
                            LEGRAND | MEIZU | MIKROTIK | NETATMO | NIKON | OLYMPUS | OTHER SUPPLIES | PANASONIC FOTO |
                            PHILIPS | SANDISK | SEAGATE | TECNO | THL | TP-LINK | TP-LINK KAMERY | VERBATIM | Wi Acc |
                            XIAOMI | XIAOMI ECO | Yeelight | YI TECHNOLOGY
                        </td>
                    </tr>


                    <tr class="people-list licha">
                        <td data-th="Packanová Hana" class="table-col_contact-photo">
                            <img class="js-tooltip" title="Packanová Hana" alt="Hana Packanová"
                                src="/IMGCACHE/no_image/usr/no_image_1.jpg">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Asistent(ka) expedice a reklamací</td>
                        <td data-th="Jméno" class="table-col_contact-name">Packanová Hana</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597 444 315</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:hpackanova@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">hpackanova@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="" alt="Lync status"
                                style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            ALIGÁTOR | BATERIE PRO NOTEBOOKY | CATERPILLAR | CONRAD | CONSUMER PRODUCTS/ACCESSORIES |
                            DOERR | Dr Mayer | DR MAYER PROFI | GOCLEVER | GSM ACC OTHERS | HANNSPREE | HERNÍ
                            PŘÍSLUŠENSTVÍ | HTC | KAMERY | LEGRAND | LENOVO CONS SK | LENOVO DCG NO SK | LENOVO DCG SK |
                            LENOVO PCG NO SK | LENOVO REL CZ | LENOVO SMB CZ | LENOVO SMB SK | MOTOROLA SOLUTIONS |
                            MUSIC | NOKIA (MSFT) | NOKIA ACC (MSFT) | PANASONIC FOTO | PEACH | SAMSONITE | SATELITNÍ
                            TECHNIKA | SONY AUDIO/VIDEO | SONY MOB | SONY SLUCHÁTKA | SONY VAIO | UMAX | VIKING
                        </td>
                    </tr>


                    <tr class="people-list suda">
                        <td data-th="Plesníková Hana" class="table-col_contact-photo">
                            <img class="js-tooltip" title="Plesníková Hana" alt="Hana Plesníková"
                                src="/IMGCACHE/usr/175_0a_1.jpg">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Asistent(ka) expedice a reklamací</td>
                        <td data-th="Jméno" class="table-col_contact-name">Plesníková Hana</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597 444 312</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:hplesnikova@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">hplesnikova@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="" alt="Lync status"
                                style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            A-DATA | DRONY | KAMERY | LENOVO CONS SK | LENOVO DCG NO SK | LENOVO DCG SK | LENOVO PCG NO
                            SK | LENOVO REL CZ | LENOVO SMB CZ | LENOVO SMB SK | MEDIASHOP | POKLADNÍ SYSTÉMY | RugGear
                        </td>
                    </tr>


                    <tr class="people-list licha">
                        <td data-th="Stuchlík Martin Ing." class="table-col_contact-photo">
                            <img class="js-tooltip" title="Stuchlík Martin Ing." alt="Ing. Martin Stuchlík"
                                src="/IMGCACHE/usr/14243_0a_1.jpg">
                        </td>
                        <td data-th="Funkce" class="table-col_contact-job">Asistent(ka) expedice a reklamací</td>
                        <td data-th="Jméno" class="table-col_contact-name">Stuchlík Martin Ing.</td>
                        <td data-th="Telefon" class="table-col_phone">+420 597 444 336</td>
                        <td data-th="E-mail" class="table-col_email"><a
                                href="mailto:mstuchlik2@edsystem.cz?subject=Dotaz z edshopb2b.edsystem.cz">mstuchlik2@edsystem.cz</a>
                        </td>
                        <td data-th="Stav" class="table-col_lync-status">
                            <img class="status-pictogram people-list_lync-status fn-getContactStatus js-tooltip"
                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="mstuchlik2@elx.cz"
                                alt="Lync status" style="display: none;">
                        </td>
                        <td data-th="Činnost" class="table-col_desc">
                            ASUS GAMING | ASUS LCD | ASUS MB, VGA | ASUS NETWORKING | ASUSTOR | AVER | AXAGON | CISCO |
                            CLUB-3D | Crucial | DELL LCD | DELL SK | EIZO | EVOLVEO | FUJITSU | HIKVISION | HIKVISION
                            MEMORY | HITACHI-LG | IP PHONES, CAMERAS | ITEC | JABRA | LINKSYS | MIKROTIK | MIO MIX |
                            NETGEAR | PACKARD BELL | REPAS NTB/PC | REPOTEC | SAPPHIRE ATI | SEAGATE | SMART HOME |
                            SYNOLOGY | SYNOLOGY SK | TEAMGROUP | TOMTOM | TP-LINK | TP-LINK KAMERY | TRITON | UBIQUITI |
                            WIFI AKT. PRVKY | WIFI PŘÍSL. | ZALMAN | ZYXEL
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>
</div>
