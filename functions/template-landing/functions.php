<?php

/*

	Template Landing custom functions

*/


function azar_layouts_icons($n='1'){

	$fill_base = '#ffffff';


	$svg_style = " vertical-align:-3px; "; 
		$svg_start = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px"
		 height="18px" viewBox="0 0 22 18" style="'.$svg_style.'" xml:space="preserve">';
		$svg_end = '</svg>';


		$svg_1 = $svg_start.'<g id="layout-1">
	<g>
		<rect x="0" y="0" style="fill:'.$fill_base.';" width="22" height="18"/>
	</g>
	<g>
		<path d="M21,1v16H1V1H21 M22,0H0v18h22V0L22,0z"/>
	</g>
	<g>
		<polyline style="fill:none;stroke:#000000;stroke-miterlimit:10;" points="6.121,11.121 4,9 6.121,6.879 		"/>
		<polyline style="fill:none;stroke:#000000;stroke-miterlimit:10;" points="15.879,6.879 18,9 15.879,11.121 		"/>
	</g>
</g>
<g id="Layer_1">
</g>'.$svg_end;

		$svg_2 = $svg_start.'<g id="layout-2">
	<g>
		<g>
			<rect x="0" y="0" style="fill:'.$fill_base.';" width="22" height="18"/>
		</g>
		<polyline style="fill:none;stroke:#000000;stroke-miterlimit:10;" points="6.121,11.121 4,9 6.121,6.879 		"/>
		<polyline style="fill:none;stroke:#000000;stroke-miterlimit:10;" points="15.879,6.879 18,9 15.879,11.121 		"/>
	</g>
	<g>
		<path d="M10,1v16H1V1H10 M11,0H0v18h11V0L11,0z"/>
	</g>
	<g>
		<path d="M21,1v16h-9V1H21 M22,0H11v18h11V0L22,0z"/>
	</g>
</g>
<g id="Layer_1">
</g>'.$svg_end;

		$svg_3 = $svg_start.'<g id="layout-3">
	<g>
		<g>
			<rect x="0" y="0" style="fill:'.$fill_base.';" width="22" height="18"/>
		</g>
		<polyline style="fill:none;stroke:#000000;stroke-miterlimit:10;" points="6.121,16.121 4,14 6.121,11.879 		"/>
		<polyline style="fill:none;stroke:#000000;stroke-miterlimit:10;" points="15.879,11.879 18,14 15.879,16.121 		"/>
	</g>
	<g>
		<path d="M10,1v16H1V1H10 M11,0H0v18h11V0L11,0z"/>
	</g>
	<g>
		<path d="M21,1v7h-9V1H21 M22,0H11v9h11V0L22,0z"/>
	</g>
	<g>
		<path d="M21,10v7h-9v-7H21 M22,9H11v9h11V9L22,9z"/>
	</g>
</g>
<g id="Layer_1">
</g>'.$svg_end;

		$svg_4a = $svg_start.'<g id="layout-4a">
	<g>
		<g>
			<rect y="0" style="fill:'.$fill_base.';" width="22" height="18"/>
		</g>
		<polyline style="fill:none;stroke:#000000;stroke-miterlimit:10;" points="6.121,8.121 4,6 6.121,3.879 		"/>
		<polyline style="fill:none;stroke:#000000;stroke-miterlimit:10;" points="16.879,10.879 19,13 16.879,15.121 		"/>
	</g>
	<g>
		<path d="M21,1v16h-5.7V1H21 M22,0h-7.7v18H22V0L22,0z"/>
	</g>
	<g>
		<path d="M13.3,1v9.25H1V1H13.3 M14.3,0H0v11.25H14.3V0L14.3,0z"/>
	</g>
	<g>
		<path d="M6.15,12.25V17H1v-4.75H6.15 M7.15,11.25H0V18h7.15V11.25L7.15,11.25z"/>
	</g>
	<g>
		<path d="M13.3,12.25V17H8.15v-4.75H13.3 M14.3,11.25H7.15V18H14.3V11.25L14.3,11.25z"/>
	</g>
</g>
<g id="Layer_1">
</g>'.$svg_end;

		$svg_4b = $svg_start.'<g id="layout-4b">
	<g>
		<g>
			<rect y="0" style="fill:'.$fill_base.';" width="22" height="18"/>
		</g>
		<polyline style="fill:none;stroke:#000000;stroke-miterlimit:10;" points="6.121,8.121 4,6 6.121,3.879 		"/>
		<polyline style="fill:none;stroke:#000000;stroke-miterlimit:10;" points="16.879,3.879 19,6 16.879,8.121 		"/>
	</g>
	<g>
		<path d="M13.3,12.25V17H1v-4.75H13.3 M14.3,11.25H0V18h14.3V11.25L14.3,11.25z"/>
	</g>
	<g>
		<path d="M21,12.25V17h-5.7v-4.75H21 M22,11.25h-7.7V18H22V11.25L22,11.25z"/>
	</g>
	<g>
		<path d="M13.3,1v9.25H1V1H13.3 M14.3,0H0v11.25h14.3V0L14.3,0z"/>
	</g>
	<g>
		<path d="M21,1v9.25h-5.7V1H21 M22,0h-7.7v11.25H22V0L22,0z"/>
	</g>
</g>
<g id="Layer_1">
</g>'.$svg_end;


	if(!empty($n)){
		if($n=='1') $r = $svg_1;
		if($n=='2') $r = $svg_2;
		if($n=='3') $r = $svg_3;
		if($n=='4a') $r = $svg_4a;
		if($n=='4b') $r = $svg_4b;
		return $r; 
	}

}

