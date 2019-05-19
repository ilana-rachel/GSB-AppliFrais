<form action="index.php?uc=validerFrais&action=valideVM" 
   method="post" role="form">

    <div class='row'>
    <div class="col-md-4" >
        <div class="form-group" >
            <label for="lstVisiteurs" accesskey="n">Choisir le visiteur: </label>
            <select id="lstVisiteur" name="lstVisiteurs" class="form-control">
                <?php
                foreach ($lesVisiteurs as $unVisiteur) {
                    $id = $unVisiteur['id'];
                    $nom = $unVisiteur['nom'];
                    $prenom = $unVisiteur['prenom'];
                    if ($id == $visiteurASelectionner){
                ?>
                       <option selected value="<?php echo $id ?>">
                       <?php echo $nom . ' ' . $prenom ?> 
                       </option>
                       <?php
                    }else{
                       ?>
                       <option  value="<?php echo $id ?>">
                        <?php echo $nom . ' ' . $prenom ?> 
                       </option>
                       <?php
                    }
                }
                ?>    
            </select>
        </div>
        <input class="btn btn btn-success" type="submit" value="Valider">
    </div>



    <div class="col-md-4">
        <div class="form-group">
            <label for="lstMois" accesskey="n">Mois </label>
            <select id="lstMois" name="lstMois" class="form-control">
                <?php
                foreach ($lesMois as $unMois) {
                    $mois = $unMois['mois'];
                    $numAnnee = $unMois['numAnnee'];
                    $numMois = $unMois['numMois'];
                    if ($mois == $moisASelectionner) {
                ?>
                        <option selected value="<?php echo $mois ?>">
                        <?php echo $numMois . '/' . $numAnnee ?>
                        </option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $mois ?>">
                        <?php echo $numMois . '/' . $numAnnee ?>
                        </option>
                        <?php
                    }
                }                        
                ?>    
            </select>
        </div>   
    </div>
</form>
</div>