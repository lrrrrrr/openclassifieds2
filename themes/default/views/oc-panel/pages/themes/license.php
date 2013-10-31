<?php defined('SYSPATH') or die('No direct script access.');?>

<?=Form::errors()?>
<div class="page-header">
    <h1><?=__('Theme License')?> <?=(Request::current()->param('id')!==NULL)?Request::current()->param('id'):Theme::$theme?></h1>
    <p><?=__('Please insert here the license for your theme.')?></p>
    
</div>

<div class="well">
<form action="<?=URL::base()?><?=Request::current()->uri()?>" method="post" class="form-horizontal"> 
    <fieldset>
        <div class="control-group">
            <label class="control-label"><?=__('License')?></label>
            <div class="controls docs-input-sizes">
              <input class="input-xlarge" type="text" name="license" value="" placeholder="<?=__('License')?>">
            </div>
          </div>
        <div class="form-actions">
            <?= FORM::button('submit', __('Check'), array('type'=>'submit', 'class'=>'btn-small btn-primary'))?>
        </div>
    </fieldset> 
</form>
</div><!--end span10-->