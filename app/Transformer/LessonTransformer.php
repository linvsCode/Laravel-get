<?php
/**
 * Created by PhpStorm.
 * User: linvscode
 * Date: 2019/1/19
 * Time: 13:47
 */

namespace App\Transformer;


class LessonTransformer extends Transformer
{
    public function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'content' => $lesson['body'],
            'is_free' => (boolean) $lesson['free'],
        ];
    }
}
