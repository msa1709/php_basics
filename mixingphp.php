<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixing PHP with HTML </title>
</head> 
<style>
    table{
        border: 1px solid #ccc;
        border-collapse: collapse;

    } 
    td, th {
        border: 1px solid #ccc; 
        padding:5px 10px; 
    }
</style>
<body>
    <h1>Mixing PHP with HTML</h1> 
    <table>
        <thead>
            <tr>
                <th>S.No</th> 
                <th>Name</th> 
                <th>Age</th>
            </tr>
        </thead> 
        <tbody>
            <tr>
                <td>1</td> 
                <td>Ram</td> 
                <td>25</td>
            </tr> 
        <?php
        echo "
        <tr>
        <td>2 </td>
        <td> Sam</td>
        <td> 5 </td>
        </tr>
        ";

        ?>
        </tbody>
    </table>
</body>
</html>