<style>

.list-group-item {
    margin-top: 4px;
}

.list-group-item-hover {
    /* background-color: #ffffff; */
    color: #a4a8a7;
    background-color: #23316e;
}

.list-group-item-hover.list-group-item-action:hover, .list-group-item-hover.list-group-item-action:focus {
  color: #a4a8a7;
  background-color: #23316e;
}
.list-group-item-hover.list-group-item-action.active {
  color: #fff;
  background-color: #0f1840;
  border-color: #a4a8a7;
}

.list-group-item-hover.list-group-item-action
{
    /* background-image: url("./lib_outsite/outsite/mountain.jpg"); */
    background-color: #0f1840;
    border-radius: 16px;
    color: #ffffff;
}

.list-group-item-hover.list-group-item-action.active
{
    background-color: #405e95;
    border-color: #010828;
    border-radius: 16px;
    color: #ffffff;
}

.list-group-child {
    color: #ffffff;
    background-color:#0f1840;
    border-color: #0f1840;
    border-radius: 16px !important;
}

.list-group-child.active {
    color: #ffffff;
    background-color: #636fa5;
    border-color: #636fa5;
    border-radius: 16px;
}


</style>




<!-- php setup -->
<?php
    // $page = isset($_GET['page']) ? $_GET['page'] : 'news.php';

    $sql_path = $_SERVER['REQUEST_URI'];
    $child_path = $_SERVER['REQUEST_URI'];

    // print_r(str_contains($sql_path, '/adminmember')); die();

    // print_r($routes); die();

    // echo "<button class='btn btn-sm btn-danger'>btn</button>";

?>

