
    <?php
    if (isset($_SESSION['email']) AND (isset($_SESSION['email']) == "subrota45278@gmail.com")) {
        if (isset($_REQUEST['updated'])) {
            echo "<h4 style='color:blue;'  > Your data is updated. </h4>";
        }
        //delete message
        if (isset($_REQUEST['deleted'])) {
            echo "<h4 style='color:blue;'  > Your data is deleted. </h4>";
        }
        ?><br>
        <table class="table table-border table-hover animate fadeUp" id="table">
            <?php
            //show users
            require_once("./db/db.php");
            $sql2 = "SELECT * FROM users limit 2";
            $query2 = mysqli_query($con, $sql2);
            $count = mysqli_num_rows($query2);
            if ($count == true) {
                while ($row = mysqli_fetch_array($query2)) {
                    ?>
                    <?php
                }
            }

            //show users end 
        
            if (isset($_REQUEST['update'])) {
                echo " <h2 style='color:gree;'> You are successfull to update your data. </h2>";
            }

            $limit = 6;
            if (isset($_GET['page_number'])) {
                $page_number = $_GET['page_number'];

            } else {
                $page_number = 1;
            }
            $offset = ($page_number - 1) * $limit;
            $query = "SELECT * FROM users LIMIT   {$offset} , {$limit}";
            $result = mysqli_query($con, $query);
            $row_count = mysqli_num_rows($result);
            if ($row_count > 0) {
                ?>
                <thead class="bg-dark" style="color:yellow;">
                    <tr>
                        <th>Serial Number </th>
                        <th> ID </th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th> Email</th>
                        <th> Profile </th>
                        <th>Joining date </th>
                        <th>Action</th>
                    </tr>


                </thead>
                <?php
                $serial = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['user_id'];
                    $fname = $row['first_name'];
                    $lname = $row['last_name'];
                    $email = $row['email'];
                    $profile = $row['profile'];
                    $data_time = $row['date_time'];
                    $serial++;
                    ?>


                    <tbody class="text-success">
                        <tr>

                            <td>
                                <?php echo $serial; ?>
                            </td>
                            <td>
                                <?php echo $id; ?>
                            </td>
                            <td>
                                <?php echo $fname; ?>
                            </td>

                            <td>
                                <?php echo $lname; ?>
                            </td>
                            <td>
                                <?php echo $email; ?>
                            </td>
                            <td>
                              <img src="./images/users/<?php echo $profile ; ?>" alt="<?php echo $fname; ?>" class="user_profile" />
                            </td>
                            <td>
                                <?php echo $data_time; ?>
                            </td>
                            <td colspan="2">
                            <a href="./back-end/users/delete_user.php?delete_id=<?php echo $id; ?>&&profile_name=<?php echo $profile ; ?>"  
                            target="_blank" rel="noopener noreferrer"
                            onclick="return confirm('Are you want to delete this data ? Note: you can not recover this data after deleted!!')"
                             title="Are you want to delete this data ??">
                            <i class="fa-sharp fa-solid fa-trash text-danger mx-2 fs-4"></i>
                            </a>
                            <a href="./back-end/users/edit_user.php?edit_id=<?php echo $id; ?>">
                            <i class="fa-sharp fa-solid fa-edit text-info mx-2 fs-4"></i>
                            </a>
                            </td>
                        </tr>
                    </tbody>

                    <?php
                }
            }

            ?>


        </table>
        </form>
        </center>

        <?php
        require_once("./db/db.php");
        $pag_sql = "SELECT * FROM users";
        $pag_query = mysqli_query($con, $pag_sql);
        $page_count = mysqli_num_rows($pag_query);
        if ($page_count == true) {
            $total_record = $page_count;
            $total_page = ceil($total_record / $limit);
            ?>
            <center>

                <?php
                if ($page_number > 1) {
                    echo '   <li class="btn btn-success"> <a href="users_info.php?page_number=' . ($page_number - 1) . '"  class="text-decoration-none text-white"> Prev </a> </li>';

                }

                echo "&nbsp&nbsp";
                for ($i = 1; $i <= $total_page; $i++) {
                    if ($i == $page_number) {
                        $active = "active";
                    } else {
                        $active = "";
                    }
                    echo "<a href='users_info.php?page_number=" . $i . "'  class='btn btn-primary px-3 mx-2 text-white'> " . $i . " </a>";
                }
                if ($total_page > $page_number) {
                    echo '   <li class="btn btn-success"> <a href="users_info.php?page_number=' . ($page_number + 1) . '" class="text-decoration-none text-white"> Next </a> </li>';
                }

                ?>
            </center>
            <?php
        }  ;

    } else { ?>
    <script>
        window.location = "../../index.php";
    </script>
<?php } ?>
         