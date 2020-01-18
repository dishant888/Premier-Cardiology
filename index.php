<?php
include('admin/config.php');
if(isset($_REQUEST['add']))
{
	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$dob = $_REQUEST['dob'];
	$gender = $_REQUEST['gender'];
	$refno = $_REQUEST['refno'];
	$quality = $_REQUEST['quality'];
	$lvSize = $_REQUEST['lvSize'];
	$lvWall = $_REQUEST['lvWall'];
	$globalLv = $_REQUEST['globalLv'];
	$lv7 = $_REQUEST['lv7'];
	$sf = $_REQUEST['sf'];
	$ef = $_REQUEST['ef'];
	$df = $_REQUEST['df'];
	$rvChamber = $_REQUEST['rvChamber'];
	$rvSF = $_REQUEST['rvSF'];
	$rv3 = $_REQUEST['rv3'];
	$laSize = $_REQUEST['laSize'];
	$la2 = $_REQUEST['la2'];
	$raSize = $_REQUEST['raSize'];
	$ra2 = $_REQUEST['ra2'];
	$avStruct = $_REQUEST['avStruct'];
	$avleaf = $_REQUEST['avleaf'];
	$avF = $_REQUEST['avF'];
	$ar = $_REQUEST['ar'];
	$peakG = $_REQUEST['peakG'];
	$meanG = $_REQUEST['meanG'];
	$avArea = $_REQUEST['avArea'];
	$mvStruct = $_REQUEST['mvStruct'];
	$mvPro = $_REQUEST['mvPro'];
	$mr = $_REQUEST['mr'];
	$tvStruct = $_REQUEST['tvStruct'];
	$tr = $_REQUEST['tr'];
	$pv = $_REQUEST['pv'];
	$pr = $_REQUEST['pr'];
	$peff = $_REQUEST['peff'];
	$arota = $_REQUEST['arota'];
	$impression = $_REQUEST['impression'];
	$doc_name = $_REQUEST['doc_name'];
	$son_by = $_REQUEST['son_by'];
	$venous = $_REQUEST['venous'];
	$doppler2 = $_REQUEST['doppler2'];

	$query = "INSERT INTO `form`(`patient_id`, `name`, `dob`, `gender`, `ref_no`, `quality`, `lv_size`, `lv_thickness`, `global_lv`,`lv7`, `sf`, `ef`, `df`, `rv_size`, `rv_function`,`rv3`, `la_size`,`la2`, `ra_size`,`ra2`, `av_struct`,`avleaf`, `av_function`, `ar`, `peak_g`, `mean_g`, `av_area`, `mv_struct`, `mv_pro`, `mr`, `tv_struct`, `tr`, `pv`,`pr`,`peff`, `aorta`,`impression`,`doc_name`,`son_by`,`venous`,`doppler2`) VALUES ('$id','$name','$dob','$gender','$refno','$quality','$lvSize','$lvWall','$globalLv','$lv7','$sf','$ef','$df','$rvChamber','$rvSF','$rv3','$laSize','$la2','$raSize','$ra2','$avStruct','$avleaf','$avF','$ar',$peakG,$meanG,$avArea,'$mvStruct','$mvPro','$mr','$tvStruct','$tr','$pv','$pr','$peff','$arota','$impression','$doc_name','$son_by','$venous','$doppler2')";
    //echo $query;exit();
	$result = mysqli_query($con,$query);
	if($result)
	{
		$last_id = mysqli_insert_id($con);
		header('Location: view.php?id='.$last_id);
	}
	else
	{
		echo "<script>alert('Error while Adding')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Premire</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	
</head>
<body>
	<?php include('header.php'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<form action="index.php" method="post">
			<div class="row">
				<div class="col-sm-6 text-center offset-3">
					<h3>Premier Cardiology Clinic</h3>
					<h4>ECHO CARDIOGRAM REPORT</h4><hr>
				</div>
				<div class="col-sm-4">
					<table class="w-100 text-center">
						<tr>
							<th>Patient ID:</th>
							<td>
								<input required type="text" name="id" class="form-control form-control-sm">
							</td>
						</tr>
						<tr>
							<th>Patient Name:</th>
							<td>
								<input required type="text" name="name" class="form-control form-control-sm">
							</td>
						</tr>
						<tr>
							<th>D.O.B</th>
							<td>
								<input required type="text" placeholder="  MM/DD/YYYY" name="dob" class="form-control form-control-sm datepicker">
							</td>
						</tr>
						<tr>
							<th>Sex:</th>
							<td>
								<select required name="gender" class="form-control form-control-sm">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-sm-4 offset-4">
					<table class="w-75 text-center">
						<tr>
							<th colspan="2"></th>
						</tr>
						<tr>
							<th>Date of Study</th>
							<td>
							<input type="text" required name="refno" placeholder="  MM/DD/YYYY" class="form-control form-control-sm datepicker">
							</td>
						</tr>
						<tr>
						    <th>Sonographer </th>
						    <td>
						        <input type="text" required name="son_by" class="form-control form-control-sm">
						    </td>
						</tr>
					</table>
				</div>
				<div class="col-sm-4 offset-4">
					<hr>
					<table class="w-100 text-center">
						<tr>
							<th>Study Quality</th>
							<td>
								<select required name="quality" class="form-control form-control-sm">
									<option value="">---SELECT---</option>
									<option value="Adequate">Adequate</option>
									<option value="Satisfactory">Satisfactory</option>
									<option value="Limited">Limited</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-sm-12 text-center mt-3">
						<table class="table-sm w-75 offset-2 table-bordered table-hover">
							<tr>
								<td rowspan="7">
									<h5>Left Ventricle</h5>
								</td>
								<td>L.V Chamber size</td>
								<td>
									<select required name="lvSize" class="form-control form-control-sm w-75">
										<option>---SELECT---</option>
										<option selected value="normal">Normal</option>
										<option value="mildly enlarged">Mildly enlarged</option>
										<option value="moderately enlarged">Moderately enlarged</option>
										<option value="severely enlarged">Severely enlarged</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>L.V Wall thickness</td>
								<td>
									<select required name="lvWall" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="LV wall thickness is normal">Normal</option>
										<option value="There is mild left Ventricular hypertrophy">Mild hypertrophy</option>
										<option value="There is moderate left Ventricular hypertrophy ">Moderate hypertrophy</option>
										<option value="There is severe left Ventricular hypertrophy">Severe hypertrophy</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Systolic Function</td>
								<td>
									<select required name="sf" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="normal">Normal</option>
										<option value="mildly reduced">Mildly reduced</option>
										<option value="moderately reduced">Moderately reduced</option>
										<option value="severely reduced">Severely reduced</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Ejection Fraction</td>
								<td class="form-inline">
									<input type="number" value="60" min="0" max="100" name="ef" class="form-control form-control-sm w-25 mr-1"> %
								</td>
							</tr>
							<tr>
							    <td colspan="2">
							        <input type="text" placeholder="Enter Text"  name="globalLv" value="There are no wall motion abnormalities" class="form-control input-sm">
							    </td>
							</tr>
							<tr>
								<td>Diastolic Function</td>
								<td align="left">
									<!--<select required name="df" class="form-control form-control-sm w-75">-->
									<!--	<option value="">---SELECT---</option>-->
									<!--	<option selected value="no diastolic">No Diastolic</option>-->
									<!--	<option value="mild diastolic">Mild Diastolic</option>-->
									<!--	<option value="moderate diastolic">Moderate Diastolic</option>-->
									<!--	<option value="severe diastolic">Severe Diastolic</option>-->
									<!--</select>-->
									<input type="radio" checked name="df" value="no diastolic"> No Diastolic <br>
									<input type="radio" name="df" value="mild diastolic"> Mild Diastolic <br>
									<input type="radio" name="df" value="moderate diastolic"> Moderate Diastolic <br>
									<input type="radio" name="df" value="severe diastolic"> Severe Diastolic 
								</td>
							</tr>
							<tr>
							    <td colspan="2">
							        <input type="text" name="lv7" value="There is no mass or thrombus" placeholder="Enter Text" class="form-control input-sm">
							    </td>
							</tr>
						<!-- </table>
						<table class="table-sm w-75 offset-2 table-bordered"> -->
							<tr>
								<td rowspan="3">
									<h5>Right Ventricle</h5>
								</td>
								<td>R.V Chamber size</td>
								<td>
									<select required name="rvChamber" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="normal">Normal</option>
										<option value="mildly enlarged">Mildly enlarged</option>
										<option value="moderately enlarged">Moderately enlarged</option>
										<option value="severely enlarged">Severely enlarged</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>R.V Systolic Function</td>
								<td>
									<select required name="rvSF" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="normal">Normal</option>
										<option value="mildly reduced">Mildly reduced</option>
										<option value="moderately reduced">Moderately reduced</option>
										<option value="severely reduced">Severely reduced</option>
									</select>
								</td>
							</tr>
							<tr>
							    <td colspan="2">
							        <input type="text" name="rv3" value="There is no mass or thrombus" placeholder="Enter Text" class="form-control input-sm">
							    </td>
							</tr>
							<tr>
								<td rowspan="2">
									<h5>Left Artium Chamber</h5>
								</td>
								<td>Left Atrial Chamber size</td>
								<td>
									<select required name="laSize" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="normal">Normal</option>
										<option value="mildly dilated">Mildly dilated</option>
										<option value="moderately dilated">Moderately dilated</option>
										<option value="severely dilated">Severely dilated</option>
									</select>
								</td>
							</tr>
							<tr>
							    <td colspan="2">
							        <input type="text" name="la2" value="There is no mass or thrombus" placeholder="Enter Text" class="form-control input-sm">
							    </td>
							</tr>
							<tr>
								<td rowspan="2">
									<h5>Right Artium Chamber</h5>
								</td>
								<td>Right Atrial Chamber size</td>
								<td>
									<select required name="raSize" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="normal">Normal</option>
										<option value="mildly dilated">Mildly dilated</option>
										<option value="moderately dilated">Moderately dilated</option>
										<option value="severely dilated">Severely dilated</option>
									</select>
								</td>
							</tr>
							<tr>
							    <td colspan="2">
							        <input type="text" name="ra2" value="There is no mass or thrombus" placeholder="Enter Text" class="form-control input-sm">
							    </td>
							</tr>
							<tr>
								<td rowspan="7">
									<h5>Aortic Valve</h5>
								</td>
								<td>
									Aortic valve appears structurally
								</td>
								<td>
									<select required name="avStruct" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="Aortic valve is structurally normal.">Normal</option>
										<option value="Aortic valve appears bicuspid">Bicuspid</option>
										<option value="Aortic valve leaflets appears mildly thickened and calcified">Mildly thickened and calcified</option>
										<option value="Aortic valve leaflets appears moderately thickened and calcified">Moderately thickened and calcified</option>
										<option value="Aortic valve leaflets appears severely thickened and calcified">Severely thickened and calcified</option>
										<option value="There is a mechanical aortic prosthesis">Mechanical aortic prosthesis</option>
										<option value="There is a bio prosthetic aortic valve">Bio prosthetic aortic valve</option>
									</select>
								</td>
							</tr>
							<tr>
							    <td>
							        Leaflet excursion
							    </td>
							    <td>
							        <select required name="avleaf" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="normal">Normal</option>
										<option value="mildly reduced">Mildly reduced</option>
										<option value="moderately reduced">Moderately reduced</option>
										<option value="severely reduced">Severely reduced</option>
									</select>
							    </td>
							</tr>
							<tr>
								<td>Aortic valve stenosis</td>
								<td>
									<select required name="avF" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="no">No</option>
										<option value="mild Stenosis">Mild Stenosis</option>
										<option value="moderate Stenosis">Moderate Stenosis</option>
										<option value="severe Stenosis">Severe Stenosis</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									Peak gradient
								</td>
								<td class="form-inline">
									<input type="number" required name="peakG" step="0.01" class="form-control form-control-sm w-25">&nbsp mm of hg
								</td>
							</tr>
							<tr>
								<td>
									Mean gradient
								</td>
								<td class="form-inline">
									<input type="number" required name="meanG" step="0.01" class="form-control form-control-sm w-25">&nbsp mm of hg
								</td>
							</tr>
							<tr>
								<td>
									Aortic valve area
								</td>
								<td class="form-inline">
									<input type="number" required name="avArea" step="0.01" class="form-control form-control-sm w-25">&nbsp sq/cm
								</td>
							</tr>
							<tr>
								<td>Aortic Regurgitation</td>
								<td>
									<select required name="ar" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="no">No</option>
										<option value="trace">Trace</option>
										<option value="mild">Mild</option>
										<option value="moderate">Moderate</option>
										<option value="severe">Severe</option>
									</select>
								</td>
							</tr>
							<tr>
								<td rowspan="3">
									<h5>Mitral Valve</h5>
								</td>
								<td>Mitral valve leaflets appears</td>
								<td>
									<select required name="mvStruct" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="normal">Normal</option>
										<option value="mildly thickened and calcified">Mildly thickened and calcified</option>
										<option value="mildly moderately thickened and calcified">Moderately thickened and calcified</option>
										<option value="mildly severely thickened and calcified">Severely thickened and calcified</option>
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="text" name="mvPro" placeholder="Enter Text" class="form-control input-sm" value="There is no mitral valve prolapse">
								</td>
							</tr>
							<tr>
								<td>Mitral Regurgitation</td>
								<td>
									<select required name="mr" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="no">No</option>
										<option value="trace">Trace</option>
										<option value="mild">Mild</option>
										<option value="morderate">Morderate</option>
									</select>
								</td>
							</tr>
							<tr>
								<td rowspan="2">
									<h5>Tricuspid valve</h5>
								</td>
								<td>Tricuspid valve appears structurally</td>
								<td>
									<input type="text" value="normal" required class="form-control input-sm" name="tvStruct">
								</td>
							</tr>
							<tr>
								<td>Tricuspid Regurgitation</td>
								<td>
									<select required name="tr" class="form-control form-control-sm w-75">
										<option value="">---SELECT---</option>
										<option selected value="no">No</option>
										<option value="trace">Trace</option>
										<option value="mild">Mild</option>
										<option value="morderate">Morderate</option>
										<option value="severe">Severe</option>
									</select>
								</td>
							</tr>
							<tr>
								<td rowspan="2">
									<h5>Pulmonary valve</h5>
								</td>
								<td>Pulmonary valve appears</td>
								<td>
									<input name="pv" class="form-control input-sm" value="normal" required>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input name="pr" type="text" value="There is no evidence for pulmonary stenosis" placeholder="Enter Text" class="form-control input-sm">
								</td>
							</tr>
							<tr>
								<td rowspan="">
									<h5>Pericardium</h5>
								</td>
								<td colspan="2">
									<input type="text" name="peff" value="Pericardium appears normal and there is no pericardial effusion" placeholder="Enter Text" class="form-control input-sm">
								</td>
							</tr>
							<tr>
								<td rowspan="1">
									<h5>Aorta</h5>
								</td>
								<td colspan="2">
									<input type="text" name="arota" value="The size of the Visualized Aortic root and ascending aorta appears within normal limits" placeholder="Enter Text" class="form-control input-sm">
								</td>
							</tr>
							<tr>
							    <td><h5>Venous<h5></td>
							    <td colspan="2">
							        <input type="text" name="venous" value="Inferior vena cave dimension is normal" placeholder="Enter Text" class="form-control input-sm">
							    </td>
							</tr>
							<tr>
							    <td rowspan="2"><h5>Echo Dimension and Doppler<h5></td>
							    <td colspan="2">
							        <select class="form-control input-sm" id="echodop" required>
							            <option selected value="normal">2D and Mmode measurements are within normal limits</option>
							            <option value="The Following abnormal measurements were noted:-">The Following abnormal measurements were noted:-</option>
							        </select>
							    </td>
							</tr>
							<tr>
							    <td colspan="2">
							        <input type="text" readonly name="doppler2" id="doppler" value="2D and Mmode measurements are within normal limits" placeholder="Enter Text" class="form-control input-sm">
							    </td>
							</tr>
							<!--<tr>-->
							<!--    <td>The Following abnormal measurements were noted:- </td>-->
							<!--    <td>-->
							<!--        <input type="text" name="doppler2" value="" placeholder="Enter Text" class="form-control input-sm">-->
							<!--    </td>-->
							<!--</tr>-->
							<!--<tr>-->
							<!--    <td>-->
							<!--        <select class="form-control input-sm" id="echodop" required>-->
							<!--            <option selected value="normal">2D and Mmode measurements are within normal limits</option>-->
							<!--            <option value="The Following abnormal measurements were noted:-">The Following abnormal measurements were noted:-</option>-->
							<!--        </select>-->
							<!--    </td>-->
							<!--    <td>-->
							<!--        <input type="text" disabled name="doppler2" id="doppler" value="2D and Mmode measurements are within normal limits" placeholder="Enter Text" class="form-control input-sm">-->
							<!--    </td>-->
							<!--</tr>-->
						</table>
						<table cellpadding="5" class="w-50 offset-3 text-center mt-4">
							<tr>
								<td align="Right">
									Impression:
								</td>
								<td colspan="" align="center">
									<textarea class="form-control" name="impression"></textarea>
								</td>
							</tr>
						</table>
						<table cellpadding="5" class="w-50 offset-3 text-center mt-4">
						    <tr>
						        <td>
						            Doctor:
						        </td>
						        <td>
						            <select class="form-control form-control-sm w-50" required name="doc_name">
						                <option value="">---Select---</option>
						                <option value="Mohan S. Kumar M.D.">Mohan S. Kumar M.D.</option>
						                <option value="Haroonur Rashid M.D. PHD.">Haroonur Rashid M.D. PHD.</option>
						            </select>
						        </td>
						        <td>
						        </td>
						        <td style="height: 60px;"></td>
						    </tr>
						 </table>
						<table cellpadding="5" class="w-50 offset-3 text-center mt-4">
							<!--<tr>-->
							<!--	<td align="center">-->
							<!--	 Signed by:-->
							<!--	</td>-->
							<!--	<td style="height: 60px;"></td>-->
							<!--</tr>-->
							<tr>
								<td colspan="" align="center">
									<input type="submit" name="add" class="btn  btn-primary btn-sm rounded-0">
								</td>
							</tr>
						</table>
				<br><br></div>
				<div class="col-12 text-center">
				<div id="watermark">JDK Web Solutions and JDK Multimedia LLC </div>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
<br><br>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" rel="stylesheet">
<script>
    $(document).ready(function(){
        $('#echodop').change(function(){
            //alert($(this).val());
            if($(this).val() == 'normal'){
                $('#doppler').attr('readonly',true);
                $('#doppler').val('2D and Mmode measurements are within normal limits');
            }else{
                $('#doppler').attr('readonly',false);
                $('#doppler').val('');
            }
        });
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
        });
    });
</script>
</body>
</html>