<?php

    $sql = "SELECT section FROM product WHERE menu_id = '1' GROUP BY section;";

    //Execute the Query
    $res = mysqli_query($conn, $sql);

    //Count Rows
    $count = mysqli_num_rows($res);

    $array = array();
    //CHeck whether categories available or not
    if($count>0) {
        //CAtegories Available
        while($row = mysqli_fetch_assoc($res)) {

            $section = $row['section'];

            echo "<h2>{$section}</h2>";
            echo "<div class='itemFlex'>";

            $sql1 = "SELECT * FROM product WHERE section = '{$section}';";
            $res1 = mysqli_query($conn, $sql1);

            while($row1 = mysqli_fetch_assoc($res1)) {

                $id = $row1['item_id'];
                $img = $row1['img'];
                $name = $row1['name'];
                $dsc = $row1['dsc'];
                $price = $row1['price'];
                $img = $row1['img'];

                array_push($array, array($id, $name, $price, 0));

                ?>
                    <div id="Item">
                        <?php echo'<img src="../media/images/menupage/'.$img.'">'?>

                        <div id="item-info">
                            <h2><?php echo $name; ?></h2>
                            <p id="desc"><?php echo $dsc; ?></p>
                        </div>

                        <div id="add">
                            <p>Price: <?php echo $price; ?></p>
                            <button onclick="calFunction(<?php echo $id;?>)">Add</button>
                        </div>
                    </div>

                <?php


            }

            echo "</div>";
        }
    }
    else {
        //CAtegories Not Available
        echo "<div>Category not found.</div>";
    }
?>

<script>
        var arr = <?php echo json_encode($array); ?>;
        const Menu = Object.assign({}, arr);
        console.log(Menu);
</script>