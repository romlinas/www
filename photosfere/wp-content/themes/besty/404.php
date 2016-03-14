<?php 
/**
 * The 404 template file
**/
get_header(); 
?>
<div class="mini-content">
    <div class="col-md-9">
    <header>
			<div class="jumbotron">
				<h1>Ошибка 404. Страница не найдена</h1>
				<p>К сожалению, по вашему запросу ничего не найдено.</p>
                <section class="post_content">
                    <p>По данному адресу ничего не найдено. Воспользуйтесь поиском.</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo get_search_form(); ?>									
                        </div>
                	</div>
				</section>
			</div>
		</header>
    </div>
    <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
