<div>
    <div class="panel-bar">
        <div class="panel-bar_body">
            <div class="panel-bar_title">
                <span class="document-bar_label">Číslo objednávky:</span> <strong>{{ $order->order_number }}</strong>

            </div>
            <div class="panel-bar_actions">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Možnosti
                        <span class="dropdown-caret"></span>
                    </button>
                    <div class="dropdown-menu">

                        <div class="dropdown-header">
                            Z objednávky vytvořit:
                        </div>
{{--                        <button onclick="if(!FinalConfirm(this)) return; GAAction(15, 0, $(this)); __doPostBack('ctl00$MainContent$btnProfAllocCustom','')" id="MainContent_btnProfAllocCustom" class="dropdown-item" type="button" title="">--}}
{{--                            <span class="dropdown-item_label">Proforma fakturu pouze na blokované zboží</span>--}}
{{--                        </button>--}}
{{--                        <button onclick="if(!FinalConfirm(this)) return; GAAction(15, 0, $(this)); __doPostBack('ctl00$MainContent$btnProfAllCustom','')" id="MainContent_btnProfAllCustom" class="dropdown-item" type="button" title="">--}}
{{--                            <span class="dropdown-item_label">Proforma fakturu na veškeré zboží</span>--}}
{{--                        </button>--}}
{{--                        <div class="dropdown-divider"></div>--}}

                        <a class="dropdown-item" onclick="GAAction(15,4,$(this));" href="/reports/print/orderpdf.aspx?docid=9996684">
                            <i class="icon-print dropdown-item_icon"></i>
                            <span class="dropdown-item_label">Vytisknout</span>
                        </a>
{{--                        <button type="button" class="dropdown-item" onclick="copyBasketItemsDialog(9996684, 6)">--}}
{{--                            <i class="icon-docs dropdown-item_icon"></i>--}}
{{--                            <span class="dropdown-item_label">Kopírovat do košíku</span>--}}
{{--                        </button>--}}
{{--                        <a onclick="GAAction(15,4,$(this));" id="MainContent_btnExportCustom" class="dropdown-item" href="javascript:__doPostBack('ctl00$MainContent$btnExportCustom','')">--}}
{{--                            <i class="icon-export-csv dropdown-item_icon"></i>--}}
{{--                            <span class="dropdown-item_label">Export do XML</span>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel document-heading document-heading--order">
        <div class="panel-body">
            <div class="panel-table">
                <div class="panel">
                    <div class="panel-body">

                        <div class="document-heading_item">
                            <span class="document-heading_label">Vaše číslo</span>
                            <strong class="document-heading_value">{{ $order->order_number }}</strong>
                        </div>
                        <div class="document-heading_item">
                            <span class="document-heading_label">Datum vytvoření</span>
                            <strong class="document-heading_value">{{ $order->created_at }}</strong>
                        </div>
                        <div class="document-heading_item">
                            <span class="document-heading_label">Objednáno</span>
                            <strong class="document-heading_value">CZ B2B {{ env('APP_NAME') }}</strong>
                        </div>

                        <div class="document-heading_item">
                            <span class="document-heading_label">Doprava</span>
                            <strong class="document-heading_value">PPL</strong>
                        </div>

                        <div class="document-heading_item">
                            <span class="document-heading_label">Telefon</span>
                            <strong class="document-heading_value">{{ auth()->user()->phone }}</strong>
                        </div>

                        <div class="document-heading_item">
                            <span class="document-heading_label">E-mail</span>
                            <strong class="document-heading_value">{{ auth()->user()->email }}</strong>
                        </div>

                        <div class="document-heading_item">
                            <span class="document-heading_label">Stav objednávky</span>
                            <div class="document-heading_value">
                                <strong>
                                    {{ $order->status }}
                                    <br>{{ $order->created_at }}
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <div class="document-heading_item">
                            <span class="document-heading_label">Cena bez SNC a DPH</span>
                            <strong class="document-heading_value document-heading_value--nowrap">{{ number_format($priceSNC,2,',',' ') }}&nbsp;Kč</strong>
                        </div>
                        <div class="document-heading_item">
                            <span class="document-heading_label">Cena bez DPH</span>
                            <strong class="document-heading_value document-heading_value--nowrap">{{ number_format($total,2,',',' ') }}&nbsp;Kč</strong>
                        </div>
                        <div class="document-heading_item">
                            <span class="document-heading_label">Cena s DPH</span>
                            <strong class="document-heading_value document-heading_value--nowrap">{{ number_format($totalDPH,2,',',' ') }}&nbsp;Kč</strong>
                        </div>

                        <div class="document-heading_item">
                            <span class="document-heading_label">Faktury</span>
                            <div class="document-heading_value">
                                <strong class="document-heading_value document-heading_value--nowrap">{{ $order->invoice->invoice_number ?? '' }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <div class="document-heading_item">
                            <span class="document-heading_label document-heading_label--full-width">Kompletní objednávka</span>
                            <div class="document-heading_value">

                                <div class="toggleSwitch toggleSwitch--nochecked" id="toggleSwitch_REL_COMPL_INV"><span class="toggleSwitch_label toggleSwitch_label--before">Ne</span><div class="toggleSwitch_switch"><input type="checkbox" name="REL_COMPL_INV" id="REL_COMPL_INV" class="opacity-transparent toggleSwitch_checkbox" data-options="{&quot;labels&quot;:{&quot;false&quot;:&quot;Ne&quot;, &quot;true&quot;:&quot;Ano&quot;}}"><label class="toggleSwitch_switch-track" for="REL_COMPL_INV"></label></div><span class="toggleSwitch_label toggleSwitch_label--after">Ano</span></div>
                                <a onclick="GAAction(15,0,$(this));" class="toggleSwitch_controler toggleSwitch_controler--REL_COMPL_INV hide" href="javascript:__doPostBack('ctl00$MainContent$ctl02','')">Ano</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="buttons-area">
        <input type="submit" name="ctl00$MainContent$btnWholeInv" value="Stáhnout proforma fakturu na celou objednávku" onclick="return FinalConfirm(this); GAAction(15, 0, $(this));" id="MainContent_btnWholeInv" class="btn btn--submit btn--alternative">
        <input type="submit" name="ctl00$MainContent$btnAllocInv" value="Stáhnout proforma fakturu jen pro blokované zboží" onclick="return FinalConfirm(this); GAAction(15, 0, $(this));" id="MainContent_btnAllocInv" class="btn btn--submit btn--alternative">
        <input type="submit" name="ctl00$MainContent$btnInvoice" value="Expedovat/fakturovat" onclick="return confirm('Opravdu si přejte vytvořit fakturu na blokované zboží?\n\nUPOZORNĚNÍ: Je-li nad objednávkou nastaven příznak &quot;Kompletní objednávka&quot; ANO a objednané položky nejsou kompletně blokované, při úspěšné fakturaci dojde ke změně nastavení příznaku „Kompletní objednávka“.');" id="MainContent_btnInvoice" class="btn btn--submit">

    </div>

    <div id="orderHistoryList" class="panel panel-collapse panel--no-border panel--has-table">
        <div class="panel-body">
            <h2 class="panel-title">Historie stavů objednávky</h2>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th class="table-head-cell table-col_name">Stav</th>
                <th class="table-head-cell table-col_date-time">Datum</th>
            </tr>
            </thead>
            <tbody>

            <tr class="licha">
                <td class="table-col_name">Čeká na fakturaci</td>
                <td class="table-col_date-time">31.03.2025 06:14</td>
            </tr>

            </tbody>
        </table>
    </div>



    <div class="panel pay-box">
        <div class="panel-body">
            <h2>Online platba</h2>
            <div class="flex-box">
                <div class="flex-box_item">
                    Podporované platební metody:<br>
                    <br>

                    <img src="{{ asset('/staticcontent/images/platby/visa.png') }}" alt="Visa" style="border: 1px solid silver; margin: 5px; padding: 3px">

                    <img src="{{ asset('/staticcontent/images/platby/master_card.png') }}" alt="MasterCard" style="border: 1px solid silver; margin: 5px; padding: 3px">

                    <br>
                    <br>

                    <img src="{{ asset('/staticcontent/images/platby/csas.png') }}" alt="Česká spořitelna" style="border: 1px solid silver; margin: 5px; padding: 3px">

                    <img src="{{ asset('/staticcontent/images/platby/csob.png') }}" alt="ČSOB" style="border: 1px solid silver; margin: 5px; padding: 3px">

                    <img src="{{ asset('/staticcontent/images/platby/kb.png') }}" alt="Komerční banka" style="border: 1px solid silver; margin: 5px; padding: 3px">

                    <!--<img src="{{ asset('/staticcontent/images/platby/equa.png') }}" alt="Equa bank" style="border: 1px solid silver; margin: 5px; padding: 3px">-->

                    <img src="{{ asset('/staticcontent/images/platby/fio.png') }}" alt="Fio" style="border: 1px solid silver; margin: 5px; padding: 3px">

                    <img src="{{ asset('/staticcontent/images/platby/era.png') }}" alt="era" style="border: 1px solid silver; margin: 5px; padding: 3px">

                    <img src="{{ asset('/staticcontent/images/platby/mbank.png') }}" alt="mBank" style="border: 1px solid silver; margin: 5px; padding: 3px">

                    <img src="{{ asset('/staticcontent/images/platby/moneta.png') }}" alt="MONETA" style="border: 1px solid silver; margin: 5px; padding: 3px">

                    <img src="{{ asset('/staticcontent/images/platby/rb.png') }}" alt="Raiffeisen BANK" style="border: 1px solid silver; margin: 5px; padding: 3px">


                    <img src="{{ asset('/staticcontent/images/platby/unicredit.png') }}" alt="UniCredit" style="border: 1px solid silver; margin: 5px; padding: 3px">

                    <br>
                    <br>

                    <p style="color: red"><strong>K celkové částce k úhradě mohou být připočteny poplatky, jako je dopravné a balné.</strong></p>


                </div>
                <div class="flex-box_item pay-box_btn-wrap">
                    <form method="post" action="{{ route('documents.checkout', ['order_number' => $order->order_number,'totalDPH' => $totalDPH]) }}">
                        @csrf
                        <input type="hidden" name="order_number" value="{{ $order->order_number }}">
                        <input type="hidden" name="totalDPH" value="{{ $totalDPH }}">
                        @if(!isset($order->invoice->invoice_number))
                            <button type="submit" class="btn btn--submit">
                                <span class="btn_label">Zaplatit online</span>
                            </button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel--no-border panel--has-table panel-documents">
        <div class="panel-body">
            <h2 class="panel-title">Položky objednávky</h2>
        </div>
        <table class="table documents-tbl-list">
            <thead>
            <tr>
                <th class="table-head-cell table-col_code">Kód</th>
                <th class="table-head-cell table-col_partno">PartNo</th>
                <th class="table-head-cell table-col_name" data-touchtable-el="true">Název</th>
                <th class="table-head-cell table-col_price">Cena bez SNC</th>
                <th class="table-head-cell table-col_price">SNC*</th>
                <th class="table-head-cell table-col_price">Cena bez DPH</th>
                <th class="table-head-cell table-col_qty js-tooltip" data-title="tip_order_created" data-touchtable-el="true"> Objednáno</th>
                <th class="table-head-cell table-col_qty js-tooltip" data-title="tip_order_blocked" data-touchtable-el="true">Blokováno</th>
                <th class="table-head-cell table-col_qty js-tooltip" data-title="tip_order_delivered" data-touchtable-el="true">Expedováno</th>
                <th class="table-head-cell table-col_qty js-tooltip" data-title="tip_order_cancel" data-touchtable-el="true">Storno</th>
            </tr>
            </thead>
            <tbody>

                @foreach($order->orderItems as $orderItem)
                    <tr class="suda">
                        <td data-th="Kód" class="table-col_code table-cell_status--no-delivered">
                            <div class="table-cell_in">
                                {{$orderItem->ProId}}
                            </div>
                        </td>
                        <td data-th="PartNo" class="table-col_partno">{{ $orderItem->product->PartNumber }}</td>
                        <td data-th="Název" class="table-col_name" data-touchtable-el="true">
                            <a href="/garett-beauty-perfect-body-masazni-pristroj-proti-celulitide/product-1682429">
                                {{ $orderItem->product->Name }}
                            </a>
                        </td>
                        @php
                            $priceWithoutSNC = $orderItem->product->YourPrice - ($orderItem->product->YourePrice /100 * 1.21);
                            $sncDPH = $orderItem->product->YourPriceWithFees - $orderItem->product->YourPrice;
                            $price = $orderItem->product->YourPriceWithFees - ($orderItem->product->YorPriceWithFees / 100 * 1.21);
                        @endphp
                        <td data-th="Cena bez SNC" class="table-col_price">{{ number_format($priceWithoutSNC,2,',',' ') }}&nbsp;Kč</td>
                        <td data-th="SNC*" class="table-col_price">{{ $sncDPH }}&nbsp;Kč</td>
                        <td data-th="Cena bez DPH" class="table-col_price">{{ number_format($price,2,',',' ') }}&nbsp;Kč</td>
                        <td data-th="Objednáno" class="table-col_qty js-tooltip" data-title="tip_order_created" data-touchtable-el="true">1</td>
                        <td data-th="Blokováno" class="table-col_qty js-tooltip" data-title="tip_order_blocked" data-touchtable-el="true">1</td>
                        <td data-th="Expedováno" class="table-col_qty js-tooltip" data-title="tip_order_delivered" data-touchtable-el="true">0</td>
                        <td data-th="Storno" class="table-col_qty js-tooltip" data-title="tip_order_cancel" data-touchtable-el="true">0</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>



    <div class="legend">
        <span class="legend_title">Legenda:</span>
        <ul class="legend_items">
            <li class="legend_item">
                <span class="legend_item-picto legend_item-picto--no-delivered"></span>
                <span class="legend_item-label">Nedodaná položka objednávky</span>
            </li>
            <li class="legend_item">
                <span class="legend_item-picto legend_item-picto--rejected"></span>
                <span class="legend_item-label">Vyřazený produkt</span>
            </li>
            <li class="legend_item">
                <i class="legend_item-picto icon-ordered"></i>
                <span class="legend_item-label">Objednáno</span>
            </li>
            <li class="legend_item">
                <i class="legend_item-picto icon-blocked"></i>
                <span class="legend_item-label">Blokováno</span>
            </li>
            <li class="legend_item">
                <i class="legend_item-picto icon-delivered"></i>
                <span class="legend_item-label">Expedováno</span>
            </li>
            <li class="legend_item">
                <i class="legend_item-picto icon-cancel"></i>
                <span class="legend_item-label">Storno</span>
            </li>
        </ul>
    </div>
    <p>
        * Smluvní navýšení ceny o náklady vyplývající ze zák č. 185/2001 Sb. v platném znění na likvidaci elektroodpadu bude prodávajícím stanoveno v té výši,
        v jaké jej prodávající stanoví ve svém ceníku v den fakturace za toto objednané zboží a náklady na autorské odměny dle zák. č. 121/2000 Sb. v platném znění bude prodávajícím stanoveno v té výši,
        v jaké jej prodávající stanoví ve svém ceníku v den fakturace za toto objednané zboží.
    </p>
</div>
