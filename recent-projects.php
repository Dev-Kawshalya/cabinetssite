<?php
$pageTitle = 'Recent Projects - Cabinets2go';
include 'header.php';
?>

<!-- Page header with Image - Full Width Banner
================================================== -->
<div style="position: relative; width: 100%; height: 500px; overflow: hidden; background: var(--color-2-dark);">
    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1920&h=600&fit=crop" 
         alt="Recent Projects" 
         style="width: 100%; height: 100%; object-fit: cover; object-position: center; opacity: 0.7;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(24,24,24,0.8) 0%, rgba(24,24,24,0.3) 100%);"></div>
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; width: 90%; max-width: 900px; z-index: 2;">
        <span style="display: inline-block; font-family: var(--font-1); font-size: var(--text-sm); color: var(--color-1); letter-spacing: 0.3em; text-transform: uppercase; margin-bottom: var(--vspace-0_25);">Our Work</span>
        <h1 style="font-size: clamp(7rem, 7vw, 6rem); line-height: 1.05; color: white; margin: 0; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">Recent Projects</h1>
        <p style="text-transform: uppercase; font-size: clamp(1.2rem, 1.5vw, 2rem); color: rgba(255, 255, 255, 0.9); max-width: 600px; margin: var(--vspace-0_5) auto 0; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">
            Custom-Designed Luxury for Every Space
        </p>
    </div>
    <div style="position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%); z-index: 2; animation: bounce-down 2s infinite;">
        <a href="#projects" style="display: flex; align-items: center; color: white; text-decoration: none; gap: 0.5rem; opacity: 0.7; font-size: var(--text-sm);">
            <span>Scroll</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </a>
    </div>
</div>

<style>
@keyframes bounce-down {
    0%, 100% { transform: translateX(-50%) translateY(0); }
    50% { transform: translateX(-50%) translateY(8px); }
}
</style>

