<?php
// Romanian language file for VirtualHosts form
// Translated by Ciprian Murariu <ciprianmp[at]yahoo[dot]com>
//3.1.1 - NotwwwDir
//3.1.3 - VirtualHostPortNone'
//3.1.4 - txtTLDdev
//3.1.9 - VirtualHostName modified - Accept diacritical characters (IDN)
$langues = array(
	'langue' => 'Română',
	'locale' => 'romanian',
	'addVirtual' => 'Adaugă un VirtualHost',
	'backHome' => 'Înapoi la homepage',
	'VirtualSubMenuOn' => '<code>Sub-meniul VirtualHost</code> trebuie setat la (Activat) în Meniul Click-dreapta <code>Setări Wamp</code>. Apoi reîncarcă această pagină',
	'UncommentInclude' => 'Anulează comentariul <small>(Elimină simbolul #)</small> liniei <code>#Include conf/extra/httpd-vhosts.conf</code><br />în fişierul %s',
	'FileNotExists' => 'Fişierul <code>%s</code> nu există',
	'txtTLDdev' => 'Numele Serverului %s foloseşte TLD %s care este exclusiv folosit de browserele web. Foloseşte un alt TLD (.test spre examplu)',
	'FileNotWritable' => 'Fişierul <code>%s</code> este nemodificabil',
	'DirNotExists' => '<code>%s</code> nu există sau nu este un director valid',
	'NotwwwDir' => 'Directorul <code>%s</code> este rezervat pentru "localhost". Vă rugăm să folosiţi un alt director.',
	'NotCleaned' => 'Fişierul <code>%s</code> nu a fost golit.<br />Rămân exemple de VirtualHost precum: dummy-host.example.com',
	'NoVirtualHost' => 'Niciun VirtualHost definit în <code>%s</code><br />Ar trebui să conţină măcar VirtualHost pentru localhost.',
	'NoFirst' => '<code>localhost</code> trebuie să fie primul VirtualHost definit în fişierul <code>%s</code>',
	'ServerNameInvalid' => 'Numele Serverului <code>%s</code> nu este valid.',
	'LocalIpInvalid' => 'IP-ul local <code>%s</code> nu este valid.',
	'VirtualHostName' => 'Numele <code>VirtualHost</code> Fără spaţii - Fără underscore(_) ',
	'VirtualHostFolder' => 'Completează <code>calea</code> absolută către <code>directorul</code> VirtualHost <i>Exemplu: C:/wamp/www/project/ sau E:/www/site1/</i> ',
	'VirtualHostIP' => '<code class="option">Dacă</code> vrei să foloseşti VirtualHost după IP: <code class="option">IP local</code> 127.x.y.z ',
	'VirtualHostPort' => '<code class="option">Dacă</code> vrei să foloseşti un alt "Port de Intrare" decât cel implicit <code class="option">Porturi acceptate</code> %s',
	'VirtualHostPortNone' => 'Dacă vrei să foloseşti alt "Port de Intrare" decât cel implicit, trebuie să adaugi un Port de Intrare pentru Apache folosind Meniul Click-Dreapta din bară ',
	'VirtualAlreadyExist' => 'Numele Serverului <code>%s</code> există deja',
	'VirtualIpAlreadyUsed' => 'IP-ul local <code>%s</code> există deja',
	'VirtualPortNotExist' => 'Portul <code>%s</code> nu este un "Port de Intrare" Apache',
	'VirtualPortExist' => 'Portul <code>%s</code> este "Portul de Intrare" implicit al Apache şi nu mai trebuie menţionat',
	'VirtualHostExists' => 'VirtualHost definit deja:',
	'Start' => 'Începe crearea VirtualHost (S-ar putea să dureze puţin...)',
	'GreenErrors' => 'Erorile încercuite cu culoarea verde pot fi corectate în mod automat',
	'Correct' => 'Începe corectarea automată a erorilor încercuite cu culoarea verde',
	'NoModify' => 'Imposibil de modificat <code>httpd-vhosts.conf</code> sau fişierele <code>hosts</code>',
	'VirtualCreated' => 'Fişierele au fost modificate. VirtualHost <code>%s</code> a fost creat',
	'CommandMessage' => 'Mesajele de la consolă pentru actualizarea DNS:',
	'However' => 'Poţi adăuga un nou VirtualHost folosind "Adaugă un VirtualHost".<br />Oricum, pentru ca noul VirtualHost să fie luat în considerare de Serverul Apache, trebuie să apeşi pe<br /><code>Reporneşte DNS</code><br />din Meniul Click-dreapta pe icon-ul Wampmanager din bară. <i>(Din păcate, acest lucru nu se poate face în mod automat)</i>',
	'suppForm' => 'Goleşte formularul VirtualHost',
	'suppVhost' => 'Elimină VirtualHost',
	'Required' => 'Obligatoriu',
	'Optional' => 'Opţional',
	);
?>