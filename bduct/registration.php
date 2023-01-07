<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container-fluid bg main">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12"></div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <form class=" form-container needs-validation" action="bductdata.php" method="post" name="f1"
                    novalidate>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email" placeholder="Enter email" required>
                        <div class="invalid-feedback">
                            Please Enter your Email Address
                        </div>
                        <span style="color: rgb(213, 243, 213); font-size: small;">We'll never share your email with
                            anyone else.</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1"
                            placeholder="Password" required>
                        <div class="invalid-feedback">
                            Please Enter your Password
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="usertype">Select Your Role:</label>
                        <select class="form-control form-select" id="usertype" aria-label="select example" required
                            name="role">
                            <option selected disabled value="">Choose...</option>
                            <option value="1">Customer</option>
                            <option value="2">Retailer</option>
                            <option value="3">Distributor</option>
                            <option value="4">Manufacturer</option>
                        </select>
                        <div class="invalid-feedback">
                            Please Select Your Role.
                        </div>

                    </div>

                    <button type="submit" value="submit" name="sumbit" id="submit"
                        class="btn btn-outline-success btn-block">Register</button><br>
                    <a href="login.php" id="gotologin" style="color: rgb(213, 243, 213);"> Already have an account? Sign
                        in.</a>
                </form>
            </div>
        </div>
    </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

</body>

</html>