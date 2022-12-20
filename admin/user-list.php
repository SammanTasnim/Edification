<?php  include('partials/menu.php'); ?>


        <!--content starts-->
        <div class="content">
        <div class="wrapper">
              <h1>User List</h1>
              <br/> <br/>

              <br/> <br/>

               <table class="table">
                  <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Age</th>
                        <th>Education</th>
                        <th>E-mail</th>
                  </tr>

                  <!-- display admin -->
                  <?php 
                        $sql = "SELECT * FROM users";
                        //execute the querry
                        $res = mysqli_query($conn, $sql);

                        // check whether the query is executed or not
                        if($res==TRUE)
                        {
                              //count rows whether we have data in the database
                              $count= mysqli_num_rows($res); //function to get all the rows in database

                              $serial_number=1;

                              //check the num of rows
                              if($count>0)
                              {
                                    //we have data in database
                                    while($rows=mysqli_fetch_assoc($res))
                                    {
                                          //$id=$rows['id'];
                                          $full_name=$rows['full_name'];
                                          $email=$rows['mail'];
                                          $username=$rows['username'];
                                          $education=$rows['education'];
                                          $age = $rows['age'];

                                    ?>
                                    <tr>
                                          <td><?php echo $serial_number++ ; ?></td>
                                          <td><?php echo $full_name ; ?></td>
                                          <td><?php echo $username ; ?></td>
                                          <td><?php echo $age ; ?></td>
                                          <td><?php echo $education ; ?></td>
                                          <td><?php echo $email ; ?></td>
                                    </tr>

                                    <?php
                                    }
                              }
                              else
                              {
                                    //we do not have data in database
                              }
                        }
                  ?>

            </table>

            <div class="clearfix"></div>
        </div>
        </div>
        <!--content ends-->


        <?php include('partials/footer.php'); ?>       