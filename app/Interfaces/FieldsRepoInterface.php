<?php
/**
 * User: natetheaverage
 * Date: 4/12/15
 * Time: 2:32 AM
 */

namespace Boss\Interfaces;


interface FieldsRepoInterface {

    public function createFields($menu_id);

    public function fillerInfo($menu_id);


}