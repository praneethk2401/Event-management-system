<?php

include "../connection.php";
// Deleting the desired events by the user.
$id = $_GET["id"];
mysqli_query($data, "DELETE FROM `user_info`.`venue_booking` where `id`=$id;");
mysqli_query($data, "DELETE FROM `user_info`.`equipments` where `venue_booking_id`=$id;");
?>

<script type="text/javascript">
window.location = "profile.php";
</script>