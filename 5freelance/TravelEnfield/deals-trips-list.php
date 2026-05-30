<?php include('header.php'); ?>

<style>
   .video-banner {
    position: relative;
    width: 100%;
    height: 500px;
    overflow: hidden;
}

.video-banner video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Dark overlay */
.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.3);
}

/* Content on top */
.banner-content-wrap {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    z-index: 2;
    text-align: center;
}

/* Mute Button */
#muteBtn {
    position: absolute;
    bottom: 20px;
    right: 20px;
    z-index: 3;
    background: rgba(0,0,0,0.6);
    border: none;
    color: #fff;
    padding: 10px 14px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 18px;
}

.package-details-page .package-details-warpper .package-info-wrap h4 {
    margin-bottom: 10px;
}
.package-details-page .package-details-warpper .package-info-wrap p {
    margin-bottom: initial;
}

.enquiry-modal .modal-dialog {
    max-width: 600px;
}
.enquiry-modal .modal-dialog .modal-content {
    padding: 20px 20px;
 }







/* Responsive */
@media (max-width: 768px) {
    .video-banner {
        height: 300px;
    }

    .banner-content h1 {
        font-size: 20px;
    }

    .tabs-container {
        width: 100%;
        justify-content: center;
        overflow-x: auto;
    }

    .tab-btn {
        flex: 0 0 auto;
        font-size: 14px;
        padding: 8px 14px;
    }
}



.package-card {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 5px 20px rgba(0,0,0,0.08);
  transition: 0.3s;
}

.package-card:hover {
  transform: translateY(-5px);
}

.package-img {
  position: relative;
}

.package-img img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.package-img .days {
  position: absolute;
  bottom: 10px;
  left: 10px;
  background: #fff;
  padding: 5px 10px;
  font-size: 13px;
  border-radius: 20px;
}

.package-content {
  padding: 15px;
}

.package-content h5 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 10px;
}

.package-content h6 {
  font-size: 15px;
  font-weight: bold;
}

.package-content h6 del {
  color: #999;
  font-size: 13px;
  margin-left: 5px;
}

.package-content h6 span {
  color: red;
  font-size: 13px;
  margin-left: 5px;
}

.package-content p {
  font-size: 13px;
  color: #777;
  margin-top: 5px;
}

