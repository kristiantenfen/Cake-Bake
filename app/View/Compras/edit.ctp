
<div class="span12">
    <div class="head clearfix">
        <div class="isw-documents"></div>
        <h1><?php echo __('Edit Compra'); ?></h1>
    </div>
    <div class="block-fluid">                        
        <?php echo $this->Form->create('Compra'); ?>
 <div class='row-form clearfix'> 
                        <div class='span3'>id</div>
                        <?php 		echo $this->Form->input('id',array('label' => false, 'div' => array('class' => 'span9') ));
 ?> 
                       </div> <div class='row-form clearfix'> 
                        <div class='span3'>metros</div>
                        <?php 		echo $this->Form->input('metros',array('label' => false, 'div' => array('class' => 'span9') ));
 ?> 
                       </div> <div class='row-form clearfix'> 
                        <div class='span3'>toneladas</div>
                        <?php 		echo $this->Form->input('toneladas',array('label' => false, 'div' => array('class' => 'span9') ));
 ?> 
                       </div> <div class='row-form clearfix'> 
                        <div class='span3'>data</div>
                        <?php 		echo $this->Form->input('data',array('label' => false, 'div' => array('class' => 'span9') ));
 ?> 
                       </div> <div class='row-form clearfix'> 
                        <div class='span3'>valor</div>
                        <?php 		echo $this->Form->input('valor',array('label' => false, 'div' => array('class' => 'span9') ));
 ?> 
                       </div> <div class='row-form clearfix'> 
                        <div class='span3'>observacao</div>
                        <?php 		echo $this->Form->input('observacao',array('label' => false, 'div' => array('class' => 'span9') ));
 ?> 
                       </div><?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'btn btn-success')); ?>

    </div>
</div>







