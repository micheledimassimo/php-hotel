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
        <title>PHP Hotel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="./css/12bool.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header> <!--header-->
            <h1>
                PHP Hotel
            </h1>
        </header>

        <main> <!--main-->
            <?php
                foreach($hotels as $hotel) {
                    
            ?>
                <div>
                    <?php echo $hotel['name']; ?>
                    <?php echo $hotel['description']; ?>
                    <?php 
                        if($hotel['parking']) {
                            echo '<span> ✓ <span/>';
                        } 
                        else {
                            echo '<span> ✗ <span/>';
                        }
                    ?>
                    <?php echo $hotel['vote']; ?>
                    <?php echo $hotel['distance_to_center'].' '.'km'; ?>
                    
                </div>  
                  
            <?php
                }
            ?>
            <div class="p-2">
                    <table class="table">
                        
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Vote</th>
                            <th scope="col">Distance To Center</th>
                            </tr>
                        </thead>
                        <?php
                            foreach($hotels as $hotel) {
                    
                        ?>
                        <tbody>
                            <tr>
                            <th scope="row"><?php echo $hotel['name']; ?></th>
                            <td> <?php echo $hotel['description']; ?> </td>
                            <td><?php 
                                    if($hotel['parking']) {
                                        echo '<span class="text-success"> ✓ <span/>';
                                    } 
                                    else {
                                        echo '<span class="text-danger"> ✗ <span/>';
                                    }
                                ?>
                            </td>
                            <td><?php echo $hotel['vote']; ?></td>
                            <td><?php echo $hotel['distance_to_center'].' '.'km'; ?></td>
                            </tr>
                            
                            <?php
                                }
                            ?>    
                        </tbody>
                    </table>
                </div>
        </main>
    </body>
</html>