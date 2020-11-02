<?php declare(strict_types=1);

namespace ddd\auth\values;

final class CodeProperties
{
    private CodeValue $codeValue;
    private CodeHash $codeHash;
    private TTL $ttl;
    private int $attempts;

    /**
     * CodeProperties constructor.
     * @param CodeValue $codeValue
     * @param CodeHash $codeHash
     * @param TTL $ttl
     * @param int $attempts
     */
    public function __construct(CodeValue $codeValue, CodeHash $codeHash, TTL $ttl, int $attempts)
    {
        $this->codeValue = $codeValue;
        $this->codeHash = $codeHash;
        $this->ttl = $ttl;
        $this->attempts = $attempts;
    }

    /**
     * @return CodeValue
     */
    public function getCodeValue(): CodeValue
    {
        return $this->codeValue;
    }

    /**
     * @return CodeHash
     */
    public function getCodeHash(): CodeHash
    {
        return $this->codeHash;
    }

    /**
     * @return TTL
     */
    public function getTtl(): TTL
    {
        return $this->ttl;
    }

    /**
     * @return int
     */
    public function getAttempts(): int
    {
        return $this->attempts;
    }

    /**
     * @param int $attempts
     * @return CodeProperties
     */
    public function setAttempts(int $attempts): CodeProperties
    {
        $this->attempts = $attempts;
        return $this;
    }
}