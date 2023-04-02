<?php
    /*
        Templat Name: Home
    */ 
?>

<?php get_header(); ?>

<section class="banner text--center">
                <div class="container">
                    <div class="banner__wrapper">
                        <div class="banner__intro text--light">
                            <h1 class="mb--3"><?php echo get_field('banner_title'); ?></h1>
                            <p class="mb--5 text--light"><?php echo get_field('banner_parag'); ?></p>
                            <ul>
                                <li><a class="btn bg--primary br--25">Get Qoute Now</a></li>
                                <li><a class="btn bg--primary br--25 bg--transparent">Learn More</a></li>
                            </ul>
                        </div>
                        <div class="banner__appointment bg--light">
                            <h3 class="text--secondary text--center mb--3">Book Appointment</h3>
                            <form action="">
                                <label for="Name">Name</label> <br>
                                <input type="text" name="" id="" placeholder="Full Name"> <br>
        
                                <label for="Email">Email Address</label> <br>
                                <input type="email" name="" id="" placeholder="example@gmail.com"> <br>
        
                                <label for="Email">Department</label> <br>
                                <select>
                                    <option value="">Please Select</option>
                                    <option value="">Department 1</option>
                                    <option value="">Department 2</option>
                                    <option value="">Department 3</option>
                                    <option value="">Department 4</option>
                                    <option value="">Department 5</option>
                                </select> <br>
        
                                <label for="Email">Time</label> <br>
                                <input type="text" name="" id="" placeholder=""> <br>
        
                                <input type="submit" class="btn bg--primary bd--none" value="Book Appointment">
                            </form>
                        </div>
                    </div>
                    
                </div>
            </section>

        </div>

        <section class="leadingMed text--center py--10">
            <div class="container">
                <h2 class="text--secondary">Leading Medicine</h2>
                <p class="mb--5">
                    Problems trying to resolve 
                    the conflict between the 
                    two major realms of Classical 
                    physics: Newtonian mechanics
                </p>
                <div class="leadingMed__wrapper">
                    <?php 
                        $args = array(
                            'post_type' => 'physionicPost',
                            'post_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'Leading Medicine'
                                ),
                            ),
                        );
                        $newQuery = new WP_Query($args)
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
                    <div class="leadingMed__items">
                        <div class="leadingMed__title d--flex align--center">
                            <?php echo get_the_post_thumbnail(); ?>
                            <h4><?php the_title(); ?></h4>
                        </div>
                        <div class="leadingMed__scope">
                            <ul>
                                <?php the_content(); ?>
                            </ul>
                        </div>
                    </div>

                    <?php
                        endwhile;
                        else :
                            echo "There is no content here!";
                        endif;
                    ?>
                </div>
            </div>
        </section>

        <section class="testimonials text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary">What Clients Say</h2>
                <p class="mb--5">
                    Problems trying to resolve 
                    the conflict between the two major 
                    realms of Classical physics: 
                    Newtonian mechanics
                </p>
                <div class="testimonials__wrapper">
                <?php 
                        $args = array(
                            'post_type' => 'physionicPost',
                            'post_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'Clients'
                                ),
                            ),
                        );
                        $newQuery = new WP_Query($args)
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                    <div class="testimonials__items text--left bg--light">
                        <ul class="stars d--flex mb--2">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        
                        
                        <?php the_excerpt(); ?>

                        <?php echo get_the_post_thumbnail(); ?>
                    </div>
                    <?php
                        endwhile;
                        else :
                            echo "There is no content here!";
                        endif;

                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>

        <section class="faq text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary">FAQ</h2>
                <p class="mb--5">
                    Problems trying to resolve 
                    the conflict between the 
                    two major realms of Classical 
                    physics: Newtonian mechanics
                </p>
                <div class="faq__wrapper">
                <?php if( have_rows('the_faq') ) : ?>
                        <?php while(the_repeater_field('the_faq')) : ?>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li>
                            <?php 
                                $image = get_field('the_arrow');
                                $size = 'full';
                                if(!empty($image)):

                            ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            <?php endif; ?>   

                                </li>
                            <li>
                                <h4 class="text--secondary"><?php echo get_sub_field('the_question')?></h4>
                                <p><?php echo wp_trim_words(get_sub_field('the_answer'), 5); ?></p>
                            </li>
                        </ul>
                    </div>
                    <?php
                        endwhile;
                        endif;
                    ?>
                    <?php wp_reset_postdata();?>
                </div>
            </div>

        </section>

        <section class="pricing text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary">Pricing</h2>
                <p class="t--bold mb--5">
                    Problems trying to resolve 
                    the conflict between the two major 
                    realms of Classical physics: 
                    Newtonian mechanics
                </p>
            
                <div class="pricing__wrapper">
                    <div class="pricing__items p--3 my--3 bg--light">
                        <h3 class="text--secondary mb--3">FREE</h3>
                        <p class="t--bold mb--2">Organize across all apps by hand</p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4>0</h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small>$</small></p>
                                <p><small>Per Month</small></p>
                            </li>
                        </ul>
                        <ul class="includes mb--3">
                            <li>
                                <img src="/img/list-style-main.png" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="/img/list-style-main.png" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="/img/list-style-main.png" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="/img/list-style-gray.png" alt="">
                                <p class="text--secondary">1GB Cloud storage</p>
                            </li>
                            <li>
                                <img src="/img/list-style-gray.png" alt="">
                                <p class="text--secondary">Email and community support</p>
                            </li>
                        </ul>
                        <a href="#" class="btn bg--primary">Try for free</a>
                    </div>

                    <div class="pricing__items p--3 my--3 bg--secondary">
                        <h3 class="text--secondary mb--3">STANDARD</h3>
                        <p class="t--bold mb--2">Organize across all apps by hand</p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4>9.99</h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small>$</small></p>
                                <p><small>Per Month</small></p>
                            </li>
                        </ul>
                        <ul class="includes mb--3">
                            <li>
                                <img src="/img/list-style-main.png" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="/img/list-style-main.png" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="/img/list-style-main.png" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="/img/list-style-gray.png" alt="">
                                <p class="text--secondary">1GB Cloud storage</p>
                            </li>
                            <li>
                                <img src="/img/list-style-gray.png" alt="">
                                <p class="text--secondary">Email and community support</p>
                            </li>
                        </ul>
                        <a href="#" class="btn bg--primary">Try for free</a>
                    </div>

                    <div class="pricing__items p--3 my--3 bg--light">
                        <h3 class="text--secondary mb--3">PREMIUM</h3>
                        <p class="t--bold mb--2">Organize across all apps by hand</p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4>19.99</h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small>$</small></p>
                                <p><small>Per Month</small></p>
                            </li>
                        </ul>
                        <ul class="includes mb--3">
                            <li>
                                <img src="/img/list-style-main.png" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="/img/list-style-main.png" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="/img/list-style-main.png" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="/img/list-style-gray.png" alt="">
                                <p class="text--secondary">1GB Cloud storage</p>
                            </li>
                            <li>
                                <img src="/img/list-style-gray.png" alt="">
                                <p class="text--secondary">Email and community support</p>
                            </li>
                        </ul>
                        <a href="#" class="btn bg--primary">Try for free</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="subscribe text--center py--10 bg--secondary text--light">
            <div class="container">
                <div class="subscribe__wrapper">

                    <div class="subscribe__intro mb--2">
                        <h2><?php echo get_field('the_get'); ?></h2>
                        <p class="text--light">
                            <small>
                            <?php echo get_field('the_getparag'); ?> 
                            </small>
                        </p>
                    </div>
                    <div class="groupInput">
                        <input type="text" name="" id="" placeholder="Your Email">
                        <input type="button" value="Subscribe">
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>