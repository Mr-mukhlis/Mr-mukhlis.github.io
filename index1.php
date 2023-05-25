<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
    <title>send wa</title>
</head>
<body>
    <section>
        <div class="container">
            <br><br>
            <h3>form send Whatsapp</h3>
            <br><br>
            <div class="row">
                <div class="col-6">
                    <form action="send.php" method="post" target="_blank">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control"  placeholder="namamu">
                    </div>
                    <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control"  name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                    <label for="message" class="form-label">message</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>
                    <input type="hidden" name="noWa" value="6282331769421">
                    <button type="submit" name="submit" class="btn btn-primary mb-3">Confirm </button>
                    </form>
                    </div>
            </div>
        </div>
    </section>
    
</body>
</html>