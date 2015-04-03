<style>

.thumbnail {
    border: 0px;
}
.user-left{
	padding-left: 20px;
	padding-bottom: 25px;
}
</style>
<div class="row">
<div class ="col-lg-4 col-md-12">
	<div class="panel panel-white">
		<div class="panel-heading border-light"></div>
		<div class="panel-body">
			<div class="center">

				<div class="fileupload fileupload-new" data-provides="fileupload">
					<div class="fileupload-new thumbnail">
						<img src="<?php if ($person && isset($person["imagePath"])) echo $person["imagePath"];?>" alt="">	
					</div>
					<div class="fileupload-preview fileupload-exists thumbnail"></div>
				</div>

				</hr>

				<div class="social-icons block">
					<ul>
						<li data-placement="top" data-original-title="Twitter" class="social-twitter tooltips">
							<a href="http://<?php if(isset($person["socialNetwork"]["twitterAccount"]) && $person["socialNetwork"]["twitterAccount"]!="")echo $person["socialNetwork"]["twitterAccount"]; else echo "http://www.twitter.com";?>" target="_blank">
								Twitter
							</a>
						</li>
						<li data-placement="top" data-original-title="Facebook" class="social-facebook tooltips">
							<a href="http://<?php if(isset($person["socialNetwork"]["facebookAccount"]) && $person["socialNetwork"]["facebookAccount"]!="")echo $person["socialNetwork"]["facebookAccount"]; else echo "http://www.facebook.com";?>" target="_blank">
								Facebook
							</a>
						</li>
						<li data-placement="top" data-original-title="Google" class="social-google tooltips">
							<a href="http://<?php if(isset($person["socialNetwork"]["gplusAccount"]) && $person["socialNetwork"]["gplusAccount"]!="")echo $person["socialNetwork"]["gplusAccount"]; else echo "http://www.google.com";?>" target="_blank">
								Google+
							</a>
						</li>
						<li data-placement="top" data-original-title="LinkedIn" class="social-linkedin tooltips">
							<a href="http://<?php if(isset($person["socialNetwork"]["linkedInAccount"]) && $person["socialNetwork"]["linkedInAccount"]!="")echo $person["socialNetwork"]["linkedInAccount"]; else echo "http://www.linkedin.com";?>" target="_blank">
								LinkedIn
							</a>
						</li>
						<li data-placement="top" data-original-title="Github" class="social-github tooltips">
							<a href="http://<?php if(isset($person["socialNetwork"]["gitHubAccount"]) && $person["socialNetwork"]["gitHubAccount"]!="")echo $person["socialNetwork"]["gitHubAccount"]; else echo "#";?>" target="_blank">
								Github
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-12">
	<div class="panel panel-white">
		<div class="panel-heading border-light">
			<h4 class="panel-title">About me</h4>
		</div>
		<div class="panel-tools">
			<a href="#" class="panel-collapse collapses"><i class="fa fa-heart text-pink"></i> <span>Follow</span> </a>
			<a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i> <span>Editer</span></a>
			<a href="#" class="btn btn-xs btn-link panel-close">
				<i class="fa fa-times"></i>
			</a>
		</div>
		<div class="panel-body no-padding">
			<div class="user-left">
				<h4><?php //echo Yii::app()->session["user"]["name"]?></h4>
				<!---->
				<table class="table table-condensed table-hover" >
					<thead>
						<tr>
							<th colspan="3">Information</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>DummyData</td>
							<td>
								<?php 
								if( !Admin::checkInitData( PHType::TYPE_CITOYEN, "personNetworkingAll" ) ){ ?>
									<a href="<?php echo Yii::app()->createUrl("/communecter/person/InitDataPeopleAll") ?>" class="btn btn-xs btn-red  pull-right" ><i class="fa fa-plus"></i> InitData : Dummy People</a>
								<?php } else { ?>
									<a href="<?php echo Yii::app()->createUrl("/communecter/person/clearInitDataPeopleAll") ?>" class="btn btn-xs btn-red  pull-right" ><i class="fa fa-plus"></i> Remove Dummy People</a>
								<?php } ?>
							</td>
						</tr>
						<tr>
							<td>url</td>
							<td><a href="#"><?php if(isset($person["url"]))echo $person["url"];?></a></td>
						</tr>
						<tr>
							<td>email</td>
							<td><a href=""><?php echo Yii::app()->session["userEmail"];?></a></td>
						</tr>
						<tr>
							<td>phone</td>
							<td><?php if(isset($person["phoneNumber"]))echo $person["phoneNumber"];?></td>
						</tr>
						<tr>
							<td>skype</td>
							<td><?php if(isset($person["skype"]))echo $person["skype"];?></td>
						</tr>
					</tbody>
				</table>
				<hr>
				<table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th colspan="3">General information</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Position</td>
							<td>UI Designer</td>
						</tr>
						<tr>
							<td>Position</td>
							<td>Senior Marketing Manager</td>
						</tr>
						<tr>
							<td>Supervisor</td>
							<td>
							<a href="#">
								<?php if(isset($person["supervisor"]))echo $person["supervisor"];?>
							</a></td>
						</tr>
					</tbody>
				</table>
				<table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th colspan="3">Additional information</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Birth</td>
							<td><?php if(isset($person["birth"]))echo $person["birth"];?></td>
							
						</tr>
						<tr>
							<td>Tags</td>
							<td><?php if(isset($person["tags"]))echo implode(",", $person["tags"]);?></td>
						</tr>
						<!--<tr>
							<td>Groups</td>
							<td>New company web site development, HR Management</td>
							<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
						</tr>-->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-4 col-md-12">
	<?php $this->renderPartial('dashboard/people',array( "people" => $people, "userId" => new MongoId($person["_id"]))); ?>
