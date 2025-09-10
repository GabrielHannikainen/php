<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    
  <h1>Harjutus 7.3</h1>
  <?php
    function vahemikus($a1, $a2, $s){
        for ($i=$a1; $i <= $a2; $i=$i+$s) {
            echo $i;
        }
    }
    ?>


  <h2>Harjutus 7.4</h2>
  <form action="">
    kylg 1 <input type="number" class="kylg1" value="10">
    kylg 2 <input type="number" class="kylg2" value="10">
    <input type="Submit" class="Arvuta pindala">
    </form>
    <?php
  function rectangleS($a1, $a2){
    return $a1 * $a2;
  }
  ?>
    <?php
      echo "Pindala ".rectangleS($_GET['kylg1'], $_GET['kylg2']);
      echo "<br";
  ?>


  <h1>Harjutus 6</h1>
    
    <?php
    $t = array("juuli", "maali", "kaali");
    $p = array ("ago", "marko", "tarko");
    

    for ($i=0; $i < count($t); $i++){
        echo $t[$i]." - ".$p[$i]."<br>";
    }
    

    echo"<br>";

    for ($i=1; $i <=100 ; $i++){

    if ($i%3 ==0) {
        echo $i." ";
    }
    }
    // echo "<br>"
    // for ($i=10; $i >0 ; $i--) 


    ?>
    <h1>Harjutus 7</h1>



    <?php
    function tervita($nimi){
		return "Tere $nimi";	
	}
	echo tervita("Paiksene");
    ?>


    <h1>Harjutus 7.1</h1>
    <?php
    function uudiskiri(){
        echo '<div class="row">;
        <div class="col sm-2">
            <form action="">
                <input type="text" placeholder="Liitu uudiskirjaga">
                <input type="Submit value=liitu!" class="btn btn-success">
            </form>
        </div>
    </div>';
    
    }
    ?>

    <h1>Harjutus 7.2</h1>

    <?php
    function createUser($u){
        $lu = strtolower($u);
        echo $lu."hkhk@edu.ee";
        echo "<br>";
        $p = substr(password_hash($lu, PASSWORD_BCRYPT), 7,7);
        echo $p;
    }
    tervita();
    uudiskiri();
    echo createUser("Mario");

    

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
