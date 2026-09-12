<?php
$pageTitle = 'Contact Us - Cabinets2go';
include 'header.php';
?>

<!-- Page content
================================================== -->
<div class="" style="padding-top:0; padding-bottom:0;" id="contact">

<!-- Hero Banner -->
<div style="position: relative; width: 100%; height: 800px; overflow: hidden; background: var(--color-2-dark);">
    <img src="images/bg-1.jpg" 
         alt="Contact Us" 
         style="width: 100%; height: 100%; object-fit: cover; object-position: center; opacity: 0.7;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(24,24,24,0.8) 0%, rgba(24,24,24,0.3) 100%);"></div>
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);  color: white; width: 90%; z-index: 2;">
        <span style="display: inline-block; font-family: var(--font-1); font-size: var(--text-sm); color: var(--color-1); letter-spacing: 0.3em; text-transform: uppercase; margin-bottom: var(--vspace-0_25);">Get In Touch</span>
        <h1 style="font-size: clamp(8rem, 7vw, 5.5rem); line-height: 1.05; color: white; margin: 0; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">CONTACT US</h1>
        <p style="font-size: clamp(1.4rem, 2vw, 2.2rem); color: rgba(255, 255, 255, 0.9); margin: var(--vspace-0_5) auto 0; text-shadow: 0 2px 10px rgba(0,0,0,0.2); line-height: 1.6;">
            PLEASE GET IN CONTACT WITH US BELOW AND ONE OF OUR<br>
            HELPFUL STAFF WILL BE IN TOUCH AS SOON AS THEY CAN.
        </p>
    </div>
    <div style="position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%); z-index: 2; animation: bounce-down 2s infinite;">
        <a href="#contact-form" style="display: flex; align-items: center; color: white; text-decoration: none; gap: 0.5rem; opacity: 0.7; font-size: var(--text-sm);">
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

