<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\collection\Contract\Operation;

use loophp\collection\Contract\Collection;

/**
 * @template TKey
 * @template T
 */
interface Splitable
{
    public const AFTER = 1;

    public const BEFORE = -1;

    public const REMOVE = 0;

    /**
     * Split a collection using a callback.
     *
     * @param callable ...$callbacks
     *
     * @return Collection<TKey, T>
     */
    public function split(int $type = Splitable::BEFORE, callable ...$callbacks): Collection;
}
