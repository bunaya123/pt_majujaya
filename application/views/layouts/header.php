<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= isset($title) ? $title . ' — PT Maju Jaya' : 'PT Maju Jaya Sales Order System' ?></title>

    <!-- Font Awesome (local) -->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <!-- SB Admin 2 CSS (local) -->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <!-- DataTables CSS -->
    <style>
        @import url('<?= base_url('assets/vendor/datatables/') ?>');
        /* DataTables inline style karena tidak ada file CSS terpisah di vendor ini */
        table.dataTable thead th { background-color: #4e73df; color: #fff; }
        .badge-draft      { background-color: #858796; }
        .badge-dikirim    { background-color: #36b9cc; }
        .badge-selesai    { background-color: #1cc88a; }
        .badge-dibatalkan { background-color: #e74a3b; }
        .sidebar .nav-item .nav-link { font-size: 0.85rem; }
    </style>
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php /* sidebar di-include terpisah */ ?>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>