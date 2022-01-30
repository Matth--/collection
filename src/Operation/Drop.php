<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\collection\Operation;

use Closure;
use Iterator;
use LimitIterator;

/**
 * @immutable
 *
 * @template TKey
 * @template T
 */
final class Drop extends AbstractOperation
{
    /**
     * @pure
     *
     * @return Closure(int): Closure(Iterator<TKey, T>): Iterator<TKey, T>
     */
    public function __invoke(): Closure
    {
        return Limit::of()(-1);
    }
}
