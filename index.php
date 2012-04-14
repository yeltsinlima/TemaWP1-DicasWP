<?php get_header(); ?>
    
    	<!-- header -->
        <div class="row">
        
        	<div class="eight columns">
            
            	<h1><?php bloginfo('name'); ?></h1>
                <h2><?php bloginfo('description'); ?></h2>
            
            </div>
            
            <div class="four columns">
            
            	<ul>
                	<li><a href="#" title="Nosso Twitter"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.jpg" alt="Twitter"></a></li>
                    <li><a href="#" title="Nosso Facebook"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.jpg" alt="Facebook"></a></li>
                    <li><a href="<?php bloginfo('rss2_url'); ?>" title="Assine nosso Feed RSS"><img src="<?php bloginfo('template_directory'); ?>/images/rss.jpg" alt="Feed RSS"></a></li>
                </ul>
            
            </div>
        
        </div>
        <!-- header -->
    
    	<!-- navegação -->
        <div class="row">
        
        	<div class="twelve columns">
            	<?php wp_nav_menu( array('container' => false, 'menu_class' => 'nav-bar', 'theme_location' => 'menu' )); ?>
            </div>
        
        </div>
        <!-- navegação -->
        
        <!-- conteúdo -->
        <div class="row">
        
        	<!-- posts -->
        	<div class="eight columns">
            
            	<div class="row">
                
                	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                	<!-- artigo -->
                    <div class="twelve columns">
                    	
                         <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Link Permanente para <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                         
                          <?php the_content(); ?>
                        
                        <div class="alert-box">
                        	<span class="author"><?php the_author_posts_link() ?></span> <span class="date"><?php the_time('F jS, Y') ?></span> <span class="category"><?php the_category(', '); ?></span>
                        </div>
                    
                    </div>
                    <!-- artigo -->
                    <?php endwhile; else: ?>
                	<!-- artigo -->
                    <div class="twelve columns">
                    
                    	<h3>Desculpe, nenhum post encontrado.</h3>
                        
                    </div>
                    <!-- artigo -->
                    <?php endif; ?>
                
                </div>
            
            </div>
            <!-- posts -->
            
            <?php get_sidebar(); ?>
        
        </div>
        <!-- conteúdo -->
        
<?php get_footer(); ?>