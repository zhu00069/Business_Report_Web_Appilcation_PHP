<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php include "header.php"; ?>



<h3>Date Range For Emergency Leave</h3>
<!--<h3><?php if(isset($_POST['range'])){echo $_POST["From"];?> - <?php echo $_POST["to"];}?></h3>-->


<!--form select option-->
<form action="" name = "input_date" method ="POST">

         <span>
               <label for="date range"> Date: </label>
         </span>
         <span>
               <input type="text" name="From" id="From" class="form-control" placeholder="From Date" />
         </span>
         
         <span>
               <input type="text" name="to" id="to" class="form-control" placeholder="To Date" />   
         </span>
         
         <span>
               <input type="submit" name="date_range" id="range" value="Show Report" />
         </span>
</form>

<?php
if (isset($_POST['date_range'])) {
    
   
                $date_from       = $_POST['From'];
                $date_to         = $_POST['to'];
                $date_detail_from= date("D F j, Y", strtotime($date_from));
                $date_detail_to  = date("D F j, Y", strtotime($date_to));
    
                echo "<h3>$date_detail_from - $date_detail_to</h3>";

       
         
        $sql = "SELECT barbers.FirstName, barbers.LastName, hours.Date AS Emergency_Leave_Date
FROM hours INNER JOIN barbers ON hours.BarberID = barbers.code
WHERE hours.type =3 AND hours.Date BETWEEN '$date_from' AND '$date_to'
GROUP BY barbers.FirstName, barbers.LastName, hours.Date ORDER BY barbers.FirstName, barbers.LastName";
  
single_date($sql);
echo "<br>";
        

         $sql = "SELECT barbers.FirstName, barbers.LastName, Count(hours.Date) AS Sum_Emergency_Leave
FROM hours INNER JOIN barbers ON hours.BarberID = barbers.code
WHERE hours.type =3 AND hours.Date BETWEEN '$date_from' AND '$date_to'
GROUP BY barbers.FirstName, barbers.LastName";
   
single_date($sql);
    

}else{
    echo "Please select date range.";
}

?>
