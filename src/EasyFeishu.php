<?php

namespace MengxiaoAc\LaravelFeishu;

use Illuminate\Support\Facades\Facade;

/**
 * @property \EasyFeishu\Contact\Contact         $contact
 * @property \EasyFeishu\AccessToken\AccessToken $access_token
 * @property \EasyFeishu\Im\Im                   $im
 *
 * @see \EasyFeishu\Foundation\Application
 */
class EasyFeishu extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'feishu.open_platform';
    }

    /**
     * @return \EasyFeishu\Foundation\Application
     */
    public static function openPlatform($name = '')
    {
        return $name ? app('feishu.open_platform.'.$name) : app('feishu.open_platform');
    }
}
