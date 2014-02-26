<?php

class Application_Model_Entrada extends Zend_Db_Table_Abstract
{

    protected $_primary = 'id_entrada';
    protected $_name = 'entradas';

    protected $_dependentTables = array('Application_Model_EntradasTags');

    protected $_referenceMap    = array(
        'Editor' => array(
            'columns'           => array('usuario_creacion_id'),
            'refTableClass'     => 'Application_Model_Usuario',
            'refColumns'        => array('id_usuario')
        ),
        'Autor' => array(
            'columns'           => array('usuario_edicion_id'),
            'refTableClass'     => 'Application_Model_Usuario',
            'refColumns'        => array('id_usuario')
        )
    );

} 