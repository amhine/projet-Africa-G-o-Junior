<?php
include './cnxdb.php';

$id_ville = $_GET["id_ville"];
if (isset($_POST["sub"])) {
    $nom = $_POST['nom'];
        $type = $_POST['type'];
        $id_pays = $_POST['id_pays'];

  
    $sql = "UPDATE `ville` SET `nom`='$nom',`type`='$type',`id_pays`='$id_pays' 
    WHERE id_ville = $id_ville";
    

   
    $results = mysqli_query($connect, $sql);
    if ($results) {
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
  

    <div class="">
        <?php
            $sql = "SELECT * FROM `ville` WHERE id_ville = $id_ville LIMIT 1";
            $res = mysqli_query($connect, $sql);
            $row = mysqli_fetch_assoc($res);
        ?>
        <div class="flex justify-center">
        <form action="" method="POST" class="bg-cover p-4 rounded-2xl sm:w-[700px] w-[300px] flex flex-col justify-center sm:m-5 m-3" style="background-image: url('../img/bg.jpg');">
                    <h1 class="flex justify-center font-bold text-white text-4xl">Villes</h1>

                    <h3 class="text-white">Nom :</h3>
                    <input type="text" id="nom" name="nom" class="w-full p-2 mb-4 rounded-md bg-gray-200" value="<?php echo $row['nom'] ?>">

                    <h3  class="text-white ">Pays :</h3>
                    <select id="id_pays" name="id_pays" class="w-full p-2 mb-4 rounded-md bg-gray-200">
                    
                        <?php
                            $query = "SELECT id_pays, nom FROM pays";
                            $result = mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['id_pays'] . "'>" . $row['nom'] . "</option>";
                            }
                        ?>
                    </select>

                    <h3 class="text-white">Type :</h3>
                    <select id="type" name="type" class="w-full p-2 mb-4 rounded-md bg-gray-200">
                        <option value="capitale" id="capitale">Capitale</option>
                        <option value="autre" id="autre">Autre</option>
                    </select>

                    <div class="flex justify-between mt-6">
                    <button type="sub" class="text-white bg-blue-600 w-36 rounded-2xl py-2 hover:bg-blue-800 cursor-pointer" name="sub" >Update</button>
                    <a href="readvil.php" class="text-white bg-red-600 w-36 rounded-2xl py-2 hover:bg-red-800 cursor-pointer flex justify-center">Cancel</a>
                </div>
                </form>



        </div>
    </div>
    </body>

</html>