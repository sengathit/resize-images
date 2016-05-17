<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Resize image</title>
		<style>
			.clear {
				clear: both;
			}
		
			#section-wrapper {
				margin: 0 auto;
				width: 1024px;
			}
			
			#copy {
				float: left;
				width: 70%;
			}
			
			#copy > div {
				padding: 0 55px 0 0;
			}
			
			#sidebar {
				background: #ccc;
				min-height: 565px;
				float: left;
				width: 30%;
			}
			
			@media screen and (max-width: 1024px){
			
			#section-wrapper {
				width: 100%
			}
			
			}
		</style>
		<script src="https://code.jquery.com/jquery-2.2.3.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			
			// Resize an image if its width is wider than its
			// parent width.
			$(document).ready(function(){
				
				// Find the images.
				var img$ = $("#copy").find("img");
				
				// Cycle through each image and resize it.
				img$.each(function(){
					
					// Get the images parent container.
					var img_container$ = $(this).parent();
					
					// Check to see if the width of the image
					// is wider than its parent width.  If it is
					// then set the parents width to the 
					// childs width.
					if($(this).width() > img_container$.width()){
						$(this).css( { display : "block", height : "auto" , width : img_container$.width() + "px"} );
					}
				});
			});
		</script>
	</head>
	<body>
		<div id="section-wrapper">
			<div>
				<div id="copy">
					<div>
						<h1>Home Page</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae egestas quam, eu mollis ex. Nunc magna lectus, finibus non mauris ac, lacinia interdum ipsum. Maecenas maximus sagittis dignissim. Aliquam vel nibh quis dui sagittis condimentum eget id ipsum. Etiam convallis arcu at euismod elementum. Etiam ac mollis metus. Nulla nec nulla dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus massa libero, ut porttitor ipsum auctor et. Nunc luctus ultricies ipsum.</p>
						<img alt="large" src="images/large-img.png">
						<img alt="medium" src="images/medium-img.jpg">
						<img alt="small" src="images/small-img.png">
						<p>Vivamus vitae placerat nunc. Mauris leo elit, varius et lobortis finibus, feugiat at nisi. Donec consectetur sagittis ex quis gravida. Fusce eget sem id nunc viverra vulputate sit amet sit amet dolor. Donec pulvinar fringilla lectus in fermentum. Integer iaculis est ultricies, ullamcorper magna at, ornare ipsum. Aliquam gravida lectus id est hendrerit cursus. Aenean mollis lorem a lorem molestie imperdiet. Vivamus ac mattis tortor, ac consectetur nunc.</p>
					</div>
				</div>
				<div id="sidebar">
					<div>
						<ul id="quick-menu">
							<div id="side-menu" class="menu-sidebar-menu-container">
								<ul id="menu-sidebar-menu" class="menu"><li id="menu-item-150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-150"><a href="http://localhost/wp_template-2.0/about-us/">About Us</a>
								<ul class="sub-menu">
									<li id="menu-item-151" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151"><a href="http://localhost/wp_template-2.0/about-us/maintenance-plan/">Maintenance Plan</a></li>
									<li id="menu-item-173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173"><a href="http://localhost/wp_template-2.0/about-us/why-choose-us/">Why Choose Us</a></li>
								</ul>
								</li>
								<li id="menu-item-103" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-103"><a href="http://localhost/wp_template-2.0/our-services/">Our Services</a>
									<ul class="sub-menu">
										<li id="menu-item-104" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-104"><a href="http://localhost/wp_template-2.0/our-services/service5/">Service5</a></li>
										<li id="menu-item-105" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-105"><a href="http://localhost/wp_template-2.0/our-services/service4/">Service4</a></li>
										<li id="menu-item-106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106"><a href="http://localhost/wp_template-2.0/our-services/service3/">Service3</a></li>
										<li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107"><a href="http://localhost/wp_template-2.0/our-services/service6/">Service6</a></li>
										<li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108"><a href="http://localhost/wp_template-2.0/our-services/service1/">Service1</a></li>
										<li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="http://localhost/wp_template-2.0/our-services/service2/">Service2</a></li>
									</ul>
								</li>
								<li id="menu-item-170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170"><a href="http://localhost/wp_template-2.0/contact-us/">Contact Us</a></li>
								<li id="menu-item-169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-169"><a href="http://localhost/wp_template-2.0/testimonials/">Testimonials</a></li>
								</ul>
							</div>		
						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>
