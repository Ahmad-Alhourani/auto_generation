
<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});




Breadcrumbs::register('admin.gem.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.gems.title'), route('admin.gem.index'));
});

 Breadcrumbs::register('admin.gem.player', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.gems.title'), route('admin.gem.index'));
   });

 Breadcrumbs::register('admin.gem.level', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.gems.title'), route('admin.gem.index'));
   });

 Breadcrumbs::register('admin.gem.box', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.gems.title'), route('admin.gem.index'));
   });



Breadcrumbs::register('admin.gem.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.gem.index');
$breadcrumbs->push(__('labels.backend.gems.create'), route('admin.gem.create'));
});

Breadcrumbs::register('admin.gem.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.gem.index');
$breadcrumbs->push(__('menus.backend.gems.view'), route('admin.gem.show', $id));
});

Breadcrumbs::register('admin.gem.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.gem.index');
$breadcrumbs->push(__('menus.backend.gems.edit'), route('admin.gem.edit', $id));
});


Breadcrumbs::register('admin.level.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.levels.title'), route('admin.level.index'));
});

 Breadcrumbs::register('admin.level.gem', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.levels.title'), route('admin.level.index'));
   });



Breadcrumbs::register('admin.level.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.level.index');
$breadcrumbs->push(__('labels.backend.levels.create'), route('admin.level.create'));
});

Breadcrumbs::register('admin.level.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.level.index');
$breadcrumbs->push(__('menus.backend.levels.view'), route('admin.level.show', $id));
});

Breadcrumbs::register('admin.level.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.level.index');
$breadcrumbs->push(__('menus.backend.levels.edit'), route('admin.level.edit', $id));
});


Breadcrumbs::register('admin.player.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.players.title'), route('admin.player.index'));
});

 Breadcrumbs::register('admin.player.gem', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.players.title'), route('admin.player.index'));
   });

 Breadcrumbs::register('admin.player.box', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.players.title'), route('admin.player.index'));
   });



Breadcrumbs::register('admin.player.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.player.index');
$breadcrumbs->push(__('labels.backend.players.create'), route('admin.player.create'));
});

Breadcrumbs::register('admin.player.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.player.index');
$breadcrumbs->push(__('menus.backend.players.view'), route('admin.player.show', $id));
});

Breadcrumbs::register('admin.player.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.player.index');
$breadcrumbs->push(__('menus.backend.players.edit'), route('admin.player.edit', $id));
});


Breadcrumbs::register('admin.gem_sighting.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.gem_sightings.title'), route('admin.gem_sighting.index'));
});

 Breadcrumbs::register('admin.gem_sighting.gem', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.gem_sightings.title'), route('admin.gem_sighting.index'));
   });

 Breadcrumbs::register('admin.gem_sighting.player', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.gem_sightings.title'), route('admin.gem_sighting.index'));
   });



Breadcrumbs::register('admin.gem_sighting.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.gem_sighting.index');
$breadcrumbs->push(__('labels.backend.gem_sightings.create'), route('admin.gem_sighting.create'));
});

Breadcrumbs::register('admin.gem_sighting.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.gem_sighting.index');
$breadcrumbs->push(__('menus.backend.gem_sightings.view'), route('admin.gem_sighting.show', $id));
});

Breadcrumbs::register('admin.gem_sighting.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.gem_sighting.index');
$breadcrumbs->push(__('menus.backend.gem_sightings.edit'), route('admin.gem_sighting.edit', $id));
});


Breadcrumbs::register('admin.level_gem.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.level_gems.title'), route('admin.level_gem.index'));
});

 Breadcrumbs::register('admin.level_gem.gem', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.level_gems.title'), route('admin.level_gem.index'));
   });

 Breadcrumbs::register('admin.level_gem.level', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.level_gems.title'), route('admin.level_gem.index'));
   });



Breadcrumbs::register('admin.level_gem.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.level_gem.index');
$breadcrumbs->push(__('labels.backend.level_gems.create'), route('admin.level_gem.create'));
});

Breadcrumbs::register('admin.level_gem.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.level_gem.index');
$breadcrumbs->push(__('menus.backend.level_gems.view'), route('admin.level_gem.show', $id));
});

Breadcrumbs::register('admin.level_gem.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.level_gem.index');
$breadcrumbs->push(__('menus.backend.level_gems.edit'), route('admin.level_gem.edit', $id));
});


