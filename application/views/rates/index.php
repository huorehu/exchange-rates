<form class="rates">
<h1><?php echo $title ?></h1>

<ul class="rates__values">

<?php foreach ($rates as $key => $value): ?>
    <li><?php echo "$value[ccy] - $value[base_ccy]: $value[buy]"; ?></li>
<?php endforeach; ?>

</ul>
    <button id="history">Показать историю</button>
</form>
