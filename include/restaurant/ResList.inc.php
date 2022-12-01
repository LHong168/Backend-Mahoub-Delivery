<?php 

    $sql = "SELECT * FROM restaurant WHERE promotion = '0' GROUP BY cuisine;";

    $res = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($res)) {
        $cuisine = $row['cuisine'];

        echo "<h1 class='tags'>{$cuisine}</h1>";
        echo "<hr>";
        echo "<div class='restuarant'>";

        $sql1 = "SELECT * FROM restaurant WHERE promotion = '0' AND cuisine = '{$cuisine}';";
        $res1 = mysqli_query($conn, $sql1);

        while ($row1 = mysqli_fetch_assoc($res1)) {
            $name = $row1['name'];
            $open = $row1['open_time'];
            $close = $row1['close_time'];
            $cuisine = $row1['cuisine'];
            $location = $row1['location'];
            $rating = $row1['rating'];
            $promotion = $row1['promotion'];
            $dayOff = "Sunday, Saturday";
    
            ?>
                <div class="menu">
                    <div id="img">
                        <a href="../subpages/menu.php" id="link-to-menu"><img src="../media/images/topaz.png"></a>
                    </div>
    
                    <div id="text">
                        <a href="../subpages/menu.php" id="link-to-menu">
                            <h2><?php echo $name; ?></h2>
                        </a>
                        
                        <p id="rating">rating: <?php echo $rating; ?></p>
                        <?php opStatus($dayOff, $open, $close);?>
                        <p><?php echo $dsc; ?></p>
                    </div>
                </div>
            <?php
        }
    
        echo "</div>";
    }

?>