<!-- Contact Section -->
<div class="s-pagecontent s-cta" id="contact-form">

    <div class="row">
        <div class="column xl-12">

            <!-- Two Column Layout - Form Left, Info Right -->
            <div class="contact-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start; margin-top: var(--vspace-1);">
                
                <!-- LEFT COLUMN - Contact Info -->
                <div class="contact-info-left">
                    
                    <!-- Contact Info -->
                    <div style="margin-bottom: var(--vspace-1_5);">
                        <h4 style="font-size: var(--text-md); color: var(--color-3); margin: 0 0 var(--vspace-0_25) 0;">The Maker Designer Kitchens</h4>
                        <p style="margin: 0.2rem 0; color: var(--color-text-light);">
                            <a href="#" style="color: var(--color-text-light); text-decoration: none; transition: color 0.3s ease;">12 Dyer Rd, Bassendean WA 6054</a>
                        </p>
                        <p style="margin: 0.2rem 0; color: var(--color-text-light);">
                            <a href="tel:1975432345" style="color: var(--color-text-light); text-decoration: none; transition: color 0.3s ease;">T: +197 543 2345</a>
                        </p>
                        <p style="margin: 0.2rem 0; color: var(--color-text-light);">
                            <a href="mailto:sales@example.com" style="color: var(--color-text-light); text-decoration: none; transition: color 0.3s ease;">E: sales@example.com</a>
                        </p>
                    </div>

                    <!-- Opening Hours -->
                    <div style="margin-bottom: var(--vspace-1_5);">
                        <h4 style="font-size: var(--text-md); color: var(--color-3); margin: 0 0 var(--vspace-0_25) 0;">Showroom Opening Hours</h4>
                        <p style="margin: 0.2rem 0; color: var(--color-text-light); line-height: 1.6;">Monday to Friday: 8:30am – 4:00pm</p>
                        <p style="margin: 0.2rem 0; color: var(--color-text-light); line-height: 1.6;">Saturday: 9:00am – 1:00pm</p>
                        <p style="margin: 0.2rem 0; color: var(--color-text-light); line-height: 1.6;">Sunday: Closed</p>
                    </div>

                    <!-- Showroom Image -->
                    <div style="margin-bottom: var(--vspace-1); overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                        <img src="images/bg-6.jpg" 
                             alt="Showroom" 
                             style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
                
                <!-- RIGHT COLUMN - Contact Form -->
                <div class="contact-form-right" style="background: var(--color-gray-1); padding: var(--vspace-1_5); border-radius: 12px; border: 1px solid var(--color-border);">
                    
                    <form id="contactForm" method="POST" action="#">
                        <!-- First Name & Last Name -->
                        <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.2rem; margin-bottom: var(--vspace-0_5);">
                            <div>
                                <label for="firstname" style="display: block; margin-bottom: var(--vspace-0_125); font-weight: 500; font-size: var(--text-xs); letter-spacing: 0.05em; text-transform: uppercase; color: var(--color-text-light);">First Name *</label>
                                <input type="text" id="firstname" name="firstname" placeholder="FIRST NAME" required style="width: 100%; padding: 1rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: var(--text-sm); background: var(--color-white); transition: border-color 0.3s ease, box-shadow 0.3s ease;">
                            </div>
                            <div>
                                <label for="lastname" style="display: block; margin-bottom: var(--vspace-0_125); font-weight: 500; font-size: var(--text-xs); letter-spacing: 0.05em; text-transform: uppercase; color: var(--color-text-light);">Last Name *</label>
                                <input type="text" id="lastname" name="lastname" placeholder="LAST NAME" required style="width: 100%; padding: 1rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: var(--text-sm); background: var(--color-white); transition: border-color 0.3s ease, box-shadow 0.3s ease;">
                            </div>
                        </div>
                        
                        <!-- Phone & Email -->
                        <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.2rem; margin-bottom: var(--vspace-0_5);">
                            <div>
                                <label for="phone" style="display: block; margin-bottom: var(--vspace-0_125); font-weight: 500; font-size: var(--text-xs); letter-spacing: 0.05em; text-transform: uppercase; color: var(--color-text-light);">Phone *</label>
                                <input type="tel" id="phone" name="phone" placeholder="PHONE" required style="width: 100%; padding: 1rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: var(--text-sm); background: var(--color-white); transition: border-color 0.3s ease, box-shadow 0.3s ease;">
                            </div>
                            <div>
                                <label for="email" style="display: block; margin-bottom: var(--vspace-0_125); font-weight: 500; font-size: var(--text-xs); letter-spacing: 0.05em; text-transform: uppercase; color: var(--color-text-light);">Email *</label>
                                <input type="email" id="email" name="email" placeholder="EMAIL" required style="width: 100%; padding: 1rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: var(--text-sm); background: var(--color-white); transition: border-color 0.3s ease, box-shadow 0.3s ease;">
                            </div>
                        </div>
                        
                        <!-- Budget & Suburb -->
                        <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.2rem; margin-bottom: var(--vspace-0_5);">
                            <div style="position: relative;">
                                <label for="budget" style="display: block; margin-bottom: var(--vspace-0_125); font-weight: 500; font-size: var(--text-xs); letter-spacing: 0.05em; text-transform: uppercase; color: var(--color-text-light);">Project Budget</label>
                                <select id="budget" name="budget" style="width: 100%; padding: 1rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: var(--text-sm); background: var(--color-white); appearance: none; cursor: pointer; transition: border-color 0.3s ease, box-shadow 0.3s ease;">
                                    <option value="">PROJECT BUDGET</option>
                                    <option value="30-50k">$30 - $50,000</option>
                                    <option value="50-80k">$50 – $80,000</option>
                                    <option value="80k+">$80,000+</option>
                                    <option value="unsure">Unsure</option>
                                </select>
                                <span style="position: absolute; right: 1.2rem; bottom: 50%; transform: translateY(50%); color: var(--color-text-light); pointer-events: none; font-size: 1.2rem;">▼</span>
                            </div>
                            <div>
                                <label for="suburb" style="display: block; margin-bottom: var(--vspace-0_125); font-weight: 500; font-size: var(--text-xs); letter-spacing: 0.05em; text-transform: uppercase; color: var(--color-text-light);">Suburb/Location</label>
                                <input type="text" id="suburb" name="suburb" placeholder="SUBURB/LOCATION" style="width: 100%; padding: 1rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: var(--text-sm); background: var(--color-white); transition: border-color 0.3s ease, box-shadow 0.3s ease;">
                            </div>
                        </div>
                        
                        <!-- Project Category -->
                        <div style="margin-bottom: var(--vspace-0_5);">
                            <label style="display: block; margin-bottom: var(--vspace-0_125); font-weight: 500; font-size: var(--text-xs); letter-spacing: 0.05em; text-transform: uppercase; color: var(--color-text-light);">Project Category</label>
                            <p style="font-size: var(--text-xs); color: var(--color-text-light); margin-bottom: var(--vspace-0_25); line-height: 1.4;">
                                We specialise in designing, manufacturing and installing cabinetry and stone for full kitchen replacements and new home builds.
                            </p>
                            <div style="display: flex; gap: 2rem; flex-wrap: wrap;">
                                <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: 400; font-size: var(--text-sm); cursor: pointer;">
                                    <input type="radio" name="projectcategory" value="Kitchen Renovation" checked style="width: 16px; height: 16px; accent-color: var(--color-1);">
                                    Kitchen Renovation
                                </label>
                                <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: 400; font-size: var(--text-sm); cursor: pointer;">
                                    <input type="radio" name="projectcategory" value="New Home Build" style="width: 16px; height: 16px; accent-color: var(--color-1);">
                                    New Home Build
                                </label>
                            </div>
                        </div>
                        
                        <!-- Details -->
                        <div style="margin-bottom: var(--vspace-0_5);">
                            <label for="message" style="display: block; margin-bottom: var(--vspace-0_125); font-weight: 500; font-size: var(--text-xs); letter-spacing: 0.05em; text-transform: uppercase; color: var(--color-text-light);">Details</label>
                            <textarea id="message" name="message" rows="4" placeholder="Please describe your project and what you're looking to achieve" style="width: 100%; padding: 1rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: var(--text-sm); background: var(--color-white); resize: vertical; transition: border-color 0.3s ease, box-shadow 0.3s ease;"></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="slim-btn-filled slim-btn-filled-primary slim-btn-filled-lg slim-btn-filled-slide" style="width: 100%; justify-content: center; border: none; margin-bottom: var(--vspace-0_5); padding: 1rem;">
                            <i class="fa fa-arrow-right" style="margin-right: 0.8rem;"></i>
                            Send Message
                        </button>
                        
                        <!-- Consent -->
                        <div>
                            <label style="display: flex; align-items: flex-start; gap: 0.5rem; font-size: var(--text-xs); color: var(--color-text-light); cursor: pointer; line-height: 1.4;">
                                <input type="checkbox" required style="width: 16px; height: 16px; margin-top: 2px; flex-shrink: 0; accent-color: var(--color-1);">
                                <span>By submitting this form you are consenting to receive marketing communications from The Maker Designer Kitchens in future, on the understanding that you have read and agree to our <a href="#" style="color: var(--color-1); text-decoration: underline;">Privacy and Data Collection Statement</a> and that you can opt-out at any time.</span>
                            </label>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div> <!-- end s-pagecontent -->

