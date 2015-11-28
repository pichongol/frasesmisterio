<?
//	'app_id' => '514107348744811',
//	'app_secret' => '144461c7aeff0cb25b822f0db842d450',

$testList = ["perfecta","navidad","dios","horoscopo","secretos","depara","nombrenumero","destinos","mentales","biblico","sabios","bola", "angel", "numerologia", "sexy", "espejito", "amor", "poema", "sientes", "aura", "ojo", "busca", "google", "persona", "amigos", "diosito",
		  "avengers", "emocion", "emoticon", "whatsapp", "tequiero", "wikipedia", "opinan", "nacimiento", "significado", 
		  "lapida", "secreto", "mujer", "compatible", "edad", "talento", "rayos", "embarazo"
];

$perfecta = array(
	"type" => "random",
	"title" => "Tu pareja 2016",
	"meta_desc" => "Descubre tu pareja perfecta para el 2016!",
	"question" => "Tu pareja 2016",
	"init" => "Click en iniciar y conoce tu pareja para este 2016",
	"results_msg" => "Generando tu pareja mas compatible",
	"share_msg" => "Haz el test y conoce quien es tu pareja mas compatible e incompatible",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/perfecta/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "Compatible: C - Incompatible: K",
			"desc" => "Este 2015 la inicial de tu pareja perfecta es C, es con quien conseguiras una mayor compatibilidad. La letra K es con quien conseguiras la menor compatibilidad, cuidado con eso."
		),
		2 => array(
			"title" => "Compatible: J - Incompatible: M",
			"desc" => "Tu pareja perfecta inicia con J. Deberas cuidarla y protegerla, es tu mejor partido! Cuidado con la letra M, son totalmente incompatibles."
		),
		3 => array(
			"title" => "Compatible: M - Incompatible: E",
			"desc" => "No te alejes de esa persona, tu mayor compatibilidad es con la inicial \"M\". La peor opcion para ser tu pareja es la inicial \"E\", manten distancia alli."
		),
		4 => array(
			"title" => "Compatible: S - Incompatible: N",
			"desc" => "Tu mayor compatibilidad es con la inicial \"S\", cuidado con despreocuparte, o puedes perder esta persona. Incompatibilidad con \"N\", es probable que no funcione del todo bien."
		),
		5 => array(
			"title" => "Compatible: A - Incompatible: R",
			"desc" => "Eres una persona muy afortunada! Son pocos los que tienen la suerte de concebir cuatrillizos! Sera una gran responsabilidad, a armarse de valor!"
		),
		6 => array(
			"title" => "Compatible: R - Incompatible: J",
			"desc" => "Como en todo, no sera facil, pero si que vale la pena formar una relacion con esa persona. La mayor compatibilidad que tienes es con \"R\". Incompatible con \"J\", pon ojo a esto."
		),
	)
);

$embarazo = array(
	"type" => "multiplechoise",
	"title" => " Test de embarazo ",
	"question" => " Test de embarazo ",
	"meta_desc" => "Estas embarazada? Descubrelo con este infalibre Test!",
	"init" => " Responde las preguntas y conoce si estas esperando bebe",
	"results_msg" => "Generando tu ECOGRAFIA y Test de embarazo",
	"share_msg" => "Haz el test y conoce quien es tu pareja mas compatible e incompatible",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/embarazo/?fbTrue=true',
	"questions" => array(
		1 => array(
			"title" => "Cual es tu edad?",
			"options" => array(
				array(
					"desc" => "Entre 13 y 16",
				),
				array(
					"desc" => "Entre 17 y 20",
				),
				array(
					"desc" => "Entre 21 y 30",
				),
				array(
					"desc" => "31 o mas",
				),
			)
		),
		2 => array(
			"title" => "Has tenido mareos?",
			"options" => array(
				array(
					"desc" => " Si, leves al levantarme de la cama",
				),
				array(
					"desc" => " Si, aveces durante el dia",
				),
				array(
					"desc" => " Si, al realizar algun tipo de ejercicio",
				),
				array(
					"desc" => " No",
				),
			)
		),
		3 => array(
			"title" => "Si escuchas la palabra \"BEBE\" en que piensas?",
			"options" => array(
				array(
					"desc" => " En una linda y tierna criatura",
				),
				array(
					"desc" => " En responsabilidades, en trabajo y llantos",
				),
				array(
					"desc" => " En un hijo",
				),
				array(
					"desc" => " No me gustan los bebes",
				),
			)
		),
		4 => array(
			"title" => "Has sentido antojos?",
			"options" => array(
				array(
					"desc" => " Si, todas las noches",
				),
				array(
					"desc" => " Aveces he sentido antojos",
				),
				array(
					"desc" => " No, no tengo antojos",
				),
			)
		),
		5 => array(
			"title" => "Tienes pareja?",
			"options" => array(
				array(
					"desc" => " Si, hace mas de 6 meses",
					"value" => 2
				),
				array(
					"desc" => " Si, hace mas de 12 meses",
					"value" => 5
				),
				array(
					"desc" => " Si, hace mas de 2 a&ntilde;os",
					"value" => 4
				),
				array(
					"desc" => " Si, pero todavia nada serio",
					"value" => 1
				),
				array(
					"desc" => " No, hace poco tiempo termine",
					"value" => 2
				),
				array(
					"desc" => " No, hace mucho tiempo no tengo",
					"value" => 3
				),
				array(
					"desc" => " No, jamas he tenido pareja",
					"value" => 3
				),
			)
		),
	),
	"results" => array(
		1 => array(
			"title" => "POSITIVO: Estas esperando gemelos",
			"desc" => "Felicidades! Estas esperando dos hijos, una linda pareja de gemelos, tendras que tener mucha paciencia y cuidado con tus hijos."
		),
		2 => array(
			"title" => " POSITIVO: Estas esperando un hijo",
			"desc" => "Felicitaciones! Tu test ha sido positivo y dentro de unos meses entras un lindo bebe varon que amaras con todo el corazon."
		),
		3 => array(
			"title" => "NEGATIVO",
			"desc" => "Tu test ha sido Negativo, no estas esperando bebes, solo tienes mariposas en el estomago, parece que alguien las esta provocando <3"
		),
		4 => array(
			"title" => "POSITIVO: Trillizos",
			"desc" => "La ecografia muestra claramente tres hermosos bebes! Felicidades, eres la responsable de que estas lindas criaturas crezcan grandes y fuertes! Sera una hermosa familia."
		),
		5 => array(
			"title" => " POSITIVO: Cuatrillizos",
			"desc" => "Eres una persona muy afortunada! Son pocos los que tienen la suerte de concebir cuatrillizos! Sera una gran responsabilidad, a armarse de valor!"
		),
	),
);

