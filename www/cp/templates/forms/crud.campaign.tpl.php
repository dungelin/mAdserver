<script src="assets/javascripts/jquery-1.7.1.min.js"></script>

<script src="assets/javascripts/plugins/autocomplete/jquery.autoSuggest.js"></script>
<link rel="stylesheet" type="text/css" href="assets/javascripts/plugins/autocomplete/autoSuggest.css">

<script language="javascript">
<!-- 	
// by Nannette Thacker
// http://www.shiningstar.net
// This script checks and unchecks boxes on a form
// Checks and unchecks unlimited number in the group...
// Pass the Checkbox group name...
// call buttons as so:
// <input type=button name="CheckAll"   value="Check All"
	//onClick="checkAll(document.myform.list)">
// <input type=button name="UnCheckAll" value="Uncheck All"
	//onClick="uncheckAll(document.myform.list)">
// -->


function geo_targeting(status){

	if (status=="off"){
$("#geo_targeting_all").attr("checked", "true");
document.getElementById('country_target').style.display='none';
	}
	if (status=="on"){
	$("#geo_targeting_co").attr("checked", "true");
	document.getElementById('country_target').style.display='block';
	}

}


function device_targeting(status){

	if (status=="off"){
$("#device_targeting_all").attr("checked", "true");
document.getElementById('devicetargetingtable').style.display='none';
	}
	if (status=="on"){
	$("#device_targeting_co").attr("checked", "true");
	document.getElementById('devicetargetingtable').style.display='block';
	}

}

function publication_targeting(status){

	if (status=="off"){
$("#publication_targeting_all").attr("checked", "true");
document.getElementById('publicationtargetingtable').style.display='none';
	}
	if (status=="on"){
	$("#publication_targeting_co").attr("checked", "true");
	document.getElementById('publicationtargetingtable').style.display='block';
	}

}

function channel_targeting(status){

	if (status=="off"){
$("#channel_targeting_all").attr("checked", "true");
document.getElementById('channeltargetingtable').style.display='none';
	}
	if (status=="on"){
	$("#channel_targeting_co").attr("checked", "true");
	document.getElementById('channeltargetingtable').style.display='block';
	}

}


function startdate(status){

	if (status=="off"){
$("#start_date_im").attr("checked", "true");
document.getElementById('startdate').style.display='none';
	}
	if (status=="on"){
	$("#start_date_co").attr("checked", "true");
	document.getElementById('startdate').style.display='block';
	}

}

function enddate(status){

	if (status=="off"){
$("#end_date_no").attr("checked", "true");
document.getElementById('enddate').style.display='none';
	}
	if (status=="on"){
	$("#end_date_co").attr("checked", "true");
	document.getElementById('enddate').style.display='block';
	}

}

function network_campaign(status){

	if (status=="off"){
	document.getElementById('network_select').style.display='none'; document.getElementById('create_adunit').style.display='block';
	}
	if (status=="on"){
	document.getElementById('network_select').style.display='block'; document.getElementById('create_adunit').style.display='none';
	}

}

function checkAll(theForm, cName, status) {
		for (i=0,n=theForm.elements.length;i<n;i++)
		  if (theForm.elements[i].className.indexOf(cName) !=-1) {
		    theForm.elements[i].checked = status;
		  }
		}

