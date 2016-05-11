<?php

try {
  require_once(__DIR__ . "/hearts.php");
  $hearts = new Hearts();
}
catch(Exception $e) {
  echo "Caught exception: " . $e->getMessage() . "\n";
}

 ?>




 <!DOCTYPE html>
 <html>
   <head>
     <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <meta name="description" content="Leer hoe je een saaie, vervelende begrafenis wat leuker kan maken!" />
     <meta name="keywords" content="begrafenis, leren, saai, vervelend, leuk" />
     <meta name="author" content="Tuur Dutoit" />
     <link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
     <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />

     <title>EHBOverleven van begrafenissen</title>
   </head>
   <body>
     <main>
       <section class="home">
         <div class="container">
           <img class="grave" src="assets/img/grave.png" alt="grafsteen" width="250" height="294" />
           <img class="tree" src="assets/img/tree.png" alt="boom" width="648" height="742" />
           <img class="sign" src="assets/img/ehb-sign.png" alt="EHB" width="177" height="307" />
           <header><h1>Begrafenissen</h1></header>
         </div>
         <div class="grass">
           <img class="molehill" src="assets/img/mole-hill.png" alt="molshoop" width="230" height="133" />
           <img class="rat down" src="assets/img/rat.png" alt="rat" width="34" height="68" />
         </div>
         <div class="gradient"></div>
       </section>


       <section class="music container">
         <header>
           <div class="numeral">1.</div>
           <img class="notes" src="assets/img/music.jpg" alt="muziekbalk" width="960" height="70" />
           <h1 class="section-title">
             <span class="part-1">de</span>
             <span class="part-2">mu-</span>
             <span class="part-3">ziek</span>
             <span class="part-4">is</span>
             <span class="part-5">te</span>
             <span class="part-6">droe-</span>
             <span class="part-7">vig</span>
           </h1>
         </header>

         <article class="mariachi">
           <div class="vote">
             <button class="button" data-solution-id="0">Stemmen</button>
             <p class="details">als je dit een goede oplossing vind</p>
           </div>
           <div class="article">
             <img src="assets/img/mariachi.jpg" alt="Mariachi band" width="102" height="240" />
             <div class="body">
               <header><h2 class="article-title">Huur een Mariachi band in</h2></header>
               <div class="rating">
                 <?php echo $hearts->getHTMLForSolution(0); ?>
               </div>
               <div class="content">
                 <p>Overtuig je familie ervan dat de dode een grote fan was van Mariachi bands. Hierbij is het belangrijk creatief te zijn met overtuigingstechnieken: toon selfies van de dode bij Mariachi bands, citeer dingen die hij of zij tegen jou gezegd heeft, toon een foto van zijn of haar zoekgeschiedenis, enzovoort. Deze elementen mogen uiteraard verzonnen of gefotoshopt zijn.</p>
                 <p>Dit vergt redelijk wat werk op voorhand, maar kan zeer leuk zijn tijdens de ceremonie zelf.</p>
               </div>
             </div>
           </div>
         </article>

         <article class="karaoke">
           <div class="vote">
             <button class="button" data-solution-id="1">Stemmen</button>
             <p class="details">als je dit een goede oplossing vind</p>
           </div>
           <div class="article">
             <img src="assets/img/karaoke.jpg" alt="Karaoke" width="216" height="300" />
             <div class="body">
               <header><h2 class="article-title">Organiseer een karaoke</h2></header>
               <div class="rating">
                 <?php echo $hearts->getHTMLForSolution(1); ?>
               </div>
               <div class="content">
                 <p>Eerst en vooral zal je voor muziek moeten zorgen: je kan bijvoorbeeld de orgelspeler vragen om de zanger te begeleiden, of je smartphone aan de geluidsinstallatie van de kerk koppelen. Vervolgens heb je zangers nodig. Sommige mensen hebben genoeg aan wat goede muziek, maar de meesten zullen wat meer overtuiging nodig hebben; alcohol is daarvoor altijd zeer geschikt.</p>
                 <p>Zorg er tenslotte voor dat je goede muziek hebt: popliedjes lijken een goede keuze, ware het niet dat oudere genodigden deze niet kennen. Daarom raad ik schlagers aan voor zulke gelegenheden: slechte muziek die iedereen kan meezingen!</p>
               </div>
             </div>
           </div>
         </article>
       </section>

       <section class="food">
         <div class="stripes"></div>
         <div class="container">
           <header class="section-header">
             <h1>
               <span class="numeral">2.</span>
               <span class="article-title">Het eten is niet lekker</span>
             </h1>
           </header>

           <div class="biohazard">
             <img src="assets/img/biohazard.png" alt="biohazard symbool" width="197" height="186" />
           </div>

           <div class="articles">
             <article class="bag">
               <div class="vote">
                 <button class="button" data-solution-id="2">Stemmen</button>
                 <p class="details">als je dit een goede oplossing vind</p>
               </div>
               <div class="article">
                 <header><h2 class="article-title">Vraag om een doggiebag</h2></header>
                 <div class="rating">
                   <?php echo $hearts->getHTMLForSolution(2); ?>
                 </div>
                 <div class="content">
                   <p>Doe al je eten in een zakje, stop het in je handtas (of die van je vrouw) en geef thuis de inhoud aan je hond. Als het dat zelfs waard is.</p>
                   <p>Opgelet! Dit kan door sommige mensen als onrespectvol gezien worden, dus probeer zo subtiel mogelijk te werk te gaan.</p>
                 </div>
               </div>
             </article>

             <article class="fight">
               <div class="vote">
                 <button class="button" data-solution-id="3">Stemmen</button>
                 <p class="details">als je dit een goede oplossing vind</p>
               </div>
               <div class="article">
                 <header><h2 class="article-title">Start een voedselgevecht</h2></header>
                 <div class="rating">
                   <?php echo $hearts->getHTMLForSolution(3); ?>
                 </div>
                 <div class="content">
                   <p>Als je een voedselgevecht kan beginnen lost het probleem zich vanzelf op: je bord zal snel leeggegooid zijn. Zo’n gevecht beginnen kan echter moeilijk zijn. Een techniek die vaak werkt, is om openlijk met de dode te spotten. Dit lokt hoogstwaarschijnlijk een boze reactie uit van de anderen aan de tafel. Als tegenreactie, kan je beginnen gooien met het eten op je bord. Met een beetje geluk, gooien ze terug en is het gevecht op gang.</p>
                 </div>
               </div>
             </article>
           </div>
         </div>
         <div class="stripes"></div>
       </section>

       <section class="walk container">
         <header class="section-header">
           <img src="assets/img/zombie-1.jpg" alt="zombie" class="zombie-1" width="107" height="235" />
           <div class="text">
             <div class="numeral">3.</div>
             <h1 class="section-title">Je wil niet mee wandelen met de stoet</h1>
           </div>
           <img src="assets/img/zombie-2.jpg" alt="zombie" class="zombie-2" width="91" height="232" />
         </header>

         <article class="shoes">
           <div class="vote">
             <button class="button" data-solution-id="4">Stemmen</button>
             <p class="details">als je dit een goede oplossing vind</p>
           </div>
           <div class="article">
             <header class="text">
               <h1 class="article-title">"Vergeet" je schoenen</h1>
               <div class="rating">
                 <?php echo $hearts->getHTMLForSolution(4); ?>
               </div>
             </header>
             <img src="assets/img/foot.jpg" alt="voet zonder schoen" class="image" width="77" height="198" />
             <div class="text content">
               <p>Een heel simpele oplossing is om gewoon je schoenen niet aan te doen. Op die manier kan je onmogelijk zo ver wandelen. Bedenk wel een goed excuus: de situatie zal waarschijnlijk voor rare blikken zorgen.</p>
               <p>Als je echter geen zin hebt om een hele dag op blote voeten te lopen, kan je ook je schoenen “verliezen” net voor de stoet.</p>
             </div>
           </div>
         </article>

         <article class="smell">
           <div class="vote">
             <button class="button" data-solution-id="5">Stemmen</button>
             <p class="details">als je dit een goede oplossing vind</p>
           </div>
           <div class="article">
             <div class="text content">
               <p>Een goede manier om dit te doen is om een week lang niet te douchen. Wie wil er nu gaan wandelen met iemand die zo stinkt? Andere technieken zijn: een vreselijk slechte deo kopen, je lelijkste kleren aantrekken, enkele teentjes look eten op voorhand&hellip;</p>
             </div>
             <img src="assets/img/smell.jpg" alt="rottend, stinkend vlees" class="image" width="126" height="255" />
             <header class="text">
               <h1 class="article-title">Maak dat niemand je mee <em>wil</em></h1>
               <div class="rating">
                 <?php echo $hearts->getHTMLForSolution(5); ?>
               </div>
             </header>
           </div>
         </article>
       </section>

       <section class="murder">
         <div class="container">
           <article class="blame">
             <div class="vote">
               <button class="button" data-solution-id="6">Stemmen</button>
               <p class="details">als je dit een goede oplossing vind</p>
             </div>
             <div class="article">
               <header><h1 class="article-title">Steek de schuld op iemand anders</h1></header>
               <div class="rating">
                 <?php echo $hearts->getHTMLForSolution(6); ?>
               </div>
               <div class="content">
                 <p>Kies eerst een doelwit uit: iemand die iedereen raar vind en niemand echt mee praat is een goede keuze. Dan is het tijd om verhalen te verzinnen: vertel over hoe je het doelwit louche dingen hebt zien doen, naar rare plakken hebt zien wandelen, of met verdachte types hebt zien praten. Zorg er wel voor dat je zelf zo weinig mogelijk geviseerd wordt: je wil niet het centrum van de aandacht worden.</p>
               </div>
             </div>
           </article>

           <div class="hands pointing">
             <img src="assets/img/pointing/1.png" alt="hand" width="65" height="91" />
             <img src="assets/img/pointing/2.png" alt="hand" width="42" height="95" />
             <img src="assets/img/pointing/3.png" alt="hand" width="42" height="81" />
             <img src="assets/img/pointing/4.png" alt="hand" width="43" height="89" />
             <img src="assets/img/pointing/5.png" alt="hand" width="31" height="68" />
             <img src="assets/img/pointing/6.png" alt="hand" width="45" height="83" />
             <img src="assets/img/pointing/7.png" alt="hand" width="51" height="70" />
             <img src="assets/img/pointing/8.png" alt="hand" width="42" height="110" />
             <img src="assets/img/pointing/9.png" alt="hand" width="36" height="56" />
             <img src="assets/img/pointing/10.png" alt="hand" width="48" height="89" />
           </div>

           <header class="section-header">
             <h1>
               <div class="numeral">4.</div>
               <span class="section-title">Jij bent de moordenaar</span>
             </h1>
           </header>

           <div class="hands thumbs-up">
             <img src="assets/img/thumbs/1.png" alt="duim" width="57" height="72" />
             <img src="assets/img/thumbs/2.png" alt="duim" width="79" height="62" />
             <img src="assets/img/thumbs/3.png" alt="duim" width="57" height="88" />
             <img src="assets/img/thumbs/4.png" alt="duim" width="45" height="90" />
             <img src="assets/img/thumbs/5.png" alt="duim" width="68" height="71" />
             <img src="assets/img/thumbs/6.png" alt="duim" width="81" height="71" />
             <img src="assets/img/thumbs/7.png" alt="duim" width="67" height="81" />
             <img src="assets/img/thumbs/8.png" alt="duim" width="64" height="89" />
           </div>

           <article class="speech">
             <div class="vote">
               <button class="button" data-solution-id="7">Stemmen</button>
               <p class="details">als je dit een goede oplossing vind</p>
             </div>
             <div class="article">
               <header><h1 class="article-title">Vertel waarom het overlijden positief is</h1></header>
               <div class="rating">
                 <?php echo $hearts->getHTMLForSolution(7); ?>
               </div>
               <div class="content">
                 <p>Wanneer de afscheidsspeeches gehouden worden, kan jij er ook één maken waarin je alle positieve punten van de dood aanhaalt en je er alle aanwezigen aan herinnert waarom het beter is dat de dode overleden is.  Je kan bijvoorbeeld vertellen over de positieve impact op de opwarming van de aarde, of hoe de ontbinding van het lijk het ecosysteem helpt. Je kan ook alle slechte kwaliteiten van de dode opsommen en vertellen dat die nu voorgoed van de aardbodem verdwenen zijn.</p>
               </div>
             </div>
           </article>
         </div>
       </section>

       <section class="wafer container">
         <header class="section-header">
           <img src="assets/img/mouth.jpg" alt="open mond" class="mouth" width="200" height="253" />
           <img src="assets/img/bacteria.jpg" alt="bacteriën" class="bacteria" width="323" height="206" />
           <img src="assets/img/toothpick.png" alt="tandenstoker" class="toothpick" width="11" height="262" />
           <h1>
             <span class="numeral">5.</span>
             <span class="article-title">De hostie blijft plakken</span>
           </h1>
         </header>

         <div class="articles">
           <article class="bacteria">
             <div class="vote">
               <button class="button" data-solution-id="8">Stemmen</button>
               <p class="details">als je dit een goede oplossing vind</p>
             </div>
             <div class="article">
               <header><h1 class="article-title">Maak gebruik van de situatie</h1></header>
               <div class="rating">
                 <?php echo $hearts->getHTMLForSolution(8); ?>
               </div>
               <div class="content">
                 <p>Tijdens begrafenissen word je vaak lastiggevallen door familieleden en vage kennissen met vragen die je liever niet zou beantwoorden. In deze situatie kan je dan de hostie laten zien en hen kort - maar vooral: vaag - uitleggen over een zeldzame ziekte, waardoor je niet goed kan praten.</p>
               </div>
             </div>
           </article>

           <article class="toothpick">
             <div class="vote">
               <button class="button" data-solution-id="9">Stemmen</button>
               <p class="details">als je dit een goede oplossing vind</p>
             </div>
             <div class="article">
               <header><h1 class="article-title">Vraag om een tandenstoker</h1></header>
               <div class="rating">
                 <?php echo $hearts->getHTMLForSolution(9); ?>
               </div>
               <div class="content">
                 <p>In een kerk kan het echter moeilijk zijn om aan een tandenstoker te raken. Vraag er dus gewoon één aan de pastoor: zij hebben vaak een leefruimte achter in de kerk, waar ze zulke dingen hebben liggen. Eens de hostie los is, kan je hem doorspoelen met een grote slok miswijn; die is toch gratis.</p>
               </div>
             </div>
           </article>
         </div>
       </section>
     </main>

     <script type="text/javascript" src="assets/js/script.js"></script>
   </body>
 </html>
