@extends('blocks.layout')

@section("content")
  <section class="home">
      <img class="home_logo" src="./images/home-logo.png" alt="Banner">

      <h1 class="home_title">Cучасний центр розвитку дитини</h1>
      <h4 class="subtitle">Ключові напрямки діяльності</h4>
      <ul class="home_list">
          <li>поглиблене англомовлення</li>
          <li>підготовка дитини до навчання в новій українській школі</li>
          <li>формування базових компетентностей сучасної дитини</li>
      </ul>

      <article class="home_article">
        <p>
            Коли дитина дійсно щаслива? <br>Коли вона відчуває себе потрібною, коли її чують, коли вона легко знаходить друзів 
            і швидко адаптується до нових життєвих ситуацій, знає як діяти і знайти вихід.
        </p> 
        <p>
            Впевнено крокуючи у майбутнє, відкриваючи нове, дитина має бути гнучкою до змін сучасного світу. Вміти презентувати себе у 
            суспільстві, вільно спілкуватися з однолітками, висловлювати власні думки, доводити свою точку зору - головні вимоги сьогодення. 
            Саме для досягнення таких цілей був створений центр сучасного розвитку дитини <b class="home_article_brand">"GoogliKi"</b>.
        </p>
        <p>
            Більше ніяких застарілих систем роботи з вихованцями, все у сучасному світлі, кольорі та за новими підходами до навчання, 
            спираючись на основні вимоги нової української школи.
        </p>
        <p>Тому раді бачити кмітливих, допитливих, спраглих до знань  непосидючих дітлахів у нашому сучасному центрі розвитку <b class="home_article_brand">"GoogliKi"</b>.</p>        
      </article>

      <section class="info">
          <h5 class="info_title">Чекаємо вас за адресою:</h5>
          <address>
              вул. Київська 77 б, <br>
              2 поверх, каб. 8
          </address>
          <section class="telephones">
              <span>тел. : 
                  <a href="tel:+380966506593" class="tel">096 650 65 93</a>
               </span>
              <a href="tel:+380660747727" class="tel">066 074 77 27</a>
          </section>
      </section>

      <section class="rules">
            <a class="rule" href="/home/rules">Правила перебуванння в СЦРД "Googliki"</a>
            <a class="rule" href="/home/services">Освітні послуги та їх вартість</a>
            <a class="rule" href="/home/advice">Поради батькам</a>
      </section>
  </section>
@endsection