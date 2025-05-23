<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fpass.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="Forgot col-md-6 p-5 shadow-lg text-center w-auto">
        <h1 class="for mb-5">FORGOT PASSWORD</h1>
        <form>
            <div class="d-flex flex-column mb-3 w-100">
                <label for="exampleInputEmail1" class=" Email form-label text-start">Enter Email address</label>
                <input type="email" class="box form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="box2"><button type="submit" class=" btn btn-primary mb-5 w-50">SEND CODE</button><br></div>
                <a class="back" href="login.php">Back to Log In</a>
            </div>
        </form>
    </div>
</body>
</html>