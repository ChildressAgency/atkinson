<?php get_header(); ?>
    <main id="main">
      <div class="container">
      <span class="altimeter"></span>
      <section id="technologyServices">
        <div class="row">
          <div class="col-sm-2 hidden-xs">
            <h4 class="section-marker">Technology Services</h4>
          </div>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-6 col-sm-push-6">
                <div class="row">
                  <div class="col-sm-4 hidden-xs">
                    <span class="counter">.01</span>
                  </div>
                  <div class="col-sm-8">
                    <h1 class="section-title">Technology Services</h1>
                    <hr />
                    <?php
                      $tech_services_page = get_page_by_path('technology-services');
                      $tech_services_id = $tech_services_page->ID; ?>
                      
                    <?php the_field('homepage_text', $tech_services_id); ?>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-sm-pull-6">
                <div class="section-image">
                  <img src="<?php the_field('main_image', $tech_services_id); ?>" class="img-responsive center-block" alt="" />
                </div>
                <div class="row carousel-section">
                  <div class="col-sm-7">
                    <h4>These Services Include:</h4>
                    <div id="technologyCarousel" class="hp-carousel carousel slide" data-ride="carousel">
                      <?php
                        $tech_services = get_field('homepage_service_list', $tech_services_id);
                        $tech_services_count = count($tech_services);
                      ?>
                      <ol class="carousel-indicators">
                        <?php for($t=0; $t<$tech_services_count; $t++): ?>
                          <li data-target="#technologyCarousel" data-slide-to="<?php echo $t; ?>"<?php if($t==0){ echo ' class="active"'; } ?>></li>
                        <?php endfor; ?>
                      </ol>
                      <div class="carousel-inner" role="listbox">
                        <?php $tc=0; foreach($tech_services as $tech_service): ?>
                          <div class="item<?php if($tc==0){ echo ' active'; } ?>">
                            <div class="carousel-caption">
                              <h2><?php echo $tech_service['service_name']; ?></h2>
                              <?php echo $tech_service['service_description'] ? '<p>' . $tech_service['service_description'] . '</p>' : ''; ?>
                            </div>
                          </div>
                        <?php $tc++; endforeach; ?>
                      </div>

                      <a href="#technologyCarousel" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a href="#technologyCarousel" class="right carousel-control" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-5 hidden-xs">
                    <img src="<?php the_field('secondary_image', $tech_services_id); ?>" class="img-responsive center-block secondary-pic" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <a href="<?php echo home_url('technology-services'); ?>" class="btn-main btn-alt"><span>Learn More</span></a>
          </div>
        </div>
      </section>
      <section id="flightOperations">
        <div class="row">
          <div class="col-sm-2 hidden-xs">
            <h4 class="section-marker">Flight Operations</h4>
          </div>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-6 col-sm-push-6">
                <div class="row">
                  <div class="col-sm-4 hidden-xs">
                    <span class="counter">.02</span>
                  </div>
                  <div class="col-sm-8">
                    <h1 class="section-title">Flight Operations</h1>
                    <hr />
                    <?php
                      $flight_ops_page = get_page_by_path('flight-operations');
                      $flight_ops_id = $flight_ops_page->ID;
                    ?>
                    <?php the_field('homepage_text', $flight_ops_id); ?>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-sm-pull-6">
                <div class="section-image">
                  <img src="<?php the_field('main_image', $flight_ops_id); ?>" class="img-responsive center-block" alt="" />
                </div>
                <div class="row carousel-section">
                  <div class="col-sm-7">
                    <h4>These Services Include:</h4>
                    <div id="flightOperationsCarousel" class="hp-carousel carousel slide" data-ride="carousel">
                      <?php
                        $flight_services = get_field('homepage_service_list', $flight_ops_id); 
                        $flight_services_count = count($flight_services);
                      ?>
                      <ol class="carousel-indicators">
                        <?php for($f=0; $f<$flight_services_count; $f++): ?>
                          <li data-target="#flightOperationsCarousel" data-slide-to="<?php echo $f; ?>"<?php if($f==0){ echo ' class="active"'; } ?>></li>
                        <?php endfor; ?>
                      </ol>
                      <div class="carousel-inner" role="listbox">
                        <?php $fc=0; foreach($flight_services as $flight_operations_service): ?>
                          <div class="item<?php if($fc==0){ echo ' active'; } ?>">
                            <div class="carousel-caption">
                              <h2><?php echo $flight_operations_service['service_name']; ?></h2>
                              <?php echo $flight_operations_service['service_description'] ? '<p>' . $flight_operations_service['service_description'] . '</p>' : ''; ?>
                            </div>
                          </div>
                        <?php $fc++; endforeach; ?>
                      </div>

                      <a href="#flightOperationsCarousel" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a href="#flightOperationsCarousel" class="right carousel-control" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-5 hidden-xs">
                    <img src="<?php the_field('secondary_image', $flight_ops_id); ?>" class="img-responsive center-block secondary-pic" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row section-cta">
              <div class="col-sm-6">
                <h4>Call today for details and book your next perfect getaway! <span>(540) 226-4241</span></h4>
              </div>
              <div class="col-sm-6 border-left">
                <a href="<?php echo home_url('flight-operations'); ?>" class="btn-main"><span>Learn More</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id=="aircraftMaintenance">
        <div class="row">
          <div class="col-sm-2 hidden-xs">
            <h4 class="section-marker">Aircraft Maintenance</h4>
          </div>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-6 col-sm-push-6">
                <div class="row">
                  <div class="col-sm-4 hidden-xs">
                    <span class="counter">.03</span>
                  </div>
                  <div class="col-sm-8">
                    <h1 class="section-title">Aircraft Maintenance</h1>
                    <hr />
                    <?php
                      $aircraft_page = get_page_by_path('aircraft-maintenance'); 
                      $aircraft_id = $aircraft_page->ID; 
                    ?>
                    <?php the_field('homepage_text', $aircraft_id); ?>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-sm-pull-6">
                <div class="section-image">
                  <img src="<?php the_field('main_image', $aircraft_id); ?>" class="img-responsive center-block" alt="" />
                </div>
                <div class="row carousel-section">
                  <div class="col-sm-7">
                    <h4>These Services Include:</h4>
                    <div id="maintenanceCarousel" class="hp-carousel carousel slide" data-ride="carousel">
                      <?php
                        $aircraft_maintenance_services = get_field('homepage_service_list', $aircraft_id);
                        $aircraft_maintenance_count = count($aircraft_maintenance_services);
                      ?>
                      <ol class="carousel-indicators">
                        <?php for($a=0; $a<$aircraft_maintenance_count; $a++): ?>
                          <li data-target="#maintenanceCarousel" data-slide-to="<?php echo $a; ?>"<?php if($a==0){ echo ' class="active"'; } ?>></li>
                        <?php endfor; ?>
                      </ol>
                      <div class="carousel-inner" role="listbox">
                        <?php $ac=0; foreach($aircraft_maintenance_services as $aircraft_maintenance_service): ?>
                          <div class="item<?php if($ac==0){ echo ' active'; } ?>">
                            <div class="carousel-caption">
                              <h2><?php echo $aircraft_maintenance_service['service_name']; ?></h2>
                              <?php echo $aircraft_maintenance_service['service_description'] ? '<p>' . $aircraft_maintenance_service['service_description'] . '</p>' : ''; ?>
                            </div>
                          </div>
                        <?php $ac++; endforeach; ?>
                      </div>

                      <a href="#maintenanceCarousel" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a href="#maintenanceCarousel" class="right carousel-control" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-5 hidden-xs">
                    <img src="<?php the_field('secondary_image', $aircraft_id); ?>" class="img-responsive center-block secondary-pic" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row section-cta">
              <div class="col-sm-6">
                <h4>Call today for details and book your next annual inspection! <span>(540) 226-4241</span></h4>
              </div>
              <div class="col-sm-6 border-left">
              <a href="<?php echo home_url('aircraft-maintenance'); ?>" class="btn-main"><span>Learn More</span></a>
              </div>
            </div>      
          </div>
        </div>
      </section>
      
      <?php $get_started_counter = '.04'; ?>
      <section id="getStarted">
        <div class="row">
          <div class="col-sm-2 hidden-xs">
            <h4 class="section-marker">Let's get started!</h4>
          </div>
          <div class="col-sm-10">
            <div class="get-started">
              <span class="counter"><?php echo $get_started_counter; ?></span>
              <h1 class="section-title">Let's get started</h1>
              <hr />
              <p>With over a decade of industry and government experience, Atkinson Aeronautics &amp; Technology has your solution ready.</p>
              <a href="<?php echo home_url('contact-us'); ?>" class="btn-main"><span>Contact Us</span></a>
            </div>
          </div>
        </div>
      </section>
      </div>
    </main>

<?php get_footer(); ?>