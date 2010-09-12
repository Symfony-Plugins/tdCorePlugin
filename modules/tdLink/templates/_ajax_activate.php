<li class="sf_admin_action_activate" id="ajax_activate_<?php echo $td_link->getId() ?>">
<?php use_helper('jQuery'); ?>
  <?php echo jq_link_to_remote(__('Activate', array(), 'sf_admin'), array(
    'update'   => 'link_visible_action_'.$td_link->getId(),
    'url'      => '@tdLink_ajax_activate?id='.$td_link->getId(),
    'script' => true,
    'complete' => jq_remote_function( array(
      'update' => 'link_visible_column_'.$td_link->getId(),
      'url'    => 'graphics/tick',
      'script' => true
    )),
  )) ?>
</li>
