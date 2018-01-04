<?php
namespace TemplateMonster\ShopByBrand\Controller\Index\Index;

/**
 * Interceptor class for @see \TemplateMonster\ShopByBrand\Controller\Index\Index
 */
class Interceptor extends \TemplateMonster\ShopByBrand\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $coreRegistry, \TemplateMonster\ShopByBrand\Api\BrandRepositoryInterface $brandRepository)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $coreRegistry, $brandRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
