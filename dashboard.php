<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="profile-card">
        <div class="sidebar">
            <div class="avatar-container">
                <img src="https://via.placeholder.com/100" alt="Avatar" id="profile-avatar">
            </div>
            <h2 id="profile-name">Hembo Tingor</h2>
            <p class="title">Web Designer</p>
            <button class="edit-btn" id="edit-profile-btn" title="Edit Profile">
                <i class="far fa-edit"></i>
            </button>
        </div>

        <div class="content">
            <div class="section">
                <h3>Information</h3>
                <div class="grid-info">
                    <div>
                        <label>Email</label>
                        <p id="profile-email">rntng@gmail.com</p>
                    </div>
                    <div>
                        <label>Phone</label>
                        <p id="profile-phone">9897998989</p>
                    </div>
                </div>
            </div>

            <div class="section">
                <h3>Projects</h3>
                <div class="grid-info">
                    <div>
                        <label>Recent</label>
                        <p>Sam Disuja</p>
                    </div>
                    <div>
                        <label>Most Viewed</label>
                        <p>Dinoter husainm</p>
                    </div>
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>