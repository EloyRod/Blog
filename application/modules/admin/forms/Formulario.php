<?php

class Admin_Form_Formulario extends Zend_Form
{
    
    public function __construct($entrada = []) {
       
        parent::__construct();
         $this->populate($entrada);
    }

    public function init()
    {
        $this->addElement('text', 'titulo');
        $this->getElement('titulo')
            ->addValidator('notEmpty', true, array('messages' => array(
                Zend_Validate_NotEmpty::IS_EMPTY => 'CAMPO_OBLIGATORIO'
            )))
            ->setLabel('TITULO')
            ->setRequired(true);
        
        $this->addElement('text', 'entradilla');
        $this->getElement('entradilla')
            ->addValidator('notEmpty', true, array('messages' => array(
                Zend_Validate_NotEmpty::IS_EMPTY => 'CAMPO_OBLIGATORIO'
            )))
            ->setLabel('ENTRADILLA')
            ->setRequired(true);
       
        $this->addElement('text', 'slug');
        $this->getElement('slug')
            ->addValidator('notEmpty', true, array('messages' => array(
                Zend_Validate_NotEmpty::IS_EMPTY => 'CAMPO_OBLIGATORIO'
            )))
            ->setLabel('SLUG')
            ->setRequired(true);

        $this->addElement('textarea', 'contenido');
        $this->getElement('contenido')
            ->addValidator('notEmpty', true, array('messages' => array(
                Zend_Validate_NotEmpty::IS_EMPTY => 'CAMPO_OBLIGATORIO'
            )))
            ->setLabel('CONTENIDO')
            ->setRequired(true);
        
        $this->addElement('submit', 'submit');
        $this->getElement('submit')
            ->setLabel('ENVIAR');

    }


}
