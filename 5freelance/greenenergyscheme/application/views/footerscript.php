<!-- lp:insertions start body:after --><!-- animation-observer -->
      <script>(()=> { 
         const obs = new IntersectionObserver(
           ents => {ents.forEach(e => {
               if (e.isIntersecting) {
                 e.target.classList.add('ub-ani-play');
               } else {
                 e.target.classList.remove('ub-ani-play');
               }
             });}, {threshold: 0.5}
         );
         const els = document.querySelectorAll('[class*="ub-ani"]');
         els.forEach(el => obs.observe(el));
         })();
      </script>

      <script>
         jQuery($ => {
           // The speed of the scroll in milliseconds
           const speed = 1000;
         
           $('a[href*="#"]')
             .filter((i, a) => a.getAttribute('href').startsWith('#') || a.href.startsWith(`${location.href}#`))
             .unbind('click.smoothScroll')
             .bind('click.smoothScroll', event => {
               const targetId = event.currentTarget.getAttribute('href').split('#')[1];
               const targetElement = document.getElementById(targetId);
         
               if (targetElement) {
                 event.preventDefault();
                 $('html, body').animate({ scrollTop: $(targetElement).offset().top }, speed);
               }
             });
         });
      </script>

      <script async src="assets/builder-assets.unbounce.com/published-js/main.bundle-f4428e5.z.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="assets/footercss.css">


      <div id="ub-gdpr"style="display: none">
         <div id="ub-gdpr-banner"role="dialog"aria-label="Cookie Consent">
            <div id="ub-gdpr-banner-text">
               <div class="ub-gdpr-heading">Cookie Consent</div>
               We use cookies to make our site work. We'd like to use additional cookies to understand site usage, make site improvements, and to remember your settings. Additionally, we use strictly necessary cookies to bolster security, protect against abuse, and ensure your online safety using Cloudflare. <a href="#"target="_blank"id="ub-gdpr-policy-link">Cookie policy</a>
            </div>
            <div id="ub-gdpr-banner-buttons"><button type="button"id="ub-gdpr-button-show-modal">Manage Preferences</button><button type="button"id="ub-gdpr-button-reject">Reject All</button><button type="button"id="ub-gdpr-button-accept"class="ub-gdpr-button-primary">Accept All</button></div>
         </div>
         <div id="ub-gdpr-modal"role="dialog"aria-label="Cookie Preferences"style="display: none">
            <form id="ub-gdpr-modal-content">
               <div class="ub-gdpr-heading">Cookie Preferences<button type="button"id="ub-gdpr-button-close-modal"aria-label="Close">✕</button></div>
               <div id="ub-gdpr-modal-categories">
                  <div class="ub-gdpr-modal-category">
                     <div><label for="ub-gdpr-checkbox-necessary">Strictly Necessary</label>Necessary cookies make a website work by enabling basic functions like page navigation. The website cannot function without these cookies.</div>
                     <input type="checkbox"name="necessary"id="ub-gdpr-checkbox-necessary"checked disabled>
                  </div>
                  <div class="ub-gdpr-modal-category"data-category="consistency">
                     <div><label for="ub-gdpr-checkbox-consistency">Experience Consistency</label>This website uses experimentation software to better understand what page content performs best for visitors. This includes showing visitors different versions of the same page. The website uses cookies to ensure repeat visitors to a page always receive the same page version.</div>
                     <input type="checkbox"name="consistency"id="ub-gdpr-checkbox-consistency">
                  </div>
                  <div class="ub-gdpr-modal-category"data-category="preferences">
                     <div><label for="ub-gdpr-checkbox-preferences">Preferences</label>Preference cookies enable a website to remember information that changes the way the website behaves or looks, like your preferred language or region you are in.</div>
                     <input type="checkbox"name="preferences"id="ub-gdpr-checkbox-preferences">
                  </div>
                  <div class="ub-gdpr-modal-category"data-category="statistics">
                     <div><label for="ub-gdpr-checkbox-statistics">Analytics</label>Analytical cookies are used to measure the usage and performance of the website. These cookies provide anonymous information on unique, total visitor counts and clicks on the page.</div>
                     <input type="checkbox"name="statistics"id="ub-gdpr-checkbox-statistics">
                  </div>
                  <div class="ub-gdpr-modal-category"data-category="marketing">
                     <div><label for="ub-gdpr-checkbox-marketing">Marketing</label>Marketing cookies track visitors across websites to improve the performance of advertising campaigns and deliver personalized content.</div>
                     <input type="checkbox"name="marketing"id="ub-gdpr-checkbox-marketing">
                  </div>
               </div>
               <div id="ub-gdpr-modal-buttons"><button type="submit"class="ub-gdpr-button-primary">Update Preferences</button></div>
            </form>
         </div>
      </div>

      <script src="assets/footercokie.js"></script>