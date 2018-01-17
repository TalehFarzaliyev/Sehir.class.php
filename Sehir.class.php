<?php


class Sehir {
	
	// il listesi 
	private static $iller = array('','Adana', 'Adıyaman', 'Afyon', 'Ağrı', 'Amasya', 'Ankara', 'Antalya', 'Artvin',
'Aydın', 'Balıkesir', 'Bilecik', 'Bingöl', 'Bitlis', 'Bolu', 'Burdur', 'Bursa', 'Çanakkale',
'Çankırı', 'Çorum', 'Denizli', 'Diyarbakır', 'Edirne', 'Elazığ', 'Erzincan', 'Erzurum', 'Eskişehir',
'Gaziantep', 'Giresun', 'Gümüşhane', 'Hakkari', 'Hatay', 'Isparta', 'Mersin', 'İstanbul', 'İzmir', 
'Kars', 'Kastamonu', 'Kayseri', 'Kırklareli', 'Kırşehir', 'Kocaeli', 'Konya', 'Kütahya', 'Malatya', 
'Manisa', 'Kahramanmaraş', 'Mardin', 'Muğla', 'Muş', 'Nevşehir', 'Niğde', 'Ordu', 'Rize', 'Sakarya',
'Samsun', 'Siirt', 'Sinop', 'Sivas', 'Tekirdağ', 'Tokat', 'Trabzon', 'Tunceli', 'Şanlıurfa', 'Uşak',
'Van', 'Yozgat', 'Zonguldak', 'Aksaray', 'Bayburt', 'Karaman', 'Kırıkkale', 'Batman', 'Şırnak',
'Bartın', 'Ardahan', 'Iğdır', 'Yalova', 'Karabük', 'Kilis', 'Osmaniye', 'Düzce');


