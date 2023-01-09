<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BADWORD</title>
</head>

<body>

  <p>
    <?php
        $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aperiam inventore quo magnam iusto quos eveniet porro labore hic expedita accusantium autem mollitia exercitationem culpa asperiores voluptates dolorum, consectetur quasi.";
        echo $paragraph;
    ?>
  </p>

  <!-- paragrafo modificato -->
  <h3>
    <?php
        $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aperiam inventore quo magnam iusto quos eveniet porro labore hic expedita accusantium autem mollitia exercitationem culpa asperiores voluptates dolorum, consectetur quasi.";
        $badword = $_GET["word"];
        echo str_replace($badword, "***", $paragraph);
    ?>

  </h3>


  <!-- lunghezza stringa -->
  <h1>
    <?php
        $lunghezza = strlen($paragraph);
        echo "la lunghezza del paragrafo è di" . ": " . $lunghezza . " caratteri";
        ?>
  </h1>

</body>

</html>