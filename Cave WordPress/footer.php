
<footer class="s_8" id="Контакты">
		<div class="owr-gray">	
			<div class="container">
				<h2>Закажите обратный звонок,мы перезвоним в удобное для вас время!</h2>
				<div class="row">
					<div class="col form-class">
						<form id="form" method="post">
				        	<?php if ( have_posts() ) : query_posts('p=104');
								while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
							<? endwhile; endif; wp_reset_query(); ?>
				        </form>
					</div>
				</div>
				<div class="row" style="margin: 30px 0;">
					<div class="col-md-4 col-sm-6">
						<div class="block-phone fl-l">
							
						</div>
					</div>
					<div class="col-md-4 md-none">
						<div class="block-img">
							<a href="/" style="background-color: transparent;border-bottom: none;"><?php the_custom_logo(); ?></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="block-phone fl-r">
							<h3><span><?php $options=get_option('sample_theme_options'); echo $options['emtext'] ?><br></span>Звоните нам</h3>
							<i class="fas fa-mobile-alt" style="margin-right: 0;margin-left: 45px;"></i>
						</div>
					</div>
					<div class="col-sm-12 logo-sm-bock">
						<div class="block-img">
							<a href="/" style="background-color: transparent;"><?php the_custom_logo(); ?></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2>Мы работаем ежедневно <strong>график работ : </strong><span><?php $options=get_option('sample_theme_options'); echo $options['dntext'] ?> <span><i class="far fa-clock"></i> <?php $options=get_option('sample_theme_options'); echo $options['nachtext'] ?> - <i class="far fa-clock"></i> <?php $options=get_option('sample_theme_options'); echo $options['endtext'] ?></span></span></h2>
					</div>	
				</div>
			</div>
		</div>
	</footer>
	
	<a href="#top" class="top"><svg xmlns="http://www.w3.org/2000/svg" class="scrollup-svg-icon" width="32" height="32" viewBox="0 0 18 28"><path d="M16.8 20.5c0 0.1-0.1 0.3-0.2 0.4l-0.8 0.8c-0.1 0.1-0.2 0.2-0.4 0.2-0.1 0-0.3-0.1-0.4-0.2l-6.1-6.1-6.1 6.1c-0.1 0.1-0.2 0.2-0.4 0.2s-0.3-0.1-0.4-0.2l-0.8-0.8c-0.1-0.1-0.2-0.2-0.2-0.4s0.1-0.3 0.2-0.4l7.3-7.3c0.1-0.1 0.2-0.2 0.4-0.2s0.3 0.1 0.4 0.2l7.3 7.3c0.1 0.1 0.2 0.2 0.2 0.4zM16.8 14.5c0 0.1-0.1 0.3-0.2 0.4l-0.8 0.8c-0.1 0.1-0.2 0.2-0.4 0.2-0.1 0-0.3-0.1-0.4-0.2l-6.1-6.1-6.1 6.1c-0.1 0.1-0.2 0.2-0.4 0.2s-0.3-0.1-0.4-0.2l-0.8-0.8c-0.1-0.1-0.2-0.2-0.2-0.4s0.1-0.3 0.2-0.4l7.3-7.3c0.1-0.1 0.2-0.2 0.4-0.2s0.3 0.1 0.4 0.2l7.3 7.3c0.1 0.1 0.2 0.2 0.2 0.4z"></path></svg></a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Введите свои данные и наш специалист свяжется с Вами!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form" method="post">
        	<?php if ( have_posts() ) : query_posts('p=107');
								while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
							<? endwhile; endif; wp_reset_query(); ?>
        </form>
      </div>
    </div>
  </div>
</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	


	
	

	

	<?php wp_footer(); ?>

	<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>
</html>
