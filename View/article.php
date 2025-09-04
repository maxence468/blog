<?php
global $a;
?>
<a href="index.php?page=ajout">Ajouter un article</a>
<a href="index.php?deco">Déconnexion</a>


<?php foreach ($a as $value): ?>
<table
    <tr>
        <td> <?= $value->getTitre() ?> </td>
        <td> posté le <?= $value->getPostedAt()->format('Y-m-d') ?> à <?= $value->getPostedAt()->format('H:i') ?> par <?= $value->getUtilisateur()->getUsername() ?>   </td>
        <td> <?= $value->getImage() ?> </td>
        <td> <?= $value->getBody() ?> </td>



    </tr>
<?php  endforeach ?>