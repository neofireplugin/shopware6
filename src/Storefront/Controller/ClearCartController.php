<?php declare(strict_types=1);

namespace Swag\StorefrontController\Storefront\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Storefront\Controller\StorefrontController;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"storefront"})
 */

class ClearCartController extends StorefrontController
{
    
    // ANFANG SOBALD ICH DAS HIER EINBINDE GEHT DAS PLUGIN NICHT MEHR...
    
    /**
     * @var SystemConfigService
     */
    private $systemConfigService;

    public function __construct(SystemConfigService $systemConfigService)
    {
        $this->systemConfigService = $systemConfigService;
    }
    
    // ENDE SOBALD ICH DAS HIER EINBINDE GEHT DAS PLUGIN NICHT MEHR...

    /**
     * @Route("/plentymarkets", name="plentymarkets", options={"seo"="false"}, methods={"GET"})
     */
    public function import()
    {

      //  $output =  $this->systemConfigService->get('StorefrontController.config.plentymarketsuser');

        $output = 'Shopware 6';


        return $this->renderStorefront('@Storefront/storefront/page/checkout/cart/index.html.twig', ['output' => $output]);
    }
}
