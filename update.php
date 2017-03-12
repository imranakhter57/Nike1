<?php
include('config.php');
$status=$_GET["status"];
if  ($status =="disp"){   
$res = mysqli_query($db, "select * from table1");
while ($row=  mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>";?><div id="service<?php echo $row["s_id"]; ?>"> <?php  echo $row["service_no"]; ?></div> <?php echo "</td>";
    echo "<td>";?><div id="comments<?php echo $row["s_id"]; ?>"> <?php  echo $row["comments"]; ?></div> <?php echo "</td>";
    echo "<td>";?> <input type="button" id="delete1<?php echo $row["s_id"];?>" name="<?php echo $row["s_id"];?>" value="delete"  onclick="delete1(<?php echo $row["s_id"];?>)"> <?php echo "</td";
    echo "<td>";?> <input type="button" id="edit1<?php echo $row["s_id"];?>" name="<?php echo $row["s_id"];?>" value="edit"  onclick="edit1(<?php echo $row["s_id"];?>)">  <?php echo "</td";
    echo "<td>";?> <input type="button" id="update1<?php echo $row["s_id"];?>" name="<?php echo $row["s_id"];?>" value="update" style="visibility: hidden" onclick="update1(<?php echo $row["s_id"];?>)"> <?php echo "</td";
    echo"</tr>";
}
}
if ($status == "update"){

    $id = $_GET["id"];
    $service = $_GET["service"];
    $comment = $_GET["comments"];
    
    $service=trim($service);
    $comment=trim($comment);
    
    $res = mysqli_query($db, "update table1 set service_no='$service', comments='$comment' where s_id='$id'");
    if ($res){
        echo "worked";
    }
    else{
        echo mysqli_error($db);
    }
}

if ($status=="delete"){
    $id = $_GET["id"];
    
    $res = mysqli_query($db, "delete from  table1 where s_id='$id'");
    if ($res){
        echo "worked";
    }
    else{
        echo mysqli_error($db);
}}

if ($status == "insert"){

   $id = mysqli_real_escape_string($db, $_GET['id']);
   $service = mysqli_real_escape_string($db, $_GET['service']);
   $comments = mysqli_real_escape_string($db, $_GET['comments']);
    
    $service=trim($service);
    $comments=trim($comments);
   
    $res = mysqli_query($db, "insert into table1(s_id,service_no,comments)  values('$id','$service','$comments')");
    if ($res){
        echo "worked";
    }
    else{
        echo mysqli_error($db);
    }
}