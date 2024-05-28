<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>js_validation</title>
</head>
<body>
<main>
    <div class="container">
        <center>
            <h1 class="text-success">
                Register Form
            </h1>
        </center>
        <form onsubmit="return validateForm()">
            <div class="row justify-content-center my-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username :</label>
                        <input type="text" class="form-control" onfocus="inputWidgetOnFocus(this)"  onblur="inputWidgetOnBlur(this)" id="username" name="username">
                        <p id='u_msg'></p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" 
                        onfocus="inputWidgetOnFocus(this)"  onblur="inputWidgetOnBlur(this)" id="email" name="email">
                        <p id='msg'></p>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" class="form-control" onfocus="inputWidgetOnFocus(this)"  onblur="inputWidgetOnBlur(this)"  id="password" name="password">
                        <p id='msg'></p>
                    </div>
                    <div class="mb-3">
                        <label for="c_password" class="form-label">Confirm Password :</label>
                        <input type="password" class="form-control" 
                        onfocus="inputWidgetOnFocus(this)"  onblur="inputWidgetOnBlur(this)" id="c_password" name="c_password">
                        <p id='msg'></p>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Sign-In</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-QeKmIgfo4v09Yy8lHhWd2tXuvS45mKdhAuW3x3zV1zE=" crossorigin="anonymous"></script>
</body>
</html>
