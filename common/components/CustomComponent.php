<?php
namespace common\components;

use common\models\Statistic;
use yii\base\Component;

class CustomComponent extends Component{
    const EVENT_AFTER = "event-after";

    public function addToStatistic(){
        $param = \Yii::$app->request;
        $statistic = new Statistic();
        $statistic->access_time = date('Y-m-d H:i:s');
        $statistic->user_ip = $param->userIP;
        $statistic->user_host = $param->userHost;
        $statistic->path_info = $param->pathInfo;
        $statistic->query_string = $param->queryString;

        $statistic->save();
    }
}