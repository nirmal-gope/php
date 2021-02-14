<?php
include "includes/init.inc.php";

session_destroy();
header("Location: abonne_liste.php");
exit;