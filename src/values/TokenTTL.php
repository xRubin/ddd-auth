<?php declare(strict_types=1);

namespace ddd\auth\values;

use ddd\domain\values\AbstractDomainValue;
use Webmozart\Assert\Assert;

final class TokenTTL extends AbstractDomainValue
{
    private int $value;

    /**
     * TTL constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        Assert::greaterThan($value, 0, 'INVALID_TOKEN_TTL');

        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
}
