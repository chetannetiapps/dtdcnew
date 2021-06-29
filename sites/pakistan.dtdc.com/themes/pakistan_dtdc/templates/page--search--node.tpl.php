
<script type="text/javascript">
jQuery(document).ready(function($){
	$("#edit-basic").addClass("col-md-6");
});
</script>


<!----------------------------------------Header block-------------------------------------------------------------->
<div class="dd-home">
	<header>
		<div class="container-fluid">
			<div class="row ">
	 		 <div class="container">
	 			 <div class="col-lg-12 col-md-12">
	 				 <div class="row">
						 <nav role="navigation" class="navbar navbar-default dd-nav pull-left">
			        <!-- Brand and toggle get grouped for better mobile display -->
			        <div class="navbar-header">
			            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			        </div>
			        <!-- Collection of nav links, forms, and other content for toggling -->
			        <div id="navbarCollapse" class="collapse navbar-collapse">
					<div class="row top_row">
			            <div class="dropdown">
										<button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><span aria-hidden="true"></span> Choose Country <span class="caret"></span></button>
										<ul class="dropdown-menu">
						<li class="gl"><a href="http://www.dtdc.com/"><span class="glyphicon glyphicon-globe">&nbsp;</span>Global</a></li>
							<li class="in"><a href="http://dtdc.in/"><span>&nbsp;</span>India</a></li>
			                <li class="au"><a href="http://dtdcaustralia.com.au/"><span>&nbsp;</span>Australia</a></li>
			                <li class="bl"><a href="http://bangladesh.dtdc.com/"><span>&nbsp;</span>Bangladesh</a></li>
			                <li class="ca"><a href="http://canada.dtdc.com/"><span>&nbsp;</span>Canada</a></li>
			                <li class="ch"><a href="http://china.dtdc.com/"><span>&nbsp;</span>China</a></li>
			                <li class="hk"><a href="http://hongkong.dtdc.com/"><span>&nbsp;</span>Hongkong</a></li>
			                <li class="kenya"><a href="http://Kenya.dtdc.com/"><span>&nbsp;</span>Kenya</a></li>
			                <!-- <li class="malaysia"><a href="http://malaysia.dtdc.com/"><span>&nbsp;</span>Malaysia</a></li> -->

			                <li class="ne"><a href="http://nepal.dtdc.com/"><span>&nbsp;</span>Nepal</a></li>
                   <!--   <li class="nz"><a href="http://nz.dtdc.com/"><span>&nbsp;</span>New Zealand</a></li> -->
											<li class="pakistan"><a href="http://pakistan.dtdc.com/"><span>&nbsp;</span>Pakistan</a></li>
			                <li class="sg"><a href="http://singapore.dtdc.com/"><span>&nbsp;</span>Singapore</a></li>
			                <li class="sl"><a href="http://srilanka.dtdc.com/"><span>&nbsp;</span>Sri Lanka</a></li>
			                <li class="du"><a href="http://uae.dtdc.com/"><span>&nbsp;</span>United Arab Emirates</a></li>
			                <li class="uk"><a href="http://uk.dtdc.com/"><span>&nbsp;</span>United Kingdom</a></li>
			                <li class="us"><a href="http://usa.dtdc.com/"><span>&nbsp;</span>United States</a></li>
			              </ul>
			            </div>

                           <?php  $block = module_invoke('search', 'block_view', 'form');
                                  print render($block); ?>


                                    <!-- <form class="navbar-form navbar-left" role="search">
                                      <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                      </div>
                                      <button type="submit" class="btn btn-default" style="margin-left: -5px;"><span class="glyphicon glyphicon-search"></span></button>
                                    </form> -->



			          </div>
								<!---menu block --------->

 									<?php if (!empty($page['navigation'])): ?>
 										<?php print render($page['navigation']); ?>
 									<?php endif; ?>

 								 <!---menu block ---->
			        </div>
			    </nav>
					<a class="logo" href="/" title="Home"><img src="/sites/usa.dtdc.com/themes/usa_dtdc/images/dtdc_logo.png" alt="Home" class="img-responsive pull-right" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
</div>
<!-- Header block -->
<div class="search-container">
<div class="container">
<?php print render($page['content']); ?>
</div>
</

<!-- footer block ------->
<div class="clearfix"></div>
<footer>
<div class="container-fluid dt-footer-bottom">
	<div class="container">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
<div class="dt-foot-social">
				<a href="https://www.facebook.com/dtdcsingapore/" target="_blank"><img src="sites/pakistan.dtdc.com/themes/pakistan_dtdc/images/facebook.png" alt="" title=""/></a>
				<a href="https://www.linkedin.com/company/dtdc-courier-&-cargo-pvt-ltd" target="_blank"><img src="sites/pakistan.dtdc.com/themes/pakistan_dtdc/images/linkedin.png" alt="" title=""/> </a>
				<a href="https://twitter.com/DTDC_Singapore" target="_blank"><img src="sites/pakistan.dtdc.com/themes/pakistan_dtdc/images/twitter.png" alt="" title=""/> </a>
				<a href="https://plus.google.com/104727912127336791002/posts" target="_blank"><img src="sites/pakistan.dtdc.com/themes/pakistan_dtdc/images/googleplus.png" alt="" title=""/></a>
				<a href="https://www.youtube.com/user/dtdcindia" target="_blank"><img src="sites/pakistan.dtdc.com/themes/pakistan_dtdc/images/youtube.png" alt="" title=""/></a>
			</div>
			<div class="clearfix"></div>
		   <?php print render($page['footer']);?>
			<div class="clearfix"></div>
			<p class="dt-copyright">&copy; Copyright DTDC Express Limited. All Rights Reserved</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a class="dt-mail-foot" href="mailto:customersupport@dtdc.com"><i class="glyphicon glyphicon-envelope"></i> customersupport@dtdc.com</a> </div>
	</div>
</div>
</footer>
<!-- footer block---->
