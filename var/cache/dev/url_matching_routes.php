<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/annonce' => [[['_route' => 'annonce_index', '_controller' => 'App\\Controller\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonce/new' => [[['_route' => 'annonce_new', '_controller' => 'App\\Controller\\AnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidature' => [[['_route' => 'candidature_index', '_controller' => 'App\\Controller\\CandidatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidature/new' => [[['_route' => 'candidature_new', '_controller' => 'App\\Controller\\CandidatureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment/event' => [[['_route' => 'comment_event_index', '_controller' => 'App\\Controller\\CommentEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/event/new' => [[['_route' => 'comment_event_new', '_controller' => 'App\\Controller\\CommentEventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comments' => [[['_route' => 'comments_index', '_controller' => 'App\\Controller\\CommentsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comments/new' => [[['_route' => 'comments_new', '_controller' => 'App\\Controller\\CommentsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [
            [['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'evenement_search', '_controller' => 'App\\Controller\\EvenementController::search'], null, ['POST' => 0], null, true, false, null],
        ],
        '/evenement/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/back/index' => [[['_route' => 'evenement_back_index', '_controller' => 'App\\Controller\\EvenementController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/back/new' => [[['_route' => 'evenement_back_new', '_controller' => 'App\\Controller\\EvenementController::newback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/feedback' => [[['_route' => 'feedback_index', '_controller' => 'App\\Controller\\FeedbackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/feedback/new' => [[['_route' => 'feedback_new', '_controller' => 'App\\Controller\\FeedbackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/interactions' => [[['_route' => 'interactions_index', '_controller' => 'App\\Controller\\InteractionsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/interactions/new' => [[['_route' => 'interactions_new', '_controller' => 'App\\Controller\\InteractionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/label' => [[['_route' => 'label_index', '_controller' => 'App\\Controller\\LabelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/label/new' => [[['_route' => 'label_new', '_controller' => 'App\\Controller\\LabelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/partenaire' => [[['_route' => 'partenaire_index', '_controller' => 'App\\Controller\\PartenaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/partenaire/new' => [[['_route' => 'partenaire_new', '_controller' => 'App\\Controller\\PartenaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participant' => [[['_route' => 'participant_index', '_controller' => 'App\\Controller\\ParticipantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participant/new' => [[['_route' => 'participant_new', '_controller' => 'App\\Controller\\ParticipantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/postes' => [[['_route' => 'postes_index', '_controller' => 'App\\Controller\\PostesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/postes/new' => [[['_route' => 'postes_new', '_controller' => 'App\\Controller\\PostesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rating/event' => [[['_route' => 'rating_event_index', '_controller' => 'App\\Controller\\RatingEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rating/event/new' => [[['_route' => 'rating_event_new', '_controller' => 'App\\Controller\\RatingEventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/signalisation' => [[['_route' => 'signalisation_index', '_controller' => 'App\\Controller\\SignalisationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/signalisation/new' => [[['_route' => 'signalisation_new', '_controller' => 'App\\Controller\\SignalisationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type/event' => [[['_route' => 'type_event_index', '_controller' => 'App\\Controller\\TypeEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/event/new' => [[['_route' => 'type_event_new', '_controller' => 'App\\Controller\\TypeEventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/annonce/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|ndidature/([^/]++)(?'
                            .'|(*:249)'
                            .'|/edit(*:262)'
                            .'|(*:270)'
                        .')'
                        .'|tegorie/([^/]++)(?'
                            .'|(*:298)'
                            .'|/edit(*:311)'
                            .'|(*:319)'
                        .')'
                    .')'
                    .'|omment(?'
                        .'|/event/([^/]++)(?'
                            .'|(*:356)'
                            .'|/edit(*:369)'
                            .'|(*:377)'
                        .')'
                        .'|s/([^/]++)(?'
                            .'|(*:399)'
                            .'|/edit(*:412)'
                            .'|(*:420)'
                        .')'
                    .')'
                .')'
                .'|/evenement/(?'
                    .'|([^/]++)(?'
                        .'|(*:456)'
                        .'|/edit(*:469)'
                        .'|(*:477)'
                        .'|(*:485)'
                    .')'
                    .'|back(?'
                        .'|/([^/]++)(?'
                            .'|(*:513)'
                            .'|/edit(*:526)'
                            .'|(*:534)'
                            .'|(*:542)'
                        .')'
                        .'|(*:551)'
                    .')'
                .')'
                .'|/feedback/([^/]++)(?'
                    .'|(*:582)'
                    .'|/edit(*:595)'
                    .'|(*:603)'
                .')'
                .'|/interactions/([^/]++)(?'
                    .'|(*:637)'
                    .'|/edit(*:650)'
                    .'|(*:658)'
                .')'
                .'|/label/([^/]++)(?'
                    .'|(*:685)'
                    .'|/edit(*:698)'
                    .'|(*:706)'
                .')'
                .'|/p(?'
                    .'|art(?'
                        .'|enaire/([^/]++)(?'
                            .'|(*:744)'
                            .'|/edit(*:757)'
                            .'|(*:765)'
                        .')'
                        .'|icipant/([^/]++)(?'
                            .'|(*:793)'
                            .'|/edit(*:806)'
                            .'|(*:814)'
                        .')'
                    .')'
                    .'|ostes/([^/]++)(?'
                        .'|(*:841)'
                        .'|/edit(*:854)'
                        .'|(*:862)'
                    .')'
                .')'
                .'|/rating/event/([^/]++)(?'
                    .'|(*:897)'
                    .'|/edit(*:910)'
                    .'|(*:918)'
                .')'
                .'|/signalisation/([^/]++)(?'
                    .'|(*:953)'
                    .'|/edit(*:966)'
                    .'|(*:974)'
                .')'
                .'|/type/event/([^/]++)(?'
                    .'|(*:1006)'
                    .'|/edit(*:1020)'
                    .'|(*:1029)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1056)'
                    .'|/edit(*:1070)'
                    .'|(*:1079)'
                .')'
                .'|/qr\\-code/([^/]++)/([^/]++)(*:1116)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'annonce_show', '_controller' => 'App\\Controller\\AnnonceController::show'], ['idAnn'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['idAnn'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['idAnn'], ['POST' => 0], null, false, true, null]],
        249 => [[['_route' => 'candidature_show', '_controller' => 'App\\Controller\\CandidatureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        262 => [[['_route' => 'candidature_edit', '_controller' => 'App\\Controller\\CandidatureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        270 => [[['_route' => 'candidature_delete', '_controller' => 'App\\Controller\\CandidatureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        298 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['categorieName'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['categorieName'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        319 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['categorieName'], ['POST' => 0], null, false, true, null]],
        356 => [[['_route' => 'comment_event_show', '_controller' => 'App\\Controller\\CommentEventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'comment_event_edit', '_controller' => 'App\\Controller\\CommentEventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        377 => [[['_route' => 'comment_event_delete', '_controller' => 'App\\Controller\\CommentEventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        399 => [[['_route' => 'comments_show', '_controller' => 'App\\Controller\\CommentsController::show'], ['idComment'], ['GET' => 0], null, false, true, null]],
        412 => [[['_route' => 'comments_edit', '_controller' => 'App\\Controller\\CommentsController::edit'], ['idComment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        420 => [[['_route' => 'comments_delete', '_controller' => 'App\\Controller\\CommentsController::delete'], ['idComment'], ['POST' => 0], null, false, true, null]],
        456 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        469 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        477 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        485 => [[['_route' => 'evenement_cat', '_controller' => 'App\\Controller\\EvenementController::FindByCategorie'], ['name'], ['GET' => 0], null, false, true, null]],
        513 => [[['_route' => 'evenement_back_show', '_controller' => 'App\\Controller\\EvenementController::showback'], ['id'], ['GET' => 0], null, false, true, null]],
        526 => [[['_route' => 'evenement_back_edit', '_controller' => 'App\\Controller\\EvenementController::editback'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        534 => [[['_route' => 'evenement_back_delete', '_controller' => 'App\\Controller\\EvenementController::deleteback'], ['id'], ['POST' => 0], null, false, true, null]],
        542 => [[['_route' => 'evenement_back_cat', '_controller' => 'App\\Controller\\EvenementController::FindByCategorieback'], ['name'], ['GET' => 0], null, false, true, null]],
        551 => [[['_route' => 'evenement_back_search', '_controller' => 'App\\Controller\\EvenementController::searchback'], [], ['POST' => 0], null, true, false, null]],
        582 => [[['_route' => 'feedback_show', '_controller' => 'App\\Controller\\FeedbackController::show'], ['idFeedback'], ['GET' => 0], null, false, true, null]],
        595 => [[['_route' => 'feedback_edit', '_controller' => 'App\\Controller\\FeedbackController::edit'], ['idFeedback'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        603 => [[['_route' => 'feedback_delete', '_controller' => 'App\\Controller\\FeedbackController::delete'], ['idFeedback'], ['POST' => 0], null, false, true, null]],
        637 => [[['_route' => 'interactions_show', '_controller' => 'App\\Controller\\InteractionsController::show'], ['idInter'], ['GET' => 0], null, false, true, null]],
        650 => [[['_route' => 'interactions_edit', '_controller' => 'App\\Controller\\InteractionsController::edit'], ['idInter'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        658 => [[['_route' => 'interactions_delete', '_controller' => 'App\\Controller\\InteractionsController::delete'], ['idInter'], ['POST' => 0], null, false, true, null]],
        685 => [[['_route' => 'label_show', '_controller' => 'App\\Controller\\LabelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        698 => [[['_route' => 'label_edit', '_controller' => 'App\\Controller\\LabelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        706 => [[['_route' => 'label_delete', '_controller' => 'App\\Controller\\LabelController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        744 => [[['_route' => 'partenaire_show', '_controller' => 'App\\Controller\\PartenaireController::show'], ['idPart'], ['GET' => 0], null, false, true, null]],
        757 => [[['_route' => 'partenaire_edit', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['idPart'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        765 => [[['_route' => 'partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['idPart'], ['POST' => 0], null, false, true, null]],
        793 => [[['_route' => 'participant_show', '_controller' => 'App\\Controller\\ParticipantController::show'], ['idParticipation'], ['GET' => 0], null, false, true, null]],
        806 => [[['_route' => 'participant_edit', '_controller' => 'App\\Controller\\ParticipantController::edit'], ['idParticipation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        814 => [[['_route' => 'participant_delete', '_controller' => 'App\\Controller\\ParticipantController::delete'], ['idParticipation'], ['POST' => 0], null, false, true, null]],
        841 => [[['_route' => 'postes_show', '_controller' => 'App\\Controller\\PostesController::show'], ['idPost'], ['GET' => 0], null, false, true, null]],
        854 => [[['_route' => 'postes_edit', '_controller' => 'App\\Controller\\PostesController::edit'], ['idPost'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        862 => [[['_route' => 'postes_delete', '_controller' => 'App\\Controller\\PostesController::delete'], ['idPost'], ['POST' => 0], null, false, true, null]],
        897 => [[['_route' => 'rating_event_show', '_controller' => 'App\\Controller\\RatingEventController::show'], ['idRating'], ['GET' => 0], null, false, true, null]],
        910 => [[['_route' => 'rating_event_edit', '_controller' => 'App\\Controller\\RatingEventController::edit'], ['idRating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        918 => [[['_route' => 'rating_event_delete', '_controller' => 'App\\Controller\\RatingEventController::delete'], ['idRating'], ['POST' => 0], null, false, true, null]],
        953 => [[['_route' => 'signalisation_show', '_controller' => 'App\\Controller\\SignalisationController::show'], ['idSignal'], ['GET' => 0], null, false, true, null]],
        966 => [[['_route' => 'signalisation_edit', '_controller' => 'App\\Controller\\SignalisationController::edit'], ['idSignal'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        974 => [[['_route' => 'signalisation_delete', '_controller' => 'App\\Controller\\SignalisationController::delete'], ['idSignal'], ['POST' => 0], null, false, true, null]],
        1006 => [[['_route' => 'type_event_show', '_controller' => 'App\\Controller\\TypeEventController::show'], ['typeName'], ['GET' => 0], null, false, true, null]],
        1020 => [[['_route' => 'type_event_edit', '_controller' => 'App\\Controller\\TypeEventController::edit'], ['typeName'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1029 => [[['_route' => 'type_event_delete', '_controller' => 'App\\Controller\\TypeEventController::delete'], ['typeName'], ['POST' => 0], null, false, true, null]],
        1056 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['idUser'], ['GET' => 0], null, false, true, null]],
        1070 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['idUser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1079 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['idUser'], ['POST' => 0], null, false, true, null]],
        1116 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
