<?php

spl_autoload_register(function ($clase) {
    include "{$clase}.php";
});
