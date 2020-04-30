<?php 

require_once 'config/database.php';


class TodoController extends Database
{
    public function index(){
        $query = mysqli_query($this->connect,"SELECT * FROM todos");
        while ($result = mysqli_fetch_assoc($query)) {
            $row[] = $result;
        }

        $data = [
            'result' => true,
            'status' => 200,
            'data'   => $row,
        ];

        echo json_encode($data);

    }

    public function store(){
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $sql = "INSERT INTO todos (`name`, `desc`) VALUES ('$name', '$desc');";
		if(mysqli_query($this->connect,$sql))
		{

            $data = [
                'result' => true,
                'status' => 200,
                'msg'   => 'Data successfully added',
            ];
		}
		else
		{
            $data = [
                'result' => false,
                'status' => 200,
                'msg'   => 'Whoops something when wrog',
            ];
        }
        
		echo json_encode($data);    
    }

    public function edit($id){

        parse_str(file_get_contents("php://input"), $_PUT);
        foreach ($_PUT as $key => $value)
        {
            unset($_PUT[$key]);
            $_PUT[str_replace('amp;', '', $key)] = $value;
        }
    
        $_REQUEST = array_merge($_REQUEST, $_PUT);

        $name = $_REQUEST['name'];
        $desc = $_REQUEST['description'];
        $is_finished = $_REQUEST['is_finished'];

        $query = mysqli_fetch_assoc(mysqli_query($this->connect,"SELECT * FROM todos WHERE id='$id'"));

        if(!empty($query)){
            $sql = "UPDATE `todos` SET `name`='$name', `desc`='$desc', `is_finished`=$is_finished WHERE `id`=$id";
            if(mysqli_query($this->connect,$sql)){
                $msg = 'Data successfully edited';
            }else{
                $msg = 'Internal server error';
            }
        }else{
            $msg = 'Data not found';
        }

        $data = [
            'result' => true,
            'status' => 200,
            'msg'   => $msg
        ];

        echo json_encode($data);
    }

    public function delete($id){
        $query = mysqli_fetch_assoc(mysqli_query($this->connect,"SELECT * FROM todos WHERE id='$id'"));

        if(!empty($query)){
            $sql = "DELETE FROM todos WHERE id='$id'";
            if(mysqli_query($this->connect,$sql)){
                $msg = 'Data successfully deleted';
            }else{
                $msg = 'Internal server error';
            }
        }else{
            $msg = 'Data not found';
        }
        
        $data = [
            'result' => true,
            'status' => 200,
            'msg'   => $msg
        ];

        echo json_encode($data);
    }
}
