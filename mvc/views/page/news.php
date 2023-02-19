<h2>
    <?php
    print_r($data["SoThich"]);
    ?>
</h2>
<?php
while($row = mysqli_fetch_array($data["SV"])){
    echo $row["hoten"];
}
?>