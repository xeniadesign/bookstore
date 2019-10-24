<?php
class BookStore_ThemeOptions_model_Source_Font
{
	public function toOptionArray()
	{
		return array(
			array('value' => 'serif', 'label' =>
			Mage::helper('themeoptions')->__('Georgia, Times New Roman, Times, serif')),
			array('value' => 'sansserif', 'label' => Mage::helper('themeoptions')->__('Arial, helvetica, sans-serif')),
			array('value' => 'monospace', 'label' => Mage::helper('themeoptions')->__('"Courier New", Courier, monospace'))
			);
	}
}