<?php
  // Compatible with sf_escaping_strategy: true
  $a_blog_post = isset($a_blog_post) ? $sf_data->getRaw('a_blog_post') : null;
  $i = isset($i) ? $sf_data->getRaw('i') : null;
?>
<?php foreach($a_blog_post->getTags() as $tag): ?>
<?php if(isset($i)) echo $i ?>
<?php echo link_to($tag, "@a_blog_admin_addFilter?name=tags_list&value=" . $tag) ?>
<?php $i = ', ' ?>
<?php endforeach ?>
