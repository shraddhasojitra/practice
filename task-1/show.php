
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <!-- <h2>Employe Management</h2>
    <button name="manage" value="manage" data-bs-toggle="modal" data-bs-target="#manage">manage</button> -->
    </div>

    <table class="table mx-1" >
        <thead>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>password</th>
            <th>cpassword</th>
            <th>address</th>
            <th>state</th>
            <th>city</th>
        </tr>
        </thead>
        <tbody>
        
            <?php
                 foreach($sql as $data) 
                 {
                    ?>
                     <tr>
                    <td><?php echo $data['id']; ?> </td>
                    <td><?php echo $data['firstname']; ?> </td>
                    <td><?php echo $data['lastname']; ?> </td>
                    <td><?php echo $data['email']; ?> </td>
                    <td><?php echo $data['password']; ?> </td>
                    <td><?php echo $data['cpassword']; ?> </td>
                    <td><?php echo $data['address']; ?> </td>
                    <td><?php echo $data['img']; ?> </td>
                    <td><?php echo $data['sid']; ?> </td>
                    <td><?php echo $data['ctid']; ?> </td>
                     </tr>
                     <?php
                   }
            ?>
        
        </tbody>
        
        
    </table>
</body>
</html>
