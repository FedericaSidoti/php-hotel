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

<?php
foreach($hotels as $hotel) {
    $name= $hotel['name'];
    $des = $hotel['description'];
    $vote = $hotel['vote']; 
    $distance= $hotel['distance_to_center'];
    $parking_confirm= '';

    if ($hotel['parking'] === 'true') {
        $parking_confirm = 'si';
    } else {
        $parking_confirm = 'no'; 
    }

    ?>
    <p> Nome Hotel: <?php  echo $name; ?> </p>
    <p> Descrizione Hotel: <?php  echo $des; ?> </p>
    <p> Votazione : <?php  echo $vote; ?> </p>
    <p> Distanza dal centro: <?php  echo $distance; ?> km </p>
    <p> Il parcheggio è presente? <?php  echo $parking_confirm; ?> </p>
    <?php
}

?>