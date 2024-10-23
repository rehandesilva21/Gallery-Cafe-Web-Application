<section>
    <div class="system-user" id="system-users">
        <h1>System Users</h1>
        <input type="button" value="Add user" class="programmed-btn" onclick="addnewuser()">
        <input type="search" name="" id="search" placeholder="Search users">
        <div class="user-s-table">
            <table class="sys-user-table1">

                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email Address</th>
                    <th>User Type</th>
                    <th>Action</th>

                </tr>
                <?php
                $sql = "SELECT * FROM user";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['usertype'] ?></td>
                            <td><a href="actions/delete/del.php?userdel=<?php echo $row['username']; ?>"><i class="fa-solid fa-trash"></i></a></td>

                        </tr>
                <?php
                    }
                }
                ?>

            </table>
        </div>
        <div class="blackback" id="add-user">
            <div class="adduser-back" id="add-user-1">
                <div class="add-user">
                    <p style="cursor: pointer;" onclick="closenewuser()"><i class="fa-solid fa-xmark"></i></p>
                    <form action="actions/add/add-user.php" method="post">


                        <input type="text" placeholder="Enter Name" name="name"><br>
                        <input type="email" placeholder="Enter email" name="email">
                        <input type="text" placeholder="Enter User Name" name="username"><br>
                        <input type="password" placeholder="Enter Password" name="password"><br>
                        <select name="usertype" id="type">
                            <option value="staff">Staff</option>
                            <option value="admin">Admin</option>
                        </select>

                        <br>


                        <input type="submit" value="Submit" name="add-user">

                    </form>
                </div>
            </div>
        </div>

    </div>
</section>