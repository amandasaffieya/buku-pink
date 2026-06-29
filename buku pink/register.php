<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Pink Book</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            padding: 40px 0; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(270deg, #ff5272 0%, rgb(255, 151, 168));
        }

        h1 {
            color: rgb(255, 120, 129);
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 35px;
            text-align: center;
        }

        .register {
            border: none;
            padding: 40px;
            padding-top: 10px;
            border-radius: 30px;
            background-color: white;
            width: 800px; 
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        fieldset {
            border: 1px solid rgba(0, 0, 0, 0.12);
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 20px;
            width: 100%;
        }

        legend {
            font-size: 18px;
            font-weight: 700;
            color: rgb(255, 105, 130);
            padding: 0 10px;
        }

        .form-group, .form {
            margin-bottom: 18px;
            width: 100%;
        }

        label.field-label {
            display: block;
            font-size: 15px;
            font-weight: 600;
            color: rgb(70, 70, 70);
            margin-bottom: 7px;
        }

        .input-field {
            font-size: 15px;
            border-radius: 10px;
            border: 1px solid rgb(190, 190, 190);
            width: 75%;
            height: 42px;
            padding: 10px 12px;
            color: rgb(50, 50, 50);
            transition: border-color 0.2s;
            margin-bottom: 12px;
        }

        textarea.input-field {
            height: auto;
            resize: vertical;
        }

        .input-field:focus {
            border: 1.5px solid rgb(255, 105, 130);
            outline: none;
        }

        .radio, .radio-inline-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 5px;
        }

        .radio-label {
            display: inline-flex;
            align-items: center;
            font-size: 15px;
            font-weight: 500;
            color: rgb(80, 80, 80);
            cursor: pointer;
        }

        input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            background-color: #fff;
            margin: 0 8px 0 0;
            width: 20px;
            height: 20px;
            border: 1.5px solid rgb(171, 171, 171);
            border-radius: 50%;
            display: inline-grid;
            place-content: center;
            vertical-align: middle;
            cursor: pointer;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input[type="radio"]::before {
            content: "";
            width: 10px;
            height: 10px;
            border-radius: 50%;
            transform: scale(0);
            transition: 0.15s transform ease-in-out;
            background-color: rgb(255, 105, 130);
        }

        input[type="radio"]:checked {
            border-color: rgb(255, 105, 130);
            box-shadow: 0 0 0 5px rgba(255, 105, 130, 0.3);
        }

        input[type="radio"]:checked::before {
            transform: scale(1);
        }

        #button {
            font-size: 24px;
            border: none;
            border-radius: 12px;
            background-color: rgb(255, 105, 130);
            color: white;
            width: 100%;
            padding: 12px;
            font-weight: 600;
            margin-top: 10px;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        #button:hover {
            opacity: 0.70;
        }
        
        .center-btn-container {
            text-align: center;
            width: 100%;
        }

        p {
            color: rgb(140, 140, 140);
            text-align: center;
            margin-top: 30px;
        }

        a {
            color: rgb(255, 123, 145);
            font-weight: 500;
        }
        a:hover{ text-decoration: none;}
        #errorMessage{
            color: red;
            margin: 0;
            padding: 0;
            margin-bottom: 30px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="register">
        <h1>Sign Up New Account</h1>
        <p id="errorMessage"></p>
        
        <form action="" method="POST">
            
            <fieldset>
                <legend>Personal Information</legend>

                <div class="form-group">
                    <label class="field-label">Full Name:</label>
                    <input type="text" class="input-field" name="fullName" value="<?php echo isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : ''; ?>" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label class="field-label">Email:</label>
                    <input type="email" class="input-field" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" placeholder="example@gmail.com" required>
                </div>

                <div class="form-group">
                    <label class="field-label">Phone Number:</label>
                    <input type="tel" class="input-field" name="phoneNum" value="<?php echo isset($_POST['phoneNum']) ? htmlspecialchars($_POST['phoneNum']) : ''; ?>" placeholder="012-3456789" pattern="[0-9]{3}-[0-9]{7,8}" required>
                </div>

                <div class="form-group">
                    <label class="field-label">IC Number:</label>
                    <input type="text" class="input-field" name="icNum" value="<?php echo isset($_POST['icNum']) ? htmlspecialchars($_POST['icNum']) : ''; ?>" placeholder="xxxxxx-xx-xxxx" required>
                </div>

                <div class="form-group">
                    <label class="field-label">Address:</label>
                    <textarea class="input-field" name="address" rows="3" placeholder="Enter your residential address" required><?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address']) : ''; ?></textarea>
                </div>

                <div class="form-group">
                    <label class="field-label">Password:</label>
                    <input type="password" class="input-field" name="password" placeholder="Create a password" required>
                </div>

                <div class="form-group">
                    <label class="field-label">Confirm Password:</label>
                    <input type="password" class="input-field" name="confirmPassword" placeholder="Retype the password" required>
                </div>

                <div class="form-group">
                    <label class="field-label">Role:</label>
                    <div class="radio">
                        <label class="radio-label">
                            <input type="radio" name="role" value="patient" onclick="showField()" required <?php if (isset($_POST['role']) && $_POST['role'] == 'patient') echo 'checked'; ?>> Patient
                        </label> &ensp;
                        <label class="radio-label">
                            <input type="radio" name="role" value="doctor" onclick="showField()" <?php if (isset($_POST['role']) && $_POST['role'] == 'doctor') echo 'checked'; ?>> Doctor
                        </label> &ensp;
                        <label class="radio-label">
                            <input type="radio" name="role" value="admin" onclick="showField()" <?php if (isset($_POST['role']) && $_POST['role'] == 'admin') echo 'checked'; ?>> Admin
                        </label>
                    </div>
                </div>
            </fieldset>

            <div id="patientField" style="display: none;">
                <fieldset>
                    <legend>Health Information</legend>

                    <div class="form">
                        <label class="field-label">Blood Type:</label>
                        <div class="radio-inline-group">
                            <label class="radio-label"><input type="radio" name="bloodType" value="A" <?php if(isset($_POST['bloodType']) && $_POST['bloodType'] == 'A') echo 'checked'; ?>> A</label>
                            <label class="radio-label"><input type="radio" name="bloodType" value="B" <?php if(isset($_POST['bloodType']) && $_POST['bloodType'] == 'B') echo 'checked'; ?>> B</label>
                            <label class="radio-label"><input type="radio" name="bloodType" value="AB" <?php if(isset($_POST['bloodType']) && $_POST['bloodType'] == 'AB') echo 'checked'; ?>> AB</label>
                            <label class="radio-label"><input type="radio" name="bloodType" value="O" <?php if(isset($_POST['bloodType']) && $_POST['bloodType'] == 'O') echo 'checked'; ?>> O</label>
                        </div>
                    </div>

                    <div class="form">
                        <label class="field-label">HIV Status:</label>
                        <div class="radio-inline-group">
                            <label class="radio-label"><input type="radio" name="hiv" value="reactive" <?php if(isset($_POST['hiv']) && $_POST['hiv'] == 'reactive') echo 'checked'; ?>> Reactive</label>
                            <label class="radio-label"><input type="radio" name="hiv" value="non-reactive" <?php if(isset($_POST['hiv']) && $_POST['hiv'] == 'non-reactive') echo 'checked'; ?>> Non-reactive</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="field-label">Last Menstrual Period (LMP):</label>
                        <input type="date" class="input-field" name="lmp" value="<?php echo isset($_POST['lmp']) ? htmlspecialchars($_POST['lmp']) : ''; ?>">
                    </div>
                </fieldset>
            </div>

            <div id="doctorField" style="display: none;">
                <fieldset>
                    <legend>Doctor's Information</legend>

                    <div class="form">
                        <label class="field-label">Gender:</label>
                        <div class="radio-inline-group">
                            <label class="radio-label"><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked'; ?>> Male</label>&emsp;
                            <label class="radio-label"><input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked'; ?>> Female</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="field-label">License Number:</label>
                        <input type="text" class="input-field" name="licenseNo" placeholder="Enter medical license number" value="<?php echo isset($_POST['licenseNo']) ? htmlspecialchars($_POST['licenseNo']) : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label class="field-label">Specialization:</label>
                        <input type="text" class="input-field" name="specialization" placeholder="e.g. Obstetrics & Gynecology" value="<?php echo isset($_POST['specialization']) ? htmlspecialchars($_POST['specialization']) : ''; ?>">
                    </div>
                </fieldset>
            </div>

            <div id="adminField" style="display: none;">
                <fieldset>
                    <legend>Admin's Information</legend>
                    <div class="form">
                        <label class="field-label">Gender:</label>
                        <div class="radio-inline-group">
                            <label class="radio-label"><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked'; ?>> Male</label> &emsp;
                            <label class="radio-label"><input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked'; ?>> Female</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            
            <div class="center-btn-container">
                <input type="submit" id="button" name="submit" value="Create Account">
            </div>
            <p>Already have an account? <a href="login.php">Log In</a></p>
        </form>
    </div>
    
    <script>
        function showField() {
            const checkedRole = document.querySelector('input[name="role"]:checked');
            if (!checkedRole) return;
            
            let role = checkedRole.value;

            document.getElementById("doctorField").style.display = "none";
            document.getElementById("patientField").style.display = "none";
            document.getElementById("adminField").style.display = "none";

            if (role === "doctor") {
                document.getElementById("doctorField").style.display = "block";
            } else if (role === "patient") {
                document.getElementById("patientField").style.display = "block";
            } else if (role === "admin"){
                document.getElementById("adminField").style.display = "block";
            }
        }
        
        // Trigger right away on page-load if form contains previous data validation states
        window.onload = showField;
    </script>

