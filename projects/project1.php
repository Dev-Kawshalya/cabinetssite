<?php
$pageTitle = 'Project Name - Cabinets2go';
include '../header.php';
?>

<!-- Page header with Image - Full Width Banner
================================================== -->
<div style="position: relative; width: 100%; height: 500px; overflow: hidden; background: var(--color-2-dark);">
    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1920&h=600&fit=crop" 
         alt="Project Name" 
         style="width: 100%; height: 100%; object-fit: cover; object-position: center; opacity: 0.7;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(24,24,24,0.8) 0%, rgba(24,24,24,0.3) 100%);"></div>
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; width: 90%; max-width: 1200px; z-index: 2;">
        <h1 style="font-size: clamp(3rem, 7vw, 5.5rem); line-height: 1.05; color: white; margin: 0; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">Modern Minimalist Kitchen</h1>
        <p style="font-size: clamp(1.4rem, 2vw, 2.2rem); color: rgba(255, 255, 255, 0.9); max-width: 600px; margin: var(--vspace-0_5) auto 0; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">
            A stunning transformation of a dated space into a modern culinary haven
        </p>
    </div>
    <div style="position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%); z-index: 2; animation: bounce-down 2s infinite;">
        <a href="#project" style="display: flex; align-items: center; color: white; text-decoration: none; gap: 0.5rem; opacity: 0.7; font-size: var(--text-sm);">
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
<div class="s-pagecontent" id="project">

    <!-- Project Overview -->
    <div class="row">
        <div class="column xl-12 grid-block">
            
            <!-- Project Info -->
            <div class="grid-full">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
                    
                    <!-- Left Column - Project Details -->
                    <div>
                        <h2 style="margin-top: 0; margin-bottom: var(--vspace-0_5); color: var(--color-1); font-size: clamp(5rem, 3.5vw, 4rem);">Modern Minimalist Kitchen</h2>
                        
                        <p class="lead" style="font-size: var(--text-md);">
                            This stunning kitchen renovation transformed a dated, cramped space into a bright, 
                            open-plan modern kitchen that seamlessly blends style with functionality.
                        </p>
                        
                        <p>
                            The homeowners wanted a minimalist aesthetic with warm touches that would make 
                            the kitchen the heart of their home. We designed a space that maximizes natural light, 
                            offers abundant storage, and creates a perfect flow for entertaining.
                        </p>
                        
                        <!-- Project Details Grid -->
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-top: var(--vspace-1);">
                            <div>
                                <h6 style="margin-top: 0; margin-bottom: var(--vspace-0_125); color: var(--color-text-light); font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.1em;">Location</h6>
                                <p style="font-weight: 500;">Bassendean, WA</p>
                            </div>
                            <div>
                                <h6 style="margin-top: 0; margin-bottom: var(--vspace-0_125); color: var(--color-text-light); font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.1em;">Project Type</h6>
                                <p style="font-weight: 500;">Kitchen Renovation</p>
                            </div>
                            <div>
                                <h6 style="margin-top: 0; margin-bottom: var(--vspace-0_125); color: var(--color-text-light); font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.1em;">Timeline</h6>
                                <p style="font-weight: 500;">4 Months</p>
                            </div>
                            <div>
                                <h6 style="margin-top: 0; margin-bottom: var(--vspace-0_125); color: var(--color-text-light); font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.1em;">Budget</h6>
                                <p style="font-weight: 500;">$45,000</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column - Key Features -->
                    <div>
                        <h4 style="margin-top: 0; margin-bottom: var(--vspace-0_5);">Key Features</h4>
                        <ul style="list-style: none; margin-left: 0;">
                            <li style="padding: 0.75rem 0 0.75rem 2.5rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1); font-size: 1.2rem;">▸</span>
                                <strong>Custom Cabinetry:</strong> Bespoke handleless cabinets in a soft matte finish
                            </li>
                            <li style="padding: 0.75rem 0 0.75rem 2.5rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1); font-size: 1.2rem;">▸</span>
                                <strong>Stone Benchtop:</strong> Premium Caesarstone in pure white with waterfall edge
                            </li>
                            <li style="padding: 0.75rem 0 0.75rem 2.5rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1); font-size: 1.2rem;">▸</span>
                                <strong>Integrated Appliances:</strong> Fully integrated fridge, dishwasher and oven
                            </li>
                            <li style="padding: 0.75rem 0 0.75rem 2.5rem; position: relative; border-bottom: 1px solid var(--color-border);">
                                <span style="position: absolute; left: 0; color: var(--color-1); font-size: 1.2rem;">▸</span>
                                <strong>Smart Storage:</strong> Pull-out pantry, soft-close drawers and custom organisers
                            </li>
                            <li style="padding: 0.75rem 0 0.75rem 2.5rem; position: relative;">
                                <span style="position: absolute; left: 0; color: var(--color-1); font-size: 1.2rem;">▸</span>
                                <strong>Lighting:</strong> Under-cabinet LED lighting and pendant feature lights
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>

    <!-- Project Gallery -->
    <div class="row" style="margin-top: var(--vspace-3);">
        <div class="column">
            
            <div class="grid-full text-center">
                <h2 style="margin-top: 0; margin-bottom: var(--vspace-0_5);">Project Images</h2>
                <p class="lead" style="max-width: 600px; margin: 0 auto;">
                    Explore the stunning transformation of this kitchen renovation.
                </p>
            </div>
            
            <!-- Gallery Grid -->
            <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-top: var(--vspace-1_5);">
                
                <!-- Gallery Item 1 -->
                <div class="gallery-item" style="border-radius: 12px; overflow: hidden;  transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=400&fit=crop" 
                         alt="Kitchen View 1" 
                         style="width: 100%; height: 250px; object-fit: cover; display: block; transition: transform 0.5s ease;">
                </div>
                
                <!-- Gallery Item 2 -->
                <div class="gallery-item" style="border-radius: 12px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=600&h=400&fit=crop" 
                         alt="Kitchen View 2" 
                         style="width: 100%; height: 250px; object-fit: cover; display: block; transition: transform 0.5s ease;">
                </div>
                
                <!-- Gallery Item 3 -->
                <div class="gallery-item" style="border-radius: 12px; overflow: hidden;  transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=600&h=400&fit=crop" 
                         alt="Kitchen View 3" 
                         style="width: 100%; height: 250px; object-fit: cover; display: block; transition: transform 0.5s ease;">
                </div>
                
                <!-- Gallery Item 4 -->
                <div class="gallery-item" style="border-radius: 12px; overflow: hidden;  transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=600&h=400&fit=crop" 
                         alt="Kitchen View 4" 
                         style="width: 100%; height: 250px; object-fit: cover; display: block; transition: transform 0.5s ease;">
                </div>
                
                <!-- Gallery Item 5 -->
                <div class="gallery-item" style="border-radius: 12px; overflow: hidden;  transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=600&h=400&fit=crop" 
                         alt="Kitchen View 5" 
                         style="width: 100%; height: 250px; object-fit: cover; display: block; transition: transform 0.5s ease;">
                </div>
                
                <!-- Gallery Item 6 -->
                <div class="gallery-item" style="border-radius: 12px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=600&h=400&fit=crop" 
                         alt="Kitchen View 6" 
                         style="width: 100%; height: 250px; object-fit: cover; display: block; transition: transform 0.5s ease;">
                </div>
                
            </div>
            
        </div>
    </div>

    <!-- Before & After -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="column">
            <div class="grid-full text-center">
                <h2 style="margin-top: 0; margin-bottom: var(--vspace-0_5);">Before & After</h2>
                <p class="lead" style="max-width: 600px; margin: 0 auto;">
                    See the dramatic transformation of this kitchen space.
                </p>
            </div>
            
            <div class="before-after-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: var(--vspace-1_5);">
                <!-- Before -->
                <div style="border-radius: 12px; overflow: hidden; position: relative; ">
                    <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=800&h=500&fit=crop&grayscale=1" 
                         alt="Before" 
                         style="width: 100%; height: 350px; object-fit: cover; display: block;">
                    <div style="position: absolute; top: 1rem; left: 1rem; background: rgba(0,0,0,0.7); color: white; padding: 0.3rem 1.2rem; border-radius: 4px; font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.1em;">Before</div>
                </div>
                
                <!-- After -->
                <div style="border-radius: 12px; overflow: hidden; position: relative; ">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&h=500&fit=crop" 
                         alt="After" 
                         style="width: 100%; height: 350px; object-fit: cover; display: block;">
                    <div style="position: absolute; top: 1rem; left: 1rem; background: var(--color-1); color: white; padding: 0.3rem 1.2rem; border-radius: 4px; font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.1em;">After</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div class="row" style="margin-top: var(--vspace-4);">
        <div class="column xl-12 grid-block">
            <div class="grid-full" style="background: var(--color-3); padding: var(--vspace-2); border-radius: 12px; text-align: center;">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="var(--color-1)" style="margin-bottom: var(--vspace-0_5);"><path d="M10 11h-4v-4h4v4zm-4 4h4v-4h-4v4zm8-4h-4v4h4v-4zm4-4h-4v4h4v-4zm-4 8h4v-4h-4v4zm-8 0h4v-4h-4v4zm16-12v16h-24v-16h24zm-2 2h-20v12h20v-12z"/></svg>
                <blockquote style="border: none; padding: 0; max-width: 700px; margin: 0 auto;">
                    <p style="font-size: var(--text-lg); font-style: italic; color: var(--color-text-dark); line-height: 1.6;">
                        "The team at Cabinets2go transformed our outdated kitchen into the modern, functional space we've always dreamed of. Their attention to detail and commitment to quality was exceptional. We couldn't be happier with the result."
                    </p>
                    <cite style="display: block; margin-top: var(--vspace-0_5); font-style: normal; font-weight: 600; color: var(--color-text-dark);">
                        — Sarah & Michael Johnson
                        <span style="display: block; font-weight: 400; color: var(--color-text-light); font-size: var(--text-sm);">Bassendean, WA</span>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>

