<?php
class CartRepositoryEloquent implements CartRepositoryInterface{
protected $model;
public function __construct(Model $model){
    return $this->model=$model;
}

public function store(array $data){
    return $this->model->create($data);
}

public function get(array $id){
    return $this->model->find();
}

public function getList(){
    return $this->model->all();
}



public function update(array $data, $id){
    return $this->model->find($id)->update($data);
}

public function destroy($id){
    return $this->model->find($id)->delete()
}
}

?>