<?php

class Admin_Controller_Action extends Zend_Controller_Action {
    public function init() {
        $this->_helper->layout->setLayout('admin');
    }
}