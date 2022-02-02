<?php
include "bpms/db_connect.php";

$userid = $_POST['userid'];

$sql = "select * from lada where id=" . $userid;
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
?>
    <img class="bd-placeholder-img" width="250" height="250" style="padding:5px" src="bpms/assets/uploads/<?php echo $row['image'] ?>" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img">
    <title>Placeholder</title>
    <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text></svg>

    <p><strong>Event Name: </strong><?php echo $row['file_name']; ?></p>
    <p><strong>Description :</strong> <?php echo $row['detail']; ?></p>
    <p><strong>Publish Date:</strong> <?php echo $row['issue_Date']; ?></p>
    <p><strong>Start Date :</strong> <?php echo $row['start_Date']; ?></p>
    <p><strong>End Date :</strong> <?php echo $row['end_Date']; ?></p>
    <p><strong>Location :</strong> <?php echo $row['file_name']; ?></p>
    <p><strong>More Info :</strong> <?php echo $row['file_code']; ?></p>



<?php } ?>