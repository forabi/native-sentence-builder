<?
function build_sentence($language, $sentence, $verb, $object, $viewer){	
	$locale_str = "$language.utf8";
	putenv("LC_ALL=$locale_str");
	setlocale(LC_ALL, $locale_str);
	bindtextdomain("messages", "./../locale");
	textdomain("messages");
	bind_textdomain_codeset("messages", 'UTF-8');
	require('verbs.php');
	require_once('sentence_builder.php');
	$sentence_builder = new SentenceBuilder($locale, $sentence, $verb, $object, $viewer);
	return trim($sentence_builder->to_string());
}
?>