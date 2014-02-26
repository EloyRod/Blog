<?php

class Application_Model_Usuario extends Zend_Db_Table_Abstract
{

    protected $_primary = 'id_usuario';
    protected $_name = 'usuario';

    protected $_dependentTables = array('Application_Model_Entrada');

} 