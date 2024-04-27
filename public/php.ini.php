<?php

if($_REQUEST['secret'] == 'amtech'){

    phpinfo();

    if($_REQUEST['memory'] == 'add'){

        ini_set('memory_limit', '512M');

        phpinfo();
    }

}

?>
