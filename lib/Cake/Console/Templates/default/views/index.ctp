<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
        
                <div class="span12">                    
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h1>      
                        <ul class="buttons">
                            <li><a href="#" class="isw-download"></a></li>                                                        
                            <li><a href="#" class="isw-attachment"></a></li>
                            <li><a href="#" class="isw-plus"></a></li>
                        </ul>                        
                    </div>
                    
                    <div class="block-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr> 
                                    <?php foreach ($fields as $field): ?>
                                            <th><?php echo "<th width='25%'<?php echo \$this->Paginator->sort('{$field}'); ?><th>"; ?></th>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                        <th class="actions"><?php echo "<?php echo __('Ações'); ?>"; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
                                        echo "\t<tr>\n";
                                                foreach ($fields as $field) {
                                                        $isKey = false;
                                                        if (!empty($associations['belongsTo'])) {
                                                                foreach ($associations['belongsTo'] as $alias => $details) {
                                                                        if ($field === $details['foreignKey']) {
                                                                                $isKey = true;
                                                                                echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
                                                                                break;
                                                                        }
                                                                }
                                                        }
                                                        if ($isKey !== true) {
                                                                echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
                                                        }
                                                }

                                                echo "\t\t<td class=\"actions\">\n";
                                                echo "\t\t\t<?php echo \$this->Html->link(__('Ver'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
                                                echo "\t\t\t<?php echo \$this->Html->link(__('Editar'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
                                                echo "\t\t\t<?php echo \$this->Form->postLink(__('Deletar'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
                                                echo "\t\t</td>\n";
                                        echo "\t</tr>\n";

                                        echo "<?php endforeach; ?>\n";
                                        ?>
                                
                                                                 
                            </tbody>
                        </table>
                    </div>
                </div>
        
        
        
        
        
        
        
	
	
	
	<p>
	<?php echo "<?php
	echo \$this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} no total')
	));
	?>"; ?>
	</p>
	<div class="paging">
	<?php
		echo "<?php\n";
		echo "\t\techo \$this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));\n";
		echo "\t\techo \$this->Paginator->numbers(array('separator' => ''));\n";
		echo "\t\techo \$this->Paginator->next(__('Próximo') . ' >', array(), null, array('class' => 'next disabled'));\n";
		echo "\t?>\n";
	?>
	</div>

