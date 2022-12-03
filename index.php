<?php
require 'database.php';

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Çoklu Kayıt Silme Projesi</title>
</head>

<body>
  <form action="sonuc.php" method="post">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">USERS</th>
          <th scope="col">Name Surname</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sorgu =  $db->prepare("SELECT * FROM users");
        $sorgu->execute();

        $KayitSayisi = $sorgu->rowCount();
        $Kayitlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

        foreach ($Kayitlar as $KayitSatirlari) {
        ?>
          <tr>
            <td><input type="checkbox" name="secim[]" value="<?php echo $KayitSatirlari["id"]; ?>"></td>
            <td><?php echo $KayitSatirlari["name"] . " " . $KayitSatirlari["surname"]; ?></td>

          </tr>
        <?php
        }

       echo '<tr>
       <td colspan="2" align="center">
       <input type="submit" class="btn btn-primary btn-lg" value="Kayıt Sil"></input>
       </td>
     </tr>';
        ?>
      </tbody>

      
    </table>

         

  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>