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

    $col_titles = array_keys($hotels[0]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>hotel-php-giuri</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">PHP-Hotels</h1>

        <table class="table mt-4">
            <thead>
                <tr>
                    <?php
                        foreach ($col_titles as $title) {
                    ?>

                    <th><?php echo $title ?></th>

                    <?php
                        }
                    ?>          
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($hotels as $hotel) {
                ?>
                    <tr>
                        <td><?php echo $hotel['name'] ?></td>
                        <td><?php echo $hotel['description'] ?></td>
                        <td><?php echo $hotel['parking'] ? 'Si' : 'No' ?></td>
                        <td><?php echo $hotel['vote'] ?></td>
                        <td><?php echo $hotel['distance_to_center'] ?></td>      
                    </tr>
                <?php
                    }
                ?> 
            </tbody>
        </table>
    </div>
</body>
</html>