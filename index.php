<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5" />
  <title>Cabinets2Go · creative wardrobes</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet" />
  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <style>
    /* ----- RESET & BASE ----- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background-color: #ffffff;
      color: #1e1e2a;
      line-height: 1.5;
      -webkit-font-smoothing: antialiased;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 2rem;
    }

    /* ===== NAVBAR - FULLY RESPONSIVE ===== */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #ffffff;
      height: 70px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
      z-index: 1000;
      border-bottom: 1px solid rgba(0, 0, 0, 0.02);
      display: flex;
      align-items: center;
    }

    .navbar .nav-container {
      max-width: 1280px;
      width: 100%;
      margin: 0 auto;
      padding: 0 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .nav-brand {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-weight: 600;
      font-size: 1.5rem;
      letter-spacing: -0.02em;
      color: #111;
      flex-shrink: 0;
    }
    .nav-brand i {
      color: #2b5f4a;
      font-size: 1.6rem;
    }

    /* --- Desktop Nav Links --- */
    .nav-links {
      display: flex;
      gap: 2rem;
      align-items: center;
      list-style: none;
    }
    .nav-links a {
      text-decoration: none;
      color: #1e1e2a;
      font-weight: 500;
      font-size: 0.95rem;
      transition: color 0.2s;
      white-space: nowrap;
    }
    .nav-links a:hover {
      color: #2b5f4a;
    }
    .nav-cta {
      background: #1e1e2a;
      color: #fff !important;
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      font-weight: 500;
      transition: background 0.2s;
    }
    .nav-cta:hover {
      background: #2b5f4a !important;
      color: #fff !important;
    }

    /* --- Hamburger (mobile) --- */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      padding: 5px;
      background: transparent;
      border: none;
      z-index: 1001;
    }
    .hamburger span {
      display: block;
      width: 26px;
      height: 2.5px;
      background: #1e1e2a;
      border-radius: 4px;
      transition: all 0.3s ease;
      transform-origin: center;
    }
    .hamburger.active span:nth-child(1) {
      transform: rotate(45deg) translate(5px, 5px);
    }
    .hamburger.active span:nth-child(2) {
      opacity: 0;
      transform: scaleX(0);
    }
    .hamburger.active span:nth-child(3) {
      transform: rotate(-45deg) translate(5px, -5px);
    }

    /* --- Mobile Menu Overlay --- */
    .mobile-menu-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background: rgba(0, 0, 0, 0.3);
      z-index: 998;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .mobile-menu-overlay.active {
      opacity: 1;
    }

    /* --- Mobile Menu --- */
    .mobile-menu {
      position: fixed;
      top: 0;
      right: -100%;
      width: 300px;
      max-width: 80%;
      height: 100vh;
      background: #ffffff;
      box-shadow: -8px 0 30px rgba(0, 0, 0, 0.08);
      z-index: 999;
      padding: 80px 2rem 2rem;
      transition: right 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      overflow-y: auto;
    }
    .mobile-menu.active {
      right: 0;
    }

    .mobile-menu a {
      text-decoration: none;
      color: #1e1e2a;
      font-weight: 500;
      font-size: 1.1rem;
      padding: 0.6rem 0;
      border-bottom: 1px solid #f0f2f1;
      transition: color 0.2s, padding-left 0.2s;
      display: flex;
      align-items: center;
      gap: 0.8rem;
    }
    .mobile-menu a:hover {
      color: #2b5f4a;
      padding-left: 0.5rem;
    }
    .mobile-menu a i {
      width: 24px;
      color: #2b5f4a;
      font-size: 1rem;
    }
    .mobile-menu .mobile-cta {
      background: #1e1e2a;
      color: #fff !important;
      padding: 0.8rem 1.5rem;
      border-radius: 60px;
      justify-content: center;
      border-bottom: none;
      margin-top: 0.5rem;
    }
    .mobile-menu .mobile-cta:hover {
      background: #2b5f4a;
      padding-left: 1.5rem;
    }
    .mobile-menu .mobile-cta i {
      color: #fff;
    }

    /* ----- HERO ----- */
    .hero {
      margin-top: 70px;
      padding: 4rem 0 3rem;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 2.5rem;
    }
    .hero-content {
      flex: 1 1 45%;
      min-width: 280px;
    }
    .hero-content .badge {
      display: inline-block;
      background: #f2f5f3;
      color: #2b5f4a;
      font-weight: 600;
      font-size: 0.8rem;
      letter-spacing: 0.4px;
      padding: 0.3rem 1rem;
      border-radius: 40px;
      margin-bottom: 1.5rem;
      border: 1px solid rgba(43, 95, 74, 0.1);
    }
    .hero-content h1 {
      font-size: clamp(2.4rem, 6vw, 3.8rem);
      font-weight: 700;
      line-height: 1.1;
      letter-spacing: -0.03em;
      color: #111;
      margin-bottom: 1.2rem;
    }
    .hero-content h1 i {
      color: #2b5f4a;
      font-weight: 300;
    }
    .hero-content p {
      font-size: 1.15rem;
      color: #3e3e4f;
      max-width: 450px;
      margin-bottom: 2rem;
    }
    .hero-buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .btn-primary {
      background: #1e1e2a;
      color: white;
      border: none;
      padding: 0.8rem 2.2rem;
      border-radius: 60px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.2s;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.02);
    }
    .btn-primary i {
      margin-right: 0.5rem;
    }
    .btn-primary:hover {
      background: #2b5f4a;
    }
    .btn-outline {
      background: transparent;
      border: 1.5px solid #d0d5dd;
      color: #1e1e2a;
      padding: 0.8rem 2.2rem;
      border-radius: 60px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: border 0.2s, background 0.2s;
    }
    .btn-outline i {
      margin-right: 0.4rem;
    }
    .btn-outline:hover {
      border-color: #2b5f4a;
      background: #f5f9f7;
    }

    .hero-image {
      flex: 1 1 45%;
      min-width: 280px;
      background: #f8faf9;
      border-radius: 32px;
      padding: 1.5rem 1rem 1rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      border: 1px solid #f0f2f1;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.03);
    }
    .mockup-grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 0.8rem;
      width: 100%;
      margin-bottom: 1rem;
    }
    .mockup-item {
      background: white;
      border-radius: 18px;
      padding: 1.2rem 0.5rem;
      text-align: center;
      border: 1px solid #f0f2f1;
      transition: transform 0.15s;
    }
    .mockup-item i {
      font-size: 2rem;
      color: #2b5f4a;
      margin-bottom: 0.3rem;
      display: block;
    }
    .mockup-item span {
      font-size: 0.7rem;
      font-weight: 500;
      color: #3e3e4f;
    }
    .hero-image .caption {
      font-size: 0.9rem;
      color: #5a5a6e;
      background: #ffffff;
      padding: 0.6rem 1.2rem;
      border-radius: 60px;
      border: 1px solid #e6eae8;
      margin-top: 0.2rem;
    }
    .hero-image .caption i {
      color: #2b5f4a;
      margin-right: 0.4rem;
    }

    /* ----- FEATURES ----- */
    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 1.5rem;
      margin: 2.5rem 0 3rem;
    }
    .feature-card {
      background: #ffffff;
      padding: 1.5rem 1.2rem;
      border-radius: 28px;
      border: 1px solid #f0f2f1;
      text-align: center;
      transition: box-shadow 0.2s;
    }
    .feature-card i {
      font-size: 2.2rem;
      color: #2b5f4a;
      margin-bottom: 0.5rem;
    }
    .feature-card h4 {
      font-weight: 600;
      font-size: 1rem;
      margin-bottom: 0.2rem;
      color: #111;
    }
    .feature-card p {
      font-size: 0.85rem;
      color: #5a5a6e;
    }

    /* ----- SECTION TITLES ----- */
    .section-title {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      letter-spacing: -0.02em;
    }
    .section-sub {
      color: #5a5a6e;
      margin-bottom: 2rem;
      font-size: 1.05rem;
    }

    /* ===== IMAGE CARD SLIDER ===== */
    .slider-wrapper {
      position: relative;
      overflow: hidden;
      margin: 2rem 0 3rem;
      border-radius: 32px;
    }
    .slider-track {
      display: flex;
      transition: transform 0.4s ease;
      will-change: transform;
    }
    .slider-slide {
      min-width: 100%;
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      padding: 0.5rem 0;
    }
    .slider-slide .card {
      flex: 1 1 220px;
      background: #fafcfa;
      border-radius: 28px;
      border: 1px solid #f0f2f1;
      overflow: hidden;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .slider-slide .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.06);
    }
    .slider-slide .card .img {
      height: 200px;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #eef2ef;
      position: relative;
    }
    .slider-slide .card .img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    .slider-slide .card:hover .img img {
      transform: scale(1.03);
    }
    .slider-slide .card .img .icon-overlay {
      position: absolute;
      color: rgba(255,255,255,0.85);
      text-shadow: 0 2px 12px rgba(0,0,0,0.3);
      background: rgba(0,0,0,0.2);
      padding: 0.6rem 1rem;
      border-radius: 60px;
      backdrop-filter: blur(4px);
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.9rem;
      font-weight: 500;
      bottom: 12px;
      right: 12px;
    }
    .slider-slide .card .img .icon-overlay i {
      font-size: 1.2rem;
    }
    .slider-slide .card .info {
      padding: 1.2rem 1.2rem 1.5rem;
    }
    .slider-slide .card .info h4 {
      font-weight: 600;
      font-size: 1.1rem;
      margin-bottom: 0.3rem;
    }
    .slider-slide .card .info p {
      font-size: 0.9rem;
      color: #5a5a6e;
    }
    .slider-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: white;
      border: 1px solid #e0e6e3;
      border-radius: 60px;
      width: 48px;
      height: 48px;
      font-size: 1.3rem;
      color: #1e1e2a;
      cursor: pointer;
      z-index: 5;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.04);
      transition: background 0.2s;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .slider-btn:hover {
      background: #f5f9f7;
      border-color: #2b5f4a;
    }
    .slider-btn.prev {
      left: 12px;
    }
    .slider-btn.next {
      right: 12px;
    }
    .slider-dots {
      display: flex;
      justify-content: center;
      gap: 0.6rem;
      margin-top: 1.2rem;
    }
    .slider-dots span {
      width: 10px;
      height: 10px;
      border-radius: 20px;
      background: #d0d5dd;
      cursor: pointer;
      transition: background 0.3s, width 0.3s;
    }
    .slider-dots span.active {
      background: #2b5f4a;
      width: 28px;
    }

    /* ===== GALLERY GRID ===== */
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.8rem;
      margin: 2rem 0 3rem;
    }
    .gallery-grid .g-item {
      border-radius: 28px;
      overflow: hidden;
      background: #fafcfa;
      border: 1px solid #f0f2f1;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .gallery-grid .g-item:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.04);
    }
    .gallery-grid .g-item .img-placeholder {
      height: 190px;
      background: #eef2ef;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }
    .gallery-grid .g-item .img-placeholder img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .gallery-grid .g-item .info {
      padding: 1.2rem 1.2rem 1.5rem;
    }
    .gallery-grid .g-item .info h4 {
      font-weight: 600;
      font-size: 1.1rem;
      margin-bottom: 0.3rem;
    }
    .gallery-grid .g-item .info p {
      font-size: 0.9rem;
      color: #5a5a6e;
    }
    .gallery-grid .g-item .info .tag-link {
      display: inline-block;
      margin-top: 0.5rem;
      font-size: 0.8rem;
      font-weight: 500;
      color: #2b5f4a;
      text-decoration: none;
      border-bottom: 1.5px solid #d0ddd6;
    }

    /* ===== TESTIMONIALS ===== */
    .testimonials {
      background: #fafcfb;
      border-radius: 48px;
      padding: 3rem 2.5rem;
      margin: 2.5rem 0 3rem;
      border: 1px solid #eef2f0;
    }
    .testimonials .flex-row {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: space-between;
    }
    .testi-card {
      flex: 1 1 200px;
      background: white;
      padding: 1.8rem 1.5rem;
      border-radius: 28px;
      border: 1px solid #eef2f0;
    }
    .testi-card i.fa-quote-left {
      color: #2b5f4a;
      opacity: 0.3;
      font-size: 1.8rem;
      margin-bottom: 0.5rem;
      display: block;
    }
    .testi-card p {
      font-size: 0.95rem;
      color: #2a2a3a;
      margin-bottom: 0.8rem;
      font-weight: 400;
    }
    .testi-card .client {
      font-weight: 600;
      font-size: 0.9rem;
    }
    .testi-card .client span {
      font-weight: 400;
      color: #5a5a6e;
    }

    /* ===== PROCESS with RIPPLE ANIMATION ===== */
    .process-steps {
      display: flex;
      flex-wrap: wrap;
      gap: 1.8rem;
      justify-content: space-between;
      margin: 2rem 0 3rem;
    }
    .step {
      flex: 1 1 160px;
      text-align: center;
      background: #ffffff;
      padding: 1.8rem 1rem;
      border-radius: 40px;
      border: 1px solid #f0f2f1;
      position: relative;
      transition: transform 0.3s ease;
    }
    .step:hover {
      transform: translateY(-4px);
    }

    .num {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 60px;
      line-height: 60px;
      border-radius: 50%;
      background: #1e1e2a;
      color: white;
      font-weight: 700;
      font-size: 1.3rem;
      margin-bottom: 1rem;
      cursor: default;
      z-index: 1;
    }

    .num .ripple-ring {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%;
      height: 100%;
      transform: translate(-50%, -50%);
      border-radius: 50%;
      border: 2px solid #2b5f4a;
      opacity: 0;
      pointer-events: none;
      animation: ripplePulse 2.5s ease-out infinite;
    }

    .num .ripple-ring:nth-child(2) {
      animation-delay: 0.8s;
    }

    .num .ripple-ring:nth-child(3) {
      animation-delay: 1.6s;
    }

    @keyframes ripplePulse {
      0% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 0.7;
        border-width: 2px;
      }
      100% {
        transform: translate(-50%, -50%) scale(1.9);
        opacity: 0;
        border-width: 1px;
      }
    }

    .step:nth-child(1) .num .ripple-ring {
      animation-delay: 0s;
    }
    .step:nth-child(1) .num .ripple-ring:nth-child(2) {
      animation-delay: 0.9s;
    }
    .step:nth-child(1) .num .ripple-ring:nth-child(3) {
      animation-delay: 1.8s;
    }

    .step:nth-child(2) .num .ripple-ring {
      animation-delay: 0.4s;
    }
    .step:nth-child(2) .num .ripple-ring:nth-child(2) {
      animation-delay: 1.2s;
    }
    .step:nth-child(2) .num .ripple-ring:nth-child(3) {
      animation-delay: 2.0s;
    }

    .step:nth-child(3) .num .ripple-ring {
      animation-delay: 0.8s;
    }
    .step:nth-child(3) .num .ripple-ring:nth-child(2) {
      animation-delay: 1.6s;
    }
    .step:nth-child(3) .num .ripple-ring:nth-child(3) {
      animation-delay: 2.4s;
    }

    .step:nth-child(4) .num .ripple-ring {
      animation-delay: 0.2s;
    }
    .step:nth-child(4) .num .ripple-ring:nth-child(2) {
      animation-delay: 1.0s;
    }
    .step:nth-child(4) .num .ripple-ring:nth-child(3) {
      animation-delay: 1.8s;
    }

    .step h4 {
      font-weight: 600;
      font-size: 1rem;
      margin-bottom: 0.2rem;
    }
    .step p {
      font-size: 0.85rem;
      color: #5a5a6e;
    }

    /* ===== CTA BANNER ===== */
    .cta-banner {
      background: #f4f7f5;
      border-radius: 60px;
      padding: 2.5rem 2.5rem;
      margin: 2.5rem 0 3rem;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      border: 1px solid #e6ede9;
    }
    .cta-banner h3 {
      font-size: 1.7rem;
      font-weight: 600;
    }
    .cta-banner h3 i {
      color: #2b5f4a;
      margin-right: 0.5rem;
    }
    .cta-banner p {
      color: #3e3e4f;
      max-width: 400px;
    }
    .cta-banner .btn-primary {
      background: #1e1e2a;
      border-radius: 60px;
      padding: 0.8rem 2.5rem;
    }
    .cta-banner .btn-primary:hover {
      background: #2b5f4a;
    }

    /* ===== QUOTE ===== */
    .creative-quote {
      margin: 2rem 0 3rem;
    }
    .quote-box {
      background: #fafcfb;
      border-radius: 40px;
      padding: 2.5rem 2.5rem;
      border: 1px solid #eef2f0;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }
    .quote-box blockquote {
      font-size: 1.3rem;
      font-weight: 400;
      color: #1e1e2a;
      max-width: 70%;
      line-height: 1.5;
    }
    .quote-box blockquote i {
      color: #2b5f4a;
      margin-right: 0.4rem;
    }
    .quote-box .author {
      font-weight: 500;
      color: #2b5f4a;
      margin-top: 0.3rem;
      font-size: 0.9rem;
      display: block;
    }
    .quote-box .tag {
      background: white;
      border-radius: 60px;
      padding: 0.4rem 1.5rem;
      border: 1px solid #e0e6e3;
      font-weight: 500;
      font-size: 0.8rem;
    }

    /* ===== FOOTER ===== */
    .footer {
      border-top: 1px solid #ecefec;
      padding: 2rem 0 0.5rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      color: #4f4f62;
      font-size: 0.85rem;
      margin-top: 1rem;
    }
    .footer .brand-foot i {
      color: #2b5f4a;
      margin-right: 0.3rem;
    }
    .footer-links a {
      color: #4f4f62;
      text-decoration: none;
      margin-left: 1.8rem;
      transition: color 0.2s;
    }
    .footer-links a:hover {
      color: #2b5f4a;
    }
    .footer-bottom {
      text-align: center;
      font-size: 0.7rem;
      color: #b0b8b3;
      padding: 0.8rem 0 1.2rem;
      letter-spacing: 0.3px;
      border-top: 1px solid #f0f2f1;
      margin-top: 0.5rem;
    }

    /* ============================================================ */
    /* ===== RESPONSIVE BREAKPOINTS ===== */
    /* ============================================================ */

    /* Tablet */
    @media (max-width: 900px) {
      .nav-links {
        gap: 1.2rem;
      }
      .nav-links a {
        font-size: 0.85rem;
      }
    }

    /* Mobile - show hamburger, hide desktop nav */
    @media (max-width: 768px) {
      .navbar .nav-container {
        padding: 0 1.2rem;
      }

      .nav-links {
        display: none;
      }

      .hamburger {
        display: flex;
      }

      .mobile-menu-overlay {
        display: block;
        pointer-events: none;
      }
      .mobile-menu-overlay.active {
        pointer-events: all;
      }

      .mobile-menu {
        display: flex;
      }

      .hero {
        padding: 2rem 0 1.5rem;
        flex-direction: column;
      }
      .hero-content h1 {
        font-size: 2.4rem;
      }
      .quote-box blockquote {
        max-width: 100%;
        margin-bottom: 0.8rem;
      }
      .quote-box {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
      }
      .testimonials .flex-row {
        flex-direction: column;
      }
      .cta-banner {
        flex-direction: column;
        text-align: center;
        gap: 1.2rem;
      }
      .footer {
        flex-direction: column;
        gap: 0.8rem;
        align-items: flex-start;
      }
      .footer-links a {
        margin-left: 0;
        margin-right: 1.2rem;
      }
      .slider-slide .card {
        flex: 1 1 160px;
      }
      .num {
        width: 50px;
        height: 50px;
        line-height: 50px;
        font-size: 1.1rem;
      }
    }

    /* Small mobile */
    @media (max-width: 500px) {
      .hero-image .mockup-grid {
        grid-template-columns: 1fr 1fr;
      }
      .process-steps {
        flex-direction: column;
        align-items: center;
      }
      .step {
        width: 100%;
        max-width: 280px;
      }
      .slider-btn {
        width: 36px;
        height: 36px;
        font-size: 1rem;
      }
      .slider-btn.prev {
        left: 6px;
      }
      .slider-btn.next {
        right: 6px;
      }
      .gallery-grid {
        grid-template-columns: 1fr;
      }
      .num {
        width: 44px;
        height: 44px;
        line-height: 44px;
        font-size: 1rem;
      }
      .mobile-menu {
        width: 280px;
        padding: 70px 1.2rem 1.5rem;
      }
    }
  </style>
</head>
<body>

  <!-- ========== NAVBAR - FULLY RESPONSIVE ========== -->
  <header class="navbar">
    <div class="nav-container">
      <div class="nav-brand">
        <i class="fas fa-cube"></i>
        <span>Cabinets2Go</span>
      </div>

      <!-- Desktop Nav -->
      <ul class="nav-links">
        <li><a href="#">Wardrobes</a></li>
        <li><a href="#">Cabinets</a></li>
        <li><a href="#">Design</a></li>
        <li><a href="#">Showroom</a></li>
        <li><a href="#" class="nav-cta"><i class="fas fa-pencil-alt"></i> Get quote</a></li>
      </ul>

      <!-- Hamburger Button -->
      <button class="hamburger" id="hamburgerBtn" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

  <!-- Mobile Menu Overlay -->
  <div class="mobile-menu-overlay" id="mobileOverlay"></div>

  <!-- Mobile Menu -->
  <nav class="mobile-menu" id="mobileMenu">
    <a href="#"><i class="fas fa-door-open"></i> Wardrobes</a>
    <a href="#"><i class="fas fa-cube"></i> Cabinets</a>
    <a href="#"><i class="fas fa-palette"></i> Design</a>
    <a href="#"><i class="fas fa-store-alt"></i> Showroom</a>
    <a href="#" class="mobile-cta"><i class="fas fa-pencil-alt"></i> Get a Quote</a>
  </nav>

  <main class="container">

    <!-- ===== HERO ===== -->
    <section class="hero">
      <div class="hero-content">
        <span class="badge"><i class="fas fa-leaf"></i> Australian made · creative</span>
        <h1>Wardrobes &amp; <br />cabinets that <i>inspire</i></h1>
        <p>Designed in Australia — bespoke, modular, and endlessly creative. Transform your space with cabinetry that tells a story.</p>
        <div class="hero-buttons">
          <button class="btn-primary"><i class="fas fa-arrow-right"></i> Explore designs</button>
          <button class="btn-outline"><i class="fas fa-store-alt"></i> Visit showroom</button>
        </div>
      </div>
      <div class="hero-image">
        <div class="mockup-grid">
          <div class="mockup-item"><i class="fas fa-door-open"></i><span>wardrobe</span></div>
          <div class="mockup-item"><i class="fas fa-layer-group"></i><span>modular</span></div>
          <div class="mockup-item"><i class="fas fa-palette"></i><span>custom</span></div>
          <div class="mockup-item"><i class="fas fa-bed"></i><span>bedroom</span></div>
          <div class="mockup-item"><i class="fas fa-couch"></i><span>living</span></div>
          <div class="mockup-item"><i class="fas fa-draw-polygon"></i><span>design</span></div>
        </div>
        <div class="caption"><i class="fas fa-star"></i> 100+ creative configurations</div>
      </div>
    </section>

    <!-- ===== FEATURES ===== -->
    <div class="features">
      <div class="feature-card"><i class="fas fa-ruler-combined"></i><h4>Bespoke sizing</h4><p>Perfect fit for any space, from walk-in to compact.</p></div>
      <div class="feature-card"><i class="fas fa-couch"></i><h4>Premium materials</h4><p>Sustainable Australian timber and finishes.</p></div>
      <div class="feature-card"><i class="fas fa-wand-magic-sparkles"></i><h4>Creative details</h4><p>Handleless, fluted, or brass — you choose.</p></div>
      <div class="feature-card"><i class="fas fa-clock"></i><h4>Quick install</h4><p>Smart modular systems, delivered &amp; fitted fast.</p></div>
    </div>

    <!-- ===== SLIDER ===== -->
    <h2 class="section-title">Featured designs <i class="fas fa-arrow-right" style="color:#2b5f4a; font-size:1.8rem;"></i></h2>
    <p class="section-sub">Swipe through our latest creative projects.</p>

    <div class="slider-wrapper" id="sliderWrapper">
      <div class="slider-track" id="sliderTrack">
        <!-- Slide 1 -->
        <div class="slider-slide">
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=400&h=300&fit=crop&crop=center" alt="Fluted walk-in wardrobe" />
              <div class="icon-overlay"><i class="fas fa-door-open"></i> Walk-in</div>
            </div>
            <div class="info"><h4>Fluted walk-in</h4><p>Textured timber &amp; brass accents.</p></div>
          </div>
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=400&h=300&fit=crop&crop=center" alt="Modular cabinet system" />
              <div class="icon-overlay"><i class="fas fa-layer-group"></i> Modular</div>
            </div>
            <div class="info"><h4>Modular system</h4><p>Adaptable shelves &amp; hanging.</p></div>
          </div>
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1556912173-3bb406ef870d?w=400&h=300&fit=crop&crop=center" alt="Handleless kitchen cabinets" />
              <div class="icon-overlay"><i class="fas fa-palette"></i> Minimal</div>
            </div>
            <div class="info"><h4>Handleless elegance</h4><p>Push-to-open, matte finish.</p></div>
          </div>
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1556912173-3bb406ef870d?w=400&h=300&fit=crop&crop=center&gravity=south" alt="Living room cabinetry" />
              <div class="icon-overlay"><i class="fas fa-couch"></i> Living</div>
            </div>
            <div class="info"><h4>Living cabinetry</h4><p>Media units &amp; display.</p></div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="slider-slide">
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?w=400&h=300&fit=crop&crop=center" alt="Bedroom suite with custom wardrobes" />
              <div class="icon-overlay"><i class="fas fa-bed"></i> Bedroom</div>
            </div>
            <div class="info"><h4>Bedroom suite</h4><p>Custom wardrobes + bedside.</p></div>
          </div>
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=400&h=300&fit=crop&crop=center" alt="Geometric shelving design" />
              <div class="icon-overlay"><i class="fas fa-draw-polygon"></i> Geometric</div>
            </div>
            <div class="info"><h4>Geometric design</h4><p>Angular shelving &amp; storage.</p></div>
          </div>
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=400&h=300&fit=crop&crop=center" alt="Natural timber cabinetry" />
              <div class="icon-overlay"><i class="fas fa-wood"></i> Timber</div>
            </div>
            <div class="info"><h4>Natural timber</h4><p>Warm, organic finishes.</p></div>
          </div>
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1616137466211-f939a420be84?w=400&h=300&fit=crop&crop=center" alt="Luxury walk-in wardrobe with glass" />
              <div class="icon-overlay"><i class="fas fa-crown"></i> Luxury</div>
            </div>
            <div class="info"><h4>Luxury walk-in</h4><p>Glass &amp; integrated lighting.</p></div>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="slider-slide">
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?w=400&h=300&fit=crop&crop=center" alt="Pantry cabinetry with pull-out shelves" />
              <div class="icon-overlay"><i class="fas fa-archive"></i> Pantry</div>
            </div>
            <div class="info"><h4>Pantry cabinetry</h4><p>Pull-out shelves &amp; organisers.</p></div>
          </div>
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1556912173-3bb406ef870d?w=400&h=300&fit=crop&crop=center&gravity=center" alt="Custom colour cabinetry" />
              <div class="icon-overlay"><i class="fas fa-paint-brush"></i> Colour</div>
            </div>
            <div class="info"><h4>Custom colour</h4><p>Matte &amp; high-gloss options.</p></div>
          </div>
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=400&h=300&fit=crop&crop=center" alt="Sliding wardrobe doors" />
              <div class="icon-overlay"><i class="fas fa-door-closed"></i> Sliding</div>
            </div>
            <div class="info"><h4>Sliding wardrobes</h4><p>Space-saving solutions.</p></div>
          </div>
          <div class="card">
            <div class="img">
              <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=400&h=300&fit=crop&crop=center" alt="Designer collection cabinetry" />
              <div class="icon-overlay"><i class="fas fa-star"></i> Designer</div>
            </div>
            <div class="info"><h4>Designer collection</h4><p>Limited edition finishes.</p></div>
          </div>
        </div>
      </div>
      <button class="slider-btn prev" id="prevBtn"><i class="fas fa-chevron-left"></i></button>
      <button class="slider-btn next" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
      <div class="slider-dots" id="sliderDots"></div>
    </div>

    <!-- ===== GALLERY ===== -->
    <h2 class="section-title" style="margin-top:2rem;">Project gallery</h2>
    <p class="section-sub">Explore our portfolio of creative wardrobes and cabinetry.</p>
    <div class="gallery-grid">
      <div class="g-item">
        <div class="img-placeholder">
          <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=400&h=300&fit=crop&crop=center" alt="Walk-in wardrobe" />
        </div>
        <div class="info"><h4>Walk-in wardrobe</h4><p>Fluted panels &amp; leather pulls.</p><a href="#" class="tag-link">View project →</a></div>
      </div>
      <div class="g-item">
        <div class="img-placeholder">
          <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?w=400&h=300&fit=crop&crop=center" alt="Modular cabinet" />
        </div>
        <div class="info"><h4>Modular cabinet</h4><p>Adjustable shelving system.</p><a href="#" class="tag-link">View project →</a></div>
      </div>
      <div class="g-item">
        <div class="img-placeholder">
          <img src="https://images.unsplash.com/photo-1556912173-3bb406ef870d?w=400&h=300&fit=crop&crop=center" alt="Handleless kitchen" />
        </div>
        <div class="info"><h4>Handleless kitchen</h4><p>Minimalist, soft-close.</p><a href="#" class="tag-link">View project →</a></div>
      </div>
      <div class="g-item">
        <div class="img-placeholder">
          <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?w=400&h=300&fit=crop&crop=center" alt="Living room storage" />
        </div>
        <div class="info"><h4>Living room storage</h4><p>Open display &amp; hidden compartments.</p><a href="#" class="tag-link">View project →</a></div>
      </div>
      <div class="g-item">
        <div class="img-placeholder">
          <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?w=400&h=300&fit=crop&crop=center" alt="Bedroom cabinetry" />
        </div>
        <div class="info"><h4>Bedroom cabinetry</h4><p>Integrated bedside tables.</p><a href="#" class="tag-link">View project →</a></div>
      </div>
      <div class="g-item">
        <div class="img-placeholder">
          <img src="https://images.unsplash.com/photo-1616137466211-f939a420be84?w=400&h=300&fit=crop&crop=center" alt="Luxury dressing room" />
        </div>
        <div class="info"><h4>Luxury dressing room</h4><p>Glass-front &amp; LED lighting.</p><a href="#" class="tag-link">View project →</a></div>
      </div>
    </div>

    <!-- ===== PROCESS ===== -->
    <h2 class="section-title">How it works</h2>
    <p class="section-sub">From concept to installation — we make it seamless.</p>
    <div class="process-steps">
      <div class="step">
        <div class="num">
          1
          <span class="ripple-ring"></span>
          <span class="ripple-ring"></span>
          <span class="ripple-ring"></span>
        </div>
        <h4>Consult</h4>
        <p>In-home or virtual design chat.</p>
      </div>
      <div class="step">
        <div class="num">
          2
          <span class="ripple-ring"></span>
          <span class="ripple-ring"></span>
          <span class="ripple-ring"></span>
        </div>
        <h4>Design</h4>
        <p>3D renders &amp; material selection.</p>
      </div>
      <div class="step">
        <div class="num">
          3
          <span class="ripple-ring"></span>
          <span class="ripple-ring"></span>
          <span class="ripple-ring"></span>
        </div>
        <h4>Make</h4>
        <p>Handcrafted in our Australian workshop.</p>
      </div>
      <div class="step">
        <div class="num">
          4
          <span class="ripple-ring"></span>
          <span class="ripple-ring"></span>
          <span class="ripple-ring"></span>
        </div>
        <h4>Install</h4>
        <p>Clean, fast, and hassle-free.</p>
      </div>
    </div>

    <!-- ===== TESTIMONIALS ===== -->
    <div class="testimonials">
      <h2 style="font-weight:600; font-size:1.6rem; margin-bottom:1.5rem;">What our clients say</h2>
      <div class="flex-row">
        <div class="testi-card"><i class="fas fa-quote-left"></i><p>“The design completely transformed our bedroom. Creative, functional, and beautifully made.”</p><div class="client">— Sarah, Melbourne <span>· walk-in wardrobe</span></div></div>
        <div class="testi-card"><i class="fas fa-quote-left"></i><p>“Cabinets2Go delivered beyond our expectations. The modular system is pure genius.”</p><div class="client">— James, Sydney <span>· living cabinetry</span></div></div>
        <div class="testi-card"><i class="fas fa-quote-left"></i><p>“Incredible attention to detail. Every piece feels bespoke and timeless.”</p><div class="client">— Emma, Brisbane <span>· custom wardrobe</span></div></div>
      </div>
    </div>

    <!-- ===== CTA BANNER ===== -->
    <div class="cta-banner">
      <div>
        <h3><i class="fas fa-cube"></i> Ready to create?</h3>
        <p>Book a free design consultation with our Australian team.</p>
      </div>
      <button class="btn-primary"><i class="fas fa-calendar-check"></i> Book now</button>
    </div>

    <!-- ===== QUOTE ===== -->
    <div class="creative-quote">
      <div class="quote-box">
        <blockquote><i class="fas fa-quote-left"></i> We don't just build cabinets — we craft spatial poetry.<span class="author">— Cabinets2Go design team</span></blockquote>
        <span class="tag"><i class="fas fa-arrow-trend-up"></i> 2026 collection</span>
      </div>
    </div>

  </main>

  <!-- ===== FOOTER ===== -->
  <footer class="container">
    <div class="footer">
      <div class="brand-foot"><i class="fas fa-cube"></i> Cabinets2Go &nbsp;|&nbsp; <span style="font-weight:300;">Sydney · Melbourne · Brisbane</span></div>
      <div class="footer-links">
        <a href="#">Privacy</a>
        <a href="#">Careers</a>
        <a href="#">Contact</a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
      </div>
    </div>
    <div class="footer-bottom"></div>
  </footer>

  <!-- ===== SLIDER SCRIPT ===== -->
  <script>
    (function() {
      const track = document.getElementById('sliderTrack');
      const slides = track.querySelectorAll('.slider-slide');
      const totalSlides = slides.length;
      let currentIndex = 0;
      let isTransitioning = false;

      const dotsContainer = document.getElementById('sliderDots');
      const prevBtn = document.getElementById('prevBtn');
      const nextBtn = document.getElementById('nextBtn');

      for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement('span');
        if (i === 0) dot.classList.add('active');
        dot.dataset.index = i;
        dot.addEventListener('click', function() {
          goTo(parseInt(this.dataset.index));
        });
        dotsContainer.appendChild(dot);
      }

      function goTo(index) {
        if (isTransitioning || index === currentIndex) return;
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        isTransitioning = true;
        track.style.transform = `translateX(-${index * 100}%)`;
        document.querySelectorAll('.slider-dots span').forEach((dot, i) => {
          dot.classList.toggle('active', i === index);
        });
        currentIndex = index;
        setTimeout(() => { isTransitioning = false; }, 400);
      }

      function next() { goTo(currentIndex + 1); }
      function prev() { goTo(currentIndex - 1); }

      prevBtn.addEventListener('click', prev);
      nextBtn.addEventListener('click', next);

      let autoPlay = setInterval(next, 5000);
      const wrapper = document.getElementById('sliderWrapper');
      wrapper.addEventListener('mouseenter', () => clearInterval(autoPlay));
      wrapper.addEventListener('mouseleave', () => {
        autoPlay = setInterval(next, 5000);
      });

      let startX = 0;
      let isDragging = false;
      track.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
      });
      track.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        const diff = e.touches[0].clientX - startX;
        if (Math.abs(diff) > 50) {
          if (diff > 0) prev();
          else next();
          isDragging = false;
        }
      });
      track.addEventListener('touchend', () => { isDragging = false; });

      window.sliderGoTo = goTo;
    })();

    // ===== HAMBURGER MENU TOGGLE =====
    (function() {
      const hamburger = document.getElementById('hamburgerBtn');
      const mobileMenu = document.getElementById('mobileMenu');
      const overlay = document.getElementById('mobileOverlay');

      function toggleMenu() {
        hamburger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
      }

      function closeMenu() {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
      }

      hamburger.addEventListener('click', toggleMenu);
      overlay.addEventListener('click', closeMenu);

      // Close menu when a link is clicked
      mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
      });

      // Close on escape key
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMenu();
      });
    })();
  </script>

</body>
</html>