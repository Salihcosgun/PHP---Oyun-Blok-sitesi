<?php include 'inc/header.php'; 

$haber = $_GET['haber'] ?? null;

if ($haber == 'the-last-of-us-3-hikaye-taslagi-olusturuldu') {
	$baslik = 'The Last of Us 3\'ü Bekleyenleri Heyecanlandıran Açıklama: Hikaye Taslağı Oluşturuldu';
	$tarih = '26-01-2021';
	$kategori = 'OYUN';
	$gorsel = 'assets/images/ofus.webp';
	$aciklama = 'Naughty Dog üst düzey yöneticisi Neil Druckmann, efsane hale gelen PlayStation 4 oyunu The Last of Us ile ilgili önemli açıklamalarda bulundu. Oyunun yeni bir sürümü için hikaye taslağının oluşturulduğunu açıklayan Druckmann, oyunla ilgili somut bir adımınsa şimdilik olmadığını duyurdu.
PlayStation ekosisteminin en çok sevilen oyunlarından bir tanesi olan The Last of Us ile ilgili yeni bir gelişme yaşandı. Naughty Dog\'un üst düzey yöneticilerinden Neil Druckmann, "Script Apart" isimli bir podcast yayınında bu oyunla ilgili önemli açıklamalarda bulundu. Oyunun ikinci bölümünün hikayesini yazan Halley Gross ile kendisinin yeni bir çalışma üzerinde olduğunu söyleyen Druckmann, bu çalışma kapsamında The Last of Us 3\'ün hikayesinin bir ön taslağının oluşturulduğunu açıkladı.

Druckmann, oluşturdukları taslağın gerçek bir oyun haline gelip gelmeyeceğinden bile emin değil. Zaten oluşturulan şeyin hikayenin ana hatlarını kapsadığını ve üzerine hala çalışılması gerektiğini söyleyen Naughty Dog yöneticisi, hikaye ile ilgili neler açıklayacağından kendisinin bile emin olmadığını ifade ediyor.';
}
elseif ($haber == 'xbox-game-pass') {
	$baslik = 'Xbox Game Pass';
	$tarih = '20-01-2021';
	$kategori = 'XBOX';
	$gorsel = 'assets/images/xbox.jpg';
	$aciklama = 'Xbox Game Pass ile 100’ün üzerinde bilgisayar oyununa anında erişin! Sürekli eklenen yeni oyunlar ile benzeri görülmemiş bir oyun kütüphanesine sahip olun! İlk kez yayımlanan oyunlara erken erişim ve özel indirimler gibi sadece Game Pass üyelerine sunulan avantajlı fırsatlardan yararlanabilirsiniz. Xbox kapılarını Game Pass ile bilgisayar oyuncularına sunuyor. Siz de her ay eklenen ve yeni oyunlar arasından favori oyunlarını seçebilir ve kendi kütüphaneni yaratabilirsiniz. Xbox Game Pass for PC nasıl kullanılır? Xbox Game Pass ile her ay yenilenen kütüphanesinde 100’ün üzerinde oyuna erişim imkanı veriyor. Xbox Game Pass Studios’un ilk kez yayınlanan oyunlarına erişime açıldıkları gün bilgisayarınızda oynayarak arkadaşlarınızla birlikte oyun oynarken sohbet edebilir ve onların oyunlarını takip edebilirsiniz. Xbox Game Pass özellikle bilgisayar oyuncuları için tasarlanan bir Xbox uygulama hizmetidir. Windows 10 bilgisayarlar için Xbox uygulamasını kurup ve bu uygulama üzerinden erişebileceğiniz zengin oyun kütüphanesinden oluşmaktadır. Sürekli eklenen oyunları takip etmek için devamlı olarak kataloğa son eklenenleri gözden geçirin. Xbox Game Pass Ultimate farkı nedir? Xbox Game Pass Ultimate ile Xbox Live Gold’un sunduğu hizmetler hem de Game Pass’ın sadece bilgisayar için sınırlandırğı erişiminden farklı olarak dilediğiniz oyunu ister Xbox oyun konsolunuzda ya da isterseniz Windows 10 bilgisayarınızda erişim imkanına sahip olursunuz. Dünya genelinde en popüler ve en çok oynanan bilgisayar ve konsol oyunları Xbox Game Pass Ultimate sürümü ile favori oyununuzu seçip ister pc, isterseniz de xbox oyun konsolunda oynayabilirsiniz !';
}
elseif ($haber == 'yildiz-savaslari-filolar-in-hikayesiyle-devam-ediyor') {
	$baslik = 'Yıldız Savaşları Filolar’ın hikayesiyle devam ediyor';
	$tarih = '11-01-2021';
	$kategori = 'OYUN';
	$gorsel = 'assets/images/starwars.jpg';
	$aciklama = 'Yepyeni bir hikaye ile karşı karşıyayız. Star Wars Squadrons, filoların hikayesi! İmparatorluk Endor’un ardından ıssız kaldıkça saldırılara açık kaldı. Yeni Cumhuriyet ise zorlu filoyu durdurmak için bir plan hazırladı. Ya Yeni Cumhuriyet için bir özgürlük savaşçısı olacaksın ya da İmparatorluk Donanması’nda sert bir asker! Motive Studios, Lucasfilm ve EA Games ortaklığında 2 Ekim 2020\'de yayınlanan Star Wars Squadrons, tek oyuncu olarak başlayan bu güçlü hikaye kurgusunda çok oyunculu Dogfight moduyla 5v5 karşılaşmaların yer aldığı filo ekibiyle ilerleyeceksin. İstersen tüm hikayeyi VR olarak da oynayabilirsin. Bu karşılaşmalar oyun kilitlerini açmak açısından çok önemli! Puanlar biriktirmeli ve gemini güçlendirerek zafere ulaştırmalısın. 5 Pilot! 1 Filo! Farklı yeteneklere sahip 5 kişilik yıldız savaşçılarından biri olarak ekipte yerini al, zorlu savaşlarda uzmanlaşabilir ve ekibine stratejilerinle öncülük edebilirsin.';
}
elseif ($haber == 'lunacy-saint-rhodes') {
	$baslik = 'Lunacy : Saint Rhodes';
	$tarih = '20-01-2021';
	$kategori = 'OYUN';
	$gorsel = 'assets/images/lunacy.jpg';
	$aciklama = 'Lunacy Saint Rhodes İnceleme Yayımcılığını Iceberg Interactive firmasının üstlendiği ve Lazarus Studio tarafından geliştirilen Lunacy : Saint Rhodes adındaki birinci şahıs korku oyunu kısa bir süre sonra çıkmak için hazırlanıyor. 2020\'de çıkması beklenen oyun bir çok yönden yenilikler içeriyor. Bunlardan en önemlisi yapay zeka sanırım. Çünkü oyun içerisinde yaptığınız her hareket, durum inceleniyor. Yani izleniyorsunuz. Bu gelişmiş yapay zeka sistemine "The Author" yani "Yazar" deniyor. Karşınıza çıkacak olanlar olaylar sürekli değişkenlik gösterecek. Aziz Rodos kasabasında yaptığınız her seçim sizi başka bir yöne doğru ilerletiyor. Birden fazla ve doğrusal olmayan hikaye çizgileriyle sizin için hikayeyi sürekli değiştiren bir oyun Lunacy : Saint Rhodes. Oyun sürekli değişkenlik gösterdiği için her oynadığınızda farklı bir son görebilme ihtimaliniz var. Oyun geliştiricileri oyuncular için sürekli bir gerilim havası yaratmayı amaçlamışlar. Korku ve hayatta kalma türlerini harmanlamış ve oyuncuları beğenisine sunuyor. Korku türü seven oyuncular için gerçekten denenmesi gereken bir yapım. Uzun soluklu kendini tekrar etmeyen bu yapım tam size göre.';
}

