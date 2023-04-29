<?php
$elements = [['КОМПАНИЯ', 'about', '100'], ['УСЛУГИ', 'services', '200'], ['ПРОЕКТЫ', 'projects', '300'], ['НОВОСТИ', 'news', '400'], ['КОНТАКТЫ', 'contacts', '500']];

?>
<div class="text-center fw-bolder fs-12 text-montserrat text-white py-2 justify-content-center align-items-center collapse navbar-collapse"
    style="letter-spacing: 0.96px; min-height: 66px;">
    <?
foreach ($elements as $element) {?>
    <a class="col-2 text-white" style="text-decoration: none;" href="http://foxit/<? echo $element[1] ?>">
        <div class="col-12"><? echo $element[0]; ?></div>
    </a>
    <?}?>
</div>
