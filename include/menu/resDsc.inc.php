<?php 

    $sql = "SELECT * FROM restaurant WHERE restaurant_id = '1';";

    $res = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($res)) {
        $name = $row['name'];
        $open = $row['open_time'];
        $close = $row['close_time'];
        $cuisine = $row['cuisine'];
        $location = $row['location'];
        $rating = $row['rating'];

        ?>
        <div class="menu-info flex">
            <div id="menu-profile">
                <!-- Placeholder for CSS -->>
            </div>

            <div id="description">
                <h1><?php echo $name;?></h1>

                <div id="des">
                    <?php opStatus("Sunday, Saturday", $open, $close);?>

                    <p>Tag: <?php echo $cuisine;?></p>

                    <p>Rating: <?php echo $rating;?></p>

                    <p>Time-OPEN: <?php echo $open."AM - ".$close."PM";?></p>

                    <p>Location: <?php echo $location;?></p>
                </div>
            </div>
		</div>

        <?php
    }

?>