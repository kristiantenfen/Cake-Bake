
<div class="span12">                    
    <div class="head clearfix">
        <div class="isw-grid"></div>
        <h1><?php echo __('Cheques'); ?></h1>      
        <ul class="buttons">

            <li>			<?php echo $this->Html->link(__(), array('action' => 'add', $cheque['Cheque']['id']), array('class' => 'isw-plus', 'title' => 'Adicionar '.cheque)); ?>
            </li>
        </ul>                        
    </div>

    <div class="block-fluid">
        <table cellpadding="0" cellspacing="0" width="100%" class="table">
            <thead>
                <tr> 
                                            <th width='25%'<?php echo $this->Paginator->sort('id'); ?></th>
                                            <th width='25%'<?php echo $this->Paginator->sort('valor'); ?></th>
                                            <th width='25%'<?php echo $this->Paginator->sort('data_vencimento'); ?></th>
                                            <th width='25%'<?php echo $this->Paginator->sort('destinatario'); ?></th>
                                            <th width='25%'<?php echo $this->Paginator->sort('observacao'); ?></th>
                    
                    <th class="actions"><?php echo __('Ações'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cheques as $cheque): ?>
	<tr>
		<td><?php echo h($cheque['Cheque']['id']); ?>&nbsp;</td>
		<td><?php echo h($cheque['Cheque']['valor']); ?>&nbsp;</td>
		<td><?php echo h($cheque['Cheque']['data_vencimento']); ?>&nbsp;</td>
		<td><?php echo h($cheque['Cheque']['destinatario']); ?>&nbsp;</td>
		<td><?php echo h($cheque['Cheque']['observacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__(), array('action' => 'view', $cheque['Cheque']['id']), array('class' => 'isb-zoom', 'title' => 'Visualizar')); ?>
			<?php echo $this->Html->link(__(), array('action' => 'edit', $cheque['Cheque']['id']), array('class' => 'isb-edit', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__(), array('action' => 'delete', $cheque['Cheque']['id']), array('class' => 'isb-cancel', 'title' => 'Excluir'), __('Você deseja excluir o registro # %s?', $cheque['Cheque']['id'])); ?>
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
