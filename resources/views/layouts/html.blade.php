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
                               @include('includes.inc_socials')
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
                <div class="row mt-4">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-7">
                                <img src="{{ asset('tpl/imgs/logomarca.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-xl-5 mt-5" id="tpl_local">
                                <h5><span class="icon-map1"></span> <strong>Onde Estamos?</strong></h5>
                                <h4 class="text-muted"><small>Av. Japão, 345 - Cariru - Ipatinga/MG.</small></h4>
                                <h4 class="text-muted">Telefone: <small>(31)</small> <strong>3821 9010</strong></h4>
                                <h5 class="text-muted"><span class="icon-envelope1"></span> <strong>Email:</strong> <a href="mailto:cpleonardomorelli@gmail.com">cpleonardomorelli@gmail.com</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        @include('includes.inc_menu')
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-xl-12">
                        @include('includes.inc_caroucel')
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>