<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Lock\Business;

use Generated\Shared\Transfer\LockTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;
use Symfony\Component\Lock\LockInterface;

/**
 * @method \Spryker\Zed\Lock\Business\LockBusinessFactory getFactory()
 */
class LockFacade extends AbstractFacade implements LockFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\LockTransfer $lockTransfer
     *
     * @return \Generated\Shared\Transfer\LockTransfer
     */
    public function acquireLock(LockTransfer $lockTransfer): LockTransfer
    {
        return $this->getFactory()->createLockMechanism()->acquireLock($lockTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\LockTransfer $lockTransfer
     *
     * @return \Generated\Shared\Transfer\LockTransfer
     */
    public function releaseLock(LockTransfer $lockTransfer): LockTransfer
    {
        return $this->getFactory()->createLockMechanism()->releaseLock($lockTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param string $resource
     * @param float $ttl
     * @param bool $autoRelease
     *
     * @return \Symfony\Component\Lock\LockInterface
     */
    public function createLock(string $resource, float $ttl, bool $autoRelease = true): LockInterface
    {
        return $this->getFactory()->createLockFactory()->createLock($resource, $ttl, $autoRelease);
    }
}
