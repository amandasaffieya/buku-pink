<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../template/patient.css">
    <title>Health Profile</title>
</head>
<body>

     <?php include "header.php"; ?>
    
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
</html>