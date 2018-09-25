<!doctype html>

<html lang="{{ $settings_app->tbl_language }}">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $settings_app->tbl_title }}</title>
    <link rel="icon" type="image/png" href="{{ asset('tpl/imgs/favicon.png') }}" />

    @include('layouts.css')

    <meta name="keywords" content="{{ $settings_app->tbl_keywords }}">
    <meta name="description" content="{{ $settings_app->tbl_descript }}">
    <meta name="Author" content="{{ $settings_app->tbl_author }}">
    <meta name="language" content="{{ $settings_app->tbl_language }}" />
    <meta name="URL" content="http://{{ $settings_app->tbl_url }}" />
    <meta name="subject" content="{{ $settings_app->tbl_subject }}" />
    <meta name="rating" content="general" />
    <meta name="updated" content="daily" />
    <meta name="robots" content="index, follow" />
    <meta name="audience" content="all" />
    <meta name="Publisher" content="{{ $settings_app->tbl_publisher }}" />
    <meta name="ia_archiver" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="msnbot" content="index, follow" />
    <meta name="Search Engines" content="{{ $settings_app->tbl_search }}" />
    <meta name="audience" content="all" />
    <meta name="revisit-after" content="1 days" />
    <meta name="generator" content="{{ $settings_app->tbl_generator }}">
    <meta name="document-classification" content="{{ $settings_app->tbl_system }}" />

    @include('layouts.js')

</head>

<body>

    <div class="container-fluid" id="tpl_top">
        <div class="row">
            <div class="container">
                <div class="row">
                   <div class="col-xl-12">
                       <div class="row">
                           <div class="col-xl-6">

                           </div>
                           <div class="col-xl-6" id="tpl_icones">
                               <a href=""><span class="icon-instagram1"></span></a>
                               <a href=""><span class="icon-facebook21"></span></a>
                               <a href=""><span class="icon-twitter2"></span></a>
                               <a href=""><span class="icon-youtube21"></span></a>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="col-xl-6">
                            <img src="{{ asset('tpl/imgs/logo.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        @include('includes.inc_menu')
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>