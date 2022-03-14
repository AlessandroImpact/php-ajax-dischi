<?php
    // inclusione del database
    include __DIR__. '/database.php';

?>
<!--inizio html-->

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Versione PHP</title>
</head>
<body>
    
    
    <header>

        <img src="img/spotify-1.svg" alt="logo">

    </header>

    
    <main class="py-5">

        <div class="container">

            <div class="row row-cols-5 ">

                <?php

                    foreach($database as $disc){
                        
                        echo "<div class='col'> ";

                            echo "<div class='my_card mb-5 p-3' style=min-height:360px>";

                                echo "<img src='" . $disc['poster'] . "' alt='img Disco' class='img-fluid mb-4'>";

                                echo "<div class='d-flex flex-column text-center'> ";

                                    echo "<span class='text-white text-uppercase d-block mb-4'>" . $disc['title'] . "</span>";

                                    echo "<span class='text-secondary my_desc'>" . $disc['author'] . "</span>";

                                    echo "<span class='text-secondary my_desc'>" . $disc['year'] . "</span>";
                                   
                                echo "</div>";

                            echo "</div>";   
                        
                        echo "</div>";


                    }

                ?>

                
            </div>



        </div>

    </main>

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>