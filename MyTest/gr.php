<?php

$users = [
    array("firstname" => "Maksim", "last_name" => "Kotlyar", "logo" => "1", "birthdate" => "22-01-1896"),
    ];

$aa = $users[0];
echo "$aa[firstname]";
var_dump($users);


/*echo "
<table>
<tr>
<td> $users[0]['logo'] </td>
<td> $users[0]['first_name'] <br />
$users[0]['last_name']
</td>
<td> $users[0]['birthdate']</td>
</tr>
</table>";

?>
*/