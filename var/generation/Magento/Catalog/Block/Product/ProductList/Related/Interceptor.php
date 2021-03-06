<?php
namespace Magento\Catalog\Block\Product\ProductList\Related;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\ProductList\Related
 */
class Interceptor extends \Magento\Catalog\Block\Product\ProductList\Related implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Checkout\Model\ResourceModel\Cart $checkoutCart, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Framework\Module\Manager $moduleManager, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $checkoutCart, $catalogProductVisibility, $checkoutSession, $moduleManager, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canItemsAddToCart()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canItemsAddToCart');
        if (!$pluginInfo) {
            return parent::canItemsAddToCart();
        } else {
            return $this->___callPlugins('canItemsAddToCart', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function displayProductStockStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displayProductStockStatus');
        if (!$pluginInfo) {
            return parent::displayProductStockStatus();
        } else {
            return $this->___callPlugins('displayProductStockStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        if (!$pluginInfo) {
            return parent::toHtml();
        } else {
            return $this->___callPlugins('toHtml', func_get_args(), $pluginInfo);
        }
    }
}
