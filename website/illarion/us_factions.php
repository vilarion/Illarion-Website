<?php
   include $_SERVER['DOCUMENT_ROOT'] . '/shared/shared.php';

   Page::setTitle( 'Realms' );
   Page::setDescription( 'An overview of the realms in the game.' );
   Page::setKeywords( array( 'Factions', 'Realms', 'Cadomyr', 'Galmair', 'Runewick' ) );

   Page::setXHTML();
   Page::Init();
?>
<h1>The Realms</h1>

<h2>Content</h2>
<ul>
<li><a class="hidden" href="#1">Cadomyr - Realm of Honour and Glory</a></li>
<li><a class="hidden" href="#2">Galmair - Realm of Prosperity and Wealth</a></li>
<li><a class="hidden" href="#3">Runewick - Realm of Wisdom and Magic</a></li>
</ul>

<h2><a name="1"></a>Cadomyr - Realm of Honour and Glory</h2>

<img align="left" vspace="10" hspace="20" src="<?php echo $url; ?>/shared/pics/factions/cadomyrShieldDirt150.png" alt="Cadomyr"/>

<p>Flanked by the impenetrable Nameless Mountains and the Great Ocean, Cadomyr's foreboding fortress walls rise from the desert sands. From the Nameless Mountains the Kantabi River cuts through the Kantabi desert, demarking the territory of Cadomyr as it flows towards the ocean where it diverges into the Kantabi Delta. The hot desert sun reflects off the uniform sandstone walls of the town while grand paintings and statues depict glorious feats of past rulers.</p>

<p>Sheltered behind buttressed walls is the Royal Palace, home to Queen Rosaline Edwards. She is the daughter of Sir Reginald, last of a long line of illustrious Kings of Albarian origin who ruled the desert fortress. A rich heritage of combat and stringent codes of honour sustains the traditional customs. With this proud and ambitious Queen the royal bloodline continues, some say blessed by the gods themselves. As a woman of considerable honour, and thus power, Queen Rosaline Edwards is the undisputed ruler of Cadomyr, holding the two stones of power, amethyst and topaz.</p>

<p>Behind every powerful warrior works a humble crafter and Cadomyr is no exception. The Liberty Quarry and Cornerstone of Candour mines, along with the desert, provide ample resources for digging, glass blowing, gem grinding, and fine smithing. Miners, black smiths, masons, brick makers, tailors and herb gatherers also find plenty of opportunity in Cadomyr.</p>

<p>Malachín, God of Battle and Hunting, is revered above all others in Cadomyr. Zhambra, God of Friendship and Loyalty, and Sirani, Goddess of Love and Pleasure, are also held in high esteem. In this hierarchal society, rank is central to life with the Queen, supported by a handful of aristocrats, expecting unquestionable loyalty from her subjects. Everyone has their place in society and should be content with their lot. As ruthless members of the ruling elite vie for favour, few Cadomyrian subjects would dare to violate the customs of old or question the edicts of their Queen.</p>

<?php Page::insert_go_to_top_link(); ?>

<h2><a name="2"></a>Galmair - Realm of Prosperity and Wealth</h2>

<img align="right" vspace="10" hspace="20" src="<?php echo $url; ?>/shared/pics/factions/galmairShieldDirt150.png" alt="Galmair"/>

<p>Nestled in the foothills of the Nameless Mountains, Galmair's imposing walls join with rocky outcrops to form formidable fortifications. Malachite Creek courses through Galmairian territory to join the Bounding Stream as it flows from Syrita Bay, bordering the edge of Nargun's Plain. Originally built by dwarves, much of the town itself lies underground with cavernous halls and tunnels cleaved deep into the mountains.</p>

<p>At the heart of Galmair lies Galmair's Crest, the home to Don Valerio Guilianni. He is the son of Tommaso Guilianni, a successful Gynkese trader who in search of ever greater riches established Galmair as a profitable trading town. As his natural successor, Valerio Guilianni came to power following the sudden death of his father, although rumours suggest a family feud and naming of another successor may have hurried his demise. As a dwarf of considerable wealth, and thus power, Don Valerio Guilianni is the undisputed ruler of Galmair, holding the two stones of power, sapphire and obsidian.</p>

<p>Galmair thrives on trade and the bustling market offers crafters and merchants much opportunity. Traditional dwarven industries of black smithing, mining, masonry, brick making and brewing dominate and the town is well supported by the Malachite and Dark Hole mines. Fine smiths, gem grinders, carpenters, lumberjacks, cooks, bakers and farmers will also find a wealth of opportunity in Galmair.</p>

<p>Many in Galmair follow Irmorom as the God of Trade and Craftsmanship. Others worship Nargun, the God of Chaos, and Ronagan, God of Thieves and Shadows. Free of the constraints of written law, formal customs and codes of honour, Galmair welcomes any that can pay their taxes. Everything has a price and lurking in the shadows you might find vendors selling more unusual goods and services. However, glimpses down dark alleys and into the sickeningly named Sport's Hole hint at the darker side to Galmair life.</p>

<?php Page::insert_go_to_top_link(); ?>

<h2><a name="3"></a>Runewick - Realm of Wisdom and Magic</h2>

<img align="left" vspace="10" hspace="20" src="<?php echo $url; ?>/shared/pics/factions/runewickShieldDirt150.png" alt="Runewick"/>

<p>Set in an archipelago of forested islands, the town of Runewick is surrounded by fertile fields and bountiful glades. Across Lunord Bridge lies the farming community of Yewdale with Runewick ferry harbour at the entrance to Snakehead Bay, whilst animals graze as far as the Dewy Swamps. Founded by the Archmage Elvaine Morgan, the academy provides an eclectic seat of learning amongst a bustling town. In vast libraries and research chambers are housing countless precious books and manuscripts.</p>

<p>In a villa of the town presides the Archmage Elvaine Morgan. He first founded Runewick as an academy with a group of mages from the renowned magical city of Lor Angur. As an elf of immense wisdom, and thus power, Archmage Elvaine Morgan is the undisputed head of state of Runewick, possessing the two stones of power, ruby and emerald.</p>

<p>Numerous crafters work alongside the mages and other scholars that study in Runewick's libraries. Carpenters, lumberjacks, tailors, farmers, cooks, bakers, herb gatherers and candle makers are all well supported by the diverse forests, abundant livestock and rich soils that surround the town. Ample opportunity can also be found for brewing, fishing and glass blowing in Runewick.</p>

<p>Many regard Elara, the Goddess of Wisdom and Knowledge, as the patron god of Runewick. Others worship Oldra, the Goddess of Life and Fertility, and Adron, God of Festivities and Wine. Also the Elder Gods of the elements, Eldan, Brágon, Tanora, Ushara and Findari, are honoured like everywhere across Illarion. With written laws, Runewick might be considered enlightened by many, yet few of his flock would dare to challenge the vast knowledge of their founding father or disregard his council. Scattered ruins, however, serve to remind that even as a seat of renowned wisdom, Runewick hasn't always been devoid of misadventure, be it deliberate or otherwise.</p>

<?php Page::insert_go_to_top_link(); ?>
