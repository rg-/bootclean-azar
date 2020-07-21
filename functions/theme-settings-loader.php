<?php 


	/*
	
	Use Material style preloaer

	*/

add_action('wpbc/layout/body/start', function(){ 
	remove_action('wpbc/layout/body/start', 'action__wpbc_layout_body_start__loader', 10); 
}, 1);  

add_action('wpbc/layout/body/start', function(){
	?>
	<div id='body-loader' class='loading wpbc-material-loader'>
		<span class='wpbc-material-loader-wrapper'>
			<svg class="wpbc-material-loader-svg" width="60" height="60" viewBox="0 0 44 44"><circle class="wpbc-material-loader-circle" cx="22" cy="22" r="20" fill="none" stroke="#ffffff" stroke-width="2"></circle></svg>
		</span>
</div>
	<?php
}, 10); 
	
	add_action('wpbc/head/scripts',function(){

		/*
	
		-webkit-animation-play-state: running !important;
		animation-play-state: running !important;

		*/

		?>
		<style>

		body.loading *,
		body.loading *:before,
		body.loading *:after {
			-webkit-animation-play-state: paused !important;
		  animation-play-state: paused !important;
		}

		#body-loader.wpbc-material-loader{
			background-image: none!important;
		}

		.wpbc-material-loader-wrapper{
			display: flex;
			height: 100%;
			align-items:center;
			justify-content: center;
		}

		body .wpbc-material-loader-svg{ 
			
			animation-name: wpbc-material-loader-rotate;
			animation-duration: 2s; 
			animation-iteration-count: infinite; 
			animation-timing-function: linear; 

			-webkit-animation-name: wpbc-material-loader-rotate;
			-webkit-animation-duration: 2s; 
			-webkit-animation-iteration-count: infinite; 
			-webkit-animation-timing-function: linear; 

			-webkit-animation-play-state: running !important;
		  animation-play-state: running !important;

		}

		body .wpbc-material-loader-circle{
			stroke-dasharray: 1,150;
			stroke-dashoffset: 0;
			stroke-linecap: round; 

			animation-name: wpbc-material-loader-stroke;
			animation-duration: 1.5s; 
			animation-iteration-count: infinite; 
			animation-timing-function: ease-in-out; 

			-webkit-animation-name: wpbc-material-loader-stroke;
			-webkit-animation-duration: 1.5s; 
			-webkit-animation-iteration-count: infinite; 
			-webkit-animation-timing-function: ease-in-out; 

			-webkit-animation-play-state: running !important;
		  animation-play-state: running !important;
			
		} 

		@-webkit-keyframes wpbc-material-loader-rotate{
			to{
				transform:rotate(1turn);
				}
			}
		@keyframes wpbc-material-loader-rotate{
			to{
				transform:rotate(1turn);
				}
			}

		@-webkit-keyframes wpbc-material-loader-stroke{
			0%{
				stroke-dasharray:1,150;
				stroke-dashoffset:0
				}
			50%{
				stroke-dasharray:90,150;
				stroke-dashoffset:-35
				}
			to{
				stroke-dasharray:90,150;
				stroke-dashoffset:-124
				}
			}
		@keyframes wpbc-material-loader-stroke{
			0%{
				stroke-dasharray:1,150;
				stroke-dashoffset:0
				}
			50%{
				stroke-dasharray:90,150;
				stroke-dashoffset:-35
				}
			to{
				stroke-dasharray:90,150;
				stroke-dashoffset:-124
				}
			}

		</style>
		<?php
	},0); 

?>