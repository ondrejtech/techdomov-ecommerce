<div>
    <div class="container">
        <div id="MainContent_pnPersonOrLegal">
            <h1 class="page-title">Registrace</h1>
            <div class="panel">
                <div class="panel-table">
                    <div class="panel">
                        <div class="panel-body">
                            <h2 class="panel-title">Firemní údaje</h2>
                            <div class="form-base">
                                <div class="form-base_row">
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtLegalICO">IČ</label>
                                            <input wire:model.defer="ico" type="text" id="txtLegalICO"
                                                class="form-control" maxlenglabel="20">
                                            @error('ico') <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                    </div>
                                </div>
                                <div class="form-base_row">
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtLegalName">Název firmy</label>
                                            <input wire:model.defer="companyName" type="text" maxlength="100"
                                                id="txtLegalName" class="form-control">
                                            @error('companyName') <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtLegalDIC">DIČ</label>
                                            <input wire:model.defer="dic" type="text" id="txtLegalDIC"
                                                class="form-control" maxlenglabel="20">
                                            @error('dic') <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <h2 class="panel-title">Fakturační údaje</h2>
                            <div class="form-base">
                                <div class="form-base_row">
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtLegalStreet">Ulice a čp.</label>
                                            <input wire:model.defer="street" type="text" maxlength="100"
                                                id="txtLegalStreet" class="form-control">
                                            @error('street') <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtLegalCity">Město</label>
                                            <input wire:model.defer="city" type="text" maxlength="100" id="txtLegalCity"
                                                class="form-control">
                                            @error('city') <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-base_row">
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtLegalZip">PSČ</label>
                                            <input wire:model.defer="zip" type="text" maxlength="7" id="txtLegalZip"
                                                class="form-control">
                                            @error('zip') <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="ddLegalCountry">Stát</label>
                                            <select wire:model.defer="country" id="MainContent_ddLegalCountry"
                                                class="form-control">
                                                <option value="Czech Republic" selected>Czech Republic</option>
                                                <option value="Slovakia">Slovakia</option>
                                            </select>
                                            @error('country') <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            <h2 class="panel-title">Kontaktní údaje</h2>
                            <div class="form-base">
                                <div class="form-base_row">
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtPersonFName">Jméno</label>
                                            <input wire:model.defer="firstName" type="text" maxlength="20"
                                                id="txtPersonFName" class="form-control">
                                            @error('firstName') <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtPersonLName">Příjmení</label>
                                            <input wire:model.defer="lastName" type="text" maxlength="100"
                                                id="txtPersonLName" class="form-control">
                                            @error('lastName') <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-base_row form-base_row--align-v-top">
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtLegalTel">Mobilní telefon</label>
                                            <input wire:model.defer="phone" type="text" maxlength="20" id="txtLegalTel"
                                                class="form-control">
                                            @error('phone') <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="txtLegalEmail">E-mail</label>
                                            <input wire:model.defer="email" type="text" maxlength="100"
                                                id="txtLegalEmail" class="form-control">
                                            @error('email') <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                            <small class="form-control-info">Kontaktní/přihlašovací e-mail</small>
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="password">Heslo</label>
                                            <input wire:model.defer="password" type="password" maxlength="100"
                                                id="password" class="form-control">
                                            @error('password') <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-base_item">
                                        <div class="form-group">
                                            <label for="confirm_password">Potvrzení hesla</label>
                                            <input wire:model.defer="confirm_password" type="password" maxlength="100"
                                                id="confirm_password" class="form-control">
                                            @error('confirm_password') <div class="text-danger small">{{ $message }}
                                            </div> @enderror
                                            <small class="form-control-info">Potvrzení hesla</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="form-base">
                                <div class="form-base_item">
                                    <div class="form-group">
                                        <label for="txtLegalNote">Poznámka</label>
                                        <textarea wire:model.defer="note" rows="4" cols="20" id="txtLegalNote"
                                            class="form-control"></textarea>
                                        @error('note') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex">
                <div class="panel-bottom-tools reg_submit-area">
                    <div class="buttons-area">
                        <button wire:click.prevent="login" type="button" class="btn btn--submit">
                            Přihlášení
                        </button>
                    </div>
                </div>
                <div style="margin-left: 1%" class="panel-bottom-tools reg_submit-area">
                    <div class="buttons-area">
                        <button wire:click.prevent="register" type="button" class="btn btn--submit">
                            Registrovat
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-box">
                <div class="grid-wrapper">
                    <div class="fields-group captcha">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>