</div>
</div>
<div class="row">
	<div class="col-md-4">
		<?php $this->renderPartial('dashboard/organizations',array( "organizations" => $organizations, "userId" => new MongoId($person["_id"]))); ?>
	</div>
	<div class="col-md-4">
		<?php $this->renderPartial('dashboard/events',array( "events" => $events, "userId" => new MongoId($person["_id"]))); ?>
	</div>
	<div class="col-md-4">
		<?php $this->renderPartial('dashboard/projects',array( "projects" => $projects, "userId" => new MongoId($person["_id"]))); ?>
	</div>
</div>

<script>
var contextMap = {};
contextMap['person'] = <?php echo json_encode($person) ?>;
contextMap['organizations'] = <?php echo json_encode($organizations) ?>;
contextMap['events'] = [];
contextMap['projects'] = <?php echo json_encode($projects) ?>;
var events = <?php echo json_encode($events) ?>;
$.each(events, function(k, v){
	console.log(k, v);
	contextMap['events'].push(v);
});


jQuery(document).ready(function() {
	//initDataTable();
});


var initDataTable = function() {
	oTableOrganization = $('#organizations').dataTable({
		"aoColumnDefs" : [{
			"aTargets" : [0]
		}],
		/*"oLanguage" : {
			"sLengthMenu" : "Show _MENU_ Rows",
			"sSearch" : "",
			"oPaginate" : {
				"sPrevious" : "",
				"sNext" : ""
			}
		},
		"aaSorting" : [[1, 'asc']],
		"aLengthMenu" : [[5, 10, 15, 20, -1], [5, 10, 15, 20, "All"] // change per page values here
		],*/
		// set the initial value
		"iDisplayLength" : 10,
		"scrollY":        "230px",
		"scrollCollapse": true,
        "paging":         false
	});


	oTableEvent = $('#events').dataTable({
		"aoColumnDefs" : [{
			"aTargets" : [0]
		}],
		"oLanguage" : {
			"sLengthMenu" : "Show _MENU_ Rows",
			"sSearch" : "",
			"oPaginate" : {
				"sPrevious" : "",
				"sNext" : ""
			}
		},
		"aaSorting" : [[1, 'asc']],
		"aLengthMenu" : [[5, 10, 15, 20, -1], [5, 10, 15, 20, "All"] // change per page values here
		],
		// set the initial value
		"iDisplayLength" : 10,
	});

	oTablePeople= $('#people').dataTable({
		"aoColumnDefs" : [{
			"aTargets" : [0]
		}],
		"oLanguage" : {
			"sLengthMenu" : "Show _MENU_ Rows",
			"sSearch" : "",
			"oPaginate" : {
				"sPrevious" : "",
				"sNext" : ""
			}
		},
		"aaSorting" : [[1, 'asc']],
		"aLengthMenu" : [[5, 10, 15, 20, -1], [5, 10, 15, 20, "All"] // change per page values here
		],
		// set the initial value
		"iDisplayLength" : 10,
	});

	oTableProject = $('#projects').dataTable({
		"aoColumnDefs" : [{
			"aTargets" : [0]
		}],
		"oLanguage" : {
			"sLengthMenu" : "Show _MENU_ Rows",
			"sSearch" : "",
			"oPaginate" : {
				"sPrevious" : "",
				"sNext" : ""
			}
		},
		"aaSorting" : [[1, 'asc']],
		"aLengthMenu" : [[5, 10, 15, 20, -1], [5, 10, 15, 20, "All"] // change per page values here
		],
		// set the initial value
		"iDisplayLength" : 10,
	});
};
</script>