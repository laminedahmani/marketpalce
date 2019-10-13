


<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-6 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">A propos de nous</h3>
								<p>Grossista est le portail d'achat vente en ligne pour entreprises et professionnels Et les petits entrepreneurs  leader en Algérie et dans tout le monde.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Localisation ALGERIA-Alger</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>0791 52 52 80</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>contact@grossista.com</a></li>
								</ul>
							</div>
						</div>

						<!-- <div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories POPULAIRE</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div> -->

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="{{url('apropos')}}">APROPOS DE NOUS</a></li>
									<li><a href="{{url('contact')}}">CONTACER NOUS</a></li>
									
									
									<li><a href="{{url('terme')}}">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="{{url('connexion')}}">MON COMPTE</a></li>
									<li><a href="{{url('pubs')}}">PUBS</a></li>
									<li><a href="{{url('pack')}}">PACK BOUTIQUE</a></li>
									
									<li><a href="{{url('contact')}}">aide</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
	<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<!-- <ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul> -->
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout les drois reserver Grossista.com 
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->


<script>
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});
</script>
		<!-- jQuery Plugins -->
		<script src="{{url('js/bootstrap.min.js')}}"></script>
		<script src="{{url('js/jquery.min.js')}}"></script>
		
		<script src="{{url('js/slick.min.js')}}"></script>
		<script src="{{url('js/nouislider.min.js')}}"></script>
		<script src="{{url('js/jquery.zoom.min.js')}}"></script>
		<script src="{{url('js/main.js')}}"></script>
