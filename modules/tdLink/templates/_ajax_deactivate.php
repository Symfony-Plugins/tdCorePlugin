<li class="sf_admin_action_deactivate" id="ajax_deactivate_<?php echo $td_link->getId() ?>">
<?php use_helper('jQuery'); ?>
  <?php echo jq_link_to_remote(__('Deactivate', array(), 'sf_admin'), array(
    'update'   => 'link_visible_action_'.$td_link->getId(),
    'url'      => '@tdLink_ajax_deactivate?id='.$td_link->getId(),
    'script' => true,
    'complete' => jq_remote_function( array(
      'update' => 'link_visible_column_'.$td_link->getId(),
      'url'    => 'graphics/empty',
      'script' => true
    )),
  )) ?>
</li>
