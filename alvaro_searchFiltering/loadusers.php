<?php
include('config.php');
?>
<table>
<tr style="background-color: green; color:white"  >
    <th style="padding:10px;" >Full Name</th>    
    <th style="padding:10px;" >Address</th>
    <th style="padding:10px;" >Town</th>
    <th style="padding:10px;" >Province</th>
    <th style="padding:10px;" >Birthdate</th>
    <th style="padding:10px;" >Gender</th> 
</tr>
<tbody>    
<?php  
    $filter = "";
    if (isset($_GET['fullname'])){
        $fullname = $_GET['fullname'];
        $filter .= "AND (firstname  like '%$fullname%' or middlename  like '%$fullname%' or lastname  like '%$fullname%')";
    }

    if (isset($_GET['address'])){
        $address = $_GET['address'];
        $filter .= " AND (address  like '%$address%' or town  like '%$address%' or province  like '%$address%')";
    }
    
    $sql_ini =  "SELECT CONCAT(firstname, ' ', middlename, ' ', lastname) as fullname, users.* from users where 1=1  $filter  order by birthdate desc;";
    // $sql_ini = "SELECT CONCAT(firstname, ' ', middlename, ' ', lastname) as fullname, users.* from users as a  where 1=1  $filter order by birthdate desc  "; 
  
   
   
    $result_ini = mysqli_query($conn,$sql_ini) or die("SQL User Fetch error".mysqli_error($conn)); 
    $rowcount_ini = mysqli_num_rows($result_ini);

    if ($rowcount_ini>=1){                                        
        while($result_iniprod = mysqli_fetch_assoc($result_ini)){                                            
?>
            <tr >                                                                       
                                                    
                                                    <td style='text-align: center; padding: 20px;'><strong><?=$result_iniprod['fullname']?></strong></td>
                                                    <td style='text-align: center; padding: 20px;'><strong><?=$result_iniprod['address']?></strong></td>                                                                                                        
                                                    <td style='text-align: center; padding: 20px;'><strong><?=$result_iniprod['town']?></strong></td>                                                                                                        
                                                    <td style='text-align: center; padding: 20px;'><strong><?=$result_iniprod['province']?></strong></td>                                                                                                        
                                                    <td style='text-align: center; padding: 20px;'><strong><?=$result_iniprod['birthdate']?></strong></td>                                                                                                        
                                                    <td style='text-align: center; padding: 20px;'><strong><?=$result_iniprod['gender']?></strong></td>
                                                    
                                                </tr>
                                                <?php } 
                                            }else{ ?>
                                                <tr><td colspan="8" align="center"><strong style="color:red">  No Record List</strong></td></tr>
                                            <?php } ?>
                                    </tbody>