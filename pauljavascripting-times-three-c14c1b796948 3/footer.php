		</div><!-- close wrapper -->
		<footer>
			<div class="wrapper">

                <div class="menu">

                <ul>
                
                <?php

                    get_menu('footer-menu');

                ?>
                </ul>


                </div>

            </div>
		</footer>
        <script src="<?php bloginfo('template_url'); ?>/js/main.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>

        <?php wp_footer(); ?>
    </body>
</html>