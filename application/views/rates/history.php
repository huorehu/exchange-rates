<div class="rates">
    <h1 class="history-title"><?php echo $title ?></h1>

    <ul class="rates__values">

        <?php foreach ($history as $key => $value): ?>
            <li><?php echo "$value[timestamp]# $value[name_ccy] - $value[name_base_ccy]: $value[price]"; ?></li>
        <?php endforeach; ?>

    </ul>
    <button id="rates">Показать курс</button>
</div>