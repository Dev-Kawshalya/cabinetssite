<?php
$pageTitle = 'FAQ - Monica';
include 'header.php';
?>

<!-- Page header with Image - Full Width Banner
================================================== -->
<div style="position: relative; width: 100%; height: 800px; overflow: hidden; background: var(--color-2-dark);">
    <img src="images/bg-2.jpg" 
         alt="FAQ" 
         style="width: 100%; height: 100%; object-fit: cover; object-position: center; opacity: 0.7;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(24,24,24,0.8) 0%, rgba(24,24,24,0.3) 100%);"></div>
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);  color: white; width: 90%; z-index: 2;">
        <span style="display: inline-block; font-family: var(--font-1); font-size: var(--text-sm); color: var(--color-1); letter-spacing: 0.3em; text-transform: uppercase; margin-bottom: var(--vspace-0_25);">Help Center</span>
        <h1 style="font-size: clamp(8rem, 7vw, 5.5rem); line-height: 1.05; color: white; margin: 0; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">Frequently Asked Questions</h1>
        <p style="text-transform: uppercase;font-size: clamp(1.6rem, 2vw, 2.2rem); color: rgba(255, 255, 255, 0.9); margin: var(--vspace-0_5) auto 0; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">
            Everything you need to know about our process
        </p>
    </div>
    <div style="position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%); z-index: 2; animation: bounce-down 2s infinite;">
        <a href="#faq" style="display: flex; align-items: center; color: white; text-decoration: none; gap: 0.5rem; opacity: 0.7; font-size: var(--text-sm);">
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
<div class="s-pagecontent" id="faq">

    <!-- FAQ Accordion -->
    <div class="row" >
        <div class="">
            <div class="grid-full text-center">
                <h2 style="margin-top: 0; margin-bottom: var(--vspace-0_5);color: #885102;font-size:5rem;">Common Questions</h2>
                <p class="lead" style="max-width: 600px; margin: 0 auto;">
                    Find answers to the most frequently asked questions about our process.
                </p>
            </div>

            <!-- FAQ Items -->
            <div style="margin-top: var(--vspace-1_5);">
                
                <!-- FAQ 1 - What is your process? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">What is your design process?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            We are a custom cabinet maker and stonemason specialising in the design and install of cabinets and benchtops. 
                            Our three-step process includes the <strong>Design, Manufacture and Install</strong> of your cabinetry and stone benchtops.
                        </p>
                        <p>
                            The design process includes a custom design service where you work directly with a qualified interior designer to design your new kitchen exactly to your taste and requirements.
                        </p>
                        <a href="our-process.php" style="color: var(--color-1); font-weight: 500;">Read more about our Three Step Design Process →</a>
                    </div>
                </div>

                <!-- FAQ 2 - How long does a renovation take? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">How long does a kitchen renovation take?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            Each kitchen renovation project is unique, and so are the timeframes. Generally, a kitchen renovation with our team spans approximately <strong>4 – 6 months</strong> from your initial design meeting, manufacture and final install (though various factors can influence this duration).
                        </p>
                        <p>
                            Custom elements like painted cabinetry or specific door profiles may extend production times, while external building works such as demolition or new construction can also impact the overall timeline.
                        </p>
                        <p>
                            Rest assured, we work closely with our clients to accommodate their project timeframes, ensuring a smooth and timely renovation process.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 - How much does it cost? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">How much does a kitchen renovation cost?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            It really helps us in the kitchen renovation process if you are able to share your real budget so we can work with you to establish the right starting point for your kitchen renovation.
                        </p>
                        <p>
                            Typically our projects will start from <strong>$35K</strong>; and it's really important to understand that custom projects like ours come at a higher cost as they are designed and made to suit your desired style and dimensions of your home.
                        </p>
                        <p>
                            The total cost of a kitchen renovation will depend on many factors like the size and scope of your project, your product selections and bespoke elements you have chosen for your kitchen renovation.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 - Can you modify my existing kitchen? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">Can you modify my existing kitchen?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            At The Maker Designer Kitchens we specialise in the design and manufacture of new cabinetry and stone projects. We're sorry but we're unable to make modifications to your old or existing kitchen as we're unable to guarantee quality with retrofit style renovations.
                        </p>
                        <p>
                            We recommend a <strong>full replacement</strong> of your kitchen cabinetry and stone to ensure a better quality finished product.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 - Do you work with builders? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">Do you work with builders and architects?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            Yes! We can work with your builder or architect to design, manufacture and install a luxury designer kitchen, bathrooms, wardrobes, laundry and custom furniture.
                        </p>
                        <p>
                            With these areas being the most used in your home it makes total sense to engage an experienced kitchen company like us to design you a functional luxury kitchen.
                        </p>
                    </div>
                </div>

                <!-- FAQ 6 - What products do you use? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">What products and brands do you use?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            Our designers keep on top of all the best products in the market, and can provide recommendations of the best products to suit your style, needs and budget.
                        </p>
                        <p>
                            Whilst we are able to source and provide any products for your individual requirements, we do work closely with reputable and high-quality suppliers, such as <strong>Hafele, Polytec, Blum and Caesarstone</strong> so that you can be assured of not only the excellence in product but a warranty for additional peace of mind.
                        </p>
                    </div>
                </div>

                <!-- FAQ 7 - Where are your kitchens made? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">Where are your kitchens made?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            All our cabinetry and stone benchtops and splashbacks are manufactured onsite in our state of the art factory in <strong>Bassendean, Western Australia</strong>. 
                            We don't outsource the construction of our projects. We only hire experienced staff and it's our own team that will construct and install your luxury kitchen.
                        </p>
                    </div>
                </div>

                <!-- FAQ 8 - Do you supply appliances? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">Do you supply kitchen appliances?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            We don't supply kitchen appliances, sinks or tapware for your new kitchen. We give you free reign to select what you wish to be included as part of your kitchen renovation and we can accommodate the relevant specifications as part of your design.
                        </p>
                        <p>
                            Throughout your kitchen design process our Interior designers will work closely with you to offer design advice and recommendations to help you make the right selections to match your design brief.
                        </p>
                        <p>
                            We recommend you to visit <strong>Winning Appliances</strong> to get ideas and advice from their appliance specialists when making your appliance and plumbing selections.
                        </p>
                    </div>
                </div>

                <!-- FAQ 9 - Can you help with kitchen layout? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">Can you help with kitchen layout and style?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            The best kitchen layout is what makes the best use of space to match your cooking needs and how you will use your kitchen day to day.
                        </p>
                        <p>
                            When we renovate your kitchen, our experienced design team will help guide you with practical suggestions around how to remodel your kitchen zone to best suit your home life and be most practical.
                        </p>
                        <p>
                            Quite often our clients like to blend elements from a variety of kitchen styles to create their own eclectic look and feel. This is one of the advantages of designing your bespoke luxury kitchen with us as it is custom designed exactly for you and your home.
                        </p>
                    </div>
                </div>

                <!-- FAQ 10 - Do you renovate apartments? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">Do you renovate apartments?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            Due to limited access in apartment buildings and health and safety requirements we are unable to complete renovation projects in apartments or high rise buildings.
                        </p>
                    </div>
                </div>

                <!-- FAQ 11 - How to prepare for renovation? -->
                <div style="border-bottom: 1px solid var(--color-border); padding: var(--vspace-0_75) 0;">
                    <div onclick="toggleFAQ(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                        <h4 style="margin: 0; font-size: var(--text-md);">How should I prepare for my kitchen renovation?</h4>
                        <span style="font-size: 2rem; color: var(--color-1); transition: transform 0.3s ease; display: inline-block;">+</span>
                    </div>
                    <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0;">
                        <p style="margin-top: var(--vspace-0_5);">
                            Good planning in preparation for your kitchen renovation will help you make the most of your space. Whether you already have an idea of what you are looking for, or don't know where to start, our designers will guide you through every step of the planning process.
                        </p>
                        <p>
                            Appliance choice, cabinetry profiles, benchtop material, work zone configuration, storage and lighting are all key elements you will go over with a designer in the planning phase of your kitchen design.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div> <!-- end s-pagecontent -->
