<?php

declare(strict_types=1);

namespace loophp\collection\Contract\Operation;

use Generator;
use loophp\collection\Contract\Collection;

/**
 * @psalm-template TKey
 * @psalm-template TKey of array-key
 * @psalm-template T
 */
interface Pipeable
{
    /**
     * @psalm-param callable(): Generator ...$callables
     *
     * @psalm-return \loophp\collection\Contract\Collection<TKey, T>
     */
    public function pipe(callable ...$callables): Collection;
}
