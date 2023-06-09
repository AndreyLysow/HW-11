<?php session_start();
include_once('php/module_fun.php');


function hello(){
$h = date('G');
  if($h>=5 && $h<=11)  {
    $strResult='Добре утро, ';
  }  else if($h>=12 && $h<=18)  {
    $strResult='Добрый день, ';
  }  else  {
    $strResult='Добрый вечер,  ';
  }

return $strResult;
  }
?>
<!DOCTYPE html>
<html class="no-js" lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SPARO</title>
        <meta name="description" content="СПА КРАСНОЯРСК">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins.css" />
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
		 <nav class="skillbar" id="main-nav">
            <ul>
                <li><a href="#home"><span>ГЛАВНАЯ</span></a></li>
                <li><a href="#about"><span>О НАС</span></a></li>
				<li><a target="_blank" href="price.php"><span>ПРЕЙСКУРАНТ</span>
	<i>
		<?php if(!getCurrentUser()) {
        echo '<span>Авторизованные пользователи получают доступ к специальным предложениям и заказу услуг онлайн</span>';
     } else {
        echo '<span>Специальное предложение и только для Вас - скидка в 3% в течение ближайших суток. До конца акции: <code id="timer"></code></span><script src="assets/js/timer.js"></script>';
    } ?>
</i>
	</a>
