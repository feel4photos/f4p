<?php
/**
 * Template name: Creative & Model Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- creative & model photography section start -->
<?php
	$portfolio = new WP_Query ( array(
		'post_type' => 'page',
		'posts_per_page' => -1,
		'post_parent' => $post->ID,
		'order' => 'asc',
		'orderby' => 'menu_order',
		'post_status'=>'publish'
		)
	);
?>
<?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
	<?php if($post->post_name == 'creative-photography') : ?>
    <!-- creative section start -->
    <section class="white">
    	<div class="bl-box">
            <section class="view view-tenth"> 
            	<?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>
                <figure>
                    <a href="#" style="background-image:url('<?php echo $background[0]; ?>');"></a>
                </figure>
                <?php endif; ?>
            </section>
            <article>
            	<h1><?php the_title(); ?></h1>
              	<?php the_excerpt(); ?>
            </article>
        </div>
      	<div class="bl-content">
        <article> <img src="images/tobias.png">
          <h2>our works on creative photography</h2>
          <!--<h3><a href="http://www.vanschneider.com/" target="_blank">Tobias Van Schneider</a> • Designer at <a href="https://www.spotify.com/" target="_blank">Spotify</a> • NYC <span>Read the original article on <a href="http://vanschneider.squarespace.com/journal/my-tools-my-process" target="_blank">his blog</a></span></h3>-->
          <p>Recently I'm getting a lot of emails from people asking me what my process looks like and which tools/apps I use for most of my projects. Since I'm a self-taught guy I developed my own work flow which works best for me and I'm happy to share it with you.</p>
        </article>
        <ul id="bl-work-items">
            <li data-panel="panel-0"><a href="#"><span>01</span>tip tip tip</a></li>
          <li data-panel="panel-1"><a href="#"><span>01</span>Brainstorming hello</a></li>
          <li data-panel="panel-2"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>02</span>Wireframes</a></li>
          <li data-panel="panel-3"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>03</span>Prototypes</a></li>
          <li data-panel="panel-4"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>04</span>It's about the process</a></li>
          <li data-panel="panel-5"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>05</span>Don't listen to other people who're telling you what's right and what's wrong</a></li>
          <li data-panel="panel-6"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>06</span>Surround yourself with people who motivate you</a></li>
          <li data-panel="panel-7"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>07</span>Help other people</a></li>
          <li data-panel="panel-8"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>08</span>Always surround yourself with people who're "better" than you</a></li>
          <li data-panel="panel-9"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>09</span>Break the rules</a></li>
          <li data-panel="panel-10"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>10</span>Stop complaining</a></li>
        </ul>
        <div style="clear:both"></div>
        <br>
        &nbsp;&nbsp;<br>
        <br>
      </div>
      	<span class="bl-icon bl-icon-close">×</span> 
    </section>
    <!-- creative section end --> 
    <?php elseif($post->post_name == 'model-photography') : ?>
    <section id="bl-work-section" class="white_rht">
    	<div class="bl-box">
            <section class="view view-tenth"> 
            	<?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>
                <figure>
                    <a href="#" style="background-image:url('<?php echo $background[0]; ?>');"></a>
                </figure>
                <?php endif; ?>
            </section>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_excerpt(); ?>
            </article>
      </div>
      	<div class="bl-content">
        <article> <img src="images/brijan.png">
          <h2>our works on baby photography</h2>
          <p>Advice from an unschooled, balding, divorcé who might ruin your life if you actually follow the advice given. Then again, it may just make your life better?</p>
          <p>I never went to college or to a university, hell, I never graduated from high school. I was too busy snowboarding, skateboarding or just plain being a lazy piece of shit hooking up with every girl I could along the way.</p>
          
        </article>
        <ul id="bl-work-items">
          <li data-panel="panel-11"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>01</span>Drop out of design school IMMEDIATELY!</a></li>
          <li data-panel="panel-12"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>02</span>Get a business degree</a></li>
          <li data-panel="panel-13"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>03</span>Don't stop designing</a></li>
          <li data-panel="panel-14"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>04</span>Start growing your reputation</a></li>
          <li data-panel="panel-15"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>05</span>Get freelance work, loads of it</a></li>
          <li data-panel="panel-16"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>06</span>Build your portfolio &amp; your client base</a></li>
          <li data-panel="panel-17"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>07</span>Create your own studio</a></li>
          <li data-panel="panel-18"><a href="http://adrien-heury.net/designers-checklists/page2.html#"><span>—</span>You're never going to be homeless... Asshole</a></li>
        </ul>
        <div style="clear:both"></div>
        <br>
        &nbsp;&nbsp;<br>
        <br>
      </div>
      	<span class="bl-icon bl-icon-close">×</span> 
    </section>
    <!-- creative & model photography section end -->
    <?php endif; endwhile; wp_reset_query(); ?>
<?php
//get_sidebar();
get_footer();