	private static $ilceler = array('', 
array("Aladağ","Ceyhan","Çukurova","Feke","İmamoğlu","Karaisalı","Karataş","Kozan","Pozantı","Saimbeyli","Sarıçam","Seyhan","Tufanbeyli","Yumurtalık","Yüreğir"), 
array("Adıyaman","Besni","Çelikhan","Gerger","Gölbaşı","Kâhta","Samsat","Sincik","Tut"), 
array("Afyonkarahisar","Başmakçı","Bayat","Bolvadin","Çay","Çobanlar","Dazkırı","Dinar","Emirdağ","Evciler","Hocalar","İhsaniye","İscehisar","Kızılören","Sandıklı","Sinanpaşa","Sultandağı","Şuhut"),
array("Ağrı","Diyadin","Doğubayazıt","Eleşkirt","Hamur","Patnos","Taşlıçay","Tutak"),
array("Amasya","Göynücek","Gümüşhacıköy","Hamamözü","Merzifon","Suluova","Taşova"),
array("Akyurt","Altındağ","Ayaş","Balâ","Beypazarı","Çamlıdere","Çankaya","Çubuk","Elmadağ","Etimesgut","Evren","Gölbaşı","Güdül","Haymana","Kalecik","Kahramankazan","Keçiören","Kızılcahamam","Mamak","Nallıhan","Polatlı","Pursaklar","Sincan","Şereflikoçhisar","Yenimahalle"),
array("Akseki","Aksu","Alanya","Döşemealtı","Elmalı","Finike","Gazipaşa","Gündoğmuş","İbradı","Demre","Kaş","Kemer","Kepez","Konyaaltı","Korkuteli","Kumluca","Manavgat","Muratpaşa","Serik"),
array("Ardanuç","Arhavi","Artvin","Borçka","Hopa","Murgul","Şavşat","Yusufeli"),
array("Bozdoğan","Buharkent","Çine","Didim","Efeler","Germencik","İncirliova","Karacasu","Karpuzlu","Koçarlı","Köşk","Kuşadası","Kuyucak","Nazilli","Söke","Sultanhisar","Yenipazar"),
array("Altıeylül","Ayvalık","Balya","Bandırma","Bigadiç","Burhaniye","Dursunbey","Edremit","Erdek","Gömeç","Gönen","Havran","İvrindi","Karesi","Kepsut","Manyas","Marmara","Savaştepe","Sındırgı","Susurluk"),
array("Bilecik","Bozüyük","Gölpazarı","İnhisar","Osmaneli","Pazaryeri","Söğüt","Yenipazar"), array("Adaklı","Bingöl","Genç","Karlıova","Kiğı","Solhan","Yayladere","Yedisu"), 
array("Adilcevaz","Ahlat","Bitlis","Güroymak","Hizan","Mutki","Tatvan"), 
array("Bolu","Dörtdivan","Gerede","Göynük","Kıbrıscık","Mengen","Mudurnu","Seben","Yeniçağa"), 
array("Ağlasun","Altınyayla","Bucak","Burdur","Çavdır","Çeltikçi","Gölhisar","Karamanlı","Kemer","Tefenni","Yeşilova"), 
array("Büyükorhan","Gemlik","Gürsu","Harmancık","İnegöl","İznik","Karacabey","Keles","Kestel","Mudanya","Mustafakemalpaşa","Nilüfer","Orhaneli","Orhangazi","Osmangazi","Yenişehir","Yıldırım"), 
array("Ayvacık","Bayramiç","Biga","Bozcaada","Çan","Çanakkale","Eceabat","Ezine","Gelibolu","Gökçeada","Lapseki","Yenice"),
array("Atkaracalar","Bayramören","Çankırı","Çerkeş","Eldivan","Ilgaz","Kızılırmak","Korgun","Kurşunlu","Orta","Şabanözü","Yapraklı"), array("Alaca","Bayat","Boğazkale","Çorum","Dodurga","İskilip","Kargı","Laçin","Mecitözü","Oğuzlar","Ortaköy","Osmancık","Sungurlu","Uğurludağ"), 
array("Acıpayam","Babadağ","Baklan","Bekilli","Beyağaç","Bozkurt","Buldan","Çal","Çameli","Çardak","Çivril","Güney","Honaz","Kale","Merkezefendi","Pamukkale","Sarayköy","Serinhisar","Tavas"), 
array("Bağlar","Bismil","Çermik","Çınar","Çüngüş","Dicle","Eğil","Ergani","Hani","Hazro","Kayapınar","Kocaköy","Kulp","Lice","Silvan","Sur","Yenişehir"), 
array("Enez","Havsa","İpsala","Keşan","Lalapaşa","Meriç","Merkez","Süloğlu","Uzunköprü"), 
array("Ağın","Alacakaya","Arıcak","Baskil","Elâzığ","Karakoçan","Keban","Kovancılar","Maden","Palu","Sivrice"), 
array("Çayırlı","Erzincan","İliç","Kemah","Kemaliye","Otlukbeli","Refahiye","Tercan","Üzümlü"), 
array("Aşkale","Aziziye","Çat","Hınıs","Horasan","İspir","Karaçoban","Karayazı","Köprüköy","Narman","Oltu","Olur","Palandöken","Pasinler","Pazaryolu","Şenkaya","Tekman","Tortum","Uzundere","Yakutiye"), 
array("Alpu","Beylikova","Çifteler","Günyüzü","Han","İnönü","Mahmudiye","Mihalgazi","Mihalıççık","Odunpazarı","Sarıcakaya","Seyitgazi","Sivrihisar","Tepebaşı"),
array("Araban","İslahiye","Karkamış","Nizip","Nurdağı","Oğuzeli","Şahinbey","Şehitkâmil","Yavuzeli"), 
array("Alucra","Bulancak","Çamoluk","Çanakçı","Dereli","Doğankent","Espiye","Eynesil","Giresun","Görele","Güce","Keşap","Piraziz","Şebinkarahisar","Tirebolu","Yağlıdere"), 
array("Gümüşhane","Kelkit","Köse","Kürtün","Şiran","Torul"), 
array("Çukurca","Hakkâri","Şemdinli","Yüksekova"),
 array("Altınözü","Antakya","Arsuz","Belen","Defne","Dörtyol","Erzin","Hassa","İskenderun","Kırıkhan","Kumlu","Payas","Reyhanlı","Samandağ","Yayladağı"),
  array("Aksu","Atabey","Eğirdir","Gelendost","Gönen","Isparta","Keçiborlu","Senirkent","Sütçüler","Şarkikaraağaç","Uluborlu","Yalvaç","Yenişarbademli"), 
  array("Akdeniz","Anamur","Aydıncık","Bozyazı","Çamlıyayla","Erdemli","Gülnar","Mezitli","Mut","Silifke","Tarsus","Toroslar","Yenişehir"), 
  array("Adalar","Arnavutköy","Ataşehir","Avcılar","Bağcılar","Bahçelievler","Bakırköy","Başakşehir","Bayrampaşa","Beşiktaş","Beykoz","Beylikdüzü","Beyoğlu","Büyükçekmece","Çatalca","Çekmeköy","Esenler","Esenyurt","Eyüp","Fatih","Gaziosmanpaşa","Güngören","Kadıköy","Kağıthane","Kartal","Küçükçekmece","Maltepe","Pendik","Sancaktepe","Sarıyer","Silivri","Sultanbeyli","Sultangazi","Şile","Şişli","Tuzla","Ümraniye","Üsküdar","Zeytinburnu"), 
  array("Aliağa","Balçova","Bayındır","Bayraklı","Bergama","Beydağ","Bornova","Buca","Çeşme","Çiğli","Dikili","Foça","Gaziemir","Güzelbahçe","Karabağlar","Karaburun","Karşıyaka","Kemalpaşa","Kınık","Kiraz","Konak","Menderes","Menemen","Narlıdere","Ödemiş","Seferihisar","Selçuk","Tire","Torbalı","Urla"), 
array("Akyaka","Arpaçay","Digor","Kağızman","Kars","Sarıkamış","Selim","Susuz"), 
array("Abana","Ağlı","Araç","Azdavay","Bozkurt","Cide","Çatalzeytin","Daday","Devrekani","Doğanyurt","Hanönü","İhsangazi","İnebolu","Kastamonu","Küre","Pınarbaşı","Seydiler","Şenpazar","Taşköprü","Tosya"), 
array("Akkışla","Bünyan","Develi","Felahiye","Hacılar","İncesu","Kocasinan","Melikgazi","Özvatan","Pınarbaşı","Sarıoğlan","Sarız","Talas","Tomarza","Yahyalı","Yeşilhisar"), 
array("Babaeski","Demirköy","Kırklareli","Kofçaz","Lüleburgaz","Pehlivanköy","Pınarhisar","Vize"), array("Akçakent","Akpınar","Boztepe","Çiçekdağı","Kaman","Kırşehir","Mucur"), 
array("Başiskele","Çayırova","Darıca","Derince","Dilovası","Gebze","Gölcük","İzmit","Kandıra","Karamürsel","Kartepe","Körfez"), 
array("Ahırlı","Akören","Akşehir","Altınekin","Beyşehir","Bozkır","Cihanbeyli","Çeltik","Çumra","Derbent","Derebucak","Doğanhisar","Emirgazi","Ereğli","Güneysınır","Hadım","Halkapınar","Hüyük","Ilgın","Kadınhanı","Karapınar","Karatay","Kulu","Meram","Sarayönü","Selçuklu","Seydişehir","Taşkent","Tuzlukçu","Yalıhüyük","Yunak"), 
array("Altıntaş","Aslanapa","Çavdarhisar","Domaniç","Dumlupınar","Emet","Gediz","Hisarcık","Kütahya","Pazarlar","Şaphane","Simav","Tavşanlı"), 
array("Akçadağ","Arapgir","Arguvan","Battalgazi","Darende","Doğanşehir","Doğanyol","Hekimhan","Kale","Kuluncak","Pütürge","Yazıhan","Yeşilyurt"), 
array("Ahmetli","Akhisar","Alaşehir","Demirci","Gölmarmara","Gördes","Kırkağaç","Köprübaşı","Kula","Salihli","Sarıgöl","Saruhanlı","Selendi","Soma","Şehzadeler","Turgutlu","Yunusemre"), 
array("Afşin","Andırın","Çağlayancerit","Dulkadiroğlu","Ekinözü","Elbistan","Göksun","Nurhak","Onikişubat","Pazarcık","Türkoğlu"), 
array("Artuklu","Dargeçit","Derik","Kızıltepe","Mazıdağı","Midyat","Nusaybin","Ömerli","Savur","Yeşilli"), 
array("Bodrum","Dalaman","Datça","Fethiye","Kavaklıdere","Köyceğiz","Marmaris","Menteşe","Milas","Ortaca","Seydikemer","Ula","Yatağan"), array("Bulanık","Hasköy","Korkut","Malazgirt","Muş","Varto"), 
array("Acıgöl","Avanos","Derinkuyu","Gülşehir","Hacıbektaş","Kozaklı","Nevşehir","Ürgüp"), 
array("Altunhisar","Bor","Çamardı","Çiftlik","Niğde","Ulukışla"), 
array("Akkuş","Altınordu","Aybastı","Çamaş","Çatalpınar","Çaybaşı","Fatsa","Gölköy","Gülyalı","Gürgentepe","İkizce","Kabadüz","Kabataş","Korgan","Kumru","Mesudiye","Perşembe","Ulubey","Ünye"), 
array("Ardeşen","Çamlıhemşin","Çayeli","Derepazarı","Fındıklı","Güneysu","Hemşin","İkizdere","İyidere","Kalkandere","Pazar","Rize"),
 array("Adapazarı","Akyazı","Arifiye","Erenler","Ferizli","Geyve","Hendek","Karapürçek","Karasu","Kaynarca","Kocaali","Pamukova","Sapanca","Serdivan","Söğütlü","Taraklı"),
array("Alaçam","Asarcık","Atakum","Ayvacık","Bafra","Canik","Çarşamba","Havza","İlkadım","Kavak","Ladik","Ondokuzmayıs","Salıpazarı","Tekkeköy","Terme","Vezirköprü","Yakakent"), 
array("Siirt","Tillo","Baykan","Eruh","Kurtalan","Pervari","Şirvan"), 
array("Ayancık","Boyabat","Dikmen","Durağan","Erfelek","Gerze","Saraydüzü","Sinop","Türkeli"),
array("Akıncılar","Altınyayla","Divriği","Doğanşar","Gemerek","Gölova","Hafik","İmranlı","Kangal","Koyulhisar","Sivas","Suşehri","Şarkışla","Ulaş","Yıldızeli","Zara","Gürün"), 
array("Çerkezköy","Çorlu","Ergene","Hayrabolu","Kapaklı","Malkara","Marmara Ereğlisi","Muratlı","Saray","Süleymanpaşa","Şarköy"), 
array("Almus","Artova","Başçiftlik","Erbaa","Niksar","Pazar","Reşadiye","Sulusaray","Tokat","Turhal","Yeşilyurt","Zile"), 
array("Akçaabat","Araklı","Arsin","Beşikdüzü","Çarşıbaşı","Çaykara","Dernekpazarı","Düzköy","Hayrat","Köprübaşı","Maçka","Of","Ortahisar","Sürmene","Şalpazarı","Tonya","Vakfıkebir","Yomra"), 
array("Çemişgezek","Hozat","Mazgirt","Nazımiye","Ovacık","Pertek","Pülümür","Tunceli"), 
array("Akçakale","Birecik","Bozova","Ceylanpınar","Eyyübiye","Halfeti","Haliliye","Harran","Hilvan","Karaköprü","Siverek","Suruç","Viranşehir"), 
array("Banaz","Eşme","Karahallı","Sivaslı","Ulubey","Uşak"),
array("Bahçesaray","Başkale","Çaldıran","Çatak","Edremit","Erciş","Gevaş","Gürpınar","İpekyolu","Muradiye","Özalp","Saray","Tuşba"), 
array("Akdağmadeni","Aydıncık","Boğazlıyan","Çandır","Çayıralan","Çekerek","Kadışehri","Saraykent","Sarıkaya","Sorgun","Şefaatli","Yenifakılı","Yerköy","Yozgat"), 
array("Alaplı","Çaycuma","Devrek","Gökçebey","Kilimli","Kozlu","Karadeniz Ereğli","Zonguldak"), 
array("Ağaçören","Aksaray","Eskil","Gülağaç","Güzelyurt","Ortaköy","Sarıyahşi"), 
array("Aydıntepe","Bayburt (İl merkezi)","Demirözü"), 
array("Ayrancı","Başyayla","Ermenek","Karaman","Kazımkarabekir","Sarıveliler"), 
array("Bahşılı","Balışeyh","Çelebi","Delice","Karakeçili","Keskin","Kırıkkale","Sulakyurt","Yahşihan"),
array("Batman","Beşiri","Gercüş","Hasankeyf","Kozluk","Sason"), 
array("Beytüşşebap","Cizre","Güçlükonak","İdil","Silopi","Şırnak","Uludere"),
array("Amasra","Bartın","Kurucaşile","Ulus"), 
array("Ardahan","Çıldır","Damal","Göle","Hanak","Posof"), 
array("Aralık","Iğdır","Karakoyunlu","Tuzluca"), 
array("Altınova","Armutlu","Çınarcık","Çiftlikköy","Termal","Yalova"), 
array("Eflani","Eskipazar","Karabük","Ovacık","Safranbolu","Yenice"), 
array("Elbeyli","Kilis","Musabeyli","Polateli"), 
array("Bahçe","Düziçi","Hasanbeyli","Kadirli","Osmaniye","Sumbas","Toprakkale"), 
array("Akçakoca","Cumayeri","Çilimli","Düzce","Gölyaka","Gümüşova","Kaynaşlı","Yığılca"));
		
		
		
		// default yapıcı 
		public function __constructor() {
			
		}
		
		/**
		* 
		* 
		* @return array Şehir Listesi
		*/ 
		public static function getSehirListesi() {
			return self::$iller;
		}
		
		/**
		* 
		* @param int $plaka
		* 
		* @return String İl Adı
		*/
		public static function getSehir($plaka) {
			return self::$iller[$plaka];
			
		}
		
		/**
		* 
		* @param int $plaka
		* 
		* @return array İlçe Listesi
		*/
		public static function getIlceListesi($plaka) {
			
			return self::$ilceler[$plaka];
			
		}
		/**
		* 
		* @param int $plaka
		* @param int $ilceID
		* 
		* @return String İlçe Adı
		*/
		public static function getIlce($plaka,$ilceID) {
			
			return self::$ilceler[$plaka][$ilceID];
			
		}
		
		

	
	
	
	
	
	
}







?>