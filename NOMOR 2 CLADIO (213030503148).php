
<?php
            $names= ["Cladio", "Sonic The Hedgehog", "Nobi Nobita", "Shizuka Minamoto","Doraemon", "Miles Tails Prower", "Knuckles"];
        
        

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NOMOR 2</title>
</head>
<body>
      <table border="1" cellpadding="10" cellspacing="1">
          <thead>
            <tr>
               <th>Nama</th>
              <th>Jumlah Huruf</th>
              <th>jumlah kata</th>
            </tr>
          </thead>
      
           <?php foreach ($names as $name) :  ?>
      
                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                        <td><?php echo strlen($name)."<br>"; ?></td>
                        <td><?php echo str_word_count($name)."<br>"; ?></td>
                    </tr>            
	                  <?php endforeach; ?>    
      </table>
</body>
</html>