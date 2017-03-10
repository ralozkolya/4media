<div class="slide" id="contact">
	<div class="info">
		<div class="header-section">
			<h2 class="light-green"><?php echo lang('what_are_you_waiting_for'); ?></h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1 address">
					<div>
						<div class="fa-container">
							<span class="fa fa-map-marker"></span>
						</div>
						<?php echo lang('address'); ?>
					</div>
					<div>
						<div class="fa-container">
							<span class="fa fa-phone"></span>
						</div>
						<?php echo lang('phone'); ?>
					</div>
					<div>
						<a class="unstyled" target="_blank" href="https://www.facebook.com/4MEDIA.GE/">
							<div class="social">
								<span class="fa fa-facebook"></span>
							</div>
						</a>
						<a class="unstyled" target="_blank" href="#">
							<div class="social">
								<span class="fa fa-twitter"></span>
							</div>
						</a>
						<a class="unstyled" target="_blank" href="#">
							<div class="social">
								<span class="fa fa-instagram"></span>
							</div>
						</a>
						<?php echo lang('for_more_contact'); ?>
					</div>
				</div>
				<div class="col-sm-7">
					<form method="post" class="message-form">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input
										class="form-control"
										type="text"
										name="name"
										placeholder="<?php echo lang('name'); ?>">
								</div>
								<div class="form-group">
									<input
										class="form-control"
										type="email"
										name="email"
										placeholder="<?php echo lang('email'); ?>">
								</div>
								<div class="form-group">
									<input
										class="form-control"
										type="text"
										name="subject"
										placeholder="<?php echo lang('subject'); ?>">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<textarea
										class="form-control"
										name="message"
										placeholder="<?php echo lang('message'); ?>"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-block btn-primary"
										value="<?php echo lang('send'); ?>">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
		<div class="contact-logo">
			<img src="<?php echo static_url('img/logo_contact.png'); ?>" alt="Logo">
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.5145554166083!2d44.750522315436505!3d41.73099297923413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472cba6dc8e73%3A0xc4dfbd615f1650db!2s4MEDIA!5e0!3m2!1ska!2sge!4v1489146190513" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="map-overlay"></div>
	</div>
</div>