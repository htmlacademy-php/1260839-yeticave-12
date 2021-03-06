<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <?php foreach ($categoryList as $key => $category): ?>
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="pages/all-lots.html"><?= htmlspecialchars($category) ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <?php foreach ($advertList as $key => $advertItem): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img width="350" height="260" alt="" src=<?= htmlspecialchars($advertItem['url']) ?> >
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= htmlspecialchars($advertItem['category']) ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= $advertItem['name'] ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= format_price($advertItem['price']) ?></span>
                        </div>
                        <div class="lot__timer timer <?php if (time_left($advertItem['expireDate'])['hours'] < 1): ?>timer--finishing<?php endif; ?>">
                            <p><?= time_left($advertItem['expireDate'])['hours'] . ': ' . time_left($advertItem['expireDate'])['minutes'] ?></p>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>