<?php
namespace Magento\CatalogWidget\Block\Product\ProductsList;

/**
 * Interceptor class for @see \Magento\CatalogWidget\Block\Product\ProductsList
 */
class Interceptor extends \Magento\CatalogWidget\Block\Product\ProductsList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Framework\App\Http\Context $httpContext, \Magento\Rule\Model\Condition\Sql\Builder $sqlBuilder, \Magento\CatalogWidget\Model\Rule $rule, \Magento\Widget\Helper\Conditions $conditionsHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $productCollectionFactory, $catalogProductVisibility, $httpContext, $sqlBuilder, $rule, $conditionsHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductPriceHtml(\Magento\Catalog\Model\Product $product, $priceType = null, $renderZone = 'item_list', array $arguments = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductPriceHtml');
        if (!$pluginInfo) {
            return parent::getProductPriceHtml($product, $priceType, $renderZone, $arguments);
        } else {
            return $this->___callPlugins('getProductPriceHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createCollection');
        if (!$pluginInfo) {
            return parent::createCollection();
        } else {
            return $this->___callPlugins('createCollection', func_get_args(), $pluginInfo);
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
}
