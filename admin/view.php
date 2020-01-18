<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<style>
	    @page { margin: 0px 0px 0px 0px; }
	    #footer{
	        position:absolute;
	        bottom:10px;
	        left:10px;
	    }
	    .wordSpacetd{
	        word-wrap: break-word;
	    }
	    table tr td {
	        vertical-align:top;
	    }
	</style>
</head>
<body>
    <?php include('header.php')?>
	<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="row pb-3 pr-2 pl-2 pt-1" style="border:1px solid black;">
<?php 
include('config.php');
$id = $_REQUEST['id'];
$query = "SELECT * FROM `form` WHERE `id`=$id";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
?>
                <div class="col-sm-12 mb-3">
                    <button class="float-right page-link mt-2 mr-2 d-print-none" onclick="window.print();">Print</button>
                </div>
				<div class="col-sm-4">
					<h3>Echo Cardiogram Report</h3>
				</div>
				<div class="col-sm-4 text-center">
				    <img src="heart.jpg" height="100" width="100">
				    </div>
				<div class="col-sm-4">
				    <label class="float-right">
				        <b>
				            Premier Cardiology Associates<br></b>
				        16969 N Texas Avenue, St 100,<br> Webster, TX 77598
				        <br>
				        Phone 281-694-4555 Fax 281-694-5595<br>
				         
				    </label>
				</div>
				<div class="col-12">
				    <br><br>
				    <div class="row">
				        <div class="col-6">
				            <b>Patient Name:</b>&nbsp;&nbsp; &nbsp;<?=$row['name']?>
				        </div>
				        <div style="padding:5px;" class="col-6">
				            <b>Patient ID:</b>&nbsp;&nbsp; &nbsp;<?=$row['patient_id']?>
				        </div>
				    </div>
				    <div class="row">
				        <div class="col-12">
				            <hr style="border:1px solid black;">
				            <table class="w-100">
				                <tr>
				                    <td style="width:10%;"><b>DOB:</b></td>
				                    <td style="width:40%;"><?=$row['dob']?></td>
				                    <td style="width:20%;"><b>Sonographer:</b></td>
				                    <td style="width:30%;"><?=$row['son_by']?></td>
				                </tr>
				                <tr>
				                    <td><b>SEX:</b></td>
				                    <td><?=$row['gender']?></td>
				                    <td><b>Date of Study:</b></td>
				                    <td><?=$row['ref_no']?></td>
				                </tr>
				            </table>
				            <hr style="border:1px solid black;">
				            <div class="w-100 text-right">
				                <label class="mr-5"><b>Study Quality: </b><?=$row['quality']?></label>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="col-12 table-responsive">
				    <h5 class="text-center">Findings</h5>
				    <table cellpadding="10" class="w-100">
				        <tr>
				            <td style="width:20%;"><b>Left Ventrice</b></td>
				            <td>LV chamber size is <?=$row['lv_size']?>. <?=$row['lv_thickness']?>. LV systolic function is <?=$row['sf']?>. Ejection fraction is estimated at <?=$row['ef']?>%. <?php if($row['global_lv']){echo $row['global_lv'].".";}?> There is <?=$row['df']?> dysfunction. <?php if($row['lv7']){echo $row['lv7'].".";}?> </td>
				        </tr>
				        <tr>
				            <td><b>Right Ventricle</b></td>
				            <td>RV chamber size is <?=$row['rv_size']?>. RV systloic function is <?=$row['rv_function']?>. <?php if($row['rv3']){echo $row['rv3'].".";}?></td>
				        </tr>
				        <tr>
				            <td><b>Left Atrium</b></td>
				            <td>LA chamber size is <?=$row['la_size']?>. <?php if($row['la2']){echo $row['la2'].".";}?> </td>
				        </tr>
				        <tr>
				            <td><b>Right Atrium</b></td>
				            <td>RA chamber size is <?=$row['ra_size']?>. <?php if($row['ra2']){echo $row['ra2'].".";}?> </td>
				        </tr>
				        <tr>
				            <td><b>Aortic Valve</b></td>
				            <td><?=$row['av_struct']?>. Aortic Valve leaflet excursion is <?=$row['avleaf']?>. There is <?=$row['av_function']?> aortic valve stenosis. AV peak gradient is <?=$row['peak_g']?> mm of hg. AV mean gradient is <?=$row['mean_g']?> mm of hg. AV area is <?=$row['av_area']?> sq cms. There is <?=$row['ar']?> aortic regurgition. <?=$row['av8']?>.</td>
				        </tr>
				        <tr>
				            <td><b>Mitral Valve</b></td>
				            <td>Mitral valve leaflets appears <?=$row['mv_struct']?>. <?php if($row['mv_pro']){echo $row['mv_pro'].".";}?> There is <?=$row['mr']?> mitral regurgitation.</td>
				        </tr>
				        <tr>
				            <td><b>Tricuspid Valve</b></td>
				            <td>Tricuspid Valve appears structurally <?=$row['tv_struct']?>. There is <?=$row['tr']?> tricuspid regurgitation.</td>
				        </tr>
				        <tr>
				            <td><b>Pulmonary Valve</b></td>
				            <td>Pulmonary Valve appears <?=$row['pv']?>. <?php if($row['pr']){echo $row['pr'].".";}?> </td>
				        </tr>
				        <tr>
				            <td><b>Pericardium</b></td>
				            <td><?php if($row['peff']){echo $row['peff'].".";}?> </td>
				        </tr>
				        <tr>
				            <td><b>Aorta</b></td>
				            <td><?php if($row['aorta']){echo $row['aorta'].".";}?> </td>
				        </tr>
				        <tr>
				            <td><b>Venous</b></td>
				            <td><?php if($row['venous']){echo $row['venous'].".";}?> </td>
				        </tr>
				        <tr>
				            <td><b>Echo Dimensions and Doppler</b></td>
				            <td><?php if($row['doppler1']){echo $row['doppler1'].".";}?> <?php if($row['doppler2'] != '2D and Mmode measurements are within normal limits'){ ?>The following abnormal measurements were noted:- <?=$row['doppler2']?><?php }else{?> <?=$row['doppler2']?> <?php }?></td>
				        </tr>
				    </table>
				</div>
				<div class="col-12">
				    <table cellpadding="10" class="w-100">
				        <tr>
				            <td style="width:20%;"><b>Impressions</b></td>
				            <td class="wordSpacetd"><p><?=$row['impression']?></p></td>
				        </tr>
				    </table>
				</div>
				<div class="col-12 mt-5">
				    <table class="w-100">
				        <tr>
				            <td style="width:100%;">
				                <b>Electronic Signed By:</b>
				            </td>
				        </tr>
				    </table>
				    <table class="w-100">
				        <tr>
				            <td style="width:100%;">
				                <?=$row['doc_name']?>
				            </td>
				        </tr>
				    </table>
				</div>
				<div class="col-12 text-center">
				    <br><br>
				</div>
				<?php } ?>
			</div>
		</div>
		<div id="" class="d-print-none"><i>JDK Web Solutions and JDK Multimedia LLC </i></div>
	</div>
</div>
<br><br>
</body>
</html>