<!-- Map Section -->
<div class="row" style="width: 100%; margin: 0; padding: 0;">
    <div class="column xl-12" style="padding: 0;">
        <div style="overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.9436!2d115.9081!3d-31.9201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32b6e2b8b8b8b8%3A0x8b8b8b8b8b8b8b8b!2sBassendean%20WA%206054!5e0!3m2!1sen!2sau!4v1234567890" 
                width="100%" 
                height="400" 
                style="border:0; display: block;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>

<!-- Mobile Responsive CSS -->
<style>
/* ===================================================================
 * # CONTACT PAGE - MOBILE RESPONSIVE
 * =================================================================== */

/* Tablet */
@media screen and (max-width: 992px) {
    .contact-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
    }
    
    .contact-info-left {
        order: 2;
    }
    
    .contact-form-right {
        order: 1;
    }
}

/* Mobile */
@media screen and (max-width: 768px) {
    /* Hero Banner */
    .hero-banner {
        height: 450px !important;
    }
    
    .hero-banner h1 {
        font-size: clamp(2.5rem, 6vw, 3.5rem) !important;
    }
    
    .hero-banner p {
        font-size: var(--text-md) !important;
    }
    
    .hero-banner p br {
        display: none;
    }
    
    /* Form Row - Stack on mobile */
    .form-row {
        grid-template-columns: 1fr !important;
        gap: 0.8rem !important;
    }
    
    /* Form padding */
    .contact-form-right {
        padding: var(--vspace-1) !important;
    }
    
    /* Form inputs */
    .contact-form-right input,
    .contact-form-right select,
    .contact-form-right textarea {
        padding: 0.8rem !important;
        font-size: 1rem !important;
    }
    
    /* Radio buttons - stack on mobile */
    .contact-form-right .radio-group {
        flex-direction: column !important;
        gap: 0.5rem !important;
    }
    
    /* Map */
    .map-container iframe {
        height: 250px !important;
    }
    
    /* Contact info */
    .contact-info-left h4 {
        font-size: var(--text-sm) !important;
    }
    
    .contact-info-left p {
        font-size: var(--text-sm) !important;
    }
}

/* Small Mobile */
@media screen and (max-width: 480px) {
    /* Hero Banner */
    .hero-banner {
        height: 380px !important;
    }
    
    .hero-banner h1 {
        font-size: 2.2rem !important;
    }
    
    .hero-banner p {
        font-size: var(--text-sm) !important;
    }
    
    .hero-banner .pretitle {
        font-size: 1rem !important;
    }
    
    /* Form */
    .contact-form-right {
        padding: var(--vspace-0_75) !important;
    }
    
    .contact-form-right input,
    .contact-form-right select,
    .contact-form-right textarea {
        padding: 0.6rem !important;
        font-size: 0.9rem !important;
    }
    
    .contact-form-right label {
        font-size: 0.7rem !important;
    }
    
    /* Submit button */
    .contact-form-right .submit-btn {
        padding: 0.8rem !important;
        font-size: var(--text-sm) !important;
    }
    
    /* Map */
    .map-container iframe {
        height: 200px !important;
    }
    
    /* Consent text */
    .contact-form-right .consent-text {
        font-size: 0.7rem !important;
    }
    
    /* Showroom image */
    .showroom-image img {
        height: auto !important;
    }
}

/* Extra Small Mobile */
@media screen and (max-width: 360px) {
    .hero-banner {
        height: 320px !important;
    }
    
    .hero-banner h1 {
        font-size: 1.8rem !important;
    }
    
    .hero-banner p {
        font-size: 0.85rem !important;
    }
}

/* Focus states for accessibility */
.contact-form-right input:focus,
.contact-form-right select:focus,
.contact-form-right textarea:focus {
    border-color: var(--color-1) !important;
    box-shadow: 0 0 0 3px rgba(234, 144, 16, 0.1);
    outline: none;
}

/* Hover effects */
.contact-info-left a:hover {
    color: var(--color-1) !important;
}

.contact-form-right .submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(234, 144, 16, 0.3);
}
</style>

<?php include 'footer.php'; ?>