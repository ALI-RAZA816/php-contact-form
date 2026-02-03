<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 formBox" >
                <h1 class="text-center">Contact Us</h1>
                <form action="">
                   <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Name*</label>
                        <input type="text" class="form-control">
                    </div>
                   <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Email*</label>
                        <input type="text" class="form-control">
                    </div>
                   <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Subject*</label>
                        <input type="text" class="form-control">
                    </div>
                   <div>
                        <label for="exampleFormControlInput1" class="form-label">Message*</label>
                        <textarea name="" class="form-control" row="5" id="textarea"></textarea>
                    </div>
                    <button class="btn btn-success mt-4">Submit Message</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>