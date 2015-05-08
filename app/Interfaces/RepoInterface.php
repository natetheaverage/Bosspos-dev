<?php
/**
 * Created by PhpStorm.
 * User: nateTheAverage
 * Date: 4/18/2015
 * Time: 6:28 PM
 */

namespace Bosspos\Interfaces;


/**
 * Interface RepoInterface contracts repo's to collect models with relationships
 * Should return one object with relationships nested.
 *
 * @package Bosspos\Interfaces
 */
interface RepoInterface {

    public function find($model, $id);

}