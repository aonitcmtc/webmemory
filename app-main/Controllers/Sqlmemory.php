<?php

namespace App\Controllers;

use App\Models\SqlbackupModel;

class Sqlmemory extends BaseController
{
    public function index()
    {
        return view('sql/index');
        // return view('index', [
        //     'title' => 'Hello Page'
        // ]);
    }

    public function memory()
    {
        return view('sql/memory');
        // return view('index', [
        //     'title' => 'Hello Page'
        // ]);
    }

    public function history()
    {
        $title = "Mysql coupon group by depart_name";

        $sqlModel = new SqlbackupModel();
        $data = $sqlModel->getBytitle($title);

        // print_r($data);
        // die();

        // return view('sql/history');
        return view('sql/history', [
            'data' => $data
        ]);
    }

    public function history2($select = "")
    {
        $title = "Mysql coupon group by depart_name";

        $sqlModel = new SqlbackupModel();
        $data = $sqlModel->getBytitle($title);

        // print_r($data);
        // die();

        // return view('sql/history');
        return view('sql/history2', [
            'data' => $data,
            'select' => $select
        ]);
    }

    public function sqllist($id = 0)
    {

        $sqlModel = new SqlbackupModel();
        $data = $sqlModel->getAll();

        // print_r($data);
        // die();

        // $sql = [
        //     'id'     => 'id',
        //     'title'     => 'title',
        //     'content'   => 'content',
        //     'output'    => 'output',
        // ];

        $sql = [];
        if ($id > 0) {
            $sql = $sqlModel->getById($id);
        }

        // return view('sql/history');
        return view('sql/list', [
            'data' => $data,
            'sql' => $sql,
        ]);
    }

    public function content()
    {
        // return "Hello, $name!";
        return view('sql/content');
    }

    public function selected($select = 'World')
    {
        // return "Hello, $name!";
        return view('sql/selected', [
            'select' => $select
        ]);
    }

    public function add()
    {
        $input = file_get_contents('php://input');
        $body = json_decode($input, true);

        $data = [
            'title'     => $body['title'],
            'content'   => $body['content'],
            'output'    => $body['output']
        ];

        $sqlModel = new SqlbackupModel();
        $insertID = $sqlModel->insertData($data);

        if ($insertID > 0) {
            $req = ['status' => 200, 'data' => $insertID];
            echo json_encode($req);
        } else {
            $req = ['status' => 400, 'data' => 'error'];
            echo json_encode($req);
        }
    }

}
