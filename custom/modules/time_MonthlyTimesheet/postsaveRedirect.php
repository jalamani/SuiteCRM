<?php
 /**
 *
 *
 * @package
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility Ltd <support@salesagility.com>
 */
class postsaveRedirect
{
    public function redirect(&$bean, $event, $arguments)
    {
        try {
            $params = array(
            'module'=> 'Calendar',
            'action'=>'index', 
            'parentTab' => 'all'
        );
        SugarApplication::redirect('index.php?' . http_build_query($params));
            // header('Location: http://127.0.0.1/SuiteCRM/index.php?module=Calendar&action=index&parentTab=All');
            // exit;
        } catch (Exception $ex) {
            $GLOBALS['log']->error($ex->getMessage());
        }
    }

}
