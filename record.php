<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between bg-white my-5 sticky-top">
                <h1 class="btn btn-danger">Record</h1>
                <button class="btn btn-primary"><a class="text-white text-decoration-none" href="index.php">Back</a></button>
            </div>
            <div class="col-10 table">
                <?php
                    include "config.php";
                    $query = "SELECT * FROM contactform";
                    $result = mysqli_query($connection, $query);
                    if(mysqli_num_rows($result) > 0){
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['subject']?></td>
                            <td><?php echo $row['message']?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <?php
                }else{
                    echo "No record..";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>