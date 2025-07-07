<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Profile | Sun Room Portal</title>
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="adminProfile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
    <div class="navigation">
        <div class="left-section">
            <a href="AdminDashboard.php"><img class="logo" src="pictures/logo.png" alt="Logo"></a>
        </div>

        <div class="middle-section-search">
            <input class="searchbar" type="text" name="search" placeholder="Search">
            <button class="searchimgbutton">
                <img class="searchimg" src="pictures/icons/search.jpg" alt="Search">
            </button>
        </div>

        <div class="right-section-Attendance">
            <div class="navigation-div">
                <a href="AdminDashboard.php">
                    <button class="navigation-button"><img class="navpic" src="pictures/icons/dashboard.png"></button>
                </a>
                <span class="navigation-text-attendance">Dashboard</span>
            </div>
            <div class="navigation-div">
                <a href="manageStudents.php">
                    <button class="navigation-button"><img class="navpic" src="pictures/icons/student.png"></button>
                </a>
                <span class="navigation-text-attendance">Students</span>
            </div>
            <div class="navigation-div">
                <a href="manageAnnouncement.php">
                    <button class="navigation-button"><img class="navpic" src="pictures/icons/announcement.png"></button>
                </a>
                <span class="navigation-text-attendance">Announcements</span>
            </div>
            
            <div class="navigation-div">
                <a href="manageAttendance.php">
                    <button class="navigation-button"><img class="navpic" src="pictures/icons/attendance.png"></button>
                </a>
                <span class="navigation-text-attendance">Attendance</span>
            </div>
            
            <div class="navigation-div">
                <a href="adminProfile.php">
                    <button class="navigation-button"><img class="navpic" src="pictures/icons/profile.png"></button>
                </a>
                <span class="navigation-text-attendance">Profile</span>
            </div>
        </div>
    </div>
</nav>

    <main class="admin-profile-container">
        <div class="admin-card">
            <img src="pictures/adminprofile.png" class="admin-photo">
            <div class="admin-info">
                <h2 class="admin-name">Alex Tan</h2>
                <p><strong>Admin ID:</strong> ADM001</p>
                <p><strong>Email:</strong> admin.sunroom@sunway.edu.my</p>
                <p><strong>Role:</strong> System Administrator</p>
                <p><strong>Last Login:</strong> 18 June 2025, 09:45 AM</p>
            </div>
        </div>

        <div class="admin-settings">
            <h3>Quick Settings</h3>
            <a href="editAdminProfile.php"><button class="button-44">Edit Profile</button></a>
            <a href="changePassword.php"><button class="button-44">Change Password</button></a>
            <a href="LoginPage.php"><button class="button-44">Logout</button></a>
        </div>
    </main>
</body>
</html>
