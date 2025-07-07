<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Announcements - Admin</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="manageAnnouncement.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <div class="admin-container">
        <h1 class="admin-title">📢 Announcement Management</h1>

        <div class="announcement-layout">

        
            <div class="announcement-left">
                <h2>Existing Announcements</h2>

              
                <div class="announcement-card">
                    <div class="announcement-text">
                        <h3>🎓 Midterm Exams Begin Soon</h3>
                        <p>Midterm exams will start from 27 May 2025. Check your timetable and consult your lecturers for topics.</p>
                        <p class="announcement-date">Posted on: 15 May 2025</p>
                    </div>
                    <div class="announcement-actions">
                        <a href="editAnnouncement.php"><span class="material-icons action-icon">edit</span></a>
                        <span class="material-icons action-icon">delete</span>
                    </div>
                </div>

                <div class="announcement-card">
                    <div class="announcement-text">
                        <h3>🚌 Shuttle Bus Timetable Updated</h3>
                        <p>New shuttle bus schedule available next week. Check the transport section for updated times.</p>
                        <p class="announcement-date">Posted on: 5 May 2025</p>
                    </div>
                    <div class="announcement-actions">
                        <a href="editAnnouncement.php"><span class="material-icons action-icon">edit</span></a>
                        <span class="material-icons action-icon">delete</span>
                    </div>
                </div>

         
            </div>

         
            <div class="announcement-right">
                <h2>Create New Announcement</h2>
                <form class="announcement-form" action="#" method="post" enctype="multipart/form-data">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter announcement title" required>

                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="5" placeholder="Enter announcement description" required></textarea>

                    <label for="image">Image (optional)</label>
                    <input type="file" id="image" name="image">

                    <button type="submit" class="submit-btn">Post Announcement</button>
                </form>
            </div>

        </div>
    </div>

</body>
</html>