$rayos = array(
	"type" => "multiplechoise",
	"title" => "Examen Rayos X",
	"question" => "Que hay en tu cerebro?",
	"meta_desc" => "Descubre que hay en tu cerebro con este magnifico test!",
	"init" => " Responde las preguntas y conoce el primer examen de Rayos X en linea...",
	"results_msg" => " Los Rayos X estan analizando tu cerebro, momento...",
	"share_msg" => "Descubre que es lo que hay en tu cerebro con este examen en linea",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/rayos/?fbTrue=true',
	"questions" => array(
		1 => array(
			"title" => "Cual es tu edad?",
			"options" => array(
				array(
					"desc" => "Entre 10 y 14",
				),
				array(
					"desc" => "Entre 15 y 20",
				),
				array(
					"desc" => "Entre 21 y 30",
				),
				array(
					"desc" => "31 o mas",
				),
			)
		),
		2 => array(
			"title" => "Eres una persona fumadora? ",
			"options" => array(
				array(
					"desc" => " Ocasionalmente con amigos",
				),
				array(
					"desc" => " Solo lo he probado",
				),
				array(
					"desc" => " Jamas fume",
				),
			)
		),
		3 => array(
			"title" => "Cuando tienes sed, que prefieres beber?",
			"options" => array(
				array(
					"desc" => " Jugos naturales de fruta",
				),
				array(
					"desc" => " Agua",
				),
				array(
					"desc" => " Bebidas Gaseosas",
				),
				array(
					"desc" => " Puedo soportar la sed, no bebo muchos liquidos",
				),
			)
		),
		4 => array(
			"title" => "Selecciona que es lo que generalmente comes",
			"options" => array(
				array(
					"desc" => " Frutas y verduras",
				),
				array(
					"desc" => " Hamburguesas",
				),
				array(
					"desc" => " Frituras",
				),
				array(
					"desc" => " Arroz o Pastas",
				),
			)
		),
		5 => array(
			"title" => "Cada cuanto tiempo haces deporte?",
			"options" => array(
				array(
					"desc" => " Todas las semanas",
					"value" => 2
				),
				array(
					"desc" => " Algunas veces en el mes",
					"value" => 5
				),
				array(
					"desc" => " Algunas veces al a&oacute;o",
					"value" => 4
				),
				array(
					"desc" => " El deporte no es para mi",
					"value" => 1
				),
			)
		),
	),
	"results" => array(
		1 => array(
			"title" => " Fidelidad, sinceridad, paz",
			"desc" => "Eres una persona de mente muy pacifica y tranquila en ocasiones, asi tambien tu sinceridad y honestidad son de gran importancia para ti y asi lo demuestras. Buscas la paz y tranquilidad antes que las grandes responsabilidades."
		),
		2 => array(
			"title" => " Fiestas, diversion, amigos.",
			"desc" => "Eres una mente libre, das gran importancia a disfrutar la vida, te gusta estar siempre feliz ojala junto a amigos o amigas, odias los momentos aburridos. Eres muy sociable, una linda persona."
		),
		3 => array(
			"title" => " Seduccion, imaginacion",
			"desc" => "Tienes una gran capacidad en tu mente de provocar la atracci&oacute;n de las personas. Eres sensualmente interesante y eso a los demas les gusta."
		),
		4 => array(
			"title" => " Amor, belleza, perfeccion",
			"desc" => "Eres una persona enamoradiza, en tu mente hay mucho amor, belleza es lo que mas se marca en ti, lo que atrae a muchas conquistas, pero debes ser tu quien da el primer paso."
		),
		5 => array(
			"title" => " Alegria, amigos",
			"desc" => "Alegria y felicidad se refleja en tu mente, te mantienes siempre con una sonrisa aun en malos momentos, tus amigos son importante para ti, pero solo los verdaderos amigos. Eres un gran so単ador y logras cumplir tus grandes metas en la vida."
		),
		6 => array(
			"title" => " Inteligencia, felicidad, habilidad",
			"desc" => "Inteligencia es lo que mas se destaca en tu mente, tienes grandes habilidades en todos los ambitos, y sabes aprovecharlos muy bien. Felicidad es tu segundo nombre, eres una persona muy alegre."
		),
	),
);

