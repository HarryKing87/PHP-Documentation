<?php
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
  echo("$ip is a valid IPv6 address");
} else {
  echo("$ip is not a valid IPv6 address");
}

$IP = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (filter_var($IP, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    echo "CORRECT!";
} else {
    echo "NOT VALID!";
}
?>

