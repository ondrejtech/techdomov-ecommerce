@extends('layouts.app')

@section('contend')
    <div class="container page-404">
        <div class="panel">
            <div class="panel-table">
                <div class="panel">
                    <div class="panel-body">
                        <img src="{{ asset('images/404.svg') }}" alt="ozelina 404">
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <h1>Ojojoj.</h1>
                        <p>Litujeme, ale požadovaná stránka neexistuje</p>
                        <div class="buttons-area">
                            <a href="{{ route('index') }}" class="btn btn--outline btn--outline-primary">
                                <i class="icon-home btn_icon"></i>
                                <span class="btn_label">Pokračovat na úvodní stránku</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
