


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<form method="GET" action="index.php">
        <div class="form-group">
            <label for="parking">Filter by Parking:</label>
            <select class="form-control" id="parking" name="parking">
                <option value="All">All</option>
                <option value= "true" >Yes</option>
                <option value="false">No</option>
            </select>
        </div>

        <div class="form-group">
            <label for="voto">Filter by Vote:</label>
            <select class="form-control" id="vote" name="voto">
                <option value="All">All</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <input type="submit">

        <?php
           $parcheggio = $_GET['parking'];
           $voto = $_GET['voto'] ;
           
           var_dump( $parcheggio , $voto);
           
        ?>


        <h1>LISTA HOTEL</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal Centro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $hotels = [
                    [
                        'name' => 'Hotel Belvedere',
                        'description' => 'Hotel Belvedere Descrizione',
                        'parking' => true,
                        'vote' => 4,
                        'distance_to_center' => 10.4
                    ],
                    [
                        'name' => 'Hotel Futuro',
                        'description' => 'Hotel Futuro Descrizione',
                        'parking' => true,
                        'vote' => 2,
                        'distance_to_center' => 2
                    ],
                    [
                        'name' => 'Hotel Rivamare',
                        'description' => 'Hotel Rivamare Descrizione',
                        'parking' => false,
                        'vote' => 1,
                        'distance_to_center' => 1
                    ],
                    [
                        'name' => 'Hotel Bellavista',
                        'description' => 'Hotel Bellavista Descrizione',
                        'parking' => false,
                        'vote' => 5,
                        'distance_to_center' => 5.5
                    ],
                    [
                        'name' => 'Hotel Milano',
                        'description' => 'Hotel Milano Descrizione',
                        'parking' => true,
                        'vote' => 2,
                        'distance_to_center' => 50
                    ],
                ];
                

                // if($parcheggio == 'yes') {
                //     foreach ($hotels as $index) {
                //         if($index['parking'] == true){
                //             echo '<tr>';
                //             echo '<td>' . $index['name'] . '</td>';
                //             echo '<td>' . $index['description'] . '</td>';
                //             echo '<td>' . ($index['parking'] ? 'Disponibile' : 'Non disponibile') . '</td>';
                //             echo '<td>' . $index['vote'] . '</td>';
                //             echo '<td>' . $index['distance_to_center'] . '</td>';
                //             echo '</tr>';
                //         }else($index['parking'] !== true)
                //     }
                // }

                
                
                
                    
            
                
            
               
                    foreach ($hotels as $index) {
                        if(  $index['parking'] == ($_GET['parking'] === 'true') && $voto == 'All' ){
                        //  var_dump('parktrue' . $index['parking']);
                            echo '<tr>';
                            echo '<td>' . $index['name'] . '</td>';
                            echo '<td>' . $index['description'] . '</td>';
                            echo '<td>' . ($index['parking'] ? 'Disponibile' : 'Non disponibile') . '</td>';
                            echo '<td>' . $index['vote'] . '</td>';
                            echo '<td>' . $index['distance_to_center'] . '</td>';
                            echo '</tr>';
                        }elseif($index['vote'] >= $voto && $_GET['parking'] == "All"){
                            echo '<tr>';
                            echo '<td>' . $index['name'] . '</td>';
                            echo '<td>' . $index['description'] . '</td>';
                            echo '<td>' . ($index['parking'] ? 'Disponibile' : 'Non disponibile') . '</td>';
                            echo '<td>' . $index['vote'] . '</td>';
                            echo '<td>' . $index['distance_to_center'] . '</td>';
                            echo '</tr>';
                        }elseif($index['parking'] == ($_GET['parking'] === 'true') && $index['vote'] >= $voto){
                            echo '<tr>';
                            echo '<td>' . $index['name'] . '</td>';
                            echo '<td>' . $index['description'] . '</td>';
                            echo '<td>' . ($index['parking'] ? 'Disponibile' : 'Non disponibile') . '</td>';
                            echo '<td>' . $index['vote'] . '</td>';
                            echo '<td>' . $index['distance_to_center'] . '</td>';
                            echo '</tr>';
                        }elseif ($voto == 'All' && $parcheggio == 'All') {                        
                            echo '<tr>';
                            echo '<td>' . $index['name'] . '</td>';
                            echo '<td>' . $index['description'] . '</td>';
                            echo '<td>' . ($index['parking'] ? 'Disponibile' : 'Non disponibile') . '</td>';
                            echo '<td>' . $index['vote'] . '</td>';
                            echo '<td>' . $index['distance_to_center'] . '</td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>