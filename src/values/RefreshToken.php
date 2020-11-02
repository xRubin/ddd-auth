<?php declare(strict_types=1);

namespace ddd\auth\values;

final class RefreshToken
{
    private TokenValue $tokenValue;
    private TokenTTL $ttl;

    /**
     * RefreshToken constructor.
     * @param TokenValue $tokenValue
     * @param TokenTTL $ttl
     */
    public function __construct(TokenValue $tokenValue, TokenTTL $ttl)
    {
        $this->tokenValue = $tokenValue;
        $this->ttl = $ttl;
    }

    /**
     * @return TokenValue
     */
    public function getTokenValue(): TokenValue
    {
        return $this->tokenValue;
    }

    /**
     * @return TokenTTL
     */
    public function getTtl(): TokenTTL
    {
        return $this->ttl;
    }

    /**
     * @return bool
     */
    public function isExpired(): bool
    {
        return $this->getTtl()->getValue() < time();
    }
}