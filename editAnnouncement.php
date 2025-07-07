<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Announcement</title>
  <link rel="stylesheet" href="navigation.css">
  <link rel="stylesheet" href="editAnnouncement.css">
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

<!-- Edit Form -->
<div class="edit-announcement-container">
  <div class="form-box">
    <h2>📝 Edit Announcement</h2>
    <form class="announcement-form" action="#" method="post" enctype="multipart/form-data">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" value="🎓 Midterm Exams Begin Soon" required>

      <label for="description">Description</label>
      <textarea id="description" name="description" rows="6" required>
Midterm exams will start from 27 May 2025. Check your timetable and consult your lecturers for topics.
      </textarea>

      <label for="image">Update Image (optional)</label>
      <input type="file" id="image" name="image">

      <button type="submit" class="submit-btn">Update Announcement</button>
    </form>
  </div>
</div>

</body>
</html>
