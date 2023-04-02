<?php wp_footer(); ?>
<footer class="getInTouch py--10">
            <div class="container">
                <div class="getInTouch__wrapper">
                <?php if( have_rows('links_all') ) : ?>
                        <?php while(the_repeater_field('links_all')) : ?>
                    
                            <?php if( have_rows('links_nav') ) : ?>
                        <?php while(the_repeater_field('links_nav')) : ?>
                                
                                    <?php echo get_sub_field('links_navigation')?>
                        <!-- <li>
                            <ul class="socLinks d--flex">
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                                <li><i class="fa-brands fa-twitter"></i></li>
                            </ul>
                        </li> -->
                        <?php
                        endwhile;
                        endif;
                    ?>
                    
                    <?php
                        endwhile;
                        endif;
                    ?>
                    <?php wp_reset_postdata();?>
                    
                    
                    <!--
                    <ul>
                        <li>Features</li>
                        <li>Business Marketing</li>
                        <li>User Analytic</li>
                        <li>Live Chat</li>
                        <li>Unlimited Support</li>
                    </ul>
                    <ul>
                        <li>Resources</li>
                        <li>IOS & Android</li>
                        <li>Watch a Demo</li>
                        <li>Customers</li>
                        <li>API</li>
                    </ul> -->
                
                </div>
            </div>
        </footer>
        <div class="allRightReserved py--3 bg--gray">
            <div class="container">
                <p class="text--center">Made With Love By Figmaland All Right Reserved</p>
            </div>
        </div>

        <script>
            
            const toogleMenu = document.querySelector('.toggle__menu');
            const nav = document.querySelector('.nav');
            const header = document.querySelector('.header');

            toogleMenu.addEventListener('click' , () =>{
                toogleMenu.classList.toggle('open');
                nav.classList.toggle("open");
                header.classList.toggle("open");
            });

        </script>

    </body>
</html>