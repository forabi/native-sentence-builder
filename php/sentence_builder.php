<?
class SentenceBuilder{
	public function __construct($locale, $parameters, $verb, $object, $viewer, $prefer_native = true){	
		$this->locale = $locale;
		$this->sentence = $parameters;
		$this->sentence['action'] = $this->locale['verbs'][$verb];
		$this->sentence['viewer'] = $viewer;
		if (isset($object)){
			$this->sentence['object']['name'] = $this->locale['objects'][$object['name']];
			$this->sentence['object']['people'] = $object['people'];
		}
		$this->sentence['prefer_native'] = $prefer_native;
		if ($this->sentence['people_max_visible'] > count($this->sentence['people']))
			$this->sentence['people_max_visible'] = count($this->sentence['people']);
		///TODO: remmove this temporary fix for the nasty bug
		if (count($this->sentence['people']) > 1)
			$this->sentence['people_max_visible'] -= 1;//*/
		if ($this->sentence['prefer_native'] === true) $this->sentence['template'] = $this->locale['sentences']['sentence_template_action_'.$this->sentence['action']['type']];
		else $this->sentence['template'] = $this->locale['sentences']['sentence_template_action_noun'];
	}
	public function to_string(){
		$string = $this->sentence['template'];
		$gender = ($this->sentence['action']['type'] === 'verb' && $this->have_viewer($this->sentence['people'], $this->sentence['viewer']) !== false) ? $this->sentence['viewer']['gender'] :  $this->gender_of($this->sentence['people']);	
		$object = $this->format_object();		
		$people = $this->format_people_all($this->sentence['people']);
		$people_count_all = count($this->sentence['people']);
		$action = $this->format_action($this->sentence['action'], $this->sentence['people'], $gender, $people_count_all, $this->sentence['object']['name'], $this->sentence['prefer_native']);	
		if (isset($this->sentence['action2'])){
			$action_part2 = $this->format_action($this->sentence['action2'], $this->sentence['people'], $gender, $people_count_all, $this->sentence['object']['name'], $this->sentence['prefer_native']);
		} else {
			//TODO: do something
		}
		return str_replace(['%people', '%action', '%part2', '%object'], [$people, $action, $action_part2, $object], $string);
	}

	private function get_names($people){
		return array_map(function($person){
			return $person['name'];
		}, $people);
	}

	private function have_viewer($people, $viewer){
		foreach ($people as $person => $value) {
			if ($people[$person]['id'] === $viewer['id']) return $person; //returns array key
		} return false;
	}

	private function unset_viewer($people, $viewer){
		foreach ($people as $person => $value) {
				if ($people[$person]['id'] === $viewer['id']) unset($people[$person]); //returns array key
		} return $people;
	}

	private function format_action($action, $people, $gender, $count, $object, $prefer_native = true){
		if ($action['type'] === 'verb' && $prefer_native === true) $count = 1;
		return $action[(($action['type'] === 'verb' && $prefer_native === true && $this->have_viewer($people, $this->sentence['viewer']) !== false) ? 'you_' : '').$gender][$this->get_position($count)]["object_".$object['gender']];
	}

	private function format_people_all($people, $added){
		/* Moves You to the first position */
		$viewer_key = $this->have_viewer($people, $this->sentence['viewer']);
		if ($viewer_key !== false){
			$viewer = $people[$viewer_key];
			$people = $this->unset_viewer($people, $viewer);
			array_unshift($people, $viewer);
		} //End

		// $this->debug_print_names($people);
		$max_visible = $this->sentence['people_max_visible'];
		if ($max_visible < 1) $max_visible = 1;
		$people_visible = array_slice($people, 0, $max_visible); //$this->debug_print_names($people_visible);
		$people_invisible = array_slice($people, $max_visible);		
		$template = count($people_invisible) === 0 ? $this->locale['sentences']['people_visible_template'] : $this->locale['sentences']['people_invisible_template'];
		$people_visible_str = $this->format_people_visible($people_visible, $max_visible, true);
		$people_invisible_str = $this->format_people_invisible($people_invisible, $added);
		return str_replace(['%people_visible', '%people_invisible'], [$people_visible_str, $people_invisible_str], $template);
	}

	private function debug_print_names($people){
		echo "People are empty? ".(empty($people) ? "Yes" : "No")."<br>";
		foreach ($people as $key => $value) {
			echo "Person name: ".$people[$key]['name']."<br>";
		}
		echo "max: ".$this->sentence['people_max_visible'];

		echo "<br>all: ".count($people)."<br>";
	}

