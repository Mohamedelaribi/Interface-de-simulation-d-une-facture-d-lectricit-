<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>solidao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>المكتب الوطني للكهرباء و الماء الصالح للشرب</h1>
    <h2>Office National de l'Electricité Et d'Eau Potable</h2>
    <form id="form" action="SOLIDAO.php" method="post">
        <div id="form">
        <label for="IndexAncien">Entre l'Ancien valeur:</label>
        <input type="text" name="IndexAncien" id="IndexAncien">
        <label for="IndexNouveau">Entre le Nouveau valeur:</label>
        <input type="text" name="IndexNouveau" id="IndexNouveau"><br>
        </div>

        
        <select id="select" name="Calibre">
            <option disabled selected hidden value >type de Calibre</option>
            <option  class="5-10">5-10</option>
            <option class="15-20">15-20</option>
            <option class=">30"> >30</option>
        </select>
        <input type="date">
        <button id="btn">Envoie</button>
    </form>

</body>
</html>