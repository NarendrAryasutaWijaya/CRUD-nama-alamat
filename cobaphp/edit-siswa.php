<?php include './connection.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <title>coba</title>
  </head>
  <body>
      
  <form action="ubah-data.php?id=<?php echo $_GET['id'] ?>" method="post">
  <?php
  $sql = 'select * from siswa where id = '. $_GET['id'];
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($result);
  ?>
      <div>
          <span>Name : </span>
          <input type="text" name="name" value="<?php echo $data['name'] ?>">
     </div>
     <div>
            <span>Address : </span>
            <input type="text" name="address" value="<?php echo $data['address'] ?>">
     </div>
     <br>
     <button type="submit">update</button>
   </form>
</body>
</html>