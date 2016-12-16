<?php
mysql_connect('localhost','root','');
mysql_select_db('lms');

$id = $_POST['id'];

$query1 = "select paid from  transaction where t_id=$id";
// var_dump($query1);
          $result = mysql_query($query1);
          // var_dump($result);
           $num = mysql_num_rows($result);



           for ($j = 0; $j < $num; $j++) {

                $row1 = mysql_fetch_array($result);
                $pay_status = $row1['paid'];
			}
			// var_dump($pay_status);
			// die;
			if($pay_status == 0){
				        $query ="UPDATE `transaction` SET `paid`='1' WHERE `t_id`='".$id."'";
       		

          $result = mysql_query($query);
        
			} else {
        $query ="UPDATE `transaction` SET `paid`='0' WHERE `t_id`='".$id."'";
          $result = mysql_query($query);
         
			}
        echo $result;
