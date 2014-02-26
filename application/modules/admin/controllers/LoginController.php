<?php

class Admin_LoginController extends Admin_Controller_Action {

    private $_model_credenciales;

    public function init() {
      parent::init();
    }

    public function indexAction() {

        $form = new Admin_Form_Login();

        if ($this->getRequest()->isPost()) {

            if (!$form->isValid($this->getRequest()->getParams())) {
                $form->populate($this->getRequest()->getParams());
            } else {

                $usuario = $form->getValue('usuario');
                $password = $form->getValue('password');

                $db = Zend_Db_Table::getDefaultAdapter();

                $authAdapter = new Zend_Auth_Adapter_DbTable($db);
                $authAdapter->setTableName('usuario')
                        ->setIdentityColumn('nombre')
                        ->setCredentialColumn('password')
                        ->setIdentity($usuario)
                        ->setCredential($password);

                $auth = Zend_Auth::getInstance();

                $resultado = $auth->authenticate($authAdapter);

                //Zend_Debug::dump($resultado->isValid());

                if ($resultado->isValid()) {
                    $storage = $auth->getStorage();
                    $storage->write($authAdapter->getResultRowObject(
                                    null, 'password'
                    ));

                    $this->_helper->redirector->gotoRoute(array('action' => 'index', 'controller' => 'index'), 'admin', true);
                } else {
                    $this->view->error = "Credenciales incorrectas";
                }

                //Compruebo la autenticación
                //echo "OK";
            }
        }

        $this->view->form = $form;
    }

}
