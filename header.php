<?php
define('BASE_URL', 'http://localhost/cabinetssite/');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Cabinets2go'; ?></title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/vendor.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASE_URL; ?>site.webmanifest">

</head>

<body id="top">

<!-- preloader
================================================== -->
<div id="preloader">
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 2.4rem;">
        <!-- Logo -->
        <div class="s-header__logo">
            <a class="logo" href="index.php">
                <img style="width: 200px; height: auto; display: block;" src="<?php echo BASE_URL; ?>images/icons/imags.jpg" alt="Homepage">
            </a>
        </div>
        <!-- Loading Dots -->
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <!-- Optional Loading Text -->
        <p style="color: var(--color-3); font-family: var(--font-1); font-size: var(--text-sm); letter-spacing: 0.2em;opacity: 0.6; animation: pulse-text 1.5s ease-in-out infinite;">
            LOADING
        </p>
    </div>
</div>

<style>
@keyframes pulse-text {
    0%, 100% { opacity: 0.4; }
    50% { opacity: 1; }
}
</style>

    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap ss-home">

        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="index.php">
                            <img src="<?php echo BASE_URL; ?>images/icons/imags.jpg" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
                    <?php
                    // Add this function at the top of your header.php file
                    function isProjectPage() {
                        $current_page = basename($_SERVER['PHP_SELF']);
                        $current_path = $_SERVER['REQUEST_URI'];
                        
                        // Check if on projects listing page
                        if ($current_page == 'recent-projects.php') {
                            return true;
                        }
                        
                        // Check if in projects folder
                        if (strpos($current_path, '/projects/') !== false) {
                            return true;
                        }
                        
                        // Check for single project files
                        $project_files = ['single-project.php', 'project-detail.php', 'project.php'];
                        foreach ($project_files as $file) {
                            if ($current_page == $file) {
                                return true;
                            }
                        }
                        
                        return false;
                    }

                    // Get current page
                    $current_page = basename($_SERVER['PHP_SELF']);
                    ?>

                    <ul class="s-header__menu-links" style="margin-bottom: 0rem;">
                        <li class="<?php echo ($current_page == 'index.php') ? 'current' : ''; ?>">
                            <a href="<?php echo BASE_URL; ?>index.php">HOME</a>
                        </li>
                        <li class="<?php echo ($current_page == 'what-we-do.php') ? 'current' : ''; ?>">
                            <a href="<?php echo BASE_URL; ?>what-we-do.php">WHAT WE DO</a>
                        </li>
                        
                        <li class="<?php echo ($current_page == 'our-process.php') ? 'current' : ''; ?>">
                            <a href="<?php echo BASE_URL; ?>our-process.php">OUR PROCESS</a>
                        </li>
                        
                        <li class="<?php echo isProjectPage() ? 'current' : ''; ?>">
                            <a href="<?php echo BASE_URL; ?>recent-projects.php">PROJECTS</a>
                        </li>
                        
                        <li class="<?php echo ($current_page == 'about.php') ? 'current' : ''; ?>">
                            <a href="<?php echo BASE_URL; ?>about.php">ABOUT US</a>
                        </li>
                        
                        <li class="<?php echo ($current_page == 'faq.php') ? 'current' : ''; ?>">
                            <a href="<?php echo BASE_URL; ?>faq.php">FAQ</a>
                        </li>
                        
                        <li class="<?php echo ($current_page == 'contact.php') ? 'current' : ''; ?>">
                            <a href="<?php echo BASE_URL; ?>contact.php">CONTACT</a>
                        </li>
                    </ul> <!-- s-header__menu-links -->
                    <div class="s-header__contact" style="margin-top: 0rem;">
                        <a href="contact.php" class="slim-btn-filled slim-btn-filled-primary popup-trigger btn btn--primary s-header__contact-btn" style="padding: 1rem 1.5rem;">INQUIRY NOW</a>                        
                    </div> <!-- s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->

        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">