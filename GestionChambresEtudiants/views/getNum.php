<?php

class getNum extends ChambresDao{

    public function getnumChambre(){      
        $chambre = new ChambresDao();
        $num_chambre = $chambre->findNum();
        echo '
            <label class="text-label" id ="label">Chambre N°</label>
            <select class="text-dark mdb-select md-form" name="numChambre" id="numChambre">';
                for ($i=0; $i < count($num_chambre) ; $i++) { 
                    echo '<option value="'.$num_chambre[$i]["num_chambre"].'">'.$num_chambre[$i]["num_chambre"].'</option>';
                }
        echo '</select><br>';
    }
    public function getnumBatiment(){      
        $chambre = new ChambresDao();
        $num_batiment = $chambre->findNumBatiment();
        echo '
            <select class="text-dark mdb-select md-form" name="numBatiment" id="numBatiment">';
                for ($i=0; $i < count($num_batiment) ; $i++) { 
                    echo '<option value="'.$num_batiment[$i]["num_batiment"].'">'.$num_batiment[$i]["num_batiment"].'</option>';
                }
        echo '</select><br>';
    }

}