</style>

      <div class="breadcrumb-section two">    
          <div class="video-banner">
              <video autoplay loop muted playsinline id="packagebannerVideo">
                  <source src="https://d1zvcmhypeawxj.cloudfront.net/location/Russia/videos/russia-web-mp4-06c70c5c64-1751967492917.mp4" type="video/mp4">
              </video>
              <div class="video-overlay"></div>
              <button id="muteBtn">🔇</button>
          </div>
      </div>
      




      <!-- Read More-->
      <div class="modal enquiry-modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                  <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M2.00247 0.500545C1.79016 0.505525 1.58918 0.582706 1.4362 0.735547L0.694403 1.479C0.345704 1.82743 0.389689 2.43243 0.79164 2.83493L3.00694 5.05341L0.79164 7.27092C0.389689 7.67328 0.345566 8.27842 0.694403 8.62753L1.4362 9.37044C1.7849 9.71872 2.38879 9.67543 2.7913 9.27293L5.00659 7.05473L7.22189 9.27293C7.62467 9.67543 8.22898 9.71872 8.57699 9.37044L9.31989 8.62753C9.6679 8.27856 9.62461 7.67342 9.22182 7.27092L7.00653 5.05341L9.22182 2.83493C9.62461 2.43243 9.6679 1.82743 9.31989 1.479L8.57699 0.735547C8.22898 0.386433 7.62467 0.430557 7.22189 0.833614L5.00659 3.05126L2.7913 0.833753C2.56515 0.606635 2.27482 0.493906 2.00247 0.500545Z" />
                  </svg>
               </button>
               <div class="modal-body">
                  <h4 class="modal-title" id="enquiryModalLabel">Northern Lights Tour Packages</h4>
                  <div class="prose prose-sm"><p>If you’re looking for an opportunity to dance under the magical Northern Lights, Capture A Trip is your go-to solution. Capture A Trip offers well-curated Northern Lights Tour Package from Delhi, Bangalore, Mumbai, or another Indian city. Capture A Trip is the finest travel agency known for their Northern Lights Tour Packages from India. With years of experience, we aim to bring your dream trip into reality. The Northern Lights, also known as the Aurora Borealis are nature’s most beautiful light show, seen only in certain parts of the planet. They require both patience and planning, but what is the reward? An experience that will live in your heart forever. Whether you’re an experienced explorer or a first-time tourist, a well-curated <strong>Northern Lights Tour Packages</strong> takes away confusion and transforms your experience into a smooth ride.</p><p>The Northern Lights are more than a sight; they are an experience that has captivated tourists and dreamers for ages. But here’s the question: how do you turn your dreams of witnessing such miracles into action? Northern Lights Holiday Package allows all the travelers an opportunity to live up their dream trip and have a first hand experience of Northern Lights. These cosmic lights, dancing and twirling across the Arctic sky, have a certain attraction that goes beyond their eye-catching beauty. What makes the Northern Lights even more captivating is their timeless beauty. One of the amazing things that attracts visitors to Northern Lights who are using our <strong>Northern Lights Trip Package</strong> is the myths and the legends, which is another aspect of the Aurora Borealis. The Aurora was frequently associated with myths and stories among ancient cultures.</p><p>The Northern Lights are uncertain which adds to their charisma. No two shows are alike, and there is no assurance they will appear on any particular night. This unpredictability makes each sighting a precious and once-in-a-lifetime encounter. When the lights appear, they do more than just light up the sky; they also light up your insides, reminding you of nature’s beauty and unpredictability. While the stunning show of the Aurora is superior, some claim to hear faint crackling or whispering sounds as the northern lights move. Seeing the Northern Lights is beyond just looking up; it is all about the trip that you take to see them. The adventure itself is a memorable part of the experience, be it sleeping in glass igloos in Finland, climbing through Iceland’s glaciers, or sailing along Norway’s fjords. These activities, paired with the lights, transform the journey into something as beautiful as the destination which could be experienced through our <strong>Northern Lights Trip Package from India</strong>.</p><h2>Best Time To See The Northern Lights</h2><h3>September to April: Aurora Season</h3><p>The Northern Lights are best visible in the dark months of the year, when the evenings are longer and the skies are clearer. Throughout September and April, the Arctic Circle has longer periods of darkness, making it perfect for Aurora hunting. And <strong>Northern Lights Holiday Package</strong> guarantees once-in-a-life Aurora hunting!</p><p><strong>September:</strong> As summer fades into autumn, the evenings become longer, offering a perfect situation for Aurora watching. This is also the season when autumn colors cover the countryside, creating an eye-catching contrast to the lights above.</p><p><strong>October:</strong> October combines the beauty of fall with the nearing arrival of winter. The weather is cooler but bearable, and the chances of clear skies increase.</p><p><strong>November:</strong> As the Arctic regions shift into wintertime, the nights become longer, boosting Aurora visibility. Snow begins to fall on the countryside, bringing a beautiful touch to your encounter.</p><p><strong>December:</strong> December is synonymous with the Christmas season, and nothing says holiday joy more than witnessing the Northern Lights under a blanket of snowflakes.</p><p><strong>January and February:</strong> The Northern Lights are best seen in January and February, when the skies are darkest and the conditions are clearest.</p><p><strong>March:</strong> March sees the end of the Aurora season, and it brings some of the brightest shows due to increased solar activity. The weather warms up somewhat, making outside activities more comfortable.</p><p>Catching the Northern Lights requires accurate timing, both seasonally and nightly. The Aurora does not keep a strict timetable, which adds to its popularity. But with the Northern Lights Trip Package, you’ll be rewarded with an unearthly experience.</p><p></p><h2>Best Places To See Northern Lights Around The Globe</h2><h3>Tromsø, Norway:</h3><p>Tromsø, known as the “Gateway to the Arctic,” is a popular location for those chasing the Northern Lights. Tromsø, located in the Arctic Circle, offers modern comforts with outdoor activities. The city’s location provides some of the finest skies, making it a popular destination for Aurora watching. Visitors can pick up a <strong>Northern Lights Tour Package</strong> which includes guided treks to remote spots where you can see the lights better. Tromsø offers several Arctic activities, including dog sledding, snowshoeing, and whale viewing. Don’t pass up the opportunity to visit the Polar Museum or experience Sami culture.</p><h3>Reykjavik, Iceland:</h3><p>Many people dream of visiting Iceland, which has outstanding landscapes of waterfalls, geysers, and glaciers. Reykjavik, the capital city, is an excellent base for Northern Lights adventures. The surroundings around Reykjavik are perfect for observing the Northern Lights due to their dark skies and low light pollution. The majority Northern Lights Holiday Packages include visits to Þingvellir National Park, a UNESCO World Heritage Site observed for its breathtaking Aurora displays. Pair your Northern Lights trip with an escape to the Blue Lagoon, where you can unwind in geothermal pools under the stars. Iceland’s Golden Circle trip is another must-see, taking travelers through stunning surroundings that feel otherworldly.</p><h3>Rovaniemi, Finland:</h3><p>Rovaniemi, Santa Claus’ official home town, is a charming getaway for both families and couples. This quaint village in Finnish Lapland provides a fairytale-like atmosphere for witnessing the Northern Lights. Its northern location allows for regular Aurora sightings, particularly during the peak months of September to March. Several Northern Lights tour packages include staying in glass igloos, allowing you to enjoy the Aurora from the luxury of your own bed. In Rovaniemi, you may go on reindeer sleigh rides or try your hand at ice fishing. The tranquil snowy landscapes contribute to the magic of your trip.</p><h3>Yellowknife, Canada:</h3><p>Yellowknife, Canada, is a fantastic option for anyone looking for an exciting adventure in North America. This tiny village in the Northwest Territories is renowned as one of the world’s best spots to watch the Northern Lights. Yellowknife’s flat geography and high skies provide for endless views of the Aurora Borealis. Tour guides are popular, with Northern Lights travel packages include cozy cabins and heated viewing locations. Yellowknife also provides unique Arctic adventures including snowmobiling, ice road driving, and learning about traditional customs. These activities add detail and cultural complexity to your Northern Lights experience.</p><h3>Abisko, Sweden:</h3><p>Abisko, a tiny town in Swedish Lapland, has become known as one of the best places in the world for witnessing the Northern Lights. The Aurora Sky Station has been designed specifically for Northern Lights fans. Abisko’s location in the “blue hole” (an area noted for its beautiful sky) makes it a trustworthy destination for Aurora viewing. The <strong>Northern Lights trip packages</strong> offer personal visits to the Sky Station, providing a memorable experience. Beyond the lights, Abisko provides ice climbing, cross-country skiing, and the opportunity to witness Arctic wildlife such as reindeer and moose.</p><h3>Fairbanks, Alaska, USA:</h3><p>Alaska is a wild wonderland, and Fairbanks is a prime location for enjoying the Northern Lights. Located beneath the Aurora Oval, Fairbanks provides practically certain sights to see during the Aurora season. The city’s location ensures long, dark nights, great for seeing the lights. For a more immersive experience, pick Northern Lights tour packages which offer accommodations at isolated locations. Combine your Aurora watching experience with dog mushing, a visit to the Ice Museum, or a dip in Chena’s hot springs. The raw, wild beauty of Alaska heightens the wonder of the Northern Lights.</p><h3>Murmansk, Russia:</h3><p>Murmansk, the largest city north of the Arctic Circle, provides an off-the-beaten-path trip for Northern Lights fans. Its distant location and distinctive cultural heritage make it an intriguing option. Murmansk’s high latitude guarantees regular Aurora sightings. You could get Northern Lights trip packages that include cultural tours of the city as well as Aurora searching. Combine your trip with trips to historical sites, icebreaker tours, and perhaps a snowmobile ride across the freezing tundra.</p><h3>Svalbard, Norway:</h3><p>For those seeking extreme adventures, Svalbard provides a one-of-a-kind opportunity to see the Northern Lights during the arctic night. This archipelago, which lies halfway between Norway and the North Pole, is one of the most isolated Aurora destinations. The long arctic evenings from November to February provide ideal circumstances for viewing the lights. The <strong>Northern Lights Holiday Packages</strong> to Svalbard includes guided snowmobile trips and wilderness expeditions. The stunning scenery of Svalbard, including glaciers, fjords, and Arctic fauna, make it an exceptional destination.</p><h2>Best Things To Do During Northern Lights</h2><h3>Enjoy a Northern Light safari:</h3><p>A Northern Lights safari is one of the most fascinating and daring activities offered as part of your Northern Lights holiday package. This involves going on a guided hunt to identify the finest locations where the lights are most visible. Chasing the Northern Lights through icy forests, ice lakes, and chilly mountain ranges is a fascinating adventure. Most Northern Lights vacation packages include skilled guides who understand the landscape and weather patterns that produce the most magnificent displays. Some tour providers even utilize snowmobiles or husky sleds to transport you farther into remote locations with less city lights and pollution, increasing your chances of seeing the full splendor of the Aurora Borealis.</p><h3>Have a fun stay in glass igloos:</h3><p>What better way to see the Northern Lights than from the comfort of a luxury glass igloo or ice hotel? Northern Finland, Iceland, and portions of Sweden and Norway provide a variety of unusual lodgings that allow you to see the lights from the comfort of your bed. These types of lodgings are frequently included in many <strong>Northern Lights tour packages</strong>, giving an extra layer of magic to your vacation. These igloos, which typically have glass roofs, provide a wonderful view of the night sky, allowing you to watch the Aurora Borealis from the warmth of your chamber without having to venture outside into the frigid cold. Similarly, ice hotels offer a totally unique experience, with everything from the furniture to the walls carved from ice, yet visitors are kept snug inside with warm blankets and sleeping bags meant to keep them comfortable.</p><h3>Go dog sledding in the Arctic:</h3><p>Dog sledding is an exciting experience for people seeking adventure while seeing the Northern Lights. Imagine traveling across frozen areas under a starry sky, while the brilliant Aurora Borealis lights the night above you. Dog sledding is not only a pleasant pastime, but it also provides a true experience of the Arctic tundra, with friendly huskies leading you through the snow. The majority Northern Lights trips include dog sledding as part of the plans. Your guide will show you how to operate the sled, and you will get the opportunity to feel the rush of mushing your own team of dogs. Even if you’re not an expert, the guides are well trained and will assure your safety and fun.</p><h3>Enjou snowmobile tours:</h3><p>If dog sledding isn’t your thing, snowmobiling is another popular and exciting activity featured in many Northern Lights Holiday Packages. Snowmobiling is an excellent opportunity to explore huge swaths of untouched nature while chasing the Northern Lights. You’ll go through snowy trails, frozen lakes, and forests where the silence is disturbed only by the sound of your snowmobile. Capture A Trip provides <strong>Northern Lights tour packages from India</strong> that include snowmobiling in their schedule, allowing guests to experience isolated places away from city light pollution, where the aurora is best visible. Riding a snowmobile under the bright stars, with the Northern Lights shimmering above, provides a memorable thrill for those who prefer a fast-paced, adrenaline-fueled experience.</p><h3>Take on an adventurous Northern Lights cruise:</h3><p>If you’re visiting Norway or Iceland, plan for a cruise in your Northern Lights tour package. The Aurora Borealis is even more magical when seen from water. Cruise ships that offer Northern Lights excursions frequently feature vast decks that provide amazing panoramic views of the night sky, with minimum light pollution and a clear horizon. In addition to the Northern Lights, many cruises provide other spectacular experiences, such as visits to secluded fjords, Arctic wildlife viewing, and onboard amenities like saunas and hot tubs, where you can rest and warm up after an evening spent seeing the aurora. These cruises are frequently offered as part of a comprehensive Northern Lights holiday package.</p><h3>Plan a visit to Sami community:</h3><p>During your Northern Lights trip, try visiting a Sami community for a more thorough cultural experience. The Sami are the native people of the Arctic zones, and their way of life has a direct connection to the land, fauna, and traditions of the Arctic. Most Northern Lights holiday packages offer trips to these settlements, where you can discover Sami culture, the reindeer herding lifestyle, and centuries-old customs. In some regions, you may be able to sample traditional Sami cuisine or participate in activities such as ice fishing, reindeer sledding, and cultural performances. This offers an interesting and realistic approach to see the Arctic region beyond the Northern Lights.</p><h3>Take part in winter activities:</h3><p>For those who enjoy winter sports, the Northern Lights region provides a choice of activities to keep them involved during the day. From skiing and snowboarding to snowshoeing and ice climbing, there is something for every winter sports fan. The majority Northern Lights trip packages provide a variety of winter activities to enjoy during your vacation, ensuring that your experience is complete. Skiing beneath the Arctic’s bright, clean sky or snowboarding over pure powder is the perfect way to spend your days, especially in the evenings when you can watch the Northern Lights.</p><h3>Go on a fantastic photography tour:</h3><p>The Northern Lights are among the most photographed natural occurrences in the world, and for good reason. The colors, patterns, and shapes that the aurora takes on are captivating, providing unlimited opportunity for breathtaking photographs. If you are an avid photographer or simply wish to capture the splendor of the lights, many Northern Lights trip packages include specialized photography tours. These trips are usually conducted by expert photographers who not only know where to get the greatest views of the lights, but also offer tips and advice on how to get the perfect picture. Whether you’re using a professional camera or simply your phone, a photography tour can help you make the most of your Aurora Borealis experience.</p><h3>Relax and recharge in the hot spring:</h3><p>After a full day of outdoor activities, it is time to relax. Hot springs and saunas are a vital part of the experience in Iceland, Finland, and Norway. Lots of <strong>Northern Lights travel packages</strong> involve visits to geothermal hot springs and the opportunity to unwind in traditional wood-fired saunas. Picture relaxing in a warm outdoor hot spring with the chilly Arctic air surrounding you, all while the Northern Lights dance overhead. It’s the perfect way to relax and recharge after a day of activity, all while taking in the natural beauty of the northern environment.</p><h3>Savor the Arctic cuisine:</h3><p>A Northern Lights trip provides an excellent opportunity to try native Arctic cuisine. Whether it’s fresh seafood in Norway, reindeer in Finland, or smoked lamb in Iceland, each region has its distinct cuisine. Although all Northern Lights vacation packages include local dinners as part of the itinerary, giving you a taste of the region’s unique gastronomic choices. You can eat hearty meals designed to keep you warm in the chilly weather, and you might even try a classic cuisine that you can’t find anywhere else. Dining at local eateries or around bonfires adds a personal and comfortable atmosphere to your vacation, making it even more memorable.</p><h2>Northern Light Tour Package from India</h2><p>Anyone looking for an affordable and convenient trip package can choose a Northern Lights tour package from India. Because Capture A Trip is a Delhi-based travel firm that specializes on both domestic and international travels, we are the best option for anyone wishing to visit this fascinating location from the country. Although we have a strong reputation in Delhi for domestic and international travel, Capture A Trip is a well-known travel agency throughout India. We specialize in providing special and unforgettable moments for tourists who desire to see the Northern Lights, allowing people from all across the country to appreciate the destination’s beauty and charm. Join us on a journey to the Northern Lights, which provides breathtaking scenery and cultural discovery of the Arctic region. As your trusted travel companion, we manage a smooth journey from India to the Arctic and other regions, ensuring that your vacation is filled with excitement at every turn. Our <strong>Northern Lights tour package from India</strong> allows you to immerse yourself in the Northern Lights charisma.</p><h2>Why Choose The Northern Light Tour Package With Capture A Trip?</h2><p>Tailored Expertise: The Northern Lights are both unpredictable and mesmerizing. To maximize your chances of seeing the aurora, you will need expert assistance. Capture A Trip offers years of experience and local understanding. The **Northern Lights tour packages **are meticulously designed to take you to the best locations at the best times for great aurora watching. Their guides are experienced professionals who know aurora patterns, weather conditions, and the most distant viewing locations.</p><h3>Hassle-Free Planning:</h3><p>Traveling to Arctic locations such as Iceland, Norway, or Finland to witness the Northern Lights might be difficult to plan, especially if you’re traveling from a long way away like India. Capture A Trip’s <strong>Northern Lights travel packages</strong> manage all of the arrangements for you. These packages include everything you need: flights (if requested), lodging, guided tours, transportation, and even optional activities such as dog sledding or snowmobiling. This comfort allows you to fully enjoy the voyage and the magic of the aurora.</p><h3>Curated Itineraries:</h3><p>Capture A Trip knows that each traveler is unique, thus they cater to a variety of interests and travel types. Whether you’re an adventurer, a luxury seeker, or a cultural traveler, their Northern Lights holiday packages can be tailored to your specific demands. The itineraries cater to everyone, from staying in warm cabins or glass igloos to going on thrilling snowmobile adventures.</p></div>
               </div>
            </div>
         </div>
      </div>
      <!-- Enquiry Modal section End-->


      <!-- Package Details Page Start-->
      <div class="package-section pt-100 mb-10">
        <div class="container">
          
          <!-- Heading -->
          <div class="package-info-wrap mb-4">
            <h4>Russia with St Petersburg and Moscow</h4>
            <p>
              If you’re looking for an opportunity to dance under the magical Northern Lights,
              Capture A Trip is your go-to solution.
            </p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal">Read More</a>
          </div>

          <!-- Cards Row -->
          <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <a href="package-details.php">
                 <div class="package-card">
                   <div class="package-img">
                     <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="">
                     <span class="days">⏳ 6 nights / 7 days</span>
                   </div>
                   <div class="package-content">
                     <h5>Russia Northern Lights (Without Flights)</h5>
                     <h6>₹ 109,999 <del>₹119,999</del> <span>₹10,000 Off</span></h6>
                     <p>Dates on Request</p>
                   </div>
                 </div>
              </a>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <a href="package-details.php">
                 <div class="package-card">
                   <div class="package-img">
                     <img src="https://images.unsplash.com/photo-1482192505345-5655af888cc4" alt="">
                     <span class="days">⏳ 7 nights / 8 days</span>
                   </div>
                   <div class="package-content">
                     <h5>Russia with St. Petersburg & Moscow</h5>
                     <h6>₹ 136,999 <del>₹146,999</del> <span>₹10,000 Off</span></h6>
                     <p>Dates on Request</p>
                   </div>
                 </div>
              </a>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
               <a href="package-details.php">
                  <div class="package-card">
                   <div class="package-img">
                     <img src="https://images.unsplash.com/photo-1446776811953-b23d57bd21aa" alt="">
                     <span class="days">⏳ 9 nights / 10 days</span>
                   </div>
                   <div class="package-content">
                     <h5>Finland Sweden Tour Packages</h5>
                     <h6>₹ 189,999 <del>₹199,999</del> <span>₹10,000 Off</span></h6>
                     <p>Dates on Request</p>
                   </div>
                 </div>
               </a>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <a href="package-details.php">
                 <div class="package-card">
                   <div class="package-img">
                     <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee" alt="">
                     <span class="days">⏳ 6 nights / 7 days</span>
                   </div>
                   <div class="package-content">
                     <h5>Russia Northern Lights (With Flights)</h5>
                     <h6>₹ 209,999 <del>₹219,999</del> <span>₹10,000 Off</span></h6>
                     <p>Dates on Request</p>
                   </div>
                 </div>
              </a>
            </div>

          </div>
        </div>
      </div>
      <!-- Package Details Page End-->



         <div class="home2-destination-section mb-100">
           <div class="container">
               <div class="section-title text-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                   <h2>Trending  Destinations</h2>
               </div>
               <div class="destination-slider-area">
                   <div class="swiper home2-destination-slider">
                       <div class="swiper-wrapper">
                           <div class="swiper-slide">
                               <div class="destination-card2">
                                   <a href="destination-details.html" class="destination-img">
                                       <img src="assets/img/home2/destination-img1.jpg" alt="">
                                   </a>
                                   <div class="destination-content">
                                       <h5><a href="destination-details.html">Great Wall of China</a></h5>
                                       <span>Starting ₹ 19,499</span>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="destination-card2">
                                   <a href="destination-details.html" class="destination-img">
                                       <img src="assets/img/home2/destination-img2.jpg" alt="">
                                   </a>
                                   <div class="destination-content">
                                       <h5><a href="destination-details.html">Rome, Itlay</a></h5>
                                       <span>Starting ₹ 19,499</span>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="destination-card2">
                                   <a href="destination-details.html" class="destination-img">
                                       <img src="assets/img/home2/destination-img3.jpg" alt="">
                                   </a>
                                   <div class="destination-content">
                                       <h5><a href="destination-details.html">Machu Picchu of Peru</a></h5>
                                       <span>Starting ₹ 19,499</span>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="destination-card2">
                                   <a href="destination-details.html" class="destination-img">
                                       <img src="assets/img/home2/destination-img4.jpg" alt="">
                                   </a>
                                   <div class="destination-content">
                                       <h5><a href="destination-details.html">Great Temple Jordan</a></h5>
                                       <span>Starting ₹ 19,499</span>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="destination-card2">
                                   <a href="destination-details.html" class="destination-img">
                                       <img src="assets/img/home2/destination-img5.jpg" alt="">
                                   </a>
                                   <div class="destination-content">
                                       <h5><a href="destination-details.html">Athens Greece</a></h5>
                                       <span>Starting ₹ 19,499</span>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="destination-card2">
                                   <a href="destination-details.html" class="destination-img">
                                       <img src="assets/img/home2/destination-img6.jpg" alt="">
                                   </a>
                                   <div class="destination-content">
                                       <h5><a href="destination-details.html">Switzerland</a></h5>
                                       <span>Starting ₹ 19,499</span>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="destination-card2">
                                   <a href="destination-details.html" class="destination-img">
                                       <img src="assets/img/home2/destination-img7.jpg" alt="">
                                   </a>
                                   <div class="destination-content">
                                       <h5><a href="destination-details.html">Norway</a></h5>
                                       <span>Starting ₹ 19,499</span>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="slider-btn-grp two">
                       <div class="slider-btn destination-slider-prev">
                           <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.31421H16V6.68564H0V5.31421Z"/>
                               <path fill-rule="evenodd" clip-rule="evenodd"
                                   d="M0.685714 6.68569C3.9104 6.68569 6.54629 3.84958 6.54629 0.825119V0.139404H5.17486V0.825119C5.17486 3.12181 3.12412 5.31426 0.685714 5.31426H0V6.68569H0.685714Z"/>
                               <path fill-rule="evenodd" clip-rule="evenodd"
                                   d="M0.685714 5.31421C3.9104 5.31421 6.54629 8.15032 6.54629 11.1748V11.8605H5.17486V11.1748C5.17486 8.87901 3.12412 6.68564 0.685714 6.68564H0V5.31421H0.685714Z"/>
                           </svg>
                       </div>
                       <div class="slider-btn destination-slider-next">
                           <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                               <g>
                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M16 7.31421H-3.8147e-06V8.68564H16V7.31421Z"/>
                                   <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M15.3143 8.68569C12.0896 8.68569 9.45371 5.84958 9.45371 2.82512V2.1394H10.8251V2.82512C10.8251 5.12181 12.8759 7.31426 15.3143 7.31426H16V8.68569H15.3143Z"/>
                                   <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M15.3143 7.31421C12.0896 7.31421 9.45371 10.1503 9.45371 13.1748V13.8605H10.8251V13.1748C10.8251 10.879 12.8759 8.68564 15.3143 8.68564H16V7.31421H15.3143Z"/>
                               </g>
                           </svg>
                       </div>
                   </div>
               </div>
           </div>
         </div>


         <section>
              <div class="container">
                  <img src="assets/Time to travel and explore places, create memories, embrace every moment, feel free, chase sunsets, live your journey fully go on. (1).png" class="img-fluid" style="border-radius: 15px;">
              </div>
         </section>


         <!-- home1 testimonial Section Start-->
          <div class="home1-testimonial-section mb-5 pb-0">
              <div class="container">
                  <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                      <div class="col-xl-6 col-lg-8">
                          <div class="section-title text-center">
                              <h2>Reviews From Our Travellers</h2>
                              <!-- <p>We</p> -->
                          </div>
                      </div>
                  </div>  
                  <div class="row mb-2">
                      <div class="col-lg-12">
                          <div class="swiper home1-testimonial-slider">
                              <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                      <div class="review-col">
                                          <div class="review-box">
                                              <div class="review-img">
                                                  <img src="assets/img/home5/tour-guide-img4.png" class="img-fluid">
                                              </div>
                                              <div class="review-content">
                                                  <div class="stars">★★★★★</div>
                                                  <p class="text-sm">The Pause Project gave me the space I didn’t realize I was craving. Through guided meditations, mindful exercises, and reflective sessions, I learned to release the tension, guilt, and fears I had been carrying. I left feeling not only refreshed but truly transformed, with tools to maintain calm and clarity in my daily life.</p>
                                                  <h4>Harsh Bhatiya</h4>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="swiper-slide">
                                      <div class="review-box">
                                          <div class="review-img">
                                              <img src="assets/img/home5/tour-guide-img3.png">
                                          </div>
                                          <div class="review-content">
                                              <div class="stars">★★★★★</div>
                                              <p>I didn’t realise how much I had been carrying until The Pause Project gave me the space to release it. Through guided sessions and gentle conversations, I confronted old fears, anger, and sadness. It was intense, yes, but so freeing. I left feeling lighter, open, and at peace with parts of myself I had long ignored.</p>
                                              <h4>Rajni Malhotra</h4>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-slide">
                                      <div class="review-box">
                                          <div class="review-img">
                                              <img src="assets/img/home5/tour-guide-img1.png">
                                          </div>
                                          <div class="review-content">
                                              <div class="stars">★★★★★</div>
                                              <p>Joining The Pause Project was one of the best decisions I’ve made for myself. Every moment from the meditations to the heartfelt group sessions encouraged me to look inward and nurture my mental and emotional wellness. It wasn’t just a break from life; it was a breakthrough into living more mindfully and fully.</p>
                                              <h4>Gunish</h4>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-slide">
                                      <div class="review-box">
                                          <div class="review-img">
                                              <img src="assets/img/home5/tour-guide-img2.png">
                                          </div>
                                          <div class="review-content">
                                              <div class="stars">★★★★★</div>
                                              <p>Unforgettable Spiti Circuit Ride with Capture A Trip 🚵‍♂️⛰️ The Spiti Valley bike trip with Capture A Trip was just next level. Scenic views, smooth roads (and bumpy ones too 😅), chilled stays, and bikes in top shape – full paisa vasool! The real MVPs — Jatin bhai, Sonam bhai, Vaibhav bhai, and Neeraj bhai — pure legends! Always hyped, super helpful, and made sure we were safe and laughing every day. Total bro-vibes throughout the ride 🙌🔥.Big shoutout to Saurabh for smooth bookings and backend support – clean work!</p>
                                              <h4>Shreya Sodani</h4>
                                          </div>
                                      </div>
                                  </div>
                                  
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="row mb-2">
                      <div class="col-lg-12">
                          <div class="swiper home1-testimonial-slider">
                              <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                      <div class="review-col">
                                          <div class="review-box">
                                              <div class="review-img">
                                                  <img src="assets/img/home5/tour-guide-img4.png" class="img-fluid">
                                              </div>
                                              <div class="review-content">
                                                  <div class="stars">★★★★★</div>
                                                  <p class="text-sm">The Pause Project gave me the space I didn’t realize I was craving. Through guided meditations, mindful exercises, and reflective sessions, I learned to release the tension, guilt, and fears I had been carrying. I left feeling not only refreshed but truly transformed, with tools to maintain calm and clarity in my daily life.</p>
                                                  <h4>Harsh Bhatiya</h4>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="swiper-slide">
                                      <div class="review-box">
                                          <div class="review-img">
                                              <img src="assets/img/home5/tour-guide-img3.png">
                                          </div>
                                          <div class="review-content">
                                              <div class="stars">★★★★★</div>
                                              <p>I didn’t realise how much I had been carrying until The Pause Project gave me the space to release it. Through guided sessions and gentle conversations, I confronted old fears, anger, and sadness. It was intense, yes, but so freeing. I left feeling lighter, open, and at peace with parts of myself I had long ignored.</p>
                                              <h4>Rajni Malhotra</h4>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-slide">
                                      <div class="review-box">
                                          <div class="review-img">
                                              <img src="assets/img/home5/tour-guide-img1.png">
                                          </div>
                                          <div class="review-content">
                                              <div class="stars">★★★★★</div>
                                              <p>Joining The Pause Project was one of the best decisions I’ve made for myself. Every moment from the meditations to the heartfelt group sessions encouraged me to look inward and nurture my mental and emotional wellness. It wasn’t just a break from life; it was a breakthrough into living more mindfully and fully.</p>
                                              <h4>Gunish</h4>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-slide">
                                      <div class="review-box">
                                          <div class="review-img">
                                              <img src="assets/img/home5/tour-guide-img2.png">
                                          </div>
                                          <div class="review-content">
                                              <div class="stars">★★★★★</div>
                                              <p>Unforgettable Spiti Circuit Ride with Capture A Trip 🚵‍♂️⛰️ The Spiti Valley bike trip with Capture A Trip was just next level. Scenic views, smooth roads (and bumpy ones too 😅), chilled stays, and bikes in top shape – full paisa vasool! The real MVPs — Jatin bhai, Sonam bhai, Vaibhav bhai, and Neeraj bhai — pure legends! Always hyped, super helpful, and made sure we were safe and laughing every day. Total bro-vibes throughout the ride 🙌🔥.Big shoutout to Saurabh for smooth bookings and backend support – clean work!</p>
                                              <h4>Shreya Sodani</h4>
                                          </div>
                                      </div>
                                  </div>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
                  
              </div>
          </div>




           <div class="destination-dt-travel-season-section mb-100" id="scroll-section">
        <div class="container">

            <div class="section-title text-center mb-60 wow animate fadeInDown my-title" data-wow-delay="200ms" data-wow-duration="1500ms">
                <h2>Reasons To Make Us Your Travel Bestie</h2>
            </div>

            <div class="row g-4 justify-content-center">

                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bestie-box">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Solo is safe.</h4>
                            <p>Girlies, you're safe AF. No need to wait on fam or besties—just pack and go! Explore stress-free with 100% freedom!</p>
                        </div>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bestie-box">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/330/330426.png" alt="">
                        </div>
                        <div class="content">
                            <h4>We're the greenest flag.</h4>
                            <p>We ensure safety with verified stays, reliable transport, and trained guides for a secure, comfy, and hassle-free trip.</p>
                        </div>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bestie-box">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Our Group Captains are fire.</h4>
                            <p>Our awesome trip captains are part-guide, part-friend and full time vibe curators.</p>
                        </div>
                    </div>
                </div>

                <!-- Box 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bestie-box">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="">
                        </div>
                        <div class="content">
                            <h4>No kebab main haddi.</h4>
                            <p>No middlemen, no hidden fees. Enjoy direct bookings, lower costs, and personalized support for a seamless trip.</p>
                        </div>
                    </div>
                </div>

                <!-- Box 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bestie-box">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/545/545682.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Vibe check comes first.</h4>
                            <p>We customize your trips based on age groups, so you're not stuck vibing to someone else's playlist.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="home1-faq-section mb-100 ">
        <div class="container">
            <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-10 col-lg-10">
                    <div class="section-title text-center">
                        <h2>Questions & Answer</h2>
                        <p style="max-width: 100%;">We’re committed to offering more than just products—we provide exceptional experiences.</p>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="faq-wrap">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">What Services Does Your Travel Agency Provide?</button>
                                </h5>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        A travel agency typically provides a wide range of services to ensure a smooth and enjoyable travel experience. As like- <span>Hotel booking, Flight Booking, Visa & Customized Travel Pakcge etc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">Do You Offer Customized Travel Packages?</button>
                                </h5>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                       Absolutely! We offer fully customized travel packages based on your interests, budget, and schedule. Whether you're planning <span>a solo adventure, a family vacation, a romantic getaway, or a group tour</span>, our team will tailor every detail to create a personalized travel experience just for you.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">Can I Book Flights, Hotels, and Tours Separately?</button>
                                </h5>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                       Yes, you can! We provide the flexibility to book <span>flights, hotels, and tours separately</span> based on your specific needs. Whether you need just a flight, only accommodation, or want to add a tour later — we’re here to help you plan each part of your trip your way.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                        aria-expanded="false" aria-controls="flush-collapseFour">Do You Provide Visa Assistance?</button>
                                </h5>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Yes, we do! Our team offers complete <span>visa assistance services</span> to help you navigate the application process smoothly. From providing guidance on required documents to scheduling appointments and submitting applications, we're here to support you every step of the way.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                        aria-expanded="false" aria-controls="flush-collapseFive">What Payment Methods Do You Accept?</button>
                                </h5>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        We accept a variety of <span>payment methods</span> to make your booking process easy and convenient. These include <span>cash, bank transfers, mobile payments (such as bKash, Nagad), and major debit/credit cards</span>. If you have a preferred payment option, feel free to let us know!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                        aria-expanded="false" aria-controls="flush-collapseSix">What Travel Documents are Required for International Travel?</button>
                                </h5>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        For international travel, you’ll typically need several important <span>travel documents</span>, including a <span>valid passport, visa (if required), airline tickets, travel insurance, and any COVID-19 related health certificates</span>. Depending on your destination, additional documents may be necessary. Our team will guide you through the specific requirements for your trip.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- home5 offer Section Start-->
    <div class="home5-offer-section mb-5"> 
        <div class="container">
            <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Northern Lights Related Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="swiper home1-offer-slider mb-40">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="blog-card2 three">
                            <div class="blog-img-wrap">
                                <a href="" class="blog-img">
                                    <img src="assets/img/home6/blog-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4><a href="">10 Breathtaking Destinations You Need to Visit This Year.</a></h4>
                                <ul class="blog-meta">
                                    <li><a href="">05 March, 2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card2 three">
                            <div class="blog-img-wrap">
                                <a href="" class="blog-img">
                                    <img src="assets/img/home6/blog-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4><a href="">10 Breathtaking Destinations You Need to Visit This Year.</a></h4>
                                <ul class="blog-meta">
                                    <li><a href="">05 March, 2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card2 three">
                            <div class="blog-img-wrap">
                                <a href="" class="blog-img">
                                    <img src="assets/img/home6/blog-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4><a href="">10 Breathtaking Destinations You Need to Visit This Year.</a></h4>
                                <ul class="blog-meta">
                                    <li><a href="">05 March, 2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card2 three">
                            <div class="blog-img-wrap">
                                <a href="" class="blog-img">
                                    <img src="assets/img/home6/blog-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4><a href="">10 Breathtaking Destinations You Need to Visit This Year.</a></h4>
                                <ul class="blog-meta">
                                    <li><a href="">05 March, 2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card2 three">
                            <div class="blog-img-wrap">
                                <a href="" class="blog-img">
                                    <img src="assets/img/home6/blog-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4><a href="">10 Breathtaking Destinations You Need to Visit This Year.</a></h4>
                                <ul class="blog-meta">
                                    <li><a href="">05 March, 2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    
                    
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="swiper-pagination1 paginations two"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- home5 offer Section End-->


    <section>
        <div class="container">
            <img src="assets/Time to travel and explore places, create memories, embrace every moment, feel free, chase sunsets, live your journey fully go on. (2).png" class="img-fluid" style="border-radius: 15px;">
        </div>
    </section>


    <section class="mt-3">
        <div class="container">
            <img src="assets/Untitled design (9).png" class="img-fluid" style="border-radius: 15px;">
        </div>
    </section>










































<?php include('footer.php'); ?>


<script>

document.addEventListener("DOMContentLoaded", function () {

    const bannerVideo = document.getElementById("packagebannerVideo");
    const bannerBtn = document.getElementById("muteBtn");

    if (bannerVideo && bannerBtn) {
        bannerBtn.addEventListener("click", function () {
            bannerVideo.muted = !bannerVideo.muted;

            bannerBtn.innerHTML = bannerVideo.muted ? "🔇" : "🔊";
        });
    }

});
</script>

