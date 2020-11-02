<?php declare(strict_types=1);

namespace ddd\auth\services;

use core\Client\domain\entities\Client;
use core\ClientKey\domain\entities\ClientKey;
use core\ClientKey\domain\values\ClientKeyID;
use core\CodeAuth\domain\entities\CodeAuth;
use core\common\domain\values\CodeHash;
use core\common\domain\values\CodeValue;
use core\common\domain\values\Phone;
use core\common\domain\values\TokenValue;

interface AuthServiceInterface
{
    /**
     * @param Phone $phone
     * @return CodeAuth
     * @throws exceptions\AuthServiceExceptionInterface
     */
    public function createAuthCode(Phone $phone): CodeAuth;

    /**
     * @param Phone $phone
     * @param CodeHash $codeHash
     * @return CodeAuth
     */
    public function resendAuthCode(Phone $phone, CodeHash $codeHash): CodeAuth;

    /**
     * @param Phone $phone
     * @param CodeValue $phoneCode
     * @param CodeHash $codeHash
     * @param Browser $browser
     * @return ClientKey
     */
    public function signIn(Phone $phone, CodeValue $phoneCode, CodeHash $codeHash, Browser $browser): ClientKey;

    /**
     * @param Client $client
     * @return ClientKey[]
     */
    public function findAllClientKeys(Client $client): array;

    /**
     * @param TokenValue $accessToken
     * @return ClientKey
     */
    public function findKeyByAccessToken(TokenValue $accessToken): ClientKey;

    /**
     * @param TokenValue $refreshToken
     * @return ClientKey
     */

    public function findKeyByRefreshToken(TokenValue $refreshToken): ClientKey;
    /**
     * @param Client $client
     * @param ClientKeyID $clientKeyID
     * @return ClientKey
     */
    public function findKeyByClientAndID(Client $client, ClientKeyID $clientKeyID): ClientKey;

    /**
     * @param ClientKey $key
     * @param Browser $browser
     * @return ClientKey
     */
    public function refreshKey(ClientKey $key, Browser $browser): ClientKey;

    /**
     * @param ClientKey $key
     * @return void
     */
    public function deleteKey(ClientKey $key): void;
}