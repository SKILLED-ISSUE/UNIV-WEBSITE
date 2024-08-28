<?php
// Define a function to get the asset URL
function asset($path) {
    // Base URL is set to point to the assets folder relative to the web root
    $baseUrl = '/assets/';
    return $baseUrl . $path;
}
?>

<div id="preloader">
    <img src="<?php echo asset('CUBE-LOAD.gif'); ?>" alt="loading">
</div>

<div class="cmps-logo">
    <a href="index.php">
        <img id="logo" src="<?php echo asset('PUPSJ-LOGO.png'); ?>" alt="PUP San Juan logo" />
    </a>
</div>

<div class="cmps-header">
    <a href="index.php">
        <img id="campus-name" src="<?php echo asset('PUPSJ-HEADER.png'); ?>" alt="PUP San Juan header" />
    </a>
    <ul class="nav-items">
        <li class="dropdown">
            <a href="#">About</a>
            <ul class="dropdown-content">
                <li><a href="#">Vision and Mission</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Administration</a></li>
                <li><a href="#">Facilities</a></li>
                <li><a href="#">Faculty and Staff</a></li>
                <li><a href="#">Local Task Force</a></li>
            </ul>
        </li>
        <li><a href="">Certificate of Authenticity</a></li>
        <li class="dropdown">
            <a href="#">Programs</a>
            <ul class="dropdown-content">
                <li><a href="programs/bsa.php">BSA</a></li>
                <li><a href="programs/bsent.php">BSENT</a></li>
                <li><a href="programs/bsed-en.php">BSED - English</a></li>
                <li><a href="programs/bshm.php">BSHM</a></li>
                <li><a href="programs/bsit.php">BSIT</a></li>
                <li><a href="programs/bsba-fm.php">BSBA - FM</a></li>
            </ul>
        </li>
        <li><a href="">Exhibits</a></li>
    </ul>
</div>

<button type="submit" class="search-button">
    <img class="search" src="<?php echo asset('SEARCH.png'); ?>" alt="search" />
</button>

<div id="preloader">
    <img src="<?php echo asset('CUBE-LOAD.gif'); ?>" alt="loading">
</div>

<div class="cmps-logo">
    <a href="index.php">
        <img id="logo" src="<?php echo asset('PUPSJ-LOGO.png'); ?>" alt="PUP San Juan logo" />
    </a>
</div>

<div class="cmps-header">
    <a href="index.php">
        <img id="campus-name" src="<?php echo asset('PUPSJ-HEADER.png'); ?>" alt="PUP San Juan header" />
    </a>
    <ul class="nav-items">
        <li class="dropdown">
            <a href="#">About</a>
            <ul class="dropdown-content">
                <li><a href="#">Vision and Mission</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Administration</a></li>
                <li><a href="#">Facilities</a></li>
                <li><a href="#">Faculty and Staff</a></li>
                <li><a href="#">Local Task Force</a></li>
            </ul>
        </li>
        <li><a href="">Certificate of Authenticity</a></li>
        <li class="dropdown">
            <a href="#">Programs</a>
            <ul class="dropdown-content">
                <li><a href="programs/bsa.php">BSA</a></li>
                <li><a href="programs/bsent.php">BSENT</a></li>
                <li><a href="programs/bsed-en.php">BSED - English</a></li>
                <li><a href="programs/bshm.php">BSHM</a></li>
                <li><a href="programs/bsit.php">BSIT</a></li>
                <li><a href="programs/bsba-fm.php">BSBA - FM</a></li>
            </ul>
        </li>
        <li><a href="">Exhibits</a></li>
    </ul>
</div>

<button type="submit" class="search-button">
    <img class="search" src="<?php echo asset('SEARCH.png'); ?>" alt="search" />
</button>
