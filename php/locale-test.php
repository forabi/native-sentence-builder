<?
include_once 'test-cliche.php';
include_once 'locale.php';
?>
<style type="text/css">
	body{
		/*direction:rtl;*/
		font-size: 3em;
		font-family: 'Times New Roman';
		margin: 15px;
		text-align: center;
		vertical-align: middle;
	}
</style>
<?

$people = array();
$people['ar_SY'][0][] = ['gender'=>'male', 'name'=>'محمد', 'id'=>0];
$people['ar_SY'][0][] = ['gender'=>'male', 'name'=>'فواز', 'id'=>1];
$people['ar_SY'][0][] = ['gender'=>'male', 'name'=>'خالد', 'id'=>2];
$people['ar_SY'][0][] = ['gender'=>'male', 'name'=>'ملهم', 'id'=>3];
$people['ar_SY'][0][] = ['gender'=>'male', 'name'=>'أحمد', 'id'=>4];
$people['ar_SY'][0][] = ['gender'=>'male', 'name'=>'عبد الله', 'id'=>5];

$people['ar_SY'][1][] = ['gender'=>'female', 'name'=>'سعاد', 'id'=>6];
$people['ar_SY'][1][] = ['gender'=>'female', 'name'=>'ليلى', 'id'=>7];
$people['ar_SY'][1][] = ['gender'=>'female', 'name'=>'سلمى', 'id'=>8];
$people['ar_SY'][1][] = ['gender'=>'female', 'name'=>'رباب', 'id'=>9];

$people['en_US'][0][] = ['gender'=>'male', 'name'=>'Muhammad', 'id'=>10];
$people['en_US'][0][] = ['gender'=>'male', 'name'=>'Fawwaz', 'id'=>11];
$people['en_US'][0][] = ['gender'=>'male', 'name'=>'Khaled', 'id'=>12];
$people['en_US'][0][] = ['gender'=>'male', 'name'=>'Mulham', 'id'=>13];
$people['en_US'][0][] = ['gender'=>'male', 'name'=>'Ahmed', 'id'=>14];
$people['en_US'][0][] = ['gender'=>'male', 'name'=>'Abdullah', 'id'=>15];

$people['en_US'][1][] = ['gender'=>'female', 'name'=>'Suad', 'id'=>16];
$people['en_US'][1][] = ['gender'=>'female', 'name'=>'Laila', 'id'=>17];
$people['en_US'][1][] = ['gender'=>'female', 'name'=>'Salma', 'id'=>18];
$people['en_US'][1][] = ['gender'=>'female', 'name'=>'Rabab', 'id'=>189];

$verbs['saw'] = ['verb'=>'saw', 'objects'=>['activity']];
$verbs['logged'] = ['verb'=>'logged', 'objects'=>['activity']];
$verbs['requested'] = ['verb'=>'requested', 'objects'=>['friendship']];
$verbs['like'] = ['verb'=>'like', 'objects'=>['activity']];

$lang = 'ar_SY';
$sentence['people_max_visible'] = 6;
$verb = 'requested';
$object['name'] = 'friendship';
// $viewer = $people[$lang][0][1];
// $object['people'][] = $viewer;
// //$object['people'][] = $people[$lang][1][3];
// //$object['people'][] = $people[$lang][0][3];
// //$object['people'][] = $people[$lang][0][4];
// //$object['people'][] = $people[$lang][1][2];
// //$object['people'][] = $people[$lang][1][3];
// //$sentence['people'][] = $viewer;

// $sentence['people'][] = $people[$lang][1][1];
// $sentence['people'][] = $people[$lang][0][2];
// $sentence['people'][] = $people[$lang][1][2];
// $sentence['people'][] = $people[$lang][1][3];
// $sentence['people'][] = $people[$lang][0][4];

// // $sentence['people'][] = $people[$lang][0][4];
// // $sentence['people'][] = $people[$lang][0][3];
// // $sentence['people'][] = $people[$lang][0][5];
// $viewer['relation'] = 'you';
// echo build_sentence($lang, $sentence, $verb, $object, $viewer);

///Random string generator
$people_max_visible = 20;
function random_string($lang, $max, $action = 'auto', $max_obj = 3, $gender = 'auto'){
	global $people, $verbs, $objects;
	$sentence['people_invisible_output_as_number'] = 'auto';
	$sentence['people'] = random_people($lang, $max, $gender);
	$sentence['people_max_visible'] = rand(1, $people_max_visible);
	$verb_rand = rand(0, count($verbs) - 1);
	if ($action === 'auto') $verb = $verbs[array_rand($verbs)];
	else $verb = $verbs[$action];
	$object['name'] = $verb['objects'][rand(0, count($verb['objects']) - 1)];
	$verb = $verb['verb'];
	$object['people'] = random_people($lang, $max_obj, $gender);
	$viewer = $people[$lang][rand(0, 1)];
	$viewer = $viewer[array_rand($viewer)];
	$viewer['relation'] = 'you';
	//$sentence = new SentenceBuilder($sentence, $verb, $object, $viewer);
	//var_dump($verb);
	return build_sentence($lang, $sentence, $verb, $object, $viewer);
}

function random_people($lang, $max, $gender = 'auto', $min = 1){
	global $people;
	$rand = rand($min, $max);
	if (isset($max) && $rand > $max) $rand = $max;
	$added = array();
	$r_people = array();
	for ($i = $min - 1; $i < $rand; $i++){
		if ($gender === 'auto') $gender_c = rand(0, 1);
		else $gender_c = ($gender === 'male' ? 0 : 1);
		$person = $people[$lang][$gender_c][rand(0, count($people[$lang][$gender_c]) - 1)];
		if (!in_array($person['name'], $added) || (count($added) > $people_max_visible && $max > count($added))){
		 	$added[] = $person['name'];
		 	$r_people[] = $person;
		 	// echo 'name: '.$person['name'].'<br>';
		}
	}
	return $r_people;
}

$rand = rand(1, 1);
$langs[] = ['string'=>'ar_SY', 'direction'=>'rtl'];
$langs[] = ['string'=>'en_US', 'direction'=>'ltr'];
//$rand = 1;
for ($i = 0; $i < $rand; $i++){
	$lang = $langs[rand(0, count($langs) - 1)];
	$result = random_string('ar_SY', 10, 'auto', 10, 'auto'); //$lang['string']
	//echo '!!!';
	//var_dump($result);
	$result = sprintf("<div $i style='direction:%s'>%s</div>", $lang['direction'], $result);
	echo $result;
}
//*/
?>
