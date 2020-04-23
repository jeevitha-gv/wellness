<?php
include "../php/common/config.php";

$query = "SELECT likelihood as x, impact as y, likelihood*impact as heat FROM wellness WHERE likelihood=impact IS NOT NULL ORDER BY likelihood,impact";

$result = mysqli_query($link,$query);
// print_r($result);
$emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
      echo json_encode($emparray);

?>