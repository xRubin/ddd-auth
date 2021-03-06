<?php declare(strict_types=1);

namespace ddd\auth\values;

use ddd\domain\values\AbstractDomainValue;
use Webmozart\Assert\Assert;

final class TokenValue extends AbstractDomainValue
{
    private string $value;

    /**
     * TokenValue constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        Assert::stringNotEmpty($value, 'INVALID_TOKEN_VALUE');

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}