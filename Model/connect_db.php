<?php
    class clsconnect{
            function connect(& $connect){
                $servername = "192.168.2.26";#đổi thành localhost ở đây và file config
                $username = "ltechshop";    #root
                $password = "123Legend*"; #mâtj khẩu để trống
                $connect = mysql_connect("".$servername."","".$username."","".$password."");
                mysql_set_charset("UTF8");
                if($connect){
                    return mysql_select_db("ltechshop"); #database mình tự import
                }else{
                    return false;
                }
        }
        function disconnect($connect){
            mysql_close($connect);
        }
    }
?>