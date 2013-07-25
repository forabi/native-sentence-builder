<?

$locale['sentences']['people_invisible']['male'][0] = ngettext("people_male_singular_invisible", "people_male_plural_invisible", 0);
$locale['sentences']['people_invisible']['male'][1] = ngettext("people_male_singular_invisible", "people_male_plural_invisible", 1);
$locale['sentences']['people_invisible']['male'][2] = ngettext("people_male_singular_invisible", "people_male_plural_invisible", 2);
$locale['sentences']['people_invisible']['male'][3] = ngettext("people_male_singular_invisible", "people_male_plural_invisible", 3);
$locale['sentences']['people_invisible']['male'][4] = ngettext("people_male_singular_invisible", "people_male_plural_invisible", 11);
$locale['sentences']['people_invisible']['male'][5] = ngettext("people_male_singular_invisible", "people_male_plural_invisible", 100);

$locale['sentences']['people_invisible']['female'][0] = ngettext("people_female_singular_invisible", "people_female_plural_invisible", 0);
$locale['sentences']['people_invisible']['female'][1] = ngettext("people_female_singular_invisible", "people_female_plural_invisible", 1);
$locale['sentences']['people_invisible']['female'][2] = ngettext("people_female_singular_invisible", "people_female_plural_invisible", 2);
$locale['sentences']['people_invisible']['female'][3] = ngettext("people_female_singular_invisible", "people_female_plural_invisible", 3);
$locale['sentences']['people_invisible']['female'][4] = ngettext("people_female_singular_invisible", "people_female_plural_invisible", 11);
$locale['sentences']['people_invisible']['female'][5] = ngettext("people_female_singular_invisible", "people_female_plural_invisible", 100);

$locale['sentences']['people_invisible_added']['male'][0] = ngettext("people_male_singular_invisible_added", "people_male_plural_invisible_added", 0);
$locale['sentences']['people_invisible_added']['male'][1] = ngettext("people_male_singular_invisible_added", "people_male_plural_invisible_added", 1);
$locale['sentences']['people_invisible_added']['male'][2] = ngettext("people_male_singular_invisible_added", "people_male_plural_invisible_added", 2);
$locale['sentences']['people_invisible_added']['male'][3] = ngettext("people_male_singular_invisible_added", "people_male_plural_invisible_added", 3);
$locale['sentences']['people_invisible_added']['male'][4] = ngettext("people_male_singular_invisible_added", "people_male_plural_invisible_added", 11);
$locale['sentences']['people_invisible_added']['male'][5] = ngettext("people_male_singular_invisible_added", "people_male_plural_invisible_added", 100);

$locale['sentences']['people_invisible_added']['female'][0] = ngettext("people_female_singular_invisible_added", "people_female_plural_invisible_added", 0);
$locale['sentences']['people_invisible_added']['female'][1] = ngettext("people_female_singular_invisible_added", "people_female_plural_invisible_added", 1);
$locale['sentences']['people_invisible_added']['female'][2] = ngettext("people_female_singular_invisible_added", "people_female_plural_invisible_added", 2);
$locale['sentences']['people_invisible_added']['female'][3] = ngettext("people_female_singular_invisible_added", "people_female_plural_invisible_added", 3);
$locale['sentences']['people_invisible_added']['female'][4] = ngettext("people_female_singular_invisible_added", "people_female_plural_invisible_added", 11);
$locale['sentences']['people_invisible_added']['female'][5] = ngettext("people_female_singular_invisible_added", "people_female_plural_invisible_added", 100);


$locale['sentences']['sentence_template_action_verb'] = _('sentence_template_action_verb');
$locale['sentences']['sentence_template_action_noun'] = _('sentence_template_action_noun');
$locale['sentences']['people_visible_template'] = _('people_all_visible_template');
$locale['sentences']['people_invisible_template'] = _('people_invisible_template');
$locale['sentences']['people_visible_delimiter'][0] = _('people_visible_delimiter_default');
$locale['sentences']['people_visible_delimiter'][1] = _('people_visible_delimiter_last');



$locale['you']['male'][0] = ngettext("you_singular_male", "you_plural_male", 0);
$locale['you']['male'][1] = ngettext("you_singular_male", "you_singular_male", 1);
$locale['you']['male'][2] = ngettext("you_singular_male", "you_plural_male", 2);
$locale['you']['male'][3] = ngettext("you_singular_male", "you_singular_male", 3);
$locale['you']['male'][4] = ngettext("you_singular_male", "you_plural_male", 11);
$locale['you']['male'][5] = ngettext("you_singular_male", "you_singular_male", 100);

$locale['you']['female'][0] = ngettext("you_singular_female", "you_plural_female", 0);
$locale['you']['female'][1] = ngettext("you_singular_female", "you_singular_female", 1);
$locale['you']['female'][2] = ngettext("you_singular_female", "you_plural_female", 2);
$locale['you']['female'][3] = ngettext("you_singular_female", "you_singular_female", 3);
$locale['you']['female'][4] = ngettext("you_singular_female", "you_plural_female", 11);
$locale['you']['female'][5] = ngettext("you_singular_female", "you_singular_female", 100);

$locale['you']['default'] = (int)_('you_default_is_plural?') === 1 ? 3 : 1;

$locale['action_part2_preceeded'] = _('action_part2_preceeded');

//LIKE -- Verb start
	$like['type'] = (int)_('verb_like_is_noun?') === 1 ? 'noun' : 'verb';
	$like['object_type'] = (int)_('verb_like_object_is_indirect?') === 1 ? 'indirect' : 'direct';
	$like['preposition'] = _('verb_like_object_preposition');
	$like['preposition_has_space'] = (int)_('verb_like_object_preposition_has_space') === 1 ? true : false;

	$like['female'][0]['object_male'] = ngettext('verb_like_subject_singular_female_object_male', 'verb_like_subject_plural_female_object_male', 0);
	$like['female'][0]['object_female'] = ngettext('verb_like_subject_singular_female_object_female', 'verb_like_subject_plural_female_object_female', 0);
	$like['female'][1]['object_male'] = ngettext('verb_like_subject_singular_female_object_male', 'verb_like_subject_plural_female_object_male', 1);
	$like['female'][1]['object_female'] = ngettext('verb_like_subject_singular_female_object_female', 'verb_like_subject_plural_female_object_female', 1);
	$like['female'][2]['object_male'] = ngettext('verb_like_subject_singular_female_object_male', 'verb_like_subject_plural_female_object_male', 2);
	$like['female'][2]['object_female'] = ngettext('verb_like_subject_singular_female_object_female', 'verb_like_subject_plural_female_object_female', 2);
	$like['female'][3]['object_male'] = ngettext('verb_like_subject_singular_female_object_male', 'verb_like_subject_plural_female_object_male', 3);
	$like['female'][3]['object_female'] = ngettext('verb_like_subject_singular_female_object_female', 'verb_like_subject_plural_female_object_female', 3);
	$like['female'][4]['object_male'] = ngettext('verb_like_subject_singular_female_object_male', 'verb_like_subject_plural_female_object_male', 11);
	$like['female'][4]['object_female'] = ngettext('verb_like_subject_singular_female_object_female', 'verb_like_subject_plural_female_object_female', 11);
	$like['female'][5]['object_male'] = ngettext('verb_like_subject_singular_female_object_male', 'verb_like_subject_plural_female_object_male', 100);
	$like['female'][5]['object_female'] = ngettext('verb_like_subject_singular_female_object_female', 'verb_like_subject_plural_female_object_female', 100);

	$like['male'][0]['object_male'] = ngettext('verb_like_subject_singular_male_object_male', 'verb_like_subject_plural_male_object_male', 0);
	$like['male'][0]['object_female'] = ngettext('verb_like_subject_singular_male_object_female', 'verb_like_subject_plural_male_object_female', 0);
	$like['male'][1]['object_male'] = ngettext('verb_like_subject_singular_male_object_male', 'verb_like_subject_plural_male_object_male', 1);
	$like['male'][1]['object_female'] = ngettext('verb_like_subject_singular_male_object_female', 'verb_like_subject_plural_male_object_female', 1);
	$like['male'][2]['object_male'] = ngettext('verb_like_subject_singular_male_object_male', 'verb_like_subject_plural_male_object_male', 2);
	$like['male'][2]['object_female'] = ngettext('verb_like_subject_singular_male_object_female', 'verb_like_subject_plural_male_object_female', 2);
	$like['male'][3]['object_male'] = ngettext('verb_like_subject_singular_male_object_male', 'verb_like_subject_plural_male_object_male', 3);
	$like['male'][3]['object_female'] = ngettext('verb_like_subject_singular_male_object_female', 'verb_like_subject_plural_male_object_female', 3);
	$like['male'][4]['object_male'] = ngettext('verb_like_subject_singular_male_object_male', 'verb_like_subject_plural_male_object_male', 11);
	$like['male'][4]['object_female'] = ngettext('verb_like_subject_singular_male_object_female', 'verb_like_subject_plural_male_object_female', 11);
	$like['male'][5]['object_male'] = ngettext('verb_like_subject_singular_male_object_male', 'verb_like_subject_plural_male_object_male', 100);
	$like['male'][5]['object_female'] = ngettext('verb_like_subject_singular_male_object_female', 'verb_like_subject_plural_male_object_female', 100);

	$locale['verbs']['like'] = $like;