</li>

                <li><a href="#contact"><span>КОНТАКТЫ</span></a></li>
				<?php if (!getCurrentUser()) { ?>
      <li><a href="login.php" id="authoriz"><span>ВОЙТИ</span></a></li>
    <?php } else { ?>
      <li><a href="php/logout.php" id="authoriz"><span>ВЫЙТИ</span></a></li>
    <?php } ?>
            </ul>
            <a href="#0" class="cd-close-menu">Close<span></span></a>
        </nav>
		


        <header id="home" class="home home-main-content">
			<div class="container">
				<div class="row">
					<div class="div-menu">
					<header class="cd-header">
						<div class="div-menu">
						<div id="cd-logo">
							<a href="index.html"><img src="assets/images/logo2.png" alt="Logo"><img src="assets/images/logo.png" alt="Logo"></a>
						  </div>

						  <?php if(!getCurrentUser()){
  echo '
    <div class="dropdown-content"></div>';
} else {
  echo '<div class="header-text">'.hello().getCurrentUser() .'!</div>';
  echo '<span class="birthday-text">';
  include_once('php/birthdayHandle.php');
  echo '</span>';
}
?>



						  <a class="cd-menu-trigger" href="#main-nav"><span></span></a>	
						</header>
					</div> 

					<div class="home-wrapper">
						<div class="col-sm-6 col-xs-12">
							<div class="home-content">
								<h1><strong>SPA</strong> - САЛОН <strong>Р</strong>айский <strong>О</strong>азис</h1>
								<p>Когда вы входите в наш салон, вы сразу почувствуете атмосферу уюта и релаксации. Мы сделали все возможное, чтобы создать идеальное место для того, чтобы вы могли отдохнуть от повседневной суеты.</p>
								<div class="more">
									<a  href="#">больше о салоне</a>
									<span id="timer"></span>
								</div>
							</div>
						</div>
							
						<div class="col-sm-6 col-xs-12">
							<div class="home-photo">
								<img src="assets/images/new.webp" alt="mainphoto" />
							</div>
						</div>
							
					</div>
				</div>
			</div>
			
        </header>

		

        <!-- Sections -->
        <section id="about" class="about sections">
            <div class="container">
                <!-- Example row of columns -->
				<div class="heading-content text-center">
					<h3>О нас</h3>
					<img src="assets/images/separator.png" alt="Separator" />
				</div>
                <div class="row">
                    <div class="about-wrapper">
					
                    	<div class="col-sm-4 col-xs-12">
                    		<div class="about-content">
                    			<h5>Массаж<span><i class="fa fa-long-arrow-right"></i></span></h5>
                    			<p>Массаж всего тела с использованием эфирных масел: это расслабляющая процедура, которая помогает снять стресс и напряжение, улучшить кровообращение и общее состояние кожи. Во время массажа специалисты "Райского оазиса" используют натуральные эфирные масла, которые помогают улучшить настроение и дать чувство глубокой релаксации.</p>
                    		</div>
                    	</div>
						
						<div class="col-sm-4 col-xs-12">
                    		<div class="about-content">
                    			<h5>Парафинотерапия<span><i class="fa fa-long-arrow-right"></i></span></h5>
                    			<p>Парафинотерапия для рук и ног: это уходовая процедура, которая помогает увлажнить и смягчить кожу рук и ног, а также укрепить ногти. Во время процедуры ваши руки и ноги погружаются в теплый парафин, который способствует улучшению кровообращения и стимулирует процессы восстановления кожи.</p>
                    		</div>
                    	</div>
						
						<div class="col-sm-4 col-xs-12">
                    		<div class="about-content">
                    			<h5>Аромотерапия<span><i class="fa fa-long-arrow-right"></i></span></h5>
                    			<p>Ароматерапия для лица: это процедура, которая помогает улучшить состояние кожи, разгладить морщины и дать ей здоровый и свежий вид. Во время процедуры специалисты "Райского оазиса" используют натуральные эфирные масла и другие растительные экстракты, которые помогают очистить кожу и увлажнить ее, а также создать чувство релаксации и благополучия.</p>
                    		</div>
                    	</div>
						
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

		<!-- Sections -->
        <section id="features" class="features sections">
            <div class="container">
				<div class="heading-content text-center">
					<h3>Почему нас выбирают</h3>
					<img src="assets/images/separator.png" alt="separator" />
				</div>
                <!-- Example row of columns -->
                <div class="row">
                    <div class="features-wrapper">
					
                    	
							<div class="col-sm-8 col-sm-offset-2 col-xs-12">
							
								<div class="main-features">
									<div class="col-sm-3 col-xs-12">
										<div class="features-icon">
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<div class="col-sm-9 col-xs-12">	
										<div class="features-details">
											<h4><strong>Расслабление и улучшение здоровья</strong></h4>
											<p>Наш спа-салон предлагает массажи, обертывания, ароматерапию и другие услуги, которые помогают расслабиться и снизить стресс. Эти процедуры также могут улучшить кровообращение, уменьшить боли в мышцах и суставах, а также улучшить общее здоровье.</p>
										</div>
									</div>	
								</div>
						
								<div class="main-features">
									<div class="col-sm-3 col-xs-12">
										<div class="features-icon">
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<div class="col-sm-9 col-xs-12">	
										<div class="features-details">
											<h4><strong>Улучшение внешнего вида</strong></h4>
											<p>Наш спа-салон предлает услуги, которые помогают ухаживать за кожей, волосами и ногтями. Они могут помочь устранить пигментацию, пятна, морщины и другие недостатки кожи, а также сделать волосы и ногти более здоровыми и красивыми</p>
										</div>
									</div>	
								</div>
						
								<div class="main-features">
									<div class="col-sm-3 col-xs-12">
										<div class="features-icon">
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<div class="col-sm-9 col-xs-12">	
										<div class="features-details">
											<h4><strong>Высококвалифицированный персонал</strong></h4>
											<p>Наш персонал проходит постоянное обучение и имеет большой опыт работы в индустрии красоты и здоровья. Мы гарантируем, что наши специалисты обеспечат вам качественное обслуживание и помогут вам достичь желаемых результатов</p>
										</div>
									</div>	
								</div>
	
								<div class="main-features">
									<div class="col-sm-3 col-xs-12">
										<div class="features-icon">
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<div class="col-sm-9 col-xs-12">	
										<div class="features-details">
											<h4><strong>Разнообразие услуг</strong></h4>
											<p>Наш спа салон предлагает широкий спектр услуг, начиная от массажа и заканчивая процедурами по уходу за кожей и волосами. Вы можете выбрать любую процедуру, которая подходит именно вам, и наш персонал поможет вам выбрать лучшую программу для вашей красоты и здоровья</p>
										</div>
									</div>	
								</div>

								<div class="main-features">
									<div class="col-sm-3 col-xs-12">
										<div class="features-icon">
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<div class="col-sm-9 col-xs-12">	
										<div class="features-details">
											<h4><strong>Уютная атмосфера</strong></h4>
											<p>Наш спа салон создан, чтобы вы чувствовали себя комфортно и расслабленно. Мы обеспечиваем уютную атмосферу, чтобы вы могли отдохнуть от повседневной суеты и насладиться нашими услугами</p>
										</div>
									</div>	
								</div>

								<div class="main-features">
									<div class="col-sm-3 col-xs-12">
										<div class="features-icon">
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<div class="col-sm-9 col-xs-12">	
										<div class="features-details">
											<h4><strong>Индивидуальный подход</strong></h4>
											<p>Мы понимаем, что каждый клиент уникален, поэтому мы предлагаем индивидуальный подход к каждому нашему гостю. Наши специалисты обсудят с вами ваши индивидуальные потребности и пожелания, чтобы обеспечить наиболее эффективные результаты для вас</p>
										</div>
									</div>	
								</div>
							</div>

                    </div>
                </div>
            </div> <!-- /container -->       
        </section>
		
		<!-- Sections -->
        <section id="achivement" class="achivement">
			<div class="overlay sections">
				<div class="container">
					<!-- Example row of columns -->
					<div class="row">
						<div class="achivement-wrapper">
							<div class="col-sm-8 col-xs-12">
								<div class="achivement-details">
									<h2>Великолепный бассейн</h2>
									<p>Бассейн в вашем спа-салоне уже сам по себе является замечательным местом для релаксации и здорового отдыха. Но, если вы добавите к нему спа-услуги, то это сделает ваш опыт еще более приятным и полезным для здоровья</p>
									<div class="more"><a href="#">больше</a></div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /container -->
			</div>		
        </section>
		
		<section id="counterup" class="counterup lightbg sections">
			<div class="container">
				<div class="row">
						<div class="counterup-wrapper">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="counterup">
									<div class="counterup-photo">
										<img src="assets/images/counterup/1.png" alt="counterup" />
									</div>
									<div class="counterup-content">
										<h5>более 1000</h5>
										<h6>Довольных клиентов</h6>
									</div>
								</div>
							</div>
							
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="counterup">
									<div class="counterup-photo">
										<img src="assets/images/counterup/2.png" alt="counterup" />
									</div>
									<div class="counterup-content">
										<h5>более 10000</h5>
										<h6>Часов релакса подаренного клиентам</h6>
									</div>
								</div>
							</div>
							
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="counterup">
									<div class="counterup-photo">
										<img src="assets/images/counterup/3.png" alt="counterup" />
									</div>
									<div class="counterup-content">
										<h5>более 100</h5>
										<h6>услуг для клиентов</h6>
									</div>
								</div>
							</div>
							
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="counterup">
									<div class="counterup-photo">
										<img src="assets/images/counterup/4.png" alt="counterup" />
									</div>
									<div class="counterup-content">
										<h5>более 10000</h5>
										<h6>чашек кофе сваренного клиентам</h6>
									</div>
								</div>
							</div>
							
						</div>
					</div>
			</div>
		</section>

		 <!-- Sections -->
        <section id="video" class="video">
            <div class="overlay2 sections">
                <div class="container text-center">
                    <!-- Example row of columns -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                            <div class="video-content">

                                <a href="Video/spa.mp4" class="youtube-media"><i class="fa fa-play"></i></a>
		                            </div>
                        </div>
                    </div>
                </div> <!-- /container -->
            </div>		
        </section>
		
		
		
		
		
		<!-- Sections -->
        <section id="testimonial" class="testimonial">
            <div class="container text-center">

                <!-- Example row of columns -->
                <div class="row">

                    <div class="col-sm-12 col-xs-12">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">

                                <div class="item active">

                                    <div class="col-sm-5 col-xs-12">
                                        <div class="testimonial-photo">
                                            <img src="assets/images/1m.jpeg" alt="testimonial" />
                                        </div>
                                    </div>

                                    <div class="col-sm-7 col-xs-12">
                                        <div class="testimonial-content">
											<div class="testimonial-quote">
												<i class="fa fa-quote-left"></i> 
											</div>
											<div class="testimonial-details">
												<p>"Райский оазис" обладает высоким уровнем профессионализма и качества услуг. Все массажисты и косметологи имеют высокую квалификацию и умение работать с клиентами, учитывая индивидуальные потребности и пожелания каждого. </p>
												<h5>Вонгсват Сучарт</h5>
												<h6>Врач высшей категории, Бангкок, Таиланд</h6>
											</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="item">

                                    <div class="col-sm-5 col-xs-12">
                                        <div class="testimonial-photo">
                                            <img src="assets/images/2p.jpeg" alt="testimonial" />
                                        </div>
                                    </div>

                                    <div class="col-sm-7 col-xs-12">
                                        <div class="testimonial-content">
											<div class="testimonial-quote">
												<i class="fa fa-quote-left"></i> 
											</div>
											<div class="testimonial-details">
												<p>Парафинотерапия - это эффективный и безопасный метод физиотерапии, который позволяет достичь хороших результатов при лечении различных заболеваний опорно-двигательного аппарата</p>
												<h5>Иванова Анна Петровна</h5>
												<h6>Врач физиотерапевт высшей категорииr</h6>
											</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="item">

                                    <div class="col-sm-5 col-xs-12">
                                        <div class="testimonial-photo">
                                            <img src="assets/images/3a.jpeg" alt="testimonial" />
                                        </div>
                                    </div>

                                    <div class="col-sm-7 col-xs-12">
                                        <div class="testimonial-content">
											<div class="testimonial-quote">
												<i class="fa fa-quote-left"></i> 
											</div>
											<div class="testimonial-details">
												<p>Ароматерапия - это эффективный метод физиотерапии, который использует натуральные эфирные масла для лечения различных заболеваний и улучшения физического и психического состояния пациента</p>
												<h5>Смирнова Елена Игоревна</h5>
												<h6>Аромотерапевт</h6>
											</div>
                                        </div>
                                    </div>

                                </div>


                            </div>


                        </div>


                    </div>

                </div>	


            </div> <!-- /container -->       
        </section>
		

		
		<!-- Sections -->
        <section id="thank-you" class="thank-you lightbg sections">
            <div class="container">
			
				<div class="heading-content text-center">
					<h3>Благодарим за отзыв!</h3>
				</div>
			
                <!-- Example row of columns -->
				<div class="row">
					<div class="wrapper">
						<div class="col-sm-4 col-sm-offset-4 col-xs-12">
							<div class="thank-you-form">
								<form action="" method="post">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Имя">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="email">
									</div>
									
									<div class="form-group">
										<textarea class="form-control" rows="1" placeholder="Сообщение"></textarea>
									</div>

									<div class="more text-center">
										<a type="submit" href="#">отправить</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                
				
            </div> <!-- /container -->       
        </section>
		
		
		<!-- Sections -->
        <section id="contact" class="contact sections">
		
			<div class="heading-content text-center">
				<h3>Контакты</h3>
				<img src="assets/images/separator.png" alt="separator" />
				<p>Вы можете связаться с нами по телефону или с помощью мессенджеров. Наша команда готова ответить на любые вопросы и предоставить дополнительную информацию о наших услугах. Мы стремимся обеспечить нашим клиентам высококачественное обслуживание, поэтому не стесняйтесь обращаться к нам в любое время. Мы всегда рады помочь. Спасибо за ваш интерес к нашему салону! </p>
			</div>
			
            <div class="container">
			
                <!-- Example row of columns -->
                <div class="row">
					<div class="col-sm-10 col-sm-offset-1 col-xs-12">
						<div class="contact-wrapper text-center">
							<div class="col-sm-4 col-xs-12">
								<div class="contact-details">
									<i class="fa fa-paper-plane"></i>
									<h5>@sparo</h5>
								</div>
							</div>
							
							<div class="col-sm-4 col-xs-12">
								<div class="contact-details">
									<i class="fa fa-map-marker"></i>
									<h5>Россия, Красноярск, пр. Мира, 10</h5>
								</div>
							</div>
							
							<div class="col-sm-4 col-xs-12">
								<div class="contact-details">
									<i class="fa fa-phone"></i>
									<h5>+7 391 222-35-55</h5>
								</div>
							</div>
							
						</div>
					</div>	
                </div>
            </div> <!-- /container -->       
        </section>
		
		<div class="scroll-top">

            <div class="scrollup">
                <i class="fa fa-angle-double-up"></i>
            </div>

        </div>
	
        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
            	<div class="row">
            		<div class="wrapper">
            			<div class="col-sm-6 col-sm-offset-3 col-xs-12">
            				<div class="footer-item text-center">
								<div class="logo">
									<img src="assets/images/logo.png" alt="Logo" />
								</div>
								
								<div class="social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-vk"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</div>
											
							</div>
            			</div>
            		</div>
            	</div>
            </div>
        </footer>
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/main.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/timer.js"></script>
    </body>
</html>
