<section class="bg-[url('img/newsletter-bg.png')] bg-cover bg-center">
    <div class="container py-16 flex flex-col items-center justify-center">
        <h3 class="font-medium text-3xl mb-3">Subscribe for Latest Updates</h3>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="flex">
                <input type="email" name="email" placeholder="Enter your email" class="w-[450px] border border-r-0 rounded-tl-full rounded-bl-full focus:border-dy outline-none  px-6 py-3">
                <input type="submit" name="subscribe" value="Subscribe" class="font-medium cursor-pointer bg-ly border border-ly hover:border-dy hover:bg-dy rounded-tr-full rounded-br-full px-6 py-3">
            </div>
        </form>
    </div>
</section>

<footer class="bg-ly">
    <div class="container py-16 border-b border-db">

        <div class="grid grid-cols-4 gap-5">
            <div class="flex flex-col">
                <h3 class="text-db text-2xl font-semibold mb-3">Our Branches</h3>
                <div class="flex flex-col gap-3">
                    <a href="" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-map-marker-alt"></i> Rawalpindi </a>
                    <a href="" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-map-marker-alt"></i> Islamabad </a>
                    <a href="" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-map-marker-alt"></i> Lahore </a>
                    <a href="" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-map-marker-alt"></i> Karachi </a>
                </div>
            </div>

            <div class="flex flex-col">
                <h3 class="text-db text-2xl font-semibold mb-3">Quick Links</h3>
                <div class="flex flex-col gap-3">
                    <a href="index.php" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-arrow-right"></i> Home </a>
                    <a href="find new car.php" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-arrow-right"></i> New Cars </a>
                    <a href="find used car.php" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-arrow-right"></i> Used Cars </a>
                    <a href="maxauto store.php" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-arrow-right"></i> Auto Parts </a>
                    <a href="#services" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-arrow-right"></i> Services </a>
                    <a href="#contact" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-arrow-right"></i> Contact </a>
                </div>
            </div>

            <div class="flex flex-col">
                <h3 class="text-db text-2xl font-semibold mb-3">Contact Info</h3>
                <div class="flex flex-col gap-3">
                    <a href="#" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                    <a href="#" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                    <a href="#" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-envelope"></i> info@maxauto.com </a>
                    <a href="#" class="flex items-center gap-2 hover:gap-4"> <i class="fas fa-map-marker-alt"></i> Rawalpindi, Pakistan - 46200 </a>
                </div>
            </div>

            <div class="flex flex-col">
                <h3 class="text-db text-2xl font-semibold mb-3">Social Media</h3>
                <div class="flex gap-3">
                    <a href="https://web.facebook.com/?_rdc=1&_rdr" class="flex items-center gap-2 hover:gap-4" target="blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.youtube.com" class="flex items-center gap-2 hover:gap-4" target="blank"> <i class="fab fa-youtube"></i> </a>
                    <a href="https://www.twitter.com" class="flex items-center gap-2 hover:gap-4" target="blank"> <i class="fab fa-twitter"></i> </a>
                    <a href="https://www.instagram.com" class="flex items-center gap-2 hover:gap-4" target="blank"> <i class="fab fa-instagram"></i> </a>
                </div>
            </div>
        </div>
    </div>
    <p class="py-6 text-sm text-center">&copy; 2023, All Rights Reserved - Design and Developed by Derick Estephen</p>
</footer>



<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>

</html>