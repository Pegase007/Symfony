<?php


namespace TroisWA\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BaseController extends Controller
{

    public function breadcrumbs($items)

    {
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Home ", $this->generateUrl("trois_wa_back_admin"));

        foreach($items as $label => $url)
        {
            if (!empty($url))
            {
                $breadcrumbs->addItem($label, $url);
            }
            else
            {
                $breadcrumbs->addItem($label);
            }
        }


    }


}