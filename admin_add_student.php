<?php
    require_once ('../../mySQL/connectMySQL.php');
    $w_fullname = $w_stdcode = $w_idcard = $w_gender = $w_birth = $w_depart = $w_univer='';
    $w_ID=$w_phone = $w_email = $w_address = '';
    if(!empty($_POST)){
        
        if(isset($_POST['id'])){
            $w_ID = $_POST['id'];
        }        
        if(isset($_POST['fullname'])){
            $w_fullname = $_POST['fullname'];
        }
        if(isset($_POST['stdcode'])){
            $w_stdcode = $_POST['stdcode'];
        }
        if(isset($_POST['idcard'])){
            $w_idcard = $_POST['idcard'];
        }
        if(isset($_POST['gender'])){
            $w_gender = $_POST['gender'];
        }
        if(isset($_POST['birth'])){
            $w_birth = $_POST['birth'];
        }
        if(isset($_POST['depart'])){
            $w_depart = $_POST['depart'];
        }
        if(isset($_POST['univer'])){
            $w_univer = $_POST['univer'];
        }
        if(isset($_POST['phone'])){
            $w_phone = $_POST['phone'];
        }
        if(isset($_POST['email'])){
            $w_email = $_POST['email'];
        }
        if(isset($_POST['address'])){
            $w_address = $_POST['address'];
        }

        $w_fullname= str_replace('\'','\\\'',$w_fullname);
        $w_stdcode= str_replace('\'','\\\'',$w_stdcode);
        $w_idcard= str_replace('\'','\\\'',$w_idcard);
        $w_gender= str_replace('\'','\\\'',$w_gender);
        $w_email= str_replace('\'','\\\'',$w_email);
        $w_phone= str_replace('\'','\\\'',$w_phone);
        $w_univer= str_replace('\'','\\\'',$w_univer);
        $w_address= str_replace('\'','\\\'',$w_address);
        
        //require_once ('../../mySQL/connectMySQL.php');
        //$sql = "INSERT INTO list_student(FULL_NAME,STUDENT_CODE,ID_CARD,GENDER,DATE_OF_BIRTH,DEPARTMENT,UNIVERSITY,PHONE_NUMBER,EMAIL,ADDRESS) VALUE('$w_fullname', '$w_stdcode', '$w_idcard', '$w_gender', '$w_birth','$w_depart','$w_univer', '$w_phone', '$w_email', '$w_address')";
        //$sql = "INSERT INTO list_student(FULL_NAME,STUDENT_CODE,ID_CARD,GENDER,DATE_OF_BIRTH,DEPARTMENT,UNIVERSITY,PHONE_NUMBER,EMAIL,ADDRESS) VALUES('".$w_fullname."', '".$w_stdcode."', '".$w_idcard."', '".$w_gender."', '".$w_birth."', '".$w_depart."','".$w_univer."','".$w_phone."','".$w_email."','".$w_address."')";
        $sql ="INSERT INTO list_student(ID,FULL_NAME,STUDENT_CODE,ID_CARD,GENDER,DATE_OF_BIRTH,DEPARTMENT,UNIVERSITY,PHONE_NUMBER,EMAIL,ADDRESS) VALUES ('NULL','".$w_fullname."', '".$w_stdcode."', '".$w_idcard."', '".$w_gender."', '".$w_birth."', '".$w_depart."','".$w_univer."','".$w_phone."','".$w_email."','".$w_address."')";
        //echo $sql;
        execute($sql);      
    }
?>


<html lang="en">
<head>
  <title>Admin-Add Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajaxs/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../css/interface/Edit/add_student.css">
  <link rel="stylesheet" type="text/css" href="../../css/interface/login/login_user.css">

</head>
<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapse_target">
            <span style="font-size: 20px;" class="navbar-text navbar text-monospace">
                PTIT-ELECTRONICS
            </span>
            
            <ul class="navbar-nav">
                
                <li style="margin-left: 20px;" class="nav-item dropdown">                  
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="../interface/admin_display_list.php">
                        <i class="fas fa-user" style="margin-right: 5px;"></i>Admin
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_target">
                        <a class="dropdown-item text-dark" href="../interface/admin_display_list.php">Student Management</a>
                        <a class="dropdown-item text-dark" href="#">Statistical</a>
                        <a class="dropdown-item text-dark" href="#">Personal Information</a>
                         
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="get_in_touch">
        <h1 class="title">ADD STUDENT</h1>
        <div class="container">
            <form method="post" class="contact-form row">
                
                <div class="form-field col-lg-6">
                    <input id="name" class="input-text" type="text" name="fullname">
                    <label for="name" class="label">Full Name</label>
                </div>

                <div class="form-field col-lg-6">
                    <input id="studentcode" class="input-text" type="text" name="stdcode">
                    <label for="studentcode" class="label">Student Code</label>
                </div>

                <div class="form-field col-lg-6">
                    <input id="idcard" class="input-text" type="text" name="idcard">
                    <label for="idcard" class="label">ID Card</label>
                </div>

                <div class="form-field col-lg-6">
                    <input id="gender" class="input-text" type="text" name="gender">
                    <label for="gender" class="label">Gender</label>
                </div>

                <div class="form-field col-lg-6">
                    <input id="birthday" class="input-text" type="date" name="birth">
                    <label for="birthday" class="label">Date Of Birth</label>
                </div>

                <div class="form-field col-lg-6">
                    <input id="department" class="input-text" type="text" name="depart">
                    <label for="department" class="label">Department</label>
                </div>

                <div class="form-field col-lg-6">
                    <input id="university" class="input-text" type="text" name="univer" >
                    <label for="university" class="label">University</label>
                </div>

                <div class="form-field col-lg-6">
                    <input id="phone" class="input-text" type="text" name="phone" >
                    <label for="phone" class="label">Phone Number</label>
                </div>

                <div class="form-field col-lg-6">
                    <input id="email" class="input-text" type="email" name="email">
                    <label for="email" class="label">Email</label>
                </div>

                <div class="form-field col-lg-6">
                    <input id="address" class="input-text" type="text" name="address">
                    <label for="address" class="label">Address</label>
                </div>

                <div class="form-field col-lg-12">
                    <button class="submit-btn" >Submit</button>           
                </div>
            </form>
        </div>
    </section>

</body>
</html>