<?php
    include "db_connect.php";

    if(isset($_POST['submit'])){
        // Escape all user inputs to handle apostrophes and prevent SQL errors
        $fullName = mysqli_real_escape_string($connect, $_POST['fullName']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $phoneNum = mysqli_real_escape_string($connect, $_POST['phoneNum']);
        $icNum = mysqli_real_escape_string($connect, $_POST['icNum']);
        $address = mysqli_real_escape_string($connect, $_POST['address']);
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $role = mysqli_real_escape_string($connect, $_POST['role']);
        
        $fullName = strtoupper($fullName);
        $icNum = str_replace('-', '', $icNum);

        if ($password !== $confirmPassword) {
            echo "<script>document.getElementById('errorMessage').innerHTML='ERROR: Passwords do not match, please try again.';</script>";
            return; 
        }

        // Check duplicate email
        $sql = "SELECT * FROM user WHERE email='$email' AND role='$role'";
        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "<script>alert('Email already registered.');</script>";
            exit();
        }

        // Check duplicate IC
        $sql = "SELECT * FROM user WHERE icNum='$icNum' AND role='$role'";
        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "<script>alert('IC Number already registered.');</script>";
            exit();
        }

        // Define status
        $pending = 0;
        if ($role <> 'patient') {
            $pending = 1; 
        } 

        // 1. Insert into user table
        $sql = "INSERT INTO user (fullName, email, phoneNum, icNum, address, password, role, pending, forgot_pass)
                VALUES ('$fullName', '$email', '$phoneNum', '$icNum', '$address', '$password', '$role','$pending',0)";

        if(mysqli_query($connect, $sql)){
            $userID = mysqli_insert_id($connect);

            // ─── PATIENT ROLE EXTRACTION & STRUCTURAL INTEGRATION ───
            if($role == "patient"){
                $bloodType = isset($_POST['bloodType']) ? mysqli_real_escape_string($connect, $_POST['bloodType']) : '';
                $hiv = isset($_POST['hiv']) ? mysqli_real_escape_string($connect, $_POST['hiv']) : 'non-reactive';
                $lmp = (isset($_POST['lmp']) && !empty($_POST['lmp'])) ? mysqli_real_escape_string($connect, $_POST['lmp']) : date('Y-m-d');
                
                // Derive Date of Birth from IC Number (YYMMDD...)
                $dob = getDOBFromIC($icNum);

                // 2. Insert into Patient Table (matches your schema matching image 3)
                $sqlPatient = "INSERT INTO patient (dateOfBirth, bloodType, userID) 
                               VALUES ('$dob', '$bloodType', '$userID')";

                if (mysqli_query($connect, $sqlPatient)) {
                    $patientID = mysqli_insert_id($connect);
                    
                    // Calculate Due Date (LMP + 280 days) & Gestational Age days
                    $dueDate = date('Y-m-d', strtotime($lmp . ' + 280 days'));
                    $gestationalAge = floor((time() - strtotime($lmp)) / (60 * 60 * 24));
                    if($gestationalAge < 0) $gestationalAge = 0;

                    // 3. Insert into Pregnancy Table (matches your schema matching image 2)
                    // Note: Your image shows column labeled 'ImpDate' or 'lmpDate'. Double check your actual DB spelling if this throws an error.
                    $sqlPregnancy = "INSERT INTO pregnancy (pregStatus, hivStatus, riskStatus, lmpDate, dueDate, gestationalAge, patientID) 
                                     VALUES ('ACTIVE', '$hiv', 'low', '$lmp', '$dueDate', '$gestationalAge', '$patientID')";
                    
                    if(!mysqli_query($connect, $sqlPregnancy)){
                        die("Pregnancy table insert failed: " . mysqli_error($connect));
                    }
                } else {
                    die("Patient table insert failed: " . mysqli_error($connect));
                }
            }

            // ─── DOCTOR ROLE EXTRACTION ───
            else if($role == "doctor"){
                $gender = isset($_POST['gender']) ? mysqli_real_escape_string($connect, $_POST['gender']) : '';
                $licenseNo = isset($_POST['licenseNo']) ? mysqli_real_escape_string($connect, $_POST['licenseNo']) : '';
                $specialization = isset($_POST['specialization']) ? mysqli_real_escape_string($connect, $_POST['specialization']) : '';

                $sql2 = "INSERT INTO doctor (userID, gender, licenseNo, specialization) 
                         VALUES ('$userID', '$gender', '$licenseNo', '$specialization')";

                if (!mysqli_query($connect, $sql2)) {
                    die("Doctor table insert failed: " . mysqli_error($connect));
                }
            }

            // ─── ADMIN ROLE EXTRACTION ───
            else if($role == "admin"){
                $gender = isset($_POST['gender']) ? mysqli_real_escape_string($connect, $_POST['gender']) : '';

                $sql2 = "INSERT INTO admin (userID, gender) 
                         VALUES ('$userID', '$gender')";

                if (!mysqli_query($connect, $sql2)) {
                    die("Admin table insert failed: " . mysqli_error($connect));
                }
            }

            echo "<script>
                    alert('Account created successfully!');
                    window.location='login.php';
                  </script>";

        } else {
            die("Insert failed: ".mysqli_error($connect));
        }
    }

    // Helper function to dynamically pull DOB from IC string formatting
    function getDOBFromIC($icNum){
        $yy = substr($icNum, 0, 2);
        $mm = substr($icNum, 2, 2);
        $dd = substr($icNum, 4, 2);
        
        $currentYearShort = (int)date('y');
        $yyyy = ((int)$yy > $currentYearShort) ? "19" . $yy : "20" . $yy;
        
        return "$yyyy-$mm-$dd";
    }
    ?>
</body>
</html>