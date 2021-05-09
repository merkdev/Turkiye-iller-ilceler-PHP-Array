<?php

namespace MerkDev\Cities;

class Turkey
{

  /**
   * Manually created initial data
   */
  private $data = [
    "Adana" => [
      "name" => "Adana",
      "districts" => ["Aladağ", "Ceyhan", "Çukurova", "Feke", "İmamoğlu", "Karaisalı", "Karataş", "Kozan", "Pozantı", "Saimbeyli", "Sarıçam", "Seyhan", "Tufanbeyli", "Yumurtalık", "Yüreğir"]
    ],
    "Adıyaman" => [
      "name" => "Adıyaman",
      "districts" => ["Adıyaman", "Besni", "Çelikhan", "Gerger", "Gölbaşı", "Kâhta", "Samsat", "Sincik", "Tut"]
    ],
    "Afyonkarahisar" => [
      "name" => "Afyonkarahisar",
      "districts" => ["Afyonkarahisar", "Başmakçı", "Bayat", "Bolvadin", "Çay", "Çobanlar", "Dazkırı", "Dinar", "Emirdağ", "Evciler", "Hocalar", "İhsaniye", "İscehisar", "Kızılören", "Sandıklı", "Sinanpaşa", "Sultandağı", "Şuhut"]
    ],
    "Ağrı" => [
      "name" => "Ağrı",
      "districts" => ["Ağrı", "Diyadin", "Doğubayazıt", "Eleşkirt", "Hamur", "Patnos", "Taşlıçay", "Tutak"]
    ],
    "Aksaray" => [
      "name" => "Aksaray",
      "districts" => ["Ağaçören", "Aksaray", "Eskil", "Gülağaç", "Güzelyurt", "Ortaköy", "Sarıyahşi"]
    ],
    "Amasya" => [
      "name" => "Amasya",
      "districts" => ["Amasya", "Göynücek", "Gümüşhacıköy", "Hamamözü", "Merzifon", "Suluova", "Taşova"]
    ],
    "Ankara" => [
      "name" => "Ankara",
      "districts" => ["Akyurt", "Altındağ", "Ayaş", "Balâ", "Beypazarı", "Çamlıdere", "Çankaya", "Çubuk", "Elmadağ", "Etimesgut", "Evren", "Gölbaşı", "Güdül", "Haymana", "Kalecik", "Kahramankazan", "Keçiören", "Kızılcahamam", "Mamak", "Nallıhan", "Polatlı", "Pursaklar", "Sincan", "Şereflikoçhisar", "Yenimahalle"]
    ],
    "Antalya" => [
      "name" => "Antalya",
      "districts" => ["Akseki", "Aksu", "Alanya", "Döşemealtı", "Elmalı", "Finike", "Gazipaşa", "Gündoğmuş", "İbradı", "Demre", "Kaş", "Kemer", "Kepez", "Konyaaltı", "Korkuteli", "Kumluca", "Manavgat", "Muratpaşa", "Serik"]
    ],
    "Ardahan" => [
      "name" => "Ardahan",
      "districts" => ["Ardahan", "Çıldır", "Damal", "Göle", "Hanak", "Posof"]
    ],
    "Artvin" => [
      "name" => "Artvin",
      "districts" => ["Ardanuç", "Arhavi", "Artvin", "Borçka", "Hopa", "Murgul", "Şavşat", "Yusufeli"]
    ],
    "Aydın" => [
      "name" => "Aydın",
      "districts" => ["Bozdoğan", "Buharkent", "Çine", "Didim", "Efeler", "Germencik", "İncirliova", "Karacasu", "Karpuzlu", "Koçarlı", "Köşk", "Kuşadası", "Kuyucak", "Nazilli", "Söke", "Sultanhisar", "Yenipazar"]
    ],
    "Balıkesir" => [
      "name" => "Balıkesir",
      "districts" => ["Altıeylül", "Ayvalık", "Balya", "Bandırma", "Bigadiç", "Burhaniye", "Dursunbey", "Edremit", "Erdek", "Gömeç", "Gönen", "Havran", "İvrindi", "Karesi", "Kepsut", "Manyas", "Marmara", "Savaştepe", "Sındırgı", "Susurluk"]
    ],
    "Bartın" => [
      "name" => "Bartın",
      "districts" => ["Amasra", "Bartın", "Kurucaşile", "Ulus"]
    ],
    "Batman" => [
      "name" => "Batman",
      "districts" => ["Batman", "Beşiri", "Gercüş", "Hasankeyf", "Kozluk", "Sason"]
    ],
    "Bayburt" => [
      "name" => "Bayburt",
      "districts" => ["Aydıntepe", "Bayburt (İl merkezi)", "Demirözü"]
    ],
    "Bilecik" => [
      "name" => "Bilecik",
      "districts" => ["Bilecik", "Bozüyük", "Gölpazarı", "İnhisar", "Osmaneli", "Pazaryeri", "Söğüt", "Yenipazar"]
    ],
    "Bingöl" => [
      "name" => "Bingöl",
      "districts" => ["Adaklı", "Bingöl", "Genç", "Karlıova", "Kiğı", "Solhan", "Yayladere", "Yedisu"]
    ],
    "Bitlis" => [
      "name" => "Bitlis",
      "districts" => ["Adilcevaz", "Ahlat", "Bitlis", "Güroymak", "Hizan", "Mutki", "Tatvan"]
    ],
    "Bolu" => [
      "name" => "Bolu",
      "districts" => ["Bolu", "Dörtdivan", "Gerede", "Göynük", "Kıbrıscık", "Mengen", "Mudurnu", "Seben", "Yeniçağa"]
    ],
    "Burdur" => [
      "name" => "Burdur",
      "districts" => ["Ağlasun", "Altınyayla", "Bucak", "Burdur", "Çavdır", "Çeltikçi", "Gölhisar", "Karamanlı", "Kemer", "Tefenni", "Yeşilova"]
    ],
    "Bursa" => [
      "name" => "Bursa",
      "districts" => ["Büyükorhan", "Gemlik", "Gürsu", "Harmancık", "İnegöl", "İznik", "Karacabey", "Keles", "Kestel", "Mudanya", "Mustafakemalpaşa", "Nilüfer", "Orhaneli", "Orhangazi", "Osmangazi", "Yenişehir", "Yıldırım"]
    ],
    "Çanakkale" => [
      "name" => "Çanakkale",
      "districts" => ["Ayvacık", "Bayramiç", "Biga", "Bozcaada", "Çan", "Çanakkale", "Eceabat", "Ezine", "Gelibolu", "Gökçeada", "Lapseki", "Yenice"]
    ],
    "Çankırı" => [
      "name" => "Çankırı",
      "districts" => ["Atkaracalar", "Bayramören", "Çankırı", "Çerkeş", "Eldivan", "Ilgaz", "Kızılırmak", "Korgun", "Kurşunlu", "Orta", "Şabanözü", "Yapraklı"]
    ],
    "Çorum" => [
      "name" => "Çorum",
      "districts" => ["Alaca", "Bayat", "Boğazkale", "Çorum", "Dodurga", "İskilip", "Kargı", "Laçin", "Mecitözü", "Oğuzlar", "Ortaköy", "Osmancık", "Sungurlu", "Uğurludağ"]
    ],
    "Denizli" => [
      "name" => "Denizli",
      "districts" => ["Acıpayam", "Babadağ", "Baklan", "Bekilli", "Beyağaç", "Bozkurt", "Buldan", "Çal", "Çameli", "Çardak", "Çivril", "Güney", "Honaz", "Kale", "Merkezefendi", "Pamukkale", "Sarayköy", "Serinhisar", "Tavas"]
    ],
    "Diyarbakır" => [
      "name" => "Diyarbakır",
      "districts" => ["Bağlar", "Bismil", "Çermik", "Çınar", "Çüngüş", "Dicle", "Eğil", "Ergani", "Hani", "Hazro", "Kayapınar", "Kocaköy", "Kulp", "Lice", "Silvan", "Sur", "Yenişehir"]
    ],
    "Düzce" => [
      "name" => "Düzce",
      "districts" => ["Akçakoca", "Cumayeri", "Çilimli", "Düzce", "Gölyaka", "Gümüşova", "Kaynaşlı", "Yığılca"]
    ],
    "Edirne" => [
      "name" => "Edirne",
      "districts" => ["Enez", "Havsa", "İpsala", "Keşan", "Lalapaşa", "Meriç", "Merkez", "Süloğlu", "Uzunköprü"]
    ],
    "Elâzığ" => [
      "name" => "Elâzığ",
      "districts" => ["Ağın", "Alacakaya", "Arıcak", "Baskil", "Elâzığ", "Karakoçan", "Keban", "Kovancılar", "Maden", "Palu", "Sivrice"]
    ],
    "Erzincan" => [
      "name" => "Erzincan",
      "districts" => ["Çayırlı", "Erzincan", "İliç", "Kemah", "Kemaliye", "Otlukbeli", "Refahiye", "Tercan", "Üzümlü"]
    ],
    "Erzurum" => [
      "name" => "Erzurum",
      "districts" => ["Aşkale", "Aziziye", "Çat", "Hınıs", "Horasan", "İspir", "Karaçoban", "Karayazı", "Köprüköy", "Narman", "Oltu", "Olur", "Palandöken", "Pasinler", "Pazaryolu", "Şenkaya", "Tekman", "Tortum", "Uzundere", "Yakutiye"]
    ],
    "Eskişehir" => [
      "name" => "Eskişehir",
      "districts" => ["Alpu", "Beylikova", "Çifteler", "Günyüzü", "Han", "İnönü", "Mahmudiye", "Mihalgazi", "Mihalıççık", "Odunpazarı", "Sarıcakaya", "Seyitgazi", "Sivrihisar", "Tepebaşı"]
    ],
    "Gaziantep" => [
      "name" => "Gaziantep",
      "districts" => ["Araban", "İslahiye", "Karkamış", "Nizip", "Nurdağı", "Oğuzeli", "Şahinbey", "Şehitkâmil", "Yavuzeli"]
    ],
    "Giresun" => [
      "name" => "Giresun",
      "districts" => ["Alucra", "Bulancak", "Çamoluk", "Çanakçı", "Dereli", "Doğankent", "Espiye", "Eynesil", "Giresun", "Görele", "Güce", "Keşap", "Piraziz", "Şebinkarahisar", "Tirebolu", "Yağlıdere"]
    ],
    "Gümüşhane" => [
      "name" => "Gümüşhane",
      "districts" => ["Gümüşhane", "Kelkit", "Köse", "Kürtün", "Şiran", "Torul"]
    ],
    "Hakkâri" => [
      "name" => "Hakkâri",
      "districts" => ["Çukurca", "Hakkâri", "Şemdinli", "Yüksekova"]
    ],
    "Hatay" => [
      "name" => "Hatay",
      "districts" => ["Altınözü", "Antakya", "Arsuz", "Belen", "Defne", "Dörtyol", "Erzin", "Hassa", "İskenderun", "Kırıkhan", "Kumlu", "Payas", "Reyhanlı", "Samandağ", "Yayladağı"]
    ],
    "Iğdır" => [
      "name" => "Iğdır",
      "districts" => ["Aralık", "Iğdır", "Karakoyunlu", "Tuzluca"]
    ],
    "Isparta" => [
      "name" => "Isparta",
      "districts" => ["Aksu", "Atabey", "Eğirdir", "Gelendost", "Gönen", "Isparta", "Keçiborlu", "Senirkent", "Sütçüler", "Şarkikaraağaç", "Uluborlu", "Yalvaç", "Yenişarbademli"]
    ],
    "İstanbul" => [
      "name" => "İstanbul",
      "districts" => ["Adalar", "Arnavutköy", "Ataşehir", "Avcılar", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", "Beşiktaş", "Beykoz", "Beylikdüzü", "Beyoğlu", "Büyükçekmece", "Çatalca", "Çekmeköy", "Esenler", "Esenyurt", "Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sancaktepe", "Sarıyer", "Silivri", "Sultanbeyli", "Sultangazi", "Şile", "Şişli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"]
    ],
    "İzmir" => [
      "name" => "İzmir",
      "districts" => ["Aliağa", "Balçova", "Bayındır", "Bayraklı", "Bergama", "Beydağ", "Bornova", "Buca", "Çeşme", "Çiğli", "Dikili", "Foça", "Gaziemir", "Güzelbahçe", "Karabağlar", "Karaburun", "Karşıyaka", "Kemalpaşa", "Kınık", "Kiraz", "Konak", "Menderes", "Menemen", "Narlıdere", "Ödemiş", "Seferihisar", "Selçuk", "Tire", "Torbalı", "Urla"]
    ],
    "Kahramanmaraş" => [
      "name" => "Kahramanmaraş",
      "districts" => ["Afşin", "Andırın", "Çağlayancerit", "Dulkadiroğlu", "Ekinözü", "Elbistan", "Göksun", "Nurhak", "Onikişubat", "Pazarcık", "Türkoğlu"]
    ],
    "Karabük" => [
      "name" => "Karabük",
      "districts" => ["Eflani", "Eskipazar", "Karabük", "Ovacık", "Safranbolu", "Yenice"]
    ],
    "Karaman" => [
      "name" => "Karaman",
      "districts" => ["Ayrancı", "Başyayla", "Ermenek", "Karaman", "Kazımkarabekir", "Sarıveliler"]
    ],
    "Kars" => [
      "name" => "Kars",
      "districts" => ["Akyaka", "Arpaçay", "Digor", "Kağızman", "Kars", "Sarıkamış", "Selim", "Susuz"]
    ],
    "Kastamonu" => [
      "name" => "Kastamonu",
      "districts" => ["Abana", "Ağlı", "Araç", "Azdavay", "Bozkurt", "Cide", "Çatalzeytin", "Daday", "Devrekani", "Doğanyurt", "Hanönü", "İhsangazi", "İnebolu", "Kastamonu", "Küre", "Pınarbaşı", "Seydiler", "Şenpazar", "Taşköprü", "Tosya"]
    ],
    "Kayseri" => [
      "name" => "Kayseri",
      "districts" => ["Akkışla", "Bünyan", "Develi", "Felahiye", "Hacılar", "İncesu", "Kocasinan", "Melikgazi", "Özvatan", "Pınarbaşı", "Sarıoğlan", "Sarız", "Talas", "Tomarza", "Yahyalı", "Yeşilhisar"]
    ],
    "Kırıkkale" => [
      "name" => "Kırıkkale",
      "districts" => ["Bahşılı", "Balışeyh", "Çelebi", "Delice", "Karakeçili", "Keskin", "Kırıkkale", "Sulakyurt", "Yahşihan"]
    ],
    "Kırklareli" => [
      "name" => "Kırklareli",
      "districts" => ["Babaeski", "Demirköy", "Kırklareli", "Kofçaz", "Lüleburgaz", "Pehlivanköy", "Pınarhisar", "Vize"]
    ],
    "Kırşehir" => [
      "name" => "Kırşehir",
      "districts" => ["Akçakent", "Akpınar", "Boztepe", "Çiçekdağı", "Kaman", "Kırşehir", "Mucur"]
    ],
    "Kilis" => [
      "name" => "Kilis",
      "districts" => ["Elbeyli", "Kilis", "Musabeyli", "Polateli"]
    ],
    "Kocaeli" => [
      "name" => "Kocaeli",
      "districts" => ["Başiskele", "Çayırova", "Darıca", "Derince", "Dilovası", "Gebze", "Gölcük", "İzmit", "Kandıra", "Karamürsel", "Kartepe", "Körfez"]
    ],
    "Konya" => [
      "name" => "Konya",
      "districts" => ["Ahırlı", "Akören", "Akşehir", "Altınekin", "Beyşehir", "Bozkır", "Cihanbeyli", "Çeltik", "Çumra", "Derbent", "Derebucak", "Doğanhisar", "Emirgazi", "Ereğli", "Güneysınır", "Hadım", "Halkapınar", "Hüyük", "Ilgın", "Kadınhanı", "Karapınar", "Karatay", "Kulu", "Meram", "Sarayönü", "Selçuklu", "Seydişehir", "Taşkent", "Tuzlukçu", "Yalıhüyük", "Yunak"]
    ],
    "Kütahya" => [
      "name" => "Kütahya",
      "districts" => ["Altıntaş", "Aslanapa", "Çavdarhisar", "Domaniç", "Dumlupınar", "Emet", "Gediz", "Hisarcık", "Kütahya", "Pazarlar", "Şaphane", "Simav", "Tavşanlı"]
    ],
    "Malatya" => [
      "name" => "Malatya",
      "districts" => ["Akçadağ", "Arapgir", "Arguvan", "Battalgazi", "Darende", "Doğanşehir", "Doğanyol", "Hekimhan", "Kale", "Kuluncak", "Pütürge", "Yazıhan", "Yeşilyurt"]
    ],
    "Manisa" => [
      "name" => "Manisa",
      "districts" => ["Ahmetli", "Akhisar", "Alaşehir", "Demirci", "Gölmarmara", "Gördes", "Kırkağaç", "Köprübaşı", "Kula", "Salihli", "Sarıgöl", "Saruhanlı", "Selendi", "Soma", "Şehzadeler", "Turgutlu", "Yunusemre"]
    ],
    "Mardin" => [
      "name" => "Mardin",
      "districts" => ["Artuklu", "Dargeçit", "Derik", "Kızıltepe", "Mazıdağı", "Midyat", "Nusaybin", "Ömerli", "Savur", "Yeşilli"]
    ],
    "Mersin" => [
      "name" => "Mersin",
      "districts" => ["Akdeniz", "Anamur", "Aydıncık", "Bozyazı", "Çamlıyayla", "Erdemli", "Gülnar", "Mezitli", "Mut", "Silifke", "Tarsus", "Toroslar", "Yenişehir"]
    ],
    "Muğla" => [
      "name" => "Muğla",
      "districts" => ["Bodrum", "Dalaman", "Datça", "Fethiye", "Kavaklıdere", "Köyceğiz", "Marmaris", "Menteşe", "Milas", "Ortaca", "Seydikemer", "Ula", "Yatağan"]
    ],
    "Muş" => [
      "name" => "Muş",
      "districts" => ["Bulanık", "Hasköy", "Korkut", "Malazgirt", "Muş", "Varto"]
    ],
    "Nevşehir" => [
      "name" => "Nevşehir",
      "districts" => ["Acıgöl", "Avanos", "Derinkuyu", "Gülşehir", "Hacıbektaş", "Kozaklı", "Nevşehir", "Ürgüp"]
    ],
    "Niğde" => [
      "name" => "Niğde",
      "districts" => ["Altunhisar", "Bor", "Çamardı", "Çiftlik", "Niğde", "Ulukışla"]
    ],
    "Ordu" => [
      "name" => "Ordu",
      "districts" => ["Akkuş", "Altınordu", "Aybastı", "Çamaş", "Çatalpınar", "Çaybaşı", "Fatsa", "Gölköy", "Gülyalı", "Gürgentepe", "İkizce", "Kabadüz", "Kabataş", "Korgan", "Kumru", "Mesudiye", "Perşembe", "Ulubey", "Ünye"]
    ],
    "Osmaniye" => [
      "name" => "Osmaniye",
      "districts" => ["Bahçe", "Düziçi", "Hasanbeyli", "Kadirli", "Osmaniye", "Sumbas", "Toprakkale"]
    ],
    "Rize" => [
      "name" => "Rize",
      "districts" => ["Ardeşen", "Çamlıhemşin", "Çayeli", "Derepazarı", "Fındıklı", "Güneysu", "Hemşin", "İkizdere", "İyidere", "Kalkandere", "Pazar", "Rize"]
    ],
    "Sakarya" => [
      "name" => "Sakarya",
      "districts" => ["Adapazarı", "Akyazı", "Arifiye", "Erenler", "Ferizli", "Geyve", "Hendek", "Karapürçek", "Karasu", "Kaynarca", "Kocaali", "Pamukova", "Sapanca", "Serdivan", "Söğütlü", "Taraklı"]
    ],
    "Samsun" => [
      "name" => "Samsun",
      "districts" => ["Alaçam", "Asarcık", "Atakum", "Ayvacık", "Bafra", "Canik", "Çarşamba", "Havza", "İlkadım", "Kavak", "Ladik", "Ondokuzmayıs", "Salıpazarı", "Tekkeköy", "Terme", "Vezirköprü", "Yakakent"]
    ],
    "Siirt" => [
      "name" => "Siirt",
      "districts" => ["Siirt", "Tillo", "Baykan", "Eruh", "Kurtalan", "Pervari", "Şirvan"]
    ],
    "Sinop" => [
      "name" => "Sinop",
      "districts" => ["Ayancık", "Boyabat", "Dikmen", "Durağan", "Erfelek", "Gerze", "Saraydüzü", "Sinop", "Türkeli"]
    ],
    "Sivas" => [
      "name" => "Sivas",
      "districts" => ["Akıncılar", "Altınyayla", "Divriği", "Doğanşar", "Gemerek", "Gölova", "Hafik", "İmranlı", "Kangal", "Koyulhisar", "Sivas", "Suşehri", "Şarkışla", "Ulaş", "Yıldızeli", "Zara", "Gürün"]
    ],
    "Şanlıurfa" => [
      "name" => "Şanlıurfa",
      "districts" => ["Akçakale", "Birecik", "Bozova", "Ceylanpınar", "Eyyübiye", "Halfeti", "Haliliye", "Harran", "Hilvan", "Karaköprü", "Siverek", "Suruç", "Viranşehir"]
    ],
    "Şırnak" => [
      "name" => "Şırnak",
      "districts" => ["Beytüşşebap", "Cizre", "Güçlükonak", "İdil", "Silopi", "Şırnak", "Uludere"]
    ],
    "Tekirdağ" => [
      "name" => "Tekirdağ",
      "districts" => ["Çerkezköy", "Çorlu", "Ergene", "Hayrabolu", "Kapaklı", "Malkara", "Marmara Ereğlisi", "Muratlı", "Saray", "Süleymanpaşa", "Şarköy"]
    ],
    "Tokat" => [
      "name" => "Tokat",
      "districts" => ["Almus", "Artova", "Başçiftlik", "Erbaa", "Niksar", "Pazar", "Reşadiye", "Sulusaray", "Tokat", "Turhal", "Yeşilyurt", "Zile"]
    ],
    "Trabzon" => [
      "name" => "Trabzon",
      "districts" => ["Akçaabat", "Araklı", "Arsin", "Beşikdüzü", "Çarşıbaşı", "Çaykara", "Dernekpazarı", "Düzköy", "Hayrat", "Köprübaşı", "Maçka", "Of", "Ortahisar", "Sürmene", "Şalpazarı", "Tonya", "Vakfıkebir", "Yomra"]
    ],
    "Tunceli" => [
      "name" => "Tunceli",
      "districts" => ["Çemişgezek", "Hozat", "Mazgirt", "Nazımiye", "Ovacık", "Pertek", "Pülümür", "Tunceli"]
    ],
    "Uşak" => [
      "name" => "Uşak",
      "districts" => ["Banaz", "Eşme", "Karahallı", "Sivaslı", "Ulubey", "Uşak"]
    ],
    "Van" => [
      "name" => "Van",
      "districts" => ["Bahçesaray", "Başkale", "Çaldıran", "Çatak", "Edremit", "Erciş", "Gevaş", "Gürpınar", "İpekyolu", "Muradiye", "Özalp", "Saray", "Tuşba"]
    ],
    "Yalova" => [
      "name" => "Yalova",
      "districts" => ["Altınova", "Armutlu", "Çınarcık", "Çiftlikköy", "Termal", "Yalova"]
    ],
    "Yozgat" => [
      "name" => "Yozgat",
      "districts" => ["Akdağmadeni", "Aydıncık", "Boğazlıyan", "Çandır", "Çayıralan", "Çekerek", "Kadışehri", "Saraykent", "Sarıkaya", "Sorgun", "Şefaatli", "Yenifakılı", "Yerköy", "Yozgat"]
    ],
    "Zonguldak" => [
      "name" => "Zonguldak",
      "districts" => ["Alaplı", "Çaycuma", "Devrek", "Gökçebey", "Kilimli", "Kozlu", "Karadeniz Ereğli", "Zonguldak"]
    ]
  ];

  /**
   * Holds the requested data
   */
  private $filter;

  /**
   * Selects which city to return or *
   *
   * @param array | '*' $city_names
   * @return $this->filter
   */
  public function select($city_names = '*')
  {
    $this->filter = [];
    if (is_array($city_names)) {
      array_map(function ($city) {
        return $this->filter[] = $this->data[$city];
      }, $city_names);
    } elseif ($city_names == '*') {
      array_map(function ($city) {
        array_push($this->filter, $city);
        // return $this->filter[] = $city;
      }, $this->data);
    }
    return $this;
  }

  /**
   * Returns the requested data
   *
   * @return array
   */
  public function get()
  {
    return $this->filter;
  }
}
