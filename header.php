

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    
table {
    border-collapse: collapse;
    margin: 1px;
    width: 60%;
}

th, td {
    padding: 1px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
body {
  margin: 0;
  font-family: Times New Roman, Times, serif;
/*  font-family: Arial, Helvetica, sans-serif;*/
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active_hr {
  background-color: #660099;
  color: white;
}


.topnav .icon {
  display: none;
}

@media screen and (max-width: 900px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

</style>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>-->
</head>
<body>

<div class="topnav" id="myTopnav">
  <a class="active_hr" href = "#home">HR Report</a>
  <a href="ytd_emergency.php">YTD:Leave</a>
  <a href="ytd_vacation.php">YTD:Vacation</a>
  <a href="date_range_emergency.php">DateRange:Leave</a>
  <a href="date_range_vacation.php">DateRange:Vacation</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>
