<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = new Post();
        $posts->title = 'Blob';
        $posts->excerpt = 'The futuristic structure and spacious interior are an eye-catching addition to say the least, turning The Blob into a beacon in the city.';
        $posts->description = 'The futuristic structure and spacious interior are an eye-catching addition to say the least, turning The Blob into a beacon in the city. It has rapidly become a popular meeting spot for Eindhoven locals. The structure is 25 metres high, covered in glass and steel. It stands shoulder to shoulder with the Philips light tower, linking it to the Admirant.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'Berenkuil';
        $posts->excerpt = 'The Berenkuil (known officially as Insulindeplein) is a traffic circle in the Dutch city of Eindhoven, near the campus of the Eindhoven University of Technology';
        $posts->description = 'The Berenkuil (known officially as Insulindeplein) is a traffic circle in the Dutch city of Eindhoven, near the campus of the Eindhoven University of Technology. An outer circle for automotive traffic surrounds a second sunken circle for bicycles and motorscooters; ramps from the bicycle lanes along the nearby streets lead into the lower circle via four underpasses. This design for a traffic circle is one that is called a berenkuil (meaning bear pit) in the Netherlands.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'Van Abbemuseum';
        $posts->excerpt = 'Van Abbemuseum is a museum of modern and contemporary art located in central Eindhoven, Netherlands.';
        $posts->description = 'Van Abbemuseum is a museum of modern and contemporary art located in central Eindhoven, Netherlands, on the east bank of the Dommel river. Established in 1936, the Abbe Museum is named after its founder, Henri van Abbe. Van Abbe was a lover of modern art and wanted to enjoy it there from Eindhoven. As of 2010, the collection of the museum houses more than 2700 works of art, of which about 1000 are on paper, are 700 paintings, and 1000 are sculptures, installations and video work. With an area of 9,825 m2, monument number 507030, the museum holds one of the largest collections of paintings in the world by El Lissitzky. It also has works by Pablo Picasso and Wassily Kandinsky.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'Effenaar';
        $posts->excerpt = 'The Effenaar is a pop music venue in Eindhoven, Netherlands. It was founded in 1971 and has grown into one of the larger pop venues in the country.';
        $posts->description = 'The Effenaar is a pop music venue in Eindhoven, Netherlands. It was founded in 1971 and has grown into one of the larger pop venues in the country. The current Effenaar consists of two music halls. The large hall has an audience capacity of 1200, is intended for use by larger bands and acts and is considerably larger than the hall of the original Effenaar. The small hall has a capacity of 350 (which is smaller than the old Effenaar) and is used for smaller and/or regional bands.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'Strijp-S';
        $posts->excerpt = 'Strijp-S is a neighborhood and former industrial site in Eindhoven Strijp. The land belonged to electronics company Philips. From 2000, there are both homes and businesses located in the creative sector.';
        $posts->description = 'Strijp-S is a neighborhood and former industrial site in Eindhoven Strijp. The land belonged to electronics company Philips. From 2000, there are both homes and businesses located in the creative sector. The name Strijp-S comes from the names Philips gave to its industrial parks. Strijp-S was the first park, then followed Strijp-T and Strijp-R. A fourth industrial park would have been called Strijp-I, as the next letter in the name Strijp. The historical spelling is moreover Strijp S, without a hyphen. Today, however, we see mostly the spelling Strijp-S, with dash. The nearby train station has used this name since 2015';
        $posts->save();

        $posts = new Post();
        $posts->title = 'St. Catherines Church';
        $posts->excerpt = 'Attractive St. Catherines Church (St. Catharinakerk) was built in Neo-Gothic style in 1867. ';
        $posts->description = 'Attractive St. Catherines Church (St. Catharinakerk) was built in Neo-Gothic style in 1867. The original building - dedicated to St. Catherine of Alexandria - was consecrated in the 13th century and was many times severely damaged by war and fire, even spending part of the 18th-century as a stables and weapons store. The current structure incorporates a number of symbolic references to the work of Joseph Thijm, one of the countrys best-known writers. Highlights include its twin French Gothic towers, each 73 meters tall and known respectively as David and Maria. Interior highlights include its stained glass windows and its two organs, one of them boasting 5,723 pipes.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'The Philips Museum';
        $posts->excerpt = 'Housed near the factory where Gerard Philips made his first incandescent light bulbs in the 1890s, the Philips Museum shows how this once small enterprise has grown to become one of the worlds largest electronics companies. ';
        $posts->description = 'Housed near the factory where Gerard Philips made his first incandescent light bulbs in the 1890s, the Philips Museum shows how this once small enterprise has grown to become one of the worlds largest electronics companies. A visit to the ultra-modern Philips Museum gives visitors an excellent overview of the company\'s success, as well as the workings of its most memorable products. One of the museum\'s most popular features is Mission Eureka, a fun interactive game involving digital quizzes and puzzles.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'The Eindhoven Museum';
        $posts->excerpt = 'The Eindhoven Museum is a fun open-air facility with a focus on life during the Iron and Middle Ages in North Brabant (Noord Brabant), the second largest of the Dutch provinces. ';
        $posts->description = 'The Eindhoven Museum is a fun open-air facility with a focus on life during the Iron and Middle Ages in North Brabant (Noord Brabant), the second largest of the Dutch provinces. Agriculture was once the main livelihood in the province before the textile, electrical, and metalworking industries blossomed after 1900. As a result, most of the settlements in the province were small hamlets and villages with farms growing crops such as rye, potatoes, oats, and fodder plants for dairy cattle. With an emphasis on the everyday lives and routines of the people, the museum traces this rich history and features demonstrations of centuries-old customs and skills by costumed staff, including baking, cooking, and blacksmithing, as well as authentic recreations of period buildings and structures.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'The PSV Eindhoven Museum';
        $posts->excerpt = 'Calling Eindhoven football-obsessed is an understatement. But such claims seem reasonable when you are home to Philips Sport Vereniging (PSV), one of the most successful football (soccer) franchises in Europe.';
        $posts->description = 'Calling Eindhoven football-obsessed is an understatement. But such claims seem reasonable when you are home to Philips Sport Vereniging (PSV), one of the most successful football (soccer) franchises in Europe. And with the club having celebrated its 100th anniversary in 2014, there is plenty of history on display at the PSV Eindhoven Museum, from historic outfits to photos and film footage of career highlights. Guided tours of the teams Philips Stadium are also available and include packages that take in team practices so you can see the players in action.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'The Evoluon';
        $posts->excerpt = 'The Evoluon is a conference centre and former science museum erected by the electronics and electrical company Philips at Eindhoven in the Netherlands in 1966. Since its construction, it has become a landmark and a symbol for the city. ';
        $posts->description = 'The Evoluon is a conference centre and former science museum erected by the electronics and electrical company Philips at Eindhoven in the Netherlands in 1966. Since its construction, it has become a landmark and a symbol for the city. The building is unique due to its very futuristic design, resembling a landed flying saucer. It was designed by architects Leo de Bever and Louis Christiaan Kalff,[1] while the exhibition it housed was conceived by James Gardner. De Bever and Kalff only got two demands for the design of the building, it had to be "spectacular" and it had to be possible to hold exhibitions in the building.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'Stadswandelpark';
        $posts->excerpt = 'Located just south of the city centre, the Stadswandelpark, or city stroll park, is just that: an escape into nature within walking distance of Markt.';
        $posts->description = 'Located just south of the city centre, the Stadswandelpark, or city stroll park, is just that: an escape into nature within walking distance of Markt. The park is perfect for a stroll when the weather is nice, and is home to several modern sculptures, as well as a small playground for children. The Dommel river runs through it, forming a pond at one point that is popular with locals';
        $posts->save();

        $posts = new Post();
        $posts->title = 'Stratumseind';
        $posts->excerpt = 'The longest pub street in the Netherlands with more than 50 bars and clubs.';
        $posts->description = 'The longest pub street in the Netherlands. With more than 50 bars and clubs, the street attracts a young crowd thats up for anything. You can find anything from salsa to rock and roll, a lot of dance & techno, and (Dutch) party music. Thursday, Friday and Saturday nights turn this street into a party that lasts until 4:00 AM. Walking up and down the street looking for the perfect spot is half the fun, explore the different bars and clubs and you will not be disappointed.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'PopEI';
        $posts->excerpt = 'PopEI is the number one spot for music lovers. Located in the Klokgebouw, the centre caters to both those who like to play music and those who like to listen to it. ';
        $posts->description = 'PopEI is the number one spot for music lovers. Located in the Klokgebouw, the centre caters to both those who like to play music and those who like to listen to it. Up and coming musicians of all levels and genres can visit PopEI to rehearse, record and perform. The in-house experts also offer music lessons, coaching and advice. Concert aficionados can look forward to a unique agenda featuring a variety of bands, music styles and themes on a weekly basis. You can also enjoy a meal in the quirky bar or a drink in the laid-back seating area outside.';
        $posts->save();

        $posts = new Post();
        $posts->title = 'Galerie Nasty Alice';
        $posts->excerpt = 'Inspired by the words of Lewis Carroll in his book Alice in Wonderland, Galerie Nasty Alice brings “a land full of wonder, mystery and danger” to the Eindhoven city centre.';
        $posts->description = 'Inspired by the words of Lewis Carroll in his book Alice in Wonderland, Galerie Nasty Alice brings “a land full of wonder, mystery and danger” to the Eindhoven city centre. The gallery ensures an eye-opening, refreshingly honest view of the human experience. Ceramics and artwork produced by young, forward-thinking artists from both the Netherlands and abroad push the boundaries of modern art by both shocking and inspiring their audience at the same time. Visitors can look forward to a new exhibition based on a different theme every 7 weeks.';
        $posts->save();

    }
}
