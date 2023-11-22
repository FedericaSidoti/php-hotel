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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
    <table class="table table-primary mt-5"> 
        <thead>
            <tr>
                <th scope="col">Nome Hotel</th>
                <th scope="col">Descrizione Hotel</th>
                <th scope='col'>Votazione</th>
                <th scope="col">Distanza dal centro</th>
                <th scope="col">Il parcheggio?</th>
            </tr>
        </thead>
        <?php
        foreach($hotels as $hotel) {
            $name= $hotel['name'];
            $des = $hotel['description'];
            $vote = $hotel['vote']; 
            $distance= $hotel['distance_to_center'];
            $parking_confirm= '';

            if ($hotel['parking'] === true) {
                $parking_confirm = 'presente';
            } else {
                $parking_confirm = 'non presente'; 
            }
        ?>
        <tbody>
            <tr>
                <td><?php  echo $name; ?></td>
                <td><?php  echo $des; ?></td>
                <td><?php  echo $vote; ?></td>
                <td><?php  echo $distance; ?> km </td>
                <td><?php  echo $parking_confirm; ?></td>
            </tr>
        </tbody>
        <?php
    }
    ?>
    </table>
    </div>
    


</body>
</html>
    