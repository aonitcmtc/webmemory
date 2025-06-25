<?= view('layouts/header_sql', ['title' => $title ?? 'SQL Memory']) ?>
<?= view('layouts/sidebar_sql') ?>
<?= $this->renderSection('content') ?>
<?= view('layouts/footer_sql') ?>