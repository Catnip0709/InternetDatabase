<?php
namespace backend\widgets\sidebar;
/*
Team:猫和老鼠
Coding by 潘巧巧1613415
*/

/**
 * 后台siderbar插件
 */
use Yii;
use yii\base\Widget;
use yii\widgets\Menu;

class SidebarWidget extends Menu
{    
    public $submenuTemplate = "\n<ul class=\"children\">\n{items}\n</ul>\n";
    
    public $options = ['class'=>'nav nav-pills nav-stacked nav-quirk'];
    
    public $activateParents = true;
    
    public function init()
    {
        $this->items = [
            ['label' =>'<i class="fa fa-dashboard"></i><span>主页</span>','url'=>['site/index']],
            ['label' =>'<a href=""><i class="fa fa-th-list"></i><span>数据库表格管理</span></a>','options'=>['class'=>'nav-parent'],'items'=>[
                    ['label'=>'CCTV5解说员','url'=>['commentator/index']],
                    ['label'=>'球场','url'=>['court/index']],
                    ['label'=>'国家队教练','url'=>['coach/index']],
                    ['label'=>'赞助商','url'=>['sponsor/index']],
                    ['label'=>'参赛国家队','url'=>['team/index']],
                    ['label'=>'新闻','url'=>['news/index']],
                    ['label'=>'球员','url'=>['player/index']],
                    ['label'=>'比赛','url'=>['competition/index']],
                ]
            ],
            ['label' =>'<a href=""><i class="fa fa-user"></i><span>人员管理</span></a>','options'=>['class'=>'nav-parent'],'items'=>[
                    ['label'=>'数据库后台人员信息','url'=>['user/index']],
                    ['label'=>'猫和老鼠小组成员信息','url'=>['tomandjerry/index']],
                ]
            ],            
        ];
    }
}