<?php

/**
 * Секция "О сервисе"
 */

$theme_uri = get_template_directory_uri();
?>

<section class="registration">
    <div class="container">
        <div class="registration__inner">

            <h2 class="registration__section-title section-title section-title--oversize-center section-title--capitalized">
                Заинтересовались?
            </h2>

            <div class="registration__info">
                <p>Зарегистрируйтесь, это быстро и&nbsp;бесплатно!</p>
                <p>Уже зарегистрированы?<br> Тогда скорее
                    <a class="registration__login" href="#">авторизуйтесь</a>.
                </p>
            </div>

            <div class="registration__form form">
                <form
                    method="post"
                    autocomplete="off"
                    novalidate
                    data-form-validate>
                    <div class="form__row">
                        <div class="form__input input">
                            <label for="reg-email">E-mail</label>
                            <input
                                type="text"
                                inputmode="email"
                                id="reg-email"
                                name="reg_email"
                                placeholder="E-mail"
                                data-input-email
                                required />
                        </div>
                        <button
                            class="form__button-primary button-primary button-primary--attach-right button-primary--only-icon"
                            type="submit"
                            data-submit-button>
                            Регистрация
                            <span class="button__icon-wrapper">
                                <svg width="11" height="14" aria-hidden="true">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#polygon"></use>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
            </div>



            <p class="registration__contacts-lead">
                Остались вопросы? Мы&nbsp;с&nbsp;радостью на&nbsp;них ответим!
            </p>

            <ul class="registration__contacts contacts contacts--row">
                <li class="contacts__item">
                    <a class="icon-link icon-link--on-dark-bg" href="tel:+78005558628">
                        <span class="icon-link__svg-wrapper">
                            <svg width="21" height="21" aria-hidden="true">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
                            </svg>
                        </span>
                        <span class="icon-link__text">8&nbsp;800 555-86-28</span>
                    </a>
                </li>
                <li class="contacts__item">
                    <a class="icon-link icon-link--on-dark-bg" href="mailto:mail@htmlacademy.ru">
                        <span class="icon-link__svg-wrapper">
                            <svg width="21" height="21" aria-hidden="true">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                            </svg>
                        </span>
                        <span class="icon-link__text">mail@htmlacademy.ru</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</section>