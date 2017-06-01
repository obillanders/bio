<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'admin.category' => 'getAdmin_CategoryService',
            'admin.faq' => 'getAdmin_FaqService',
            'admin.news' => 'getAdmin_NewsService',
            'admin.pharmacien' => 'getAdmin_PharmacienService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'app.api' => 'getApp_ApiService',
            'app.csv_encoder' => 'getApp_CsvEncoderService',
            'app.exception.api_listener' => 'getApp_Exception_ApiListenerService',
            'app.form.registration' => 'getApp_Form_RegistrationService',
            'app.form.resetting' => 'getApp_Form_ResettingService',
            'app.import_csv_handler' => 'getApp_ImportCsvHandlerService',
            'app.import_manager' => 'getApp_ImportManagerService',
            'app.mail.listener' => 'getApp_Mail_ListenerService',
            'app.mailer' => 'getApp_MailerService',
            'app.manager.contrat' => 'getApp_Manager_ContratService',
            'app.manager.import_log' => 'getApp_Manager_ImportLogService',
            'app.manager.news' => 'getApp_Manager_NewsService',
            'app.manager.officine' => 'getApp_Manager_OfficineService',
            'app.manager.officine_pharmacien' => 'getApp_Manager_OfficinePharmacienService',
            'app.manager.pharmacien' => 'getApp_Manager_PharmacienService',
            'app.manager.rdi' => 'getApp_Manager_RdiService',
            'app.manager.user' => 'getApp_Manager_UserService',
            'app.manager_locator' => 'getApp_ManagerLocatorService',
            'app.manager_tools' => 'getApp_ManagerToolsService',
            'app.menu_builder' => 'getApp_MenuBuilderService',
            'app.officine_selector' => 'getApp_OfficineSelectorService',
            'app.rdi_api_handler' => 'getApp_RdiApiHandlerService',
            'app.rdi_mail_handler' => 'getApp_RdiMailHandlerService',
            'app.result_factory' => 'getApp_ResultFactoryService',
            'app.success_handler' => 'getApp_SuccessHandlerService',
            'app.twig_extension.officine_selector' => 'getApp_TwigExtension_OfficineSelectorService',
            'app.user.listener' => 'getApp_User_ListenerService',
            'app.user.password_helper' => 'getApp_User_PasswordHelperService',
            'app.util.inflector.noop' => 'getApp_Util_Inflector_NoopService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'ewz_recaptcha.form.type' => 'getEwzRecaptcha_Form_TypeService',
            'ewz_recaptcha.validator.true' => 'getEwzRecaptcha_Validator_TrueService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.extension' => 'getForm_ExtensionService',
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
            'form.type.range' => 'getForm_Type_RangeService',
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
            'fos_rest.allowed_methods_listener' => 'getFosRest_AllowedMethodsListenerService',
            'fos_rest.allowed_methods_loader' => 'getFosRest_AllowedMethodsLoaderService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.exception.codes_map' => 'getFosRest_Exception_CodesMapService',
            'fos_rest.exception.controller' => 'getFosRest_Exception_ControllerService',
            'fos_rest.exception.twig_controller' => 'getFosRest_Exception_TwigControllerService',
            'fos_rest.exception_listener' => 'getFosRest_ExceptionListenerService',
            'fos_rest.format_listener' => 'getFosRest_FormatListenerService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.mime_type_listener' => 'getFosRest_MimeTypeListenerService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService',
            'fos_rest.param_fetcher_listener' => 'getFosRest_ParamFetcherListenerService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.serializer' => 'getFosRest_SerializerService',
            'fos_rest.serializer.exception_normalizer.jms' => 'getFosRest_Serializer_ExceptionNormalizer_JmsService',
            'fos_rest.serializer.jms_handler_registry' => 'getFosRest_Serializer_JmsHandlerRegistryService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_rest.view_response_listener' => 'getFosRest_ViewResponseListenerService',
            'fos_rest.zone_matcher_listener' => 'getFosRest_ZoneMatcherListenerService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_provider.username_email' => 'getFosUser_UserProvider_UsernameEmailService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'guzzle.client.api_biogaran_rdi' => 'getGuzzle_Client_ApiBiogaranRdiService',
            'guzzle_bundle.formatter' => 'getGuzzleBundle_FormatterService',
            'guzzle_bundle.logger' => 'getGuzzleBundle_LoggerService',
            'guzzle_bundle.middleware.event_dispatch.api_biogaran_rdi' => 'getGuzzleBundle_Middleware_EventDispatch_ApiBiogaranRdiService',
            'guzzle_bundle.middleware.log.api_biogaran_rdi' => 'getGuzzleBundle_Middleware_Log_ApiBiogaranRdiService',
            'hautelook_alice.alice.fixtures.loader' => 'getHautelookAlice_Alice_Fixtures_LoaderService',
            'hautelook_alice.alice.processor_chain' => 'getHautelookAlice_Alice_ProcessorChainService',
            'hautelook_alice.bundle_resolver' => 'getHautelookAlice_BundleResolverService',
            'hautelook_alice.doctrine.command.deprecated_load_command' => 'getHautelookAlice_Doctrine_Command_DeprecatedLoadCommandService',
            'hautelook_alice.doctrine.command.load_command' => 'getHautelookAlice_Doctrine_Command_LoadCommandService',
            'hautelook_alice.doctrine.command_factory' => 'getHautelookAlice_Doctrine_CommandFactoryService',
            'hautelook_alice.doctrine.executor.fixtures_executor' => 'getHautelookAlice_Doctrine_Executor_FixturesExecutorService',
            'hautelook_alice.doctrine.orm.fixtures_finder' => 'getHautelookAlice_Doctrine_Orm_FixturesFinderService',
            'hautelook_alice.doctrine.orm.loader_generator' => 'getHautelookAlice_Doctrine_Orm_LoaderGeneratorService',
            'hautelook_alice.faker' => 'getHautelookAlice_FakerService',
            'hautelook_alice.faker.provider_chain' => 'getHautelookAlice_Faker_ProviderChainService',
            'hautelook_alice.fixtures.loader' => 'getHautelookAlice_Fixtures_LoaderService',
            'http_kernel' => 'getHttpKernelService',
            'ivory_ck_editor.config_manager' => 'getIvoryCkEditor_ConfigManagerService',
            'ivory_ck_editor.form.type' => 'getIvoryCkEditor_Form_TypeService',
            'ivory_ck_editor.plugin_manager' => 'getIvoryCkEditor_PluginManagerService',
            'ivory_ck_editor.renderer' => 'getIvoryCkEditor_RendererService',
            'ivory_ck_editor.renderer.json_builder' => 'getIvoryCkEditor_Renderer_JsonBuilderService',
            'ivory_ck_editor.styles_set_manager' => 'getIvoryCkEditor_StylesSetManagerService',
            'ivory_ck_editor.template_manager' => 'getIvoryCkEditor_TemplateManagerService',
            'ivory_ck_editor.toolbar_manager' => 'getIvoryCkEditor_ToolbarManagerService',
            'ivory_ck_editor.twig_extension' => 'getIvoryCkEditor_TwigExtensionService',
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
            'jms_serializer.metadata_factory' => 'getJmsSerializer_MetadataFactoryService',
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
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'lexik_maintenance.driver.factory' => 'getLexikMaintenance_Driver_FactoryService',
            'lexik_maintenance.listener' => 'getLexikMaintenance_ListenerService',
            'liip_functional_test.exception_listener' => 'getLiipFunctionalTest_ExceptionListenerService',
            'liip_functional_test.query.counter' => 'getLiipFunctionalTest_Query_CounterService',
            'liip_functional_test.validator' => 'getLiipFunctionalTest_ValidatorService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'markdown.parser' => 'getMarkdown_ParserService',
            'markdown.parser.parser_manager' => 'getMarkdown_Parser_ParserManagerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.app_main_log' => 'getMonolog_Handler_AppMainLogService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.import' => 'getMonolog_Logger_ImportService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'nelmio_api_doc.doc_comment_extractor' => 'getNelmioApiDoc_DocCommentExtractorService',
            'nelmio_api_doc.event_listener.request' => 'getNelmioApiDoc_EventListener_RequestService',
            'nelmio_api_doc.extractor.api_doc_extractor' => 'getNelmioApiDoc_Extractor_ApiDocExtractorService',
            'nelmio_api_doc.form.extension.description_form_type_extension' => 'getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService',
            'nelmio_api_doc.formatter.html_formatter' => 'getNelmioApiDoc_Formatter_HtmlFormatterService',
            'nelmio_api_doc.formatter.markdown_formatter' => 'getNelmioApiDoc_Formatter_MarkdownFormatterService',
            'nelmio_api_doc.formatter.simple_formatter' => 'getNelmioApiDoc_Formatter_SimpleFormatterService',
            'nelmio_api_doc.formatter.swagger_formatter' => 'getNelmioApiDoc_Formatter_SwaggerFormatterService',
            'nelmio_api_doc.parser.collection_parser' => 'getNelmioApiDoc_Parser_CollectionParserService',
            'nelmio_api_doc.parser.form_errors_parser' => 'getNelmioApiDoc_Parser_FormErrorsParserService',
            'nelmio_api_doc.parser.form_type_parser' => 'getNelmioApiDoc_Parser_FormTypeParserService',
            'nelmio_api_doc.parser.jms_metadata_parser' => 'getNelmioApiDoc_Parser_JmsMetadataParserService',
            'nelmio_api_doc.parser.json_serializable_parser' => 'getNelmioApiDoc_Parser_JsonSerializableParserService',
            'nelmio_api_doc.parser.validation_parser' => 'getNelmioApiDoc_Parser_ValidationParserService',
            'nelmio_api_doc.twig.extension.extra_markdown' => 'getNelmioApiDoc_Twig_Extension_ExtraMarkdownService',
            'officine_serializer_handler' => 'getOfficineSerializerHandlerService',
            'pharmacien_serializer_handler' => 'getPharmacienSerializerHandlerService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'serializer.mapping.cache.symfony' => 'getSerializer_Mapping_Cache_SymfonyService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.block.stats' => 'getSonata_Admin_Block_StatsService',
            'sonata.admin.breadcrumbs_builder' => 'getSonata_Admin_BreadcrumbsBuilderService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.choice' => 'getSonata_Admin_Form_Extension_ChoiceService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService',
            'sonata.admin.menu.matcher.voter.active' => 'getSonata_Admin_Menu_Matcher_Voter_ActiveService',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService',
            'sonata.admin.menu.matcher.voter.children' => 'getSonata_Admin_Menu_Matcher_Voter_ChildrenService',
            'sonata.admin.menu_builder' => 'getSonata_Admin_MenuBuilderService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.model_autocomplete' => 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService',
            'sonata.admin.sidebar_menu' => 'getSonata_Admin_SidebarMenuService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.form.type.container_template' => 'getSonata_Block_Form_Type_ContainerTemplateService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.classification.admin.category' => 'getSonata_Classification_Admin_CategoryService',
            'sonata.classification.admin.collection' => 'getSonata_Classification_Admin_CollectionService',
            'sonata.classification.admin.context' => 'getSonata_Classification_Admin_ContextService',
            'sonata.classification.admin.tag' => 'getSonata_Classification_Admin_TagService',
            'sonata.classification.api.form.type.category' => 'getSonata_Classification_Api_Form_Type_CategoryService',
            'sonata.classification.api.form.type.collection' => 'getSonata_Classification_Api_Form_Type_CollectionService',
            'sonata.classification.api.form.type.context' => 'getSonata_Classification_Api_Form_Type_ContextService',
            'sonata.classification.api.form.type.tag' => 'getSonata_Classification_Api_Form_Type_TagService',
            'sonata.classification.controller.api.category' => 'getSonata_Classification_Controller_Api_CategoryService',
            'sonata.classification.controller.api.collection' => 'getSonata_Classification_Controller_Api_CollectionService',
            'sonata.classification.controller.api.context' => 'getSonata_Classification_Controller_Api_ContextService',
            'sonata.classification.controller.api.tag' => 'getSonata_Classification_Controller_Api_TagService',
            'sonata.classification.form.type.category_selector' => 'getSonata_Classification_Form_Type_CategorySelectorService',
            'sonata.classification.manager.category' => 'getSonata_Classification_Manager_CategoryService',
            'sonata.classification.manager.collection' => 'getSonata_Classification_Manager_CollectionService',
            'sonata.classification.manager.context' => 'getSonata_Classification_Manager_ContextService',
            'sonata.classification.manager.tag' => 'getSonata_Classification_Manager_TagService',
            'sonata.classification.serializer.handler.category' => 'getSonata_Classification_Serializer_Handler_CategoryService',
            'sonata.classification.serializer.handler.collection' => 'getSonata_Classification_Serializer_Handler_CollectionService',
            'sonata.classification.serializer.handler.context' => 'getSonata_Classification_Serializer_Handler_ContextService',
            'sonata.classification.serializer.handler.tag' => 'getSonata_Classification_Serializer_Handler_TagService',
            'sonata.core.date.moment_format_converter' => 'getSonata_Core_Date_MomentFormatConverterService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.extension.wrapping' => 'getSonata_Core_Twig_Extension_WrappingService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.core.validator.inline' => 'getSonata_Core_Validator_InlineService',
            'sonata.easy_extends.doctrine.mapper' => 'getSonata_EasyExtends_Doctrine_MapperService',
            'sonata.easy_extends.generator.bundle' => 'getSonata_EasyExtends_Generator_BundleService',
            'sonata.easy_extends.generator.odm' => 'getSonata_EasyExtends_Generator_OdmService',
            'sonata.easy_extends.generator.orm' => 'getSonata_EasyExtends_Generator_OrmService',
            'sonata.easy_extends.generator.phpcr' => 'getSonata_EasyExtends_Generator_PhpcrService',
            'sonata.easy_extends.generator.serializer' => 'getSonata_EasyExtends_Generator_SerializerService',
            'sonata.formatter.block.formatter' => 'getSonata_Formatter_Block_FormatterService',
            'sonata.formatter.ckeditor.extension' => 'getSonata_Formatter_Ckeditor_ExtensionService',
            'sonata.formatter.form.type.selector' => 'getSonata_Formatter_Form_Type_SelectorService',
            'sonata.formatter.form.type.simple' => 'getSonata_Formatter_Form_Type_SimpleService',
            'sonata.formatter.pool' => 'getSonata_Formatter_PoolService',
            'sonata.formatter.text.markdown' => 'getSonata_Formatter_Text_MarkdownService',
            'sonata.formatter.text.raw' => 'getSonata_Formatter_Text_RawService',
            'sonata.formatter.text.text' => 'getSonata_Formatter_Text_TextService',
            'sonata.formatter.text.twigengine' => 'getSonata_Formatter_Text_TwigengineService',
            'sonata.formatter.twig.control_flow' => 'getSonata_Formatter_Twig_ControlFlowService',
            'sonata.formatter.twig.env.richhtml' => 'getSonata_Formatter_Twig_Env_RichhtmlService',
            'sonata.formatter.twig.gist' => 'getSonata_Formatter_Twig_GistService',
            'sonata.formatter.validator.formatter' => 'getSonata_Formatter_Validator_FormatterService',
            'sonata.intl.locale_detector.request_stack' => 'getSonata_Intl_LocaleDetector_RequestStackService',
            'sonata.intl.templating.helper.datetime' => 'getSonata_Intl_Templating_Helper_DatetimeService',
            'sonata.intl.templating.helper.locale' => 'getSonata_Intl_Templating_Helper_LocaleService',
            'sonata.intl.templating.helper.number' => 'getSonata_Intl_Templating_Helper_NumberService',
            'sonata.intl.timezone_detector.chain' => 'getSonata_Intl_TimezoneDetector_ChainService',
            'sonata.intl.timezone_detector.locale' => 'getSonata_Intl_TimezoneDetector_LocaleService',
            'sonata.media.adapter.filesystem.local' => 'getSonata_Media_Adapter_Filesystem_LocalService',
            'sonata.media.adapter.image.gd' => 'getSonata_Media_Adapter_Image_GdService',
            'sonata.media.adapter.image.gmagick' => 'getSonata_Media_Adapter_Image_GmagickService',
            'sonata.media.adapter.image.imagick' => 'getSonata_Media_Adapter_Image_ImagickService',
            'sonata.media.adapter.service.s3' => 'getSonata_Media_Adapter_Service_S3Service',
            'sonata.media.admin.gallery' => 'getSonata_Media_Admin_GalleryService',
            'sonata.media.admin.gallery_has_media' => 'getSonata_Media_Admin_GalleryHasMediaService',
            'sonata.media.admin.media' => 'getSonata_Media_Admin_MediaService',
            'sonata.media.admin.media.manager' => 'getSonata_Media_Admin_Media_ManagerService',
            'sonata.media.api.form.type.doctrine.media' => 'getSonata_Media_Api_Form_Type_Doctrine_MediaService',
            'sonata.media.api.form.type.gallery' => 'getSonata_Media_Api_Form_Type_GalleryService',
            'sonata.media.api.form.type.gallery_has_media' => 'getSonata_Media_Api_Form_Type_GalleryHasMediaService',
            'sonata.media.api.form.type.media' => 'getSonata_Media_Api_Form_Type_MediaService',
            'sonata.media.block.feature_media' => 'getSonata_Media_Block_FeatureMediaService',
            'sonata.media.block.gallery' => 'getSonata_Media_Block_GalleryService',
            'sonata.media.block.gallery_list' => 'getSonata_Media_Block_GalleryListService',
            'sonata.media.block.media' => 'getSonata_Media_Block_MediaService',
            'sonata.media.buzz.browser' => 'getSonata_Media_Buzz_BrowserService',
            'sonata.media.buzz.connector.curl' => 'getSonata_Media_Buzz_Connector_CurlService',
            'sonata.media.buzz.connector.file_get_contents' => 'getSonata_Media_Buzz_Connector_FileGetContentsService',
            'sonata.media.cdn.server' => 'getSonata_Media_Cdn_ServerService',
            'sonata.media.controller.api.gallery' => 'getSonata_Media_Controller_Api_GalleryService',
            'sonata.media.controller.api.media' => 'getSonata_Media_Controller_Api_MediaService',
            'sonata.media.doctrine.event_subscriber' => 'getSonata_Media_Doctrine_EventSubscriberService',
            'sonata.media.filesystem.local' => 'getSonata_Media_Filesystem_LocalService',
            'sonata.media.form.type.media' => 'getSonata_Media_Form_Type_MediaService',
            'sonata.media.formatter.twig' => 'getSonata_Media_Formatter_TwigService',
            'sonata.media.generator.default' => 'getSonata_Media_Generator_DefaultService',
            'sonata.media.manager.category.default' => 'getSonata_Media_Manager_Category_DefaultService',
            'sonata.media.manager.gallery' => 'getSonata_Media_Manager_GalleryService',
            'sonata.media.manager.media' => 'getSonata_Media_Manager_MediaService',
            'sonata.media.metadata.amazon' => 'getSonata_Media_Metadata_AmazonService',
            'sonata.media.metadata.noop' => 'getSonata_Media_Metadata_NoopService',
            'sonata.media.metadata.proxy' => 'getSonata_Media_Metadata_ProxyService',
            'sonata.media.pool' => 'getSonata_Media_PoolService',
            'sonata.media.provider.dailymotion' => 'getSonata_Media_Provider_DailymotionService',
            'sonata.media.provider.file' => 'getSonata_Media_Provider_FileService',
            'sonata.media.provider.image' => 'getSonata_Media_Provider_ImageService',
            'sonata.media.provider.vimeo' => 'getSonata_Media_Provider_VimeoService',
            'sonata.media.provider.youtube' => 'getSonata_Media_Provider_YoutubeService',
            'sonata.media.resizer.simple' => 'getSonata_Media_Resizer_SimpleService',
            'sonata.media.resizer.square' => 'getSonata_Media_Resizer_SquareService',
            'sonata.media.security.connected_strategy' => 'getSonata_Media_Security_ConnectedStrategyService',
            'sonata.media.security.forbidden_strategy' => 'getSonata_Media_Security_ForbiddenStrategyService',
            'sonata.media.security.public_strategy' => 'getSonata_Media_Security_PublicStrategyService',
            'sonata.media.security.session_strategy' => 'getSonata_Media_Security_SessionStrategyService',
            'sonata.media.security.superadmin_strategy' => 'getSonata_Media_Security_SuperadminStrategyService',
            'sonata.media.serializer.handler.gallery' => 'getSonata_Media_Serializer_Handler_GalleryService',
            'sonata.media.serializer.handler.media' => 'getSonata_Media_Serializer_Handler_MediaService',
            'sonata.media.thumbnail.format' => 'getSonata_Media_Thumbnail_FormatService',
            'sonata.media.twig.extension' => 'getSonata_Media_Twig_ExtensionService',
            'sonata.media.twig.global' => 'getSonata_Media_Twig_GlobalService',
            'sonata.media.validator.format' => 'getSonata_Media_Validator_FormatService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
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
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.markdown' => 'getTemplating_Helper_MarkdownService',
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
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->privates = array(
            'annotations.reader' => true,
            'cache.annotations' => true,
            'cache.serializer' => true,
            'controller_name_converter' => true,
            'debug.file_link_formatter' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'form.server_params' => true,
            'fos_rest.allowed_methods_loader' => true,
            'fos_rest.exception.codes_map' => true,
            'fos_rest.request.param_fetcher.reader' => true,
            'fos_rest.serializer.jms_handler_registry' => true,
            'fos_user.user_provider.username_email' => true,
            'fos_user.util.canonical_fields_updater' => true,
            'fos_user.util.password_updater' => true,
            'jms_serializer.metadata_factory' => true,
            'jms_serializer.unserialize_object_constructor' => true,
            'markdown.parser.parser_manager' => true,
            'monolog.processor.psr_log_message' => true,
            'router.request_context' => true,
            'security.authentication.manager' => true,
            'security.authentication.session_strategy' => true,
            'security.authentication.trust_resolver' => true,
            'security.firewall.map' => true,
            'security.logout_url_generator' => true,
            'security.role_hierarchy' => true,
            'security.user_checker' => true,
            'session.storage.metadata_bag' => true,
            'sonata.block.manager' => true,
            'sonata.formatter.twig.env.richhtml' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.locator' => true,
            'validator.validator_factory' => true,
            'web_profiler.csp.handler' => true,
        );
        $this->aliases = array(
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.hautelook_alicebundle_doctrine_command_loaddatafixturescommand' => 'hautelook_alice.doctrine.command.load_command',
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_rest.inflector' => 'app.util.inflector.noop',
            'fos_rest.router' => 'router',
            'fos_rest.templating' => 'templating',
            'fos_user.user_manager' => 'app.manager.user',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'mailer' => 'swiftmailer.mailer.default',
            'serializer' => 'jms_serializer',
            'session.storage' => 'session.storage.native',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'sonata.intl.locale_detector' => 'sonata.intl.locale_detector.request_stack',
            'sonata.intl.timezone_detector' => 'sonata.intl.timezone_detector.chain',
            'sonata.media.adapter.image.default' => 'sonata.media.adapter.image.gd',
            'sonata.media.manager.category' => 'sonata.media.manager.category.default',
            'sonata.media.resizer.default' => 'sonata.media.resizer.simple',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'validator' => 'liip_functional_test.validator',
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
     * Gets the 'admin.category' service.
     *
     * @return \AppBundle\Admin\CategoryAdmin A AppBundle\Admin\CategoryAdmin instance
     */
    protected function getAdmin_CategoryService()
    {
        $instance = new \AppBundle\Admin\CategoryAdmin('admin.category', 'AppBundle\\Entity\\Category', 'SonataAdminBundle:CRUD');

        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setPagerType('default');
        $instance->setLabel('Category');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'admin.faq' service.
     *
     * @return \AppBundle\Admin\FaqAdmin A AppBundle\Admin\FaqAdmin instance
     */
    protected function getAdmin_FaqService()
    {
        $instance = new \AppBundle\Admin\FaqAdmin('admin.faq', 'AppBundle\\Entity\\Faq', 'AppBundle:Admin\\FaqAdmin', 'title');

        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setPagerType('default');
        $instance->setLabel('Faq');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'admin.news' service.
     *
     * @return \AppBundle\Admin\NewsAdmin A AppBundle\Admin\NewsAdmin instance
     */
    protected function getAdmin_NewsService()
    {
        $instance = new \AppBundle\Admin\NewsAdmin('admin.news', 'AppBundle\\Entity\\News', 'SonataAdminBundle:CRUD');

        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setPagerType('default');
        $instance->setLabel('News');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'admin.pharmacien' service.
     *
     * @return \AppBundle\Admin\PharmacienAdmin A AppBundle\Admin\PharmacienAdmin instance
     */
    protected function getAdmin_PharmacienService()
    {
        $instance = new \AppBundle\Admin\PharmacienAdmin('admin.pharmacien', 'AppBundle\\Entity\\Pharmacien', 'SonataAdminBundle:CRUD');

        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setPagerType('default');
        $instance->setLabel('Pharmacien');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), true);
    }

    /**
     * Gets the 'app.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Service\ApiService A AppBundle\Service\ApiService instance
     */
    protected function getApp_ApiService()
    {
        return $this->services['app.api'] = new \AppBundle\Service\ApiService($this->get('app.manager.pharmacien'), $this->get('app.manager.user'), $this->get('app.manager.rdi'));
    }

    /**
     * Gets the 'app.csv_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Import\CustomCsvEncoder A AppBundle\Import\CustomCsvEncoder instance
     */
    protected function getApp_CsvEncoderService()
    {
        return $this->services['app.csv_encoder'] = new \AppBundle\Import\CustomCsvEncoder();
    }

    /**
     * Gets the 'app.exception.api_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\EventListener\ApiExceptionListener A AppBundle\EventListener\ApiExceptionListener instance
     */
    protected function getApp_Exception_ApiListenerService()
    {
        return $this->services['app.exception.api_listener'] = new \AppBundle\EventListener\ApiExceptionListener();
    }

    /**
     * Gets the 'app.form.registration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Form\RegistrationType A AppBundle\Form\RegistrationType instance
     */
    protected function getApp_Form_RegistrationService()
    {
        return $this->services['app.form.registration'] = new \AppBundle\Form\RegistrationType();
    }

    /**
     * Gets the 'app.form.resetting' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Form\RegistrationType A AppBundle\Form\RegistrationType instance
     */
    protected function getApp_Form_ResettingService()
    {
        return $this->services['app.form.resetting'] = new \AppBundle\Form\RegistrationType();
    }

    /**
     * Gets the 'app.import_csv_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Import\ImportCsvHandler A AppBundle\Import\ImportCsvHandler instance
     */
    protected function getApp_ImportCsvHandlerService()
    {
        return $this->services['app.import_csv_handler'] = new \AppBundle\Import\ImportCsvHandler($this->get('app.csv_encoder'), $this->get('jms_serializer'));
    }

    /**
     * Gets the 'app.import_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Import\ImportManager A AppBundle\Import\ImportManager instance
     */
    protected function getApp_ImportManagerService()
    {
        $this->services['app.import_manager'] = $instance = new \AppBundle\Import\ImportManager($this->get('app.manager_locator'), $this->get('monolog.logger.import'), $this->get('app.manager.import_log'));

        $instance->addImportHandler($this->get('app.import_csv_handler'), 'csv');

        return $instance;
    }

    /**
     * Gets the 'app.mail.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\EventListener\MailListener A AppBundle\EventListener\MailListener instance
     */
    protected function getApp_Mail_ListenerService()
    {
        return $this->services['app.mail.listener'] = new \AppBundle\EventListener\MailListener($this->get('fos_user.mailer'));
    }

    /**
     * Gets the 'app.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Service\MailService A AppBundle\Service\MailService instance
     */
    protected function getApp_MailerService()
    {
        return $this->services['app.mailer'] = new \AppBundle\Service\MailService($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('twig'), array('template' => array('confirmation' => '@FOSUser/Registration/email.txt.twig', 'resetting' => '@FOSUser/Email/resetting_email.txt.twig'), 'from_email' => array('confirmation' => array('noreply@proconnect.com' => 'Biogaran Pro Connect'), 'resetting' => array('noreply@proconnect.com' => 'Biogaran Pro Connect'))), array('from_email' => array('noreply' => 'noreply@proconnect.com'), 'to_email' => array('contact' => array('test@proconnect.com' => 'Biogaran Pro Connect'))));
    }

    /**
     * Gets the 'app.manager.contrat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Manager\ContratManager A AppBundle\Manager\ContratManager instance
     */
    protected function getApp_Manager_ContratService()
    {
        return $this->services['app.manager.contrat'] = new \AppBundle\Manager\ContratManager('AppBundle\\Entity\\Contrat', $this->get('app.manager_tools'));
    }

    /**
     * Gets the 'app.manager.import_log' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Manager\ImportLogManager A AppBundle\Manager\ImportLogManager instance
     */
    protected function getApp_Manager_ImportLogService()
    {
        return $this->services['app.manager.import_log'] = new \AppBundle\Manager\ImportLogManager('AppBundle\\Entity\\ImportLog', $this->get('app.manager_tools'));
    }

    /**
     * Gets the 'app.manager.news' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Manager\NewsManager A AppBundle\Manager\NewsManager instance
     */
    protected function getApp_Manager_NewsService()
    {
        return $this->services['app.manager.news'] = new \AppBundle\Manager\NewsManager('AppBundle\\Entity\\News', $this->get('app.manager_tools'));
    }

    /**
     * Gets the 'app.manager.officine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Manager\OfficineManager A AppBundle\Manager\OfficineManager instance
     */
    protected function getApp_Manager_OfficineService()
    {
        return $this->services['app.manager.officine'] = new \AppBundle\Manager\OfficineManager('AppBundle\\Entity\\Officine', $this->get('app.manager_tools'));
    }

    /**
     * Gets the 'app.manager.officine_pharmacien' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Manager\OfficinePharmacienManager A AppBundle\Manager\OfficinePharmacienManager instance
     */
    protected function getApp_Manager_OfficinePharmacienService()
    {
        return $this->services['app.manager.officine_pharmacien'] = new \AppBundle\Manager\OfficinePharmacienManager('AppBundle\\Entity\\OfficinePharmacien', $this->get('app.manager_tools'));
    }

    /**
     * Gets the 'app.manager.pharmacien' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Manager\PharmacienManager A AppBundle\Manager\PharmacienManager instance
     */
    protected function getApp_Manager_PharmacienService()
    {
        return $this->services['app.manager.pharmacien'] = new \AppBundle\Manager\PharmacienManager('AppBundle\\Entity\\Pharmacien', $this->get('app.manager_tools'));
    }

    /**
     * Gets the 'app.manager.rdi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Manager\RdiManager A AppBundle\Manager\RdiManager instance
     */
    protected function getApp_Manager_RdiService()
    {
        $this->services['app.manager.rdi'] = $instance = new \AppBundle\Manager\RdiManager('AppBundle\\Entity\\Rdi', $this->get('app.manager_tools'), array('send_type' => array(0 => 'api', 1 => 'mail'), 'main_handler' => 'api', 'send_from' => 'admin@proconnect.com', 'send_to' => 'dev@groupe361.com'), $this->get('twig'));

        $instance->addRdiHandler($this->get('app.rdi_mail_handler'), 'mail');
        $instance->addRdiHandler($this->get('app.rdi_api_handler'), 'api');

        return $instance;
    }

    /**
     * Gets the 'app.manager.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Manager\UserManager A AppBundle\Manager\UserManager instance
     */
    protected function getApp_Manager_UserService()
    {
        return $this->services['app.manager.user'] = new \AppBundle\Manager\UserManager($this->get('app.user.password_helper'), ${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}, $this->get('doctrine')->getManager(NULL), 'AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'app.manager_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Service\ManagerLocator A AppBundle\Service\ManagerLocator instance
     */
    protected function getApp_ManagerLocatorService()
    {
        $this->services['app.manager_locator'] = $instance = new \AppBundle\Service\ManagerLocator();

        $instance->addManager($this->get('app.manager.pharmacien'), 'AppBundle\\Entity\\Pharmacien');
        $instance->addManager($this->get('app.manager.officine'), 'AppBundle\\Entity\\Officine');
        $instance->addManager($this->get('app.manager.officine_pharmacien'), 'AppBundle\\Entity\\OfficinePharmacien');
        $instance->addManager($this->get('app.manager.import_log'), 'AppBundle\\Entity\\ImportLog');
        $instance->addManager($this->get('app.manager.rdi'), 'AppBundle\\Entity\\Rdi');
        $instance->addManager($this->get('app.manager.news'), 'AppBundle\\Entity\\News');
        $instance->addManager($this->get('app.manager.contrat'), 'AppBundle\\Entity\\Contrat');

        return $instance;
    }

    /**
     * Gets the 'app.manager_tools' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Service\ManagerTools A AppBundle\Service\ManagerTools instance
     */
    protected function getApp_ManagerToolsService()
    {
        return $this->services['app.manager_tools'] = new \AppBundle\Service\ManagerTools($this->get('doctrine'), $this->get('app.result_factory'), $this->get('liip_functional_test.validator'), $this->get('monolog.logger.doctrine'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'app.menu_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Menu\MenuBuilder A AppBundle\Menu\MenuBuilder instance
     */
    protected function getApp_MenuBuilderService()
    {
        return $this->services['app.menu_builder'] = new \AppBundle\Menu\MenuBuilder($this->get('knp_menu.factory'));
    }

    /**
     * Gets the 'app.officine_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Service\OfficineSelectorService A AppBundle\Service\OfficineSelectorService instance
     */
    protected function getApp_OfficineSelectorService()
    {
        return $this->services['app.officine_selector'] = new \AppBundle\Service\OfficineSelectorService($this->get('app.manager.officine'), $this->get('session'));
    }

    /**
     * Gets the 'app.rdi_api_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Rdi\RdiApiHandler A AppBundle\Rdi\RdiApiHandler instance
     */
    protected function getApp_RdiApiHandlerService()
    {
        return $this->services['app.rdi_api_handler'] = new \AppBundle\Rdi\RdiApiHandler($this->get('jms_serializer'), $this->get('guzzle.client.api_biogaran_rdi'));
    }

    /**
     * Gets the 'app.rdi_mail_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Rdi\RdiMailHandler A AppBundle\Rdi\RdiMailHandler instance
     */
    protected function getApp_RdiMailHandlerService()
    {
        return $this->services['app.rdi_mail_handler'] = new \AppBundle\Rdi\RdiMailHandler($this->get('twig'), $this->get('swiftmailer.mailer.default'), array('send_type' => array(0 => 'api', 1 => 'mail'), 'main_handler' => 'api', 'send_from' => 'admin@proconnect.com', 'send_to' => 'dev@groupe361.com'));
    }

    /**
     * Gets the 'app.result_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Service\ResultFactory A AppBundle\Service\ResultFactory instance
     */
    protected function getApp_ResultFactoryService()
    {
        return $this->services['app.result_factory'] = new \AppBundle\Service\ResultFactory();
    }

    /**
     * Gets the 'app.success_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Security\SuccessHandler A AppBundle\Security\SuccessHandler instance
     */
    protected function getApp_SuccessHandlerService()
    {
        return $this->services['app.success_handler'] = new \AppBundle\Security\SuccessHandler($this->get('router'), $this->get('app.officine_selector'), $this->get('app.manager.user'));
    }

    /**
     * Gets the 'app.twig_extension.officine_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Twig\OfficineSelectorExtension A AppBundle\Twig\OfficineSelectorExtension instance
     */
    protected function getApp_TwigExtension_OfficineSelectorService()
    {
        return $this->services['app.twig_extension.officine_selector'] = new \AppBundle\Twig\OfficineSelectorExtension($this->get('app.officine_selector'));
    }

    /**
     * Gets the 'app.user.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\EventListener\UserCreationListener A AppBundle\EventListener\UserCreationListener instance
     */
    protected function getApp_User_ListenerService()
    {
        return $this->services['app.user.listener'] = new \AppBundle\EventListener\UserCreationListener('ROLE_OFFICINE_OWNER', $this->get('app.manager.user'), $this->get('app.manager.rdi'), $this->get('router'), $this->get('session'));
    }

    /**
     * Gets the 'app.user.password_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Service\UserPasswordHelper A AppBundle\Service\UserPasswordHelper instance
     */
    protected function getApp_User_PasswordHelperService()
    {
        return $this->services['app.user.password_helper'] = new \AppBundle\Service\UserPasswordHelper($this->get('debug.event_dispatcher'), $this->get('fos_user.util.token_generator'), false);
    }

    /**
     * Gets the 'app.util.inflector.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Util\Inflector\NoopInflector A AppBundle\Util\Inflector\NoopInflector instance
     */
    protected function getApp_Util_Inflector_NoopService()
    {
        return $this->services['app.util.inflector.noop'] = new \AppBundle\Util\Inflector\NoopInflector();
    }

    /**
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /**
     * Gets the 'cache.app' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter A Symfony\Component\Cache\Adapter\FilesystemAdapter instance
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('c4JvVAtLcs', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger($this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'cache.default_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer A Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer instance
     */
    protected function getCache_DefaultClearerService()
    {
        $this->services['cache.default_clearer'] = $instance = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer();

        $instance->addPool($this->get('cache.app'));
        $instance->addPool($this->get('cache.system'));
        $instance->addPool(${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $instance->addPool(${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'cache.system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('GSXEjI2p55', 0, 'tmdZOBSsHZLLJZ7HRaXbkY', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => $this->get('cache.default_clearer')));
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => $this->get('kernel.class_cache.cache_warmer'), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer($this->get('validator.builder'), (__DIR__.'/validation.php'), \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('tDLsVxzhMP', 0, 'tmdZOBSsHZLLJZ7HRaXbkY', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE))), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 5 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 6 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader($this->get('annotation_reader'))), (__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}), 7 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 8 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'/app'), array())), 9 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 10 => $this->get('sonata.admin.route.cache_warmup'), 11 => ${($_ = isset($this->services['fos_rest.allowed_methods_loader']) ? $this->services['fos_rest.allowed_methods_loader'] : $this->getFosRest_AllowedMethodsLoaderService()) && false ?: '_'}));
    }

    /**
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'), false);
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector instance
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'data_collector.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector A Symfony\Component\Translation\DataCollector\TranslationDataCollector instance
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($this->get('translator'));
    }

    /**
     * Gets the 'debug.argument_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver A Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver instance
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), array(0 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), 1 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), 2 => new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver($this->get('security.token_storage')), 3 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), 4 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'), $this->get('debug.argument_resolver'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('var_dumper.cli_dumper'));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('fos_user.registration.completed', array(0 => 'app.user.listener', 1 => 'onNewUser'), 0);
        $instance->addListenerService('app.resetting.confirm', array(0 => 'app.mail.listener', 1 => 'onUserPasswordResetted'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'app.exception.api_listener', 1 => 'onKernelException'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'lexik_maintenance.listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'lexik_maintenance.listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_menu.listener.voters', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sonata.block.cache.handler.default', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.mime_type_listener', 1 => 'onKernelRequest'), 200);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 10);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.format_listener', 1 => 'onKernelRequest'), 34);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.param_fetcher_listener', 1 => 'onKernelController'), 5);
        $instance->addListenerService('kernel.response', array(0 => 'fos_rest.allowed_methods_listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.zone_matcher_listener', 1 => 'onKernelRequest'), 248);
        $instance->addListenerService('kernel.request', array(0 => 'nelmio_api_doc.event_listener.request', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('fos_rest.exception_listener', 'FOS\\RestBundle\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('fos_rest.view_response_listener', 'FOS\\RestBundle\\EventListener\\ViewResponseListener');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');
        $instance->addSubscriberService('liip_functional_test.exception_listener', 'Liip\\FunctionalTestBundle\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('liip_functional_test.validator', 'Liip\\FunctionalTestBundle\\Validator\\DataCollectingValidator');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('json' => array('class' => 'Sonata\\Doctrine\\Types\\JsonType', 'commented' => true)));
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $b->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $c = new \Doctrine\DBAL\Configuration();
        $c->setSQLLogger($b);

        $d = new \Gedmo\Tree\TreeListener();
        $d->setAnnotationReader($a);

        $e = new \Gedmo\Timestampable\TimestampableListener();
        $e->setAnnotationReader($a);

        $f = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();
        $f->addResolveTargetEntity('Shapecode\\Bundle\\CronBundle\\Entity\\Interfaces\\CronJobInterface', 'Shapecode\\Bundle\\CronBundle\\Entity\\CronJob', array());
        $f->addResolveTargetEntity('Shapecode\\Bundle\\CronBundle\\Entity\\Interfaces\\CronJobResultInterface', 'Shapecode\\Bundle\\CronBundle\\Entity\\CronJobResult', array());

        $g = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $g->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}));
        $g->addEventSubscriber($this->get('sonata.easy_extends.doctrine.mapper'));
        $g->addEventSubscriber($this->get('sonata.media.doctrine.event_subscriber'));
        $g->addEventSubscriber($d);
        $g->addEventSubscriber($e);
        $g->addEventSubscriber($f);
        $g->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => 3306, 'dbname' => 'biowebpro', 'user' => 'root', 'password' => '1Jbgub18', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $c, $g, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver A Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Tree/Entity'), 1 => ($this->targetDirs[3].'/vendor/shapecode/cron-bundle/src/Entity'), 2 => ($this->targetDirs[3].'/src/AppBundle/Entity')));

        $c = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/config/doctrine') => 'Sonata\\ClassificationBundle\\Entity', ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/config/doctrine') => 'Sonata\\MediaBundle\\Entity'));
        $c->setGlobalBasename('mapping');

        $d = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $d->addDriver($b, 'Gedmo\\Tree\\Entity');
        $d->addDriver($b, 'Shapecode\\Bundle\\CronBundle\\Entity');
        $d->addDriver($b, 'AppBundle\\Entity');
        $d->addDriver($c, 'Sonata\\ClassificationBundle\\Entity');
        $d->addDriver($c, 'Sonata\\MediaBundle\\Entity');
        $d->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $e = new \Doctrine\ORM\Configuration();
        $e->setEntityNamespaces(array('GedmoTree' => 'Gedmo\\Tree\\Entity', 'SonataClassificationBundle' => 'Sonata\\ClassificationBundle\\Entity', 'SonataMediaBundle' => 'Sonata\\MediaBundle\\Entity', 'ShapecodeCronBundle' => 'Shapecode\\Bundle\\CronBundle\\Entity', 'AppBundle' => 'AppBundle\\Entity'));
        $e->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $e->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $e->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $e->setMetadataDriverImpl($d);
        $e->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $e->setProxyNamespace('Proxies');
        $e->setAutoGenerateProxyClasses(true);
        $e->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $e->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $e->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $e->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $e->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $e);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }

    /**
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_137e009baff3bd4448c50a56d0966bb4e4535d02ca4bd2f78ef6255a4b0db468');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_137e009baff3bd4448c50a56d0966bb4e4535d02ca4bd2f78ef6255a4b0db468');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_137e009baff3bd4448c50a56d0966bb4e4535d02ca4bd2f78ef6255a4b0db468');

        return $instance;
    }

    /**
     * Gets the 'ewz_recaptcha.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType A EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType instance
     */
    protected function getEwzRecaptcha_Form_TypeService()
    {
        return $this->services['ewz_recaptcha.form.type'] = new \EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType('6LdnMxgUAAAAAHjG60oxrfd9K2Y61w3DrZ994LPV', true, false, new \EWZ\Bundle\RecaptchaBundle\Locale\LocaleResolver('fr', false, $this->get('request_stack')));
    }

    /**
     * Gets the 'ewz_recaptcha.validator.true' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrueValidator A EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrueValidator instance
     */
    protected function getEwzRecaptcha_Validator_TrueService()
    {
        return $this->services['ewz_recaptcha.validator.true'] = new \EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrueValidator(true, '6LdnMxgUAAAAAPL-nDs2NmwRQAyJe0mofm9wG_ER', $this->get('request_stack'), array('host' => NULL, 'port' => NULL, 'auth' => NULL), false);
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[3].'/app/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension A Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension instance
     */
    protected function getForm_ExtensionService()
    {
        return $this->services['form.extension'] = new \Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension($this, array('AppBundle\\Form\\RegistrationType' => 'app.form.resetting', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => 'sonata.core.form.type.array', 'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => 'sonata.core.form.type.boolean', 'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => 'sonata.core.form.type.collection', 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => 'sonata.core.form.type.translatable_choice', 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => 'sonata.core.form.type.date_range', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => 'sonata.core.form.type.datetime_range', 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => 'sonata.core.form.type.date_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => 'sonata.core.form.type.datetime_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => 'sonata.core.form.type.date_range_picker', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => 'sonata.core.form.type.datetime_range_picker', 'Sonata\\CoreBundle\\Form\\Type\\EqualType' => 'sonata.core.form.type.equal', 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => 'sonata.core.form.type.color_selector', 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => 'sonata.block.form.type.block', 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => 'sonata.block.form.type.container_template', 'Sonata\\AdminBundle\\Form\\Type\\AdminType' => 'sonata.admin.form.type.admin', 'Sonata\\AdminBundle\\Form\\Type\\ModelType' => 'sonata.admin.form.type.model_choice', 'Sonata\\AdminBundle\\Form\\Type\\ModelTypeList' => 'sonata.admin.form.type.model_list', 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => 'sonata.admin.form.type.model_reference', 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => 'sonata.admin.form.type.model_hidden', 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => 'sonata.admin.form.type.model_autocomplete', 'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => 'sonata.admin.form.type.collection', 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => 'sonata.admin.doctrine_orm.form.type.choice_field_mask', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => 'sonata.admin.form.filter.type.number', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => 'sonata.admin.form.filter.type.choice', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => 'sonata.admin.form.filter.type.default', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => 'sonata.admin.form.filter.type.date', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => 'sonata.admin.form.filter.type.daterange', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => 'sonata.admin.form.filter.type.datetime', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => 'sonata.admin.form.filter.type.datetime_range', 'Sonata\\ClassificationBundle\\Form\\Type\\CategorySelectorType' => 'sonata.classification.form.type.category_selector', 'Sonata\\ClassificationBundle\\Form\\Type\\ApiCategoryType' => 'sonata.classification.api.form.type.category', 'Sonata\\ClassificationBundle\\Form\\Type\\ApiCollectionType' => 'sonata.classification.api.form.type.collection', 'Sonata\\ClassificationBundle\\Form\\Type\\ApiTagType' => 'sonata.classification.api.form.type.tag', 'Sonata\\ClassificationBundle\\Form\\Type\\ApiContextType' => 'sonata.classification.api.form.type.context', 'Sonata\\MediaBundle\\Form\\Type\\MediaType' => 'sonata.media.form.type.media', 'Sonata\\MediaBundle\\Form\\Type\\ApiDoctrineMediaType' => 'sonata.media.api.form.type.doctrine.media', 'Sonata\\MediaBundle\\Form\\Type\\ApiMediaType' => 'sonata.media.api.form.type.media', 'Sonata\\MediaBundle\\Form\\Type\\ApiGalleryType' => 'sonata.media.api.form.type.gallery', 'Sonata\\MediaBundle\\Form\\Type\\ApiGalleryHasMediaType' => 'sonata.media.api.form.type.gallery_has_media', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType' => 'ivory_ck_editor.form.type', 'Sonata\\FormatterBundle\\Form\\Type\\FormatterType' => 'sonata.formatter.form.type.selector', 'Sonata\\FormatterBundle\\Form\\Type\\SimpleFormatterType' => 'sonata.formatter.form.type.simple', 'EWZ\\Bundle\\RecaptchaBundle\\Form\\Type\\EWZRecaptchaType' => 'ewz_recaptcha.form.type'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'form.type_extension.form.data_collector', 5 => 'sonata.admin.form.extension.field', 6 => 'sonata.admin.form.extension.field.mopa', 7 => 'nelmio_api_doc.form.extension.description_form_type_extension'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => array(0 => 'sonata.admin.form.extension.choice')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'), array('form' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'birthday' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType', 'checkbox' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType', 'choice' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 'collection' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType', 'country' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType', 'date' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType', 'datetime' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType', 'email' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType', 'file' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 'hidden' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType', 'integer' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType', 'language' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType', 'locale' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType', 'money' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType', 'number' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType', 'password' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType', 'percent' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType', 'radio' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType', 'repeated' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType', 'search' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType', 'textarea' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType', 'text' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', 'time' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType', 'timezone' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType', 'url' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType', 'button' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType', 'submit' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType', 'reset' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType', 'currency' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType', 'entity' => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 'sonata_type_immutable_array' => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 'sonata_type_boolean' => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 'sonata_type_collection' => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 'sonata_type_translatable_choice' => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 'sonata_type_date_range' => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 'sonata_type_datetime_range' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 'sonata_type_date_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 'sonata_type_datetime_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 'sonata_type_date_range_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 'sonata_type_datetime_range_picker' => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 'sonata_type_equal' => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 'sonata_type_color_selector' => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 'sonata_block_service_choice' => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 'sonata_type_container_template_choice' => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 'sonata_type_admin' => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 'sonata_type_model' => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 'sonata_type_model_list' => 'Sonata\\AdminBundle\\Form\\Type\\ModelTypeList', 'sonata_type_model_reference' => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 'sonata_type_model_hidden' => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 'sonata_type_model_autocomplete' => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 'sonata_type_native_collection' => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 'sonata_type_choice_field_mask' => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 'sonata_type_filter_number' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 'sonata_type_filter_choice' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 'sonata_type_filter_default' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 'sonata_type_filter_date' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 'sonata_type_filter_date_range' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 'sonata_type_filter_datetime' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 'sonata_type_filter_datetime_range' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 'tab' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Type\\TabType', 'sonata_classification_api_form_category' => 'Sonata\\ClassificationBundle\\Form\\Type\\ApiCategoryType', 'sonata_classification_api_form_collection' => 'Sonata\\ClassificationBundle\\Form\\Type\\ApiCollectionType', 'sonata_classification_api_form_tag' => 'Sonata\\ClassificationBundle\\Form\\Type\\ApiTagType', 'sonata_classification_api_form_context' => 'Sonata\\ClassificationBundle\\Form\\Type\\ApiContextType', 'sonata_category_selector' => 'Sonata\\ClassificationBundle\\Form\\Type\\CategorySelectorType', 'sonata_media_type' => 'Sonata\\MediaBundle\\Form\\Type\\MediaType', 'sonata_media_api_form_media' => 'Sonata\\MediaBundle\\Form\\Type\\ApiMediaType', 'sonata_media_api_form_doctrine_media' => 'Sonata\\MediaBundle\\Form\\Type\\ApiDoctrineMediaType', 'sonata_media_api_form_gallery' => 'Sonata\\MediaBundle\\Form\\Type\\ApiGalleryType', 'sonata_media_api_form_gallery_has_media' => 'Sonata\\MediaBundle\\Form\\Type\\ApiGalleryHasMediaType', 'ckeditor' => 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType', 'sonata_formatter_type' => 'Sonata\\FormatterBundle\\Form\\Type\\FormatterType', 'sonata_simple_formatter_type' => 'Sonata\\FormatterBundle\\Form\\Type\\SimpleFormatterType'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector', 4 => 'nelmio_api_doc.form.extension.description_form_type_extension', 5 => 'sonata.admin.form.extension.field', 6 => 'mopa_bootstrap.form.type_extension.help', 7 => 'mopa_bootstrap.form.type_extension.legend', 8 => 'mopa_bootstrap.form.type_extension.error', 9 => 'mopa_bootstrap.form.type_extension.widget', 10 => 'mopa_bootstrap.form.type_extension.horizontal', 11 => 'mopa_bootstrap.form.type_extension.widget_collection', 12 => 'mopa_bootstrap.form.type_extension.tabbed'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator'), 'choice' => array(0 => 'sonata.admin.form.extension.choice'), 'button' => array(0 => 'mopa_bootstrap.form.type_extension.button'), 'date' => array(0 => 'mopa_bootstrap.form.type_extension.date')), array());
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => $this->get('form.extension')), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('liip_functional_test.validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('liip_functional_test.validator'));
    }

    /**
     * Gets the 'fos_rest.allowed_methods_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\AllowedMethodsListener A FOS\RestBundle\EventListener\AllowedMethodsListener instance
     */
    protected function getFosRest_AllowedMethodsListenerService()
    {
        return $this->services['fos_rest.allowed_methods_listener'] = new \FOS\RestBundle\EventListener\AllowedMethodsListener(${($_ = isset($this->services['fos_rest.allowed_methods_loader']) ? $this->services['fos_rest.allowed_methods_loader'] : $this->getFosRest_AllowedMethodsLoaderService()) && false ?: '_'});
    }

    /**
     * Gets the 'fos_rest.body_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener A FOS\RestBundle\EventListener\BodyListener instance
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.decoder.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder A FOS\RestBundle\Decoder\JsonDecoder instance
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.jsontoform' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\JsonToFormDecoder A FOS\RestBundle\Decoder\JsonToFormDecoder instance
     */
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder A FOS\RestBundle\Decoder\XmlDecoder instance
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider A FOS\RestBundle\Decoder\ContainerDecoderProvider instance
     */
    protected function getFosRest_DecoderProviderService()
    {
        return $this->services['fos_rest.decoder_provider'] = new \FOS\RestBundle\Decoder\ContainerDecoderProvider($this, array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
    }

    /**
     * Gets the 'fos_rest.exception.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Controller\ExceptionController A FOS\RestBundle\Controller\ExceptionController instance
     */
    protected function getFosRest_Exception_ControllerService()
    {
        return $this->services['fos_rest.exception.controller'] = new \FOS\RestBundle\Controller\ExceptionController($this->get('fos_rest.view_handler'), ${($_ = isset($this->services['fos_rest.exception.codes_map']) ? $this->services['fos_rest.exception.codes_map'] : $this->getFosRest_Exception_CodesMapService()) && false ?: '_'}, true);
    }

    /**
     * Gets the 'fos_rest.exception.twig_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Controller\TwigExceptionController A FOS\RestBundle\Controller\TwigExceptionController instance
     */
    protected function getFosRest_Exception_TwigControllerService()
    {
        return $this->services['fos_rest.exception.twig_controller'] = new \FOS\RestBundle\Controller\TwigExceptionController($this->get('fos_rest.view_handler'), ${($_ = isset($this->services['fos_rest.exception.codes_map']) ? $this->services['fos_rest.exception.codes_map'] : $this->getFosRest_Exception_CodesMapService()) && false ?: '_'}, true, $this->get('templating'));
    }

    /**
     * Gets the 'fos_rest.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\ExceptionListener A FOS\RestBundle\EventListener\ExceptionListener instance
     */
    protected function getFosRest_ExceptionListenerService()
    {
        return $this->services['fos_rest.exception_listener'] = new \FOS\RestBundle\EventListener\ExceptionListener('fos_rest.exception.twig_controller:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_rest.format_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\FormatListener A FOS\RestBundle\EventListener\FormatListener instance
     */
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($this->get('fos_rest.format_negotiator'));
    }

    /**
     * Gets the 'fos_rest.format_negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Negotiation\FormatNegotiator A FOS\RestBundle\Negotiation\FormatNegotiator instance
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        $this->services['fos_rest.format_negotiator'] = $instance = new \FOS\RestBundle\Negotiation\FormatNegotiator($this->get('request_stack'));

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/_profiler|_wdt/', NULL, NULL, NULL, array()), array('methods' => NULL, 'priorities' => array(0 => 'html', 1 => 'json'), 'fallback_format' => 'html', 'attributes' => array(), 'prefer_extension' => '2.0'));
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher(NULL, NULL, NULL, NULL, array()), array('priorities' => array(0 => 'json'), 'fallback_format' => 'json', 'methods' => NULL, 'attributes' => array(), 'stop' => false, 'prefer_extension' => '2.0'));

        return $instance;
    }

    /**
     * Gets the 'fos_rest.mime_type_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\MimeTypeListener A FOS\RestBundle\EventListener\MimeTypeListener instance
     */
    protected function getFosRest_MimeTypeListenerService()
    {
        return $this->services['fos_rest.mime_type_listener'] = new \FOS\RestBundle\EventListener\MimeTypeListener(array('json' => array(0 => 'application/json')));
    }

    /**
     * Gets the 'fos_rest.normalizer.camel_keys' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizer A FOS\RestBundle\Normalizer\CamelKeysNormalizer instance
     */
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }

    /**
     * Gets the 'fos_rest.normalizer.camel_keys_with_leading_underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore A FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore instance
     */
    protected function getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService()
    {
        return $this->services['fos_rest.normalizer.camel_keys_with_leading_underscore'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore();
    }

    /**
     * Gets the 'fos_rest.param_fetcher_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\ParamFetcherListener A FOS\RestBundle\EventListener\ParamFetcherListener instance
     */
    protected function getFosRest_ParamFetcherListenerService()
    {
        return $this->services['fos_rest.param_fetcher_listener'] = new \FOS\RestBundle\EventListener\ParamFetcherListener($this->get('fos_rest.request.param_fetcher'), false);
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Request\ParamFetcher A FOS\RestBundle\Request\ParamFetcher instance
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        return $this->services['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this, ${($_ = isset($this->services['fos_rest.request.param_fetcher.reader']) ? $this->services['fos_rest.request.param_fetcher.reader'] : $this->getFosRest_Request_ParamFetcher_ReaderService()) && false ?: '_'}, $this->get('request_stack'), $this->get('liip_functional_test.validator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_rest.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \FOS\RestBundle\Serializer\JMSSerializerAdapter A FOS\RestBundle\Serializer\JMSSerializerAdapter instance
     */
    protected function getFosRest_SerializerService($lazyLoad = true)
    {
        return $this->services['fos_rest.serializer'] = new \FOS\RestBundle\Serializer\JMSSerializerAdapter($this->get('jms_serializer'));
    }

    /**
     * Gets the 'fos_rest.serializer.exception_normalizer.jms' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Serializer\Normalizer\ExceptionHandler A FOS\RestBundle\Serializer\Normalizer\ExceptionHandler instance
     */
    protected function getFosRest_Serializer_ExceptionNormalizer_JmsService()
    {
        return $this->services['fos_rest.serializer.exception_normalizer.jms'] = new \FOS\RestBundle\Serializer\Normalizer\ExceptionHandler(new \FOS\RestBundle\Util\ExceptionValueMap(array('AppBundle\\Exception\\ApiException' => true)), true);
    }

    /**
     * Gets the 'fos_rest.view_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\View\ViewHandler A FOS\RestBundle\View\ViewHandler instance
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler($this->get('router'), $this->get('fos_rest.serializer'), $this->get('templating'), $this->get('request_stack'), array('json' => false, 'xml' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');

        $instance->setSerializeNullStrategy(true);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.view_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\ViewResponseListener A FOS\RestBundle\EventListener\ViewResponseListener instance
     */
    protected function getFosRest_ViewResponseListenerService()
    {
        return $this->services['fos_rest.view_response_listener'] = new \FOS\RestBundle\EventListener\ViewResponseListener($this->get('fos_rest.view_handler'), true);
    }

    /**
     * Gets the 'fos_rest.zone_matcher_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\ZoneMatcherListener A FOS\RestBundle\EventListener\ZoneMatcherListener instance
     */
    protected function getFosRest_ZoneMatcherListenerService()
    {
        $this->services['fos_rest.zone_matcher_listener'] = $instance = new \FOS\RestBundle\EventListener\ZoneMatcherListener();

        $instance->addRequestMatcher(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api'));

        return $instance;
    }

    /**
     * Gets the 'fos_user.change_password.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.listener.flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener A FOS\UserBundle\EventListener\FlashListener instance
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator'));
    }

    /**
     * Gets the 'fos_user.listener.resetting' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener A FOS\UserBundle\EventListener\ResettingListener instance
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }

    /**
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Mailer\TwigSwiftMailer A FOS\UserBundle\Mailer\TwigSwiftMailer instance
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\TwigSwiftMailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('twig'), array('template' => array('confirmation' => '@FOSUser/Registration/email.txt.twig', 'resetting' => '@FOSUser/Email/resetting_email.txt.twig'), 'from_email' => array('confirmation' => array('noreply@proconnect.com' => 'Biogaran Pro Connect'), 'resetting' => array('noreply@proconnect.com' => 'Biogaran Pro Connect'))));
    }

    /**
     * Gets the 'fos_user.profile.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', array(0 => 'Profile', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.registration.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'AppBundle\\Form\\RegistrationType', array(0 => 'AppRegistration'));
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', array(0 => 'AppResetting'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener A FOS\UserBundle\EventListener\LastLoginListener instance
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('app.manager.user'));
    }

    /**
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.token_storage'), ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.session_strategy']) ? $this->services['security.authentication.session_strategy'] : $this->getSecurity_Authentication_SessionStrategyService()) && false ?: '_'}, $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('app.manager.user')));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator();
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('app.manager.user'), $this->get('debug.event_dispatcher'), $this->get('request_stack'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'guzzle.client.api_biogaran_rdi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \GuzzleHttp\Client A GuzzleHttp\Client instance
     */
    protected function getGuzzle_Client_ApiBiogaranRdiService()
    {
        $a = \GuzzleHttp\HandlerStack::create();
        $a->push($this->get("guzzle_bundle.middleware.log.api_biogaran_rdi")->log());
        $a->unshift($this->get("guzzle_bundle.middleware.event_dispatch.api_biogaran_rdi")->dispatchEvent());

        return $this->services['guzzle.client.api_biogaran_rdi'] = new \GuzzleHttp\Client(array('base_uri' => 'http://preprod-simulateur360-v2.dev361.com', 'handler' => $a, 'headers' => array('Accept' => 'application/json'), 'auth' => array(0 => 'gdh', 1 => 'gdhapiuser')));
    }

    /**
     * Gets the 'guzzle_bundle.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \GuzzleHttp\MessageFormatter A GuzzleHttp\MessageFormatter instance
     */
    protected function getGuzzleBundle_FormatterService()
    {
        return $this->services['guzzle_bundle.formatter'] = new \GuzzleHttp\MessageFormatter();
    }

    /**
     * Gets the 'guzzle_bundle.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \EightPoints\Bundle\GuzzleBundle\Log\Logger A EightPoints\Bundle\GuzzleBundle\Log\Logger instance
     */
    protected function getGuzzleBundle_LoggerService()
    {
        return $this->services['guzzle_bundle.logger'] = new \EightPoints\Bundle\GuzzleBundle\Log\Logger();
    }

    /**
     * Gets the 'guzzle_bundle.middleware.event_dispatch.api_biogaran_rdi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \EightPoints\Bundle\GuzzleBundle\Middleware\EventDispatchMiddleware A EightPoints\Bundle\GuzzleBundle\Middleware\EventDispatchMiddleware instance
     */
    protected function getGuzzleBundle_Middleware_EventDispatch_ApiBiogaranRdiService()
    {
        return $this->services['guzzle_bundle.middleware.event_dispatch.api_biogaran_rdi'] = new \EightPoints\Bundle\GuzzleBundle\Middleware\EventDispatchMiddleware($this->get('debug.event_dispatcher'), 'api_biogaran_rdi');
    }

    /**
     * Gets the 'guzzle_bundle.middleware.log.api_biogaran_rdi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \EightPoints\Bundle\GuzzleBundle\Middleware\LogMiddleware A EightPoints\Bundle\GuzzleBundle\Middleware\LogMiddleware instance
     */
    protected function getGuzzleBundle_Middleware_Log_ApiBiogaranRdiService()
    {
        return $this->services['guzzle_bundle.middleware.log.api_biogaran_rdi'] = new \EightPoints\Bundle\GuzzleBundle\Middleware\LogMiddleware($this->get('guzzle_bundle.logger'), $this->get('guzzle_bundle.formatter'));
    }

    /**
     * Gets the 'hautelook_alice.alice.fixtures.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hautelook\AliceBundle\Alice\DataFixtures\Fixtures\Loader A Hautelook\AliceBundle\Alice\DataFixtures\Fixtures\Loader instance
     */
    protected function getHautelookAlice_Alice_Fixtures_LoaderService()
    {
        $this->services['hautelook_alice.alice.fixtures.loader'] = $instance = new \Hautelook\AliceBundle\Alice\DataFixtures\Fixtures\Loader('fr_FR', $this->get('hautelook_alice.faker.provider_chain'), 1, array('kernel.root_dir' => ($this->targetDirs[3].'/app'), 'kernel.environment' => 'dev', 'kernel.debug' => true, 'kernel.name' => 'app', 'kernel.cache_dir' => __DIR__, 'kernel.logs_dir' => ($this->targetDirs[2].'/logs'), 'kernel.bundles' => array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle', 'LexikMaintenanceBundle' => 'Lexik\\Bundle\\MaintenanceBundle\\LexikMaintenanceBundle', 'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle', 'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle', 'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle', 'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle', 'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle', 'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle', 'SonataIntlBundle' => 'Sonata\\IntlBundle\\SonataIntlBundle', 'SonataClassificationBundle' => 'Sonata\\ClassificationBundle\\SonataClassificationBundle', 'SonataMediaBundle' => 'Sonata\\MediaBundle\\SonataMediaBundle', 'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'ShapecodeCronBundle' => 'Shapecode\\Bundle\\CronBundle\\ShapecodeCronBundle', 'AppBundle' => 'AppBundle\\AppBundle', 'KnpMarkdownBundle' => 'Knp\\Bundle\\MarkdownBundle\\KnpMarkdownBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle', 'SonataFormatterBundle' => 'Sonata\\FormatterBundle\\SonataFormatterBundle', 'RedCodeTreeBundle' => 'RedCode\\TreeBundle\\RedCodeTreeBundle', 'GuzzleBundle' => 'EightPoints\\Bundle\\GuzzleBundle\\GuzzleBundle', 'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle', 'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle', 'EWZRecaptchaBundle' => 'EWZ\\Bundle\\RecaptchaBundle\\EWZRecaptchaBundle', 'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle', 'HautelookAliceBundle' => 'Hautelook\\AliceBundle\\HautelookAliceBundle', 'LiipFunctionalTestBundle' => 'Liip\\FunctionalTestBundle\\LiipFunctionalTestBundle'), 'kernel.bundles_metadata' => array('FrameworkBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'), 'namespace' => 'Symfony\\Bundle\\FrameworkBundle'), 'SecurityBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'), 'namespace' => 'Symfony\\Bundle\\SecurityBundle'), 'TwigBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'), 'namespace' => 'Symfony\\Bundle\\TwigBundle'), 'MonologBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'), 'namespace' => 'Symfony\\Bundle\\MonologBundle'), 'SwiftmailerBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'), 'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle'), 'DoctrineBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'), 'namespace' => 'Doctrine\\Bundle\\DoctrineBundle'), 'SensioFrameworkExtraBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'), 'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle'), 'StofDoctrineExtensionsBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle'), 'namespace' => 'Stof\\DoctrineExtensionsBundle'), 'LexikMaintenanceBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/lexik/maintenance-bundle'), 'namespace' => 'Lexik\\Bundle\\MaintenanceBundle'), 'JMSSerializerBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle/JMS/SerializerBundle'), 'namespace' => 'JMS\\SerializerBundle'), 'KnpMenuBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle'), 'namespace' => 'Knp\\Bundle\\MenuBundle'), 'SonataCoreBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle'), 'namespace' => 'Sonata\\CoreBundle'), 'SonataBlockBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle'), 'namespace' => 'Sonata\\BlockBundle'), 'SonataDoctrineORMAdminBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle'), 'namespace' => 'Sonata\\DoctrineORMAdminBundle'), 'SonataAdminBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle'), 'namespace' => 'Sonata\\AdminBundle'), 'SonataIntlBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sonata-project/intl-bundle'), 'namespace' => 'Sonata\\IntlBundle'), 'SonataClassificationBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle'), 'namespace' => 'Sonata\\ClassificationBundle'), 'SonataMediaBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle'), 'namespace' => 'Sonata\\MediaBundle'), 'SonataEasyExtendsBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sonata-project/easy-extends-bundle'), 'namespace' => 'Sonata\\EasyExtendsBundle'), 'FOSUserBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle'), 'namespace' => 'FOS\\UserBundle'), 'ShapecodeCronBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/shapecode/cron-bundle/src'), 'namespace' => 'Shapecode\\Bundle\\CronBundle'), 'AppBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/src/AppBundle'), 'namespace' => 'AppBundle'), 'KnpMarkdownBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle'), 'namespace' => 'Knp\\Bundle\\MarkdownBundle'), 'IvoryCKEditorBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle'), 'namespace' => 'Ivory\\CKEditorBundle'), 'SonataFormatterBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle'), 'namespace' => 'Sonata\\FormatterBundle'), 'RedCodeTreeBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/redcode/tree-bundle/RedCode/TreeBundle'), 'namespace' => 'RedCode\\TreeBundle'), 'GuzzleBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle'), 'namespace' => 'EightPoints\\Bundle\\GuzzleBundle'), 'FOSRestBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle'), 'namespace' => 'FOS\\RestBundle'), 'NelmioApiDocBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle'), 'namespace' => 'Nelmio\\ApiDocBundle'), 'EWZRecaptchaBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src'), 'namespace' => 'EWZ\\Bundle\\RecaptchaBundle'), 'DebugBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'), 'namespace' => 'Symfony\\Bundle\\DebugBundle'), 'WebProfilerBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'), 'namespace' => 'Symfony\\Bundle\\WebProfilerBundle'), 'SensioDistributionBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'), 'namespace' => 'Sensio\\Bundle\\DistributionBundle'), 'SensioGeneratorBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle'), 'namespace' => 'Sensio\\Bundle\\GeneratorBundle'), 'HautelookAliceBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/hautelook/alice-bundle/src'), 'namespace' => 'Hautelook\\AliceBundle'), 'LiipFunctionalTestBundle' => array('parent' => NULL, 'path' => ($this->targetDirs[3].'/vendor/liip/functional-test-bundle'), 'namespace' => 'Liip\\FunctionalTestBundle')), 'kernel.charset' => 'UTF-8', 'kernel.container_class' => 'appDevDebugProjectContainer', 'database_host' => '127.0.0.1', 'database_port' => 3306, 'database_name' => 'biowebpro', 'database_user' => 'root', 'database_password' => '1Jbgub18', 'mailer_transport' => 'smtp', 'mailer_host' => '127.0.0.1', 'mailer_user' => NULL, 'mailer_password' => NULL, 'secret' => 'ThisTokenIsNotSoSecretChangeIt', 'rdi_send_mail' => 'dev@groupe361.com', 'import_dir' => ($this->targetDirs[3].'/app/../var/import'), 'app' => array('scli_number' => '0 811 907 917', 'youtube_homepage' => 'https://www.youtube.com/watch?v=G9WMPsyEXqs'), 'app_mail_adresses' => array('from_email' => array('noreply' => 'noreply@proconnect.com'), 'to_email' => array('contact' => array('test@proconnect.com' => 'Biogaran Pro Connect'))), 'import' => array('officines-pharmaciens' => array('officines' => array('type' => 'csv', 'mode' => 'DIFF_WITHOUT_DELETE', 'batchSize' => 100, 'entity' => 'AppBundle\\Entity\\Officine', 'filePattern' => 'neo_sp_off_[0-9]{12}.csv', 'encoding' => 'Windows-1252'), 'pharmaciens' => array('type' => 'csv', 'mode' => 'DIFF_WITHOUT_DELETE', 'batchSize' => 100, 'entity' => 'AppBundle\\Entity\\Pharmacien', 'filePattern' => 'neo_sp_int_[0-9]{12}.csv', 'encoding' => 'Windows-1252'), 'officines-pharmaciens' => array('type' => 'csv', 'mode' => 'DIFF_WITHOUT_DELETE', 'batchSize' => 100, 'entity' => 'AppBundle\\Entity\\OfficinePharmacien', 'filePattern' => 'neo_sp_lpi_[0-9]{12}.csv', 'encoding' => 'Windows-1252')), 'contrats' => array('contrats' => array('type' => 'csv', 'mode' => 'DIFF_WITHOUT_DELETE', 'batchSize' => 100, 'entity' => 'AppBundle\\Entity\\Contrat', 'filePattern' => 'neo_sp_cnt_[0-9]{12}.csv', 'encoding' => 'Windows-1252'))), 'rdi' => array('send_type' => array(0 => 'api', 1 => 'mail'), 'main_handler' => 'api', 'send_from' => 'admin@proconnect.com', 'send_to' => 'dev@groupe361.com'), 'locale' => 'fr', 'shapecode_cron.target_entity_resolver.cron_job.class' => 'Shapecode\\Bundle\\CronBundle\\Entity\\CronJob', 'shapecode_cron.target_entity_resolver.cron_job_result.class' => 'Shapecode\\Bundle\\CronBundle\\Entity\\CronJobResult', 'fragment.renderer.hinclude.global_template' => NULL, 'fragment.path' => '/_fragment', 'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt', 'kernel.http_method_override' => true, 'kernel.trusted_hosts' => array(), 'kernel.trusted_proxies' => array(), 'kernel.default_locale' => 'fr', 'templating.helper.code.file_link_format' => 'phpstorm://open?file=%f&line=%l', 'debug.file_link_format' => 'phpstorm://open?file=%f&line=%l', 'session.metadata.storage_key' => '_sf2_meta', 'session.storage.options' => array('cookie_httponly' => true, 'gc_probability' => 1), 'session.save_path' => ($this->targetDirs[3].'/app/../var/sessions/dev'), 'session.metadata.update_threshold' => '0', 'form.type_extension.csrf.enabled' => true, 'form.type_extension.csrf.field_name' => '_token', 'templating.loader.cache.path' => NULL, 'templating.engines' => array(0 => 'twig'), 'validator.mapping.cache.prefix' => '', 'validator.mapping.cache.file' => (__DIR__.'/validation.php'), 'validator.translation_domain' => 'validators', 'translator.logging' => true, 'profiler_listener.only_exceptions' => false, 'profiler_listener.only_master_requests' => false, 'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'), 'debug.error_handler.throw_at' => -1, 'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'), 'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'router.request_context.host' => 'localhost', 'router.request_context.scheme' => 'http', 'router.request_context.base_url' => '', 'router.resource' => ($this->targetDirs[3].'/app/config/routing_dev.yml'), 'router.cache_class_prefix' => 'appDevDebugProjectContainer', 'request_listener.http_port' => 80, 'request_listener.https_port' => 443, 'serializer.mapping.cache.file' => (__DIR__.'/serialization.php'), 'serializer.mapping.cache.prefix' => '', 'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken', 'security.role_hierarchy.roles' => array('ROLE_OFFICINE_OWNER' => array(0 => 'ROLE_USER'), 'ROLE_OFFICINE_OWNER_CERTIFY' => array(0 => 'ROLE_OFFICINE_OWNER'), 'ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN', 2 => 'ROLE_ALLOWED_TO_SWITCH'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')), 'security.access.denied_url' => NULL, 'security.authentication.manager.erase_credentials' => true, 'security.authentication.session_strategy.strategy' => 'migrate', 'security.access.always_authenticate_before_granting' => false, 'security.authentication.hide_user_not_found' => true, 'twig.exception_listener.controller' => 'twig.controller.exception:showAction', 'twig.form.resources' => array(0 => 'form_div_layout.html.twig', 1 => 'SonataFormatterBundle:Form:formatter.html.twig', 2 => 'SonataMediaBundle:Form:media_widgets.html.twig', 3 => 'EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig'), 'monolog.use_microseconds' => true, 'monolog.swift_mailer.handlers' => array(), 'monolog.handlers_to_channels' => array('monolog.handler.console' => array('type' => 'exclusive', 'elements' => array(0 => 'event', 1 => 'doctrine')), 'monolog.handler.main' => array('type' => 'exclusive', 'elements' => array(0 => 'event')), 'monolog.handler.app_main_log' => array('type' => 'inclusive', 'elements' => array(0 => 'console', 1 => 'import'))), 'monolog.additional_channels' => array(0 => 'import', 1 => 'console'), 'swiftmailer.class' => 'Swift_Mailer', 'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport', 'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport', 'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport', 'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin', 'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin', 'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger', 'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin', 'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport', 'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin', 'swiftmailer.spool.file.class' => 'Swift_FileSpool', 'swiftmailer.spool.memory.class' => 'Swift_MemorySpool', 'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener', 'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector', 'swiftmailer.mailer.default.transport.name' => 'smtp', 'swiftmailer.mailer.default.transport.smtp.encryption' => NULL, 'swiftmailer.mailer.default.transport.smtp.port' => 25, 'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1', 'swiftmailer.mailer.default.transport.smtp.username' => NULL, 'swiftmailer.mailer.default.transport.smtp.password' => NULL, 'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL, 'swiftmailer.mailer.default.transport.smtp.timeout' => 30, 'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL, 'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL, 'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'), 'swiftmailer.mailer.default.spool.enabled' => true, 'swiftmailer.mailer.default.plugin.impersonate' => NULL, 'swiftmailer.mailer.default.single_address' => NULL, 'swiftmailer.mailer.default.delivery.enabled' => true, 'swiftmailer.spool.enabled' => true, 'swiftmailer.delivery.enabled' => true, 'swiftmailer.single_address' => NULL, 'swiftmailer.mailers' => array('default' => 'swiftmailer.mailer.default'), 'swiftmailer.default_mailer' => 'default', 'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache', 'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache', 'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache', 'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache', 'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache', 'doctrine_cache.couchbase.connection.class' => 'Couchbase', 'doctrine_cache.couchbase.hostnames' => 'localhost:8091', 'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache', 'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache', 'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache', 'doctrine_cache.memcache.connection.class' => 'Memcache', 'doctrine_cache.memcache.host' => 'localhost', 'doctrine_cache.memcache.port' => 11211, 'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache', 'doctrine_cache.memcached.connection.class' => 'Memcached', 'doctrine_cache.memcached.host' => 'localhost', 'doctrine_cache.memcached.port' => 11211, 'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache', 'doctrine_cache.mongodb.collection.class' => 'MongoCollection', 'doctrine_cache.mongodb.connection.class' => 'MongoClient', 'doctrine_cache.mongodb.server' => 'localhost:27017', 'doctrine_cache.predis.client.class' => 'Predis\\Client', 'doctrine_cache.predis.scheme' => 'tcp', 'doctrine_cache.predis.host' => 'localhost', 'doctrine_cache.predis.port' => 6379, 'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache', 'doctrine_cache.redis.connection.class' => 'Redis', 'doctrine_cache.redis.host' => 'localhost', 'doctrine_cache.redis.port' => 6379, 'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache', 'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket', 'doctrine_cache.riak.connection.class' => 'Riak\\Connection', 'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList', 'doctrine_cache.riak.host' => 'localhost', 'doctrine_cache.riak.port' => 8087, 'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache', 'doctrine_cache.sqlite3.connection.class' => 'SQLite3', 'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache', 'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache', 'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache', 'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache', 'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache', 'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain', 'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack', 'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger', 'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration', 'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector', 'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager', 'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory', 'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit', 'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit', 'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry', 'doctrine.entity_managers' => array('default' => 'doctrine.orm.default_entity_manager'), 'doctrine.default_entity_manager' => 'default', 'doctrine.dbal.connection_factory.types' => array('json' => array('class' => 'Sonata\\Doctrine\\Types\\JsonType', 'commented' => true)), 'doctrine.connections' => array('default' => 'doctrine.dbal.default_connection'), 'doctrine.default_connection' => 'default', 'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration', 'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager', 'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator', 'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache', 'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache', 'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache', 'doctrine.orm.cache.memcache_host' => 'localhost', 'doctrine.orm.cache.memcache_port' => 11211, 'doctrine.orm.cache.memcache_instance.class' => 'Memcache', 'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache', 'doctrine.orm.cache.memcached_host' => 'localhost', 'doctrine.orm.cache.memcached_port' => 11211, 'doctrine.orm.cache.memcached_instance.class' => 'Memcached', 'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache', 'doctrine.orm.cache.redis_host' => 'localhost', 'doctrine.orm.cache.redis_port' => 6379, 'doctrine.orm.cache.redis_instance.class' => 'Redis', 'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache', 'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache', 'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache', 'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain', 'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver', 'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver', 'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver', 'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver', 'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver', 'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer', 'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser', 'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator', 'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer', 'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider', 'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener', 'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener', 'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy', 'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy', 'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy', 'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy', 'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver', 'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory', 'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion', 'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion', 'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain', 'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger', 'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration', 'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration', 'doctrine.orm.auto_generate_proxy_classes' => true, 'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'), 'doctrine.orm.proxy_namespace' => 'Proxies', 'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser', 'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener', 'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader', 'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader', 'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader', 'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener', 'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager', 'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter', 'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter', 'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener', 'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener', 'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener', 'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener', 'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager', 'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter', 'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo', 'stof_doctrine_extensions.default_locale' => 'fr', 'stof_doctrine_extensions.default_file_path' => NULL, 'stof_doctrine_extensions.translation_fallback' => false, 'stof_doctrine_extensions.persist_default_translation' => false, 'stof_doctrine_extensions.skip_translation_on_load' => false, 'stof_doctrine_extensions.uploadable.validate_writable_directory' => true, 'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener', 'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener', 'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener', 'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener', 'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener', 'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener', 'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener', 'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener', 'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener', 'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener', 'lexik_maintenance.listener.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Listener\\MaintenanceListener', 'lexik_maintenance.driver_factory.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\DriverFactory', 'lexik_maintenance.driver.database.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\DatabaseDriver', 'lexik_maintenance.driver' => array('class' => '\\Lexik\\Bundle\\MaintenanceBundle\\Drivers\\FileDriver', 'options' => array('file_path' => ($this->targetDirs[3].'/app/cache/lock')), 'ttl' => NULL), 'lexik_maintenance.authorized.path' => NULL, 'lexik_maintenance.authorized.host' => NULL, 'lexik_maintenance.authorized.ips' => NULL, 'lexik_maintenance.authorized.query' => array(), 'lexik_maintenance.authorized.cookie' => array(), 'lexik_maintenance.authorized.route' => NULL, 'lexik_maintenance.authorized.attributes' => array(), 'lexik_maintenance.response.http_code' => 503, 'lexik_maintenance.response.http_status' => 'Service Temporarily Unavailable', 'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator', 'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver', 'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain', 'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver', 'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver', 'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver', 'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver', 'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver', 'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver', 'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory', 'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache', 'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher', 'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy', 'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy', 'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy', 'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor', 'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor', 'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy', 'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer', 'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension', 'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper', 'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor', 'jms_serializer.json_serialization_visitor.options' => 0, 'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor', 'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor', 'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor', 'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(), 'jms_serializer.xml_serialization_visitor.format_output' => true, 'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor', 'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry', 'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler', 'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler', 'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler', 'jms_serializer.form_error_handler.class' => 'FOS\\RestBundle\\Serializer\\Normalizer\\FormErrorHandler', 'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler', 'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber', 'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber', 'jms_serializer.context_factory.serialization.class' => 'JMS\\Serializer\\ContextFactory\\DefaultSerializationContextFactory', 'jms_serializer.context_factory.deserialization.class' => 'JMS\\Serializer\\ContextFactory\\DefaultDeserializationContextFactory', 'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator', 'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage', 'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider', 'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy', 'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy', 'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory', 'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension', 'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper', 'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher', 'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider', 'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider', 'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider', 'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider', 'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer', 'knp_menu.renderer.list.options' => array(), 'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener', 'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter', 'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension', 'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer', 'knp_menu.renderer.twig.options' => array(), 'knp_menu.renderer.twig.template' => 'KnpMenuBundle::menu.html.twig', 'knp_menu.default_renderer' => 'twig', 'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager', 'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension', 'sonata.core.form_type' => 'standard', 'sonata.core.form.mapping.type' => array(), 'sonata.core.form.mapping.extension' => array(), 'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService', 'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService', 'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService', 'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService', 'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService', 'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService', 'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager', 'sonata.block.container.types' => array(0 => 'sonata.block.service.container', 1 => 'sonata.page.block.container', 2 => 'sonata.dashboard.block.container', 3 => 'cmf.block.container', 4 => 'cmf.block.slideshow'), 'sonata_block.blocks' => array('sonata.admin.block.admin_list' => array('contexts' => array(0 => 'admin'), 'templates' => array(), 'cache' => 'sonata.cache.noop', 'settings' => array())), 'sonata_block.blocks_by_class' => array(), 'sonata_block.cache_blocks' => array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop')), 'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator', 'sonata_doctrine_orm_admin.entity_manager' => NULL, 'sonata_doctrine_orm_admin.templates' => array('types' => array('list' => array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataIntlBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataIntlBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'email' => 'SonataAdminBundle:CRUD:list_email.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'smallint' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'bigint' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'integer' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'decimal' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'currency' => 'SonataIntlBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataIntlBundle:CRUD:list_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:list_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:list_html.html.twig'), 'show' => array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataIntlBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataIntlBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'email' => 'SonataAdminBundle:CRUD:show_email.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'bigint' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'integer' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'decimal' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'currency' => 'SonataIntlBundle:CRUD:show_currency.html.twig', 'percent' => 'SonataIntlBundle:CRUD:show_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:show_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:show_html.html.twig')), 'form' => array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'), 'filter' => array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig')), 'sonata.admin.twig.extension.x_editable_type_mapping' => array('choice' => 'select', 'boolean' => 'select', 'text' => 'text', 'textarea' => 'textarea', 'html' => 'textarea', 'email' => 'email', 'string' => 'text', 'smallint' => 'text', 'bigint' => 'text', 'integer' => 'number', 'decimal' => 'number', 'currency' => 'number', 'percent' => 'number', 'url' => 'url', 'date' => 'date'), 'sonata.admin.configuration.templates' => array('history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'user_block' => ':Block:user_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'), 'sonata.admin.configuration.admin_services' => array(), 'sonata.admin.configuration.dashboard_groups' => array('app.admin.group.media' => array('label' => 'Media', 'icon' => '<i class="fa fa-camera-retro"></i>', 'items' => array(0 => array('admin' => 'sonata.media.admin.media', 'label' => '', 'route' => '', 'route_params' => array(), 'route_absolute' => true, 'roles' => array())), 'on_top' => false, 'keep_open' => false, 'item_adds' => array(), 'roles' => array()), 'app.admin.group.news' => array('label' => 'News', 'icon' => '<i class="fa fa-newspaper-o"></i>', 'items' => array(0 => array('admin' => 'admin.news', 'label' => '', 'route' => '', 'route_params' => array(), 'route_absolute' => true, 'roles' => array())), 'on_top' => false, 'keep_open' => false, 'item_adds' => array(), 'roles' => array()), 'app.admin.group.faq' => array('label' => 'Faq', 'icon' => '<i class="fa fa-question-circle"></i>', 'items' => array(0 => array('admin' => 'admin.faq', 'label' => '', 'route' => '', 'route_params' => array(), 'route_absolute' => true, 'roles' => array())), 'on_top' => false, 'keep_open' => false, 'item_adds' => array(), 'roles' => array()), 'app.admin.group.pharmacien' => array('label' => 'Pharmacien', 'icon' => '<i class="fa fa-universal-access"></i>', 'items' => array(0 => array('admin' => 'admin.pharmacien', 'label' => '', 'route' => '', 'route_params' => array(), 'route_absolute' => true, 'roles' => array())), 'on_top' => false, 'keep_open' => false, 'item_adds' => array(), 'roles' => array())), 'sonata.admin.configuration.dashboard_blocks' => array(0 => array('position' => 'left', 'settings' => array(), 'type' => 'sonata.admin.block.admin_list', 'roles' => array())), 'sonata.admin.configuration.sort_admins' => false, 'sonata.admin.configuration.breadcrumbs' => array('child_admin_route' => 'edit'), 'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager', 'sonata.admin.configuration.security.information' => array(), 'sonata.admin.configuration.security.admin_permissions' => array(0 => 'CREATE', 1 => 'LIST', 2 => 'DELETE', 3 => 'UNDELETE', 4 => 'EXPORT', 5 => 'OPERATOR', 6 => 'MASTER'), 'sonata.admin.configuration.security.object_permissions' => array(0 => 'VIEW', 1 => 'EDIT', 2 => 'DELETE', 3 => 'UNDELETE', 4 => 'OPERATOR', 5 => 'MASTER', 6 => 'OWNER'), 'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler', 'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler', 'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler', 'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder', 'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator', 'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator', 'sonata.admin.extension.map' => array('admins' => array(), 'excludes' => array(), 'implements' => array(), 'extends' => array(), 'instanceof' => array(), 'uses' => array()), 'sonata.admin.configuration.filters.persist' => false, 'sonata.admin.configuration.show.mosaic.button' => true, 'sonata.intl.locale_detector.request.class' => 'Sonata\\IntlBundle\\Locale\\RequestDetector', 'sonata.intl.locale_detector.session.class' => 'Sonata\\IntlBundle\\Locale\\SessionDetector', 'sonata.intl.templating.helper.locale.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\LocaleHelper', 'sonata.intl.templating.helper.number.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\NumberHelper', 'sonata.intl.templating.helper.datetime.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\DateTimeHelper', 'sonata.intl.timezone_detector.chain.class' => 'Sonata\\IntlBundle\\Timezone\\ChainTimezoneDetector', 'sonata.intl.timezone_detector.user.class' => 'Sonata\\IntlBundle\\Timezone\\UserBasedTimezoneDetector', 'sonata.intl.timezone_detector.locale.class' => 'Sonata\\IntlBundle\\Timezone\\LocaleBasedTimezoneDetector', 'sonata.intl.twig.helper.locale.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\LocaleExtension', 'sonata.intl.twig.helper.number.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\NumberExtension', 'sonata.intl.twig.helper.datetime.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\DateTimeExtension', 'sonata_intl.timezone.detectors' => array(0 => 'sonata.intl.timezone_detector.locale'), 'sonata.classification.manager.category.class' => 'Sonata\\ClassificationBundle\\Entity\\CategoryManager', 'sonata.classification.manager.tag.class' => 'Sonata\\ClassificationBundle\\Entity\\TagManager', 'sonata.classification.manager.collection.class' => 'Sonata\\ClassificationBundle\\Entity\\CollectionManager', 'sonata.classification.manager.context.class' => 'Sonata\\ClassificationBundle\\Entity\\ContextManager', 'sonata.classification.admin.groupname' => 'sonata_classification', 'sonata.classification.admin.groupicon' => '<i class=\'fa fa-tags\'></i>', 'sonata.classification.admin.tag.entity' => 'AppBundle\\Entity\\Classification\\Tag', 'sonata.classification.admin.category.entity' => 'AppBundle\\Entity\\Classification\\Category', 'sonata.classification.admin.collection.entity' => 'AppBundle\\Entity\\Classification\\Collection', 'sonata.classification.admin.context.entity' => 'AppBundle\\Entity\\Classification\\Context', 'sonata.classification.manager.tag.entity' => 'AppBundle\\Entity\\Classification\\Tag', 'sonata.classification.manager.category.entity' => 'AppBundle\\Entity\\Classification\\Category', 'sonata.classification.manager.collection.entity' => 'AppBundle\\Entity\\Classification\\Collection', 'sonata.classification.manager.context.entity' => 'AppBundle\\Entity\\Classification\\Context', 'sonata.classification.admin.category.class' => 'Sonata\\ClassificationBundle\\Admin\\CategoryAdmin', 'sonata.classification.admin.category.controller' => 'SonataClassificationBundle:CategoryAdmin', 'sonata.classification.admin.category.translation_domain' => 'SonataClassificationBundle', 'sonata.classification.admin.tag.class' => 'Sonata\\ClassificationBundle\\Admin\\TagAdmin', 'sonata.classification.admin.tag.controller' => 'SonataAdminBundle:CRUD', 'sonata.classification.admin.tag.translation_domain' => 'SonataClassificationBundle', 'sonata.classification.admin.collection.class' => 'Sonata\\ClassificationBundle\\Admin\\CollectionAdmin', 'sonata.classification.admin.collection.controller' => 'SonataAdminBundle:CRUD', 'sonata.classification.admin.collection.translation_domain' => 'SonataClassificationBundle', 'sonata.classification.admin.context.class' => 'Sonata\\ClassificationBundle\\Admin\\ContextAdmin', 'sonata.classification.admin.context.controller' => 'SonataAdminBundle:CRUD', 'sonata.classification.admin.context.translation_domain' => 'SonataClassificationBundle', 'sonata.media.provider.image.class' => 'Sonata\\MediaBundle\\Provider\\ImageProvider', 'sonata.media.provider.file.class' => 'Sonata\\MediaBundle\\Provider\\FileProvider', 'sonata.media.provider.youtube.class' => 'Sonata\\MediaBundle\\Provider\\YouTubeProvider', 'sonata.media.provider.dailymotion.class' => 'Sonata\\MediaBundle\\Provider\\DailyMotionProvider', 'sonata.media.provider.vimeo.class' => 'Sonata\\MediaBundle\\Provider\\VimeoProvider', 'sonata.media.thumbnail.format' => 'Sonata\\MediaBundle\\Thumbnail\\FormatThumbnail', 'sonata.media.thumbnail.format.default' => 'jpg', 'sonata.media.thumbnail.liip_imagine' => 'Sonata\\MediaBundle\\Thumbnail\\LiipImagineThumbnail', 'sonata.media.pool.class' => 'Sonata\\MediaBundle\\Provider\\Pool', 'sonata.media.resizer.simple.class' => 'Sonata\\MediaBundle\\Resizer\\SimpleResizer', 'sonata.media.resizer.square.class' => 'Sonata\\MediaBundle\\Resizer\\SquareResizer', 'sonata.media.adapter.image.gd.class' => 'Imagine\\Gd\\Imagine', 'sonata.media.adapter.image.imagick.class' => 'Imagine\\Imagick\\Imagine', 'sonata.media.adapter.image.gmagick.class' => 'Imagine\\Gmagick\\Imagine', 'sonata.media.metadata.proxy.class' => 'Sonata\\MediaBundle\\Metadata\\ProxyMetadataBuilder', 'sonata.media.metadata.amazon.class' => 'Sonata\\MediaBundle\\Metadata\\AmazonMetadataBuilder', 'sonata.media.metadata.noop.class' => 'Sonata\\MediaBundle\\Metadata\\NoopMetadataBuilder', 'sonata.media.adapater.filesystem.opencloud.class' => '', 'sonata.media.block.media.class' => 'Sonata\\MediaBundle\\Block\\MediaBlockService', 'sonata.media.block.feature_media.class' => 'Sonata\\MediaBundle\\Block\\FeatureMediaBlockService', 'sonata.media.block.gallery.class' => 'Sonata\\MediaBundle\\Block\\GalleryBlockService', 'sonata.media.block.gallery_list.class' => 'Sonata\\MediaBundle\\Block\\GalleryListBlockService', 'sonata.media.manager.media.class' => 'Sonata\\MediaBundle\\Entity\\MediaManager', 'sonata.media.manager.gallery.class' => 'Sonata\\MediaBundle\\Entity\\GalleryManager', 'sonata.media.admin.groupname' => 'sonata_media', 'sonata.media.admin.groupicon' => '<i class=\'fa fa-image\'></i>', 'sonata.media.admin.media.class' => 'Sonata\\MediaBundle\\Admin\\ORM\\MediaAdmin', 'sonata.media.admin.media.controller' => 'SonataMediaBundle:MediaAdmin', 'sonata.media.admin.media.translation_domain' => 'SonataMediaBundle', 'sonata.media.admin.gallery.class' => 'Sonata\\MediaBundle\\Admin\\GalleryAdmin', 'sonata.media.admin.gallery.controller' => 'SonataMediaBundle:GalleryAdmin', 'sonata.media.admin.gallery.translation_domain' => 'SonataMediaBundle', 'sonata.media.admin.gallery_has_media.class' => 'Sonata\\MediaBundle\\Admin\\GalleryHasMediaAdmin', 'sonata.media.admin.gallery_has_media.controller' => 'SonataAdminBundle:CRUD', 'sonata.media.admin.gallery_has_media.translation_domain' => 'SonataMediaBundle', 'sonata.media.admin_format' => array('width' => 200, 'height' => false, 'quality' => 90, 'format' => 'jpg', 'constraint' => true), 'sonata.media.resizer.simple.adapter.mode' => 'inset', 'sonata.media.resizer.square.adapter.mode' => 'inset', 'sonata.media.admin.media.entity' => 'AppBundle\\Entity\\Media\\Media', 'sonata.media.admin.gallery.entity' => 'AppBundle\\Entity\\Media\\Gallery', 'sonata.media.admin.gallery_has_media.entity' => 'AppBundle\\Entity\\Media\\GalleryHasMedia', 'sonata.media.media.class' => 'AppBundle\\Entity\\Media\\Media', 'sonata.media.gallery.class' => 'AppBundle\\Entity\\Media\\Gallery', 'fos_user.backend_type_orm' => true, 'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener', 'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager', 'fos_user.resetting.email.template' => '@FOSUser/Email/resetting_email.txt.twig', 'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'fos_user.storage' => 'orm', 'fos_user.firewall_name' => 'main', 'fos_user.model_manager_name' => NULL, 'fos_user.model.user.class' => 'AppBundle\\Entity\\User', 'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 'fos_user.profile.form.name' => 'fos_user_profile_form', 'fos_user.profile.form.validation_groups' => array(0 => 'Profile', 1 => 'Default'), 'fos_user.registration.confirmation.from_email' => array('noreply@proconnect.com' => 'Biogaran Pro Connect'), 'fos_user.registration.confirmation.enabled' => false, 'fos_user.registration.form.type' => 'AppBundle\\Form\\RegistrationType', 'fos_user.registration.form.validation_groups' => array(0 => 'AppRegistration'), 'fos_user.registration.form.name' => 'fos_user_registration_form', 'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 'fos_user.change_password.form.name' => 'fos_user_change_password_form', 'fos_user.change_password.form.validation_groups' => array(0 => 'ChangePassword', 1 => 'Default'), 'fos_user.resetting.email.from_email' => array('noreply@proconnect.com' => 'Biogaran Pro Connect'), 'fos_user.resetting.retry_ttl' => false, 'fos_user.resetting.token_ttl' => 86400, 'fos_user.resetting.form.validation_groups' => array(0 => 'AppResetting'), 'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 'fos_user.resetting.form.name' => 'fos_user_resetting_form', 'templating.helper.markdown.class' => 'Knp\\Bundle\\MarkdownBundle\\Helper\\MarkdownHelper', 'sonata.formatter.text.markdown.class' => 'Sonata\\FormatterBundle\\Formatter\\MarkdownFormatter', 'sonata.formatter.text.text.class' => 'Sonata\\FormatterBundle\\Formatter\\TextFormatter', 'sonata.formatter.text.raw.class' => 'Sonata\\FormatterBundle\\Formatter\\RawFormatter', 'sonata.formatter.text.twigengine.class' => 'Sonata\\FormatterBundle\\Formatter\\TwigFormatter', 'sonata.formatter.block.formatter.class' => 'Sonata\\FormatterBundle\\Block\\FormatterBlockService', 'sonata.formatter.ckeditor.extension.class' => 'Sonata\\FormatterBundle\\Admin\\CkeditorAdminExtension', 'sonata.formatter.ckeditor.configuration.templates' => array('browser' => 'SonataFormatterBundle:Ckeditor:browser.html.twig', 'upload' => 'SonataFormatterBundle:Ckeditor:upload.html.twig'), 'guzzle.http_client.class' => 'GuzzleHttp\\Client', 'guzzle.middleware.class' => 'GuzzleHttp\\Middleware', 'guzzle.formatter.class' => 'GuzzleHttp\\MessageFormatter', 'guzzle_bundle.data_collector.class' => 'EightPoints\\Bundle\\GuzzleBundle\\DataCollector\\HttpDataCollector', 'guzzle_bundle.logger.class' => 'EightPoints\\Bundle\\GuzzleBundle\\Log\\Logger', 'guzzle_bundle.middleware.log.class' => 'EightPoints\\Bundle\\GuzzleBundle\\Middleware\\LogMiddleware', 'guzzle_bundle.middleware.event_dispatcher.class' => 'EightPoints\\Bundle\\GuzzleBundle\\Middleware\\EventDispatchMiddleware', 'guzzle.plugin.header.headers' => array(), 'guzzle_bundle.middleware.wsse.class' => 'EightPoints\\Guzzle\\WsseAuthMiddleware', 'guzzle.plugin.wsse.username' => '', 'guzzle.plugin.wsse.password' => '', 'fos_rest.format_listener.rules' => array(0 => array('priorities' => array(0 => 'json'), 'fallback_format' => 'json', 'path' => NULL, 'host' => NULL, 'methods' => NULL, 'attributes' => array(), 'stop' => false, 'prefer_extension' => true)), 'nelmio_api_doc.motd.template' => 'NelmioApiDocBundle::Components/motd.html.twig', 'nelmio_api_doc.exclude_sections' => array(), 'nelmio_api_doc.default_sections_opened' => true, 'nelmio_api_doc.api_name' => 'Biogaran Pro API Documentation', 'nelmio_api_doc.sandbox.enabled' => true, 'nelmio_api_doc.sandbox.endpoint' => NULL, 'nelmio_api_doc.sandbox.accept_type' => 'application/json', 'nelmio_api_doc.sandbox.body_format.formats' => array(), 'nelmio_api_doc.sandbox.body_format.default_format' => 'json', 'nelmio_api_doc.sandbox.request_format.method' => 'accept_header', 'nelmio_api_doc.sandbox.request_format.default_format' => 'json', 'nelmio_api_doc.sandbox.request_format.formats' => array(), 'nelmio_api_doc.sandbox.entity_to_choice' => true, 'nelmio_api_doc.formatter.abstract_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\AbstractFormatter', 'nelmio_api_doc.formatter.markdown_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\MarkdownFormatter', 'nelmio_api_doc.formatter.simple_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SimpleFormatter', 'nelmio_api_doc.formatter.html_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\HtmlFormatter', 'nelmio_api_doc.formatter.swagger_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SwaggerFormatter', 'nelmio_api_doc.sandbox.authentication' => NULL, 'nelmio_api_doc.extractor.api_doc_extractor.class' => 'Nelmio\\ApiDocBundle\\Extractor\\ApiDocExtractor', 'nelmio_api_doc.form.extension.description_form_type_extension.class' => 'Nelmio\\ApiDocBundle\\Form\\Extension\\DescriptionFormTypeExtension', 'nelmio_api_doc.twig.extension.extra_markdown.class' => 'Nelmio\\ApiDocBundle\\Twig\\Extension\\MarkdownExtension', 'nelmio_api_doc.doc_comment_extractor.class' => 'Nelmio\\ApiDocBundle\\Util\\DocCommentExtractor', 'nelmio_api_doc.extractor.handler.fos_rest.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\FosRestHandler', 'nelmio_api_doc.extractor.handler.jms_security.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\JmsSecurityExtraHandler', 'nelmio_api_doc.extractor.handler.sensio_framework_extra.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\SensioFrameworkExtraHandler', 'nelmio_api_doc.extractor.handler.phpdoc.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\PhpDocHandler', 'nelmio_api_doc.parser.collection_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\CollectionParser', 'nelmio_api_doc.parser.form_errors_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormErrorsParser', 'nelmio_api_doc.parser.json_serializable_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JsonSerializableParser', 'nelmio_api_doc.request_listener.parameter' => '_doc', 'nelmio_api_doc.event_listener.request.class' => 'Nelmio\\ApiDocBundle\\EventListener\\RequestListener', 'nelmio_api_doc.parser.validation_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\ValidationParserLegacy', 'nelmio_api_doc.swagger.base_path' => '/api', 'nelmio_api_doc.swagger.swagger_version' => '1.2', 'nelmio_api_doc.swagger.api_version' => '0.1', 'nelmio_api_doc.swagger.info' => array('title' => 'Symfony2', 'description' => 'My awesome Symfony2 app!', 'TermsOfServiceUrl' => NULL, 'contact' => NULL, 'license' => NULL, 'licenseUrl' => NULL), 'nelmio_api_doc.swagger.model_naming_strategy' => 'dot_notation', 'ewz_recaptcha.public_key' => '6LdnMxgUAAAAAHjG60oxrfd9K2Y61w3DrZ994LPV', 'ewz_recaptcha.private_key' => '6LdnMxgUAAAAAPL-nDs2NmwRQAyJe0mofm9wG_ER', 'ewz_recaptcha.enabled' => true, 'ewz_recaptcha.verify_host' => false, 'ewz_recaptcha.ajax' => false, 'ewz_recaptcha.locale_key' => 'fr', 'ewz_recaptcha.locale_from_request' => false, 'ewz_recaptcha.http_proxy' => array('host' => NULL, 'port' => NULL, 'auth' => NULL), 'web_profiler.debug_toolbar.position' => 'bottom', 'web_profiler.debug_toolbar.intercept_redirects' => false, 'web_profiler.debug_toolbar.mode' => 2, 'hautelook_alice.locale' => 'fr_FR', 'hautelook_alice.loading_limit' => 10, 'hautelook_alice.db_drivers' => array('orm' => NULL, 'mongodb' => NULL, 'phpcr' => NULL), 'hautelook_alice.seed' => 1, 'hautelook_alice.persist_once' => false));

        if ($this->has('logger')) {
            $instance->setLogger($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'hautelook_alice.alice.processor_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Hautelook\AliceBundle\Alice\ProcessorChain A Hautelook\AliceBundle\Alice\ProcessorChain instance
     */
    protected function getHautelookAlice_Alice_ProcessorChainService($lazyLoad = true)
    {
        return $this->services['hautelook_alice.alice.processor_chain'] = new \Hautelook\AliceBundle\Alice\ProcessorChain(array());
    }

    /**
     * Gets the 'hautelook_alice.bundle_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hautelook\AliceBundle\Resolver\BundlesResolver A Hautelook\AliceBundle\Resolver\BundlesResolver instance
     */
    protected function getHautelookAlice_BundleResolverService()
    {
        return $this->services['hautelook_alice.bundle_resolver'] = new \Hautelook\AliceBundle\Resolver\BundlesResolver();
    }

    /**
     * Gets the 'hautelook_alice.doctrine.command.deprecated_load_command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hautelook\AliceBundle\Doctrine\Command\LoadDataFixturesCommand A Hautelook\AliceBundle\Doctrine\Command\LoadDataFixturesCommand instance
     */
    protected function getHautelookAlice_Doctrine_Command_DeprecatedLoadCommandService()
    {
        return $this->services['hautelook_alice.doctrine.command.deprecated_load_command'] = $this->get('hautelook_alice.doctrine.command_factory')->createCommand('hautelook_alice:fixtures:load', $this->get('doctrine'), $this->get('hautelook_alice.fixtures.loader'), $this->get('hautelook_alice.alice.fixtures.loader'), $this->get('hautelook_alice.doctrine.orm.fixtures_finder'), $this->get('hautelook_alice.bundle_resolver'), $this->get('hautelook_alice.doctrine.orm.loader_generator'), $this->get('hautelook_alice.doctrine.executor.fixtures_executor'));
    }

    /**
     * Gets the 'hautelook_alice.doctrine.command.load_command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hautelook\AliceBundle\Doctrine\Command\LoadDataFixturesCommand A Hautelook\AliceBundle\Doctrine\Command\LoadDataFixturesCommand instance
     */
    protected function getHautelookAlice_Doctrine_Command_LoadCommandService()
    {
        return $this->services['hautelook_alice.doctrine.command.load_command'] = $this->get('hautelook_alice.doctrine.command_factory')->createCommand('hautelook_alice:doctrine:fixtures:load', $this->get('doctrine'), $this->get('hautelook_alice.fixtures.loader'), $this->get('hautelook_alice.alice.fixtures.loader'), $this->get('hautelook_alice.doctrine.orm.fixtures_finder'), $this->get('hautelook_alice.bundle_resolver'), $this->get('hautelook_alice.doctrine.orm.loader_generator'), $this->get('hautelook_alice.doctrine.executor.fixtures_executor'));
    }

    /**
     * Gets the 'hautelook_alice.doctrine.command_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Hautelook\AliceBundle\Doctrine\Command\CommandFactory A Hautelook\AliceBundle\Doctrine\Command\CommandFactory instance
     */
    protected function getHautelookAlice_Doctrine_CommandFactoryService($lazyLoad = true)
    {
        return $this->services['hautelook_alice.doctrine.command_factory'] = new \Hautelook\AliceBundle\Doctrine\Command\CommandFactory();
    }

    /**
     * Gets the 'hautelook_alice.doctrine.executor.fixtures_executor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Hautelook\AliceBundle\Doctrine\DataFixtures\Executor\FixturesExecutor A Hautelook\AliceBundle\Doctrine\DataFixtures\Executor\FixturesExecutor instance
     */
    protected function getHautelookAlice_Doctrine_Executor_FixturesExecutorService($lazyLoad = true)
    {
        return $this->services['hautelook_alice.doctrine.executor.fixtures_executor'] = new \Hautelook\AliceBundle\Doctrine\DataFixtures\Executor\FixturesExecutor();
    }

    /**
     * Gets the 'hautelook_alice.doctrine.orm.fixtures_finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hautelook\AliceBundle\Doctrine\Finder\FixturesFinder A Hautelook\AliceBundle\Doctrine\Finder\FixturesFinder instance
     */
    protected function getHautelookAlice_Doctrine_Orm_FixturesFinderService()
    {
        $this->services['hautelook_alice.doctrine.orm.fixtures_finder'] = $instance = new \Hautelook\AliceBundle\Doctrine\Finder\FixturesFinder('DataFixtures/ORM');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'hautelook_alice.doctrine.orm.loader_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hautelook\AliceBundle\Doctrine\Generator\LoaderGenerator A Hautelook\AliceBundle\Doctrine\Generator\LoaderGenerator instance
     */
    protected function getHautelookAlice_Doctrine_Orm_LoaderGeneratorService()
    {
        return $this->services['hautelook_alice.doctrine.orm.loader_generator'] = new \Hautelook\AliceBundle\Doctrine\Generator\LoaderGenerator($this->get('hautelook_alice.doctrine.orm.fixtures_finder'));
    }

    /**
     * Gets the 'hautelook_alice.faker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Faker\Generator A Faker\Generator instance
     */
    protected function getHautelookAlice_FakerService($lazyLoad = true)
    {
        $this->services['hautelook_alice.faker'] = $instance = \Faker\Factory::create('fr_FR');

        $instance->seed(1);

        return $instance;
    }

    /**
     * Gets the 'hautelook_alice.faker.provider_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Hautelook\AliceBundle\Faker\Provider\ProviderChain A Hautelook\AliceBundle\Faker\Provider\ProviderChain instance
     */
    protected function getHautelookAlice_Faker_ProviderChainService($lazyLoad = true)
    {
        return $this->services['hautelook_alice.faker.provider_chain'] = new \Hautelook\AliceBundle\Faker\Provider\ProviderChain(array());
    }

    /**
     * Gets the 'hautelook_alice.fixtures.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Hautelook\AliceBundle\Alice\DataFixtures\Loader A Hautelook\AliceBundle\Alice\DataFixtures\Loader instance
     */
    protected function getHautelookAlice_Fixtures_LoaderService()
    {
        return $this->services['hautelook_alice.fixtures.loader'] = new \Hautelook\AliceBundle\Alice\DataFixtures\Loader($this->get('hautelook_alice.alice.fixtures.loader'), $this->get('hautelook_alice.alice.processor_chain'), false, 10);
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('debug.event_dispatcher'), $this->get('debug.controller_resolver'), $this->get('request_stack'), $this->get('debug.argument_resolver'));
    }

    /**
     * Gets the 'ivory_ck_editor.config_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\ConfigManager A Ivory\CKEditorBundle\Model\ConfigManager instance
     */
    protected function getIvoryCkEditor_ConfigManagerService()
    {
        return $this->services['ivory_ck_editor.config_manager'] = new \Ivory\CKEditorBundle\Model\ConfigManager();
    }

    /**
     * Gets the 'ivory_ck_editor.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Form\Type\CKEditorType A Ivory\CKEditorBundle\Form\Type\CKEditorType instance
     */
    protected function getIvoryCkEditor_Form_TypeService()
    {
        return $this->services['ivory_ck_editor.form.type'] = new \Ivory\CKEditorBundle\Form\Type\CKEditorType($this->get('ivory_ck_editor.config_manager'), $this->get('ivory_ck_editor.plugin_manager'), $this->get('ivory_ck_editor.styles_set_manager'), $this->get('ivory_ck_editor.template_manager'), $this->get('ivory_ck_editor.toolbar_manager'));
    }

    /**
     * Gets the 'ivory_ck_editor.plugin_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\PluginManager A Ivory\CKEditorBundle\Model\PluginManager instance
     */
    protected function getIvoryCkEditor_PluginManagerService()
    {
        return $this->services['ivory_ck_editor.plugin_manager'] = new \Ivory\CKEditorBundle\Model\PluginManager();
    }

    /**
     * Gets the 'ivory_ck_editor.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Renderer\CKEditorRenderer A Ivory\CKEditorBundle\Renderer\CKEditorRenderer instance
     */
    protected function getIvoryCkEditor_RendererService()
    {
        return $this->services['ivory_ck_editor.renderer'] = new \Ivory\CKEditorBundle\Renderer\CKEditorRenderer($this);
    }

    /**
     * Gets the 'ivory_ck_editor.renderer.json_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\JsonBuilder\JsonBuilder A Ivory\JsonBuilder\JsonBuilder instance
     */
    protected function getIvoryCkEditor_Renderer_JsonBuilderService()
    {
        return $this->services['ivory_ck_editor.renderer.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder($this->get('property_accessor', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'ivory_ck_editor.styles_set_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\StylesSetManager A Ivory\CKEditorBundle\Model\StylesSetManager instance
     */
    protected function getIvoryCkEditor_StylesSetManagerService()
    {
        return $this->services['ivory_ck_editor.styles_set_manager'] = new \Ivory\CKEditorBundle\Model\StylesSetManager();
    }

    /**
     * Gets the 'ivory_ck_editor.template_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\TemplateManager A Ivory\CKEditorBundle\Model\TemplateManager instance
     */
    protected function getIvoryCkEditor_TemplateManagerService()
    {
        return $this->services['ivory_ck_editor.template_manager'] = new \Ivory\CKEditorBundle\Model\TemplateManager();
    }

    /**
     * Gets the 'ivory_ck_editor.toolbar_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\ToolbarManager A Ivory\CKEditorBundle\Model\ToolbarManager instance
     */
    protected function getIvoryCkEditor_ToolbarManagerService()
    {
        return $this->services['ivory_ck_editor.toolbar_manager'] = new \Ivory\CKEditorBundle\Model\ToolbarManager();
    }

    /**
     * Gets the 'ivory_ck_editor.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Twig\CKEditorExtension A Ivory\CKEditorBundle\Twig\CKEditorExtension instance
     */
    protected function getIvoryCkEditor_TwigExtensionService()
    {
        return $this->services['ivory_ck_editor.twig_extension'] = new \Ivory\CKEditorBundle\Twig\CKEditorExtension($this->get('ivory_ck_editor.renderer'));
    }

    /**
     * Gets the 'jms_serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Serializer A JMS\Serializer\Serializer instance
     */
    protected function getJmsSerializerService()
    {
        $a = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $a->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL)), 'serializer.post_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL))));

        $this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, $this->get('jms_serializer.handler_registry'), ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : $this->getJmsSerializer_UnserializeObjectConstructorService()) && false ?: '_'}, new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_serialization_visitor'), 'xml' => $this->get('jms_serializer.xml_serialization_visitor'), 'yml' => $this->get('jms_serializer.yaml_serialization_visitor'))), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_deserialization_visitor'), 'xml' => $this->get('jms_serializer.xml_deserialization_visitor'))), $a, NULL, $this->get('jms_serializer.expression_evaluator'));

        $instance->setSerializationContextFactory($this->get('jms_serializer.serialization_context_factory'));
        $instance->setDeserializationContextFactory($this->get('jms_serializer.deserialization_context_factory'));

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.accessor_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Accessor\ExpressionAccessorStrategy A JMS\Serializer\Accessor\ExpressionAccessorStrategy instance
     */
    protected function getJmsSerializer_AccessorStrategyService()
    {
        return $this->services['jms_serializer.accessor_strategy'] = new \JMS\Serializer\Accessor\ExpressionAccessorStrategy($this->get('jms_serializer.expression_evaluator'), new \JMS\Serializer\Accessor\DefaultAccessorStrategy());
    }

    /**
     * Gets the 'jms_serializer.array_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler A JMS\Serializer\Handler\ArrayCollectionHandler instance
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.constraint_violation_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler A JMS\Serializer\Handler\ConstraintViolationHandler instance
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the 'jms_serializer.datetime_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\DateHandler A JMS\Serializer\Handler\DateHandler instance
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'Europe/Berlin', true);
    }

    /**
     * Gets the 'jms_serializer.deserialization_context_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\ContextFactory\DefaultDeserializationContextFactory A JMS\Serializer\ContextFactory\DefaultDeserializationContextFactory instance
     */
    protected function getJmsSerializer_DeserializationContextFactoryService()
    {
        return $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\Serializer\ContextFactory\DefaultDeserializationContextFactory();
    }

    /**
     * Gets the 'jms_serializer.doctrine_proxy_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber A JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber instance
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber();
    }

    /**
     * Gets the 'jms_serializer.expression_evaluator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Expression\ExpressionEvaluator A JMS\Serializer\Expression\ExpressionEvaluator instance
     */
    protected function getJmsSerializer_ExpressionEvaluatorService()
    {
        $a = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $a->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        return $this->services['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator($a, array('container' => $this));
    }

    /**
     * Gets the 'jms_serializer.form_error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Serializer\Normalizer\FormErrorHandler A FOS\RestBundle\Serializer\Normalizer\FormErrorHandler instance
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \FOS\RestBundle\Serializer\Normalizer\FormErrorHandler($this->get('translator'));
    }

    /**
     * Gets the 'jms_serializer.handler_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Serializer\JMSHandlerRegistry A FOS\RestBundle\Serializer\JMSHandlerRegistry instance
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \FOS\RestBundle\Serializer\JMSHandlerRegistry(${($_ = isset($this->services['fos_rest.serializer.jms_handler_registry']) ? $this->services['fos_rest.serializer.jms_handler_registry'] : $this->getFosRest_Serializer_JmsHandlerRegistryService()) && false ?: '_'});
    }

    /**
     * Gets the 'jms_serializer.json_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor A JMS\Serializer\JsonDeserializationVisitor instance
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the 'jms_serializer.json_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\JsonSerializationVisitor A JMS\Serializer\JsonSerializationVisitor instance
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver A JMS\Serializer\Metadata\Driver\DoctrineTypeDriver instance
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer'), 'Symfony\\Bundle\\SecurityBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/config/serializer'), 'Symfony\\Bundle\\TwigBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer'), 'Symfony\\Bundle\\MonologBundle' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\SwiftmailerBundle' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineBundle' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\FrameworkExtraBundle' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/config/serializer'), 'Stof\\DoctrineExtensionsBundle' => ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle/Resources/config/serializer'), 'Lexik\\Bundle\\MaintenanceBundle' => ($this->targetDirs[3].'/vendor/lexik/maintenance-bundle/Resources/config/serializer'), 'JMS\\SerializerBundle' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/config/serializer'), 'Knp\\Bundle\\MenuBundle' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Resources/config/serializer'), 'Sonata\\CoreBundle' => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/config/serializer'), 'Sonata\\BlockBundle' => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/config/serializer'), 'Sonata\\DoctrineORMAdminBundle' => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/config/serializer'), 'Sonata\\AdminBundle' => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/config/serializer'), 'Sonata\\IntlBundle' => ($this->targetDirs[3].'/vendor/sonata-project/intl-bundle/Resources/config/serializer'), 'Sonata\\ClassificationBundle' => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/config/serializer'), 'Sonata\\MediaBundle' => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/config/serializer'), 'Sonata\\EasyExtendsBundle' => ($this->targetDirs[3].'/vendor/sonata-project/easy-extends-bundle/Resources/config/serializer'), 'FOS\\UserBundle' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/serializer'), 'Shapecode\\Bundle\\CronBundle' => ($this->targetDirs[3].'/vendor/shapecode/cron-bundle/src/Resources/config/serializer'), 'AppBundle' => ($this->targetDirs[3].'/src/AppBundle/Resources/config/serializer'), 'Knp\\Bundle\\MarkdownBundle' => ($this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle/Resources/config/serializer'), 'Ivory\\CKEditorBundle' => ($this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Resources/config/serializer'), 'Sonata\\FormatterBundle' => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/config/serializer'), 'RedCode\\TreeBundle' => ($this->targetDirs[3].'/vendor/redcode/tree-bundle/RedCode/TreeBundle/Resources/config/serializer'), 'EightPoints\\Bundle\\GuzzleBundle' => ($this->targetDirs[3].'/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle/Resources/config/serializer'), 'FOS\\RestBundle' => ($this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Resources/config/serializer'), 'Nelmio\\ApiDocBundle' => ($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/config/serializer'), 'EWZ\\Bundle\\RecaptchaBundle' => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/config/serializer'), 'Symfony\\Bundle\\DebugBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/config/serializer'), 'Symfony\\Bundle\\WebProfilerBundle' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/config/serializer'), 'Sensio\\Bundle\\DistributionBundle' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\GeneratorBundle' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle/Resources/config/serializer'), 'Hautelook\\AliceBundle' => ($this->targetDirs[3].'/vendor/hautelook/alice-bundle/src/Resources/config/serializer'), 'Liip\\FunctionalTestBundle' => ($this->targetDirs[3].'/vendor/liip/functional-test-bundle/Resources/config/serializer')));

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }

    /**
     * Gets the 'jms_serializer.naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy A JMS\Serializer\Naming\CacheNamingStrategy instance
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /**
     * Gets the 'jms_serializer.object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor A JMS\Serializer\Construction\DoctrineObjectConstructor instance
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor($this->get('doctrine'), ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : $this->getJmsSerializer_UnserializeObjectConstructorService()) && false ?: '_'});
    }

    /**
     * Gets the 'jms_serializer.php_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\PhpCollectionHandler A JMS\Serializer\Handler\PhpCollectionHandler instance
     */
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.serialization_context_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\ContextFactory\DefaultSerializationContextFactory A JMS\Serializer\ContextFactory\DefaultSerializationContextFactory instance
     */
    protected function getJmsSerializer_SerializationContextFactoryService()
    {
        return $this->services['jms_serializer.serialization_context_factory'] = new \JMS\Serializer\ContextFactory\DefaultSerializationContextFactory();
    }

    /**
     * Gets the 'jms_serializer.stopwatch_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber A JMS\SerializerBundle\Serializer\StopwatchEventSubscriber instance
     */
    protected function getJmsSerializer_StopwatchSubscriberService()
    {
        return $this->services['jms_serializer.stopwatch_subscriber'] = new \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber($this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'jms_serializer.templating.helper.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\Templating\SerializerHelper A JMS\SerializerBundle\Templating\SerializerHelper instance
     */
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }

    /**
     * Gets the 'jms_serializer.xml_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\XmlDeserializationVisitor A JMS\Serializer\XmlDeserializationVisitor instance
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'));

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.xml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\XmlSerializationVisitor A JMS\Serializer\XmlSerializationVisitor instance
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        $this->services['jms_serializer.xml_serialization_visitor'] = $instance = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));

        $instance->setFormatOutput(true);

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.yaml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\YamlSerializationVisitor A JMS\Serializer\YamlSerializationVisitor instance
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel', 6 => 'Symfony\\Component\\ClassLoader\\ClassCollectionLoader', 7 => 'Symfony\\Component\\ClassLoader\\ApcClassLoader'));
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuFactory A Knp\Menu\MenuFactory instance
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension($this->get('router')), 0);

        return $instance;
    }

    /**
     * Gets the 'knp_menu.listener.voters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener A Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener instance
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter($this->get('knp_menu.voter.router'));
        $instance->addVoter($this->get('sonata.admin.menu.matcher.voter.admin'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Matcher A Knp\Menu\Matcher\Matcher instance
     */
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();

        $instance->addVoter($this->get('knp_menu.voter.router'));
        $instance->addVoter($this->get('sonata.admin.menu.matcher.voter.admin'));
        $instance->addVoter($this->get('sonata.admin.menu.matcher.voter.children'));
        $instance->addVoter($this->get('sonata.admin.menu.matcher.voter.active'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array('sonata_admin_sidebar' => 'sonata.admin.sidebar_menu')), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderServiceProvider($this, array('main' => array(0 => 'app.menu_builder', 1 => 'createMainMenu'), 'nridInterlocuteur' => array(0 => 'app.menu_builder', 1 => 'createPharmacienMenu'))), 2 => new \Sonata\AdminBundle\Menu\Provider\GroupMenuProvider($this->get('knp_menu.factory'), $this->get('sonata.admin.pool'), $this->get('security.authorization_checker'))));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer($this->get('knp_menu.matcher'), array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'KnpMenuBundle::menu.html.twig', $this->get('knp_menu.matcher'), array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'knp_menu.voter.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter A Knp\Menu\Matcher\Voter\RouteVoter instance
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter();
    }

    /**
     * Gets the 'lexik_maintenance.driver.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lexik\Bundle\MaintenanceBundle\Drivers\DriverFactory A Lexik\Bundle\MaintenanceBundle\Drivers\DriverFactory instance
     */
    protected function getLexikMaintenance_Driver_FactoryService()
    {
        return $this->services['lexik_maintenance.driver.factory'] = new \Lexik\Bundle\MaintenanceBundle\Drivers\DriverFactory(new \Lexik\Bundle\MaintenanceBundle\Drivers\DatabaseDriver($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('translator.default'), array('class' => '\\Lexik\\Bundle\\MaintenanceBundle\\Drivers\\FileDriver', 'options' => array('file_path' => ($this->targetDirs[3].'/app/cache/lock')), 'ttl' => NULL));
    }

    /**
     * Gets the 'lexik_maintenance.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lexik\Bundle\MaintenanceBundle\Listener\MaintenanceListener A Lexik\Bundle\MaintenanceBundle\Listener\MaintenanceListener instance
     */
    protected function getLexikMaintenance_ListenerService()
    {
        return $this->services['lexik_maintenance.listener'] = new \Lexik\Bundle\MaintenanceBundle\Listener\MaintenanceListener($this->get('lexik_maintenance.driver.factory'), NULL, NULL, NULL, array(), array(), NULL, array(), 503, 'Service Temporarily Unavailable', true);
    }

    /**
     * Gets the 'liip_functional_test.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\FunctionalTestBundle\EventListener\ExceptionListener A Liip\FunctionalTestBundle\EventListener\ExceptionListener instance
     */
    protected function getLiipFunctionalTest_ExceptionListenerService()
    {
        return $this->services['liip_functional_test.exception_listener'] = new \Liip\FunctionalTestBundle\EventListener\ExceptionListener();
    }

    /**
     * Gets the 'liip_functional_test.query.counter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\FunctionalTestBundle\QueryCounter A Liip\FunctionalTestBundle\QueryCounter instance
     */
    protected function getLiipFunctionalTest_Query_CounterService()
    {
        return $this->services['liip_functional_test.query.counter'] = new \Liip\FunctionalTestBundle\QueryCounter(NULL, $this->get('annotation_reader'));
    }

    /**
     * Gets the 'liip_functional_test.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\FunctionalTestBundle\Validator\DataCollectingValidator A Liip\FunctionalTestBundle\Validator\DataCollectingValidator instance
     */
    protected function getLiipFunctionalTest_ValidatorService()
    {
        return $this->services['liip_functional_test.validator'] = new \Liip\FunctionalTestBundle\Validator\DataCollectingValidator($this->get('validator.builder')->getValidator());
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'markdown.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MarkdownBundle\Parser\Preset\Max A Knp\Bundle\MarkdownBundle\Parser\Preset\Max instance
     */
    protected function getMarkdown_ParserService()
    {
        return $this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max();
    }

    /**
     * Gets the 'monolog.activation_strategy.not_found' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy A Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy instance
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /**
     * Gets the 'monolog.handler.app_main_log' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_AppMainLogService()
    {
        $this->services['monolog.handler.app_main_log'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/app/app_dev.log'), 200, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.fingers_crossed.error_level_activation_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy A Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy instance
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.null_internal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\NullHandler A Monolog\Handler\NullHandler instance
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the 'monolog.logger.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->services['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.app_main_log'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.null_internal'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.import' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ImportService()
    {
        $this->services['monolog.logger.import'] = $instance = new \Symfony\Bridge\Monolog\Logger('import');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.app_main_log'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.doc_comment_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Util\DocCommentExtractor A Nelmio\ApiDocBundle\Util\DocCommentExtractor instance
     */
    protected function getNelmioApiDoc_DocCommentExtractorService()
    {
        return $this->services['nelmio_api_doc.doc_comment_extractor'] = new \Nelmio\ApiDocBundle\Util\DocCommentExtractor();
    }

    /**
     * Gets the 'nelmio_api_doc.event_listener.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\EventListener\RequestListener A Nelmio\ApiDocBundle\EventListener\RequestListener instance
     */
    protected function getNelmioApiDoc_EventListener_RequestService()
    {
        return $this->services['nelmio_api_doc.event_listener.request'] = new \Nelmio\ApiDocBundle\EventListener\RequestListener($this->get('nelmio_api_doc.extractor.api_doc_extractor'), $this->get('nelmio_api_doc.formatter.html_formatter'), '_doc');
    }

    /**
     * Gets the 'nelmio_api_doc.extractor.api_doc_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor A Nelmio\ApiDocBundle\Extractor\ApiDocExtractor instance
     */
    protected function getNelmioApiDoc_Extractor_ApiDocExtractorService()
    {
        $a = $this->get('nelmio_api_doc.doc_comment_extractor');

        $this->services['nelmio_api_doc.extractor.api_doc_extractor'] = $instance = new \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor($this, $this->get('router'), $this->get('annotation_reader'), $a, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel')), array(0 => new \Nelmio\ApiDocBundle\Extractor\Handler\FosRestHandler(), 1 => new \Nelmio\ApiDocBundle\Extractor\Handler\JmsSecurityExtraHandler(), 2 => new \Nelmio\ApiDocBundle\Extractor\Handler\SensioFrameworkExtraHandler(), 3 => new \Nelmio\ApiDocBundle\Extractor\Handler\PhpDocHandler($a)), array());

        $instance->addParser($this->get('nelmio_api_doc.parser.json_serializable_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.collection_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.form_errors_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.form_type_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.validation_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.jms_metadata_parser'));

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.form.extension.description_form_type_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension A Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension instance
     */
    protected function getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService()
    {
        return $this->services['nelmio_api_doc.form.extension.description_form_type_extension'] = new \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension();
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.html_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\HtmlFormatter A Nelmio\ApiDocBundle\Formatter\HtmlFormatter instance
     */
    protected function getNelmioApiDoc_Formatter_HtmlFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.html_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\HtmlFormatter();

        $instance->setTemplatingEngine($this->get('templating'));
        $instance->setMotdTemplate('NelmioApiDocBundle::Components/motd.html.twig');
        $instance->setApiName('Biogaran Pro API Documentation');
        $instance->setEnableSandbox(true);
        $instance->setEndpoint(NULL);
        $instance->setRequestFormatMethod('accept_header');
        $instance->setRequestFormats(array());
        $instance->setDefaultRequestFormat('json');
        $instance->setAcceptType('application/json');
        $instance->setBodyFormats(array());
        $instance->setDefaultBodyFormat('json');
        $instance->setAuthentication(NULL);
        $instance->setDefaultSectionsOpened(true);

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.markdown_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter A Nelmio\ApiDocBundle\Formatter\MarkdownFormatter instance
     */
    protected function getNelmioApiDoc_Formatter_MarkdownFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.markdown_formatter'] = new \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter();
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.simple_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\SimpleFormatter A Nelmio\ApiDocBundle\Formatter\SimpleFormatter instance
     */
    protected function getNelmioApiDoc_Formatter_SimpleFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.simple_formatter'] = new \Nelmio\ApiDocBundle\Formatter\SimpleFormatter();
    }

    /**
     * Gets the 'nelmio_api_doc.formatter.swagger_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\SwaggerFormatter A Nelmio\ApiDocBundle\Formatter\SwaggerFormatter instance
     */
    protected function getNelmioApiDoc_Formatter_SwaggerFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.swagger_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\SwaggerFormatter('dot_notation');

        $instance->setBasePath('/api');
        $instance->setApiVersion('0.1');
        $instance->setSwaggerVersion('1.2');
        $instance->setInfo(array('title' => 'Symfony2', 'description' => 'My awesome Symfony2 app!', 'TermsOfServiceUrl' => NULL, 'contact' => NULL, 'license' => NULL, 'licenseUrl' => NULL));

        return $instance;
    }

    /**
     * Gets the 'nelmio_api_doc.parser.collection_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\CollectionParser A Nelmio\ApiDocBundle\Parser\CollectionParser instance
     */
    protected function getNelmioApiDoc_Parser_CollectionParserService()
    {
        return $this->services['nelmio_api_doc.parser.collection_parser'] = new \Nelmio\ApiDocBundle\Parser\CollectionParser();
    }

    /**
     * Gets the 'nelmio_api_doc.parser.form_errors_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\FormErrorsParser A Nelmio\ApiDocBundle\Parser\FormErrorsParser instance
     */
    protected function getNelmioApiDoc_Parser_FormErrorsParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_errors_parser'] = new \Nelmio\ApiDocBundle\Parser\FormErrorsParser();
    }

    /**
     * Gets the 'nelmio_api_doc.parser.form_type_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\FormTypeParser A Nelmio\ApiDocBundle\Parser\FormTypeParser instance
     */
    protected function getNelmioApiDoc_Parser_FormTypeParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_type_parser'] = new \Nelmio\ApiDocBundle\Parser\FormTypeParser($this->get('form.factory'), true);
    }

    /**
     * Gets the 'nelmio_api_doc.parser.jms_metadata_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\JmsMetadataParser A Nelmio\ApiDocBundle\Parser\JmsMetadataParser instance
     */
    protected function getNelmioApiDoc_Parser_JmsMetadataParserService()
    {
        return $this->services['nelmio_api_doc.parser.jms_metadata_parser'] = new \Nelmio\ApiDocBundle\Parser\JmsMetadataParser(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, $this->get('jms_serializer.naming_strategy'), $this->get('nelmio_api_doc.doc_comment_extractor'));
    }

    /**
     * Gets the 'nelmio_api_doc.parser.json_serializable_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\JsonSerializableParser A Nelmio\ApiDocBundle\Parser\JsonSerializableParser instance
     */
    protected function getNelmioApiDoc_Parser_JsonSerializableParserService()
    {
        return $this->services['nelmio_api_doc.parser.json_serializable_parser'] = new \Nelmio\ApiDocBundle\Parser\JsonSerializableParser();
    }

    /**
     * Gets the 'nelmio_api_doc.parser.validation_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\ValidationParser A Nelmio\ApiDocBundle\Parser\ValidationParser instance
     */
    protected function getNelmioApiDoc_Parser_ValidationParserService()
    {
        return $this->services['nelmio_api_doc.parser.validation_parser'] = new \Nelmio\ApiDocBundle\Parser\ValidationParser($this->get('liip_functional_test.validator'));
    }

    /**
     * Gets the 'nelmio_api_doc.twig.extension.extra_markdown' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension A Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension instance
     */
    protected function getNelmioApiDoc_Twig_Extension_ExtraMarkdownService()
    {
        return $this->services['nelmio_api_doc.twig.extension.extra_markdown'] = new \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension();
    }

    /**
     * Gets the 'officine_serializer_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Import\Serializer\OfficineSerializerHandler A AppBundle\Import\Serializer\OfficineSerializerHandler instance
     */
    protected function getOfficineSerializerHandlerService()
    {
        return $this->services['officine_serializer_handler'] = new \AppBundle\Import\Serializer\OfficineSerializerHandler();
    }

    /**
     * Gets the 'pharmacien_serializer_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Import\Serializer\PharmacienSerializerHandler A AppBundle\Import\Serializer\PharmacienSerializerHandler instance
     */
    protected function getPharmacienSerializerHandlerService()
    {
        return $this->services['pharmacien_serializer_handler'] = new \AppBundle\Import\Serializer\PharmacienSerializerHandler();
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $c->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $d = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $d->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler')), $a);

        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.translation'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($this->get('data_collector.dump'));
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector($this->get('sonata.block.templating.helper'), array(0 => 'sonata.block.service.container', 1 => 'sonata.page.block.container', 2 => 'sonata.dashboard.block.container', 3 => 'cmf.block.container', 4 => 'cmf.block.slideshow')));
        $instance->add(new \EightPoints\Bundle\GuzzleBundle\DataCollector\HttpDataCollector($this->get('guzzle_bundle.logger')));
        $instance->add($d);

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), $this->get('request_stack'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'};
        $b = $this->get('file_locator');
        $c = $this->get('annotation_reader');

        $d = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($c);

        $e = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();

        $f = new \Symfony\Component\Config\Loader\LoaderResolver();
        $f->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $d));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $d));
        $f->addLoader($d);
        $f->addLoader($this->get('sonata.admin.route_loader'));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($b, $e));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $b, $a, new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader(new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($c, ${($_ = isset($this->services['fos_rest.request.param_fetcher.reader']) ? $this->services['fos_rest.request.param_fetcher.reader'] : $this->getFosRest_Request_ParamFetcher_ReaderService()) && false ?: '_'}, $this->get('app.util.inflector.noop'), false, array('json' => false, 'xml' => false, 'html' => true)), $c), 'json'));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($b, $e, false, array('json' => false, 'xml' => false, 'html' => true), 'json'));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($b, $e, false, array('json' => false, 'xml' => false, 'html' => true), 'json'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, $f);
    }

    /**
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = ${($_ = isset($this->services['fos_user.user_provider.username_email']) ? $this->services['fos_user.user_provider.username_email'] : $this->getFosUser_UserProvider_UsernameEmailService()) && false ?: '_'};
        $d = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $f = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $g = $this->get('http_kernel');
        $h = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};
        $i = ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'};

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/register');

        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting');

        $m = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin');

        $n = new \Symfony\Component\HttpFoundation\RequestMatcher('^/pharmacien');

        $o = new \Symfony\Component\Security\Http\AccessMap();
        $o->add($j, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($k, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($l, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($m, array(0 => 'ROLE_ADMIN'), NULL);
        $o->add($n, array(0 => 'ROLE_OFFICINE_OWNER'), NULL);

        $p = new \Symfony\Component\Security\Http\HttpUtils($f, $f);

        $q = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $p, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($p, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));
        $q->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $r = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($g, $p, array(), $a);
        $r->setOptions(array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($o, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $c), 'main', $a, $d, $e), 2 => $q, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $h, ${($_ = isset($this->services['security.authentication.session_strategy']) ? $this->services['security.authentication.session_strategy'] : $this->getSecurity_Authentication_SessionStrategyService()) && false ?: '_'}, $p, 'main', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler($this->get('app.success_handler'), array('always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false), 'main'), $r, array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $d, $this->get('security.csrf.token_manager')), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '592c78e7d2b3c6.88422660', $a, $h), 5 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($b, $c, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, 'main', $i, $a, '_connect_as', 'ROLE_ALLOWED_TO_SWITCH', $d), 6 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $i, $o, $h)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $e, $p, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($g, $p, '/login', false), NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', 'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db', true, false, 'fos_user.user_provider.username_email', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, array(0 => 'logout', 1 => 'switch_user', 2 => 'form_login', 3 => 'anonymous')));
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'serializer.mapping.cache.symfony' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter A Symfony\Component\Cache\Adapter\PhpArrayAdapter instance
     */
    protected function getSerializer_Mapping_Cache_SymfonyService()
    {
        return $this->services['serializer.mapping.cache.symfony'] = \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[3].'/app/../var/sessions/dev'));
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), $this->get('session.handler'), ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'sonata.admin.audit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Model\AuditManager A Sonata\AdminBundle\Model\AuditManager instance
     */
    protected function getSonata_Admin_Audit_ManagerService()
    {
        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }

    /**
     * Gets the 'sonata.admin.block.admin_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminListBlockService A Sonata\AdminBundle\Block\AdminListBlockService instance
     */
    protected function getSonata_Admin_Block_AdminListService()
    {
        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService('sonata.admin.block.admin_list', $this->get('templating'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.block.search_result' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminSearchBlockService A Sonata\AdminBundle\Block\AdminSearchBlockService instance
     */
    protected function getSonata_Admin_Block_SearchResultService()
    {
        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService('sonata.admin.block.search_result', $this->get('templating'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.search.handler'));
    }

    /**
     * Gets the 'sonata.admin.block.stats' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminStatsBlockService A Sonata\AdminBundle\Block\AdminStatsBlockService instance
     */
    protected function getSonata_Admin_Block_StatsService()
    {
        return $this->services['sonata.admin.block.stats'] = new \Sonata\AdminBundle\Block\AdminStatsBlockService('sonata.admin.block.stats', $this->get('templating'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.breadcrumbs_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\BreadcrumbsBuilder A Sonata\AdminBundle\Admin\BreadcrumbsBuilder instance
     */
    protected function getSonata_Admin_BreadcrumbsBuilderService()
    {
        return $this->services['sonata.admin.breadcrumbs_builder'] = new \Sonata\AdminBundle\Admin\BreadcrumbsBuilder(array('child_admin_route' => 'edit'));
    }

    /**
     * Gets the 'sonata.admin.builder.filter.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Filter\FilterFactory A Sonata\AdminBundle\Filter\FilterFactory instance
     */
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('Sonata\\DoctrineORMAdminBundle\\Filter\\BooleanFilter' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'Sonata\\DoctrineORMAdminBundle\\Filter\\CallbackFilter' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ChoiceFilter' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelFilter' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelAutocompleteFilter' => 'sonata.admin.orm.filter.type.model_autocomplete', 'doctrine_orm_model_autocomplete' => 'sonata.admin.orm.filter.type.model_autocomplete', 'Sonata\\DoctrineORMAdminBundle\\Filter\\StringFilter' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'Sonata\\DoctrineORMAdminBundle\\Filter\\NumberFilter' => 'sonata.admin.orm.filter.type.number', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateFilter' => 'sonata.admin.orm.filter.type.date', 'doctrine_orm_date' => 'sonata.admin.orm.filter.type.date', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateRangeFilter' => 'sonata.admin.orm.filter.type.date_range', 'doctrine_orm_date_range' => 'sonata.admin.orm.filter.type.date_range', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeFilter' => 'sonata.admin.orm.filter.type.datetime', 'doctrine_orm_datetime' => 'sonata.admin.orm.filter.type.datetime', 'Sonata\\DoctrineORMAdminBundle\\Filter\\TimeFilter' => 'sonata.admin.orm.filter.type.time', 'doctrine_orm_time' => 'sonata.admin.orm.filter.type.time', 'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeRangeFilter' => 'sonata.admin.orm.filter.type.datetime_range', 'doctrine_orm_datetime_range' => 'sonata.admin.orm.filter.type.datetime_range', 'Sonata\\DoctrineORMAdminBundle\\Filter\\ClassFilter' => 'sonata.admin.orm.filter.type.class', 'doctrine_orm_class' => 'sonata.admin.orm.filter.type.class'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder A Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder instance
     */
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder($this->get('form.factory'), $this->get('sonata.admin.builder.filter.factory'), $this->get('sonata.admin.guesser.orm_datagrid_chain'), true);
    }

    /**
     * Gets the 'sonata.admin.builder.orm_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\FormContractor A Sonata\DoctrineORMAdminBundle\Builder\FormContractor instance
     */
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor($this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder A Sonata\DoctrineORMAdminBundle\Builder\ListBuilder instance
     */
    protected function getSonata_Admin_Builder_OrmListService()
    {
        return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder($this->get('sonata.admin.guesser.orm_list_chain'), array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataIntlBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataIntlBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'email' => 'SonataAdminBundle:CRUD:list_email.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'smallint' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'bigint' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'integer' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'decimal' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'currency' => 'SonataIntlBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataIntlBundle:CRUD:list_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:list_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:list_html.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder A Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder instance
     */
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder($this->get('sonata.admin.guesser.orm_show_chain'), array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataIntlBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataIntlBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'email' => 'SonataAdminBundle:CRUD:show_email.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'bigint' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'integer' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'decimal' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'currency' => 'SonataIntlBundle:CRUD:show_currency.html.twig', 'percent' => 'SonataIntlBundle:CRUD:show_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:show_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:show_html.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.controller.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Controller\HelperController A Sonata\AdminBundle\Controller\HelperController instance
     */
    protected function getSonata_Admin_Controller_AdminService()
    {
        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController($this->get('twig'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.helper'), $this->get('liip_functional_test.validator'));
    }

    /**
     * Gets the 'sonata.admin.doctrine_orm.form.type.choice_field_mask' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType A Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType instance
     */
    protected function getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService()
    {
        return $this->services['sonata.admin.doctrine_orm.form.type.choice_field_mask'] = new \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType();
    }

    /**
     * Gets the 'sonata.admin.event.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Event\AdminEventExtension A Sonata\AdminBundle\Event\AdminEventExtension instance
     */
    protected function getSonata_Admin_Event_ExtensionService()
    {
        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sonata.admin.exporter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Export\Exporter A Sonata\AdminBundle\Export\Exporter instance
     *
     * @deprecated The "sonata.admin.exporter" service is deprecated. You should stop using it, as it will soon be removed.
     */
    protected function getSonata_Admin_ExporterService()
    {
        @trigger_error('The "sonata.admin.exporter" service is deprecated. You should stop using it, as it will soon be removed.', E_USER_DEPRECATED);

        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }

    /**
     * Gets the 'sonata.admin.form.extension.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension A Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension instance
     */
    protected function getSonata_Admin_Form_Extension_ChoiceService()
    {
        return $this->services['sonata.admin.form.extension.choice'] = new \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension();
    }

    /**
     * Gets the 'sonata.admin.form.extension.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension instance
     */
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(array('email' => '', 'textarea' => '', 'text' => '', 'choice' => '', 'integer' => '', 'datetime' => 'sonata-medium-date', 'date' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => ''), array('html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'javascripts' => array(0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 4 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/Admin.js', 18 => 'bundles/sonataadmin/treeview.js'), 'stylesheets' => array(0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css')));
    }

    /**
     * Gets the 'sonata.admin.form.extension.field.mopa' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension instance
     */
    protected function getSonata_Admin_Form_Extension_Field_MopaService()
    {
        return $this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\ChoiceType A Sonata\AdminBundle\Form\Type\Filter\ChoiceType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateType A Sonata\AdminBundle\Form\Type\Filter\DateType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.daterange' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateRangeType A Sonata\AdminBundle\Form\Type\Filter\DateRangeType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DefaultType A Sonata\AdminBundle\Form\Type\Filter\DefaultType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\NumberType A Sonata\AdminBundle\Form\Type\Filter\NumberType instance
     */
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.type.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\AdminType A Sonata\AdminBundle\Form\Type\AdminType instance
     */
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }

    /**
     * Gets the 'sonata.admin.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\CollectionType A Sonata\AdminBundle\Form\Type\CollectionType instance
     */
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelAutocompleteType A Sonata\AdminBundle\Form\Type\ModelAutocompleteType instance
     */
    protected function getSonata_Admin_Form_Type_ModelAutocompleteService()
    {
        return $this->services['sonata.admin.form.type.model_autocomplete'] = new \Sonata\AdminBundle\Form\Type\ModelAutocompleteType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelType A Sonata\AdminBundle\Form\Type\ModelType instance
     */
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType($this->get('property_accessor'));
    }

    /**
     * Gets the 'sonata.admin.form.type.model_hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelHiddenType A Sonata\AdminBundle\Form\Type\ModelHiddenType instance
     */
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelTypeList A Sonata\AdminBundle\Form\Type\ModelTypeList instance
     */
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelTypeList();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_reference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelReferenceType A Sonata\AdminBundle\Form\Type\ModelReferenceType instance
     */
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser instance
     */
    protected function getSonata_Admin_Guesser_OrmDatagridService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_datagrid_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance
     */
    protected function getSonata_Admin_Guesser_OrmDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_datagrid')));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser instance
     */
    protected function getSonata_Admin_Guesser_OrmListService()
    {
        return $this->services['sonata.admin.guesser.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_list_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance
     */
    protected function getSonata_Admin_Guesser_OrmListChainService()
    {
        return $this->services['sonata.admin.guesser.orm_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_list')));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser instance
     */
    protected function getSonata_Admin_Guesser_OrmShowService()
    {
        return $this->services['sonata.admin.guesser.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_show_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance
     */
    protected function getSonata_Admin_Guesser_OrmShowChainService()
    {
        return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_show')));
    }

    /**
     * Gets the 'sonata.admin.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\AdminHelper A Sonata\AdminBundle\Admin\AdminHelper instance
     */
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.label.strategy.bc' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy A Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.form_component' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy A Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy A Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy instance
     */
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.manager.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Model\ModelManager A Sonata\DoctrineORMAdminBundle\Model\ModelManager instance
     */
    protected function getSonata_Admin_Manager_OrmService()
    {
        return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager($this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Util\AdminAclManipulator A Sonata\AdminBundle\Util\AdminAclManipulator instance
     */
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.object.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator A Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator instance
     */
    protected function getSonata_Admin_Manipulator_Acl_Object_OrmService()
    {
        return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
    }

    /**
     * Gets the 'sonata.admin.menu.matcher.voter.active' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter A Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter instance
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_ActiveService()
    {
        return $this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter();
    }

    /**
     * Gets the 'sonata.admin.menu.matcher.voter.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter A Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter instance
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_AdminService()
    {
        return $this->services['sonata.admin.menu.matcher.voter.admin'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\AdminVoter();
    }

    /**
     * Gets the 'sonata.admin.menu.matcher.voter.children' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter A Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter instance
     */
    protected function getSonata_Admin_Menu_Matcher_Voter_ChildrenService()
    {
        return $this->services['sonata.admin.menu.matcher.voter.children'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ChildrenVoter($this->get('knp_menu.matcher'));
    }

    /**
     * Gets the 'sonata.admin.menu_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Menu\MenuBuilder A Sonata\AdminBundle\Menu\MenuBuilder instance
     */
    protected function getSonata_Admin_MenuBuilderService()
    {
        return $this->services['sonata.admin.menu_builder'] = new \Sonata\AdminBundle\Menu\MenuBuilder($this->get('sonata.admin.pool'), $this->get('knp_menu.factory'), $this->get('knp_menu.menu_provider'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sonata.admin.object.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Util\AdminObjectAclManipulator A Sonata\AdminBundle\Util\AdminObjectAclManipulator instance
     */
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator($this->get('form.factory'), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.boolean' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter A Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.callback' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter A Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.choice' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter A Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.class' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter A Sonata\DoctrineORMAdminBundle\Filter\ClassFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.date' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateFilter A Sonata\DoctrineORMAdminBundle\Filter\DateFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.date_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.datetime' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.datetime_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.model' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter A Sonata\DoctrineORMAdminBundle\Filter\ModelFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.model_autocomplete' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter A Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.number' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter A Sonata\DoctrineORMAdminBundle\Filter\NumberFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.string' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\StringFilter A Sonata\DoctrineORMAdminBundle\Filter\StringFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.time' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter A Sonata\DoctrineORMAdminBundle\Filter\TimeFilter instance
     */
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }

    /**
     * Gets the 'sonata.admin.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool A Sonata\AdminBundle\Admin\Pool instance
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Biogaran pro connect', 'assets/img/admin/admin-logo.png', array('html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'javascripts' => array(0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 4 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/Admin.js', 18 => 'bundles/sonataadmin/treeview.js'), 'stylesheets' => array(0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css')), $this->get('property_accessor'));

        $instance->setTemplates(array('history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'user_block' => ':Block:user_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setAdminServiceIds(array(0 => 'admin.category', 1 => 'admin.news', 2 => 'admin.faq', 3 => 'admin.pharmacien', 4 => 'sonata.classification.admin.category', 5 => 'sonata.classification.admin.tag', 6 => 'sonata.classification.admin.collection', 7 => 'sonata.classification.admin.context', 8 => 'sonata.media.admin.media', 9 => 'sonata.media.admin.gallery', 10 => 'sonata.media.admin.gallery_has_media'));
        $instance->setAdminGroups(array('app.admin.group.media' => array('label' => 'Media', 'icon' => '<i class="fa fa-camera-retro"></i>', 'items' => array(0 => array('admin' => 'sonata.media.admin.media', 'label' => '', 'route' => '', 'route_params' => array(), 'route_absolute' => true, 'roles' => array())), 'on_top' => false, 'keep_open' => false, 'item_adds' => array(), 'roles' => array(), 'label_catalogue' => 'SonataAdminBundle'), 'app.admin.group.news' => array('label' => 'News', 'icon' => '<i class="fa fa-newspaper-o"></i>', 'items' => array(0 => array('admin' => 'admin.news', 'label' => '', 'route' => '', 'route_params' => array(), 'route_absolute' => true, 'roles' => array())), 'on_top' => false, 'keep_open' => false, 'item_adds' => array(), 'roles' => array(), 'label_catalogue' => 'SonataAdminBundle'), 'app.admin.group.faq' => array('label' => 'Faq', 'icon' => '<i class="fa fa-question-circle"></i>', 'items' => array(0 => array('admin' => 'admin.faq', 'label' => '', 'route' => '', 'route_params' => array(), 'route_absolute' => true, 'roles' => array())), 'on_top' => false, 'keep_open' => false, 'item_adds' => array(), 'roles' => array(), 'label_catalogue' => 'SonataAdminBundle'), 'app.admin.group.pharmacien' => array('label' => 'Pharmacien', 'icon' => '<i class="fa fa-universal-access"></i>', 'items' => array(0 => array('admin' => 'admin.pharmacien', 'label' => '', 'route' => '', 'route_params' => array(), 'route_absolute' => true, 'roles' => array())), 'on_top' => false, 'keep_open' => false, 'item_adds' => array(), 'roles' => array(), 'label_catalogue' => 'SonataAdminBundle')));
        $instance->setAdminClasses(array('AppBundle\\Entity\\Category' => array(0 => 'admin.category'), 'AppBundle\\Entity\\News' => array(0 => 'admin.news'), 'AppBundle\\Entity\\Faq' => array(0 => 'admin.faq'), 'AppBundle\\Entity\\Pharmacien' => array(0 => 'admin.pharmacien'), 'AppBundle\\Entity\\Classification\\Category' => array(0 => 'sonata.classification.admin.category'), 'AppBundle\\Entity\\Classification\\Tag' => array(0 => 'sonata.classification.admin.tag'), 'AppBundle\\Entity\\Classification\\Collection' => array(0 => 'sonata.classification.admin.collection'), 'AppBundle\\Entity\\Classification\\Context' => array(0 => 'sonata.classification.admin.context'), 'AppBundle\\Entity\\Media\\Media' => array(0 => 'sonata.media.admin.media'), 'AppBundle\\Entity\\Media\\Gallery' => array(0 => 'sonata.media.admin.gallery'), 'AppBundle\\Entity\\Media\\GalleryHasMedia' => array(0 => 'sonata.media.admin.gallery_has_media')));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.route.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCache A Sonata\AdminBundle\Route\RoutesCache instance
     */
    protected function getSonata_Admin_Route_CacheService()
    {
        return $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache((__DIR__.'/sonata/admin'), true);
    }

    /**
     * Gets the 'sonata.admin.route.cache_warmup' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCacheWarmUp A Sonata\AdminBundle\Route\RoutesCacheWarmUp instance
     */
    protected function getSonata_Admin_Route_CacheWarmupService()
    {
        return $this->services['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp($this->get('sonata.admin.route.cache'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.route.default_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\DefaultRouteGenerator A Sonata\AdminBundle\Route\DefaultRouteGenerator instance
     */
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator($this->get('router'), $this->get('sonata.admin.route.cache'));
    }

    /**
     * Gets the 'sonata.admin.route.path_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\PathInfoBuilder A Sonata\AdminBundle\Route\PathInfoBuilder instance
     */
    protected function getSonata_Admin_Route_PathInfoService()
    {
        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route.query_string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\QueryStringBuilder A Sonata\AdminBundle\Route\QueryStringBuilder instance
     */
    protected function getSonata_Admin_Route_QueryStringService()
    {
        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\AdminPoolLoader A Sonata\AdminBundle\Route\AdminPoolLoader instance
     */
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader($this->get('sonata.admin.pool'), array(0 => 'admin.category', 1 => 'admin.news', 2 => 'admin.faq', 3 => 'admin.pharmacien', 4 => 'sonata.classification.admin.category', 5 => 'sonata.classification.admin.tag', 6 => 'sonata.classification.admin.collection', 7 => 'sonata.classification.admin.context', 8 => 'sonata.media.admin.media', 9 => 'sonata.media.admin.gallery', 10 => 'sonata.media.admin.gallery_has_media'), $this);
    }

    /**
     * Gets the 'sonata.admin.search.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Search\SearchHandler A Sonata\AdminBundle\Search\SearchHandler instance
     */
    protected function getSonata_Admin_Search_HandlerService()
    {
        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.security.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler A Sonata\AdminBundle\Security\Handler\NoopSecurityHandler instance
     */
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler();
    }

    /**
     * Gets the 'sonata.admin.sidebar_menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance
     */
    protected function getSonata_Admin_SidebarMenuService()
    {
        return $this->services['sonata.admin.sidebar_menu'] = $this->get('sonata.admin.menu_builder')->createSidebarMenu();
    }

    /**
     * Gets the 'sonata.admin.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension A Sonata\AdminBundle\Twig\Extension\SonataAdminExtension instance
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension($this->get('sonata.admin.pool'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('translator'));

        $instance->setXEditableTypeMapping(array('choice' => 'select', 'boolean' => 'select', 'text' => 'text', 'textarea' => 'textarea', 'html' => 'textarea', 'email' => 'email', 'string' => 'text', 'smallint' => 'text', 'bigint' => 'text', 'integer' => 'number', 'decimal' => 'number', 'currency' => 'number', 'percent' => 'number', 'url' => 'url', 'date' => 'date'));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables A Sonata\AdminBundle\Twig\GlobalVariables instance
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator A Sonata\CoreBundle\Validator\InlineValidator instance
     */
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, ${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->getValidator_ValidatorFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the 'sonata.block.cache.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Cache\HttpCacheHandler A Sonata\BlockBundle\Cache\HttpCacheHandler instance
     */
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.cache.handler.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Cache\NoopHttpCacheHandler A Sonata\BlockBundle\Cache\NoopHttpCacheHandler instance
     */
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.context_manager.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager A Sonata\BlockBundle\Block\BlockContextManager instance
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager($this->get('sonata.block.loader.chain'), ${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop')), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.exception.filter.debug_only' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter A Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter instance
     */
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(true);
    }

    /**
     * Gets the 'sonata.block.exception.filter.ignore_block_exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter A Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter instance
     */
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_all' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepAllFilter A Sonata\BlockBundle\Exception\Filter\KeepAllFilter instance
     */
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_none' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter A Sonata\BlockBundle\Exception\Filter\KeepNoneFilter instance
     */
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineRenderer A Sonata\BlockBundle\Exception\Renderer\InlineRenderer instance
     */
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception.html.twig');
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline_debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer A Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer instance
     */
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception_debug.html.twig', true, true);
    }

    /**
     * Gets the 'sonata.block.exception.renderer.throw' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer A Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer instance
     */
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }

    /**
     * Gets the 'sonata.block.exception.strategy.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Strategy\StrategyManager A Sonata\BlockBundle\Exception\Strategy\StrategyManager instance
     */
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());

        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');

        return $instance;
    }

    /**
     * Gets the 'sonata.block.form.type.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ServiceListType A Sonata\BlockBundle\Form\Type\ServiceListType instance
     */
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the 'sonata.block.form.type.container_template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ContainerTemplateType A Sonata\BlockBundle\Form\Type\ContainerTemplateType instance
     */
    protected function getSonata_Block_Form_Type_ContainerTemplateService()
    {
        return $this->services['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(array('SonataBlockBundle:Block:block_container.html.twig' => 'SonataBlockBundle default template'));
    }

    /**
     * Gets the 'sonata.block.loader.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockLoaderChain A Sonata\BlockBundle\Block\BlockLoaderChain instance
     */
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => $this->get('sonata.block.loader.service')));
    }

    /**
     * Gets the 'sonata.block.loader.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Loader\ServiceLoader A Sonata\BlockBundle\Block\Loader\ServiceLoader instance
     */
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list'));
    }

    /**
     * Gets the 'sonata.block.menu.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Menu\MenuRegistry A Sonata\BlockBundle\Menu\MenuRegistry instance
     */
    protected function getSonata_Block_Menu_RegistryService()
    {
        return $this->services['sonata.block.menu.registry'] = new \Sonata\BlockBundle\Menu\MenuRegistry(array());
    }

    /**
     * Gets the 'sonata.block.renderer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer A Sonata\BlockBundle\Block\BlockRenderer instance
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, $this->get('sonata.block.exception.strategy.manager'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), true);
    }

    /**
     * Gets the 'sonata.block.service.container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\ContainerBlockService A Sonata\BlockBundle\Block\Service\ContainerBlockService instance
     */
    protected function getSonata_Block_Service_ContainerService()
    {
        return $this->services['sonata.block.service.container'] = new \Sonata\BlockBundle\Block\Service\ContainerBlockService('sonata.block.container', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.empty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\EmptyBlockService A Sonata\BlockBundle\Block\Service\EmptyBlockService instance
     */
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\MenuBlockService A Sonata\BlockBundle\Block\Service\MenuBlockService instance
     */
    protected function getSonata_Block_Service_MenuService()
    {
        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), $this->get('sonata.block.menu.registry'));
    }

    /**
     * Gets the 'sonata.block.service.rss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\RssBlockService A Sonata\BlockBundle\Block\Service\RssBlockService instance
     */
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TemplateBlockService A Sonata\BlockBundle\Block\Service\TemplateBlockService instance
     */
    protected function getSonata_Block_Service_TemplateService()
    {
        return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TextBlockService A Sonata\BlockBundle\Block\Service\TextBlockService instance
     */
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper A Sonata\BlockBundle\Templating\Helper\BlockHelper instance
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop')), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'), $this->get('debug.event_dispatcher'), NULL, $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Twig\GlobalVariables A Sonata\BlockBundle\Twig\GlobalVariables instance
     */
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig', 'block_container' => 'SonataBlockBundle:Block:block_container.html.twig'));
    }

    /**
     * Gets the 'sonata.classification.admin.category' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\CategoryAdmin A Sonata\ClassificationBundle\Admin\CategoryAdmin instance
     */
    protected function getSonata_Classification_Admin_CategoryService()
    {
        $instance = new \Sonata\ClassificationBundle\Admin\CategoryAdmin('sonata.classification.admin.category', 'AppBundle\\Entity\\Classification\\Category', 'SonataClassificationBundle:CategoryAdmin', $this->get('sonata.classification.manager.context'));

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setPagerType('default');
        $instance->setLabel('label_categories');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataClassificationBundle:CategoryAdmin:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig', 'tree' => 'SonataClassificationBundle:CategoryAdmin:tree.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.classification.admin.collection' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\CollectionAdmin A Sonata\ClassificationBundle\Admin\CollectionAdmin instance
     */
    protected function getSonata_Classification_Admin_CollectionService()
    {
        $instance = new \Sonata\ClassificationBundle\Admin\CollectionAdmin('sonata.classification.admin.collection', 'AppBundle\\Entity\\Classification\\Collection', 'SonataAdminBundle:CRUD', $this->get('sonata.classification.manager.context'));

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setPagerType('default');
        $instance->setLabel('label_collections');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.classification.admin.context' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\ContextAdmin A Sonata\ClassificationBundle\Admin\ContextAdmin instance
     */
    protected function getSonata_Classification_Admin_ContextService()
    {
        $instance = new \Sonata\ClassificationBundle\Admin\ContextAdmin('sonata.classification.admin.context', 'AppBundle\\Entity\\Classification\\Context', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setPagerType('default');
        $instance->setLabel('label_contexts');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.classification.admin.tag' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\TagAdmin A Sonata\ClassificationBundle\Admin\TagAdmin instance
     */
    protected function getSonata_Classification_Admin_TagService()
    {
        $instance = new \Sonata\ClassificationBundle\Admin\TagAdmin('sonata.classification.admin.tag', 'AppBundle\\Entity\\Classification\\Tag', 'SonataAdminBundle:CRUD', $this->get('sonata.classification.manager.context'));

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setPagerType('default');
        $instance->setLabel('label_tags');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.classification.api.form.type.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Form\Type\ApiCategoryType A Sonata\ClassificationBundle\Form\Type\ApiCategoryType instance
     */
    protected function getSonata_Classification_Api_Form_Type_CategoryService()
    {
        return $this->services['sonata.classification.api.form.type.category'] = new \Sonata\ClassificationBundle\Form\Type\ApiCategoryType(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, $this->get('doctrine'), 'sonata_classification_api_form_category', 'AppBundle\\Entity\\Classification\\Category', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.classification.api.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Form\Type\ApiCollectionType A Sonata\ClassificationBundle\Form\Type\ApiCollectionType instance
     */
    protected function getSonata_Classification_Api_Form_Type_CollectionService()
    {
        return $this->services['sonata.classification.api.form.type.collection'] = new \Sonata\ClassificationBundle\Form\Type\ApiCollectionType(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, $this->get('doctrine'), 'sonata_classification_api_form_collection', 'AppBundle\\Entity\\Classification\\Collection', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.classification.api.form.type.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Form\Type\ApiContextType A Sonata\ClassificationBundle\Form\Type\ApiContextType instance
     */
    protected function getSonata_Classification_Api_Form_Type_ContextService()
    {
        return $this->services['sonata.classification.api.form.type.context'] = new \Sonata\ClassificationBundle\Form\Type\ApiContextType(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, $this->get('doctrine'), 'sonata_classification_api_form_context', 'AppBundle\\Entity\\Classification\\Context', 'sonata_api_write', true);
    }

    /**
     * Gets the 'sonata.classification.api.form.type.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Form\Type\ApiTagType A Sonata\ClassificationBundle\Form\Type\ApiTagType instance
     */
    protected function getSonata_Classification_Api_Form_Type_TagService()
    {
        return $this->services['sonata.classification.api.form.type.tag'] = new \Sonata\ClassificationBundle\Form\Type\ApiTagType(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, $this->get('doctrine'), 'sonata_classification_api_form_tag', 'AppBundle\\Entity\\Classification\\Tag', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.classification.controller.api.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Controller\Api\CategoryController A Sonata\ClassificationBundle\Controller\Api\CategoryController instance
     */
    protected function getSonata_Classification_Controller_Api_CategoryService()
    {
        return $this->services['sonata.classification.controller.api.category'] = new \Sonata\ClassificationBundle\Controller\Api\CategoryController($this->get('sonata.classification.manager.category'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.classification.controller.api.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Controller\Api\CollectionController A Sonata\ClassificationBundle\Controller\Api\CollectionController instance
     */
    protected function getSonata_Classification_Controller_Api_CollectionService()
    {
        return $this->services['sonata.classification.controller.api.collection'] = new \Sonata\ClassificationBundle\Controller\Api\CollectionController($this->get('sonata.classification.manager.collection'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.classification.controller.api.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Controller\Api\ContextController A Sonata\ClassificationBundle\Controller\Api\ContextController instance
     */
    protected function getSonata_Classification_Controller_Api_ContextService()
    {
        return $this->services['sonata.classification.controller.api.context'] = new \Sonata\ClassificationBundle\Controller\Api\ContextController($this->get('sonata.classification.manager.context'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.classification.controller.api.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Controller\Api\TagController A Sonata\ClassificationBundle\Controller\Api\TagController instance
     */
    protected function getSonata_Classification_Controller_Api_TagService()
    {
        return $this->services['sonata.classification.controller.api.tag'] = new \Sonata\ClassificationBundle\Controller\Api\TagController($this->get('sonata.classification.manager.tag'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.classification.form.type.category_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Form\Type\CategorySelectorType A Sonata\ClassificationBundle\Form\Type\CategorySelectorType instance
     */
    protected function getSonata_Classification_Form_Type_CategorySelectorService()
    {
        return $this->services['sonata.classification.form.type.category_selector'] = new \Sonata\ClassificationBundle\Form\Type\CategorySelectorType($this->get('sonata.classification.manager.category'));
    }

    /**
     * Gets the 'sonata.classification.manager.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Entity\CategoryManager A Sonata\ClassificationBundle\Entity\CategoryManager instance
     */
    protected function getSonata_Classification_Manager_CategoryService()
    {
        return $this->services['sonata.classification.manager.category'] = new \Sonata\ClassificationBundle\Entity\CategoryManager('AppBundle\\Entity\\Classification\\Category', $this->get('doctrine'), $this->get('sonata.classification.manager.context'));
    }

    /**
     * Gets the 'sonata.classification.manager.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Entity\CollectionManager A Sonata\ClassificationBundle\Entity\CollectionManager instance
     */
    protected function getSonata_Classification_Manager_CollectionService()
    {
        return $this->services['sonata.classification.manager.collection'] = new \Sonata\ClassificationBundle\Entity\CollectionManager('AppBundle\\Entity\\Classification\\Collection', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.classification.manager.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Entity\ContextManager A Sonata\ClassificationBundle\Entity\ContextManager instance
     */
    protected function getSonata_Classification_Manager_ContextService()
    {
        return $this->services['sonata.classification.manager.context'] = new \Sonata\ClassificationBundle\Entity\ContextManager('AppBundle\\Entity\\Classification\\Context', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.classification.manager.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Entity\TagManager A Sonata\ClassificationBundle\Entity\TagManager instance
     */
    protected function getSonata_Classification_Manager_TagService()
    {
        return $this->services['sonata.classification.manager.tag'] = new \Sonata\ClassificationBundle\Entity\TagManager('AppBundle\\Entity\\Classification\\Tag', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.classification.serializer.handler.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Serializer\CategorySerializerHandler A Sonata\ClassificationBundle\Serializer\CategorySerializerHandler instance
     */
    protected function getSonata_Classification_Serializer_Handler_CategoryService()
    {
        return $this->services['sonata.classification.serializer.handler.category'] = new \Sonata\ClassificationBundle\Serializer\CategorySerializerHandler($this->get('sonata.classification.manager.category'));
    }

    /**
     * Gets the 'sonata.classification.serializer.handler.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Serializer\CollectionSerializerHandler A Sonata\ClassificationBundle\Serializer\CollectionSerializerHandler instance
     */
    protected function getSonata_Classification_Serializer_Handler_CollectionService()
    {
        return $this->services['sonata.classification.serializer.handler.collection'] = new \Sonata\ClassificationBundle\Serializer\CollectionSerializerHandler($this->get('sonata.classification.manager.collection'));
    }

    /**
     * Gets the 'sonata.classification.serializer.handler.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Serializer\ContextSerializerHandler A Sonata\ClassificationBundle\Serializer\ContextSerializerHandler instance
     */
    protected function getSonata_Classification_Serializer_Handler_ContextService()
    {
        return $this->services['sonata.classification.serializer.handler.context'] = new \Sonata\ClassificationBundle\Serializer\ContextSerializerHandler($this->get('sonata.classification.manager.context'));
    }

    /**
     * Gets the 'sonata.classification.serializer.handler.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Serializer\TagSerializerHandler A Sonata\ClassificationBundle\Serializer\TagSerializerHandler instance
     */
    protected function getSonata_Classification_Serializer_Handler_TagService()
    {
        return $this->services['sonata.classification.serializer.handler.tag'] = new \Sonata\ClassificationBundle\Serializer\TagSerializerHandler($this->get('sonata.classification.manager.tag'));
    }

    /**
     * Gets the 'sonata.core.date.moment_format_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Date\MomentFormatConverter A Sonata\CoreBundle\Date\MomentFormatConverter instance
     */
    protected function getSonata_Core_Date_MomentFormatConverterService()
    {
        return $this->services['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter();
    }

    /**
     * Gets the 'sonata.core.flashmessage.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\FlashMessage\FlashManager A Sonata\CoreBundle\FlashMessage\FlashManager instance
     */
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\CoreBundle\FlashMessage\FlashManager($this->get('session'), $this->get('translator'), array('success' => array('success' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_success' => array('domain' => 'SonataAdminBundle'), 'sonata_user_success' => array('domain' => 'SonataUserBundle'), 'fos_user_success' => array('domain' => 'FOSUserBundle')), 'warning' => array('warning' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_info' => array('domain' => 'SonataAdminBundle')), 'danger' => array('error' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_error' => array('domain' => 'SonataAdminBundle'), 'sonata_user_error' => array('domain' => 'SonataUserBundle'))), array('success' => 'success', 'warning' => 'warning', 'danger' => 'danger'));
    }

    /**
     * Gets the 'sonata.core.flashmessage.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension A Sonata\CoreBundle\Twig\Extension\FlashMessageExtension instance
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension($this->get('sonata.core.flashmessage.manager'));
    }

    /**
     * Gets the 'sonata.core.form.type.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ImmutableArrayType A Sonata\CoreBundle\Form\Type\ImmutableArrayType instance
     */
    protected function getSonata_Core_Form_Type_ArrayService()
    {
        return $this->services['sonata.core.form.type.array'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the 'sonata.core.form.type.boolean' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\BooleanType A Sonata\CoreBundle\Form\Type\BooleanType instance
     */
    protected function getSonata_Core_Form_Type_BooleanService()
    {
        return $this->services['sonata.core.form.type.boolean'] = new \Sonata\CoreBundle\Form\Type\BooleanType();
    }

    /**
     * Gets the 'sonata.core.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\CollectionType A Sonata\CoreBundle\Form\Type\CollectionType instance
     */
    protected function getSonata_Core_Form_Type_CollectionService()
    {
        return $this->services['sonata.core.form.type.collection'] = new \Sonata\CoreBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.core.form.type.color_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ColorSelectorType A Sonata\CoreBundle\Form\Type\ColorSelectorType instance
     */
    protected function getSonata_Core_Form_Type_ColorSelectorService()
    {
        return $this->services['sonata.core.form.type.color_selector'] = new \Sonata\CoreBundle\Form\Type\ColorSelectorType();
    }

    /**
     * Gets the 'sonata.core.form.type.date_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DatePickerType A Sonata\CoreBundle\Form\Type\DatePickerType instance
     */
    protected function getSonata_Core_Form_Type_DatePickerService()
    {
        return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\CoreBundle\Form\Type\DatePickerType($this->get('sonata.core.date.moment_format_converter'), $this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.date_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangeType A Sonata\CoreBundle\Form\Type\DateRangeType instance
     */
    protected function getSonata_Core_Form_Type_DateRangeService()
    {
        return $this->services['sonata.core.form.type.date_range'] = new \Sonata\CoreBundle\Form\Type\DateRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.date_range_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangePickerType A Sonata\CoreBundle\Form\Type\DateRangePickerType instance
     */
    protected function getSonata_Core_Form_Type_DateRangePickerService()
    {
        return $this->services['sonata.core.form.type.date_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateRangePickerType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimePickerType A Sonata\CoreBundle\Form\Type\DateTimePickerType instance
     */
    protected function getSonata_Core_Form_Type_DatetimePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType($this->get('sonata.core.date.moment_format_converter'), $this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangeType A Sonata\CoreBundle\Form\Type\DateTimeRangeType instance
     */
    protected function getSonata_Core_Form_Type_DatetimeRangeService()
    {
        return $this->services['sonata.core.form.type.datetime_range'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_range_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType A Sonata\CoreBundle\Form\Type\DateTimeRangePickerType instance
     */
    protected function getSonata_Core_Form_Type_DatetimeRangePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.equal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\EqualType A Sonata\CoreBundle\Form\Type\EqualType instance
     */
    protected function getSonata_Core_Form_Type_EqualService()
    {
        return $this->services['sonata.core.form.type.equal'] = new \Sonata\CoreBundle\Form\Type\EqualType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.translatable_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\TranslatableChoiceType A Sonata\CoreBundle\Form\Type\TranslatableChoiceType instance
     */
    protected function getSonata_Core_Form_Type_TranslatableChoiceService()
    {
        return $this->services['sonata.core.form.type.translatable_choice'] = new \Sonata\CoreBundle\Form\Type\TranslatableChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.model.adapter.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain A Sonata\CoreBundle\Model\Adapter\AdapterChain instance
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)));

        return $instance;
    }

    /**
     * Gets the 'sonata.core.slugify.cocur' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocur\Slugify\Slugify A Cocur\Slugify\Slugify instance
     *
     * @deprecated The "sonata.core.slugify.cocur" service is deprecated. You should stop using it, as it will soon be removed.
     */
    protected function getSonata_Core_Slugify_CocurService()
    {
        @trigger_error('The "sonata.core.slugify.cocur" service is deprecated. You should stop using it, as it will soon be removed.', E_USER_DEPRECATED);

        return $this->services['sonata.core.slugify.cocur'] = new \Cocur\Slugify\Slugify();
    }

    /**
     * Gets the 'sonata.core.slugify.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Component\NativeSlugify A Sonata\CoreBundle\Component\NativeSlugify instance
     *
     * @deprecated The "sonata.core.slugify.native" service is deprecated. You should stop using it, as it will soon be removed.
     */
    protected function getSonata_Core_Slugify_NativeService()
    {
        @trigger_error('The "sonata.core.slugify.native" service is deprecated. You should stop using it, as it will soon be removed.', E_USER_DEPRECATED);

        return $this->services['sonata.core.slugify.native'] = new \Sonata\CoreBundle\Component\NativeSlugify();
    }

    /**
     * Gets the 'sonata.core.twig.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension A Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension instance
     */
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension();
    }

    /**
     * Gets the 'sonata.core.twig.extension.wrapping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FormTypeExtension A Sonata\CoreBundle\Twig\Extension\FormTypeExtension instance
     */
    protected function getSonata_Core_Twig_Extension_WrappingService()
    {
        return $this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard');
    }

    /**
     * Gets the 'sonata.core.twig.status_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\StatusExtension A Sonata\CoreBundle\Twig\Extension\StatusExtension instance
     */
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        $this->services['sonata.core.twig.status_extension'] = $instance = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();

        $instance->addStatusService($this->get('sonata.core.flashmessage.manager'));

        return $instance;
    }

    /**
     * Gets the 'sonata.core.twig.template_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\TemplateExtension A Sonata\CoreBundle\Twig\Extension\TemplateExtension instance
     */
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(true, $this->get('translator'), $this->get('sonata.core.model.adapter.chain'));
    }

    /**
     * Gets the 'sonata.core.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator A Sonata\CoreBundle\Validator\InlineValidator instance
     */
    protected function getSonata_Core_Validator_InlineService()
    {
        return $this->services['sonata.core.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, ${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->getValidator_ValidatorFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the 'sonata.easy_extends.doctrine.mapper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper A Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper instance
     */
    protected function getSonata_EasyExtends_Doctrine_MapperService()
    {
        $this->services['sonata.easy_extends.doctrine.mapper'] = $instance = new \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper($this->get('doctrine'), array());

        $instance->addAssociation('AppBundle\\Entity\\Classification\\Category', 'mapOneToMany', array(0 => array('fieldName' => 'children', 'targetEntity' => 'AppBundle\\Entity\\Classification\\Category', 'cascade' => array(0 => 'persist'), 'mappedBy' => 'parent', 'orphanRemoval' => true, 'orderBy' => array('position' => 'ASC'))));
        $instance->addAssociation('AppBundle\\Entity\\Classification\\Category', 'mapManyToOne', array(0 => array('fieldName' => 'parent', 'targetEntity' => 'AppBundle\\Entity\\Classification\\Category', 'cascade' => array(0 => 'persist', 1 => 'refresh', 2 => 'merge', 3 => 'detach'), 'mappedBy' => NULL, 'inversedBy' => 'children', 'joinColumns' => array(0 => array('name' => 'parent_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE')), 'orphanRemoval' => false), 1 => array('fieldName' => 'context', 'targetEntity' => 'AppBundle\\Entity\\Classification\\Context', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'context', 'referencedColumnName' => 'id')), 'orphanRemoval' => false), 2 => array('fieldName' => 'media', 'targetEntity' => 'AppBundle\\Entity\\Media\\Media', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'media_id', 'referencedColumnName' => 'id', 'onDelete' => 'SET NULL')), 'orphanRemoval' => false)));
        $instance->addAssociation('AppBundle\\Entity\\Classification\\Tag', 'mapManyToOne', array(0 => array('fieldName' => 'context', 'targetEntity' => 'AppBundle\\Entity\\Classification\\Context', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'context', 'referencedColumnName' => 'id')), 'orphanRemoval' => false)));
        $instance->addAssociation('AppBundle\\Entity\\Classification\\Collection', 'mapManyToOne', array(0 => array('fieldName' => 'context', 'targetEntity' => 'AppBundle\\Entity\\Classification\\Context', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'context', 'referencedColumnName' => 'id')), 'orphanRemoval' => false), 1 => array('fieldName' => 'media', 'targetEntity' => 'AppBundle\\Entity\\Media\\Media', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'media_id', 'referencedColumnName' => 'id', 'onDelete' => 'SET NULL')), 'orphanRemoval' => false)));
        $instance->addAssociation('AppBundle\\Entity\\Media\\Media', 'mapOneToMany', array(0 => array('fieldName' => 'galleryHasMedias', 'targetEntity' => 'AppBundle\\Entity\\Media\\GalleryHasMedia', 'cascade' => array(0 => 'persist'), 'mappedBy' => 'media', 'orphanRemoval' => false)));
        $instance->addAssociation('AppBundle\\Entity\\Media\\Media', 'mapManyToOne', array(0 => array('fieldName' => 'category', 'targetEntity' => 'AppBundle\\Entity\\Classification\\Category', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'category_id', 'referencedColumnName' => 'id', 'onDelete' => 'SET NULL')), 'orphanRemoval' => false)));
        $instance->addAssociation('AppBundle\\Entity\\Media\\GalleryHasMedia', 'mapManyToOne', array(0 => array('fieldName' => 'gallery', 'targetEntity' => 'AppBundle\\Entity\\Media\\Gallery', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => 'galleryHasMedias', 'joinColumns' => array(0 => array('name' => 'gallery_id', 'referencedColumnName' => 'id')), 'orphanRemoval' => false), 1 => array('fieldName' => 'media', 'targetEntity' => 'AppBundle\\Entity\\Media\\Media', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => 'galleryHasMedias', 'joinColumns' => array(0 => array('name' => 'media_id', 'referencedColumnName' => 'id')), 'orphanRemoval' => false)));
        $instance->addAssociation('AppBundle\\Entity\\Media\\Gallery', 'mapOneToMany', array(0 => array('fieldName' => 'galleryHasMedias', 'targetEntity' => 'AppBundle\\Entity\\Media\\GalleryHasMedia', 'cascade' => array(0 => 'persist'), 'mappedBy' => 'gallery', 'orphanRemoval' => true, 'orderBy' => array('position' => 'ASC'))));
        $instance->addUnique('AppBundle\\Entity\\Classification\\Tag', 'tag_context', array(0 => 'slug', 1 => 'context'));
        $instance->addUnique('AppBundle\\Entity\\Classification\\Collection', 'tag_collection', array(0 => 'slug', 1 => 'context'));

        return $instance;
    }

    /**
     * Gets the 'sonata.easy_extends.generator.bundle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\BundleGenerator A Sonata\EasyExtendsBundle\Generator\BundleGenerator instance
     */
    protected function getSonata_EasyExtends_Generator_BundleService()
    {
        return $this->services['sonata.easy_extends.generator.bundle'] = new \Sonata\EasyExtendsBundle\Generator\BundleGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.odm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\OdmGenerator A Sonata\EasyExtendsBundle\Generator\OdmGenerator instance
     */
    protected function getSonata_EasyExtends_Generator_OdmService()
    {
        return $this->services['sonata.easy_extends.generator.odm'] = new \Sonata\EasyExtendsBundle\Generator\OdmGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\OrmGenerator A Sonata\EasyExtendsBundle\Generator\OrmGenerator instance
     */
    protected function getSonata_EasyExtends_Generator_OrmService()
    {
        return $this->services['sonata.easy_extends.generator.orm'] = new \Sonata\EasyExtendsBundle\Generator\OrmGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator A Sonata\EasyExtendsBundle\Generator\PHPCRGenerator instance
     */
    protected function getSonata_EasyExtends_Generator_PhpcrService()
    {
        return $this->services['sonata.easy_extends.generator.phpcr'] = new \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\SerializerGenerator A Sonata\EasyExtendsBundle\Generator\SerializerGenerator instance
     */
    protected function getSonata_EasyExtends_Generator_SerializerService()
    {
        return $this->services['sonata.easy_extends.generator.serializer'] = new \Sonata\EasyExtendsBundle\Generator\SerializerGenerator();
    }

    /**
     * Gets the 'sonata.formatter.block.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Block\FormatterBlockService A Sonata\FormatterBundle\Block\FormatterBlockService instance
     */
    protected function getSonata_Formatter_Block_FormatterService()
    {
        return $this->services['sonata.formatter.block.formatter'] = new \Sonata\FormatterBundle\Block\FormatterBlockService('sonata.formatter.block.formatter', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.formatter.ckeditor.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Admin\CkeditorAdminExtension A Sonata\FormatterBundle\Admin\CkeditorAdminExtension instance
     */
    protected function getSonata_Formatter_Ckeditor_ExtensionService()
    {
        return $this->services['sonata.formatter.ckeditor.extension'] = new \Sonata\FormatterBundle\Admin\CkeditorAdminExtension();
    }

    /**
     * Gets the 'sonata.formatter.form.type.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Form\Type\FormatterType A Sonata\FormatterBundle\Form\Type\FormatterType instance
     */
    protected function getSonata_Formatter_Form_Type_SelectorService()
    {
        return $this->services['sonata.formatter.form.type.selector'] = new \Sonata\FormatterBundle\Form\Type\FormatterType($this->get('sonata.formatter.pool'), $this->get('translator'), $this->get('ivory_ck_editor.config_manager'), $this->get('ivory_ck_editor.plugin_manager'), $this->get('ivory_ck_editor.template_manager'));
    }

    /**
     * Gets the 'sonata.formatter.form.type.simple' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Form\Type\SimpleFormatterType A Sonata\FormatterBundle\Form\Type\SimpleFormatterType instance
     */
    protected function getSonata_Formatter_Form_Type_SimpleService()
    {
        return $this->services['sonata.formatter.form.type.simple'] = new \Sonata\FormatterBundle\Form\Type\SimpleFormatterType($this->get('ivory_ck_editor.config_manager'), $this->get('ivory_ck_editor.plugin_manager'), $this->get('ivory_ck_editor.template_manager'));
    }

    /**
     * Gets the 'sonata.formatter.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Formatter\Pool A Sonata\FormatterBundle\Formatter\Pool instance
     */
    protected function getSonata_Formatter_PoolService()
    {
        $this->services['sonata.formatter.pool'] = $instance = new \Sonata\FormatterBundle\Formatter\Pool('richhtml');

        $instance->setLogger($this->get('logger'));
        $instance->add('richhtml', $this->get('sonata.formatter.text.raw'), ${($_ = isset($this->services['sonata.formatter.twig.env.richhtml']) ? $this->services['sonata.formatter.twig.env.richhtml'] : $this->getSonata_Formatter_Twig_Env_RichhtmlService()) && false ?: '_'});
        $instance->add('twig', $this->get('sonata.formatter.text.twigengine'), NULL);

        return $instance;
    }

    /**
     * Gets the 'sonata.formatter.text.markdown' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Formatter\MarkdownFormatter A Sonata\FormatterBundle\Formatter\MarkdownFormatter instance
     */
    protected function getSonata_Formatter_Text_MarkdownService()
    {
        return $this->services['sonata.formatter.text.markdown'] = new \Sonata\FormatterBundle\Formatter\MarkdownFormatter($this->get('markdown.parser'));
    }

    /**
     * Gets the 'sonata.formatter.text.raw' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Formatter\RawFormatter A Sonata\FormatterBundle\Formatter\RawFormatter instance
     */
    protected function getSonata_Formatter_Text_RawService()
    {
        return $this->services['sonata.formatter.text.raw'] = new \Sonata\FormatterBundle\Formatter\RawFormatter();
    }

    /**
     * Gets the 'sonata.formatter.text.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Formatter\TextFormatter A Sonata\FormatterBundle\Formatter\TextFormatter instance
     */
    protected function getSonata_Formatter_Text_TextService()
    {
        return $this->services['sonata.formatter.text.text'] = new \Sonata\FormatterBundle\Formatter\TextFormatter();
    }

    /**
     * Gets the 'sonata.formatter.text.twigengine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Formatter\TwigFormatter A Sonata\FormatterBundle\Formatter\TwigFormatter instance
     */
    protected function getSonata_Formatter_Text_TwigengineService()
    {
        return $this->services['sonata.formatter.text.twigengine'] = new \Sonata\FormatterBundle\Formatter\TwigFormatter($this->get('twig'));
    }

    /**
     * Gets the 'sonata.formatter.twig.control_flow' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Extension\ControlFlowExtension A Sonata\FormatterBundle\Extension\ControlFlowExtension instance
     */
    protected function getSonata_Formatter_Twig_ControlFlowService()
    {
        return $this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension();
    }

    /**
     * Gets the 'sonata.formatter.twig.gist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Extension\GistExtension A Sonata\FormatterBundle\Extension\GistExtension instance
     */
    protected function getSonata_Formatter_Twig_GistService()
    {
        return $this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension();
    }

    /**
     * Gets the 'sonata.formatter.validator.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Validator\Constraints\FormatterValidator A Sonata\FormatterBundle\Validator\Constraints\FormatterValidator instance
     */
    protected function getSonata_Formatter_Validator_FormatterService()
    {
        return $this->services['sonata.formatter.validator.formatter'] = new \Sonata\FormatterBundle\Validator\Constraints\FormatterValidator($this->get('sonata.formatter.pool'));
    }

    /**
     * Gets the 'sonata.intl.locale_detector.request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Locale\RequestStackDetector A Sonata\IntlBundle\Locale\RequestStackDetector instance
     */
    protected function getSonata_Intl_LocaleDetector_RequestStackService()
    {
        return $this->services['sonata.intl.locale_detector.request_stack'] = new \Sonata\IntlBundle\Locale\RequestStackDetector($this->get('request_stack'), 'fr');
    }

    /**
     * Gets the 'sonata.intl.templating.helper.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Templating\Helper\DateTimeHelper A Sonata\IntlBundle\Templating\Helper\DateTimeHelper instance
     */
    protected function getSonata_Intl_Templating_Helper_DatetimeService()
    {
        return $this->services['sonata.intl.templating.helper.datetime'] = new \Sonata\IntlBundle\Templating\Helper\DateTimeHelper($this->get('sonata.intl.timezone_detector.chain'), 'UTF-8', $this->get('sonata.intl.locale_detector.request_stack'));
    }

    /**
     * Gets the 'sonata.intl.templating.helper.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Templating\Helper\LocaleHelper A Sonata\IntlBundle\Templating\Helper\LocaleHelper instance
     */
    protected function getSonata_Intl_Templating_Helper_LocaleService()
    {
        return $this->services['sonata.intl.templating.helper.locale'] = new \Sonata\IntlBundle\Templating\Helper\LocaleHelper('UTF-8', $this->get('sonata.intl.locale_detector.request_stack'));
    }

    /**
     * Gets the 'sonata.intl.templating.helper.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Templating\Helper\NumberHelper A Sonata\IntlBundle\Templating\Helper\NumberHelper instance
     */
    protected function getSonata_Intl_Templating_Helper_NumberService()
    {
        return $this->services['sonata.intl.templating.helper.number'] = new \Sonata\IntlBundle\Templating\Helper\NumberHelper('UTF-8', $this->get('sonata.intl.locale_detector.request_stack'));
    }

    /**
     * Gets the 'sonata.intl.timezone_detector.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Timezone\ChainTimezoneDetector A Sonata\IntlBundle\Timezone\ChainTimezoneDetector instance
     */
    protected function getSonata_Intl_TimezoneDetector_ChainService()
    {
        $this->services['sonata.intl.timezone_detector.chain'] = $instance = new \Sonata\IntlBundle\Timezone\ChainTimezoneDetector('Europe/Berlin');

        $instance->addDetector($this->get('sonata.intl.timezone_detector.locale'));

        return $instance;
    }

    /**
     * Gets the 'sonata.intl.timezone_detector.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Timezone\LocaleBasedTimezoneDetector A Sonata\IntlBundle\Timezone\LocaleBasedTimezoneDetector instance
     */
    protected function getSonata_Intl_TimezoneDetector_LocaleService()
    {
        return $this->services['sonata.intl.timezone_detector.locale'] = new \Sonata\IntlBundle\Timezone\LocaleBasedTimezoneDetector($this->get('sonata.intl.locale_detector.request_stack'), array());
    }

    /**
     * Gets the 'sonata.media.adapter.filesystem.local' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Filesystem\Local A Sonata\MediaBundle\Filesystem\Local instance
     */
    protected function getSonata_Media_Adapter_Filesystem_LocalService()
    {
        return $this->services['sonata.media.adapter.filesystem.local'] = new \Sonata\MediaBundle\Filesystem\Local(($this->targetDirs[3].'/app/../web/uploads/media'), false);
    }

    /**
     * Gets the 'sonata.media.adapter.image.gd' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Gd\Imagine A Imagine\Gd\Imagine instance
     */
    protected function getSonata_Media_Adapter_Image_GdService()
    {
        return $this->services['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine();
    }

    /**
     * Gets the 'sonata.media.adapter.image.gmagick' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Gmagick\Imagine A Imagine\Gmagick\Imagine instance
     */
    protected function getSonata_Media_Adapter_Image_GmagickService()
    {
        return $this->services['sonata.media.adapter.image.gmagick'] = new \Imagine\Gmagick\Imagine();
    }

    /**
     * Gets the 'sonata.media.adapter.image.imagick' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Imagick\Imagine A Imagine\Imagick\Imagine instance
     */
    protected function getSonata_Media_Adapter_Image_ImagickService()
    {
        return $this->services['sonata.media.adapter.image.imagick'] = new \Imagine\Imagick\Imagine();
    }

    /**
     * Gets the 'sonata.media.adapter.service.s3' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Aws\S3\S3Client A Aws\S3\S3Client instance
     */
    protected function getSonata_Media_Adapter_Service_S3Service()
    {
        return $this->services['sonata.media.adapter.service.s3'] = \Aws\S3\S3Client::factory(array());
    }

    /**
     * Gets the 'sonata.media.admin.gallery' service.
     *
     * @return \Sonata\MediaBundle\Admin\GalleryAdmin A Sonata\MediaBundle\Admin\GalleryAdmin instance
     */
    protected function getSonata_Media_Admin_GalleryService()
    {
        $instance = new \Sonata\MediaBundle\Admin\GalleryAdmin('sonata.media.admin.gallery', 'AppBundle\\Entity\\Media\\Gallery', 'SonataMediaBundle:GalleryAdmin', $this->get('sonata.media.pool'));

        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setPagerType('default');
        $instance->setLabel('gallery');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataMediaBundle:GalleryAdmin:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.admin.gallery_has_media' service.
     *
     * @return \Sonata\MediaBundle\Admin\GalleryHasMediaAdmin A Sonata\MediaBundle\Admin\GalleryHasMediaAdmin instance
     */
    protected function getSonata_Media_Admin_GalleryHasMediaService()
    {
        $instance = new \Sonata\MediaBundle\Admin\GalleryHasMediaAdmin('sonata.media.admin.gallery_has_media', 'AppBundle\\Entity\\Media\\GalleryHasMedia', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setPagerType('default');
        $instance->setLabel('gallery_has_media');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.admin.media' service.
     *
     * @return \Sonata\MediaBundle\Admin\ORM\MediaAdmin A Sonata\MediaBundle\Admin\ORM\MediaAdmin instance
     */
    protected function getSonata_Media_Admin_MediaService()
    {
        $instance = new \Sonata\MediaBundle\Admin\ORM\MediaAdmin('sonata.media.admin.media', 'AppBundle\\Entity\\Media\\Media', 'SonataMediaBundle:MediaAdmin', $this->get('sonata.media.pool'), $this->get('sonata.media.manager.category.default', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setModelManager($this->get('sonata.media.admin.media.manager'));
        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'), false);
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('liip_functional_test.validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setPagerType('default');
        $instance->setLabel('media');
        $instance->setPersistFilters(false);
        $instance->showMosaicButton(true);
        $instance->setTemplates(array('user_block' => ':Block:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => ':Admin:layout_form.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataMediaBundle:MediaAdmin:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataMediaBundle:MediaAdmin:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataMediaBundle:MediaAdmin:inner_row_media.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_flat_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig', 'outer_list_rows_mosaic' => 'SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig', 'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig', 'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig', 'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig', 'button_create' => 'SonataAdminBundle:Button:create_button.html.twig', 'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig', 'button_history' => 'SonataAdminBundle:Button:history_button.html.twig', 'button_list' => 'SonataAdminBundle:Button:list_button.html.twig', 'button_show' => 'SonataAdminBundle:Button:show_button.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.formatter.ckeditor.extension'));
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.admin.media.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Model\ModelManager A Sonata\DoctrineORMAdminBundle\Model\ModelManager instance
     */
    protected function getSonata_Media_Admin_Media_ManagerService()
    {
        return $this->services['sonata.media.admin.media.manager'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager($this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.media.api.form.type.doctrine.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Form\Type\ApiDoctrineMediaType A Sonata\MediaBundle\Form\Type\ApiDoctrineMediaType instance
     */
    protected function getSonata_Media_Api_Form_Type_Doctrine_MediaService()
    {
        return $this->services['sonata.media.api.form.type.doctrine.media'] = new \Sonata\MediaBundle\Form\Type\ApiDoctrineMediaType(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, $this->get('doctrine'), 'sonata_media_api_form_doctrine_media', 'AppBundle\\Entity\\Media\\Media', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.media.api.form.type.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Form\Type\ApiGalleryType A Sonata\MediaBundle\Form\Type\ApiGalleryType instance
     */
    protected function getSonata_Media_Api_Form_Type_GalleryService()
    {
        return $this->services['sonata.media.api.form.type.gallery'] = new \Sonata\MediaBundle\Form\Type\ApiGalleryType(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, $this->get('doctrine'), 'sonata_media_api_form_gallery', 'AppBundle\\Entity\\Media\\Gallery', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.media.api.form.type.gallery_has_media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Form\Type\ApiGalleryHasMediaType A Sonata\MediaBundle\Form\Type\ApiGalleryHasMediaType instance
     */
    protected function getSonata_Media_Api_Form_Type_GalleryHasMediaService()
    {
        return $this->services['sonata.media.api.form.type.gallery_has_media'] = new \Sonata\MediaBundle\Form\Type\ApiGalleryHasMediaType(${($_ = isset($this->services['jms_serializer.metadata_factory']) ? $this->services['jms_serializer.metadata_factory'] : $this->getJmsSerializer_MetadataFactoryService()) && false ?: '_'}, $this->get('doctrine'), 'sonata_media_api_form_gallery_has_media', 'AppBundle\\Entity\\Media\\GalleryHasMedia', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.media.api.form.type.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Form\Type\ApiMediaType A Sonata\MediaBundle\Form\Type\ApiMediaType instance
     */
    protected function getSonata_Media_Api_Form_Type_MediaService()
    {
        return $this->services['sonata.media.api.form.type.media'] = new \Sonata\MediaBundle\Form\Type\ApiMediaType($this->get('sonata.media.pool'), 'AppBundle\\Entity\\Media\\Media');
    }

    /**
     * Gets the 'sonata.media.block.feature_media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Block\FeatureMediaBlockService A Sonata\MediaBundle\Block\FeatureMediaBlockService instance
     */
    protected function getSonata_Media_Block_FeatureMediaService()
    {
        return $this->services['sonata.media.block.feature_media'] = new \Sonata\MediaBundle\Block\FeatureMediaBlockService('sonata.media.block.feature_media', $this->get('templating'), $this, $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.block.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Block\GalleryBlockService A Sonata\MediaBundle\Block\GalleryBlockService instance
     */
    protected function getSonata_Media_Block_GalleryService()
    {
        return $this->services['sonata.media.block.gallery'] = new \Sonata\MediaBundle\Block\GalleryBlockService('sonata.media.block.gallery', $this->get('templating'), $this, $this->get('sonata.media.manager.gallery'));
    }

    /**
     * Gets the 'sonata.media.block.gallery_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Block\GalleryListBlockService A Sonata\MediaBundle\Block\GalleryListBlockService instance
     */
    protected function getSonata_Media_Block_GalleryListService()
    {
        return $this->services['sonata.media.block.gallery_list'] = new \Sonata\MediaBundle\Block\GalleryListBlockService('sonata.media.block.gallery_list', $this->get('templating'), $this->get('sonata.media.manager.gallery'), $this->get('sonata.media.pool'));
    }

    /**
     * Gets the 'sonata.media.block.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Block\MediaBlockService A Sonata\MediaBundle\Block\MediaBlockService instance
     */
    protected function getSonata_Media_Block_MediaService()
    {
        return $this->services['sonata.media.block.media'] = new \Sonata\MediaBundle\Block\MediaBlockService('sonata.media.block.media', $this->get('templating'), $this, $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.buzz.browser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Buzz\Browser A Buzz\Browser instance
     */
    protected function getSonata_Media_Buzz_BrowserService()
    {
        return $this->services['sonata.media.buzz.browser'] = new \Buzz\Browser($this->get('sonata.media.buzz.connector.curl'));
    }

    /**
     * Gets the 'sonata.media.buzz.connector.curl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Buzz\Client\Curl A Buzz\Client\Curl instance
     */
    protected function getSonata_Media_Buzz_Connector_CurlService()
    {
        $this->services['sonata.media.buzz.connector.curl'] = $instance = new \Buzz\Client\Curl();

        $instance->setIgnoreErrors(true);
        $instance->setMaxRedirects(5);
        $instance->setTimeout(5);
        $instance->setVerifyPeer(true);
        $instance->setProxy(NULL);

        return $instance;
    }

    /**
     * Gets the 'sonata.media.buzz.connector.file_get_contents' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Buzz\Client\FileGetContents A Buzz\Client\FileGetContents instance
     */
    protected function getSonata_Media_Buzz_Connector_FileGetContentsService()
    {
        $this->services['sonata.media.buzz.connector.file_get_contents'] = $instance = new \Buzz\Client\FileGetContents();

        $instance->setIgnoreErrors(true);
        $instance->setMaxRedirects(5);
        $instance->setTimeout(5);
        $instance->setVerifyPeer(true);
        $instance->setProxy(NULL);

        return $instance;
    }

    /**
     * Gets the 'sonata.media.cdn.server' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\CDN\Server A Sonata\MediaBundle\CDN\Server instance
     */
    protected function getSonata_Media_Cdn_ServerService()
    {
        return $this->services['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('/web/uploads/media');
    }

    /**
     * Gets the 'sonata.media.controller.api.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Controller\Api\GalleryController A Sonata\MediaBundle\Controller\Api\GalleryController instance
     */
    protected function getSonata_Media_Controller_Api_GalleryService()
    {
        return $this->services['sonata.media.controller.api.gallery'] = new \Sonata\MediaBundle\Controller\Api\GalleryController($this->get('sonata.media.manager.gallery'), $this->get('sonata.media.manager.media'), $this->get('form.factory'), 'AppBundle\\Entity\\Media\\GalleryHasMedia');
    }

    /**
     * Gets the 'sonata.media.controller.api.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Controller\Api\MediaController A Sonata\MediaBundle\Controller\Api\MediaController instance
     */
    protected function getSonata_Media_Controller_Api_MediaService()
    {
        return $this->services['sonata.media.controller.api.media'] = new \Sonata\MediaBundle\Controller\Api\MediaController($this->get('sonata.media.manager.media'), $this->get('sonata.media.pool'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.media.doctrine.event_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Listener\ORM\MediaEventSubscriber A Sonata\MediaBundle\Listener\ORM\MediaEventSubscriber instance
     */
    protected function getSonata_Media_Doctrine_EventSubscriberService()
    {
        return $this->services['sonata.media.doctrine.event_subscriber'] = new \Sonata\MediaBundle\Listener\ORM\MediaEventSubscriber($this);
    }

    /**
     * Gets the 'sonata.media.filesystem.local' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gaufrette\Filesystem A Gaufrette\Filesystem instance
     */
    protected function getSonata_Media_Filesystem_LocalService()
    {
        return $this->services['sonata.media.filesystem.local'] = new \Gaufrette\Filesystem($this->get('sonata.media.adapter.filesystem.local'));
    }

    /**
     * Gets the 'sonata.media.form.type.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Form\Type\MediaType A Sonata\MediaBundle\Form\Type\MediaType instance
     */
    protected function getSonata_Media_Form_Type_MediaService()
    {
        return $this->services['sonata.media.form.type.media'] = new \Sonata\MediaBundle\Form\Type\MediaType($this->get('sonata.media.pool'), 'AppBundle\\Entity\\Media\\Media');
    }

    /**
     * Gets the 'sonata.media.formatter.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Twig\Extension\FormatterMediaExtension A Sonata\MediaBundle\Twig\Extension\FormatterMediaExtension instance
     */
    protected function getSonata_Media_Formatter_TwigService()
    {
        return $this->services['sonata.media.formatter.twig'] = new \Sonata\MediaBundle\Twig\Extension\FormatterMediaExtension($this->get('sonata.media.twig.extension'));
    }

    /**
     * Gets the 'sonata.media.generator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Generator\DefaultGenerator A Sonata\MediaBundle\Generator\DefaultGenerator instance
     */
    protected function getSonata_Media_Generator_DefaultService()
    {
        return $this->services['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator();
    }

    /**
     * Gets the 'sonata.media.manager.category.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Model\CategoryManager A Sonata\MediaBundle\Model\CategoryManager instance
     */
    protected function getSonata_Media_Manager_Category_DefaultService()
    {
        return $this->services['sonata.media.manager.category.default'] = new \Sonata\MediaBundle\Model\CategoryManager($this->get('sonata.classification.manager.category', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.media.manager.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Entity\GalleryManager A Sonata\MediaBundle\Entity\GalleryManager instance
     */
    protected function getSonata_Media_Manager_GalleryService()
    {
        return $this->services['sonata.media.manager.gallery'] = new \Sonata\MediaBundle\Entity\GalleryManager('AppBundle\\Entity\\Media\\Gallery', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.media.manager.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Entity\MediaManager A Sonata\MediaBundle\Entity\MediaManager instance
     */
    protected function getSonata_Media_Manager_MediaService()
    {
        return $this->services['sonata.media.manager.media'] = new \Sonata\MediaBundle\Entity\MediaManager('AppBundle\\Entity\\Media\\Media', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.media.metadata.amazon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Metadata\AmazonMetadataBuilder A Sonata\MediaBundle\Metadata\AmazonMetadataBuilder instance
     */
    protected function getSonata_Media_Metadata_AmazonService()
    {
        return $this->services['sonata.media.metadata.amazon'] = new \Sonata\MediaBundle\Metadata\AmazonMetadataBuilder();
    }

    /**
     * Gets the 'sonata.media.metadata.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Metadata\NoopMetadataBuilder A Sonata\MediaBundle\Metadata\NoopMetadataBuilder instance
     */
    protected function getSonata_Media_Metadata_NoopService()
    {
        return $this->services['sonata.media.metadata.noop'] = new \Sonata\MediaBundle\Metadata\NoopMetadataBuilder();
    }

    /**
     * Gets the 'sonata.media.metadata.proxy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder A Sonata\MediaBundle\Metadata\ProxyMetadataBuilder instance
     */
    protected function getSonata_Media_Metadata_ProxyService()
    {
        return $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this);
    }

    /**
     * Gets the 'sonata.media.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\Pool A Sonata\MediaBundle\Provider\Pool instance
     */
    protected function getSonata_Media_PoolService()
    {
        $this->services['sonata.media.pool'] = $instance = new \Sonata\MediaBundle\Provider\Pool('default');

        $instance->addContext('default', array(0 => 'sonata.media.provider.youtube', 1 => 'sonata.media.provider.image', 2 => 'sonata.media.provider.file'), array('default_small' => array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true), 'default_big' => array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true)), array('strategy' => 'sonata.media.security.superadmin_strategy', 'mode' => 'http'));
        $instance->addDownloadStrategy('sonata.media.security.superadmin_strategy', $this->get('sonata.media.security.superadmin_strategy'));
        $instance->addProvider('sonata.media.provider.image', $this->get('sonata.media.provider.image'));
        $instance->addProvider('sonata.media.provider.file', $this->get('sonata.media.provider.file'));
        $instance->addProvider('sonata.media.provider.youtube', $this->get('sonata.media.provider.youtube'));
        $instance->addProvider('sonata.media.provider.dailymotion', $this->get('sonata.media.provider.dailymotion'));
        $instance->addProvider('sonata.media.provider.vimeo', $this->get('sonata.media.provider.vimeo'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.dailymotion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\DailyMotionProvider A Sonata\MediaBundle\Provider\DailyMotionProvider instance
     */
    protected function getSonata_Media_Provider_DailymotionService()
    {
        $this->services['sonata.media.provider.dailymotion'] = $instance = new \Sonata\MediaBundle\Provider\DailyMotionProvider('sonata.media.provider.dailymotion', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), $this->get('sonata.media.buzz.browser'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_dailymotion.html.twig'));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('width' => 200, 'height' => false, 'quality' => 90, 'format' => 'jpg', 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\FileProvider A Sonata\MediaBundle\Provider\FileProvider instance
     */
    protected function getSonata_Media_Provider_FileService()
    {
        $this->services['sonata.media.provider.file'] = $instance = new \Sonata\MediaBundle\Provider\FileProvider('sonata.media.provider.file', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), array(0 => 'pdf', 1 => 'txt', 2 => 'rtf', 3 => 'doc', 4 => 'docx', 5 => 'xls', 6 => 'xlsx', 7 => 'ppt', 8 => 'pptx', 9 => 'odt', 10 => 'odg', 11 => 'odp', 12 => 'ods', 13 => 'odc', 14 => 'odf', 15 => 'odb', 16 => 'csv', 17 => 'xml'), array(0 => 'application/pdf', 1 => 'application/x-pdf', 2 => 'application/rtf', 3 => 'text/html', 4 => 'text/rtf', 5 => 'text/plain', 6 => 'application/excel', 7 => 'application/msword', 8 => 'application/vnd.ms-excel', 9 => 'application/vnd.ms-powerpoint', 10 => 'application/vnd.ms-powerpoint', 11 => 'application/vnd.oasis.opendocument.text', 12 => 'application/vnd.oasis.opendocument.graphics', 13 => 'application/vnd.oasis.opendocument.presentation', 14 => 'application/vnd.oasis.opendocument.spreadsheet', 15 => 'application/vnd.oasis.opendocument.chart', 16 => 'application/vnd.oasis.opendocument.formula', 17 => 'application/vnd.oasis.opendocument.database', 18 => 'application/vnd.oasis.opendocument.image', 19 => 'text/comma-separated-values', 20 => 'text/xml', 21 => 'application/xml', 22 => 'application/zip'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_file.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('admin', array('width' => 200, 'height' => false, 'quality' => 90, 'format' => 'jpg', 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\ImageProvider A Sonata\MediaBundle\Provider\ImageProvider instance
     */
    protected function getSonata_Media_Provider_ImageService()
    {
        $this->services['sonata.media.provider.image'] = $instance = new \Sonata\MediaBundle\Provider\ImageProvider('sonata.media.provider.image', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), array(0 => 'jpg', 1 => 'png', 2 => 'jpeg'), array(0 => 'image/pjpeg', 1 => 'image/jpeg', 2 => 'image/png', 3 => 'image/x-png'), $this->get('sonata.media.adapter.image.gd'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_image.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('width' => 200, 'height' => false, 'quality' => 90, 'format' => 'jpg', 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.vimeo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\VimeoProvider A Sonata\MediaBundle\Provider\VimeoProvider instance
     */
    protected function getSonata_Media_Provider_VimeoService()
    {
        $this->services['sonata.media.provider.vimeo'] = $instance = new \Sonata\MediaBundle\Provider\VimeoProvider('sonata.media.provider.vimeo', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), $this->get('sonata.media.buzz.browser'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_vimeo.html.twig'));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('width' => 200, 'height' => false, 'quality' => 90, 'format' => 'jpg', 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.youtube' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\YouTubeProvider A Sonata\MediaBundle\Provider\YouTubeProvider instance
     */
    protected function getSonata_Media_Provider_YoutubeService()
    {
        $this->services['sonata.media.provider.youtube'] = $instance = new \Sonata\MediaBundle\Provider\YouTubeProvider('sonata.media.provider.youtube', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), $this->get('sonata.media.buzz.browser'), $this->get('sonata.media.metadata.proxy'), false);

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_youtube.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('width' => 200, 'height' => false, 'quality' => 90, 'format' => 'jpg', 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.resizer.simple' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Resizer\SimpleResizer A Sonata\MediaBundle\Resizer\SimpleResizer instance
     */
    protected function getSonata_Media_Resizer_SimpleService()
    {
        return $this->services['sonata.media.resizer.simple'] = new \Sonata\MediaBundle\Resizer\SimpleResizer($this->get('sonata.media.adapter.image.gd'), 'inset', $this->get('sonata.media.metadata.proxy'));
    }

    /**
     * Gets the 'sonata.media.resizer.square' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Resizer\SquareResizer A Sonata\MediaBundle\Resizer\SquareResizer instance
     */
    protected function getSonata_Media_Resizer_SquareService()
    {
        return $this->services['sonata.media.resizer.square'] = new \Sonata\MediaBundle\Resizer\SquareResizer($this->get('sonata.media.adapter.image.gd'), 'inset', $this->get('sonata.media.metadata.proxy'));
    }

    /**
     * Gets the 'sonata.media.security.connected_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Security\RolesDownloadStrategy A Sonata\MediaBundle\Security\RolesDownloadStrategy instance
     */
    protected function getSonata_Media_Security_ConnectedStrategyService()
    {
        return $this->services['sonata.media.security.connected_strategy'] = new \Sonata\MediaBundle\Security\RolesDownloadStrategy($this->get('translator'), new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false), array(0 => 'IS_AUTHENTICATED_FULLY', 1 => 'IS_AUTHENTICATED_REMEMBERED'));
    }

    /**
     * Gets the 'sonata.media.security.forbidden_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Security\ForbiddenDownloadStrategy A Sonata\MediaBundle\Security\ForbiddenDownloadStrategy instance
     */
    protected function getSonata_Media_Security_ForbiddenStrategyService()
    {
        return $this->services['sonata.media.security.forbidden_strategy'] = new \Sonata\MediaBundle\Security\ForbiddenDownloadStrategy($this->get('translator'));
    }

    /**
     * Gets the 'sonata.media.security.public_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Security\PublicDownloadStrategy A Sonata\MediaBundle\Security\PublicDownloadStrategy instance
     */
    protected function getSonata_Media_Security_PublicStrategyService()
    {
        return $this->services['sonata.media.security.public_strategy'] = new \Sonata\MediaBundle\Security\PublicDownloadStrategy($this->get('translator'));
    }

    /**
     * Gets the 'sonata.media.security.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Security\SessionDownloadStrategy A Sonata\MediaBundle\Security\SessionDownloadStrategy instance
     */
    protected function getSonata_Media_Security_SessionStrategyService()
    {
        return $this->services['sonata.media.security.session_strategy'] = new \Sonata\MediaBundle\Security\SessionDownloadStrategy($this->get('translator'), $this->get('session'), 1);
    }

    /**
     * Gets the 'sonata.media.security.superadmin_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Security\RolesDownloadStrategy A Sonata\MediaBundle\Security\RolesDownloadStrategy instance
     */
    protected function getSonata_Media_Security_SuperadminStrategyService()
    {
        return $this->services['sonata.media.security.superadmin_strategy'] = new \Sonata\MediaBundle\Security\RolesDownloadStrategy($this->get('translator'), new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false), array(0 => 'ROLE_SUPER_ADMIN', 1 => 'ROLE_ADMIN'));
    }

    /**
     * Gets the 'sonata.media.serializer.handler.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Serializer\GallerySerializerHandler A Sonata\MediaBundle\Serializer\GallerySerializerHandler instance
     */
    protected function getSonata_Media_Serializer_Handler_GalleryService()
    {
        return $this->services['sonata.media.serializer.handler.gallery'] = new \Sonata\MediaBundle\Serializer\GallerySerializerHandler($this->get('sonata.media.manager.gallery'));
    }

    /**
     * Gets the 'sonata.media.serializer.handler.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Serializer\MediaSerializerHandler A Sonata\MediaBundle\Serializer\MediaSerializerHandler instance
     */
    protected function getSonata_Media_Serializer_Handler_MediaService()
    {
        return $this->services['sonata.media.serializer.handler.media'] = new \Sonata\MediaBundle\Serializer\MediaSerializerHandler($this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.thumbnail.format' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Thumbnail\FormatThumbnail A Sonata\MediaBundle\Thumbnail\FormatThumbnail instance
     */
    protected function getSonata_Media_Thumbnail_FormatService()
    {
        return $this->services['sonata.media.thumbnail.format'] = new \Sonata\MediaBundle\Thumbnail\FormatThumbnail('jpg');
    }

    /**
     * Gets the 'sonata.media.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Twig\Extension\MediaExtension A Sonata\MediaBundle\Twig\Extension\MediaExtension instance
     */
    protected function getSonata_Media_Twig_ExtensionService()
    {
        return $this->services['sonata.media.twig.extension'] = new \Sonata\MediaBundle\Twig\Extension\MediaExtension($this->get('sonata.media.pool'), $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Twig\GlobalVariables A Sonata\MediaBundle\Twig\GlobalVariables instance
     */
    protected function getSonata_Media_Twig_GlobalService()
    {
        return $this->services['sonata.media.twig.global'] = new \Sonata\MediaBundle\Twig\GlobalVariables($this);
    }

    /**
     * Gets the 'sonata.media.validator.format' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Validator\FormatValidator A Sonata\MediaBundle\Validator\FormatValidator instance
     */
    protected function getSonata_Media_Validator_FormatService()
    {
        return $this->services['sonata.media.validator.format'] = new \Sonata\MediaBundle\Validator\FormatValidator($this->get('sonata.media.pool'));
    }

    /**
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the 'templating.helper.markdown' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MarkdownBundle\Helper\MarkdownHelper A Knp\Bundle\MarkdownBundle\Helper\MarkdownHelper instance
     */
    protected function getTemplating_Helper_MarkdownService()
    {
        return $this->services['templating.helper.markdown'] = new \Knp\Bundle\MarkdownBundle\Helper\MarkdownHelper(${($_ = isset($this->services['markdown.parser.parser_manager']) ? $this->services['markdown.parser.parser_manager'] : $this->getMarkdown_Parser_ParserManagerService()) && false ?: '_'});
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
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
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
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
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator A Symfony\Component\Translation\DataCollectorTranslator instance
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation')));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ja.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ja.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.ja.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.ja.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.ja.xliff')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.it.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.it.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.it.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.it.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.it.xliff'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 10 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.it.xliff')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.no.xliff')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.bg.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.bg.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.bg.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 8 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.bg.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/lexik/maintenance-bundle/Resources/translations/maintenance.en.yml'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.en.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.en.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.en.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.en.xliff'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.en.xliff'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 10 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 11 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.en.xliff'), 12 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.en.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fi.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.fi.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.nl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.nl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.nl.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.nl.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.nl.xliff'), 10 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.nl.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.sl.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.sl.xliff')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ru.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ru.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.ru.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.ru.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.ru.xliff'), 10 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.ru.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.es.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.es.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.es.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.es.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 9 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.es.xliff'), 10 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.es.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.cs.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.cs.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.cs.xliff'), 8 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.cs.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.uk.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.uk.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.uk.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 7 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.uk.xlf')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml'), 4 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.tr.xlf')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.de.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.de.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.de.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.de.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.de.xliff'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 10 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.de.xliff'), 11 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.de.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hu.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.hu.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hu.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.hu.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.hu.xliff'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 10 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.hu.xliff')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/lexik/maintenance-bundle/Resources/translations/maintenance.fr.yml'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fr.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/translations/SonataBlockBundle.fr.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fr.xliff'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.fr.xliff'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.fr.xliff'), 9 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 10 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 11 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.fr.xliff'), 12 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.fr.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pl.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pl.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.pl.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 8 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.pl.xliff'), 9 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.pl.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.eu.xliff'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.eu.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ro.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ro.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.ro.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.ro.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 9 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.ro.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sk.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sk.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 7 => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/translations/SonataFormatterBundle.sk.xliff'), 8 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.sk.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ar.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ar.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ca.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ca.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 7 => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/translations/validators.ca.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lb.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lb.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.zh_CN.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.zh_CN.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fa.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fa.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.fa.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.fa.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hr.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hr.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt_BR.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt_BR.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/translations/SonataClassificationBundle.pt_BR.xliff'), 6 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.pt_BR.xliff'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 8 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lt.xliff'), 4 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lt.xliff'), 5 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/translations/SonataMediaBundle.lt.xliff'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml'), 7 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'sv_SE' => array(0 => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sv_SE.xliff')), 'ky' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml')), 'eo' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'fr'));

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = $this->get('request_stack');
        $d = $this->get('knp_menu.matcher');

        $e = new \Knp\Menu\Util\MenuManipulator();

        $f = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        if ($this->has('debug.file_link_formatter')) {
            $f->setDisplayOptions(array('fileLinkFormat' => $b));
        }

        $g = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $g->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $h = new \Symfony\Bridge\Twig\AppVariable();
        $h->setEnvironment('dev');
        $h->setDebug(true);
        if ($this->has('security.token_storage')) {
            $h->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $h->setRequestStack($c);
        }

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'SonataFormatterBundle:Form:formatter.html.twig', 2 => 'SonataMediaBundle:Form:media_widgets.html.twig'), 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension($this->get('app.twig_extension.officine_selector'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'), $e, $d), $d, $e));
        $instance->addExtension($this->get('sonata.core.flashmessage.twig.extension'));
        $instance->addExtension($this->get('sonata.core.twig.extension.wrapping'));
        $instance->addExtension($this->get('sonata.core.twig.extension.text'));
        $instance->addExtension($this->get('sonata.core.twig.status_extension'));
        $instance->addExtension($this->get('sonata.core.twig.template_extension'));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension($this->get('sonata.block.templating.helper')));
        $instance->addExtension($this->get('sonata.admin.twig.extension'));
        $instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\LocaleExtension($this->get('sonata.intl.templating.helper.locale')));
        $instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\NumberExtension($this->get('sonata.intl.templating.helper.number')));
        $instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\DateTimeExtension($this->get('sonata.intl.templating.helper.datetime')));
        $instance->addExtension($this->get('sonata.media.twig.extension'));
        $instance->addExtension(new \Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension(${($_ = isset($this->services['markdown.parser.parser_manager']) ? $this->services['markdown.parser.parser_manager'] : $this->getMarkdown_Parser_ParserManagerService()) && false ?: '_'}));
        $instance->addExtension($this->get('ivory_ck_editor.twig_extension'));
        $instance->addExtension(new \Sonata\FormatterBundle\Twig\Extension\TextFormatterExtension($this->get('sonata.formatter.pool')));
        $instance->addExtension($this->get('nelmio_api_doc.twig.extension.extra_markdown'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner'), $f));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($g));
        $instance->addGlobal('app', $h);
        $instance->addRuntimeLoader(new \Symfony\Bundle\TwigBundle\ContainerAwareRuntimeLoader($this, array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => 'twig.runtime.httpkernel', 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => 'twig.form.renderer'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addGlobal('app_config', array('scli_number' => '0 811 907 917', 'youtube_homepage' => 'https://www.youtube.com/watch?v=G9WMPsyEXqs'));
        $instance->addGlobal('sonata_block', $this->get('sonata.block.twig.global'));
        $instance->addGlobal('sonata_admin', $this->get('sonata.admin.twig.global'));
        $instance->addGlobal('sonata_media', $this->get('sonata.media.twig.global'));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.form.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer A Symfony\Bridge\Twig\Form\TwigRenderer instance
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig', 1 => 'form_div_layout.html.twig', 2 => 'SonataFormatterBundle:Form:formatter.html.twig', 3 => 'SonataMediaBundle:Form:media_widgets.html.twig', 4 => 'EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig'), $this->get('twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, $this->get('templating.name_parser'), $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/TwigBundle/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Resources/views'), 'KnpMenu');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/core-bundle/Resources/views'), 'SonataCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/block-bundle/Resources/views'), 'SonataBlock');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views'), 'SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Resources/views'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/intl-bundle/Resources/views'), 'SonataIntl');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/views'), 'SonataClassification');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/views'), 'SonataMedia');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/FOSUserBundle/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Resources/views'), 'IvoryCKEditor');
        $instance->addPath(($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle/Resources/views'), 'SonataFormatter');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/RedCodeTreeBundle/views'), 'RedCodeTree');
        $instance->addPath(($this->targetDirs[3].'/vendor/redcode/tree-bundle/RedCode/TreeBundle/Resources/views'), 'RedCodeTree');
        $instance->addPath(($this->targetDirs[3].'/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle/Resources/views'), 'Guzzle');
        $instance->addPath(($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), 'NelmioApiDoc');
        $instance->addPath(($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src/Resources/views'), 'EWZRecaptcha');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/liip/functional-test-bundle/Resources/views'), 'LiipFunctionalTest');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /**
     * Gets the 'twig.runtime.httpkernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime A Symfony\Bridge\Twig\Extension\HttpKernelRuntime instance
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime($this->get('fragment.handler'));
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->getValidator_ValidatorFactoryService()) && false ?: '_'});
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle/Resources/config/validation.xml'), 2 => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle/Resources/config/validation.xml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')));
        $instance->addYamlMappings(array(0 => ($this->targetDirs[3].'/src/AppBundle/Resources/config/validation.yml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer(${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'})));
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.translation' => array(0 => 'translation', 1 => '@WebProfiler/Collector/translation.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'sonata.block.data_collector' => array(0 => 'block', 1 => 'SonataBlockBundle:Profiler:block.html.twig'), 'guzzle_bundle.data_collector' => array(0 => 'guzzle', 1 => 'GuzzleBundle::debug'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'}, $this->targetDirs[3]);
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    /**
     * Gets the 'annotations.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance
     */
    protected function getAnnotations_ReaderService()
    {
        return $this->services['annotations.reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the 'cache.annotations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('kvEvLlvTgt', 0, 'tmdZOBSsHZLLJZ7HRaXbkY', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'cache.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('d2J-WmQxG9', 0, 'tmdZOBSsHZLLJZ7HRaXbkY', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'debug.file_link_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter A Symfony\Component\HttpKernel\Debug\FileLinkFormatter instance
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter('phpstorm://open?file=%f&line=%l', $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the 'debug.log_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor A Symfony\Bridge\Monolog\Processor\DebugProcessor instance
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the 'debug.security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\DebugAccessDecisionManager A Symfony\Component\Security\Core\Authorization\DebugAccessDecisionManager instance
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        $a = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'};

        $this->services['debug.security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\DebugAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true));

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($b), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $b)));

        return $instance;
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /**
     * Gets the 'fos_rest.allowed_methods_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\RestBundle\Response\AllowedMethodsLoader\AllowedMethodsRouterLoader A FOS\RestBundle\Response\AllowedMethodsLoader\AllowedMethodsRouterLoader instance
     */
    protected function getFosRest_AllowedMethodsLoaderService()
    {
        return $this->services['fos_rest.allowed_methods_loader'] = new \FOS\RestBundle\Response\AllowedMethodsLoader\AllowedMethodsRouterLoader($this->get('router'), (__DIR__.'/fos_rest'), true);
    }

    /**
     * Gets the 'fos_rest.exception.codes_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\RestBundle\Util\ExceptionValueMap A FOS\RestBundle\Util\ExceptionValueMap instance
     */
    protected function getFosRest_Exception_CodesMapService()
    {
        return $this->services['fos_rest.exception.codes_map'] = new \FOS\RestBundle\Util\ExceptionValueMap(array());
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\RestBundle\Request\ParamReader A FOS\RestBundle\Request\ParamReader instance
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.serializer.jms_handler_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry A JMS\Serializer\Handler\LazyHandlerRegistry instance
     */
    protected function getFosRest_Serializer_JmsHandlerRegistryService()
    {
        return $this->services['fos_rest.serializer.jms_handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('NRIDOfficine' => array('json' => array(0 => 'officine_serializer_handler', 1 => 'deserializeOfficineFromJson')), 'NRIDPharmacien' => array('json' => array(0 => 'pharmacien_serializer_handler', 1 => 'deserializePharmacienFromJson')), 'DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromyml')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap')), 'sonata_classification_category_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'deserializeObjectFromId')), 'sonata_classification_collection_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'deserializeObjectFromId')), 'sonata_classification_tag_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'deserializeObjectFromId')), 'sonata_classification_context_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.context', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.context', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.context', 1 => 'deserializeObjectFromId')), 'sonata_media_media_id' => array('json' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId')), 'sonata_media_gallery_id' => array('json' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'))), 1 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')), 'sonata_classification_category_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'serializeObjectToId')), 'sonata_classification_collection_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'serializeObjectToId')), 'sonata_classification_tag_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'serializeObjectToId')), 'sonata_classification_context_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.context', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.context', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.context', 1 => 'serializeObjectToId')), 'sonata_media_media_id' => array('json' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId')), 'sonata_media_gallery_id' => array('json' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId')), 'Exception' => array('json' => array(0 => 'fos_rest.serializer.exception_normalizer.jms', 1 => 'serializeToJson'), 'xml' => array(0 => 'fos_rest.serializer.exception_normalizer.jms', 1 => 'serializeToXml')))));
    }

    /**
     * Gets the 'fos_user.user_provider.username_email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Security\EmailUserProvider A FOS\UserBundle\Security\EmailUserProvider instance
     */
    protected function getFosUser_UserProvider_UsernameEmailService()
    {
        return $this->services['fos_user.user_provider.username_email'] = new \FOS\UserBundle\Security\EmailUserProvider($this->get('app.manager.user'));
    }

    /**
     * Gets the 'fos_user.util.canonical_fields_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater A FOS\UserBundle\Util\CanonicalFieldsUpdater instance
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the 'fos_user.util.password_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater A FOS\UserBundle\Util\PasswordUpdater instance
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'jms_serializer.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Metadata\MetadataFactory A Metadata\MetadataFactory instance
     */
    protected function getJmsSerializer_MetadataFactoryService()
    {
        $this->services['jms_serializer.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_serializer')));

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.unserialize_object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor A JMS\Serializer\Construction\UnserializeObjectConstructor instance
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the 'markdown.parser.parser_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Knp\Bundle\MarkdownBundle\Parser\ParserManager A Knp\Bundle\MarkdownBundle\Parser\ParserManager instance
     */
    protected function getMarkdown_Parser_ParserManagerService()
    {
        $this->services['markdown.parser.parser_manager'] = $instance = new \Knp\Bundle\MarkdownBundle\Parser\ParserManager();

        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Min(), 'min');
        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Light(), 'light');
        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Medium(), 'medium');
        $instance->addParser($this->get('markdown.parser'), 'default');
        $instance->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Flavored(), 'flavored');

        return $instance;
    }

    /**
     * Gets the 'monolog.processor.psr_log_message' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor A Monolog\Processor\PsrLogMessageProcessor instance
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['fos_user.user_provider.username_email']) ? $this->services['fos_user.user_provider.username_email'] : $this->getFosUser_UserProvider_UsernameEmailService()) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('592c78e7d2b3c6.88422660')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.firewall.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap A Symfony\Bundle\SecurityBundle\Security\FirewallMap instance
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
    }

    /**
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_OFFICINE_OWNER' => array(0 => 'ROLE_USER'), 'ROLE_OFFICINE_OWNER_CERTIFY' => array(0 => 'ROLE_OFFICINE_OWNER'), 'ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN', 2 => 'ROLE_ALLOWED_TO_SWITCH'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }

    /**
     * Gets the 'security.user_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'sonata.block.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager A Sonata\BlockBundle\Block\BlockServiceManager instance
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', array());
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', array());
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', array());
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', array());
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', array());
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', array());
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', array(0 => 'admin'));
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', array());
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', array());
        $instance->add('sonata.media.block.media', 'sonata.media.block.media', array());
        $instance->add('sonata.media.block.feature_media', 'sonata.media.block.feature_media', array());
        $instance->add('sonata.media.block.gallery', 'sonata.media.block.gallery', array());
        $instance->add('sonata.media.block.gallery_list', 'sonata.media.block.gallery_list', array());
        $instance->add('sonata.formatter.block.formatter', 'sonata.formatter.block.formatter', array());

        return $instance;
    }

    /**
     * Gets the 'sonata.formatter.twig.env.richhtml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getSonata_Formatter_Twig_Env_RichhtmlService()
    {
        $this->services['sonata.formatter.twig.env.richhtml'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_Array(), $this->get('twig.loader')), array('debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8'));

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, array(0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist')), true));
        $instance->addExtension($this->get('sonata.formatter.twig.control_flow'));
        $instance->addExtension($this->get('sonata.formatter.twig.gist'));
        $instance->setLexer(new \Twig_Lexer($instance, array('tag_comment' => array(0 => '<#', 1 => '#>'), 'tag_block' => array(0 => '<%', 1 => '%>'), 'tag_variable' => array(0 => '<%=', 1 => '%>'))));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the 'validator.validator_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory A Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory instance
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique', 'sonata.core.validator.inline' => 'sonata.core.validator.inline', 'Sonata\\CoreBundle\\Validator\\InlineValidator' => 'sonata.admin.validator.inline', 'sonata.admin.validator.inline' => 'sonata.admin.validator.inline', 'sonata.media.validator.format' => 'sonata.media.validator.format', 'Sonata\\MediaBundle\\Validator\\FormatValidator' => 'sonata.media.validator.format', 'sonata.formatter.validator.formatter' => 'sonata.formatter.validator.formatter', 'Sonata\\FormatterBundle\\Validator\\Constraints\\FormatterValidator' => 'sonata.formatter.validator.formatter', 'ewz_recaptcha.true' => 'ewz_recaptcha.validator.true', 'EWZ\\Bundle\\RecaptchaBundle\\Validator\\Constraints\\IsTrueValidator' => 'ewz_recaptcha.validator.true'));
    }

    /**
     * Gets the 'web_profiler.csp.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler A Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler instance
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
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
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'import_dir' => false,
        'session.save_path' => false,
        'router.resource' => false,
        'lexik_maintenance.driver' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
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
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'LexikMaintenanceBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/lexik/maintenance-bundle'),
                    'namespace' => 'Lexik\\Bundle\\MaintenanceBundle',
                ),
                'JMSSerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle/JMS/SerializerBundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'KnpMenuBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ),
                'SonataCoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/core-bundle'),
                    'namespace' => 'Sonata\\CoreBundle',
                ),
                'SonataBlockBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle'),
                    'namespace' => 'Sonata\\BlockBundle',
                ),
                'SonataDoctrineORMAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle'),
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ),
                'SonataAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/admin-bundle'),
                    'namespace' => 'Sonata\\AdminBundle',
                ),
                'SonataIntlBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/intl-bundle'),
                    'namespace' => 'Sonata\\IntlBundle',
                ),
                'SonataClassificationBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/classification-bundle'),
                    'namespace' => 'Sonata\\ClassificationBundle',
                ),
                'SonataMediaBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/media-bundle'),
                    'namespace' => 'Sonata\\MediaBundle',
                ),
                'SonataEasyExtendsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/easy-extends-bundle'),
                    'namespace' => 'Sonata\\EasyExtendsBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ),
                'ShapecodeCronBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/shapecode/cron-bundle/src'),
                    'namespace' => 'Shapecode\\Bundle\\CronBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
                'KnpMarkdownBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-markdown-bundle'),
                    'namespace' => 'Knp\\Bundle\\MarkdownBundle',
                ),
                'IvoryCKEditorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle'),
                    'namespace' => 'Ivory\\CKEditorBundle',
                ),
                'SonataFormatterBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sonata-project/formatter-bundle'),
                    'namespace' => 'Sonata\\FormatterBundle',
                ),
                'RedCodeTreeBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/redcode/tree-bundle/RedCode/TreeBundle'),
                    'namespace' => 'RedCode\\TreeBundle',
                ),
                'GuzzleBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle'),
                    'namespace' => 'EightPoints\\Bundle\\GuzzleBundle',
                ),
                'FOSRestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'NelmioApiDocBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle'),
                    'namespace' => 'Nelmio\\ApiDocBundle',
                ),
                'EWZRecaptchaBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/excelwebzone/recaptcha-bundle/src'),
                    'namespace' => 'EWZ\\Bundle\\RecaptchaBundle',
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
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
                'HautelookAliceBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/hautelook/alice-bundle/src'),
                    'namespace' => 'Hautelook\\AliceBundle',
                ),
                'LiipFunctionalTestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/liip/functional-test-bundle'),
                    'namespace' => 'Liip\\FunctionalTestBundle',
                ),
            ); break;
            case 'import_dir': $value = ($this->targetDirs[3].'/app/../var/import'); break;
            case 'session.save_path': $value = ($this->targetDirs[3].'/app/../var/sessions/dev'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing_dev.yml'); break;
            case 'lexik_maintenance.driver': $value = array(
                'class' => '\\Lexik\\Bundle\\MaintenanceBundle\\Drivers\\FileDriver',
                'options' => array(
                    'file_path' => ($this->targetDirs[3].'/app/cache/lock'),
                ),
                'ttl' => NULL,
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'LexikMaintenanceBundle' => 'Lexik\\Bundle\\MaintenanceBundle\\LexikMaintenanceBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataIntlBundle' => 'Sonata\\IntlBundle\\SonataIntlBundle',
                'SonataClassificationBundle' => 'Sonata\\ClassificationBundle\\SonataClassificationBundle',
                'SonataMediaBundle' => 'Sonata\\MediaBundle\\SonataMediaBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'ShapecodeCronBundle' => 'Shapecode\\Bundle\\CronBundle\\ShapecodeCronBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'KnpMarkdownBundle' => 'Knp\\Bundle\\MarkdownBundle\\KnpMarkdownBundle',
                'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle',
                'SonataFormatterBundle' => 'Sonata\\FormatterBundle\\SonataFormatterBundle',
                'RedCodeTreeBundle' => 'RedCode\\TreeBundle\\RedCodeTreeBundle',
                'GuzzleBundle' => 'EightPoints\\Bundle\\GuzzleBundle\\GuzzleBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
                'EWZRecaptchaBundle' => 'EWZ\\Bundle\\RecaptchaBundle\\EWZRecaptchaBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'HautelookAliceBundle' => 'Hautelook\\AliceBundle\\HautelookAliceBundle',
                'LiipFunctionalTestBundle' => 'Liip\\FunctionalTestBundle\\LiipFunctionalTestBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => 3306,
            'database_name' => 'biowebpro',
            'database_user' => 'root',
            'database_password' => '1Jbgub18',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'rdi_send_mail' => 'dev@groupe361.com',
            'app' => array(
                'scli_number' => '0 811 907 917',
                'youtube_homepage' => 'https://www.youtube.com/watch?v=G9WMPsyEXqs',
            ),
            'app_mail_adresses' => array(
                'from_email' => array(
                    'noreply' => 'noreply@proconnect.com',
                ),
                'to_email' => array(
                    'contact' => array(
                        'test@proconnect.com' => 'Biogaran Pro Connect',
                    ),
                ),
            ),
            'import' => array(
                'officines-pharmaciens' => array(
                    'officines' => array(
                        'type' => 'csv',
                        'mode' => 'DIFF_WITHOUT_DELETE',
                        'batchSize' => 100,
                        'entity' => 'AppBundle\\Entity\\Officine',
                        'filePattern' => 'neo_sp_off_[0-9]{12}.csv',
                        'encoding' => 'Windows-1252',
                    ),
                    'pharmaciens' => array(
                        'type' => 'csv',
                        'mode' => 'DIFF_WITHOUT_DELETE',
                        'batchSize' => 100,
                        'entity' => 'AppBundle\\Entity\\Pharmacien',
                        'filePattern' => 'neo_sp_int_[0-9]{12}.csv',
                        'encoding' => 'Windows-1252',
                    ),
                    'officines-pharmaciens' => array(
                        'type' => 'csv',
                        'mode' => 'DIFF_WITHOUT_DELETE',
                        'batchSize' => 100,
                        'entity' => 'AppBundle\\Entity\\OfficinePharmacien',
                        'filePattern' => 'neo_sp_lpi_[0-9]{12}.csv',
                        'encoding' => 'Windows-1252',
                    ),
                ),
                'contrats' => array(
                    'contrats' => array(
                        'type' => 'csv',
                        'mode' => 'DIFF_WITHOUT_DELETE',
                        'batchSize' => 100,
                        'entity' => 'AppBundle\\Entity\\Contrat',
                        'filePattern' => 'neo_sp_cnt_[0-9]{12}.csv',
                        'encoding' => 'Windows-1252',
                    ),
                ),
            ),
            'rdi' => array(
                'send_type' => array(
                    0 => 'api',
                    1 => 'mail',
                ),
                'main_handler' => 'api',
                'send_from' => 'admin@proconnect.com',
                'send_to' => 'dev@groupe361.com',
            ),
            'locale' => 'fr',
            'shapecode_cron.target_entity_resolver.cron_job.class' => 'Shapecode\\Bundle\\CronBundle\\Entity\\CronJob',
            'shapecode_cron.target_entity_resolver.cron_job_result.class' => 'Shapecode\\Bundle\\CronBundle\\Entity\\CronJobResult',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'fr',
            'templating.helper.code.file_link_format' => 'phpstorm://open?file=%f&line=%l',
            'debug.file_link_format' => 'phpstorm://open?file=%f&line=%l',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.file' => (__DIR__.'/serialization.php'),
            'serializer.mapping.cache.prefix' => '',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_OFFICINE_OWNER' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_OFFICINE_OWNER_CERTIFY' => array(
                    0 => 'ROLE_OFFICINE_OWNER',
                ),
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_SONATA_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => 'SonataFormatterBundle:Form:formatter.html.twig',
                3 => 'SonataMediaBundle:Form:media_widgets.html.twig',
                4 => 'EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig',
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
                'monolog.handler.app_main_log' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'console',
                        1 => 'import',
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
                'json' => array(
                    'class' => 'Sonata\\Doctrine\\Types\\JsonType',
                    'commented' => true,
                ),
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
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'fr',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'lexik_maintenance.listener.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Listener\\MaintenanceListener',
            'lexik_maintenance.driver_factory.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\DriverFactory',
            'lexik_maintenance.driver.database.class' => 'Lexik\\Bundle\\MaintenanceBundle\\Drivers\\DatabaseDriver',
            'lexik_maintenance.authorized.path' => NULL,
            'lexik_maintenance.authorized.host' => NULL,
            'lexik_maintenance.authorized.ips' => NULL,
            'lexik_maintenance.authorized.query' => array(

            ),
            'lexik_maintenance.authorized.cookie' => array(

            ),
            'lexik_maintenance.authorized.route' => NULL,
            'lexik_maintenance.authorized.attributes' => array(

            ),
            'lexik_maintenance.response.http_code' => 503,
            'lexik_maintenance.response.http_status' => 'Service Temporarily Unavailable',
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
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
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
            'jms_serializer.form_error_handler.class' => 'FOS\\RestBundle\\Serializer\\Normalizer\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.context_factory.serialization.class' => 'JMS\\Serializer\\ContextFactory\\DefaultSerializationContextFactory',
            'jms_serializer.context_factory.deserialization.class' => 'JMS\\Serializer\\ContextFactory\\DefaultDeserializationContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'KnpMenuBundle::menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.core.form.mapping.type' => array(

            ),
            'sonata.core.form.mapping.extension' => array(

            ),
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'templates' => array(

                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(

            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                ),
            ),
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'array' => 'SonataAdminBundle:CRUD:list_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig',
                        'date' => 'SonataIntlBundle:CRUD:list_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:list_time.html.twig',
                        'datetime' => 'SonataIntlBundle:CRUD:list_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:list_email.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'smallint' => 'SonataIntlBundle:CRUD:list_decimal.html.twig',
                        'bigint' => 'SonataIntlBundle:CRUD:list_decimal.html.twig',
                        'integer' => 'SonataIntlBundle:CRUD:list_decimal.html.twig',
                        'decimal' => 'SonataIntlBundle:CRUD:list_decimal.html.twig',
                        'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'currency' => 'SonataIntlBundle:CRUD:list_currency.html.twig',
                        'percent' => 'SonataIntlBundle:CRUD:list_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:list_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:list_html.html.twig',
                    ),
                    'show' => array(
                        'array' => 'SonataAdminBundle:CRUD:show_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig',
                        'date' => 'SonataIntlBundle:CRUD:show_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:show_time.html.twig',
                        'datetime' => 'SonataIntlBundle:CRUD:show_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:show_email.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'smallint' => 'SonataIntlBundle:CRUD:show_decimal.html.twig',
                        'bigint' => 'SonataIntlBundle:CRUD:show_decimal.html.twig',
                        'integer' => 'SonataIntlBundle:CRUD:show_decimal.html.twig',
                        'decimal' => 'SonataIntlBundle:CRUD:show_decimal.html.twig',
                        'currency' => 'SonataIntlBundle:CRUD:show_currency.html.twig',
                        'percent' => 'SonataIntlBundle:CRUD:show_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:show_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:show_html.html.twig',
                    ),
                ),
                'form' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig',
                ),
            ),
            'sonata.admin.twig.extension.x_editable_type_mapping' => array(
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ),
            'sonata.admin.configuration.templates' => array(
                'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig',
                'user_block' => ':Block:user_block.html.twig',
                'layout' => ':Admin:layout_form.html.twig',
                'outer_list_rows_tree' => 'RedCodeTreeBundle:CRUD:tree.html.twig',
                'add_block' => 'SonataAdminBundle:Core:add_block.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig',
                'show' => 'SonataAdminBundle:CRUD:show.html.twig',
                'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'select' => 'SonataAdminBundle:CRUD:list__select.html.twig',
                'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'outer_list_rows_mosaic' => 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => 'SonataAdminBundle:CRUD:list_outer_rows_list.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
                'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig',
                'knp_menu_template' => 'SonataAdminBundle:Menu:sonata_menu.html.twig',
                'action_create' => 'SonataAdminBundle:CRUD:dashboard__action_create.html.twig',
                'button_acl' => 'SonataAdminBundle:Button:acl_button.html.twig',
                'button_create' => 'SonataAdminBundle:Button:create_button.html.twig',
                'button_edit' => 'SonataAdminBundle:Button:edit_button.html.twig',
                'button_history' => 'SonataAdminBundle:Button:history_button.html.twig',
                'button_list' => 'SonataAdminBundle:Button:list_button.html.twig',
                'button_show' => 'SonataAdminBundle:Button:show_button.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(

            ),
            'sonata.admin.configuration.dashboard_groups' => array(
                'app.admin.group.media' => array(
                    'label' => 'Media',
                    'icon' => '<i class="fa fa-camera-retro"></i>',
                    'items' => array(
                        0 => array(
                            'admin' => 'sonata.media.admin.media',
                            'label' => '',
                            'route' => '',
                            'route_params' => array(

                            ),
                            'route_absolute' => true,
                            'roles' => array(

                            ),
                        ),
                    ),
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => array(

                    ),
                    'roles' => array(

                    ),
                ),
                'app.admin.group.news' => array(
                    'label' => 'News',
                    'icon' => '<i class="fa fa-newspaper-o"></i>',
                    'items' => array(
                        0 => array(
                            'admin' => 'admin.news',
                            'label' => '',
                            'route' => '',
                            'route_params' => array(

                            ),
                            'route_absolute' => true,
                            'roles' => array(

                            ),
                        ),
                    ),
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => array(

                    ),
                    'roles' => array(

                    ),
                ),
                'app.admin.group.faq' => array(
                    'label' => 'Faq',
                    'icon' => '<i class="fa fa-question-circle"></i>',
                    'items' => array(
                        0 => array(
                            'admin' => 'admin.faq',
                            'label' => '',
                            'route' => '',
                            'route_params' => array(

                            ),
                            'route_absolute' => true,
                            'roles' => array(

                            ),
                        ),
                    ),
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => array(

                    ),
                    'roles' => array(

                    ),
                ),
                'app.admin.group.pharmacien' => array(
                    'label' => 'Pharmacien',
                    'icon' => '<i class="fa fa-universal-access"></i>',
                    'items' => array(
                        0 => array(
                            'admin' => 'admin.pharmacien',
                            'label' => '',
                            'route' => '',
                            'route_params' => array(

                            ),
                            'route_absolute' => true,
                            'roles' => array(

                            ),
                        ),
                    ),
                    'on_top' => false,
                    'keep_open' => false,
                    'item_adds' => array(

                    ),
                    'roles' => array(

                    ),
                ),
            ),
            'sonata.admin.configuration.dashboard_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'settings' => array(

                    ),
                    'type' => 'sonata.admin.block.admin_list',
                    'roles' => array(

                    ),
                ),
            ),
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.breadcrumbs' => array(
                'child_admin_route' => 'edit',
            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.information' => array(

            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(

                ),
                'excludes' => array(

                ),
                'implements' => array(

                ),
                'extends' => array(

                ),
                'instanceof' => array(

                ),
                'uses' => array(

                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.configuration.show.mosaic.button' => true,
            'sonata.intl.locale_detector.request.class' => 'Sonata\\IntlBundle\\Locale\\RequestDetector',
            'sonata.intl.locale_detector.session.class' => 'Sonata\\IntlBundle\\Locale\\SessionDetector',
            'sonata.intl.templating.helper.locale.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\LocaleHelper',
            'sonata.intl.templating.helper.number.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\NumberHelper',
            'sonata.intl.templating.helper.datetime.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\DateTimeHelper',
            'sonata.intl.timezone_detector.chain.class' => 'Sonata\\IntlBundle\\Timezone\\ChainTimezoneDetector',
            'sonata.intl.timezone_detector.user.class' => 'Sonata\\IntlBundle\\Timezone\\UserBasedTimezoneDetector',
            'sonata.intl.timezone_detector.locale.class' => 'Sonata\\IntlBundle\\Timezone\\LocaleBasedTimezoneDetector',
            'sonata.intl.twig.helper.locale.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\LocaleExtension',
            'sonata.intl.twig.helper.number.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\NumberExtension',
            'sonata.intl.twig.helper.datetime.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\DateTimeExtension',
            'sonata_intl.timezone.detectors' => array(
                0 => 'sonata.intl.timezone_detector.locale',
            ),
            'sonata.classification.manager.category.class' => 'Sonata\\ClassificationBundle\\Entity\\CategoryManager',
            'sonata.classification.manager.tag.class' => 'Sonata\\ClassificationBundle\\Entity\\TagManager',
            'sonata.classification.manager.collection.class' => 'Sonata\\ClassificationBundle\\Entity\\CollectionManager',
            'sonata.classification.manager.context.class' => 'Sonata\\ClassificationBundle\\Entity\\ContextManager',
            'sonata.classification.admin.groupname' => 'sonata_classification',
            'sonata.classification.admin.groupicon' => '<i class=\'fa fa-tags\'></i>',
            'sonata.classification.admin.tag.entity' => 'AppBundle\\Entity\\Classification\\Tag',
            'sonata.classification.admin.category.entity' => 'AppBundle\\Entity\\Classification\\Category',
            'sonata.classification.admin.collection.entity' => 'AppBundle\\Entity\\Classification\\Collection',
            'sonata.classification.admin.context.entity' => 'AppBundle\\Entity\\Classification\\Context',
            'sonata.classification.manager.tag.entity' => 'AppBundle\\Entity\\Classification\\Tag',
            'sonata.classification.manager.category.entity' => 'AppBundle\\Entity\\Classification\\Category',
            'sonata.classification.manager.collection.entity' => 'AppBundle\\Entity\\Classification\\Collection',
            'sonata.classification.manager.context.entity' => 'AppBundle\\Entity\\Classification\\Context',
            'sonata.classification.admin.category.class' => 'Sonata\\ClassificationBundle\\Admin\\CategoryAdmin',
            'sonata.classification.admin.category.controller' => 'SonataClassificationBundle:CategoryAdmin',
            'sonata.classification.admin.category.translation_domain' => 'SonataClassificationBundle',
            'sonata.classification.admin.tag.class' => 'Sonata\\ClassificationBundle\\Admin\\TagAdmin',
            'sonata.classification.admin.tag.controller' => 'SonataAdminBundle:CRUD',
            'sonata.classification.admin.tag.translation_domain' => 'SonataClassificationBundle',
            'sonata.classification.admin.collection.class' => 'Sonata\\ClassificationBundle\\Admin\\CollectionAdmin',
            'sonata.classification.admin.collection.controller' => 'SonataAdminBundle:CRUD',
            'sonata.classification.admin.collection.translation_domain' => 'SonataClassificationBundle',
            'sonata.classification.admin.context.class' => 'Sonata\\ClassificationBundle\\Admin\\ContextAdmin',
            'sonata.classification.admin.context.controller' => 'SonataAdminBundle:CRUD',
            'sonata.classification.admin.context.translation_domain' => 'SonataClassificationBundle',
            'sonata.media.provider.image.class' => 'Sonata\\MediaBundle\\Provider\\ImageProvider',
            'sonata.media.provider.file.class' => 'Sonata\\MediaBundle\\Provider\\FileProvider',
            'sonata.media.provider.youtube.class' => 'Sonata\\MediaBundle\\Provider\\YouTubeProvider',
            'sonata.media.provider.dailymotion.class' => 'Sonata\\MediaBundle\\Provider\\DailyMotionProvider',
            'sonata.media.provider.vimeo.class' => 'Sonata\\MediaBundle\\Provider\\VimeoProvider',
            'sonata.media.thumbnail.format' => 'Sonata\\MediaBundle\\Thumbnail\\FormatThumbnail',
            'sonata.media.thumbnail.format.default' => 'jpg',
            'sonata.media.thumbnail.liip_imagine' => 'Sonata\\MediaBundle\\Thumbnail\\LiipImagineThumbnail',
            'sonata.media.pool.class' => 'Sonata\\MediaBundle\\Provider\\Pool',
            'sonata.media.resizer.simple.class' => 'Sonata\\MediaBundle\\Resizer\\SimpleResizer',
            'sonata.media.resizer.square.class' => 'Sonata\\MediaBundle\\Resizer\\SquareResizer',
            'sonata.media.adapter.image.gd.class' => 'Imagine\\Gd\\Imagine',
            'sonata.media.adapter.image.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'sonata.media.adapter.image.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'sonata.media.metadata.proxy.class' => 'Sonata\\MediaBundle\\Metadata\\ProxyMetadataBuilder',
            'sonata.media.metadata.amazon.class' => 'Sonata\\MediaBundle\\Metadata\\AmazonMetadataBuilder',
            'sonata.media.metadata.noop.class' => 'Sonata\\MediaBundle\\Metadata\\NoopMetadataBuilder',
            'sonata.media.adapater.filesystem.opencloud.class' => '',
            'sonata.media.block.media.class' => 'Sonata\\MediaBundle\\Block\\MediaBlockService',
            'sonata.media.block.feature_media.class' => 'Sonata\\MediaBundle\\Block\\FeatureMediaBlockService',
            'sonata.media.block.gallery.class' => 'Sonata\\MediaBundle\\Block\\GalleryBlockService',
            'sonata.media.block.gallery_list.class' => 'Sonata\\MediaBundle\\Block\\GalleryListBlockService',
            'sonata.media.manager.media.class' => 'Sonata\\MediaBundle\\Entity\\MediaManager',
            'sonata.media.manager.gallery.class' => 'Sonata\\MediaBundle\\Entity\\GalleryManager',
            'sonata.media.admin.groupname' => 'sonata_media',
            'sonata.media.admin.groupicon' => '<i class=\'fa fa-image\'></i>',
            'sonata.media.admin.media.class' => 'Sonata\\MediaBundle\\Admin\\ORM\\MediaAdmin',
            'sonata.media.admin.media.controller' => 'SonataMediaBundle:MediaAdmin',
            'sonata.media.admin.media.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin.gallery.class' => 'Sonata\\MediaBundle\\Admin\\GalleryAdmin',
            'sonata.media.admin.gallery.controller' => 'SonataMediaBundle:GalleryAdmin',
            'sonata.media.admin.gallery.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin.gallery_has_media.class' => 'Sonata\\MediaBundle\\Admin\\GalleryHasMediaAdmin',
            'sonata.media.admin.gallery_has_media.controller' => 'SonataAdminBundle:CRUD',
            'sonata.media.admin.gallery_has_media.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin_format' => array(
                'width' => 200,
                'height' => false,
                'quality' => 90,
                'format' => 'jpg',
                'constraint' => true,
            ),
            'sonata.media.resizer.simple.adapter.mode' => 'inset',
            'sonata.media.resizer.square.adapter.mode' => 'inset',
            'sonata.media.admin.media.entity' => 'AppBundle\\Entity\\Media\\Media',
            'sonata.media.admin.gallery.entity' => 'AppBundle\\Entity\\Media\\Gallery',
            'sonata.media.admin.gallery_has_media.entity' => 'AppBundle\\Entity\\Media\\GalleryHasMedia',
            'sonata.media.media.class' => 'AppBundle\\Entity\\Media\\Media',
            'sonata.media.gallery.class' => 'AppBundle\\Entity\\Media\\Gallery',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Email/resetting_email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'AppBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'noreply@proconnect.com' => 'Biogaran Pro Connect',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'AppBundle\\Form\\RegistrationType',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'AppRegistration',
            ),
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'noreply@proconnect.com' => 'Biogaran Pro Connect',
            ),
            'fos_user.resetting.retry_ttl' => false,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'AppResetting',
            ),
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'templating.helper.markdown.class' => 'Knp\\Bundle\\MarkdownBundle\\Helper\\MarkdownHelper',
            'sonata.formatter.text.markdown.class' => 'Sonata\\FormatterBundle\\Formatter\\MarkdownFormatter',
            'sonata.formatter.text.text.class' => 'Sonata\\FormatterBundle\\Formatter\\TextFormatter',
            'sonata.formatter.text.raw.class' => 'Sonata\\FormatterBundle\\Formatter\\RawFormatter',
            'sonata.formatter.text.twigengine.class' => 'Sonata\\FormatterBundle\\Formatter\\TwigFormatter',
            'sonata.formatter.block.formatter.class' => 'Sonata\\FormatterBundle\\Block\\FormatterBlockService',
            'sonata.formatter.ckeditor.extension.class' => 'Sonata\\FormatterBundle\\Admin\\CkeditorAdminExtension',
            'sonata.formatter.ckeditor.configuration.templates' => array(
                'browser' => 'SonataFormatterBundle:Ckeditor:browser.html.twig',
                'upload' => 'SonataFormatterBundle:Ckeditor:upload.html.twig',
            ),
            'guzzle.http_client.class' => 'GuzzleHttp\\Client',
            'guzzle.middleware.class' => 'GuzzleHttp\\Middleware',
            'guzzle.formatter.class' => 'GuzzleHttp\\MessageFormatter',
            'guzzle_bundle.data_collector.class' => 'EightPoints\\Bundle\\GuzzleBundle\\DataCollector\\HttpDataCollector',
            'guzzle_bundle.logger.class' => 'EightPoints\\Bundle\\GuzzleBundle\\Log\\Logger',
            'guzzle_bundle.middleware.log.class' => 'EightPoints\\Bundle\\GuzzleBundle\\Middleware\\LogMiddleware',
            'guzzle_bundle.middleware.event_dispatcher.class' => 'EightPoints\\Bundle\\GuzzleBundle\\Middleware\\EventDispatchMiddleware',
            'guzzle.plugin.header.headers' => array(

            ),
            'guzzle_bundle.middleware.wsse.class' => 'EightPoints\\Guzzle\\WsseAuthMiddleware',
            'guzzle.plugin.wsse.username' => '',
            'guzzle.plugin.wsse.password' => '',
            'fos_rest.format_listener.rules' => NULL,
            'nelmio_api_doc.motd.template' => 'NelmioApiDocBundle::Components/motd.html.twig',
            'nelmio_api_doc.exclude_sections' => array(

            ),
            'nelmio_api_doc.default_sections_opened' => true,
            'nelmio_api_doc.api_name' => 'Biogaran Pro API Documentation',
            'nelmio_api_doc.sandbox.enabled' => true,
            'nelmio_api_doc.sandbox.endpoint' => NULL,
            'nelmio_api_doc.sandbox.accept_type' => 'application/json',
            'nelmio_api_doc.sandbox.body_format.formats' => array(

            ),
            'nelmio_api_doc.sandbox.body_format.default_format' => 'json',
            'nelmio_api_doc.sandbox.request_format.method' => 'accept_header',
            'nelmio_api_doc.sandbox.request_format.default_format' => 'json',
            'nelmio_api_doc.sandbox.request_format.formats' => array(

            ),
            'nelmio_api_doc.sandbox.entity_to_choice' => true,
            'nelmio_api_doc.formatter.abstract_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\AbstractFormatter',
            'nelmio_api_doc.formatter.markdown_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\MarkdownFormatter',
            'nelmio_api_doc.formatter.simple_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SimpleFormatter',
            'nelmio_api_doc.formatter.html_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\HtmlFormatter',
            'nelmio_api_doc.formatter.swagger_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SwaggerFormatter',
            'nelmio_api_doc.sandbox.authentication' => NULL,
            'nelmio_api_doc.extractor.api_doc_extractor.class' => 'Nelmio\\ApiDocBundle\\Extractor\\ApiDocExtractor',
            'nelmio_api_doc.form.extension.description_form_type_extension.class' => 'Nelmio\\ApiDocBundle\\Form\\Extension\\DescriptionFormTypeExtension',
            'nelmio_api_doc.twig.extension.extra_markdown.class' => 'Nelmio\\ApiDocBundle\\Twig\\Extension\\MarkdownExtension',
            'nelmio_api_doc.doc_comment_extractor.class' => 'Nelmio\\ApiDocBundle\\Util\\DocCommentExtractor',
            'nelmio_api_doc.extractor.handler.fos_rest.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\FosRestHandler',
            'nelmio_api_doc.extractor.handler.jms_security.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\JmsSecurityExtraHandler',
            'nelmio_api_doc.extractor.handler.sensio_framework_extra.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\SensioFrameworkExtraHandler',
            'nelmio_api_doc.extractor.handler.phpdoc.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\PhpDocHandler',
            'nelmio_api_doc.parser.collection_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\CollectionParser',
            'nelmio_api_doc.parser.form_errors_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormErrorsParser',
            'nelmio_api_doc.parser.json_serializable_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JsonSerializableParser',
            'nelmio_api_doc.request_listener.parameter' => '_doc',
            'nelmio_api_doc.event_listener.request.class' => 'Nelmio\\ApiDocBundle\\EventListener\\RequestListener',
            'nelmio_api_doc.parser.validation_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\ValidationParser',
            'nelmio_api_doc.swagger.base_path' => '/api',
            'nelmio_api_doc.swagger.swagger_version' => '1.2',
            'nelmio_api_doc.swagger.api_version' => '0.1',
            'nelmio_api_doc.swagger.info' => array(
                'title' => 'Symfony2',
                'description' => 'My awesome Symfony2 app!',
                'TermsOfServiceUrl' => NULL,
                'contact' => NULL,
                'license' => NULL,
                'licenseUrl' => NULL,
            ),
            'nelmio_api_doc.swagger.model_naming_strategy' => 'dot_notation',
            'ewz_recaptcha.public_key' => '6LdnMxgUAAAAAHjG60oxrfd9K2Y61w3DrZ994LPV',
            'ewz_recaptcha.private_key' => '6LdnMxgUAAAAAPL-nDs2NmwRQAyJe0mofm9wG_ER',
            'ewz_recaptcha.enabled' => true,
            'ewz_recaptcha.verify_host' => false,
            'ewz_recaptcha.ajax' => false,
            'ewz_recaptcha.locale_key' => 'fr',
            'ewz_recaptcha.locale_from_request' => false,
            'ewz_recaptcha.http_proxy' => array(
                'host' => NULL,
                'port' => NULL,
                'auth' => NULL,
            ),
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'hautelook_alice.locale' => 'fr_FR',
            'hautelook_alice.loading_limit' => 10,
            'hautelook_alice.db_drivers' => array(
                'orm' => NULL,
                'mongodb' => NULL,
                'phpcr' => NULL,
            ),
            'hautelook_alice.seed' => 1,
            'hautelook_alice.persist_once' => false,
            'liip_functional_test.cache_sqlite_db' => false,
            'liip_functional_test.command_verbosity' => 'normal',
            'liip_functional_test.command_decoration' => true,
            'liip_functional_test.query.max_query_count' => NULL,
            'liip_functional_test.authentication.username' => '',
            'liip_functional_test.authentication.password' => '',
            'liip_functional_test.html5validation.url' => 'https://validator.nu/',
            'liip_functional_test.html5validation.ignores' => array(

            ),
            'liip_functional_test.html5validation.ignores_extract' => array(

            ),
            'liip_functional_test.paratest.process' => 5,
            'liip_functional_test.paratest.phpunit' => './bin/phpunit',
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
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
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'sonata.block.data_collector' => array(
                    0 => 'block',
                    1 => 'SonataBlockBundle:Profiler:block.html.twig',
                ),
                'guzzle_bundle.data_collector' => array(
                    0 => 'guzzle',
                    1 => 'GuzzleBundle::debug',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
                1 => 'hautelook_alice.doctrine.command.deprecated_load_command',
                2 => 'hautelook_alice.doctrine.command.load_command',
            ),
            'sonata.core.form.types' => array(
                0 => 'app.form.registration',
                1 => 'app.form.resetting',
                2 => 'form.type.form',
                3 => 'form.type.choice',
                4 => 'form.type.entity',
                5 => 'sonata.core.form.type.array',
                6 => 'sonata.core.form.type.boolean',
                7 => 'sonata.core.form.type.collection',
                8 => 'sonata.core.form.type.translatable_choice',
                9 => 'sonata.core.form.type.date_range',
                10 => 'sonata.core.form.type.datetime_range',
                11 => 'sonata.core.form.type.date_picker',
                12 => 'sonata.core.form.type.datetime_picker',
                13 => 'sonata.core.form.type.date_range_picker',
                14 => 'sonata.core.form.type.datetime_range_picker',
                15 => 'sonata.core.form.type.equal',
                16 => 'sonata.core.form.type.color_selector',
                17 => 'sonata.block.form.type.block',
                18 => 'sonata.block.form.type.container_template',
                19 => 'sonata.admin.form.type.admin',
                20 => 'sonata.admin.form.type.model_choice',
                21 => 'sonata.admin.form.type.model_list',
                22 => 'sonata.admin.form.type.model_reference',
                23 => 'sonata.admin.form.type.model_hidden',
                24 => 'sonata.admin.form.type.model_autocomplete',
                25 => 'sonata.admin.form.type.collection',
                26 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                27 => 'sonata.admin.form.filter.type.number',
                28 => 'sonata.admin.form.filter.type.choice',
                29 => 'sonata.admin.form.filter.type.default',
                30 => 'sonata.admin.form.filter.type.date',
                31 => 'sonata.admin.form.filter.type.daterange',
                32 => 'sonata.admin.form.filter.type.datetime',
                33 => 'sonata.admin.form.filter.type.datetime_range',
                34 => 'sonata.classification.form.type.category_selector',
                35 => 'sonata.classification.api.form.type.category',
                36 => 'sonata.classification.api.form.type.collection',
                37 => 'sonata.classification.api.form.type.tag',
                38 => 'sonata.classification.api.form.type.context',
                39 => 'sonata.media.form.type.media',
                40 => 'sonata.media.api.form.type.doctrine.media',
                41 => 'sonata.media.api.form.type.media',
                42 => 'sonata.media.api.form.type.gallery',
                43 => 'sonata.media.api.form.type.gallery_has_media',
                44 => 'fos_user.username_form_type',
                45 => 'fos_user.profile.form.type',
                46 => 'fos_user.registration.form.type',
                47 => 'fos_user.change_password.form.type',
                48 => 'fos_user.resetting.form.type',
                49 => 'ivory_ck_editor.form.type',
                50 => 'sonata.formatter.form.type.selector',
                51 => 'sonata.formatter.form.type.simple',
                52 => 'ewz_recaptcha.form.type',
            ),
            'sonata.core.form.type_extensions' => array(
                0 => 'form.type_extension.form.http_foundation',
                1 => 'form.type_extension.form.validator',
                2 => 'form.type_extension.repeated.validator',
                3 => 'form.type_extension.submit.validator',
                4 => 'form.type_extension.upload.validator',
                5 => 'form.type_extension.csrf',
                6 => 'form.type_extension.form.data_collector',
                7 => 'sonata.admin.form.extension.field',
                8 => 'sonata.admin.form.extension.field.mopa',
                9 => 'sonata.admin.form.extension.choice',
                10 => 'nelmio_api_doc.form.extension.description_form_type_extension',
            ),
            'nelmio_api_doc.parser.form_type_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormTypeParser',
            'nelmio_api_doc.parser.jms_metadata_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JmsMetadataParser',
        );
    }
}