//Verb end

//commented -- Verb start
	$commented['type'] = 'verb';

	$commented['you_female'][0]['object_male'] = ngettext('verb_commented_subject_singular_you_female_object_male', 'verb_commented_subject_plural_you_female_object_male', 0);
	$commented['you_female'][0]['object_female'] = ngettext('verb_commented_subject_singular_you_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 0);
	$commented['you_female'][1]['object_male'] = ngettext('verb_commented_subject_singular_you_female_object_male', 'verb_commented_subject_plural_you_female_object_male', 1);
	$commented['you_female'][1]['object_female'] = ngettext('verb_commented_subject_singular_you_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 1);
	$commented['you_female'][2]['object_male'] = ngettext('verb_commented_subject_singular_you_female_object_male', 'verb_commented_subject_plural_you_female_object_male', 2);
	$commented['you_female'][2]['object_female'] = ngettext('verb_commented_subject_singular_you_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 2);
	$commented['you_female'][3]['object_male'] = ngettext('verb_commented_subject_singular_you_female_object_male', 'verb_commented_subject_plural_you_female_object_male', 3);
	$commented['you_female'][3]['object_female'] = ngettext('verb_commented_subject_singular_you_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 3);
	$commented['you_female'][4]['object_male'] = ngettext('verb_commented_subject_singular_you_female_object_male', 'verb_commented_subject_plural_you_female_object_male', 11);
	$commented['you_female'][4]['object_female'] = ngettext('verb_commented_subject_singular_you_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 11);
	$commented['you_female'][5]['object_male'] = ngettext('verb_commented_subject_singular_you_female_object_male', 'verb_commented_subject_plural_fyou_emale_object_male', 100);
	$commented['you_female'][5]['object_female'] = ngettext('verb_commented_subject_singular_you_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 100);

	$commented['you_male'][0]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_you_male_object_male', 0);
	$commented['you_male'][0]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 0);
	$commented['you_male'][1]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_male_you_object_male', 1);
	$commented['you_male'][1]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 1);
	$commented['you_male'][2]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_you_male_object_male', 2);
	$commented['you_male'][2]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 2);
	$commented['you_male'][3]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_you_male_object_male', 3);
	$commented['you_male'][3]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 3);
	$commented['you_male'][4]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_you_male_object_male', 11);
	$commented['you_male'][4]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 11);
	$commented['you_male'][5]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_you_male_object_male', 100);
	$commented['you_male'][5]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 100);

	$commented['female'][0]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 0);
	$commented['female'][0]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 0);
	$commented['female'][1]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 1);
	$commented['female'][1]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 1);
	$commented['female'][2]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 2);
	$commented['female'][2]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 2);
	$commented['female'][3]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 3);
	$commented['female'][3]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 3);
	$commented['female'][4]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 11);
	$commented['female'][4]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 11);
	$commented['female'][5]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 100);
	$commented['female'][5]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 100);

	$commented['male'][0]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 0);
	$commented['male'][0]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 0);
	$commented['male'][1]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 1);
	$commented['male'][1]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 1);
	$commented['male'][2]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 2);
	$commented['male'][2]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 2);
	$commented['male'][3]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 3);
	$commented['male'][3]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 3);
	$commented['male'][4]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 11);
	$commented['male'][4]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 11);
	$commented['male'][5]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 100);
	$commented['male'][5]['object_female'] = ngettext('verb_like_subject_singular_male_object_female', 'verb_like_subject_plural_male_object_female', 100);

	$locale['verbs']['commented'] = $commented;
//Verb end

