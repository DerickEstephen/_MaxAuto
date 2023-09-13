<?php include "lib/header.php" ?>


<!-- <p>
  Hover the link to see the
  <a
    href="#"
    class="transititext-primary text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700"
    data-te-toggle="tooltip"
    title="Hi! I'm tooltip"
    >tooltip</a
  >
</p> -->


<section>
  <div class="container pb-16">
    <h2 class="text-[6vw] font-bold uppercase text-center mb-6">find your dream car</h2>

    <img class="w-full mb-5" src="img/home-img.png" alt="">
    <div class="flex justify-center items-center gap-5 ">
      <a href="" class="flex gap-3 items-center bg-ly rounded px-6 py-2 font-medium hover:bg-dy"><i class="fa-solid fa-map"></i> Explore Cars </a>
      <span class="font-medium">OR</span>
      <a href="" class="flex gap-3 items-center bg-ly rounded px-6 py-2 font-medium hover:bg-dy"><i class="fa-solid fa-circle-plus"></i> Post your Ad </a>
    </div>
  </div>
</section>

<section>
  <img src="img/ad2.png" class="w-full" alt="">
  <div class="container py-16">
    <h3 class="text-[4vw] text-db font-semibold mb-6 text-center"><span class="text-dy">New</span> Cars</h3>
    <div class="swiper newcars-slider">
      <div class="swiper-wrapper pb-16">
        <?php
        $selectquery = "SELECT * FROM new_cars";
        $runquery = mysqli_query($con, $selectquery);

        while ($result = mysqli_fetch_array($runquery)) {
          $images = explode(", ", $result['images']); ?>

          <div class="swiper-slide text-center">
            <img src="img/uploadimg/new_cars/<?php echo $images[0]; ?>" alt="">
            <div class="flex flex-col items-center content">
              <h3 class="font-medium text-2xl mb-2"><?php echo $result['make']; ?> <?php echo $result['model']; ?></h3>
              <div class="w-full text-xl text-dy font-bold border-b border-gray-300 pb-3 mb-3"> <span class="text-gray-500 text-lg">Price : </span> PKR <?php echo $result['min_price']; ?>-<?php echo $result['max_price']; ?> Lacs </div>
              <div class="mb-8 text-gray-500 flex gap-2 items-center">
                <p><span class="fa-solid fa-circle-dot text-sm text-db"></span> <?php echo $result['engine_capacity']; ?>cc</p>
                <p><span class="fa-solid fa-circle-dot text-sm text-db"></span> <?php echo $result['transmission_type']; ?></p>
                <p><span class="fa-solid fa-circle-dot text-sm text-db"></span> <?php echo $result['fuel_type']; ?></p>
                <p><span class="fa-solid fa-circle-dot text-sm text-db"></span> <?php echo $result['top_speed']; ?>mph</p>
              </div>
              <a href="new car detailed info.php?post_id=<?php echo $result['post_id']; ?>" target="blank" class="flex gap-3 items-center bg-ly rounded px-6 py-2 font-medium hover:bg-dy">Read More</a>
            </div>
          </div>

        <?php
        }
        ?>

      </div>

      <div class="swiper-pagination"></div>

    </div>
  </div>
</section>


