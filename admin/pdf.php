<?php 
session_start();
if(!isset($_SESSION['verified']))
{ header('location:login.php'); }
include('config.php');
require_once 'dompdf-master/lib/html5lib/Parser.php';
require_once 'dompdf-master/src/Autoloader.php';
Dompdf\Autoloader::register();

use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$dompdf = new Dompdf();
$dompdf->set_option('defaultFont', 'Courier');

$id = $_REQUEST['id'];
$query = "SELECT * FROM `form` WHERE `id`=$id";
$result = mysqli_query($con,$query);
$html='';
while($row = mysqli_fetch_array($result))
{
    if($row['global_lv']){$global=$row['global_lv'].".";}
    if($row['lv7']){$lv7=$row['lv7'].".";}
    if($row['rv3']){$rv3=$row['rv3'].".";}
    if($row['ra2']){$ra2=$row['ra2'].".";}
    if($row['la2']){$la2=$row['la2'].".";}
    if($row['pr']){$pr=$row['pr'].".";}
    if($row['peff']){$peff=$row['peff'].".";}
    if($row['mv_pro']){$mv_pro=$row['mv_pro'].".";}
    if($row['aorta']){$aorta=$row['aorta'].".";}
    if($row['venous']){$venous=$row['venous'].".";}
    if($row['doppler1']){$doppler1=$row['doppler1'].".";}
	$html .= '
	<style>
	@page { margin: 0px 15px 10px 15px; }
    #footer{
            font-size:14px;
	        position:absolute;
	        bottom:10px;
	        left:10px;
	    }
	    table tr td{
	        vertical-align:top;
	    }
	</style>
	<table width="100%">
			<tr>
				<td align=""><h2>Echo Cardiogram Report</h2></td>
				<td align="center">
				<img src="heart.jpg" height="100" width="100">
				</td>
				<td align="right">
				<b>
				            Premier Cardiology Associates<br></b>
				        16969 N Texas Avenue, St 100,<br> Webster, TX 77598
				        <br>
				        Phone 281-694-4555 Fax 281-694-5595<br>
				</td>
			</tr>
	</table>
	<table style="font-size: 16px;width:100%;">
	<tr>
	<td style="width:15%;">
	    <b>Patient Name:</b>   
	</td>
	<td style="width:30%;">
	'.$row['name'].'
	</td>
	<td style="width:15%;">
	    <b>Patient ID:</b>   
	</td>
	<td style="width:30%;">
	'.$row['patient_id'].'
	</td>
	</tr>
	</table><hr>
			 <table width="100%;">
				<tr>
					<th style="width:15%">DOB:</th>
					<td>
					<label>'.$row['dob'].'</label>
					</td>
					<th style="width:15%">Sonographer:</th>
					<td>
					<label>'.$row['son_by'].'</label>
					</td>
				</tr>
				<tr>
					<th style="width:15%">Sex:</th>
					<td>
					<label>'.$row['gender'].'</label>
					</td>
					<th style="width:15%">Date of Study:</th>
					<td>
					<label>'.$row['ref_no'].'</label>
					</td>
				</tr>
			 </table><hr>
			 <table style="width:100%;">
			    <tr>
			        <td align="right">
			            <label style="margin-right:20px;"><b>Study Quality:</b> '.$row['quality'].' </label>
			        </td>
			    </tr>
			 </table>
			 <table style="width:100%;">
			    <tr>
			        <td colspan="" align="center">
			        <h4 style="margin:0;">Findings</h4>
			        </td>
			    </tr>
			 </table>
			 <table cellpadding="8" style="width:100%;border-collapse:collapse;">
			    <tr>
			        <td style="width:20%;">
			            <b>Left Ventrical</b>
			        </td>
			        <td>
			            LV chamber size is '.$row['lv_size'].'. '.$row['lv_thickness'].'. LV systolic function is '.$row['sf'].'. Ejection fraction is estimated at '.$row['ef'].'%. '.$global.' There is '.$row['df'].' dysfunction. '.$lv7.'
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Right Ventrical</b>
			        </td>
			        <td>
			            RV chamber size is '.$row['rv_size'].'. RV systloic function is '.$row['rv_function'].'. '.$rv3.'
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Left Atrium</b>
			        </td>
			        <td>
			            LA chamber size is '.$row['la_size'].'. '.$la2.'
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Right Atrium</b>
			        </td>
			        <td>
			            RA chamber size is '.$row['ra_size'].'. '.$ra2.'
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Aortic Valve</b>
			        </td>
			        <td>
			            '.$row['av_struct'].'. Aortic Valve leaflet excursion is '.$row['avleaf'].'. There is '.$row['av_function'].' aortic valve stenosis. AV peak gradient is '.$row['peak_g'].' mm of hg. AV mean gradient is '.$row['mean_g'].' mm of hg. AV area is '.$row['av_area'].' sq cms. There is '.$row['ar'].' aortic regurgition. 
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Mitral Valve</b>
			        </td>
			        <td>
			            Mitral valve leaflets appears '.$row['mv_struct'].'. '.$mv_pro.' There is '.$row['mr'].' mitral regurgitation.
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Tricuspid Valve</b>
			        </td>
			        <td>
			            Tricuspid Valve appears structurally '.$row['tv_struct'].'. There is '.$row['tr'].' tricuspid regurgitation.
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Pulmonary Valve</b>
			        </td>
			        <td>
			            Pulmonary Valve appears '.$row['pv'].'. '.$pr.' 
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Pericardium</b>
			        </td>
			        <td>
			            '.$peff.'
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Aorta</b>
			        </td>
			        <td>
			            '.$aorta.'
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Venous</b>
			        </td>
			        <td>
			            '.$venous.'
			        </td>
			    </tr>
			    <tr>
			        <td style="width:20%;">
			            <b>Echo Dimensions and Doppler</b>
			        </td>
			        <td>
			        '.$doppler1.'';
            			 if($row['doppler2']!='2D and Mmode measurements are within normal limits')
            			 {
            			     $html.='The following abnormal measurements were noted:- '.$row['doppler2'].'';
            			 }else{
            			     $html.=''.$row['doppler2'].'';
            			 }
            	$html.='
			        </td>
			    </tr>
			    <br>
			 </table>
			 <table cellpadding="8" style="width:100%;border-collapse:collapse; margin-top:0px;">
			    <tr>
			        <td style="width:20%;">
			            <b>Impression</b>
			        </td>
			        <td>
			            '.$row['impression'].'
			        </td>
			    </tr>
			 </table>
			 <table style="width:100%;margin-top:20px;margin-bottom:20px;">
				        <tr>
				            <td style="width:100%;">
				                <b>Electronic Signed By:</b>
				            </td>
				        </tr>
				        <tr>
				            <td style="width:100%;">
				                '.$row['doc_name'].'
				            </td>
				        </tr>
				        <tr>
				        <hr>
				        </tr>
				    </table>
				    <label id="footer">
				    <i>JDK Web Solutions and JDK Multimedia LLC</i>
				    </label>
			 ';
}
//position:absolute;bottom:2%;
//echo $html;exit;
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
//directly download
$dompdf->stream();
//view then download
//$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pdf</title>
</head>
<body>

</body>
</html>