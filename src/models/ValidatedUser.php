<?php declare(strict_types=1);
/**
 * @author Nicolas CARPi <nico-git@deltablot.email>
 * @copyright 2012 Nicolas CARPi
 * @see https://www.elabftw.net Official website
 * @license AGPL-3.0
 * @package elabftw
 */

namespace Elabftw\Models;

/**
 * A user that exists in the db, so we have a userid but not necessarily a team
 */
class ValidatedUser extends ExistingUser
{
    public static function fromExternal(string $email, array $teams, string $firstname, string $lastname): Users
    {
        return parent::fromScratch($email, $teams, $firstname, $lastname, false, false, true);
    }

    public static function fromAdmin(
        string $email,
        array $teams,
        string $firstname,
        string $lastname,
        bool $isAdmin = false,
        bool $isSysadmin = false,
    ): Users {
        return parent::fromScratch($email, $teams, $firstname, $lastname, $isAdmin, $isSysadmin, true, false);
    }
}