$talento = array(
	"type" => "multiplechoise",
	"title" => "Tu mejor talento",
	"question" => " Cual es tu mejor talento? ",
	"meta_desc" => " Responde las preguntas y conoce tu talento...",
	"init" => " Responde las preguntas y conoce tu talento...",
	"results_msg" => " Estamos analizandote, momento...",
	"share_msg" => "Conoce cual es tu talento ahora!",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/talento/?fbTrue=true',
	"questions" => array(
		1 => array(
			"title" => " Selecciona tu actividad favorita ",
			"options" => array(
				array(
					"desc" => " Comer, me encanta comer!",
				),
				array(
					"desc" => " Salir de paseo (playa, parque o donde sea)",
				),
				array(
					"desc" => " Salir con mi novia",
				),
				array(
					"desc" => " Audifonos, musica y adios mundo!",
				),
			)
		),
		2 => array(
			"title" => " Cuantos mejores amigos tienes? ",
			"options" => array(
				array(
					"desc" => " 1 mejor amigo! no necesito mas",
				),
				array(
					"desc" => " 2 mejores amigos!",
				),
				array(
					"desc" => " 3 mejores amigos!",
				),
				array(
					"desc" => " 4 mejores amigos!",
				),
				array(
					"desc" => " 5 o mas mejores amigos!",
				),
			)
		),
		3 => array(
			"title" => " Has sido infiel alguna vez?",
			"options" => array(
				array(
					"desc" => " 1 vez, nunca mas",
				),
				array(
					"desc" => " 2 o mas veces",
				),
				array(
					"desc" => " Jamas lo haria!",
				),
				array(
					"desc" => " Nunca pero mas adelante quien sabe",
				),
			)
		),
		4 => array(
			"title" => " Si te piden guardar un secreto, que haces?",
			"options" => array(
				array(
					"desc" => " Se lo cuento a mi mejor amigo",
				),
				array(
					"desc" => " Se lo cuento a mis padres",
				),
				array(
					"desc" => " No lo contare jamas!",
				),
				array(
					"desc" => " Se lo cuento a todo mundo",
				),
			)
		),
		5 => array(
			"title" => " Selecciona la alternativa que mejor te describe",
			"options" => array(
				array(
					"desc" => " Fiel",
					"value" => 12
				),
				array(
					"desc" => " Inteligente",
					"value" => 7
				),
				array(
					"desc" => " Pasion",
					"value" => 9
				),
				array(
					"desc" => " Belleza",
					"value" => 11
				),
				array(
					"desc" => " Felicidad",
					"value" => 8
				),
				array(
					"desc" => " Confiable",
					"value" => 8
				),
			)
		),
	),
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => "Increible! Sabes muy bien cuando alguien te miente, y sabes como usarlo a tu favor. Es un gran talento, pero aveces esto te puede pasar la cuenta."
		),
		2 => array(
			"title" => "",
			"desc" => "A pesar de tener problemas y a veces no estar bien de animo, siempre sueles tener una linda y hermosa sonrisa en tu rostro que nadie podra ser capaz de borrarla, eso habla muy bien de ti."
		),
		3 => array(
			"title" => "",
			"desc" => "Te gustan los besos, y eres el mejor en eso. Sabes como, cuando y donde es el lugar exacto para hacerlo y lograr conquistar con tu mejor talento."
		),
		4 => array(
			"title" => "",
			"desc" => "Tienes los mas grandes secretos guardados, porque la gente sabe que eres una tumba. Se puede confiar un gran secreto contigo y saber que nadie se enterara, eres una persona de confianza, te lo ganaste!"
		),
		5 => array(
			"title" => "",
			"desc" => "Ganaste medalla al primer lugar por ser lo mas sexy. Sabes como ser siempre muy sensual y usar tus mayores dotes para la conquista."
		),
		6 => array(
			"title" => "",
			"desc" => "Eres una persona muy fiel, no solo con tu pareja, si no tambien lo sabes hacer muy bien con tus amistades o las personas que a ti te parecen mas importante, felicitaciones."
		),
		7 => array(
			"title" => "",
			"desc" => "Increible! Sabes muy bien cuando alguien te miente, y sabes como usarlo a tu favor. Es un gran talento, pero aveces esto te puede pasar la cuenta."
		),
		8 => array(
			"title" => "",
			"desc" => "A pesar de tener problemas y a veces no estar bien de animo, siempre sueles tener una linda y hermosa sonrisa en tu rostro que nadie podra ser capaz de borrarla, eso habla muy bien de ti."
		),
		9 => array(
			"title" => "",
			"desc" => "Te gustan los besos, y eres el mejor en eso. Sabes como, cuando y donde es el lugar exacto para hacerlo y lograr conquistar con tu mejor talento."
		),
		10 => array(
			"title" => "",
			"desc" => "Tienes los mas grandes secretos guardados, porque la gente sabe que eres una tumba. Se puede confiar un gran secreto contigo y saber que nadie se enterara, eres una persona de confianza, te lo ganaste!"
		),
		11 => array(
			"title" => "",
			"desc" => "Ganaste medalla al primer lugar por ser lo mas sexy. Sabes como ser siempre muy sensual y usar tus mayores dotes para la conquista."
		),
		12 => array(
			"title" => "",
			"desc" => "Eres una persona muy fiel, no solo con tu pareja, si no tambien lo sabes hacer muy bien con tus amistades o las personas que a ti te parecen mas importante, felicitaciones."
		),
	),
);

$edad = array(
	"type" => "random",
	"title" => "Edad que aparentas en 2015",
	"meta_desc" => " Conoce la edad que aparentas fisicamente para este 2015!",
	"question" => " Conoce la edad que aparentas fisicamente para este 2015!",
	"init" => "Click para iniciar el analisis de tus fotos del 2015...",
	"results_msg" => " Nuestro sistema analiza tus fotos de perfil. Espere...",
	"share_msg" => "Conoce la edad real que aparentas fisicamente",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/edad/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => " Rostro: 20 a&ntilde;os - Cuerpo: 24 a&ntilde;os",
			"desc" => "Wow, tienes lindas facciones en tu rostro, nos sorprendiste! junto a un cuerpo deseable por cualquiera. Estas mejor que nunca! "
		),
		2 => array(
			"title" => "Rostro: 19 a&ntilde;os - Cuerpo: 25 a&ntilde;os",
			"desc" => "Tienes un cuerpo perfectamente creado, junto a tu muy lindo rostro. Estas en tu mejor momento! Debes saberlo! "
		),
		3 => array(
			"title" => "Rostro: 17 a&ntilde;os - Cuerpo: 24 a&ntilde;os",
			"desc" => "Vaya! Tienes una linda figura, y un rostro muy angelical, nos has sorprendido tus fotos. "
		),
		4 => array(
			"title" => "Rostro: 18 a&ntilde;os - Cuerpo: 23 a&ntilde;os",
			"desc" => "Se te ve un cuerpo muy juvenil y saludable junt a un rostro que tiene la apariencia de una buena persona, como un santo. "
		),
		5 => array(
			"title" => " Rostro: 16 a&ntilde;os - Cuerpo: 25 a&ntilde;os",
			"desc" => "Tienes un rostro como el de un menor de edad, lo que te hace una apariencia muy inocente. Pero tu cuerpo es de unos 25."
		),
	)
);

