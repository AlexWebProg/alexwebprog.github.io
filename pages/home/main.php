<div class="text-center">
    <div id="mainCarousel" class="carousel carouselBig slide img-full-width-background" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
            <li data-target="#mainCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="<?=BASEURL?>?p=air" title="Чем полезен чистый воздух и где его взять">
                    <img src="<?=BASEURL?>img/air-head.jpg"/>
                    <div class="image-slider-overlay">
                        <span class="text-success carouselTextHeader text-uppercase">Воздух</span>
                        <br/>
                        <span class="text-primary lead">Чем полезен чистый воздух и где его взять</span>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="<?=BASEURL?>?p=water" title="Роль чистой воды в здоровье человека">
                    <img src="<?=BASEURL?>img/water-head.jpg"/>
                    <div class="image-slider-overlay">
                        <span class="text-success carouselTextHeader text-uppercase">Вода</span>
                        <br/>
                        <span class="text-primary lead">Роль чистой воды в здоровье человека</span>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="<?=BASEURL?>?p=food" target="_blank" title="Как и какая еда укрепляет здоровье и даёт энергию">
                    <img src="<?=BASEURL?>img/food-head.jpg"/>
                    <div class="image-slider-overlay">
                        <span class="text-success carouselTextHeader text-uppercase">Еда</span>
                        <br/>
                        <span class="text-primary lead">Как и какая еда укрепляет здоровье и даёт энергию</span>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="<?=BASEURL?>?p=move" title="Движение - это жизнь">
                    <img src="<?=BASEURL?>img/move-head.jpg"/>
                    <div class="image-slider-overlay">
                        <span class="text-success carouselTextHeader text-uppercase">Движение</span>
                        <br/>
                        <span class="text-primary lead">Движение - это жизнь</span>
                    </div>
                </a>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control pointer" role="button" data-slide="prev" onclick="$('#mainCarousel').carousel('prev')">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Назад</span>
        </a>
        <a class="right carousel-control pointer" role="button" data-slide="next" onclick="$('#mainCarousel').carousel('next')">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Вперёд</span>
        </a>
    </div>
</div>

<div class="container">
    <br/><br/>
    <h3 class="header">Здоровье и энергия</h3>
    <p class="text-justify">
        Авторы этого сайта считают, что укрепление здоровья и обретение энергии для жизни достигается гораздо проще,
        чем принято считать. Для полноценной счастливой и здоровой жизни человеку требуется четыре составляющих: воздух,
        вода, еда и движение.
    </p>
    <p class="text-justify">
        Вы не найдёте здесь теоретические выкладки и научные объяснения процессов, протекающих в человеческом организме и
        вызванных применением тех или иных методик. Авторы - практики, пробующие всё описанное на себе и фиксирующие результаты.
        Мы систематизируем и анализируем лишь свой собственный опыт и опыт других людей. Вся информация представлена в
        ознакомительных целях, мы ничего не проповедуем и никого не зовём с собой.
    </p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 bigMenuElement">
            <a href="<?=BASEURL?>?p=air" title="Чем полезен чистый воздух и где его взять">
                <img src="<?=BASEURL?>img/air-teaser.jpg"/>
                <h4>
                    <strong>Воздух</strong>
                </h4>
            </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 bigMenuElement">
            <a href="<?=BASEURL?>?p=water" title="Роль чистой воды в здоровье человека">
                <img src="<?=BASEURL?>img/water-teaser.jpg"/>
                <h4>
                    <strong>Вода</strong>
                </h4>
            </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 bigMenuElement">
            <a href="<?=BASEURL?>?p=food" target="_blank" title="Как и какая еда укрепляет здоровье и даёт энергию">
                <img src="<?=BASEURL?>img/food-teaser.jpg"/>
                <h4>
                    <strong>Еда</strong>
                </h4>
            </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 bigMenuElement">
            <a href="<?=BASEURL?>?p=move" title="Движение - это жизнь">
                <img src="<?=BASEURL?>img/move-teaser.jpg"/>
                <h4>
                    <strong>Движение</strong>
                </h4>
            </a>
        </div>
    </div>
</div>