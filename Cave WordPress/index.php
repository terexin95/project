<?php get_header(); ?>

	<section class="s_1">
		<div class="container">
			<h2> Гарантия на работы <strong>  3 года</strong> Фактический срок службы оборудования -<strong>15 лет</strong> Строительство от <strong> 1 </strong> недели до <strong> 1 </strong> месяца</h2>
			<div class="row">
				<div class="col-lg-8">
					<div class="block-video">
						<iframe class="iframe-video" src="https://www.youtube.com/embed/Lkop2boBSgY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-lg-4">
						<ul>
							<li class="activ-li">- экологичное нанесение соли</li>
							<li>- длительный срок эксплуатации оборудования</li>
							<li>- оперативность выполнения заказа</li>
							<li>- гарантия до 3 лет.</li>
						</ul>
					</div>
			</div>
		</div>
	</section>

	<section class="s_2">
		<div class="container">
			<h2><?php echo get_cat_name(2); ?></h2>
			<p><?php echo category_description(2); ?></p>
			<div class="row">
				<?php if ( have_posts() ) : query_posts('cat=2');
					while (have_posts()) : the_post(); ?>
				<div class="col-md-6 col-sm-12 col-lg-4">
					<div class="cave-descr" id="open-form-madal" data-toggle="modal" data-target="#exampleModal">
						<h3><?php the_title(); ?></h3>
						<?php the_post_thumbnail(array(350, 194)); ?>
						<span><?php the_content(); ?></span>
					</div>
				</div>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<a href="#" data-toggle="modal" data-target="#exampleModal" id="open-form-madal">Хочу узнать подробнее</a>
			<h2 id="Что-лечит-соляная-пещера">Принцип галотерапии? Польза соляной пещеры</h2>
			<h3>Посетите выполненные нами галокамеры и воочию убедитесь в их уникальности!</h3>
			<div class="row" >
				
				<div class="col-lg-8">
					<div class="block-video" style="padding: 60px;
    margin-top: -60px;">
						
						<img src="https://image.ibb.co/f82bE8/1.jpg">
					</div>
				</div>
				<div class="col-lg-4">
						<ul>
							<li class="activ-li">- Ознакомление с особенностями и качеством используемого материала;</li>
							<li>- Погружение в атмосферу соляной пещеры в одном из готовых наших объектов.</li>
						</ul>
					</div>
			</div>
			<p>Сегодня, чтобы “очутиться” внутри соляной пещеры совсем не обязательно искать такие уникальные природные места.</p> 
			<p>Благодаря специальному оборудованию - галогенератору - внутри любого помещеия искусственным путем можно создать уникальный микроклимат, характерный для соляной пещеры.</p> 
			<p>Такой метод называется галотерапией и он успешно применяется во многих сферах нашей жизни.</p>
		</div>
	</section>

	<section class="s_3" id="Строительство-пещер">
		<div class="container">
			<h2><?php echo get_cat_name(3); ?></h2>
			
			<div class="row">
				<?php if ( have_posts() ) : query_posts('cat=3');
					while (have_posts()) : the_post(); ?>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<span id="open-form-madal" data-toggle="modal" data-target="#exampleModal">«<?php the_title(); ?>»</span>
				</div>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="row">
				<?php if ( have_posts() ) : query_posts('cat=4');
					while (have_posts()) : the_post(); ?>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
					<span id="open-form-madal" data-toggle="modal" data-target="#exampleModal">«<?php the_title(); ?>»</span>
				</div>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
			<p><?php echo category_description(3); ?></p>
		</div>
	</section>

	<section class="s_4" id="Готовые-пещеры">
		<h2><?php echo get_cat_name(5); ?></h2>
		<p><?php echo category_description(5); ?></p>
		<div class="container">
			<div class="slider">
				<div class="autoplay">
					<?php if ( have_posts() ) : query_posts('cat=5');
						while (have_posts()) : the_post(); ?>
					<div class="slide"><?php the_post_thumbnail(array(400, 350)); ?></div>
					<? endwhile; endif; wp_reset_query(); ?>
					
				</div>
			</div>
		</div>
	</section>

	<section class="s_5" id="Франшиза">
		<div class="container">
			<h2><?php echo get_cat_name(6); ?></h2>
			<?php if ( have_posts() ) : query_posts('cat=6');
				while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
			<? endwhile; endif; wp_reset_query(); ?>
			<h3>Получить дополнительную информацию по всем вопросам вы сможете по телефону <br><span>

				<?php $options=get_option('sample_theme_options');

							echo $options['emtext']?>
							 	
							 </span></h3>
		</div>
	</section>

	<section class="s_6">
		<div class="container">
			<h2><?php echo get_cat_name(7); ?></h2>
			<?php if ( have_posts() ) : query_posts('cat=7');
				while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
			<? endwhile; endif; wp_reset_query(); ?>
			<h3>Все условия получения БЕСПЛАТНОГО сайта, вы можете узнать по телефону</h3>
			<a id="open-form-madal" href="#" data-toggle="modal" data-target="#exampleModal">Как получить сайт бесплатно</a>
		</div>
	</section>

	<section class="s_7" id="Как-мы-работаем">
		<div class="owerl-s-7">
			<div class="container">
				<h2><?php echo get_cat_name(8); ?></h2>
				<div class="row">
					<?php if ( have_posts() ) : query_posts('cat=8');
						while (have_posts()) : the_post(); ?>
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="block-info-descr">
									<?php the_content(); ?>
									<span><?php the_title(); ?></span>
								</div>
							</div>
					<? endwhile; endif; wp_reset_query(); ?>
				</div>
								<div class="row">
					<div class="col-sm-12 col-xs-12 col-md-4 offset-md-2" >
						<div class="block-info-descr">
							<i class="fab fa-cc-visa"></i>
							<br>
							<span>Удобная форма оплаты</span>

						</div>
					</div>
					<div class="col-sm-12s col-xs-12 col-md-4">
						<div class="block-info-descr">
							<i class="far fa-check-circle"></i>
							<br>
							<span>Команда квалифицированных специалистов</span>
						</div>
					</div>
				</div>
			</div>
			<p><?php echo category_description(8); ?></p>
		</div>
	</section>

	<section class="s_9">
		<div class="container">
			<h2><?php echo get_cat_name(9); ?></h2>
			<p><?php echo category_description(9); ?></p>
			<div class="row">
				<?php if ( have_posts() ) : query_posts('p=116');
						while (have_posts()) : the_post(); ?>
						<div class="col-md-4 col-sm-12">
							<div class="block-yskg">

								<i class="far fa-check-square"></i>
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>

							</div>
						</div>
				<? endwhile; endif; wp_reset_query(); ?>
				<?php if ( have_posts() ) : query_posts('p=118');
						while (have_posts()) : the_post(); ?>
						<div class="col-md-4 col-sm-12">
							<div class="block-yskg">

								<i class="far fa-window-restore"></i>
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>

							</div>
						</div>
				<? endwhile; endif; wp_reset_query(); ?>
				<?php if ( have_posts() ) : query_posts('p=120');
						while (have_posts()) : the_post(); ?>
						<div class="col-md-4 col-sm-12">
							<div class="block-yskg">

								<i class="fas fa-edit"></i>
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>

							</div>
						</div>
				<? endwhile; endif; wp_reset_query(); ?>
				<?php if ( have_posts() ) : query_posts('p=122');
						while (have_posts()) : the_post(); ?>
						<div class="col-md-4 col-sm-12">
							<div class="block-yskg">

								<i class="fas fa-truck"></i>
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>

							</div>
						</div>
				<? endwhile; endif; wp_reset_query(); ?>
				<?php if ( have_posts() ) : query_posts('p=125');
						while (have_posts()) : the_post(); ?>
						<div class="col-md-4 col-sm-12">
							<div class="block-yskg">

								<i class="fas fa-magic"></i>
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>

							</div>
						</div>
				<? endwhile; endif; wp_reset_query(); ?>
				<?php if ( have_posts() ) : query_posts('p=127');
						while (have_posts()) : the_post(); ?>
						<div class="col-md-4 col-sm-12">
							<div class="block-yskg">

								<i class="far fa-gem"></i>
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>

							</div>
						</div>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>