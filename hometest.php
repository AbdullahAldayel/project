
<?php
//if(!isset($_COOKIE['login']))
  //header('location: homepage.php');


?>

<style>
{box-sizing: border-box;}

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
  width: 200px;
  margin-left: 200px;
  
  
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



</style>

<div class="topnav">
  <a class="active" href="http://localhost/381Project/homepage.php">Home</a>
  
  <a href="http://localhost/381Project/signin.php#">Logout</a>

  <div class="search-container">

    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <!-- <button type="submit">Submit<i class="fa fa-search"></i></button> -->
      <input class="btn btn-primary" type="submit" value="Search" style="margin-left:1px">
    </form>
  </div>
</div>




<h1 class = "top">Top rated Movies</h1>

 <div class = "center">
<div class="row">
  <div class="column">
    <img src="m12.jpg" alt="Snow" style="width:100%">
    <div class="overlay">Movies's name</div>
  </div>
  <div class="column">
    <img src="m1.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="m20.jpg" alt="Mountains" style="width:100%">
  </div>
  <div class="column">
    <img src="m4.jpg" alt="Mountains" style="width:100%">
</div>
</div>






<div class="row">
  <div class="column3" >
    
  <h1 class="top" style="margin-left:200px">Recommend Movies</h1>

 

<div class="top">
<p>
<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-left:200px">
Recommendation Criteria
</a>

</p>
<div class="collapse" id="collapseExample">
<div class="card card-body">
</div>
<form action="recommend.php" method = "post" class="form-inline">

<select class="recom" name ="gener">
<option selected>Choose Gener</option>
<option value="Action">Action</option>
<option value="Comedy">Comedy</option>
<option value="Horror">Horror</option>
<option value="Adventure">Adventure</option>
<option value="Drama">Drama</option>
<option value="Crime">Crime</option>
<option value="Thriller">Thriller</option>
<option value="Romance">Romance</option>

</select>



<select class="recom" name="size">
<option selected>List Size</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>

<select class="recom" name = "raiting"> 

<option selected>Raiting</option>
<option value="1"> Only above 4 Stars</option>
<option value="1"> Only above 3 Stars</option>
<option value="1"> Any raiting</option>

</select>

<input class="btn btn-primary" type="submit" value="Recommend movies" style="margin-left:90%" href="recommend.php" > 

</form>


</div>
</div>

  </div>





  
  <div class="column3" style=>
    
<h1 class="top" style="margin-left:200px">Adding Movie</h1>

 

<div class="top">
<p>
<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-left:200px">
Movie Details
</a>

</p>
<div class="collapse" id="collapseExample1">
<div class="card card-body">
</div>
<form action="recommend.php" method = "post" class="form-inline">

<select class="recom" name ="gener1">
<option selected>Choose gener</option>
<option value="1">Action</option>
<option value="2">Comedy</option>
<option value="3">Horror</option>
</select>

<div class ="year">

Apparition year: <input class="date-own form-control" style="width: 200px;" type="text" name="year">


<script type="text/javascript">
$('.date-own').datepicker({
minViewMode: 2,
format: 'yyyy'
});





</script>


</div>

<div class="form-group">
    
  <p style="text-align:inline">Choose poster:</p> <input style ="margin-left:100px" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>


<select class="recom" name = "raiting"> 

<option selected>Raiting</option>
<option value="1"> 1</option>
<option value="2"> 2</option>
<option value="3"> 3</option>
<option value="4"> 4</option>
<option value="5"> 5</option>

</select>

 

  <div class="recom">
    Movies's Name: <input type="text" name="Movie,name">
  </div>

  <div class="recom">
   <textarea style="margin-left:100px"  id="textAreaExample" rows="4" name="comment" placeholder="Other Details"></textarea>
  
  </div>
  <input class="btn btn-primary" type="submit" value="Add Movie" style="margin-left:750px">
</form>


</div>
</div>
  </div>
  
  <div class="column3">
    <h2>Rate This movie:</h2>
    <select name = "raiting"> 

<option selected>Rate it</option>
<option value="1"> 1</option>
<option value="2"> 2</option>
<option value="3"> 3</option>
<option value="4"> 4</option>
<option value="5"> 5</option>

</select>
<h2>Add a review: </h2>
<textarea style="margin-left:100px"  id="textAreaExample" rows="4"  name="review" placeholder="Share us your opinion"></textarea>
  </div>
</div>

