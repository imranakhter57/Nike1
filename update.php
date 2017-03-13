<?php
include('config.php');
$status=$_GET["status"];
if  ($status =="disp"){   
$res = mysqli_query($db, "select * from table1");
while ($row=  mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>";?><div id="sever_lvl<?php echo $row["s_id"]; ?>"> <?php  echo $row["sever_lvl"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div id="tckt_no<?php echo $row["s_id"]; ?>"> <?php  echo $row["tckt_no"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div id="sys_impact<?php echo $row["s_id"]; ?>"> <?php  echo $row["sys_impact"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div id="descrp<?php echo $row["s_id"]; ?>"> <?php  echo $row["descrp"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div id="open_time<?php echo $row["s_id"]; ?>"> <?php  echo $row["open_time"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div id="close_time<?php echo $row["s_id"]; ?>"> <?php  echo $row["close_time"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div id="stats<?php echo $row["s_id"]; ?>"> <?php  echo $row["stats"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div id="add_comments<?php echo $row["s_id"]; ?>"> <?php  echo $row["add_comments"]; ?></div> <?php echo "</td>";
    echo "<td>";?> <input type="button" class="side"id="delete1<?php echo $row["s_id"];?>" name="<?php echo $row["s_id"];?>" value="delete"  onclick="delete1(<?php echo $row["s_id"];?>)"><br> 
     <input type="button" class="side" id="edit1<?php echo $row["s_id"];?>" name="<?php echo $row["s_id"];?>" value="edit"  onclick="edit1(<?php echo $row["s_id"];?>)"> 
     <input type="button" class="side" id="update1<?php echo $row["s_id"];?>" name="<?php echo $row["s_id"];?>" value="update" style="visibility: hidden" onclick="update1(<?php echo $row["s_id"];?>)"> <?php echo "</td>";
    echo"</tr>";
}
}
if ($status == "update"){

    $s_id = $_GET["id"];
    $sever_lvl = $_GET["sever_lvl"];
    $tckt_no = $_GET["tckt_no"];
    $sys_impact = $_GET["sys_impact"];
    $descrp = $_GET["descrp"];
    $open_time = $_GET["open_time"];
    $close_time = $_GET["close_time"];
    $stats = $_GET["stats"];
    $add_comments = $_GET["add_comments"];
    
    $sever_lvl=trim($sever_lvl);
    $tckt_no=trim($tckt_no);
    $sys_impact=trim($sys_impact);
    $descrp=trim($descrp);
    $open_time=trim($open_time);
    $close_time=trim($close_time);
    $stats = trim($stats);
    $add_comments=trim($add_comments);
    
    $res = mysqli_query($db, "update table1 set sever_lvl='$sever_lvl', tckt_no='$tckt_no',sys_impact='$sys_impact',descrp='$descrp',open_time='$open_time',close_time='$close_time',stats='$stats',add_comments='$add_comments' where s_id='$s_id'");
    if ($res){
        echo "worked";
    }
    else{
        echo mysqli_error($db);
    }
}

if ($status=="delete"){
    $s_id = $_GET["s_id"];
    $res = mysqli_query($db, "delete from  table1 where s_id='$s_id'");
    if ($res){
        echo "worked";
    }
    else{
        echo "not worked";
        echo mysqli_error($db);
}}

if ($status == "insert"){
    $sever_lvl = mysqli_real_escape_string($db,$_GET["sever_lvl"]);
    $tckt_no = mysqli_real_escape_string($db,$_GET["tckt_no"]);
    $sys_impact = mysqli_real_escape_string($db,$_GET["sys_impact"]);
    $descrp = mysqli_real_escape_string($db,$_GET["descrp"]);
    $open_time = mysqli_real_escape_string($db,$_GET["open_time"]);
    $close_time = mysqli_real_escape_string($db,$_GET["close_time"]);
    $stats = mysqli_real_escape_string($db,$_GET["stats"]);
    $add_comments = mysqli_real_escape_string($db,$_GET["add_comments"]);

    
    $sever_lvl=trim($sever_lvl);
    $tckt_no=trim($tckt_no);
    $sys_impact=trim($sys_impact);
    $descrp=trim($descrp);
    $open_time=trim($open_time);
    $close_time=trim($close_time);
    $stats = trim($stats);
    $add_comments=trim($add_comments);
   
    $res = mysqli_query($db, "insert into table1(sever_lvl,tckt_no,sys_impact,descrp,open_time,close_time,stats,add_comments)  values('$sever_lvl','$tckt_no','$sys_impact','$descrp','$open_time','$close_time','$stats','$add_comments')");
    if ($res){
        echo "worked";
    }
    else{
        echo "not worked";
        echo mysqli_error($db);
    }
}