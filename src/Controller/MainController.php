<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
  #[Route()]
  public function homepage(): Response
  {

    $starshipCount = 457;

    $myShip = [
      'name' => 'ES Sheep',
      'class' => 'Salvaje',
      'captain' => 'Pedro Zorro',
      'status' => 'killing them all',
    ];


    return $this->render('main/homepage.html.twig', [
      'numberOfStarships' => $starshipCount,
      'myShip' => $myShip,
    ]);
  }
}
