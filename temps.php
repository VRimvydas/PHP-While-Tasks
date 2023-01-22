<?php
//print_r($_FILES);

if (isset($_FILES['data'])){
    $to='/Applications/XAMPP/xamppfiles/htdocs/while/'.$_FILES['data']['name'];
    move_uploaded_file($_FILES['data']['tmp_name'], $to);
    $file = fopen($to, 'r');

    $suma = 0;
    $temp = 0;


    $min = PHP_INT_MAX;
    $max = PHP_INT_MIN;
    $numb=0;


    while ($eilute = fgets($file)){
        $temp++;
        $suma += $eilute;

        $vidurkis = round($suma / $temp, 1);
//        echo $eilute."<br>";
        $numb = $eilute;

        if($numb < $min){
            $min = $numb;
        }else if ($numb > $max){
            $max = $numb;
        }
    }
    fclose($file);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WHILE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php include "nav.php";

?>

<div class="container mt-5">

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Temperatūros
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" class="mt-2">
                        <div>
                            <input type="file" name="data">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary" name="send" value="1">Send</button>
                        </div>

                    </form>
                    <hr>
                    <?php if ($vidurkis!=""){ ?>
                        <div>
                            Dienų temperatūros vidurkis:
                            <?=$vidurkis?>
                        </div>
                    <?php } ?>

                    <?php if ($vidurkis!=""){ ?>
                        <div>
                            Žemiausia:
                            <?=$min?>
                        </div>
                    <?php } ?>

                    <?php if ($vidurkis!=""){ ?>
                        <div>
                            Aukščiausia:
                            <?=$max?>
                        </div>
                    <?php } ?>

                </div>

            </div>

        </div>

    </div>

</body>
</html>



