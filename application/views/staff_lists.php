<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff_lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <a href="<?= base_url('register/staff')?>">Back to Form</a>
  <?php
  if(isset($data)){
     
    ?>
<form action= "<?=base_url("register/update") ?>" method="post">
  <div class="form-group">
  <label for="exampleInputEmail1">Id</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id"  readonly=""  name="nid" value="<?=$data[0]->id?>">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="name" value="<?=$data[0]->staff_name ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Join of Date</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Join of date" name="doj" value="<?=$data[0]->date_of_join ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="address" name="add" value="<?=$data[0]->address ?>">
  </div class="form-group">
  <div class="form-group">
  <select class="form-control" name="sel">
    <option default><?=$data[0]->department;?>
    <option>Mechanical</option>
  <option>Automobile</option>
  <option>ComputerScience</option>
  <option>Civil</option>
  <option>Electrical And Electronics</option>
  <option>Information Techology</option>
  </select>

</div>
<div class="form-group">
    <label for="exampleInputPassword1">PhoenNumber</label>
  
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="PhoneNumber" name="pn" value="<?=$data[0]->phone_number ?>">
  </div>
  <div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
    <label for="radio">Male</label>
    <input type="radio" aria-label="Radio button for following text input" id="radio" name="gender" value="<?=$data[0]->gender ?>">
    <label for="radio">Female</label>
    <input type="radio" aria-label="Radio button for following text input" id="radio" name="gender" value="<?=$data[0]->gender ?>">
    
    </div>
  </div>
</div>
<div class="form-group">
  <select class="form-group" name="bg">
  <option default><?=$data[0]->blood_group;?>
    <option>AB+</option>
  <option>A+</option>
  <option>B+</option>
  <option>O+</option>
  <option>AB-</option>
  <option>A-</option>
  <option>B-</option>
  <option>O-</option>
  </select>

  </div>
  <button type="submit" class="btn btn-primary" value="Register">Submit</button>
  <br>
  <a href="<?= base_url('register/fetchdata')?>">Staff_lists</a>


</form>


    <?php
  }else{
    ?>
    <table class="table">
<thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Date_joined</th>
      <th scope="col">Address</th>
      <th scope="col">Department</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Gender</th>
      <th scope="col">BooldGroup</th>
      

    </tr>
  </thead>
<?php 
if(isset($table)){
  foreach($table as $row){
    ?>
  <tbody>
    <tr>
      
      <td><?=$row->id?></td>
      <td><?=$row->staff_name?></td>
      <td><?=$row->date_of_join?></td>
      <td><?=$row->address?></td>
      <td><?=$row->department?></td>
      <td><?=$row->phone_number?></td>
      <td><?=$row->gender?></td>
      <td><?=$row->blood_group?></td>
      <td><button><a href="<?=base_url('register/edit/'.$row->id)?>">Edit</a></button></td>
      <td><button><a href="<?=base_url('register/delete'.$row->id)?>">Delete</a></button></td>
    </tr>

  </tbody>

<?php
  }
}

?>
</table>
    <?php
  }
  ?>


  

</body>
</html>