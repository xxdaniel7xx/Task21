<?php
    $html = 90;
    $js = 60;
    $php = 25;
    $py = 25;
    $sql = 43;

?>

<div class="knowledge row">
    <div class="row">
        <div class="knowledge-header ">
            <h2>Мои навыки</h2>
        </div>
    </div>
    <div class="skills col-5">
        <p>Html + CSS</p>
        <progress value="<?php echo $html ?>" max="100"></progress>
        <p>JavaScript</p>
        <progress value="<?php echo $js ?>" max="100"></progress>
        <p>PHP</p>
        <progress value="<?php echo $php ?>" max="100"></progress>
        <p>Python</p>
        <progress value="<?php echo $py ?>" max="100"></progress>
        <p>SQL</p>
        <progress value="<?php echo $sql ?>" max="100"></progress>

    </div>
    <div class="skillText col-5 offset-2">
        <p>На данный момент изучаю программирование <?php learningTime()?></p>
        <p>Знаком с современными инструментами разработки, такими как gulp, webpack, git. Начальные знания в Laravel.
            Знаком с принципами и методами проектирования</p>
        <p>Помимо развития в WEB разработке, планирую в будущем ознакомиться с нейросетями и машинным обучением.</p>
    </div>
</div>