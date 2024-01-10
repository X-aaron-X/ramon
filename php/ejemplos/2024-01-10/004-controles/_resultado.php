<div class="container">
    <div class="row">
        <div class="col-6">
            <ul class="list-group">
                <li class="list-group-item list-group-item-secondary">Sumar</li>
                <li class="list-group-item"><?= $suma ?></li>
            </ul>
        </div>
        
        <div class="col-6">
            <ul class="list-group">
                <li class="list-group-item list-group-item-secondary">Numeros Introducidos</li>
                <?php
                    foreach ($numeros as $numero) {
                        echo "<li class=\"list-group-item\">{$numero}</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</div>