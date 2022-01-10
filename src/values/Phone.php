<?php declare(strict_types=1);

namespace ddd\auth\values;

use ddd\domain\values\AbstractDomainValue;
use Webmozart\Assert\Assert;

final class Phone extends AbstractDomainValue
{
    private string $value;

    /**
     * Phone constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        Assert::regex($value, '/^\+\d{10,15}$/is', 'INVALID_PHONE_NUMBER');

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