<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | SUN ROOM PORTAL</title>
    

    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="admindashboard.css">


    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>


<nav>
    <div class="navigation">
        <div class="left-section">
            <a href="adminDashboard.php">
                <img class="logo" src="pictures/logo.png" alt="Sun Room Logo">
            </a>
        </div>

        <div class="middle-section">
            <span class="navigation-text-attendance" style="font-size: 50px; font-weight: bold; color: white; padding-left: 400px;">
                Admin Dashboard
            </span>
        </div>

        <div class="right-section">
            <div class="navigation-div">
                <a href="LoginPage.php">
                    <button class="navigation-button">
                        <img class="navpic" src="pictures/icons/logout.png">
                    </button>
                </a>
                <span class="navigation-text-attendance">Logout</span>
            </div>
        </div>
    </div>
</nav>


<div class="admin-dashboard-container">


    <div class="admin-card">
        <h2 class="card-title">
            <span class="material-symbols-outlined icon">supervisor_account</span>
            User Management
        </h2>
        <p class="card-desc">Manage admin or student user accounts and their roles.</p>
        <a href="manageStudents.php"><button class="admin-action-button">Go to User Panel</button></a>
    </div>

  
    <div class="admin-card">
        <h2 class="card-title">
            <span class="material-symbols-outlined icon">campaign</span>
            Announcement Management
        </h2>
        <p class="card-desc">Create, edit or remove announcements shown to students.</p>
        <a href="manageAnnouncement.php"><button class="admin-action-button">Manage Announcements</button></a>
    </div>


    <div class="admin-card">
        <h2 class="card-title">
            <span class="material-symbols-outlined icon">fact_check</span>
            Attendance Management
        </h2>
        <p class="card-desc">Track student attendance and update attendance records.</p>
        <a href="manageAttendance.php"><button class="admin-action-button">View Attendance</button></a>
    </div>


    <div class="admin-card">
        <h2 class="card-title">
            <span class="material-symbols-outlined icon">account_circle</span>
            Admin Profile
        </h2>
        <p class="card-desc">View or update your account information and password.</p>
        <a href="adminProfile.php"><button class="admin-action-button">Go to Profile</button></a>
    </div>

</div>

</body>
</html>
