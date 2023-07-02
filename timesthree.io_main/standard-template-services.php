<?php
/**
 * Template Name: StandardTemplateServices
 * @package WordPress
 */
get_header(); ?>

<!--START PAGE CONTENT-->
<section class="background">
    
    <div class="road desktop">

        <svg version="1.1" width="100%" height="100%" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1366 1300" >
                        
            <style type="text/css">
	.st0{fill:#574747;stroke:#000000;stroke-miterlimit:10;}
	.st1{fill:#FFFFFF;}
</style>
<g id="Layer_2">
	<polygon class="st0" points="755.5,1.5 1385.5,1314.5 -23.5,1314.5 604.5,1.5 	"/>
</g>
<g id="Layer_5">
	<path id="path3170_00000060716181546960121700000013622313542729598644_" class="st1" d="M754.6,3.5l-12-0.6l624.5,1416l56,2.8
		L754.6,3.5z"/>
	<path id="path3170_00000171717913301156942750000009563982683961341593_" class="st1" d="M-63.4,1421.7l56-2.8L617.1,2.9l-12,0.6
		L-63.4,1421.7z"/>
</g>
<g id="Layer_6">
	<g id="g3320_00000116205065396195077660000005173282154339323041_" transform="translate(-411.81885,-2.6761464)">
		<path id="path3318_00000026868859441538018450000017008319616336779967_" class="st1" d="M1108.3,1007.6h-32.6l-5.5,380.6h42.3
			L1108.3,1007.6z"/>
		<path id="path3303_00000117655750175586033790000005144495548909735830_" class="st1" d="M1082.6,531.8l-5.2,358.7h29.5
			l-3.9-358.7H1082.6z"/>
		<path id="path3308_00000162328523947258601060000017013698116408658085_" class="st1" d="M1099.8,231.2h-12.9l-3.2,215.2h18.4
			L1099.8,231.2z"/>
		<path id="path3313_00000110432560790907208940000006726461771436490685_" class="st1" d="M1097.9,61.8h-8.5l-1.7,115.4h11.5
			L1097.9,61.8z"/>
		<path id="path3290_00000176725463710558674000000002101450405380530864_" class="st1" d="M1090.2,4.6l-0.4,30.3h7.8l-0.3-30.3
			H1090.2z"/>
	</g>
</g>
</svg>


    </div>

    <div class="road mobile">

        <svg version="1.1" width="100%" height="100%" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 600 1314">
            <style type="text/css">
                .st0{fill:#574747;stroke:#000000;stroke-miterlimit:10;}
                .st1{fill:#FFFFFF;}
            </style>
            <g id="Layer_1">
                <polygon class="st0" points="374.5,0.5 1004.5,1313.5 -404.5,1313.5 223.5,0.5 	"/>
                <path id="path3170_00000097459044598315318240000000272213598757948335_" class="st1" d="M373.6,2.5l-12-0.6l624.5,1416l56,2.8
                    L373.6,2.5z"/>
                <path id="path3170_00000100363208275613138480000014740139729657489821_" class="st1" d="M-444.4,1420.7l56-2.8L236.1,1.9l-12,0.6
                    L-444.4,1420.7z"/>
                <g id="g3320_00000116205065396195077660000005173282154339323041_" transform="translate(-411.81885,-2.6761464)">
                    <path id="path3318_00000026868859441538018450000017008319616336779967_" class="st1" d="M727.3,1006.6h-32.6l-5.5,380.6h42.3
                        L727.3,1006.6z"/>
                    <path id="path3303_00000117655750175586033790000005144495548909735830_" class="st1" d="M701.6,530.8l-5.2,358.7H726l-3.9-358.7
                        H701.6z"/>
                    <path id="path3308_00000162328523947258601060000017013698116408658085_" class="st1" d="M718.8,230.2h-12.9l-3.2,215.2h18.4
                        L718.8,230.2z"/>
                    <path id="path3313_00000110432560790907208940000006726461771436490685_" class="st1" d="M716.9,60.8h-8.5l-1.7,115.4h11.5
                        L716.9,60.8z"/>
                    <path id="path3290_00000176725463710558674000000002101450405380530864_" class="st1" d="M709.2,3.6l-0.4,30.3h7.8l-0.3-30.3
                        H709.2z"/>
                </g>
            </g>
            <g id="Layer_2">
            </g>
            </svg>

    </div>

    <div class="content-holder">

        
        <div class="main-content">
            
            <?php

                the_content();
            
            ?>

            <div class="services">
            <?php

                get_service_items();

            ?>
            </div>

        </div>  

    </div>

</section>

<!--END PAGE CONTENT-->

<?php get_footer(); ?>