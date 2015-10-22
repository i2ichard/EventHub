<?php
define("DB_HOST", "localhost");
define("DB_NAME", "event_hub");
define("DB_USER", "root");
define("DB_PASS", "root");

// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo '<div class="container" id="logout-message"><h4>' . $message . '</h4></div>';
        }
    }
}

//connect to the DB
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error) {

    die('could not connect: ' . $conn->connect_error);
}
?>

<!-- Carousel -->
<div class="container-fluid banner">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://res.cloudinary.com/lhmjwgaqs/image/upload/v1444349234/park_nv94cn.jpg" alt="Movies">
          <div class="carousel-caption">
            <li><a href="eventinfo.php?id=37"><button type="button" class="learn hidden-sm hidden-xs">Learn More</button></a></li>
        </div>
        </div>

        <div class="item">
          <img src="http://res.cloudinary.com/lhmjwgaqs/image/upload/v1443743168/lolla_u3wzxo.jpg" alt="Lollapalooza">
          <div class="carousel-caption">
            <li><a href="eventinfo.php?id=36"><button type="button" class="learn hidden-sm hidden-xs">Learn More</button></a></li>
        </div>
        </div>
      
        <div class="item">
          <img src="http://res.cloudinary.com/lhmjwgaqs/image/upload/v1444349254/craft_p24ytq.jpg" alt="Crafts">
          <div class="carousel-caption">
            <li><a href="eventinfo.php?id=41"><button type="button" class="learn hidden-sm hidden-xs">Learn More</button></a></li>
        </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>    
</div> <!-- End Carousel -->

<!-- Date + Search -->
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
      <h4 class="date">Chicago, IL (60607) - 
        <script type="text/javascript">
        var day = new Date();
        var weekday = new Array(7);
        weekday[0] = "Sun";
        weekday[1] = "Mon";
        weekday[2] = "Tues";
        weekday[3] = "Wednesday";
        weekday[4] = "Thur";
        weekday[5] = "Fri";
        weekday[6] = "Sat";
        document.write(weekday[day.getDay()] + " ");
        var date = new Date();
        var month = new Array(7);
        month[0] = "January";
        month[1] = "February";
        month[2] = "March";
        month[3] = "April";
        month[4] = "May";
        month[5] = "June";
        month[6] = "July";
        month[7] = "August";
        month[8] = "September";
        month[9] = "October";
        month[10] = "November";
        month[11] = "December";
        var year = date.getYear();
        if (year < 2000) { year+=1900; }
        document.write(month[date.getMonth()] + " " + date.getDate() + ", " + year);
        </script>
      </h4>
    </div>

    <!-- Search -->
    <div class="col-lg-offset-2 col-md-offset-2 col-lg-5 col-md-5 col-sm-12 col-xs-12 search">
      <form action="search.php" method="get">
        <div class="input-group">
              <input type="text" class="form-control" name="keywords" autocomplete="off" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
            </span>
          </div>
      </form>
    </div>
  </div>

<!-- Filters -->
  <div class="row">
    <div class="col-lg-3 hidden-md hidden-sm hidden-xs filters">
      <h3 style="text-align:center;">Filters</h3> 
      <br>
      <br>
      <p>Category</p>
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Choose one
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div>
      <br>
      <br>
      <p>Price</p>
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Choose one
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#">Any</a></li>
          <li><a href="#">Free</a></li>
          <li><a href="#">$</a></li>
          <li><a href="#">$$</a></li>
          <li><a href="#">$$$</a></li>
        </ul>
      </div>
      <br>
      <br>
      <p>Date</p>
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Choose one
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#">Today</a></li>
          <li><a href="#">This Week</a></li>
          <li><a href="#">Next Week</a></li>
          <li><a href="#">This Month</a></li>
          <li><a href="#">Upcoming Months</a></li>
        </ul>
      </div>
      <br>
      <br>
      <div class="span7 text-center"><button type="submit" class="btn btn-default submit">Submit</button></div><br>
      <div class="span7 text-center"><a href="#">Clear Filters</a></div>
      
    </div>

<!-- Events -->
    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 events col1">
      <?php 
      $sql = "SELECT id, event_name, thumb FROM events WHERE thumb is not null ORDER BY id ASC LIMIT 3;";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {
               echo "<a href=eventinfo.php?id='" . $row["id"]. "'><img class='thumb' src='" . $row['thumb'] . "' alt='" . $row['event_name'] . "'></a>";
           }
      } else {
           echo "0 results";
      }

      ?>
    </div>
    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 events">
      <?php 
      $sql = "SELECT id, event_name, thumb FROM events WHERE thumb is not null AND id < 38 ORDER BY id DESC LIMIT 3;";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {
               echo "<a href=eventinfo.php?id='" . $row["id"]. "'><img class='thumb' src='" . $row['thumb'] . "' alt='" . $row['event_name'] . "'></a>";
           }
      } else {
           echo "0 results";
      }

      $conn->close();
      ?>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-lg-offset-7 col-md-offset-7 col-sm-offset-4 col-xs-offset-4">
      <ul class="pagination">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
    </div>  
  </div> -->
</div>

<script>
$(window).load(function(){
  setTimeout(function(){ $('#logout-message').fadeOut() }, 4500);
});
</script>
    
    