<div class="left-menu">
    <h4 class="text-center">Menu</h4>


    <!-- <a href="<?= base_url('dashboard') ?>">Dashboard</a>
    <a href="<?= base_url('profile') ?>">Profile</a>
    <a href="<?= base_url('settings') ?>">Settings</a>
    <a href="<?= base_url('logout') ?>">Logout</a> -->

    <ul class="list-group list-group-flush">
        <a href="<?= base_url(); ?>" class="text-decoration-none">
            <li class="<?= $sql_path == '/webmemory/public/' ? 'active':''?> dropdown list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-hover">
                home
                <!-- <span class="">
                    <i class="fa <?= $sql_path == '/webmemory/public/' ? 'fa-caret-square-o-down':'fa-caret-square-o-right'?>" aria-hidden="true"></i>
                </span> -->
            </li>
        </a>

        <a href="<?= base_url(); ?>sql/memory" class="text-decoration-none">
            <li class="<?= $sql_path == '/webmemory/public/sql/memory' ? 'active':''?> dropdown list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-hover">
                Memory
                <!-- <span class="">
                    <i class="fa <?= $sql_path == '/webmemory/public/sql/memory' ? 'fa-caret-square-o-down':'fa-caret-square-o-right'?>" aria-hidden="true"></i>
                </span> -->
            </li>
        </a>

        <a href="<?= base_url(); ?>sql/list/0" class="text-decoration-none">
            <li class="<?= $sql_path == '/webmemory/public/sql/list/0' ? 'active':''?> dropdown list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-hover">
                SQL Lists
                <!-- <span class="">
                    <i class="fa <?= $sql_path == '/webmemory/public/sql/list/0' ? 'fa-caret-square-o-down':'fa-caret-square-o-right'?>" aria-hidden="true"></i>
                </span> -->
            </li>
        </a>

        <!-- <a href="/sql/history" class="text-decoration-none">
            <li class="<?= $sql_path == '/webmemory/public/sql/history' ? 'active':''?> dropdown list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-hover">
                History
            </li>
        </a> -->

        <a href="<?= base_url(); ?>sql/history" class="text-decoration-none">
            <li class="<?= str_contains($sql_path, '/webmemory/public/sql/history') ? 'active':''?> list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-hover">
                History
                <span class="">
                    <!-- <i class="fa <?= str_contains($sql_path, '/sql/history') ? 'fa-caret-square-o-down':'fa-caret-square-o-right'?>" aria-hidden="true"></i> -->
                    <i class="bi <?= str_contains($sql_path, '/sql/history') ? 'bi-caret-down-fill':'bi-caret-right-fill'?>" aria-hidden="true"></i>
                </span>
            </li>
        </a>
        <!-- child History -->
        <ul class="list-group list-group-flush <?= str_contains($sql_path, '/sql/history') ? '':'d-none'?>">
            <a href="<?= base_url(); ?>sql/history" class="text-decoration-none">
                <li class="<?= $sql_path == '/webmemory/public/sql/history' ? 'active':''?> list-group-item list-group-child mt-1">
                    <i class="bi bi-server" aria-hidden="true"></i>       
                    history 1
                </li>
            </a>
            <a href="<?= base_url(); ?>sql/history/USER01" class="text-decoration-none">
                <li class="<?= $sql_path == '/webmemory/public/sql/history/USER01' ? 'active':''?> list-group-item list-group-child">
                    <i class="bi bi-server" aria-hidden="true"></i>    
                    history 2
                </li>
            </a>
        </ul>
        <!-- child History -->

        <a href="<?= base_url(); ?>sql/content" class="text-decoration-none">
            <li class="<?= str_contains($sql_path, '/sql/content') ? 'active':''?> list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-hover">
                SQL Content
                <span class="">
                    <!-- <i class="fa <?= str_contains($sql_path, '/sql/content') ? 'fa-caret-square-o-down':'fa-caret-square-o-right'?>" aria-hidden="true"></i> -->
                    <i class="bi <?= str_contains($sql_path, '/sql/content') ? 'bi-caret-down-fill':'bi-caret-right-fill'?>" aria-hidden="true"></i>
                </span>
            </li>
        </a>
        <!-- child Content -->
        <ul class="list-group list-group-flush <?= str_contains($sql_path, '/sql/content') ? '':'d-none'?>">
            <a href="<?= base_url(); ?>sql/content" class="text-decoration-none">
                <li class="<?= $sql_path == '/webmemory/public/sql/content' ? 'active':''?> list-group-item list-group-child mt-1">
                    <i class="bi bi-server" aria-hidden="true"></i>    
                    Content
                </li>
            </a>
            <a href="<?= base_url(); ?>sql/content/USER01" class="text-decoration-none">
                <li class="<?= $sql_path == '/webmemory/public/sql/content/USER01' ? 'active':''?> list-group-item list-group-child">
                    <i class="bi bi-server" aria-hidden="true"></i>
                    Selected
                </li>
            </a>
            <!-- <a href="javascript:void(0)" class="text-decoration-none">
                <li class="list-group-item list-group-child">A third item</li>
            </a>
            <a href="javascript:void(0)" class="text-decoration-none">
                <li class="list-group-item list-group-child">A fourth item</li>
            </a>
            <a href="javascript:void(0)" class="text-decoration-none">
                <li class="list-group-item list-group-child">And a fifth one</li>
            </a> -->
        </ul>
        <!-- child Content -->

        <!-- <a href="javascript:void(0)" class="text-decoration-none">
            <li class="<?= $sql_path == '/xxxx1' ? 'active':''?> list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-hover">
                xxxx2
                <span class="">
                    <i class="fa <?= $sql_path == '/adminpage' ? 'fa-caret-square-o-down':'fa-caret-square-o-right'?>" aria-hidden="true"></i>
                </span>
            </li>
        </a>

        <a href="javascript:void(0)" class="text-decoration-none">
            <li class="<?= $sql_path == '/xxxx2' ? 'active':''?> list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-hover">
                xxxx3
                <span class="">
                    <i class="fa <?= $sql_path == '/adminpage' ? 'fa-caret-square-o-down':'fa-caret-square-o-right'?>" aria-hidden="true"></i>
                </span>
            </li>
        </a>
        
        <a href="javascript:void(0)" class="text-decoration-none">
            <li class="<?= $sql_path == '/xxxx3' ? 'active':''?> list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-hover">
                xxxx4
                <span class="">
                    <i class="fa <?= $sql_path == '/adminpage' ? 'fa-caret-square-o-down':'fa-caret-square-o-right'?>" aria-hidden="true"></i>
                </span>
            </li>
        </a>
        
        <a href="javascript:void(0)" class="text-decoration-none">
            <li class="<?= $sql_path == '/xxxx4' ? 'active':''?> list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-hover">
                xxxx5
                <span class="">
                    <i class="fa <?= $sql_path == '/adminpage' ? 'fa-caret-square-o-down':'fa-caret-square-o-right'?>" aria-hidden="true"></i>
                </span>
            </li>
        </a> -->
    </ul>
</div>
