<div style="padding: 0">
    <div id="kc-header" class="login-pf-page-header">
        <div id="kc-header-wrapper" class="">edshop</div>
    </div>
    <div class="card-pf">
        <header class="login-pf-header">
            <h1 id="kc-page-title">
                Přihlásit k vašemu účtu
            </h1>
        </header>
        <div id="kc-content">
            <div id="kc-content-wrapper">
                <div id="kc-form">
                    <div id="kc-form-wrapper">
                        <form wire:submit.prevent="loginAuth">
                            @csrf

                            <div class="form-group">
                                <label for="username">Přihlašovací jméno</label>
                                <input type="text" wire:model="username" id="username" class="form-control" />
                                @error('username') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Heslo</label>
                                <input type="password" wire:model="password" id="password" class="form-control" />
                                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <button style="background-color: #e21b52" type="submit" class="btn btn-primary btn-block">Přihlásit</button>
                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
