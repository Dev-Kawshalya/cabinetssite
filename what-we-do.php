<?php
$pageTitle = 'What We Do - Monica';
include 'header.php';
?>

<!-- Page header with Image - Full Width Banner
================================================== -->
<div style="position: relative; width: 100%; height: 800px; overflow: hidden; background: var(--color-2-dark);">
    <!-- Background Image -->
    <img src="images/bg-1.jpg" 
         alt="What We Do" 
         style="width: 100%; height: 100%; object-fit: cover; object-position: center; opacity: 0.7;">
    
    <!-- Gradient Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(24,24,24,0.8) 0%, rgba(24,24,24,0.3) 100%);"></div>
    
    <!-- Content -->
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);color: white; width: 90%; z-index: 2;">
        <span style="display: inline-block; font-family: var(--font-1); font-size: var(--text-sm); color: var(--color-1); letter-spacing: 0.3em; text-transform: uppercase; margin-bottom: var(--vspace-0_25);">Our Services</span>
        <h1 style="font-size: clamp(8rem, 7vw, 6rem); line-height: 1.05; color: white; margin: 0; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">What We Do</h1>
        <p style="text-transform: uppercase;font-size: clamp(1.6rem, 2vw, 2.4rem); color: rgba(255, 255, 255, 0.9);margin: var(--vspace-0_5) auto 0; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">
            Custom Solutions Made Exclusively For You
        </p>
    </div>
    
    <!-- Scroll indicator at bottom -->
    <div style="position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%); z-index: 2; animation: bounce-down 2s infinite;">
        <a href="#services" style="display: flex; align-items: center; color: white; text-decoration: none; gap: 0.5rem; opacity: 0.7; font-size: var(--text-sm);">
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
<div class="s-pagecontent" id="services">

    <!-- Intro Section with VIDEO -->
    <div class="row">
        <div class="column xl-12 grid-block">
            <div class="grid-full">
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div>
                        <h2 style="margin-top: 0; margin-bottom: var(--vspace-0_5); color: var(--color-1); font-size: clamp(5rem, 4vw, 4.5rem);">Custom Solutions Made <br>Exclusively For You</h2>
                        <p class="" style="margin-bottom: var(--vspace-0_75);">
                            We help families and businesses design and build their dream spaces. 
                            We work with our clients to create functional designs that are completely 
                            customised to their unique requirements, styles, and individual taste.
                        </p>
                        <p>
                            Our experienced team works with you to create bespoke designs tailored to your needs. 
                            We use only the highest grade materials and sought-after inclusions.
                        </p>
                        <p style="font-weight: 600; margin-top: var(--vspace-0_5);">We make:</p>
                        <ul class="gc-longList" style="list-style: none; margin-left: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 0.5rem 1.5rem;">

                            <li style="display: flex; align-items: center; gap: 0.5rem; padding: 0.3rem 0;">
                                <span class="arrow-icon" style="color: var(--color-1);">
                                    <svg viewBox="0 0 24 24" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </span>
                                <span style="text-transform: uppercase;">Custom cabinetry</span>
                            </li>

                            <li style="display: flex; align-items: center; gap: 0.5rem; padding: 0.3rem 0;">
                                <span class="arrow-icon" style="color: var(--color-1);">
                                    <svg viewBox="0 0 24 24" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </span>
                                <span style="text-transform: uppercase;">Stone benchtops</span>
                            </li>

                            <li style="display: flex; align-items: center; gap: 0.5rem; padding: 0.3rem 0;">
                                <span class="arrow-icon" style="color: var(--color-1);">
                                    <svg viewBox="0 0 24 24" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </span>
                                <span style="text-transform: uppercase;">Bathroom vanities</span>
                            </li>

                            <li style="display: flex; align-items: center; gap: 0.5rem; padding: 0.3rem 0;">
                                <span class="arrow-icon" style="color: var(--color-1);">
                                    <svg viewBox="0 0 24 24" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </span>
                                <span style="text-transform: uppercase;">Laundry cabinetry</span>
                            </li>

                            <li style="display: flex; align-items: center; gap: 0.5rem; padding: 0.3rem 0;">
                                <span class="arrow-icon" style="color: var(--color-1);">
                                    <svg viewBox="0 0 24 24" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </span>
                                <span style="text-transform: uppercase;">Robe fit-outs</span>
                            </li>

                            <li style="display: flex; align-items: center; gap: 0.5rem; padding: 0.3rem 0;">
                                <span class="arrow-icon" style="color: var(--color-1);">
                                    <svg viewBox="0 0 24 24" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </span>
                                <span style="text-transform: uppercase;">Custom-made furniture</span>
                            </li>

                        </ul> 
                        <a href="contact.php" class="slim-btn-filled slim-btn-filled-primary slim-btn-filled-bounce popup-trigger" style="margin-top: var(--vspace-1);">
                            Get Started
                            <span class="arrow-icon">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                    </div>
                    <div>
                        <!-- VIDEO ONLY HERE -->
                        <div style=" border-radius: 12px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); aspect-ratio: 16/9; background: #000;">
                            <video 
                                style="width: 100%; height: 100%; object-fit: cover; display: block;"
                                autoplay 
                                muted 
                                loop 
                                playsinline
                                poster="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=600&h=400&fit=crop">
                                <source src="videos/Cabinets-2-G.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <!-- Play button overlay -->
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 70px; height: 70px; border-radius: 50%; background: rgba(234, 144, 16, 0.8); display: flex; align-items: center; justify-content: center; pointer-events: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="white" stroke="white" stroke-width="1"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- What We Make - Services Grid -->
    <div class="" style="margin-top: var(--vspace-4); width: 100%;">
        <div class="">
            
            <div class="grid-full text-center">
                <h2 style="margin-top: 0; margin-bottom: var(--vspace-0_5); color: var(--color-1); font-size: clamp(3rem, 4vw, 4.5rem);">What We Make</h2>
                <p class="lead" style="max-width: 700px; margin: 0 auto;">
                    We create custom solutions using only the highest grade materials and sought-after inclusions.
                </p>
            </div>

            <!-- Services Grid - Horizontal Scroll -->
            <div class="services-scroll" style="margin-top: var(--vspace-1_5); width: 100%;">
                <div class="services-scroll-inner">
                    
                    <!-- Custom Cabinetry -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=300&h=200&fit=crop" alt="Custom Cabinetry">
                        </div>
                        <h4>Custom Cabinetry</h4>
                        <p>Bespoke cabinetry designed to fit your space perfectly.</p>
                    </div>

                    <!-- Stone Benchtops -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=300&h=200&fit=crop" alt="Stone Benchtops">
                        </div>
                        <h4>Stone Benchtops</h4>
                        <p>Premium stone surfaces for your kitchen and bathroom.</p>
                    </div>

                    <!-- Bathroom Vanities -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=300&h=200&fit=crop" alt="Bathroom Vanities">
                        </div>
                        <h4>Bathroom Vanities</h4>
                        <p>Custom vanities that combine style and function.</p>
                    </div>

                    <!-- Laundry Cabinetry -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=300&h=200&fit=crop" alt="Laundry Cabinetry">
                        </div>
                        <h4>Laundry Cabinetry</h4>
                        <p>Practical storage solutions for your laundry.</p>
                    </div>

                    <!-- Robe Fit-outs -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=300&h=200&fit=crop" alt="Robe Fit-outs">
                        </div>
                        <h4>Robe Fit-outs</h4>
                        <p>Custom wardrobes designed for your space.</p>
                    </div>

                    <!-- Custom Furniture -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=300&h=200&fit=crop" alt="Custom Furniture">
                        </div>
                        <h4>Custom Furniture</h4>
                        <p>Unique pieces crafted to your specifications.</p>
                    </div>

                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="scroll-indicator">
                <span>← Scroll to see more →</span>
            </div>

        </div>
    </div>

    <!-- Kitchen Renovations - IMAGE -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="column xl-12 grid-block">
            
            <div class="grid-full">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div>
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=400&fit=crop" 
                             alt="Kitchen Renovations" 
                             style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    </div>
                    <div>
                        <h2 style="margin-top: 0; color: var(--color-1); font-size: clamp(5rem, 3.5vw, 4rem);">Kitchen Renovations</h2>
                        <p>Time to renovate your kitchen and get the space you deserve? We think so too!</p>
                        <p>
                            When you renovate your kitchen with us, you will work with one of our qualified designers 
                            to develop your new space completely customised to your individual needs and made specifically 
                            to fit the dimensions of your home.
                        </p>
                        <p>
                            We have the knowledge and expertise to provide advice and recommendations on the best layouts, 
                            design styles, innovative storage ideas, and contemporary design trends.
                        </p>
                        <a href="contact.php" class="slim-btn-filled slim-btn-filled-primary slim-btn-filled-bounce popup-trigger" style="margin-top: var(--vspace-0_5);">
                            Start Your Kitchen Renovation
                            <span class="arrow-icon">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- New Home Kitchens - IMAGE -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="column xl-12 grid-block">
            
            <div class="grid-full">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; background: var(--color-gray-1); padding: var(--vspace-2); border-radius: 12px;">
                    <div>
                        <h2 style="margin-top: 0; color: var(--color-1); font-size: clamp(5rem, 3.5vw, 4rem);">New Home Kitchens</h2>
                        <p >
                            Building a new home? Want a designer to create your dream kitchen?
                        </p>
                        <p>
                            As specialists in kitchen design, we have the capabilities to design, manufacture, and install 
                            your forever kitchen for your new home. We work with your renovations company or architect to 
                            make sure your kitchen compliments your home.
                        </p>
                        <p>
                            We will partner with you to design a one-off kitchen design suited to your individual style and 
                            requirements.
                        </p>
                        <a href="contact.php" class="slim-btn-filled slim-btn-filled-primary slim-btn-filled-bounce popup-trigger" style="margin-top: var(--vspace-0_5);">
                            Design Your New Kitchen
                            <span class="arrow-icon">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=600&h=400&fit=crop" 
                             alt="New Home Kitchens" 
                             style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Commercial Projects - IMAGE -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="column xl-12 grid-block">
            
            <div class="grid-full">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div>
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=400&fit=crop" 
                             alt="Commercial Projects" 
                             style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    </div>
                    <div>
                        <h2 style="margin-top: 0; color: var(--color-1); font-size: clamp(5rem, 3.5vw, 4rem);">Commercial Projects</h2>
                        <p >
                            Quality solutions for commercial spaces with ease and integrity.
                        </p>
                        <p>
                            We manufacture all our products to ensure the highest quality. All components are quality controlled 
                            by our team of designers, and we only install appliances by reputable suppliers.
                        </p>
                        <p>
                            Our manufacturing capabilities, team of designers, and specialist supervisors mean we can handle 
                            major commercial builds with ease.
                        </p>
                        <a href="services.php" class="slim-btn-filled slim-btn-filled-dark slim-btn-filled-md slim-btn-filled-bounce popup-trigger" style="margin-top: var(--vspace-0_5);">
                            Discuss Your Commercial Project
                            <span class="arrow-icon">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- FAQ Section -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="column xl-12 grid-block">
            <div class="grid-full text-center" style="background: var(--color-3); padding: var(--vspace-2); border-radius: 12px;">
                <h2 style="margin-top: 0;">Frequently Asked Questions</h2>
                <p class="lead" style="max-width: 600px; margin: 0 auto;">
                    Have questions about our process? We've got answers.
                </p>
                <a href="faq.php" class="slim-btn-filled slim-btn-filled-primary slim-btn-filled-md slim-btn-filled-slide" style="margin-top: var(--vspace-0_5);">
                    Visit Our FAQ Page
                    <span class="arrow-icon">
                        <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </span>
                </a>
            </div>
        </div>
    </div>

</div> <!-- end s-pagecontent -->

<?php include 'sections/cta.php'; ?>
<?php include 'footer.php'; ?>