<?php
/*
Plugin Name: GRIT Salex Tax Calculator for US
Version: 1.0
Author: Mrityunjay & Nate Koester
Author URI: https://grittechnologies.com
Plugin URI: https://grittechnologies.com/plugins
Description: Get US sales tax of states using ZIP code of any city!
*/
?>
<?php
//$zip=$_POST['zip'];
//add_shortcode('GETTAX','getTax');
//function getTax($atts){
function getTax($state){
	
	//$state=getState($zip,US);
	switch($state){
		case 'AL':
		$tax='4';
		return $tax;
		break;
	    
		case 'AK':
		$tax='0';
		break;
		
		case 'AZ':
		$tax='5.6';
		break;
		
		case 'AR':
		$tax='6.5';
		break;
		
		case 'CA':
		$tax='7.25';
		return $tax;
		break;
		
		case 'CO':
		$tax='2.9';
		return $tax;
		break;
		
		case 'CT':
		$tax='6.35';
		return $tax;
		break;
		
		case 'DE':
		$tax='0';
		return $tax;
		break;
		
		case 'DC':
		$tax='6';
		return $tax;
		break;
		
		case 'FL':
		$tax='6';
		return $tax;
		break;
		
		case 'GA':
		$tax='4';
		return $tax;
		break;
		
		case 'HI':
		$tax='4';
		return $tax;
		break;
		
		case 'ID':
		$tax='6';
		return $tax;
		break;
		
		case 'IL':
		$tax='6.25';
		return $tax;
		break;
		
		case 'IN':
		$tax='7';
		return $tax;
		break;
		
		case 'IA':
		$tax='6';
		return $tax;
		break;
		
		case 'KS':
		$tax='6.5';
		return $tax;
		break;
		
		case 'KY':
		$tax='6';
		return $tax;
		break;
		
		case 'LA':
		$tax='4.45';
		return $tax;
		break;
		
		case 'ME':
		$tax='5.5';
		return $tax;
		break;
		
		case 'MD':
		$tax='6';
		return $tax;
		break;
		
		case 'MA':
		$tax='6.25';
		return $tax;
		break;
		
		case 'MI':
		$tax='6';
		return $tax;
		break;
		
		case 'MN':
		$tax='6.88';
		return $tax;
		break;
		
		case 'MS':
		$tax='7';
		return $tax;
		break;
		
		case 'MO':
		$tax='4.23';
		return $tax;
		break;
		
		case 'MT':
		$tax='0';
		return $tax;
		break;
		
		case 'NE':
		$tax='5.5';
		return $tax;
		break;
		
		case 'NV':
		$tax='6.85';
		return $tax;
		break;
		
		case 'NH':
		$tax='0';
		return $tax;
		break;
		case 'NJ':
		$tax='6.63';
		return $tax;
		break;
		
		case 'NM':
		$tax='5.13';
		return $tax;
		break;
		
		case 'NY':
		$tax='4';
		return $tax;
		break;
		
		case 'NC':
		$tax='4.75';
		return $tax;
		break;
		
		case 'ND':
		$tax='5';
		return $tax;
		break;
		
		case 'OH':
		$tax='5.75';
		return $tax;
		break;
		
		case 'OK':
		$tax='4.5';
		return $tax;
		break;
		
		case 'OR':
		$tax='0';
		return $tax;
		break;
		
		case 'PA':
		$tax='6';
		return $tax;
		break;
		
		
		case 'RI':
		$tax='7';
		return $tax;
		break;
		
		case 'SC':
		$tax='6';
		return $tax;
		break;
		
		case 'SD':
		$tax='4.5';
		return $tax;
		break;
		
		case 'TN':
		$tax='7';
		return $tax;
		break;
		
		case 'TX':
		$tax='6.25';
		return $tax;
		break;
		
		case 'UT':
		$tax='5.95';
		return $tax;
		break;
		
		case 'VT':
		$tax='6';
		return $tax;
		break;
		
		case 'VA':
		$tax='5.3';
		return $tax;
		break;
		
		case 'WA':
		$tax='6.5';
		return $tax;
		break;
		
		case 'WV':
		$tax='6';
		return $tax;
		break;
		
		case 'WI':
		$tax='5';
		return $tax;
		break;
		
		case 'WY':
		$tax='4';
		return $tax;
		break;
		
		default:
		echo "Zip code is incorrect";
		
		
	}
}
/** zip to state conversion **/
function getState($zip,$country){
$url = "http://api.zippopotam.us/".$country."/".$zip;  // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data,true); // decode the JSON feed
return $characters['places'][0]['state'];
}

add_shortcode('USSATES','getUsStates');
function getUsStates(){
?>
<select name="state" id="state"  class="txt2" required>
  <option value="" selected="selected">Select a State</option>
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">District Of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
</select>
<?php
}
?>
