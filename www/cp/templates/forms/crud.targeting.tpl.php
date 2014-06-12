<div class="widget">
    <div class="widget-header">
        <span class="icon-article"></span>
        <h3><?php echo __('PUBLICATION_TARGETING');?></h3>
    </div> <!-- .widget-header -->

    <div class="widget-content">
        <?php if ($user_detail['tooltip_setting']==1): ?>
        <div class="notify notify-info">
            <p>Enter targeting details for your campaign below. You can target your campaign by country, region, device type, and Android/iOS version.</p>
        </div> <!-- .notify -->
        <?php endif; ?>
       <!--
       <div class="field-group control-group inline">
            <div class="field">
                <input type="radio"   onclick="document.getElementById('country_target').style.display='none';" name="geo_targeting" id="geo_targeting_all" value="1" />
                <label for="geo_targeting_all">All Countries</label>
            </div>

            <div id="interstitialoptiobutton" class="field">
                <input type="radio"  onclick="document.getElementById('country_target').style.display='block';" name="geo_targeting" id="geo_targeting_co" value="2" />
                <label for="geo_targeting_co">Specific Countries/Regions</label>
            </div>
            <!--<div style="color:#999; font-size:11px;">Geographic Targeting</div>
            <div style="margin-top:7px; list-style:none; list-style-type:none; z-index:10000;" id="country_target" class="field-group">
                <div class="field">
                    <input type="text" value="<?php if (isset($editdata['inv_name'])){ echo $editdata['inv_name']; } ?>" placeholder="Start typing a country or region name..."  name="country_targeting" id="country_targeting" style="width:280px; background-color:#EBEBEB; -moz-border-radius: 5px; border-radius: 5px;" />
                </div>
            </div> <!-- .field-group
<script language="javascript">
<?php json_regions('', 'data'); ?>

<?php
     if ($current_action=='create' && !empty($editdata['as_values_1'])){
         json_prefill_countrylist('create', $editdata['as_values_1']);
     }
     else if ($current_action=='edit' && isset($editdata['preload_country']) && $editdata['preload_country']==1){
         json_prefill_countrylist('edit', $_GET['id']);
     }
     else if ($current_action=='edit' && !empty($editdata['as_values_1'])){
         json_prefill_countrylist('create', $editdata['as_values_1']);
     }
     else {
?>

var selecteddata = {items: [
]};
<?php } ?>
$("input[id=country_targeting]").autoSuggest(data.items, {selectedItemProp: "name", searchObjProps: "name", asHtmlID: "1", preFill:selecteddata.items, neverSubmit:true});
</script>
</div>
-->

<div class="field-group control-group inline">
    <div class="field">
        <input type="radio"   onclick="document.getElementById('publicationtargetingtable').style.display='none';" name="publication_targeting" id="publication_targeting_all" value="1" />
        <label for="publication_targeting_all"><?php echo __('PUBLICATION_ALL');?></label>
    </div>

    <div id="interstitialoptiobutton" class="field">
        <input type="radio"  onclick="document.getElementById('publicationtargetingtable').style.display='block';" name="publication_targeting" id="publication_targeting_co" value="2" />
    <label for="publication_targeting_co"><?php echo __('SELECT_PUBLICATION_AND_PLACEMENT');?></label>
   </div>

<!--                                    <div style="color:#999; font-size:11px;">Device Targeting</div>
 -->

 <table width="584" border="0" cellpadding="6" cellspacing="0" id="publicationtargetingtable" style="-moz-border-radius: 5px; border-radius: 5px; margin-top:5px;">
  <?php if (!isset($editdata['placement_select'])){$editdata['placement_select']='';} list_placements_campaign($editdata['placement_select']); ?>

  <!--<tr>
    <td><div align="left"><a class="tooltip" style="font-size:11px;" onclick="" href="#" >Select All</a> | <a class="tooltip" style="font-size:11px;" href="#" >Un-Select All</a></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> -->
</table>


                  </div>
<!--
          <div class="field-group control-group inline">


                                                                        <div class="field">
                                                                                <input type="radio"   onclick="document.getElementById('channeltargetingtable').style.display='none';" name="channel_targeting" id="channel_targeting_all" value="1" />
                                                                                <label for="channel_targeting_all">All Channels</label>
                                                                        </div>

                                                                        <div id="interstitialoptiobutton" class="field">
                                                                                <input type="radio"  onclick="document.getElementById('channeltargetingtable').style.display='block';" name="channel_targeting" id="channel_targeting_co" value="2" />
                                                                                <label for="channel_targeting_co">Specific Channels</label>
                                                                        </div>

