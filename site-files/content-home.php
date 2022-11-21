<main>
    <section class="hero">
        <img class="hero__image" src="<?=$_default_image ?>" alt="<?=$top_image_section->{"title"} ?>">
        <div class="hero__container container">
            <div class="hero__inner">
                <h1 class="hero__title">
                    <?=$top_image_section->{"title"} ?>
                </h1>
                <p class="hero__text"><?=$top_image_section->{"content"} ?></p>
            </div>
            <button class="hero__arrow" type="button"><?=$_icon_arrow ?></button>
        </div>
    </section>

    <section class="products container">
        <div class="products__title-block">
            <img src="<?=$_logo_icon ?>" alt="">
            <h2 class="products__main-title">Productos<br><span class="products__main-title--large">destacados</span></h2>
        </div>
        <?php
        foreach ($first_section_pages as $url => $productArray)
        {
        ?>
        <a href="<?=$url?>" class="products__item-block">
        <img class="products__img" src="<?=$productArray->{"image"} ?>" alt="">
            <div class="products__desc">
                <h3 class="products__title">
                    <?=$productArray->{"title"} ?>
                </h3>
                <p class="products__text"><?=$productArray->{"description"} ?></p>
            </div>
        </a>
        <?php
            }
        ?>
    </section>

    <section class="clients">
        <img class="clients__img" src="<?=$_default_image?>" alt="">
        <div class="clients__inner">
            <div class="clients__title-block">
                <h2 class="clients__title">
                    <?=$second_section->{"title"} ?>
                </h2>
                <p class="clients__text"><?=$second_section->{"content"} ?></p>
            </div>
            <div class="clients__logo-block">
                <ul class="clients__list">
                    <?php foreach ($second_section->{"logos"} as $image)
                    {
                    ?>
        
                    <li class="clients__list-item">
                        <img class="clients__logo" src="<?=$image?>" alt="">
                    </li>
                    <?php
                    }
                    ?>
        
                </ul>
            </div>
        </div>
    </section>

    <section class="popular">
        <h2 class="popular__title">Productos mas vendidos</h2>
        <ul class="popular__list">
        <?php
        foreach ($third_section_pages as $url => $productArray)
        {
        ?>
            <li class="popular__list-item">
                <a href="<?=$url?>" class="popular__link">
                    <img class="popular__img" src="<?=$productArray->{"image"} ?>" alt="">
                    <h3 class="popular__item-title"><?=$productArray->{"title"} ?></h3>
                    <p class="populat__text"><?=$productArray->{"description"} ?></p>
                </a>
        
            </li>
        <?php
        }
        ?>
        
        
        </ul>
    </section>

    <section class="categories">
        <ul class="categories__list">
        <?php
        foreach ($fourth_section_pages as $url => $productArray)
        {
        ?>
            <li class="categories__list-item">
                <a href="<?=$url?>" class="categories__link">
                    <img class="categories__img" src="<?=$productArray->{"image"} ?>" alt="">
                    <h3 class="categories__title"><?=$productArray->{"title"} ?></h3>
                </a>
            </li>
        <?php
        }
        ?>
        </ul>
    </section>

    <section class="form-section">
        <div class="form-section__intro">
            <h2 class="form-section__intro-title">iEstrategic</h2>
            <p class="form-section__intro-subtitle">Agencia de marketing digital</p>
            <p><?=$_contact_section->{"address"} ?><br>
            <?=$_contact_section->{"postal_code"} ?> - <?=$_contact_section->{"address_city"} ?><br>
            trabaja con nosotros</p>
            <a href="<?=$_contact_section->{"map"} ?>" target="_blank"><span><?=$_icon_pin ?></span> Ver en google maps</a><br>
            <a href="tel:<?=$_contact_section->{"phonelink"} ?>"><span><?=$_icon_phone ?></span><?=$_contact_section->{"phone"} ?></a><br>
            <a href="mailto:<?=$_contact_section->{"email"} ?>"><span><?=$_icon_arroba ?></span><?=$_contact_section->{"email"} ?></a>
        </div>
        <div class="form-section__form">
            <p class="form-section__form-desc"><?=$_contact_section->{"form_text"} ?></p>
            <form id="form" action="/" class="form" name="myForm">
                <div class="form__item">
                    <label for="name" class="form__label">nombre</label>
                    <input id="name" type="text" class="form__input" name="Name">
                    <span class="error__note"></span>
                </div>
                <div class="form__item">
                    <label for="lastName" class="form__label" >Apellidos</label>
                    <input id="lastName" type="text" class="form__input" name="LastName">
                    <span class="error__note"></span>
                </div>
                <div class="form__item">
                    <label for="phone" class="form__label">Teléfono</label>
                    <input id="phone" type="tel" class="form__input">
                    <span class="error__note"></span>
                </div>
                <div class="form__item">
                    <label for="email" class="form__label">email</label>
                    <input id="email" type="text" class="form__input" name="EMail" >
                    <span class="error__note"></span>
                </div>
                <div class="form__item">
                    <label for="comments" class="form__label">comentarios</label>
                    <textarea id="comments" type="text" class="form__input form__input--textarea"></textarea>
                </div>
                <div class="form__item-cb">
                    <div  class="form__checkbox-cover">
                    <input id="legal" type="checkbox" class="form__checkbox-input">
                    <label class="form__checkbox-label" for="legal" name="legal">He leído y acepto <a href="/avisolegal">el aviso legal</a></label>
                    <span class="error__note"></span>
                    </div>
                    <input class="button form__button" type="submit" value="enviar">
                </div>
            </form>
        </div>
    </section>
    </main>
