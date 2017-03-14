<?php
session_start();
include('config.php');
$status=$_GET["status"];
if  ($status =="disp"){   
$res = mysqli_query($db, "select * from table2");
while ($row=  mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>";?> <div  id="add_events<?php echo $row["e_id"]; ?>"> &bull; &nbsp;<?php  echo $row["add_events"]; ?></div> <?php echo "</td>";
    if ($_SESSION['admin'] == 1) {echo "<td>";?> <input type="button" class="side"id="delete2<?php echo $row["e_id"];?>" name="<?php echo $row["e_id"];?>" value="delete"  onclick="delete2(<?php echo $row["e_id"];?>)"><br> 
     <input type="button" class="side" id="edit2<?php echo $row["e_id"];?>" name="<?php echo $row["e_id"];?>" value="edit"  onclick="edit2(<?php echo $row["e_id"];?>)"> 
    <input type="button" class="side" id="update2<?php echo $row["e_id"];?>" name="<?php echo $row["e_id"];?>" value="update" style="visibility: hidden" onclick="update2(<?php echo $row["e_id"];?>)"> <?php echo "</td>";}
    echo"</tr>";
}
}
if ($status == "update"){

    $e_id = $_GET["id"];
    $add_events = $_GET["add_events"];

    
    $add_events=trim($add_events);
        
    $res = mysqli_query($db, "update table2 set add_events='$add_events' where e_id='$e_id'");
    if ($res){
        echo "worked";
    }
    else{
        echo mysqli_error($db);
    }
}

if ($status=="delete"){
    $e_id = $_GET["e_id"];
    $res = mysqli_query($db, "delete from  table2 where e_id='$e_id'");
    if ($res){
        echo "worked";
    }
    else{
        echo "not worked";
        echo mysqli_error($db);
}}

if ($status == "insert"){
    $add_events = mysqli_real_escape_string($db,$_GET["add_events"]);
   

    
    $add_events=trim($add_events);
    
   
    $res = mysqli_query($db, "insert into table2(add_events)  values('$add_events')");
    if ($res){
        echo "worked";
    }
    else{
        echo "not worked";
        echo mysqli_error($db);
    }
}