<!--                                    <div style="color:#999; font-size:11px;">Device Targeting</div>


 <table width="584" border="0" cellpadding="6" cellspacing="0" id="channeltargetingtable" style="-moz-border-radius: 5px; border-radius: 5px; margin-top:5px;">
  <?php if (!isset($editdata['channel_select'])){$editdata['channel_select']='';} list_channels_campaign($editdata['channel_select']); ?>

</table>


                  </div>


  <div class="field-group control-group inline">


                                                                        <div class="field">
                                                                          <input type="radio"   onclick="document.getElementById('devicetargetingtable').style.display='none';" name="device_targeting" id="device_targeting_all" value="1" />
                                                                                <label for="device_targeting_all">All Devices</label>
                                                                        </div>

                                                                        <div id="interstitialoptiobutton" class="field">
                                                                          <input type="radio"  onclick="document.getElementById('devicetargetingtable').style.display='block';" name="device_targeting" id="device_targeting_co" value="2" />
                                                                                <label for="device_targeting_co">Specific Device/OS</label>
                                                                        </div>

<!--      <div style="color:#999; font-size:11px;">Device Targeting</div>

                                    <table style=" -moz-border-radius: 5px; border-radius: 5px; margin-top:5px;" id="devicetargetingtable" width="800" border="0">
  <tr>
    <td width="26%"><div><input <?php if (isset($editdata['target_iphone']) && $editdata['target_iphone']==1){echo 'checked="checked"'; }?> name="target_iphone" value="1" type="checkbox" />iPhone <input <?php if (isset($editdata['target_ipod']) && $editdata['target_ipod']==1){echo 'checked="checked"'; }?> name="target_ipod" value="1" type="checkbox" />iPod <input <?php if (isset($editdata['target_ipad']) && $editdata['target_ipad']==1){echo 'checked="checked"'; }?> name="target_ipad" value="1" type="checkbox" />iPad</div><div><input <?php if (isset($editdata['target_android']) && $editdata['target_android']==1){echo 'checked="checked"'; }?> name="target_android" value="1" type="checkbox" />Android</div><div><input <?php if (isset($editdata['target_other']) && $editdata['target_other']==1){echo 'checked="checked"'; }?>  name="target_other" value="1" type="checkbox" />Other</div></td>
    <td width="2%">&nbsp;</td>
    <td width="72%"><div>Min: <select name="ios_version_min" id="id_ios_version_min">

       <option <?php if (empty($editdata['ios_version_min'])){echo 'selected="selected"'; } ?> value="">No Min</option>

        <option <?php if (isset ($editdata['ios_version_min']) && $editdata['ios_version_min']=="2.0"){echo 'selected="selected"'; } ?> value="2.0">2.0</option>

        <option <?php if (isset ($editdata['ios_version_min']) && $editdata['ios_version_min']=="2.1"){echo 'selected="selected"'; } ?> value="2.1">2.1</option>

        <option <?php if (isset ($editdata['ios_version_min']) && $editdata['ios_version_min']=="3.0"){echo 'selected="selected"'; } ?> value="3.0">3.0</option>

        <option <?php if (isset ($editdata['ios_version_min']) && $editdata['ios_version_min']=="3.1"){echo 'selected="selected"'; } ?> value="3.1">3.1</option>

        <option <?php if (isset ($editdata['ios_version_min']) && $editdata['ios_version_min']=="3.2"){echo 'selected="selected"'; } ?> value="3.2">3.2</option>

        <option <?php if (isset ($editdata['ios_version_min']) && $editdata['ios_version_min']=="4.0"){echo 'selected="selected"'; } ?> value="4.0">4.0</option>

        <option  <?php if (isset ($editdata['ios_version_min']) && $editdata['ios_version_min']=="4.1"){echo 'selected="selected"'; } ?>value="4.1">4.1</option>

        <option <?php if (isset ($editdata['ios_version_min']) && $editdata['ios_version_min']=="4.2"){echo 'selected="selected"'; } ?> value="4.2">4.2</option>

        <option <?php if (isset ($editdata['ios_version_min']) && $editdata['ios_version_min']=="4.3"){echo 'selected="selected"'; } ?> value="4.3">4.3</option>

        <option <?php if (isset ($editdata['ios_version_min']) && $editdata['ios_version_min']=="5.0"){echo 'selected="selected"'; } ?> value="5.0">5.0</option>

      </select> Max:

      <select name="ios_version_max" id="id_ios_version_max">

        <option <?php if (empty($editdata['ios_version_max'])){echo 'selected="selected"'; } ?> value="">No Max</option>

        <option <?php if (isset ($editdata['ios_version_max']) && $editdata['ios_version_max']=="2.0"){echo 'selected="selected"'; } ?> value="2.0">2.0</option>

        <option <?php if (isset ($editdata['ios_version_max']) && $editdata['ios_version_max']=="2.1"){echo 'selected="selected"'; } ?> value="2.1">2.1</option>

        <option <?php if (isset ($editdata['ios_version_max']) && $editdata['ios_version_max']=="3.0"){echo 'selected="selected"'; } ?> value="3.0">3.0</option>

        <option <?php if (isset ($editdata['ios_version_max']) && $editdata['ios_version_max']=="3.1"){echo 'selected="selected"'; } ?> value="3.1">3.1</option>

        <option  <?php if (isset ($editdata['ios_version_max']) && $editdata['ios_version_max']=="3.2"){echo 'selected="selected"'; } ?> value="3.2">3.2</option>

        <option <?php if (isset ($editdata['ios_version_max']) && $editdata['ios_version_max']=="4.0"){echo 'selected="selected"'; } ?> value="4.0">4.0</option>

        <option <?php if (isset ($editdata['ios_version_max']) && $editdata['ios_version_max']=="4.1"){echo 'selected="selected"'; } ?> value="4.1">4.1</option>

        <option <?php if (isset ($editdata['ios_version_max']) && $editdata['ios_version_max']=="4.2"){echo 'selected="selected"'; } ?> value="4.2">4.2</option>

        <option <?php if (isset ($editdata['ios_version_max']) && $editdata['ios_version_max']=="4.3"){echo 'selected="selected"'; } ?> value="4.3">4.3</option>

        <option <?php if (isset ($editdata['ios_version_max']) && $editdata['ios_version_max']=="5.0"){echo 'selected="selected"'; } ?> value="5.0">5.0</option>

      </select></div><div>Min: <select name="android_version_min" id="android_version_min">

      <option <?php if (empty($editdata['android_version_min'])){echo 'selected="selected"'; } ?> value="">No Min</option>

       <option <?php if (isset ($editdata['android_version_min']) && $editdata['android_version_min']=="1.5"){echo 'selected="selected"'; } ?> value="1.5">1.5</option>

        <option <?php if (isset ($editdata['android_version_min']) && $editdata['android_version_min']=="1.6"){echo 'selected="selected"'; } ?> value="1.6">1.6</option>

        <option <?php if (isset ($editdata['android_version_min']) && $editdata['android_version_min']=="2.0"){echo 'selected="selected"'; } ?> value="2.0">2.0</option>

        <option <?php if (isset ($editdata['android_version_min']) && $editdata['android_version_min']=="2.1"){echo 'selected="selected"'; } ?> value="2.1">2.1</option>

        <option <?php if (isset ($editdata['android_version_min']) && $editdata['android_version_min']=="2.2"){echo 'selected="selected"'; } ?> value="2.2">2.2</option>

        <option <?php if (isset ($editdata['android_version_min']) && $editdata['android_version_min']=="2.3"){echo 'selected="selected"'; } ?> value="2.3">2.3</option>

        <option <?php if (isset ($editdata['android_version_min']) && $editdata['android_version_min']=="3.0"){echo 'selected="selected"'; } ?> value="3.0">3.0</option>

      </select> Max:

      <select name="android_version_max" id="android_version_max">

         <option <?php if (empty($editdata['android_version_max'])){echo 'selected="selected"'; } ?> value="">No Max</option>

        <option <?php if (isset ($editdata['android_version_max']) && $editdata['android_version_max']=="1.5"){echo 'selected="selected"'; } ?> value="1.5">1.5</option>

        <option <?php if (isset ($editdata['android_version_max']) && $editdata['android_version_max']=="1.6"){echo 'selected="selected"'; } ?> value="1.6">1.6</option>

        <option <?php if (isset ($editdata['android_version_max']) && $editdata['android_version_max']=="2.0"){echo 'selected="selected"'; } ?> value="2.0">2.0</option>

        <option <?php if (isset ($editdata['android_version_max']) && $editdata['android_version_max']=="2.1"){echo 'selected="selected"'; } ?> value="2.1">2.1</option>

        <option <?php if (isset ($editdata['android_version_max']) && $editdata['android_version_max']=="2.2"){echo 'selected="selected"'; } ?> value="2.2">2.2</option>

        <option <?php if (isset ($editdata['android_version_max']) && $editdata['android_version_max']=="2.3"){echo 'selected="selected"'; } ?> value="2.3">2.3</option>

        <option <?php if (isset ($editdata['android_version_max']) && $editdata['android_version_max']=="3.0"){echo 'selected="selected"'; } ?> value="3.0">3.0</option>


      </select></div><div>-</div></td>
  </tr>
</table>

                                                  </div>-->

                                        </div> <!-- .widget-content -->

                                        </div> <!-- .widget -->
</div>
</div>