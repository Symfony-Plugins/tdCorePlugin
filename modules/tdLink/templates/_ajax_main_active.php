<span id="link_visible_action_<?php echo $td_link->getId() ?>">
  <?php if ($td_link->getActive()): ?>
    <?php include_partial('tdLink/ajax_deactivate', array('td_link' => $td_link)) ?>
  <?php else: ?>
    <?php include_partial('tdLink/ajax_activate', array('td_link' => $td_link)) ?>
  <?php endif; ?>
</span>
