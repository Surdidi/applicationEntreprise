<?php


namespace App\Http\Controllers;

use App\Models\ElementFormation;

class ELementformationController extends controller
{

    public function getParents($idElementFormation){
        $tabResult = array();
        $tabParentsController = array();
        $originElementFormation = ElementFormation::where("idElementFormation",'=',$idElementFormation)->first();
        $idPere = $originElementFormation->idPere;
        $i = 0 ;
        while($idPere != null){
            $pere = ElementFormation::where("idElementFormation",'=',$idPere)->first();
            $tabParentsController[$i] = $pere ;
            $i++;
            $idPere = $pere->idPere;
        }
        $tabEnfants = ElementFormation::where("idPere",'=',$idElementFormation)->get();
        $tabResult['pere'] = $tabParentsController;
        $tabResult['enfant'] = $tabEnfants ;
        return $tabResult;
    }

    public function getParentsAjax($idElementFormation){
        $tabResult = array();
        $tabParentsController = array();
        $originElementFormation = ElementFormation::where("idElementFormation",'=',$idElementFormation)->first();
        $idPere = $originElementFormation->idPere;
        $tabParentsController[0] = $originElementFormation;
        $i = 1 ;
        while($idPere != null){
            $pere = ElementFormation::where("idElementFormation",'=',$idPere)->first();
            $tabParentsController[$i] = $pere ;
            $i++;
            $idPere = $pere->idPere;
        }
        $tabEnfants = ElementFormation::where("idPere",'=',$idElementFormation)->get();
        $tabResult['pere'] = $tabParentsController;
        $tabResult['enfant'] = $tabEnfants ;
        $tabResult = json_encode($tabResult);
        return $tabResult;
    }

    public function filAriane(){
        $originel = ElementFormation::where("idElementFormation",'=',1)->get();
        $tabEnfants = ElementFormation::where("idPere",'=',$originel->first()->idElementFormation)->get();
        return view('FilAriane',['peres' => $originel,
                                        'enfants' => $tabEnfants]);
    }
}
