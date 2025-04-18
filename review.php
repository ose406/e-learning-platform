<?php

require  "../system/class.php";

$u=getReview('feed_back');
 ?>
 <br>
<table class="table mt-20  table-responsive-md>
  <thead>
    <tr>
      <th scope="col">#</th>
      <!-- <th scope="col">Name</th> -->
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
        <th scope="col">Address</th>

    </tr>
  </thead>
  <tbody>
    <?php 
foreach($u as $user){

    ?>
    <tr>
      <th scope="row">
        <?php echo $user['id'];?>
      </th>
      <td>
        <?php echo $user['email'];?>
      </td>
      <td>
        <?php echo $user['request'];?>
      </td>
      <td>
        <?php echo $user['response'];?>
      </td>
      <td>
       <a href="respond.php?id=<?php echo $user['id'];?>" class=" btn btn-primary">Respond</a>
       
      </td>
     
    </tr>
   <?php 

}
   ?>
  </tbody>
</table>