//Logged -- Verb start
	$logged['type'] = 'verb';

	$logged['you_female'][0]['object_male'] = ngettext('verb_logged_subject_singular_you_female_object_male', 'verb_logged_subject_plural_you_female_object_male', 0);
	$logged['you_female'][0]['object_female'] = ngettext('verb_logged_subject_singular_you_female_object_female', 'verb_logged_subject_plural_you_female_object_female', 0);
	$logged['you_female'][1]['object_male'] = ngettext('verb_logged_subject_singular_you_female_object_male', 'verb_logged_subject_plural_you_female_object_male', 1);
	$logged['you_female'][1]['object_female'] = ngettext('verb_logged_subject_singular_you_female_object_female', 'verb_logged_subject_plural_you_female_object_female', 1);
	$logged['you_female'][2]['object_male'] = ngettext('verb_logged_subject_singular_you_female_object_male', 'verb_logged_subject_plural_you_female_object_male', 2);
	$logged['you_female'][2]['object_female'] = ngettext('verb_logged_subject_singular_you_female_object_female', 'verb_logged_subject_plural_you_female_object_female', 2);
	$logged['you_female'][3]['object_male'] = ngettext('verb_logged_subject_singular_you_female_object_male', 'verb_logged_subject_plural_you_female_object_male', 3);
	$logged['you_female'][3]['object_female'] = ngettext('verb_logged_subject_singular_you_female_object_female', 'verb_logged_subject_plural_you_female_object_female', 3);
	$logged['you_female'][4]['object_male'] = ngettext('verb_logged_subject_singular_you_female_object_male', 'verb_logged_subject_plural_you_female_object_male', 11);
	$logged['you_female'][4]['object_female'] = ngettext('verb_logged_subject_singular_you_female_object_female', 'verb_logged_subject_plural_you_female_object_female', 11);
	$logged['you_female'][5]['object_male'] = ngettext('verb_logged_subject_singular_you_female_object_male', 'verb_logged_subject_plural_fyou_emale_object_male', 100);
	$logged['you_female'][5]['object_female'] = ngettext('verb_logged_subject_singular_you_female_object_female', 'verb_logged_subject_plural_you_female_object_female', 100);

	$logged['you_male'][0]['object_male'] = ngettext('verb_logged_subject_singular_you_male_object_male', 'verb_logged_subject_plural_you_male_object_male', 0);
	$logged['you_male'][0]['object_female'] = ngettext('verb_logged_subject_singular_you_male_object_female', 'verb_logged_subject_plural_you_male_object_female', 0);
	$logged['you_male'][1]['object_male'] = ngettext('verb_logged_subject_singular_you_male_object_male', 'verb_logged_subject_plural_male_you_object_male', 1);
	$logged['you_male'][1]['object_female'] = ngettext('verb_logged_subject_singular_you_male_object_female', 'verb_logged_subject_plural_you_male_object_female', 1);
	$logged['you_male'][2]['object_male'] = ngettext('verb_logged_subject_singular_you_male_object_male', 'verb_logged_subject_plural_you_male_object_male', 2);
	$logged['you_male'][2]['object_female'] = ngettext('verb_logged_subject_singular_you_male_object_female', 'verb_logged_subject_plural_you_male_object_female', 2);
	$logged['you_male'][3]['object_male'] = ngettext('verb_logged_subject_singular_you_male_object_male', 'verb_logged_subject_plural_you_male_object_male', 3);
	$logged['you_male'][3]['object_female'] = ngettext('verb_logged_subject_singular_you_male_object_female', 'verb_logged_subject_plural_you_male_object_female', 3);
	$logged['you_male'][4]['object_male'] = ngettext('verb_logged_subject_singular_you_male_object_male', 'verb_logged_subject_plural_you_male_object_male', 11);
	$logged['you_male'][4]['object_female'] = ngettext('verb_logged_subject_singular_you_male_object_female', 'verb_logged_subject_plural_you_male_object_female', 11);
	$logged['you_male'][5]['object_male'] = ngettext('verb_logged_subject_singular_you_male_object_male', 'verb_logged_subject_plural_you_male_object_male', 100);
	$logged['you_male'][5]['object_female'] = ngettext('verb_logged_subject_singular_you_male_object_female', 'verb_logged_subject_plural_you_male_object_female', 100);


	$logged['female'][0]['object_male'] = ngettext('verb_logged_subject_singular_female_object_male', 'verb_logged_subject_plural_female_object_male', 0);
	$logged['female'][0]['object_female'] = ngettext('verb_logged_subject_singular_female_object_female', 'verb_logged_subject_plural_female_object_female', 0);
	$logged['female'][1]['object_male'] = ngettext('verb_logged_subject_singular_female_object_male', 'verb_logged_subject_plural_female_object_male', 1);
	$logged['female'][1]['object_female'] = ngettext('verb_logged_subject_singular_female_object_female', 'verb_logged_subject_plural_female_object_female', 1);
	$logged['female'][2]['object_male'] = ngettext('verb_logged_subject_singular_female_object_male', 'verb_logged_subject_plural_female_object_male', 2);
	$logged['female'][2]['object_female'] = ngettext('verb_logged_subject_singular_female_object_female', 'verb_logged_subject_plural_female_object_female', 2);
	$logged['female'][3]['object_male'] = ngettext('verb_logged_subject_singular_female_object_male', 'verb_logged_subject_plural_female_object_male', 3);
	$logged['female'][3]['object_female'] = ngettext('verb_logged_subject_singular_female_object_female', 'verb_logged_subject_plural_female_object_female', 3);
	$logged['female'][4]['object_male'] = ngettext('verb_logged_subject_singular_female_object_male', 'verb_logged_subject_plural_female_object_male', 11);
	$logged['female'][4]['object_female'] = ngettext('verb_logged_subject_singular_female_object_female', 'verb_logged_subject_plural_female_object_female', 11);
	$logged['female'][5]['object_male'] = ngettext('verb_logged_subject_singular_female_object_male', 'verb_logged_subject_plural_female_object_male', 100);
	$logged['female'][5]['object_female'] = ngettext('verb_logged_subject_singular_female_object_female', 'verb_logged_subject_plural_female_object_female', 100);

	$logged['male'][0]['object_male'] = ngettext('verb_logged_subject_singular_male_object_male', 'verb_logged_subject_plural_male_object_male', 0);
	$logged['male'][0]['object_female'] = ngettext('verb_logged_subject_singular_male_object_female', 'verb_logged_subject_plural_male_object_female', 0);
	$logged['male'][1]['object_male'] = ngettext('verb_logged_subject_singular_male_object_male', 'verb_logged_subject_plural_male_object_male', 1);
	$logged['male'][1]['object_female'] = ngettext('verb_logged_subject_singular_male_object_female', 'verb_logged_subject_plural_male_object_female', 1);
	$logged['male'][2]['object_male'] = ngettext('verb_logged_subject_singular_male_object_male', 'verb_logged_subject_plural_male_object_male', 2);
	$logged['male'][2]['object_female'] = ngettext('verb_logged_subject_singular_male_object_female', 'verb_logged_subject_plural_male_object_female', 2);
	$logged['male'][3]['object_male'] = ngettext('verb_logged_subject_singular_male_object_male', 'verb_logged_subject_plural_male_object_male', 3);
	$logged['male'][3]['object_female'] = ngettext('verb_logged_subject_singular_male_object_female', 'verb_logged_subject_plural_male_object_female', 3);
	$logged['male'][4]['object_male'] = ngettext('verb_logged_subject_singular_male_object_male', 'verb_logged_subject_plural_male_object_male', 11);
	$logged['male'][4]['object_female'] = ngettext('verb_logged_subject_singular_male_object_female', 'verb_logged_subject_plural_male_object_female', 11);
	$logged['male'][5]['object_male'] = ngettext('verb_logged_subject_singular_male_object_male', 'verb_logged_subject_plural_male_object_male', 100);
	$logged['male'][5]['object_female'] = ngettext('verb_logged_subject_singular_male_object_female', 'verb_logged_subject_plural_male_object_female', 100);

	$locale['verbs']['logged'] = $logged;

//Verb end

