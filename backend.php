<?php
include("api.php");
$use = new igfind();
$lc = $_POST['sa'];
$use->userchecker($lc);
