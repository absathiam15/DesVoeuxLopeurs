<div class="card-body liste-chambre">
    <table class="table table-bordered text-center text-white">
        <thead>
            <tr>
                <th>Num Chambre</th>
                <th>Type</th>
                <th>Num Batiment</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($chambres as $c): ?>
                <tr>
                    <td><?= $c->getNumChambre() ?></td>
                    <td><?= $c->getTypeChambre() ?></td>
                    <td><?= $c->getNumBatiment() ?></td>
                    <td>
                        <button class="modify" id="<?= $c->getNumChambre() ?>" class="btn btn-info btn-sm">Modifier</button>
                        <button class="modify" id="<?= $c->getNumChambre() ?>" class="btn btn-danger btn-sm">Supprimer</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <div class="boutton1">
        <button class="suivant">SUIVANT</button>
    </div>
    <div class="boutton2">
    <button class="precedent">PRECEDENT</button>
    </div>
</div>

