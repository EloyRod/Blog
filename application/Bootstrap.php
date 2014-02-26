<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initLanguages()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/languages.ini');
        $languages = array_keys($config->languages->toArray());
        $zl = new Zend_Locale();

        $lang = in_array($zl->getLanguage(), $languages) ? $zl->getLanguage() : 'es';

        $route = new Zend_Controller_Router_Route(':lang/:controller/:action/*',
            array('controller' => 'index',
                'action' => 'index',
                'module' => 'default',
                'lang' => $lang));

        $route_admin = new Zend_Controller_Router_Route('admin/:controller/:action/*',
            array('controller' => 'index',
                'action' => 'index',
                'module' => 'admin'
            ));

        $this->bootstrap('frontController');
        $frontController = $this->frontController;
        $router = $frontController->getRouter();

        $router->addRoute('default', $route);
        $router->addRoute('admin', $route_admin);

        $frontController->setRouter($router);

        $frontController->registerPlugin(new My_Controller_Plugin_LanguageSetup(
            APPLICATION_PATH . '/configs/translations',
            $config->languages->toArray()
        ));

    }


}

