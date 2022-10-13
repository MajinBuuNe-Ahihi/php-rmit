<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once('./head.php')
  ?>
</head>

<body>
  <?php
  require_once('./header.php');
  $image = array(
    "https://wallpapercave.com/wp/wp2968505.jpg", "https://wallpapercave.com/wp/wp2503718.jpg",
    "https://wallpapercave.com/wp/wp2789220.jpg",
    "https://wallpapercave.com/wp/wp2469689.jpg",
    "https://wallpapercave.com/wp/wp2789199.jpg");
  ?>
  <section>
    <div class="main-banner-wrapper">
      <section class="splide banner-slider" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
          <ul class="splide__list">
            <?php 
            foreach($image as $url){
                  echo '<li class="splide__slide banner-slide-image" style="background-image: url('.$url.')"></li>';
            }
            ?>
          </ul>
        </div>
      </section>
      <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, totam veniam! Magni, ea? Placeat, ullam est aut,
        impedit reprehenderit deleniti numquam, dolore optio distinctio illo totam animi. Eveniet, necessitatibus illum.</h1>
      <a href="./booking.php">bookng now</a>
    </div>
    <div class="main-about-wrapper" id="about">
      <h1 class="main-heading">About</h1>
      <div class="main-about-concept">
        <div class="main-about-concept-left">
          <div class="main-about-concept__text">
            <span>
              Russel Street Medical opened in 2020 and is located in Melbourne’s CBD at 340 Russel Street
              Melbourne, just opposite The Old Melbourne Jail and within walking distance of Melbourne Central
              Train Station.
            </span>
            <span>
              We strive to help all of our patients with a focus on preventative health care, a view to managing
              chronic health conditions with a holistic approach, and with access to a wide range of specialist care
              providers when needed.
            </span>
            <span>
              Under partnerships, we are able to offer RMIT students & staff discounted rates.
            </span>
          </div>
          <table class="main-about-concept__table">
            <thead>
              <tr>
                <th>Consultation</th>
                <th>Normal Fee</th>
                <th>Rmit MemberFee</th>
                <th>Medicare Rebate</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Standard</td>
                <td>$85.00</td>
                <td>$60.50</td>
                <td>$39.75</td>
              </tr>
              <tr>
                <td>Long or Complex</td>
                <td>$130.00</td>
                <td>$91.50</td>
                <td>$76.95</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="main-about-concept-right">
          <img src="https://media.istockphoto.com/photos/smiling-medical-team-standing-together-outside-a-hospital-picture-id998313080?k=20&m=998313080&s=612x612&w=0&h=ZnM0_9x63aPOfV4-hmn3QxazCDJpUXymwAEN-Jr5aMo=" alt="about us" class="concept-image">
        </div>
      </div>
    </div>
    <div class="main-whoweare-wrapper" id="staff">
      <h1 class="main-heading">Staff profile</h1>
      <p class="main-whoweare-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ad aliquid facere voluptate iste, iusto hic voluptatem incidunt accusamus quaerat, odit officia sapiente. Laborum autem dolores voluptates earum. Dolore, ex.</p>
      <div class="main-whoweare-list-staff">
        <div class="staff-profile-card">
          <img class="staff-profile-card-_image" src="https://images.pexels.com/photos/9062164/pexels-photo-9062164.jpeg?cs=srgb&dl=pexels-alexander-zvir-9062164.jpg&fm=jpg" alt="">
          <h3 class="staff-profile-card__name">Dr. Abigale Laurentis</h3>
          <div class="staff-profile-card__description">
            <span>
              Abigale Laurentis completed her medical degree at the University of Queensland in 2013, where she
              also obtained a Bachelor of Science in Biomedicine.
            </span>
            <span>
              Over her training and practice, Abigale has worked in a variety of clinical settings including
              specialities at Latrobe Health.
            </span>
          </div>
        </div>
        <div class="staff-profile-card">
          <img class="staff-profile-card-_image" src="https://images.pexels.com/photos/6234600/pexels-photo-6234600.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
          <h3 class="staff-profile-card__name">Dr. Stephen Hill</h3>
          <div class="staff-profile-card__description">
            <span>
              Stephen Hill graduated from Auckland University in New Zealand in 2014, and obtained his
              Fellowship from the Royal Australian College of General Practitioners in 2017.

            </span>
            <span>
              Over his training and practice, Stephen worked in internal medicine at the Royal Children's Hospital
              Melbourne before transitioning to General Practice.
            </span>
          </div>
        </div>
        <div class="staff-profile-card">
          <img class="staff-profile-card-_image" src="https://images.pexels.com/photos/8442283/pexels-photo-8442283.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
          <h3 class="staff-profile-card__name">Ms Kiyoko Tsu</h3>
          <div class="staff-profile-card__description">
            <span>
              Kiyoko Tsu completed her Bachelor of Nursing at the Yong Loo Lin School of Medicine in Singapore in
              2019
            </span>
            <span>
              She is an accredited Nurse Immuniser and has worked in various hospitals within metropolitan
              Melbourne
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
        pagination: false,
        arrows:false,
      });
      splide.mount();
    });
  </script>
  <script src="./js/index.js"></script>
  <?php
  require_once('./footer.php')
  ?>
</body>

</html>