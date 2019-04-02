<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/category')) {
            // category_index
            if ('/category' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_category_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'category_index'));
                }

                return $ret;
            }
            not_category_index:

            // category_new
            if ('/category/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_show']), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::showAction',));
            }

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_edit']), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::editAction',));
            }

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_delete']), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/idea')) {
            // idea_list
            if ('/idea' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\IdeaController::listAction',  '_route' => 'idea_list',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_idea_list;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'idea_list'));
                }

                return $ret;
            }
            not_idea_list:

            // idea_detail
            if (0 === strpos($pathinfo, '/idea/detail-') && preg_match('#^/idea/detail\\-(?P<id>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'idea_detail']), array (  '_controller' => 'AppBundle\\Controller\\IdeaController::ideaAction',));
            }

            // idea_delete
            if (0 === strpos($pathinfo, '/idea/delete-') && preg_match('#^/idea/delete\\-(?P<id>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'idea_delete']), array (  '_controller' => 'AppBundle\\Controller\\IdeaController::deleteAction',));
            }

            // idea_add
            if ('/idea/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\IdeaController::addAction',  '_route' => 'idea_add',);
            }

            // idea_edit
            if (0 === strpos($pathinfo, '/idea/edit-') && preg_match('#^/idea/edit\\-(?P<id>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'idea_edit']), array (  '_controller' => 'AppBundle\\Controller\\IdeaController::editAction',));
            }

        }

        // accueil
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\MainController::layoutAction',  '_route' => 'accueil',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_accueil;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'accueil'));
            }

            return $ret;
        }
        not_accueil:

        // secondePage
        if ('/page2' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\MainController::otherAction',  '_route' => 'secondePage',);
        }

        // aboutUs
        if ('/aboutus' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\MainController::aboutUsAction',  '_route' => 'aboutUs',);
        }

        // success
        if ('/success' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\MainController::successAction',  '_route' => 'success',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_register
            if ('/user/register' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
            }

            // user_login
            if ('/user/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'user_login',);
            }

            // user_logout
            if ('/user/logout' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::logoutAction',  '_route' => 'user_logout',);
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