$compatible = array(
	"type" => "signos",
	"title" => "Compatibilidad de Signos 2015!",
	"meta_desc" => "Descubre cual es el signo mas compatible y menos compatible para ti para 2015",
	"question" => "Descubre cual es el signo mas compatible y menos compatible para ti para 2015",
	"init" => " Selecciona tu Signo Zodiacal ",
	"boton_init" => "Iniciar",
	"results_msg" => " Buscando el mas compatible e incompatible para tu signo...",
	"share_msg" => "Descubre cual es el signo mas compatible y menos compatible para ti",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/compatible/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => "Acuario necesita espacio, Geminis es el signo mas compatible, quien logra entender lo que un Acuario necesita, intentaran cuidar el amor de un Acuario de todos modos, consiguen una gran compatibilidad. Leo es el menos recomendado, no sabe como tratar un Acuario, no sabe dar el amor duradero y real que Acuario necesita."
		),
		2 => array(
			"title" => "",
			"desc" => "El signo mas compatible para Aries es Sagitario, quienes estan dispuesto a dejarlo todo por un Aries, ambos se logran entender y coordinar muy bien en una relacion. El menos compatible es Virgo, no comparten los mismos puntos de vista lo que irrita a los Aries, cualquier pareja sera inutil. "
		),
		3 => array(
			"title" => "",
			"desc" => "Cancer, la mejor y mas compatible opcion para ellos es Virgo. Los Virgo entienden a la perfeccion a los Cancer, ambos pueden lograr grandes cosas juntos, son un gran duo. Leo no es un signo recomendable para Cancer, ya que suelen estar bien solo en relaciones pasajeras, nada estable. "
		),
		4 => array(
			"title" => "",
			"desc" => "El signo mas compatible para Capricornio es Leo, quienes haran lo posible para enamorar a un Capricornio, entienden que ellos son lo que necesitan y sabe que valdra la pena. Piscis es el signo menos recomendado para Capricornio, no tienen la paciencia necesaria para un Capricornio, es la peor opcion. "
		),
		5 => array(
			"title" => "",
			"desc" => "Escorpio logra la mayor compatibilidad junto con Tauro, quienes caen rendido a los pies de Escorpio, suelen enamorarse facilmente de ellos por alguna desconocida razon. Capricornio es con quien logra la mas baja compatibilidad para sostener una relacion duradera, solo causa inseguridades y problemas no necesarios a Escorpio. "
		),
		6 => array(
			"title" => "",
			"desc" => "Geminis y Acuario, una linda pareja que se entiende y comprende a la perfeccion sin fingir un falso amor, suelen conseguir una relacion duradera en el tiempo. Cancer es con quien Cancer tiene grandes diferencias que causa conflictos, no suelen lograr una relacion estable en el tiempo, menos seriedad."
		),
		7 => array(
			"title" => "",
			"desc" => "Para leo no hay nada mejor que un Sagitario, asi mismo Sagitario necesita de un Leo para encontrar el verdadero amor. Acuario junto con Leo suelen ser relaciones de esas que sacan chispas. No se entienden, y no comparten el mismo enfoque de la vida."
		),
		8 => array(
			"title" => "",
			"desc" => "Libra logra ser un gran aliado junto a un Sagitario, ambos se atraen y suelen ser parejas estables y felices, solo se necesitan el uno al otro. Por el contrario, Piscis no comprende los pensamientos de un Libra, lo que complica toda relacion entre ambos signos. "
		),
		9 => array(
			"title" => "",
			"desc" => "Piscis logra su mayor punto de felicidad en su vida junto a un Capricornio, asi igual Capricornio necesita de un Piscis para ser plenamente feliz. Acuario es el peor signo para estar al lado de un Piscis, es la mas baja compatibilidad."
		),
		10 => array(
			"title" => "",
			"desc" => "Sagitario suele tener mayor compatibilidad con los Aries, ya que ellos comprenden a la perfeccion lo que Sagitario necesita para sentirse plenos y felices en una relacion. Cancer es sin duda el mas incompatible para Sagitario. Cancer suele traer peleas y problemas a la vida de un Sagitario que solo busca amor y paz. "
		),
		11 => array(
			"title" => "",
			"desc" => "Para Tauro no hay duda que Libra es quien lograra mayor compatibilidad, estan hecho el uno para el otro, es la mejor opcion para un Tauro, por el contrario Geminis es la peor opcion que pueda tener, suele ser una relacion dificultosa muy dificil de llevar. "
		),
		12=> array(
			"title" => "",
			"desc" => "Para Virgo se recomienda sostener relaciones con Escorpio, con toda seguridad, todo Escorpio reconoce a un Virgo como el gran amor de su vida, ya que suelen entenderse muy bien. Por otro lado, Libra es con quien tiene la mas baja compatibilidad, Libra no sabe llevar una relacion seria con Virgo, suelen ser parejas conflictivas. "
		),
	)
);

$mujer = array(
	"type" => "nombrerandom",
	"title" => "Que mujer eres?",
	"meta_desc" => "Que tipo de mujer eres?",
	"question" => "Que tipo de mujer eres?",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tu nombre...<br /><br />Analizando tu fecha de nacimiento...",
	"share_msg" => "Conoce que tipo de mujer eres",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/mujer/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),

	)
);

$secreto = array(
	"type" => "random",
	"title" => "Conoce cuantos te aman en secreto!",
	"meta_desc" => "Descubre cuantos te aman en secreto!",
	"question" => "Conoce cuantos te aman en secreto!",
	"init" => "Y cuantas personas te envidian :O",
	"results_msg" => "Recopilando tus datos...<br />Cargando informacion de: <b>Todos tus amig@s</b>",
	"share_msg" => "Descubre cual es el numero de personas que te aman en secreto, y cuantas te envidian!",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/secreto/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "4 Personas te aman! Wow!",
			"desc" => ""
		),
		2 => array(
			"title" => "6 Personas te aman! Wow!",
			"desc" => ""
		),
		3 => array(
			"title" => "9 Personas te aman! Wow!",
			"desc" => ""
		),
		4 => array(
			"title" => "5 Personas te aman! Wow!",
			"desc" => ""
		),
		5 => array(
			"title" => "7 Personas te aman! Wow!",
			"desc" => ""
		),
		6 => array(
			"title" => "8 Personas te aman! Wow!",
			"desc" => ""
		),
	)
);

$lapida = array(
	"type" => "nombrefecha",
	"title" => "Conoce como ser&aacute; tu L&aacute;pida",
	"meta_desc" => "Conoce como sera tu L&aacute;pida",
	"question" => "Conoce como sera tu L&aacute;pida",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tu nombre...<br /><br />Analizando tu fecha de nacimiento...",
	"share_msg" => "Conoce como sera tu L&aacute;pida",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/lapida/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
	)
);

$significado = array(
	"type" => "nombrefecha",
	"title" => "Significado Oculto",
	"meta_desc" => "Conoce tu significado de nombre oculto",
	"question" => "Tu significado de nombre oculto",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tu nombre...<br /><br />Analizando tu fecha de nacimiento...",
	"share_msg" => "Conoce el significado oculto de tu nombre",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/significado/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		)
	)
);

$nacimiento = array(
	"type" => "nombrehorario",
	"title" => "Personalidad Seg&uacute;n la hora en que naciste",
	"meta_desc" => "Tu personalidad seg&uacute;n la hora en que naciste",
	"question" => "Como es tu personalidad seg&uacute;n la hora en que naciste?",
	"init" => "Escribe solo tu primer nombre y selecciona el horario de tu nacimiento",
	"results_msg" => "Analizando tu nombre...<br /><br />Analizando tu momento de nacimiento...",
	"share_msg" => "Conoce tu personalidad seg&uacute;n tu horarop de nacimiento",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/nacimiento/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
		8 => array(
			"title" => "",
			"desc" => ""
		),
		9 => array(
			"title" => "",
			"desc" => ""
		),
		10 => array(
			"title" => "",
			"desc" => ""
		),
		11 => array(
			"title" => "",
			"desc" => ""
		),
		12 => array(
			"title" => "",
			"desc" => ""
		),
	)
);

$opinan = array(
	"type" => "nombrefecha",
	"title" => "Que hablan de ti?",
	"meta_desc" => "Que opinan los hombres de ti?",
	"question" => "Conoce que hablan de ti",
	"init" => " Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tu nombre...<br /><br />Analizando tu fecha de nacimiento...",
	"share_msg" => "Que opinan los hombres de ti? Averigualo aqu&iacute;",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/opinan/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		)
	)
);

