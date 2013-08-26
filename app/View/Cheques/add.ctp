
<div class="span12">
    <div class="head clearfix">
        <div class="isw-documents"></div>
        <h1><?php echo __('Add Cheque'); ?></h1>
    </div>
    <div class="block-fluid">                        
        <?php echo $this->Form->create('Cheque'); ?>
 <div class='row-form clearfix'> 
                        <div class='span3'>valor</div>
                        <?php 		echo $this->Form->input('valor',array('label' => false, 'div' => array('class' => 'span9') ));
 ?> 
                       </div> <div class='row-form clearfix'> 
                        <div class='span3'>data_vencimento</div>
                        <?php 		echo $this->Form->input('data_vencimento',array('label' => false, 'div' => array('class' => 'span9') ));
 ?> 
                       </div> <div class='row-form clearfix'> 
                        <div class='span3'>destinatario</div>
                        <?php 		echo $this->Form->input('destinatario',array('label' => false, 'div' => array('class' => 'span9') ));
 ?> 
                       </div> <div class='row-form clearfix'> 
                        <div class='span3'>observacao</div>
                        <?php 		echo $this->Form->input('observacao',array('label' => false, 'div' => array('class' => 'span9') ));
 ?> 
                       </div><?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'btn btn-success')); ?>

    </div>
</div>







