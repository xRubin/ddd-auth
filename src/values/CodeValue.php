<?php declare(strict_types=1);

namespace ddd\auth\values;

use ddd\domain\values\AbstractDomainValue;
use Webmozart\Assert\Assert;

final class CodeValue extends AbstractDomainValue
{
    private string $value;

    /**
     * CodeValue constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        Assert::stringNotEmpty($value, 'INVALID_CODE_VALUE');

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