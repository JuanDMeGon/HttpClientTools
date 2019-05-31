<?php

namespace JuanDMeGon\Traits;

trait AuthorizesTokenBasedServiceRequests
{
    /**
     * Resolves the elements to send when authorazing the request
     * @param  array &$queryParams
     * @param  array &$formParams
     * @param  array &$headers
     * @return void
     */
    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $accessToken = $this->resolveAccessToken();

        $headers['Authorization'] = $accessToken;
    }

    public function resolveAccessToken()
    {
        // Must be implemented according to the service to consume
    }
}
