<?php

$sk = 0;

if (isset($_GET['sk'] )){
    $sk = $_GET['sk'];
    }

    $lyginis = "";
    $nelyginis = "";
    $skaitmuo = 0;

    $start = $sk;

    while ($sk!=0 ){

        $skaitmuo=$sk % 10;
        $sk=floor($sk / 10);
    //              echo $skaitmuo."<br>";
        if ($skaitmuo % 2 == 0){
            $lyginis++;
        }else if ($skaitmuo % 2 > 0) {
            $nelyginis++;
        }


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
                    Lyginiai/Nelyginiai
                </div>
                <div class="card-body">
                    <form method="get" class="mt-2">
                        <div>
                            <input class="form-control" type="text" name="sk">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                    <hr>

                        <?php if ($lyginis != "" && $nelyginis != "" && $start != "") { ?>
                    <div class="mt-3">
                        Įvestas skaičius:<?=$start?>
                        <br>
                        lyginių: <?=$lyginis?>
                        <br>
                        nelyginių: <?=$nelyginis?>
                    </div>
                            <?php } else{?>
                                <div>
                                   Įvesk skaičių
                                </div>
                    <?php } ?>

                </div>

            </div>

        </div>
</div>
</body>
</html>