elseif ($haber == 'dying-light-2-ne-zaman-cikacak') {
	$baslik = 'Dying Light 2 ne zaman çıkacak?';
	$tarih = '24-01-2021';
	$kategori = 'OYUN';
	$gorsel = 'assets/images/dying.jpg';
	$aciklama = 'Heyecanla beklenen oyun Dying Light 2\'nin, önceki serileri bugüne kadar güçlü kurgu, en iyi performans gösteren aksiyon oyun olması gibi bugüne kadar 50\'den fazla ödüle layık görülmüş bir yapımdır. Dying Light 2’nin de sevenleri tarafından bu kadar büyük bir heyecan ile bekleniyor olması, bu yönden şaşırtıcı değildir. Kesin olmayan bir tarihe ertelenmesiyle birlikte Dying Light 2’nin çıkış tarihi ile ilgili resmi bir açıklama duyurulmasa da oyunun 2. çeyrekte çıkması bekleniyor. Oynanış videosunun yayınlanmasıyla birlikte serinin devamını takip eden oyuncu kitlesi tarafından merakla beklenen Dying Light 2 son açıklamasıyla gündemi koruyor, hepinizin hatırlayacağı üzerine Techland Ocak ayında yaptığı açıklamasında sizlere daha iyi bir Dying Light sunmayı amaçlıyoruz, sözlerine yer vermişti. Birinci şahıs hayatta kalma oyunu olan Dying Light serisi, zombilerle çevrili bir dünyada mücadeleye dayalı olarak ilerliyor. Serinin devamı olan Dying Light 2’de ise kahramanımız Aiden Caldwell gözüyle bu karanlık zombi çağına tanıklık edeceksiniz. Son büyük insan yerleşimi modern karanlık bir çağa gömülmüş. Bu şehrin kaderi ise tamamen sizin elinizde... Virüs insanlığa karşı galibiyet kazanalı tam 15 yıl olmuşken, şimdi ise çevik ve güçlü yetenekleriniz, zekice hamleleriniz ile değişikliği ve yeniliği siz getirebilirsiniz. Dying Light 2’yi 2 ya da 4 kişi olarak oynayabilir arkadaşlarınızla birlikte bu karanlık zamanın zombilerine karşı dayanışma halinde ilerleyebilirsiniz. Alacağınız kararlar farklı sonuçları da beraberinde getirecektir.';
}
elseif ($haber == 'tatilde-keyifle-oynayabileceginiz-10-oyun') {
	$baslik = 'Tatilde Keyifle Oynayabileceğiniz 10 Oyun';
	$tarih = '23-05-2021';
	$kategori = 'OYUN';
	$gorsel = 'assets/images/games.jpg';
	$aciklama = 'Oyunseverlerin tatilde keyifle oynayabileceği 10 oyunu sizler için listeledik. Geçtiğimiz yıl en çok tercih edilen oyunların başında gelen bu oyunların aynı zamanda serileri de her yaştan oyuncu kitlesiyle yıllardır oynanmaya devam ediyor. Monster Hunter World: Iceborne Monster Hunter World bir çok oyuncu tarafından sevilerek oynanıyor. Geçtiğimiz günlerde yayınlanan Iceborne paketi ile başka bir havaya bürünen oyun, yepyeni avlanma mekanikleri sunuyor. Hoarfrost Reach bölgesinde yeni canavarları ve farklı atmosferi ile etkileyici görsel bir şölen yaşatıyor. PUBG (PlayerUnknown’sBattleground) Her kitle tarafından sevilen PUBG 6.sezonuna geldi. Karakin Adası! Yeni gelen bu sezonla birlikte 64 oyunculu bir harita modu PUBG severleri bekliyor. FIFA20 FIFA\'yı diğer serilerinden özellikle ayıran 2020 versiyonunda eklenen Volta Football! FIFA 20, hem playstation da hem de pc platformunda çok sevildi. FIFA20\'de farklı büyüklüklerdeki arenalarda 3’e 3 isterseniz de 4’e 4 mücadeleler gerçekleştirebilir, sahayı ya da karakterinizin görünüşünüzü değiştirebilirsiniz. Oyun mekaniklerinde ise yeni şut açıları, top odaklı hareketleri, slalom dribling gibi farklı özelliklerini görebilirsiniz. Assassins Creed Syndicate Hikayemiz 1868 yılında Londra\'da geçmektir. Sanayileşmenin arttığı zamanlarda bu şehirdeki sistem bozulmaya başlamış, çeteler her yeri kuşatmaya başlamıştır.Bizim görevimiz bu düzeni yıkmak. Oyunda görev çeşitliliği gerçekten çok fazla. Atmosferi ise diğer Assassin’s Creed serilerinde olduğu gibi mekansal algısı çok güçlü görselliğe sahip olduğundan, Londra sokaklarında dolaşıyormuş gibi bir his veriyor. GTA 5 Farklı karakterler kontrol edebildiğiniz bu oyunda yeni bir gta (grand theft auto) deneyimi sizlerle. Ayrıca Online Modu da mevcut. 3 karakteri kontrol edebiliyoruz.Bunlar; Franklin, Trevor ve Michael. Resident Evil 2 2019’un en iyi korku-aksiyon oyunlarından seçilen Resident Evil 2, hayatımıza ilk olarak 22 yıl önce girdi. Tüm serilerinde olduğu gibi aksiyon, heyecan ve hikayesindeki kurgusal gerçekliği ile karşımıza çıkıyor. GTFO Yepyeni bir korku-fps türü olan oyun GTFO’da 4 kişilik bir ekiple co-op mücadele farkını deneyimleyip keşif planınızı yapacak ve harekete geçeceksiniz,bu bir ekip işi. Tüm güçlerinizi birleştirin! Battlefield 5 İkinci dünya savaşını konu alan Battlefield 5 sizi tamamen bir savaşın ortasında, savaşın tüm gerçekliği ile yüzleştiriyor. Battlefield Serisinin son oyunu olan Battlefield 5 ile savaşı iliklerinize kadar hissedin. Efootball PES2020 PES2020; E3 2019’da ‘Best Sports Game’ ödülünü alarak karşımıza heyecan verici özellikleriyle çıktı. Finesse Dribble incelikli top sürme becerileri, rakiplerinin hareketlerini tahmin edebilen oyuncu sezgileri, top kontrol mekanikleri, dokunmadan kontrol etme gibi özellikleri ile Andres Iniesta ile PES2020’de online rekabette Matchday organizasyonlar düzenleyebilir, Master League ile Maradonna gibi büyük isimlerle takımlarını yönetebilirsin. Wolfenstein II: The New Colossus 1961 yılının Amerikası’nda geçen öyküde, Naziler savaşı kazanmış, her yerde üstünlüklerini koruyarak tüm dünyaya egemen olmak hızla ilerliyorlardı. BJ Blazkowicz ise direniş üyeleriyle birlikte bu imparatorluğu yıkmak ve Özgür Amerika’yı yeniden sağlamak için Nazilere karşı yoğun çarpışmalarda yer almalısınız. Size düşen bu mücadeleyi zaferle sonuçlandırmak!';
}
elseif ($haber == 'green-beret-commandos-2-geri-donuyor') {
	$baslik = 'Green Beret Commandos 2 geri dönüyor!';
	$tarih = '24-05-2021';
	$kategori = 'OYUN';
	$gorsel = 'assets/images/command.jpg';
	$aciklama = 'Commandos: ‘Coming Over!’ Commandos oyunlarına aşina olmayan arkadaşlar için kısa bir özet geçelim. Commandos 1998 yılında piyasaya sürülmüş en acımasız strateji serisiydi. Commandos serisinde küçük bir askeri takımı yönetmekle sorumluyduk ve bu ekip içerisindeki her bir askerin kendine göre özel yetenekleri ve profesyonellik alanları bulunuyordu. Genellikle amacımız, dünyanın farklı yerlerinde bulunan Alman üstlerine sızma, sabotaj, suikast ve gizli bilgileri ele geçirmek üzerineydi. Tabii bunları yaparken mutlak gizlilik gerekiyordu. Silah kullanmak ise kesinlikle son seçeneğinizdi. Silah sesini duyan tüm Alman askerleri fırından yeni çıkmış ekmeğe koşar gibi yanınızda bitiyor ve tüm ekibinizi ablukaya alarak görevin sonlanmasına sebep veriyorlardı. Oyun içerisideki her karakterin kesinlikle işe yaradığını ve yeri geldiğinde biri olmadan görevleri tamamlamakta fazlasıyla zorlanacağınızı da ayrıca belirtmek isterim. 90’ların en özlediği Green Beret cümleleri arasında olan “I will be right there”, “Coming over” yakın zamanda yine kulaklarımızı şenlendirecektir. Bugüne kadar birçok oyuna ilham olmuş Commandos’un, günümüz oyunlarından Daedalic firmasına ait olan ve oyunfor.com üzerinden sahip olabileceğiniz Shadow Tactics Blades of the Shogun isimli oyununun tamamen bu oyun üzerinden esinlendiğini de söylemek yanlış olmayacaktı Gözler Kalpyso’da Ignacio Perez oyunun çıkışına dair kesin bir tarih söylemese de Commandos 2 HD Remaster’ın Kalpyso tarafından bu yıl sonunda PS4, PC, Xbox One, Nintendo Switch ve mobil cihazlarda yayınlanması bekleniyor.';
}
elseif ($haber == 'warcraft-iii-reforged-cikis-tarihi-belli-oldu') {
	$baslik = 'Warcraft III: Reforged çıkış tarihi belli oldu!';
	$tarih = '25-05-2021';
	$kategori = 'OYUN';
	$gorsel = 'assets/images/warcraft.jpg';
	$aciklama = 'Warcraft III: Reforged için çıkış tarihi belli oldu. 2018 yılında tanıtımı yapılan oyun 28 Ocak 2020\'de pc platformunda çıkıyor. Beta aşamasındaki oyunu bugün itibariyle ön sipariş vererek sahip olabilirsiniz. 2018 yılında duyurulduğu andan itibaren tüm oyuncuların gözlerini çıkış tarihine diktiği Warcraft III: Reforged; Warcraft 3’ün tümüyle yenilenmiş haliyle karşımıza çıkıyor. Etkileyici grafik ve görsellerin yer aldığı gerçek zamanlı strateji oyununda, farklı eşleştirme sistemi, 4K çözünürlüğü ile adeta savaş alanında Orgrimmar’ın Kuruluşu, Lordaeron’un yıkılışı, Yanan Lejyonun hükümdarlığı, Lich King’in yükselişi, Gaziler ve yeni gelenler ile bu önemli olayları Azeroth’un tarihinin destansılığını an ve an yaşamanızı sağlayarak, oynanış iyileştirmeleri ile de savaş alanında planlarınızı harekete geçirmenizde de kolaylık sağlayacak. En dikkat çekici tarafı ise oyuncu modları tüm oyuncular için düşünülmüş ve orijinal haliyle aynı olacak olması... Çok oyunculu eşleştirmesinde ise rakiplerinize meydan okuyabilir, özel oyun lobileri arayıp battle.net üzerinden arkadaşlarınızla bağlantı kurabilirsiniz.';
}
elseif ($haber == 'borderlands-3-incelemelerinden-aldigi-puanlarin-hakkini-veriyor') {
	$baslik = 'Borderlands 3 incelemelerinden aldığı puanların hakkını veriyor';
	$tarih = '26-05-2021';
	$kategori = 'OYUN';
	$gorsel = 'assets/images/border.jpg';
	$aciklama = 'Borderlands 3 incelemelerinden almış olduğu tüm puanların hakkını veriyor. Eklenenen modları, geliştirilen özellikleri, oyun içi grafiklerin başarıları ve son gelen güncellemeyle Borderlands 3\'ü oynarken heyecanı doruklarda yaşayacaksınız. Co-op oyunları denildiğinde akla ilk gelen ve yılların vazgeçilmezi olan Borderlands; serinin 3. oyunu ile adeta kartları yeniden dağıtıyor. Kendine özel cell-shaded çizim tarzıyla hazırlanan ve bir çizgi roman tadında geçen Borderlands 3 kıyamet sonrası oyunlara nazaran daha çılgın ve esprili bir havaya sahip! Oynarken kahkanız eksik olmayacak. Mad Max filmi hayranlarının Borderlands\'ı her daim sevdiğini biliyoruz. Oyunun havası ve haritası da genel olarak Borderlands 3’te de Mad Max’i andırıyor. Bu nedenle zaman zaman, kendinizi oyunda değil, Mad Max filminin içinde hissedebilirsiniz. Borderlands’ın diğer serilerinde olduğu gibi bu açık dünyada sayısız macera ve görev ile karşı karşıyasınız. Single ya da isterseniz arkadaşlarınızla multi player modunda aksiyonlara dahil olabilir ve co-op mücadeleyi doyasıya yaşayabilirsiniz. Borderlands 3 Karakterleri Borderlands 3’te yer alan karakterler Oyunda 4 farklı yönetebileceğiniz Vault Hunter bulunmakta.. Kendine has güçlere sahip olan bu karakterler Amara, FL4K, Moze ve Zane. Gizli Ajan: Zone Zone önceki oyunlarda karşılaştığımız Baron Flynt ve Captain Flynt isimli haydutların kardeşidir. Yetenekleri Digi-Clone : Kendi klonunu yaratır ve istediği zaman onunla yer değiştirebilir. Barrier : Önüne koruma kalkanı oluşturur. SNTNL : Dron çağırır ve havadan hedefleri vurur. Siren: Amara Amara karakteri hasar odaklıdır. Yakın dövüş için kullanabileceğiniz nadide karakter olarak adlandırılır. Yetenekleri Phaseslam : Tıpkı Hulk gibi kısa süreli havaya sıçrayıp yumruğunu sıktıktan sonra aniden yere vurarak çevredeki düşmanlara hasar verir. Phasecast : Kendine ait Astral bir yansıma oluşturup bu yansımayı da çevresindeki düşmana göndererek hasar verir. Phasegrasp : Karşısından gelen bir çok düşmana devasa yumruklar gönderir. Bu da düşmanlarını sabitleyen özelliktir. Topçu: Moze Adından da anlaşılacağı üzere kendisi bu grubun silah uzmanıdır. Vladofun ordusunda görev alsada kendisi bir vault hunter olmayı tercih etmiştir. En önemli özelliği robot çağırıp, onu kendisine bir zırh olarak kullanmasıdır. Raylı top, el bombası fırlatıcı ve roketatar silahlarını da onun özellikleri için seçebilirsiniz. Hayvan Evcilleştiricisi: FL4K Son derece ürkütücü olmasına rağmen evcilleştirdiği hayvanlar ile bir çok saldırıyı üstlenebilen ve son derece gözü kara olan bu karakterimiz için ‘en çok sevilen karakter’ diyebiliriz. Evcilleştirebildiği hayvanların bazıları kaplan gibi saldırabiliyorken, bazıları ise havadan saldırabilmektedir. Borderlands 3’ün konusu tıpkı diğer serilerinde olduğu gibi Pandora gezegeninde geçmektedir. Her ne kadar Pandora’da geçiyor olsa da farklı gezegenleride keşfedebileceğinizi unutmayın. Farklı ateş etme seçenekleri! Silahlarda ise bir kaç değişiklik mevcut bunlardan en önemlisi ise farklı ateş etme modudur! Dilerseniz yarı otomatik dilerseniz tam otomatik atış gerçekleştirebilirsiniz. Tediore, Atlas ve Children of The Vault (CoV) adlı yeni silah serileri oyuna eklenenler arasındadır. Düşmanlar! Borderlands 2’nin devamı niteliğinde olan Borderlands 3’te ana düşmanlar Calypso İkizleri, Children of The Vault (Kasanın Çocukları) olarak karşımıza çıkar. Geliştirilen özellikler İlk olarak artık cephane alımı yaparken tek tek mermi tipine göre alım yapmanıza gerek kalmadı. Bir tuş ile tüm eksikler tamamlanıyor. Açılan sandıklarda artık belirlenen tuşa basıp envantere almanıza gerek kalmadan. Sandığı açtığımız an envanterimize ekleniyor. Co-op modu arkadaşlarınız ile oynadığınız zaman herkesin kendi seviyesine göre ayrı ayrı ödül almasını sağlıyor. Bu yönden de diğer co-op türlerine göre oldukça önemli bir özelliktir.';
}
elseif ($haber == 'wtcn-valorant-masters-reykjavik-maclarini-yayinlayacak') {
	$baslik = 'wtcN Valorant Masters Reykjavik maçlarını yayınlayacak!';
	$tarih = '27-01-2021';
	$kategori = 'E-SPOR';
	$gorsel = 'assets/images/wtcn.jpeg';
	$aciklama = 'Ülkemizin başarılı Twitch yayıncılarından biri olan Ferit Karakaya nam-ı diğer WTCN VALORANT Masters karşılaşmalarını canlı olarak yayınlayacak.

	VALORANT Champions Tour Türkiye Twitter hesabı geçtiğimiz gece bir gönderi paylaştı. Gönderide VALORANT’ın ilk defa offline olarak düzenlenecek turnuvası VALORANT Masters Reykjavik maçlarının canlı olarak WTCN kanalından yayınlanacağı duyuruldu. Başarılı yayıncı Ferit Karakaya, böylelikle Türkiye’de VALORANT’ın ilk offline turnuvasını yayınlayan yayıncı olarak tarihe geçecek.';
}
elseif ($haber == 'anatolia-esports-valorant-kadrosu-icin-atabeast-ile-anlasti') {
	$baslik = 'Anatolia Esports VALORANT kadrosu için atabeast ile anlaştı!';
	$tarih = '28-01-2021';
	$kategori = 'E-SPOR';
	$gorsel = 'assets/images/anatolia.png';
	$aciklama = 'Anatolia Esports VALORANT kadrosu için yakın bir zamanda Rare Esports ile yollarını ayıran Ata ”atabeast” Coşkun ile anlaştı. Başarılı Türk Espor organizasyonlarından biri olan Anatolia Esports hazırladığı video ile taraftarlarına yeni transferini duyurdu. Yaklaşık 1 hafta önce Rare Esports ile yollarını ayıran başarılı VALORANT oyuncusu atabeast’in merakla beklenilen yeni takımı da belli oldu. Anatolia Esports özellikle VCT turnuvalarında inanılmaz bir başarılı yakalamıştı ancak son engeli bir türlü aşamıyorlardı. Bakalım yapılan bu transfer ile Anatolia Esports VALORANT turnuvalarında nasıl başarılar elde edecek.

	Playerbros olarak Anatolia Esports’a ve Ata ”atabeast” Coşkun’a başarılar diliyoruz!';
}
elseif ($haber == 'temsilcimiz-xantares-flash-point-turnuvasinda-sprout-karsisina-cikiyor') {
	$baslik = 'Temsilcimiz XANTARES Flash Point turnuvasında Sprout karşısına çıkıyor!';
	$tarih = '29-01-2021';
	$kategori = 'E-SPOR';
	$gorsel = 'assets/images/xantares.jpeg';
	$aciklama = 'Ülkemizi uluslararası arenada başarılı bir şekilde temsil eden Can Dörtkardeş nam-ı diğer XANTARES Flash Point turnuvasında Sprout karşısına çıkacak.

	CS:GO arenasında kalan temsilcilerimiz arasında ülkemizi en iyi şekilde temsil eden başarılı oyuncu acaba bugün kazanabilecek mi? BIG, dün oynadığı Flash Point Sezon 3 karşılaşmalarında 1 galibiyet ve 1 yenilgi aldı. CompLexity karşısında 2-0 kazanmayı başaran ekip, mousesports 2-0’lık bir yenilgi alarak günü kapattı.

	Temsilcimiz XANTARES’in de içinde bulunduğu BIG bugün Sprout karşısında acaba galibiyet alabilecek mi? Tüm bu soruların cevabını Cumartesi günü oynanacak karşılaşmada öğreneceğiz.

	Playerbros ekibi olarak temsilcimiz XANTARES’e ve takımına Sprout karşısında şimdiden başarılar diliyoruz.';
}
elseif ($haber == 'xbox-series-x-ozellikleri-fiyati-ve-cikis-tarihi-2020') {
	$baslik = 'Xbox Series X Özellikleri, Oyunları ve Fiyatı';
	$tarih = '27-01-2021';
	$kategori = 'X-BOX/PS';
	$gorsel = 'assets/images/xbox2.jpg';
	$aciklama = 'Microsoft tarafından satışa sunulan Xbox Series X nihayet aramızda. Eğer yeni modeli satın alıp almamak arasında bir yerlerde geziniyorsanız, Xbox Series X Oyunları, Özellikleri ve Fiyatı ile karşınızdayız. Peki ama Series X satın alınır mı? Xbox Series X Özellikleri Neler?
	İşlemci: AMD Zen 2
	İşlemci Çekirdek Sayısı: 8 Core
	İşlemci Frekansı: 3.8 GHz
	Grafik İşlemci: AMD RDNA 2
	Grafik İşleme Gücü: 12.1 TFLOPs
	İşlem Birimi: 52 CUs
	Grafik Frekansı: 1.8 GHz
	Toplam Bellek: 16 GB RAM
	Bellek Tipi: GDDR6
	Birinci Bellek: 10 GB RAM
	Birinci Bellek Bant Genişliği: 560 GB / sn
	İkinci Bellek: 6 GB RAM
	İkinci Bellek Bant Genişliği: 336 GB / sn
	Depolama: 1 TB SSD
	Depolama Türü: NVMe SSD
	Ham Okuma Hızı: 2.4 GB / sn
	Sıkıştırılmış Okuma Hızı: 4.8 GB / sn
	Xbox Series X modelinin teknik özelliklerine göz attığımızda bazı noktalarda PlayStation 5’i geçtiğini, bazı noktalarda ise gerisinde kaldığını görüyoruz. Yine de her iki model arasındaki farklar, kullanımda çeşitli performans farkları oluşturuyor.';
}
elseif ($haber == 'xbox-game-pass-mayis-2021') {
	$baslik = 'Xbox Game Pass Mayıs 2021 Oyunları Belli Oldu!';
	$tarih = '28-01-2021';
	$kategori = 'X-BOX/PS';
	$gorsel = 'assets/images/xbox3.jpg';
	$aciklama = 'Microsoft tarafından yapılan açıklamalarla birlikte Xbox Game Pass Mayıs 2021 Oyunları belli oldu. Peki Xbox kullanıcıları önümüzdeki günlerde hangi oyunlara kavuşacak?

	Xbox Game Pass Mayıs 2021 Oyunları Neler?
	Just Cause 4: Reloaded (Konsol + PC)
	Outlast 2 (Konsol + PC)
	Psychonauts (Konsol + PC)
	Red Dead Online (Konsol)
	Steep (Konsol)
	FIFA 21 (Konsol + PC)
	Dragon Quest Builders 2 (Konsol + PC)
	Final Fantasy X / X-2 HD Remaster (Konsol + PC)
	Remnant: From the Ashes (PC)';
}
elseif ($haber == 'xbox-ile-pc-oyunlari-oynamak') {
	$baslik = 'Xbox ile PC Oyunları Oynamak Artık Mümkün!';
	$tarih = '29-01-2021';
	$kategori = 'X-BOX/PS';
	$gorsel = 'assets/images/xbox4.jpg';
	$aciklama = 'Microsoft’un Xbox modelleri için geliştirdiği Chromium tabanlı Edge internet tarayıcısı, kısa bir süre önce beta olarak kullanıma sunuldu. Kullanıcılara klavye ve mouse ile kullanım desteği sunan bu internet tarayıcısı ile yapabileceğiniz pek çok şey var: Bunlardan birisi de Xbox ile PC oyunları oynamak.
	
	Xbox ile PC Oyunları Oynanabilir mi?
	Microsoft tarafından Alpha Skip-Ahead programındaki test kullanıcıları için yayınlanan yeni internet tarayıcısı, kullanıcı deneyimini geliştirebilecek pek çok yeni özelliğe altyapı sağlıyor.

	Tabii ki Chromium tabanlı Edge sürümünün herkese açık bir şekilde yayınlanması için, halen, pek çok geliştirmeye ve düzeltmeye ihtiyaç var ancak şu an için bile yapabileceklerinizin bir sınırı yok diyebiliriz.';
}
elseif ($haber == 'days-gone-pc-inceleme-inceleme-117398') {
	$baslik = 'Days Gone PC İnceleme';
	$tarih = '27-01-2021';
	$kategori = 'OYUN İNCELEME';
	$gorsel = 'assets/images/inceleme.jpg';
	$aciklama = 'Days Gone PC inceleme içeriğimizde sizlerle hem oyunun PC sürümü nasıl olmuş? Hem de 2021\'de Days Gone almaya ve oynamaya değer mi? Bunu tartışacağız. Bu incelememizin konsol sürümünü oynamış oyuncular için farkları ayırt edebileceği ve aynı zamanda oyuna sıfırdan başlayacak PC oyuncuları için fikir verici nitelikte olmasını temenni ediyoruz. Öyleyse lafı da fazla uzatmadan gelin hemen incelememize geçelim.

	Days Gone PC inceleme: Fedakârlık ile başlayıp yoldan çıkan bir öykü
	Oyunun hikayesi virüs salgınının başlangıcından küçük bir kesit ile başlıyor. Bir yanda babayiğit biraderimiz ve bir yanda küçük bir çocuk tarafından bıçaklanan eşimiz bulunuyor ve kurtarma helikopterlerinden biriyle şehri terk etmeye çalışıyoruz. Ancak helikopter yalnızca iki kişiyi alabiliyor ve biz, yaralı eşimizi destek bulması için gönderirken "gardaşımızın" yalnız kalmasına göz yummayarak, onun yanında kalıyoruz. Henüz oyunun başlarında, hikayeye henüz dalıp ısınmamış ve karakterleri tanımamış olsak bile giriş sekansı oldukça etkileyici ve "Helal be, adamsın!" dedirten türden olmuş diyebilirim.';
}
elseif ($haber == 'famicom-detective-club-inceleme-inceleme-117392') {
	$baslik = 'Famicom Detective Club inceleme';
	$tarih = '28-01-2021';
	$kategori = 'OYUN İNCELEME';
	$gorsel = 'assets/images/inceleme2.jpg';
	$aciklama = 'Famicon Detective Club, son zamanlarda alıştığımız yeniden yapım oyunlar furyasının son üyesi. Bu oyunu diğer yeniden yapımlardan ayıran şey ise, çoğu yeniden yapım gibi 5 - 10 yıl önce çıkmış bir oyunun değil, 1988 yılında Famicom ya da batıda bilinen adıyla NES sistemleri için yayınlanmış olması. Ülkemizde “ateri” isimli klon sürümlerine aşina olduğumuz NES konsollarında yayınlanmış olan Famicon Detective Club, daha önce batıda yayınlanmamış iki farklı oyunu ile Nintendo Switch’e geliyor. 

	Famicom Detective Club inceleme
	Serinin ilk oyunu olan The Missing Heir 33 yıl önce, ikinci oyun The Girl Who Stands Behind ise 32 yıl önce çıkmış. Yaşı ve çıktığı konsollar göz önüne alındığında “grafikleri yenileyip yayınladık” denilecek noktanın ötesinde geliştirmeler bekliyoruz doğal olarak. Ülkemizde (hatta batıdaki çoğu ülkede) fazla popüler olmayan görsel roman türü ile macerayı birleştiren oyunları birlikte inceleyelim. Tek İncelemede İki Oyun Birden
	Famicon Detective Club adı altında iki farklı oyun var elimizde. Bu oyunlardan ilki daha önce Japonya dışında herhangi bir şekilde oynanamayan The Missing Heir. Serinin ilk oyunu olan The Missing Heir zengin bir kadının gizemli ölümünü çözmeye çalışıyoruz. Bir diğer gizem ise kim olduğumuz. Oyunun başlangıcında bir okyanus kenarında yatarken bulunuyoruz ve hafıza kaybı yüzünden hiçbir şey hatırlamıyoruz. 

	Ana karakterimizin adını biz belirliyoruz. Kısa süre içerisinde Utsugi Dedektiflik Ajansı için çalışan genç bir dedektif olduğumuzu ve cinayet ile ilgili olarak buraya geldiğimizi öğreniyoruz.. Aynı ajanstan Ayumi ile birlikte cinayeti ve neden hafızamızı yitirdiğimizi bulmaya çalışıyoruz. Bu arada bulunduğumuz köyde ölülerin hayata döndüğü ve Ayashiro ailesine zarar vermeye çalışan herkesi öldürdüğüne dair bir söylenti olduğunu da unutmamak gerek. Söylentiler ve cinayet arasındaki bağlantıları takip edip, Ayashiro ailesinin ardındaki sır perdesini aralayacağımız sürükleyici bir suç öyküsü var.

	The Missing Heir serinin ilk oyunu ve daha önce hayran çevirileri bile bulunmayan bir oyun. Bu yüzden japonca bilmeyen batılı oyuncular için tamamen yeni bir hikaye sunuyor.';
}
elseif ($haber == 'resident-evil-village-inceleme-117361-inceleme') {
	$baslik = 'RESIDENT EVIL VILLAGE INCELEME';
	$tarih = '29-01-2021';
	$kategori = 'OYUN İNCELEME';
	$gorsel = 'assets/images/inceleme3.jpg';
	$aciklama = 'Resident Evil Village inceleme ile oyunun hikaye detaylarına ve genel oynanış dinamiklerine daha yakından bakıyoruz.
	Resident Evil Village inceleme : RE Village ya da Resident Evil 8 serisinin eski oyunlarına tekrar dönüş yaptığımız aranın ardından karşımıza çıktı ve hikayeyi biraz ağırdan alarak önemli bir açığı daha kapatmaya çalıştı. Resident Evil 7\'nin izinden giden oynanışı ve ana seriden çok önemli karakterleri içermesi ile birlikte dikkatimizi cezbeden bir oyun oldu diyebiliriz. Peki fragmanlarıyla "noluyor yahu?" dediğimiz yapım, oyunu bitirdiğimizde ya da oynarken bu dikkati üst seviyede tutmayı başardı mı?

	Resident Evil Village inceleme
	Öncelikle hikaye adına sevmediğim ve abes bulduğum bazı olayları çok anlatmak istesem de bu incelemede herhangi bir spoiler içeriğine yer vermeyeceğim. Yani fragmanlarda gördüğümüz detaylar dışında konu hakkında bilgi vermeden üstü kapalı bu mevzuyu konuşacağımı belirteyim. Tabi Resident Evil 7\'yi hala oynamadıysanız bu konuda keyif kaçırıcı içerikler ile karşılaşabileceğinizi de belirteyim.';
}
else{
	$baslik = 'Böyle bir içerik bulunamadı.';
	$tarih = '';
	$kategori = '';
	$gorsel = 'assets/images/no-content.jpg';
	$aciklama = '';
}
?>
<div class="main-container">
	<main class="site-main">
		<div class="container-fluid no-left-padding no-right-padding page-content blog-single">
			<div class="container">
				<div class="row">

					<div class="col-xl-8 col-lg-8 col-md-6 col-12 content-area">
						<article class="type-post">
							<div class="entry-cover">
								<img src="<?=$gorsel?>" alt="Post" />
							</div>
							<div class="entry-content">
								<div class="entry-header">	
									<span class="post-category"><a href="#" title="Lifestyle"><?=$kategori?></a></span>
									<h3 class="entry-title"><?=$baslik?></h3>
									<div class="post-meta">
										<span class="byline"><a href="#" title="Indesign">OyunBlog</a></span>
										<span class="post-date"><?=$tarih?></span>
									</div>
								</div>								
								<p><?=$aciklama?></p>
							</div>
						</article>
					</div>

					<div class="col-lg-4 col-md-6 col-12 widget-area">
						<aside class="widget widget_latestposts">
							<h3 class="widget-title">En Çok Okunanlar</h3>

							<div class="latest-content">
								<a href="detay.php?haber=resident-evil-village-inceleme-117361-inceleme"><i><img width="72"  src="assets/images/inceleme3.jpg" /></i></a>
								<h5><a href="detay.php?haber=resident-evil-village-inceleme-117361-inceleme">RESIDENT EVIL VILLAGE INCELEME</a></h5>
							</div>

							<div class="latest-content">
								<a href="detay.php?haber=son-zamanlarin-populer-oyunu-among-us"><i><img width="72"  src="assets/images/among.jpg" /></i></a>
								<h5><a href="detay.php?haber=son-zamanlarin-populer-oyunu-among-us">Son Zamanların Popüler Oyunu Among Us</a></h5>
							</div>

							<div class="latest-content">
								<a href="detay.php?haber=yildiz-savaslari-filolar-in-hikayesiyle-devam-ediyor"><i><img width="72"  src="assets/images/starwars.jpg" /></i></a>
								<h5><a href="detay.php?haber=yildiz-savaslari-filolar-in-hikayesiyle-devam-ediyor">Yıldız Savaşları Filolar’ın hikayesiyle devam ediyor</a></h5>
							</div>

							<div class="latest-content">
								<a href="detay.php?haber=tatilde-keyifle-oynayabileceginiz-10-oyun"><i><img width="72"  src="assets/images/games.jpg" /></i></a>
								<h5><a href="detay.php?haber=tatilde-keyifle-oynayabileceginiz-10-oyun">Tatilde Keyifle Oynayabileceğiniz 10 Oyun</a></h5>
							</div>

							<div class="latest-content">
								<a href="detay.php?haber=wtcn-valorant-masters-reykjavik-maclarini-yayinlayacak"><i><img width="72"  src="assets/images/wtcn.jpeg" /></i></a>
								<h5><a href="detay.php?haber=wtcn-valorant-masters-reykjavik-maclarini-yayinlayacak">wtcN Valorant Masters Reykjavik maçlarını yayınlayacak!</a></h5>
							</div>

						</aside>
					</div> 

				</div>
			</div>
		</div>
	</main>
</div>
<?php include 'inc/footer.php'; ?>