<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVwluwqm\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVwluwqm/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerVwluwqm.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerVwluwqm\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerVwluwqm\appDevDebugProjectContainer([
    'container.build_hash' => 'Vwluwqm',
    'container.build_id' => '9bd7e1d1',
    'container.build_time' => 1553588199,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVwluwqm');
