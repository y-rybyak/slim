<?php

function all_users()
{
    $dbh = new PDO('mysql:host=localhost; dbname=registration; charset=UTF8', 'root', '6710omne8864');
    $query = $dbh->query('SELECT varEmail FROM user ORDER BY varEmail');
    $data = $query->fetchAll(PDO::FETCH_COLUMN);
    return $data;
}