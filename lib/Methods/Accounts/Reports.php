<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Accounts;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Reports
 *
 * Report problematic users to your moderators
 *
 * @see https://docs.joinmastodon.org/methods/accounts/reports
 */
class Reports extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'reports';


    /**
     * File a report
     *
     * @param string $accountID ID of the account to report
     * @param array $statusIDs Array of Statuses to attach to the report, for context
     * @param string $comment Reason for the report (default max 1000 characters)
     * @param bool $forward If the account is remote, should the report be forwarded to the remote admin?
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Report Report
     */
    public function file(string $accountID = '', array $statusIDs = [], string $comment = '', bool $forward = true): \MrWilsonsWorkshop\Mastodon\Entities\Report
    {
        $endpoint = "{$this->endpoint}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Report($this->api->post($endpoint, [
            'account_id' => $accountID,
            'status_ids' => $statusIDs,
            'comment'    => $comment,
            'forward'    => $forward,
        ]));
    }
}
