<link rel="stylesheet" type="text/css" href="assets/style.css">
      <link href="assets/builder-assets.unbounce.com/published-css/main-ebbfc5e.z.css" rel="stylesheet" media="screen" type="text/css" />
      <script type="text/javascript">window.ub = {"page":{"id":"9cd7f1a5-8f32-495a-bd85-cdda77d4bf36","variantId":"l","usedAs":"main","name":"ECO4 Gov - Original Page","url":"http://localhost/egov/newone/","dimensions":{"breakpoints":["desktop","mobile"],"desktop":{"height":4038,"width":1100},"mobile":{"height":5864,"width":320},"mobileMaxWidth":600}},"hooks":{"beforeFormSubmit":[],"afterFormSubmit":[]}};</script><script>window.ub.page.webFonts = ['Montserrat:700,regular,500,300,600'];</script><script>
         (function() {
           // Check for Responsive Content Script
           if (!window.ub || window.ub.autoscaleInitialized) {
             return;
           }
         
           window.ub.autoscaleInitialized = true;
         
           var MOBILE_EDGE_BUFFER = 16;
           var MAX_MOBILE_SCALE = 1.25;
         
           var breakpoints = [{"name":"desktop","contentWidth":1100},{"name":"mobile","width":600,"contentWidth":320}];
         
           function debounce(fn) {
             var resizeTimer;
             
             return function() {
               if (resizeTimer) cancelAnimationFrame(resizeTimer);
               resizeTimer = requestAnimationFrame(fn);
             }
           }
         
           function resize() {
             var size = 1;
         
             // Width with scroll bar
             var windowWidth = window.innerWidth;
         
             // Width without scroll bar
             var documentWidth = document.documentElement.clientWidth;
         
             for (var i = 0; i < breakpoints.length; i++) {
               var breakpoint = breakpoints[i];
               if (windowWidth <= (breakpoint.width || Infinity)) {
                 var maxScale = breakpoint.name === "mobile" ? MAX_MOBILE_SCALE : 1;
                 var edgeBuffer = breakpoint.name === "mobile" ? MOBILE_EDGE_BUFFER : 0;
         
                 size = Math.min((documentWidth - edgeBuffer) / breakpoint.contentWidth, maxScale);
               }
             }
         
             document.documentElement.style.setProperty('--scale', size);
           }
           
           var debouncedResize = debounce(resize);
         
           // Mutation observer ensures that autoscale works when elements are added or removed from the DOM
           var observer = new MutationObserver((mutationsList, observer) => {
             for (var i = 0; i < mutationsList.length; i++) {
               const mutation = mutationsList[i];
               if (mutation.type === 'childList' && (mutation.addedNodes.length > 0 || mutation.removedNodes.length > 0)) {
                 debouncedResize();
                 break;
               }
             }
           });
         
           // Initial resize
           resize();
         
           // Listen for resize events
           window.addEventListener('resize', debouncedResize);
         
           // Start observing the document body
           observer.observe(document.documentElement, { childList: true, subtree: true });
         
         })();
      </script>

      <link rel="preload" href="assets/555958bf-ae2b-4a17-b74d-c70cb6a8f244/untitled-design-2023-11-08t162019-431.original9cd2.html?1699460428"></script>
      <script src="assets/code.jquery.com/jquery-3.7.1.min.js"></script>      

      <script type="text/javascript">
         function wc_track() {
             var els = document.querySelectorAll('iframe[src*="https://embed.growform.co/"]');
             for (var i = 0, l = els.length; i < l; i++) {
                 var el = els[i];
                 var base_url = el.getAttribute('src');
                 var cookie = oqhaqzwnbjgcpycneryg('wc_client');
                 var source = '', medium = '', campaign = '', content = '', keyword = '', gclid = '', landing_page = '', user_id = '', msclkid = '';
                 if (cookie) {
                     var cookie_parts = cookie.split('+..+');
                     if (cookie_parts[0])
                         source = cookie_parts[0];
                     if (cookie_parts[1])
                         medium = cookie_parts[1];
                     if (cookie_parts[2])
                         campaign = cookie_parts[2];
                     if (cookie_parts[3])
                         content = cookie_parts[3];
                     if (cookie_parts[4])
                         keyword = cookie_parts[4];
                     if (cookie_parts[5])
                         gclid = cookie_parts[5];
                     if (cookie_parts[6])
                         landing_page = cookie_parts[6];
                     if (cookie_parts[7])
                         user_id = cookie_parts[7];
                     if (cookie_parts[8])
                         msclkid = cookie_parts[8];
                 }
                 var wc_append = '?utm_source=' + source + '&utm_medium=' + medium + '&utm_campaign=' + campaign + '&utm_content=' + content + '&utm_keyword=' + keyword + '&landing_page=' + landing_page + '&user_id=' + user_id + '&gclid=' + gclid + '&msclkid=' + msclkid ;
                 var final_url = base_url + wc_append;
                 el.src = final_url;
             }
         }
         setTimeout(function () { wc_track(); }, 2000);
      </script>
      <script src="assets/scripts.iconnode.com/126931.js"></script>
      <script src="assets/cookie2.js"></script>
      
      <script src="assests/_ub/static/ts/6622902072f544a006592f968a158074f43318d5.js" type="text/plain" data-consent-required="statistics"></script>