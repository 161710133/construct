<?php

require_once 'robot.php';

$robot1 = new robot('ngik ngik ngok',20);
$robot2 = new robot('titut titut',30);

$robot1->set_berat(40);
echo "Bunyinya...".$robot1->get_suara().'&nbsp'."beratnya..".$robot1->get_berat().'<br>';

echo "Bunyinya...".$robot2->get_suara().'&nbsp'."beratnya..".$robot2->get_berat().'<br>';
?>