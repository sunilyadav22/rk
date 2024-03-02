<?php 
/*
Template Name: Home
*/
get_header();
?>
 
        <!-- Banner Section -->
        <section class="banner-slider slick-slider-banner">

        <?php
            $args = array(
                'post_type' => 'hero_banner',
                'post_status'=> 'publish',
                'order'=> 'DESC',
                'posts_per_page' => 3, 
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                    ?>
                    <div class="banner-slides">
                    <img src="<?php echo esc_url($featured_image_url);?>" alt="<?php echo $alt_text;?>" class="bg-banner">
                        <div class="container">
                            <div class="banner-slide-text">
                                <h2 class="text-uppercase"><?php echo get_the_title();?></h2>s
                            </div>
                        </div>
                    </div>
                    <?php 
                    // You can output other post content here if needed
                }
                wp_reset_postdata(); // Restore original post data
            }
            ?>
        </section>

        <!-- end - Banner Section -->
        <!--************** product section start -->
        <section class="sp-t sp-b upcoming-sec left-bg to-right-bg position position-relative">
            <div class="container">
     
 
                <div class="sec-head">
                    <div class="head-wrapper">
                        <h5 class="head-line c-primary">Thermal and Cable Solutions</h5>
                        <h2 class="">Products</h2>
                    </div>
                    <a class="btn tbtn-secondary" href="/schedule/" title="Explore More">
                        Explore More </a>
                </div>
                <div class="courses-posts-row p-0  position-relative">
                     <!--************** comming soon overlay   **************-->
                        <div class="coming-soon-overlay"> comming soon</div>
                    <!--************** comming soon overlay   **************-->
                    <div class="courses-posts-slider slider-wrapper">
        

                    <?php
                        $args = array(
                            'post_type' => 'base_products',
                            'post_status'=> 'publish',
                            'order'=> 'DESC',
                            'posts_per_page' => -1, 
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                       $alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                    ?>
                            <div class="course-post-wrapper scheduled-post-wrapper">
                            <div>
                                <a href="https://geologica.saydev.co.uk/courses/transition-skills-from-oil-and-gas-to-geothermal-e573/"
                                    class="image-ratio" title="Transition Skills: From Oil and Gas to Geothermal (E573)"
                                    tabindex="-1">
                                    <img width="640" height="427"
                                        src="<?php echo $featured_image_url;?>" alt="<php echo $alt_text;?>">
                                </a>
                                <div class="course-post-content">
                                    <h4><?php echo get_the_title();?></h4>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <a href="<?php echo the_permalink();?>"
                                        class="btn tbtn-secondary" title="Register" tabindex="-1">Register</a>
                                </div>
                            </div>

                        </div>
                        <?php 
                                // You can output other post content here if needed
                            }
                            wp_reset_postdata(); // Restore original post data
                        }?>

                    </div>
                </div>
            </div>
        </section>
        <!--************** product section end -->

        <!--**************  catagory section start  -->
        <section class="sp-t sp-b position-relative discipline-sec bg-tdark" id="discipline-sec">
            <h2 class="bg-heading">RK Electrical</h2>

            <div class="container">
                <div class="sec-head">
                    <div class="head-wrapper">
                        <h5 class="head-line text-white">Heaters</h5>
                        <h2>Heaters Categories</h2>
                    </div>

                    <a class="btn tbtn-secondary btn-white-border" href="https://geologica.saydev.co.uk/course-library/"
                        title="Explore More">
                        Explore More </a>
                </div>

                <div class="row discipline-row">

                <?php
                    // Get the terms for the 'base_product_category' taxonomy
                    $terms = get_terms(array(
                        'taxonomy' => 'base_product_category', // Replace 'base_product_category' with the name of your taxonomy
                        'hide_empty' => false, // Set to true if you want to hide empty terms
                    ));

                    // Check if any terms were found
                    if (!empty($terms) && !is_wp_error($terms)) {
                        // Loop through each term
                        foreach ($terms as $term) {
                            // Output the term name and other relevant data
                            $category_acf_value = get_field('heater_category_icon', 'category_' . $term->term_id); // Replace 'base_product_category' with your ACF field name
                        //    echo '<pre>';print_r($category_acf_value['url']);
                            // You can access more properties like term description, count, etc., if needed
                        ?>
                         <div class="discipline-content">
                        <a href="<?php echo $term->slug?>" title="<?php echo $term->name?>">
                            <div class="image">
                                <img src="<?php echo $category_acf_value['url']?>"
                                    alt="<?php echo $category_acf_value['alt']?>">
                                <img class="hover" src="<?php echo $category_acf_value['url']?>" alt="<?php echo $category_acf_value['alt']?>">
                            </div>

                            <h5><?php echo $term->name;?></h5>
                        </a>
                    </div>
                       <?php }
                       
                        
                    } 
                    ?>
                </div>
            </div>
        </section>
        <!--**************  catagory section end  -->
        <!--************** blog section start  **************-->
        <section class="news-section sp-t sp-b position-relative half-slider" id="news-section">
            <h2 class="bg-heading">NEWS</h2>
            <div class="container">
                <div class="sec-head">
                    <div class="head-wrapper">
                        <h5 class="head-line c-primary">NEWS</h5>
                        <h2 class="">Latest News</h2>
                    </div>
                    <a class="btn tbtn-secondary" href="https://geologica.saydev.co.uk/all-news" title="Explore More">
                        Explore More </a>
                </div>
                <div class="news-slider slider-wrapper" id="news_scroll">
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="news_slide ">
                        <div>
                            <div class="news-image">
                                <img src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/HowardFeldman.jpg">
                            </div>
                            <div class="new-content">
                                <h4>Meet the Expert: 5 Minutes with Howard Feldman</h4>
                                <p class="fonts-3">We sat down with Howard Feldman ahead of his upcoming GeoLogica
                                    course: Introduction to Clastic Facies


                                    What's your field and specialisation?

                                    My PhD was originally in palaeontology, but I spent decades in the petroleum
                                    industry where I spec...</p>
                                <a href="https://geologica.saydev.co.uk/news/meet-the-expert-howard-feldman"
                                    class="btn tbtn-white" title="READ MORE">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************** blog section end  **************-->

        <!--************** pdf section start  **************-->
        <section class="sp-t sp-b position-relative sec-resources left-bg bg-tblue" id="sec-resources">
            <h2 class="bg-heading">Resources</h2>
            <div class="container">
                <div class="sec-head">
                    <div class="head-wrapper">
                        <h5 class="head-line c-primary">Resources</h5>
                        <h2 class="">Resources</h2>
                    </div>
                    <a class="btn tbtn-secondary" href="https://geologica.saydev.co.uk/resource/" title="Explore More">
                        Explore More </a>
                </div>
                <div class="row" id="resources">
                    <div class="col-xl-3 col-md-6">
                        <div class="image-ratio">
                            <img width="1024" height="722"
                                src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/Course-Library-Image-1.jpg"
                                class="alignleft wp-post-image" alt="Course Library Front Cover" decoding="async"
                                loading="lazy"
                                srcset="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/Course-Library-Image-1.jpg 1024w, https://geologica.saydev.co.uk/wp-content/uploads/2023/12/Course-Library-Image-1-300x212.jpg 300w, https://geologica.saydev.co.uk/wp-content/uploads/2023/12/Course-Library-Image-1-768x542.jpg 768w"
                                sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>
                        <div class="resource-content">
                            <h6 title="Course Library">Course Library <span class="c-gray fw-normal"> (197.82 KB)</span>
                            </h6>
                            <a href="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/Course-Library-Landscape-Draft.pdf"
                                target="blank" download="" title="Download"><img
                                    src="assets/images/download-circular-button.svg" alt="Download"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="image-ratio">
                            <img width="1191" height="835"
                                src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/Oil-and-Gas-Map-2024-Image-1.jpg"
                                class="alignleft wp-post-image" alt="2024 Oil and Gas Map" decoding="async"
                                loading="lazy"
                                srcset="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/Oil-and-Gas-Map-2024-Image-1.jpg 1191w, https://geologica.saydev.co.uk/wp-content/uploads/2023/12/Oil-and-Gas-Map-2024-Image-1-300x210.jpg 300w, https://geologica.saydev.co.uk/wp-content/uploads/2023/12/Oil-and-Gas-Map-2024-Image-1-1024x718.jpg 1024w, https://geologica.saydev.co.uk/wp-content/uploads/2023/12/Oil-and-Gas-Map-2024-Image-1-768x538.jpg 768w"
                                sizes="(max-width: 1191px) 100vw, 1191px">
                        </div>
                        <div class="resource-content">
                            <h6 title="2024 Oil and Gas Course Map">2024 Oil and Gas Cour... <span
                                    class="c-gray fw-normal"> (269.70 KB)</span>
                            </h6>
                            <a href="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/2024-Oil-and-Gas-Course-Map.pdf"
                                target="blank" download="" title="Download"><img
                                    src="assets/images/download-circular-button.svg" alt="Download"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="image-ratio">
                            <img width="1190" height="837"
                                src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/GET-SDM-2024-Image.jpg"
                                class="alignleft wp-post-image" alt="2024 GeoEnergy Transition Course Map Image"
                                decoding="async" loading="lazy"
                                srcset="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/GET-SDM-2024-Image.jpg 1190w, https://geologica.saydev.co.uk/wp-content/uploads/2023/12/GET-SDM-2024-Image-300x211.jpg 300w, https://geologica.saydev.co.uk/wp-content/uploads/2023/12/GET-SDM-2024-Image-1024x720.jpg 1024w, https://geologica.saydev.co.uk/wp-content/uploads/2023/12/GET-SDM-2024-Image-768x540.jpg 768w"
                                sizes="(max-width: 1190px) 100vw, 1190px">
                        </div>
                        <div class="resource-content">
                            <h6 title="2024 GeoEnergy Transition Course Map">2024 GeoEnergy Transi... <span
                                    class="c-gray fw-normal"> (287.34 KB)</span>
                            </h6>
                            <a href="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/2024-GeoEnergy-Transition-Course-Map.pdf"
                                target="blank" download="" title="Download"><img
                                    src="assets/images/download-circular-button.svg" alt="Download"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="image-ratio">
                            <img width="530" height="377"
                                src="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/CCS-Progression-Map-Image.jpeg"
                                class="alignleft wp-post-image" alt="" decoding="async" loading="lazy"
                                srcset="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/CCS-Progression-Map-Image.jpeg 530w, https://geologica.saydev.co.uk/wp-content/uploads/2023/12/CCS-Progression-Map-Image-300x213.jpeg 300w"
                                sizes="(max-width: 530px) 100vw, 530px">
                        </div>
                        <div class="resource-content">
                            <h6 title="CCS Course Progression Chart">CCS Course Progressio... <span
                                    class="c-gray fw-normal"> (411.74 KB)</span>
                            </h6>
                            <a href="https://geologica.saydev.co.uk/wp-content/uploads/2023/12/CCS-Progression-Map.pdf"
                                target="blank" download="" title="Download"><img
                                    src="assets/images/download-circular-button.svg" alt="Download"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************** pdf section end  **************-->

        <!--************** contact form start ************** -->
        <section class="contact-sec position-relative">
            <h2 class="bg-heading">CONTACT</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="left-bg sp-t sp-b contact-form">
                        <div class="container-half">
                            <h5 class="head-line c-primary">CONTACT</h5>
                            <h2>QUICK CONTACT</h2>

                            <div class="wpcf7 js" id="wpcf7-f134-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="/#wpcf7-f134-o1" method="post" class="wpcf7-form init"
                                    aria-label="Contact form" novalidate="novalidate" data-status="init">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="134">
                                        <input type="hidden" name="_wpcf7_version" value="5.8.7">
                                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f134-o1">
                                        <input type="hidden" name="_wpcf7_container_post" value="0">
                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Name<sup class="c-red">*</sup></label>
                                            <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false" placeholder="Full Name"
                                                    value="" type="text" name="your-name"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label> Email<sup class="c-red">*</sup></label>
                                            <span class="wpcf7-form-control-wrap" data-name="your-email"><input
                                                    size="40"
                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                    aria-required="true" aria-invalid="false" placeholder="Email"
                                                    value="" type="email" name="your-email"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Phone</label>
                                            <span class="wpcf7-form-control-wrap" data-name="your-phone"><input
                                                    size="40"
                                                    class="wpcf7-form-control wpcf7-tel wpcf7-text wpcf7-validates-as-tel"
                                                    aria-invalid="false" placeholder="Phone Number" value="" type="tel"
                                                    name="your-phone"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Company</label>
                                            <span class="wpcf7-form-control-wrap" data-name="your-company"><input
                                                    size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                    placeholder="Company" value="" type="text"
                                                    name="your-company"></span>
                                        </div>
                                        <div class="col">
                                            <label>Enquiry<sup class="c-red">*</sup></label>
                                            <span class="wpcf7-form-control-wrap" data-name="enquiry"><textarea
                                                    cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false" placeholder="Enquiry"
                                                    name="enquiry"></textarea></span>

                                        </div>
                                        <div class="col-12 contact-btn">
                                            <input
                                                class="wpcf7-form-control wpcf7-submit has-spinner btn tbtn-primary change-hover"
                                                type="submit" value="SUBMIT"><span class="wpcf7-spinner"></span>
                                        </div>
                                    </div>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="right-image">
                        <img src="assets/images/contact-sec-heating.jpg" alt="QUICK CONTACT" title="QUICK CONTACT">
                    </div>
                </div>
            </div>
        </section>
        <!--************** contact form end  **************-->

        <!--************** testimonial form start  **************-->
        <section class="sp-t sp-b position-relative testimonial-sec">
            <h2 class="bg-heading">TESTIMONIALS</h2>
            <div class="container">
                <h5 class="head-line c-primary text-center">Reviews</h5>
                <h2 class="text-center">TESTIMONIALS</h2>
                <div class="testimonial-slider slider-wrapper" id="testimonial_scroll">
                    <div class="testimonial-slide">
                        <div>
                            <div class="testimonial-content">
                                <span class="quote-img"><img src="assets/images/quote.png" alt="Quote"></span>
                                <div class="fonts-3 font-poppins">An excellent course in giving our staff a common
                                    understanding at a base level of the technical considerations in CCS projects. Well
                                    delivered and organised. Many thanks!</div>
                            </div>
                            <div class="testimonial-port">
                                <img src="assets/images/profile-port.png" alt="Profile">
                                <h6 class="mb-0">Participant Feedback</h6>
                                <span class="fonts-4 ">Carbon Capture and Storage Masterclass</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div>
                            <div class="testimonial-content">
                                <span class="quote-img"><img src="assets/images/quote.png" alt="Quote"></span>
                                <div class="fonts-3 font-poppins">Great course and instructor. Vitor did a great job of
                                    keeping everyone engaged. Perhaps the best tutor I've had on an online course.
                                    Learned a lot and hope to incorporate this into my work. Thanks again.</div>
                            </div>
                            <div class="testimonial-port">
                                <img src="assets/images/profile-port.png" alt="Profile">
                                <h6 class="mb-0">Participant Feedback</h6>
                                <span class="fonts-4 ">Predictive Sequence Stratigraphy</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div>
                            <div class="testimonial-content">
                                <span class="quote-img"><img src="assets/images/quote.png" alt="Quote"></span>
                                <div class="fonts-3 font-poppins">Jeff May is one of the best in our industry thanks for
                                    giving us the opportunity to attend his class</div>
                            </div>
                            <div class="testimonial-port">
                                <img src="assets/images/profile-port.png" alt="Profile">
                                <h6 class="mb-0">Participant Feedback</h6>
                                <span class="fonts-4 ">An Introduction to Mudrock Reservoirs</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div>
                            <div class="testimonial-content">
                                <span class="quote-img"><img src="assets/images/quote.png" alt="Quote"></span>
                                <div class="fonts-3 font-poppins">Jeff May is one of the best in our industry thanks for
                                    giving us the opportunity to attend his class</div>
                            </div>
                            <div class="testimonial-port">
                                <img src="assets/images/profile-port.png" alt="Profile">
                                <h6 class="mb-0">Participant Feedback</h6>
                                <span class="fonts-4 ">An Introduction to Mudrock Reservoirs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************** testimonial form end  **************-->


        <!--************** newslatter form start  **************-->

        <section class="newsletter-sec sp-t sp-b position-relative">
            <h2 class="bg-heading">SIGN UP</h2>
            <div class="container">
                <h5 class="head-line c-black">SUBSCRIBE</h5>
                <h2 class="">SIGN UP TO OUR NEWSLETTER</h2>
                <div class="newsletter-form contact-form pe-0">
                    <div class="tnpc-default-text" data-bind="!options-subscription_text_custom">
                        <div class="tnp tnp-subscription">
                            <form method="post" action="https://geologica.saydev.co.uk/?na=s">
                                <input type="hidden" name="nlang" value="">
                                <div class="tnp-field tnp-field-firstname"><label>Full Name <sup>*</sup></label>
                                    <input class="tnp-name" type="text" name="nn" id="tnp-1" value=""
                                        placeholder="Full Name" required="">
                                </div>
                                <div class="tnp-field tnp-field-email"><label>Email <sup>*</sup></label>
                                    <input class="tnp-email" placeholder="Email" type="email" name="ne" id="tnp-2"
                                        value="" required="">
                                </div>
                                <div class="tnp-field tnp-privacy-field"><label><input type="checkbox" name="ny"
                                            required="" class="tnp-privacy"> <span>Please tick to confirm that you have
                                            read and agree to our <a href="/privacy-policy/"
                                                title="privacy policy">privacy policy</a></span></label></div>
                                <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit"
                                        value="SUBMIT">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--************** newslatter form end  **************-->
        <!--************** Partnership Section start **************-->
        <section class="partnership-sec sp-t sp-b position-relative">
            <h2 class="bg-heading">Partners</h2>
            <div class="container">
                <h5 class="head-line text-center c-primary">Our Partners</h5>
                <h2 class="text-center">Partnerships</h2>

                <div class="section">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 text-center partnership_content">
                            <img class="" height="30px" width="200px"
                                src="assets/images/CMA.png" alt="">
                            <h4>Critical Minerals <br> Association <br> (CMA)</h4>
                            <p class="fonts-3">GeoLogica partners with the UK's CMA supporting the development of
                                secure, responsible critical mineral supply chains.</p>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center partnership_content">
                            <img class="" height="30px" width="200px"
                                src="assets/images/GAI.png" alt="">
                            <h4>Geothermal Association <br> of Ireland <br> (GAI)</h4>
                            <p class="fonts-3">GeoLogica partners with the GAI to promote and advance the use of
                                sustainable geothermal energy in Ireland.</p>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center partnership_content">
                            <img class="" height="30px" width="200px"
                                src="assets/images/GEAA-logo.png" alt="">
                            <h4>Geothermal Energy <br> Advancement <br> Association (GEAA)</h4>
                            <p class="fonts-3">GeoLogica partners with the GEAA to support the increased awareness,
                                investment and development of geothermal energy.</p>
                        </div>
                        <div class="col-lg-3 col-md-6 text-center partnership_content">
                            <img class="" height="30px" width="200px"
                                src="assets/images/PACE-CCS.png" alt="">
                            <h4><br>PACECSS<br><br></h4>
                            <p class="fonts-3">GeoLogica partners with PACECCS supporting the continued growth and
                                operational challenges within the emerging CCS industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--************** Partnership Section end **************-->

<?php get_footer();?>