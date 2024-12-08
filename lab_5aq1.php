<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Lab 5a Q1</title>
    </head>
<body>
    <?php
        $name = "Azizir Rahim Bin Abd. Rashid";
        $MatricNumber = "DI220034";
        $Course = "Software Engginering";
        $YearOfStudy = "2";
        $Address = "MC-A 110 TAMAN PINGGIRAN DELIMA, 43100, HULU LANGAT, SELANGOR";
        ?>
<table border = 1>
    <tr>
    <td>Name</td>
    <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo "$MatricNumber"; ?></td>
</tr>
<tr>
<td>Course</td>
        <td><?php echo $Course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $YearOfStudy; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $Address; ?></td>
    </tr>
</table>
</body>
</html>
