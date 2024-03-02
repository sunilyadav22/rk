<?php 
/*
Template Name: Products
*/
get_header();
?>
<!--****** inner banner start  *****-->
    <section class="inner-banner"
         style="background-image: url('https://geologica.saydev.co.uk/wp-content/uploads/2024/02/Underwater-rocks-exposed-at-low-tide.jpg')">
         <div class="container">
            <div>
               <h1 class="change-template">Scheduled Courses</h1>
               <div class="text-wrapper fonts-1">
                  <p>Check out GeoLogica’s publicly scheduled courses, which are available for online booking. Our
                     program offers a variety of Oil and Gas as well as Energy Transition courses, with delivery in
                     the Field, Classroom or Virtually.
                  </p>
               </div>
            </div>
         </div>
      </section>
      <!--****** inner banner end  *****-->
      <div class="container">
         <ul class="navtabs">
            <li class="navitems ">
               <a href="https://geologica.saydev.co.uk/course-library/" class="nav-button">Course Library</a>
            </li>
            <li class="navitems active">
               <a href="https://geologica.saydev.co.uk/schedule/" class="nav-button">Scheduled Courses</a>
            </li>
         </ul>
      </div>
      <section class="courses-sec">
         <div class="container">
            <div class="row courses-sec-row">
               <div class="courses-sidebar">
                  <div class="accordion" id="accordionExample">
                     <div class="accordion-head accordion-wrap reset-filer">
                        <h5 class="c-primary">Filter</h5>
                        <button class="btn tbtn-secondary reset-filer-btn">Reset Filters</button>
                     </div>
                     <div class="accordion-search accordion-wrap">
                        <h6 class="fonts-3 mb-2">Search</h6>
                        <form class="accordion-search-wrapper">
                           <input type="text" class="search-input" placeholder="Search now"><button type="submit"
                              class="search-icon"><img src="assets/images/search-svg.svg" alt="Search">
                           </button>
                        </form>
                     </div>
                     <div class="accordion-wrap">
                        <h6 class="fonts-3" id="headingOne">
                           <button class="collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Subject Discipline
                           </button>
                        </h6>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                           data-bs-parent="#accordionExample">
                           <ul class="accordion-body">
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="basin-analysis"><span>Basin
                                 Analysis<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="carbon-capture-and-storage"><span>Carbon Capture and
                                 Storage<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="climate"><span>Climate<span></span></span></label></li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="critical-minerals"><span>Critical
                                 Minerals<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="depositional-systems"><span>Depositional
                                 Systems<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="evaluation-methods"><span>Evaluation
                                 Methods<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="geoenergy-transition"><span>GeoEnergy
                                 Transition<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="geonuclear"><span>Geonuclear<span></span></span></label></li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="geophysics"><span>Geophysics<span></span></span></label></li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="geothermal-resource"><span>Geothermal
                                 Resource<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="hydrogen"><span>Hydrogen<span></span></span></label></li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="multi-disciplinary"><span>Multi-disciplinary<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="renewables"><span>Renewables<span></span></span></label></li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="reservoir-characterization"><span>Reservoir
                                 Characterization<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="resource-plays"><span>Resource
                                 Plays<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="socio-economic"><span>Socio-Economic<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="structural-geology"><span>Structural
                                 Geology<span></span></span></label>
                              </li>
                              <li><label><input type="checkbox" class="level-filter"
                                 data-taxonomy="subject_discipline"
                                 data-term="unconventional-resources"><span>Unconventional
                                 Resources<span></span></span></label>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="accordion-wrap">
                        <h6 class="fonts-3" id="headingTwo">
                           <button class="collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Level
                           </button>
                        </h6>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                           data-bs-parent="#accordionExample">
                           <ul class="accordion-body">
                              <li><label><input type="checkbox" class="level-filter" data-taxonomy="level"
                                 data-term="advanced"><span>Advanced<span></span></span></label></li>
                              <li></li>
                              <li><label><input type="checkbox" class="level-filter" data-taxonomy="level"
                                 data-term="awareness"><span>Awareness<span></span></span></label></li>
                              <li></li>
                              <li><label><input type="checkbox" class="level-filter" data-taxonomy="level"
                                 data-term="fundamental"><span>Fundamental<span></span></span></label>
                              </li>
                              <li></li>
                              <li><label><input type="checkbox" class="level-filter" data-taxonomy="level"
                                 data-term="intermediate"><span>Intermediate<span></span></span></label>
                              </li>
                              <li> </li>
                           </ul>
                        </div>
                     </div>
                     <div class="accordion-wrap">
                        <h6 class="fonts-3" id="headingThree">
                           <button class="collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           Type
                           </button>
                        </h6>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                           data-bs-parent="#accordionExample">
                           <ul class="accordion-body">
                              <li><label><input type="checkbox" class="typearlo-filter" data-taxonomy="typearlo"
                                 data-term="classroom"><span>Classroom<span></span></span></label></li>
                              <li></li>
                              <li><label><input type="checkbox" class="typearlo-filter" data-taxonomy="typearlo"
                                 data-term="field"><span>Field<span></span></span></label></li>
                              <li></li>
                              <li><label><input type="checkbox" class="typearlo-filter" data-taxonomy="typearlo"
                                 data-term="virtual"><span>Virtual<span></span></span></label></li>
                              <li> </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="courses-sidebar-posts">
                  <div>
                     <div class="course-posts-head">
                        <h5 class="change-template">Scheduled Courses</h5>
                        <div class="course-posts-filter">
                           <div class="sort">
                              Sort by:
                              <select name="" id="sort-select" class="input-select">
                                 <option value="ASC" selected="">Newest Course</option>
                                 <option value="DESC">Oldest Course</option>
                              </select>
                           </div>
                           <div class="view-filer">
                              <input type="radio" id="grid-view" name="view" checked="">
                              <label for="grid-view" title="Grid View">
                              <img src="assets/images/menu.svg" alt="Grid">
                              <img class="hover" src="assets/images/menu-1.svg" alt="List">
                              </label>
                              <input type="radio" id="list-view" name="view">
                              <label for="list-view" title="List View">
                              <img src="assets/images/list.svg" alt="Grid">
                              <img class="hover" src="assets/images/list-1.svg" alt="List">
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="courses-posts-row">
                        <div class="row" id="course-list">
                           <div class="col-md-6 course-post-wrapper scheduled-post-wrapper">
                              <div>
                                 <a href="#"
                                    class="image-ratio" title="Critical Resources – Rare Earth Elements (E530)">
                                 <img src="assets/images/ceramic-room-heater-rod-500x500.png"> </a>
                                 <div class="course-post-content">
                                    <div class="date"><span class="date-icon"><img
                                       src="assets/images/calendar-Copy.svg"
                                       alt="Calendar"></span>26 - 28 Feb 2024</div>
                                    <div class="courses-author">
                                       <div class="courses-author-wrapper" title="Virtual">
                                          <span class="author-icon"><img
                                             src="assets/images/location-pin1-1.svg"
                                             alt="Location"></span>
                                          <span class="author-title">Virtual</span>
                                       </div>
                                       <div class="courses-author-wrapper" title="Holly Elliott"><span
                                          class="author-icon"><img
                                          src="assets/images/teacher-1.svg"
                                          alt="Tutors"></span><span class="author-title">Holly
                                          Elliott</span>
                                       </div>
                                    </div>
                                    <h4>Critical Resources – Rare Earth Elements (E530)</h4>
                                    <div class="list-view-detail">
                                       <div>
                                          <span class="c-primary">Type:</span>
                                          <span class="title" title="Virtual">
                                          Virtual </span>
                                       </div>
                                       <div>
                                          <span class="c-primary">Tutor(s):</span>
                                          <span class="title" title="Holly Elliott">
                                          Holly Elliott </span>
                                       </div>
                                       <div>
                                          <span class="c-primary">Location:</span>
                                          <span class="title" title="Virtual">
                                          Virtual </span>
                                       </div>
                                       <div>
                                          <span class="c-primary">Dates:</span>
                                          <span class="title">
                                          26 - 28 Feb 2024 </span>
                                       </div>
                                    </div>
                                    <div class="price-wrapper c-primary">
                                       <span class="price-icon"><img
                                          src="assets/images/Ticket-1.svg"
                                          alt="Price"></span>
                                       <div class="price"><b class="c-primary">GBP £1,350.00</b> excl VAT</div>
                                    </div>
                                    <p class="fonts-4 post-text"></p>
                                    <div class="course-post-btns">
                                       <a href="https://geologica.saydev.co.uk/courses/critical-resources-rare-earth-elements-e530/"
                                          class="btn tbtn-secondary" title="More Info">More Info</a>
                                       <a href="https://geologica.arlo.co/uk/waiting-list?sid=bdcaf010e9ae4ff8bb654c63bb808177"
                                          class="btn btn-join-wait tbtn-primary change-hover"
                                          title="Join waiting list">Join waiting list</a>
                                       <a href="mailto:info@geologicaworld.com?subject=Interest%20in%20Critical%20Resources%20%E2%80%93%20Rare%20Earth%20Elements%20%28E530%29"
                                          class="btn tbtn-secondary">Ask a Question</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 course-post-wrapper scheduled-post-wrapper">
                            <div>
                               <a href="#"
                                  class="image-ratio" title="Critical Resources – Rare Earth Elements (E530)">
                               <img src="assets/images/ceramic-room-heater-rod-500x500.png"> </a>
                               <div class="course-post-content">
                                  <div class="date"><span class="date-icon"><img
                                     src="assets/images/calendar-Copy.svg"
                                     alt="Calendar"></span>26 - 28 Feb 2024</div>
                                  <div class="courses-author">
                                     <div class="courses-author-wrapper" title="Virtual">
                                        <span class="author-icon"><img
                                           src="assets/images/location-pin1-1.svg"
                                           alt="Location"></span>
                                        <span class="author-title">Virtual</span>
                                     </div>
                                     <div class="courses-author-wrapper" title="Holly Elliott"><span
                                        class="author-icon"><img
                                        src="assets/images/teacher-1.svg"
                                        alt="Tutors"></span><span class="author-title">Holly
                                        Elliott</span>
                                     </div>
                                  </div>
                                  <h4>Critical Resources – Rare Earth Elements (E530)</h4>
                                  <div class="list-view-detail">
                                     <div>
                                        <span class="c-primary">Type:</span>
                                        <span class="title" title="Virtual">
                                        Virtual </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Tutor(s):</span>
                                        <span class="title" title="Holly Elliott">
                                        Holly Elliott </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Location:</span>
                                        <span class="title" title="Virtual">
                                        Virtual </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Dates:</span>
                                        <span class="title">
                                        26 - 28 Feb 2024 </span>
                                     </div>
                                  </div>
                                  <div class="price-wrapper c-primary">
                                     <span class="price-icon"><img
                                        src="assets/images/Ticket-1.svg"
                                        alt="Price"></span>
                                     <div class="price"><b class="c-primary">GBP £1,350.00</b> excl VAT</div>
                                  </div>
                                  <p class="fonts-4 post-text"></p>
                                  <div class="course-post-btns">
                                     <a href="https://geologica.saydev.co.uk/courses/critical-resources-rare-earth-elements-e530/"
                                        class="btn tbtn-secondary" title="More Info">More Info</a>
                                     <a href="https://geologica.arlo.co/uk/waiting-list?sid=bdcaf010e9ae4ff8bb654c63bb808177"
                                        class="btn btn-join-wait tbtn-primary change-hover"
                                        title="Join waiting list">Join waiting list</a>
                                     <a href="mailto:info@geologicaworld.com?subject=Interest%20in%20Critical%20Resources%20%E2%80%93%20Rare%20Earth%20Elements%20%28E530%29"
                                        class="btn tbtn-secondary">Ask a Question</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6 course-post-wrapper scheduled-post-wrapper">
                            <div>
                               <a href="#"
                                  class="image-ratio" title="Critical Resources – Rare Earth Elements (E530)">
                               <img src="assets/images/ceramic-room-heater-rod-500x500.png"> </a>
                               <div class="course-post-content">
                                  <div class="date"><span class="date-icon"><img
                                     src="assets/images/calendar-Copy.svg"
                                     alt="Calendar"></span>26 - 28 Feb 2024</div>
                                  <div class="courses-author">
                                     <div class="courses-author-wrapper" title="Virtual">
                                        <span class="author-icon"><img
                                           src="assets/images/location-pin1-1.svg"
                                           alt="Location"></span>
                                        <span class="author-title">Virtual</span>
                                     </div>
                                     <div class="courses-author-wrapper" title="Holly Elliott"><span
                                        class="author-icon"><img
                                        src="assets/images/teacher-1.svg"
                                        alt="Tutors"></span><span class="author-title">Holly
                                        Elliott</span>
                                     </div>
                                  </div>
                                  <h4>Critical Resources – Rare Earth Elements (E530)</h4>
                                  <div class="list-view-detail">
                                     <div>
                                        <span class="c-primary">Type:</span>
                                        <span class="title" title="Virtual">
                                        Virtual </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Tutor(s):</span>
                                        <span class="title" title="Holly Elliott">
                                        Holly Elliott </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Location:</span>
                                        <span class="title" title="Virtual">
                                        Virtual </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Dates:</span>
                                        <span class="title">
                                        26 - 28 Feb 2024 </span>
                                     </div>
                                  </div>
                                  <div class="price-wrapper c-primary">
                                     <span class="price-icon"><img
                                        src="assets/images/Ticket-1.svg"
                                        alt="Price"></span>
                                     <div class="price"><b class="c-primary">GBP £1,350.00</b> excl VAT</div>
                                  </div>
                                  <p class="fonts-4 post-text"></p>
                                  <div class="course-post-btns">
                                     <a href="https://geologica.saydev.co.uk/courses/critical-resources-rare-earth-elements-e530/"
                                        class="btn tbtn-secondary" title="More Info">More Info</a>
                                     <a href="https://geologica.arlo.co/uk/waiting-list?sid=bdcaf010e9ae4ff8bb654c63bb808177"
                                        class="btn btn-join-wait tbtn-primary change-hover"
                                        title="Join waiting list">Join waiting list</a>
                                     <a href="mailto:info@geologicaworld.com?subject=Interest%20in%20Critical%20Resources%20%E2%80%93%20Rare%20Earth%20Elements%20%28E530%29"
                                        class="btn tbtn-secondary">Ask a Question</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6 course-post-wrapper scheduled-post-wrapper">
                            <div>
                               <a href="#"
                                  class="image-ratio" title="Critical Resources – Rare Earth Elements (E530)">
                               <img src="assets/images/ceramic-room-heater-rod-500x500.png"> </a>
                               <div class="course-post-content">
                                  <div class="date"><span class="date-icon"><img
                                     src="assets/images/calendar-Copy.svg"
                                     alt="Calendar"></span>26 - 28 Feb 2024</div>
                                  <div class="courses-author">
                                     <div class="courses-author-wrapper" title="Virtual">
                                        <span class="author-icon"><img
                                           src="assets/images/location-pin1-1.svg"
                                           alt="Location"></span>
                                        <span class="author-title">Virtual</span>
                                     </div>
                                     <div class="courses-author-wrapper" title="Holly Elliott"><span
                                        class="author-icon"><img
                                        src="assets/images/teacher-1.svg"
                                        alt="Tutors"></span><span class="author-title">Holly
                                        Elliott</span>
                                     </div>
                                  </div>
                                  <h4>Critical Resources – Rare Earth Elements (E530)</h4>
                                  <div class="list-view-detail">
                                     <div>
                                        <span class="c-primary">Type:</span>
                                        <span class="title" title="Virtual">
                                        Virtual </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Tutor(s):</span>
                                        <span class="title" title="Holly Elliott">
                                        Holly Elliott </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Location:</span>
                                        <span class="title" title="Virtual">
                                        Virtual </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Dates:</span>
                                        <span class="title">
                                        26 - 28 Feb 2024 </span>
                                     </div>
                                  </div>
                                  <div class="price-wrapper c-primary">
                                     <span class="price-icon"><img
                                        src="assets/images/Ticket-1.svg"
                                        alt="Price"></span>
                                     <div class="price"><b class="c-primary">GBP £1,350.00</b> excl VAT</div>
                                  </div>
                                  <p class="fonts-4 post-text"></p>
                                  <div class="course-post-btns">
                                     <a href="https://geologica.saydev.co.uk/courses/critical-resources-rare-earth-elements-e530/"
                                        class="btn tbtn-secondary" title="More Info">More Info</a>
                                     <a href="https://geologica.arlo.co/uk/waiting-list?sid=bdcaf010e9ae4ff8bb654c63bb808177"
                                        class="btn btn-join-wait tbtn-primary change-hover"
                                        title="Join waiting list">Join waiting list</a>
                                     <a href="mailto:info@geologicaworld.com?subject=Interest%20in%20Critical%20Resources%20%E2%80%93%20Rare%20Earth%20Elements%20%28E530%29"
                                        class="btn tbtn-secondary">Ask a Question</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6 course-post-wrapper scheduled-post-wrapper">
                            <div>
                               <a href="#"
                                  class="image-ratio" title="Critical Resources – Rare Earth Elements (E530)">
                               <img src="assets/images/ceramic-room-heater-rod-500x500.png"> </a>
                               <div class="course-post-content">
                                  <div class="date"><span class="date-icon"><img
                                     src="assets/images/calendar-Copy.svg"
                                     alt="Calendar"></span>26 - 28 Feb 2024</div>
                                  <div class="courses-author">
                                     <div class="courses-author-wrapper" title="Virtual">
                                        <span class="author-icon"><img
                                           src="assets/images/location-pin1-1.svg"
                                           alt="Location"></span>
                                        <span class="author-title">Virtual</span>
                                     </div>
                                     <div class="courses-author-wrapper" title="Holly Elliott"><span
                                        class="author-icon"><img
                                        src="assets/images/teacher-1.svg"
                                        alt="Tutors"></span><span class="author-title">Holly
                                        Elliott</span>
                                     </div>
                                  </div>
                                  <h4>Critical Resources – Rare Earth Elements (E530)</h4>
                                  <div class="list-view-detail">
                                     <div>
                                        <span class="c-primary">Type:</span>
                                        <span class="title" title="Virtual">
                                        Virtual </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Tutor(s):</span>
                                        <span class="title" title="Holly Elliott">
                                        Holly Elliott </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Location:</span>
                                        <span class="title" title="Virtual">
                                        Virtual </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Dates:</span>
                                        <span class="title">
                                        26 - 28 Feb 2024 </span>
                                     </div>
                                  </div>
                                  <div class="price-wrapper c-primary">
                                     <span class="price-icon"><img
                                        src="assets/images/Ticket-1.svg"
                                        alt="Price"></span>
                                     <div class="price"><b class="c-primary">GBP £1,350.00</b> excl VAT</div>
                                  </div>
                                  <p class="fonts-4 post-text"></p>
                                  <div class="course-post-btns">
                                     <a href="https://geologica.saydev.co.uk/courses/critical-resources-rare-earth-elements-e530/"
                                        class="btn tbtn-secondary" title="More Info">More Info</a>
                                     <a href="https://geologica.arlo.co/uk/waiting-list?sid=bdcaf010e9ae4ff8bb654c63bb808177"
                                        class="btn btn-join-wait tbtn-primary change-hover"
                                        title="Join waiting list">Join waiting list</a>
                                     <a href="mailto:info@geologicaworld.com?subject=Interest%20in%20Critical%20Resources%20%E2%80%93%20Rare%20Earth%20Elements%20%28E530%29"
                                        class="btn tbtn-secondary">Ask a Question</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6 course-post-wrapper scheduled-post-wrapper">
                            <div>
                               <a href="#"
                                  class="image-ratio" title="Critical Resources – Rare Earth Elements (E530)">
                               <img src="assets/images/ceramic-room-heater-rod-500x500.png"> </a>
                               <div class="course-post-content">
                                  <div class="date"><span class="date-icon"><img
                                     src="assets/images/calendar-Copy.svg"
                                     alt="Calendar"></span>26 - 28 Feb 2024</div>
                                  <div class="courses-author">
                                     <div class="courses-author-wrapper" title="Virtual">
                                        <span class="author-icon"><img
                                           src="assets/images/location-pin1-1.svg"
                                           alt="Location"></span>
                                        <span class="author-title">Virtual</span>
                                     </div>
                                     <div class="courses-author-wrapper" title="Holly Elliott"><span
                                        class="author-icon"><img
                                        src="assets/images/teacher-1.svg"
                                        alt="Tutors"></span><span class="author-title">Holly
                                        Elliott</span>
                                     </div>
                                  </div>
                                  <h4>Critical Resources – Rare Earth Elements (E530)</h4>
                                  <div class="list-view-detail">
                                     <div>
                                        <span class="c-primary">Type:</span>
                                        <span class="title" title="Virtual">
                                        Virtual </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Tutor(s):</span>
                                        <span class="title" title="Holly Elliott">
                                        Holly Elliott </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Location:</span>
                                        <span class="title" title="Virtual">
                                        Virtual </span>
                                     </div>
                                     <div>
                                        <span class="c-primary">Dates:</span>
                                        <span class="title">
                                        26 - 28 Feb 2024 </span>
                                     </div>
                                  </div>
                                  <div class="price-wrapper c-primary">
                                     <span class="price-icon"><img
                                        src="assets/images/Ticket-1.svg"
                                        alt="Price"></span>
                                     <div class="price"><b class="c-primary">GBP £1,350.00</b> excl VAT</div>
                                  </div>
                                  <p class="fonts-4 post-text"></p>
                                  <div class="course-post-btns">
                                     <a href="https://geologica.saydev.co.uk/courses/critical-resources-rare-earth-elements-e530/"
                                        class="btn tbtn-secondary" title="More Info">More Info</a>
                                     <a href="https://geologica.arlo.co/uk/waiting-list?sid=bdcaf010e9ae4ff8bb654c63bb808177"
                                        class="btn btn-join-wait tbtn-primary change-hover"
                                        title="Join waiting list">Join waiting list</a>
                                     <a href="mailto:info@geologicaworld.com?subject=Interest%20in%20Critical%20Resources%20%E2%80%93%20Rare%20Earth%20Elements%20%28E530%29"
                                        class="btn tbtn-secondary">Ask a Question</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                        </div>
                        <div class="viewAllBtn text-center">
                           <a href="javascript:void(0)" id="load-more" class="btn tbtn-secondary"
                              data-slug="schedule" title="Load More">Load More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <?php get_footer();?>