</div> <!-- end s-pagecontent -->

<!-- Mobile Responsive CSS -->
<style>
/* ===================================================================
 * # SINGLE PROJECT PAGE - MOBILE RESPONSIVE
 * =================================================================== */

/* Tablet */
@media screen and (max-width: 992px) {
    .project-overview {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
    }
    
    .gallery-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 1.2rem !important;
    }
    
    .related-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 1.5rem !important;
    }
    
    .before-after-grid {
        gap: 1.5rem !important;
    }
}

/* Mobile - Cards in single column only */
@media screen and (max-width: 768px) {
    /* Hero Banner */
    .hero-banner {
        height: 400px !important;
    }
    
    .hero-banner h1 {
        font-size: clamp(2.2rem, 5vw, 3rem) !important;
    }
    
    .hero-banner p {
        font-size: var(--text-sm) !important;
    }
    
    /* Project Overview - Single Column */
    .project-overview {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .project-details-grid {
        grid-template-columns: 1fr 1fr !important;
        gap: 0.8rem !important;
    }
    
    /* Gallery - Single Column */
    .gallery-grid {
        grid-template-columns: 1fr !important;
        gap: 1rem !important;
    }
    
    .gallery-item img {
        height: 200px !important;
    }
    
    /* Before & After - Single Column */
    .before-after-grid {
        grid-template-columns: 1fr !important;
        gap: 1rem !important;
    }
    
    .before-after-grid img {
        height: 250px !important;
    }
    
    /* Related Projects - Single Column */
    .related-grid {
        grid-template-columns: 1fr !important;
        gap: 1.2rem !important;
    }
    
    .related-grid img {
        height: 180px !important;
    }
    
    /* Testimonial */
    .testimonial-block {
        padding: var(--vspace-1) !important;
    }
    
    .testimonial-block p {
        font-size: var(--text-md) !important;
    }
    
    /* CTA Section */
    .cta-section {
        padding: var(--vspace-1) !important;
    }
    
    .cta-section h2 {
        font-size: var(--text-lg) !important;
    }
}

/* Small Mobile */
@media screen and (max-width: 480px) {
    .hero-banner {
        height: 350px !important;
    }
    
    .hero-banner h1 {
        font-size: 2rem !important;
    }
    
    .hero-banner p {
        font-size: 0.9rem !important;
    }
    
    .project-details-grid {
        grid-template-columns: 1fr !important;
        gap: 0.5rem !important;
    }
    
    .gallery-item img {
        height: 180px !important;
    }
    
    .before-after-grid img {
        height: 200px !important;
    }
    
    .related-grid img {
        height: 160px !important;
    }
}

/* Extra Small Mobile */
@media screen and (max-width: 360px) {
    .hero-banner {
        height: 300px !important;
    }
    
    .hero-banner h1 {
        font-size: 1.6rem !important;
    }
    
    .gallery-item img {
        height: 160px !important;
    }
    
    .before-after-grid img {
        height: 180px !important;
    }
}

/* Hover Effects */
.gallery-item:hover {
    transform: scale(1.02);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.gallery-item img {
    transition: transform 0.5s ease;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

.related-grid a:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}
</style>

<?php include '../sections/cta.php'; ?>
<?php include '../footer.php'; ?>