<?php

class ProductController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $aChange = new Sensee_Tag_Commander();
        $aChange->generateTag();
    }


}

