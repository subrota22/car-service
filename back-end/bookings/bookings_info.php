
<?php
    if (isset($_SESSION['email']) AND isset($_SESSION['email']) == "subrota45278@gmail.com") {
        ?><br>
        <table class="table table-border table-hover animate fadeUp" id="table">
            <?php
            //show users
            require_once("./db/db.php");
            $sql2 = "SELECT * FROM bookings limit 2" ;
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
            $query = "SELECT * FROM bookings LIMIT   {$offset} , {$limit} ";
            $result = mysqli_query($con, $query);
            $row_count = mysqli_num_rows($result);
            if ($row_count > 0) {
                ?>
                <thead class="bg-dark" style="color:yellow;">
                    <tr>
                        <th>Serial Number </th>
                        <th> ID </th>
                        <th>Name</th>
                        <th> Phone number</th>
                        <th> Service </th>
                        <th>Service message</th>
                        <th>Service order date </th>
                        <th>Action</th>
                    </tr>


                </thead>
                <?php
                $serial = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['bookings_id'];
                    $name = $row['name'];
                    $phone_number = $row['phone_number'];
                    $service_request = $row['service_request'];
                    $data_time = $row['date'];
                    $service_message	 = $row['service_message'];
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
                                <?php echo $name; ?>
                            </td>

                            <td>
                                <?php echo $phone_number; ?>
                            </td>
                            <td>
                                <?php echo $service_request; ?>
                            </td>
                    
                            <td>
                                <?php echo $service_message	; ?>
                            </td>
                            <td>
                                <?php echo $data_time; ?>
                            </td>
                            <td colspan="2">
                            <a href="./back-end/bookings/delete_bookings.php?delete_id=<?php echo $id; ?>"  
                             onclick="return confirm('Are you want to delete this data ? Note: you can not recover this data after deleted!!')"
                             title="Are you want to delete this data ??">
                            <i class="fa-sharp fa-solid fa-trash text-danger mx-2 fs-4"></i>
                            </a>
                            <a href="./back-end/bookings/edit_bookings_form.php?edit_id=<?php echo $id; ?>">
                            <i class="fa-sharp fa-solid fa-edit text-info mx-2 fs-4"></i>
                            </a>
                            </td>
                        </tr>
                    </tbody>

                    <?php
                }
            }else{
            echo "Data not found!!" ;
            }
            ?>
        </table>
        </form>
        </center>

        <?php
        require_once("./db/db.php");
        $pag_sql = "SELECT * FROM bookings";
        $pag_query = mysqli_query($con, $pag_sql);
        $page_count = mysqli_num_rows($pag_query);
        if ($page_count == true) {
            $total_record = $page_count;
            $total_page = ceil($total_record / $limit);
            ?>
            <center>

                <?php
                if ($page_number > 1) {
                    echo '   <li class="btn btn-success"> <a href="bookings_info.php?page_number=' . ($page_number - 1) . '"  class="text-decoration-none text-white"> Prev </a> </li>';

                }

                echo "&nbsp&nbsp";
                for ($i = 1; $i <= $total_page; $i++) {
                    if ($i == $page_number) {
                        $active = "active";
                    } else {
                        $active = "";
                    }
                    echo "<a href='bookings_info.php?page_number=" . $i . "'  class='btn btn-primary px-3 mx-2 text-white'> " . $i . " </a>";
                }
                if ($total_page > $page_number) {
                    echo '   <li class="btn btn-success"> <a href="bookings_info.php?page_number=' . ($page_number + 1) . '" class="text-decoration-none text-white"> Next </a> </li>';
                }

                ?>
            </center>
            <?php
        }  ;
    }else{
        header("location:./index.php") ;
    }
    ?>
         