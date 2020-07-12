<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'account.account_manager' => 'getAccount_AccountManagerService',
            'account.account_repository' => 'getAccount_AccountRepositoryService',
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService',
            'doctrine_migrations.diff_command' => 'getDoctrineMigrations_DiffCommandService',
            'doctrine_migrations.execute_command' => 'getDoctrineMigrations_ExecuteCommandService',
            'doctrine_migrations.generate_command' => 'getDoctrineMigrations_GenerateCommandService',
            'doctrine_migrations.latest_command' => 'getDoctrineMigrations_LatestCommandService',
            'doctrine_migrations.migrate_command' => 'getDoctrineMigrations_MigrateCommandService',
            'doctrine_migrations.status_command' => 'getDoctrineMigrations_StatusCommandService',
            'doctrine_migrations.version_command' => 'getDoctrineMigrations_VersionCommandService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_oauth_server.access_token_manager.default' => 'getFosOauthServer_AccessTokenManager_DefaultService',
            'fos_oauth_server.auth_code_manager.default' => 'getFosOauthServer_AuthCodeManager_DefaultService',
            'fos_oauth_server.authorize.form' => 'getFosOauthServer_Authorize_FormService',
            'fos_oauth_server.authorize.form.handler.default' => 'getFosOauthServer_Authorize_Form_Handler_DefaultService',
            'fos_oauth_server.authorize.form.type' => 'getFosOauthServer_Authorize_Form_TypeService',
            'fos_oauth_server.client_manager.default' => 'getFosOauthServer_ClientManager_DefaultService',
            'fos_oauth_server.controller.token' => 'getFosOauthServer_Controller_TokenService',
            'fos_oauth_server.entity_manager' => 'getFosOauthServer_EntityManagerService',
            'fos_oauth_server.refresh_token_manager.default' => 'getFosOauthServer_RefreshTokenManager_DefaultService',
            'fos_oauth_server.server' => 'getFosOauthServer_ServerService',
            'fos_oauth_server.storage' => 'getFosOauthServer_StorageService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.exception_format_negotiator' => 'getFosRest_ExceptionFormatNegotiatorService',
            'fos_rest.format_listener' => 'getFosRest_FormatListenerService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector.doctrine' => 'getFosRest_Inflector_DoctrineService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService',
            'fos_rest.param_fetcher_listener' => 'getFosRest_ParamFetcherListenerService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.request_matcher.0dfc4cce134bee15f08405cb5cea4845b13ff7d8c8f779004218432a2c552bd0cd9f9d27' => 'getFosRest_RequestMatcher_0dfc4cce134bee15f08405cb5cea4845b13ff7d8c8f779004218432a2c552bd0cd9f9d27Service',
            'fos_rest.request_matcher.50d7031fd332f324b33953b2158cded5b34cf57c3cd709fdaa24d6818252fd77ab4624ee' => 'getFosRest_RequestMatcher_50d7031fd332f324b33953b2158cded5b34cf57c3cd709fdaa24d6818252fd77ab4624eeService',
            'fos_rest.request_matcher.8615024800e4193600fd69885f7587200427156c3f94286d4b2ddc9c87897c17c762ebe2' => 'getFosRest_RequestMatcher_8615024800e4193600fd69885f7587200427156c3f94286d4b2ddc9c87897c17c762ebe2Service',
            'fos_rest.routing.loader.controller' => 'getFosRest_Routing_Loader_ControllerService',
            'fos_rest.routing.loader.processor' => 'getFosRest_Routing_Loader_ProcessorService',
            'fos_rest.routing.loader.reader.action' => 'getFosRest_Routing_Loader_Reader_ActionService',
            'fos_rest.routing.loader.reader.controller' => 'getFosRest_Routing_Loader_Reader_ControllerService',
            'fos_rest.routing.loader.xml_collection' => 'getFosRest_Routing_Loader_XmlCollectionService',
            'fos_rest.routing.loader.yaml_collection' => 'getFosRest_Routing_Loader_YamlCollectionService',
            'fos_rest.serializer' => 'getFosRest_SerializerService',
            'fos_rest.serializer.exception_wrapper_normalizer' => 'getFosRest_Serializer_ExceptionWrapperNormalizerService',
            'fos_rest.serializer.exception_wrapper_serialize_handler' => 'getFosRest_Serializer_ExceptionWrapperSerializeHandlerService',
            'fos_rest.view.exception_wrapper_handler' => 'getFosRest_View_ExceptionWrapperHandlerService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_rest.view_response_listener' => 'getFosRest_ViewResponseListenerService',
            'fos_rest.violation_formatter' => 'getFosRest_ViolationFormatterService',
            'fos_user.change_password.form' => 'getFosUser_ChangePassword_FormService',
            'fos_user.change_password.form.handler.default' => 'getFosUser_ChangePassword_Form_Handler_DefaultService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form' => 'getFosUser_Profile_FormService',
            'fos_user.profile.form.handler' => 'getFosUser_Profile_Form_HandlerService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form' => 'getFosUser_Registration_FormService',
            'fos_user.registration.form.handler' => 'getFosUser_Registration_Form_HandlerService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form' => 'getFosUser_Resetting_FormService',
            'fos_user.resetting.form.handler' => 'getFosUser_Resetting_Form_HandlerService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'http_kernel' => 'getHttpKernelService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.accessor_strategy' => 'getJmsSerializer_AccessorStrategyService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.expression_evaluator' => 'getJmsSerializer_ExpressionEvaluatorService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService',
            'jms_serializer.stopwatch_subscriber' => 'getJmsSerializer_StopwatchSubscriberService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'kernel' => 'getKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'payment.payment_manager' => 'getPayment_PaymentManagerService',
            'payment.payment_repository' => 'getPayment_PaymentRepositoryService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.api' => 'getSecurity_Firewall_Map_Context_ApiService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.firewall.map.context.oauth_authorize' => 'getSecurity_Firewall_Map_Context_OauthAuthorizeService',
            'security.firewall.map.context.oauth_token' => 'getSecurity_Firewall_Map_Context_OauthTokenService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_distribution.webconfigurator' => 'getSensioDistribution_WebconfiguratorService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator.selector' => 'getTranslator_SelectorService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.account' => 'getValidator_AccountService',
            'validator.amount' => 'getValidator_AmountService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
            'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
            'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
            'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => 'doctrine_migrations.diff_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => 'doctrine_migrations.execute_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => 'doctrine_migrations.generate_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => 'doctrine_migrations.latest_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => 'doctrine_migrations.migrate_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => 'doctrine_migrations.status_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => 'doctrine_migrations.version_command',
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_oauth_server.access_token_manager' => 'fos_oauth_server.access_token_manager.default',
            'fos_oauth_server.auth_code_manager' => 'fos_oauth_server.auth_code_manager.default',
            'fos_oauth_server.authorize.form.handler' => 'fos_oauth_server.authorize.form.handler.default',
            'fos_oauth_server.client_manager' => 'fos_oauth_server.client_manager.default',
            'fos_oauth_server.refresh_token_manager' => 'fos_oauth_server.refresh_token_manager.default',
            'fos_rest.exception_handler' => 'fos_rest.view.exception_wrapper_handler',
            'fos_rest.inflector' => 'fos_rest.inflector.doctrine',
            'fos_rest.router' => 'router',
            'fos_rest.templating' => 'templating',
            'fos_user.change_password.form.handler' => 'fos_user.change_password.form.handler.default',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'jms\\serializer\\arraytransformerinterface' => 'jms_serializer',
            'jms\\serializer\\serializerinterface' => 'jms_serializer',
            'mailer' => 'swiftmailer.mailer.default',
            'sensio.distribution.webconfigurator' => 'sensio_distribution.webconfigurator',
            'serializer' => 'jms_serializer',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the public 'account.account_manager' shared service.
     *
     * @return \AccountBundle\Manager\AccountEntityManager
     */
    protected function getAccount_AccountManagerService()
    {
        return $this->services['account.account_manager'] = new \AccountBundle\Manager\AccountEntityManager($this->get('account.account_repository'));
    }

    /**
     * Gets the public 'account.account_repository' shared service.
     *
     * @return \AccountBundle\Entity\AccountEntityRepository
     */
    protected function getAccount_AccountRepositoryService()
    {
        return $this->services['account.account_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('AccountBundle:AccountEntity');
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\FileCacheReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), (__DIR__.'/annotations'), true);
    }

    /**
     * Gets the public 'assetic.asset_manager' shared service.
     *
     * @return \Assetic\Factory\LazyAssetManager
     */
    protected function getAssetic_AssetManagerService()
    {
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($this->get('templating.loader'), '', ($this->targetDirs[2].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the public 'assetic.controller' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Controller\AsseticController
     */
    protected function getAssetic_ControllerService()
    {
        return $this->services['assetic.controller'] = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('assetic.asset_manager'), new \Assetic\Cache\FilesystemCache((__DIR__.'/assetic/assets')), false, $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'assetic.filter.cssrewrite' shared service.
     *
     * @return \Assetic\Filter\CssRewriteFilter
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the public 'assetic.filter_manager' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the public 'assetic.request_listener' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 5 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the public 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the public 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the public 'data_collector.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the public 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the public 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -4182, NULL, true, NULL);
    }

    /**
     * Gets the public 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('var_dumper.cli_dumper'));
    }

    /**
     * Gets the public 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'fos_user.security.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.view_response_listener', 1 => 'onKernelController'), -10);
        $instance->addListenerService('kernel.view', array(0 => 'fos_rest.view_response_listener', 1 => 'onKernelView'), 100);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 10);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.format_listener', 1 => 'onKernelRequest'), 34);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.param_fetcher_listener', 1 => 'onKernelController'), 5);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        return $this->services['doctrine.cache_clear_metadata_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        return $this->services['doctrine.cache_clear_query_cache_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        return $this->services['doctrine.cache_clear_result_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        return $this->services['doctrine.cache_collection_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        return $this->services['doctrine.clear_entity_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        return $this->services['doctrine.clear_query_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        return $this->services['doctrine.database_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        return $this->services['doctrine.database_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        return $this->services['doctrine.database_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventSubscriber(new \FOS\UserBundle\Entity\UserListener($this));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'restish', 'user' => 'root', 'password' => 1234, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $c, array());
    }

    /**
     * Gets the public 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        return $this->services['doctrine.ensure_production_settings_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        return $this->services['doctrine.generate_entities_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        return $this->services['doctrine.mapping_convert_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        return $this->services['doctrine.mapping_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand($this->get('doctrine'), array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'AppBundle' => 'AppBundle\\AppBundle', 'AccountBundle' => 'AccountBundle\\AccountBundle', 'PaymentBundle' => 'PaymentBundle\\PaymentBundle', 'ApiBundle' => 'ApiBundle\\ApiBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle', 'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle', 'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\FOSOAuthServerBundle', 'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle'));
    }

    /**
     * Gets the public 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        return $this->services['doctrine.mapping_info_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['doctrine.orm.default_entity_manager'] = DoctrineORMEntityManager_0000000024be3ac8000000003f7e1eab8dcdc572960b2d02d38cd9c05f173664::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver(array(($this->targetDirs[3].'/src/AccountBundle/Resources/config/doctrine') => 'AccountBundle\\Entity', ($this->targetDirs[3].'/src/PaymentBundle/Resources/config/doctrine') => 'PaymentBundle\\Entity'));
        $a->setGlobalBasename('mapping');

        $b = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine') => 'FOS\\UserBundle\\Entity', ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/config/doctrine') => 'FOS\\OAuthServerBundle\\Entity'));
        $b->setGlobalBasename('mapping');

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($a, 'AccountBundle\\Entity');
        $c->addDriver($a, 'PaymentBundle\\Entity');
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => ($this->targetDirs[3].'/src/ApiBundle/Entity'))), 'ApiBundle\\Entity');
        $c->addDriver($b, 'FOS\\UserBundle\\Entity');
        $c->addDriver($b, 'FOS\\OAuthServerBundle\\Entity');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('AccountBundle' => 'AccountBundle\\Entity', 'PaymentBundle' => 'PaymentBundle\\Entity', 'ApiBundle' => 'ApiBundle\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity', 'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\Entity'));
        $d->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $d->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $d->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(true);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $d->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $d->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(NULL));

        $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $d);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the public 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        return $this->services['doctrine.query_dql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        return $this->services['doctrine.query_sql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        return $this->services['doctrine.schema_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        return $this->services['doctrine.schema_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        return $this->services['doctrine.schema_update_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        return $this->services['doctrine.schema_validate_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();
    }

    /**
     * Gets the public 'doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getDoctrineCache_ContainsCommandService()
    {
        return $this->services['doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /**
     * Gets the public 'doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getDoctrineCache_DeleteCommandService()
    {
        return $this->services['doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /**
     * Gets the public 'doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getDoctrineCache_FlushCommandService()
    {
        return $this->services['doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_eb0d846f49c579057252253b2c504786c1658ff54bac400923134ff4e5d200e0');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_eb0d846f49c579057252253b2c504786c1658ff54bac400923134ff4e5d200e0');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_eb0d846f49c579057252253b2c504786c1658ff54bac400923134ff4e5d200e0');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getDoctrineCache_StatsCommandService()
    {
        return $this->services['doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /**
     * Gets the public 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        return $this->services['doctrine_migrations.diff_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        return $this->services['doctrine_migrations.execute_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        return $this->services['doctrine_migrations.generate_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        return $this->services['doctrine_migrations.latest_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        return $this->services['doctrine_migrations.migrate_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        return $this->services['doctrine_migrations.status_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        return $this->services['doctrine_migrations.version_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.csrf_provider' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fos_oauth_server_authorize' => 'fos_oauth_server.authorize.form.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'form.type_extension.form.data_collector'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the public 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the public 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the public 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the public 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', $this->get('form.server_params'));
    }

    /**
     * Gets the public 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the public 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler($this->get('form.server_params')));
    }

    /**
     * Gets the public 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the public 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the public 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the public 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /**
     * Gets the public 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the public 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the public 'fos_oauth_server.access_token_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\AccessTokenManager
     */
    protected function getFosOauthServer_AccessTokenManager_DefaultService()
    {
        return $this->services['fos_oauth_server.access_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\AccessTokenManager($this->get('fos_oauth_server.entity_manager'), 'ApiBundle\\Entity\\AccessToken');
    }

    /**
     * Gets the public 'fos_oauth_server.auth_code_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\AuthCodeManager
     */
    protected function getFosOauthServer_AuthCodeManager_DefaultService()
    {
        return $this->services['fos_oauth_server.auth_code_manager.default'] = new \FOS\OAuthServerBundle\Entity\AuthCodeManager($this->get('fos_oauth_server.entity_manager'), 'ApiBundle\\Entity\\AuthCode');
    }

    /**
     * Gets the public 'fos_oauth_server.authorize.form' shared service.
     *
     * @return \Symfony\Component\Form\Form
     */
    protected function getFosOauthServer_Authorize_FormService()
    {
        return $this->services['fos_oauth_server.authorize.form'] = $this->get('form.factory')->createNamed('fos_oauth_server_authorize_form', 'fos_oauth_server_authorize', NULL, array('validation_groups' => array(0 => 'Authorize', 1 => 'Default')));
    }

    /**
     * Gets the public 'fos_oauth_server.authorize.form.handler.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler
     */
    protected function getFosOauthServer_Authorize_Form_Handler_DefaultService()
    {
        return $this->services['fos_oauth_server.authorize.form.handler.default'] = new \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler($this->get('fos_oauth_server.authorize.form'), $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'fos_oauth_server.authorize.form.type' shared service.
     *
     * @return \FOS\OAuthServerBundle\Form\Type\AuthorizeFormType
     */
    protected function getFosOauthServer_Authorize_Form_TypeService()
    {
        return $this->services['fos_oauth_server.authorize.form.type'] = new \FOS\OAuthServerBundle\Form\Type\AuthorizeFormType();
    }

    /**
     * Gets the public 'fos_oauth_server.client_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\ClientManager
     */
    protected function getFosOauthServer_ClientManager_DefaultService()
    {
        return $this->services['fos_oauth_server.client_manager.default'] = new \FOS\OAuthServerBundle\Entity\ClientManager($this->get('fos_oauth_server.entity_manager'), 'ApiBundle\\Entity\\Client');
    }

    /**
     * Gets the public 'fos_oauth_server.controller.token' shared service.
     *
     * @return \FOS\OAuthServerBundle\Controller\TokenController
     */
    protected function getFosOauthServer_Controller_TokenService()
    {
        return $this->services['fos_oauth_server.controller.token'] = new \FOS\OAuthServerBundle\Controller\TokenController($this->get('fos_oauth_server.server'));
    }

    /**
     * Gets the public 'fos_oauth_server.refresh_token_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\RefreshTokenManager
     */
    protected function getFosOauthServer_RefreshTokenManager_DefaultService()
    {
        return $this->services['fos_oauth_server.refresh_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\RefreshTokenManager($this->get('fos_oauth_server.entity_manager'), 'ApiBundle\\Entity\\RefreshToken');
    }

    /**
     * Gets the public 'fos_oauth_server.server' shared service.
     *
     * @return \OAuth2\OAuth2
     */
    protected function getFosOauthServer_ServerService()
    {
        return $this->services['fos_oauth_server.server'] = new \OAuth2\OAuth2($this->get('fos_oauth_server.storage'), array());
    }

    /**
     * Gets the public 'fos_oauth_server.storage' shared service.
     *
     * @return \FOS\OAuthServerBundle\Storage\OAuthStorage
     */
    protected function getFosOauthServer_StorageService()
    {
        return $this->services['fos_oauth_server.storage'] = new \FOS\OAuthServerBundle\Storage\OAuthStorage($this->get('fos_oauth_server.client_manager.default'), $this->get('fos_oauth_server.access_token_manager.default'), $this->get('fos_oauth_server.refresh_token_manager.default'), $this->get('fos_oauth_server.auth_code_manager.default'), $this->get('fos_user.user_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the public 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.decoder.json' shared service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder.jsontoform' shared service.
     *
     * @return \FOS\RestBundle\Decoder\JsonToFormDecoder
     */
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder.xml' shared service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder_provider' shared service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider
     */
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.exception_format_negotiator' shared service.
     *
     * @return \FOS\RestBundle\Negotiation\FormatNegotiator
     */
    protected function getFosRest_ExceptionFormatNegotiatorService()
    {
        $this->services['fos_rest.exception_format_negotiator'] = $instance = new \FOS\RestBundle\Negotiation\FormatNegotiator();

        $instance->add($this->get('fos_rest.request_matcher.50d7031fd332f324b33953b2158cded5b34cf57c3cd709fdaa24d6818252fd77ab4624ee'), array('methods' => NULL, 'priorities' => array(0 => 'html', 1 => 'json'), 'fallback_format' => 'html', 'prefer_extension' => '2.0'));
        $instance->add($this->get('fos_rest.request_matcher.8615024800e4193600fd69885f7587200427156c3f94286d4b2ddc9c87897c17c762ebe2'), array('priorities' => array(0 => 'json'), 'fallback_format' => 'json', 'prefer_extension' => '2.0', 'methods' => NULL, 'stop' => false));
        $instance->add($this->get('fos_rest.request_matcher.0dfc4cce134bee15f08405cb5cea4845b13ff7d8c8f779004218432a2c552bd0cd9f9d27'), array('priorities' => array(0 => 'html'), 'fallback_format' => 'html', 'prefer_extension' => '2.0', 'methods' => NULL, 'stop' => false));

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.format_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\FormatListener
     */
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($this->get('fos_rest.format_negotiator'));
    }

    /**
     * Gets the public 'fos_rest.format_negotiator' shared service.
     *
     * @return \FOS\RestBundle\Negotiation\FormatNegotiator
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        $this->services['fos_rest.format_negotiator'] = $instance = new \FOS\RestBundle\Negotiation\FormatNegotiator();

        $instance->add($this->get('fos_rest.request_matcher.50d7031fd332f324b33953b2158cded5b34cf57c3cd709fdaa24d6818252fd77ab4624ee'), array('methods' => NULL, 'priorities' => array(0 => 'html', 1 => 'json'), 'fallback_format' => 'html', 'prefer_extension' => '2.0'));
        $instance->add($this->get('fos_rest.request_matcher.8615024800e4193600fd69885f7587200427156c3f94286d4b2ddc9c87897c17c762ebe2'), array('priorities' => array(0 => 'json'), 'fallback_format' => 'json', 'prefer_extension' => '2.0', 'methods' => NULL, 'stop' => false));
        $instance->add($this->get('fos_rest.request_matcher.0dfc4cce134bee15f08405cb5cea4845b13ff7d8c8f779004218432a2c552bd0cd9f9d27'), array('priorities' => array(0 => 'html'), 'fallback_format' => 'html', 'prefer_extension' => '2.0', 'methods' => NULL, 'stop' => false));

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.inflector.doctrine' shared service.
     *
     * @return \FOS\RestBundle\Inflector\DoctrineInflector
     */
    protected function getFosRest_Inflector_DoctrineService()
    {
        return $this->services['fos_rest.inflector.doctrine'] = new \FOS\RestBundle\Inflector\DoctrineInflector();
    }

    /**
     * Gets the public 'fos_rest.normalizer.camel_keys' shared service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizer
     */
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }

    /**
     * Gets the public 'fos_rest.normalizer.camel_keys_with_leading_underscore' shared service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore
     */
    protected function getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService()
    {
        return $this->services['fos_rest.normalizer.camel_keys_with_leading_underscore'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore();
    }

    /**
     * Gets the public 'fos_rest.param_fetcher_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ParamFetcherListener
     */
    protected function getFosRest_ParamFetcherListenerService()
    {
        return $this->services['fos_rest.param_fetcher_listener'] = new \FOS\RestBundle\EventListener\ParamFetcherListener($this, false);
    }

    /**
     * Gets the public 'fos_rest.request.param_fetcher' shared service.
     *
     * @return \FOS\RestBundle\Request\ParamFetcher
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        return $this->services['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this->get('fos_rest.request.param_fetcher.reader'), $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('fos_rest.violation_formatter'), $this->get('validator', ContainerInterface::NULL_ON_INVALID_REFERENCE), false);
    }

    /**
     * Gets the public 'fos_rest.request.param_fetcher.reader' shared service.
     *
     * @return \FOS\RestBundle\Request\ParamReader
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }

    /**
     * Gets the public 'fos_rest.routing.loader.controller' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestRouteLoader
     */
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('file_locator'), $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), NULL);
    }

    /**
     * Gets the public 'fos_rest.routing.loader.processor' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestRouteProcessor
     */
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }

    /**
     * Gets the public 'fos_rest.routing.loader.reader.action' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\Reader\RestActionReader
     */
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'), $this->get('fos_rest.request.param_fetcher.reader'), $this->get('fos_rest.inflector.doctrine'), false, array('json' => false, 'xml' => false, 'html' => true));
    }

    /**
     * Gets the public 'fos_rest.routing.loader.reader.controller' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader
     */
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }

    /**
     * Gets the public 'fos_rest.routing.loader.xml_collection' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader
     */
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), false, array('json' => false, 'xml' => false, 'html' => true), NULL);
    }

    /**
     * Gets the public 'fos_rest.routing.loader.yaml_collection' shared service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader
     */
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), false, array('json' => false, 'xml' => false, 'html' => true), NULL);
    }

    /**
     * Gets the public 'fos_rest.serializer' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSSerializerAdapter
     */
    public function getFosRest_SerializerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['fos_rest.serializer'] = FOSRestBundleSerializerJMSSerializerAdapter_0000000024be373b000000003f7e1eab8dcdc572960b2d02d38cd9c05f173664::staticProxyConstructor(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getFosRest_SerializerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \FOS\RestBundle\Serializer\JMSSerializerAdapter($this->get('jms_serializer'));
    }

    /**
     * Gets the public 'fos_rest.serializer.exception_wrapper_normalizer' shared service.
     *
     * @return \FOS\RestBundle\Serializer\ExceptionWrapperNormalizer
     */
    protected function getFosRest_Serializer_ExceptionWrapperNormalizerService()
    {
        return $this->services['fos_rest.serializer.exception_wrapper_normalizer'] = new \FOS\RestBundle\Serializer\ExceptionWrapperNormalizer($this->get('translator'));
    }

    /**
     * Gets the public 'fos_rest.serializer.exception_wrapper_serialize_handler' shared service.
     *
     * @return \FOS\RestBundle\Serializer\ExceptionWrapperSerializeHandler
     */
    protected function getFosRest_Serializer_ExceptionWrapperSerializeHandlerService()
    {
        return $this->services['fos_rest.serializer.exception_wrapper_serialize_handler'] = new \FOS\RestBundle\Serializer\ExceptionWrapperSerializeHandler();
    }

    /**
     * Gets the public 'fos_rest.view.exception_wrapper_handler' shared service.
     *
     * @return \FOS\RestBundle\View\ExceptionWrapperHandler
     */
    protected function getFosRest_View_ExceptionWrapperHandlerService()
    {
        return $this->services['fos_rest.view.exception_wrapper_handler'] = new \FOS\RestBundle\View\ExceptionWrapperHandler();
    }

    /**
     * Gets the public 'fos_rest.view_handler' shared service.
     *
     * @return \FOS\RestBundle\View\ViewHandler
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(array('json' => false, 'xml' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');

        $instance->setExclusionStrategyGroups(array());
        $instance->setExclusionStrategyVersion('');
        $instance->setSerializeNullStrategy(false);
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.view_response_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ViewResponseListener
     */
    protected function getFosRest_ViewResponseListenerService()
    {
        return $this->services['fos_rest.view_response_listener'] = new \FOS\RestBundle\EventListener\ViewResponseListener($this);
    }

    /**
     * Gets the public 'fos_rest.violation_formatter' shared service.
     *
     * @return \FOS\RestBundle\Util\ViolationFormatter
     */
    protected function getFosRest_ViolationFormatterService()
    {
        return $this->services['fos_rest.violation_formatter'] = new \FOS\RestBundle\Util\ViolationFormatter(false);
    }

    /**
     * Gets the public 'fos_user.change_password.form' shared service.
     *
     * @return \Symfony\Component\Form\Form
     */
    protected function getFosUser_ChangePassword_FormService()
    {
        return $this->services['fos_user.change_password.form'] = $this->get('form.factory')->createNamed('fos_user_change_password_form', 'fos_user_change_password', NULL, array('validation_groups' => array(0 => 'ChangePassword', 1 => 'Default')));
    }

    /**
     * Gets the public 'fos_user.change_password.form.handler.default' shared service.
     *
     * @return \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler
     * 
     * @throws InactiveScopeException when the 'fos_user.change_password.form.handler.default' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_ChangePassword_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.change_password.form.handler.default', 'request');
        }

        return $this->services['fos_user.change_password.form.handler.default'] = $this->scopedServices['request']['fos_user.change_password.form.handler.default'] = new \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler($this->get('fos_user.change_password.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the public 'fos_user.change_password.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType();
    }

    /**
     * Gets the public 'fos_user.mailer' shared service.
     *
     * @return \FOS\UserBundle\Mailer\Mailer
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('webmaster@example.com' => 'webmaster'))));
    }

    /**
     * Gets the public 'fos_user.profile.form' shared service.
     *
     * @return \Symfony\Component\Form\Form
     */
    protected function getFosUser_Profile_FormService()
    {
        return $this->services['fos_user.profile.form'] = $this->get('form.factory')->createNamed('fos_user_profile_form', 'fos_user_profile', NULL, array('validation_groups' => array(0 => 'Profile', 1 => 'Default')));
    }

    /**
     * Gets the public 'fos_user.profile.form.handler' shared service.
     *
     * @return \FOS\UserBundle\Form\Handler\ProfileFormHandler
     * 
     * @throws InactiveScopeException when the 'fos_user.profile.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.profile.form.handler', 'request');
        }

        return $this->services['fos_user.profile.form.handler'] = $this->scopedServices['request']['fos_user.profile.form.handler'] = new \FOS\UserBundle\Form\Handler\ProfileFormHandler($this->get('fos_user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the public 'fos_user.profile.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('ApiBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.registration.form' shared service.
     *
     * @return \Symfony\Component\Form\Form
     */
    protected function getFosUser_Registration_FormService()
    {
        return $this->services['fos_user.registration.form'] = $this->get('form.factory')->createNamed('fos_user_registration_form', 'fos_user_registration', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }

    /**
     * Gets the public 'fos_user.registration.form.handler' shared service.
     *
     * @return \FOS\UserBundle\Form\Handler\RegistrationFormHandler
     * 
     * @throws InactiveScopeException when the 'fos_user.registration.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.registration.form.handler', 'request');
        }

        return $this->services['fos_user.registration.form.handler'] = $this->scopedServices['request']['fos_user.registration.form.handler'] = new \FOS\UserBundle\Form\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('fos_user.user_manager'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }

    /**
     * Gets the public 'fos_user.registration.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('ApiBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.resetting.form' shared service.
     *
     * @return \Symfony\Component\Form\Form
     */
    protected function getFosUser_Resetting_FormService()
    {
        return $this->services['fos_user.resetting.form'] = $this->get('form.factory')->createNamed('fos_user_resetting_form', 'fos_user_resetting', NULL, array('validation_groups' => array(0 => 'ResetPassword', 1 => 'Default')));
    }

    /**
     * Gets the public 'fos_user.resetting.form.handler' shared service.
     *
     * @return \FOS\UserBundle\Form\Handler\ResettingFormHandler
     * 
     * @throws InactiveScopeException when the 'fos_user.resetting.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Resetting_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.resetting.form.handler', 'request');
        }

        return $this->services['fos_user.resetting.form.handler'] = $this->scopedServices['request']['fos_user.resetting.form.handler'] = new \FOS\UserBundle\Form\Handler\ResettingFormHandler($this->get('fos_user.resetting.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the public 'fos_user.resetting.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType();
    }

    /**
     * Gets the public 'fos_user.security.interactive_login_listener' shared service.
     *
     * @return \FOS\UserBundle\Security\InteractiveLoginListener
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the public 'fos_user.security.login_manager' shared service.
     *
     * @return \FOS\UserBundle\Security\LoginManager
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('security.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }

    /**
     * Gets the public 'fos_user.user_manager' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\UserManager
     */
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('doctrine')->getManager(NULL), 'ApiBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.username_form_type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the public 'fos_user.util.email_canonicalizer' shared service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the public 'fos_user.util.token_generator' shared service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'fos_user.util.user_manipulator' shared service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, true, $this->get('request_stack'));

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');

        return $instance;
    }

    /**
     * Gets the public 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'), false);
    }

    /**
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getJmsSerializerService()
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_serializer')));

        $b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $b->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'), 1 => NULL, 2 => NULL), 2 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL)), 'serializer.post_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL))));

        $this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer($a, $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_serialization_visitor'), 'xml' => $this->get('jms_serializer.xml_serialization_visitor'), 'yml' => $this->get('jms_serializer.yaml_serialization_visitor'))), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_deserialization_visitor'), 'xml' => $this->get('jms_serializer.xml_deserialization_visitor'))), $b, NULL, $this->get('jms_serializer.expression_evaluator'));

        $instance->setSerializationContextFactory($this->get('jms_serializer.serialization_context_factory'));
        $instance->setDeserializationContextFactory($this->get('jms_serializer.deserialization_context_factory'));

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.accessor_strategy' shared service.
     *
     * @return \JMS\Serializer\Accessor\ExpressionAccessorStrategy
     */
    protected function getJmsSerializer_AccessorStrategyService()
    {
        return $this->services['jms_serializer.accessor_strategy'] = new \JMS\Serializer\Accessor\ExpressionAccessorStrategy($this->get('jms_serializer.expression_evaluator'), new \JMS\Serializer\Accessor\DefaultAccessorStrategy());
    }

    /**
     * Gets the public 'jms_serializer.array_collection_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler(true);
    }

    /**
     * Gets the public 'jms_serializer.constraint_violation_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the public 'jms_serializer.datetime_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\DateHandler
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'UTC', true);
    }

    /**
     * Gets the public 'jms_serializer.deserialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_DeserializationContextFactoryService()
    {
        return $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.doctrine_proxy_subscriber' shared service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(false, true);
    }

    /**
     * Gets the public 'jms_serializer.expression_evaluator' shared service.
     *
     * @return \JMS\Serializer\Expression\ExpressionEvaluator
     */
    protected function getJmsSerializer_ExpressionEvaluatorService()
    {
        $a = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $a->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        return $this->services['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator($a, array('container' => $this));
    }

    /**
     * Gets the public 'jms_serializer.form_error_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\FormErrorHandler
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator'));
    }

    /**
     * Gets the public 'jms_serializer.handler_registry' shared service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(1 => array('FOS\\RestBundle\\Util\\ExceptionWrapper' => array('json' => array(0 => 'fos_rest.serializer.exception_wrapper_serialize_handler', 1 => 'serializeToJson'), 'xml' => array(0 => 'fos_rest.serializer.exception_wrapper_serialize_handler', 1 => 'serializeToXml')), 'DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml'))), 2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromyml')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap')))));
    }

    /**
     * Gets the public 'jms_serializer.json_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the public 'jms_serializer.json_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\JsonSerializationVisitor
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.metadata_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer'), 'Symfony\\Bundle\\SecurityBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/config/serializer'), 'Symfony\\Bundle\\TwigBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer'), 'Symfony\\Bundle\\MonologBundle' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\SwiftmailerBundle' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\AsseticBundle' => ($this->targetDirs[3].'/vendor/symfony/assetic-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineBundle' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\MigrationsBundle' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\FrameworkExtraBundle' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/config/serializer'), 'AppBundle' => ($this->targetDirs[3].'/src/AppBundle/Resources/config/serializer'), 'AccountBundle' => ($this->targetDirs[3].'/src/AccountBundle/Resources/config/serializer'), 'PaymentBundle' => ($this->targetDirs[3].'/src/PaymentBundle/Resources/config/serializer'), 'ApiBundle' => ($this->targetDirs[3].'/src/ApiBundle/Resources/config/serializer'), 'FOS\\UserBundle' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/serializer'), 'FOS\\RestBundle' => ($this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/config/serializer'), 'JMS\\SerializerBundle' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/config/serializer'), 'FOS\\OAuthServerBundle' => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\DebugBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/config/serializer'), 'Symfony\\Bundle\\WebProfilerBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/config/serializer'), 'Sensio\\Bundle\\DistributionBundle' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/config/serializer'), 'Sensio\\Bundle\\GeneratorBundle' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle/Sensio/Bundle/GeneratorBundle/Resources/config/serializer')));

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }

    /**
     * Gets the public 'jms_serializer.naming_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /**
     * Gets the public 'jms_serializer.object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor($this->get('doctrine'), $this->get('jms_serializer.unserialize_object_constructor'), 'null');
    }

    /**
     * Gets the public 'jms_serializer.php_collection_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\PhpCollectionHandler
     */
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }

    /**
     * Gets the public 'jms_serializer.serialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_SerializationContextFactoryService()
    {
        return $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.stopwatch_subscriber' shared service.
     *
     * @return \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber
     */
    protected function getJmsSerializer_StopwatchSubscriberService()
    {
        return $this->services['jms_serializer.stopwatch_subscriber'] = new \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber($this->get('debug.stopwatch'));
    }

    /**
     * Gets the public 'jms_serializer.templating.helper.serializer' shared service.
     *
     * @return \JMS\SerializerBundle\Templating\SerializerHelper
     */
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }

    /**
     * Gets the public 'jms_serializer.xml_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\XmlDeserializationVisitor
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'));

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.xml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\XmlSerializationVisitor
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        $this->services['jms_serializer.xml_serialization_visitor'] = $instance = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));

        $instance->setFormatOutput(true);

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.yaml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\YamlSerializationVisitor
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));
    }

    /**
     * Gets the public 'kernel' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.debug' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the public 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the public 'monolog.logger.assetic' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.templating' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the public 'payment.payment_manager' shared service.
     *
     * @return \PaymentBundle\Manager\PaymentEntityManager
     */
    protected function getPayment_PaymentManagerService()
    {
        return $this->services['payment.payment_manager'] = new \PaymentBundle\Manager\PaymentEntityManager($this->get('payment.payment_repository'), $this->get('account.account_repository'));
    }

    /**
     * Gets the public 'payment.payment_repository' shared service.
     *
     * @return \PaymentBundle\Entity\PaymentEntityRepository
     */
    protected function getPayment_PaymentRepositoryService()
    {
        return $this->services['payment.payment_repository'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('PaymentBundle:PaymentEntity');
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $d->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler'), '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Bundle\FrameworkBundle\DataCollector\AjaxDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy')));
        $instance->add($this->get('data_collector.dump'));

        return $instance;
    }

    /**
     * Gets the public 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false, $this->get('request_stack'));
    }

    /**
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the public 'request' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, (__DIR__.'/assetic/routing.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'yaml'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager'), array()));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($a, $this->get('fos_rest.routing.loader.processor')));
        $d->addLoader($this->get('fos_rest.routing.loader.controller'));
        $d->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $d->addLoader($this->get('fos_rest.routing.loader.xml_collection'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the public 'security.context' shared service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), $this->get('security.csrf.token_storage'), $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /**
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.oauth_token' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/token'), 'security.firewall.map.context.oauth_authorize' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/auth'), 'security.firewall.map.context.api' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/api'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the public 'security.firewall.map.context.api' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_ApiService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('fos_oauth_server.server');

        return $this->services['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \FOS\OAuthServerBundle\Security\Firewall\OAuthListener($a, $this->get('security.authentication.manager'), $b), 2 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $this->get('security.http_utils'), 'api', new \FOS\OAuthServerBundle\Security\EntryPoint\OAuthEntryPoint($b), NULL, NULL, $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE), true), NULL);
    }

    /**
     * Gets the public 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, NULL);
    }

    /**
     * Gets the public 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.http_utils');
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');

        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($d, array());
        $g->setOptions(array('always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $g->setProviderKey('main');

        $h = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $d, array(), $b);
        $h->setOptions(array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        $i = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $d, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($d, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $i->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler($this->get('security.csrf.token_storage')));
        $i->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('fos_user.user_provider.username')), 'main', $b, $c), 2 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $f, $this->get('security.authentication.session_strategy'), $d, 'main', $g, $h, array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $b, $c, $this->get('security.csrf.token_manager')), 3 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '5f0b6f3ab90016.89543246', $b, $f), 4 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $d, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $d, '/login', false), NULL, NULL, $b, false), $i);
    }

    /**
     * Gets the public 'security.firewall.map.context.oauth_authorize' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_OauthAuthorizeService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area');

        return $this->services['security.firewall.map.context.oauth_authorize'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('fos_user.user_provider.username')), 'oauth_authorize', $b, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 2 => new \Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener($a, $this->get('security.authentication.manager'), 'oauth_authorize', $c, $b), 3 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $this->get('security.http_utils'), 'oauth_authorize', $c, NULL, NULL, $b, false), NULL);
    }

    /**
     * Gets the public 'security.firewall.map.context.oauth_token' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_OauthTokenService()
    {
        return $this->services['security.firewall.map.context.oauth_token'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, NULL);
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the public 'security.secure_random' shared service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom();
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the public 'sensio_distribution.security_checker' shared service.
     *
     * @return \SensioLabs\Security\SecurityChecker
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the public 'sensio_distribution.security_checker.command' shared service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the public 'sensio_distribution.webconfigurator' shared service.
     *
     * @return \Sensio\Bundle\DistributionBundle\Configurator\Configurator
     */
    protected function getSensioDistribution_WebconfiguratorService()
    {
        $this->services['sensio_distribution.webconfigurator'] = $instance = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator($this->targetDirs[2]);

        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\DoctrineStep(), 10);
        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\SecretStep(), 0);

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the public 'service_container' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.spool' shared service.
     *
     * @return \Swift_MemorySpool
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        call_user_func(array(new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the public 'templating.helper.assets' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /**
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /**
     * Gets the public 'templating.helper.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the public 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the public 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the public 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the public 'translation.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the public 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the public 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the public 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the public 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the public 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the public 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the public 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the public 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the public 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the public 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator($this->get('translator.selector'));
    }

    /**
     * Gets the public 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        return $this->services['translator.default'] = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, $this->get('translator.selector'), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true), array());
    }

    /**
     * Gets the public 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');
        $c = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('fragment.handler');

        $e = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, $c);

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($b);
        }
        $f->setContainer($this);

        $this->services['twig'] = $instance = new \Twig\Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $e));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($d));
        $instance->addExtension($e);
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner')));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $f);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), true);
    }

    /**
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/src/AccountBundle/Resources/views'), 'Account');
        $instance->addPath(($this->targetDirs[3].'/src/PaymentBundle/Resources/views'), 'Payment');
        $instance->addPath(($this->targetDirs[3].'/src/ApiBundle/Resources/views'), 'Api');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/views'), 'FOSOAuthServer');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views'), 'SensioDistribution');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the public 'validator.account' shared service.
     *
     * @return \AccountBundle\Validator\Constraints\AccountValidator
     */
    protected function getValidator_AccountService()
    {
        return $this->services['validator.account'] = new \AccountBundle\Validator\Constraints\AccountValidator($this->get('account.account_repository'));
    }

    /**
     * Gets the public 'validator.amount' shared service.
     *
     * @return \AccountBundle\Validator\Constraints\AmountValidator
     */
    protected function getValidator_AmountService()
    {
        return $this->services['validator.amount'] = new \AccountBundle\Validator\Constraints\AmountValidator();
    }

    /**
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique', 'account' => 'validator.account', 'AccountBundle\\Validator\\Constraints\\AccountValidator' => 'validator.account', 'amount' => 'validator.amount', 'AccountBundle\\Validator\\Constraints\\AmountValidator' => 'validator.amount')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/config/validation.xml')));
        $instance->addYamlMappings(array(0 => ($this->targetDirs[3].'/src/PaymentBundle/Resources/config/validation.yml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the public 'var_dumper.cli_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8');
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig')), 'bottom');
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Gets the private 'assetic.asset_factory' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[2].'/../web'), true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /**
     * Gets the private 'fos_oauth_server.entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getFosOauthServer_EntityManagerService()
    {
        return $this->services['fos_oauth_server.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }

    /**
     * Gets the private 'fos_rest.request_matcher.0dfc4cce134bee15f08405cb5cea4845b13ff7d8c8f779004218432a2c552bd0cd9f9d27' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getFosRest_RequestMatcher_0dfc4cce134bee15f08405cb5cea4845b13ff7d8c8f779004218432a2c552bd0cd9f9d27Service()
    {
        return $this->services['fos_rest.request_matcher.0dfc4cce134bee15f08405cb5cea4845b13ff7d8c8f779004218432a2c552bd0cd9f9d27'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/', NULL, NULL);
    }

    /**
     * Gets the private 'fos_rest.request_matcher.50d7031fd332f324b33953b2158cded5b34cf57c3cd709fdaa24d6818252fd77ab4624ee' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getFosRest_RequestMatcher_50d7031fd332f324b33953b2158cded5b34cf57c3cd709fdaa24d6818252fd77ab4624eeService()
    {
        return $this->services['fos_rest.request_matcher.50d7031fd332f324b33953b2158cded5b34cf57c3cd709fdaa24d6818252fd77ab4624ee'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/_profiler|_wdt/', NULL, NULL);
    }

    /**
     * Gets the private 'fos_rest.request_matcher.8615024800e4193600fd69885f7587200427156c3f94286d4b2ddc9c87897c17c762ebe2' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getFosRest_RequestMatcher_8615024800e4193600fd69885f7587200427156c3f94286d4b2ddc9c87897c17c762ebe2Service()
    {
        return $this->services['fos_rest.request_matcher.8615024800e4193600fd69885f7587200427156c3f94286d4b2ddc9c87897c17c762ebe2'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api', NULL, NULL);
    }

    /**
     * Gets the private 'fos_user.user_provider.username' shared service.
     *
     * @return \FOS\UserBundle\Security\UserProvider
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the private 'jms_serializer.unserialize_object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');
        $b = $this->get('security.role_hierarchy');

        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($b), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $b)), 'affirmative', false, true);
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.token_storage'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('fos_user.user_provider.username');
        $b = $this->get('security.user_checker');
        $c = $this->get('security.encoder_factory');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'oauth_authorize', $c, true), 1 => new \FOS\OAuthServerBundle\Security\Authentication\Provider\OAuthProvider($a, $this->get('fos_oauth_server.server'), $b), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $c, true), 3 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5f0b6f3ab90016.89543246')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.session_strategy' shared service.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->services['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session'));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i');
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }

    /**
     * Gets the private 'security.user_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the private 'translator.selector' shared service.
     *
     * @return \Symfony\Component\Translation\MessageSelector
     */
    protected function getTranslator_SelectorService()
    {
        return $this->services['translator.selector'] = new \Symfony\Component\Translation\MessageSelector();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'AccountBundle' => 'AccountBundle\\AccountBundle',
                'PaymentBundle' => 'PaymentBundle\\PaymentBundle',
                'ApiBundle' => 'ApiBundle\\ApiBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\FOSOAuthServerBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'AsseticBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/assetic-bundle'),
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
                'AccountBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AccountBundle'),
                    'namespace' => 'AccountBundle',
                ),
                'PaymentBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/PaymentBundle'),
                    'namespace' => 'PaymentBundle',
                ),
                'ApiBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/ApiBundle'),
                    'namespace' => 'ApiBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/FOS/UserBundle'),
                    'namespace' => 'FOS\\UserBundle',
                ),
                'FOSRestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'JMSSerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle/JMS/SerializerBundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'FOSOAuthServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle'),
                    'namespace' => 'FOS\\OAuthServerBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle/Sensio/Bundle/GeneratorBundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'restish',
            'database_user' => 'root',
            'database_password' => 1234,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'locale' => 'en',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => (__DIR__.'/assetic/routing.yml'),
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'twig.class' => 'Twig\\Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig\\Loader\\ChainLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(

            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[2].'/../web'),
            'assetic.write_to' => ($this->targetDirs[2].'/../web'),
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => ($this->targetDirs[2].'/DoctrineMigrations'),
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'ApiBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'fos_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_rest.serializer.exclusion_strategy.version' => '',
            'fos_rest.serializer.exclusion_strategy.groups' => array(

            ),
            'fos_rest.view_handler.jsonp.callback_param' => '',
            'fos_rest.view.exception_wrapper_handler' => 'FOS\\RestBundle\\View\\ExceptionWrapperHandler',
            'fos_rest.view_handler.default.class' => 'FOS\\RestBundle\\View\\ViewHandler',
            'fos_rest.view_handler.jsonp.class' => 'FOS\\RestBundle\\View\\JsonpHandler',
            'fos_rest.serializer.exception_wrapper_serialize_handler.class' => 'FOS\\RestBundle\\Serializer\\ExceptionWrapperSerializeHandler',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\RestBundle\\Negotiation\\FormatNegotiator',
            'fos_rest.inflector.class' => 'FOS\\RestBundle\\Inflector\\DoctrineInflector',
            'fos_rest.request_matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'fos_rest.violation_formatter.class' => 'FOS\\RestBundle\\Util\\ViolationFormatter',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.cache_dir' => (__DIR__.'/fos_rest'),
            'fos_rest.routing.loader.default_format' => NULL,
            'fos_rest.routing.loader.include_format' => false,
            'fos_rest.serializer.serialize_null' => false,
            'fos_rest.exception.codes' => array(

            ),
            'fos_rest.exception.messages' => array(

            ),
            'fos_rest.converter.request_body.validation_errors_argument' => 'validationErrors',
            'fos_rest.mime_types' => array(

            ),
            'fos_rest.view_response_listener.class' => 'FOS\\RestBundle\\EventListener\\ViewResponseListener',
            'fos_rest.view_response_listener.force_view' => true,
            'fos_rest.formats' => array(
                'json' => false,
                'xml' => false,
                'html' => true,
            ),
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.empty_content' => 204,
            'fos_rest.serialize_null' => false,
            'fos_rest.default_engine' => 'twig',
            'fos_rest.normalizer.camel_keys.class' => 'FOS\\RestBundle\\Normalizer\\CamelKeysNormalizer',
            'fos_rest.decoder.json.class' => 'FOS\\RestBundle\\Decoder\\JsonDecoder',
            'fos_rest.decoder.jsontoform.class' => 'FOS\\RestBundle\\Decoder\\JsonToFormDecoder',
            'fos_rest.decoder.xml.class' => 'FOS\\RestBundle\\Decoder\\XmlDecoder',
            'fos_rest.decoder_provider.class' => 'FOS\\RestBundle\\Decoder\\ContainerDecoderProvider',
            'fos_rest.body_listener.class' => 'FOS\\RestBundle\\EventListener\\BodyListener',
            'fos_rest.throw_exception_on_unsupported_content_type' => false,
            'fos_rest.body_default_format' => NULL,
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
                'xml' => 'fos_rest.decoder.xml',
            ),
            'fos_rest.format_listener.class' => 'FOS\\RestBundle\\EventListener\\FormatListener',
            'fos_rest.version_listener.class' => 'FOS\\RestBundle\\EventListener\\VersionListener',
            'fos_rest.format_listener.rules' => array(
                0 => array(
                    'path' => '^/api',
                    'priorities' => array(
                        0 => 'json',
                    ),
                    'fallback_format' => 'json',
                    'prefer_extension' => true,
                    'host' => NULL,
                    'methods' => NULL,
                    'stop' => false,
                    'exception_fallback_format' => 'json',
                ),
                1 => array(
                    'path' => '^/',
                    'priorities' => array(
                        0 => 'html',
                    ),
                    'fallback_format' => 'html',
                    'prefer_extension' => true,
                    'host' => NULL,
                    'methods' => NULL,
                    'stop' => false,
                    'exception_fallback_format' => 'html',
                ),
            ),
            'fos_rest.param_fetcher_listener.class' => 'FOS\\RestBundle\\EventListener\\ParamFetcherListener',
            'fos_rest.param_fetcher_listener.set_params_as_attributes' => false,
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.xml_serialization_visitor.format_output' => true,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'fos_oauth_server.server.class' => 'OAuth2\\OAuth2',
            'fos_oauth_server.security.authentication.provider.class' => 'FOS\\OAuthServerBundle\\Security\\Authentication\\Provider\\OAuthProvider',
            'fos_oauth_server.security.authentication.listener.class' => 'FOS\\OAuthServerBundle\\Security\\Firewall\\OAuthListener',
            'fos_oauth_server.security.entry_point.class' => 'FOS\\OAuthServerBundle\\Security\\EntryPoint\\OAuthEntryPoint',
            'fos_oauth_server.server.options' => array(

            ),
            'fos_oauth_server.model_manager_name' => NULL,
            'fos_oauth_server.model.client.class' => 'ApiBundle\\Entity\\Client',
            'fos_oauth_server.model.access_token.class' => 'ApiBundle\\Entity\\AccessToken',
            'fos_oauth_server.model.refresh_token.class' => 'ApiBundle\\Entity\\RefreshToken',
            'fos_oauth_server.model.auth_code.class' => 'ApiBundle\\Entity\\AuthCode',
            'fos_oauth_server.template.engine' => 'twig',
            'fos_oauth_server.authorize.form.type' => 'fos_oauth_server_authorize',
            'fos_oauth_server.authorize.form.name' => 'fos_oauth_server_authorize_form',
            'fos_oauth_server.authorize.form.validation_groups' => array(
                0 => 'Authorize',
                1 => 'Default',
            ),
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'twig.extension.webprofiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'sensio_distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'sensio_distribution.webconfigurator.doctrine_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\DoctrineStep',
            'sensio_distribution.webconfigurator.secret_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\SecretStep',
            'sensio_distribution.security_checker.class' => 'SensioLabs\\Security\\SecurityChecker',
            'sensio_distribution.security_checker.command.class' => 'SensioLabs\\Security\\Command\\SecurityCheckerCommand',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'doctrine_cache.contains_command',
                1 => 'doctrine_cache.delete_command',
                2 => 'doctrine_cache.flush_command',
                3 => 'doctrine_cache.stats_command',
                4 => 'doctrine.database_create_command',
                5 => 'doctrine.database_drop_command',
                6 => 'doctrine.generate_entities_command',
                7 => 'doctrine.query_sql_command',
                8 => 'doctrine.cache_clear_metadata_command',
                9 => 'doctrine.cache_clear_query_cache_command',
                10 => 'doctrine.cache_clear_result_command',
                11 => 'doctrine.cache_collection_region_command',
                12 => 'doctrine.mapping_convert_command',
                13 => 'doctrine.schema_create_command',
                14 => 'doctrine.schema_drop_command',
                15 => 'doctrine.ensure_production_settings_command',
                16 => 'doctrine.clear_entity_region_command',
                17 => 'doctrine.database_import_command',
                18 => 'doctrine.mapping_info_command',
                19 => 'doctrine.clear_query_region_command',
                20 => 'doctrine.query_dql_command',
                21 => 'doctrine.schema_update_command',
                22 => 'doctrine.schema_validate_command',
                23 => 'doctrine.mapping_import_command',
                24 => 'doctrine_migrations.diff_command',
                25 => 'doctrine_migrations.execute_command',
                26 => 'doctrine_migrations.generate_command',
                27 => 'doctrine_migrations.latest_command',
                28 => 'doctrine_migrations.migrate_command',
                29 => 'doctrine_migrations.status_command',
                30 => 'doctrine_migrations.version_command',
                31 => 'sensio_distribution.security_checker.command',
            ),
        );
    }
}

