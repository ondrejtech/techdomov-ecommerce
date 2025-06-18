@extends('layouts.app')

@section('contend')
    <div class="page-content" role="main" aria-label="Hlavni obsah">
        <div class="breadcrumbs no-print" role="navigation" aria-label="Drobečková navigace">
{{--            @livewire('frontend.breadcrumbs')--}}
        </div>
        @livewire('frontend.product-detail')
    </div>
@endsection
