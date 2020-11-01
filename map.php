<?php
    //if this button is clicked
    if(isset($_POST["submit_address"]))
    {
            $address = $_POST["address"];
            ?>
            //show a map with that address
            //src sends request to google
            //means the parameter => ?q
            <iframe src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed" height="500" width="100%"></iframe>
            <?php
    }
?>
<form method="POST">
        <p>
            <input type="text" name="address" placeholder="Enter address">
        </p>
        <input type="submit" name=="submit_address">
</form>

