$wikipedia = array(
	"type" => "apps",
	"title" => "Tu Pagina de Wikipedia",
	"meta_desc" => "Descubre tu pagina de Wikipedia",
	"question" => "Tu Pagina de Wikipedia",
	"init" => "Analizaremos tus intereses, para y descubrir&aacute;s cualidades insospechadas!",
	"boton_init" => "Crear tu Pagina",
	"results_msg" => "Analizando vidas pasadas y reencarnaciones",
	"share_msg" => "",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/wikipedia/resultado/?fbTrue=true',
);

$tequiero = array(
	"type" => "random",
	"title" => "Otra forma de decir Te Quiero",
	"meta_desc" => "Descubre tu nueva forma de decir Te Quiero!",
	"question" => "101 Formas de decir Te Quiero, cual te queda mejor?",
	"init" => "Click para descubrilo",
	"results_msg" => "Analizando idiomas en vidas pasadas...",
	"share_msg" => "Descubre tu nueva forma para decir Te Quiero",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/tequiero/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "Ahora debes elegir alguien y decirle Te Quiero en lenguaje Bambara",
			"desc" => "(Malí, Africa Occidental)"
		),
		2 => array(
			"title" => "Ahora debes elegir alguien y decirle Te Quiero en lenguaje Alban&eacute;s",
			"desc" => "(Albania, Europa)"
		),
		3 => array(
			"title" => "Ahora debes elegir alguien y decirle Te Quiero en alem&aacute;n",
			"desc" => "(Alemania, Europa)"
		),
		4 => array(
			"title" => "Ahora debes elegir alguien y decirle Te Quiero en lenguaje armenio",
			"desc" => "(Armenia y Turqu&iacute;a, Asia)"
		),
		5 => array(
			"title" => "Ahora debes elegir alguien y decirle Te Quiero en lenguaje bielorruso",
			"desc" => "(Bielorrusia, Europa)"
		),
		6 => array(
			"title" => "Ahora debes elegir alguien y decirle Te Quiero en lenguaje bosnio",
			"desc" => "(Bosnia, Europa)"
		),
		7 => array(
			"title" => "Ahora debes elegir alguien y decirle Te Quiero en lenguaje bulgaro",
			"desc" => "(Bulgaria, Europa)"
		),
		8 => array(
			"title" => "Ahora debes elegir alguien y decirle Te Quiero en lenguaje bengal&iacute;",
			"desc" => "(India y Bangladesh, Asia)"
		),
		9 => array(
			"title" => "Ahora debes elegir alguien y decirle Te Quiero en lenguaje arabe",
			"desc" => "(Paises Arabes, Asia)"
		),
		10 => array(
			"title" => "Ahora debes elegir alguien y decirle Te Quiero en lenguaje afrikáans",
			"desc" => "(Sud&aacute;frica, Africa)"
		),
	)
);

$whatsapp = array(
	"type" => "nombrefecha",
	"title" => "Tu estado Whatsapp",
	"meta_desc" => "Tu estado Whatsapp para el dia de hoy",
	"question" => "Tu estado Whatsapp para el dia de hoy",
	"init" => "Dejanos inspirarnos y te daremos una buena idea",
	"results_msg" => "Analizando tus vidas pasadas...",
	"share_msg" => "Tu estado Whatsapp para el dia de hoy",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/whatsapp/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
		8 => array(
			"title" => "",
			"desc" => ""
		),
		9 => array(
			"title" => "",
			"desc" => ""
		),
		10 => array(
			"title" => "",
			"desc" => ""
		),
		11 => array(
			"title" => "",
			"desc" => ""
		),
		12 => array(
			"title" => "",
			"desc" => ""
		),
		13 => array(
			"title" => "",
			"desc" => ""
		),
		14 => array(
			"title" => "",
			"desc" => ""
		),
		15 => array(
			"title" => "",
			"desc" => ""
		),
		16 => array(
			"title" => "",
			"desc" => ""
		),
		17 => array(
			"title" => "",
			"desc" => ""
		),
		18 => array(
			"title" => "",
			"desc" => ""
		),
		19 => array(
			"title" => "",
			"desc" => ""
		),
		20 => array(
			"title" => "",
			"desc" => ""
		),
		21 => array(
			"title" => "",
			"desc" => ""
		),
		22 => array(
			"title" => "",
			"desc" => ""
		),
		23 => array(
			"title" => "",
			"desc" => ""
		),
		24 => array(
			"title" => "",
			"desc" => ""
		),
		25 => array(
			"title" => "",
			"desc" => ""
		),
		26 => array(
			"title" => "",
			"desc" => ""
		),
		27 => array(
			"title" => "",
			"desc" => ""
		),
	)
);

$emoticon = array(
	"type" => "nombrefecha",
	"title" => "Que emoticon de WhatApp eres?",
	"meta_desc" => "Descubre que emoticon de WhatsApp eres",
	"question" => "Que emoticon de WhatApp eres?",
	"init" => "Ingresa tu nombre y nosotros haremos el resto",
	"results_msg" => "Analizando tu personalidad...",
	"share_msg" => "Que emoticon de WhatApp eres?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/emoticon/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
	)
);

