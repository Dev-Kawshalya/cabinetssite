<?php
$pageTitle = 'Our Process - Cabinets2go';
include 'header.php';
?>

<!-- Page header with Image - Full Width Banner
================================================== -->
<div style="position: relative; width: 100%; height: 800px; overflow: hidden; background: var(--color-2-dark);">
    <img src="images/bg-5.jpg" 
         alt="Our Process" 
         style="width: 100%; height: 100%; object-fit: cover; object-position: center; opacity: 0.7;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(24,24,24,0.8) 0%, rgba(24,24,24,0.3) 100%);"></div>
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; width: 90%; z-index: 2;">
        <span style="display: inline-block; font-family: var(--font-1); font-size: var(--text-sm); color: var(--color-1); letter-spacing: 0.3em; text-transform: uppercase; margin-bottom: var(--vspace-0_25);">Our Process</span>
        <h1 style="font-size: clamp(8rem, 7vw, 6rem); line-height: 1.05; color: white; margin: 0; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">Custom Joinery <br> & Cabinetry</h1>
        <p style="text-transform: uppercase;font-size: clamp(1.6rem, 2vw, 2.4rem); color: rgba(255, 255, 255, 0.9);margin: var(--vspace-0_5) auto 0; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">
            Design. Manufacture. Install.
        </p>
    </div>
    <div style="position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%); z-index: 2; animation: bounce-down 2s infinite;">
        <a href="#process" style="display: flex; align-items: center; color: white; text-decoration: none; gap: 0.5rem; opacity: 0.7; font-size: var(--text-sm);">
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
<div class="s-pagecontent" id="process">

    <!-- Process Steps -->
    <div class="row" style="margin-top: var(--vspace-3);">
        <div class="column xl-12 grid-block">
            
            <!-- Step 1: Design - Content Left, Video Right -->
            <div class="grid-full" style="margin-bottom: var(--vspace-3);">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div>
                        <span style="display: inline-block; font-family: var(--font-1); font-size: 8rem; font-weight: 700; color: var(--color-1); opacity: 0.2; line-height: 1; margin-bottom: -2rem;">01</span>
                        <div class="text-pretitle">Step One</div>
                        <h2 style="margin-top: 1rem; margin-bottom: var(--vspace-0_5); color: var(--color-2); font-family: var(--font-1); font-size: clamp(3.5rem, 4vw, 5rem);">Design</h2>
                        <p class="lead" style="font-size: var(--text-md);">
                            The design of your custom kitchen is all about understanding your individual needs for your kitchen and happens in two phases:
                        </p>
                        
                        <h4 style="margin-top: var(--vspace-1); margin-bottom: var(--vspace-0_25);">Pre-Design:</h4>
                        <ul style="list-style: none; margin-left: 0;">
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                In-home or showroom Design Consult to understand your project brief
                            </li>
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                Establish your project budget &amp; kitchen renovation scope
                            </li>
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                Uncover your cooking needs, kitchen style, design ideas &amp; essentials of your project
                            </li>
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                Site Measure (if required) &amp; initial design sketch for your custom design
                            </li>
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                Provide initial estimate pricing for your new kitchen
                            </li>
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative;">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                Client pays deposit to move to 'Design Development' of their dream kitchen
                            </li>
                        </ul>
                        
                        <h4 style="margin-top: var(--vspace-1); margin-bottom: var(--vspace-0_25);">Design Development:</h4>
                        <ul style="list-style: none; margin-left: 0;">
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                We provide detailed 2D design drawings for your dream kitchen
                            </li>
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                We select your colour scheme, cabinetry style, kitchen hardware &amp; inclusions
                            </li>
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                Our clients finalise their kitchen appliance selections their kitchen design
                            </li>
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                We provide a formal project quote &amp; 3D concept drawings
                            </li>
                            <li style="padding: 0.4rem 0 0.4rem 2rem; position: relative;">
                                <span style="position: absolute; left: 0; color: var(--color-1);">▸</span>
                                Client approval to move to manufacture stage
                            </li>
                        </ul>
                        
                        <a href="contact.php" class="popup-trigger slim-btn-filled slim-btn-filled-primary slim-btn-filled-md slim-btn-filled-slide" style="margin-top: var(--vspace-1);">
                            Start Your Design
                            <span class="arrow-icon">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                    </div>
                    <div>
                        <!-- Video -->
                        <div style="position: relative; border-radius: 12px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); aspect-ratio: 16/9; background: #000;">
                            <video 
                                style="width: 100%; height: 100%; object-fit: cover; display: block;"
                                autoplay 
                                muted 
                                loop 
                                playsinline
                                poster="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=600&h=400&fit=crop">
                                <source src="videos/design.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Manufacture - VIDEO LEFT, Content Right (SWAPPED) -->
            <div class="grid-full" style="margin-bottom: var(--vspace-3);">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; background: var(--color-gray-1); padding: var(--vspace-2); border-radius: 12px;">
                    <div>
                        <!-- Video (Now on LEFT) -->
                        <div style="position: relative; border-radius: 12px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); aspect-ratio: 16/9; background: #000;">
                            <video 
                                style="width: 100%; height: 100%; object-fit: cover; display: block;"
                                autoplay 
                                muted 
                                loop 
                                playsinline
                                poster="https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=600&h=400&fit=crop">
                                <source src="videos/Manufacture.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div>
                        <span style="display: inline-block; font-family: var(--font-1); font-size: 8rem; font-weight: 700; color: var(--color-1); opacity: 0.2; line-height: 1; margin-bottom: -2rem;">02</span>
                        <div class="text-pretitle">Step Two</div>
                        <h2 style="margin-top: 1rem; margin-bottom: var(--vspace-0_5); color: var(--color-2); font-family: var(--font-1); font-size: clamp(3.5rem, 4vw, 5rem);">Manufacture</h2>
                        <p class="lead" style="font-size: var(--text-md);">
                            We are proudly Australia's largest cabinetry and stone manufacturer. Our expert team builds cabinets, benchtops and furniture – all custom made.
                        </p>
                        <p>
                            Our builds are fitted with only the highest quality inclusions – soft-close drawers and cupboards are a standard. 
                            We choose our inclusions based on quality and reliability – brands such as Häfele, Blum and Caesarstone.
                        </p>
                        <p>
                            We have a rigorous quality control process. We assemble all of our kitchens in our warehouse before installation, 
                            so we know your components are just right before we renovate.
                        </p>
                        <div style="background: var(--color-3); padding: var(--vspace-0_75); border-radius: 8px; margin-top: var(--vspace-0_5);">
                            <p style="margin-bottom: 0; font-style: italic; color: var(--color-text-dark);">
                                "The best thing about working with a designer and manufacturer? Everything is custom made just for you. 
                                We deliver the highest standard of quality for every kitchen we produce."
                            </p>
                        </div>
                        <a href="contact.php" class="popup-trigger slim-btn-filled slim-btn-filled-dark slim-btn-filled-md slim-btn-filled-bounce" style="margin-top: var(--vspace-0_75);">
                            Learn About Manufacturing
                            <span class="arrow-icon">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Step 3: Install - Content Left, Video Right -->
            <div class="grid-full">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
                    <div>
                        <span style="display: inline-block; font-family: var(--font-1); font-size: 8rem; font-weight: 700; color: var(--color-1); opacity: 0.2; line-height: 1; margin-bottom: -2rem;">03</span>
                        <div class="text-pretitle">Step Three</div>
                        <h2 style="margin-top: 1rem; margin-bottom: var(--vspace-0_5); color: var(--color-2); font-family: var(--font-1); font-size: clamp(3.5rem, 4vw, 5rem);">Install</h2>
                        <p class="lead" style="font-size: var(--text-md);">
                            We understand that the kitchen renovation process can shake up your routine. Our experienced team will work with your renovation process to ensure the process goes as smoothly as possible.
                        </p>
                        <p>
                            On your project you get your own <strong>Site Supervisor</strong> who manages the manufacture and install of your cabinetry and stone project. 
                            We only hire experienced cabinet makers and stonemasons to fit your kitchen.
                        </p>
                        <p>
                            Our commitment doesn't end when the renovation does. We stand by our work with a dedicated <strong>after-care service team</strong> ready to assist if you need us post-project.
                        </p>
                        <a href="contact.php" class="popup-trigger slim-btn-filled slim-btn-filled-primary slim-btn-filled-md slim-btn-filled-glow" style="margin-top: var(--vspace-0_75);">
                            Start Your Installation
                            <span class="arrow-icon">
                                <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                    </div>
                    <div>
                        <!-- Video -->
                        <div style="position: relative; border-radius: 12px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); aspect-ratio: 16/9; background: #000;">
                            <video 
                                style="width: 100%; height: 100%; object-fit: cover; display: block;"
                                autoplay 
                                muted 
                                loop 
                                playsinline
                                poster="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=600&h=400&fit=crop">
                                <source src="videos/installation.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Process Overview Cards -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="">
            <div class="grid-full text-center">
                <h2 style="margin-top: 0; margin-bottom: var(--vspace-0_5);">Process Overview</h2>
                <p class="lead" style="max-width: 600px; margin: 0 auto;">
                    From concept to completion, we're with you every step of the way.
                </p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2.4rem; margin-top: var(--vspace-1_5);">
                <div style="background: var(--color-gray-1); padding: var(--vspace-1); text-align: center; border: 1px solid var(--color-border); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--color-1); color: white; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--vspace-0_5); font-size: 2.4rem; font-weight: 700;">1</div>
                    <h4 style="margin-top: var(--vspace-0_25); margin-bottom: var(--vspace-0_25); color: var(--color-2); font-family: var(--font-1); font-size: clamp(4rem, 2.5vw, 3rem);">Design</h4>
                    <p style="font-size: var(--text-sm); color: var(--color-text-light); margin-bottom: 0;">
                        Understanding your needs, creating detailed designs, and finalizing your dream kitchen plan.
                    </p>
                </div>
                <div style="background: var(--color-gray-1); padding: var(--vspace-1);text-align: center; border: 1px solid var(--color-border); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--color-1); color: white; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--vspace-0_5); font-size: 2.4rem; font-weight: 700;">2</div>
                    <h4 style="margin-top: var(--vspace-0_25); margin-bottom: var(--vspace-0_25); color: var(--color-2); font-family: var(--font-1); font-size: clamp(4rem, 2.5vw, 3rem);">Manufacture</h4>
                    <p style="font-size: var(--text-sm); color: var(--color-text-light); margin-bottom: 0;">
                        Custom building your cabinets and benchtops with the highest quality materials and inclusions.
                    </p>
                </div>
                <div style="background: var(--color-gray-1); padding: var(--vspace-1);text-align: center; border: 1px solid var(--color-border); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: var(--color-1); color: white; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--vspace-0_5); font-size: 2.4rem; font-weight: 700;">3</div>
                    <h4 style="margin-top: var(--vspace-0_25); margin-bottom: var(--vspace-0_25); color: var(--color-2); font-family: var(--font-1); font-size: clamp(4rem, 2.5vw, 3rem);">Install</h4>
                    <p style="font-size: var(--text-sm); color: var(--color-text-light); margin-bottom: 0;">
                        Professional installation with dedicated site supervision and after-care support.
                    </p>
                </div>
            </div>
        </div>
    </div>

        </div> <!-- end s-pagecontent -->

        <?php include 'sections/cta.php'; ?>
        <?php include 'footer.php'; ?>