<?= $this->extend('layouts/content_sql') ?>
<?= $this->section('content') ?>

<style>
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
</style>

<div class="content-sql">
    <h1 class="text-center">SQL History.</h1>
    <h4 class="text-center text-warning">Select User :: (greet) :: <?= $select ?></h4>

    <div class="contrainner my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center text-secondary my-3">
                <h1><?= $data['id'] ?>. <?= $data['title'] ?></h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 mt-5">
                <h5>SQL Query</h5>

                <div class="code-content">
                    <code class="fs-5"><?= $data['content']; ?></code>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 mt-5">
                <h5>SQL Formatter</h5>

                <div class="form-floating text-dark">
                    <textarea class="form-control" id="sql_output" style="height: 400px"><?= $data['content']; ?></textarea>
                    <label for="sql_output">Content Format</label>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 mt-5">
                <h5>Example Output</h5>

                <div class="form-floating text-dark">
                    <textarea class="form-control" id="sql_output" style="height: 250px"><?= $data['output']; ?></textarea>
                    <label for="sql_output">Output</label>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>