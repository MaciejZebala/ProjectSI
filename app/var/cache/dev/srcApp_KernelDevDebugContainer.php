<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEvBuPaS\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEvBuPaS/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEvBuPaS.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEvBuPaS\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerEvBuPaS\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'EvBuPaS',
    'container.build_id' => '94963c39',
    'container.build_time' => 1591198988,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEvBuPaS');
