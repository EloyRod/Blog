<?php

class Application_Model_Tag extends Zend_Db_Table_Abstract
{

    protected $_primary = 'id_tag';
    protected $_name = 'tags';

    protected $_dependentTables = array('Application_Model_EntradasTags');


} 