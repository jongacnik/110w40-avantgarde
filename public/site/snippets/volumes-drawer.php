<div class="dx xw p1 ag-volumes-nav">
<? foreach (page('volumes')->children()->visible() as $volume) : ?>
<? $image = $volume->images()->sortBy('name', 'asc')->filter(function($image) {
  return !str::contains($image->filename(), 'thumb_');
})->first(); ?>
  <a class="square c2" sm="xx" href="<?= $volume->url() ?>">
    <div class="psa t0 l0 fw fh p1 ag-volumes-nav-item">
      <div class="fw fh bgc" style="background-image:url(<?= $volume->images()->sortBy('name', 'asc')->filterBy('filename', '*=', 'thumb_')->first()->url() ?>)"></div>
    </div>
  </a>
<? endforeach ?>
</div>