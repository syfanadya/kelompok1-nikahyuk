<?php
include "ceklogin.php";
require_once "config.php";

?>
<html>

<head>
    <title>Profile</title>
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
    <style>
    /*fonts*/
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Italiana&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300&display=swap');

    /* DEFAULT STYLE */
    body {
        margin: 0;
        line-height: 1.5;
        font-size: 16px;
        font-weight: 400;
        background-color: #f3f2f1;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    a {
        text-decoration: none;
    }

    :before,
    :after {
        box-sizing: border-box;
    }

    img {
        max-width: 100%;
        vertical-align: middle;
    }

    .container {
        max-width: 1140px;
        margin: auto;
    }

    header,
    section,
    footer {
        display: block;
        width: 100%;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .justify-content-between {
        justify-content: space-between;
    }

    .align-items-center {
        align-items: center;
    }

    .section-title {
        flex: 0 0 100%;
        max-width: 100%;
        padding: 0 15px;
        text-align: center;
        margin-bottom: 60px;
    }

    .section-title h2 {
        font-size: 45px;
        color: #000000;
        font-weight: 700;
        font-family: 'Great Vibes', cursive;
        letter-spacing: 2px;
    }

    .btn-1 {
        padding: 10px 35px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        border: 2px solid transparent;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        transition: all 0.5s ease;
        font-weight: 500;
    }

    .btn-1:focus {
        outline: none;
    }

    .btn-1:hover {
        background-color: transparent;
    }

    /* COUPLE SECTION */
    .couple-section {
        padding: 80px 0 80px;
    }

    .couple-section .couple {
        flex: 0 0 50%;
        max-width: 50%;
        padding: 0 60px;
        text-align: center;
        position: relative;
    }

    .couple-section .couple:nth-child(2):before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 1px;
        height: 100%;
        background-color: #cccccc;
    }

    .couple-section .couple i.fa-heart {
        position: absolute;
        left: -15px;
        width: 31px;
        background-color: #f3f2f1;
        padding: 5px;
        text-align: center;
        font-size: 18px;
        top: 30%;
    }

    .couple-section .couple img {
        max-width: 280px;
        width: 100%;
        border-radius: 50%;
        border: 10px solid transparent;
    }

    .couple-section .couple h2 {
        margin: 15px 0;
        letter-spacing: 2px;
        color: #0F025F;
        font-style: normal;
        font-weight: 700;
        font-size: 60px;
    }

    .couple-section .couple p {
        font-size: 16px;
        line-height: 26px;
        color: #555555;
        margin: 0;
    }

    .couple-section .social-links {
        padding-top: 30px;
    }

    .couple-section .social-links a {
        display: inline-block;
        margin: 0 3px;
    }

    .couple-section .social-links a i {
        height: 32px;
        width: 32px;
        line-height: 30px;
        border: 1px solid transparent;
        text-align: center;
        display: block;
        border-radius: 50%;
        transition: all 0.5s ease;
    }

    .couple-section .social-links a:hover i {
        color: #f3f2f1;
    }
    </style>
</head>

<body>
    <!-- COUPLE SECTION START -->
    <section class="couple-section" id="couple">
        <div class="container">

            <div class="row">
                <div class="couple">
                    <img src="images/users-foto/yonna.jpg" alt="Foto Profile">
                </div>
                <div class="couple">
                    <h2>Profile</h2>
                    <p>Username : <?php echo $_SESSION['username'] ?></p>
                    <p>Email :
                        <?php 
                                $sql = "SELECT email FROM users WHERE username='{$_SESSION['username']}'";
                                $result = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)>0){
                                    $row = mysqli_fetch_assoc($result);
                                    $email = $row['email'];
                                    echo $email;
                                } else {
                                    echo "Username tidak ditemukan.";
                                }
                            ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- COUPLE SECTION END -->
</body>

</html>