
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <title>table data </title>
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
            <th>address</th>
            <th>img</th>
            <th>state</th>
            <th>city</th>
            <th>Action</th>
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
                    
                    <td><?php echo $data['address']; ?> </td>
                    <td><img src="<?php echo $data['img'];?>" alt="not found" style="width:80px;height:100px"></td>
                     <td><?php echo $data['sid']; ?> </td> 
                     <td><?php echo $data['ctid']; ?> </td> 
                     <td><a href="<?php echo $mainurl;?>showtable?delete_id=<?php echo $data['id']?>">
                     <span class="text-danger"><i class="bi bi-trash"></i></span>
                    </a></td>
                     </tr>
                     <?php
                   }
            ?>
        
        </tbody>
        
        
    </table> 
</body>
</html>
