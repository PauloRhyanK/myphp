<?php
 require '../db.php';

 $sql = "SELECT * FROM users";
 $stmt = $conn->prepare($sql);
 $stmt->execute();

 $usuarios = $stmt->fetchall(PDO::FETCH_ASSOC);

 function printUsers($array){
    $output = '';
    foreach ($array as $i){
        $id = $i['id'];
        $name = $i['nome'];
        $years = $i['idade'];
        $email = $i['email'];
        $pass = $i['senha'];
        $output .= "User $id : $name , $years years old, email: $email, password: $pass <br>";
    }

    return $output;
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <header>
        <h1>Users</h1>
    </header>
    <section>
        <?php echo printUsers($usuarios)?>
    </section>


</body>

</html>