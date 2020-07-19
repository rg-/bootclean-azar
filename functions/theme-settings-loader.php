<?php 


	/*
	
	Use Material style preloaer

	*/
	
	add_action('wpbc/head/start',function(){
		?>
		<style>

		body.loading *,
		body.loading *:before,
		body.loading *:after {
			-webkit-animation-play-state: paused !important;
		  animation-play-state: paused !important;
		}

			.material-loader {
				background-image:none!important;
				
			}
			.material-loader.inited{
				display: none!important;
			}
			.material-svg-loader {
			  position: relative;
			  margin: 0px auto;
			  width: 80px;
			}

			.material-svg-loader:before {
			  content: '';
			  display: block;
			  padding-top: 100%;
			}

			.material-svg-loader .circular { 

				-webkit-animation-play-state: running !important;
		  	animation-play-state: running !important;

			  -webkit-animation: rotate 2s linear infinite;
			  animation: rotate 2s linear infinite;

			  -webkit-transform-origin: center center;
			  -ms-transform-origin: center center;
			  transform-origin: center center;

			  height: 100%; 
			  width: 100%;
			  position: absolute;
			  top: 0;
			  bottom: 0;
			  left: 0;
			  right: 0;
			  margin: auto;
			}

			.material-svg-loader .circular .path {

				-webkit-animation-play-state: running !important;
		  	animation-play-state: running !important;
 
			  -webkit-animation: dash 1.5s ease-in-out infinite;
			  animation: dash 1.5s ease-in-out infinite;

			  stroke-linecap: round;
			  stroke:#ffffff;
			  stroke-dasharray: 1, 200;
			  stroke-dashoffset: 0; 
			}

			@-webkit-keyframes 
				rotate {  100% {
				 -webkit-transform: rotate(360deg);
				 transform: rotate(360deg);
				}
				}

				@keyframes 
				rotate {  100% {
				 -webkit-transform: rotate(360deg);
				 transform: rotate(360deg);
				}
				}

				@-webkit-keyframes 
				dash {  0% {
				 stroke-dasharray: 1, 200;
				 stroke-dashoffset: 0;
				}
				 50% {
				 stroke-dasharray: 89, 200;
				 stroke-dashoffset: -35;
				}
				 100% {
				 stroke-dasharray: 89, 200;
				 stroke-dashoffset: -124;
				}
				}

				@keyframes 
				dash {  0% {
				 stroke-dasharray: 1, 200;
				 stroke-dashoffset: 0;
				}
				 50% {
				 stroke-dasharray: 89, 200;
				 stroke-dashoffset: -35;
				}
				 100% {
				 stroke-dasharray: 89, 200;
				 stroke-dashoffset: -124;
				}
				} 

		</style>
		<?php
	},0);

add_action('wpbc/layout/body/start', function(){ 
	remove_action('wpbc/layout/body/start', 'action__wpbc_layout_body_start__loader', 10); 
}, 1);  

add_action('wpbc/layout/body/start', function(){
	?>
	<div id="body-loader" class="material-loader loading d-flex align-items-center justify-content-center">
		<div class="material-svg-loader">
		  <svg class="circular" viewBox="25 25 50 50">
		    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
		  </svg>
		</div>
	</div>
	<?php
}, 10); 

?>