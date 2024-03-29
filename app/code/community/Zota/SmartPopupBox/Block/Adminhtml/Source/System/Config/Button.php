<?php 
class Zota_SmartPopupBox_Block_Adminhtml_Source_System_Config_Button extends Mage_Adminhtml_Block_System_Config_Form_Field
{

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setElement($element);
        $createUrl = "//smartpopupbox.com/widgets/customer/auth/signup";
        $html = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setType('button')
            ->setClass('btn-getcode')
            ->setLabel('Create your Popup Box')
            ->setOnClick("window.open('$createUrl', '_create_spb');return false;")
            ->toHtml();
        return $html;
    }
}
?>