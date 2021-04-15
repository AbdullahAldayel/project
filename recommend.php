
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #2196F3;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: gray;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
{
  box-sizing: border-box;
}

.column {
  float: right;
  width: 22.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}


{box-sizing: border-box;}

.container {
  position: relative;
  width: 50%;
  max-width: 300px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}

.center {
  margin-right:190px;
  
}

.top{
  text-align:center;
}

.recom{
  width: 300px;
  margin-left: 200px;
  padding:10px;
  margin-top:5px;
  
  
}
.ui-datepicker-calendar {
    display: none;
    }

    .year{
      margin-top:5px;
      margin-left:200px;
    }

    .left{

      margin-left:200px;

    }

    .form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}


.rating-loading{
    width:25px;
    height:25px;
    font-size:0;
    color:#fff;
    background:url(../img/loading.gif) top left no-repeat;border:none
    }
.rating-container .rating-stars
    {position:relative;
    cursor:pointer;
    vertical-align:middle;
    display:inline-block;
    overflow:hidden;
    white-space:nowrap
         }
         .rating-container .rating-input
         {position:absolute;
         cursor:pointer;
         width:100%;
         height:1px;
         bottom:0;left:0;
         font-size:1px;
         border:none;
         background:0 0;
         padding:0;
         margin:0
         }
         .rating-disabled .rating-input,.rating-disabled .rating-stars
         {
             cursor:not-allowed
             
         }
         .rating-container .star{
             display:inline-block;
             margin:0 3px;
             text-align:center
         }
         .rating-container .empty-stars{
             color:#aaa
         }
         .rating-container .filled-stars
         {
             position:absolute;
             left:0;
             top:0;
             margin:auto;
             color:#fde16d;
             white-space:nowrap;
             overflow:hidden;
             -webkit-text-stroke:1px #777;
             text-shadow:1px 1px #999
         }
             .rating-rtl
             {
                 float:right
                 
             }
             .rating-animate .filled-stars
             {
                 transition:width .25s ease;
                 -o-transition:width .25s ease;
                 -moz-transition:width .25s ease;-webkit-transition:width .25s ease
             }
             .rating-rtl .filled-stars
             {left:auto;right:0;-moz-transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0);-webkit-transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0);-o-transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0);
             transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0)}.rating-rtl.is-star 
             .filled-stars{
                 right:.06em
                 
             }
             .rating-rtl.is-heart .empty-stars{
                 margin-right:.07em
                 
             }
             .rating-lg{
                 font-size:3.91em
                 
             }
             .rating-md{
                 font-size:3.13em
                 
             }
             .rating-sm{
                 font-size:2.5em
                 
             }
             .rating-xs{
                 font-size:2em
                 
             }
             .rating-xl{
             font-size:4.89em
                 
             }
             .rating-container .clear-rating{
                 color:#aaa;
                 cursor:not-allowed;
                 display:inline-block;
                 vertical-align:middle;
                 font-size:60%;
                 padding-right:5px
                 
             }
             .clear-rating-active{
                 cursor:pointer!important
                 
             }
             .clear-rating-active:hover{
                 color:#843534
                 
             }
             .rating-container .caption{
                 color:#999;
                 display:inline-block;
                 vertical-align:middle;
                 font-size:60%;
                 margin-top:-.6em;
                 margin-left:5px;
                 margin-right:0
                 
             }
             .rating-rtl .caption{
                 margin-right:5px;
                 margin-left:0
                 
             }
             @media print{.rating-container .clear-rating{
                 display:none
                 
             }
                 
             }





             hr.rounded {
  border-top: 8px solid #bbb;
  border-radius: 5px;
  margin-left: 200px;
}




* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column1 {
  float: left;
  width: 50%;
  padding: 10px;
 
}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}







* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column3 {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */



.recom{
  width: 300px;
  margin-left: 200px;
  padding:10px;
  margin-top:5px;
   
}
</style>
</head>
<body>
<table>
<tr>
<th>Movie's Title</th>
<th>Gener</th>
<th>Rating</th>
</tr>
<?php
include 'database.php';

$gener = "";
$rating = "";
$size = "";

if(!isset($_POST['gener']) || !isset($_POST['rating']) || !isset($_POST['size']) ){ 
   header('location:adminValidate.php');
}
else{
    $gener = $_POST['gener'];
    $rating = $_POST['rating'];
    $size = $_POST['size'];

   
    

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno())
    {
        die("cannot connect to the database".mysqli_connect_error());
    }
    $query = "SELECT * FROM movies WHERE geners = '$gener' AND password = '$pwd'";
    $query_run = mysqli_query($con,$query);
if (!empty($query_run) && $query_run->num_rows > 0){
    while($row = $query_run->fetch_assoc()) {

        echo "<tr><td>" . $row["title"]. "</td><td>" . $row["movieId"] . "</td><td>"
. $row["status"]. "</td></tr>";
   }
echo "</table>";
} 

else { 
    echo "0 results";
 }
$con->close();
?>
<br>

<form action="checkvalidate.php" method="post">
      <input type="text" placeholder="Movie ID" name="validateid" class="recom"> 
      <!-- <button type="submit">Submit<i class="fa fa-search"></i></button> -->
      <input class="btn btn-primary" type="submit" value="Validate" style="margin-left:1px">
    </form>

</table>



</body>
</html>
            
            