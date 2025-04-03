<?php
class Hotel {
    public $name;
    public $description;
    public $parking;
    public $vote;
    public $distance_to_center;

    public function __construct(string $name, string $description, int $vote, float $distance_to_center) {
        $this->name = $name;
        $this->description = $description;
        $this->vote = $vote;
        $this->distance_to_center = $distance_to_center;
    }

    
}
$newHotel = new Hotel('ciccio', 'bello da vedere', '4', '11.2');
$randomNumbers = [];

for($i = 0; $i < 15; $i++) {
    $newNumber = rand(1, 100);
    if(!in_array($newNumber, $randomNumbers)) {
        $randomNumbers[] = $newNumber;
    }
    else {
        $i--;
    }
}

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
    <title>Document</title>
</head>
<body>
    <h1>
        PHP HOtels
    </h1>

    <main>
        <?php
            foreach($hotels as $hotel) {

        
        ?>
        <div>

            <?php
                echo $hotel['name'];
            ?>
        </div>
        <?php
                
            }
        ?>

        <?php 
            foreach($randomNumbers as $randomNumber) {

        
        ?>

                <div>
                    <?php
                        echo $randomNumber;
                    ?>
                </div>

        <?php 
                
            }
        
        ?>

        <?php
            echo $newHotel->name;
            echo '<br>';
            echo $newHotel->description;
            echo '<br>';
            echo $newHotel->vote;
            echo '<br>';
            echo $newHotel->distance_to_center;
            echo '<br>';
        ?>
    </main>
</body>
</html>