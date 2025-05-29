<!DOCTYPE html>
<html>
    <head>
        <title>SUN ROOM STUDENT PORTAL</title>
        <link rel="stylesheet" href="mainpage.css">
        <link rel="stylesheet" href="navigation.css">
		<link rel="stylesheet" href="studentcard.css">
		<link rel="stylesheet" href="OTP.css">
	
        <nav>
            <div class="navigation">
                <div class="left-section">
                    <a href="LoginPage.php"><img class="logo" src="pictures/logo.png"></a>
                </div>
				
				
				<div class="middle-section-search">
                    <input class="searchbar" type="text" name="search" placeholder="Search">
                    <button class="searchimgbutton">
                        <img class="searchimg" src="pictures/icons/search.jpg"></button>
                </div>
				
                
                <div class="right-section-Attendance">
                    <div class="navigation-div">
                        <a href="Timetable.php"><button class="navigation-button"><img class="navpic" src="pictures/icons/timetable.png"></button></a>
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
                        <a href="Profile.php"><button class="navigation-button"><img class="navpic" src="pictures/icons/profile.png"></button></a>
                        <span class="navigation-text-attendance">Profile</span>
                    </div>
                  
                </div>
            </div>
        </nav>
    </head>
	
	
	<body>
        <br>
		<div class="container">


		  <div class="otp-wrapper">
			<div class="Attendance-OTP-Box">
			  <div class="Number"><input type="text" maxlength="1" class="otp-input" /></div>
			  <div class="Number"><input type="text" maxlength="1" class="otp-input" /></div>
			  <div class="Number"><input type="text" maxlength="1" class="otp-input" /></div>
		   </div>

			<div class="button-container">
			  <button class="button-82-pushable" role="button">
				<span class="button-82-shadow"></span>
				<span class="button-82-edge"></span>
				<span class="button-82-front text">Enter OTP</span>
			  </button>
			</div>
			</div>

 
		  <div class="profile-dive">
			<div class="profile-card">
			  <div class="profile-header">
				<p class="profile-name">Kishen Austin Nair 2304885</p>
			  </div>
			  <div class="profile-body">
				<div class="profile-photo">
				  <img src="pictures/studentpics/kishenAN.jpg" alt="Profile Photo">
				</div>
				<div class="profile-info">
				  <p class="ProfileInfo"><b>Programme:</b> Diploma In Information Technology</p>
				  <p class="ProfileInfo"><b>Intake:</b> April 2024</p>
				</div>
			  </div>
			</div>
		  </div>

		</div>
			  
		
				
		

    </body>
    
</html>

