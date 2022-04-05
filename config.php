<?php
$isProd = false;
if ($isProd) {
    define("DSN", "mysql:host=localhost;dbname=prueba");
    define("USERNAME", "root");
    define("PASSWORD", "");
} else {
    define("DSN", "mysql:host=localhost;dbname=prueba;port=3307");
    define("USERNAME", "root");
    define("PASSWORD", "");
}

function getLimitedText($Name, $visible_characters = 10, $end = true)
{
    $texto_end = $end ? '...' : '';
    return (strlen(trim($Name)) <= $visible_characters) ? $Name : substr($Name, 0, $visible_characters) . $texto_end;
}

function getFirstWords($text, $max_words = 10)
{
    $returnValue = (string) '';

    $wordString = str_word_count($text, 1);

    $word_number = 0;
    foreach ($wordString as $aWord) {
        if ($word_number < $max_words) {
            $word_number++;
            $returnValue .= $aWord . " ";
        } else {
            $returnValue .= "...";
            break;
        }
    }

    return (string) $returnValue;
}

function prepareTextInput($text, $useHtmlEntities = false)
{
    if ($useHtmlEntities)
        return trim(htmlentities(str_replace(array('\"', '\\\''), array('"', "'"), $text), ENT_QUOTES, "UTF-8", true));
    else
        return trim(str_replace(array('\"', '\\\''), array('"', "'"), $text));
}
function prepareTextOutput($text)
{
    //return str_replace("\n","<br />",html_entity_decode($text, ENT_NOQUOTES, 'UTF-8'));
    return html_entity_decode($text, ENT_NOQUOTES, 'UTF-8');
}