$emocion = array(
	"type" => "multiplechoisenombrefecha",
	"title" => "Que emocion controla tus acciones?",
	"meta_desc" => "Descubre que emocion controla tus dias",
	"question" => "Que emocion te controla?",
	"init" => "Ingresa tu nombre y responde a las preguntas",
	"results_msg" => "Analizando tus respuestas...<br />Analizando tu mapa genetico...",
	"share_msg" => "Que emocion te controla?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/emocion/?fbTrue=true',
	"questions" => array(
		1 => array(
			"title" => "Eres de esas personas que suelen levantarse con el pie izquierdo?",
			"options" => array(
				array(
					"desc" => "Muy rara vez, en general te levantas todos los dias de buen humor, eres asi por naturaleza.",
				),
				array(
					"desc" => "De vez en cuando, pero tratas de superarlo y no amargar el dia a nadie, Que culpa tienen ellos?",
				),
				array(
					"desc" => "Muy a menudo, en tu casa todos conocen tu mal humor al levantarte, saben que es mejor no hablarte.",
				),
			)
		),
		2 => array(
			"title" => "Sabes controlar tus emociones?",
			"options" => array(
				array(
					"desc" => " 1 mejor amigo! no necesito mas",
				),
				array(
					"desc" => " 2 mejores amigos!",
				),
				array(
					"desc" => " 3 mejores amigos!",
				),
				array(
					"desc" => " 4 mejores amigos!",
				),
				array(
					"desc" => " 5 o mas mejores amigos!",
				),
			)
		),
		3 => array(
			"title" => "Te cuesta poco llorar cuando ves una pelicula tierna?",
			"options" => array(
				array(
					"desc" => "No, tiene que ser muy triste la pelicula para que sueltes una lagrima.",
				),
				array(
					"desc" => "A veces si, aunque tratas de evitarlo pensando en cualquier otra cosa.",
				),
				array(
					"desc" => "Muy poco, la verdad es que lloras como una tonta con las pelis de amor y con las tristes.",
				),
			)
		),
		4 => array(
			"title" => "Que color te gusta mas?",
			"options" => array(
				array(
					"desc" => "Verde",
				),
				array(
					"desc" => "Azul",
				),
				array(
					"desc" => "Rojo",
				),
				array(
					"desc" => "Morado",
				),
				array(
					"desc" => "Amarillo",
				),
			)
		),
		5 => array(
			"title" => "A cual de estos artistas escuchas mas?",
			"options" => array(
				array(
					"desc" => "One Direction",
				),
				array(
					"desc" => "Demi Lovato",
				),
				array(
					"desc" => "Taylor Swift",
				),
				array(
					"desc" => "Ed Sheeran",
				),
				array(
					"desc" => "Selena Gomez",
				),
				array(
					"desc" => "Ninguno",
				),
			)
		),
		6 => array(
			"title" => " Selecciona la alternativa que mejor te describe",
			"options" => array(
				array(
					"desc" => "Enojo",
					"value" => 2
				),
				array(
					"desc" => " Felicidad",
					"value" => 4
				),
				array(
					"desc" => "Desanimo",
					"value" => 3
				),
				array(
					"desc" => "Preocupacion",
					"value" => 5
				),
				array(
					"desc" => "Desprecio",
					"value" => 1
				),
			)
		),
	),
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
	)
);

$avengers = array(
	"type" => "nombresexo",
	"title" => "Que Avenger eres?",
	"meta_desc" => "Descubre que Avenger eres",
	"question" => "Que Avenger eres?",
	"init" => "Ingresa tu nombre y tu sexo para averiguar que Avenger eres",
	"results_msg" => "Analizando tu personalidad...",
	"share_msg" => "Que Avenger eres?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/avengers/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$diosito = array(
	"type" => "apps",
	"title" => "Como te creo Diosito?",
	"meta_desc" => "Cual fue la receta de Diosito para crearte?",
	"question" => "Como te creo Diosito?",
	"init" => "Invocaremos a las fuerzas del mas alla para inspirarnos y recibir la respuesta",
	"boton_init" => "Averiguar",
	"results_msg" => "Pasando a modo profeta...<br />Recibiendo imagenes del mas alla",
	"share_msg" => "Como te creo Diosito?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/diosito/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
		8 => array(
			"title" => "",
			"desc" => ""
		),
		9 => array(
			"title" => "",
			"desc" => ""
		),
		10 => array(
			"title" => "",
			"desc" => ""
		),
		11 => array(
			"title" => "",
			"desc" => ""
		),
		12 => array(
			"title" => "",
			"desc" => ""
		),
		13 => array(
			"title" => "",
			"desc" => ""
		),
		14 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$amigos = array(
	"type" => "nombresexo",
	"title" => "Que piensan tus amigos de ti?",
	"meta_desc" => "Que opinan tus amigos de ti?",
	"question" => "Conoce que piensan de ti tus amigos",
	"init" => " Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tu nombre...<br /><br />Analizando a tus amigos...",
	"share_msg" => "Que opinan tus amigos de ti? Averigualo aqu&iacute;",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/amigos/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		)
	)
);

$persona = array(
	"type" => "apps",
	"title" => "Cual es tu personalidad?",
	"meta_desc" => "Que tipo de persona eres segun tu foto de perfil?",
	"question" => "Que tipo de persona eres segun tu foto de perfil?",
	"init" => "Analizaremos tu foto de perfil para obtener el resultado",
	"boton_init" => "Iniciar",
	"results_msg" => "Analizando fotos...<br />Analizando foto de perfil...",
	"share_msg" => "Que tipo de persona eres segun tu foto de perfil?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/persona/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$google = array(
	"type" => "nombretexto",
	"title" => "Que piensa Google de ti?",
	"meta_desc" => "Que dice Google sobre ti?",
	"question" => "Conoce que piensa Google de ti",
	"init" => " Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tu nombre...<br /><br />Analizando tus resultados en Google...",
	"share_msg" => "Que opinan Google de ti? Averigualo aqu&iacute;",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/google/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => "modelo de pasarelas|envidiado por su figura|el proximo premio nobel|siempre elegante"
		),
		2 => array(
			"title" => "",
			"desc" => "rompediscotecas|antes muert@ que entregad@|salvador del planeta|hermosa persona"
		),
		3 => array(
			"title" => "",
			"desc" => "será dueñ@ de Apple|cuerpo perfecto|será presidente|rompecorazones"
		),
		4 => array(
			"title" => "",
			"desc" => "rompecorazones|enamora a cualquiera|una excelente persona|envidiad@ por su figura"
		),
		5 => array(
			"title" => "",
			"desc" => "rostro perfecto|siempre elegante|modelo de pasarelas|una excelente persona"
		),
		6 => array(
			"title" => "",
			"desc" => "hermosa persona|será dueñ@ de Apple|rostro perfecto|el cuerpo perfecto"
		),
		7 => array(
			"title" => "",
			"desc" => "será presidente|será millonari@|rompecorazones|solter@ codiciad@"
		),
		8 => array(
			"title" => "",
			"desc" => "el cuerpo perfecto|será dueñ@ de Apple|rompecorazones|el próximo premio nobel"
		),
		9 => array(
			"title" => "",
			"desc" => "será millonari@|se casará con alguien famoso|siempre elegante|será dueñ@ de Apple"
		),
		10 => array(
			"title" => "",
			"desc" => "se casará con alguien famoso|será una estrella de Hollywood|el próximo premio nobel|madre/padre que todos quieren"
		),
		11 => array(
			"title" => "",
			"desc" => "cuerpo perfecto|rostro perfecto|rompecorazones|será una estrella de Hollywood"
		),
	)
);

