<?php
    session_start();


    if (isset($_SESSION["id"])) {
        echo "<style type=text/css> 
                .login{visibility:hidden;}
            </style>";
    }
    else {
        echo "<style type=text/css> 
                .acclogo{visibility:hidden;}
                .submitbutton{visibility:hidden;}
            </style>";
    }
?>