//commented -- Verb start
	$commented['type'] = 'verb';
	$commented['object_type'] = (int)_('verb_commented_object_is_indirect?') === 1 ? 'indirect' : 'direct';
	$commented['preposition'] = _('verb_commented_object_preposition');
	$commented['preposition_has_space'] = (int)_('verb_commented_object_preposition_has_space') === 1 ? true : false;

	$commented['you_female'][0]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_you_female_object_male', 0);
	$commented['you_female'][0]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 0);
	$commented['you_female'][1]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_you_female_object_male', 1);
	$commented['you_female'][1]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 1);
	$commented['you_female'][2]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_you_female_object_male', 2);
	$commented['you_female'][2]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 2);
	$commented['you_female'][3]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_you_female_object_male', 3);
	$commented['you_female'][3]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 3);
	$commented['you_female'][4]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_you_female_object_male', 11);
	$commented['you_female'][4]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 11);
	$commented['you_female'][5]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_fyou_emale_object_male', 100);
	$commented['you_female'][5]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_you_female_object_female', 100);

	$commented['you_male'][0]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_you_male_object_male', 0);
	$commented['you_male'][0]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 0);
	$commented['you_male'][1]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_male_you_object_male', 1);
	$commented['you_male'][1]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 1);
	$commented['you_male'][2]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_you_male_object_male', 2);
	$commented['you_male'][2]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 2);
	$commented['you_male'][3]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_you_male_object_male', 3);
	$commented['you_male'][3]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 3);
	$commented['you_male'][4]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_you_male_object_male', 11);
	$commented['you_male'][4]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 11);
	$commented['you_male'][5]['object_male'] = ngettext('verb_commented_subject_singular_you_male_object_male', 'verb_commented_subject_plural_you_male_object_male', 100);
	$commented['you_male'][5]['object_female'] = ngettext('verb_commented_subject_singular_you_male_object_female', 'verb_commented_subject_plural_you_male_object_female', 100);


	$commented['female'][0]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 0);
	$commented['female'][0]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 0);
	$commented['female'][1]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 1);
	$commented['female'][1]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 1);
	$commented['female'][2]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 2);
	$commented['female'][2]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 2);
	$commented['female'][3]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 3);
	$commented['female'][3]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 3);
	$commented['female'][4]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 11);
	$commented['female'][4]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 11);
	$commented['female'][5]['object_male'] = ngettext('verb_commented_subject_singular_female_object_male', 'verb_commented_subject_plural_female_object_male', 100);
	$commented['female'][5]['object_female'] = ngettext('verb_commented_subject_singular_female_object_female', 'verb_commented_subject_plural_female_object_female', 100);

	$commented['male'][0]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 0);
	$commented['male'][0]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 0);
	$commented['male'][1]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 1);
	$commented['male'][1]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 1);
	$commented['male'][2]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 2);
	$commented['male'][2]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 2);
	$commented['male'][3]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 3);
	$commented['male'][3]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 3);
	$commented['male'][4]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 11);
	$commented['male'][4]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 11);
	$commented['male'][5]['object_male'] = ngettext('verb_commented_subject_singular_male_object_male', 'verb_commented_subject_plural_male_object_male', 100);
	$commented['male'][5]['object_female'] = ngettext('verb_commented_subject_singular_male_object_female', 'verb_commented_subject_plural_male_object_female', 100);

	$locale['verbs']['commented'] = $commented;

//became -- Verb start
	$became['type'] = 'verb';
	$became['object_type'] = (int)_('verb_became_object_is_indirect?') === 1 ? 'indirect' : 'direct';
	$became['preposition'] = _('verb_became_object_preposition');
	$became['preposition_has_space'] = (int)_('verb_became_object_preposition_has_space') === -1 ? true :  false;

	$became['female'][0]['object_male'] = ngettext('verb_became_subject_singular_female_object_male', 'verb_became_subject_plural_female_object_male', 0);
	$became['female'][0]['object_female'] = ngettext('verb_became_subject_singular_female_object_female', 'verb_became_subject_plural_female_object_female', 0);
	$became['female'][1]['object_male'] = ngettext('verb_became_subject_singular_female_object_male', 'verb_became_subject_plural_female_object_male', 1);
	$became['female'][1]['object_female'] = ngettext('verb_became_subject_singular_female_object_female', 'verb_became_subject_plural_female_object_female', 1);
	$became['female'][2]['object_male'] = ngettext('verb_became_subject_singular_female_object_male', 'verb_became_subject_plural_female_object_male', 2);
	$became['female'][2]['object_female'] = ngettext('verb_became_subject_singular_female_object_female', 'verb_became_subject_plural_female_object_female', 2);
	$became['female'][3]['object_male'] = ngettext('verb_became_subject_singular_female_object_male', 'verb_became_subject_plural_female_object_male', 3);
	$became['female'][3]['object_female'] = ngettext('verb_became_subject_singular_female_object_female', 'verb_became_subject_plural_female_object_female', 3);
	$became['female'][4]['object_male'] = ngettext('verb_became_subject_singular_female_object_male', 'verb_became_subject_plural_female_object_male', 11);
	$became['female'][4]['object_female'] = ngettext('verb_became_subject_singular_female_object_female', 'verb_became_subject_plural_female_object_female', 11);
	$became['female'][5]['object_male'] = ngettext('verb_became_subject_singular_female_object_male', 'verb_became_subject_plural_female_object_male', 100);
	$became['female'][5]['object_female'] = ngettext('verb_became_subject_singular_female_object_female', 'verb_became_subject_plural_female_object_female', 100);

	$became['male'][0]['object_male'] = ngettext('verb_became_subject_singular_male_object_male', 'verb_became_subject_plural_male_object_male', 0);
	$became['male'][0]['object_female'] = ngettext('verb_became_subject_singular_male_object_female', 'verb_became_subject_plural_male_object_female', 0);
	$became['male'][1]['object_male'] = ngettext('verb_became_subject_singular_male_object_male', 'verb_became_subject_plural_male_object_male', 1);
	$became['male'][1]['object_female'] = ngettext('verb_became_subject_singular_male_object_female', 'verb_became_subject_plural_male_object_female', 1);
	$became['male'][2]['object_male'] = ngettext('verb_became_subject_singular_male_object_male', 'verb_became_subject_plural_male_object_male', 2);
	$became['male'][2]['object_female'] = ngettext('verb_became_subject_singular_male_object_female', 'verb_became_subject_plural_male_object_female', 2);
	$became['male'][3]['object_male'] = ngettext('verb_became_subject_singular_male_object_male', 'verb_became_subject_plural_male_object_male', 3);
	$became['male'][3]['object_female'] = ngettext('verb_became_subject_singular_male_object_female', 'verb_became_subject_plural_male_object_female', 3);
	$became['male'][4]['object_male'] = ngettext('verb_became_subject_singular_male_object_male', 'verb_became_subject_plural_male_object_male', 11);
	$became['male'][4]['object_female'] = ngettext('verb_became_subject_singular_male_object_female', 'verb_became_subject_plural_male_object_female', 11);
	$became['male'][5]['object_male'] = ngettext('verb_became_subject_singular_male_object_male', 'verb_became_subject_plural_male_object_male', 100);
	$became['male'][5]['object_female'] = ngettext('verb_became_subject_singular_male_object_female', 'verb_became_subject_plural_male_object_female', 100);

	$locale['verbs']['became'] = $became;

