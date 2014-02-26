<?php

class Admin_IndexController extends Admin_Controller_Action
{

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        $form = new Admin_Form_Formulario();
        
        $Id_user = Zend_Auth::getInstance()->getIdentity()->id_usuario;
        
        if(!Zend_Auth::getInstance()->getIdentity()){
            $this->_helper->redirector->gotoRoute(array('action'=>'index', 'controller'=>'login'),'admin', true);
     }
        
                   
        
        if($this->getRequest()->isPost()){
            
            //if(!$form->isValid($this->getRequest()->getParams())){
                //$form->populate($this->getRequest()->getParams());
            //}else{
                
                $titulo = $this->_request->getPost('titulo');
                $entradilla =$this->_request->getPost('entradilla');
                $slug = $this->_request->getPost('slug');
                $contenido =$this->_request->getPost('contenido');
                
                //Recuperar el id del usuario
                $valor = Zend_Auth::getInstance()->getIdentity();
                
                //$sql = $bd->quoteInto('SELECT * FROM usuario WHERE nombre = ?',$valor);
                //$res = $bd->query($sql);
                
                           
                
                // INSERCIÓN
                
                $oDate = new DateTime();
                $date = $oDate->format('Y-m-d H:i:s');
                
                $fila = array (
                    'titulo'   => $titulo,
                    'entradilla' => $entradilla,
                    'slug' => $slug,
                    'contenido' => $contenido,
                    'fecha_creacion' => $date,
                    'fecha_edicion' => $date,
                    'activo' => 1,
                    'usuario_creacion_id' => $Id_user ,
                    'usuario_edicion_id' => $Id_user,                                   
                );
                
                $model_entrada = new Application_Model_Entrada();
                $model_entrada->insert($fila);
                
                $this->_helper->redirector->gotoRoute(array('action'=>'index', 'controller'=>'index'),'default', true);
            
        }
       
        $this->view->form = $form;
    }

}
