<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EnebaController extends AbstractController
{

    /**
     * @Route("/{id}", name="index_page")
     */
    public function index($id)
    {
        $nuostabu_kiekis = strlen($id);

        $nuostabos = ["kad tave devynios", "kad tu prasmegtum", "kad tu nesulauktum", "kad tu paspringtum", "po paraliais", "rupūs miltai", "po šimts pypkių",
           "po šimts kalakutų", "rūta žalioji", "rupūžėle", "snargliau, tu", "avigalvi, tu", "ko čia ožius rodai", "kad tave žaltys", "kad tave kurmis", "kad tave sliekas prarytų ir į gabaliukus padalytų",
           "kad tau grybai ausis užkištų", "kad tave varnos sulestų", "kad tave šunys", "kad tave kelmai", "eik tu po galais", "eik tu balų degint", "Eik tu šunims šėko pjauti",
           "kad tave bala", "kad tau akys ant kaktos iššoktų", "kad tau kas ant nuospaudos užmintų", "kad tau niežėtų ir pasikasyt negalėtum", "kad tau liežuvis nudžiūtų",
           "kad tu surūgtum", "kad tu ant ežio atsisėstum", "kad tau ragai išdygtų", "papūsk šuniui į uodegą", "slėpkis po lapais", "slėpkis krūmuose", "slėpkis sliekų pavėsy",
           "tau ne visi namie", "apsivemk aukštielninkas", "tinginio pantis", "tu, slunkių slunkis", "tu, kiaulės uodega", "tu, varlės kinka", "nepūsk čia arabų", "nepūsk čia muilo burbulų",
           "nemuilink čia man akių", "nesigirk čia per daug, kad užpakalis neišgirstų ir kojų nepakirstų", "nepudrink man smegenų", "nesapnuok stovėdamas", "varyk arklius",
           "reikalingas tu man, kaip šuniui penkta koja", "ko prikibai kaip lapas prie užpakalio", "tu kvailas per visą pilvą"];

        shuffle($nuostabos);
        $test = array_slice($nuostabos,0, $nuostabu_kiekis);

        for ($i = 0; $i > 5; $i++) {
             $nuostabos[$i];
        }

        return $this->render('main_page/index.html.twig',[
              'test'     => $test
        ]);
    }
}