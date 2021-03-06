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
class SmartFormLanguageElement extends XoopsFormSelectLang {

    function SmartFormLanguageElement($object, $key) {

        $var = $object->vars[$key];
        $control = $object->controls[$key];
        $all = isset($control['all']) ? true : false;

		$this->XoopsFormSelectLang($var['form_caption'], $key, $object->getVar($key, 'e'));
		if ($all) {
			$this->addOption('all', _ALL);
		}
    }
}
?>