$busca = array(
	"type" => "apps",
	"title" => "Mi delito",
	"meta_desc" => "Que delito he cometido?",
	"question" => "Cual es mi delito?",
	"init" => "Te mostraremos cual es tu peor delito",
	"boton_init" => "Iniciar",
	"results_msg" => "Analizando estados...<br />Analizando historial policial...",
	"share_msg" => "Cual es tu Delito?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/busca/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$ojo = array(
	"type" => "pickimg",
	"title" => "Que personalidad eres?",
	"meta_desc" => "Tu Ojo",
	"question" => "Que personalidad eres segun tu ojo?",
	"init" => "Selecciona uno",
	"boton_init" => "Iniciar",
	"results_msg" => "Analizando ojo seleccionado...",
	"share_msg" => "Cual es tu ojo?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/ojo/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$aura = array(
	"type" => "nombrefecha",
	"title" => "Que dice tu aura de ti?",
	"meta_desc" => "El Color de tu Aura",
	"question" => "Conoce el color de tu Aura y que dice de ti",
	"init" => " Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tu aura...<br /><br />Analizando tu animo...",
	"share_msg" => "Conoce el color de tu Aura y que dice de ti",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/aura/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$sientes = array(
	"type" => "multiplechoisenombrefecha",
	"title" => "Como te sientes hoy?",
	"meta_desc" => "Como te sientes hoy",
	"question" => "Dinos como te sientes hoy",
	"init" => " Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tu nombre...<br /><br />Analizando tu energia...",
	"share_msg" => "#nombre se siente asi hoy. Como te sientes tu hoy?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/sientes/?fbTrue=true',
	"questions" => array(
		1 => array(
			"title" => "Como te sientes hoy?",
			"options" => array(
				array(
					"desc" => "Enamorad@",
					"value" => 1
				),
				array(
					"desc" => "Feliz",
					"value" => 2
				),
				array(
					"desc" => "Triste",
					"value" => 3
				),
				array(
					"desc" => "Enojad@",
					"value" => 4
				),
				array(
					"desc" => "Enferm@",
					"value" => 5
				),
				array(
					"desc" => "Cansad@",
					"value" => 6
				),
				array(
					"desc" => "Bendecid@",
					"value" => 7
				),
				array(
					"desc" => "Loc@",
					"value" => 8
				),
				array(
					"desc" => "Genial",
					"value" => 9
				),
				array(
					"desc" => "Pensativ@",
					"value" => 10
				),
				array(
					"desc" => "Sexy",
					"value" => 11
				),
			),
		),
	),
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
		8 => array(
			"title" => "",
			"desc" => ""
		),
		9 => array(
			"title" => "",
			"desc" => ""
		),
		10 => array(
			"title" => "",
			"desc" => ""
		),
		11 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$poema = array(
	"type" => "nombrefecha",
	"title" => "Hay un poema especial para ti!",
	"meta_desc" => "Un Poema para ti",
	"question" => "Encuentra tu poema del dia",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tu pasado...<br /><br />Analizando tu presente...",
	"share_msg" => "#nombre encontro su Poema. Lo encontraste tu?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/poema/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		)
	),
);

$amor = array(
	"type" => "nombrefecha",
	"title" => "Tu Amor Secreto tiene un mensaje para Ti",
	"meta_desc" => "Un mensaje para ti",
	"question" => "Recibe tu mensaje",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tus amores...<br /><br />Buscando mensajes para ti...",
	"share_msg" => "#nombre encontro un mensaje de su amor secreto. Lo encontraste tu?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/amor/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		)
	),
);

$espejito = array(
	"type" => "nombrefecha",
	"title" => "Preguntale al espejito",
	"meta_desc" => "El espejito tiene un mensaje para Ti",
	"question" => "Pidele al espejito un consejo",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tu estado emocional...<br /><br />Buscando el consejo mas sabio...",
	"share_msg" => "#nombre le pidio un consejo al espejito. Ya le has pedido el tuyo?",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/espejito/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		)
	),
);

$sexy = array(
	"type" => "apps",
	"title" => "Que tan sexy eres?",
	"meta_desc" => "El Sexymetro te dira que tan sexy eres",
	"question" => "Que tan sexy eres?",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"boton_init" => "Iniciar",
	"results_msg" => "Analizando tu composicion corporal...<br /><br />Calibrando el Sexymetro...",
	"share_msg" => "#nombre ya sabe que tan sexy es. Tu ya sabes?",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/sexy/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		)
	),
);

$numerologia = array(
	"type" => "appsfechaambos",
	"title" => "Numerologia del Amor",
	"meta_desc" => "Tu numero te dira que tan buena pareja hacen",
	"question" => "Tu numero del amor",
	"init" => "Indica las fechas de nacimiento",
	"boton_init" => "Iniciar Calculos",
	"results_msg" => "Calculando numero del amor...<br /><br />Generando perfil...",
	"share_msg" => "#nombre ya encontro su numero de pareja. Tu ya lo conoces?",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/numerologia/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		)
	),
);

$angel = array(
	"type" => "nombrefecha",
	"title" => "Tu angel guardian tiene un mensaje para Ti",
	"meta_desc" => "Tu angel guardian tiene un mensaje para Ti",
	"question" => "Un mensaje de tu Angel Guardian",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Conectando con otras dimensiones...<br /><br />Recibiendo el mensaje sagrado...",
	"share_msg" => "#nombre ya tiene el mensaje de su angel guardian. Porque no averiguas el tuyo?",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/angel/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		)
	),
);

$bola = array(
	"type" => "nombrefecha",
	"title" => "La Bola de Cristal tiene algo para Ti",
	"meta_desc" => "Averigua tu futuro",
	"question" => "La Bola de Cristal quiere decirte algo",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Iniciando clarividencia...<br /><br />Recibiendo mensaje magico...",
	"share_msg" => "#nombre ya sabe que le depara la Bola de Cristal. tu ya lo sabes?",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/bola/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
		8 => array(
			"title" => "",
			"desc" => ""
		),
		9 => array(
			"title" => "",
			"desc" => ""
		),
		10 => array(
			"title" => "",
			"desc" => ""
		)
	),
);

