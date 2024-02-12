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
        '/api/prestataire/employees' => [[['_route' => '_api_/prestataire/employees_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataire/employees_get_collection', 'attributes' => ['readable' => false]], null, ['GET' => 0], null, false, false, null]],
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
                            .'|mployee_schedules(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:396)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:422)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:460)'
                                .')'
                            .')'
                            .'|stablishments(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:512)'
                                .'|(?:\\.([^/]++))?(*:535)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:569)'
                                .'|(?:\\.([^/]++))?(*:592)'
                                .'|/(?'
                                    .'|([^/]++)/a(?'
                                        .'|ddPrestation(*:629)'
                                        .'|ssignManager(*:649)'
                                    .')'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(*:683)'
                                .')'
                            .')'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:723)'
                        .')'
                        .'|bookings(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:769)'
                            .'|(?:\\.([^/]++))?(*:792)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:826)'
                            .'|(?:\\.([^/]++))?(*:849)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:883)'
                        .')'
                        .'|feedback(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:929)'
                            .'|(?:\\.([^/]++))?(*:952)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:986)'
                            .'|(?:\\.([^/]++))?(*:1009)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1044)'
                        .')'
                        .'|media(?'
                            .'|(?:\\.([^/]++))?(*:1077)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1112)'
                            .'|(?:\\.([^/]++))?(*:1136)'
                        .')'
                        .'|prestat(?'
                            .'|aire(?'
                                .'|/([^/]++)/(?'
                                    .'|addEstablishment(*:1192)'
                                    .'|establishments(*:1215)'
                                .')'
                                .'|s(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1255)'
                                    .'|(?:\\.([^/]++))?(*:1279)'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(*:1317)'
                                        .'|([^/]++)/(?'
                                            .'|approve(*:1345)'
                                            .'|reject(*:1360)'
                                        .')'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(*:1395)'
                                    .')'
                                .')'
                            .')'
                            .'|ions(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1440)'
                                .'|(?:\\.([^/]++))?(*:1464)'
                                .'|/(?'
                                    .'|public(*:1483)'
                                    .'|research(*:1500)'
                                .')'
                                .'|(?:\\.([^/]++))?(*:1525)'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(*:1563)'
                                    .'|research(*:1580)'
                                .')'
                            .')'
                        .')'
                        .'|slots(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1626)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1653)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1692)'
                            .')'
                        .')'
                        .'|u(?'
                            .'|sers(?'
                                .'|(?:\\.([^/]++))?(*:1729)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1767)'
                                .')'
                            .')'
                            .'|pdate_profil/([^/]++)(*:1799)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1842)'
                    .'|wdt/([^/]++)(*:1863)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1910)'
                            .'|router(*:1925)'
                            .'|exception(?'
                                .'|(*:1946)'
                                .'|\\.css(*:1960)'
                            .')'
                        .')'
                        .'|(*:1971)'
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
        396 => [[['_route' => '_api_/employee_schedules/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        422 => [
            [['_route' => '_api_/employee_schedules{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/employee_schedules{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        460 => [
            [['_route' => '_api_/employee_schedules/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules/{id}{._format}_put', 'attributes' => ['readable' => false]], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/employee_schedules/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/employee_schedules/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        512 => [[['_route' => '_api_/establishments/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        535 => [[['_route' => '_api_/establishments{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        569 => [[['_route' => '_api_/establishments/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        592 => [[['_route' => '_api_/establishments{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        629 => [[['_route' => '_api_/establishments/{id}/addPrestation_post', '_controller' => 'App\\Controller\\AddPrestationToEstablishmentController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}/addPrestation_post', 'attributes' => ['readable' => false]], ['id'], ['POST' => 0], null, false, false, null]],
        649 => [[['_route' => '_api_/establishments/{id}/assignManager_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}/assignManager_patch', 'attributes' => ['readable' => false]], ['id'], ['PATCH' => 0], null, false, false, null]],
        683 => [[['_route' => '_api_/establishments/{id}{._format}_delete', '_controller' => 'App\\Controller\\DeleteEstablishmentController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        723 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem', 'attributes' => ['readable' => false]], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra', 'attributes' => ['readable' => false]], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi', 'attributes' => ['readable' => false]], ['id'], ['GET' => 0], null, false, true, null],
        ],
        769 => [[['_route' => '_api_/bookings/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        792 => [[['_route' => '_api_/bookings{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        826 => [[['_route' => '_api_/bookings/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        849 => [[['_route' => '_api_/bookings{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        883 => [[['_route' => '_api_/bookings/{id}{._format}_delete', '_controller' => 'App\\Controller\\DeteteBookingController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        929 => [[['_route' => '_api_/feedback/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        952 => [[['_route' => '_api_/feedback{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        986 => [[['_route' => '_api_/feedback/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        1009 => [[['_route' => '_api_/feedback{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        1044 => [[['_route' => '_api_/feedback/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        1077 => [[['_route' => '_api_/media{._format}_post', '_controller' => 'App\\Controller\\MediaOploaderController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Media', '_api_operation_name' => '_api_/media{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        1112 => [[['_route' => '_api_/media/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Media', '_api_operation_name' => '_api_/media/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1136 => [[['_route' => '_api_/media{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Media', '_api_operation_name' => '_api_/media{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        1192 => [[['_route' => '_api_/prestataire/{id}/addEstablishment_post', '_controller' => 'App\\Controller\\AddEstablishmentToPrestataireController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataire/{id}/addEstablishment_post', 'attributes' => ['readable' => false]], ['id'], ['POST' => 0], null, false, false, null]],
        1215 => [[['_route' => '_api_/prestataire/{id}/establishments_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataire/{id}/establishments_get_collection', 'attributes' => ['readable' => false]], ['id'], ['GET' => 0], null, false, false, null]],
        1255 => [[['_route' => '_api_/prestataires/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1279 => [[['_route' => '_api_/prestataires{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        1317 => [[['_route' => '_api_/prestataires/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        1345 => [[['_route' => '_api_/prestataires/{id}/approve_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}/approve_put', 'attributes' => ['readable' => false]], ['id'], ['PUT' => 0], null, false, false, null]],
        1360 => [[['_route' => '_api_/prestataires/{id}/reject_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}/reject_put', 'attributes' => ['readable' => false]], ['id'], ['PUT' => 0], null, false, false, null]],
        1395 => [[['_route' => '_api_/prestataires/{id}{._format}_delete', '_controller' => 'App\\Controller\\DeletePrestataireController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        1440 => [[['_route' => '_api_/prestations/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1464 => [[['_route' => '_api_/prestations{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        1483 => [[['_route' => '_api_/prestations/public_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/public_get_collection', 'attributes' => ['readable' => false]], [], ['GET' => 0], null, false, false, null]],
        1500 => [[['_route' => '_api_/prestations/research_post', '_controller' => 'App\\Controller\\ResearchPrestationController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/research_post', 'attributes' => ['readable' => false]], [], ['POST' => 0], null, false, false, null]],
        1525 => [[['_route' => '_api_/prestations{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null]],
        1563 => [[['_route' => '_api_/prestations/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
        1580 => [[['_route' => 'research_prestations', '_controller' => 'App\\Controller\\ResearchPrestationController'], [], ['POST' => 0], null, false, false, null]],
        1626 => [[['_route' => '_api_/slots/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1653 => [
            [['_route' => '_api_/slots{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/slots{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots{._format}_post', 'attributes' => ['readable' => false]], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1692 => [
            [['_route' => '_api_/slots/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_put', 'attributes' => ['readable' => false]], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/slots/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/slots/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1729 => [[['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection', 'attributes' => ['readable' => false]], ['_format'], ['GET' => 0], null, false, true, null]],
        1767 => [
            [['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get', 'attributes' => ['readable' => false]], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch', 'attributes' => ['readable' => false]], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete', 'attributes' => ['readable' => false]], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1799 => [[['_route' => '_api_/update_profil/{id}_post', '_controller' => 'App\\Controller\\MediaOploaderController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/update_profil/{id}_post', 'attributes' => ['readable' => false]], ['id'], ['POST' => 0], null, false, true, null]],
        1842 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1863 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1910 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1925 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1946 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1960 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1971 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
