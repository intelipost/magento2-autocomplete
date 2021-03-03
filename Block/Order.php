<?php
/*
 * @package     Intelipost_Autocomplete
 * @copyright   Copyright (c) 2016 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

namespace Intelipost\Autocomplete\Block;

class Order extends \Magento\Framework\View\Element\Template
{

    protected $_scopeConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->setTemplate('order.phtml');

        parent::__construct($context);
        $this->_scopeConfig = $scopeConfig;
    }

    public function getLoadPageTime()
    {
        $time = $this->_scopeConfig->getValue('intelipost_autocomplete/settings/load_page_time');
        return $time;
    }

    public function getCustomState()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/custom_fields_checkout/checkout_custom_state');
    }

    public function getCustomCity()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/custom_fields_checkout/checkout_custom_city');
    }

    public function getCustomStreet()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/custom_fields_checkout/checkout_custom_street');
    }

    public function getCustomQuarter()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/custom_fields_checkout/checkout_custom_quarter');
    }

    public function getCustomAdditionalInfo()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/custom_fields_checkout/checkout_custom_additional_info');
    }
}