//saw -- Verb start
//requested -- Verb start
	$saw['type'] = 'verb';

	$saw['you_female'][0]['object_male'] = ngettext('verb_saw_subject_singular_you_female_object_male', 'verb_saw_subject_plural_you_female_object_male', 0);
	$saw['you_female'][0]['object_female'] = ngettext('verb_saw_subject_singular_you_female_object_female', 'verb_saw_subject_plural_you_female_object_female', 0);
	$saw['you_female'][1]['object_male'] = ngettext('verb_saw_subject_singular_you_female_object_male', 'verb_saw_subject_plural_you_female_object_male', 1);
	$saw['you_female'][1]['object_female'] = ngettext('verb_saw_subject_singular_you_female_object_female', 'verb_saw_subject_plural_you_female_object_female', 1);
	$saw['you_female'][2]['object_male'] = ngettext('verb_saw_subject_singular_you_female_object_male', 'verb_saw_subject_plural_you_female_object_male', 2);
	$saw['you_female'][2]['object_female'] = ngettext('verb_saw_subject_singular_you_female_object_female', 'verb_saw_subject_plural_you_female_object_female', 2);
	$saw['you_female'][3]['object_male'] = ngettext('verb_saw_subject_singular_you_female_object_male', 'verb_saw_subject_plural_you_female_object_male', 3);
	$saw['you_female'][3]['object_female'] = ngettext('verb_saw_subject_singular_you_female_object_female', 'verb_saw_subject_plural_you_female_object_female', 3);
	$saw['you_female'][4]['object_male'] = ngettext('verb_saw_subject_singular_you_female_object_male', 'verb_saw_subject_plural_you_female_object_male', 11);
	$saw['you_female'][4]['object_female'] = ngettext('verb_saw_subject_singular_you_female_object_female', 'verb_saw_subject_plural_you_female_object_female', 11);
	$saw['you_female'][5]['object_male'] = ngettext('verb_saw_subject_singular_you_female_object_male', 'verb_saw_subject_plural_fyou_emale_object_male', 100);
	$saw['you_female'][5]['object_female'] = ngettext('verb_saw_subject_singular_you_female_object_female', 'verb_saw_subject_plural_you_female_object_female', 100);

	$saw['you_male'][0]['object_male'] = ngettext('verb_saw_subject_singular_you_male_object_male', 'verb_saw_subject_plural_you_male_object_male', 0);
	$saw['you_male'][0]['object_female'] = ngettext('verb_saw_subject_singular_you_male_object_female', 'verb_saw_subject_plural_you_male_object_female', 0);
	$saw['you_male'][1]['object_male'] = ngettext('verb_saw_subject_singular_you_male_object_male', 'verb_saw_subject_plural_male_you_object_male', 1);
	$saw['you_male'][1]['object_female'] = ngettext('verb_saw_subject_singular_you_male_object_female', 'verb_saw_subject_plural_you_male_object_female', 1);
	$saw['you_male'][2]['object_male'] = ngettext('verb_saw_subject_singular_you_male_object_male', 'verb_saw_subject_plural_you_male_object_male', 2);
	$saw['you_male'][2]['object_female'] = ngettext('verb_saw_subject_singular_you_male_object_female', 'verb_saw_subject_plural_you_male_object_female', 2);
	$saw['you_male'][3]['object_male'] = ngettext('verb_saw_subject_singular_you_male_object_male', 'verb_saw_subject_plural_you_male_object_male', 3);
	$saw['you_male'][3]['object_female'] = ngettext('verb_saw_subject_singular_you_male_object_female', 'verb_saw_subject_plural_you_male_object_female', 3);
	$saw['you_male'][4]['object_male'] = ngettext('verb_saw_subject_singular_you_male_object_male', 'verb_saw_subject_plural_you_male_object_male', 11);
	$saw['you_male'][4]['object_female'] = ngettext('verb_saw_subject_singular_you_male_object_female', 'verb_saw_subject_plural_you_male_object_female', 11);
	$saw['you_male'][5]['object_male'] = ngettext('verb_saw_subject_singular_you_male_object_male', 'verb_saw_subject_plural_you_male_object_male', 100);
	$saw['you_male'][5]['object_female'] = ngettext('verb_saw_subject_singular_you_male_object_female', 'verb_saw_subject_plural_you_male_object_female', 100);


	$saw['female'][0]['object_male'] = ngettext('verb_saw_subject_singular_female_object_male', 'verb_saw_subject_plural_female_object_male', 0);
	$saw['female'][0]['object_female'] = ngettext('verb_saw_subject_singular_female_object_female', 'verb_saw_subject_plural_female_object_female', 0);
	$saw['female'][1]['object_male'] = ngettext('verb_saw_subject_singular_female_object_male', 'verb_saw_subject_plural_female_object_male', 1);
	$saw['female'][1]['object_female'] = ngettext('verb_saw_subject_singular_female_object_female', 'verb_saw_subject_plural_female_object_female', 1);
	$saw['female'][2]['object_male'] = ngettext('verb_saw_subject_singular_female_object_male', 'verb_saw_subject_plural_female_object_male', 2);
	$saw['female'][2]['object_female'] = ngettext('verb_saw_subject_singular_female_object_female', 'verb_saw_subject_plural_female_object_female', 2);
	$saw['female'][3]['object_male'] = ngettext('verb_saw_subject_singular_female_object_male', 'verb_saw_subject_plural_female_object_male', 3);
	$saw['female'][3]['object_female'] = ngettext('verb_saw_subject_singular_female_object_female', 'verb_saw_subject_plural_female_object_female', 3);
	$saw['female'][4]['object_male'] = ngettext('verb_saw_subject_singular_female_object_male', 'verb_saw_subject_plural_female_object_male', 11);
	$saw['female'][4]['object_female'] = ngettext('verb_saw_subject_singular_female_object_female', 'verb_saw_subject_plural_female_object_female', 11);
	$saw['female'][5]['object_male'] = ngettext('verb_saw_subject_singular_female_object_male', 'verb_saw_subject_plural_female_object_male', 100);
	$saw['female'][5]['object_female'] = ngettext('verb_saw_subject_singular_female_object_female', 'verb_saw_subject_plural_female_object_female', 100);

	$saw['male'][0]['object_male'] = ngettext('verb_saw_subject_singular_male_object_male', 'verb_saw_subject_plural_male_object_male', 0);
	$saw['male'][0]['object_female'] = ngettext('verb_saw_subject_singular_male_object_female', 'verb_saw_subject_plural_male_object_female', 0);
	$saw['male'][1]['object_male'] = ngettext('verb_saw_subject_singular_male_object_male', 'verb_saw_subject_plural_male_object_male', 1);
	$saw['male'][1]['object_female'] = ngettext('verb_saw_subject_singular_male_object_female', 'verb_saw_subject_plural_male_object_female', 1);
	$saw['male'][2]['object_male'] = ngettext('verb_saw_subject_singular_male_object_male', 'verb_saw_subject_plural_male_object_male', 2);
	$saw['male'][2]['object_female'] = ngettext('verb_saw_subject_singular_male_object_female', 'verb_saw_subject_plural_male_object_female', 2);
	$saw['male'][3]['object_male'] = ngettext('verb_saw_subject_singular_male_object_male', 'verb_saw_subject_plural_male_object_male', 3);
	$saw['male'][3]['object_female'] = ngettext('verb_saw_subject_singular_male_object_female', 'verb_saw_subject_plural_male_object_female', 3);
	$saw['male'][4]['object_male'] = ngettext('verb_saw_subject_singular_male_object_male', 'verb_saw_subject_plural_male_object_male', 11);
	$saw['male'][4]['object_female'] = ngettext('verb_saw_subject_singular_male_object_female', 'verb_saw_subject_plural_male_object_female', 11);
	$saw['male'][5]['object_male'] = ngettext('verb_saw_subject_singular_male_object_male', 'verb_saw_subject_plural_male_object_male', 100);
	$saw['male'][5]['object_female'] = ngettext('verb_saw_subject_singular_male_object_female', 'verb_saw_subject_plural_male_object_female', 100);

	$locale['verbs']['saw'] = $saw;

