<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Student</title>
  <link rel="stylesheet" href="navigation.css">
  <link rel="stylesheet" href="editStudent.css">
</head>
<body>
  <nav>
    <div class="navigation">
      <div class="left-section">
        <a href="AdminDashboard.php"><img class="logo" src="pictures/logo.png" alt="Logo"></a>
      </div>

      <div class="middle-section-search">
        <input class="searchbar" type="text" placeholder="Search">
        <button class="searchimgbutton">
          <img class="searchimg" src="pictures/icons/search.jpg" alt="Search">
        </button>
      </div>

      <div class="right-section-Attendance">
        <div class="navigation-div">
          <a href="AdminDashboard.php"><button class="navigation-button"><img class="navpic" src="pictures/icons/dashboard.png"></button></a>
          <span class="navigation-text-attendance">Dashboard</span>
        </div>
        <div class="navigation-div">
          <a href="manageStudents.php"><button class="navigation-button"><img class="navpic" src="pictures/icons/student.png"></button></a>
          <span class="navigation-text-attendance">Students</span>
        </div>
        <div class="navigation-div">
          <a href="manageAnnouncement.php"><button class="navigation-button"><img class="navpic" src="pictures/icons/announcement.png"></button></a>
          <span class="navigation-text-attendance">Announcements</span>
        </div>
        <div class="navigation-div">
          <a href="manageAttendance.php"><button class="navigation-button"><img class="navpic" src="pictures/icons/attendance.png"></button></a>
          <span class="navigation-text-attendance">Attendance</span>
        </div>
        <div class="navigation-div">
          <a href="adminProfile.php"><button class="navigation-button"><img class="navpic" src="pictures/icons/profile.png"></button></a>
          <span class="navigation-text-attendance">Profile</span>
        </div>
      </div>
    </div>
  </nav>

  <div class="edit-student-container">
    <div class="edit-form-box">
      <h2>✏️ Edit Student Details</h2>
      <form>
        <label>Full Name:</label>
        <input type="text" placeholder="Kishen Austin Nair">

        <label>Email:</label>
        <input type="email" placeholder="kishen@student.com">

        <label>Intake:</label>
        <input type="text" placeholder="DIIT 042024">

        <label>Programme:</label>
        <input type="text" placeholder="Diploma in Information Technology">

        <label>Country:</label>
        <input type="text" placeholder="Malaysia">

        <label>Semester:</label>
        <input type="number" placeholder="4">

        <button type="submit" class="submit-button">Update Student</button>
      </form>
    </div>
  </div>
</body>
</html>
