
<?php
// This literally just creates the states dropdown box and gives it the correct values
function states()
{
	$states = array(
	'Alabama'=>'AL',
	'Alaska'=>'AK',
	'Arizona'=>'AZ',
	'Arkansas'=>'AR',
	'California'=>'CA',
	'Colorado'=>'CO',
	'Connecticut'=>'CT',
	'Delaware'=>'DE',
	'Florida'=>'FL',
	'Georgia'=>'GA',
	'Hawaii'=>'HI',
	'Idaho'=>'ID',
	'Illinois'=>'IL',
	'Indiana'=>'IN',
	'Iowa'=>'IA',
	'Kansas'=>'KS',
	'Kentucky'=>'KY',
	'Louisiana'=>'LA',
	'Maine'=>'ME',
	'Maryland'=>'MD',
	'Massachusetts'=>'MA',
	'Michigan'=>'MI',
	'Minnesota'=>'MN',
	'Mississippi'=>'MS',
	'Missouri'=>'MO',
	'Montana'=>'MT',
	'Nebraska'=>'NE',
	'Nevada'=>'NV',
	'New Hampshire'=>'NH',
	'New Jersey'=>'NJ',
	'New Mexico'=>'NM',
	'New York'=>'NY',
	'North Carolina'=>'NC',
	'North Dakota'=>'ND',
	'Ohio'=>'OH',
	'Oklahoma'=>'OK',
	'Oregon'=>'OR',
	'Pennsylvania'=>'PA',
	'Rhode Island'=>'RI',
	'South Carolina'=>'SC',
	'South Dakota'=>'SD',
	'Tennessee'=>'TN',
	'Texas'=>'TX',
	'Utah'=>'UT',
	'Vermont'=>'VT',
	'Virginia'=>'VA',
	'Washington'=>'WA',
	'West Virginia'=>'WV',
	'Wisconsin'=>'WI',
	'Wyoming'=>'WY'
	);
	
		$states_done = '<select name="state">';
		
		$states_done .='<option disabled selected>Select a State</option>'
		;
		
	
		foreach ($states as $full => $initial)
		{
			$states_done .= '<option value="'. $initial .'">'. $full .'</option>
			';
		}
		return $states_done;
}
?>
