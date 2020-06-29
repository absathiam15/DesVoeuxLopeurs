    <form action="" method="POST" class="form-inline rechercher">
        <div class="form-group input-group zone-recherche d-flex">
            <label for="">Rechercher par</label>
            <select class="form-control barre-recherche d-flex">
                <option value="Matricule">Matricule</option>
                <option value="Chambre">Chambre</option>
                <option value="Boursier">Boursier</option>
                <option value="NonBoursier">NonBoursier</option>
            </select>
        </div>
    </form>

    <div class="card-body zone-etudiant">
        <div class="row form-group zone-etu">
        <table class="table table-bordered text-center text-white">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Bourse</th>
                <th>N° Chambre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($etudiant as $row): ?>
                <tr>
                    <td><?= $row->getMatricule() ?></td>
                    <td><?= $row->getPrenom() ?></td>
                    <td><?= $row->getNom() ?></td>
                    <td><?= $row->getBourse() ?></td>
                    <td><?= $row->getNumChambre() ?></td>
          
                    <td>
                        <button class="modify" id="" class="btn btn-info btn-sm">Modifier</button>
                        <button class="supprimer" id="" class="btn btn-danger btn-sm">Supprimer</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
           <!-- <a class="nav-link ml-5 nav-item" href="#">Matricule</a>
            <a class="nav-link ml-5 nav-item" href="#">Prenom & Nom</a>
            <a class="nav-link ml-5 nav-item" href="#">Bourse</a>
            <a class="nav-link ml-5 nav-item" href="#">N° Chambre</a>-->
        </div>
    </div>

</div>     
