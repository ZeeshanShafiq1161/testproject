<?php
namespace Temando\Shipping\ViewModel\Order\OrderDetails;

/**
 * Proxy class for @see \Temando\Shipping\ViewModel\Order\OrderDetails
 */
class Proxy extends \Temando\Shipping\ViewModel\Order\OrderDetails implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Temando\Shipping\ViewModel\Order\OrderDetails
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Temando\\Shipping\\ViewModel\\Order\\OrderDetails', $shared = true)
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
     * @return \Temando\Shipping\ViewModel\Order\OrderDetails
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
    public function getOrderTimezone(\Magento\Sales\Api\Data\OrderInterface $order)
    {
        return $this->_getSubject()->getOrderTimezone($order);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderAdminDate($createdAt)
    {
        return $this->_getSubject()->getOrderAdminDate($createdAt);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderStoreName(\Magento\Sales\Api\Data\OrderInterface $order)
    {
        return $this->_getSubject()->getOrderStoreName($order);
    }

    /**
     * {@inheritdoc}
     */
    public function isSingleStoreMode()
    {
        return $this->_getSubject()->isSingleStoreMode();
    }

    /**
     * {@inheritdoc}
     */
    public function getExtOrderId(\Magento\Sales\Api\Data\OrderInterface $order)
    {
        return $this->_getSubject()->getExtOrderId($order);
    }

    /**
     * {@inheritdoc}
     */
    public function getViewActionUrl($orderId)
    {
        return $this->_getSubject()->getViewActionUrl($orderId);
    }
}
