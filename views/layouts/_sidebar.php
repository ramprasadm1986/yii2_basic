<div id="sidebar"  class="nav-collapse ">
        
    <?=
    \ramprasadm1986\flatbed\widgets\Menu::widget([
        'options'=>['id'=>"nav-accordion"],
        "items" => [
            ["label" => "Dashboard", "url" => Yii::$app->homeUrl,"ipre" => "fas","icon" => "tachometer-alt",]
            
              
        ]
    ]);?>
</div>