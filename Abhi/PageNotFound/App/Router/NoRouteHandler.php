<?php
/**
 * 404 no route handler
 *
 */

namespace Abhi\PageNotFound\App\Router;

class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{

    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $requestValue = ltrim($request->getPathInfo(), '/');
        $request->setParam('q', $requestValue);
        $request->setModuleName('notfound')->setControllerName('index')->setActionName('index');
        return true;
    }
}
