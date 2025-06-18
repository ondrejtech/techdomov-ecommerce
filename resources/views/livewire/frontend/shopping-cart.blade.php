<div>
    <div class="container">
        <div class="panel-bar">
            <div class="panel-bar_body">
                <span class="panel-bar_label">1</span>
                <h2 class="panel-bar_title">Košík</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="panel panel--has-table cart-content">




            <table class="table cart-tbl cart-tbl-items tbl-sorting">
                <thead>
                <tr>
                    <th class="table-head-cell table-col_control table-col_control--prepend">
                        <div class="checkbox cbx-select-row">
                            <input id="chkAction" type="checkbox" class="toggle-cbx" name="chkAction" data-title="tip_select" onclick="toggleCheckCbx(this, 'toggle-cbx')">
                            <label for="chkAction"></label>
                        </div>
                        <div class="dropdown cart-tbl-items_bulk-editing">
                            {{--                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--                                    <span class="dropdown-caret"></span>--}}
                            {{--                                </button>--}}
                            <div class="dropdown-menu">
                                <button type="button" class="dropdown-item" onclick="deleteBasketItemsConfirm(22502293)">
                                    <i class="icon-close dropdown-item_icon"></i>
                                    <span class="dropdown-item_label">Smazat vybrané položky</span>
                                </button>
                                <button type="button" class="dropdown-item" onclick="copyBasketItemsDialog(22502293, 5)">
                                    <i class="icon-docs dropdown-item_icon"></i>
                                    <span class="dropdown-item_label">Kopírovat položky</span>
                                </button>
                            </div>
                        </div>
                    </th>
                    <th class="table-head-cell table-col_code-partno">Kód<br>PartNo</th>
                    <th class="table-head-cell table-col_name col-name">Název</th>
                    <th class="table-head-cell table-col_availability">Dostupnost</th>
                    <th class="table-head-cell table-col_quantity">Množství</th>
                    <th class="table-head-cell table-col_empty"></th>
                    <th class="table-head-cell table-col_price table-col_vc-snc">Cena</th>
                    <th class="table-head-cell table-col_price table-col_total-sum">Celkem</th>
                    <th class="table-head-cell table-col_control table-col_control--append"></th>
                </tr>
                </thead>
                <tbody class="ui-sortable">

                @foreach($carts as $cart)
                    <tr id="pro_1713261" class="cart-tbl-items_item cart-tbl-items_item-Product item-0 cart-tbl-items_item-group licha" data-proid="1713261" data-parentid="0" data-baiid="8211208">
                        <td class="table-col_control table-col_control--prepend">
                            <div class="table-cell_in">
                                <div class="checkbox cbx-select-row">
                                    <input id="chkAction_1713261_8211208" type="checkbox" class="toggle-cbx" name="chkAction" data-title="tip_select" value="8211208">
                                    <label for="chkAction_1713261_8211208"></label>
                                </div>

                                {{--                                <button type="button" class="table-row_handle-el cart-tbl-items_handle-el js-tooltip el-handle" data-title="msg_change_order">--}}
                                {{--                                    <i class="icon-move btn_icon"></i>--}}
                                {{--                                </button>--}}

                            </div>
                        </td>
                        <td class="table-col_code-partno">
                            <div class="table-cell_in">

                                <div class="table-cell_value">
                                    <span class="table-cell_value-label">Kód:</span>
                                    <span id="MainContent_rptItems_lblProCode_0" class="input-disable">{{ $cart->ProId }}</span>
                                </div>



                                <div class="table-cell_value">
                                    <span class="table-cell_value-label">PartNo:</span>
                                    <span id="MainContent_rptItems_lblPartNo_0" class="input-disable">{{ $cart->products->PartNumber }}</span>
                                </div>




                            </div>
                        </td>
                        <td class="table-col_name col-name">
                            <div class="table-cell_in">
                                <div class="table-cell_value table-cell_value_pro-name">






                                    <a class="cart-tbl-items_pro-name" href="">{{ $cart->products->Name }}</a>



                                    {{--                                    <div class="cart-tbl-items_attributes">--}}


                                    {{--                                        <strong class="pro-attr pro-attr--ed-cupon pro-tile_attr js-tooltip" data-title="tip_ed-bony" onclick="showFidelityCampaigns('1303');" data-hasqtip="20">--}}
                                    {{--                                            <i class="pro-attr_icon icon-ed-cupon"></i>--}}
                                    {{--                                            <span class="pro-attr_label">eD coin</span>--}}
                                    {{--                                        </strong>--}}






                                    {{--                                        <strong class="pro-attr pro-attr--special-offer-4 js-tooltip" data-hasqtip="24" oldtitle="Výhodná nabídka" title="">--}}
                                    {{--                                            <i class="pro-attr_icon icon-prod-attr-offer"></i>--}}
                                    {{--                                            <span class="pro-attr_label">Výhodná nabídka</span>--}}
                                    {{--                                        </strong>--}}





                                    {{--                                    </div>--}}


                                </div>

                                <div class="cart-tbl-items_pro-info">

                                    <div class="table-cell_value">
                                        <span class="table-cell_value-label">Kód:</span>
                                        <span>{{ $cart->ProId }}</span>
                                    </div>


                                    <div class="table-cell_value">
                                        <span class="table-cell_value-label">PartNo:</span>
                                        <span>{{ $cart->products->PartNumber }}</span>
                                    </div>



                                    <div class="table-cell_value table-cell_value_availability">
                                        <span class="table-cell_value-label">Dostupnost:</span>

                                        <div class="pro-stock pro-stock--available"><a href="javascript:void(null)" class="pro-stock_text pro-stock_text--append js-tooltip" title="Datum, kdy může být zboží u Vás." onclick="openDialogStock(1713261,0);">Skladem 99 ks<span class="pro-stock_br pro-stock_br--separator-comma"></span></a></div>



                                    </div>

                                </div>
                            </div>
                        </td>
                        <td class="table-col_availability">
                            <div class="table-cell_in">
                                <div class="table-cell_value">
                                    <span class="table-cell_value-label">Dostupnost:</span>

                                    <div class="pro-stock pro-stock--available"><a href="javascript:void(null)" class="pro-stock_text pro-stock_text--append js-tooltip" onclick="openDialogStock(1713261,0);" data-hasqtip="8" oldtitle="Datum, kdy může být zboží u Vás." title="">Skladem 99 ks<span class="pro-stock_br pro-stock_br--separator-comma"></span></a></div>



                                </div>
                            </div>
                        </td>
                        <td class="table-col_quantity">
                            <div class="table-cell_in">
                                <div class="table-cell_value cart-tbl-items_pro-quantity">


                                    <span class="table-cell_value-label">Množství:</span>


                                    <div class="form-group">
                                        <div class="form-control-inc cart-tbl-items_pro-quantity_inc">
                                            <input name="ctl00$MainContent$rptItems$ctl01$txtQTY" type="text" value="{{ $cart->quantity }}" maxlength="5" id="MainContent_rptItems_txtQTY_0" class="form-control form-control--qty">
                                            <button type="button" class="btn form-control-inc_btn-plus" wire:click="increment({{ $cart->products->ProId }})" data-target="#MainContent_rptItems_txtQTY_0"><i class="btn_icon"></i></button>
                                            <button type="button" class="btn form-control-inc_btn-minus" wire:click="decrement({{ $cart->products->ProId }})" data-target="#MainContent_rptItems_txtQTY_0"><i class="btn_icon"></i></button>
                                        </div>
                                    </div>
                                    <button onclick="__doPostBack('ctl00$MainContent$rptItems$ctl01$ctl37','')" type="button" class="btn btn-recaculate cart-btn-recalculate js-tooltip" title="Přepočítat">
                                        <i class="icon-repeat btn_icon"></i>
                                        <span class="btn_label">Přepočítat</span>
                                    </button>

                                    <span class="cart-tbl-items_pro-quantity-text cart-tbl-items_pro-quantity-text--append">ks</span>

                                </div>
                            </div>
                        </td>
                        <td class="table-col_empty"></td>
                        <td class="table-col_price table-col_vc-snc">
                            <div class="table-cell_in">
                                <div class="table-cell_value">
                                    <span class="table-cell_value-label">Cena:</span>


                                    <span class="price">{{ number_format($cart->products->YourPriceWithFees) }}&nbsp;Kč</span>

                                </div>
                            </div>
                        </td>
                        <td class="table-col_price table-col_total-sum">
                            <div class="table-cell_in">
                                <div class="table-cell_value">
                                    <span class="table-cell_value-label">Celkem:</span>
                                    @php
                                        $total = $cart->quantity * $cart->products->YourPriceWithFees
                                    @endphp
                                    <span class="price">{{ number_format($total,2,',',' ') }}&nbsp;Kč</span>

                                </div>
                            </div>
                        </td>
                        <td class="table-col_control table-col_control--append">
                            <div class="table-cell_in">
                                <div class="table-cell_value">

