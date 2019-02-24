  <div class="col-md-4">
            <div class="form-group">
                <label for="lstVisiteurs" accesskey="n">Visiteurs: </label>
                <select id="lstVisiteurs" name="lstVisiteurs" class="form-control">
                    <?php
                    foreach ($lesVisiteurs as $unVisiteur) {
                        $id = $unVisiteur['id'];
                        $nom = $unVisiteur['nom'];
                        $prenom =$unVisiteur['prenom'];
                        if ($unNom == $unVisiteurSelectionner) {
                            ?>
                            <option selected value="<?php echo $id ?>">
                                <?php echo $nom. ' ' . $prenom?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $id ?>">
                                <?php echo $nom . '/' . $prenom ?> </option>
                            <?php
                        }
                    }
                    ?>    

                </select>
            </div>
   </p>
</form>
     
      
<div class="col-md-4">
            <div class="form-group">
                <label for="lstMois" accesskey="n">Mois concernés: </label>
                <select id="lstMois" name="lstMois" class="form-control">
                    <?php
                    foreach ($lesMois as $unMois) {
                        $mois = $unMois['mois'];
                        $Annee = $unMois['Annee'];
                        $jour = $unMois['numMois'];
                        if ($mois == $moisASelectionner) {
                            ?>
                            <option selected value="<?php echo $mois ?>">
                                <?php echo $Mois . ' ' . $Annee ?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $mois ?>">
                                <?php echo $Mois . ' ' . $Annee ?> </option>
                            <?php
                        }
                    }
                    ?>    

                </select>
            </div>
   </p>
</form>
<div class="row">
    <div class="col-md-4">
        <input class="btn btn-lg btn-success"
                               type="submit" value="Valider">
    </div>
