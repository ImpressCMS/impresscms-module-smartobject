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
class SmartFormDateElement extends XoopsFormTextDateSelect {
    function SmartFormDateElement($object, $key) {
        $this->XoopsFormTextDateSelect($object->vars[$key]['form_caption'], $key, 15, $object->getVar($key, 'e'));
    }
}
?>