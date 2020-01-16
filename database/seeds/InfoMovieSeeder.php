<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('info_movie')->insert([
            'movie_id' => 1,
            'info_movie' => "Año 2154. Jake Sully, un ex-marine condenado a vivir en una silla de ruedas, sigue siendo un auténtico guerrero. Por ello ha sido designado para ir a Pandora, donde algunas empresas están extrayendo un mineral extraño que podría resolver la crisis energética de la Tierra. Para contrarrestar la toxicidad de la atmósfera de Pandora, se ha creado el programa Avatar, gracias al cual los seres humanos mantienen sus conciencias unidas a un avatar: un cuerpo biológico controlado de forma remota que puede sobrevivir en el aire letal. Esos cuerpos han sido creados con ADN humano mezclado con ADN de los nativos de Pandora, los Na'vi. Convertido en avatar, Jake puede caminar otra vez. Su misión consiste en infiltrarse entre los Na'vi, que se han convertido en el mayor obstáculo para la extracción del mineral. Pero cuando Neytiri, una bella Na'vi, salva la vida de Jake, todo cambia: Jake, tras superar ciertas pruebas, es admitido en su clan."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 2,
            'info_movie' => "Durante las labores de recuperación de los restos del famoso trasatlántico Titanic, una anciana norteamericana se pone en contacto con la expedición para acudir a una plataforma flotante instalada en el Mar del Norte y asistir in situ a la recuperación de sus recuerdos. A través de su memoria reviviremos los acontecimientos que marcaron el siniestro más famoso del siglo XX: el hundimiento del trasatlántico más lujoso del mundo, la máquina más sofisticada de su tiempo, considerada «insumergible», que sucumbió a las heladas aguas del Atlántico en abril de 1912, llevándose consigo la vida de 1.500 personas, más de la mitad del pasaje. En los recueros de la anciana hay cabida para algo más que la tragedia, la historia de amor que vivió con un joven pasajero de tercera clase, un pintor aficionado que había ganado su pasaje al ganar a las cartas en una taberna de Southampton."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 3,
            'info_movie' => "Luke Skywalker y la princesa Leia deben viajar a Tatooine para liberar a Han Solo. Para conseguirlo, deben infiltrarse en la peligrosa guarida de Jabba the Hutt, el gángster más temido de la galaxia. Una vez reunidos, el equipo recluta a tribus de Ewoks para combatir a las fuerzas imperiales en los bosques de la luna de Endor. Mientras tanto, el Emperador y Darth Vader conspiran para convertir a Luke al lado oscuro, pero el joven Skywalker, por su parte, está decidido a reavivar el espíritu del Jedi en su padre. La guerra civil galáctica culmina en un último enfrentamiento entre las fuerzas rebeldes unificadas y una segunda Estrella de la Muerte, indefensa e incompleta, en una batalla que decidirá el destino de la galaxia."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 4,
            'info_movie' => "Treinta años después de la victoria de la Alianza Rebelde sobre la segunda Estrella de la Muerte (hechos narrados en el Episodio VI: El retorno del Jedi), la galaxia está todavía en guerra. Una nueva República se ha constituido, pero una siniestra organización, la Primera Orden, ha resurgido de las cenizas del Imperio Galáctico. A los héroes de antaño, que luchan ahora en la Resistencia, se suman nuevos héroes: Poe Dameron, un piloto de caza, Finn, un desertor de la Primera Orden, Rey, una joven chatarrera, y BB-8, un androide rodante. Todos ellos luchan contra las fuerzas del Mal: el Capitán Phasma, de la Primera Orden, y Kylo Ren, un temible y misterioso personaje que empuña un sable de luz roja"
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 5,
            'info_movie' => "El multimillonario John Hammond consigue hacer realidad su sueño de clonar dinosaurios del Jurásico y crear con ellos un parque temático en una isla remota. Antes de abrirlo al público, invita a una pareja de eminentes científicos y a un matemático para que comprueben la viabilidad del proyecto. Pero las medidas de seguridad del parque no prevén el instinto de supervivencia de la madre naturaleza ni la codicia humana."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 6,
            'info_movie' => "La segunda parte de la batalla final entre las fuerzas del bien y el mal. El juego nunca ha sido tan peligroso y nadie está a salvo. Se acerca el momento de la confrontación final entre Harry Potter y Lord Voldemort. Todo termina aquí…"
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 7,
            'info_movie' => "En esta tercera entrega de la saga Transformers, los Autobots y los Decepticons se ven envueltos en una peligrosa carrera espacial en la Tierra entre los EE.UU. y Rusia, donde un acontecimiento amenaza con provocar una guerra tan grande que ni los propios transformers puede que sean capaces de salvar nuestro planeta. Y una vez más, como casi siempre, Sam Witwicky se encuentra involuntariamente en medio del conflicto."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 8,
            'info_movie' => "Harry Potter es un huérfano que vive con sus desagradables tíos, los Dursley, y su repelente primo Dudley. Se acerca su undécimo cumpleaños y tiene pocas esperanzas de recibir algún regalo, ya que nunca nadie se acuerda de él. Sin embargo, pocos días antes de su cumpleaños, una serie de misteriosas cartas dirigidas a él y escritas con una estridente tinta verde rompen la monotonía de su vida: Harry es un mago y sus padres también lo eran."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 9,
            'info_movie' => "Harry regresa a su segundo año a Hogwarts, pero descubre que cosas malas ocurren debido a que un sitio llamado la Cámara de los Secretos ha sido abierto por el heredero de Slytherin y hará que los hijos de muggles, los impuros, aparezcan petrificados misteriosamente por un animal monstruoso."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 10,
            'info_movie' => "Un remake del clásico animado de Disney de 1994 'El rey león' que estará dirigido por Jon Favreu. Simba (Donald Glover) es el hijo del rey de los leones, Mufasa, y heredero de todo el reino. Pero cuando su padre es brutalmente asesinado por su tío Scar, decidirá huir, dejando vía libre para que su tío tome el puesto de su padre como líder de la manada. En su camino, Simba se encuentra con el suricato Timón y el jabalí Pumba, que le enseñarán a vivir la vida sin preocupaciones. Pero el joven león se verá obligado a decidir entre su vida libre de problemas o su destino como rey."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 11,
            'info_movie' => "Alicia, ahora una joven de 19 años de edad, regresa al País de las Maravillas para encontrar su verdadero destino y terminar con el gobierno de terror de la malvada reina Roja."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 12,
            'info_movie' => "Nemo, un pececillo, hijo único muy querido y protegido por su padre, ha sido capturado en un arrecife australiano y ahora vive en una pecera en la oficina de un dentista de Sidney. El tímido padre de Nemo se embarcará en una peligrosa aventura para rescatar a su hijo. Pero Nemo y sus nuevos amigos tienen también un astuto plan para escapar de la pecera y volver al mar."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 13,
            'info_movie' => "Los juguetes de Andy, un niño de 6 años, temen que haya llegado su hora y que un nuevo regalo de cumpleaños les sustituya en el corazón de su dueño. Woody, un vaquero que ha sido hasta ahora el juguete favorito de Andy, trata de tranquilizarlos hasta que aparece Buzz Lightyear, un héroe espacial dotado de todo tipo de avances tecnológicos. Woody es relegado a un segundo plano. Su constante rivalidad se transformará en una gran amistad cuando ambos se pierden en la ciudad sin saber cómo volver a casa."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 14,
            'info_movie' => "Cuando Andy se va de campamento dejando solos a los juguetes, Al McWhiggin, un compulsivo coleccionista de juguetes valiosos, secuestra a Woody. Buzz Lightyear y el resto de los juguetes de Andy deberán actuar con rapidez para rescatarlo, poniéndose al frente de una operación de rescate durante la cual se enfrentarán a múltiples peligros y divertidas situaciones."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 15,
            'info_movie' => "En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo, en la Toscana, con la intención de abrir una librería. Allí conoce a la encantadora Dora y, a pesar de que es la prometida del fascista Rodolfo, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido hará lo imposible para hacer creer a su hijo que la terrible situación que están padeciendo es tan sólo un juego."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 16,
            'info_movie' => "Después del reciente divorcio de sus padres, Kevin decide pasar la Navidad en casa de Natalie, la nueva novia de su padre, una casa equipada con la más moderna tecnología. Con la ayuda de esta tecnología y haciendo uso de su habitual ingenio, Kevin deberá hacer frente a unos ladrones, además de intentar conseguir que sus progenitores se reconcilien. Nueva entrega de la popular saga de Solo en casa, que en esta ocasión, y tras perder progresivamente calidad y taquilla en las anteriores, ya se hizo directamente para la televisión y el mercado de video."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 17,
            'info_movie' => "Riley es una chica que disfruta o padece toda clase de sentimientos. Aunque su vida ha estado marcada por la Alegría, también se ve afectada por otro tipo de emociones. Lo que Riley no entiende muy bien es por qué motivo tiene que existir la Tristeza en su vida. Una serie de acontecimientos hacen que Alegría y Tristeza se mezclen en una peligrosa aventura que dará un vuelco al mundo de Riley."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 18,
            'info_movie' => "Dos legítimos corredores de distinta clase social, Harold Abrahams (Ben Cross) y Eric Liddell (Ian Charleson), se entrenan con un mismo objetivo: competir en los Juegos Olímpicos de París 1924.
            Eric es un cristiano evangélico de la iglesia reformada de Escocia y sus padres son misioneros en China. Ha nacido en China pero ha vuelto a Escocia para estudiar, y ha llegado a ser un famoso jugador de rugby. Su fama como deportista excepcional más su simpática personalidad y su desenvolvimiento como un predicador del evangelio en contacto con la gente hacen de Eric un personaje de excepcional talla: famoso pero humilde, conocido por todos pero también accesible a todos, querido por los niños y por los grandes..."
        ]);
        DB::table('info_movie')->insert([
            'movie_id' => 19,
            'info_movie' => "Josh Baskin tiene trece años pero, cansado de que las chicas no le hagan caso y de que sus padres le traten como a un niño, desea ser mayor. Una noche, encuentra, en una feria, una vieja máquina que concede un deseo a cambio de una moneda. Josh, sin dudarlo un instante, pide hacerse mayor. A la mañana siguiente, descubre en el espejo un cuerpo de adulto. La otra cara de la moneda serán los problemas y responsabilidades que debe asumir sin ninguna experiencia previa."
            ]);
        DB::table('info_movie')->insert([
            'movie_id' => 20,
            'info_movie' => "Sam Dawson (Sean Penn) es un deficiente mental que deberá luchar por conservar la custodia de su pequeña hija, ya que el Estado considera que no está capacitado para hacerse cargo de su educación. De su defensa se encargará una prestigiosa abogada, Rita Harrison (Michelle Pfeiffer), cuyo desinterés y frialdad inicial cambiarán tras conocer a Sam, descubrir el amor que siente por su hija y comprobar su determinación por defender sus derechos como padre."
        ]);
            DB::table('info_movie')->insert([
            'movie_id' => 21,
            'info_movie' => "Drácula regenta un hotel en el que se alojan personajes como Frankenstein, la Momia, el Hombre Invisible, hombres-lobo... El problema del conde es que tiene una hija de espíritu aventurero a la que le resulta difícil controlar. El conflicto surge cuando se aloja en el hotel un ser humano que se siente atraído por la hija del dueño."
        ]);
    }
}