<section class="bg-gray-50">
  <div class="container py-16">
    <h3 class="text-[4vw] leading-tight text-db font-semibold mb-12 text-center"><span class="text-dy">Used</span> Cars</h3>
    <div class="grid grid-cols-4 gap-5">

      <?php
      $selectquery = "SELECT * FROM used_cars WHERE tag = 'featured' LIMIT 12";
      $runquery = mysqli_query($con, $selectquery);

      while ($result = mysqli_fetch_array($runquery)) {
        $images = explode(", ", $result['images']);
      ?>
        <div class="p-3 rounded border shadow-[0px_0px_10px_0px_rgba(0,0,0,0.2)]">
          <div class="relative">
            <label class="absolute bg-red-600 text-white text-sm px-2 py-1"> <i class="fa-solid fa-star"></i> Featured</label>
            <img src="img/uploadimg/usedcars/<?php echo $images['0']; ?>" alt="">
          </div>
          <h3 class="text-xl font-medium pt-3"><?php echo $result['make']; ?> <?php echo $result['model']; ?></h3>
          <p class="mb-2 text-sm text-gray-500"><?php echo $result['city']; ?></p>
          <div class="text-green-600 flex justify-between mb-5">PKR <?php echo $result['price']; ?> Lacs
            <?php
            if (isset($_SESSION['token'])) {
            ?>
              <a href="saved ads.php?ad_id=<?php echo $result['ad_id'] ?>&seller_id=<?php echo $result['seller_id'] ?>"><i class="fa-regular fa-heart text-gray-500 hover:text-red-600" title="Save This Ad"></i></a>
            <?php
            } else {
            ?>
              <a href="javascript:(0)" onclick="alert('Login Required !')"><i class="fa-regular fa-heart text-gray-500 hover:text-red-600" title="Save This Ad"></i></a>
            <?php
            }
            ?>
          </div>
          <a href="used car detailed info.php?ad_id=<?php echo $result['ad_id']; ?>" target="blank" class="flex justify-center bg-ly rounded px-6 py-2 font-medium hover:bg-dy">View Details</a>
        </div>

      <?php
      }
      ?>

      <?php

      $selectquery = "SELECT * FROM used_cars WHERE tag = 'general' LIMIT 12";
      $runquery = mysqli_query($con, $selectquery);

      while ($result = mysqli_fetch_array($runquery)) {
        $images = explode(", ", $result['images']);
      ?>
        <div class="p-3 rounded border shadow-[0px_0px_10px_0px_rgba(0,0,0,0.2)]">
          <img src="img/uploadimg/usedcars/<?php echo $images['0']; ?>" alt="">
          <h3 class="text-xl font-medium pt-3"><?php echo $result['make']; ?> <?php echo $result['model']; ?></h3>
          <p class="mb-2 text-sm text-gray-500"><?php echo $result['city']; ?></p>
          <div class="text-green-600 flex justify-between mb-5">PKR <?php echo $result['price']; ?> Lacs
            <?php
            if (isset($_SESSION['token'])) {
            ?>
              <a href="saved ads.php?ad_id=<?php echo $result['ad_id'] ?>&seller_id=<?php echo $result['seller_id'] ?>"><i class="fa-regular fa-heart text-gray-500 hover:text-red-600" title="Save This Ad"></i></a>
            <?php
            } else {
            ?>
              <a href="javascript:(0)" onclick="alert('Login Required !')"><i class="fa-regular fa-heart text-gray-500 hover:text-red-600" title="Save This Ad"></i></a>
            <?php
            }
            ?>
          </div>
          <a href="used car detailed info.php?ad_id=<?php echo $result['ad_id']; ?>" target="blank" class="flex justify-center bg-ly rounded px-6 py-2 font-medium hover:bg-dy">View Details</a>
        </div>

      <?php
      }
      ?>


    </div>
  </div>
</section>


<section>
  <div class="container py-16">
    <h3 class="text-[4vw] text-db font-semibold mb-10 text-center"><span class="text-dy">Auto</span> Store</h3>
    <div class="swiper autostore-slider overflow-y-visible">

      <div class="swiper-wrapper pb-20">
        <?php
        $selectquery = "SELECT * FROM maxauto_store";
        $firequery = mysqli_query($con, $selectquery);

        while ($result = mysqli_fetch_array($firequery)) {
          $images = explode(", ", $result['images'])
        ?>

          <div class="swiper-slide border">
            <img src="img/uploadimg/maxauto_store/<?php echo $images['0']; ?>" class="w-[80%] mx-auto" alt="">
            <div class="p-3">
              <a href="" class="text-xl font-medium"><?php echo substr($result['title'], 0, 30) . "..."; ?></a>
              <div class="text-green-600 flex justify-between mt-2 mb-5">PKR <?php echo $result['price']; ?>
                <?php
                if (isset($_SESSION['token'])) {
                ?>
                  <a href="saved ads.php?ad_id=<?php echo $result['ad_id'] ?>&seller_id=<?php echo $result['seller_id'] ?>"><i class="fa-regular fa-heart text-gray-500 hover:text-red-600" title="Save This Ad"></i></a>
                <?php
                } else {
                ?>
                  <a href="javascript:(0)" onclick="alert('Login Required !')"><i class="fa-regular fa-heart text-gray-500 hover:text-red-600" title="Save This Ad"></i></a>
                <?php
                }
                ?>
              </div>
              <a href="used car detailed info.php?ad_id=<?php echo $result['ad_id']; ?>" target="blank" class="flex justify-center bg-ly rounded px-6 py-2 mb-3 font-medium hover:bg-dy">Buy Now</a>
              <a href="used car detailed info.php?ad_id=<?php echo $result['ad_id']; ?>" target="blank" class="flex justify-center border border-dy rounded px-6 py-2 font-medium hover:bg-dy">Add to Cart</a>
            </div>
          </div>


        <?php
        }
        ?>

      </div>

      <div class="swiper-pagination"></div>

    </div>
  </div>



</section>



<?php include "lib/footer.php" ?>