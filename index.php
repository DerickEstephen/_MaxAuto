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
      <a href="" class="flex gap-3 items-center bg-ly rounded px-6 py-2 font-medium hover:bg-dy transition-all duration-300 ease-in-out"><i class="fa-solid fa-map"></i> Explore Cars </a>
      <span class="font-medium">OR</span>
      <a href="" class="flex gap-3 items-center bg-ly rounded px-6 py-2 font-medium hover:bg-dy transition-all duration-300 ease-in-out"><i class="fa-solid fa-circle-plus"></i> Post your Ad </a>
    </div>
  </div>
</section>

<section class="border-t">
  <div class="container py-16">
    <h3 class="text-[4vw] text-db font-bold mb-8 text-center"><span class="text-dy">New</span> Cars</h3>
    <div class="swiper newcars-slider">
      <div class="swiper-wrapper pb-20">
        <?php
        $selectquery = "SELECT * FROM new_cars";
        $runquery = mysqli_query($con, $selectquery);

        while ($result = mysqli_fetch_array($runquery)) {
          $images = explode(", ", $result['images']); ?>

          <div class="swiper-slide text-center">
            <img src="img/uploadimg/new_cars/<?php echo $images[0]; ?>" alt="" class="mx-auto w-[80%] scale-[0.8] opacity-[0.5]">
            <div class="flex flex-col items-center scale-0 content">
              <h3 class="font-medium text-2xl mb-2"><?php echo $result['make']; ?> <?php echo $result['model']; ?></h3>
              <div class="w-full text-xl text-dy font-bold border-b pb-3 mb-3"> <span class="text-gray-400 text-lg">Price : </span> PKR <?php echo $result['min_price']; ?>-<?php echo $result['max_price']; ?> Lacs </div>
              <p class="mb-8">
                <span class="fa-solid fa-circle-dot"></span> <?php echo $result['engine_capacity']; ?>cc
                <span class="fa-solid fa-circle-dot"></span> <?php echo $result['transmission_type']; ?>
                <span class="fa-solid fa-circle-dot"></span> <?php echo $result['fuel_type']; ?>
                <span class="fa-solid fa-circle-dot"></span> <?php echo $result['top_speed']; ?>mph
              </p>
              <a href="new car detailed info.php?post_id=<?php echo $result['post_id']; ?>" target="blank" class="flex gap-3 items-center bg-ly rounded px-6 py-2 font-medium hover:bg-dy transition-all duration-300 ease-in-out">Read More</a>
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