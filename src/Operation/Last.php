<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace loophp\collection\Operation;

use Closure;
use Generator;
use Iterator;

/**
 * @immutable
 *
 * @template TKey
 * @template T
 */
final class Last extends AbstractOperation
{
    /**
     * @pure
     *
     * @return Closure(Iterator<TKey, T>): Generator<TKey, T>
     */
    public function __invoke(): Closure
    {
        return
            /**
             * @param Iterator<TKey, T> $iterator
             *
             * @return Generator<TKey, T>
             */
            static function (Iterator $iterator): Generator {
                $isEmpty = true;

                $key = $current = null;
                foreach ($iterator as $key => $current) {
                    $isEmpty = false;
                }

                if (false === $isEmpty) {
                    yield $key => $current;
                }
            };
    }
}