class DoctrineORMEntityManager_0000000024be3ac8000000003f7e1eab8dcdc572960b2d02d38cd9c05f173664 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder9b545 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer891b1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbc6b5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getConnection', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getMetadataFactory', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getExpressionBuilder', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'beginTransaction', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->beginTransaction();
    }

    public function transactional($func)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'transactional', array('func' => $func), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->transactional($func);
    }

    public function commit()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'commit', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->commit();
    }

    public function rollback()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'rollback', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getClassMetadata', array('className' => $className), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'createQuery', array('dql' => $dql), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'createNamedQuery', array('name' => $name), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'createQueryBuilder', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'flush', array('entity' => $entity), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->flush($entity);
    }

    public function find($entityName, $id, $lockMode = 0, $lockVersion = null)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'clear', array('entityName' => $entityName), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->clear($entityName);
    }

    public function close()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'close', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->close();
    }

    public function persist($entity)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'persist', array('entity' => $entity), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'remove', array('entity' => $entity), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'refresh', array('entity' => $entity), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'detach', array('entity' => $entity), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'merge', array('entity' => $entity), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getRepository', array('entityName' => $entityName), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'contains', array('entity' => $entity), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getEventManager', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getConfiguration', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'isOpen', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getUnitOfWork', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getProxyFactory', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'initializeObject', array('obj' => $obj), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'getFilters', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'isFiltersStateClean', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'hasFilters', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer891b1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9b545) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9b545 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9b545->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__get', ['name' => $name], $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        if (isset(self::$publicPropertiesbc6b5[$name])) {
            return $this->valueHolder9b545->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b545;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder9b545;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b545;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder9b545;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__isset', array('name' => $name), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b545;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9b545;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__unset', array('name' => $name), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b545;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9b545;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__clone', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        $this->valueHolder9b545 = clone $this->valueHolder9b545;
    }

    public function __sleep()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__sleep', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return array('valueHolder9b545');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer891b1 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer891b1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'initializeProxy', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9b545;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder9b545;
    }


}

