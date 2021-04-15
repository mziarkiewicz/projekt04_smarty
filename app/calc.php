<?php
// KONTROLER strony kalkulatora kredytowego
require_once dirname(__FILE__) . '/../config.php';

require_once _ROOT_PATH.'/libs/smarty/Smarty.class.php';
//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
//include _ROOT_PATH.'/app/security/check.php';

// pobranie parametrów
function getParams(&$form) {
    $form['amo'] = isset($_REQUEST ['amo']) ? $_REQUEST ['amo'] : null;
    $form['yr'] = isset($_REQUEST ['yr']) ? $_REQUEST ['yr'] : null;
    $form['pct'] = isset($_REQUEST ['pct']) ? $_REQUEST ['pct'] : null;
}

// walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$messages,&$infos){
    //sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
    if ( ! (isset($form['amo']) && isset($form['yr']) && isset($form['pct']))) {
        return false;
    }
    // sprawdzenie, czy potrzebne wartości zostały przekazane
    if ( $form['amo'] == "") {
        $messages [] = 'Nie podano kwoty kredytu';
    }
    if ( $form['yr'] == "") {
        $messages [] = 'Nie podano lat spłaty kredytu';
    }
    if ( $form['pct'] == "") {
        $messages [] = 'Nie podano oprocentowania kredytu';
    }

    //nie ma sensu walidować dalej gdy brak parametrów
    if (count ( $messages ) != 0) return false;

    // sprawdzenie, czy $amo, $yr, $pct są liczbami i czy są dodatnie
    if (! is_numeric( $form['amo'] )) {
        $messages [] = 'Podana kwota jest niepoprawna';
    } else  if ( doubleval($form['amo']) < 0) {
        $messages [] = 'Kwota kredytu nie może być ujemna';
    }

    if (! is_numeric( $form['yr'] )) {
        $messages [] = 'Podana liczba lat spłaty kredytu jest niepoprawna';
    } else if (intval($form['yr']) <= 0) {
        $messages [] = 'Liczba lat spłaty kredytu musi być dodatnia';
    }

    if (! is_numeric( $form['pct'] )) {
        $messages [] = 'Podane oprocentowanie jest niepoprawne';
    } else if( doubleval($form['pct']) < 0) {
        $messages [] = 'Oprocentowanie musi być liczbą nieujemną';
    }

    if (count ( $messages ) != 0) return false;
    else return true;
}

// wykonaj zadanie jeśli wszystko w porządku
function process(&$form,&$infos,&$messages,&$result){
    global $role;

    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

    //konwersja parametrów na odpowiedni format
    $form['amo'] = doubleval($form['amo']);
    $form['yr'] = intval($form['yr']);
    $form['pct'] = doubleval($form['pct']);

    if ($form['pct'] == 0 && $role != 'admin'){
        $messages [] = 'Tylko administrator może dostać zerowe oprocentowanie!';
    }

    //wykonanie operacji
    $result = ($form['amo'] / ($form['yr'] * 12)) * (1 + $form['pct']/100) ;

}

//definicja zmiennych kontrolera
$form = null;
$infos = array();
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($form);
if ( validate($form,$messages,$infos) ) { // gdy brak błędów
    process($form,$infos,$messages,$result);
}

//// 4. Wywołanie widoku z przekazaniem zmiennych
//// - zainicjowane zmienne ($messages,$form,$infos,$result)
////   będą dostępne w dołączonym skrypcie
//include 'calc.tpl';

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Projekt 04 - Smarty');
$smarty->assign('page_description','Przykład szablonowania oparty o bibliotekę Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc.tpl');