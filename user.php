

<?php   
    
    //connect.php is second file where mysql connection
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile =$_POST['mobile'];
        $password =$_POST['password'];

        //pass in the mysql data to store it

        $sql="insert into `crud`(name,email,mobile,password) values('$name','$email','$mobile','$password')";

        //function to store to it two parameters pass one connection string and second parameter sql which is extract value through form
        $result = mysqli_query($con,$sql);

        if($result){
            echo "Data inserted successfully";
        }else{
            die(mysqil_error($con));
        }

    }


?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class=" mt-5">
              
            <!--method post is using to post in database or in server -->

            <form action="" method="post">
                <div class="mb-3">



            <!--using name="" we can pass into database mysql to it -->
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="email" placeholder="Enter yout Name">

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter yout Email">

                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input name="mobile" type="text" class="form-control" id="mobile" placeholder="Enter yout Mobile Number">

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Enter yout Password">

                </div>

                <button type="submit" class="btn btn-primary" name="submit">
                    Submit
                </button>
            </form>

            </div>

        </div>

    </div>

</body>

</html>