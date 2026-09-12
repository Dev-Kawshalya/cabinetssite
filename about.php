<?php
$pageTitle = 'About Us - Cabinets2go';
include 'header.php';
?>

<!-- Page header with Image - Full Width Banner
================================================== -->
<div style="position: relative; width: 100%; height: 800px; overflow: hidden; background: var(--color-2-dark);">
    <img src="images/bg-3.jpg" 
         alt="About Us" 
         style="width: 100%; height: 100%; object-fit: cover; object-position: center; opacity: 0.7;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(24,24,24,0.8) 0%, rgba(24,24,24,0.3) 100%);"></div>
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);  color: white; width: 90%;z-index: 2;">
        <span style="display: inline-block; font-family: var(--font-1); font-size: var(--text-sm); color: var(--color-1); letter-spacing: 0.3em; text-transform: uppercase; margin-bottom: var(--vspace-0_25);">About Us</span>
        <h1 style="font-size: clamp(8rem, 7vw, 6rem); line-height: 1.05; color: white; margin: 0; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">Luxury Kitchens,<br>Locally Made</h1>
        <p style="text-transform: uppercase;font-size: clamp(1.6rem, 2vw, 2.4rem); color: rgba(255, 255, 255, 0.9);  margin: var(--vspace-0_5) auto 0; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">
            Award-Winning Kitchen Designer Since 1999
        </p>
    </div>
    <div style="position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%); z-index: 2; animation: bounce-down 2s infinite;">
        <a href="#about" style="display: flex; align-items: center; color: white; text-decoration: none; gap: 0.5rem; opacity: 0.7; font-size: var(--text-sm);">
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
<div class="s-pagecontent" id="about">

    <!-- Intro Section -->
    <div class="row">
        <div class="column xl-12 grid-block">
            <div class="grid-full text-center">
                <h2 style="margin-top: 0;color: #885102;font-size:5rem; margin-bottom: var(--vspace-0_5);">Luxury Kitchens, Locally Made</h2>
                <p class="lead" style="margin: 0 auto;">
                    We are an award-winning kitchen designer specialising in luxury kitchen renovations. We have led the industry for over 25 years and haven't stopped innovating since the beginning.
                </p>
                <p style="margin: var(--vspace-0_5) auto 0;">
                    Our manufacturing capabilities allow us to build over 3000 kitchens for families and commercial properties every year. 
                    We make all your cabinetry, benchtops and splashbacks in-house, and it's our own talented craftspeople that bring it to life.
                </p>
            </div>
        </div>
    </div>

    <!-- Awards & Recognition -->
    <div class="row" style="margin-top: var(--vspace-3);">
        <div class="">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; background: var(--color-gray-1); padding: var(--vspace-2); border-radius: 12px;">
                <div>
                    <h2 style="color: #885102;font-size:5rem;margin-top: 0; margin-bottom: var(--vspace-0_5);">Excellence in Service</h2>
                    <p class="lead" style="font-size: var(--text-md);">
                        We win countless Housing Industry Association (HIA) awards, because not only do we design magazine-worthy kitchens, but we continue to raise the bar with high-end service and talented artistry.
                    </p>
                    <p>
                        In <strong>2024, 2023 and 2022</strong> we have been awarded the <strong>'Excellence in Service' Award</strong> which represents our high level of design, construction and service.
                    </p>
                    <div style="display: flex; gap: 2rem; margin-top: var(--vspace-0_75); flex-wrap: wrap;">
                        <div style="text-align: center;">
                            <span style="display: block; font-size: 3rem; font-weight: 700; color: var(--color-1);">25+</span>
                            <span style="font-size: var(--text-sm); color: var(--color-text-light);">Years Experience</span>
                        </div>
                        <div style="text-align: center;">
                            <span style="display: block; font-size: 3rem; font-weight: 700; color: var(--color-1);">3000+</span>
                            <span style="font-size: var(--text-sm); color: var(--color-text-light);">Kitchens Built Yearly</span>
                        </div>
                        <div style="text-align: center;">
                            <span style="display: block; font-size: 3rem; font-weight: 700; color: var(--color-1);">150+</span>
                            <span style="font-size: var(--text-sm); color: var(--color-text-light);">Team Members</span>
                        </div>
                    </div>
                    <a href="contact.php" class="popup-trigger slim-btn-filled slim-btn-filled-primary slim-btn-filled-md slim-btn-filled-slide" style="margin-top: var(--vspace-0_75);">
                        Work With Us
                        <span class="arrow-icon">
                            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </span>
                    </a>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=400&fit=crop" 
                         alt="Award Winning Kitchen" 
                         style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </div>

    <!-- Your Only Kitchen Choice -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="column xl-12 grid-block">
            <div class="grid-full">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div>
                        <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=600&h=400&fit=crop" 
                             alt="Kitchen Design" 
                             style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    </div>
                    <div>
                        <div class="text-pretitle">Why Choose Us</div>
                        <h2 style="color: #885102;font-size:5rem;margin-top: 0; margin-bottom: var(--vspace-0_5);">Your Only Kitchen Choice</h2>
                        <p class="lead" style="font-size: var(--text-md);">
                            How do you choose the right kitchen designer for you? You reflect on your values.
                        </p>
                        <p>
                            Do you love local business? Want a luxury kitchen customised to you? Are you more comfortable with a team who wins awards?
                        </p>
                        <p>
                            These are all our priorities too. We also realised early on that our customers valued communication and efficient service. 
                            That's why we developed a <strong>three-step process</strong> that keeps you in the loop.
                        </p>
                        <p>
                            From our award-winning designers, to our client liaisons, our passionate team is there to guide you through the 
                            design, manufacture and install process for your new kitchen. <strong>You'll feel looked after every step of the way.</strong>
                        </p>
                        <a href="our-process.php" class="slim-btn-filled slim-btn-filled-dark slim-btn-filled-md slim-btn-filled-bounce" style="margin-top: var(--vspace-0_75);">
                            View Our Process
                            <span class="arrow-icon">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Meet The Team -->
    <div class="row" style="width: 100%; margin-top: var(--vspace-4);background: var(--color-2-dark); padding: var(--vspace-2); padding-bottom: var(--vspace-4);padding-top: var(--vspace-4);" >
        <div class="">
            <div class="grid-full text-center">
                <h2 style="color: white;font-size:5rem;margin-top: 0; margin-bottom: var(--vspace-0_5);">Meet The Maker Designer Kitchens Team</h2>
                <p class="lead" style="color:rgba(255, 255, 255, 0.6);max-width: 600px; margin: 0 auto;">
                    We're a big team! We employ over 150 full-time staff.
                </p>
            </div>

            <div style="margin-top: var(--vspace-2);" class="s-clients__content-block width-sixteen-col">
                <div class="">
                    <div class="clients-list">                            
                        <div class="clients-list__item">
                            <a href="#0">
                                <h4 style="margin-top: 0; margin-bottom: var(--vspace-0_125); color: var(--color-1);">Interior Designers</h4>
                                <p style="font-size: var(--text-sm); color: rgba(255, 255, 255, 0.6); margin-bottom: 0;">
                                    Fully qualified creative interior designers
                                </p>
                            </a>
                        </div>
                        <div class="clients-list__item">
                            <a href="#0">
                            <h4 style="margin-top: 0; margin-bottom: var(--vspace-0_125); color: var(--color-1);">Draftspeople</h4>
                            <p style="font-size: var(--text-sm); color: rgba(255, 255, 255, 0.6); margin-bottom: 0;">
                                Experienced and detail-oriented draftspeople
                            </p>
                            </a>
                        </div>
                        <div class="clients-list__item">
                            <a href="#0">
                                <h4 style="margin-top: 0; margin-bottom: var(--vspace-0_125); color: var(--color-1);">Cabinet Makers</h4>
                                <p style="font-size: var(--text-sm); color: rgba(255, 255, 255, 0.6); margin-bottom: 0;">
                                    Skilled craftspeople bringing designs to life
                                </p>
                            </a>
                        </div>
                        <div class="clients-list__item">
                            <a href="#0">
                            <h4 style="margin-top: 0; margin-bottom: var(--vspace-0_125); color: var(--color-1);">Site Supervisors</h4>
                            <p style="font-size: var(--text-sm); color: rgba(255, 255, 255, 0.6); margin-bottom: 0;">
                                Organised and efficient project managers
                            </p>
                            </a>
                        </div>
                        <div class="clients-list__item">
                            <a href="#0">
                            <h4 style="margin-top: 0; margin-bottom: var(--vspace-0_125); color: var(--color-1);">After-Care Team</h4>
                            <p style="font-size: var(--text-sm); color: rgba(255, 255, 255, 0.6); margin-bottom: 0;">
                                Dedicated customer service representatives
                            </p>                    </a>
                        </div>

                    </div> <!-- end clients-list -->

                </div> <!-- end column -->
            </div>
        </div>
    </div>

    <!-- Friendly & Motivated Culture -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="column xl-12 grid-block">
            <div class="grid-full">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; background: var(--color-3); padding: var(--vspace-2); border-radius: 12px;">
                    <div>
                        <h2 style="color: #885102;font-size:5rem;margin-top: 0; margin-bottom: var(--vspace-0_5);">Friendly & Motivated Culture</h2>
                        <p class="lead" style="font-size: var(--text-md);">
                            We have a friendly and motivated culture. We love coming to work knowing we are helping you design and build the kitchen you have dreamt about for years.
                        </p>
                        <p>
                            We continue to raise the standard of renovations through innovative design, exceptional customer service and meticulous craftsmanship. We win Housing Industry Association (HIA) awards every year.
                        </p>
                        <p>
                            <strong>Homeowners know if you want the job done right, you come to us.</strong> Just read our reviews!
                        </p>
                        <a href="contact.php" class="slim-btn-filled slim-btn-filled-primary slim-btn-filled-md slim-btn-filled-glow" style="margin-top: var(--vspace-0_75);">
                            Read Our Reviews
                            <span class="arrow-icon">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop" 
                             alt="Team Culture" 
                             style="width: 100%; height: auto; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- end s-pagecontent -->

<?php include 'sections/cta.php'; ?>
<?php include 'footer.php'; ?>