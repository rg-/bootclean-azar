<?php
  $template_folder = 'template-landing/parts';
?>


<div class="container gpy-2">
  <div class="row">
    <div class="col-12">

      <h1 class="text-primary">Ejemplos de composiciones de slides de imagenes</h1>

      <p class="lead">Las imgs usadas deben ser exportadas al doble del tamaño y a 72 dpi. </p>
      <p class="gmb-4">En este ejemplo se ven como se verían (<u>baja calidad/blur/opacidad</u>) mientras hace la precarga de las imgs en alta calidad en cada slide al estar visible en pantalla.</p>


      <?php
        WPBC_get_template_part($template_folder.'/compound-layout-1', array(
          'test' => true,
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44), 
          )
        ));
      ?>
      <br><br>
      <?php
        WPBC_get_template_part($template_folder.'/compound-layout-4a', array(
          'test' => true,
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44),
            array('attachment_id' => 45),
            array('attachment_id' => 46),
            array('attachment_id' => 47),
          )
        ));
      ?>
      <br><br>
      <?php
        WPBC_get_template_part($template_folder.'/compound-layout-4a', array(
          'test' => true,
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44),
            array('attachment_id' => 45),
            array('attachment_id' => 46),
            array('attachment_id' => 47),
          ),
          'reversed' => true,
        ));
      ?>
      <br><br>
      <?php
        WPBC_get_template_part($template_folder.'/compound-layout-4b', array(
          'test' => true,
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44),
            array('attachment_id' => 45),
            array('attachment_id' => 46),
            array('attachment_id' => 47),
          )
        ));
      ?>
      <br><br>
      <?php
        WPBC_get_template_part($template_folder.'/compound-layout-4b', array(
          'test' => true,
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44),
            array('attachment_id' => 45),
            array('attachment_id' => 46),
            array('attachment_id' => 47),
          ),
          'reversed' => true,
        ));
      ?>
      <br><br>
      <?php
        WPBC_get_template_part($template_folder.'/compound-layout-3', array(
          'test' => true,
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44),
            array('attachment_id' => 45),
            array('attachment_id' => 46), 
          )
        ));
      ?>
      <br><br>
      <?php
        WPBC_get_template_part($template_folder.'/compound-layout-3', array(
          'test' => true,
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44),
            array('attachment_id' => 45),
            array('attachment_id' => 46), 
          ),
          'reversed' => true,
        ));
      ?>
      <br><br>
      <?php
        WPBC_get_template_part($template_folder.'/compound-layout-2', array(
          'test' => true,
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44),
            array('attachment_id' => 45), 
          )
        ));
      ?> 

      <br><br>
      <?php
        WPBC_get_template_part($template_folder.'/compound-layout-golden', array(
          'test' => true, 
          'attachments'=>array(
            array('attachment_id' => 44), 
          ),
        ));
      ?>
      
    </div>
  </div>
</div>