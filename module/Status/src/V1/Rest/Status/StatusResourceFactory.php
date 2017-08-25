<?php
namespace Status\V1\Rest\Status;

use StatusLib\Mapper;

class StatusResourceFactory
{
    /*
    This is a factory for use with the Zend Framework Service Manager. When your service is selected in a request, this factory will be run in order to create an instance of your StatusResource. In this method, we're pulling another service already defined in the StatusLib module, and injecting it into our StatusResource.
    */
    public function __invoke($services)
    {
        return new StatusResource($services->get(Mapper::class));
    }
}
