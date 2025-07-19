<DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eat&Drink.group</h1>
    <p>Bienvenue chez Eat&Drink.group</p>
    <img src="Images/eat&drink.png" width="" alt="Logo Eat&Drink">
    @if($nbParcels > 0)
        <p>Il y a actuellement {{$nbParcels}} stands actifs</p>
    @else
        <p>Il n'y a aucun stands actifs </p>
    @endif
</body>
</html>