<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($td_link, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($td_link, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
    <?php include_partial('tdLink/ajax_main_active', array('td_link' => $td_link)) ?>
  </ul>
</td>
