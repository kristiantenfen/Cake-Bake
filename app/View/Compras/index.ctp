
<div class="span12">                    
    <div class="head clearfix">
        <div class="isw-grid"></div>
        <h1><?php echo __('Compras'); ?></h1>      
        <ul class="buttons">

            <li>			<?php echo $this->Html->link(__(), array('action' => 'add', $compra['Compra']['id']), array('class' => 'isw-plus', 'title' => 'Adicionar '.compra)); ?>
            </li>
        </ul>                        
    </div>

    <div class="block-fluid">
        <table cellpadding="0" cellspacing="0" width="100%" class="table">
            <thead>
                <tr> 
                                            <th width='25%'<?php echo $this->Paginator->sort('id'); ?></th>
                                            <th width='25%'<?php echo $this->Paginator->sort('metros'); ?></th>
                                            <th width='25%'<?php echo $this->Paginator->sort('toneladas'); ?></th>
                                            <th width='25%'<?php echo $this->Paginator->sort('data'); ?></th>
                                            <th width='25%'<?php echo $this->Paginator->sort('valor'); ?></th>
                                            <th width='25%'<?php echo $this->Paginator->sort('observacao'); ?></th>
                    
                    <th width=25%"><?php echo __('Ações'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($compras as $compra): ?>
	<tr>
		<td><?php echo h($compra['Compra']['id']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['metros']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['toneladas']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['data']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['valor']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['observacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__(), array('action' => 'view', $compra['Compra']['id']), array('class' => 'isb-zoom', 'title' => 'Visualizar')); ?>
			<?php echo $this->Html->link(__(), array('action' => 'edit', $compra['Compra']['id']), array('class' => 'isb-edit', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__(), array('action' => 'delete', $compra['Compra']['id']), array('class' => 'isb-cancel', 'title' => 'Excluir'), __('Você deseja excluir o registro # %s?', $compra['Compra']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>


            </tbody>
        </table>
    </div>

    <p>
        <?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} no total')
	));
	?>    </p>
    <div class="paging">
        <?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
    </div>
</div>
