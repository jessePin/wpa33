<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="gallery">
        <?php
            $list = scandir("photo");
            for($i=2;$i<count($list);$i++){
                $name = $list[$i];
                echo "<img src='photo/$name' width='200'>";   
            }
        ?>
    </div>
    <div id="form">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="photo">Choose photo</label>
            <input type="file" name="photo" id="photo">

            <input type="submit" value="upload">
        </form>
    </div>
</body>
</html>