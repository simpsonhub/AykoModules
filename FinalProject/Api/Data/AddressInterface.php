<?php

namespace Ayko\FinalProject\Api\Data;

/**
 * Interface AddressInterface
 * @api
 * @since 100.0.2
 */

use Magento\Checkout\Api\Data\ShippingInformationInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class AddressInterface extends Template {

    /**
     * @var ShippingInformationInterface
     */
    private $_addressInformation;

    /**
     * @param Context $context
     * @param ShippingInformationInterface $addressInformation
     * @param array $data
     */
    public function __construct(
        Context $context,
        ShippingInformationInterface $addressInformation,
        array $data = []
    ) {
        $this->_addressInformation = $addressInformation;
        parent::__construct($context, $data);
    }

    /**
     * Get custom Shipping Charge
     *
     * @return String
     */
    public function getShippingCharge()
    {
        $extAttributes = $this->_addressInformation->getExtensionAttributes();
        return $extAttributes->getCustomField(); //get custom attribute data.
    }

}
