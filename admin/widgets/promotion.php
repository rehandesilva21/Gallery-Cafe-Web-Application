<section>
            <div class="promotions" id="promotions">
                <h1>Promotions</h1>
                <input type="button" value="Add a new promotion" class= "programmed-btn" onclick="addnewpromo()">
                <div class="promo-table">
                    <table class="promo-table1">
                
                        <tr>
                            <th>Start Date</th>
                            <th>Promotion Name</th>
                            <th>Promotion Description</th>
                            <th>End Date</th>
                            <th>Actions</th>
                            
                        </tr>
                        <?php 
                        $sqlprom = "SELECT * FROM promotion ";
                        $resultprom = mysqli_query($conn, $sqlprom) or die(mysqli_error($conn));
    
                        while ($rowprom = mysqli_fetch_assoc($resultprom)) {
                            // promotion`(`name`, `description`, `startDate`, `endDate`, `image`
                            $name = $rowprom["name"];
                            $des = $rowprom["description"];
                            $startDate = $rowprom["startDate"];
                            $endDate = $rowprom["endDate"];
                            ?>
                            <tr>
                                <td><?php echo $startDate ?></td>
                                <td><?php echo $name ?></td>
                                <td><?php echo $des ?></td>
                                <td><?php echo $endDate ?></td>
                                <td class="actions"><a href="<?php echo SITEURL ?>admin/actions/delete/del.php?promdel=<?php echo $name ?>"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                            <?php
                        }
                    
                    ?>
                        <!-- <tr>
                            <td>Namelorem ipsum</td>
                            <td>Name lorem ipsum</td>
                            <td>Name lorem ipsum</td>
                            <td>Name lorem ipsum</td>
                        </tr> -->
                    </table>
              </div>
              <div class="blackback1" id="add-promo">
                <div class="addpromo-back" id ="add-promo-1">
                <div class="add-promotion">
                    <p style="cursor: pointer;" onclick="closenewpromo()"><i class="fa-solid fa-xmark"></i></p>
                    <form action="actions/add/add-promotion.php" method="post" enctype = "multipart/form-data">
                        <label>Start Date</label>
                        <input type="date" placeholder="Enter Date" name="start">
                        <input type="text" placeholder="Enter Promotion Name" name="name">
                        <input type="text" placeholder="Enter Promotion Description" name="des">
                        <label>End Date</label>
                        <input type="date" placeholder="Enter Date" name="end"><br>
                        
                        <input type="file" name="image" id="" title="Add Your Category Image"><br>
                        <input type="submit" name="add-promo" value="Submit">
                           
                    </form>
                </div>
                </div>
                </div>
              
         </section>