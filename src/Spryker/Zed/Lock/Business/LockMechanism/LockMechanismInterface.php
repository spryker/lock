<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Lock\Business\LockMechanism;

use Generated\Shared\Transfer\LockTransfer;

interface LockMechanismInterface
{
    public function acquireLock(LockTransfer $lockTransfer): LockTransfer;

    public function releaseLock(LockTransfer $lockTransfer): LockTransfer;
}
