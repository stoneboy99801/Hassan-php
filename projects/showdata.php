<?php
include_once 'db.php';
?>
<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
      <table class="table">
            <thead>
                  <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">password</th>
                        <th scope="col">action</th>
                  </tr>
            </thead>
            <tbody>
                  <?php
                  $show_query = "SELECT * FROM `studentinfoo`";
                  $show = mysqli_query($conn, $show_query);

                  while ($res = mysqli_fetch_assoc($show)) { ?>
                        <tr>

                              <td><?php echo $res['name']; ?></td>
                              <td><?php echo $res['email']; ?></td>
                              <td><?php echo $res['PASSWORD']; ?></td>
                              <td><a class="btn btn-primary" href="update.php?id=<?php  echo $res['id']; ?>" role="button">update</a></td>

                        </tr>
                  <?php }

                  ?>



            </tbody>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>