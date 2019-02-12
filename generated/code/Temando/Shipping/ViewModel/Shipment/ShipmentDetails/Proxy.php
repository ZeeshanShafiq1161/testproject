<?php
namespace Temando\Shipping\ViewModel\Shipment\ShipmentDetails;

/**
 * Proxy class for @see \Temando\Shipping\ViewModel\Shipment\ShipmentDetails
 */
class Proxy extends \Temando\Shipping\ViewModel\Shipment\ShipmentDetails implements \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Temando\Shipping\ViewModel\Shipment\ShipmentDetails
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Temando\\Shipping\\ViewModel\\Shipment\\ShipmentDetails', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Temando\Shipping\ViewModel\Shipment\ShipmentDetails
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function getViewActionUrl($extShipmentId)
    {
        return $this->_getSubject()->getViewActionUrl($extShipmentId);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtShipmentId()
    {
        return $this->_getSubject()->getExtShipmentId();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerReference()
    {
        return $this->_getSubject()->getCustomerReference();
    }

    /**
     * {@inheritdoc}
     */
    public function getDocumentation()
    {
        return $this->_getSubject()->getDocumentation();
    }

    /**
     * {@inheritdoc}
     */
    public function getPackages()
    {
        return $this->_getSubject()->getPackages();
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        return $this->_getSubject()->getItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getDocumentationDisplayName($documentationType)
    {
        return $this->_getSubject()->getDocumentationDisplayName($documentationType);
    }

    /**
     * {@inheritdoc}
     */
    public function isShipmentPaperless()
    {
        return $this->_getSubject()->isShipmentPaperless();
    }
}
