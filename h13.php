<!doctype html>
<html lang="et">
<head>
<meta charset="utf-8">
<title>Piltide üleslaadimine</title>
</head>
<body>
<h1>Lae JPG/JPEG pilt üles</h1>

<?php
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir);
}

if (!empty($_FILES["fileToUpload"]["name"])) {
    $file = $_FILES["fileToUpload"];
    $ext = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

    if ($ext == "jpg" || $ext == "jpeg") {
        $targetFile = $uploadDir . basename($file["name"]);
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            echo "<p>Fail laetud: " . htmlspecialchars($file["name"]) . "</p>";
        } else {
            echo "<p>Faili üleslaadimine ebaõnnestus.</p>";
        }
    } else {
        echo "<p>Palun laadi üles ainult JPG või JPEG formaadis pilt.</p>";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" accept=".jpg,.jpeg" required>
    <input type="submit" value="Lae üles">
</form>

<h2>Üleslaetud pildid</h2>

<?php
$files = scandir($uploadDir);
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if ($ext == "jpg" || $ext == "jpeg") {
            $filePath = $uploadDir . $file;
            echo '<a href="' . htmlspecialchars($filePath) . '" target="_blank">';
            echo '<img src="' . htmlspecialchars($filePath) . '" alt="' . htmlspecialchars($file) . '" width="100">';
            echo '</a> ';
        }
    }
}
?>

</body>
</html>
