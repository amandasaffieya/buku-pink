<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

* {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    margin: 0;
    padding: 0;
    background-color: #ffebf0;
    color: #1e293b;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

header {
    display: flex;
    align-items: center;
    gap: 20px;
    background: linear-gradient(270deg, #d60d46 0%, #ff4d6d 60%, #ff758f 100%);
    color: #ffffff;
    padding: 0 40px;
    font-weight: 600;
    font-size: 15px;
    width: 100%;
    height: 70%;
    z-index: 10;
    box-sizing: border-box;
}
header .link { margin-left: auto; display: flex; gap: 25px; }
header a { color: white; text-decoration: none; }
header img { width: 45px; height: 45px; object-fit: contain; }
header input, header.log-out-btn, header a.log-out-link{
    border: none;
    background-color: #ffffff !important; 
    color: #d60d46 !important;            
    font-size: 14px;
    font-weight: 700;                     
    border-radius: 20px;
    padding: 6px 22px;
    text-transform: uppercase;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: transform 0.2s ease;
    cursor: pointer;
}
footer {
    background: linear-gradient(270deg, #d60d46 0%, #ff4d6d 60%, #ff758f 100%);
    color: #ffffff;
    padding: 15px;
    font-size: 11px;
    text-align: center;
    width: 100%;
    box-sizing: border-box;
}

.page-container {
    display: flex;
    flex-direction: row;
    flex: 1;
    width: 100%;
}

.sidebar {
    background: linear-gradient(180deg, #d60d46 0%, #ff4d6d 100%);
    width: 260px;
    display: flex;
    flex-direction: column;
    flex-shrink:0;
    box-shadow: 4px 0 15px rgba(0, 0, 0, 0.05);
}

.menu-title-section {
    /*background-color: #ff6b8b; */
    padding: 20px 28px 15px 28px;
    /* text-align: center; 
    height: auto;            
    display: flex;
    align-items: center;
    justify-content: flex-start;*/
    box-sizing: border-box;
    width: 100%;
    background: transparent;
    /* border-bottom: 1px solid rgba(255, 255, 255, 0.1);*/
}
.menu-title-section h2 {
    font-size: 18px;
    font-weight: 700;
    margin: 0;
    color:#ffffff;
    letter-spacing: 0.5px;
}

.menu-links {
    display: flex;
    flex-direction: column;
    width: 100%;
}
.menu-links a {
    text-decoration: none;
    color: rgba(255, 255, 255, 0.85);
    font-size: 15px;
    padding: 14px 28px;
    border-left: 4px solid transparent; 
    display: block;
}
.menu-links a.active {
    color: #ffffff;
    font-weight: 600;
    background-color: rgba(255, 255, 255, 0.2); 
    border-left: 4px solid white;
}


.main-content {
    flex-grow: 1;
    padding: 40px;
    display: flex;       
    flex-direction: column;
    box-sizing: border-box;
}

.profile-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    width: 100%;
}

.title {
    background: linear-gradient(270deg, #d60d46 0%, #ff4d6d 60%, #ff758f 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 54px;
    margin: 0;
    font-weight: 700;
}

.back-dashboard-btn {
    background: #d60d46;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.5px;
}


.card {
    background-color: #ffffff;
    border: 3px solid #d60d46;
    border-radius: 30px;
    padding: 40px;
    box-shadow: 0 6px 20px rgba(211, 26, 85, 0.05);
    width: 100%;
    box-sizing: border-box;
}

.card-header {
    display: flex;
    justify-content: flex-end;
    width: 100%;
    margin-bottom: 20px;
}

.form-buttons {
    display: flex;
    gap: 12px;
}
.form-buttons button {
    padding: 8px 24px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 13px;
    cursor: pointer;
}
.btn-confirm {
    background-color: white;
    color: #d60d46;
    border: 2px solid #d60d46;
}
.btn-cancel {
    background-color: #d60d46;
    color: white;
    border: 2px solid #d60d46;
}

.card-body {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 45px;
    width: 100%;
}

.profile-details {
    flex: 1;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px 35px;
}
.full-width { grid-column: span 2; }

.patient-name-display {
    color: #d60d46;
    font-size: 32px;
    font-weight: 700;
}

.input-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.input-group label {
    color: #ff758f;
    font-weight: 600;
    font-size: 14px;
}

.readonly-field {
    background: transparent;
    border: none;
    color: #334155;
    font-size: 16px;
    font-weight: 500;
    padding: 4px 0;
    outline: none;
}

.blur-box {
    background-color: #ffe5ec;
    border-radius: 15px;
    padding: 12px 16px;
    border: none;
    color: #1e293b;
    font-size: 15px;
    width: 100%;
    outline: none;
}
textarea.blur-box {
    resize: none;
    font-family: inherit;
}


.profile-pic-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 50px;
}
.profile-pic {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-color: #ffebf0;
    display: flex;
    align-items: center;
    justify-content: center;
}
.profile-pic svg {
    width: 75%;
    height: 75%;
}
    </style>
    <script>
        function logout (){
            var choice = confirm("Leave the website?");
            if (choice){
                alert("See you again!");
                window.location.href = "../login.php";
            }
        }
    </script>
<body>

    <header>
        <img src="../template/logo-kkm.png" alt="logo">
        <span>Klinik Kesihatan Chendering</span>
        <div class="link">
        <a href="about us.php">About Us</a></div>
        <input type="button" value="LOG OUT" onclick="logout()">
    </header>
    <div class="page-container">

        <aside class="sidebar">
            <div class="menu-title-section">
                <h2>Main Menu</h2>
            </div>
            <div class="menu-links">
                <a href="dashboard.php">Dashboard</a>
                <a href="patient profile.php" class="active">Patient Profile</a>
                <a href="health profile.php">Health Profile</a>
                <a href="fmc.php">Fetal Movement Chart</a>
                <a href="appointment.php">Appointment</a>
                <a href="ultrasound.php">Ultrasound Gallery</a>
            </div>
        </aside>

        <main class="main-content"> 

            <div class="profile-header">
                <h1 class="title">User Profile</h1>
                <a href="dashboard.php" class="back-dashboard-btn">BACK TO DASHBOARD ⟳</a>
            </div>

            <form class="card" method="POST" action="update_profile.php">

                <div class="card-header">
                    <div class="form-buttons">
                        <button type="submit" class="btn-confirm">CONFIRM</button>
                        <button type="reset" class="btn-cancel">CANCEL</button>
                    </div>
                </div>

                <div class="card-body">

                    <div class="profile-details"> 

                        <div class="input-group full-width">
                            <span class="patient-name-display">Aishah Binti Samuddin</span>
                        </div> 

                        <div class="input-group">
                            <label>IC Number</label>
                            <input type="text" name="ic" class="readonly-field" value="960921-11-4326" readonly> 
                        </div>
                        
                        <div class="input-group">
                            <label>Age</label>
                            <input type="text" name="age" class="readonly-field" value="30" readonly> 
                        </div>

                        <div class="input-group">
                            <label>Gestation</label>
                            <input type="text" name="gestation" class="readonly-field" value="24w 2d" readonly> 
                        </div>

                        <div class="input-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" class="blur-box" value="012-3456789" required> 
                        </div>
                        
                        <div class="input-group">
                            <label>Estimated Due Date</label>
                            <input type="text" name="due_date" class="readonly-field" value="14 July 2026" readonly> 
                        </div>

                        <div class="input-group">
                            <label>Home Address</label>
                            <textarea name="address" class="blur-box" rows="2" required>No. 3, Jalan USJ, Taman Tropika 2, Kajang 43650</textarea>
                        </div>

                    </div>

                    <div class="profile-pic-container">
                        <div class="profile-pic">
                            <svg viewBox="0 0 24 24" fill="#ffb3c1">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>
                    </div>

                </div>
            </form>
        </main>
    </div> 

    <footer>
        <p>&copy; 2026 Klinik Kesihatan Chendering. All rights reserved.</p>
    </footer>
</body>
</html>