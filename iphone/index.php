<?php
$_SESSION['switch'] = $_GET['switch'];
if ($_GET['pat'] == "a") {
    include_once('./index_a.php');
} elseif ($_GET['pat'] == "b") {
    include_once('./index_b.php');
} elseif ($_GET['pat'] == "c") {
    include_once('./index_c.php');
} elseif ($_GET['pat'] == "d") {
    include_once('./index_d.php');
} elseif ($_GET['pat'] == "e") {
    include_once('./index_e.php');
} elseif ($_GET['pat'] == "f") {
    include_once('./index_f.php');
} elseif ($_GET['pat'] == "g") {
    include_once('./index_g.php');
} elseif ($_GET['pat'] == "h") {
    include_once('./index_h.php');
} else {
    include_once('./index_a.php');
}
