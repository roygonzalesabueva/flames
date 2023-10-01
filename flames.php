<?php
session_start();
$userID = $_POST['current_user_id'];
$user = $_POST['current_username']; 
$role = $_POST['current_user_role'];
$key = $_POST['security_key'];
    
if (empty($userID)) {
    echo "<p>String is Empty</p>";
    header("Location: http://202.137.126.58/");
exit();
} else {
   
    $_SESSION['user_id'] = $userID;
    $_SESSION['username'] = $user;
    $_SESSION['user_role'] = $role;
    $_SESSION['security_key'] = $key;


    //header("Location: admin/index.php");

}




?>




<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FLAMES</title>
    <link rel="icon" href="modal\css1\images\favicon.ico" type="image" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>




    <style>
        body {
            background: linear-gradient(-45deg, #eba08b, #f580af, #81e1f7, #90f4da);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }

        .content {
            background-image: url('images/FLAMES.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: .25em;
            box-shadow: 0 0 .25em rgba(0, 0, 0, .25);
            box-sizing: border-box;
            left: 50%;
            right: -30%;
            padding: 47vmin;
            position: fixed;
            text-align: center;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .container {
            position: relative;
        }

        #memo {
            position: absolute;
            top: 85%;
            left: 76%;
            transform: translate(-50%, -50%);
            background-color: #191e62;
            color: rgb(255, 255, 255);
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            font-weight: 1000;
            border-color: #ffffff;
            transition: all 0.5s;
            cursor: pointer;
        }


        #main {
            position: absolute;
            top: 5%;
            left: 5%;
            transform: translate(-50%, -50%);
            background-color: #f9f9fb;
            color: rgb(2, 17, 2);
            font-size: 16px;
            padding: 6px 10px;
            border: none;
            font-weight: 1000;
            border-color: #0e0101;
            transition: all 0.5s;
            cursor: pointer;
        }




        #about {
            position: absolute;
            top: 5%;
            left: 95%;
            transform: translate(-50%, -50%);
            background-color: #f9f9fb;
            color: rgb(2, 17, 2);
            font-size: 16px;
            padding: 6px 10px;
            border: none;
            font-weight: 1000;
            border-color: #0e0101;
            transition: all 0.5s;
            cursor: pointer;
        }



        #user {
            position: absolute;
            top: 5%;
            left: 70%;
            transform: translate(-50%, -50%);
            background-color: #f9f9fb;
            color: rgb(2, 17, 2);
            font-size: 16px;
            padding: 6px 10px;
            border: none;
            font-weight: 1000;
            border-color: #0e0101;
            transition: all 0.5s;
            cursor: pointer;
        }


        #role {
            position: absolute;
            top: 5%;
            left: 89%;
            transform: translate(-50%, -50%);
            background-color: #f9f9fb;
            color: rgb(2, 17, 2);
            font-size: 16px;
            padding: 6px 10px;
            border: none;
            font-weight: 1000;
            border-color: #0e0101;
            transition: all 0.5s;
            cursor: pointer;
        }










        #delsur {
            position: absolute;
            top: 85%;
            left: 27%;
            transform: translate(-50%, -50%);
            background-color: #ff7715;
            color: rgb(255, 255, 255);
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            font-weight: 1000;
            border-color: #ffffff;
            transition: all 0.5s;
            cursor: pointer;
        }


        #delsur:hover {
            background: red;
        }

        #memo:hover {
            background: red;
        }

        #main:hover {
            background: rgb(34, 240, 158);
        }


        #about:hover {
            background: rgb(34, 240, 158);
        }

        #user:hover {
            background: rgb(34, 240, 158);
        }


        #role:hover {
            background: rgb(34, 240, 158);
        }



    </style>


</head>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">About</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <center> <img src="http://202.137.126.59/flames/about1.png" alt=""></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>






<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><br>





    <!-- Save for Web Slices (FLAMES.jpg) -->
    <div class="container">
        <div class="content">

















            


            <a href="http://202.137.126.59/fms/login1.php" id="memo" class="btn btn-secondary btn-lg px-5 rounded-pill ">
              MEMO</a>

              <a href="http://202.137.126.58" id="main" class="btn btn-secondary btn-lg px-3 rounded-pill ">
                HOME</a>

                <!-- <a href="http://localhost/flames/about.png" target="_blank" id="about" class="btn btn-secondary btn-lg px-3 rounded-pill ">
                ABOUT</a> -->

                <button type="button" class="btn btn-primary"   id="user" >
                <?php
                        echo  $user;
                ?>
                </button>


                <button type="button" class="btn btn-primary"   id="role" >
                <?php
                        echo  $role;
                ?>
                </button>



               
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" id="about" data-bs-toggle="modal" data-bs-target="#exampleModal">
                About
                </button>



            <a href="http://202.137.126.59/transfer/login.php" id="delsur" class="btn btn-primary btn-lg px-5 rounded-pill ">
                DELSUR</a>
        </div>
    </div>
    <center>
        <!-- <img src="379395466_1513467929419924_5232503119529828182_n.jpg" alt=""> -->
    </center>
    <!-- End Save for Web Slices -->
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>