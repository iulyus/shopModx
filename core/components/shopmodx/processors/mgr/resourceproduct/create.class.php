<?php

require_once dirname(dirname(__FILE__)).'/resource/create.class.php';

class ShopmodxResourceProductCreateProcessor extends ShopmodxResourceCreateProcessor{
    public $classKey = 'ShopmodxResourceProduct';
    public $objectType = 'shopmodxresourceproduct';
    public $relatedObjectRequired = true;
}
return 'ShopmodxResourceProductCreateProcessor';