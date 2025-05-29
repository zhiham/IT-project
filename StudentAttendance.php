<!DOCTYPE html>
<html>
<head>
    <title>SUN ROOM STUDENT PORTAL</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="studentcard.css">
	<link rel="stylesheet" href="StudentAttendance.css">
   
</head>

<body>
    <nav>
        <div class="navigation">
            <div class="left-section">
                <a href="LoginPage.php"><img class="logo" src="pictures/logo.png"></a>
            </div>

            <div class="middle-section-search">
                <input class="searchbar" type="text" name="search" placeholder="Search">
                <button class="searchimgbutton">
                    <img class="searchimg" src="pictures/icons/search.jpg">
                </button>
            </div>

            <div class="right-section-Attendance">
                <div class="navigation-div">
                    <button class="navigation-button"><a href="Timetable.php"><img class="navpic" src="pictures/icons/timetable.png"></a></button>
                    <span class="navigation-text-attendance">Timetable</span>
                </div>
                <div class="navigation-div">
                    <a href="StudentAttendance.php"><button class="navigation-button"><img class="navpic" src="pictures/icons/attendance.png"></button></a>
                    <span class="navigation-text-attendance">Attendance</span>
                </div>
                <div class="navigation-div">
                    <a href="StudentDashboard.php"><button class="navigation-button"><img class="navpic" src="pictures/icons/dashboard.png"></button></a>
                    <span class="navigation-text-attendance">Dashboard</span>
                </div>
                <div class="navigation-div">
                    <a href="Profile.php"><button class="navigation-button"><img class="navpic" src="pictures/icons/more.png"></button></a>
                    <span class="navigation-text-attendance">Profile</span>
                </div>
            </div>
        </div>
    </nav>

    <br>

    <div class="container">
     </div>
	 
	 <div class="tables-container">
		<div class="semester-tables">

			<!-- Semester 1 -->
			<div class="attendance-card">
			  <div class="attendance-semester">Semester 1</div>
			  <div class="attendance-row"><span>Discrete Mathematics</span><span>95%</span></div>
			  <div class="attendance-row"><span>Programming Concepts</span><span>93%</span></div>
			  <div class="attendance-row"><span>Web Design</span><span>96%</span></div>
			  <div class="attendance-row"><span>Database Fundamental I</span><span>90%</span></div>
			  <div class="attendance-row"><span>Operating Systems</span><span>92%</span></div>
			  <div class="attendance-row"><span>System Analysis & Design</span><span>91%</span></div>
			</div>

			<!-- Semester 2 -->
			<div class="attendance-card">
			  <div class="attendance-semester">Semester 2</div>
			  <div class="attendance-row"><span>Probability & Statistics</span><span>94%</span></div>
			  <div class="attendance-row"><span>Java Programming</span><span>92%</span></div>
			  <div class="attendance-row"><span>Data Communication</span><span>95%</span></div>
			  <div class="attendance-row"><span>Web Development</span><span>90%</span></div>
			  <div class="attendance-row"><span>Database Fundamental II</span><span>89%</span></div>
			</div>

			<!-- Semester 3 -->
			<div class="attendance-card">
			  <div class="attendance-semester">Semester 3</div>
			  <div class="attendance-row"><span>Basic Linear Algebra</span><span>97%</span></div>
			  <div class="attendance-row"><span>Fundamentals of IS</span><span>93%</span></div>
			  <div class="attendance-row"><span>Mobile Application</span><span>91%</span></div>
			  <div class="attendance-row"><span>IT Project (Part I)</span><span>94%</span></div>
			</div>

			<!-- Semester 4 -->
			<div class="attendance-card">
			  <div class="attendance-semester">Semester 4</div>
			  <div class="attendance-row"><span>Elementary Calculus</span><span>95%</span></div>
			  <div class="attendance-row"><span>Network & Security</span><span>96%</span></div>
			  <div class="attendance-row"><span>Professional Issues in IT</span><span>94%</span></div>
			  <div class="attendance-row"><span>Object-Oriented Modelling</span><span>97%</span></div>
			  <div class="attendance-row"><span>System Architecture</span><span>92%</span></div>
			</div>

			<!-- Semester 5 -->
			<div class="attendance-card">
			  <div class="attendance-semester">Semester 5</div>
			  <div class="attendance-row"><span>AI & Machine Learning</span><span>89%</span></div>
			  <div class="attendance-row"><span>Cybersecurity Principles</span><span>91%</span></div>
			  <div class="attendance-row"><span>Data Science</span><span>90%</span></div>
			</div>

			<!-- Semester 6 -->
			<div class="attendance-card">
			  <div class="attendance-semester">Semester 6</div>
			  <div class="attendance-row"><span>Internship</span><span>100%</span></div>
			  <div class="attendance-row"><span>Final Year Project</span><span>95%</span></div>
			</div>

		  </div>

		  <!-- Optional: Intake Code panel -->
		  <div class="details-table">
			<table class="timetableAttendanceIntake enhanced-intake-table">
			  <thead>
				<tr>
				  <th colspan="2">
					<div class="intake-header">
					  <label for="intake-select" class="intake-label">📘 Select Intake Code:</label>
					  <select id="intake-select" class="intake-dropdown">
						<option value="">DIIT0124</option>
						<option value="">DIIT042024</option>
						<option value="">DIIT092024</option>
					  </select>
					</div>
				  </th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td colspan="2">
					<div class="attendance-summary-card">
					  <h3 class="attendance-summary-title">🎯 Overall Intake Attendance</h3>
					  <a href="StudentAttendanceOTP.php">
						<button class="button-82-pushable" role="button">
						  <span class="button-82-shadow"></span>
						  <span class="button-82-edge"></span>
						  <span class="button-82-front text">✅ Sign Attendance</span>
						</button>
					  </a>
					</div>
				  </td>
				</tr>
			  </tbody>
			</table>
			<div class="logout-button-div">
                <button class="button-44" role="button">Settings</button>
                <button class="button-44" role="button">Logout</button>
        </div>
		  </div>
		  
		  
		</div>
		

		
		</body>
		</html>
		

		