//requested -- Verb start
	$requested['type'] = 'verb';

	$requested['you_female'][0]['object_male'] = ngettext('verb_requested_subject_singular_you_female_object_male', 'verb_requested_subject_plural_you_female_object_male', 0);
	$requested['you_female'][0]['object_female'] = ngettext('verb_requested_subject_singular_you_female_object_female', 'verb_requested_subject_plural_you_female_object_female', 0);
	$requested['you_female'][1]['object_male'] = ngettext('verb_requested_subject_singular_you_female_object_male', 'verb_requested_subject_plural_you_female_object_male', 1);
	$requested['you_female'][1]['object_female'] = ngettext('verb_requested_subject_singular_you_female_object_female', 'verb_requested_subject_plural_you_female_object_female', 1);
	$requested['you_female'][2]['object_male'] = ngettext('verb_requested_subject_singular_you_female_object_male', 'verb_requested_subject_plural_you_female_object_male', 2);
	$requested['you_female'][2]['object_female'] = ngettext('verb_requested_subject_singular_you_female_object_female', 'verb_requested_subject_plural_you_female_object_female', 2);
	$requested['you_female'][3]['object_male'] = ngettext('verb_requested_subject_singular_you_female_object_male', 'verb_requested_subject_plural_you_female_object_male', 3);
	$requested['you_female'][3]['object_female'] = ngettext('verb_requested_subject_singular_you_female_object_female', 'verb_requested_subject_plural_you_female_object_female', 3);
	$requested['you_female'][4]['object_male'] = ngettext('verb_requested_subject_singular_you_female_object_male', 'verb_requested_subject_plural_you_female_object_male', 11);
	$requested['you_female'][4]['object_female'] = ngettext('verb_requested_subject_singular_you_female_object_female', 'verb_requested_subject_plural_you_female_object_female', 11);
	$requested['you_female'][5]['object_male'] = ngettext('verb_requested_subject_singular_you_female_object_male', 'verb_requested_subject_plural_fyou_emale_object_male', 100);
	$requested['you_female'][5]['object_female'] = ngettext('verb_requested_subject_singular_you_female_object_female', 'verb_requested_subject_plural_you_female_object_female', 100);

	$requested['you_male'][0]['object_male'] = ngettext('verb_requested_subject_singular_you_male_object_male', 'verb_requested_subject_plural_you_male_object_male', 0);
	$requested['you_male'][0]['object_female'] = ngettext('verb_requested_subject_singular_you_male_object_female', 'verb_requested_subject_plural_you_male_object_female', 0);
	$requested['you_male'][1]['object_male'] = ngettext('verb_requested_subject_singular_you_male_object_male', 'verb_requested_subject_plural_male_you_object_male', 1);
	$requested['you_male'][1]['object_female'] = ngettext('verb_requested_subject_singular_you_male_object_female', 'verb_requested_subject_plural_you_male_object_female', 1);
	$requested['you_male'][2]['object_male'] = ngettext('verb_requested_subject_singular_you_male_object_male', 'verb_requested_subject_plural_you_male_object_male', 2);
	$requested['you_male'][2]['object_female'] = ngettext('verb_requested_subject_singular_you_male_object_female', 'verb_requested_subject_plural_you_male_object_female', 2);
	$requested['you_male'][3]['object_male'] = ngettext('verb_requested_subject_singular_you_male_object_male', 'verb_requested_subject_plural_you_male_object_male', 3);
	$requested['you_male'][3]['object_female'] = ngettext('verb_requested_subject_singular_you_male_object_female', 'verb_requested_subject_plural_you_male_object_female', 3);
	$requested['you_male'][4]['object_male'] = ngettext('verb_requested_subject_singular_you_male_object_male', 'verb_requested_subject_plural_you_male_object_male', 11);
	$requested['you_male'][4]['object_female'] = ngettext('verb_requested_subject_singular_you_male_object_female', 'verb_requested_subject_plural_you_male_object_female', 11);
	$requested['you_male'][5]['object_male'] = ngettext('verb_requested_subject_singular_you_male_object_male', 'verb_requested_subject_plural_you_male_object_male', 100);
	$requested['you_male'][5]['object_female'] = ngettext('verb_requested_subject_singular_you_male_object_female', 'verb_requested_subject_plural_you_male_object_female', 100);


	$requested['female'][0]['object_male'] = ngettext('verb_requested_subject_singular_female_object_male', 'verb_requested_subject_plural_female_object_male', 0);
	$requested['female'][0]['object_female'] = ngettext('verb_requested_subject_singular_female_object_female', 'verb_requested_subject_plural_female_object_female', 0);
	$requested['female'][1]['object_male'] = ngettext('verb_requested_subject_singular_female_object_male', 'verb_requested_subject_plural_female_object_male', 1);
	$requested['female'][1]['object_female'] = ngettext('verb_requested_subject_singular_female_object_female', 'verb_requested_subject_plural_female_object_female', 1);
	$requested['female'][2]['object_male'] = ngettext('verb_requested_subject_singular_female_object_male', 'verb_requested_subject_plural_female_object_male', 2);
	$requested['female'][2]['object_female'] = ngettext('verb_requested_subject_singular_female_object_female', 'verb_requested_subject_plural_female_object_female', 2);
	$requested['female'][3]['object_male'] = ngettext('verb_requested_subject_singular_female_object_male', 'verb_requested_subject_plural_female_object_male', 3);
	$requested['female'][3]['object_female'] = ngettext('verb_requested_subject_singular_female_object_female', 'verb_requested_subject_plural_female_object_female', 3);
	$requested['female'][4]['object_male'] = ngettext('verb_requested_subject_singular_female_object_male', 'verb_requested_subject_plural_female_object_male', 11);
	$requested['female'][4]['object_female'] = ngettext('verb_requested_subject_singular_female_object_female', 'verb_requested_subject_plural_female_object_female', 11);
	$requested['female'][5]['object_male'] = ngettext('verb_requested_subject_singular_female_object_male', 'verb_requested_subject_plural_female_object_male', 100);
	$requested['female'][5]['object_female'] = ngettext('verb_requested_subject_singular_female_object_female', 'verb_requested_subject_plural_female_object_female', 100);

	$requested['male'][0]['object_male'] = ngettext('verb_requested_subject_singular_male_object_male', 'verb_requested_subject_plural_male_object_male', 0);
	$requested['male'][0]['object_female'] = ngettext('verb_requested_subject_singular_male_object_female', 'verb_requested_subject_plural_male_object_female', 0);
	$requested['male'][1]['object_male'] = ngettext('verb_requested_subject_singular_male_object_male', 'verb_requested_subject_plural_male_object_male', 1);
	$requested['male'][1]['object_female'] = ngettext('verb_requested_subject_singular_male_object_female', 'verb_requested_subject_plural_male_object_female', 1);
	$requested['male'][2]['object_male'] = ngettext('verb_requested_subject_singular_male_object_male', 'verb_requested_subject_plural_male_object_male', 2);
	$requested['male'][2]['object_female'] = ngettext('verb_requested_subject_singular_male_object_female', 'verb_requested_subject_plural_male_object_female', 2);
	$requested['male'][3]['object_male'] = ngettext('verb_requested_subject_singular_male_object_male', 'verb_requested_subject_plural_male_object_male', 3);
	$requested['male'][3]['object_female'] = ngettext('verb_requested_subject_singular_male_object_female', 'verb_requested_subject_plural_male_object_female', 3);
	$requested['male'][4]['object_male'] = ngettext('verb_requested_subject_singular_male_object_male', 'verb_requested_subject_plural_male_object_male', 11);
	$requested['male'][4]['object_female'] = ngettext('verb_requested_subject_singular_male_object_female', 'verb_requested_subject_plural_male_object_female', 11);
	$requested['male'][5]['object_male'] = ngettext('verb_requested_subject_singular_male_object_male', 'verb_requested_subject_plural_male_object_male', 100);
	$requested['male'][5]['object_female'] = ngettext('verb_requested_subject_singular_male_object_female', 'verb_requested_subject_plural_male_object_female', 100);

	$locale['verbs']['requested'] = $requested;

