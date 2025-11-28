<?php
include_once 'db.php';
$id = $_GET['id'];
if (isset($id)) {
      $updatdata = "SELECT * FROM `studentinfoo` WHERE `id` = $id ;";
      $update = mysqli_query($conn, $updatdata);
      $get_data = mysqli_fetch_assoc($update);
} else {
      echo "no id";
}



?>
<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
      <div class="container">
            <div class="row col-12">
                  <h1> update form </h1>
                  <form action="update_query.php" method="POST">
                        <div class="mb-3 mt-5">
                              <input type="hidden" value="<?php echo $get_data['id']   ?>" name="id">
                              <label for="exampleInputEmail1" class="form-label"> name</label>

                              <input type="text" value="<?php echo $get_data['name']   ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="named">
                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 mt-5">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" value="<?php echo $get_data['email']   ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="text" value="<?php echo $get_data['PASSWORD']   ?>" class="form-control" id="exampleInputPassword1" name="pass">
                        </div>

                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                  </form>
            </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>