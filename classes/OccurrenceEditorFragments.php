<?php
include_once($SERVER_ROOT.'/classes/OccurrenceEditorManager.php');

if($LANG_TAG != 'en' && file_exists($SERVER_ROOT.'/content/lang/classes/OccurrenceEditorFragments'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/classes/OccurrenceEditorFragments.'.$LANG_TAG.'.php');
else include_once($SERVER_ROOT.'/content/lang/classes/OccurrenceEditorFragment.en.php');

class OccurrenceEditorFragments extends OccurrenceEditorMangers {

    //Add functions to handle actions that occur in the fragments tab

}

?>