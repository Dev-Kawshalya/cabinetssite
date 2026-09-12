/* ===================================================================
 * Monica 1.0.0 - Main JS
 *
 * ------------------------------------------------------------------- */

(function(html) {

    'use strict';

    const cfg = {

        // MailChimp URL
        mailChimpURL : 'https://facebook.us1.list-manage.com/subscribe/post?u=1abf75f6981256963a47d197a&amp;id=37c6d8f4d6' 

    };


   /* preloader
    * -------------------------------------------------- */
    const ssPreloader = function() {

        const siteBody = document.querySelector('body');
        const preloader = document.querySelector('#preloader');
        if (!preloader) return;

        html.classList.add('ss-preload');
        
        window.addEventListener('load', function() {
            html.classList.remove('ss-preload');
            html.classList.add('ss-loaded');
            
            preloader.addEventListener('transitionend', function afterTransition(e) {
                if (e.target.matches('#preloader'))  {
                    siteBody.classList.add('ss-show');
                    e.target.style.display = 'none';
                    preloader.removeEventListener(e.type, afterTransition);
                }
            });
        });

    }; // end ssPreloader


   /* mobile menu
    * ---------------------------------------------------- */ 
    const ssMobileMenu = function() {

        const toggleButton = document.querySelector('.s-header__menu-toggle');
        const mainNavWrap = document.querySelector('.s-header__nav');
        const siteBody = document.querySelector('body');

        if (!(toggleButton && mainNavWrap)) return;

        toggleButton.addEventListener('click', function(e) {
            e.preventDefault();
            toggleButton.classList.toggle('is-clicked');
            siteBody.classList.toggle('menu-is-open');
        });

        mainNavWrap.querySelectorAll('.s-header__nav a').forEach(function(link) {

            link.addEventListener("click", function(event) {

                // at 900px and below
                if (window.matchMedia('(max-width: 900px)').matches) {
                    toggleButton.classList.toggle('is-clicked');
                    siteBody.classList.toggle('menu-is-open');
                }
            });
        });

        window.addEventListener('resize', function() {

            // above 900px
            if (window.matchMedia('(min-width: 901px)').matches) {
                if (siteBody.classList.contains('menu-is-open')) siteBody.classList.remove('menu-is-open');
                if (toggleButton.classList.contains('is-clicked')) toggleButton.classList.remove('is-clicked');
            }
        });

    }; // end ssMobileMenu


   /* swiper
    * ------------------------------------------------------ */ 
    const ssSwiper = function() {

        const homeSliderSwiper = new Swiper('.home-slider', {

            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // when window width is > 400px
                401: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is > 800px
                801: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                // when window width is > 1330px
                1331: {
                    slidesPerView: 3,
                    spaceBetween: 48
                },
                // when window width is > 1773px
                1774: {
                    slidesPerView: 4,
                    spaceBetween: 48
                }
            }
        });

        const pageSliderSwiper = new Swiper('.page-slider', {

            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // when window width is > 400px
                401: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is > 800px
                801: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                // when window width is > 1240px
                1241: {
                    slidesPerView: 3,
                    spaceBetween: 48
                }
            }
        });

    }; // end ssSwiper


   /* mailchimp form
    * ---------------------------------------------------- */ 
    const ssMailChimpForm = function() {

        const mcForm = document.querySelector('#mc-form');

        if (!mcForm) return;

        // Add novalidate attribute
        mcForm.setAttribute('novalidate', true);

        // Field validation
        function hasError(field) {

            // Don't validate submits, buttons, file and reset inputs, and disabled fields
            if (field.disabled || field.type === 'file' || field.type === 'reset' || field.type === 'submit' || field.type === 'button') return;

            // Get validity
            let validity = field.validity;

            // If valid, return null
            if (validity.valid) return;

            // If field is required and empty
            if (validity.valueMissing) return 'Please enter an email address.';

            // If not the right type
            if (validity.typeMismatch) {
                if (field.type === 'email') return 'Please enter a valid email address.';
            }

            // If pattern doesn't match
            if (validity.patternMismatch) {

                // If pattern info is included, return custom error
                if (field.hasAttribute('title')) return field.getAttribute('title');

                // Otherwise, generic error
                return 'Please match the requested format.';
            }

            // If all else fails, return a generic catchall error
            return 'The value you entered for this field is invalid.';

        };

        // Show error message
        function showError(field, error) {

            // Get field id or name
            let id = field.id || field.name;
            if (!id) return;

            let errorMessage = field.form.querySelector('.mc-status');

            // Update error message
            errorMessage.classList.remove('success-message');
            errorMessage.classList.add('error-message');
            errorMessage.innerHTML = error;

        };

        // Display form status (callback function for JSONP)
        window.displayMailChimpStatus = function (data) {

            // Make sure the data is in the right format and that there's a status container
            if (!data.result || !data.msg || !mcStatus ) return;

            // Update our status message
            mcStatus.innerHTML = data.msg;

            // If error, add error class
            if (data.result === 'error') {
                mcStatus.classList.remove('success-message');
                mcStatus.classList.add('error-message');
                return;
            }

            // Otherwise, add success class
            mcStatus.classList.remove('error-message');
            mcStatus.classList.add('success-message');
        };

        // Submit the form 
        function submitMailChimpForm(form) {

            let url = cfg.mailChimpURL;
            let emailField = form.querySelector('#mce-EMAIL');
            let serialize = '&' + encodeURIComponent(emailField.name) + '=' + encodeURIComponent(emailField.value);

            if (url == '') return;

            url = url.replace('/post?u=', '/post-json?u=');
            url += serialize + '&c=displayMailChimpStatus';

            // Create script with url and callback (if specified)
            var ref = window.document.getElementsByTagName( 'script' )[ 0 ];
            var script = window.document.createElement( 'script' );
            script.src = url;

            // Create global variable for the status container
            window.mcStatus = form.querySelector('.mc-status');
            window.mcStatus.classList.remove('error-message', 'success-message')
            window.mcStatus.innerText = 'Submitting...';

            // Insert script tag into the DOM
            ref.parentNode.insertBefore( script, ref );

            // After the script is loaded (and executed), remove it
            script.onload = function () {
                this.remove();
            };

        };

        // Check email field on submit
        mcForm.addEventListener('submit', function (event) {

            event.preventDefault();

            let emailField = event.target.querySelector('#mce-EMAIL');
            let error = hasError(emailField);

            if (error) {
                showError(emailField, error);
                emailField.focus();
                return;
            }

            submitMailChimpForm(this);

        }, false);

    }; // end ssMailChimpForm


   /* alert boxes
    * ------------------------------------------------------ */
    const ssAlertBoxes = function() {

        const boxes = document.querySelectorAll('.alert-box');
  
        boxes.forEach(function(box){

            box.addEventListener('click', function(e) {
                if (e.target.matches('.alert-box__close')) {
                    e.stopPropagation();
                    e.target.parentElement.classList.add('hideit');

                    setTimeout(function() {
                        box.style.display = 'none';
                    }, 500)
                }
            });
        })

    }; // end ssAlertBoxes


    /* Back to Top
    * ------------------------------------------------------ */
    const ssBackToTop = function() {

        const pxShow = 900;
        const goTopButton = document.querySelector(".ss-go-top");

        if (!goTopButton) return;

        // Show or hide the button
        if (window.scrollY >= pxShow) goTopButton.classList.add("link-is-visible");

        window.addEventListener('scroll', function() {
            if (window.scrollY >= pxShow) {
                if(!goTopButton.classList.contains('link-is-visible')) goTopButton.classList.add("link-is-visible")
            } else {
                goTopButton.classList.remove("link-is-visible")
            }
        });

    }; // end ssBackToTop


   /* smoothscroll
    * ------------------------------------------------------ */
    const ssMoveTo = function() {

        const easeFunctions = {
            easeInQuad: function (t, b, c, d) {
                t /= d;
                return c * t * t + b;
            },
            easeOutQuad: function (t, b, c, d) {
                t /= d;
                return -c * t* (t - 2) + b;
            },
            easeInOutQuad: function (t, b, c, d) {
                t /= d/2;
                if (t < 1) return c/2*t*t + b;
                t--;
                return -c/2 * (t*(t-2) - 1) + b;
            },
            easeInOutCubic: function (t, b, c, d) {
                t /= d/2;
                if (t < 1) return c/2*t*t*t + b;
                t -= 2;
                return c/2*(t*t*t + 2) + b;
            }
        }

        const triggers = document.querySelectorAll('.smoothscroll');
        
        const moveTo = new MoveTo({
            tolerance: 0,
            duration: 1200,
            easing: 'easeInOutCubic',
            container: window
        }, easeFunctions);

        triggers.forEach(function(trigger) {
            moveTo.registerTrigger(trigger);
        });

    }; // end ssMoveTo


   /* Initialize
    * ------------------------------------------------------ */
    (function ssInit() {

        ssPreloader();
        ssMobileMenu();
        ssSwiper();
        ssMailChimpForm();
        ssAlertBoxes();
        ssMoveTo();

    })();

})(document.documentElement);

