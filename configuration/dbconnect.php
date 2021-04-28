                        <?php
                                
                                $server             ="localhost";
                                $username               ="nbs";
                                $password               ="m)N(xAYgx-Rg";
                                $db_name                ="nbs";
                                $connect                =mysqli_connect($server,$username,$password,$db_name);
                                
                                if (mysqli_connect_errno()) {
                                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                        exit();
                                }

                        ?>