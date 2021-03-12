<style>
table, th, td{
    border: 1px  solid black;
}
</style>
<?php

    $servername = "localhost";
    $username = "debian-sys-maint";
    $password = "mzLeWaBSpDDxUZ0M";
    $dbname = "myDB";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
        
    //Create database
    /*$sql = "CREATE DATABASE myDB";
    if($conn->query($sql) == true){
    echo "Database created successfully";
    } else{
        echo "Error creating database".$conn->error;
    }*/

    //sql to create table
    /*$sql = "CREATE TABLE myTable (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if($conn->query($sql) === true){
            echo "Table myTable created successfully";
        } else{
            echo "Error creating table: ". $conn->error;
        }
    
    // Adicionando varios de uma vez
    $sql = "INSERT INTO myTable (firstname, lastname, email)
    VALUES ('Campelo', 'Nunes', 'campelo@example.com');";
    $sql .= "INSERT INTO myTable (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com');";
    $sql .= "INSERT INTO myTable (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com')";
    
    if($conn->multi_query($sql) === true){
        echo "New record created successfully";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO myTable (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    //set parameters and execute
    $firstname = "Fabricio";
    $lastname = "Bartolomeu";
    $email = "fabricio@example.com";
    $stmt->execute();

    $firstname = "Cristina";
    $lastname = "Silva";
    $email = "cristina@example.com";
    $stmt->execute();    

    echo "New records created successfully";

    $stmt->close();

    //Ordenação da Tabela
    $sql = "SELECT id, firstname, lastname FROM myTable ORDER BY firstname";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        //output data of each row
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
        } echo "</table>";
    }   else{
        echo "0 results";
    }*/

    $sql = "DELETE FROM myTable WHERE id = 11";

    if($conn->query($sql) === true){
        echo "Record deleted successfully";
    } else{
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>