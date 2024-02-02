<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/graphql' => [[['_route' => 'api_graphql_entrypoint', '_controller' => 'api_platform.graphql.action.entrypoint', '_graphql' => true, 'attributes' => ['readable' => false]], null, null, null, false, false, null]],
        '/api/graphql/graphiql' => [[['_route' => 'api_graphql_graphiql', '_controller' => 'api_platform.graphql.action.graphiql', '_graphql' => true, 'attributes' => ['readable' => false]], null, null, null, false, false, null]],
        '/api/graphql/graphql_playground' => [[['_route' => 'api_graphql_graphql_playground', '_controller' => 'api_platform.graphql.action.graphql_playground', '_graphql' => true, 'attributes' => ['readable' => false]], null, null, null, false, false, null]],
        '/api/prestataire/register' => [[['_route' => '_api_/prestataire/register_post', '_controller' => 'App\\Controller\\RegisterPrestataireController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataire/register_post', 'attributes' => ['readable' => false]], null, ['POST' => 0], null, false, false, null]],
        '/api/users/employees' => [[['_route' => '_api_/users/employees_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/employees_get_collection', 'attributes' => ['readable' => false]], null, ['GET' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'registration', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'registration', 'attributes' => ['readable' => false]], null, ['POST' => 0], null, false, false, null]],
        '/api/registerEmployee' => [[['_route' => '_api_/registerEmployee_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/registerEmployee_post', 'attributes' => ['readable' => false]], null, ['POST' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'app_payment_createcheckoutsession', '_controller' => 'App\\Controller\\PaymentController::createCheckoutSession'], null, ['POST' => 0], null, false, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/email/send' => [[['_route' => 'app.email.send', '_controller' => 'App\\Controller\\TestController::someAction'], null, null, null, false, false, null]],
        '/file/upload' => [[['_route' => 'app.file.upload', '_controller' => 'App\\Controller\\TestController::uploadFile'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|c(?'
                            .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:150)'
                            .'|ategories(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:196)'
                                .'|(?:\\.([^/]++))?(*:219)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:253)'
                                .'|(?:\\.([^/]++))?(*:276)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:310)'
                            .')'
                        .')'
                        .'|e(?'
                            .'|rrors/([^/]++)(?'
                                .'|(*:341)'
                            .')'
                            .'|stablishments(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:392)'
                                .'|(?:\\.([^/]++))?(*:415)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:449)'
                                .'|(?:\\.([^/]++))?(*:472)'
                                .'|/(?'
                                    .'|([^/]++)/assignManager(*:506)'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(*:539)'
                                .')'
                            .')'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:579)'
                        .')'
                        .'|bookings(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:625)'
                            .'|(?:\\.([^/]++))?(*:648)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:682)'
                            .'|(?:\\.([^/]++))?(*:705)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:739)'
                        .')'
                        .'|feedback(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:785)'
                            .'|(?:\\.([^/]++))?(*:808)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:842)'
                            .'|(?:\\.([^/]++))?(*:865)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:899)'
                        .')'
                        .'|media(?'
                            .'|(?:\\.([^/]++))?(*:931)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:965)'
                            .'|(?:\\.([^/]++))?(*:988)'
                        .')'
                        .'|prestat(?'
                            .'|aire(?'
                                .'|s(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1044)'
                                    .'|(?:\\.([^/]++))?(*:1068)'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(*:1106)'
                                        .'|([^/]++)/(?'
                                            .'|approve(*:1134)'
                                            .'|reject(*:1149)'
                                        .')'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(*:1184)'
                                    .')'
                                .')'
                                .'|/([^/]++)/establishments(*:1219)'
                            .')'
                            .'|ions(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1262)'
                                .'|(?:\\.([^/]++))?(*:1286)'
                                .'|/public(*:1302)'
                                .'|(?:\\.([^/]++))?(*:1326)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1361)'
                            .')'
                        .')'
                        .'|slots(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1406)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1433)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1472)'
                            .')'
                        .')'
                        .'|u(?'
                            .'|sers(?'
                                .'|(?:\\.([^/]++))?(*:1509)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1547)'
                                .')'
                            .')'
                            .'|pdate_profil/([^/]++)(*:1579)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1622)'
                    .'|wdt/([^/]++)(*:1643)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1690)'
                            .'|router(*:1705)'
                            .'|exception(?'
                                .'|(*:1726)'
                                .'|\\.css(*:1740)'
                            .')'
                        .')'
                        .'|(*:1751)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true', 'attributes' => ['readable' => false]], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index', 'attributes' => ['readable' => false]], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true', 'attributes' => ['readable' => false]], ['_format'], null, null, false, true, null]],
        150 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true', 'attributes' => ['readable' => false]], ['shortName', '_format'], null, null, false, true, null]],
        196 => [[['_route' => '_api_/categories/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => '_api_/categories{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => '_api_/categories/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        276 => [[['_route' => '_api_/categories{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        310 => [[['_route' => '_api_/categories/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        341 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem', 'attributes' => ['readable' => false]], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra', 'attributes' => ['readable' => false]], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi', 'attributes' => ['readable' => false]], ['status'], ['GET' => 0], null, false, true, null],
        ],
        392 => [[['_route' => '_api_/establishments/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        415 => [[['_route' => '_api_/establishments{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        449 => [[['_route' => '_api_/establishments/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        472 => [[['_route' => '_api_/establishments{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        506 => [[['_route' => '_api_/establishments/{id}/assignManager_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}/assignManager_patch', 'attributes' => ['readable' => false]], ['id'], ['PATCH' => 0], null, false, false, null]],
        539 => [[['_route' => '_api_/establishments/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        579 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem', 'attributes' => ['readable' => false]], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra', 'attributes' => ['readable' => false]], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi', 'attributes' => ['readable' => false]], ['id'], ['GET' => 0], null, false, true, null],
        ],
        625 => [[['_route' => '_api_/bookings/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        648 => [[['_route' => '_api_/bookings{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        682 => [[['_route' => '_api_/bookings/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        705 => [[['_route' => '_api_/bookings{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        739 => [[['_route' => '_api_/bookings/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        785 => [[['_route' => '_api_/feedback/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        808 => [[['_route' => '_api_/feedback{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        842 => [[['_route' => '_api_/feedback/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        865 => [[['_route' => '_api_/feedback{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        899 => [[['_route' => '_api_/feedback/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        931 => [[['_route' => '_api_/media{._format}_post', '_controller' => 'App\\Controller\\MediaOploaderController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Media', '_api_operation_name' => '_api_/media{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        965 => [[['_route' => '_api_/media/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Media', '_api_operation_name' => '_api_/media/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        988 => [[['_route' => '_api_/media{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Media', '_api_operation_name' => '_api_/media{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        1044 => [[['_route' => '_api_/prestataires/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1068 => [[['_route' => '_api_/prestataires{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        1106 => [[['_route' => '_api_/prestataires/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        1134 => [[['_route' => '_api_/prestataires/{id}/approve_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}/approve_put', 'attributes' => ['readable' => false]], ['id'], ['PUT' => 0], null, false, false, null]],
        1149 => [[['_route' => '_api_/prestataires/{id}/reject_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}/reject_put', 'attributes' => ['readable' => false]], ['id'], ['PUT' => 0], null, false, false, null]],
        1184 => [[['_route' => '_api_/prestataires/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        1219 => [[['_route' => '_api_/prestataire/{id}/establishments_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataire/{id}/establishments_get_collection', 'attributes' => ['readable' => false]], ['id'], ['GET' => 0], null, false, false, null]],
        1262 => [[['_route' => '_api_/prestations/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1286 => [[['_route' => '_api_/prestations{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        1302 => [[['_route' => '_api_/prestations/public_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/public_get_collection', 'attributes' => ['readable' => false]], [], ['GET' => 0], null, false, false, null]],
        1326 => [[['_route' => '_api_/prestations{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        1361 => [[['_route' => '_api_/prestations/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        1406 => [[['_route' => '_api_/slots/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1433 => [
            [['_route' => '_api_/slots{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/slots{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1472 => [
            [['_route' => '_api_/slots/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_put', 'attributes' => ['readable' => false]], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/slots/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/slots/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1509 => [[['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        1547 => [
            [['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1579 => [[['_route' => '_api_/update_profil/{id}_post', '_controller' => 'App\\Controller\\MediaOploaderController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/update_profil/{id}_post', 'attributes' => ['readable' => false]], ['id'], ['POST' => 0], null, false, true, null]],
        1622 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1643 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1690 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1705 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1726 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1740 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1751 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
