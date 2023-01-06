<?php

session_start();
$finalresult = $_SESSION['finalresult'];

$doc = new DOMDocument();
@$doc->loadHTML($finalresult);
$selector = new DOMXPath($doc);
$classname = "nav-item";
$nodes = $selector->query("//*[contains(@class, '$classname')]");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/icon/result.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" />

    <title>Keterangan Kompen</title>
</head>

<body>
    <div class="container row justify-content-center mx-auto my-4">
        <div class="alert alert-light text-center">
            Info kompen mahasiswa dengan nama<?php echo str_replace('Nama', '', $nodes[15]->nodeValue); ?>
        </div>
        <div class="col-sm-4 my-2">
            <div class="card">
                <div class="card-header">
                    Kompen Per Semester
                </div>
                <div class="card-body">
                    <?php
                    for ($i = 6; $i <= 13; $i++) {
                        echo '<p class="card-text">' . str_replace('Semester', 'Smt', str_replace('Detail', '', $nodes[$i]->nodeValue)) . '</p>';
                    };
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-2">
            <div class="card">
                <div class="card-header">
                    Detail Rekap Per semester
                </div>
                <div class="card-body">
                    <?php
                    for ($i = 19; $i <= 26; $i++) {
                        echo '<p class="card-text">' . str_replace('Detail', '', $nodes[$i]->nodeValue) . '</p>';
                    };
                    ?>

                </div>
            </div>
        </div>
        <div class="col-sm-4 my-2">
            <div class="card">
                <div class="card-header">
                    Total
                </div>
                <div class="card-body">
                    <?php
                    for ($i = 28; $i <= 30; $i++) {
                        echo '<p class="card-text">' . str_replace('Detail', '', $nodes[$i]->nodeValue) . '</p>';
                    };
                    ?>
                </div>
            </div>
            <div class="bg-light my-3 py-3 rounded" style="width: 100%;">
                <h6 class="mb-3 text-center">Connect with me!</h6>
                <div class="d-flex justify-content-center">
                    <a href="https://github.com/ferdyhape" class="my-auto icon-connect-me" target="_blank"><i class="fa-brands fa-github" style="font-size: 30px;"></i></a>
                    <a href="https://www.linkedin.com/in/ferdy-hahan-pradana/" class="my-auto icon-connect-me" target="_blank"><i class="fa-brands fa-linkedin" style="font-size: 30px;"></i></a>
                    <a href="https://instagram.com/ferdyhape" class="my-auto icon-connect-me" target="_blank"><i class="fa-brands fa-instagram" style="font-size: 30px;"></i></a>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            background: rgb(46, 49, 146);
            background: linear-gradient(90deg, rgba(46, 49, 146, 1) 0%, rgba(27, 255, 255, 1) 100%);
        }

        .icon-connect-me {
            margin: 0 10px;
        }

        .icon-connect-me .fa-github {
            color: #333;
        }

        .icon-connect-me .fa-instagram {
            color: #833AB4;
        }

        .icon-connect-me .fa-linkedin {
            color: #0e76a8;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>