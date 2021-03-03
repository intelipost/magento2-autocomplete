<?php
/*
 * @package     Intelipost_Autocomplete
 * @copyright   Copyright (c) Intelipost
 * @author      Alex Restani <alex.restani@intelipost.com.br>
 */

namespace Intelipost\Autocomplete\Block;

class Customer extends \Magento\Framework\View\Element\Template
{

    protected $_scopeConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->setTemplate('customer.phtml');

        parent::__construct($context);
        $this->_scopeConfig = $scopeConfig;
    }

    public function getLoadPageTime()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/settings/load_page_time');
    }

    public function getCustomState()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/custom_fields_customer/custom_state');
    }

    public function getCustomCity()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/custom_fields_customer/custom_city');
    }

    public function getCustomStreet()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/custom_fields_customer/custom_street');
    }

    public function getCustomQuarter()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/custom_fields_customer/custom_quarter');
    }

    public function getCustomAdditionalInfo()
    {
        return $this->_scopeConfig->getValue('intelipost_autocomplete/custom_fields_customer/custom_additional_info');
    }
}
