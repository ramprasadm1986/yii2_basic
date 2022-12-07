 <?php
use yii\helpers\Url;

?>
    
<div class="sidebar-toggle-box">
    <i class="fa fa-bars"></i>
</div>
<!--logo start-->
    <a href="<?= Yii::$app->homeUrl?>" class="logo"><?= Yii::getAlias('@APP_NAME_P1')?><span> <?= Yii::getAlias('@APP_NAME_P2')?></span></a>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
<span class="adminrole"><?php //= Yii::$app->user->identity->adminRole->rollname?> <span class="badge badge-primary"><?php //= Yii::$app->user->identity->adminRole->code?></span></span>
</div>

<div class="top-nav ">
      <!--search & user info start-->
      <ul class="nav pull-right top-menu">
         
          <!-- user login dropdown start-->
          <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <img alt="" src="<?= Yii::$app->homeUrl?>/img/avatar-mini.jpg">
                  <span class="username"><?= Yii::$app->user->identity->username ?></span>
                  <b class="caret"></b>
              </a>
              <ul class="dropdown-menu extended logout dropdown-menu-right">
                  <div class="log-arrow-up"></div>
                  <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                  <li><a href="#"><i class="fa fa-bell"></i> Notification</a></li>
                  <li><a href="<?= Url::to(['/site/logout']);?>" data-method="post"><i class="fa fa-key"></i> Log Out</a></li>
              </ul>
          </li>
          
          <!-- user login dropdown end -->
      </ul>
      <!--search & user info end-->
 </div>