<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isikukoodi kontroll</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
      <h1>Isikukoodi kontroll</h1>

      <form method="get" action="">
        <div class="mb-3">
          <label for="isikukood" class="form-label">Sisesta isikukood:</label>
          <input type="text" id="isikukood" name="isikukood" class="form-control" maxlength="11" required>
        </div>
        <button type="submit" class="btn btn-primary">Kontrolli</button>
      </form>

      <div class="mt-4">
        <?php
          if (isset($_GET['isikukood'])) {
            $ik = trim($_GET['isikukood']);

            function ik($ik) {
              if (strlen($ik) == 11 && ctype_digit($ik)) {
                // Kontrollime esimest numbrit
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
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>