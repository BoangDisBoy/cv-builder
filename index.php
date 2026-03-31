<!DOCTYPE html>
<html>

<head>
    <title>CV Builder</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body>
    <div class="form-container fade-in">
        <h1>Create Your CV</h1>

        <form action="process.php" method="POST" enctype="multipart/form-data">

            <hr>
            <h2>Personal Info</h2>
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone Number" required>

            <hr>
            <h2>Profile</h2>
            <input type="text" name="position" placeholder="Your Position (e.g., Web Developer)">
            <textarea name="summary" placeholder="Short intro..."></textarea>
            <hr>

            <h2>Work Experience / Achievemnets</h2>

            <div id="work-container">

                <div class="work-block">
                    <input type="text" name="company[]" placeholder="Company Name/Achievements">
                    <input type="text" name="work_year[]" placeholder="Year (e.g., 2023 - 2025)">
                    <textarea name="work_desc[]" placeholder="Describe your role..."></textarea>
                    <hr>
                </div>

            </div>

            <button type="button" onclick="addWork()">+ Add More</button>

            <hr>

            <h2>Education</h2>

            <p class="education-label">Primary Education</p>
            <input type="text" name="elementary" placeholder="School Name">
            <input type="text" name="elementary_year" placeholder="Year Graduated">

            <p class="education-label">Secondary Education</p>
            <input type="text" name="secondary" placeholder="School Name">
            <input type="text" name="secondary_year" placeholder="Year Graduated">

            <p class="education-label">Tertiary Education</p>
            <input type="text" name="tertiary" placeholder="College/University">
            <input type="text" name="tertiary_year" placeholder="Year or Present">
            <hr>

            <h2>Skills</h2>
            <textarea name="skills"></textarea>
            <hr>

            <h2>Photo</h2>
            <input type="file" name="profile">
            <hr>

            <button type="submit">Generate CV</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>
