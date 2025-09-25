<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 12</title>
</head>
<body>
        <?php
            $failitee = 'tootajad.csv';
            $fail = fopen($failitee, 'r') or die('Faili ei leitud!');
            $pealkiri = fgetcsv($fail, filesize($failitee), ';');

            $mehed = [];
            $naised = [];

            while (($andmerida = fgetcsv($fail, 1000, ';')) !== false) {
                if (count($andmerida) === 3) {
                    $nimi_raw = $andmerida[0];
                    $sugu_raw = strtolower(trim($andmerida[1]));
                    $palk_raw = (int)trim($andmerida[2]);

                    if ($sugu_raw === 'm') {
                        $mehed[] = $palk_raw;
                    } elseif ($sugu_raw === 'n') {
                        $naised[] = $palk_raw;
                    }
                }
            }

            fclose($fail);

            function statistika($sissetulekud) {
                if (count($sissetulekud) === 0) {
                    return [0, 0];
                }
                $keskmine = array_sum($sissetulekud) / count($sissetulekud);
                $suurim = max($sissetulekud);
                return [$keskmine, $suurim];
            }

            list($mehed_kesk, $mehed_max) = statistika($mehed);
            list($naised_kesk, $naised_max) = statistika($naised);
        ?>
            <h2>Palkade võrdlus</h2>
            <div>
                <?php
                    echo "<strong>Mehed:</strong><br>";
                    echo "Keskmine palk: " . round($mehed_kesk) . " €<br>";
                    echo "Kõrgeim palk: " . $mehed_max . " €<br><br>";
                ?>
            </div>
            <div>
                <?php
                    echo "<strong>Naised:</strong><br>";
                    echo "Keskmine palk: " . round($naised_kesk) . " €<br>";
                    echo "Kõrgeim palk: " . $naised_max . " €<br><br>";
                ?>
            </div>
        <div>
            <?php
                if ($mehed_kesk > $naised_kesk) {
                    echo "Meeste keskmine palk on kõrgem.";
                } elseif ($mehed_kesk < $naised_kesk) {
                    echo "Naiste keskmine palk on kõrgem.";
                } else {
                    echo "Meeste ja naiste keskmised palgad on võrdsed.";
                }
            ?>
        </div>
</body>
</html>