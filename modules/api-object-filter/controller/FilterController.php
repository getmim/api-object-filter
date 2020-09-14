<?php
/**
 * FilterController
 * @package api-object-filter
 * @version 0.0.1
 */

namespace ApiObjectFilter\Controller;

class FilterController extends \Api\Controller
{
	public function filterAction(){
		if(!$this->app->isAuthorized())
            return $this->resp(401);

        $result = [];
        
        $type = $this->req->getQuery('type');
        if(!$type)
        	return $this->resp(400, 'Type query string not provided');

        $handler = $this->config->apiObjectFilter->filters->handlers->$type ?? null;
        if(!$handler)
        	return $this->resp(400, 'Handler not found');

        $cond = $this->req->getQuery();
        if(isset($cond['query']) && !isset($cond['q']))
        	$cond['q'] = $cond['query'];

        $result = $handler::filter($cond);
        if(is_null($result))
        	return $this->resp(400, $handler::lastError());
        return $this->resp(0, $result);
	}
}