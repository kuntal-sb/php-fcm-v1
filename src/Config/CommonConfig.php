<?php
/**
 * Created by PhpStorm.
 * User: strivekp
 * Date: 31/03/2018
 * Time: 00:04
 */

namespace phpFCMSBv1\Config;


interface CommonConfig {
    /**
     *
     * @param $key
     * @return mixed
     */
    function setCollapseKey($key);

    /**
     * @param $priority
     * @return mixed
     */
    function setPriority($priority);

    /**
     * @param $time
     * @return mixed
     */
    function setTimeToLive($time);

    /**
     * @return mixed
     */
    function getPayload();

    function __invoke();
}