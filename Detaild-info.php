<?php include 'includes/header.php'; ?>

    <div>
        <div class="image-section-main">
            <div class="text-box">
                <label class="text2">BEST OF NEPAL</label>
                <div for="" class="inner-text">
                    Home <i class="bi bi-chevron-right"></i> world tour packages<i class="bi bi-chevron-right"></i>Best Of Nepal
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <header>
            <div class="header-div">
                <h1>Best Of Nepal </h1><span class="header-tag">Popular 👑</span>
            </div>
            <div class="d-flex align-items-center">
                <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i> 
                </div><a class="text-review-detail m-1 text-dark text-decoration-none "> 12k Reviews</a>
            </div>
        </header>



        <section class="main-content">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="">
                        <div class="trip-details">
                            <div class="detail-item"><i class="bi bi-calendar2-minus"></i> 8 Days</div>
                            <div class="detail-item"><i class="bi bi-globe"></i> 1 Country</div>
                            <div class="detail-item"><i class="bi bi-geo-alt"></i> 3 Cities</div>
                            <div class="detail-item"><i class="bi bi-info-circle"></i></i> Kathmandu (3N) — Chitwan (2N)
                                +1 City</div>

                            <div class="actions">
                                <button class="action-btn "><i class="bi bi-box-arrow-up-right"></i></button>
                                <button class="action-btn"><i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12"></div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="carousel-container-img">
                        <div class="thumbnails-img">
                            <img class="thumbnail-img active" src="bootstrap/images/Delhi.webp"
                                onclick="changeImage(0)">
                            <img class="thumbnail-img" src="bootstrap/images/dwaraka.webp" onclick="changeImage(1)">
                            <img class="thumbnail-img" src="bootstrap/images/Delhi.webp" onclick="changeImage(2)">
                            <img class="thumbnail-img" src="bootstrap/images/Himachal.webp" onclick="changeImage(3)">
                        </div>

                        <div class="carousel-div">
                            <img id="carousel-image" src="bootstrap/images/Delhi.webp">
                            <button class="carousel-img-btn prev-carousel" onclick="prevImage()">&#10094;</button>
                            <button class="carousel-img-btn next-carousel" onclick="nextImage()">&#10095;</button>
                            <div class="overlay-img">WELCOME TO <span class="brand-img">TOURKRAFT</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 d-flex">
                    <div class="booking-panel">
                        <p>From <span>₹ 70,000</span></p>
                        <label>per person on twin sharing</label>
                        <div>Select Date And Travelers</div>
                        <input type="date" class="form-control">
                        <select class="form-select">
                            <option>2 Adults</option>
                            <option>1 Adult</option>
                            <option>3 Adults</option>
                        </select>
                        <button class="check-button">Check Availability</button>
                        <label class="d-flex"><i class="bi bi-info-circle mx-2"></i>Non-refundable-You will not receive
                            a refund if you cancel.</label>
                    </div>
                </div>


            </div>
        </section>
        <section class="overview">
            <h2 class="subhead">Overview</h2>
            <p>Get a comprehensive tour of Kathmandu, focused on its UNESCO World Heritage Sites, in a single day. With
                a guide in the lead, you'll follow a curated itinerary designed to show you the best of the city,
                including Swayambhunath, Patan Durbar Square, Boudhanath, and Pashupati. Your guide will provide a
                primer on Nepali culture and tradition through narration as you travel.</p>
            <ul>
                <li>Hotel pickup & drop-off</li>
                <li>Guided commentary on Nepali culture & history</li>
                <li>All transportation included</li>
                <li>Bottled water provided</li>
            </ul>
        </section>
        <section class="item-include">
            <h2 class="subhead">What's Included</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="incuded-list">
                        <li class="d-flex-baseline"><img class="mx-2" src="bootstrap/images/tick.webp" alt="">Air-conditioned private tourist
                            vehicle. </li>
                        <li class="d-flex-baseline"><img class="mx-2" src="bootstrap/images/tick.webp" alt="">English Speaking Professional Tour
                            guide.</li>
                        <li class="d-flex-baseline"><img class="mx-2" src="bootstrap/images/tick.webp" alt="">Pick up from & drop off Hotel by
                            private vehicle. </li>
                        <li class="d-flex-baseline"><img class="mx-2" src="bootstrap/images/tick.webp" alt="">500ml of bottled water for drinking
                        </li>
                        <li class="d-flex-baseline"><img class="mx-2" src="bootstrap/images/tick.webp" alt="">All Taxes and official expenses.
                        </li>
                        <li class="d-flex-baseline"><img class="mx-2" src="bootstrap/images/tick.webp" alt="">All-inclusive option: Includes
                            food, soft drinks, and entrance fees.</li>


                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul>
                        <li class="d-flex-baseline"><img class="mx-2" src="bootstrap/images/cross.webp" alt="">Personal Expenses</li>
                        <li class="d-flex-baseline"><img class="mx-2" src="bootstrap/images/cross.webp" alt="">Tips for the guide & driver
                            (Tipping is Expected)</li>
                        <li class="d-flex-baseline"><img class="mx-2" src="bootstrap/images/cross.webp" alt="">Food and drinks, unless otherwise
                            specified </li>
                        <li class="d-flex-baseline"><img class="mx-2" src="bootstrap/images/cross.webp" alt="">For Shared
                            tour, pick up is not included. Please check meeting point location and arrive there.</li>
                    </ul>
                </div>

            </div>
        </section>
       
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="pickup-container">
                <div class=" row">
                    <div class="col-md-6 col-lg-6 col-sm-12 d-mid-flex">
                        <div class="">
                            <h5 class="grid-text"><i class="bi bi-car-front-fill icon-bottom"></i> Pickup Point</h5>
                            <p>Select A Pickup Point</p>
                            <input type="text" class="search-box-div" placeholder="Type to search">
                            <p class="mt-2 grid-text">Pickup Details</p>
                            <p>We provide pickups from both hotels and residences. Kindly furnish us with your pickup
                                location details during the booking process.</p>
                        </div>
                        <div class="vertical-container">
                            <div class="vertical-line"></div>
                            <div class="or-text">OR</div>
                            <div class="vertical-line"></div>
                        </div>
                        <div class="horizontal-container">
                            <div class="horizontal-line"></div>
                            <div class="or-text">OR</div>
                            <div class="horizontal-line"></div>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="">
                            <h5 class="grid-text"><i class="bi bi-geo-alt-fill icon-bottom"></i> Meeting Point</h5>
                            <p>Luxury Holidays Nepal | Luxury Trekking Nepal | Luxury Tour Nepal | Everest Base Camp
                                Helicopter Tour | Bhutan Tour</p>
                           
                            <p class="grid-text"><a href="#" class="text-dark">Open In Google Map</a></p>
                            <p>Luxury Holidays Nepal | Luxury Trekking Nepal | Luxury Tour Nepal | Everest Base Camp
                                Helicopter Tour | Bhutan Tour</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="divider"></div>
                        <div class="mt-3">
                            <h5 class="grid-text"><i class="bi bi-flag-fill icon-bottom"></i> End Point</h5>
                            <p>This Activity Ends Back At The Meeting Point.</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="itinerary">
            <h2 class="subhead">Itinerary</h2>
            <div class="timeline">
                <div class="event">
                    <div class="event-number">1</div>
                    <h3>Swayambhunath</h3>
                    <p>
                        Swayambhunath Stupa, commonly known as the Monkey Temple, stands as a radiant beacon atop a hill overlooking Kathmandu Valley in Nepal. As one of the most ancient and revered religious sites in the country, its white dome and glistening golden spire adorned with the watchful eyes of Buddha attract pilgrims and tourists alike. Its name derives from the lively troops of monkeys that dwell within the complex, adding a lively dynamic to the serene, spiritual ambiance. Rich in symbolic elements, the stupa represents a harmonious blend of Buddhism and Hinduism, making it a testament to Kathmandu's vibrant cultural tapestry. 
                                           </p>
                    <p class="time">1 Hour • Admission Ticket Free</p>
                </div>
    
                <div class="event">
                    <div class="event-number">2</div>
                    <h3>Kathmandu Durbar Square</h3>
                    <p>
                        Kathmandu Durbar Square is the historic heart of the bustling capital of Nepal. A spectacular ensemble of palaces, courtyards, and temples, this UNESCO World Heritage Site pulsates with life and showcases the architectural and cultural grandeur of the Malla kings. Once the coronation site of Nepali monarchs, today it plays host to a myriad of ceremonies and festivals. Among its jewels is the Kumari Ghar, home to the living goddess Kumari, a young girl chosen to represent the deity Taleju. The square, with its intricate woodwork and ornate statues, stands as a vibrant testament to the valley's rich cultural tapestry. 
                                          </p>
                    <p class="time">2 Hours • Admission Ticket Not Included</p>
                </div>
    
                <div class="event">
                    <div class="event-number">3</div>
                    <h3>Patan Durbar Square</h3>
                    <p>
                        Patan Durbar Square, located in the heart of the ancient city of Lalitpur, is a shimmering tapestry of art, architecture, and history. As a focal point of Patan, this UNESCO World Heritage Site is studded with grand palaces, intricately carved wooden windows, and a myriad of sacred temples. The square, once the royal palace complex of the Malla kings, now encapsulates the city's rich cultural and artistic heritage. Highlights include the magnificent Hiranya Varna Mahavihar, the Mahabouddha Temple, and the Patan Museum which offers insights into the traditional art and crafts of the Kathmandu Valley. The square remains a living testament to Nepal's enduring craftsmanship and spirituality.
                    <p class="time">2 Hours • Admission Ticket Not Included</p>
                </div>
            </div>
    
            <span class="show-more">Show 5 More Stops</span>
        </div>
        <section class="overview">
            <h2 class="subhead">Additional Info</h2>
            <ul>
                <li>Confirmation will be received at time of booking</li>
                <li>Not wheelchair accessible</li>
                <li>Stroller accessible</li>
                <li>This is a private tour/activity. Only your group will participate</li>
            </ul>
        </section>
        <div class="bottom-section">
           <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="bottom-card">
                    <h2>Cacellation policy</h2>
                    <p>You can cancel up to 24 hours in advance of the experience for a full refund.</p>
                    <button class="">Check Availability</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="bottom-card">
                    <h2>Questions?</h2>
                    <p>Request a quote, or just chat about your next vacation. We're always happy to help!</p>
                    <button class="">contact us</button>
                </div>
            </div>

           </div> 
        </div>
    </div>
    <?php include 'includes/footer.php';?>   