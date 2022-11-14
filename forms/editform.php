<?php 
    // including the database connection file
    include_once("../dbConnection/mysqlconfig_connection.php");
    // getting id of the data from the url
    $id = $_GET['id'];
    // selectiong data associated with this particular id
    $result = mysqli_query($dbc, "SELECT * FROM tblsubjects WHERE subject_id='$id'");
    while($res = mysqli_fetch_array($result)){
        $code = $res['subject_code'];
        $code = $res['subject_name'];
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Subject</h1>
    <br>
    <br>
    <form action="../functions/edit.php" name="form1" method="post">
    <table>
        <tr>
            <td>Subject Code</td>
            <td><input type="text" name="code"></td>
        </tr>
        <tr>
            <td>Subject Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
    </form>
</body>
</html>