<!-- Page content
================================================== -->
<div class="s-pagecontent" id="projects">

    <!-- Intro Section -->
    <div class="row">
        <div class="column xl-12 grid-block">
            <div class="grid-full text-center">
                <div class="text-pretitle">Our Portfolio</div>
                <h2 style="margin-top: 0; margin-bottom: var(--vspace-0_5); color: var(--color-2); font-family: var(--font-1); font-size: clamp(2.5rem, 4vw, 4.5rem);">Custom-Designed Luxury</h2>
                <p class="lead" style="max-width: 800px; margin: 0 auto;">
                    Whether you're starting from scratch or updating an existing kitchen, we collaborate with you to craft a space that blends style with functionality. From custom cabinetry to cutting-edge appliances, every element is tailored to meet your unique needs.
                </p>
                <p style="max-width: 700px; margin: var(--vspace-0_5) auto 0;">
                    Our focus is on creating a luxury kitchen that works for your family's day-to-day routine while giving you a space you'll enjoy for years to come, all while ensuring the renovation process is smooth, stress-free, and tailored to your needs.
                </p>
            </div>
        </div>
    </div>

    <!-- Solutions for Every Space -->
    <div class="row" style="margin-top: var(--vspace-3);">
        <div class="column xl-12 grid-block">
            <div class="grid-full">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div>
                        <div class="text-pretitle">Design Solutions</div>
                        <h2 style="margin-top: 0; margin-bottom: var(--vspace-0_5);">Solutions for Every Space</h2>
                        <p class="lead" style="font-size: var(--text-md);">
                            Every kitchen presents its own challenges, whether it's making the most of a smaller layout, working with existing architecture, or creating flow in a larger area.
                        </p>
                        <p>
                            Our interior designers are here to guide you through the renovation process, offering innovative solutions that make your space more efficient, comfortable, and stylish. With expert design tailored to your lifestyle, your kitchen will become the space you've always imagined.
                        </p>
                        <p style="margin-top: var(--vspace-0_5);">
                            <strong>Looking for design inspiration or curious to see real transformations?</strong> Explore our stunning completed projects below to get an idea of what we can do for you.
                        </p>
                        <a href="contact.php" class="popup-trigger slim-btn-filled slim-btn-filled-primary slim-btn-filled-md slim-btn-filled-slide" style="margin-top: var(--vspace-0_75);">
                            Start Your Project
                            <span class="arrow-icon">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=600&h=400&fit=crop" 
                             alt="Kitchen Design Solutions" 
                             style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Gallery Grid -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="column">
            <div class="grid-full text-center">
                <h2 style="margin-top: 0; margin-bottom: var(--vspace-0_5);">Featured Projects</h2>
                <p class="lead" style="max-width: 600px; margin: 0 auto;">
                    Explore our stunning completed projects and get inspired.
                </p>
            </div>

            <!-- Project Grid -->
            <div class="projects-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2.4rem; margin-top: var(--vspace-1_5);">
                
                <!-- Project 1 -->
                <a href="projects/project1.php" class="project-card" style="background: var(--color-gray-1); border-radius: 12px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; text-decoration: none; color: inherit; display: block; cursor: pointer;">
                    <div style="overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=400&fit=crop" 
                             alt="Modern Minimalist" 
                             style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s ease;">
                    </div>
                    <div style="  padding-bottom: var(--vspace-0_75);  text-align: center;">
                        <h4 style="margin: 0; font-size: 3rem; color: var(--color-text-dark);  ">Modern Minimalist</h4>
                    </div>
                </a>

                <!-- Project 2 -->
                <a href="single-project.php" class="project-card" style="background: var(--color-gray-1); border-radius: 12px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; text-decoration: none; color: inherit; display: block; cursor: pointer;">
                    <div style="overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=600&h=400&fit=crop" 
                             alt="Luxury Family Kitchen" 
                             style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s ease;">
                    </div>
                    <div style="  padding-bottom: var(--vspace-0_75); text-align: center;">
                        <h4 style="margin: 0; font-size: 3rem; color: var(--color-text-dark);  ">Luxury Family Kitchen</h4>
                    </div>
                </a>

                <!-- Project 3 -->
                <a href="single-project.php" class="project-card" style="background: var(--color-gray-1); border-radius: 12px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; text-decoration: none; color: inherit; display: block; cursor: pointer;">
                    <div style="overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=600&h=400&fit=crop" 
                             alt="Contemporary Open Plan" 
                             style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s ease;">
                    </div>
                    <div style="  padding-bottom: var(--vspace-0_75); text-align: center;">
                        <h4 style="margin: 0; font-size: 3rem; color: var(--color-text-dark);  ">Contemporary Open Plan</h4>
                    </div>
                </a>

                <!-- Project 4 -->
                <a href="single-project.php" class="project-card" style="background: var(--color-gray-1); border-radius: 12px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; text-decoration: none; color: inherit; display: block; cursor: pointer;">
                    <div style="overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=600&h=400&fit=crop" 
                             alt="Scandinavian Inspired" 
                             style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s ease;">
                    </div>
                    <div style=" text-align: center;">
                        <h4 style="margin: 0; font-size: 3rem; color: var(--color-text-dark);  ">Scandinavian Inspired</h4>
                    </div>
                </a>

                <!-- Project 5 -->
                <a href="single-project.php" class="project-card" style="background: var(--color-gray-1); border-radius: 12px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; text-decoration: none; color: inherit; display: block; cursor: pointer;">
                    <div style="overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=600&h=400&fit=crop" 
                             alt="Traditional Classic" 
                             style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s ease;">
                    </div>
                    <div style=" text-align: center;">
                        <h4 style="margin: 0; font-size: 3rem; color: var(--color-text-dark);  ">Traditional Classic</h4>
                    </div>
                </a>

                <!-- Project 6 -->
                <a href="single-project.php" class="project-card" style="background: var(--color-gray-1); border-radius: 12px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; text-decoration: none; color: inherit; display: block; cursor: pointer;">
                    <div style="overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=600&h=400&fit=crop" 
                             alt="Compact Urban Kitchen" 
                             style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s ease;">
                    </div>
                    <div style=" padding-bottom: var(--vspace-0_75); text-align: center;">
                        <h4 style="margin: 0; font-size: 3rem; color: var(--color-text-dark);  ">Compact Urban Kitchen</h4>
                    </div>
                </a>

            </div>

        </div>
    </div>

    <!-- Ready to Start -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="column xl-12 grid-block">
            <div class="grid-full text-center" style="background: var(--color-3); padding: var(--vspace-2); border-radius: 12px;">
                <h2 style="margin-top: 0;">Ready to Start Your Project?</h2>
                <p class="lead" style="max-width: 600px; margin: 0 auto var(--vspace-0_75);">
                    Let's create your dream space together.
                </p>
                <a href="contact.php" class="popup-trigger slim-btn-filled slim-btn-filled-primary slim-btn-filled-lg slim-btn-filled-pulse">
                    Get In Touch
                    <span class="arrow-icon">
                        <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </span>
                </a>
            </div>
        </div>
    </div>

</div> <!-- end s-pagecontent -->

<!-- Project Cards Hover CSS -->
<style>
/* Project Card Hover Effects */
.project-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    border-radius: 12px;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    display: block;
    background: var(--color-gray-1);
}

.project-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.project-card:hover img {
    transform: scale(1.05);
}

.project-card img {
    transition: transform 0.5s ease;
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.project-card h4 {
    margin: 0;
    font-size: var(--text-md);
    color: var(--color-text-dark);
     
    transition: color 0.3s ease;
}

.project-card:hover h4 {
    color: var(--color-1);
}

/* Mobile Responsive */
@media screen and (max-width: 992px) {
    .projects-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 1.6rem !important;
    }
}

@media screen and (max-width: 768px) {
    .projects-grid {
        grid-template-columns: 1fr !important;
        gap: 1.2rem !important;
    }
    
    .project-card img {
        height: 200px !important;
    }
    
    .project-card h4 {
        font-size: 3rem !important;
    }
    
    .page-header-image {
        height: 350px !important;
    }
}

@media screen and (max-width: 480px) {
    .project-card img {
        height: 180px !important;
    }
    
    .page-header-image {
        height: 300px !important;
    }
}
</style>

<?php include 'sections/cta.php'; ?>
<?php include 'footer.php'; ?>