function azar_layouts_instructions(){
	return "AJA";
}

function azar_layouts($prefix=''){
	$layouts = array();

		$svg_1 = azar_layouts_icons('1');
		$svg_2 = azar_layouts_icons('2');
		$svg_3 = azar_layouts_icons('3');
		$svg_4a = azar_layouts_icons('4a');
		$svg_4b = azar_layouts_icons('4b');
 
		$layouts['layout_compound-layout-1'] = array(
				'key' => 'layout_compound-layout-1',
				'name' => 'compound-layout-1',
				'label' => $svg_1.' layout-1',
				'display' => 'block',
				'sub_fields' => array(),
				'min' => '',
				'max' => '',
		);
			$layouts['layout_compound-layout-1']['sub_fields'][] = WPBC_acf_make_text_field(
				array(
					'name'=> 'compound_layout_1_label',
					'label'=>'Project Title',
					'width' => '50%',
				)
			);
			$layouts['layout_compound-layout-1']['sub_fields'][] = WPBC_acf_make_text_field(
				array(
					'name'=> 'compound_layout_1_year',
					'label'=>'Project Year', 
					'width' => '50%', 
				)
			);
			$layouts['layout_compound-layout-1']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_1',
					'label'=>'Image', 
					'instructions'=> '1212x680px @x2', 
				)
			); 

		$layouts['layout_compound-layout-2'] = array(
				'key' => 'layout_compound-layout-2',
				'name' => 'compound-layout-2',
				'label' => $svg_2.' layout-2',
				'display' => 'block',
				'sub_fields' => array(),
				'min' => '',
				'max' => '',
		);
			$layouts['layout_compound-layout-2']['sub_fields'][] = WPBC_acf_make_text_field(
				array(
					'name'=> 'compound_layout_2_label',
					'label'=>'Project Title',
					'width' => '50%',
				)
			);
			$layouts['layout_compound-layout-2']['sub_fields'][] = WPBC_acf_make_text_field(
				array(
					'name'=> 'compound_layout_2_year',
					'label'=>'Project Year', 
					'width' => '50%', 
				)
			);
			$layouts['layout_compound-layout-2']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_2_image_1',
					'label'=>'Image 1', 
					'instructions'=> '604x680px @x2', 
				)
			);
			$layouts['layout_compound-layout-2']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_2_image_2',
					'label'=>'Image 2', 
					'instructions'=> '604x680px @x2', 
				)
			);

		$layouts['layout_compound-layout-3'] = array(
				'key' => 'layout_compound-layout-3',
				'name' => 'compound-layout-3',
				'label' => $svg_3.' layout-3',
				'display' => 'block',
				'sub_fields' => array(),
				'min' => '',
				'max' => '',
		);
			$layouts['layout_compound-layout-3']['sub_fields'][] = WPBC_acf_make_text_field(
				array(
					'name'=> 'compound_layout_3_label',
					'label'=>'Project Title',
					'width' => '50%',
				)
			);
			$layouts['layout_compound-layout-3']['sub_fields'][] = WPBC_acf_make_text_field(
				array(
					'name'=> 'compound_layout_3_year',
					'label'=>'Project Year', 
					'width' => '50%', 
				)
			);
			$layouts['layout_compound-layout-3']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_3_image_1',
					'label'=>'Image 1', 
					'instructions'=> '604x680px @x2', 
				)
			);
			$layouts['layout_compound-layout-3']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_3_image_2',
					'label'=>'Image 2', 
					'instructions'=> '604x340px @x2', 
				)
			);
			$layouts['layout_compound-layout-3']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_3_image_3',
					'label'=>'Image 3', 
					'instructions'=> '604x340px @x2', 
				)
			);

		$layouts['layout_compound-layout-4a'] = array(
				'key' => 'layout_compound-layout-4a',
				'name' => 'compound-layout-4a',
				'label' => $svg_4a.' layout-4a',
				'display' => 'block',
				'sub_fields' => array(),
				'min' => '',
				'max' => '',
		);
			$layouts['layout_compound-layout-4a']['sub_fields'][] = WPBC_acf_make_text_field(
				array(
					'name'=> 'compound_layout_4a_label',
					'label'=>'Project Title',
					'width' => '50%',
				)
			);
			$layouts['layout_compound-layout-4a']['sub_fields'][] = WPBC_acf_make_text_field(
				array(
					'name'=> 'compound_layout_4a_year',
					'label'=>'Project Year', 
					'width' => '50%', 
				)
			);
			$layouts['layout_compound-layout-4a']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_4a_image_1',
					'label'=>'Image 1', 
					'instructions'=> '907x419px @x2', 
				)
			);
			$layouts['layout_compound-layout-4a']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_4a_image_2',
					'label'=>'Image 2', 
					'instructions'=> '453x260px @x2', 
				)
			);
			$layouts['layout_compound-layout-4a']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_4a_image_3',
					'label'=>'Image 3', 
					'instructions'=> '453x260px @x2', 
				)
			);
			$layouts['layout_compound-layout-4a']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_4a_image_4',
					'label'=>'Image 4', 
					'instructions'=> '301x680px @x2', 
				)
			);

		$layouts['layout_compound-layout-4b'] = array(
				'key' => 'layout_compound-layout-4b',
				'name' => 'compound-layout-4b',
				'label' => $svg_4b.' layout-4b',
				'display' => 'block',
				'sub_fields' => array(),
				'min' => '',
				'max' => '',
		);
			$layouts['layout_compound-layout-4b']['sub_fields'][] = WPBC_acf_make_text_field(
				array(
					'name'=> 'compound_layout_4b_label',
					'label'=>'Project Title',
					'width' => '50%',
				)
			);
			$layouts['layout_compound-layout-4b']['sub_fields'][] = WPBC_acf_make_text_field(
				array(
					'name'=> 'compound_layout_4b_year',
					'label'=>'Project Year', 
					'width' => '50%', 
				)
			);
			$layouts['layout_compound-layout-4b']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_4b_image_1',
					'label'=>'Image 1', 
					'instructions'=> '806x423px @x2', 
				)
			);
			$layouts['layout_compound-layout-4b']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_4b_image_2',
					'label'=>'Image 2', 
					'instructions'=> '402x423px @x2', 
				)
			);
			$layouts['layout_compound-layout-4b']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_4b_image_3',
					'label'=>'Image 3', 
					'instructions'=> '806x257px @x2', 
				)
			);
			$layouts['layout_compound-layout-4b']['sub_fields'][] = WPBC_acf_make_image_field(
				array(
					'name'=> 'compound_layout_4b_image_4',
					'label'=>'Image 4', 
					'instructions'=> '402x257px @x2', 
				)
			);

	return $layouts;
}