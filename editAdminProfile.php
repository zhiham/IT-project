<!DOCTYPE html>
<html>
<head>
    <title>Edit Admin Profile</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="editAdminProfile.css">
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

   
    <div class="edit-profile-container">
        <h2 class="edit-profile-title">Edit Admin Profile</h2>

        <form class="edit-profile-form">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="Admin John Doe">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="admin@example.com">

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" value="+60 123-456-789">

            <label for="password">New Password</label>
            <input type="password" id="password" name="password" placeholder="Leave blank to keep current">

            <div class="form-buttons">
                <button type="submit" class="button-44">Save Changes</button>
                <a href="adminProfile.php" class="button-44 cancel-button">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
