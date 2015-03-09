<?php

    class PingPong
    {
        function returnInput($Jonathon)
        {
            $Conor = array();
            while ($Jonathon>0) {
                if ($Jonathon%3==0 && $Jonathon%5==0) {
                    array_push($Conor, 'ping-pong');
                }
                elseif ($Jonathon%5==0) {
                    array_push($Conor, 'pong');
                }
                elseif ($Jonathon%3==0) {
                    array_push($Conor, 'ping');
                }
                else {
                    array_push($Conor, $Jonathon);
                    }
                $Jonathon = $Jonathon-1;
            return $Conor;
        }
    }
}

    ?>
