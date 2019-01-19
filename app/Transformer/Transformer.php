<?php
/**
 * Created by PhpStorm.
 * User: linvscode
 * Date: 2019/1/19
 * Time: 13:44
 */

namespace App\Transformer;


abstract class Transformer
{
    /**
     *
     * @param $item
     * @return array
     * @author llj <1063944289@qq.com>
     */
    public function transformCollection($item)
    {
        return array_map([$this, 'transform'], $item);
    }

    /**
     *
     * @param $item
     * @return mixed
     * @author llj <1063944289@qq.com>
     */
    public abstract function transform($item);
}
