<?php

namespace MBLSolutions\InspiredDeck;

use MBLSolutions\InspiredDeck\Api\ApiResource;

class ManageReport extends ApiResource
{

    /**
     * View all Reports
     *
     * @param int|null $page
     * @return array
     */
    public function all(int $page = null): array
    {
        return $this->getApiRequestor()->getRequest('/api/report/manage', [
            'page' => $page
        ]);
    }

    /**
     * Create a new Report
     *
     * @param array $params
     * @return array
     */
    public function create(array $params): array
    {
        return $this->getApiRequestor()->postRequest('/api/report/manage/', $params);
    }

    /**
     * Update a Report
     *
     * @param array $params
     * @return array
     */
    public function update($id, array $params): array
    {
        return $this->getApiRequestor()->patchRequest('/api/report/manage/' . $id, $params);
    }

    /**
     * Show a Report
     *
     * @param $id
     * @return array
     */
    public function show($id)
    {
        return $this->getApiRequestor()->getRequest('/api/report/manage/' . $id);
    }

    /**
     * Can Delete a Report
     *
     * @param $id
     * @return array
     */
    public function delete($id): array
    {
        return $this->getApiRequestor()->deleteRequest('/api/report/manage/' . $id);
    }

    /**
     * Test Report
     *
     * @param array $params
     * @return array
     */
    public function test(array $params): array
    {
        return $this->getApiRequestor()->postRequest('/api/report/manage/test', $params);
    }


}