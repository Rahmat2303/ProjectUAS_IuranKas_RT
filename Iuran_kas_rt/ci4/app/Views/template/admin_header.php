<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css'); ?>">
    <title><?= $title; ?></title>
</head>
<body>
    <div id="container">
        <header>
            <h1>ADMIN IURAN KAS RT 008</h1>
        </header>
        <div class="navigasi">
            <a href="<?= base_url('/admin/warga'); ?>">Home</a>
            <a href="<?= base_url('/admin/warga'); ?>">Data Warga</a>
            <a href="<?= base_url('/admin/iuran'); ?>">Kas Warga</a>
            <a href="<?= base_url('/admin/laporan'); ?>">Laporan Kas</a>
            <a href="<?= base_url('/admin/logout'); ?>">Logout</a>
        </div>
    
