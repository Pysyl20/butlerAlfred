<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXerq0m5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXerq0m5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXerq0m5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXerq0m5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXerq0m5\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xerq0m5',
    'container.build_id' => '61d9efc8',
    'container.build_time' => 1629711497,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXerq0m5');