{{--                                    <button type="button" class="btn btn--icon js-tooltip cart-tbl-items_btn-more_info" data-title="tip_basket_more-info" onclick="showProMoreInfo(1713261, 0, 8211208, 22502293 )">--}}
{{--                                        <i class="icon-arrow-down btn_icon"></i>--}}
{{--                                    </button>--}}


                                    <button type="button" class="btn btn--icon btn-icon--delete cart-tbl-items_btn-delete js-tooltip" wire:click="delete({{ $cart->products->ProId }})" data-title="tip_delete_item">
                                        <i class="icon-delete btn_icon"></i>
                                    </button>

                                </div>
                            </div>

                            <input type="hidden" name="ctl00$MainContent$rptItems$ctl01$hdnBaiID" id="MainContent_rptItems_hdnBaiID_0" value="8211208">
                            <input type="hidden" name="ctl00$MainContent$rptItems$ctl01$hdnBaiType" id="MainContent_rptItems_hdnBaiType_0" value="0">
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <table class="table cart-tbl cart-tbl-items cart-tbl-sum">
                <tfoot>
                <tr class="table-foot-row table-row--full-width">
                    <td class="table-foot-cell table-foot-cell_label">
                        <span class="cart-tbl-sum_label">Cena bez DPH</span>
                        <span class="cart-tbl-sum_label cart-tbl-sum_label--vat">Cena s DPH</span>
                    </td>
                    <td class="table-foot-cell table-foot-cell_price table-col_price table-col_total-sum">
                        <span class="cart-tbl-sum_label">Celkem bez DPH</span>
                        <span class="cart-tbl-sum_price">{{ number_format($total,2,',',' ') }}&nbsp;Kč</span>
                        <span class="cart-tbl-sum_label cart-tbl-sum_label--vat">Celkem s DPH</span>
                        <span class="cart-tbl-sum_price cart-tbl-sum_price--vat">{{ number_format($totalDPH,2,',',' ') }}&nbsp;Kč</span>
                    </td>
                    <td class="table-foot-cell table-col_control table-col_control--append"></td>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <div class="container">


