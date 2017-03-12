<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
   
   <head>
      <title>Welcome </title>
     <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->
      <script type="text/javascript" src="update.js"></script>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
    <table>
            <thead>
                <tr>
                    <td>service no</td>
                    <td>comments</td>
                </tr>
            </thead>
            <tbody id='table1'>
                
                <script>disp_data();</script>
            </tbody>
        </table>
      <form>
          <input type="text" id="sid1">
          <input type="text" id="ser1">
          <input type="text" id="com1">
          <input type="button" id="insert_1" name="insert_1" value="insert"  onclick="insert1()">
      </form>
<!--    <table>
            <thead>
                <tr>
                    <td>group no</td>
                    <td>comments</td>
          
                </tr>
            </thead>
            <tbody id='table2'>
                <script>disp_data('table2');</script>
            </tbody>
     </table>
            <table>
            <thead>
                <tr>
                    <td>comments</td>
        
                </tr>
            </thead>
            <tbody id='table3'>
                <script>disp_data('table3');</script>
            </tbody>
        </table>-->
   </body>
   
</html>