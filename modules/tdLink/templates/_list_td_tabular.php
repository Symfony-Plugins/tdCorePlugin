<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($td_link->getId(), 'tdLink_edit', $td_link) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo $td_link->getUrl() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $td_link->getDescription() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_active" id="link_visible_column_<?php echo $td_link->getId() ?>">
  <?php echo get_partial('tdLink/list_field_boolean', array('value' => $td_link->getActive())) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($td_link->getCreatedAt()) ? format_date($td_link->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($td_link->getUpdatedAt()) ? format_date($td_link->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
