<?php
namespace Magento\Catalog\Block\Product\ProductList\Toolbar;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\ProductList\Toolbar
 */
class Interceptor extends \Magento\Catalog\Block\Product\ProductList\Toolbar implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Session $catalogSession, \Magento\Catalog\Model\Config $catalogConfig, \Magento\Catalog\Model\Product\ProductList\Toolbar $toolbarModel, \Magento\Framework\Url\EncoderInterface $urlEncoder, \Magento\Catalog\Helper\Product\ProductList $productListHelper, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $catalogSession, $catalogConfig, $toolbarModel, $urlEncoder, $productListHelper, $postDataHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getWidgetOptionsJson(array $customOptions = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWidgetOptionsJson');
        if (!$pluginInfo) {
            return parent::getWidgetOptionsJson($customOptions);
        } else {
            return $this->___callPlugins('getWidgetOptionsJson', func_get_args(), $pluginInfo);
        }
    }
}
