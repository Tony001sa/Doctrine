<?php

namespace App\Http\Controllers;

use Doctrine\ORM\EntityManagerInterface;
use EntityManager;
use Illuminate\Http\Request;
use App\Entities\People;

class MyController extends Controller
{
    public function test(){

      $address = EntityManager::find('App\Entities\Address', 2);

      $people = "";
      foreach ($address->getPeople() as $man) {
        $people = $people." ".($man->getName());
      }

      dd($people);

    }
}
