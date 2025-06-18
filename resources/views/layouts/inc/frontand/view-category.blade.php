@extends('layouts.app')

@section('contend')
    <main class="page-content" role="main" aria-label="Hlavní obsah">
        <div class="content">
            <div class="container layout--aside layout--aside-left" role="main">
                <div class="breadcrumbs no-print" role="navigation" aria-label="Drobečková navigace">
{{--                    @livewire('frontend.breadcrumbs')--}}
                </div>
                <div class="layout_wrap">
                    <div class="layout_aside" role="complementary">
                        @livewire('frontend.sidebar')
                    </div>
                    <div class="layout_main" role="main">
                        <div class="c-banner-slider no-print">
                            @livewire('frontend.slider')
                        </div>

                        <div class="promo-news-hp">
                            <div
                                class="box-tabs full-tab promo-tabs js-tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                                <ul class="nav nav-pills promo-tabs_nav-tabs ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all"
                                    role="tablist">

                                </ul>
                                <div id="dataContainerShort">
                                    @livewire('frontend.view-category')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