</script>
<div class="widget">
    <div class="widget-header">
        <span class="icon-article"></span>
        <h3><?php echo __('CAMPAIGN_DETAILS');?></h3>
	</div> <!-- .widget-header -->

    <div class="widget-content">
    <?php if ($user_detail['tooltip_setting']==1): ?>
    <div class="notify notify-info">
        <p>Please enter some general details about your campaign below.</p>
	</div> <!-- .notify -->
    <?php endif; ?>
    <!--默认campaign_type＝1-->
    <div class="field-group">
        <div class="field">
            <!--<select <?php if ($current_action=='create'){?>onchange="if (this.options[this.selectedIndex].value=='network'){document.getElementById('network_select').style.display='block'; document.getElementById('create_adunit').style.display='none';} else {document.getElementById('network_select').style.display='none'; document.getElementById('create_adunit').style.display='block';}"<?php } ?><?php if ($current_action=='edit'){?>onchange="if (this.options[this.selectedIndex].value=='network'){document.getElementById('network_select').style.display='block';} else {document.getElementById('network_select').style.display='none';}"<?php } ?> id="campaign_type" name="campaign_type">
			    <option <?php if (isset($editdata['campaign_type']) && $editdata['campaign_type']==1){echo 'selected="selected"'; } ?> value="1">Direct Sold</option>
				<option <?php if (isset($editdata['campaign_type']) && $editdata['campaign_type']==2){echo 'selected="selected"'; } ?> value="2">Promotional</option>
				<?php if (isset($editdata['campaign_type']) && $editdata['campaign_type']=='network'){echo 'selected="selected"'; } ?> value="network">Ad Network</option>
  		   </select>
           <a style="font-size:11px;" href="#" onclick="$.modal ({title: 'Campaign Types', html: '<div style=width:500px;;><h3>Direct Sold</h3>A direct sold campaign is a fixed campaign in the system, typically with a high priority and a limited number of impressions.<br><br><h3>Promotional</h3>A promotional campaign is a campaign cross-promoting other apps or products. Cross promotional campaigns typically have a low priority to only show when an ad space cannot be filled by direct sold campaigns or ad networks.<br><br><h3>Ad Network</h3>An ad network campaign is a campaign sending traffic to a particular network. If a network is unable to fill the ad-request, the system will automatically select the next campaign with a lower priority until an ad has been found. Ad Network campaigns are usually targeted by country in order to select the best-paying partner for a particular geographic.</div>'});" title="Click for more info">Info</a>
		   <label for="campaign_type"><?php echo __('CAMPAIGN_TYPE');?></label>
	   </div>
   </div>--> <!-- .field-group -->
   <input type="hidden" name="campaign_type" value="1" />
   <!--默认campaign_tpye结束-->

   <div id="network_select" style="display:none;" class="field-group">
       <div class="field">
	       <select id="campaign_networkid" name="campaign_networkid">
           <?php if (!isset($editdata['campaign_networkid'])){$editdata['campaign_networkid']='';} get_network_dropdown($editdata['campaign_networkid']); ?>
           </select>
           <a class="tooltip" style="font-size:11px;" href="#" onclick="$.modal ({title: 'Network Publisher IDs', html: '<div style=width:500px;;><h3>Ad Networks</h3>In order to start sending mobile traffic to an ad network of your choice, you will have to create an account with the advertising network and then enter the Publisher IDs/Site IDs on the <a href=\'ad_networks.php\' target=\'_blank\'>Network Configuration</a> page in your mAdserve ad server. mAdserve will then automatically send all your traffic to the respective ad network. Revenue and other Reporting metrics will be reported and visible directly in your account with the ad network.</div>'});">
          Publisher ID Info
          </a>
		  <label for="campaign_networkid">Ad Network</label>
	   </div>
    </div> <!-- .field-group -->

    <div class="field-group">
        <div class="field">
            <select id="campaign_priority" name="campaign_priority">
			<?php if (!isset($editdata['campaign_priority'])){$editdata['campaign_priority']='';}  get_priority_dropdown($editdata['campaign_priority']); ?>
			</select>
            <a class="tooltip" style="font-size:11px;" href="#" title="<?php echo __('CAMPAIGN_PRIORITY_TIPS')?>">
           Info
           </a>
		   <label for="campaign_priority"><?php echo __('CAMPAIGN_PRIORITY');?></label>
	   </div>
    </div> <!-- .field-group -->

    <div class="field-group">
  	   <div class="field">
	       <input type="text" value="<?php if (isset($editdata['campaign_name'])){ echo $editdata['campaign_name']; } ?>"  name="campaign_name" id="campaign_name" size="28" class="" />
  		   <label for="campaign_name"><?php echo __('CAMPAIGN_NAME');?></label>
	   </div>
    </div> <!-- .field-group -->

    <div class="field-group">
        <div class="field">
		    <textarea name="campaign_desc" id="campaign_desc" rows="3" cols="29">
            <?php if (isset($editdata['campaign_desc'])){ echo $editdata['campaign_desc']; } ?>
            </textarea>
            <label for="campaign_desc"><?php echo __('CAMPAIGN_NOTES');?></label>
	   </div>
    </div> <!-- .field-group -->

    <div class="field-group control-group inline">
        <div class="field">
		    <input type="radio"   onclick="document.getElementById('startdate').style.display='none';" name="start_date_type" id="start_date_im" value="1" />
			<label for="start_date_im"><?php echo __('CAMPAIGN_START_IMMEDIATELY');?></label>
		</div>

        <div id="interstitialoptiobutton" class="field">
		    <input type="radio"  onclick="document.getElementById('startdate').style.display='block';" name="start_date_type" id="start_date_co" value="2" />
			<label for="start_date_co"><?php echo __('CAMPAIGN_CUSTOM_START_DATE');?></label>
		</div>
        <div style="color:#999; font-size:11px;"><?php echo __('CAMPAIGN_START_DATE');?></div>
    </div>

    <div  style="display:none;" id="startdate" class="field-group inlineField">
        <div class="field">
		    <div id="startdatepicker"></div>
		</div> <!-- .field -->
    </div> <!-- .field-group -->
    <input type="hidden" name="startdate_value" id="startdate_value" />

    <div class="field-group control-group inline">
        <div class="field">
            <input type="radio"   onclick="document.getElementById('enddate').style.display='none';" name="end_date_type" id="end_date_no" value="1" />
            <label for="end_date_no"><?php echo __('CAMPAIGN_NO_END_DATE');?></label>
		</div>

        <div id="interstitialoptiobutton" class="field">
		    <input type="radio"  onclick="document.getElementById('enddate').style.display='block';" name="end_date_type" id="end_date_co" value="2" />
			<label for="end_date_co"><?php echo __('CAMPAIGN_CUSTOM_END_DATE');?></label>
	   </div>
       <div style="color:#999; font-size:11px;"><?php echo __('CAMPAIGN_END_DATE');?></div>
    </div>

    <div id="enddate" style="display:none;" class="field-group inlineField">
        <div class="field">
    	    <div id="enddatepicker"></div>
		</div> <!-- .field -->
   </div> <!-- .field-group -->
   <input type="hidden" name="enddate_value" id="enddate_value" />

   <div class="field-group">
       <div class="field">
	       <label for="textfield"></label>
		   <input size="10" type="text" value="<?php if (isset($editdata['total_amount'])){ echo $editdata['total_amount']; } ?>" name="total_amount" id="total_amount" />
		   <select id="cap_type	" name="cap_type">
		       <option <?php if (isset($editdata['cap_type']) && $editdata['cap_type']==1){echo 'selected="selected"'; } ?> value="1">impressions / day</option>
			   <option <?php if (isset($editdata['cap_type']) && $editdata['cap_type']==2){echo 'selected="selected"'; } ?> value="2">total impressions</option>
		   </select>
           <a class="tooltip" style="font-size:11px;" href="#" title="<?php echo __('CAMPAIGN_IMP_CAP');?>">
          Info
          </a>
		  <label for="total_amount">Impression <?php echo __('CAP');?> (<?php echo __('OPTIONAL');?>)</label>
       </div>
  </div> <!-- .field-group -->
</div> <!-- .widget-content -->
</div> <!-- .widget -->

<?php include 'crud.targeting.tpl.php';
    //投放限制
?>
<script src="assets/javascripts/all.js"></script>