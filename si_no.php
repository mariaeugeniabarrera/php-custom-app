<?php

if(!empty($_POST)) {

   echo json_encode(array(
                'error' => false,
            ));
            exit;
} else {
	   echo json_encode(array(
                'error' => true,
                'msg'   => "You haven't completed all required fileds!"
            ));
            exit;
}
?>