<?php

namespace Database\Seeders;

use App\Models\Ghost;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class GhostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kappa = 'Kappa (Japanese: 河童 or かっぱ, meaning "River child") are aquatic reptilian humanoids who inhabit the rivers and streams found all over Japan. Clumsy on land, they are at home in the water, where they thrive during the warm months. They are excellent swimmers, and despite their small size they are physically stronger than a grown man.

        Kappa are generally the size and shape of a human child, with scaly skin ranging in earthy hues from deep green to bright red, even blue. Their bodies are built for swimming, with webbed, thumbless hands and feet, and a turtle-like beak and shell. Their elastic, waterproof skin reeks of fish, and is said to be removable. They possess three anuses, allowing them to pass three times as much gas as a human. Kappa forearms are attached to one another inside of their shells, and pulling on one arm will cause it to lengthen while the other one contracts. A dish-like depression lies on top of their skulls. This dish is the source of a kappa’s power and must be kept wet at all times; should the water be spilled and the dish dry up, the kappa will be unable to move and may even die.
        
        Adult kappa often live solitary lives, although it is common for them to befriend other yokai and even humans. Younger kappa are frequently found in family groups. Kappa are proud and stubborn, but also fiercely honorable; they never break any promises that they make. Kappa possess keen intelligence and they are one of the few yokai able to learn human languages. They are also highly knowledgeable about medicine and the art of setting bones; according to legend, these skills were first taught to humans by friendly kappa. They will eat almost anything, but they are particularly fond of raw innards –particularly human anuses – and cucumbers. They love mischief, martial arts like sumo wrestling, and games of skill like shogi.
        
        Kappa are revered in Shinto as a kind of water god. It is not uncommon to see offerings of cucumbers made at riverbanks by devout humans; in return, kappa are known to help people by irrigating fields, befriending lonely children, competing with adults in sports and games, and so on.Kappa can also be crass and violent. Mischievous by nature, they love to peek up women’s kimonos and loudly pass gas in public. Lakes and rivers where kappa live are often marked with warning signs. Their preferred method of attack is to drown or bite their opponent to death under water. They particularly despise cows and horses, and will attack the animals for no reason at all. They have been known to kidnap or rape swimming women, and to devour humans alive. Usually they go for the anus – in particular a mythical ball of flesh located just inside the anus, called the shirikodama. In the water, there is no escape for anyone who crosses a Kappa. On land, however, it is possible to outwit one: the honorable kappa will feel obliged to return a bow, and if it can be tricked into bowing so low that the water in its dish spills out, it can be easily overcome. Once bested, many kappa have been made to swear loyalty and friendship to their victor for the rest of their lives.
        
        It was believed that there were a few means of escape if one was confronted with a kappa. Kappa are obsessed with politeness, so if a person makes a deep bow, it will return the gesture. This results in the kappa spilling the water held in the "dish" (sara) on its head, rendering it unable to leave the bowing position until the plate is refilled with water from the river in which it lives. If a person refills it, the kappa will serve that person for all eternity. A similar weakness of the kappa involves its arms, which can easily be pulled from its body. If an arm is detached, the kappa will perform favors or share knowledge in exchange for its return.';

        $Chupacabra = "
        The chupacabra or chupacabras (Spanish pronunciation: [tʃupaˈkaβɾas], literally 'goat-sucker'; from Spanish: chupar, 'to suck', and cabras, 'goats') is a legendary creature in the folklore of parts of the Americas, with its first purported sightings reported in Puerto Rico in 1995. The name comes from the animal's reported vampirism—the chupacabra is said to attack and drink the blood of livestock, including goats.
        
        The most common description of the chupacabra is that of a reptile-like creature, said to have leathery or scaly greenish-gray skin and sharp spines or quills running down its back. It is said to be approximately 3 to 4 feet (0.9 to 1.2 m) high, and stands and hops in a fashion similar to that of a kangaroo. Another common description of the chupacabra is of a strange breed of wild dog. This form is mostly hairless and has a pronounced spinal ridge, unusually pronounced eye sockets, fangs, and claws. Unlike conventional predators, the chupacabra is said to drain all of the animal's blood (and sometimes organs) usually through three holes in the shape of a downwards-pointing triangle, but sometimes through only one or two holes.
        
        Chupacabras can be literally translated as 'goat-sucker', from chupar ('to suck') and cabras ('goats'). It is known as both chupacabras and chupacabra throughout the Americas, with the former being the original name, and the latter a regularization. The name is attributed to Puerto Rican comedian Silverio Pérez, who coined the label in 1995 while commenting on the attacks as a San Juan radio deejay.
        
        Sightings have been reported in Puerto Rico since the 1970s, and this creature has since been reported as far north as Maine, as far south as Chile, and even outside the Americas in countries like Russia and Philippines. All of the reports are anecdotal and have been disregarded as uncorroborated or lacking evidence. Sightings in northern Mexico and the southern United States have been verified as canids afflicted by mange. According to biologists and wildlife management officials, the chupacabra is an urban legend.";


        $Kuntilanak = 'The Kuntilanak (Indonesian name), also called Pontianak (Malay name), is a mythological creature in Indonesia, Malaysia and Singapore. It is similar to Langsuir in other Southeast Asia regions. The Kuntilanak usually takes the form of a pregnant woman who is unable to give birth to a child. Alternatively, it is often described as a vampiric, vengeful female spirit. Another form of the Pontianak refers to the ghost or white lady of Southeast Asian folklore. This figure was also named after the province of Western Kalimantan region (Borneo).

        The Kuntilanak (Pontianak) is often depicted as a beautiful woman with pale skin, red eyes, and long black hair. She is often dressed in a blood-smeared white dress. The Pontianak is also described as changing into a more monstrous form when she captures her prey which is typically men or helpless people. Because she is bloodthirsty and has a carnivorous nature, a Pontianak can also appear as a beast or a ghost, resembling the Dracula vampire. Pontianak only appears under the full moon and typically announces her presence with the cries of infants or feminine laughter. It is said that if the sounds are quiet, she is nearby, but if they are loud, she is far away. Some sources also state that a dog howling at night indicates that a Pontianak is present, but not too close; if the dog whines, then a Pontianak is near. Its presence is also said to be heralded by a floral fragrance, identifiable as that of the Plumeria flower, followed by a stench similar to that of a decaying corpse. The Pontianak kills her victims by using her long fingernails to physically remove their internal organs to be eaten. In cases where the Pontianak desires revenge and retribution against a man, it is said to eviscerate the victim with its hands. If a victim has their eyes open when a Pontianak is near, she will suck them out of their head. The Pontianak is said to locate her prey by the scent of their clean laundry; because of this, some Malaysians refuse to leave any piece of clothing outside their house overnight. The Pontianak is associated with banana trees, and her spirit is said to reside in them during the day. According to folklore, a Pontianak can be fought off by driving a nail into the hole on the nape of her neck, which causes her to turn into a beautiful woman and a good wife until the nail is removed. The Indonesian Kuntilanak is similar to the Pontianak in Malaysia, but commonly takes the form of a bird and sucks the blood of virgins and young women. The bird, which makes a "Ke-ke-ke" sound as it flies, may be sent through black magic to make a woman fall ill; the characteristic symptom being vaginal bleeding. When a man approaches her in her female form, the Kuntilanak suddenly turns and reveals that her back is hollow, much like the Sundel bolong the prostitute ghost with her large gaping hole on her back. A Kuntilanak can be subdued by plunging a sharp nail into the top of her head.
        
        Kuntilanak or Pontianak is often described as an astral female spirit; another version of this figure is a woman spirit with long sharp fingernails. It is similar to the spirit of a woman unable to give birth while her stillborn child was inside her womb. This figure is mainly known to reside in the Kalimantan region containing the city of Pontianak. The Pontianak can disguise herself using the appearance of a beautiful woman to lure her prey. In Malaysia, lore depicts them as "vampiric" blood-suckers that rip through the internal organs of men. 
        
        The Pontianak is derived from myths and folktales, some of which are particularly popular in Kalimantan (Borneo). Being one of the most famous pieces of Indonesian folklore, it inspired the name of a capital city in the Western Kalimantan region, called Pontianak. The city of Pontianak had a long history, it was founded and infested by ghosts, until Syarif Abdurrahman Alkadrie fended off the ghosts. After the two shots were fired at the exact same spot, then the sultanate had planned to construct the foundation of a mosque and a palace there at the forest. The first sultan of the Pontianak Sultanate, whose reign lasted from 1771-1808, was haunted by these wicked creatures. Today, the place is covered in trees and locals still believe it is haunted by the Pontianak. It is tradition to shoot carbide cannons made from logs to pay tribute to the Sultan.';


        $Vampire = "A vampire is a creature from folklore that subsists by feeding on the vital essence (generally in the form of blood) of the living. In European folklore, vampires are undead creatures that often visited loved ones and caused mischief or deaths in the neighborhoods they inhabited while they were alive. They wore shrouds and were often described as bloated and of ruddy or dark countenance, markedly different from today's gaunt, pale vampire which dates from the early 19th century.

        They wore shrouds and were often described as bloated and of ruddy or dark countenance, markedly different from today's gaunt, pale vampire which dates from the early 19th century.
        
        Vampires are often considered powerful undead in stories and folklore, due to their variety of abilities, and their near-indestructibility. They tend to be extremely difficult to kill.
        
        There are a few variations on how Vampires come to be, depending on the folklore of the region in question. In Slavic and Chinese traditions, any corpse that was jumped over by an animal, particularly a dog or a cat, was feared to become one of the undead. A body with a wound that had not been treated with boiling water was also at risk. In Russian folklore, vampires were said to have once been witches or people who had rebelled against the Russian Orthodox Church while they were alive, and had come back due to dark magic. In more recent lore, vampires are created when a vampire bites and/or gives a human their blood which turns them into a subordinate vampire, sometimes known as a Thrall.
        
        In lore, various items and simple rituals were used to keep away not only vampires, but other types of undead. Warding Magic is also known as 'Apotropaic' from the Greek 'To ward off.' Specific defenses against vampires included: Garlic, wild rose, hawthorn plants. Sprinkling mustard seeds on the roof of a house was said to keep them away. Sacred items such as a crucifix, rosary, or holy water. Modern fiction has expanded on the concept to include any religious symbol wielded by a sincere believer of the relevant religion: for instance, a believing Jew can use the Star of David to ward off a vampire. Mirrors faced outwards or on a door (as in some cultures they do not have a reflection and do not cast a shadow). Mirrors were made with silver in old days, which was considered a 'pure' metal and is commonly used in monster defenses. Vampires are said to be unable to walk on consecrated ground, such as that of churches or temples, or cross running water. Some traditions also hold that a vampire cannot enter a house unless invited by the owner, although after the first invitation they can come and go as they please. Though folkloric vampires were believed to be more active at night, they were not generally considered vulnerable to sunlight in original lore. That idea was established in popular consciousness in the 1920s film, Nosteratu, in which the vampire featured is destroyed by the morning sun. Since then, the typical vampire story has sunlight as its ultimate weakness, meaning that any human opponents dealing with the monster who manage to survive until morning will find themselves with the advantage for the day. Methods of destroying suspected vampires varied, with staking the most commonly cited method, particularly in southern Slavic cultures. Ash was the preferred wood in Russia and the Baltic states, or hawthorn in Serbia, with a record of oak in Silesia. Potential vampires were most often staked through the heart, though the mouth was targeted in Russia and northern Germany and the stomach in north-eastern Serbia. Piercing the skin of the chest was a way of 'deflating' the bloated vampire; this is similar to the act of burying sharp objects, such as sickles, in with the corpse, so that they may penetrate the skin if the body bloats sufficiently while transforming into an undead. Decapitation was the preferred method in German and western Slavic areas, with the head buried between the feet, behind the buttocks or away from the body. This act was seen as a way of hastening the departure of the soul, which in some cultures, was said to linger in the corpse. In the Balkans, a vampire could also be killed by being shot or drowned, by repeating the funeral service, by sprinkling holy water on the body, or by exorcism.";


        $Wendigo = "The Wendigo (Also known as windigo, weendigo, windago, waindigo, windiga, witiko, wihtikow, and various other name including manaha) originates from Native-American legend, and is said to be a demonic half-beast as told by the Algonquian peoples along the Atlantic coast of the USA and Canada.

        They are seen as malevolent, cannibalistic, supernatural beings of great spiritual power who were strongly associated with the Winter, the North, and coldness, as well as famine and starvation.
        
        The windigo, as mentioned earlier, originates from the beliefs of the Algonquin peoples, who were common throught the US and Canada near the Atlantic coast. Though there were others who believed in the mythology of the windigo, more notably other Alogonquin-speaking tribes (such as the Ojibwe, Saulteaux, the Cree, the Naskapi, and the Innu people) though some descriptions of it were varied depending on the tribe, but there are common attributes. The Windigo is more than often affiliated with cannibalism, the Algonquian people believe that humans who indulged on cannibalism were at possible risk of becoming a windigo; the legend appears to be reinforced by the practice of cannibalism as a taboo. The legend, itself. lends it's name to the disputed modern medical term wendigo psychosis, which is supposed to be a culture-bound disorder.
        
        The Wendigo appearance varies on several levels to many people, most see them as 10 foot tall demons with an enormous heads, gigantic teeth inside twisted mouths, and beady eyes. Others say the windigo has either no fur at all, or snow white fur, often blood stained or matted, bloody hair, with a grotesque maw filled with sharp, yellow fangs, it's hands and feet end in razor-sharp talons, with twisted lips that are feckled with blood, and their tongues are a disgusting dark blue.
        
        According to legend, it's nearly impossible to escape a wendigo. Hunters by nature, wendigoes are extremely fast and allow nothing to get in the way of their never-ending hunger. Even if you could escape physical damage (which is unlikely), the very fact that you'd encountered an otherworldly wendigo would leave you mentally vacant. Wendigoes hibernate for months or years but woe betide when they awaken. Wendigoes can stealthily stalk victims for extended periods, thanks to supernatural speed, endurance and heightened senses such as hearing so profound they can pick up on panicked heartbeats from miles away. This skill comes in quite handy in the woods, no doubt. Once the chase begins, wendigoes engage in a torturous game. They bait their prey, release shrieks or growls, and sometimes mimic human voices calling for help. When the hunt begins in earnest, a wendigo becomes all business. It will race after its prey, upending trees, creating animal stampedes (and thus more famine), and stirring up ice storms and tornadoes. Don't be fooled into believing you're safe indoors. The wendigo can unlock doors and enter homes, where it will kill and eat the inhabitants before converting the cabins into wendigo domiciles for hibernation. If you can't outrun a wendigo, can you outgun it? Not easily. A wounded wendigo simply regenerates. The trick is to employ silver bullets, or a pure silver blade or stake, and strike right through the wendigo's ice-cold heart. (Note: It's widely believed a silver-covered steel blade could work if you're in a pinch.) Upon wounding the wendigo's heart, you must take care to shatter it into pieces, then lock the shattered heart in a silver box and bury it in a church cemetery. Not one to seek a simple end, the rest of the wendigo must be dismembered with a silver-plated axe so you can salt and burn the body, and then scatter its ashes to the winds. Or, as a second option, bury the pieces in a remote location.";

        $Bogeyman = "Bogeyman or you can say Bogeywoman if it feminime, is creature in English folklore that is often told to scare misbehaving children. Also known as Dream Devils which were opposed by Sandmen, the Dream benevolent Spirits. The Bogeyman can be called as spelled boogeyman, bogyman, bogieman, boogie monster, boogie man, Bogeyperson, Boogieperson, Boogeyperson, Bogieperson, or boogie woogie.
        
        This creature's description varies from person to person, as it has no definite appearance and is simply the embodiement of terror. Although usually depicted as a masculine entity, it can be female or genderless.

        The first reference to the Bogeyman would be considered the hobgoblins described in England, in the 1500's. Many believed that they were made to torment humans, and while some only played simple pranks, others were more foul in nature.";

        $Banshee = "are believed by some to be spirits of nature or pre-Christian Gaelic deities. In Theosophy and in Celtic Christian religion, they are commonly called fallen angels. In English, they are described as a fairy or woman of mound.
        
        Rarely seen but heard, her mourning call is often given at night when someone is about to die. The quality of her voice varies to region to region. Some describe it as 'low and pleasant', Some also take to singing songs to do the work, and put power into it without changing the sound.
        
        Banshee are fairly popular and enjoy the same status (in Ireland) as leprechauns. One possible origin of the Banshee are keeners, woman in Ireland that sing songs of lament at funerals.";

        $Kitsune = "Most tales of kitsune are about foxes punishing wicked priests, greedy merchants, and boastful drunkards. They do this by confusing their targets by creating phantom sounds and sights, stealing from them, or otherwise humiliating them publicly through trickery or even possession. Certain mental disorders have been attributed to possession by kitsune (known as kitsune-tsuki). Mysterious illusory fires and strange lights in the sky are said to be caused by their magic, and are known as kitsunebi, or “fox fire.”
        
        Kitsune are extremely intelligent and very powerful shape-shifters. They frequently harass humans by transforming into giants or other fearsome monsters, sometimes just for pranks, and sometimes for other nefarious purposes. They are skilled enough to even transform into exact likenesses of individual people, often appearing in the guise of beautiful human women in order to play tricks young men.
        
        The Apperance of Kitsune yokai, often have many tails. They can also be portrayed as bipedal. In human form, the Kitsune are known for being very attractive. There is one particularly famous kitsune known as Tamamo no Mae.";
        
        $Harpy = "They were generally depicted as birds with the heads of maidens, faces pale with hunger and long claws on their hands. Pottery art depicting the harpies featured beautiful women with wings. 
        
        The harpies seem originally to have been wind spirits. The harpies were called the hounds of mighty Zeus thus ministers of the Thunderer (Zeus).";

        $Stingy_Jack = " Stingy Jack or as we know as Jack the smith was a blacksmith and trickster. Jack was drunk, a liar, and a thief with skills that could rival the devil himself. 
        
        In his life he was cruel man who stole and started fights. But after his body died he became a soul that was forced to live to live forever with his crimes and sins. When he was alive Jack felt no shame or guilt for what he had done not until he died and was cursed. Jack's curse is not only a punishment for him but a warning for others who have sinned like Jack. He tries keep others from making the same mistakes that he has made but will also prey on those who have sinned and don't listen to his warnings.
        
        Jack's turnip and coal given to him by the devil is what started the idea of Jack-o-lanterns to keep evil spirits away. However those who have sin in their hearts their Jack-o-lantern becomes a beacon for Jack.";


        
        Ghost::create([
            'name' => 'Kappa',
            'origin' => 'Japan',
            'ghost_image' => 'http://127.0.0.1:8000/image/ghost/KAPPA.jpg',
            'thumbnail_text' => Str::limit(strip_tags($kappa), 200, '...'),
            'information' => $kappa
        ]);
        Ghost::create([
            'name' => 'Chupacabra',
            'origin' => 'Mexico',
            'ghost_image' => 'http://127.0.0.1:8000/image/ghost/CHUPACABRA.jpg',
            'thumbnail_text' => Str::limit(strip_tags($Chupacabra), 200, '...'),
            'information' => $Chupacabra
        ]);
        Ghost::create([
            'name' => 'Kuntilanak',
            'origin' => 'Indonesia',
            'ghost_image' => 'http://127.0.0.1:8000/image/ghost/KUNTILANAK.jpg',
            'thumbnail_text' => Str::limit(strip_tags($Kuntilanak), 200, '...'),
            'information' => $Kuntilanak
        ]);
        Ghost::create([
            'name' => 'Vampire',
            'origin' => 'Romania',
            'ghost_image' => 'http://127.0.0.1:8000/image/ghost/VAMPIRE.jpg',
            'thumbnail_text' => Str::limit(strip_tags($Vampire), 200, '...'),
            'information' => $Vampire
        ]);
        Ghost::create([
            'name' => 'Wendigo',
            'origin' => 'United States',
            'ghost_image' => 'http://127.0.0.1:8000/image/ghost/WENDIGO.jpg',
            'thumbnail_text' => Str::limit(strip_tags($Wendigo), 200, '...'),
            'information' => $Wendigo
        ]);
        

        Ghost::create([
            'name' => 'Bogeyman',
            'origin' => 'World-wide',
            'ghost_image' => 'http://127.0.0.1:8000/image/ghost/BOGEYMAN.jpeg',
            'thumbnail_text' => Str::limit(strip_tags($Bogeyman), 200, '...'),
            'information' => $Bogeyman
        ]);

        Ghost::create([
            'name' => 'Banshee',
            'origin' => 'Europe',
            'ghost_image' => 'http://127.0.0.1:8000/image/ghost/Banshee.jpg',
            'thumbnail_text' => Str::limit(strip_tags($Banshee), 200, '...'),
            'information' => $Banshee
        ]);

        Ghost::create([
            'name' => 'Kitsune',
            'origin' => 'Japan',
            'ghost_image' => 'http://127.0.0.1:8000/image/ghost/KITSUNE.jpeg',
            'thumbnail_text' => Str::limit(strip_tags($Kitsune), 200, '...'),
            'information' => $Kitsune
        ]);

        Ghost::create([
            'name' => 'Harpy',
            'origin' => 'Greco-Roman',
            'ghost_image' => 'http://127.0.0.1:8000/image/ghost/HARPY.jpeg',
            'thumbnail_text' => Str::limit(strip_tags($Harpy), 200, '...'),
            'information' => $Harpy
        ]);

        Ghost::create([
            'name' => 'Stingy Jack',
            'origin' => 'Ireland',
            'ghost_image' => 'http://127.0.0.1:8000/image/ghost/Stingy_Jack.png',
            'thumbnail_text' => Str::limit(strip_tags($Stingy_Jack), 200, '...'),
            'information' => $Stingy_Jack
        ]);

    }
}
