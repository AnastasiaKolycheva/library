<?php

use yii\db\Migration;

class m170318_211134_pers extends Migration
{
    public function up()
    {
      $this->Insert('{{%personality}}',[
        'pers_name' => 'Федор',
        'pers_secondname' => 'Михайлович',
        'pers_lastname' => 'Достоевский',
        'biography' => 'Федор Михайлович Достоевский, великий русский мыслитель и писатель, родился в Москве 30 октября 1821 года в семье врача Мариинской больницы для бедных. Учился вместе с братом Михаилом в частном пансионе, увлекался произведениями Шиллера. В 16 лет Федор потерял мать, а вскоре и отца. Финансовые проблемы воспрепятствовали поступлению в Московский университет на гуманитарное отделение, и Достоевский был вынужден отдать предпочтение более практической специальности. В 1838 году он поступил в Петербургское Главное военно-инженерное училище, которое успешно закончил в 1843.

Творческий путь писатель начал в 1846 году опубликованием повести "Бедные люди", где талантливо изобразил трагедию маленького человека. Повесть была одобрительно встречена В.Белинским и Н.Некрасовым и принесла автору известность. Вскоре список книг пополнился произведениями в различных жанрах: психологической повестью "Двойник", фантастической - "Хозяйка", драматической - "Hеточка Hезванова" и лирической - "Белые ночи". Прообразом героя романа "Бесы" Николая Ставрогина стал М. Cлесинев, организатор кружка петрашевцев. За связь с участниками кружка Достоевский в 1849 году был арестован, провел 8 месяцев в Петропавловской крепости и приговорен к смертной казни. Казнь была отменена по высочайшему распоряжению, но те 10 минут, которые писатель провел на плацу в ожидании смерти произвели на него глубокое впечатление и нашли отображение в написанном позже романе "Идиот". После возвращения с каторги в 1859 году Достоевский продолжает литературное творчество, сборник книг талантливого автора пополнился произведениями "Село Степанчиковo и его обитатели" и "Дядюшкин сон". В тот же период был написан первый роман серии книг "Униженные и оскорбленные". В книге "Записки из мертвого дома", имевшей огромный успех, он описал время, которое провел на каторге. Роман "Преступление и наказание", получивший мировую известность, начал печататься в "Русском вестнике" с января 1866 года. Последний роман "Братья Карамазовы" так и остался незаконченным. Ф.М.Достоевский скончался 9 февраля 1881 года, похоронен на Тихвинском кладбище в Александро-Невской Лавре.'
      ]);
      $this->Insert('{{%personality}}',[
        'pers_name' => 'Михаил',
        'pers_secondname' => 'Афанасьевич',
        'pers_lastname' => 'Булгаков',
        'biography' => 'Михаил Афанасьевич Булгаков (май 1891 - март 1940) - русский писатель, театральный режиссер и драматург, автор множества повестей, рассказов, пьес, оперных либретто и киносценариев. Родился в семье Булгакова Афанасия Ивановича, профессора Киевской Духовной Академии и Булгаковой (в девичестве Покровской) Варвары Михайловны. Будущий писатель после окончания гимназии в 1909 году поступил в Киевский университет на медицинский факультет, пойдя по стопам своих дядей, родных братьев матери. В 1916 году получил диплом, свидетельствующий о высшем медицинском образовании. Во время Первой мировой войны несколько месяцев работал в прифронтовой зоне в качестве врача. В декабре 1917 года приезжал по делам в Москву и останавливался у дяди, известного врача H.М.Покровского, впоследствии ставшего прообразом профессора Преображенского в гениальной повести "Собачье сердце". Весной 1918 года Булгаков возвратился в Киев и начал частную практику в качестве врача-венеролога. В период гражданской войны успел поработать военным врачом и у белых, и у красных.
Позже Михаил Булгаков переехал в Москву, печатал фельетоны в газетах "Рабочий" и "Гудок", а также в журналах "Возрождение", "Россия" и "Медицинский работник". В 1925 году вышли два сборника книг Булгакова - "Роковые яйца" и "Дьяволиадa". С 1926 года с большим успехом во MXATe несколько раз ставилась пьеса "Дни Турбиныx", понравившаяся Сталину. Несмотря на то, что в советской прессе творчество Булгакова подвергалось резкой критике, его произведения пользовались огромным успехом среди читателей. Во время путешествия по Кавказу в 1928 году у Булгакова возник замысел романа "Мастер и Маргарита", над которым писатель работал до самой смерти. Эта главная его работа так и осталась завершенной не до конца. Умер Булгаков от болезни почек в 1940 году, похоронен на Новодевичьем кладбище.'
      ]);
     
      $this->Insert('{{%personality}}',[
        'pers_name' => 'Джон',
        'pers_secondname' => 'Рональд Ройл',
        'pers_lastname' => 'Толкин',
        'biography' => 'Родился 3 января 1892 года в Блумфонтейне (Южная Африка) в семье переселенцев из Германии; отсюда - несколько необычное третье имя "Ройл" (а вовсе не Руэл, как повелось у нас с чьей-то легкой руки). Окончил Оксфордский университет. Принимал участие в Первой мировой войне. В 1925 году возвратился в Оксфорд и проработал там до выхода на пенсию (1959). Как ученый известен прежде всего комментированным изданием англосаксонской эпической поэмы "Беовульф", переводами на современный английский язык средневековых рыцарских романов (в частности, "Сэр Гавейн и Зеленый Рыцарь", 1925), а также эссе "О волшебных историях" (1947), в которой изложил и обосновал собственную концепцию мифопоэтики. Толкиен был одним из "отцов-основателей" литературного клуба "The Inklings", в членах которого состояли, в частности, Клайв С. Льюис, Чарлз Уильямс, Оуэн Барфилд. Первая художественная публикация - стихотворение "Битва на восточной равнине" (март 1911 года). Слава к Толкиену-писателю пришла после выхода в свет трилогии "Властелин Колец", которая только с 1954 по 1966 год выдержала пятнадцать изданий, как в Англии, так и в Соединенных Штатах. Скончался Джон Р. Р. Толкиен 2 сентября 1973 года.
Лауреат премий: 
Locus Poll Award 1978, 1987,
Ditmar Award 1978,
Gandalf Award 1974, 1978,
Balrog Award 1981, 1979,
International Fantasy Award 1957,
Mythopoeic Award 1981.'

      ]);
      $this->Insert('{{%personality}}',[
        'pers_name' => 'Рэй',
        'pers_secondname' => 'Дуглас',
        'pers_lastname' => 'Брэдбери',
        'biography' => 'Один Из Ведущих Американских Прозаиков, Классик Фантастической Литературы Хх Столетия.
Родился в Уокигане (штат Иллинойс). Высшего образования не получил. С 1943 г. - профессиональный писатель.

Первая публикация - рассказ "Pendulum" (1941 - в соавт. с Генри Хассе). Дебютный сборник "Dark Carnival" опубликовал в 1947 году.

После выхода в 1950 году сборника связанных новелл "Марсианские хроники" ("The Martian Chronicles") получил широкую известность, которую закрепил последующими книгами.

Практически каждая книга Брэдбери становилась явлением в современной литературе, будь то "451 по Фаренгейту", "Вино из одуванчиков", "Что-то страшное грядет" или "Смерть - удел одиноких".

Почетный доктор литературы колледжа Уиттьер (штат Калифорния). Лауреат премий Бенджамина Франклина, премии Американской академии, премии Энн Радклифф, премии "Гэндальф". В 1988 году удостоен титула "Гранд-мастер", год спустя получил премию Брэма Стокера "за достижения всей жизни".'
      ]);

    }

    public function down()
    {
        echo "m170318_211134_pers cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
