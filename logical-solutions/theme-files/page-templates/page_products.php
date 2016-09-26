<?php
/*
Template Name: Products
*/
get_header();
?>
<div id="app">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( '/template-parts/hero' );
			}
			?>

			<section class="section-md" id="products">
				<div class="container">
					<h3 class="section-title">Software</h3>
					<div class="products">

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal('Title', 'http://fillmurray.com/500/580', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptate accusantium voluptates. Eligendi cupiditate sunt accusamus in ut, nostrum quis atque consequatur blanditiis, ratione dolor iure ad possimus nobis vel!')">
									Learn More
								</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

            <div class="products--contact-btn-container">
              <a class="btn btn__blue products--contact-btn uppercase" href="/contact/">Contact Us</a>
            </div>

					</div>
				</div>

				<div class="container">
					<h3 class="section-title">Hardware</h3>
					<div class="products">

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

						<div class="product">
              <div class="product--image"  style="background-image: url(http://fillmurray.com/250/290)">
								<div class="product--overlay"></div>
                <h3 class="product--name text-white">Product Murray</h3>
								<button class="product--learn-more btn btn__white" @click="openModal()">Learn More</button>
              </div>
              <div class="product--info-container">
                <h5 class="product--info text-white">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </h5>
              </div>
            </div>

            <div class="products--contact-btn-container">
              <a class="btn btn__blue products--contact-btn uppercase" href="/contact/">Contact Us</a>
            </div>

					</div>
				</div>
			</section>

			<div class="modal" v-bind:class="{'modal__open': modalOpen}">
				<div class="container relative">
	        <div class="modal--exit" @click="closeModal"></div>
	      </div>
				<div class="container">
          <h3 class="section-title">{{currentTitle}}</h3>
				</div>
				<div class="container">

					<div class="product--modal-content">
						<div class="product--modal-image" style="background-image: url({{currentImage}})"></div>

						<div class="product--modal-description">
							<p>{{currentDescription}}</p>
							<a href="/contact#contact" class="product--modal-cta btn btn__blue uppercase">Contact Us</a>
						</div>
					</div>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
