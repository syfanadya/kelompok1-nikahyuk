<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../asetdashboard/logo.png" type="image/x-icon" />
    <title>desain 1</title>
    <link rel="shortcut icon" href="../../asetdashboard/logo.png" type="image/x-icon" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    .background {
        min-height: 100vh;
        position: relative;
        background-position: center;
        background-size: cover;
    }

    .background::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);

    }

    .row::after {
        content: "";
        clear: both;
        display: block;
    }

    [class*="col-"] {
        margin: auto;
        padding: 0;
        border: 1px solid transparent;
        position: relative;
        z-index: 1;
    }

    .col-1 {
        width: 8.33%;
    }

    .col-2 {
        width: 16.66%;
    }

    .col-3 {
        width: 25%;
    }

    .col-4 {
        width: 30%;
    }

    .col-5 {
        width: 40%;
    }

    .col-6 {
        width: 50%;
    }

    .col-7 {
        width: 58.33%;
    }

    .col-8 {
        width: 66.66%;
    }

    .col-9 {
        width: 75%;
    }

    .col-10 {
        width: 83.33%;
    }

    .col-11 {
        width: 91.66%;
    }

    .col-12 {
        width: 100%;
    }

    .prewwed {
        display: block;
        margin: 0 auto;
        object-fit: cover;
        border-radius: 50%;
        margin-top: 70px;
        margin-bottom: 0px;
    }

    h1 {
        padding-top: 20px;
        padding-bottom: 20px;
        font-size: 60px;
        text-align: center;
        color: white;
        font-family: 'Great Vibes', cursive;
    }

    p {
        font-family: 'Roboto', sans-serif;
        text-align: center;
        font-size: 17px;
        color: white;

    }

    .tekan {
        text-align: center;
        margin-top: 30px;
        margin-bottom: 20px;
    }

    .tombol {
        font-family: 'Roboto', sans-serif;
        font-size: 17px;
        font-weight: 700;
        background: #91693B;
        color: white;
        border: none;
        border-radius: 30px;
        width: 196px;
        height: 50px;
        display: inline-block;
    }

    .tombol:hover {
        box-shadow: 0px 0px 20px lightgrey;
        font-weight: bold;
    }

    a {
        text-decoration: none;
        color: white;
    }


    @media only screen and (max-width: 768px) {
        [class*="col-"] {
            width: 100%;
        }

        .prewwed {
            margin-top: 40px;
        }

        div {
            padding: 20px;
            margin-bottom: 0;
        }

        h1 {
            padding-left: 60px;
            padding-right: 60px;
        }
    }
    </style>
</head>

<body>
    <div class="background" style="background-image: url('img/gallery/large/2.jpg');">
        <div class="row">
            <div class="col-5" class="foto">
                <img class="prewwed" src="img/index/foto1.jpg" alt="Prewwed" width="50%">
                <h1>Jongsuk & Yoona</h1>
                <p>Kepada Bapak/Ibu/Saudara/i</p>
                <p>Kami mengundang anda untuk hadir di acara pernikahan kami</p>

                <div class="tekan">
                    <button class="tombol"><a href="invitation.php">Buka Undangan</a></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>