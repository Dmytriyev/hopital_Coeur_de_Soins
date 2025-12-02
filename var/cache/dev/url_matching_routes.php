<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/consultation' => [[['_route' => 'app_consultation_index', '_controller' => 'App\\Controller\\ConsultationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dossier_medical' => [[['_route' => 'app_dossier_medical_index', '_controller' => 'App\\Controller\\DossierMedicalController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dossier_medical/new' => [[['_route' => 'app_dossier_medical_new', '_controller' => 'App\\Controller\\DossierMedicalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/image' => [[['_route' => 'app_image_index', '_controller' => 'App\\Controller\\ImageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/my_profil' => [[['_route' => 'app_my_profil', '_controller' => 'App\\Controller\\MyProfilController::index'], null, null, null, false, false, null]],
        '/observation' => [[['_route' => 'app_observation_index', '_controller' => 'App\\Controller\\ObservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/observation/new' => [[['_route' => 'app_observation_new', '_controller' => 'App\\Controller\\ObservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prescription' => [[['_route' => 'app_prescription_index', '_controller' => 'App\\Controller\\PrescriptionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/rdv' => [[['_route' => 'app_rdv_index', '_controller' => 'App\\Controller\\RDVController::index'], null, ['GET' => 0], null, false, false, null]],
        '/rdv/new' => [[['_route' => 'app_rdv_new', '_controller' => 'App\\Controller\\RDVController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/specialite' => [[['_route' => 'app_specialite_index', '_controller' => 'App\\Controller\\SpecialiteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/specialite/new' => [[['_route' => 'app_specialite_new', '_controller' => 'App\\Controller\\SpecialiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/m(?'
                    .'|edia/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:259)'
                        .'|([A-z0-9_-]*)/(.+)(*:285)'
                    .')'
                    .'|y_profil/([^/]++)/edit(*:316)'
                .')'
                .'|/consultation/(?'
                    .'|new([^/]++)(*:353)'
                    .'|([^/]++)(?'
                        .'|(*:372)'
                        .'|/edit(*:385)'
                        .'|(*:393)'
                    .')'
                .')'
                .'|/dossier_medical/(?'
                    .'|([^/]++)(?'
                        .'|(*:434)'
                        .'|/edit(*:447)'
                        .'|(*:455)'
                    .')'
                    .'|image/([^/]++)/delete(*:485)'
                .')'
                .'|/image/(?'
                    .'|new/([^/]++)(*:516)'
                    .'|([^/]++)(?'
                        .'|(*:535)'
                        .'|/edit(*:548)'
                        .'|(*:556)'
                    .')'
                .')'
                .'|/observation/([^/]++)(?'
                    .'|(*:590)'
                    .'|/edit(*:603)'
                    .'|(*:611)'
                .')'
                .'|/prescription/(?'
                    .'|new/([^/]++)(*:649)'
                    .'|([^/]++)(?'
                        .'|(*:668)'
                        .'|/edit(*:681)'
                        .'|(*:689)'
                    .')'
                .')'
                .'|/rdv/([^/]++)(?'
                    .'|(*:715)'
                    .'|/edit(*:728)'
                    .'|(*:736)'
                .')'
                .'|/specialite/([^/]++)(?'
                    .'|(*:768)'
                    .'|/edit(*:781)'
                    .'|(*:789)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:815)'
                    .'|/edit(*:828)'
                    .'|(*:836)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        259 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        285 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'my_profil_edit', '_controller' => 'App\\Controller\\MyProfilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [[['_route' => 'app_consultation_new', '_controller' => 'App\\Controller\\ConsultationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        372 => [[['_route' => 'app_consultation_show', '_controller' => 'App\\Controller\\ConsultationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        385 => [[['_route' => 'app_consultation_edit', '_controller' => 'App\\Controller\\ConsultationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        393 => [[['_route' => 'app_consultation_delete', '_controller' => 'App\\Controller\\ConsultationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        434 => [[['_route' => 'app_dossier_medical_show', '_controller' => 'App\\Controller\\DossierMedicalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'app_dossier_medical_edit', '_controller' => 'App\\Controller\\DossierMedicalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        455 => [[['_route' => 'app_dossier_medical_delete', '_controller' => 'App\\Controller\\DossierMedicalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        485 => [[['_route' => 'dossier_medical_image_delete', '_controller' => 'App\\Controller\\DossierMedicalController::deleteImage'], ['id'], ['POST' => 0], null, false, false, null]],
        516 => [[['_route' => 'app_image_new', '_controller' => 'App\\Controller\\ImageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        535 => [[['_route' => 'app_image_show', '_controller' => 'App\\Controller\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        548 => [[['_route' => 'app_image_edit', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        556 => [[['_route' => 'app_image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        590 => [[['_route' => 'app_observation_show', '_controller' => 'App\\Controller\\ObservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        603 => [[['_route' => 'app_observation_edit', '_controller' => 'App\\Controller\\ObservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        611 => [[['_route' => 'app_observation_delete', '_controller' => 'App\\Controller\\ObservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        649 => [[['_route' => 'app_prescription_new', '_controller' => 'App\\Controller\\PrescriptionController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        668 => [[['_route' => 'app_prescription_show', '_controller' => 'App\\Controller\\PrescriptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        681 => [[['_route' => 'app_prescription_edit', '_controller' => 'App\\Controller\\PrescriptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        689 => [[['_route' => 'app_prescription_delete', '_controller' => 'App\\Controller\\PrescriptionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        715 => [[['_route' => 'app_rdv_show', '_controller' => 'App\\Controller\\RDVController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        728 => [[['_route' => 'app_rdv_edit', '_controller' => 'App\\Controller\\RDVController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        736 => [[['_route' => 'app_rdv_delete', '_controller' => 'App\\Controller\\RDVController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        768 => [[['_route' => 'app_specialite_show', '_controller' => 'App\\Controller\\SpecialiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        781 => [[['_route' => 'app_specialite_edit', '_controller' => 'App\\Controller\\SpecialiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        789 => [[['_route' => 'app_specialite_delete', '_controller' => 'App\\Controller\\SpecialiteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        815 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        828 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        836 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