// Hero Slider - Mobile Friendly
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero-slide');
    const dotsContainer = document.querySelector('.hero-slider__dots');
    const prevBtn = document.querySelector('.hero-slider__prev');
    const nextBtn = document.querySelector('.hero-slider__next');
    let currentSlide = 0;
    let slideInterval;
    let isTransitioning = false;

    // Only proceed if we have slides
    if (!slides.length) return;

    // Create dots
    slides.forEach((_, index) => {
        const dot = document.createElement('button');
        dot.classList.add('hero-slider__dot');
        if (index === 0) dot.classList.add('active');
        dot.setAttribute('data-index', index);
        dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
        dot.setAttribute('role', 'button');
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.hero-slider__dot');

    function goToSlide(index) {
        if (isTransitioning) return;
        if (index === currentSlide) return;
        
        isTransitioning = true;
        
        // Remove active class from all slides and dots
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        // Add active class to current slide and dot
        slides[index].classList.add('active');
        dots[index].classList.add('active');

        currentSlide = index;
        updateButtons();
        
        // Reset transition lock after animation completes
        setTimeout(() => {
            isTransitioning = false;
        }, 800);
    }

    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        goToSlide(next);
    }

    function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        goToSlide(prev);
    }

    function updateButtons() {
        if (prevBtn) {
            prevBtn.disabled = currentSlide === 0;
        }
        if (nextBtn) {
            nextBtn.disabled = currentSlide === slides.length - 1;
        }
    }

    function startAutoPlay() {
        if (slideInterval) clearInterval(slideInterval);
        // Only autoplay on larger screens, let users control on mobile
        if (window.innerWidth > 768) {
            slideInterval = setInterval(nextSlide, 6000);
        }
    }

    function stopAutoPlay() {
        if (slideInterval) {
            clearInterval(slideInterval);
            slideInterval = null;
        }
    }

    // Event listeners
    if (prevBtn) {
        prevBtn.addEventListener('click', function(e) {
            e.preventDefault();
            stopAutoPlay();
            prevSlide();
            startAutoPlay();
        });
        
        // Touch support for mobile
        prevBtn.addEventListener('touchstart', function(e) {
            e.preventDefault();
            stopAutoPlay();
            prevSlide();
            startAutoPlay();
        }, { passive: false });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            stopAutoPlay();
            nextSlide();
            startAutoPlay();
        });
        
        // Touch support for mobile
        nextBtn.addEventListener('touchstart', function(e) {
            e.preventDefault();
            stopAutoPlay();
            nextSlide();
            startAutoPlay();
        }, { passive: false });
    }

    dots.forEach(dot => {
        dot.addEventListener('click', function(e) {
            e.preventDefault();
            stopAutoPlay();
            const index = parseInt(this.getAttribute('data-index'));
            goToSlide(index);
            startAutoPlay();
        });
        
        // Touch support for mobile
        dot.addEventListener('touchstart', function(e) {
            e.preventDefault();
            stopAutoPlay();
            const index = parseInt(this.getAttribute('data-index'));
            goToSlide(index);
            startAutoPlay();
        }, { passive: false });
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            e.preventDefault();
            stopAutoPlay();
            prevSlide();
            startAutoPlay();
        } else if (e.key === 'ArrowRight') {
            e.preventDefault();
            stopAutoPlay();
            nextSlide();
            startAutoPlay();
        }
    });

    // Pause autoplay on hover (only on desktop)
    const slider = document.querySelector('.hero-slider');
    if (slider && window.innerWidth > 768) {
        slider.addEventListener('mouseenter', stopAutoPlay);
        slider.addEventListener('mouseleave', startAutoPlay);
    }

    // Touch support for swipe on mobile
    let touchStartX = 0;
    let touchStartY = 0;
    let touchEndX = 0;
    let touchEndY = 0;
    let isSwiping = false;

    slider.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
        touchStartY = e.changedTouches[0].screenY;
        isSwiping = true;
        stopAutoPlay();
    }, { passive: true });

    slider.addEventListener('touchmove', function(e) {
        if (!isSwiping) return;
        // Prevent vertical scrolling while swiping horizontally
        const touchMoveX = e.changedTouches[0].screenX;
        const touchMoveY = e.changedTouches[0].screenY;
        const diffX = Math.abs(touchMoveX - touchStartX);
        const diffY = Math.abs(touchMoveY - touchStartY);
        
        if (diffX > diffY && diffX > 10) {
            e.preventDefault();
        }
    }, { passive: false });

    slider.addEventListener('touchend', function(e) {
        if (!isSwiping) return;
        touchEndX = e.changedTouches[0].screenX;
        touchEndY = e.changedTouches[0].screenY;
        handleSwipe();
        isSwiping = false;
    }, { passive: true });

    function handleSwipe() {
        const swipeThreshold = 50;
        const diffX = touchStartX - touchEndX;
        const diffY = Math.abs(touchStartY - touchEndY);
        
        // Only handle horizontal swipes
        if (Math.abs(diffX) > swipeThreshold && diffY < 100) {
            if (diffX > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
            startAutoPlay();
        } else {
            startAutoPlay();
        }
    }

    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            // Restart autoplay based on screen size
            if (window.innerWidth > 768) {
                startAutoPlay();
            } else {
                stopAutoPlay();
            }
        }, 250);
    });

    // Initialize
    goToSlide(0);
    startAutoPlay();

    // Clean up on page unload
    window.addEventListener('beforeunload', function() {
        stopAutoPlay();
    });
});


