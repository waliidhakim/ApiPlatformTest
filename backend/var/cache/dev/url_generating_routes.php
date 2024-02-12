<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true', 'attributes' => ['readable' => false]], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index', 'attributes' => ['readable' => false]], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_graphql_entrypoint' => [[], ['_controller' => 'api_platform.graphql.action.entrypoint', '_graphql' => true, 'attributes' => ['readable' => false]], [], [['text', '/api/graphql']], [], [], []],
    'api_graphql_graphiql' => [[], ['_controller' => 'api_platform.graphql.action.graphiql', '_graphql' => true, 'attributes' => ['readable' => false]], [], [['text', '/api/graphql/graphiql']], [], [], []],
    'api_graphql_graphql_playground' => [[], ['_controller' => 'api_platform.graphql.action.graphql_playground', '_graphql' => true, 'attributes' => ['readable' => false]], [], [['text', '/api/graphql/graphql_playground']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true', 'attributes' => ['readable' => false]], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_errors_problem' => [['status'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem', 'attributes' => ['readable' => false]], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/api/errors']], [], [], []],
    '_api_errors_hydra' => [['status'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra', 'attributes' => ['readable' => false]], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/api/errors']], [], [], []],
    '_api_errors_jsonapi' => [['status'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi', 'attributes' => ['readable' => false]], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/api/errors']], [], [], []],
    '_api_validation_errors_problem' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem', 'attributes' => ['readable' => false]], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_hydra' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra', 'attributes' => ['readable' => false]], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_jsonapi' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi', 'attributes' => ['readable' => false]], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_/bookings/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings/{id}{._format}_get', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/bookings']], [], [], []],
    '_api_/bookings{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings{._format}_get_collection', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/bookings']], [], [], []],
    '_api_/bookings/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings/{id}{._format}_patch', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/bookings']], [], [], []],
    '_api_/bookings{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings{._format}_post', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/bookings']], [], [], []],
    '_api_/bookings/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'App\\Controller\\DeteteBookingController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Booking', '_api_operation_name' => '_api_/bookings/{id}{._format}_delete', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/bookings']], [], [], []],
    '_api_/categories/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_get', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_get_collection', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_patch', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_post', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/categories']], [], [], []],
    '_api_/categories/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_delete', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], [], []],
    '_api_/employee_schedules/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules/{id}{._format}_get', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/employee_schedules']], [], [], []],
    '_api_/employee_schedules{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules{._format}_get_collection', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/employee_schedules']], [], [], []],
    '_api_/employee_schedules{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules{._format}_post', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/employee_schedules']], [], [], []],
    '_api_/employee_schedules/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules/{id}{._format}_put', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/employee_schedules']], [], [], []],
    '_api_/employee_schedules/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules/{id}{._format}_patch', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/employee_schedules']], [], [], []],
    '_api_/employee_schedules/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\EmployeeSchedule', '_api_operation_name' => '_api_/employee_schedules/{id}{._format}_delete', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/employee_schedules']], [], [], []],
    '_api_/establishments/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}{._format}_get', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/establishments']], [], [], []],
    '_api_/establishments{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments{._format}_get_collection', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/establishments']], [], [], []],
    '_api_/establishments/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}{._format}_patch', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/establishments']], [], [], []],
    '_api_/establishments{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments{._format}_post', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/establishments']], [], [], []],
    '_api_/establishments/{id}/addPrestation_post' => [['id'], ['_controller' => 'App\\Controller\\AddPrestationToEstablishmentController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}/addPrestation_post', 'attributes' => ['readable' => false]], [], [['text', '/addPrestation'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/establishments']], [], [], []],
    '_api_/establishments/{id}/assignManager_patch' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}/assignManager_patch', 'attributes' => ['readable' => false]], [], [['text', '/assignManager'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/establishments']], [], [], []],
    '_api_/establishments/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'App\\Controller\\DeleteEstablishmentController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Establishment', '_api_operation_name' => '_api_/establishments/{id}{._format}_delete', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/establishments']], [], [], []],
    '_api_/feedback/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback/{id}{._format}_get', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/feedback']], [], [], []],
    '_api_/feedback{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback{._format}_get_collection', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/feedback']], [], [], []],
    '_api_/feedback/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback/{id}{._format}_patch', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/feedback']], [], [], []],
    '_api_/feedback{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback{._format}_post', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/feedback']], [], [], []],
    '_api_/feedback/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Feedback', '_api_operation_name' => '_api_/feedback/{id}{._format}_delete', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/feedback']], [], [], []],
    '_api_/media{._format}_post' => [['_format'], ['_controller' => 'App\\Controller\\MediaOploaderController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Media', '_api_operation_name' => '_api_/media{._format}_post', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/media']], [], [], []],
    '_api_/media/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Media', '_api_operation_name' => '_api_/media/{id}{._format}_get', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/media']], [], [], []],
    '_api_/media{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Media', '_api_operation_name' => '_api_/media{._format}_get_collection', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/media']], [], [], []],
    '_api_/prestataire/register_post' => [[], ['_controller' => 'App\\Controller\\RegisterPrestataireController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataire/register_post', 'attributes' => ['readable' => false]], [], [['text', '/api/prestataire/register']], [], [], []],
    '_api_/prestataire/{id}/addEstablishment_post' => [['id'], ['_controller' => 'App\\Controller\\AddEstablishmentToPrestataireController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataire/{id}/addEstablishment_post', 'attributes' => ['readable' => false]], [], [['text', '/addEstablishment'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/prestataire']], [], [], []],
    '_api_/prestataires/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_get', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/prestataires']], [], [], []],
    '_api_/prestataires{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires{._format}_get_collection', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/prestataires']], [], [], []],
    '_api_/prestataire/{id}/establishments_get_collection' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataire/{id}/establishments_get_collection', 'attributes' => ['readable' => false]], [], [['text', '/establishments'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/prestataire']], [], [], []],
    '_api_/prestataire/employees_get_collection' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataire/employees_get_collection', 'attributes' => ['readable' => false]], [], [['text', '/api/prestataire/employees']], [], [], []],
    '_api_/prestataires/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_patch', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/prestataires']], [], [], []],
    '_api_/prestataires/{id}/approve_put' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}/approve_put', 'attributes' => ['readable' => false]], [], [['text', '/approve'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/prestataires']], [], [], []],
    '_api_/prestataires/{id}/reject_put' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}/reject_put', 'attributes' => ['readable' => false]], [], [['text', '/reject'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/prestataires']], [], [], []],
    '_api_/prestataires/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'App\\Controller\\DeletePrestataireController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_delete', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/prestataires']], [], [], []],
    '_api_/prestations/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/{id}{._format}_get', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/prestations']], [], [], []],
    '_api_/prestations{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations{._format}_get_collection', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/prestations']], [], [], []],
    '_api_/prestations/public_get_collection' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/public_get_collection', 'attributes' => ['readable' => false]], [], [['text', '/api/prestations/public']], [], [], []],
    '_api_/prestations/research_post' => [[], ['_controller' => 'App\\Controller\\ResearchPrestationController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/research_post', 'attributes' => ['readable' => false]], [], [['text', '/api/prestations/research']], [], [], []],
    '_api_/prestations{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations{._format}_post', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/prestations']], [], [], []],
    '_api_/prestations/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestation', '_api_operation_name' => '_api_/prestations/{id}{._format}_delete', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/prestations']], [], [], []],
    '_api_/slots/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_get', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/slots']], [], [], []],
    '_api_/slots{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots{._format}_get_collection', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/slots']], [], [], []],
    '_api_/slots{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots{._format}_post', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/slots']], [], [], []],
    '_api_/slots/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_put', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/slots']], [], [], []],
    '_api_/slots/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_patch', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/slots']], [], [], []],
    '_api_/slots/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slot', '_api_operation_name' => '_api_/slots/{id}{._format}_delete', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/slots']], [], [], []],
    '_api_/users{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], [], []],
    '_api_/users/employees_get_collection' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/employees_get_collection', 'attributes' => ['readable' => false]], [], [['text', '/api/users/employees']], [], [], []],
    '_api_/users/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    'registration' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'registration', 'attributes' => ['readable' => false]], [], [['text', '/api/register']], [], [], []],
    '_api_/registerEmployee_post' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/registerEmployee_post', 'attributes' => ['readable' => false]], [], [['text', '/api/registerEmployee']], [], [], []],
    '_api_/users/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/update_profil/{id}_post' => [['id'], ['_controller' => 'App\\Controller\\MediaOploaderController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/update_profil/{id}_post', 'attributes' => ['readable' => false]], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/update_profil']], [], [], []],
    '_api_/users/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete', 'attributes' => ['readable' => false]], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_payment_createcheckoutsession' => [[], ['_controller' => 'App\\Controller\\PaymentController::createCheckoutSession'], [], [['text', '/create-checkout-session']], [], [], []],
    'app_registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::index'], [], [['text', '/registration']], [], [], []],
    'research_prestations' => [[], ['_controller' => 'App\\Controller\\ResearchPrestationController'], [], [['text', '/api/prestations/research']], [], [], []],
    'app_test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], [], []],
    'app.email.send' => [[], ['_controller' => 'App\\Controller\\TestController::someAction'], [], [['text', '/email/send']], [], [], []],
    'app.file.upload' => [[], ['_controller' => 'App\\Controller\\TestController::uploadFile'], [], [['text', '/file/upload']], [], [], []],
    'app_login' => [[], [], [], [['text', '/login']], [], [], []],
];
