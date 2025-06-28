<?= $this->extend('layouts/content_sql') ?>
<?= $this->section('content') ?>

<style>
    /* .select2 {
        color: #000000;
        height: 50px;
    } */

    code {
        /* background-color: #aeaeae; */
        border-radius: 3px;
        font-family: courier, monospace;
        padding: 0 3px;
    }

    .code-content {
        background-color: #0f0f0f;
        padding: 12px;
        border-radius: 16px;
    }

    .select2-results__option {
        color: #3e3e3e;
    }

    .tools-site {
        background-color: #3e3e3e;
        color: #ffffff;
        padding: 6px;
        /* padding: 12px; */
        border-radius: 16px;
    }

    .link-hover:hover {
        color: #ffffff;
    }
</style>

<div class="content-sql">
    <h1 class="text-center">SQL Lists.</h1>

    <div class="contrainner my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 text-light my-3">
                <h4>Select Query</h4>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">

                <!-- <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>

                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A third item</li>

                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A third item</li>
                </ul> -->

                <select class="form-control select2" id="sql_query" name="sql_query" style="width:100%;">
                    <option value="">เลือก Query</option>
                    <?php if (!empty($data)) : ?>
                        <?php foreach($data as $key => $val) : ?>
                            <option value="<?= $val['id'] ?>" <?= !empty($sql['id']) && $val['id'] == $sql['id'] ? 'selected':'' ?>><?= $val['title'] ?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option class="text-center text-danger" value="0">- Load options false -</option>
                    <?php endif; ?>
                </select>

            </div>
        </div>

        <!-- <p class="text-warning">Copy SQL fnc</p> -->
    </div>

    <?php if (!empty($sql)) : ?>
    <div class="contrainner my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center text-warning my-3">
                <h1><?= $sql['id'] ?>. <?= $sql['title'] ?></h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 mt-5">
                <h5>SQL Query</h5>
            </div>

            <div class="col-12 col-lg-9 text-end">
                <div class="tools-site">
                    <a href="javascript:void(0)" id="copy_sql" class="text-decoration-none text-secondary mx-3">
                        <span class="link-hover">
                            Copy
                            <i class="bi bi-copy"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-9 mt-3">
                <div class="code-content">
                    <code id="code_content" class="fs-5"><?= $sql['content']; ?></code>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h5>SQL Formatter</h5>

                <div class="form-floating text-dark">
                    <textarea class="form-control" id="sql_output" style="height: 400px"><?= $sql['content']; ?></textarea>
                    <label for="sql_output">Content Format</label>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 mt-5">
                <h5>Example Output</h5>

                <div class="form-floating text-dark">
                    <textarea class="form-control" id="sql_output" style="height: 250px"><?= $sql['output']; ?></textarea>
                    <label for="sql_output">Output</label>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

<!-- <script src="/lib/jquery-3.7.1/jquery-3.7.1.min.js"></script> -->

<!-- script select2 -->
<link href="<?= base_url(); ?>lib/select2/select2.min.css" rel="stylesheet" />
<script src="<?= base_url(); ?>lib/select2/select2.min.js"></script>

<script>
    $(document).ready(function(){
        $(".select2").select2();

        $("#sql_query").change(function(){
            var id = $(this).val();
            window.location.href = '<?= base_url(); ?>sql/list/'+id;
        });

        $("#copy_sql").click(function(){
            var copy_sql = $('#code_content').text();
            // console.log(copy_sql);
            navigator.clipboard.writeText(copy_sql);
        });

        // function validation() {
            
        // }
    });
</script>

</div>
<?= $this->endSection() ?>