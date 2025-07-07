<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classroom Finder</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="ClassroomFinder.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

    <div class="classroom-container">
        <div class="filters">
            <select id="date-filter" class="filter-dropdown">
                <option value="">Select Date</option>
                <option value="2025-05-20">20 May 2025</option>
                <option value="2025-05-21">21 May 2025</option>
                <option value="2025-05-22">22 May 2025</option>
            </select>

            <select id="day-filter" class="filter-dropdown">
                <option value="">Select Day</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
            </select>
        </div>

        <div class="classroom-list">
            <h2 id="classroom-heading">Classrooms Available on 20 May 2025 (Monday)</h2>

            <!-- Example Classroom Card -->
            <div class="classroom-box">
                <h3 class="classroom-name">Auditorium 1</h3>
                <div class="available-times">
                    <p><strong>Available Time Slots:</strong></p>
                    <ul>
                        <li>08:00 AM - 10:00 AM</li>
                        <li>02:00 PM - 04:00 PM</li>
                    </ul>
                </div>
            </div>

            <div class="classroom-box">
                <h3 class="classroom-name">Classroom 202</h3>
                <div class="available-times">
                    <p><strong>Available Time Slots:</strong></p>
                    <ul>
                        <li>09:00 AM - 11:00 AM</li>
                        <li>01:00 PM - 03:00 PM</li>
                    </ul>
                </div>
            </div>

            <div class="classroom-box">
                <h3 class="classroom-name">NW-TR1-2</h3>
                <div class="available-times">
                    <p><strong>Available Time Slots:</strong></p>
                    <ul>
                        <li>10:00 AM - 12:00 PM</li>
                        <li>03:00 PM - 05:00 PM</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
