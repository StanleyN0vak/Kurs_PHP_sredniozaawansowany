<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository(Product::class)->findAll();

        return new Response(print_r($products, true));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     * @Route("/insert", name="insert")
     */
    public function insertAction()
    {
        $product = new Product();
        $product->setName("Książka_" . date("His"));
        $product->setPrice(date("His"));

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return $this->redirectToRoute("homepage");
    }
}
