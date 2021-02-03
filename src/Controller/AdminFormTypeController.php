<?php

namespace App\Controller;

use App\Entity\Form;
use App\Form\AdminFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminFormTypeController extends AbstractController
{
    #[Route('/admin/form/type', name: 'form')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(AdminFormType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            dd($form);
            $this->em->persit($form);
            $this->em->flush();

            return $this->redirectToRoute('form');
        }
        return $this->render('adminFormType/index.html.twig', [
            'form' => $form->createView()
        ]);

    }

}
