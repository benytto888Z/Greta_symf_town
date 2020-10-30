<?php

namespace App\Entity;

class Ville
{

  public $nom;
  public $pays;
  public $carac = [];
  public static $touteslesvilles = [];

  public function __construct($nom,$pays,$carac)
  {
    $this->nom = $nom;
    $this->pays = $pays;
    $this->carac = $carac;
    self::$touteslesvilles[] = $this;
  }

  public static function creerVilles()
  {
    $v1 = new Ville("Paris","France",[
          "population"=>12000000,
          "superficie"=>105,
          "cotiere"=>false,
          "langue"=>"Français"
      ]);

      $v2 = new Ville("Londres","Royaume Unis",[
        "population"=>35322200,
        "superficie"=>434,
        "cotiere"=>false,
        "langue"=>"Anglais"
    ]);

    $v3 = new Ville("Tokyo","Japon",[
      "population"=>6700000,
      "superficie"=>99,
      "cotiere"=>true,
      "langue"=>"Japonnais"
  ]);

  }

  public static function getVilleParNom($nom)
  {
      foreach(self::$touteslesvilles as $ville){
        if(strtolower($ville->nom) === $nom){
          return $ville;
        }
      }
  }

}
























