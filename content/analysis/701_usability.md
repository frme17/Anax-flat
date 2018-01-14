#Användbarhet#

Användbarhet (usability) definieras av 5 olika kvalitetskomponenter:

1. Inlärning. Hur enkelt lär man sig att använda webbsidan vid första besöket?
2. Effektivitet. Hur snabbt kan man utföra uppgifter på sidan när man känner till den?
3. Igenkänning (Memorability). Hur snabbt kan man åter bli effektiv på en sida man tidigare jobbbat med, men inte använt på ett tag?
4. Fel. Vilka vanliga fel gör användarna. Hur allvarliga är dessa fel och hur lätt går man vidare efter ett fel?
5. Nöjdhet: Hur trevlig och tilltalande är designen på sidan?

Det finns också ett begrepp "utility" som kan översättas med "funktionalitet". Det beskriver vilka funktioner som sidan erbjuder.
Om en sida har lite funktionalitet men är lättanvänd, eller vice-versa, så är den ändå inte användbar.

I min analys nedan har jag endast fokuserat på användbarhet och inte funktionalitet.
Jag har valt fyra webbplatser som jag använder då och då. För varje webbsida har jag formulerat en specifik uppgift som användaren ska lösa.
Jag har satt betyg 1-5 för respektive kvalitetskomponent och givit ett snittbetyg för varje sida.
Slutresultat om bästa och sämsta sida redovisas längst ner.

De fyra webbplatser jag valt är:

* SL.se/minasidor - Uppgift: Byt namn på accesskort.
* SF.se - Uppgift: Ta reda på vilka filmer som visas på en specifik biograf två dagar från idag.
* AFFF.se (medlemssida för Adolf Fredriks Föräldraförening) - Uppgift: Ändra bild på användarprofil.
* Shore.com (bokningssystem) - Uppgift: Boka behandling hos sjukgymnast.

##Storstockholms Lokaltrafik##

Uppdrag: Byta namn på ett accesskort.

![SL](img/sl2.png)

