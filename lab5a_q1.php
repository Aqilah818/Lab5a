<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body bgcolor="blue">
    <?php 
        $name = "Fatin Aqilah Binti Mohd Puad";
        $matric = "AI220037";
        $course = "Computer Science (Information Security)";
        $year = "3";
        $address = "Universiti Tun Hussein Onn Malaysia";
    ?>

    <table border = "1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Matric number</td>
            <td><?php echo "$matric"; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td> 
        </tr>
        <tr>
            <td>Year of study</td>
            <td><?php echo "$year"; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td> 
        </tr>
    </table>
    
</body>
</html>