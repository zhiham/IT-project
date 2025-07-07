<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Attendance</title>
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="manageAttendance.css">
    <script defer>
        let timer = 300;
        let otpEls;

        window.onload = function () {
            otpEls = [
                document.getElementById('otp1'),
                document.getElementById('otp2'),
                document.getElementById('otp3')
            ];

            document.getElementById('generate-btn').addEventListener('click', () => {
                otpEls.forEach(el => {
                    el.textContent = Math.floor(Math.random() * 9 + 1);
                });
                timer = 300;
            });

            setInterval(() => {
                if (timer > 0) {
                    timer--;
                    document.getElementById('countdown').textContent = timer;
                } else {
                    otpEls.forEach(el => el.textContent = '0');
                }
            }, 1000);
        };
    </script>
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



    <div class="attendance-container">
        <div class="left-panel">
            <h2>📅 Attendance Session</h2>

            <label for="intake">Intake:</label>
            <select id="intake">
                <option>DIIT 012024</option>
                <option>DIIT 042024</option>
                <option>DIIT 092024</option>
            </select>

            <label for="timeslot">Time Slot:</label>
            <select id="timeslot">
                <option>08:00 - 10:00</option>
                <option>10:00 - 12:00</option>
                <option>01:00 - 03:00</option>
                <option>03:00 - 05:00</option>
            </select>

            <button id="generate-btn" class="generate-btn">Generate</button>

            <div class="otp-display">
                <div class="otp-box" id="otp1">0</div>
                <div class="otp-box" id="otp2">0</div>
                <div class="otp-box" id="otp3">0</div>
            </div>

            <div class="timer-text">⏳ Time Remaining: <span id="countdown">300</span> seconds</div>
        </div>

        <div class="right-panel">
            <h2>📝 Manual Attendance</h2>

            <div class="student-list">
                <?php
                    $students = ["Kishen Austin", "Ng Le Ann", "Loke Zhi Han"];
                    foreach ($students as $student) {
                        echo "<div class='student-row'>
                                <span class='student-name'>{$student}</span>
                                <label><input type='checkbox' class='absent-checkbox'> Absent</label>
                                <select class='reason-dropdown'>
                                    <option value=''>Select Reason</option>
                                    <option>Sick</option>
                                    <option>Emergency</option>
                                    <option>Family Issue</option>
                                    <option>Others</option>
                                </select>
                              </div>";
                    }
                ?>
            </div>
			<div class="confirm-attendance">
    <button class="button-44">✅ Confirm Attendance</button>
</div>
        </div>
    </div>
</body>
</html>
