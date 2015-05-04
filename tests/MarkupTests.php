<!DOCTYPE html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<?php

use Epoque\Markup\Html;
use Epoque\Markup\BStrapElement;
use Epoque\Markup\Container;
use Epoque\Markup\Row;
use Epoque\Markup\Column;

$container = new Container();
$row = new Row();

// Should be a factor of 12 to work right.
$numCols = 3;

for ($i = 1; $i <= $numCols; $i++) {
    $col = new Column(['class' => 'col-md-4']);
    $col->addElement(Html::h1('COLUMN-' . $i));
    $col->addElement(Html::h2('COLUMN-' . $i));
    $col->addElement(Html::h3('COLUMN-' . $i));
    $col->addElement(Html::h4('COLUMN-' . $i));
    $col->addElement(Html::h5('COLUMN-' . $i));
    $col->addElement(Html::p('COLUMN-' . $i));
    $col->addElement(Html::span('COLUMN-' . $i));
    $col->addElement(Html::label('COLUMN-' . $i));
    $col->addElement(Html::button('COLUMN-' . $i));
    $col->addElement(Html::input('COLUMN-' . $i));
    $col->addElement(Html::textarea('COLUMN-' . $i));


    /**
     * TODO: Add tests for: <div>, <form>, and <table>
     **/
    //$col->addElement(Html::div('COLUMN-' . $i));
    //$col->addElement(Html::form('COLUMN-' . $i));
    //$col->addElement(Html::table('COLUMN-' . $i));
    $row->addColumn($col);
}

$container->addRow($row);

echo $container->toHtml();

