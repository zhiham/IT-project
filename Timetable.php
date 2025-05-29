<!DOCTYPE html>
<html>
<head>
    <title>SUN ROOM STUDENT PORTAL</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="studentcard.css">
	<link rel="stylesheet" href="Timetable.css">
   
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
		
        
		
		<div class="logout-button-div">
                <button class="button-44" role="button">Settings</button>
                <button class="button-44" role="button">Logout</button>
        </div>

       
     </div>
		

		
		
		
		<div class="dropdown-arrow">
			<select>
				<option value="">Select Course</option>
				<option>DIIT 012024</option>
				<option>DIIT 042024</option>
				<option>DIIT 092024</option>
			</select>
			
			<select>
				<option value="">Select Week</option>
				<option>19 May 2025</option>
				<option>26 May 2025</option>
				<option>2 June 2025</option>
			</select>
			
			<select>
				<option value="">Sort By</option>
				<option value="name">Name (A-Z)</option>
				<option value="ageAsc">Age (Low to High)</option>
				<option value="ageDesc">Age (High to Low)</option>
			</select>
			
		</div>
		
		<table class="timetable">
		
		 <tbody>
			<tr>
			  <th class="Weekday">Monday</th>
			  
			 <td>
				<b>Module Code:</b> DDS2133<br>
				<b>Location:</b> Auditorium 3<br>
				<b>Module Name:</b> ELEMENTARY CALCULUS<br>
				<b>Lecturer :</b> DR NOR AFIFAH HANIM BINTI ZULKEFLI<br>
				<b>Time :</b> 08:00 AM - 09:00 AM<br>
			</td>
				
			 <td>
				<b>Module Code:</b> DIT2133<br>
				<b>Location:</b> Auditorium 3<br>
				<b>Module Name:</b> COMPUTER SYSTEM ARCHITECTURE<br>
				<b>Lecturer :</b> DHARMIDRAN ANANTHARSEKARAN<br>
				<b>Time :</b> 12:00 PM - 01:00 PM<br>
			</td>
			
			<td>
				<b>Module Code:</b> DIT2123<br>
				<b>Location:</b> Auditorium 3<br>
				<b>Module Name:</b> OBJECT-ORIENTED MODELLING<br>
				<b>Lecturer :</b> NORAZILA ALI<br>
				<b>Time :</b> 01:00 PM - 02:00 PM<br>
			</td>
				
			  
			</tr>
			<tr>
			  <th class="Weekday">Tuesday</th>
			  
			  <td>
				<b>Module Code:</b> DIT1343<br>  
				<b>Location:</b> Auditorium 3<br>
				<b>Module Name:</b> PROFESSIONAL ISSUES IN INFORMATION TECHNOLOGY<br>
				<b>Lecturer :</b> HASBULLAH OSMAN<br>
				<b>Time :</b> 01:00 PM - 02:00 PM<br>
			  </td>
			  <td>
				<b>Module Code:</b> DIT1233<br>
				<b>Location:</b> Auditorium 3<br>
				<b>Module Name:</b> NETWORK ADMINISTRATION & SECURITY<br>
				<b>Lecturer :</b> SYUHADA AZWA SELIMI<br>
				<b>Time :</b> 02:00 PM - 03:00 PM<br>
			  </td>
			  <td>
				<b>Module Code:</b> DIT2232<br>
				<b>Location:</b> Auditorium 3<br>
				<b>Module Name:</b> MATHEMATICS LOGIC AND THEORY SET<br>
				<b>Lecturer :</b>  DR NOR AFIFAH HANIM BINTI ZULKEFLI<br>
				<b>Time :</b> 03:00 PM - 04:00 PM<br>
			  </td>
		
			</tr>
			<tr>
			  <th class="Weekday">Wednesday</th>
				
					<td>
					<b>Module Code:</b> DIT2232<br>
					<b>Location:</b> NW-TR1-2<br>
					<b>Module Name:</b> MATHEMATICS LOGIC AND THEORY SET<br>
					<b>Lecturer :</b>  DR NOR AFIFAH HANIM BINTI ZULKEFLI<br>
					<b>Time :</b> 12:00 PM - 02:00 PM<br>
				  </td>
				  
				  <td>
					<b>Module Code:</b> DDS2133<br>
					<b>Location:</b> NE-5-4<br>
					<b>Module Name:</b> ELEMENTARY CALCULUS<br>
					<b>Lecturer :</b> DR NOR AFIFAH HANIM BINTI ZULKEFLI<br>
					<b>Time :</b> 02:00 AM - 04:00 AM<br>
				</td>
				

			</tr>
			<tr>
			  <th class="Weekday">Thursday</th>
				
					<td>
					<b>Module Code:</b> DIT1233<br>
					<b>Location:</b> NW-TR1-2<br>
					<b>Module Name:</b> NETWORK ADMINISTRATION & SECURITY<br>
					<b>Lecturer :</b> SYUHADA AZWA SELIMI<br>
					<b>Time :</b> 10:00 AM - 12:00 PM<br>
				  </td>
				  <td>
					<b>Module Code:</b> DIT1343<br>  
					<b>Location:</b> NW-4-22<br>
					<b>Module Name:</b> PROFESSIONAL ISSUES IN INFORMATION TECHNOLOGY<br>
					<b>Lecturer :</b> HASBULLAH OSMAN<br>
					<b>Time :</b> 12:00 PM - 02:00 PM<br>
				  </td>
				  
				  <td>
				<b>Module Code:</b> DIT2133<br>
					<b>Location:</b> NW-G-3<br>
					<b>Module Name:</b> COMPUTER SYSTEM ARCHITECTURE<br>
					<b>Lecturer :</b> DHARMIDRAN ANANTHARSEKARAN<br>
					<b>Time :</b> 04:00 PM - 06:00 PM<br>
				</td>
			
			</tr>
			<tr>
			  <th class="Weekday">Friday</th>
			  
				  <td>
					<b>Module Code:</b> DIT2123<br> 
					<b>Location:</b> SW-CL1-2<br>
					<b>Module Name:</b> OBJECT-ORIENTED MODELLING<br>
					<b>Lecturer :</b> NORAZILA ALI<br>
					<b>Time :</b> 10:30 AM - 12:30 PM<br>
				</td>
			  
			</tr>
		
		</table>
			
			

			
				
		
		
		
		
		
		</body>
		</html>