class FOSRestBundleSerializerJMSSerializerAdapter_0000000024be373b000000003f7e1eab8dcdc572960b2d02d38cd9c05f173664 extends \FOS\RestBundle\Serializer\JMSSerializerAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder9b545 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer891b1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbc6b5 = [
        
    ];

    public function serialize($data, $format, $context = null)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'serialize', array('data' => $data, 'format' => $format, 'context' => $context), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->serialize($data, $format, $context);
    }

    public function deserialize($data, $type, $format, $context = null)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'deserialize', array('data' => $data, 'type' => $type, 'format' => $format, 'context' => $context), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return $this->valueHolder9b545->deserialize($data, $type, $format, $context);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer);
        }, $instance, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($instance);

        $instance->initializer891b1 = $initializer;

        return $instance;
    }

    public function __construct(\JMS\Serializer\SerializerInterface $serializer)
    {
        static $reflection;

        if (! $this->valueHolder9b545) {
            $reflection = $reflection ?: new \ReflectionClass('FOS\\RestBundle\\Serializer\\JMSSerializerAdapter');
            $this->valueHolder9b545 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);

        }

        $this->valueHolder9b545->__construct($serializer);
    }

    public function & __get($name)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__get', ['name' => $name], $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        if (isset(self::$publicPropertiesbc6b5[$name])) {
            return $this->valueHolder9b545->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b545;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder9b545;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b545;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder9b545;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__isset', array('name' => $name), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b545;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9b545;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__unset', array('name' => $name), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b545;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9b545;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__clone', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        $this->valueHolder9b545 = clone $this->valueHolder9b545;
    }

    public function __sleep()
    {
        $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, '__sleep', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;

        return array('valueHolder9b545');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\FOS\RestBundle\Serializer\JMSSerializerAdapter $instance) {
            unset($instance->serializer);
        }, $this, 'FOS\\RestBundle\\Serializer\\JMSSerializerAdapter')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer891b1 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer891b1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer891b1 && ($this->initializer891b1->__invoke($valueHolder9b545, $this, 'initializeProxy', array(), $this->initializer891b1) || 1) && $this->valueHolder9b545 = $valueHolder9b545;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9b545;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder9b545;
    }


}
