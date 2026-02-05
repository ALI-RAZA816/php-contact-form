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
            <div class="d-flex justify-content-between bg-white py-3 sticky-top">
                <button class="btn btn-primary"><a class="text-white text-decoration-none" href="index.php">Back</a></button>
            </div>
            <div class="col-10 table d-flex justify-content-between flex-column" style="height:90vh">
                <?php
                    include "config.php";
                    $limit = 8;
                    if(isset($_GET['page'])){
                        $number = $_GET['page'];
                    }else{
                        $number = 1;
                    }
                    $offset = ($number - 1) * $limit;
                    $query = "SELECT * FROM contactform LIMIT {$offset}, {$limit}";
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
                        <th scope="col">Action</th>
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
                            <td class="d-flex">
                                <button class="btn btn-success me-2"><a href="" class="text-decoration-none text-white">Edit</a></button>
                                <button class="btn btn-danger"><a href="" class="text-decoration-none text-white">Delete</a></button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <?php
                }else{
                    echo "No record..";
                }
                $query1 = "SELECT * FROM contactform";
                $result1 = mysqli_query($connection, $query1);

                if(mysqli_num_rows($result1)){
                      $total = mysqli_num_rows($result1);
                    $pages = ceil($total/$limit);
                    echo "<nav aria-label='...'>
                        <ul class='pagination d-flex justify-content-center'>";
                        if($number > 1){
                            echo "<li class='page-item'><a class='page-link' href='record.php?page=".($number - 1)."'>Previous</a></li>";
                        }
                        for($i=1; $i<$pages; $i++){
                            if($i == $number){
                                $active = "active";
                            }else{
                                $active = " ";
                            }
                            echo "<li class='page-item {$active}'><a class='page-link' href='record.php?page=$i'>$i</a></li>";
                            
                        }
                        if($pages > $number){
                            echo "<li class='page-item'><a class='page-link' href='record.php?page=".($number + 1)."'>Next</a></li>";
                            
                        }
                        echo "</ul>
                    </nav>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>