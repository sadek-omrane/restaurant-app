<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV6q4bPG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV6q4bPG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV6q4bPG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV6q4bPG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerV6q4bPG\App_KernelDevDebugContainer([
    'container.build_hash' => 'V6q4bPG',
    'container.build_id' => 'fb43ad84',
    'container.build_time' => 1654385279,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV6q4bPG');