//become -- Verb start
	$become['type'] = 'verb';
	$become['object_type'] = (int)_('verb_become_object_is_indirect?') === 1 ? 'indirect' : 'direct';
	$become['preposition'] = _('verb_become_object_preposition');
	$become['preposition_has_space'] = (int)_('verb_become_object_preposition_has_space') === -1 ? true :  false;

	$become['female'][0]['object_male'] = ngettext('verb_become_subject_singular_female_object_male', 'verb_become_subject_plural_female_object_male', 0);
	$become['female'][0]['object_female'] = ngettext('verb_become_subject_singular_female_object_female', 'verb_become_subject_plural_female_object_female', 0);
	$become['female'][1]['object_male'] = ngettext('verb_become_subject_singular_female_object_male', 'verb_become_subject_plural_female_object_male', 1);
	$become['female'][1]['object_female'] = ngettext('verb_become_subject_singular_female_object_female', 'verb_become_subject_plural_female_object_female', 1);
	$become['female'][2]['object_male'] = ngettext('verb_become_subject_singular_female_object_male', 'verb_become_subject_plural_female_object_male', 2);
	$become['female'][2]['object_female'] = ngettext('verb_become_subject_singular_female_object_female', 'verb_become_subject_plural_female_object_female', 2);
	$become['female'][3]['object_male'] = ngettext('verb_become_subject_singular_female_object_male', 'verb_become_subject_plural_female_object_male', 3);
	$become['female'][3]['object_female'] = ngettext('verb_become_subject_singular_female_object_female', 'verb_become_subject_plural_female_object_female', 3);
	$become['female'][4]['object_male'] = ngettext('verb_become_subject_singular_female_object_male', 'verb_become_subject_plural_female_object_male', 11);
	$become['female'][4]['object_female'] = ngettext('verb_become_subject_singular_female_object_female', 'verb_become_subject_plural_female_object_female', 11);
	$become['female'][5]['object_male'] = ngettext('verb_become_subject_singular_female_object_male', 'verb_become_subject_plural_female_object_male', 100);
	$become['female'][5]['object_female'] = ngettext('verb_become_subject_singular_female_object_female', 'verb_become_subject_plural_female_object_female', 100);

	$become['male'][0]['object_male'] = ngettext('verb_become_subject_singular_male_object_male', 'verb_become_subject_plural_male_object_male', 0);
	$become['male'][0]['object_female'] = ngettext('verb_become_subject_singular_male_object_female', 'verb_become_subject_plural_male_object_female', 0);
	$become['male'][1]['object_male'] = ngettext('verb_become_subject_singular_male_object_male', 'verb_become_subject_plural_male_object_male', 1);
	$become['male'][1]['object_female'] = ngettext('verb_become_subject_singular_male_object_female', 'verb_become_subject_plural_male_object_female', 1);
	$become['male'][2]['object_male'] = ngettext('verb_become_subject_singular_male_object_male', 'verb_become_subject_plural_male_object_male', 2);
	$become['male'][2]['object_female'] = ngettext('verb_become_subject_singular_male_object_female', 'verb_become_subject_plural_male_object_female', 2);
	$become['male'][3]['object_male'] = ngettext('verb_become_subject_singular_male_object_male', 'verb_become_subject_plural_male_object_male', 3);
	$become['male'][3]['object_female'] = ngettext('verb_become_subject_singular_male_object_female', 'verb_become_subject_plural_male_object_female', 3);
	$become['male'][4]['object_male'] = ngettext('verb_become_subject_singular_male_object_male', 'verb_become_subject_plural_male_object_male', 11);
	$become['male'][4]['object_female'] = ngettext('verb_become_subject_singular_male_object_female', 'verb_become_subject_plural_male_object_female', 11);
	$become['male'][5]['object_male'] = ngettext('verb_become_subject_singular_male_object_male', 'verb_become_subject_plural_male_object_male', 100);
	$become['male'][5]['object_female'] = ngettext('verb_become_subject_singular_male_object_female', 'verb_become_subject_plural_male_object_female', 100);

	$locale['verbs']['become'] = $become;

//Verb end

//Activity -- Object start
	$activity['gender'] = (int)_('object_activity_is_female?') === 1 ? 'female' : 'male';

	$activity['noun']['subject_female'][0] = ngettext('object_activity_singular_subject_female', 'object_activity_plural_subject_female', 0);
	$activity['noun']['subject_female'][1] = ngettext('object_activity_singular_subject_female', 'object_activity_plural_subject_female', 1);
	$activity['noun']['subject_female'][2] = ngettext('object_activity_singular_subject_female', 'object_activity_plural_subject_female', 2);
	$activity['noun']['subject_female'][3] = ngettext('object_activity_singular_subject_female', 'object_activity_plural_subject_female', 3);
	$activity['noun']['subject_female'][4] = ngettext('object_activity_singular_subject_female', 'object_activity_plural_subject_female', 4);
	$activity['noun']['subject_female'][5] = ngettext('object_activity_singular_subject_female', 'object_activity_plural_subject_female', 5);
	
	$activity['noun']['subject_male'][0] = ngettext('object_activity_singular_subject_male', 'object_activity_plural_subject_male', 0);
	$activity['noun']['subject_male'][1] = ngettext('object_activity_singular_subject_male', 'object_activity_plural_subject_male', 1);
	$activity['noun']['subject_male'][2] = ngettext('object_activity_singular_subject_male', 'object_activity_plural_subject_male', 2);
	$activity['noun']['subject_male'][3] = ngettext('object_activity_singular_subject_male', 'object_activity_plural_subject_male', 3);
	$activity['noun']['subject_male'][4] = ngettext('object_activity_singular_subject_male', 'object_activity_plural_subject_male', 4);
	$activity['noun']['subject_male'][5] = ngettext('object_activity_singular_subject_male', 'object_activity_plural_subject_male', 5);

	$activity['noun']['subject_you_female'][0] = ngettext('object_activity_singular_subject_you_female', 'object_activity_plural_subject_you_female', 0);
	$activity['noun']['subject_you_female'][1] = ngettext('object_activity_singular_subject_you_female', 'object_activity_plural_subject_you_female', 1);
	$activity['noun']['subject_you_female'][2] = ngettext('object_activity_singular_subject_you_female', 'object_activity_plural_subject_you_female', 2);
	$activity['noun']['subject_you_female'][3] = ngettext('object_activity_singular_subject_you_female', 'object_activity_plural_subject_you_female', 3);
	$activity['noun']['subject_you_female'][4] = ngettext('object_activity_singular_subject_you_female', 'object_activity_plural_subject_you_female', 4);
	$activity['noun']['subject_you_female'][5] = ngettext('object_activity_singular_subject_you_female', 'object_activity_plural_subject_you_female', 5);
	
	$activity['noun']['subject_you_male'][0] = ngettext('object_activity_singular_subject_you_male', 'object_activity_plural_subject_you_male', 0);
	$activity['noun']['subject_you_male'][1] = ngettext('object_activity_singular_subject_you_male', 'object_activity_plural_subject_you_male', 1);
	$activity['noun']['subject_you_male'][2] = ngettext('object_activity_singular_subject_you_male', 'object_activity_plural_subject_you_male', 2);
	$activity['noun']['subject_you_male'][3] = ngettext('object_activity_singular_subject_you_male', 'object_activity_plural_subject_you_male', 3);
	$activity['noun']['subject_you_male'][4] = ngettext('object_activity_singular_subject_you_male', 'object_activity_plural_subject_you_male', 4);
	$activity['noun']['subject_you_male'][5] = ngettext('object_activity_singular_subject_you_male', 'object_activity_plural_subject_you_male', 5);

	
	$locale['objects']['activity'] = $activity;
//Activity -- Object end

