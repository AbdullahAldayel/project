<?php 
    //Connect to the database
   /*$con=mysqli_connect("example.com","peter","abc123","my_db"); 

    // Check connection
    if (mysqli_connect_errno()){
        die("Failed to connect to MySQL: " . mysqli_connect_error();)
    }
    //insert to Person
    mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Peter', 'Griffin',35)");

    //Update person
    mysqli_query($con,"UPDATE Persons SET Age=36 WHERE FirstName='Peter' AND LastName='Griffin'");

    //Displaying data  within HTML table //HTML tags are missings
    $result = mysqli_query($con,"SELECT * FROM Persons");
    echo "<table border='1'>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>";
    while($row = mysqli_fetch_array($result)){
         echo "<tr>";
         echo "<td>" . $row['FirstName'] . "</td>";
         echo "<td>" . $row['LastName'] . "</td>";
          echo "</tr>";
    }
    echo "</table>";




    //Close the connection
    mysqli_close($con);
    */

    define("DBHOST","localhost");

    define("DBUSER","root");

    define("DBPWD","");
    define("DBNAME","recommenderdb");








?>