// Ripple Effect for Filled Buttons
document.addEventListener('DOMContentLoaded', function() {
    const rippleButtons = document.querySelectorAll('.slim-btn-filled-ripple');
    
    rippleButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            ripple.style.left = x - 25 + 'px';
            ripple.style.top = y - 25 + 'px';
            ripple.style.width = '50px';
            ripple.style.height = '50px';
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
});

// ===================================================================
// # SMOOTH SLOW SCROLLING - MOUSE & PINCH SUPPORT
// ===================================================================

document.addEventListener('DOMContentLoaded', function() {
    
    // ==========================================
    // SLOW SCROLL ON MOUSE WHEEL
    // ==========================================
    
    let isScrolling = false;
    let scrollTimeout;
    let targetScrollY = window.scrollY;
    let currentScrollY = window.scrollY;
    let scrollSpeed = 0.08; // Lower = slower (0.05 - 0.15 recommended)
    
    // Only apply smooth scroll on desktop
    const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    
    if (!isTouchDevice) {
        // Mouse wheel scroll handler
        document.addEventListener('wheel', function(e) {
            // Only apply to main page scroll, not to scrollable containers
            if (e.target.closest('.services-scroll') || 
                e.target.closest('.feat-slider-wrapper') ||
                e.target.closest('.hero-slider')) {
                return;
            }
            
            e.preventDefault();
            
            // Calculate scroll amount based on wheel delta
            const delta = e.deltaY || e.deltaX;
            const scrollAmount = delta * 0.8; // Reduce speed (0.5 - 1.0)
            
            targetScrollY += scrollAmount;
            
            // Clamp target scroll
            const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
            targetScrollY = Math.max(0, Math.min(targetScrollY, maxScroll));
            
            // Start smooth scroll animation
            if (!isScrolling) {
                isScrolling = true;
                animateScroll();
            }
            
            // Reset timeout
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(function() {
                isScrolling = false;
            }, 100);
            
        }, { passive: false });
        
        // Animate scroll function
        function animateScroll() {
            if (!isScrolling) return;
            
            // Calculate distance to target
            const diff = targetScrollY - currentScrollY;
            
            // If we're close enough, snap to target
            if (Math.abs(diff) < 0.5) {
                currentScrollY = targetScrollY;
                window.scrollTo(0, currentScrollY);
                isScrolling = false;
                return;
            }
            
            // Move towards target with easing
            currentScrollY += diff * scrollSpeed;
            
            // Apply scroll
            window.scrollTo(0, currentScrollY);
            
            // Continue animation
            requestAnimationFrame(animateScroll);
        }
    }
    
    // ==========================================
    // TOUCH / PINCH SCROLLING - SLOW & SMOOTH
    // ==========================================
    
    if (isTouchDevice) {
        let touchStartY = 0;
        let touchCurrentY = 0;
        let touchDistance = 0;
        let isTouching = false;
        let touchScrollSpeed = 0.6; // Lower = slower (0.3 - 0.8)
        let touchTargetScroll = window.scrollY;
        let touchCurrentScroll = window.scrollY;
        let touchAnimationRunning = false;
        
        // Touch start
        document.addEventListener('touchstart', function(e) {
            // Ignore if touching interactive elements
            if (e.target.closest('a') || 
                e.target.closest('button') || 
                e.target.closest('input') ||
                e.target.closest('.services-scroll') ||
                e.target.closest('.feat-slider-wrapper')) {
                return;
            }
            
            isTouching = true;
            touchStartY = e.touches[0].clientY;
            touchCurrentY = touchStartY;
            touchTargetScroll = window.scrollY;
            touchCurrentScroll = window.scrollY;
            
        }, { passive: true });
        
        // Touch move - with pinch detection
        document.addEventListener('touchmove', function(e) {
            if (!isTouching) return;
            
            // Detect pinch (two fingers)
            if (e.touches.length === 2) {
                // Let pinch zoom work normally
                return;
            }
            
            // Single finger scroll
            if (e.touches.length === 1) {
                const touch = e.touches[0];
                const deltaY = touchStartY - touch.clientY;
                
                // Only prevent default if scrolling vertically
                if (Math.abs(deltaY) > 5) {
                    e.preventDefault();
                }
                
                // Calculate scroll with speed reduction
                const scrollAmount = deltaY * 0.6; // Reduce speed (0.3 - 0.8)
                touchTargetScroll = window.scrollY + scrollAmount;
                
                // Clamp target
                const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
                touchTargetScroll = Math.max(0, Math.min(touchTargetScroll, maxScroll));
                
                // Start animation
                if (!touchAnimationRunning) {
                    touchAnimationRunning = true;
                    animateTouchScroll();
                }
                
                touchCurrentY = touch.clientY;
            }
            
        }, { passive: false });
        
        // Touch end
        document.addEventListener('touchend', function(e) {
            if (!isTouching) return;
            isTouching = false;
            
            // Smoothly finish the scroll
            setTimeout(function() {
                touchAnimationRunning = false;
            }, 300);
            
        }, { passive: true });
        
        // Animate touch scroll
        function animateTouchScroll() {
            if (!touchAnimationRunning && !isTouching) return;
            
            const diff = touchTargetScroll - window.scrollY;
            
            // If close enough, snap
            if (Math.abs(diff) < 0.5) {
                window.scrollTo(0, touchTargetScroll);
                touchAnimationRunning = false;
                return;
            }
            
            // Move towards target with easing
            const newScroll = window.scrollY + diff * 0.12; // Slower easing
            window.scrollTo(0, newScroll);
            
            // Continue animation
            requestAnimationFrame(animateTouchScroll);
        }
    }
    
    // ==========================================
    // KEYBOARD SCROLL - Slow & Smooth
    // ==========================================
    
    let keyboardScrollTarget = window.scrollY;
    let keyboardScrollCurrent = window.scrollY;
    let keyboardScrolling = false;
    
    document.addEventListener('keydown', function(e) {
        // Only if not typing in input
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.tagName === 'SELECT') {
            return;
        }
        
        // Arrow keys, Page Up/Down, Home, End
        const arrowKeys = ['ArrowUp', 'ArrowDown', 'PageUp', 'PageDown', 'Home', 'End'];
        if (!arrowKeys.includes(e.key)) return;
        
        e.preventDefault();
        
        const viewportHeight = window.innerHeight;
        const currentScroll = window.scrollY;
        let scrollAmount = 0;
        
        switch(e.key) {
            case 'ArrowDown':
                scrollAmount = 80; // Small scroll on arrow
                break;
            case 'ArrowUp':
                scrollAmount = -80;
                break;
            case 'PageDown':
                scrollAmount = viewportHeight * 0.8;
                break;
            case 'PageUp':
                scrollAmount = -viewportHeight * 0.8;
                break;
            case 'Home':
                scrollAmount = -currentScroll;
                break;
            case 'End':
                const maxScroll = document.documentElement.scrollHeight - viewportHeight;
                scrollAmount = maxScroll - currentScroll;
                break;
        }
        
        keyboardScrollTarget = currentScroll + scrollAmount;
        
        // Clamp
        const maxScroll = document.documentElement.scrollHeight - viewportHeight;
        keyboardScrollTarget = Math.max(0, Math.min(keyboardScrollTarget, maxScroll));
        
        if (!keyboardScrolling) {
            keyboardScrolling = true;
            animateKeyboardScroll();
        }
    });
    
    function animateKeyboardScroll() {
        const diff = keyboardScrollTarget - window.scrollY;
        
        if (Math.abs(diff) < 0.5) {
            window.scrollTo(0, keyboardScrollTarget);
            keyboardScrolling = false;
            return;
        }
        
        const newScroll = window.scrollY + diff * 0.1;
        window.scrollTo(0, newScroll);
        
        requestAnimationFrame(animateKeyboardScroll);
    }
    
    // ==========================================
    // SMOOTH ANCHOR LINKS
    // ==========================================
    
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (!targetElement) return;
            
            e.preventDefault();
            
            const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
            const startPosition = window.pageYOffset;
            const distance = targetPosition - startPosition;
            const duration = 1200; // Longer = slower (800 - 1500ms)
            let startTime = null;
            
            function easeInOutCubic(t) {
                return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
            }
            
            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const progress = Math.min(timeElapsed / duration, 1);
                const ease = easeInOutCubic(progress);
                
                window.scrollTo(0, startPosition + distance * ease);
                
                if (progress < 1) {
                    requestAnimationFrame(animation);
                }
            }
            
            requestAnimationFrame(animation);
        });
    });
    
    // ==========================================
    // NAVIGATION LINK SCROLL - Smooth
    // ==========================================
    
    document.querySelectorAll('.smoothscroll, .s-header__menu-links a, .btn.smoothscroll').forEach(function(link) {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (!href || !href.startsWith('#')) return;
            
            const targetId = href;
            const targetElement = document.querySelector(targetId);
            if (!targetElement) return;
            
            // Only if it's an internal link
            if (href.startsWith('#') && targetElement) {
                e.preventDefault();
                
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - 80;
                const startPosition = window.pageYOffset;
                const distance = targetPosition - startPosition;
                const duration = 1000;
                let startTime = null;
                
                function easeInOutCubic(t) {
                    return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
                }
                
                function animation(currentTime) {
                    if (startTime === null) startTime = currentTime;
                    const timeElapsed = currentTime - startTime;
                    const progress = Math.min(timeElapsed / duration, 1);
                    const ease = easeInOutCubic(progress);
                    
                    window.scrollTo(0, startPosition + distance * ease);
                    
                    if (progress < 1) {
                        requestAnimationFrame(animation);
                    }
                }
                
                requestAnimationFrame(animation);
            }
        });
    });
    
    // ==========================================
    // SCROLL SPEED CONFIGURATION
    // ==========================================
    
    // Users can adjust these values for different scroll speeds
    window.scrollConfig = {
        mouseWheelSpeed: 0.08,      // 0.05 - 0.15 (lower = slower)
        touchScrollSpeed: 0.6,       // 0.3 - 0.8 (lower = slower)
        keyboardScrollSpeed: 0.1,    // 0.05 - 0.2 (lower = slower)
        anchorScrollDuration: 1200,  // 800 - 1500ms (higher = slower)
    };
    
    console.log('✅ Smooth Scrolling initialized!');
    console.log('📊 Scroll Speed: Mouse=' + window.scrollConfig.mouseWheelSpeed + ', Touch=' + window.scrollConfig.touchScrollSpeed);
});