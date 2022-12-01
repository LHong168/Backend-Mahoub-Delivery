<?php 

    $sql = "SELECT * FROM restaurant WHERE promotion = '1';";

    $res = mysqli_query($conn, $sql);

    echo "<h1 class='tags'>Promotion</h1>
          <hr>
          <div class='restuarant'>
          ";

    while ($row = mysqli_fetch_assoc($res)) {
        $name = $row['name'];
        $open = $row['open_time'];
        $close = $row['close_time'];
        $cuisine = $row['cuisine'];
        $location = $row['location'];
        $rating = $row['rating'];
        $promotion = $row['promotion'];
        $dsc = $row['dsc'];
        $dayOff = "Sunday, Saturday";

        ?>
            <div class="menu">
                <div id="img">
                    <a href="../subpages/menu.html" id="link-to-menu"><img src="../media/images/topaz.png"></a>
                </div>

                <div id="text">
                    <a href="../subpages/menu.html" id="link-to-menu"><h2><?php echo $name; ?></h2></a>
                    
                    <p id="rating">rating: <?php echo $rating; ?></p>
                    <?php opStatus($dayOff, $open, $close);?>
                    <p><?php echo $dsc; ?></p>
                </div>
            </div>
        <?php
    }

    echo "</div>";

?>