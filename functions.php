<?php 
function single_date($sql){
    
global $connection;
  
echo "<fieldset>";   
  echo "<table>";
   echo "<thead>";
        echo "<tr>";
             $result=mysqli_query($connection, $sql);  
            
            while($field_name= mysqli_fetch_field($result)){
                  echo "<th>{$field_name->name}</th>"; 
            }
               
           
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";    


            $rows=mysqli_num_rows($result);     
            $columns=mysqli_num_fields($result); 
   
        
            while($row = mysqli_fetch_array($result)){
                   echo "<tr>";
              for($i = 0; $i < $columns; $i++){
                   echo "<td>$row[$i]</td>";  
                  }
                echo "</tr>";
             }        

       echo "</tbody>";    
  echo "</table>";    
echo "</fieldset>";
}
?>
     
