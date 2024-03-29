<?php

@include 'connect.php';

session_start();

if(isset($_SESSION["user_name"]))
{
 header("location:login_form.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                        <span class="title">ADMIN DASHBOARD</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
        
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">

                            <?php
                            @include 'connect.php';
                            
                            $query = "SELECT id FROM rfimc_form ORDER BY id";
                            $query_run = mysqli_query($conn,$query);

                            $row = mysqli_num_rows($query_run);

                            echo '<span class="total">'.$row.'</span>';

                            ?>

                        </div>
                        <div class="cardName">Members</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name=""></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">

                        <?php
                            @include 'connect.php';
                            
                            $sql = "SELECT COUNT(*) AS total_admin FROM rfimc_form WHERE user_type = 'admin'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $totalAdmin = $row["total_admin"];
                            echo '<span class="total">'.$totalAdmin.'</span>';
                            }
                        ?>

                        </div>
                        <div class="cardName">Admins</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name=""></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            
                        <?php
                            @include 'connect.php';
                            
                            $sql = "SELECT COUNT(*) AS total_user FROM rfimc_form WHERE user_type = 'user'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $totalUser = $row["total_user"];
                            echo '<span class="total">'.$totalUser.'</span>';
                            }
                        ?>


                        </div>
                        <div class="cardName">Users</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name=""></ion-icon>
                    </div>
                </div>

            </div>

            <!-- ================ Order Details List ================= -->
<!--         <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <div class="container">
                 <button class="btn btn-primary my-5"><a href="#" class="text-light">Add user</a></button>

            <table class="dashboard-table">
                <thead>
                    <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>    
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                    </tr>
                </thead>
            <tbody>
-->


<!--                             < ?php
                                        $select = "Select * from `rfimc_form`";
                                        $result=mysqli_query($conn,$select);
                                            if($result){
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $id = $row['id'];
                                                    $name = $row['name'];
                                                    $email = $row['email'];
                                                    $password = $row['password'];
                                                        echo ' <tr>
                                                            <th scope="row">'.$id.'</th>
                                                            <td>'.$name.'</td>
                                                            <td>'.$email.'</td>
                                                            <td>'.$password.'</td>
                                                            <td>
                                                                <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                                                                <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                                                            </td>
                                                        </tr>';
                                                    }
                                                }

                                    ?>
                                        </tbody>
                                </table>
                                        
                                            </div>

                                        </div>
                                    </div>
                            </div>
 -->
    

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>