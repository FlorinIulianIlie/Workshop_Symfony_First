<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEsvrpwb\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEsvrpwb/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerEsvrpwb.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerEsvrpwb\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerEsvrpwb\appDevDebugProjectContainer([
    'container.build_hash' => 'Esvrpwb',
    'container.build_id' => 'a38a6d42',
    'container.build_time' => 1566556890,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEsvrpwb');
