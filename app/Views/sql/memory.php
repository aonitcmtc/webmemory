<?= $this->extend('layouts/content_sql') ?>
<?= $this->section('content') ?>

<style>

</style>

<div class="content-sql">
    <h1 class="text-center">SQL Memory.</h1>

    <div class="contrainner text-dark my-5">
        <!-- <div class="row justify-content-center">
            <div class="col-12 text-center text-secondary my-3">
                <h1>Title</h1>
            </div>
        </div> -->

        <div class="row justify-content-center">
            <div class="col col-lg-8 my-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="title_sql" placeholder="SQL title">
                    <label for="title_sql">SQL title</label>
                </div>

                <div class="my-2">
                    <button class="btn btn-sm btn-danger" id="gen_title_mysql">
                        <i class="bi bi-calendar-check"></i>
                        Gen title Mysql
                    </button>
                    &ensp;
                    <button class="btn btn-sm btn-success" id="gen_title_db2">
                        <i class="bi bi-calendar-check"></i>
                        Gen title DB2
                    </button>
                </div>
                
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col col-lg-8 my-3">
                <div class="form-floating">
                    <textarea class="form-control" id="sql_writing" style="height: 300px"></textarea>
                    <label for="sql_writing">SQL Writing</label>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col col-lg-8 my-3">
                <div class="form-floating">
                    <textarea class="form-control" id="sql_output" style="height: 200px"></textarea>
                    <label for="sql_output">OUTPUT</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <button type="button" id="btn_save" class="btn btn-sm btn-primary">
                    <i class="bi bi-floppy"></i>
                    &ensp;
                    บันทึก
                </button>
            </div>
        </div>
    </div>

<script src="<?= base_url(); ?>lib/jquery-3.7.1/jquery-3.7.1.min.js"></script>
<script>
    // jquery
    $(document).ready(function(){
        $("#gen_title_mysql").click(function(){
            const now = new Date();
            const datetime = now.getFullYear() + '-' +
            String(now.getMonth() + 1).padStart(2, '0') + '-' +
            String(now.getDate()).padStart(2, '0') + ' ' +
            String(now.getHours()).padStart(2, '0') + ':' +
            String(now.getMinutes()).padStart(2, '0') + ':' +
            String(now.getSeconds()).padStart(2, '0');

            // console.log(datetime); 
            $('#title_sql').val("Mysql "+datetime);
        });

        $("#gen_title_db2").click(function(){
            const now = new Date();
            const datetime = now.getFullYear() + '-' +
            String(now.getMonth() + 1).padStart(2, '0') + '-' +
            String(now.getDate()).padStart(2, '0') + ' ' +
            String(now.getHours()).padStart(2, '0') + ':' +
            String(now.getMinutes()).padStart(2, '0') + ':' +
            String(now.getSeconds()).padStart(2, '0');

            // console.log(datetime); 
            $('#title_sql').val("DB2 "+datetime);
        });


        $("#btn_save").click(function(){
            // console.log("btn_save :: ");
            var valid = validation();
            if(valid){
                console.log("Send Ajax :: ");
                var title = $("#title_sql").val();
                var content = $("#sql_writing").val();
                var output = $("#sql_output").val();

                $.ajax({
                    url: '/sql/add',
                    type: 'POST',
                    dataType: "json",
                    // headers: {
                    //     'Authorization': 'Basic bXlzcWw6MTIzNDU2Nzg5',
                    //     'Access-Control-Allow-Headers': '*'
                    // },
                    data: JSON.stringify(
                            { 
                                title: title, 
                                content: content, 
                                output: output 
                            }
                        ),
                    success: function(response) {
                        console.log('Response:', response);
                        if(response['status'] == 200){
                            $('input').val("");
                            $('textarea').val("");
    
                            console.log('Clear Output');
                        }
                    }
                });
            }
            console.log("Debug :: End Process");
        });


        function validation() {
            var is_error = 0;
            // console.log("validation :: ");

            var title = $("#title_sql").val();
            var content = $("#sql_writing").val();
            var output = $("#sql_output").val();

            // Clear Validation
            $('#title_sql').removeClass('is-invalid');
            $('#sql_writing').removeClass('is-invalid');
            $('#sql_output').removeClass('is-invalid');

            // console.log("validation :: ", (title.length == 0));
            if(title.length == 0){ is_error++; $('#title_sql').addClass('is-invalid'); }
            if(content.length == 0){ is_error++; $('#sql_writing').addClass('is-invalid'); }
            if(output.length == 0){ is_error++; $('#sql_output').addClass('is-invalid'); }

            console.log("is_error :: ", is_error);
            if(is_error > 0) {
                return false;
            } 
            return true;
        }
    });
</script>
</div>
<?= $this->endSection() ?>
