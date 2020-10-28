<?php

namespace Larke\Admin\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

/**
 * 系统
 *
 * @create 2020-10-25
 * @author deatil
 */
class Sys extends Base
{
    /**
     * 清除缓存
     *
     * @param  Request  $request
     * @return Response
     */
    public function clearCache(Request $request)
    {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        
        return $this->successJson(__('清除缓存成功'));
    }
    
    /**
     * 设置缓存
     *
     * @param  Request  $request
     * @return Response
     */
    public function cache(Request $request)
    {
        Artisan::call('route:cache');
        Artisan::call('config:cache');
        
        return $this->successJson(__('路由及配置信息缓存成功'));
    }
    
}
