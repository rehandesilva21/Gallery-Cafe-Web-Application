<section>
    <div class="events" id="events">
        <h1>Events</h1>
        <input type="button" value="Add a new Event" class="programmed-btn" onclick="addnewevent() ">
        <div class="event-table">
            <table class="event-table1">

                <tr>
                    <th>Event Date</th>
                    <th>Event Time</th>
                    <th>Event Name</th>
                    <th>Event Description</th>
                    <th>Actions</th>

                </tr>
                <?php 
                        $sqlprom = "SELECT * FROM event ";
                        $resultprom = mysqli_query($conn, $sqlprom) or die(mysqli_error($conn));
    
                        while ($rowprom = mysqli_fetch_assoc($resultprom)) {
                            // event`(`name`, `description`, `startDate`, `startTime`, `image`
                            $name = $rowprom["name"];
                            $des = $rowprom["description"];
                            $startDate = $rowprom["startDate"];
                            $startTime = $rowprom["startTime"];
                            ?>
                            <tr>
                                <td><?php echo $startDate ?></td>
                                <td><?php echo $startTime ?></td>
                                <td><?php echo $name ?></td>
                                <td><?php echo $des ?></td>
                                <td class="actions"><a href="<?php echo SITEURL ?>admin/actions/delete/del.php?evedel=<?php echo $name ?>"><i class="fa-solid fa-trash"></i></a></td>
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
        <div class="blackback2" id="add-event">
            <div class="addevent-back" id="add-event-1">
                <div class="add-event">
                    <p style="cursor: pointer;" onclick="closenewevent()"><i class="fa-solid fa-xmark"></i></p>
                    <form action="actions/add/add-events.php" method="post" enctype = "multipart/form-data">
                        <label>Event Date</label>
                        <input type="date" placeholder="Enter Date" name="date">
                        <label>Event Time </label>
                        <input type="time" placeholder="Enter Date" name="time">
                        <input type="text" placeholder="Enter Event Name" name="name">
                        <input type="text" placeholder="Enter Event Description" name="des">
                        <br>
                        <input type="file" name="image" id="" title="Add Your Category Image" ><br>
                        <input type="submit" value="Submit" name="add-event">

                    </form>
                </div>
            </div>
        </div>
</section>