<?php
include('config.php');
$status=$_GET["status"];
if  ($status =="disp"){   
$res = mysqli_query($db, "select * from table3");
while ($row=  mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>";?><div  id="grp<?php echo $row["g_id"]; ?>"> <?php  echo $row["grp"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div  id="sys_details<?php echo $row["g_id"]; ?>"> <?php  echo $row["sys_details"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div  id="alert_count<?php echo $row["g_id"]; ?>"> <?php  echo $row["alert_count"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div  id="action_plan<?php echo $row["g_id"]; ?>"> <?php  echo $row["action_plan"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div  id="eta<?php echo $row["g_id"]; ?>"> <?php  echo $row["eta"]; ?></div> <?php echo "</td>";
    echo "<td>";?> <input type="button" class="side"id="delete3<?php echo $row["g_id"];?>" name="<?php echo $row["g_id"];?>" value="delete"  onclick="delete3(<?php echo $row["g_id"];?>)"><br> 
     <input type="button" class="side" id="edit3<?php echo $row["g_id"];?>" name="<?php echo $row["g_id"];?>" value="edit"  onclick="edit3(<?php echo $row["g_id"];?>)"> 
     <input type="button" class="side" id="update3<?php echo $row["g_id"];?>" name="<?php echo $row["g_id"];?>" value="update" style="visibility: hidden" onclick="update3(<?php echo $row["g_id"];?>)"> <?php echo "</td>";
    echo"</tr>";
}
}
if ($status == "update"){

    $g_id = $_GET["id"];
    $grp = $_GET["grp"];
    $sys_details = $_GET["sys_details"];
    $alert_count = $_GET["alert_count"];
    $action_plan = $_GET["action_plan"];
    $eta = $_GET["eta"];

    
    $grp=trim($grp);
    $sys_details=trim($sys_details);
    $alert_count=trim($alert_count);
    $action_plan=trim($action_plan);
    $eta=trim($eta);
    
        
    $res = mysqli_query($db, "update table3 set grp='$grp',sys_details='$sys_details',alert_count='$alert_count',action_plan='$action_plan',eta='$eta' where g_id='$g_id'");
    if ($res){
        echo "worked";
    }
    else{
        echo mysqli_error($db);
    }
}

if ($status=="delete"){
    $g_id = $_GET["g_id"];
    $res = mysqli_query($db, "delete from  table3 where g_id='$g_id'");
    if ($res){
        echo "worked";
    }
    else{
        echo "not worked";
        echo mysqli_error($db);
}}

if ($status == "insert"){
    $grp = mysqli_real_escape_string($db,$_GET["grp"]);
    $sys_details = mysqli_real_escape_string($db,$_GET["sys_details"]);
    $alert_count = mysqli_real_escape_string($db,$_GET["alert_count"]);
    $action_plan = mysqli_real_escape_string($db,$_GET["action_plan"]);
    $eta = mysqli_real_escape_string($db,$_GET["eta"]);
   

    
    $grp=trim($grp);
    $sys_details=trim($sys_details);
    $alert_count=trim($alert_count);
    $action_plan=trim($action_plan);
    $eta=trim($eta);
    
   
    $res = mysqli_query($db, "insert into table3(grp,sys_details,alert_count,action_plan,eta)  values('$grp','$sys_details','$alert_count','$action_plan','$eta')");
    if ($res){
        echo "worked";
    }
    else{
        echo "not worked";
        echo mysqli_error($db);
    }
}