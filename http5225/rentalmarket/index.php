<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Market 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #f9f6f2;
        }
        .table th{
            background-color: #d2b48c;
            color:white;
            text-align:center;
            vertical-align:middle;
        }
        .table td{
            text-align: center;
            vertical-align:middle;
        }
    </style>
</head>
<body class="container mt-5">
    <h2 class="text-center mb-4">Canadian Rental Market 2024</h2>

    <?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'rent');
   
    if(!$connect){
        die("connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT 
                r.province,
                r.type,
                r.average_rent,
                r.median_rent,
                r.beds,
                i.median_income,
                ROUND((r.average_rent * 12) / i.median_income * 100, 2) AS rent_to_income_ratio
              FROM rentalmarkets r
              JOIN income i ON r.province = i.province
              ORDER BY rent_to_income_ratio ASC";

    $result = mysqli_query($connect, $query); 

        if(mysqli_num_rows($result)>0){
            echo '<table class="table table-striped table-bordered">';
            echo '<thead class="table-dark">';
            echo '<tr>
                    <th class="text-center">Province</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Avg Rent ($)</th>
                    <th class="text-center">Median Rent ($)</th>
                    <th class="text-center">Beds</th>
                    <th class="text-center">Median Income ($)</th>
                    <th class="text-center">Rent-to-Income (%)</th>
                  </tr>';
            echo  '</thead><tbody>'; 
            
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>
                        <td class='text-center'>{$row['province']}</td>
                        <td class='text-center'>{$row['type']}</td>
                        <td class='text-center'>{$row['average_rent']}</td>
                        <td class='text-center'>{$row['median_rent']}</td>
                        <td class='text-center'>{$row['beds']}</td>
                        <td class='text-center'>{$row['median_income']}</td>
                        <td class='text-center'>{$row['rent_to_income_ratio']}%</td>
                        </tr>";
            }

            echo '</tbody></table>';

            mysqli_close($connect);
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>