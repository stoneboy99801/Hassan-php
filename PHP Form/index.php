<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form style="display: flex;flex-direction: column;gap: 20px;width:400px"  method="get" action="data.php">
        <label for="Name">Name</label>
        <input style="height: 40px;" type="text" name="Name" placeholder="Enter your name">
 <label for="Password">Password</label>
        <input type="password" name="Password" placeholder="Enter your Password">
 <label for="Email">Email</label>
        <input type="email" name="Email" placeholder="Enter your Email">
         <button type="submit">submit</button>
    </form>

</body>
</html>


<?php ?>