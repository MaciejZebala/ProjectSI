<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHWz1EMU\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHWz1EMU/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHWz1EMU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHWz1EMU\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHWz1EMU\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HWz1EMU',
    'container.build_id' => '8be9b51b',
    'container.build_time' => 1589723483,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHWz1EMU');
