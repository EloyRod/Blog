<?php

class Application_Model_EntradasTags extends Zend_Db_Table_Abstract
{

    protected $_primary = array('id_tag', 'id_entrada');
    protected $_name = 'entradas_tags';

    protected $_referenceMap    = array(
        'Entradas' => array(
            'columns'           => array('id_entrada'),
            'refTableClass'     => 'Application_Model_Entrada',
            'refColumns'        => array('id_entrada')
        ),
        'Tags' => array(
            'columns'           => array('id_tag'),
            'refTableClass'     => 'Application_Model_Tag',
            'refColumns'        => array('id_tag')
        )
    );
} 