{{--        <div class="panel-bottom-tools ">--}}
{{--            <div class="info-bar">--}}
{{--                <div class="info-bar_item">--}}
{{--                    Z celkové sumy košíku je SNC: <strong>95&nbsp;Kč</strong>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="buttons-area">--}}
{{--                <button onclick="__doPostBack('ctl00$MainContent$btnRecalculate','')" id="btnRecalculate" type="button" class="btn btn-recaculate cart-btn-recalculate">--}}
{{--                    <span class="btn_label">Přepočítat</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}



        <div class="panel-bar">
            <div class="panel-bar_body">
                <span class="panel-bar_label">2</span>
                <h2 class="panel-bar_title">Objednávka</h2>
            </div>
        </div>
        <div>

        </div>
        <form method="POST">
            @csrf
            <div class="panel cart-order-form">
                <div class="panel-body">
                    <div class="panel-table">

                        <div class="panel">
                            <div class="panel-body">
                                <h3 class="panel-title">Způsob dopravy</h3>

                                <div class="form-base">
                                    <div class="form-base_item">

                                        <div class="form-group">
                                            <div class="dropdown dropdown-multi cart-transport-choose">
                                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<span  class="dropdown-multi_toggle_in">

																		<span class="dropdown-multi_toggle_text">Zvolte dopravu</span>
                                                                        <span class="dropdown-caret"></span>
																	</span>

                                                </button>
                                                <div class="dropdown-menu dropdown-menu--scroll">

                                                    <button onclick="__doPostBack('ctl00$MainContent$rptTransportList$ctl01$rbTra','')" id="MainContent_rptTransportList_rbTra_0" type="button" class="dropdown-item" value="46">
															<span class="dropdown-item_in">
																<span class="dropdown-item_label">
																	<strong class="cart-transport-choose_name">Balík</strong>

																</span>
																<strong class="cart-transport-choose_price">25&nbsp;Kč</strong>
															</span>
                                                    </button>
                                                    <input type="hidden" name="ctl00$MainContent$rptTransportList$ctl01$hdnTraID" id="MainContent_rptTransportList_hdnTraID_0" value="46">


                                                    <input type="hidden" name="ctl00$MainContent$rptTransportList$ctl02$hdnTraID" id="MainContent_rptTransportList_hdnTraID_1" value="3">

                                                    <button onclick="__doPostBack('ctl00$MainContent$rptTransportList$ctl03$rbTra','')" id="MainContent_rptTransportList_rbTra_2" type="button" class="dropdown-item" value="105">
															<span class="dropdown-item_in">
																<span class="dropdown-item_label">
																	<strong class="cart-transport-choose_name">ČP balík</strong>

																</span>
																<strong class="cart-transport-choose_price">25&nbsp;Kč</strong>
															</span>
                                                    </button>
                                                    <input type="hidden" name="ctl00$MainContent$rptTransportList$ctl03$hdnTraID" id="MainContent_rptTransportList_hdnTraID_2" value="105">
                                                    <input type="hidden" name="ctl00$MainContent$rptTransportList$ctl04$hdnTraID" id="MainContent_rptTransportList_hdnTraID_3" value="47">

                                                    <button onclick="__doPostBack('ctl00$MainContent$rptTransportList$ctl05$rbTra','')" id="MainContent_rptTransportList_rbTra_4" type="button" class="dropdown-item" value="34">
															<span class="dropdown-item_in">
																<span class="dropdown-item_label">
																	<strong class="cart-transport-choose_name">DPD EX.10</strong>

																</span>
																<strong class="cart-transport-choose_price">185&nbsp;Kč</strong>
															</span>
                                                    </button>
                                                    <input type="hidden" name="ctl00$MainContent$rptTransportList$ctl05$hdnTraID" id="MainContent_rptTransportList_hdnTraID_4" value="34">

                                                    <button onclick="__doPostBack('ctl00$MainContent$rptTransportList$ctl06$rbTra','')" id="MainContent_rptTransportList_rbTra_5" type="button" class="dropdown-item" value="35">
															<span class="dropdown-item_in">
																<span class="dropdown-item_label">
																	<strong class="cart-transport-choose_name">DPD EX.10 dob.</strong>

																</span>
																<strong class="cart-transport-choose_price">215&nbsp;Kč</strong>
															</span>
                                                    </button>
                                                    <input type="hidden" name="ctl00$MainContent$rptTransportList$ctl06$hdnTraID" id="MainContent_rptTransportList_hdnTraID_5" value="35">

                                                    <button onclick="__doPostBack('ctl00$MainContent$rptTransportList$ctl07$rbTra','')" id="MainContent_rptTransportList_rbTra_6" type="button" class="dropdown-item" value="36">
															<span class="dropdown-item_in">
																<span class="dropdown-item_label">
																	<strong class="cart-transport-choose_name">DPD EX.12</strong>

																</span>
																<strong class="cart-transport-choose_price">150&nbsp;Kč</strong>
															</span>
                                                    </button>
                                                    <input type="hidden" name="ctl00$MainContent$rptTransportList$ctl07$hdnTraID" id="MainContent_rptTransportList_hdnTraID_6" value="36">

                                                    <button onclick="__doPostBack('ctl00$MainContent$rptTransportList$ctl08$rbTra','')" id="MainContent_rptTransportList_rbTra_7" type="button" class="dropdown-item" value="37">
															<span class="dropdown-item_in">
																<span class="dropdown-item_label">
																	<strong class="cart-transport-choose_name">DPD EX.12 dob.</strong>

																</span>
																<strong class="cart-transport-choose_price">180&nbsp;Kč</strong>
															</span>
                                                    </button>
                                                    <input type="hidden" name="ctl00$MainContent$rptTransportList$ctl08$hdnTraID" id="MainContent_rptTransportList_hdnTraID_7" value="37">

                                                    <button onclick="__doPostBack('ctl00$MainContent$rptTransportList$ctl09$rbTra','')" id="MainContent_rptTransportList_rbTra_8" type="button" class="dropdown-item" value="256">
															<span class="dropdown-item_in">
																<span class="dropdown-item_label">
																	<strong class="cart-transport-choose_name">DPD PickupPoint dob.</strong>

																</span>
																<strong class="cart-transport-choose_price">55&nbsp;Kč</strong>
															</span>
                                                    </button>
                                                    <input type="hidden" name="ctl00$MainContent$rptTransportList$ctl09$hdnTraID" id="MainContent_rptTransportList_hdnTraID_8" value="256">

                                                    <button onclick="__doPostBack('ctl00$MainContent$rptTransportList$ctl10$rbTra','')" id="MainContent_rptTransportList_rbTra_9" type="button" class="dropdown-item" value="103">
															<span class="dropdown-item_in">
																<span class="dropdown-item_label">
																	<strong class="cart-transport-choose_name">Expres OVA</strong>

																</span>
																<strong class="cart-transport-choose_price">25&nbsp;Kč</strong>
															</span>
                                                    </button>
                                                    <input type="hidden" name="ctl00$MainContent$rptTransportList$ctl10$hdnTraID" id="MainContent_rptTransportList_hdnTraID_9" value="103">

                                                </div>
                                            </div>
                                        </div>

                                        <div>

                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtBahExtNo">Vaše označení objednávky</label>
                                            <input wire:model="orderLabel" name="ctl00$MainContent$txtBahExtNo" type="text" maxlength="36" id="txtBahExtNo" class="form-control">
                                            <div>@error('orderLabel') {{ $message }} @enderror</div>
                                        </div>
                                    </div>



                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtBahNote">Poznámka</label>
                                            <textarea wire:model="note" name="ctl00$MainContent$txtBahNote" rows="5" cols="20" id="txtBahNote" class="form-control"></textarea>
                                            <div>@error('note'){{ $message }}@enderror</div>
                                        </div>
                                    </div>



                                    <div class="form-base_row">

                                        <div class="form-base_item">
                                            <div class="form-group form-group--auto-width form-group--with-tooltip-help">
                                                <label for="txtDelivDate">Termín dodání</label>
                                                <input wire:model="delivery" name="ctl00$MainContent$txtDelivDate" type="text" maxlength="20" onchange="javascript:setTimeout('__doPostBack(\'ctl00$MainContent$txtDelivDate\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="txtDelivDate" class="form-control js-datepicker hasDatepicker" data-datepicker-validdays="['2025-03-31','2025-04-01','2025-04-02']">
                                                <div>@error('delivery'){{ $message }}@enderror</div>
                                                <i class="icon-question js-tooltip form-control_tooltip-help" title="Termín dodání slouží pro vyjádření přání zákazníka, kdy nejdříve má být objednávka dodána, je-li zboží skladem."></i>
                                            </div>
                                        </div>

                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <span class="checkbox"><input id="chkOrderComp" type="checkbox" name="ctl00$MainContent$chkOrderComp"><label for="chkOrderComp">Expedovat pouze kompletní objednávku</label></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <h3 class="panel-title">Dodací adresa </h3>

                                <div class="form-base">
                                    {{--                                    <div class="form-base_item">--}}
                                    {{--                                        <div class="form-group">--}}
                                    {{--                                            <label for="ddlShipAddresses" class="hide">Adresát</label>--}}
                                    {{--                                            <select name="ctl00$MainContent$ddlShipAddresses" onchange="javascript:setTimeout('__doPostBack(\'ctl00$MainContent$ddlShipAddresses\',\'\')', 0)" id="ddlShipAddresses" title="Vyberte dodací adresu ze seznamu Vašich adres" class="form-control js-combo select2-hidden-accessible" data-container-css-class="cart-address-choose" tabindex="-1" aria-hidden="true">--}}
                                    {{--                                                <option selected="selected" value="0">Ruční zadání dodací adresy</option>--}}
                                    {{--                                                <option value="1787516"></option>--}}

                                    {{--                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 1037px;"><span class="selection"><span class="select2-selection select2-selection--single cart-address-choose" role="combobox" aria-haspopup="true" aria-expanded="false" title="Vyberte dodací adresu ze seznamu Vašich adres" tabindex="0" aria-labelledby="select2-ddlShipAddresses-container"><span class="select2-selection__rendered" id="select2-ddlShipAddresses-container" title="Ruční zadání dodací adresy">Ruční zadání dodací adresy</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtShipAddrName">Název firmy/kontaktní osoba</label>
                                            <input placeholder="{{ auth()->user()->name." ". auth()->user()->surname }} "  wire:model="name" name="ctl00$MainContent$txtShipAddrName" type="text" value="Mgr. Radka Staszko Pondělíková" maxlength="35" id="txtShipAddrName" class="form-control is-required" data-rule-required="true"><span class="form-control-validate-info"></span>
                                            <div>@error('name'){{ $message }}@enderror</div>
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtShipAddrName2">Dovětek názvu</label>
                                            <input wire:model="title_name" name="ctl00$MainContent$txtShipAddrName2" type="text" maxlength="50" id="txtShipAddrName2" class="form-control">
                                            <div>@error('title_name'){{ $message }}@enderror</div>
                                        </div>
                                    </div>
                                    <div class="form-base_row">
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label for="txtShipAddrStreet">Ulice</label>
                                                <input wire:model="city" name="ctl00$MainContent$txtShipAddrStreet" type="text" placeholder="{{ auth()->user()->address }}" maxlength="35" id="txtShipAddrStreet" class="form-control is-required" data-rule-required="true"><span class="form-control-validate-info"></span>
                                                <div>@error('city'){{ $message }}@enderror</div>
                                            </div>
                                        </div>

                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label  for="txtShipAddrCity">Město</label>
                                                <input wire:model="city" name="ctl00$MainContent$txtShipAddrCity" type="text" placeholder="{{ auth()->user()->city }}" maxlength="35" id="txtShipAddrCity" class="form-control is-required" data-rule-required="true"><span class="form-control-validate-info"></span>
                                                <div>@error('city'){{ $message }}@enderror</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-base_row">
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label  for="txtShipAddrZIP">PSČ</label>
                                                <input wire:model="postal_code" name="ctl00$MainContent$txtShipAddrZIP" type="text" placeholder="{{ auth()->user()->postcode }}" maxlength="6" id="txtShipAddrZIP" class="form-control is-required" data-rule-required="true"><span class="form-control-validate-info"></span>
                                                <div>@error('postal_code'){{ $message }}@enderror</div>
                                            </div>
                                        </div>
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label  for="ddlShipCountry">Stát</label>
                                                <div class="ux-combo">
                                                    <select wire:model="state" name="ctl00$MainContent$ddlShipCountry" id="ddlShipCountry" class="form-control ux-combo_field" appenddatabounditem="false">
                                                        <div>@error('state'){{ $message }}@enderror</div>
                                                        <option selected="selected" value="52">Česká republika</option>
                                                        <option value="199">Slovenská republika</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-base_row">
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label for="txtShipPhone">Telefon osoby přebírající zásilku</label>
                                                <input wire:model="phone" name="ctl00$MainContent$txtShipPhone" type="text" placeholder="{{ auth()->user()->phone }}" maxlength="20" id="txtShipPhone" class="form-control">
                                                <div>@error('phone'){{ $message }}@enderror</div>
                                            </div>
                                        </div>
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label for="txtShipEmail">E-mail osoby přebírající zásilku</label>
                                                <input wire:model="email" name="ctl00$MainContent$txtShipEmail" type="text" placeholder="{{ auth()->user()->email }}}" maxlength="50" id="txtShipEmail" class="form-control" data-rule-email="true">
                                                <div>@error('email'){{ $message }}@enderror</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-base_row">

                                        <div class="form-base_item">
                                            <div class="buttons-area">
                                                <button class="btn cart-address_btn-save" type="button" onclick="GAAction(11,0,$(this));saveDelAdrress(22502293);">
                                                    <span class="btn_label">Uložit novou dodací adresu</span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="alert alert-info"><p><strong>Objednávku budete moci zaplatit online na detailu objednávky:</strong></p>

                <img src="{{ asset('staticcontent/images/platby/visa.png') }}" alt="Visa" style="border: 1px solid silver; margin: 5px; padding: 3px">

                <img src="{{ asset('staticcontent/images/platby/master_card.png') }}" alt="MasterCard" style="border: 1px solid silver; margin: 5px; padding: 3px">

                <br>
                <br>

                <img src="{{ asset('staticcontent/images/platby/csas.png') }}" alt="Česká spořitelna" style="border: 1px solid silver; margin: 5px; padding: 3px">

                <img src="{{ asset('staticcontent/images/platby/csob.png') }}" alt="ČSOB" style="border: 1px solid silver; margin: 5px; padding: 3px">

                <img src="{{ asset('staticcontent/images/platby/kb.png') }}" alt="Komerční banka" style="border: 1px solid silver; margin: 5px; padding: 3px">

                <!--<img src="{{ asset('staticcontent/images/platby/equa.png') }}" alt="Equa bank" style="border: 1px solid silver; margin: 5px; padding: 3px">-->

                <img src="{{ asset('staticcontent/images/platby/fio.png') }}" alt="Fio" style="border: 1px solid silver; margin: 5px; padding: 3px">

                <img src="{{ asset('staticcontent/images/platby/era.png') }}" alt="era" style="border: 1px solid silver; margin: 5px; padding: 3px">

                <img src="{{ asset('staticcontent/images/platby/mbank.png') }}" alt="mBank" style="border: 1px solid silver; margin: 5px; padding: 3px">

                <img src="{{ asset('staticcontent/images/platby/moneta.png') }}" alt="MONETA" style="border: 1px solid silver; margin: 5px; padding: 3px">

                <img src="{{ asset('staticcontent/images/platby/rb.png') }}" alt="Raiffeisen BANK" style="border: 1px solid silver; margin: 5px; padding: 3px">


                <img src="{{ asset('staticcontent/images/platby/unicredit.png') }}" alt="UniCredit" style="border: 1px solid silver; margin: 5px; padding: 3px">

                <br>
                <br>

                <p style="color: red"><strong>K celkové částce k úhradě mohou být připočteny poplatky, jako je dopravné a balné.</strong></p>


            </div>

            <div class="alert alert-info">

                <p><strong>Pokud do poznámky v košíku nedoplníte speciální přání / požadavek (například: jen kompletní dodávka), budou blokované produkty v objednávce ihned předány k expedici.</strong> Díky tomu budeme schopni vaši objednávku doručit ještě rychleji, než doposud. Při využití poznámky musí objednávku před expedicí ručně potvrdit náš obchodník.</p>

                <p>V určitých případech může být expedice odložena i bez uvedení poznámky, například z důvodu potřeby interního schválení u specifických produktů.</p>


            </div>


            <div class="buttons-area cart-send-area">
                <button class="btn" type="button">
                    <span class="btn_label">Vytvořit otevřenou objednávku</span>
                </button>
                <button class="btn btn--primary" type="button" title="">

                    <span wire:click="createOrder" class="btn_label">Odeslat objednávku</span>
                </button>

            </div>
        </form>

    </div>
</div>