[sl.se/mitt-sl](https://sl.se/sv/mitt-sl/inloggning/)

Inloggningssidan kan vara förvirrande. Jag har bank-id, men har valt att logga in med användarprofil och lösenord. Det alternativet finns inte. Istället ska jag trycka "Jag har inget BankID".

Felaktig användare och lösenord ger en progressbar som snurrar i evighet. Jag trycker refresh och får ett nytt försök.
Fyller åter i fel användare och lösord. Nu fungerar valideringen.
"Felaktigt användarnamn eller lösenord (2 av 3 inloggningsförsök återstår)."

Loggar in mig med rätt användare och lösenord.

![SL](img/sl3.png)

Att byta namn på kort är tydligt och ganska enkelt. Man väljer ett kort och expanderar Ändra namn. När man nu ser kortets namn kan man missledas att tro att det gråa fältet är ändringsbart.
Det är det inte. Istället ska man trycka igen, på den lila knappen. Då blir bakgrunden på kortets namn vit, men fältet blir inte i fokus och markören hamnar inte där.
Ändrar texten och trycker på Spara. Får en progressbar som håller på i evighet.
Måste logga in igen och göra ett nytt försök att byta namn. Nu fungerar det.

Provar även validering av SQL-injection. Får detta meddelande:
![SL](img/sl4.png)

Av de fem kriterierna för användbarhet anser jag följande:

* Inlärning - 4. Det är relativt lätt att lära sig hur man gör. Det enda jag upplevde som förvirrande var inloggningstexten
* Effektivitet - 4. Det är enkla uppgifter man gör. Det blir effektivt redan från början.
* Igenkänning - 4. Bilderna över accesskorten och att man kan namnge dem gör att man förstår vad man ska göra även när man inte använt sidan på länge.
* Fel - 3. Det går att missförstå vad man ska göra. Inloggning. Varför inte skriva "logga in med användarprofil" istället för nuvarande. Om man expanderar "byta namn" så borde namnet kunna gå att ändra utan att behöva klicka en gång till.
* Nöjdhet - 4. Sidan är enkel och avskalad från onödig information. Det gör att man snabbt kan ägna sig åt det man vill utföra

De har dock problem med buggar. Sidan hängde sig två gånger under mina tester. Den har även gjort det vid andra tillfällen. Hade den här analysen gällt funktionalitet så hade betyget varit betydligt lägre.

**Snittbetyg: 3,8**

##SF##

Uppdrag: Ta fram information om vilka filmer som visas på Filmstaden Söder om två dagar.

![SF](img/sf1.png)

[SF.se](https://www.sf.se/)

Det första som möter användaren är reklam för en kommande film. Reklamen fyller i princip hela fönstret.
Det finns information längre ner, men som användare tänker man inte på att bläddra neråt, utan letar istället i menyerna.
Menyvalen ger ingen fingervisning om vad man ska trycka på för att få fram den information jag vill ha.
Jag letar efter knapp för biografer, men hittar ingenting och provar då hamburgermenyn. Den ger ingen ytterligare hjälp.

Jag trycker då på Förstoringsglaset, sök, och söker på "filmstaden söder"

![SF](img/sf2.png)

Klickar på Filmstaden söder, och nu får jag en sida där jag kan välja datum m.m., men valen ligger under fold vilket gör att jag måste skrolla ner för att få informationen.

![SF](img/sf3.png)
![SF](img/sf4.png)

Det visade sig sen, när jag undersökt startsidan, att även där, under fold fanns sökmöjlighet direkt på datum, biograf och tid.
När man väl lärt sig det, så går man direkt under fold och söker det man vill ha.

Betyg på användbarhet:

* Inlärning - 2. Det är svårt att hitta det man söker på sidan. Det blir mycket "trial and error" innan man hittar det man vill.
* Effektivitet - 3. När man väl vet var informationen finns, så kan man jobba relativt effektivt. Men många liksom jag bokar inte biobesök så ofta.
* Igenkänning - 2. Jag anser att sidan är såpass rörig att man måste lära om nästa gång om det gått ett tag sedan man var inne på sidan.
* Fel - 2. De vanligaste felen tror jag är att man inte hittar det man söker efter, mycket för att den informationen ligger under fold.
* Nöjdhet - 2. Sidan är rörig med mycket reklam för andra filmer. Det är svårt att hitta det man söker efter.

**Snittbetyg: 2,2**

##Adolf Fredriks Föräldraförening##

Uppdrag: Ändra bild på användarprofil.

![AFFF](img/afff1.png)

[AFFF.se](https://www.afff.se)

Det här är en webbsida som vänder sig till föräldrar med barn i Adolf Fredriks skola.
Det är inte en sida man dagligen går in på. Vanligtvis lägger man upp sin profil och vilken grupp (klass) man tillhör.
Därefter skickar lärare ut information med gruppen som sändlista. Informationen hamnar i föräldrarnas privata e-post.

Redan förstasidan är svår. Var loggar man in? Under AFFF-BOOK förstås!
Sen då? Jag misstänker AFFF-BOOK, men vilken undermeny? Provar Min aktivitet.
![AFFF](img/afff2.png)

Sen är det rätt så enkelt. Profil Byt profilbild.
![AFFF](img/afff3.png)

Jag passar på att göra lite andra ändringar när jag ändå är inne. Inser då att underhållsbilden för profiländringar är lätt att missförstå.
När man ändrat ett värde ska man inte trycka på knappen Ändra. Den används bara för att välja vilka som får se ändringen. (alla, bara jag, medlemmar, vänner).
Nej istället ska man trycka på en spara-knapp som finns längst ner på sidan (lång under fold).
Knappen ser mera ut som ett inmatningsfält än en knapp. Inte bra.

![AFFF](img/afff4.png)

Betyg på användbarhet:

* Inlärning - 2. Det är svårt att hitta det man söker eftersom begreppen är underliga. "AFFF-BOOK", vad är det?. Min aktivitet?
* Effektivitet - 2. Även om man är inne ofta på sidorna känns de trögjobbade. Knappar och menyer är inte logiska.
* Igenkänning - 2. Det är svårt att veta vad man ska göra efter att inte ha besökt sidan på ett tag. Mycket pga de underliga rubrikerna.
* Fel - 2. De vanligaste felen tror jag är att man inte förstår rubrikerna och inte hittar den anonyma spara knappen som ligger längst ner på sidan.
* Nöjdhet - 2. Sidorna ger ett ostrukturerat intryck. Man vill helst inte vara inne på sidorna mer än nödvändigt.

**Snittbetyg: 2,0**

##Shore bokningssystem##

Uppdrag: Boka behandling hos sjukgymnast.

[Shore.com](https://connect.shore.com/widget/fysiocare?locale=sv)

Shore.com, som är utvecklat i tyskland, är ett bokningsssytem som körs som webbtjänst. Det lilla företaget, tex en frisersalong eller som i det här fallet en sjukgymnast, behöver inte själv skapa och driva en webbsida. Med lite enkla modifieringar fungerar sidan till alla företag. Eller gör den det?...

![Shore](img/shore1.png)

Bokningssidan är till att börja med väldigt ful. Högst upp står det redan innan man bokar, Tack för din bokning!
På raden välj tjänst kan man tro att man ska tryckar på ikonen till vänster, för den ser ut som en hamburgermeny.
När man sedan förstår hur man går vidare kommer man till bokningsdelen.

![Shore](img/shore2.png)

Man får upp en löpande kalender som visar 7 dagar framåt samt de sex närmaste lediga tiderna. Datumangivelsen är inte svensk utan tysk och kan förvirra.
Om man vill se de lediga tiderna i kalenderform måste man bläddra sig fram till rätt vecka, men inte ens då visas veckan med start på måndag, utan på den veckodag man råkar befinna sig på just nu.

![Shore](img/shore3.png)

Kunduppgifter måste fyllas i vid varje bokning. Man kan inte ange kundnummer eller logga in om man är återkommande kund. Det här är egentligen mer funktionalitet än användbarhet, men lite störande.

Validering att alla obligatoriska fält är ifyllda sker.
![Shore](img/shore4.png)

Det finns en asterisk efter Titel. Troligen för att det är ett obligatoriskt fält. Men de andra obligatoriska fälten har ingen asterisk.
Dessutom brukar man inte ange titel i Sverige. Det är däremot brukligt i Tyskland.

Vad är det för villkor som man accepterar? De finns inte angivna någonstans.
Om man vill ha mer information kanske man försöker trycka på "i"-ikonen. Det kan man glömma, för det är bara en bild.

På bekräftelsesidan kan man boka av, men endast där. Om man råkar stänga den sidan kan man inte avboka sin bokning förrän man får ett bekräftelsemejl från utföraren.
Ändring av bokning går inte. Man måste boka av och boka nytt.
Jag vet att ovanstående bara är funktionalitet, men ändå.

![Shore](img/shore5.png)

På bekräftelsesidan finns även tre världskartor. Varför?

Betyg på användbarhet:

* Inlärning - 3. Det är egentligen inte så svårt att göra det man ska, men kalenderdelen är förvirrande med underlig veckoindelning och datumformat.
* Effektivitet - 3. Är man inne och bokar ofta, så är det busenkelt, men lite omständigt att behöva fylla i alla uppgifter varje gång.
* Igenkänning - 3. Även om man inte bokat på ett bra tag, kan man relativt fort boka en tid.
* Fel - 2. Det vanligaste felet är hur man hanterar kalendern. Det verkar som att det endast finns sex lediga tider, när den visar de som är närmast i tiden.
* Nöjdhet - 1. Sidorna är fula och ger ett oproffesionellt intryck. Jag skulle leta efter ett annat bokningssystem om jag var näringsidkare.

**Snittbetyg: 2,4**

##Sammanfattning##

Jag har rangordnat sidorna efter bäst användbarhet och kommit fram till följande

1. SL (3,8). Lätt att förstå vad man ska göra. Tydlig layout. Dock problem med att den hänger sig då och då.
2. Shore (2,4). En riktigt ful sida, men relativt lätt att förstå. Kalenderdelen drar ner betyget.
3. SF (2,2). Svårt att hitta bland all information. Det borde gå att göra lättare navigering och urval ovanför "fold".
4. AFFF (2,0). En webbplats man besöker sällan ska vara tydlig och lätt att hitta i. Det är inte den här.

<hr>
Jag har inte gjort den här analysen i grupparbete, utan helt på egen hand.
