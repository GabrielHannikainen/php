<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
  <?php
  $directory = "Pildid/";
  $image_files = ["Kringel.jpg", "lebron.jpg", "Torn.jpg", "Albert.jpg"];

  $valid_images = array_filter($image_files, fn($file) => file_exists($directory . $file));

  if (!empty($valid_images)) {
      $random_image = $directory . $valid_images[array_rand($valid_images)];
      echo '<img src="' . htmlspecialchars($random_image) . '" alt="Suvaline pilt">';
  } else {
      echo "Pilte ei leitud.";
  }
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>