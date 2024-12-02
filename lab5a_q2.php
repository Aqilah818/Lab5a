<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body bgcolor="pink">
    <?php 
    $students = [
        [
            'name'=> 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name'=> 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name'=> 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
        ];
    ?>

    <table border = "1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php
        foreach ($students as $students){
            echo "<tr>";
            echo "<td>{$students['name']}</td>";
            echo "<td>{$students['program']}</td>";
            echo "<td>{$students['age']}</td>";
            echo "<tr>";
        } 
        ?>
    </table>
</body>
</html>