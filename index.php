<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>

    <?php
    if (isset($_GET['building']) && isset($_GET['room'])) // si on a le nom et le prénom, test les variable building et room
    {
echo 'Vous êtes au batiment ' . $_GET['building'] . ' chambre ' . $_GET['room'] . '!';
} else //manque de paramêtre
{
  echo 'manque de renseignement';
}
     ?>
   </p>
  </body>
</html>
