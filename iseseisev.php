<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>1</h1>
    <?php
    echo '"Juhan liiv "Ääremärkused"';
    "<br";
    ?>

<form method="get">
    a <input type="number" step="any" name="a" required><br>
    b <input type="number" step="any" name="b" required><br>
    c <input type="number" step="any" name="c" required><br>
    <input type="submit" value="Lahenda">
</form>
<?php
if (isset($_GET["a"], $_GET["b"], $_GET["c"])) {
    $a = floatval($_GET["a"]);
    $b = floatval($_GET["b"]);
    $c = floatval($_GET["c"]);

    if ($a == 0) {
        echo "<p>See ei ole ruutvõrrand</p>";
    } else {
        $D = $b * $b - 4 * $a * $c;
        echo "<p>Diskriminant = $D</p>";

        if ($D > 0) {
            $x1 = (-$b + sqrt($D)) / (2 * $a);
            $x2 = (-$b - sqrt($D)) / (2 * $a);
            echo "<p>Kahe erineva lahendiga: x1 = $x1, x2 = $x2</p>";
        } elseif ($D == 0) {
            $x = -$b / (2 * $a);
            echo "<p>Ühe kordse lahendiga: x = $x</p>";
        } 
        }
    }
    "<br>"
    ?>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        echo "* ";
        if ($i % 10 == 0) {
            echo "<br>";
        }
    }
    ?>
    <form method="get" action="">
        <div class="mb-3">
          <label for="isikukood" class="form-label">Sisesta isikukood:</label>
          <input type="text" id="isikukood" name="isikukood" class="form-control" maxlength="11" required>
        </div>
        <button type="submit" class="btn btn-primary">Kontrolli</button>
      </form>
        <?php
          if (isset($_GET['isikukood'])) {
            $ik = trim($_GET['isikukood']);

            function ik($ik) {
              if (strlen($ik) == 11 && ctype_digit($ik)) {
                if (intval($ik[0]) % 2 == 0) {
                  return "Naine";
                } else {
                  return "Mees";
                }
              } else {
                return "Vale pikkusega või mitte-numbriline isikukood!";
              }
            }

            $sugu = ik($ik);
            echo "<div class='alert alert-info'>Sugu isikukoodi <strong>$ik</strong> põhjal: <strong>$sugu</strong></div>";
          }
          ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>