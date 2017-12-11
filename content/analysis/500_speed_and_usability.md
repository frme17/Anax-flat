#Laddningstider#

Jag valde tre webbplatser med olika innehåll:

* Dagens Nyheter: Mycket text och ganska stora bilder.
* CDON.com: Många små bilder och inte så mycket text.
* PostNord: Betydligt mindre bild- och textinnehåll än de ovan.

På alla sidor har jag även klickat på länkar till två undersidor för att se hur dessa laddas.

Jag använde webbläsaren Google Chrome till alla mina tester. Jag är ansluten med kabel till min router och sedan med en fiberkabel till internet, så min privata anslutning ska inte påverka laddhastigheterna.
Som mätinstrument använde jag den inbyggda Nätverksanalysen i Google Chrome samt Google PageSpeed.

Underlaget till analysen finns i detta
[kalkylark med rådata](https://docs.google.com/spreadsheets/d/1xmllxOvsV5HjtjMua-LiwxF32D1VjLhzugzvpU_yjZQ/edit?usp=sharing).

##Dagens Nyheter##

![Dagens Nyheter](img/dn.png)

Dagens nyheter som webbplats har stora utmaningar. Man vill ha mycket bilder och text, men ändå en snabb laddningstid. Om det tar för lång tid att ladda sidorna så kommer läsaren att tröttna och välja en annan nyhetsförmedling. T.ex Aftonbladet eller Expressen.

Jag har valt att analyser dessa sidor:

* [DN startsida](https://www.dn.se)
* [DN privatekonomi](https://www.dn.se/ekonomi/din-ekonomi/)
* [DN TV](https://www.dn.se/dntv/)

Jag ville få med förstasidan, eftersom den innehåller många artiklar och många bilder. Jag kunde inte välja en separat artikel, eftersom de kanske inte ligger kvar då Du besöker min analyssida, utan valde istället privatekonomisidan. Jag tänkte att den borde inte vara lika bildtung som startsidan. Sidan för DN.TV valde jag för att den skiljer sig från andra sidor med artiklar.

###Resultat av mätningen###
<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<th style="height: auto; width: auto"></th>
<th style="height: auto; width: auto">Betyg Mobil</th>
<th style="height: auto; width: auto">Betyg Desktop</th>
<th style="height: auto; width: auto">Resurser</th>
<th style="height: auto; width: auto">storlek</th>
<th style="height: auto; width: auto">laddtid</th>
<tr>
<td style="height: auto; width: auto">DN startsida</td>
<td style="height: auto; width: auto; background-color: red">54</td>
<td style="height: auto; width: auto; background-color: red">63</td>
<td style="height: auto; width: auto">555</td>
<td style="height: auto; width: auto">6,8 MB</td>
<td style="height: auto; width: auto">3,75 sek</td>
</tr>
<td style="height: auto; width: auto">DN ekonomi</td>
<td style="height: auto; width: auto; background-color: red">52</td>
<td style="height: auto; width: auto; background-color: orange">75</td>
<td style="height: auto; width: auto">252</td>
<td style="height: auto; width: auto">2,6 MB</td>
<td style="height: auto; width: auto">1,54 sek</td>
</tr>
<td style="height: auto; width: auto">DN TV</td>
<td style="height: auto; width: auto; background-color: red">53</td>
<td style="height: auto; width: auto; background-color: red">63</td>
<td style="height: auto; width: auto">265</td>
<td style="height: auto; width: auto">3,6 MB</td>
<td style="height: auto; width: auto">2,27 sek</td>
</tr>
</table>

DN har väldigt dynamiska webbsidor med mycket reklam. Man får olika svarstider och mängd data som laddas vid varje mätning.
Jag tror att mycket beror på reklaminnehållet.
För att få en snabbare svarstid föreslår PageSpeed i första hand att man ska ta bort Javascript- och CSS kod som blockerar renderingen från innehåll ovanför mitten. Som andra punkt att åtgärda föreslås att man ska optimera bilderna.  
Personligen skulle jag nog rekommendera DN att begränsa mängden reklam, eller åtminstone storleken på reklamen.
<hr>

##CDON.COM##

![CDON.COM](img/cdon.png)

CDON.COM tampas med samma problem som Dagens Nyheter. Går det för långsamt att ladda sidorna så väljer kunderna istället en annan handelsplats.
På CDON finns inte lika mycket text, men mycket bilder. Bilderna är dock relativt små i översiktssidorna.

Jag har valt att analyser dessa sidor:

* [CDON.COM startsida](http://cdon.se)
* [Topplistan Filmer](http://cdon.se/film/topplistan/)
* [Jobba på CDON.COM](http://cdon.se/kundservice/jobba_p%C3%A5_cdon.com/)

Även här vile jag få med förstasidan i min analys, eftersom den är det första som man som användare kommer i kontakt med. De övriga två sidorna valde jag lite mer slumpartat. Topplistan visar ett urval av produkter och "Jobba på CDON" visar en mer artikelliknande sida med lite information och bilder.

###Resultat av mätningen###
<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<th style="height: auto; width: auto"></th>
<th style="height: auto; width: auto">Betyg Mobil</th>
<th style="height: auto; width: auto">Betyg Desktop</th>
<th style="height: auto; width: auto">Resurser</th>
<th style="height: auto; width: auto">storlek</th>
<th style="height: auto; width: auto">laddtid</th>
<tr>
<td style="height: auto; width: auto">CDON startsida</td>
<td style="height: auto; width: auto; background-color: red">60</td>
<td style="height: auto; width: auto; background-color: red">64</td>
<td style="height: auto; width: auto">193</td>
<td style="height: auto; width: auto">2,4 MB</td>
<td style="height: auto; width: auto">1,34 sek</td>
</tr>
<td style="height: auto; width: auto">Topplista Filmer</td>
<td style="height: auto; width: auto; background-color: red">58</td>
<td style="height: auto; width: auto; background-color: red">62</td>
<td style="height: auto; width: auto">195</td>
<td style="height: auto; width: auto">2,4 MB</td>
<td style="height: auto; width: auto">2,67 sek</td>
</tr>
<td style="height: auto; width: auto">Jobba på CDON</td>
<td style="height: auto; width: auto; background-color: red">64</td>
<td style="height: auto; width: auto; background-color: orange">69</td>
<td style="height: auto; width: auto">123</td>
<td style="height: auto; width: auto">2,1 MB</td>
<td style="height: auto; width: auto">1,22 sek</td>
</tr>
</table>

CDON har mycket bilder på sina sidor. Det primärt det som kan optimeras. PageSpeed föreslår i första hand att man optimerar bilder, och i andra hand att ta bort Javascript- och CSS kod som blockerar renderingen från innehåll ovanför mitten.
De söker systemutvecklare och front-end utvecklare, så då vet de vad de kan börja med: komprimera bilderna.

<hr>

##PostNord##

![PostNord](img/postnord.png)

PostNord med sitt monopol har inte samma behov som DN och CDON att ha snabba svarstider. Användaren kan inte välja att gå till en konkurrerande sida.
Påverkar det utformandet av sidan avseende laddhastighet och storlek?

Jag har valt att analyser dessa sidor:

* [Postnord startsida](https://www.postnord.se/)
* [Tjänsten "skicka direkt"](https://portal.postnord.com/skickadirekt/)
* [Tider för Julpost](https://www.postnord.se/jul-och-nyar-2017)

Startsidan är relativt enkel i sin utformning, men är den snabb?
Skicka Direkt tjänsten ser också enkel ut, men verkar ladda mycket?
Sidan med tider för julpost är utformad som en artikel. Hur fungerar artiklar på PostNord?

###Resultat av mätningen###
<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<th style="height: auto; width: auto"></th>
<th style="height: auto; width: auto">Betyg Mobil</th>
<th style="height: auto; width: auto">Betyg Desktop</th>
<th style="height: auto; width: auto">Resurser</th>
<th style="height: auto; width: auto">storlek</th>
<th style="height: auto; width: auto">laddtid</th>
<tr>
<td style="height: auto; width: auto">PostNord startsida</td>
<td style="height: auto; width: auto; background-color: red">57</td>
<td style="height: auto; width: auto; background-color: orange">66</td>
<td style="height: auto; width: auto">43</td>
<td style="height: auto; width: auto">0,8 MB</td>
<td style="height: auto; width: auto">1,41 sek</td>
</tr>
<td style="height: auto; width: auto">Skicka direkt</td>
<td style="height: auto; width: auto; background-color: red">51</td>
<td style="height: auto; width: auto; background-color: orange">70</td>
<td style="height: auto; width: auto">300</td>
<td style="height: auto; width: auto">2,3 MB</td>
<td style="height: auto; width: auto">2,81 sek</td>
</tr>
<td style="height: auto; width: auto">Jul- och Nyår</td>
<td style="height: auto; width: auto; background-color: orange">69</td>
<td style="height: auto; width: auto; background-color: orange">70</td>
<td style="height: auto; width: auto">41</td>
<td style="height: auto; width: auto">0,7 MB</td>
<td style="height: auto; width: auto">1,39 sek</td>
</tr>
</table>

Startsidan och sidan för Jul- och Nyår innehåller väldigt lite data, under 1 MB. Det är också väldigt få resurser som laddas, cirka 40-45. Ändå tar dessa sidor 1,40 sek att ladda.
Sidan för "skicka direkt" verkar fungera på ett helt annat sätt. Här laddas 2,3 MB data. Det mesta i form av bilder på alla världens flaggor.
PageSpeed rekommenderar PostNord att aktivera komprimering av trafiken. Som andra prioritet föreslår PageSpeed att man ska utnyttja cachelagring.
Detta gäller dock inte för sidan "skicka direkt". Där är rekommendationen att optimera bilder och att ta bort Javascript- och CSS kod som blockerar renderingen från innehåll ovanför mitten.
Svarstdiderna upplevs som ok, utom för "skicka direkt". Där skulle jag rekommendera att inte ladda över bilder på alla flaggor. Behövs de verkligen? Eller kan man göra dem mindre?

<hr>

##Sammanfattning##

På de sidor jag undersökt rekommenderas oftast att komprimera bilder. Om den rekommendationen inte kommer på första plats så kommer den på andra eller tredje.
Det är också så att betyget för visning i mobil generellt ligger lägre än betyget för desktop. Om man ska optimera för bra hastighet ska man nog satsa på mobilplattformen. Det kommer även desktop-lösningen att tjäna på.

Ett vanligt påpekande från PageSpeed är att man ska ta bort Javascript- och CSS kod som blockerar renderingen från innehåll ovanför mitten. Man kan delvis lösa detta med inline CSS för den del av sidan som ligger över "fold". Här känner jag att jag har mer att lära innan jag kan rekommendera något.

###Rangordning###
Det är svårt att rangordna webbplatserna. Även om man kan mäta svarstiderna så är det en helt annan sak när man använder sidorna.
Alla mina valda sidor laddar tillräckligt snabbt. I DNs fall så laddas först artiklar, och sedan reklam, vilket gör att man som läsare direkt kan börja läsa huvudrubrikerna för dagens tidning. Innehållet på CDON och PostNords startsidor laddas också såpass fort att man som användare känner att sidan är färdig, även om vissa saker fortfarande laddas.

Jag rangordar sidorna så här:

* Dagens Nyheter. För att de trots sina 555 requests och 6,8 MB laddar huvudinnehållet såpass snabbt att man efter en dryg sekund kan börja använda innehållet.
* CDON. De är också effektiva. 193 requests och 2,4 MB med en laddningstid på 1,34 sekunder. Helt ok.
* PostNord. Laddningstiden på 1,41 är bra, men då laddas också bara 43 requests och 0,8 MB data.

###Accepterad svarstid###
Vad är accepterad svarstid? För vissa sidor kan det vara väldigt kort tid, medan andra kan man acceptera att vänta några sekunder.
Om man ska boka en flygresa och söker efter flygbolag och priser för ett visst datum och resmål då kan man utan problem vänta 10-15 sekunder.
Vill man däremot ha tider för nästa buss till stan, vill man inte vänta lika länge. Även om det också här är en beräkning som ska göras.

Generellt kan man väl säga att en svarstid under 2 sekunder är bra, 5 sekunder är acceptabel i vissa sammanhang. Tider därutöver kräver tålamod hos användaren.

<hr>
Jag har inte gjort den här analysen i grupparbete, utan helt på egen hand.
