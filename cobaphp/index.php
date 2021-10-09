<?php include './connection.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <title>coba</title>
  </head>
  <body>
      <h1>tampilan data</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quidem neque totam, rerum nostrum, cumque ea quam aperiam ad sit autem laboriosam alias eaque. Cupiditate quaerat iusto atque aut soluta.
      <a href="create.php">Create</a>
      
    
<hr> 

<?php
    $sql = 'select * from siswa';
    $result = mysqli_query($conn, $sql);
    ?>
    <table border="1">
        <thead>
            <tr><th>Name</th>
            <th>Alamat</th>
            <th>Action</th></tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $data ['name'] ?></td>
                <td><?php echo $data ['address'] ?></td>
                <td>
                    <a href="edit-siswa.php?id=<?php echo $data['id']?>">Edit</a>
                    <a href="hapus-data.php?id=<?php echo $data['id']?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
