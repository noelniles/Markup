<?php
use Epoque\Markup\Html;

print Html::h1('Html Test File');
print Html::table([
    'cols' => ['Test Element', 'Test Output'],
    'rows' => [
        ['h1', Html::h1('This is a test h1.')],
        ['h1', Html::h1(['id' => 'h1-with-id', 'text' => 'This is a test h1, with an id.'])],
        ['h1', Html::h1(['class' => 'h1-with-class', 'text' => 'This is a test h1, with a class.'])],
        ['h1', Html::h1(['class' => 'h1-with-class', 'id' => 'p-with-class-id', 'text' => 'This is a test h1, with an id and a class.'])],
    ]
]);
