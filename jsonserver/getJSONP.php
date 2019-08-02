<?php
  //SERVER SIDE
  /** 
    JSONP success story , request with callback 
   *url :  http://localhost/jsonp/getJSONP.php?callback=123
   response : 
   123({'fullname' : 'jithu majinu' , 'color' : 'green'})
   */
 
   /** 
    JSONP failure story , request without callback 
   *url :  http://localhost/jsonp/getJSONP.php
   response : 
   ({'fullname' : 'jithu majinu' , 'color' : 'green'})
   */
   
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method
    }else{	
         if (isset($_GET['callback'])) {
            echo $_GET['callback'] . '(' . "{'fullname' : 'jithu majinu' , 'color' : 'red'}" . ')';
         }
		 else{
             echo '(' . "{'fullname' : 'jithu majinu','color' : 'green'}" . ')';
		 }		 
		 		
	}
?>

