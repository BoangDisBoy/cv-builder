<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$summary = $_POST['summary'];
$skills = $_POST['skills'];

$elementary = $_POST['elementary'];
$elementary_year = $_POST['elementary_year'];

$secondary = $_POST['secondary'];
$secondary_year = $_POST['secondary_year'];

$tertiary = $_POST['tertiary'];
$tertiary_year = $_POST['tertiary_year'];

$targetDir = "uploads/";
if (!file_exists($targetDir)) {
    mkdir($targetDir);
}

if (!empty($_FILES["profile"]["name"])) {
    $fileName = time() . "_" . basename($_FILES["profile"]["name"]);
    $targetFile = $targetDir . $fileName;
    move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile);
} else {
    $targetFile = "https://via.placeholder.com/120";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Your CV</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body>

    <div class="cv-container fade-in">

        <!-- SIDEBAR -->
        <div class="sidebar">
            <img src="<?php echo $targetFile; ?>" class="profile">

            <h3>Contact</h3>
            <p class="contact-item"><i class="fas fa-phone"></i> <?php echo htmlspecialchars($phone); ?></p>
            <p class="contact-item"><i class="fas fa-envelope"></i> <?php echo htmlspecialchars($email); ?></p>

            <h3>Skills</h3>
            <ul>
                <?php
                $skillsArray = explode("\n", $_POST['skills']);
                foreach ($skillsArray as $skill) {
                    $skill = trim($skill);
                    if (!empty($skill)) {
                        echo "<li>" . htmlspecialchars($skill) . "</li>";
                    }
                }
                ?>
            </ul>

            <h2>Education</h2>

            <!-- Primary Education -->
            <p class="education-label">Primary Education</p>
            <div class="edu-item">
                <span class="school"><?php echo htmlspecialchars($_POST['elementary']); ?></span>
                <span class="year"><?php echo htmlspecialchars($_POST['elementary_year']); ?></span>
            </div>

            <!-- Secondary Education -->
            <p class="education-label">Secondary Education</p>
            <div class="edu-item">
                <span class="school"><?php echo htmlspecialchars($_POST['secondary']); ?></span>
                <span class="year"><?php echo htmlspecialchars($_POST['secondary_year']); ?></span>
            </div>

            <!-- Tertiary Education -->
            <p class="education-label">Tertiary Education</p>
            <div class="edu-item">
                <span class="school"><?php echo htmlspecialchars($_POST['tertiary']); ?></span>
                <span class="year"><?php echo htmlspecialchars($_POST['tertiary_year']); ?></span>
            </div>

        </div>

        <!-- MAIN -->
        <div class="main">
            <div class="name-position">
                <h1><?php echo htmlspecialchars($name); ?></h1>
                <div class="position"><?php echo htmlspecialchars($_POST['position']); ?></div>
            </div>

            <!-- Profile -->
            <section>
                <h2>Profile</h2>
                <p><?php echo nl2br(htmlspecialchars($summary)); ?></p>
            </section>

            <!-- Work Experience -->
            <h2>Work Experience</h2>
            <?php
            if (!empty($_POST['company'])) {
                $count = count($_POST['company']);
                for ($i = 0; $i < $count; $i++) {
                    $company = htmlspecialchars($_POST['company'][$i]);
                    $year = htmlspecialchars($_POST['work_year'][$i]);
                    $desc = htmlspecialchars($_POST['work_desc'][$i]);

                    if (!empty($company)) {
                        echo '<div class="work-item">';
                        echo '<span class="company">' . $company . '</span>';
                        echo '<span class="year">' . $year . '</span>';
                        echo '</div>';

                        echo '<p class="work-desc">' . nl2br($desc) . '</p>';

                        if ($i < $count - 1) {
                            echo '<hr class="minimal-hr">';
                        }
                    }
                }
            }
            ?>

            <!-- Education -->
            <section>

            </section>
        </div>

    </div>

</body>

</html>
