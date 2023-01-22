<?php

$alga = 0;
$extra = 0;

if (isset($_GET['alga'],$_GET['extra'] )){
    $alga = $_GET['alga'];
    $extra = $_GET['extra'];
}
    $algadabar = $alga;
    $res = 0;
    while ($algadabar<$alga*2 ){
        $algadabar+=$extra;
        $res++;
    //                echo $res;
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
                    Programuotojo atlyginimas
                </div>
                <div class="card-body">
                    <form method="get" class="mt-2">
                        <div>
                            Programuotojo atlyginimas dabar:
                            <input class="form-control" type="text" name="alga">
                        </div>
                        <div class="mt-3">
                            Kas mėnesi atlyginimas bus padidintas:
                            <input class="form-control" type="text" name="extra">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                    <hr>

                    <?php if($res && $alga && $extra != ''){?>
                    <div class="mt-3">
                        Darbuotojo atlyginimas dvigubai didesnis bus po <?=$res?> mėnesių.
                    </div>
                    <?php } else{?>
                        <div>
                            Įvesk skaičius
                        </div>
                    <?php } ?>










                </div>

            </div>

        </div>








</div>
</body>
</html>

