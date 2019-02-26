

<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php include "header.php"; ?>


<!--get current year and current date-->
<?php 
$sql_year_begin   = "SELECT DATE_FORMAT(MAKEDATE(EXTRACT(YEAR FROM CURDATE()),1),'%Y%m%d')";
$sql_current_date = "SELECT DATE_FORMAT(CURDATE(),'%Y%m%d')";
$result_1         = mysqli_query($connection, $sql_year_begin);
$result_2         = mysqli_query($connection, $sql_current_date);
$row_year         = mysqli_fetch_row($result_1);
$row_curr         = mysqli_fetch_row($result_2);   

$year_begin       = $row_year[0];
$current_date     = $row_curr[0];
$start_date_detail = date("D F j, Y", strtotime($year_begin));
$end_date_detail   = date("D F j, Y", strtotime($current_date));

?>

<h3>YTD For Vacation: <?php echo $start_date_detail; ?> -  <?php echo $end_date_detail;?></h3>


<?php 
       $sql = "SELECT barbers.FirstName, barbers.LastName, hours.date AS Vacation_Date
FROM hours INNER JOIN barbers ON hours.BarberID = barbers.code
WHERE hours.type = 1 AND hours.date Between '$year_begin' AND '$current_date'
GROUP BY barbers.FirstName, barbers.LastName, hours.date ORDER BY barbers.FirstName, barbers.LastName";
            
             
single_date($sql);
echo "<br>";

       
      $sql = "SELECT barbers.FirstName, barbers.LastName, Count(hours.Date) AS Sum_Vacation
FROM hours INNER JOIN barbers ON hours.BarberID = barbers.code
WHERE hours.type = 1 AND hours.date Between '$year_begin' AND '$current_date'
GROUP BY barbers.FirstName, barbers.LastName";

single_date($sql);


?> 