	private function have_invisible($people, $max_visible){
		return count($people) > $max_visible;
	}

	private function format_people_visible($people, $max_visible, $consider_invisible = true){		
		$viewer_key = $this->have_viewer($people, $this->sentence['viewer']);
		if ($viewer_key === false){
			//TODO: fix this. always adding , instead of and when number of invisible = 0 (max visible = count)
			$result = '';
			if (!empty($people)){
				$new = array();
				foreach ($people as $key => $value) {
					if (!empty($people[$key])){
						$new[] = $people[$key];
					}
				} $people = $new;
				$i = 0;
				foreach ($people as $key => $value) {
					if (!empty($people[$key])){
						$result .= $people[$key]['name'];
						if (!empty($people[$i + 1])){
							$result .= $this->locale['sentences']['people_visible_delimiter'][($i === count($people) - 1 && ($consider_invisible === true && $this->have_invisible($people, $max_visible) === false)) ? 1 : 0];
							$i += 1;
						}
					} 
				}
			}
			return $result;
		} else {
			$viewer = $people[$viewer_key];
			$gender = $people[$viewer_key]['gender'];
			$people = $this->unset_viewer($people, $people[$viewer_key]);
			return $string = ($this->locale['you'][$gender][$this->get_position(1)]).(empty($people) ? '' : ($this->locale['sentences']['people_visible_delimiter'][(count($people) <= 1 && $this->have_invisible($this->sentence['people'], $this->sentence['people_max_visible']) === false) ? 1 : 0]).$this->format_people_visible($people, $max_visible, true));
		}	
	}

	private function format_people_invisible($people, $added){
		$count = count($people);
		$gender = $this->gender_of($people);
		$adjective = str_replace('%d', $count, $this->format_plurals($count, $gender, $added));
		return $adjective;
	}

	private function format_object($people){
		$object = $this->sentence['object'];
		if (!isset($people)) $people = $object['people'];
		$viewer_key = $this->have_viewer($people, $this->sentence['viewer']);
		if ($viewer_key === false){
			$string = $object['name']['noun'];
			$subject = 'subject_'.(empty($people) ? $this->gender_of($this->sentence['people']) : $this->gender_of($people));
			$string = $string[$subject][$this->get_position(count($people))];
			//return $string;
		} else {
			$viewer_object = $this->format_viewer_object([0=>$people[$viewer_key]]);
			$people = $this->unset_viewer($people, $this->sentence['viewer']);
			$others_object = empty($people) ? '' : $this->format_object($people);
			$delimiter = empty($people) ? '' : $this->locale['sentences']['people_visible_delimiter'][1];
			$string = $viewer_object.$delimiter.$others_object;
			//return $string;
		}
		$preposition = $this->sentence['action']['preposition'];
		if ($this->sentence['action']['object_type'] === 'indirect' && isset($preposition) && !empty($preposition)) {
			$string = "%preposition".($this->sentence['action']['preposition_has_space'] ? ' ' : '').$string;
		}
		$string = str_replace(['%preposition', '%people'], [$preposition, $this->format_people_all($people, true)], $string); //TODO: fix this
		$string = str_replace("s's", "s'", $string);
		return $string;
	}

	private function format_viewer_object($viewer){
		$string = $this->sentence['object']['name']['noun']['subject_you_'.$this->gender_of($viewer)][$this->get_position(count($viewer))];
		return $string;
	}

	private function get_position($num){
		//return 0;
		return $num <= 2 ? $num : (($num%100 >= 3 && $num%100 <= 10) ? 3 : ($num%100 >= 11 ? 4 : 5));
	}

	private function format_plurals($num, $gender, $added = false){
		return $this->locale['sentences']['people_invisible'.($added === true ? '_added' : '')][$gender][$this->get_position($num)];
	}

	private function gender_of($people, $prefer_native = true, $action_type = 'noun'){
		if ($action_type === 'verb' && $prefer_native === true)
			return $people[0]['gender'];
		if (is_string($people)){
			//TODO: guess gender
		} elseif (is_array($people)){
			if (in_array('gender', $people)){
				return $people['gender'];
			} else {
				$num_females = 0;
				$num_males = 0;
				foreach ($people as $person) {
					if ($person['gender'] === 'female'){
						$num_females += 1;
					} else $num_males += 1;
					if ($num_males > 0) return 'male';
				}
				return $num_males === 0 && $num_females > 0 ? 'female' : 'male';
			}
		} else return NULL;
	}
}
?>