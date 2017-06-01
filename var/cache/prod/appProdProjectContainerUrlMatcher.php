<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // app
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AppController::indexAction',  '_route' => 'app',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/app')) {
                if (0 === strpos($pathinfo, '/admin/app/category')) {
                    // admin_app_category_list
                    if ($pathinfo === '/admin/app/category/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_list',  '_route' => 'admin_app_category_list',);
                    }

                    // admin_app_category_create
                    if ($pathinfo === '/admin/app/category/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_create',  '_route' => 'admin_app_category_create',);
                    }

                    // admin_app_category_batch
                    if ($pathinfo === '/admin/app/category/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_batch',  '_route' => 'admin_app_category_batch',);
                    }

                    // admin_app_category_edit
                    if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_edit',));
                    }

                    // admin_app_category_delete
                    if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_delete',));
                    }

                    // admin_app_category_show
                    if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_show',));
                    }

                    // admin_app_category_export
                    if ($pathinfo === '/admin/app/category/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_export',  '_route' => 'admin_app_category_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/news')) {
                    // admin_app_news_list
                    if ($pathinfo === '/admin/app/news/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_news_list',  '_route' => 'admin_app_news_list',);
                    }

                    // admin_app_news_create
                    if ($pathinfo === '/admin/app/news/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_news_create',  '_route' => 'admin_app_news_create',);
                    }

                    // admin_app_news_batch
                    if ($pathinfo === '/admin/app/news/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_news_batch',  '_route' => 'admin_app_news_batch',);
                    }

                    // admin_app_news_edit
                    if (preg_match('#^/admin/app/news/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_news_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_news_edit',));
                    }

                    // admin_app_news_delete
                    if (preg_match('#^/admin/app/news/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_news_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_news_delete',));
                    }

                    // admin_app_news_show
                    if (preg_match('#^/admin/app/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_news_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_news_show',));
                    }

                    // admin_app_news_export
                    if ($pathinfo === '/admin/app/news/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_app_news_export',  '_route' => 'admin_app_news_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/faq')) {
                    // admin_app_faq_list
                    if ($pathinfo === '/admin/app/faq/list') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\FaqAdminController::listAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_app_faq_list',  '_route' => 'admin_app_faq_list',);
                    }

                    // admin_app_faq_create
                    if ($pathinfo === '/admin/app/faq/create') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\FaqAdminController::createAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_app_faq_create',  '_route' => 'admin_app_faq_create',);
                    }

                    // admin_app_faq_batch
                    if ($pathinfo === '/admin/app/faq/batch') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\FaqAdminController::batchAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_app_faq_batch',  '_route' => 'admin_app_faq_batch',);
                    }

                    // admin_app_faq_edit
                    if (preg_match('#^/admin/app/faq/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_faq_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\FaqAdminController::editAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_app_faq_edit',));
                    }

                    // admin_app_faq_delete
                    if (preg_match('#^/admin/app/faq/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_faq_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\FaqAdminController::deleteAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_app_faq_delete',));
                    }

                    // admin_app_faq_show
                    if (preg_match('#^/admin/app/faq/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_faq_show')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\FaqAdminController::showAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_app_faq_show',));
                    }

                    // admin_app_faq_export
                    if ($pathinfo === '/admin/app/faq/export') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\FaqAdminController::exportAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_app_faq_export',  '_route' => 'admin_app_faq_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/pharmacien')) {
                    // admin_app_pharmacien_list
                    if ($pathinfo === '/admin/app/pharmacien/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.pharmacien',  '_sonata_name' => 'admin_app_pharmacien_list',  '_route' => 'admin_app_pharmacien_list',);
                    }

                    // admin_app_pharmacien_show
                    if (preg_match('#^/admin/app/pharmacien/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_pharmacien_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.pharmacien',  '_sonata_name' => 'admin_app_pharmacien_show',));
                    }

                    // admin_app_pharmacien_connectAs
                    if (preg_match('#^/admin/app/pharmacien/(?P<id>[^/]++)/connectas$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_pharmacien_connectAs')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::connectAsAction',  '_sonata_admin' => 'admin.pharmacien',  '_sonata_name' => 'admin_app_pharmacien_connectAs',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/classification-')) {
                    if (0 === strpos($pathinfo, '/admin/app/classification-category')) {
                        // admin_app_classification_category_list
                        if ($pathinfo === '/admin/app/classification-category/list') {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_list',  '_route' => 'admin_app_classification_category_list',);
                        }

                        // admin_app_classification_category_create
                        if ($pathinfo === '/admin/app/classification-category/create') {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_create',  '_route' => 'admin_app_classification_category_create',);
                        }

                        // admin_app_classification_category_batch
                        if ($pathinfo === '/admin/app/classification-category/batch') {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_batch',  '_route' => 'admin_app_classification_category_batch',);
                        }

                        // admin_app_classification_category_edit
                        if (preg_match('#^/admin/app/classification\\-category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_category_edit')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_edit',));
                        }

                        // admin_app_classification_category_delete
                        if (preg_match('#^/admin/app/classification\\-category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_category_delete')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_delete',));
                        }

                        // admin_app_classification_category_show
                        if (preg_match('#^/admin/app/classification\\-category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_category_show')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_show',));
                        }

                        // admin_app_classification_category_export
                        if ($pathinfo === '/admin/app/classification-category/export') {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_export',  '_route' => 'admin_app_classification_category_export',);
                        }

                        // admin_app_classification_category_tree
                        if ($pathinfo === '/admin/app/classification-category/tree') {
                            return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::treeAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_tree',  '_route' => 'admin_app_classification_category_tree',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/app/classification-tag')) {
                        // admin_app_classification_tag_list
                        if ($pathinfo === '/admin/app/classification-tag/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_list',  '_route' => 'admin_app_classification_tag_list',);
                        }

                        // admin_app_classification_tag_create
                        if ($pathinfo === '/admin/app/classification-tag/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_create',  '_route' => 'admin_app_classification_tag_create',);
                        }

                        // admin_app_classification_tag_batch
                        if ($pathinfo === '/admin/app/classification-tag/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_batch',  '_route' => 'admin_app_classification_tag_batch',);
                        }

                        // admin_app_classification_tag_edit
                        if (preg_match('#^/admin/app/classification\\-tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_tag_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_edit',));
                        }

                        // admin_app_classification_tag_delete
                        if (preg_match('#^/admin/app/classification\\-tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_tag_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_delete',));
                        }

                        // admin_app_classification_tag_show
                        if (preg_match('#^/admin/app/classification\\-tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_tag_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_show',));
                        }

                        // admin_app_classification_tag_export
                        if ($pathinfo === '/admin/app/classification-tag/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_export',  '_route' => 'admin_app_classification_tag_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/app/classification-co')) {
                        if (0 === strpos($pathinfo, '/admin/app/classification-collection')) {
                            // admin_app_classification_collection_list
                            if ($pathinfo === '/admin/app/classification-collection/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_list',  '_route' => 'admin_app_classification_collection_list',);
                            }

                            // admin_app_classification_collection_create
                            if ($pathinfo === '/admin/app/classification-collection/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_create',  '_route' => 'admin_app_classification_collection_create',);
                            }

                            // admin_app_classification_collection_batch
                            if ($pathinfo === '/admin/app/classification-collection/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_batch',  '_route' => 'admin_app_classification_collection_batch',);
                            }

                            // admin_app_classification_collection_edit
                            if (preg_match('#^/admin/app/classification\\-collection/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_collection_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_edit',));
                            }

                            // admin_app_classification_collection_delete
                            if (preg_match('#^/admin/app/classification\\-collection/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_collection_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_delete',));
                            }

                            // admin_app_classification_collection_show
                            if (preg_match('#^/admin/app/classification\\-collection/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_collection_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_show',));
                            }

                            // admin_app_classification_collection_export
                            if ($pathinfo === '/admin/app/classification-collection/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_export',  '_route' => 'admin_app_classification_collection_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/app/classification-context')) {
                            // admin_app_classification_context_list
                            if ($pathinfo === '/admin/app/classification-context/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_list',  '_route' => 'admin_app_classification_context_list',);
                            }

                            // admin_app_classification_context_create
                            if ($pathinfo === '/admin/app/classification-context/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_create',  '_route' => 'admin_app_classification_context_create',);
                            }

                            // admin_app_classification_context_batch
                            if ($pathinfo === '/admin/app/classification-context/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_batch',  '_route' => 'admin_app_classification_context_batch',);
                            }

                            // admin_app_classification_context_edit
                            if (preg_match('#^/admin/app/classification\\-context/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_context_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_edit',));
                            }

                            // admin_app_classification_context_delete
                            if (preg_match('#^/admin/app/classification\\-context/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_context_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_delete',));
                            }

                            // admin_app_classification_context_show
                            if (preg_match('#^/admin/app/classification\\-context/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_context_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_show',));
                            }

                            // admin_app_classification_context_export
                            if ($pathinfo === '/admin/app/classification-context/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_export',  '_route' => 'admin_app_classification_context_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/media-')) {
                    if (0 === strpos($pathinfo, '/admin/app/media-media')) {
                        // admin_app_media_media_list
                        if ($pathinfo === '/admin/app/media-media/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_list',  '_route' => 'admin_app_media_media_list',);
                        }

                        // admin_app_media_media_create
                        if ($pathinfo === '/admin/app/media-media/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_create',  '_route' => 'admin_app_media_media_create',);
                        }

                        // admin_app_media_media_batch
                        if ($pathinfo === '/admin/app/media-media/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_batch',  '_route' => 'admin_app_media_media_batch',);
                        }

                        // admin_app_media_media_edit
                        if (preg_match('#^/admin/app/media\\-media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_edit',));
                        }

                        // admin_app_media_media_delete
                        if (preg_match('#^/admin/app/media\\-media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_delete',));
                        }

                        // admin_app_media_media_show
                        if (preg_match('#^/admin/app/media\\-media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_show',));
                        }

                        // admin_app_media_media_export
                        if ($pathinfo === '/admin/app/media-media/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_export',  '_route' => 'admin_app_media_media_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/app/media-media/ckeditor_')) {
                            // admin_app_media_media_ckeditor_browser
                            if ($pathinfo === '/admin/app/media-media/ckeditor_browser') {
                                return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::browserAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_ckeditor_browser',  '_route' => 'admin_app_media_media_ckeditor_browser',);
                            }

                            // admin_app_media_media_ckeditor_upload
                            if ($pathinfo === '/admin/app/media-media/ckeditor_upload') {
                                return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::uploadAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_ckeditor_upload',  '_route' => 'admin_app_media_media_ckeditor_upload',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/app/media-gallery')) {
                        // admin_app_media_gallery_list
                        if ($pathinfo === '/admin/app/media-gallery/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_list',  '_route' => 'admin_app_media_gallery_list',);
                        }

                        // admin_app_media_gallery_create
                        if ($pathinfo === '/admin/app/media-gallery/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_create',  '_route' => 'admin_app_media_gallery_create',);
                        }

                        // admin_app_media_gallery_batch
                        if ($pathinfo === '/admin/app/media-gallery/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_batch',  '_route' => 'admin_app_media_gallery_batch',);
                        }

                        // admin_app_media_gallery_edit
                        if (preg_match('#^/admin/app/media\\-gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_edit',));
                        }

                        // admin_app_media_gallery_delete
                        if (preg_match('#^/admin/app/media\\-gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_delete',));
                        }

                        // admin_app_media_gallery_show
                        if (preg_match('#^/admin/app/media\\-gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_show',));
                        }

                        // admin_app_media_gallery_export
                        if ($pathinfo === '/admin/app/media-gallery/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_export',  '_route' => 'admin_app_media_gallery_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/app/media-galleryhasmedia')) {
                            // admin_app_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/app/media-galleryhasmedia/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_list',  '_route' => 'admin_app_media_galleryhasmedia_list',);
                            }

                            // admin_app_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/app/media-galleryhasmedia/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_create',  '_route' => 'admin_app_media_galleryhasmedia_create',);
                            }

                            // admin_app_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/app/media-galleryhasmedia/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_batch',  '_route' => 'admin_app_media_galleryhasmedia_batch',);
                            }

                            // admin_app_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/app/media\\-galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_edit',));
                            }

                            // admin_app_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/app/media\\-galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_delete',));
                            }

                            // admin_app_media_galleryhasmedia_show
                            if (preg_match('#^/admin/app/media\\-galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_show',));
                            }

                            // admin_app_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/app/media-galleryhasmedia/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_export',  '_route' => 'admin_app_media_galleryhasmedia_export',);
                            }

                        }

                    }

                }

            }

            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/media')) {
                if (0 === strpos($pathinfo, '/admin/media/gallery')) {
                    // sonata_media_gallery_index
                    if (rtrim($pathinfo, '/') === '/admin/media/gallery') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                        }

                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                    }

                    // sonata_media_gallery_view
                    if (0 === strpos($pathinfo, '/admin/media/gallery/view') && preg_match('#^/admin/media/gallery/view/(?P<id>.*)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                    }

                }

                // sonata_media_view
                if (0 === strpos($pathinfo, '/admin/media/view') && preg_match('#^/admin/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
                }

                // sonata_media_download
                if (0 === strpos($pathinfo, '/admin/media/download') && preg_match('#^/admin/media/download/(?P<id>.*)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // import_index
        if ($pathinfo === '/import') {
            return array (  '_controller' => 'AppBundle\\Controller\\ImportController::indexAction',  '_route' => 'import_index',);
        }

        if (0 === strpos($pathinfo, '/pharmacien')) {
            // pharmacien_homepage
            if ($pathinfo === '/pharmacien') {
                return array (  '_controller' => 'AppBundle\\Controller\\PharmacienController::homepageAction',  '_route' => 'pharmacien_homepage',);
            }

            // pharmacien_change_current_officine
            if ($pathinfo === '/pharmacien/change-current-officine') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pharmacien_change_current_officine;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PharmacienController::setCurrentOfficineAction',  '_route' => 'pharmacien_change_current_officine',);
            }
            not_pharmacien_change_current_officine:

            // pharmacien_engagements
            if ($pathinfo === '/pharmacien/engagements') {
                return array (  '_controller' => 'AppBundle\\Controller\\PharmacienController::engagementsAction',  '_route' => 'pharmacien_engagements',);
            }

            // pharmacien_catalogue
            if ($pathinfo === '/pharmacien/catalogue') {
                return array (  '_controller' => 'AppBundle\\Controller\\PharmacienController::catalogueAction',  '_route' => 'pharmacien_catalogue',);
            }

            // pharmacien_formations
            if ($pathinfo === '/pharmacien/formations') {
                return array (  '_controller' => 'AppBundle\\Controller\\PharmacienController::formationsAction',  '_route' => 'pharmacien_formations',);
            }

            if (0 === strpos($pathinfo, '/pharmacien/services-')) {
                // pharmacien_services_ligne
                if ($pathinfo === '/pharmacien/services-ligne') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PharmacienController::servicesLigneAction',  '_route' => 'pharmacien_services_ligne',);
                }

                // pharmacien_services_patients
                if ($pathinfo === '/pharmacien/services-patients') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PharmacienController::servicesPatientsAction',  '_route' => 'pharmacien_services_patients',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // redcode_tree_data
            if ($pathinfo === '/admin/tree/data') {
                return array (  '_controller' => 'RedCode\\TreeBundle\\Controller\\TreeAdminController::treeDataAction',  '_route' => 'redcode_tree_data',);
            }

            if (0 === strpos($pathinfo, '/api')) {
                if (0 === strpos($pathinfo, '/api/pharmacien')) {
                    // post_pharmacien_activate
                    if ($pathinfo === '/api/pharmacien/activate') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_pharmacien_activate;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Api\\UserPharmacienApiController::postActivateAction',  '_format' => 'json',  '_route' => 'post_pharmacien_activate',);
                    }
                    not_post_pharmacien_activate:

                    // post_pharmacien_register
                    if ($pathinfo === '/api/pharmacien/register') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_pharmacien_register;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Api\\UserPharmacienApiController::postRegisterAction',  '_format' => 'json',  '_route' => 'post_pharmacien_register',);
                    }
                    not_post_pharmacien_register:

                    // post_pharmacien_change_access
                    if ($pathinfo === '/api/pharmacien/change_access') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_pharmacien_change_access;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Api\\UserPharmacienApiController::postChange_accessAction',  '_format' => 'json',  '_route' => 'post_pharmacien_change_access',);
                    }
                    not_post_pharmacien_change_access:

                }

                // nelmio_api_doc_index
                if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_nelmio_api_doc_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
                }
                not_nelmio_api_doc_index:

            }

        }

        // app_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'AppBundle\\Controller\\ContactController::contactAction',  '_route' => 'app_contact',);
        }

        // app_profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'AppBundle\\Controller\\ProfilController::profilAction',  '_route' => 'app_profil',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
