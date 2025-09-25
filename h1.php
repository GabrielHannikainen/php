<h1>Harjutus 4</h1>
<form action="#" method="get">
    arv1 <input type="number" name="arv1" required><br>
    arv2 <input type="number" name="arv2" required><br>
    <input type="submit" value="Jaga">
</form>
<?php
if (isset($_GET["arv1"]) && isset($_GET["arv2"])) {
    $arv1 = $_GET["arv1"];
    $arv2 = $_GET["arv2"];

    if ($arv2 == 0) {
        echo "Nulliga ei saa jagada";
    } else {
        echo $arv1 / $arv2;
    }
}
?>

<h1>Harjutus 3</h1>
<form action="#" method="get">
    a <input type="number" name="a" required><br>
    b <input type="number" name="b" required><br>
    h <input type="number" name="h" required><br>
    <input type="submit" value="Arvuta">
</form>
<?php
if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["h"])) {
    $a = $_GET["a"];
    $b = $_GET["b"];
    $h = $_GET["h"];
    $s = ($a + $b) / 2 * $h;
    echo "Trapetsi pindala: " . $s . "<br>";
}
?>

<h1>Harjutus 1</h1>
<?php
// Gabriel
echo "<br>";
echo "(\(\<br>";
echo "( -.-) <br>";
echo "o_(\")(\") <br>";

$nimi = "Gabriel";
$aasta = 1980;
$sodiac = "Ilves";

echo $nimi . "<br>" . $aasta . "<br>" . $sodiac;
echo "<br>";
echo '"It\'s My Life" - Dr. Alban';
?>

<h1>Harjutus 2</h1>
<form action="#" method="get">
    a1 <input type="number" name="a1" required><br>
    a2 <input type="number" name="a2" required><br>
    a3: <input type="number" name="a3" required><br>
    <input type="submit" value="Arvuta">
</form>
<?php
if (isset($_GET["a1"]) && isset($_GET["a2"]) && isset($_GET["a3"])) {
    $a1 = $_GET["a1"];
    $a2 = $_GET["a2"];
    $a3 = $_GET["a3"];

    printf("%d + %d = %d <br>", $a1, $a2, $a1 + $a2);
    printf("%d - %d = %d <br>", $a1, $a2, $a1 - $a2);
    printf("%d * %d = %d <br>", $a1, $a2, $a1 * $a2);

    if ($a2 != 0) {
        printf("%d / %d = %0.2f <br>", $a1, $a2, $a1 / $a2);
        printf("%d jääk %d = %d <br>", $a1, $a2, $a1 % $a2);
    } else {
        echo "Ei<br>";
    }

    $umbermoot = $a1 + $a2 + $a3;
    echo "Ümbermõõt: " . $umbermoot . "<br>";

    $pindala = ($a1 * $a2) / 2;
    echo "Pindala: " . $pindala . "<br>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
