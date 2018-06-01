<!-- MAIN BANNER -->
<section class="cd-hero">
	<ul class="cd-hero-slider autopla">

		<li class="selected">
			<div class="cd-full-width">
				<div class="container">
					<h2 class="jmy_web_div" data-page="inicio" id="slider_1" data-editor="no"><?php $this->pnt('slider_1','Money Doesn’t<br>Come <span class="color-default">Without Care</span>'); ?></h2>					
					<p class="jmy_web_div" data-page="inicio" id="slider_1_txt"><?php $this->pnt('slider_1_txt','Finding your next Financial Advisor is as easy as counting from one to five.'); ?></p>

					<a href="<?php $this->url_inicio(); ?>about-us.html" class="btn btn-primary" data-text="Leer mas"  >Leer mas</a>

					<a href="<?php $this->url_inicio(); ?>contact-us.html" class="btn btn-default" data-text="Contactanos" >Contactanos</a>
				</div>	
			</div>
		</li> 

		<li>
			<div class="cd-full-width">
				<div class="container">
					<h2 class="jmy_web_div" data-page="inicio" id="slider_2" data-editor="no">
						<?php $this->pnt('slider_2','Friendly <span class="color-default">Assistance</span>'); 
						?></h2>

					<p class="jmy_web_div" data-page="inicio" id="slider_2_txt" data-editor="no"> 
						<?php $this->pnt('slider_2_txt','With over 15 years of experience we’ll ensure you always get the best<br>guidance. we’re with you every step of the way');
						?></p>
					<a href="<?php $this->url_inicio(); ?>contact-us.html" class="btn btn-default" data-text="póngase en contacto con nosotros hoy">póngase en contacto con nosotros hoy
					</a>
				</div>
			</div>
		</li>

		<li>
			<div class="cd-full-width">
				<div class="container text-center">
					<h2 class="jmy_web_div color-white" data-page="inicio" id="slider_3" data-editor="no">
						<?php $this->pnt('slider_3','Experience is Everything'); ?>
					</h2>
					<p class="jmy_web_div color-white"  data-page="inicio" id="slider_3_txt" data-editor="no"><?php
					 $this->pnt('slider_3_txt','With over 15 years of experience we’ll ensure you always get the best<br>guidance we’re with you every step of the way'); 
					 ?></p>
					<a href="<?php $this->url_inicio(); ?>about-us.html" class="btn btn-primary" data-text="leer mas">leer mas</a>
					<a href="<?php $this->url_inicio(); ?>contact-us.html" class="btn btn-default" data-text="Contactanos">Contactanos</a>
				</div>
			</div>
		</li>

		<li>
			<div class="cd-full-width">
				<div class="container text-right">
					<h2 class="jmy_web_div" data-page="inicio" id="slider_4" data-editor="no">
						<?php $this->pnt('slider_4','Clients <span class="color-default">Investment<br></span>Guidance'); ?>
						
					</h2>
					<p class="jmy_web_div" data-page="inicio" id="slider_4_txt" data-editor="no">
						<?php $this->pnt('slider_4_txt','Doing the right thing for our clients, no matter what.'); ?>					
					</p>
					<a href="<?php $this->url_inicio(); ?>services.html" class="btn btn-primary" data-text="Ver todos nuestros servicios">
						Ver todos nuestros servicios
					</a>
				</div>
			</div>
		</li>

	</ul>

	<div class="cd-slider-nav">
		<nav class="container">
			<span class="cd-marker item-1"></span>
			
			<ul>

				<li class="jmy_web_div selected" data-page="inicio" id="slider_menu_1"><?php 
				$this->pnt('slider_menu_1','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">1</div>Money Care<span>Finding your Next Advisor</span></a>'); ?></li>

				<li class="jmy_web_div" data-page="inicio" id="slider_menu_2"><?php
				$this->pnt('slider_menu_2','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">2</div>Friendly Assistance<span>Export Financial Advice</span></a>'); ?></li>

				<li class="jmy_web_div" data-page="inicio" id="slider_menu_3"><?php
				$this->pnt('slider_menu_3','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">3</div> Our Experience<span>We have 15 Years Experience</span></a>'); ?></li>

				<li class="jmy_web_div" data-page="inicio" id="slider_menu_4"><?php
				$this->pnt('slider_menu_4','<a href="'.$this->url_inicio(["return"=>true]).'#0">
						<div class="slide-number">4</div> Client Investment<span>Doing the right thing</span></a>'); ?></li>

			</ul>
		</nav> 
	</div>
	
</section> <!-- / MAIN BANNER -->




<!-- Editor listo WELCOME -->
<section class="bg-blue">
	<div class="container">
		<div class="row">

			<div class="col-md-6 animate fadeInLeft">
				<h2 class="jmy_web_div " data-page="inicio" id="welcom_adv" data-editor="no"><?php $this->pnt('welcom_adv','Welcome to Advisor'); ?></h2>
				<div class="height-10"></div>
				<p class="jmy_web_div " data-page="inicio" id="welcom_adv_txt" data-editor="no"><?php $this->pnt('welcom_adv_txt','We have over 15 years of experience Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean Lorem ipsm dolor sit the power of consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.'); ?></p>
				<div class="height-10"></div>
				<p class="jmy_web_div " data-page="inicio" id="2welcom_adv" data-editor="no"><?php $this->pnt('2welcom_adv','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum nec risus et suscipit Curabitur metus ipsum.'); ?></p>
				<div class="height-20"></div>
				<a href="<?php $this->url_inicio(); ?>about-us.html" class="btn btn-bordered-dark" data-text="leer mas">leer mas</a>
				<div class="height-40"></div>
			</div>

			<div class="col-md-6 animate fadeInRight">
				<div class="video-widget">
					<img src="images/video-thumb.jpg" class="img-shadow" alt="">
					<a href="<?php $this->url_templet(); ?>http://vimeo.com/36031564" class="fancybox-media"><i class="fa fa-play"></i></a>
				</div>
			</div>
		</div>
	</div>
</section><!-- / WELCOME -->


<!-- BENIFITS -->
 <section class="text-center">
	<div class="container">

<!--
<div class="jmy_web_categorias" data-page="inicio" id="categorias_nombres" data-value="<?php
            $categorias = ["anillos","collares","pulceras"];
            $categorias = $this->pnt('categorias_nombres',implode(',', $categorias),['return'=>true]); 
            echo $categorias;
            $categorias = explode(",",$categorias);
            ?>" data-titulo="Indica el nombre de categoría separado por comas"></div>

    -->


<div class="jmy_web_contador" data-page="inicio" id="numero_de_carrusel" data-value="<?php
        $this->pnt('numero_de_carrusel','3'); 
        ?>" data-titulo="Inica el número de páginas a mostrar"></div>




		<div class="two-items-carousel owl-carousel">


           <?php 
                 $paginas = $this->pnt('numero_de_carrusel','3',["return"=>true]); 
                $contador = 0;
                for($i=0;$i<$paginas;$i++){ ?>

                <!-- INICIA el Ejemplo 1 -->
                <div class="<?php $this->pnt('slider_cat_'.$i,''); ?> jmy_web_slider" id="grupo_slider_<?php echo $i;?>" data-page="inicio" data-marco="works-container" data-var='[{"type":"imagen","id":"carr<?php echo $i;?>_imagen","url":"<?php $this->url_templet();?>images/img1.jpg"},{"type":"text","id":"carr<?php echo $i;?>_titulo","placeholder":"TituloH3"},{"type":"text","id":"carr<?php echo $i;?>_text","placeholder":"parrafo"}]'>


					<div class="image-and-text-box animate fadeInLeft">
						<div class="bordered-thumb " data-page="inicio">

							<img id="carr<?php echo $i; ?>_imagen" src="<?php 
							$this->pnt(	'carr'.$i.'_imagen',
									$this->url_templet(["return"=>true]).'images/img1.jpg'
									); ?>" alt=""></div>
						<h3 class="" data-page="inicio" id="carr<?php echo $i; ?>_titulo"><?php 
						$this->pnt('carr'.$i.'_titulo','Why Our Consulting'); ?></h3>

						<p class="" data-page="inicio" id="carr<?php echo $i; ?>_text"><?php 
						$this->pnt('carr'.$i.'_text','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
						?></p>
					</div>	
				</div>
				<!-- FINALIZA el Ejemplo 1 -->

  <!-- INICIA el Ejemplo 1 -->
                <div class="<?php $this->pnt('slider_cat_'.$i,'_b'); ?> jmy_web_slider" id="grupo_slider_<?php echo $i;?>_b" data-page="inicio" data-marco="works-container" data-var='[{"type":"imagen","id":"carr<?php echo $i;?>_imagen_b","url":"<?php $this->url_templet();?>images/img1.jpg"},{"type":"text","id":"carr<?php echo $i;?>_titulo_b","placeholder":"TituloH3"},{"type":"text","id":"carr<?php echo $i;?>_text_b","placeholder":"parrafo"}]'>


					<div class="image-and-text-box animate fadeInLeft">
						
						<h3 class="" data-page="inicio" id="carr<?php echo $i; ?>_titulo_b"><?php 
						$this->pnt('carr'.$i.'_titulo_b','Why Our Consulting'); ?></h3>

						<p class="" data-page="inicio" id="carr<?php echo $i; ?>_text_b"><?php 
						$this->pnt('carr'.$i.'_text_b','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
						?></p>
						<div class="bordered-thumb " data-page="inicio">

							<img id="carr<?php echo $i; ?>_imagen_b" src="<?php 
							$this->pnt(	'carr'.$i.'_imagen_b',
									$this->url_templet(["return"=>true]).'images/img1.jpg'
									); ?>" alt=""></div>
					</div>	
				</div>
				<!-- FINALIZA el Ejemplo 1 -->

			


   <?php /* 

			<div class="image-and-text-box animate fadeInRight">
				<div class="" data-page="inicio" id="carr<?php echo $i; ?>_titulo2"  ><?php 
				$this->pnt('carr'.$i.'_titulo2','<h3>Investment Planning</h3>');?></div>
				<div class="bordered-thumb" data-page="inicio" id="carr<?php echo $i; ?>_text2"><?php 
				$this->pnt('carr'.$i.'_text2','<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you. </p> '); 
				?></div>
				<div class="bordered-thumb " data-page="inicio" id="carr<?php echo $i; ?>_imagen2"><?php 
					$this->pnt(	'carr'.$i.'_imagen2','<img src="'. $this->url_templet(["return"=>true]).'images/img1.jpg" alt="">'); 
				?></div>
			</div> */ } ?>




		</div>
	</div>
</section><!-- / BENIFITS -->


<!-- FUNFACTS -->
<div class="container">
	<div class="funfacts text-center">
		<div class="advisor-overlay"></div>
		<div class="funfacts-inner">
			<h2 class="jmy_web_div" data-page="inicio" id="titulo_satisfaccion"  ><?php 
				$this->pnt('titulo_satisfaccion','Helping Small Businesses'); 
				?></h2>
			<p class="jmy_web_div " data-page="inicio" id="satisfaccion_text"><?php 
				$this->pnt('satisfaccion_text','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); ?></p>

			<div class="row text-center" id="">

				<div class="col-md-3 col-xs-6">
					<div class="counter">
						<span class="jmy_web_div quantity-counter1 highlight" data-page="inicio" id="satisfaccion_no1"><?php 
						$this->pnt('satisfaccion_no1','0'); ?></span>	

					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto1"  ><?php 
						$this->pnt('satisfaccion_consepto1','Employees'); 
						?></h6>
					 </div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="counter">
					   <span class="jmy_web_div quantity-counter2 highlight" data-page="inicio" id="satisfaccion_no2"><?php 
						$this->pnt('satisfaccion_no2','0'); ?></span>

					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto2"  ><?php 
						$this->pnt('satisfaccion_consepto2','Location'); 
						?></h6>
					 </div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="counter">
					   <span class="jmy_web_div quantity-counte3 highlight" data-page="inicio" id="satisfaccion_no3"><?php 
						$this->pnt('satisfaccion_no3','0'); ?></span>

					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto3"  ><?php 
						$this->pnt('satisfaccion_consepto3',' Satisfaction'); 
						?></h6>
					 </div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="counter">
					   <span class="jmy_web_div quantity-counter4 highlight" data-page="inicio" id="satisfaccion_no4"><?php 
						$this->pnt('satisfaccion_no4','0'); ?></span>
					   <h6 class="counter-details jmy_web_div" data-page="inicio" id="satisfaccion_consepto4"  ><?php 
						$this->pnt('satisfaccion_consepto4','Happy Customers'); 
						?></h6>
					 </div>
				</div>

			</div>
		</div>
	</div><!-- / CONTAINER -->
</div><!-- / FUNFACTS -->



<!-- DIFFERENT SERVICES -->
<section class="different-services text-center parallax">
	<div class="container">
		<div class="heading animate bounceIn">
			<h1 class="color-white jmy_web_div" data-page="inicio" id="amamos_titulo"  ><?php 
				$this->pnt('amamos_titulo','We Love What We Do'); 
				?></h1>
			<p class="color-white jmy_web_div" data-page="inicio" id="amamos_texto"  ><?php 
				$this->pnt('amamos_texto','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
				?></p>
		</div>
	</div>
</section><!-- / DIFFERENT SERVICES -->



<!-- WHO IS BEHIND -->
<section class="bg-blue">
	<div class="container">
		<div class="services text-center">

			<div class="jmy_web_contador" data-page="inicio" id="amamos_numero_de_carrusel" data-value="<?php
        $this->pnt('amamos_numero_de_carrusel','3'); 
        ?>" data-titulo="Inica el número de páginas a mostrar"></div>



			<div class="three-items-carousel owl-carousel">

 			<?php 
                 $paginas = $this->pnt('amamos_numero_de_carrusel','3',["return"=>true]); 
                $contador = 0;
                for($i=0;$i<$paginas;$i++){ ?>

                  <div class="<?php $this->pnt('slider_cat_'.$i,''); ?> jmy_web_slider" id="grupo_slider_2_<?php echo $i;?>" data-page="inicio" data-marco="service-box" data-var='[{"type":"text","id":"amamos_slide<?php echo $i;?>_icono","placeholder":"icon-img-#(#1-#10)"},{"type":"text","id":"amamos_slide<?php echo $i;?>_titulo","placeholder":"TituloH3"},{"type":"text","id":"amamos_slide<?php echo $i;?>_text","placeholder":"parrafo"}]'>


					<div class="service-box">
						<i class="<?php 
						$this->pnt('amamos_slide'.$i.'_icono','icon-img-'.($i+1)); 
						?>"></i>
						<h4 data-page="inicio" id="amamos_slide<?php echo $i;?>_titulo"><?php 
						$this->pnt('amamos_slide'.$i.'_titulo','Advisor'); 
						?></h4>

						<p data-page="inicio" id="amamos_slide<?php echo $i;?>_text"><?php 
						$this->pnt('amamos_slide'.$i.'_text','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
						?></p>
					</div>


				</div>

				<?php } ?>

			</div>
		</div>
		<div class="row">
			<div class="col-md-6 animate fadeInLeft">
				<ul class="image-list-classic ">
					<li  >

					  <div class="col-md-12 text-center jmy_web_slider" id="bro_imagen_cont" data-page="inicio" data-marco="bro_imagen_cont" data-var='[{"type":"imagen","id":"bro_imagen","url":"<?php $this->url_templet(); ?>images/behind.jpg"}]' >

					  	<img data-no-retina height="60" alt="" title="" id="bro_imagen" src="<?php $this->pnt('bro_imagen',$this->url_templet(['return'=>true]).'images/behind.jpg'); ?>"/>
					  </div>
					</li>

					<li><div class="col-md-12 text-center jmy_web_slider" id="bro_imagen_cont2" data-page="inicio" data-marco="bro_imagen_cont2" data-button="down" data-var='[{"type":"imagen","id":"bro_imagen2","url":"<?php $this->url_templet(); ?>images/behind2.jpg"}]' >

					  	<img data-no-retina height="60" alt="" title="" id="bro_imagen2" src="<?php $this->pnt('bro_imagen2',$this->url_templet(['return'=>true]).'images/behind2.jpg'); ?>"/>
					  </div></li>
				</ul>
			</div>
			<div class="col-md-6 animate fadeInRight">
				<h3 class="jmy_web_div" data-page="inicio" id="brok_titulo"><?php 
					$this->pnt('brok_titulo','Who is behind the best brok'); 
					?></h3>
				<p class="jmy_web_div" data-page="inicio" id="brok_texto"><?php 
					$this->pnt('brok_texto','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
				?></p>
				
				

			<div class="jmy_web_contador" data-page="inicio" id="brok_numero_de_carrusel" data-value="<?php
			        $this->pnt('brok_numero_de_carrusel','3'); 
			        ?>" data-titulo="Inica el número de páginas a mostrar"></div>


				<div id="accordion" role="tablist" aria-multiselectable="true">

					<?php 
            	     $paginas = $this->pnt('brok_numero_de_carrusel','3',["return"=>true]); 
              		 $contador = 0;
                for($i=0;$i<$paginas;$i++){ ?>


					<div class="toggle">
						<div class="toggle-heading" role="tab">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="<?php $this->url_templet(); ?>#collapseOne<?php echo $i;?>" aria-expanded="true" aria-controls="collapseOne<?php echo $i;?>">
							  <i class="fa fa-plus"></i> <div class="jmy_web_div" data-page="inicio" data-editor="no" id="brok_<?php echo $i;?>_titulo"><?php 
							$this->pnt('brok_'.$i.'_titulo','What is do i have to tell you a few lorem?'); 
							?></div></a>
						</div>
						<div id="collapseOne<?php echo $i;?>" class="panel-collapse collapse <?php echo ($i==1)?'in':'';?>" role="tabpanel">
							<div class="toggle-body">
								<p class="jmy_web_div" data-page="inicio" data-editor="no" id="brok_<?php echo $i;?>_texto"><?php 
							$this->pnt('brok_'.$i.'_texto','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
							?></p>
							</div>
						</div>
					</div>

					<?php } ?>



				</div>
			</div>
		</div>
	</div>
</section><!-- / WHO IS BEHIND -->




<div class="contact-us-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h4 class="jmy_web_div animate fadeInLeft" data-page="inicio" id="deseo_duda_asesores_text"><?php 
					$this->pnt('deseo_duda_asesores_text','Si tiene algún deseo o alguna pregunta ... Estamos disponibles'); 
					?></h4>
			</div>
			<div class="col-md-3">
				<div class="text-right">
					<a href="<?php $this->url_inicio(); ?>" class="btn btn-primary get-in-touch animate fadeInRight" data-text="Contactanos "><i class="icon-telephone114"></i>Contactanos</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- MEET OUR ADVISORS -->
<section class="meet-our-advisors">
	<div class="container">
		<div class="heading text-center animate bounceIn">
			<h2 class="jmy_web_div" data-page="inicio" id="nuestros_asesores_titulo"><?php 
					$this->pnt('nuestros_asesores_titulo','Conoce a nuestros asesores'); 
					?></h2>
			 <p class="jmy_web_div" data-page="inicio" id="nuestros_asesores_txt"  ><?php 
				$this->pnt('nuestros_asesores_txt','Lorem ipsum dolor sit amet, Let it it floats back to you.'); 
				?></p>
		</div>

		<div class="jmy_web_contador" data-page="inicio" id="numero_carrusel_nuestros" data-value="<?php
			        $this->pnt('numero_carrusel_nuestros','3'); 
			        ?>" data-titulo="Inica el número de páginas a mostrar"></div>
		
		<div class="single-item-carousel owl-carousel classic-arrows">
			
			<?php 
            	     $paginas = $this->pnt('numero_carrusel_nuestros','3',["return"=>true]); 
              		 $contador = 0;
                		for($i=0;$i<$paginas;$i++){ ?>


			<div class="row">

				<div class="col-md-1" >
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div> 
				<div class="col-md-5 animate fadeInLeft <?php $this->pnt('slider_caasesor_'.$i,''); ?> jmy_web_slider" id="nuestros_asesores_img<?php echo $i; ?>" data-page="inicio" data-marco="works-container"  data-var='[{"type":"imagen","id":"nuestros_asesores_i<?php echo $i; ?>_imagen","url":"<?php $this->url_templet(); ?>images/meet-our-advisors-img1.jpg"},{"type":"text","id":"nuestros_asesores<?php echo $i;?>_titulo","placeholder":"TituloH3"},{"type":"text","id":"nuestros_asesores<?php echo $i;?>_text","placeholder":"parrafo"},{"type":"text","id":"nuestros_asesores<?php echo $i;?>_text2","placeholder":"parrafo2"}]'>


					<img id="nuestros_asesores_i<?php echo $i; ?>_imagen" src="<?php $this->pnt('nuestros_asesores_i'.$i.'_imagen',$this->url_templet(['return'=>true]).'images/meet-our-advisors-img1.jpg'); ?>"/></div>

				<div class="col-md-6 animate fadeInRight">
					<div class="meet-advisors-content">
						<h3 class="" data-page="inicio" id="nuestros_asesores<?php echo $i; ?>_titulo"><?php 
						$this->pnt('nuestros_asesores'.$i.'_titulo','David Fernando<span><br>Founder & CEO</span>'); ?></h3>

						<p class="" data-page="inicio" id="nuestros_asesores<?php echo $i; ?>_text"><?php 
						$this->pnt('nuestros_asesores'.$i.'_text','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
						?></p>

						<p class="" data-page="inicio" id="nuestros_asesores<?php echo $i; ?>_text2"><?php 
						$this->pnt('nuestros_asesores'.$i.'_text2','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. Love life’s sweetest reward Let it flow it floats back to you.'); 
						?></p>
					</div>
				</div>

				</div>


			

			<?php } ?>
		</div>
	</div>
</section><!-- / MEET OUR ADVISORS -->


<!-- TESTIMONIALS -->
<section class="bg-blue">
	<div class="container">
		<div class="heading text-center animate bounceIn">
			<h2 class="jmy_web_div" data-page="inicio" data-editor="no" id="happy_coustomer_titu"><?php 
							$this->pnt('happy_coustomer_titu','Happy Customers'); 
							?></h2>
			<p class="jmy_web_div" data-page="inicio" data-editor="no" id="happy_coustomer_tex"><?php 
							$this->pnt('happy_coustomer_tex','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.'); 
			?></p>
		</div>


		<div class="row">
			<div class=" jmy_web_contador" data-page="inicio" id="numero_carrusel_happy" data-value="<?php
        $this->pnt('numero_carrusel_happy','3'); 
        ?>" data-titulo="Inica el número de páginas a mostrar"></div>			
				<div class="single-item-carousel owl-carousel classic-arrows">
					
					<?php 
		            	     $paginas = $this->pnt('numero_carrusel_happy','3',["return"=>true]); 
		              		 $contador = 0;
		                		for($i=0;$i<$paginas;$i++){ 
		             ?>


					<div class="row">

						
						<div class="col-md-1">	</div>
						<div class="col-md-5">
							<div class="testimonial animate fadeInUp<?php $this->pnt('slider_happy_'.$i,''); ?> jmy_web_slider" id="happy_img<?php echo $i; ?>" data-page="inicio" data-marco="works-container"  data-var='[
								{"type":"imagen","id":"happy_i<?php echo $i; ?>_imagen","url":"<?php $this->url_templet(); ?>images/review-author-img.png"},
								{"type":"text","id":"happy<?php echo $i;?>_titulo","placeholder":"Nombre"},
								{"type":"text","id":"happy<?php echo $i;?>_text","placeholder":"parrafo"}]'>

								<div class="testimonial-content">
									<p class="" data-page="inicio" id="happy<?php echo $i; ?>_text"><?php 
								$this->pnt('happy'.$i.'_text','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.'); ?></p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="testimonials-author">
											<img class="img-circle" id="happy<?php echo $i; ?>_imagen" src="<?php $this->pnt('happy'.$i.'_imagen',$this->url_templet(['return'=>true]).'images/review-author-img.png'); ?>"/>

											<p class="" data-page="inicio" id="happy<?php echo $i; ?>_titulo"><?php 
								$this->pnt('happy'.$i.'_titulo','Boris Hunt'); ?><span>(Sales Agent)</span></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="text-right">
											<ul class="rating">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div data-delay="100" class="testimonial animate fadeInUp<?php $this->pnt('slider_happy_b'.$i,''); ?> jmy_web_slider" id="happy_img<?php echo $i; ?>_b" data-page="inicio" data-marco="works-container"  data-var='[
								{"type":"imagen","id":"happy_i<?php echo $i; ?>_imagen_b","url":"<?php $this->url_templet(); ?>images/review-author-img.png"},
								{"type":"text","id":"happy<?php echo $i;?>_titulo_b","placeholder":"Nombre"},
								{"type":"text","id":"happy<?php echo $i;?>_text_b","placeholder":"parrafo"}]'>

								<div class="testimonial-content">
									<p class="" data-page="inicio" id="happy<?php echo $i; ?>_text_b"><?php 
								$this->pnt('happy'.$i.'_text_b','Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.'); ?></p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="testimonials-author">
											<img class="img-circle" id="happy<?php echo $i; ?>_imagen_b" src="<?php $this->pnt('happy'.$i.'_imagen_b',$this->url_templet(['return'=>true]).'images/review-author-img.png'); ?>"/>

											<p class="" data-page="inicio" id="happy<?php echo $i; ?>_titulo_b"><?php 
								$this->pnt('happy'.$i.'_titulo_b','Boris Hunt'); ?><span>(Sales Agent)</span></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="text-right">
											<ul class="rating">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

						
<?php } ?>

				</div>


					

				
			</div>
			
			
		<?php /*  <div class="text-center">
			<a class="btn btn-bordered-dark cd-see-all iconic animate fadeInUp" data-delay="200" href="javascript:void(0);" data-text="View All"><i class="icon-img-grid"></i>View All</a>
		</div> */ ?>
	</div>
	
	<div class="cd-testimonials-all">
		<div class="cd-testimonials-all-wrapper">
			<ul>
				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="cd-testimonials-item">
					<div class="testimonial">
						<div class="testimonial-content">
							<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore Love life’s sweetest.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="testimonials-author">
									<img class="img-circle" src="images/review-author-img.png" alt="">
									<p>Boris Hunt<span>(Sales Agent)</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>				
			</ul>
		</div>

		<a href="javascript:void(0);" class="close-btn">Cerrar</a>
		
	</div>
	
</section><!-- / BENIFITS -->



<!-- REQUEST A CALLBACK -->
<section>
	<div class="container">
		<div class="request-a-callback clearfix animate fadeInUp">
			<div class="request-a-callback-content">
				<h3>Request a Call Back</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut.</p>
				<p><strong>For Investment:</strong> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem or phone +11 987 654 3210 ipsum quia dolor sit amet, consectetur.</p>
			</div>
			<div class="request-a-callback-form">
				<form>

					<input type="text" class="jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Nombre" placeholder="Your Name" required>

					<input type="text" class="jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Email" placeholder="Email Address" required>

					<input type="text" class="jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Teléfono" placeholder="Phone Number" >

					<div class="styled-select">
						<select class="jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Opciones" >
							<option>I would like to discuss:</option>
							<option>Personal Finance</option>
							<option>Stock trading</option>
							<option>Retirement</option>
							<option>Other</option>
						</select>
					</div>

					<button class="btn btn-primary jmy_web_contacto_enviar" data-formulario="contacto_inicio" id="contacto_inicio">Submit</button>

				</form>
			</div>
		</div>
	</div>
</section>
<!-- / REQUEST A CALLBACK -->

