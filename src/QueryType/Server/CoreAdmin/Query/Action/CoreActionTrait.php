<?php

/*
 * This file is part of the Solarium package.
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code.
 */

namespace Solarium\QueryType\Server\CoreAdmin\Query\Action;

/**
 * CoreActionTrait.
 */
trait CoreActionTrait
{
    /**
     * Set the core name for the action.
     *
     * @param string $core
     *
     * @return self Provides fluent interface
     */
    public function setCore(string $core): self
    {
        $this->setOption('core', $core);

        return $this;
    }

    /**
     * Get the related core name.
     *
     * @return string|null
     */
    public function getCore(): ?string
    {
        return $this->getOption('core');
    }
}
