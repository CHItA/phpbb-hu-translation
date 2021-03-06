<?php
/**
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* Magyar fordítás (c) 2007-2016 „Magyar phpBB Közösség fordítók”,
* http://phpbb.hu
*
* $Id$
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Bevezető'
	),
	array(
		0 => 'Mi az a BBCode?',
		1 => 'A BBCode a HTML nyelv egy speciális változata. A BBCode használatának engedélyezése az adminisztrátortól függ, de önnek is lehetősége van ki- vagy bekapcsolni a hozzászólásainál. A BBCode hasonló felépítésű, mint a HTML, kivéve hogy a címkék nem kacsacsőrök között („&lt;” , ill. „&gt;”), hanem szögletes zárójelben („[”, ill. „]”) vannak; és nagyobb teret enged a szöveg megformázásához. Hozzászólás küldésekor az üzenet mező fölött található BBCode panel nagyban megkönnyítheti a BBCode-ok használatát. Ezzel együtt az alábbi útmutatót valószínűleg hasznosnak fogja találni.'
	),
	array(
		0 => '--',
		1 => 'Szövegformázás'
	),
	array(
		0 => 'Félkövér, dőlt, illetve aláhúzott szöveg készítése',
		1 => 'A BBCode címkék segítségével könnyedén megváltoztathatja egy szöveg kinézetét. Ezt a következőképpen érheti el: <ul><li>Egy szövegrészlet félkövérré tételéhez zárja körül <strong>[b][/b]</strong> címkékkel. Például:<br /><br /><strong>[b]</strong>Üdvözlet!<strong>[/b]</strong> <br /><br />eredménye: <strong>Üdvözlet!</strong></li><li>Aláhúzáshoz használja az <strong>[u][/u]</strong> címkét. Például:<br /><br /><strong>[u]</strong>Jó reggelt!<strong>[/u]</strong><br /><br />így fog megjelenni: <span style="text-decoration: underline">Jó reggelt!</span></li><li>Egy szöveg dőlt betűssé tételéhez használja az <strong>[i][/i]</strong> címkét. Például:<br /><br /><strong>[i]</strong>Ez nagyszerű!<strong>[/i]</strong><br /><br />ezt eredményezi: <i>Ez nagyszerű!</i></li></ul>'
	),
	array(
		0 => 'Szöveg színének vagy méretének megváltoztatása',
		1 => 'Egy szövegrészlet színének vagy méretének megváltoztatásához a következő címkék használhatók. Vegye figyelembe, hogy a szöveg pontos megjelenése a látogató böngészőjétől és rendszerétől is függeni fog (például túl kis betűmérettel írt szöveg nem látszódhat).<ul><li>Egy szövegrészlet színét a <strong>[color=][/color]</strong> címkék használatával változtathatja meg. A színt megadhatja az angol nevével (pl. „red”, „blue”, „yellow”) vagy a hexadecimális kódjával, például: #FFFFFF, #000000. Piros szöveget például így tud készíteni: <br /><br /><strong>[color=red]</strong>Üdvözlet!<strong>[/color]</strong><br /><br />és<br /><br /><strong>[color=#FF0000]</strong>Üdvözlet!<strong>[/color]</strong><br /><br />eredménye is ez lesz: <span style="color:red">Helló!</span></li><li>A betűméretet is hasonlóan lehet megváltoztatni: a <strong>[size=][/size]</strong> címke segítségével. A szöveg méretét százalékban kell megadni: ez egy 20 és 200 közötti szám lehet, de az aktuális méret a megjelenéstől függ. Például <br /><br /><strong>[size=30]</strong>KICSI<strong>[/size]</strong><br /><br />általánosan <span style="font-size:30%;">KICSI</span> lesz,<br /><br />ehhez hasonlóan:<br /><br /><strong>[size=200]</strong>ÓRIÁSI!<strong>[/size]</strong><br /><br /><span style="font-size:200%;">ÓRIÁSI!</span> lesz.</li></ul>'
	),
	array(
		0 => 'Lehet egyszerre többféle formázást használni?',
		1 => 'Igen, természetesen lehet kombinálni a címkéket. Például, ha fel akarja hívni valakinek a figyelmét:<br /><br /><strong>[size=200][color=red][b]</strong>OLVASSA EL!<strong>[/b][/color][/size]</strong><br /><br />ezt eredményezi: <span style="color:red;font-size:200%;"><strong>OLVASSA EL!</strong></span><br /><br />Ennek ellenére nem ajánlott, hogy egyszerre sok formázási eszközt használjon, mivel ennek következtében a szöveg nehezen lesz olvasható. Kérjük, ügyeljen a címkék lezárásának sorrendjére. A következő példa hibás:<br /><br /><strong>[b][u]</strong>Ez így hibás!<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Idézés és kódok'
	),
	array(
		0 => 'Idézés',
		1 => 'Két módon lehet idézni: megadva az idézet forrását, vagy nem.<ul><li>Ha egy hozzászólás mellett lévő „Idézés” gombra kattintva válaszol, akkor a hozzászólás szövege automatikusan hozzáadódik az üzenethez <strong>[quote=""][/quote]</strong> címkékbe zárva. Ezen módot használva megjelölheti az idézés forrását: egy felhasználót, egy webcímet vagy bármi mást. Ha például Kovács úrtól szeretne idézni, a következőt írja:<br /><br /><strong>[quote="Kovács úr"]</strong>Ide jön a Kovács úr által írt szöveg.<strong>[/quote]</strong><br /><br />A beírt szöveg elé automatikusan odakerül, hogy „Kovács úr írta”. Ne felejtse el, hogy <strong>kötelező</strong> idézőjelbe tenni a forrás megnevezését, ez nem tetszőleges.</li><li>A másik móddal csak simán idézni lehet egy szöveget, a forrás megadása nélkül. Ehhez foglalja be a szöveget <strong>[quote][/quote]</strong> címkékbe. Az üzenet megtekintésénél láthatja, hogy csak egy sima „Idézet” felirat került a szöveg elé.</li></ul>'
	),
	array(
		0 => 'Kódok és fix szélességet igénylő szövegek',
		1 => 'Ha egy kódrészletet vagy bármilyen fix szélességet igénylő szöveget szeretne beilleszteni (például Courier betűtípussal), zárja körül a szöveget <strong>[code][/code]</strong> címkékkel. Például:<br /><br /><strong>[code]</strong>echo &quot;Ez valami kód.&quot;;<strong>[/code]</strong><br /><br /><strong>[code][/code]</strong> címkén belül nem használható más formázás, mivel ezeken belül szereplő más címkék nem kerülnek értelmezésre. Ha PHP kódot illeszt be, használja a <strong>[code=php][/code]</strong> címkét a szintaxiskiemeléshez, hogy a kód könnyebben olvasható legyen.'
	),
	array(
		0 => '--',
		1 => 'Listák készítése'
	),
	array(
		0 => 'Rendezetlen lista készítése',
		1 => 'A BBCode két fajta listatípust támogat: rendezetlent és rendezettet. Lényegében ugyanazok, mint a HTML megfelelőjük. A rendezetlen listában az elemek sorrendben követik egymást, és mindegyik előtt egy pötty jelenik meg. Rendezetlen lista készítéséhez a <strong>[list][/list]</strong> címke használható, és minden elemet egy <strong>[*]</strong> címkével kell definiálni. Például így tudja felsorolni a kedvenc színeit:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>piros<br /><strong>[*]</strong>kék<br /><strong>[*]</strong>sárga<br /><strong>[/list]</strong><br /><br />mely a következőképpen néz ki:<ul><li>piros</li><li>kék</li><li>sárga</li></ul>A felsorolásjelek stílusát a következőképpen tudja megváltoztatni: <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong> vagy <strong>[list=square][/list]</strong>.' //bb31'
	),
	array(
		0 => 'Rendezett lista készítése',
		1 => 'A második típusú listánál, a rendezett listánál már azt is meghatározhatja, hogy mi kerüljön minden elem elé. Rendezett lista készítéséhez a <strong>[list=1][/list]</strong> címke használható – ez számozott lesz, de más paraméter megadásával betűkkel jelölt listát is készíthet (<strong>[list=a][/list]</strong>). A rendezetlen listához hasonlóan, az egyes elemeket itt is a <strong>[*]</strong> címke használatával kell definiálni. Például:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>elmenni a boltba<br /><strong>[*]</strong>új számítógépet vásárolni<br /><strong>[*]</strong>rácsapni a gépre, ha lefagy<br /><strong>[/list]</strong><br /><br />eredménye a következő:<ol style="list-style-type: decimal;"><li>elmenni a boltba</li><li>új számítógépet vásárolni</li><li>rácsapni a gépre, ha lefagy</li></ol>Így néz ki egy betűkkel jelölt lista:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>az első lehetséges válasz<br /><strong>[*]</strong>a második lehetséges válasz<br /><strong>[*]</strong>a harmadik lehetséges válasz<br /><strong>[/list]</strong><br /><br />megjelenítve:<ol style="list-style-type: lower-alpha"><li>az első lehetséges válasz</li><li>a második lehetséges válasz</li><li>a harmadik lehetséges válasz</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>az első lehetséges válasz<br /><strong>[*]</strong>a második lehetséges válasz<br /><strong>[*]</strong>a harmadik lehetséges válasz<br /><strong>[/list]</strong><br /><br />megjelenítve:<ol style="list-style-type: upper-alpha"><li>az első lehetséges válasz</li><li>a második lehetséges válasz</li><li>a harmadik lehetséges válasz</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>az első lehetséges válasz<br /><strong>[*]</strong>a második lehetséges válasz<br /><strong>[*]</strong>a harmadik lehetséges válasz<br /><strong>[/list]</strong><br /><br />megjelenítve:<ol style="list-style-type: lower-roman"><li>az első lehetséges válasz</li><li>a második lehetséges válasz</li><li>a harmadik lehetséges válasz</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>az első lehetséges válasz<br /><strong>[*]</strong>a második lehetséges válasz<br /><strong>[*]</strong>a harmadik lehetséges válasz<br /><strong>[/list]</strong><br /><br />megjelenítve:<ol style="list-style-type: upper-roman"><li>az első lehetséges válasz</li><li>a második lehetséges válasz</li><li>a harmadik lehetséges válasz</li></ol>' //bb31
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Hivatkozások készítése'
	),
	array(
		0 => 'Hivatkozás egy másik weboldalra',
		1 => 'A phpBB BBCode-ja több módot is biztosít hivatkozások készítésére. A hivatkozások egy URL-re („Universe Resource Locator” azaz webcímre) mutatnak.<ul><li>Az első mód az <strong>[url=][/url]</strong> címkék használata. Az URL-t az első címkében, az egyenlőségjel és a záró szögletes zárójel között kell megadni. Például a phpBB.com-ra így tud linkelni:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Látogassa meg a phpBB weboldalát!<strong>[/url]</strong><br /><br />a következő linket eredményezi: <a href="https://www.phpbb.com/">Látogassa meg a phpBB weboldalát!</a> A link a böngésző felhasználói beállításaitól függően nyílik meg ugyanabban vagy egy új ablakban.</li><li>Ha magát az URL-t szeretné, hogy megjelenjen linkként, használja a következő, nagyon egyszerű formát:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Ez a következő linket eredményezi: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Mindemellett a phpBB rendelkezik egy olyan funkcióval is, mely automatikusan átalakítja a szintatikailag helyes URL-eket hivatkozásokká, anélkül hogy bármilyen BBCode-ot használna, vagy egyáltalán odaírná az URL elejére a kezdő http:// részt. Ha például az üzenete tartalmazza, hogy www.phpbb.com, az <a href="http://www.phpbb.com/">www.phpbb.com</a>-ként fog megjelenni.</li><li>Ehhez hasonlóan történik az e-mail címek kezelése is; konkrétan megadhat egy címet, például:<br /><br /><strong>[email]</strong>nem.letezo@email.cim<strong>[/email]</strong><br /><br />mely <a href="mailto:nem.letezo@email.cim">nem.letezo@email.cim</a>-ként fog megjelenni, vagy csak egyszerűen beírhatja az üzenetébe a nem.letezo@email.cim e-mail címet, és az automatikusan átkonvertálásra kerül.</li></ul>Hasonlóan a többi BBCode címkéhez, linkekkel is körülvehet más címkéket, például <strong>[img][/img]</strong> címkét (lásd a következő pontnál), <strong>[b][/b]</strong>-t stb. Mint a formázó címkéknél, itt is ügyelni kell a címkék lezárásának helyes sorrendjére, például:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />ez <span style="text-decoration: underline">hibás</span>, amiért akár törölhetik a hozzászólását.'
	),
	array(
		0 => '--',
		1 => 'Képek a hozzászólásokban'
	),
	array(
		0 => 'Kép beszúrása hozzászólásba',
		1 => 'A phpBB BBCode-ja lehetőséget nyújt képek beszúrására hozzászólásokba. Ezzel kapcsolatban két fontos dolgot nem szabad elfelejteni: számos felhasználó nem szereti, ha egy hozzászólás túl sok képet tartalmaz, illetve ügyelni kell arra, hogy a beszúrandó kép elérhető legyen az interneten (nem elég ha az ön számítógépén van, hacsak nem fut egy webszerver a gépen!). Képet úgy lehet beszúrni, hogy a rá mutató URL-t <strong>[img][/img]</strong> címkékkel veszi körül. Például:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Mint ahogy az a hivatkozások készítése részben szerepel, egy képet belefoglalhat egy <strong>[url][/url]</strong> címkébe is, például:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />ezt eredményezi:<br /><br /><a href="https://www.phpbb.com/" target="_blank"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>'
	),
	array(
		0 => 'Csatolmányok fűzése hozzászólásokhoz',
		1 => 'Az új <strong>[attachment=][/attachment]</strong> BBCode segítségével a csatolmányok már a hozzászólás bármely részébe beilleszthetők, ha az adminisztrátor bekapcsolta a csatolmányok funkciót, és megadta önnek a szükséges jogosultságokat csatolmányok feltöltéséhez. A hozzászólásküldő űrlapon egy lenyíló menü segít a csatolmányok hozzászólásba való beillesztésében.'
	),
	array(
		0 => '--',
		1 => 'Egyéb kérdések'
	),
	array(
		0 => 'Készíthetek saját címkéket?',
		1 => 'Ha ön adminisztrátor a fórumon, és megvan a megfelelő jogosultsága, az adminisztrátori vezérlőpult „Egyéni BBCode”-ok részén tud felvenni saját BBCode-okat.'
	)
);
