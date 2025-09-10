<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 7 jätk</h1>
    <?php
    function ik($ik) {
    $pikkus = strlen($ik);
    if ($pikkus==11) {
        if (intval($ik[0])%2==0) {
            $vastus="naine";
    }   else {
            $vastus = "mees";
    }
        
        
        $vastus="õige pikkusega";
    }else {
        $vastus="Vale pikkusega";
    }
    return $vastus;
}
    
    
    ?>
    <?php
    function headmotted() {
        $alused = array("mari","uku","toomas");
        $oeldis = array("armastab", "vihkab", "hoolib");
        $sihitis = array("mind", "sind", "teda");
        echo $alused [array_rand($alused)]." ". echo $oeldis [array_rand($oeldis)]." ". echo $sihitis [array_rand($sihitis)]." ".;
    }
   headmotted();
    ?>
    <?php
    echo ik("50706290437");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
