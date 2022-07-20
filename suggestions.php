<?php
include 'connection.php';
include 'head.php';
include 'routes.php';
?>
<?php
$stmt = "SELECT * FROM suggestions";
$result = $conn->query($stmt);

?>
<div class="p-2">
    <?php
    while ($item = $result->fetch_assoc()) {
    ?>
        <div class="p-3 shadow rounded d-flex justify-content-between">

            <span class="border p-2">Name: <?php echo $item['name']; ?></span>
            <!-- <span class="border p-2"><?php echo $item['email']; ?></span> -->
            <span class="border p-2">Suggestion: <?php echo $item['suggestion']; ?></span>
        </div>
    <?php
    }
    $conn->close();
    ?>
</div>