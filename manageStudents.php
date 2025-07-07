<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Students</title>
  <link rel="stylesheet" href="navigation.css">
  <link rel="stylesheet" href="manageStudents.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
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



  <div class="manage-container">
    <!-- Left Panel -->
    <div class="left-panel">
      <label for="intake-select" class="intake-label">Select Intake:</label>
      <select id="intake-select" class="intake-dropdown">
        <option value="">-- Select --</option>
        <option value="042024">DIIT 042024</option>
        <option value="092024">DIIT 092024</option>
      </select>

      <div class="student-list">
        <div class="student-entry">
          <span class="student-name">Kishen Austin Nair</span>
          <a href="editStudent.php" title="Edit">
      <button class="icon-btn edit"><span class="material-symbols-outlined">edit</span></button>
    </a>
    <button class="icon-btn delete" title="Delete"><span class="material-symbols-outlined">delete</span></button>
        </div>
        <div class="student-entry">
          <span class="student-name">Alicia Tan Mei Xin</span>
          <a href="editStudent.php" title="Edit">
      <button class="icon-btn edit"><span class="material-symbols-outlined">edit</span></button>
    </a>
    <button class="icon-btn delete" title="Delete"><span class="material-symbols-outlined">delete</span></button>
        </div>
      </div>
    </div>

    <!-- Right Panel -->
    <div class="right-panel">
      <h2>Add New Student</h2>
      <form class="student-form">
        <label>Name:</label>
        <input type="text" placeholder="Enter student name">

        <label>Email:</label>
        <input type="email" placeholder="Enter student email">

        <label>Intake:</label>
        <input type="text" placeholder="e.g., DIIT 042024">

        <label>Programme:</label>
        <input type="text" placeholder="Programme name">

        <label>Country:</label>
        <input type="text" placeholder="Country">

        <label>Semester:</label>
        <input type="number" placeholder="Semester number">

        <button type="submit" class="submit-button">Create Student</button>
      </form>
    </div>
  </div>
</body>
</html>