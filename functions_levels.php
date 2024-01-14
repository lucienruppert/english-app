<?php

function getLevelList($lang)
{
    $userObject = $GLOBALS['userObject'];

    if ($userObject['forras_nyelv'] == 0) {
        $list['angol'] = array(
            '0'  => array('Level 0', 1),
            '153' => array('Angol fonetikus �t�r�s, kiejt�s', 3),
            '74' => array('A f�nevek', 3),
            '60' => array('A n�vel�k', 3),
            '75' => array('A f�nevek megsz�ml�lhat�s�ga', 3),
            '76' => array('A f�nevek t�bbessz�ma', 3),
            '1'  => array('f�n�v', 1),
            '8'  => array('Mutat� n�vm�sok', 3),
            '13' => array('Egyszer� n�h�nyszavasok', 2),
            '77' => array('A mell�knevek', 3),
            '78' => array('A mell�knevek fokoz�sa', 3),
            '2'  => array('mell�kn�v', 1),
            '120' => array('El�lj�r�szavak', 3),
            '6'  => array('el�lj�r�sz�', 1),
            '88' => array('A l�tige sz�ks�gess�ge, az els� k�t alak', 3),
            '91' => array('A l�tige tagad�sa', 3),
            '232' => array('Szem�lyek �s sz�mok', 3),
            '152' => array('Szem�lyes �s birtokos n�vm�sok', 3),
            '200' => array('L�tig�s mondatok', 2),
            '92' => array('K�rd�sz�rend, az eld�ntend� k�rd�s', 3),
            '93' => array('K�rd�szavas k�rd�sek', 3),
            '209' => array('A l�tige ragoz�sa', 3),
            '94' => array('Helyhat�roz� szavak', 3),
            '126' => array('Birtokos szerkezet', 3),
            '59' => array('Birtokos szerkezet', 2),
            '127' => array('A "milyen" k�rd�s', 3),
            '36' => array('Milyen-k�rd�sek', 2),
            '157' => array('Hat�roz�k sorrendje', 3),
            '38' => array('L�tig�s mondatok (halad�bb)', 2),
            '97' => array('Sz�mok', 3),
            '11' => array('sz�m', 1),
            '98' => array('Az �ra, napszakok', 3),
            '188' => array('Az �ra, sz�mok', 2),
            '159' => array('Konkr�t dologr�l �ll�tjuk, hogy van?', 3),
            '187' => array('"There is"-es szerkezet', 3),
            '41' => array('"There is"-es szerkezet', 2),
            '160' => array('L�tez�s vagy cselekv�s?', 3),
            '229' => array('Az "igeid�" fogalma', 3),
            '154' => array('Egyszer� jelen kijelent�s/felsz�l�t�s', 3),
            '5'  => array('ige', 1),
            '15' => array('Egyszer� jelen', 2),
            '156' => array('K�t ige �sszek�t�se', 3),
            '162' => array('Egyszer� jelen k�rd�s', 3),
            '226' => array('K�rd�szavas szerkezetek', 3),
            '164' => array('Egyszer� jelen tagad�s', 3),
            '114' => array('Szem�lyes n�vm�s t�rgy, r�szes, visszahat�', 3),
            '230' => array('A h�rom "van"-os szerkezet', 3),
            '166' => array('Egyszer� m�lt', 3),
            '18' => array('Egyszer� m�lt', 2),
            '167' => array('Egyszer� j�v�', 3),
            '21' => array('Egyszer� j�v�', 2),
            '999' => array('�sszefoglal�s: egyszer� mondatok', 2),
            '158' => array('Tell-say-talk-speak-discuss', 3),
            '163' => array('Alanyra k�rdez�s', 3),
            '193' => array('Alanyra k�rdez� mondatok', 2),
            '186' => array('�sszehasonl�t�sok', 3),
            '70' => array('�sszehasonl�t�sok', 2),
            '228' => array('"It+is+mn�v+to+ige" szerkezet', 3),
            '165' => array('Seg�dig�k', 3),
            '37' => array('Seg�dig�s mondatok', 2),
            '185' => array('"Ami(t)"-es mell�kmondatok', 3),
            '69' => array('"Ami(t)"-es mondatok', 2),
            '177' => array('Folyamatos jelen', 3),
            '24' => array('Folyamatos jelen', 2),
            '178' => array('Befejezett jelen', 3),
            '27' => array('Befejezett jelen', 2),
            '189' => array('"There is" m�s igeid�kben', 3),
            '190' => array('"There is" m�s igeid�kben', 2),
            '227' => array('A seg�dig�k m�ltideje', 3),
            '355' => array('Seg�dig�s mondatok m�lt ideje', 2),
            '182' => array('Befejezett M�lt', 3),
            '64' => array('Befejezett M�lt', 2),
            '146' => array('Szenved� szerkezet', 3),
            '30' => array('Szenved� szerkezet', 2),
            '356' => array('Seg�dig�s szenved� szerkezet', 2),
            '138' => array('Folyamatos m�lt', 3),
            '139' => array('Folyamatos m�lt', 2),
            '180' => array('Folyamatos j�v�', 3),
            '181' => array('Folyamatos j�v�', 2),
            '143' => array('Felt�teles m�d', 3),
            '31' => array('Felt�teles m�d', 2),
            '194' => array('Befejezett folyamatos jelen', 3),
            '195' => array('Befejezett folyamatos jelen', 2),
            '179' => array('M�veltet�s', 3),
            '34' => array('M�veltet�s', 2),
            '110' => array('Igenevek', 3),
            '224' => array('Igeneves mondatok', 2),
            '183' => array('Befejezett folyamatos m�lt', 3),
            '125' => array('Befejezett folyamatos m�lt', 2),
            '184' => array('F�gg� besz�d', 3),
            '49' => array('F�gg� besz�d', 2),
            '207' => array('Befejezett j�v�', 3),
            '208' => array('Befejezett j�v�', 2),
            '369' => array('"Mit gondolsz" t�pus� mondatok', 2),
            '238' => array('A mell�knevek sorrendje', 3),
            '246' => array('Sok kis apr�s�g 1.', 3),
            '364' => array('Sok kis apr�s�g 2.', 3),
            '46' => array('n�vm�s', 1),
            '3'  => array('hat�roz�sz�', 1),
            '39' => array('kifejez�s', 1),
            '205' => array('sz�fordulat', 1)
        );

        $list['spanyol'] = array(
            '0'  => array('Level 0', 1),
            '53' => array('Spanyol �b�c�', 3),
            '81' => array('�b�c�', 1),
            '82' => array('Kiejt�s', 3),
            '174' => array('Hangs�ly', 3),
            '84' => array('N�vel�', 3),
            '176' => array('F�n�v', 3),
            '85' => array('Mell�kn�v', 3),
            '86' => array('Szem�lyes n�vm�s alany eset + a "ser" ige', 3),
            '200' => array('"Ser"', 2),
            '199' => array('Tagad�s �s az eld�ntend� k�rd�s', 3),
            '88' => array('"Estar" + "Hay" haszn�lata', 3),
            '38' => array('"Estar"', 2),
            '41' => array('"Hay"', 2),
            '120' => array('El�lj�r�szavak I.', 3),
            '95' => array('K�rd�szavak �s a kieg�sz�tend� k�rd�s', 3),
            '96' => array('k�rd�sz�', 1),
            '231' => array('Qu�? vagy Cu�l?', 3),
            '97' => array('Sz�mok', 3),
            '11' => array('sz�m', 1),
            '98' => array('Az �ra', 3),
            '99' => array('�ra', 2),
            '101' => array('Birtokos szerkezet �s n�vm�sok', 3),
            '59' => array('Birtokos szerkezet', 2),
            '8'  => array('Mutat� n�vm�sok �s itt/ott', 3),
            '102' => array('Szab�lyos ig�k jelen ideje', 3),
            '103' => array('ige', 1),
            '58' => array('ige-ragozott', 1),
            '363' => array('"hablar" conjugated', 1),
            '111' => array('A rendhagy� ig�k', 3),
            '113' => array('Mell�kn�v fokoz�s', 3),
            '206' => array('�sszehasonl�t�s', 3),
            '70' => array('�sszehasonl�t�s', 2),
            '114' => array('Szem�lyes n�vm�s t�rgy, r�szes', 3),
            '116' => array('"Me gusta" jelleg� mondatok', 3),
            '66' => array('"Me gusta"', 2),
            '129' => array('Visszahat� ig�k �s n�vm�sok', 3),
            '130' => array('Visszahat�', 2),
            '234' => array('Felsz�l�t� m�d I.', 3),
            '235' => array('Felsz�l�t� m�d I.', 2),
            '192' => array('El�lj�r�szavak II.', 3),
            '6'  => array('el�lj�r�sz�', 1),
            '136' => array('Igenevek', 3),
            '117' => array('K�zelj�v� - ir+a+infinitivo', 3),
            '79' => array('K�zelj�v� - ir+a+infinitivo', 2),
            '118' => array('Haber �s a K�zelm�lt', 3),
            '67' => array('K�zelm�lt', 2),
            '177' => array('Folyamatos jelen', 3),
            '24' => array('Folyamatos jelen', 2),
            '210' => array('Sz�ks�gess�g, k�teless�g', 3),
            '233' => array('Sz�ks�gess�g, k�teless�g', 2),
            '121' => array('Hat�rozatlan n�vm�sok', 3),
            '122' => array('Hat�rozatlan n�vm�s', 2),
            '123' => array('Rendhagy� ig�k 2.', 3),
            '15' => array('Jelen id�', 2),
            '370' => array('Szem�lyes n�vm�sos mondatok', 2),
            '191' => array('El�lj�r�szavak II.', 3),
            '137' => array('Elbesz�l� m�lt', 3),
            '18' => array('Elbesz�l� m�lt', 2),
            '360' => array('El�lj�r�szavak III.', 3),
            '138' => array('Folyamatos m�lt', 3),
            '139' => array('Folyamatos m�lt', 2),
            '202' => array('Vonatkoz� n�vm�sok', 3),
            '236' => array('Vonatkoz� n�vm�s', 2),
            '172' => array('R�gm�lt', 3),
            '237' => array('R�gm�lt', 2),
            '140' => array('Felsz�l�t� m�d II.', 3),
            '141' => array('Felsz�l�t� II.', 2),
            '142' => array('J�v� id�', 3),
            '21' => array('J�v� id�', 2),
            '143' => array('Felt�teles m�d', 3),
            '277' => array('Felt�teles m�d m�lt id�', 3),
            '133' => array('Felt�teles mondatok', 3),
            '31' => array('Felt�teles m�d', 2),
            '146' => array('Szenved� szerkezet', 3),
            '30' => array('Szenved�', 2),
            '131' => array('Igei k�r�l�r�sok: Gerundio', 3),
            '223' => array('Gerundio', 2),
            '132' => array('Igei k�r�l�r�sok: Infinitivo', 3),
            '134' => array('Infinitivo', 2),
            '74' => array('Igei k�r�l�r�sok: Participio', 3),
            '135' => array('Participio', 2),
            '366' => array('V�ltoz�st kifejez� ig�k', 3),
            '367' => array('V�ltoz�st kifejez� ig�k', 2),
            '144' => array('K�t�m�d jelen id�', 3),
            '211' => array('K�t�m�d haszn�lata I.', 3),
            '212' => array('K�t�m�d haszn�lata II.', 3),
            '168' => array('K�t�m�d jelen', 2),
            '145' => array('A k�t�m�d folyamatos m�ltja', 3),
            '247' => array('K�t�m�d folyamatos m�lt', 2),
            '239' => array('A k�t�m�d k�zel- �s r�gm�lt', 3),
            '365' => array('K�t�m�d k�zelm�lt', 2),
            '147' => array('F�gg� besz�d', 3),
            '148' => array('F�gg� besz�d', 2),
            '150' => array('Igeid� egyeztet�s a k�t�m�dban', 3),
            '151' => array('Egyeztet�s a k�t�m�dban', 2),
            '170' => array('Befejezett j�v� id�', 3),
            '171' => array('Befejezett j�v� id�', 2),
            '1'  => array('f�n�v', 1),
            '2'  => array('mell�kn�v', 1),
            '3'  => array('hat�roz�sz�', 1),
            '71' => array('n�vm�s', 1),
            '39' => array('kifejez�s', 1),
            '205' => array('sz�fordulat', 1),
            '204' => array('Se', 3),
            '362' => array('"Se"-s mondatok', 2),
            '359' => array('Lo', 3)
        );
    } else if ($userObject['forras_nyelv'] == 2) {
        $list['angol'] = array(
            '0'  => array('Level 0', 1),
            '153' => array('Transcripci�n fon�tica, pronunciaci�n', 3),
            '60' => array('Art�culos', 3),
            '75' => array('Sustantivos contables y incontables', 3),
            '76' => array('El plural de los sustantivos', 3),
            '1'  => array('Sustantivo', 1),
            '8'  => array('Pronombres demostrativos', 3),
            '13' => array('Art�culo/Pronombre+sustantive', 2),
            '77' => array('Adjetivos', 3),
            '78' => array('Los grados de los adjetivos', 3),
            '2'  => array('Adjectivo', 1),
            '120' => array('Las preposici�nes', 3),
            '6'  => array('Preposici�n', 1),
            '88' => array('El verbo "be"', 3),
            '200' => array('Frases con "be"', 2),
            '91' => array('Negaci�n de "be"', 3),
            '152' => array('Pronombres personales', 3),
            '92' => array('Preguntas simples', 3),
            '209' => array('Conjugaci�n de Be', 3),
            '94' => array('Adverbios de lugar', 3),
            '126' => array('Expresar posesi�n', 3),
            '59' => array('Expresar posesi�n', 2),
            '127' => array('Preguntas "c�mo"', 3),
            '36' => array('Preguntas "c�mo"', 2),
            '157' => array('El ordern de los adverbios', 3),
            '38' => array('Frases con "be" (adelanto)', 2),
            '97' => array('N�meros', 3),
            '11' => array('N�mero', 1),
            '98' => array('La hora', 3),
            '188' => array('La hora', 2),
            '187' => array('"Hay"', 3),
            '41' => array('"Hay"', 2),
            '154' => array('Presente: afirmaciones/imperativos', 3),
            '5'  => array('Verbo', 1),
            '156' => array('Conectar dos verbos', 3),
            '162' => array('Present simple: preguntas', 3),
            '164' => array('Present simple: negaciones', 3),
            '15' => array('Presente', 2),
            '114' => array('Pronombres personales', 3),
            '166' => array('Past simple', 3),
            '18' => array('Past simple', 2),
            '167' => array('Future simple', 3),
            '21' => array('Future simple', 2),
            '158' => array('Tell-say-talk-speak-discuss', 3),
            '163' => array('Preguntas sobre el sujeto', 3),
            '193' => array('Preguntas sobre el sujeto', 2),
            '186' => array('La comparaci�n', 3),
            '70' => array('La comparaci�n', 2),
            '228' => array('"It+is+adjetivo+to+verbo"', 3),
            '165' => array('Verbos auxiliares', 3),
            '37' => array('Verbos auxiliares', 2),
            '355' => array('Verbos auxiliares (pasado)', 2),
            '185' => array('What-that-which', 3),
            '69' => array('What-that-which', 2),
            '177' => array('Present continuous', 3),
            '24' => array('Present continuous', 2),
            '178' => array('Present perfect', 3),
            '27' => array('Present perfect', 2),
            '189' => array('"Hay" en otros tiempos', 3),
            '190' => array('"Hay" en otros tiempos', 2),
            '227' => array('Auxiliares en pasado', 3),
            '182' => array('Past perfect', 3),
            '64' => array('Past perfect', 2),
            '146' => array('Voz pasiva', 3),
            '30' => array('Voz pasiva', 2),
            '356' => array('Voz pasiva y auxiliar', 2),
            '138' => array('Past continuous', 3),
            '139' => array('Past continuous', 2),
            '180' => array('Future continuous', 3),
            '181' => array('Future continuous', 2),
            '143' => array('Condicional', 3),
            '31' => array('Condicional', 2),
            '194' => array('Present perfect continuous', 3),
            '195' => array('Present perfect continuous', 2),
            '179' => array('Causitive', 3),
            '34' => array('Causative', 2),
            '110' => array('Participio', 3),
            '224' => array('Participio', 2),
            '183' => array('Past perfect continuous', 3),
            '125' => array('Past perfect continuous', 2),
            '184' => array('Estilo indirecto', 3),
            '49' => array('Estilo indirecto', 2),
            '207' => array('Futuro perfecto', 3),
            '208' => array('Futuro perfecto', 2),
            '238' => array('El orden de los adjetivos', 3),
            '246' => array('Cosas peque&#241;as', 3),
            '72' => array('Frases con verbos', 2),
            '46' => array('Otro', 1),
            '3'  => array('Adverbio', 1),
            '39' => array('Expresi�n', 1),
            '205' => array('Words used together', 1)
        );
    } else if ($userObject['forras_nyelv'] == 1) {
        $list['spanyol'] = array(
            '0'  => array('Level 0', 1),
            '53' => array('Alphabet', 3),
            '82' => array('Pronunciation', 3),
            '174' => array('Stress', 3),
            '84' => array('The Article', 3),
            '176' => array('The Noun', 3),
            '85' => array('Adjectives', 3),
            '86' => array('Personal pronoun + "ser"', 3),
            '200' => array('"Ser"', 2),
            '199' => array('Negations and Yes-No Questions', 3),
            '88' => array('Use of "Estar" + "Hay"', 3),
            '38' => array('"Estar"', 2),
            '41' => array('"Hay"', 2),
            '120' => array('Prepositions I.', 3),
            '95' => array('Question words and Wh-Questions', 3),
            '231' => array('Qu�? or Cu�l?', 3),
            '97' => array('Numbers', 3),
            '11' => array('numbers', 1),
            '98' => array('The Clock', 3),
            '101' => array('Possessive structure and pronouns', 3),
            '59' => array('Possessive structure', 2),
            '8'  => array('Demonstrative and here/there', 3),
            '102' => array('Regular Verbs in Present', 3),
            '103' => array('verb', 1),
            '58' => array('verb-conjugated', 1),
            '363' => array('"hablar" conjugated', 1),
            '111' => array('Iregular verbs', 3),
            '113' => array('Adjective forms', 3),
            '206' => array('Comparison', 3),
            '70' => array('Comparison', 2),
            '114' => array('Accusative and dative cases', 3),
            '116' => array('"Me gusta" type sentences', 3),
            '66' => array('"Me gusta"', 2),
            '129' => array('Reflexive verbs and pronouns', 3),
            '130' => array('Reflexive', 2),
            '234' => array('Imperative I.', 3),
            '235' => array('Imperative I.', 2),
            '192' => array('Prepositions II.', 3),
            '6'  => array('preposition', 1),
            '136' => array('Participles', 3),
            '117' => array('Ir+a+infinitivo', 3),
            '79' => array('ir+a+infinitivo', 2),
            '118' => array('Haber and Present Perfect', 3),
            '67' => array('Present perfect', 2),
            '177' => array('"Present Continuous"', 3),
            '24' => array('Present continuous', 2),
            '210' => array('Obligation', 3),
            '121' => array('Indefinite pronouns', 3),
            '122' => array('Indefinite pronouns', 2),
            '123' => array('Irregular verbs 2.', 3),
            '15' => array('Present Simple', 2),
            '191' => array('Prepositions II.', 3),
            '137' => array('Past Simple', 3),
            '18' => array('Past simple', 2),
            '360' => array('Prepositions III.', 3),
            '138' => array('Past Continuous', 3),
            '139' => array('Past continuous', 2),
            '202' => array('Relative Pronouns', 3),
            '236' => array('Relative pronouns', 2),
            '172' => array('Past Perfect', 3),
            '237' => array('Past perfect', 2),
            '140' => array('Imperative II.', 3),
            '141' => array('Imperative II.', 2),
            '142' => array('Future Simple', 3),
            '21' => array('Future Simple', 2),
            '143' => array('Conditional', 3),
            '277' => array('Conditional past tense', 3),
            '133' => array('Conditional sentences', 3),
            '31' => array('Conditional', 2),
            '146' => array('Passive Voice', 3),
            '30' => array('Passive voice', 2),
            '131' => array('Gerundio', 3),
            '223' => array('gerundio', 2),
            '132' => array('Infinitivo', 3),
            '134' => array('infinitivo', 2),
            '74' => array('Participio', 3),
            '135' => array('participio', 2),
            '366' => array('Future Continuous', 3),
            '367' => array('Future continuous', 2),
            '144' => array('Subjuntivo Present', 3),
            '211' => array('Use of Subjuntivo I.', 3),
            '212' => array('Use of Subjuntivo II.', 3),
            '168' => array('Subjuntivo Present', 2),
            '145' => array('Subjuntivo Past Continuous', 3),
            '247' => array('Subjuntivo Past Continuous', 2),
            '365' => array('Subjuntivo Present Perfect', 2),
            '239' => array('Subjuntivo Past Perfect and Simple Past', 3),
            '371' => array('Subjuntivo Past Perfect', 2),
            '147' => array('Reported Speech', 3),
            '148' => array('Reported speech', 2),
            '150' => array('Tense Agreement in Subjuntivo', 3),
            '151' => array('Tense agreement in subjuntivo', 2),
            '170' => array('Future Perfect Continuous', 3),
            '171' => array('Future perfect continuous', 2),
            '1'  => array('noun', 1),
            '2'  => array('adjective', 1),
            '3'  => array('adverb', 1),
            '71' => array('pronoun', 1),
            '39' => array('expression', 1),
            '205' => array('just words', 1),
            '204' => array('Se', 3),
            '362' => array('"Se" sentences', 2),
            '359' => array('General Subject', 3)
        );
    }

    $list['arab'] = array(
        '0'  => array('Level 0', 1),
        '259' => array('* Independent Pronouns (p7)', 1),
        '349' => array('* Some basic words (p7)', 1),
        '346' => array('This-that pronouns', 1),
        '347' => array('"This/that is" examples', 1),
        '348' => array('"This/that guy" examples', 1),
        '258' => array('"Have" conj. (present)', 1),
        '263' => array('"Want" conj. (past)', 1),
        '260' => array('"Do" conj. (present)', 1),
        '350' => array('Verbs 1.', 1),
        '351' => array('Verbs 2.', 1),
        '352' => array('Verbs 3.', 1),
        '353' => array('Verbs 4.', 1),
        '283' => array('I (future)', 1),
        '286' => array('I (future /ending)', 1),
        '282' => array('I (past)', 1),
        '285' => array('I (past /ending)', 1),
        '256' => array('I (present) 1.', 1),
        '284' => array('I (present /ending)', 1),
        '287' => array('I (present) 2.', 1),
        '288' => array('I (present) 3.', 1),
        '290' => array('I (present) 4.', 1),
        '275' => array('Verbs /suffix', 1),
        '361' => array('"Want to" sentences', 1),
        '279' => array('Nouns 1.', 1),
        '294' => array('Nouns 2.', 1),
        '262' => array('Possessive Pronouns', 1),
        '254' => array('Possessed nouns 1.', 1),
        '291' => array('Possessed nouns 2.', 1),
        '292' => array('Possessed nouns 3.', 1),
        '293' => array('Possessed nouns 4.', 1),
        '276' => array('"To me" pronouns', 1),
        '273' => array('Conversational 1.', 1),
        '289' => array('Conversational 2.', 1),
        '302' => array('Greetings 1.', 1),
        '301' => array('Greetings 2.', 1),
        '272' => array('Greetings 3.', 1),
        '281' => array('Adjectives 1.', 1),
        '280' => array('Places', 1),
        '265' => array('Days', 1),
        '255' => array('Basic Numbers', 1),
        '249' => array('Basic Words', 2),
        '7'  => array('Numbers', 2),
        '264' => array('Ordinal Numbers', 2),
        '56' => array('Verbs - present DOUBLE-CHECK', 2),
        '270' => array('Verbs - past', 2),
        '271' => array('Verbs - future', 2),
        '5'  => array('Verbs - conj.', 2),
        '257' => array('Verbs - Imperative', 2),
        '274' => array('LATEFA - K�RD�SEK', 2),
        '200' => array('BE statements', 2),
        '50' => array('BE questions', 2),
        '14' => array('BE negations', 2),
        '41' => array('"Can"-sentences', 2),
        '278' => array('"Lets"... sentences', 2),
        '37' => array('Seg�dig�s mondatok', 2),
        '15' => array('Present statements', 2),
        '17' => array('Present questions', 2),
        '16' => array('Present negations', 2),
        '18' => array('Past statements TO SORT', 2),
        '20' => array('Past questions', 2),
        '19' => array('Past negations', 2),
        '21' => array('Future statements TO SORT', 2),
        '23' => array('Future questions', 2),
        '22' => array('Future negations', 2),
        '1'  => array('Nouns', 2),
        '2'  => array('Adjectives', 2),
        '6'  => array('Preposition', 2),
        '46' => array('Other things', 2),
        '3'  => array('Adverb', 2),
        '39' => array('Expressions', 2),
        '31' => array('Conditional', 2),
        '74' => array('Sentences for my lessons', 3),
        '187' => array('There is', 3),
        '156' => array('Verb + verb', 3),
        '267' => array('Imperatives', 3),
        '261' => array('Some rules', 3),
        '266' => array('Negations', 3)
    );

    $list['nemet'] = array(
        '0'  => array('Level 0', 1),
        '153' => array('A n�met �b�c�: kiejt�s', 3),
        '196' => array('A n�met �b�c�: mag�nhangz�k', 3),
        '197' => array('A n�met �b�c�: telefonos bet�z�s', 3),
        '198' => array('A n�met �b�c�: r�vid vagy hossz� a mag�nhangz�?', 3),
        '154' => array('Jelen idej� ragoz�s', 3),
        '239' => array('Sz�fordulat', 1),
        '213' => array('Jelen idej� ig�s mondatok', 2),
        '123' => array('T�hangv�lt�s ig�k', 3),
        '214' => array('T�hangv�lt�s ig�s mondatok', 2),
        '90' => array('Az ige helye a mondatban - egyenes, ford�tott �s KATI-sz�rend', 3),
        '215' => array('Sz�rend gyakorl�s - mondatok', 2),
        '88' => array('Kijelent� mondat', 3),
        '216' => array('Kijelent� mondatok', 2),
        '140' => array('Felsz�l�t� mondat', 3),
        '217' => array('Felsz�l�t� mondatok', 2),
        '102' => array('K�rd� mondat - eld�ntend� vagy kieg�sz�tend�', 3),
        '218' => array('K�rd� mondatok', 2),
        '111' => array('Elv�l� �s nem-elv�l� ig�k', 3),
        '219' => array('Elv�l� �s nem-elv�l� ig�s mondatok', 2),
        '165' => array('M�dbeli seg�dig�k', 3),
        '220' => array('M�dbeli seg�dig�s mondatok', 2),
        '129' => array('Visszahat� ig�k', 3),
        '221' => array('Visszahat� ig�s mondatok', 2),
        '116' => array('Vonzatos ig�k', 3),
        '222' => array('Vonzatos ig�s mondatok', 2),
        '240' => array('M�ltidej� mondatok', 2),
        '1'  => array('F�nevek', 1),
        '2'  => array('Mell�knevek', 1),
        '6'  => array('El�lj�r�szavak', 1),
        '11' => array('Sz�mok (alap)', 1),
        '9'  => array('Szem�lyes, birtokos �s k�rd� n�vm�sok', 1),
        '5'  => array('Ig�k', 1),
        '35' => array('Seg�dig�k', 1),
        '55' => array('Ig�k rendhagy� alakjai', 1),
        '39' => array('Kifejez�sek', 1),
        '46' => array('K�t�szavak, k�rd�n�vm�sok stb.', 1),
        '3'  => array('Hat�roz�sz�k', 1),
        '244' => array('M�lt id�', 3),
        '242' => array('M�lt id�', 2),
        '245' => array('Felt�teles M�d', 3),
        '243' => array('Felt�teles M�d', 2)
    );

    $list['francia'] = array(
        '0'  => array('Level 0', 1),
        '153' => array('Angol fonetikus �t�r�s, kiejt�s', 3),
        '74' => array('A f�nevek', 3),
        '60' => array('A n�vel�k', 3),
        '75' => array('A f�nevek megsz�ml�lhat�s�ga', 3),
        '76' => array('A f�nevek t�bbessz�ma', 3),
        '1'  => array('f�n�v', 1),
        '8'  => array('Mutat� n�vm�sok', 3),
        '13' => array('N�vel�/Mutat�sz�+f�n�v', 2),
        '77' => array('A mell�knevek', 3),
        '78' => array('A mell�knevek fokoz�sa', 3),
        '2'  => array('mell�kn�v', 1),
        '12' => array('F�n�v+Mell�kn�v', 2),
        '120' => array('El�lj�r�szavak', 3),
        '6'  => array('el�lj�r�sz�', 1),
        '88' => array('A l�tige sz�ks�gess�ge, az els� k�t alak', 3),
        '200' => array('L�tig�s kijelent�sek (f�n�v-mn�v)', 2),
        '201' => array('L�tig�s kijelent�sek (f�n�v-mn�v-hat)', 2),
        '91' => array('A l�tige tagad�sa', 3),
        '14' => array('L�tig�s tagad�sok', 2),
        '232' => array('Szem�lyek �s sz�mok', 3),
        '152' => array('Szem�lyes �s birtokos n�vm�sok', 3),
        '51' => array('Szem�lyes n�vm�sos-l�tig�s mondatok', 2),
        '92' => array('K�rd�sz�rend, az eld�ntend� k�rd�s', 3),
        '93' => array('K�rd�szavas k�rd�sek', 3),
        '50' => array('L�tig�s k�rd�sek (eld�ntend�', 2),
        '56' => array('L�tig�s k�rd�sek (k�rd�szavas)', 2),
        '209' => array('A l�tige ragoz�sa', 3),
        '94' => array('Helyhat�roz� szavak', 3),
        '126' => array('Birtokos szerkezetek', 3),
        '59' => array('Birtokos szerkezetek', 2),
        '127' => array('A "milyen" k�rd�sek', 3),
        '36' => array('Milyen-k�rd�sek', 2),
        '157' => array('Hat�roz�k sorrendje', 3),
        '38' => array(' L�tig�s mondatok (halad�bb)', 2),
        '97' => array('Sz�mok', 3),
        '11' => array('sz�m', 1),
        '98' => array('Az �ra, napszakok', 3),
        '188' => array('Az �ra, sz�mok', 2),
        '159' => array('Konkr�t dologr�l �ll�tjuk, hogy van?', 3),
        '187' => array('"There is"-es szerkezet', 3),
        '41' => array('"There is"-es kijelent�sek', 2),
        '54' => array('"There is"-es k�rd�sek', 2),
        '225' => array('"There is"-es tagad�sok', 2),
        '160' => array('L�tez�s vagy cselekv�s?', 3),
        '229' => array('Az "igeid�" fogalma', 3),
        '154' => array('Egyszer� jelen kijelent�s/felsz�l�t�s', 3),
        '5'  => array('ige', 1),
        '15' => array('Egyszer� jelen kijelent�s/felsz�l�t�s', 2),
        '156' => array('K�t ige �sszek�t�se', 3),
        '162' => array('Egyszer� jelen k�rd�s', 3),
        '17' => array('Egyszer� jelen k�rd�s', 2),
        '226' => array('K�rd�szavas szerkezetek', 3),
        '164' => array('Egyszer� jelen tagad�s', 3),
        '16' => array('Egyszer� jelen tagad�s', 2),
        '114' => array('Szem�lyes n�vm�s t�rgy, r�szes, visszahat�', 3),
        '230' => array('A h�rom "van"-os szerkezet', 3),
        '166' => array('Egyszer� m�lt', 3),
        '18' => array('Egyszer� m�lt: Kijelent�s', 2),
        '20' => array('Egyszer� m�lt: K�rd�s', 2),
        '19' => array('Egyszer� m�lt: Tagad�s', 2),
        '167' => array('Egyszer� j�v�', 3),
        '21' => array('Egyszer� j�v�: Kijelent�s', 2),
        '23' => array('Egyszer� j�v�: K�rd�s', 2),
        '22' => array('Egyszer� j�v�: Tagad�s', 2),
        '158' => array('Tell-say-talk-speak-discuss', 3),
        '163' => array('Alanyra k�rdez�s', 3),
        '193' => array('Alanyra k�rdez� mondatok', 2),
        '186' => array('"Mint"-es mondatok', 3),
        '70' => array('"Mint"-es mondatok', 2),
        '228' => array('"It + is + mell�kn�v + to + ige" szerkezet', 3),
        '165' => array('Seg�dig�k', 3),
        '37' => array('Seg�dig�s mondatok', 2),
        '185' => array('"Ami(t)"-es mell�kmondatok', 3),
        '69' => array('"Ami(t)"-es mondatok', 2),
        '177' => array('Folyamatos jelen', 3),
        '24' => array('Folyamatos jelen', 2),
        '178' => array('Befejezett jelen', 3),
        '27' => array('Befejezett jelen', 2),
        '227' => array('A seg�dig�k m�ltideje, az ige 3. alakja', 3),
        '189' => array('"There is" m�s igeid�kben', 3),
        '190' => array('"There is" m�s igeid�kben', 2),
        '182' => array('Befejezett M�lt', 3),
        '64' => array('Befejezett M�lt', 2),
        '205' => array('Sz�fordulat', 2),
        '146' => array('Szenved� szerkezet', 3),
        '30' => array('Szenved� szerkezet (egyszer�)', 2),
        '241' => array('Szenved� szerkezet (�sszetett)', 2),
        '138' => array('Folyamatos m�lt', 3),
        '139' => array('Folyamatos m�lt', 2),
        '180' => array('Folyamatos j�v�', 3),
        '181' => array('Folyamatos j�v�', 2),
        '143' => array('Felt�teles m�d', 3),
        '31' => array('Felt�teles m�d', 2),
        '194' => array('Befejezett folyamatos jelen', 3),
        '195' => array('Befejezett folyamatos jelen', 2),
        '179' => array('M�veltet�s', 3),
        '34' => array('M�veltet�s', 2),
        '110' => array('Mell�kn�vi �s f�n�vi igenevek', 3),
        '224' => array('Mell�kn�vi igeneves mondatok', 2),
        '183' => array('Befejezett folyamatos m�lt', 3),
        '125' => array('Befejezett folyamatos m�lt', 2),
        '184' => array('F�gg� besz�d', 3),
        '49' => array('F�gg� besz�d', 2),
        '207' => array('Befejezett j�v�', 3),
        '208' => array('Befejezett j�v�', 2),
        '238' => array('A mell�knevek sorrendje', 3),
        '246' => array('Sok kis apr�s�g', 3),
        '72' => array('Ige n�lk�li mondatok', 2),
        '46' => array('egy�b', 1),
        '3'  => array('hat�roz�sz�', 1),
        '39' => array('kifejez�s', 1)
    );

    $list['hun'] = array(
        '0'  => array('LEVEL 0', 1),
        '372' => array('Alfabeto', 3),
        '1'  => array('Sustantivos', 1),
        '10' => array('N�vel� + f�n�v', 1),
        '2'  => array('Mell�knevek', 1),
        '12' => array('N�vel� + f�n�v + Mell�kn�v', 1),
        '13' => array('N�vel�/Mutat�sz�+f�n�v', 1),
        '14' => array('Mutat�sz� + l�tige + n�vel� + f�n�v', 1),
        '9'  => array('N�vm�sok', 1),
        '5'  => array('Ig�k (sz�t�ri alak)', 1),
        '4'  => array('Ig�k (ragozott)', 1),
        '6'  => array('El�lj�r�szavak', 1),
        '11' => array('Sz�mok (alap)', 1),
        '7'  => array('Sz�mok', 1),
        '3'  => array('Hat�roz�sz�k, mutat�sz�k, egy�b', 1)
    );

    $langArray = getLangArray();
    if (array_key_exists($lang, $langArray)) {
        return $list[$langArray[$lang]];
    } else {
        return $list[$lang];
    }
}
