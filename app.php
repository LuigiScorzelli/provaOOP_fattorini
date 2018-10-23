<?php include 'index.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
    <table class="table">
      <thead>
        <tr>
          <td>Dati anagrafici società:</td>
          <?php foreach($soc as $s){ ?>
            <td><?php echo $s;?></td>
          <?php }?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>dati fattorino:</td>
          <?php foreach($fatt as $item){ ?>
            <td><?php echo $item; ?></td>
          <?php } ?>
        </tr>
        <tr>
          <td>dati fattorino:</td>
          <?php foreach($fatt1 as $f){ ?>
            <td><?php echo $f; ?></td>
          <?php }?>
        </tr>
      </tbody>
    </table>
    </div>


  </body>
</html>
