<?php

use App\Character;
use Illuminate\Database\Seeder;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = [
            [
                "title" => "BATMAN",
                "description" => "dfefrer",
                "img
                " => "https://www.dccomics.com/sites/default/files/styles/character_thumb_160x160/public/Char_Profile_Batman_20190116_5c3fc4b40faec2.47318964.jpg?itok=u4BHrDeE",
                "sale_date" => "2018-10-02",
            ],
            [
                "title" => "CATWOMAN",
                "description" => "As deadly as she is beautiful, infamous cat-burglar Selina Kyle uses her nine lives to walk the razor's edge between light and darkness in Gotham City.
                The Bat may be the king of the beasts of Gotham. But the Cat? The Cat is definitely the queen. Infamous burglar Selina Kyle is certainly one of the most iconic characters in the DC Universe—not because she's a superhero, per se, but because she's so good at stumping them. Motivated partly by her own self interest, partly by the fun of it all, Catwoman has been baffling Gotham City's heroes, both masked and unmasked, from the very beginning.            
                An accomplished jewel thief and an occasional hero herself, Selina's murky moral compass has made her relationship with Batman complicated, to say the least. Still, the undeniable magnetism between Bat and Cat is one of Gotham's most reliable constants: wherever Catwoman goes, Batman is sure to follow, if only to take her down. It's a complicated game of cat-and-mouse (cat-and-bat?) that Bruce and Selina have been playing across the streets and rooftops of Gotham for a long, long time.",
                "img
                " => "https://www.dccomics.com/sites/default/files/styles/character_thumb_160x160/public/Char_Profile_Catwoman_5c47c984ed1d66.81377433.jpg?itok=yHAKRa64",
                "sale_date" => "2017-1-12",
            ],
            [
                "title" => "WONDER WOMAN",
                "description" => "Beautiful as Aphrodite, wise as Athena, swifter than Hermes, and stronger than Hercules, Princess Diana of Themyscira fights for peace in Man's World.
                One of the most beloved and iconic DC Super Heroes of all time, Wonder Woman has stood for nearly eighty years as a symbol of truth, justice and equality to people everywhere. Raised on the hidden island of Themyscira, also known as Paradise Island, Diana is an Amazon, like the figures of Greek legend, and her people's gift to humanity.            
                As Themyscira's emissary to Man's World, Diana has made it her duty to lead by example, even if the differences between her birthplace and new home sometimes present hurdles for her to jump. She has come to represent the possibility and potential of life without war, hate or violence, and she is a beacon of hope to all who find themselves in need. She stands as an equal among the most powerful Super Heroes, with a sense of purpose to protect the world from injustice in all forms.            
                Diana's job, however, is anything but easy. Constantly torn between her mission to promote peace and her need to fight back against the pervasive violence of her new home, Diana struggles to walk a line between her warrior strength and endless compassion each and every day.",
                "img
                " => "https://www.dccomics.com/sites/default/files/styles/character_thumb_160x160/public/Char_Profile_WonderWoman_20190116_5c3fc6aa51d0e3.49076914.jpg?itok=QQyjipgc",
                "sale_date" => "2015-09-18",
            ],
            [
                "title" => "GREEN LANTERN",
                "description" => "Test pilot Hal Jordan went from being a novelty, the first-ever human Green Lantern, to one of the most legendary Lanterns to ever wield a power ring.
                Hal Jordan’s life was changed twice by crashing aircraft. The first time was when he witnessed the death of his father, pilot Martin Jordan. The second was when, as an adult and trained pilot himself, he was summoned to the crashed wreckage of a spaceship belonging to an alien named Abin Sur. Abin explained that he was a member of the Green Lantern Corps, an organization of beings from across the cosmos, armed with power rings fueled by the green energy of all willpower in the universe. Upon his death, Abin entrusted his ring and duties as the Green Lantern of Earth’s space sector to Hal Jordan.            
                Hal’s life as a Green Lantern has not been easy. He’s had to fight not only enemies, but often friends, colleagues and loved ones. But despite the strain his Green Lantern identity has put on his life, Hal is an honest man who can operate without fear, and is always willing to protect those in need—whether alone, with the Corps or alongside the Justice League and Earth’s other Super Heroes. For Hal has sworn the oath of every Green Lantern—that no evil will escape his sight.",
                "img
                " => "https://www.dccomics.com/sites/default/files/styles/character_thumb_160x160/public/Char_Profile_GreenLantern_20200721_5f173ad01724e2.92436411.jpg?itok=S8RLrzrV",
                "sale_date" => "2015-09-18",
            ],
            [
                "title" => "THE FLASH",
                "description" => "Three men have held the title of 'The Fastest Man Alive'—Jay Garrick, Barry Allen and Wally West. Each of them redefined the word 'hero'.
    
                The mysterious power known as the Speed Force is an energy field that has, over the centuries, granted incredible powers of velocity to certain heroes. The most famous of these is the Flash, also known as the Fastest Man Alive. Ever since the days of World War II, there has been a man clad in red who can run at impossible speeds, using his power to save lives and defend those who cannot defend themselves. All between the ticks of a second.
                
                In the 1940s, college student Jay Garrick acquired his super-speed abilities in a random lab accident and became the first DC Super Hero to go by the name the Flash. Years later, Jay was succeeded by police scientist Barry Allen, until Barry’s former kid partner Wally West took up the mantle at a time when Barry was considered dead. But, when Barry returned, he became the Flash once again. All three generations of speedsters have been cornerstone members of both the Justice Society and Justice League.
                
                The Flash has mastery over not just speed, but time itself, and he has often used his powers to travel though different eras and even into other dimensions. Although the Flash has not always been fast enough to outrun personal tragedy when it has come for him, he always does his best to prevent the same from happening to the people of Central City and Keystone City. In so doing, he's earned himself a spot among the greatest Super Heroes the DC Universe has ever known.",
                "img
                " => "https://www.dccomics.com/sites/default/files/styles/character_thumb_160x160/public/Char_Profile_Flash_20190116_5c3fcaaa18f0e8.03668117.jpg?itok=wQUgUOI1",
                "sale_date" => "2012-03-13",
            ],
            [
                "title" => "SUPERMAN",
                "description" => "Faster than a speeding bullet, more powerful than a locomotive… The Man of Steel fights a never-ending battle for truth, justice, and the American way.
                From his blue uniform to his flowing red cape to the 'S' shield on his chest, Superman is one of the most immediately recognizable and beloved DC Super Heroes of all time. The Man of Steel is the ultimate symbol of truth, justice, and hope. He is the world's first Super Hero and a guiding light to all.            
                The tip of the spear in a revolution that would change the landscape of pop culture, Superman has spent the last eighty years redefining what it means to stand for truth, justice and the American way. The last survivor of the doomed planet Krypton, raised in the quiet heartland of Smallville, Kansas, Superman is as much a legend as he is a man: the gold standard of heroism, compassion and responsibility.            
                Though his powers make him god-like next to his human compatriots, Superman's story is not one of greed or conquest. Instead, he strives to represent the inherent goodness of the human spirit, and the capacity of every living thing to do right by their neighbors.",
                "img
                " => "https://www.dccomics.com/sites/default/files/styles/character_thumb_160x160/public/Char_Profile_Superman_20190116_5c3fc2758f6a12.25513240.jpg?itok=IqnLIx3M",
                "sale_date" => "2015-09-23",
            ],
        ];

        foreach ($characters as $character) {
            $new_character = new Character();
            $new_character->title = $character['title'];
            $new_character->description = $character['description'];
            $new_character->sale_date = $character['sale_date'];
            $new_character->save();
        }
    }
}
