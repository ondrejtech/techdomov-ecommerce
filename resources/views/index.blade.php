@extends('layouts.app')

@section('contend')
    <main class="page-content" role="main" aria-label="Hlavní obsah">
        <div class="content">
            <div class="container layout--aside layout--aside-left" role="main">
                {{--bradcrubs--}}
                <div class="breadcrumbs no-print" role="navigation" aria-label="Drobečková navigace">
                    <div class="breadcrumbs_in">
                        <strong class="breadcrumbs_item breadcrumbs_item--sup-cat breadcrumbs_item--curent"><i
                                class="icon-home breadcrumbs_item_icon"></i><span
                                class="breadcrumbs_item_label">IT</span></strong>

                        <i class="f-icon breadcrumbs_separate"></i>
                        <strong class="breadcrumbs_item breadcrumbs_item--curent">
                            <span class="breadcrumbs_item_label"></span>
                        </strong>
                    </div>
                </div>
                {{--end-bradcrubs--}}
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
                                    @livewire('frontend.main-product')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
