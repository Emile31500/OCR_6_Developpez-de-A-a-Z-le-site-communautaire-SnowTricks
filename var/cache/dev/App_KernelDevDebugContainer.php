<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSXuZcSJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSXuZcSJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSXuZcSJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSXuZcSJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSXuZcSJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'SXuZcSJ',
    'container.build_id' => 'cd32fa8d',
    'container.build_time' => 1678088519,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSXuZcSJ');