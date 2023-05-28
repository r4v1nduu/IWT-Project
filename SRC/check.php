<?php
    session_start();


    if (isset($_SESSION["id"])) {
        echo "<style type=text/css> 
                .login{display:none;}
                .acclogo{display:block;}
            </style>";
        
    }
    else {
        echo "<style type=text/css> 
                .login{display:flex;}
                .acclogo{display:none;}
            </style>";
    }
?>