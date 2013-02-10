<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // index
        if (preg_match('#^/(?<_locale>ca|es|en|de)/index$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Web\\WebBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'ca',)), array('_route' => 'index'));
        }

        // cataleg
        if (preg_match('#^/(?<_locale>ca|es|en|de)/cataleg$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Web\\WebBundle\\Controller\\DefaultController::catalegAction',  '_locale' => 'ca',)), array('_route' => 'cataleg'));
        }

        // contacte
        if (preg_match('#^/(?<_locale>ca|es|en|de)/contacte$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Web\\WebBundle\\Controller\\DefaultController::contacteAction',  '_locale' => 'ca',)), array('_route' => 'contacte'));
        }

        if (0 === strpos($pathinfo, '/postre')) {
            // postre
            if (rtrim($pathinfo, '/') === '/postre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'postre');
                }

                return array (  '_controller' => 'Web\\WebBundle\\Controller\\PostreController::indexAction',  '_route' => 'postre',);
            }

            // postre_show
            if (preg_match('#^/postre/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Web\\WebBundle\\Controller\\PostreController::showAction',)), array('_route' => 'postre_show'));
            }

            // postre_new
            if ($pathinfo === '/postre/new') {
                return array (  '_controller' => 'Web\\WebBundle\\Controller\\PostreController::newAction',  '_route' => 'postre_new',);
            }

            // postre_create
            if ($pathinfo === '/postre/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_postre_create;
                }

                return array (  '_controller' => 'Web\\WebBundle\\Controller\\PostreController::createAction',  '_route' => 'postre_create',);
            }
            not_postre_create:

            // postre_edit
            if (preg_match('#^/postre/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Web\\WebBundle\\Controller\\PostreController::editAction',)), array('_route' => 'postre_edit'));
            }

            // postre_update
            if (preg_match('#^/postre/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_postre_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Web\\WebBundle\\Controller\\PostreController::updateAction',)), array('_route' => 'postre_update'));
            }
            not_postre_update:

            // postre_delete
            if (preg_match('#^/postre/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_postre_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Web\\WebBundle\\Controller\\PostreController::deleteAction',)), array('_route' => 'postre_delete'));
            }
            not_postre_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
