<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program Title - Area Number</title>
    <link rel="stylesheet" href="../assets/css/main-style.css" />
    <link rel="icon" href="../assets/PUPSJ-LOGO.png" type="image/icon type" />
</head>

<body>
    <header class="header-container">
        <?php include('../assets/static-html/header.html'); ?>
    </header>

    <section class="area program">
        <div class="header">
            <img id="header-img" src="../assets/programs/BSIT/1.png" />
            <div class="header-text">
                <h id="header1">AREA Number</h>
                <h id="header2">Area Title</h>
            </div>
        </div>

        <div id="description">
            description
        </div>

        <div class="line-container">
            <div id="thin-line" class="one"></div>
        </div>

        <div class="img-thmb">
            <a href="#" target="_blank">
                <img src="PPPA1.png" alt="program performance profile">
                <div class="overlay">
                    <div class="text">Click here</div>
                </div>
            </a>

            <a href="#" target="_blank">
                <img src="SSA1.png" alt="self survey">
                <div class="overlay">
                    <div class="text">Click here</div>
                </div>
            </a>
        </div>

        <div class="line-container">
            <div class="two" id="thin-line"></div>
        </div>

        <section class="collapsible-container">
            <button class="collapsible">
                <div class="title">Parameter A</div>
                <div class="desc">Parameter Title</div>
            </button>
            <div class="content">
                <ul>
                    <li class="list-header"><strong>Systems - Inputs and Processes</strong>
                        <ul>
                            <li class="sip">
                                <a href="#"><strong>S.1.</strong>Description</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-header"><strong>Implementation</strong>
                        <ul>
                            <li class="imp">
                                <a href="#">
                                    <strong>I.1.</strong>Description
                                </a>
                                <ul>
                                    <li>I.2.1. Description;</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="list-header"><strong>Outcome/s</strong>
                        <ul>
                            <li class="out">
                                <a href="#">
                                    <strong>O.1.</strong> Description
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>




    </section>



    <?php include('../assets/static-html/footer.html'); ?>

    <script src="../main-script.js"></script>
</body>

</html>