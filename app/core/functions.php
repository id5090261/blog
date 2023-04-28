<?php

create_table();
function create_table()
{
    $string = 'mysql:hostname=localhost;';
    $con = new PDO($string, dbuser, dbpass);

    $query = "create database if not exists " . dbname;
    $stm = $con->prepare($query);
    $stm->execute();

    $query = "use " . dbname;
    $stm = $con->prepare($query);
    $stm->execute();

    $query = "create table if not exists users(
        id int primary key auto_increment,
        username varchar(50) not null,
        email varchar(100) not null,
        password varchar(255) not null,
        image varchar(1024) null,
        date datetime default current_timestamp,
        role varchar(10) not null,

        key username (username),
        key email (email)
    )";
    $stm = $con->prepare($query);
    $stm->execute();

    // print_r($con);
}


// function query(string $query, array $data = [])
// {

//     $string = "mysql:hostname=" . dbhost . ";dbname=" . dbname;
//     $con = new PDO($string, dbuser, dbpass);

//     $stm = $con->prepare($query);
//     $stm->execute($data);

//     $result = $stm->fetchAll(PDO::FETCH_ASSOC);
//     if (is_array($result) && !empty($result)) {
//         return $result;
//     }

//     return false;

// }

// function redirect($page)
// {

//     header('Location: ' . $page);
//     die;
// }

// function old_value($key)
// {
//     if (!empty($_POST[$key])) {
//         return $_POST[$key];
//     }

//     return "";
// }

// function old_checked($key)
// {
//     if (!empty($_POST[$key])) {
//         return ' checked ';
//     }

//     return "";
// }

// create_tables();
// function create_tables()
// {
//     $string = "mysql:hostname=" . dbhost . ";";
//     $con = new PDO($string, dbuser, dbpass);

//     $query = "create database if not exists " . dbname;
// // print_r($con);
//     $stm = $con->prepare($query);
//     $stm->execute();

//     $query = "use " . dbname;
// // print_r($con);
//     $stm = $con->prepare($query);
//     $stm->execute();

//     $query = "create table if not exists users(
//     id int primary key auto_increment,
//     username varchar(50) not null,
//     email varchar(100) not null,
//     password varchar(255) not null,
//     image varchar(1024) null,
//     date datetime default current_timestamp,
//     role varchar(10) not null,

//     key username (username),
//     key email (email)

// )";
// // print_r($con);
//     $stm = $con->prepare($query);
//     $stm->execute();

//     $query = "create table if not exists categoris(
//     id int primary key auto_increment,
//     category varchar(50) not null,
//     slug varchar(100) not null,
//     disabled tinyint default 0,

//     key slug (slug),
//     key category (category)

// )";
// // print_r($con);
//     $stm = $con->prepare($query);
//     $stm->execute();

//     $query = "create table if not exists posts(
//     id int primary key auto_increment,
//     user_id int,
//     category_id int,
//     title varchar(100) not null,
//     content text null,
//     date datetime default current_timestamp,
//     slug varchar(100) not null,

//     key user_id (user_id),
//     key category_id (category_id),
//     key title (title),
//     key slug (slug),
//     key date (date)

// )";
// // print_r($con);
//     $stm = $con->prepare($query);
//     $stm->execute();

// }
