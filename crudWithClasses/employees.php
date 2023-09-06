<?php
include "classes/Employee.php";
$employee_instance = new Employee();
$employees = $employee_instance->selectAllEmployees();
$employees_who_are_teacter = $employee_instance->selectByFirstNameAndageWhoAreTecher();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Table</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- employees table data -->
    <div class="container mt-5">
    <table class="table">
            <!-- table heading -->
            <tr class="bg-dark text-light">
                <th>id</th>
                <th>firstName</th>
                <th>lastName</th>
                <th>gender</th>
                <th>age</th>
                <th>occupation</th>
                <th>income</th>
                <th>married</th>
            </tr>
        <!-- table data section -->
           
            <tr>
            <?php foreach($employees as $employee){?>
                <td><?php echo $employee['id']; ?></td>
                <td><?php echo $employee['firstName']; ?></td>
                <td><?php echo $employee['lastName']; ?></td>
                <td><?php echo $employee['gender']; ?></td>
                <td><?php echo $employee['age']; ?></td>
                <td><?php echo $employee['occupation']; ?></td>
                <td><?php echo $employee['income']; ?></td>
                <td><?php echo $employee['married']; ?></td>
            </tr>
            <?php
            }?>
    </table>
    <?php var_dump($employees_who_are_teacter); ?>
    </div>
</body>
</html>