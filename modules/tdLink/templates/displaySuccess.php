<?php slot('heading') ?>
<em>L</em>inki
<?php end_slot() ?>

<ul>
<?php foreach($td_links as $td_link): ?>
  <li><a href="<?php echo $td_link->getUrl() ?>"><?php echo $td_link->getUrl() ?></a> - <?php echo $td_link->getDescription() ?></li>
<?php endforeach; ?>
</ul>