Breadcrumbs::register('admin.box.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.boxes.title'), route('admin.box.index'));
});

 Breadcrumbs::register('admin.box.gem', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.boxes.title'), route('admin.box.index'));
   });

 Breadcrumbs::register('admin.box.player', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.boxes.title'), route('admin.box.index'));
   });

 Breadcrumbs::register('admin.box.item', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.boxes.title'), route('admin.box.index'));
   });



Breadcrumbs::register('admin.box.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.box.index');
$breadcrumbs->push(__('labels.backend.boxes.create'), route('admin.box.create'));
});

Breadcrumbs::register('admin.box.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.box.index');
$breadcrumbs->push(__('menus.backend.boxes.view'), route('admin.box.show', $id));
});

Breadcrumbs::register('admin.box.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.box.index');
$breadcrumbs->push(__('menus.backend.boxes.edit'), route('admin.box.edit', $id));
});


Breadcrumbs::register('admin.box_gem.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.box_gems.title'), route('admin.box_gem.index'));
});

 Breadcrumbs::register('admin.box_gem.gem', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.box_gems.title'), route('admin.box_gem.index'));
   });

 Breadcrumbs::register('admin.box_gem.box', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.box_gems.title'), route('admin.box_gem.index'));
   });



Breadcrumbs::register('admin.box_gem.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.box_gem.index');
$breadcrumbs->push(__('labels.backend.box_gems.create'), route('admin.box_gem.create'));
});

Breadcrumbs::register('admin.box_gem.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.box_gem.index');
$breadcrumbs->push(__('menus.backend.box_gems.view'), route('admin.box_gem.show', $id));
});

Breadcrumbs::register('admin.box_gem.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.box_gem.index');
$breadcrumbs->push(__('menus.backend.box_gems.edit'), route('admin.box_gem.edit', $id));
});


Breadcrumbs::register('admin.box_sighting.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.box_sightings.title'), route('admin.box_sighting.index'));
});

 Breadcrumbs::register('admin.box_sighting.player', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.box_sightings.title'), route('admin.box_sighting.index'));
   });

 Breadcrumbs::register('admin.box_sighting.box', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.box_sightings.title'), route('admin.box_sighting.index'));
   });



Breadcrumbs::register('admin.box_sighting.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.box_sighting.index');
$breadcrumbs->push(__('labels.backend.box_sightings.create'), route('admin.box_sighting.create'));
});

Breadcrumbs::register('admin.box_sighting.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.box_sighting.index');
$breadcrumbs->push(__('menus.backend.box_sightings.view'), route('admin.box_sighting.show', $id));
});

Breadcrumbs::register('admin.box_sighting.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.box_sighting.index');
$breadcrumbs->push(__('menus.backend.box_sightings.edit'), route('admin.box_sighting.edit', $id));
});


Breadcrumbs::register('admin.item.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.items.title'), route('admin.item.index'));
});

 Breadcrumbs::register('admin.item.box', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.items.title'), route('admin.item.index'));
   });



Breadcrumbs::register('admin.item.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.item.index');
$breadcrumbs->push(__('labels.backend.items.create'), route('admin.item.create'));
});

Breadcrumbs::register('admin.item.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.item.index');
$breadcrumbs->push(__('menus.backend.items.view'), route('admin.item.show', $id));
});

Breadcrumbs::register('admin.item.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.item.index');
$breadcrumbs->push(__('menus.backend.items.edit'), route('admin.item.edit', $id));
});


Breadcrumbs::register('admin.box_item.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.box_items.title'), route('admin.box_item.index'));
});

 Breadcrumbs::register('admin.box_item.item', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.box_items.title'), route('admin.box_item.index'));
   });

 Breadcrumbs::register('admin.box_item.box', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
   $breadcrumbs->push(__('strings.backend.box_items.title'), route('admin.box_item.index'));
   });



Breadcrumbs::register('admin.box_item.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.box_item.index');
$breadcrumbs->push(__('labels.backend.box_items.create'), route('admin.box_item.create'));
});

Breadcrumbs::register('admin.box_item.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.box_item.index');
$breadcrumbs->push(__('menus.backend.box_items.view'), route('admin.box_item.show', $id));
});

Breadcrumbs::register('admin.box_item.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.box_item.index');
$breadcrumbs->push(__('menus.backend.box_items.edit'), route('admin.box_item.edit', $id));
});

//*****Do Not Delete Me













require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