//Friend -- Object start
	$friend['gender'] = (int)_('object_friend_is_female?') === 1 ? 'female' : 'male';

	$friend['noun']['subject_female'][0] = ngettext('object_friend_singular_subject_female', 'object_friend_plural_subject_female', 0);
	$friend['noun']['subject_female'][1] = ngettext('object_friend_singular_subject_female', 'object_friend_plural_subject_female', 1);
	$friend['noun']['subject_female'][2] = ngettext('object_friend_singular_subject_female', 'object_friend_plural_subject_female', 2);
	$friend['noun']['subject_female'][3] = ngettext('object_friend_singular_subject_female', 'object_friend_plural_subject_female', 3);
	$friend['noun']['subject_female'][4] = ngettext('object_friend_singular_subject_female', 'object_friend_plural_subject_female', 4);
	$friend['noun']['subject_female'][5] = ngettext('object_friend_singular_subject_female', 'object_friend_plural_subject_female', 5);
	
	$friend['noun']['subject_male'][0] = ngettext('object_friend_singular_subject_male', 'object_friend_plural_subject_male', 0);
	$friend['noun']['subject_male'][1] = ngettext('object_friend_singular_subject_male', 'object_friend_plural_subject_male', 1);
	$friend['noun']['subject_male'][2] = ngettext('object_friend_singular_subject_male', 'object_friend_plural_subject_male', 2);
	$friend['noun']['subject_male'][3] = ngettext('object_friend_singular_subject_male', 'object_friend_plural_subject_male', 3);
	$friend['noun']['subject_male'][4] = ngettext('object_friend_singular_subject_male', 'object_friend_plural_subject_male', 4);
	$friend['noun']['subject_male'][5] = ngettext('object_friend_singular_subject_male', 'object_friend_plural_subject_male', 5);

	//has object
	$friend['noun']['subject_female_has_object'][0] = ngettext('object_friend_singular_subject_female_has_object', 'object_friend_plural_subject_female_has_object', 0);
	$friend['noun']['subject_female_has_object'][1] = ngettext('object_friend_singular_subject_female_has_object', 'object_friend_plural_subject_female_has_object', 1);
	$friend['noun']['subject_female_has_object'][2] = ngettext('object_friend_singular_subject_female_has_object', 'object_friend_plural_subject_female_has_object', 2);
	$friend['noun']['subject_female_has_object'][3] = ngettext('object_friend_singular_subject_female_has_object', 'object_friend_plural_subject_female_has_object', 3);
	$friend['noun']['subject_female_has_object'][4] = ngettext('object_friend_singular_subject_female_has_object', 'object_friend_plural_subject_female_has_object', 4);
	$friend['noun']['subject_female_has_object'][5] = ngettext('object_friend_singular_subject_female_has_object', 'object_friend_plural_subject_female_has_object', 5);
	
	$friend['noun']['subject_male_has_object'][0] = ngettext('object_friend_singular_subject_male_has_object', 'object_friend_plural_subject_male', 0);
	$friend['noun']['subject_male_has_object'][1] = ngettext('object_friend_singular_subject_male_has_object', 'object_friend_plural_subject_male', 1);
	$friend['noun']['subject_male_has_object'][2] = ngettext('object_friend_singular_subject_male_has_object', 'object_friend_plural_subject_male', 2);
	$friend['noun']['subject_male_has_object'][3] = ngettext('object_friend_singular_subject_male_has_object', 'object_friend_plural_subject_male', 3);
	$friend['noun']['subject_male_has_object'][4] = ngettext('object_friend_singular_subject_male_has_object', 'object_friend_plural_subject_male', 4);
	$friend['noun']['subject_male_has_object'][5] = ngettext('object_friend_singular_subject_male_has_object', 'object_friend_plural_subject_male', 5);
	
	$locale['objects']['friend'] = $friend;
//Friend -- Object end

//Friendship -- Object start
	$friendship['gender'] = (int)_('object_friendship_is_female?') === 1 ? 'female' : 'male';

	$friendship['noun']['subject_female'][0] = ngettext('object_friendship_singular_subject_female', 'object_friendship_plural_subject_female', 0);
	$friendship['noun']['subject_female'][1] = ngettext('object_friendship_singular_subject_female', 'object_friendship_plural_subject_female', 1);
	$friendship['noun']['subject_female'][2] = ngettext('object_friendship_singular_subject_female', 'object_friendship_plural_subject_female', 2);
	$friendship['noun']['subject_female'][3] = ngettext('object_friendship_singular_subject_female', 'object_friendship_plural_subject_female', 3);
	$friendship['noun']['subject_female'][4] = ngettext('object_friendship_singular_subject_female', 'object_friendship_plural_subject_female', 4);
	$friendship['noun']['subject_female'][5] = ngettext('object_friendship_singular_subject_female', 'object_friendship_plural_subject_female', 5);
	
	$friendship['noun']['subject_male'][0] = ngettext('object_friendship_singular_subject_male', 'object_friendship_plural_subject_male', 0);
	$friendship['noun']['subject_male'][1] = ngettext('object_friendship_singular_subject_male', 'object_friendship_plural_subject_male', 1);
	$friendship['noun']['subject_male'][2] = ngettext('object_friendship_singular_subject_male', 'object_friendship_plural_subject_male', 2);
	$friendship['noun']['subject_male'][3] = ngettext('object_friendship_singular_subject_male', 'object_friendship_plural_subject_male', 3);
	$friendship['noun']['subject_male'][4] = ngettext('object_friendship_singular_subject_male', 'object_friendship_plural_subject_male', 4);
	$friendship['noun']['subject_male'][5] = ngettext('object_friendship_singular_subject_male', 'object_friendship_plural_subject_male', 5);

	$friendship['noun']['subject_you_female'][0] = ngettext('object_friendship_singular_subject_you_female', 'object_friendship_plural_subject_you_female', 0);
	$friendship['noun']['subject_you_female'][1] = ngettext('object_friendship_singular_subject_you_female', 'object_friendship_plural_subject_you_female', 1);
	$friendship['noun']['subject_you_female'][2] = ngettext('object_friendship_singular_subject_you_female', 'object_friendship_plural_subject_you_female', 2);
	$friendship['noun']['subject_you_female'][3] = ngettext('object_friendship_singular_subject_you_female', 'object_friendship_plural_subject_you_female', 3);
	$friendship['noun']['subject_you_female'][4] = ngettext('object_friendship_singular_subject_you_female', 'object_friendship_plural_subject_you_female', 4);
	$friendship['noun']['subject_you_female'][5] = ngettext('object_friendship_singular_subject_you_female', 'object_friendship_plural_subject_you_female', 5);

	$friendship['noun']['subject_you_male'][0] = ngettext('object_friendship_singular_subject_you_male', 'object_friendship_plural_subject_you_male', 0);
	$friendship['noun']['subject_you_male'][1] = ngettext('object_friendship_singular_subject_you_male', 'object_friendship_plural_subject_you_male', 1);
	$friendship['noun']['subject_you_male'][2] = ngettext('object_friendship_singular_subject_you_male', 'object_friendship_plural_subject_you_male', 2);
	$friendship['noun']['subject_you_male'][3] = ngettext('object_friendship_singular_subject_you_male', 'object_friendship_plural_subject_you_male', 3);
	$friendship['noun']['subject_you_male'][4] = ngettext('object_friendship_singular_subject_you_male', 'object_friendship_plural_subject_you_male', 4);
	$friendship['noun']['subject_you_male'][5] = ngettext('object_friendship_singular_subject_you_male', 'object_friendship_plural_subject_you_male', 5);

	$locale['objects']['friendship'] = $friendship;

//Friendship -- Object end

?>