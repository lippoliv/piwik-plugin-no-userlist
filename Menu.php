<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\NoUserlist;

use Piwik\Menu\MenuAdmin;
use Piwik\Piwik;

class Menu extends \Piwik\Plugin\Menu {


    public function configureAdminMenu (MenuAdmin $menu) {
        if (Piwik::isUserIsAnonymous() === FALSE && Piwik::hasUserSuperUserAccess() == FALSE) {
            $menu->remove('CoreAdminHome_Administration', 'UsersManager_MenuUsers');
        }
    }


}
