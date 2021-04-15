<?php
/**
 * ---------------------------------------------------------------------------------------------------------------------
 * FileName: FactoryInterface.php
 * Description:
 * ---------------------------------------------------------------------------------------------------------------------
 * Author: jackven <jackven@qq.com>
 * Date:    2021/04/15
 * Version: 1.0
 */

namespace Jackven\Joinpay\Contracts;


interface JoinPayFactoryInterface
{
    /**
     * @param $driver
     * @return mixed
     */
    public function driver($driver);
}