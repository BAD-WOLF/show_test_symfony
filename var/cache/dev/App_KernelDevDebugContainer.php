<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGrHv6mv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGrHv6mv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGrHv6mv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGrHv6mv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGrHv6mv\App_KernelDevDebugContainer([
    'container.build_hash' => 'GrHv6mv',
    'container.build_id' => '27675f62',
    'container.build_time' => 1687125631,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGrHv6mv');
