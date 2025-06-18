@extends('layouts.app')

@section('contend')
    <div class="page-content_in">
        <div class="container" role="main">
            <h1 class="page-title">Objednávka</h1>
            @livewire('admin.orders')
        </div>
    </div>
@endsection
