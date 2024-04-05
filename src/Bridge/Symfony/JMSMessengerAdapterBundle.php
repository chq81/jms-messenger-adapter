<?php

declare(strict_types=1);

namespace KunicMarko\JMSMessengerAdapter\Bridge\Symfony;

use KunicMarko\JMSMessengerAdapter\Bridge\Symfony\DependencyInjection\JMSMessengerAdapterExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class JMSMessengerAdapterBundle extends Bundle
{
    /**
     * @inheritDoc
     * @return JMSMessengerAdapterExtension|null
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new JMSMessengerAdapterExtension();
    }
}
