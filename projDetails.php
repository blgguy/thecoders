<?php 

require_once('head.php');

$_id = $_GET['id']; 

foreach ($dataAPI->citizenScienceGovOpenScienceProject()['_project'] as $key) {
  if ($key['project_id'] == $_id) {
    $project_name         =  $key['project_name'];
    $project_url_external =  $key['project_url_external'];
    $project_description  =  $key['project_description'];
    $keywords             =  $key['keywords'];
    $fields_of_science    =  $key['fields_of_science'];

    $geographic_scope     = $key['geographic_scope'];
    $participant_age      = $key['participant_age'];
    $participation_tasks  = $key['participation_tasks'];
    $scistarter           = $key['scistarter'];
    $email                = $key['email'];
    $start_date           = $key['start_date'];

  }
}


?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Open Science Project Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="porindex.php">Open Science Project</a></li>
            <li>Open Science Project Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/openProject.jpeg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Name</strong>: <?php echo $project_name; ?></li>
                <li><strong>geographic scope</strong>:  <?php echo $geographic_scope; ?></li>

                <li><strong>participant age</strong>: <?php echo $participant_age; ?></li>
                <li><strong>participation tasks</strong>:  <?php echo $participation_tasks; ?></li>

                <li><strong>fields Of Sscience</strong>:  <?php echo $fields_of_science; ?></li>
                <li><strong>email</strong>:  <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                <li><strong>Project Link</strong>: <a href=" <?php echo $project_url_external; ?>"> <?php echo $project_url_external; ?></a></li>
                <li><strong>start date</strong>:  <?php echo $start_date; ?> </li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Project Discription</h2>
              <p>
              <?php echo $project_description; ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  <?php require_once('foot.php')?>