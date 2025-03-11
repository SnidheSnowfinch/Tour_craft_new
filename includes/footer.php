<div class="footer-top">
        <div class="footer-section">
            <h4>Call Us</h4>
            <p>Request a quote, or just chat about your next vacation. We're always happy to help!</p>
            <strong>+91 9157274775</strong>
        </div>
        <div class="footer-section">
            <h4>Write To Us</h4>
            <p>Be it an enquiry, feedback or a simple suggestion, write to us.</p>
            <strong>tourkraftsindia@gmail.com</strong>
        </div>
        <div class="footer-section">
            <h4>Contact Us</h4>
            <p>Reviews, podcasts, blogs and more..</p>
            <div class="social-icons">
                <label class="icon-nav"><i class="bi bi-telephone"></i></label>
                <label label class="icon-nav">
                    <i class="bi bi-envelope"></i>

                </label>
                <label class="icon-nav"><i class="bi bi-whatsapp"></i></label>
                <label class="icon-nav"><i class="bi bi-facebook"></i></label>
                <label class="icon-nav"><i class="bi bi-instagram"></i></label>
                <label class="icon-nav"><i class="bi bi-twitter"></i></label>
            </div>
        </div>
    </div>
    <footer class="footer">


        <div class="footer-middle">
            <div class="footer-logo">
                <img src="bootstrap/images/logo_footer.webp" alt="Tourkrafts Logo">
                <h6>Your Gateway To The World</h6>
                <p>Request a quote, or just chat about your next vacation. We're always happy to help!</p>
            </div>
            <div class="footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">CSR Policy</a></li>
                    <li><a href="#">How Many Countries?</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Leave Your Feedback</a></li>
                    <li><a href="#">How To Book</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div>
            <div class="footer-form">
                <input type="text" placeholder="Full Name">
                <input type="text" placeholder="Phone Number">
                <input type="email" placeholder="Email">
                <textarea placeholder="Write Your Comment"></textarea>
                <button class="btn">View more</button>
            </div>
        </div>

        <div class="footer-bottom">
            <p>Tourkraft Copyright © 2024 Snowfinch</p>
            <p><a href="#">Terms & Conditions</a> | <a href="#">Privacy & Cookie Policy</a></p>
            <button class="scroll-top" onclick="scrollToTop()" id="backToTopBtn" title="Go to top">
                <i class="bi bi-arrow-up"></i>
            </button>
        </div>
    </footer>
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
         // List of images
         const images = [
            "bootstrap/images/Delhi.webp",
            "bootstrap/images/dwaraka.webp",
            "bootstrap/images/Delhi.webp",
            "bootstrap/images/Himachal.webp"
        ];
        let currentIndex = 0;

        // Change image when clicking a thumbnail
        function changeImage(index) {
            currentIndex = index;
            document.getElementById("carousel-image").src = images[currentIndex];
            updateActiveThumbnail();
        }

        // Go to previous image
        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            document.getElementById("carousel-image").src = images[currentIndex];
            updateActiveThumbnail();
        }

        // Go to next image
        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            document.getElementById("carousel-image").src = images[currentIndex];
            updateActiveThumbnail();
        }

        // Update active thumbnail border
        function updateActiveThumbnail() {
            let thumbnails = document.querySelectorAll(".thumbnail");
            thumbnails.forEach((thumb, index) => {
                if (index === currentIndex) {
                    thumb.classList.add("active");
                } else {
                    thumb.classList.remove("active");
                }
            });
        }
    </script>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>