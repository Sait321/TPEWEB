<?php

class TaskView {
    public function showTasks($tasks) {
        $count = count($tasks);

        // NOTA: el template va a poder acceder a todas las variables y constantes que tienen alcance en esta funcion

        // mostrar el template
        include 'templates/taskList.phtml';
    }

    public function showError($error) {
        include 'templates/error.phtml';
    }
}