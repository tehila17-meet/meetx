<?php
 if(isset($_POST['submit']))
    {
    $pwd = $_POST['pwd'];

    $real_pwd = "123";


    if($pwd == $real_pwd){
		echo "<script>
                    window.location = '127.0.0.1:5000/home;


                </script>";
    }
    else{
    	echo "<script>
                    alert('Wrong pwd');
                     window.location = '127.0.0.1:5000/';

                </script>";

    }




   }

?>