<script>
// FAQ Accordion Toggle
function toggleFAQ(element) {
    const answer = element.nextElementSibling;
    const icon = element.querySelector('span:last-child');
    const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
    
    // Close all other FAQs
    document.querySelectorAll('.faq-answer').forEach(item => {
        if (item !== answer) {
            item.style.maxHeight = '0px';
            item.style.padding = '0';
            const otherIcon = item.previousElementSibling.querySelector('span:last-child');
            if (otherIcon) {
                otherIcon.textContent = '+';
                otherIcon.style.transform = 'rotate(0deg)';
            }
        }
    });
    
    // Toggle current FAQ
    if (isOpen) {
        answer.style.maxHeight = '0px';
        answer.style.padding = '0';
        icon.textContent = '+';
        icon.style.transform = 'rotate(0deg)';
    } else {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        answer.style.padding = 'var(--vspace-0_25) 0 0 0';
        icon.textContent = '−';
        icon.style.transform = 'rotate(180deg)';
    }
}

// Open first FAQ by default
document.addEventListener('DOMContentLoaded', function() {
    const firstFAQ = document.querySelector('.faq-answer');
    if (firstFAQ) {
        const firstToggle = firstFAQ.previousElementSibling;
        if (firstToggle) {
            setTimeout(() => {
                firstToggle.click();
            }, 500);
        }
    }
});
</script>
<?php include 'sections/cta.php'; ?>
<?php include 'footer.php'; ?>