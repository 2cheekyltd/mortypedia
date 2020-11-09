<?php

namespace App\Services;

/**
 * Rick n Morty Data Manager
 *
 * @author     Jack Wright <mrjackwright@outlook.com>
 * @copyright  2020 OpenGL License
 * @version    Release: @package_version@
 * @link       https://iamjackwright.com/
 */

use App\Services\ApiRequest as Api;

class MortyData
{
    private $resultSet         = [];
    private $singleResults = [];

    /**
     * @param String $url
     * @return MortyData
     */
    public function getResultSet(String $url): MortyData
    {
        $this->resultSet = (array) $this->sendRequest($url)['data']['results'];
        return $this;
    }

    /**
     * @return array
     */
    public function gatherIndividualDataFromResults(): array
    {
        foreach ($this->resultSet as $result) {
            $this->singleResults[] = (array) $this->sendRequest($result->url);
        }
        return $this->singleResults;
    }

    /**
     * @param $url
     * @return array|\Psr\Http\Message\RequestInterface|Api|string
     */
    public function sendRequest($url)
    {
        $request = (new Api)->setUrl($url)
            ->setMethod()
            ->setErrorReporting(true)
            ->setRedirectAllowance(true)
            ->setTimeout(10)
            ->sendRequest();
        if ($request instanceof Api) {
            return $request->getData();
        }
        return $request;
    }
}