$sabios = array(
	"type" => "nombrefecha",
	"title" => "4 Consejos. Uno de ellos te hara sabio!",
	"meta_desc" => "Un consejo para Ti",
	"question" => "4 Consejos. Uno de ellos te hara sabio!",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando personalidad...<br /><br />Ajustando el mejor consejo...",
	"share_msg" => "#nombre ya tiene su buen consejo. tu ya lo tienes?",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/sabios/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$biblico = array(
	"type" => "nombrefecha",
	"title" => "Un mensaje biblico especial para ti",
	"meta_desc" => "Un mensaje biblico",
	"question" => "Un mensaje biblico especial para ti",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Seleccionando un mensaje de paz...<br /><br />Amen...",
	"share_msg" => "#nombre tiene su especial mensaje biblico. Ingresa por el tuyo",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/biblico/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
		8 => array(
			"title" => "",
			"desc" => ""
		),
		9 => array(
			"title" => "",
			"desc" => ""
		),
		10 => array(
			"title" => "",
			"desc" => ""
		),
		11 => array(
			"title" => "",
			"desc" => ""
		),
		12 => array(
			"title" => "",
			"desc" => ""
		),
		13 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$mentales = array(
	"type" => "nombrefecha",
	"title" => "Tu entrenamiento mental diario",
	"meta_desc" => "Entrena tu mente",
	"question" => "Tu entrenamiento mental diario",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Seleccionando tu juego mental...<br /><br />Precalentando...",
	"share_msg" => "#nombre ya esta entrenando su mente. Entrena la tuya desde hoy!",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/mentales/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$destinos = array(
	"type" => "nombrefecha",
	"title" => "Tus Proximas Vacaciones",
	"meta_desc" => "Tu destino turistico ideal",
	"question" => "Tus Proximas Vacaciones",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Analizando tus destinos favoritos...<br /><br />Proyectando vacaciones...",
	"share_msg" => "#nombre ya sabe donde seran sus proximas vacaciones!. Donde seran las tuyas?",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/destinos/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$nombrenumero = array(
	"type" => "nombrefecha",
	"title" => "Los Numeros de tu Nombre",
	"meta_desc" => "Los Numeros de tu Nombre",
	"question" => "Que Representan Los Numeros de tu Nombre?",
	"init" => "Escribe solo tu primer nombre a continuacion",
	"results_msg" => "Haciendo calculos...<br /><br />Seleccionando resultado...",
	"share_msg" => "#nombre ya sabe que numero le corresponde a su nombre!. Cual sera el tuyo?",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/nombrenumero/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
		8 => array(
			"title" => "",
			"desc" => ""
		),
		9 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$depara = array(
	"type" => "apps",
	"title" => "Lo que te depara el 2016",
	"meta_desc" => "Lo que te depara el 2016",
	"question" => "Que te deparar&aacute; el 2016?",
	"init" => "",
	"boton_init" => "Iniciar",
	"results_msg" => "Analizando pasado...<br /><br />Calibrando el mejor resultado para el 2016...",
	"share_msg" => "#nombre ya sabe lo que le depara el 2016!. Tu ya lo sabes?",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/depara/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$secretos = array(
	"type" => "ooh",
	"title" => "Que secreto oculta tu mejor amig@?",
	"meta_desc" => "El secreto de tu mejor amig@",
	"question" => "Que secreto oculta tu mejor amig@?",
	"init" => "",
	"boton_init" => "Iniciar",
	"results_msg" => "Analizando qui&eacute;n es tu mejor amigo@...<br /><br />Investigando a fondo sus secretos...",
	"share_msg" => "Yo ya se cual es el secreto que oculta mi mejor amig@!. Tu ya lo sabes?",
	'app_id' => '1210157912344251',
	'app_secret' => 'e86d6a7f3b2953bab7fe6ca93e117802',
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/secretos/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
		8 => array(
			"title" => "",
			"desc" => ""
		),
		9 => array(
			"title" => "",
			"desc" => ""
		),
		10 => array(
			"title" => "",
			"desc" => ""
		),
		11 => array(
			"title" => "",
			"desc" => ""
		),
		12 => array(
			"title" => "",
			"desc" => ""
		),
		13 => array(
			"title" => "",
			"desc" => ""
		),
		14 => array(
			"title" => "",
			"desc" => ""
		),
		15 => array(
			"title" => "",
			"desc" => ""
		),
		16 => array(
			"title" => "",
			"desc" => ""
		),
		17 => array(
			"title" => "",
			"desc" => ""
		),
		18 => array(
			"title" => "",
			"desc" => ""
		),
	),
);

$horoscopo = array(
	"type" => "signosapp",
	"title" => "Tu horoscopo 2016!",
	"meta_desc" => "Conoce ya mismo tu Horoscopo para el año entrante",
	"question" => "Tu Horoscopo 2016",
	"init" => "Selecciona tu Signo Zodiacal",
	"boton_init" => "Iniciar",
	"results_msg" => "Generando predicciones...",
	"share_msg" => "Tu Horoscopo 2016",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "103733046639345",
	//"app_secret" => "1a229cfce72a5c12fb2bae27e58e583b",
	"callback_url" => 'http://www.minijueguitos.lol/horoscopo/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
		8 => array(
			"title" => "",
			"desc" => ""
		),
		9 => array(
			"title" => "",
			"desc" => ""
		),
		10 => array(
			"title" => "",
			"desc" => ""
		),
		11 => array(
			"title" => "",
			"desc" => ""
		),
		12=> array(
			"title" => "",
			"desc" => ""
		),
	)
);

$dios = array(
	"type" => "apps",
	"title" => "Que Piensa Dios de Ti?",
	"meta_desc" => "El pensamiento que Dios tiene sobre ti",
	"question" => "El pensamiento que Dios tiene sobre ti",
	"init" => "Click al Boton para iniciar",
	"boton_init" => "Iniciar",
	"results_msg" => "Recibiendo vision mistica...",
	"share_msg" => "#nombre ya sabe lo que piensa Dios. Tu ya lo sabes?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "1685929414959493",
	//"app_secret" => "550538c7764f98d591ac1f11ae2bfac1",
	"callback_url" => 'http://www.minijueguitos.lol/dios/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
	)
);

$navidad = array(
	"type" => "apps",
	"title" => "Cual sera tu regalo de Navidad?",
	"meta_desc" => "Tu Regalo de Navidad",
	"question" => "Cual sera tu regalo de Navidad?",
	"init" => "Click al Boton para iniciar",
	"boton_init" => "Averiguar!",
	"results_msg" => "Contactando al Polo Norte...Recibiendo mensaje...",
	"share_msg" => "Tu ya sabes lo que recibiras en navidad?",
	"app_id" => "1210157912344251",
	"app_secret" => "e86d6a7f3b2953bab7fe6ca93e117802",
	//"app_id" => "1685929414959493",
	//"app_secret" => "550538c7764f98d591ac1f11ae2bfac1",
	"callback_url" => 'http://www.minijueguitos.lol/navidad/resultado/?fbTrue=true',
	"results" => array(
		1 => array(
			"title" => "",
			"desc" => ""
		),
		2 => array(
			"title" => "",
			"desc" => ""
		),
		3 => array(
			"title" => "",
			"desc" => ""
		),
		4 => array(
			"title" => "",
			"desc" => ""
		),
		5 => array(
			"title" => "",
			"desc" => ""
		),
		6 => array(
			"title" => "",
			"desc" => ""
		),
		7 => array(
			"title" => "",
			"desc" => ""
		),
		8 => array(
			"title" => "",
			"desc" => ""
		),
	)
);
?>