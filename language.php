<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Days of the Week</title>
</head>
<body>
    <div class="m-3">
        <a class="btn btn-primary" href="/index.html">BACK</a>
        <?php

        define("DAYS", 7);
        $firstDay       =   0;
        $selectedLang   =   $_POST["language"];

        $daysEnglish    =   array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        $daysFrench     =   array("Dimanche", "Lundi", "Mardi", "Mercerdi", "Jeudi", "Vendredi", "Samedi");

        // Check <select>'s <option value="english">
        if($selectedLang == "english"){
            echo "<h1>English</h1>";
            echo "<table class='table table-striped table-dark'>";
            echo "<thead><tr><th>Days of the Week</th></tr></thead>";
            echo "<tbody>";
            while($firstDay < DAYS ){
                echo "<tr><td>" . $daysEnglish[$firstDay] . "</tr></td>";
                ++$firstDay;
            }
            echo "</tbody>";
            echo "</table>";
        }else if($selectedLang == "french"){
            echo "<h1>Français</h1>";
            echo "<table class='table table-striped table-dark'>";
            echo "<thead><tr><th>Jours de la Semaine</th></tr></thead>";
            echo "<tbody>";
            while($firstDay < DAYS ){
                echo "<tr><td>" . $daysFrench[$firstDay] . "</tr></td>";
                ++$firstDay;
            }
            echo "</tbody>";
            echo "</table>";
        }
        ?>
        <footer>
            <hr />
            <div>
                <h6 class="text-muted text-center">January 2023 - Arno Pan</h6>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>