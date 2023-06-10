<?php
    session_start();
    echo '<body style="background-color:#121212">';

    if (isset($_SESSION["id"])) {
        echo "<style type=text/css> 
                .login{visibility:hidden;}
            </style>";
    }
    else {
        echo "<style type=text/css> 
                .acclogo{visibility:hidden;}
                #submitbutton{visibility:hidden;}
            </style>";
    }
?>