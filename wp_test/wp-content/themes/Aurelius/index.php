	<?php get_header(); ?>
	<!-- Column 1 /Content -->
	<div class="grid_8">
		<!-- Blog Post -->
		<?php if ( have_post() ) : while ( have_post() ) : the_post(); ?>

		<div class="post">
		<!-- Post Title -->
		<h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<!-- Post Data -->
		<p class="sub"><?php the_tags('标签：',',',''); ?> &bull; <?php the_time('Y年n月j日'); ?> &bull; <a href="#"><?php coomment_popup_link('2条评论') ?></a></p>
		<div class="hr dotted clearfix">&nbsp;</div>
		<!-- Post Image -->
		<img class="thumb" alt="" src="<?php bloginfo('template_url');?>/images/610x150.gif" />
		<!-- Post Content -->
		<?php the_content('阅读全文...'); ?>
		<p class="clearfix"><a href="single.html" class="button right"> Read More...</a></p>
		</div>
		<div class="hr clearfix">&nbsp;</div>

	<?php endwhile; ?>

		<!-- Blog Navigation -->
		<p class="clearfix"> <a href="#" class="button float">&lt;&lt; 阅读按钮</a> <a href="#" class="button float right">Newer Posts >></a> </p>
	<?php else : ?>
		<h3 class="title"><a href="#" rel="bookbmark">未找到</a></h3>			
		<p>没有找到任何文章</p>
	</div>
	<!-- Column 2 / Sidebar -->
	<?php get_sidebar(); ?>
	<!-- Footer -->
	<?php get_footer(); ?>