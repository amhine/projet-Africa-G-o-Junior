<?php
include './cnxdb.php';

$id_pays = $_GET["id_pays"];
if (isset($_POST["submit"])) {
    $nom = $_POST['nom'];
    $population = $_POST['population'];
    $langues = $_POST['langues'];
    $id_continent = $_POST['id_continent'];

  
    $sql = "UPDATE `Pays` SET `langues`='$langues',`population`='$population',`nom`='$nom',`id_continent`='$id_continent' 
    WHERE id_pays = $id_pays";
    

   
    $resul = mysqli_query($connect, $sql);
    if ($resul) {
            header("Location: index.php?msg=Data updated successfully");
          } else {
            echo "Failed: " . mysqli_error($conn);
     }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="">
</head>

<body>
  

  <div class="container">
    <?php
    $sql = "SELECT * FROM `Pays` WHERE id_pays = $id_pays LIMIT 1";
    $resul = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($resul);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
                <h1 class="flex justify-center font-bold text-white text-4xl"> Pays</h1>
            
                <label class="text-white" for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo $row['nom'] ?>">
            
                <label class="text-white" for="population">Population :</label>
                <input type="number" id="population" name="population" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo $row['population'] ?>">
            
                <label class="text-white" for="langues">Langues :</label>
                <input type="text" id="langues" name="langues" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo $row['langues'] ?>">
            
                <label class="text-white" for="id_continent">Continent :</label>
                <select id="id_continent" name="id_continent" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo $row['id_continent'] ?>">
                    <option value="1">Afrique</option>
                </select>
            
                <div class="flex justify-between mt-6">
                    <button type="submit" class="text-white bg-blue-600 w-36 rounded-2xl py-2 hover:bg-blue-800 cursor-pointer" name="submit">Update</button>
                    <a href="read.php" class="text-white bg-red-600 w-36 rounded-2xl py-2 hover:bg-red-800 cursor-pointer ">Cancel</a>
                </div>
                
            </form>
    </div>
  </div>

 
</body>

</html>