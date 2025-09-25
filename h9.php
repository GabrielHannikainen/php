<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 9</h1>
    <?php
    $kasutajanimi = "GaBRieL";
    $tervitusnimi = ucwords(strtolower($kasutajanimi));
    echo "Tere, $tervitusnimi!" . "<br>";
?>
    <?php
    $tekst = "Einar";
    $muudetudTekst = "";
    for ($i = 0; $i < strlen($tekst); $i++) {
        $muudetudTekst .= strtoupper($tekst[$i]) . "."; 
}
    $muudetudTekst = rtrim($muudetudTekst, ".");


    echo $muudetudTekst;
    ?>
        <form method="post">
        <label for="sõnum">Sisesta oma sõnum:</label><br>
        <textarea id="sõnum" name="sõnum" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Saada">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sõnum = $_POST['sõnum'];
        $ropudSõnad = ["noob", "idiot", "stupid"];
        $asendatudSõnum = $sõnum;
        foreach ($ropudSõnad as $sõna) {
            $asendatudSõnum = preg_replace('/\b' . preg_quote($sõna, '/') . '\b/i', str_repeat('*', strlen($sõna)), $asendatudSõnum);
        }
        echo "<h3>Asendatud sõnum:</h3>";
        echo "<p>$asendatudSõnum</p>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>