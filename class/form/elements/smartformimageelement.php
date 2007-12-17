<?php

/**
 * Contains the SmartObjectControl class
 *
 * @license GNU
 * @author marcan <marcan@smartfactory.ca>
 * @version $Id$
 * @link http://smartfactory.ca The SmartFactory
 * @package SmartObject
 * @subpackage SmartObjectForm
 */
class SmartFormImageElement extends XoopsFormElementTray {
    function SmartFormImageElement($object, $key) {
    	$var = $object->vars[$key];
        $object_imageurl = $object->getImageDir();
        $this->XoopsFormElementTray( $var['form_caption'], ' ' );
        if($object->getVar($key) != '' && substr($object->getVar($key), 0, 4) == 'http'){
        	$this->addElement( new XoopsFormLabel( '', "<img src='" . $object->getVar($key) . "' alt='' /><br/><br/>" ) );
        }elseif($object->getVar($key) != ''){
        	$this->addElement( new XoopsFormLabel( '', "<img src='" . $object_imageurl . $object->getVar($key) . "' alt='' /><br/><br/>" ) );
       	}

        include_once SMARTOBJECT_ROOT_PATH."class/form/elements/smartformfileuploadelement.php";
        $this->addElement(new SmartFormFileUploadElement($object, $key));

		$this->addElement(new XoopsFormLabel( '<div style="height: 5px; padding-top: 8px; font-size: 80%;">'._CO_SOBJECT_URL_FILE_DSC.'</div>', ''));
		include_once SMARTOBJECT_ROOT_PATH."class/form/elements/smartformtextelement.php";
        $this->addElement(new XoopsFormLabel( '', '<br />' . _CO_SOBJECT_URL_FILE));
        $this->addElement(new SmartFormTextElement($object, 'url_'.$key));
    }
}
?>