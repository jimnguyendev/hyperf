<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Retry\Annotation;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class RetryFalsy extends Retry
{
    public function __construct(array $retryThrowables = [], mixed $retryOnResultPredicate = ['Hyperf\Retry\Annotation\RetryFalsy', 'isFalsy'])
    {
    }
}
