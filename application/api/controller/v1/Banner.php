<?php
namespace app\api\controller\v1;
use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;

class Banner
{
    /**
     * 获取指定id的Banneer信息
     * @param $id
     * @url /banner/:id
     * @http GET
     */
    public function getBanner($id){
        (new IDMustBePositiveInt())->goCheck(); // ID验证
        $banner = BannerModel::getBannerByID($id);
        if(!$banner){
            throw new BannerMissEx
        }
        return $banner; // 返回banner
    }
}