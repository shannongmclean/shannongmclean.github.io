<?php if ($page->hasChildren()): ?>
  <menu>
    <h3>Items for Sale</h3>
    <ul class="itemCategories">
      <?php foreach ($page->children()->listed() as $category): ?>
        <a <?php e($category->isOpen(), 'currentPage') ?> href="<?= $category->url() ?>">
          <li><?= $category->title()->html() ?><sup>(<?= $category->children()->count() ?>)</sup></li>
        </a>
      <?php endforeach ?>
    </ul>
    <small>*Not interested in buying, but want to help fuel our car Raisin? Donate to <a href="">our fund</a> and we will send you postcards from the road.</small>
  </menu>
  <hr>
<?php endif ?>
