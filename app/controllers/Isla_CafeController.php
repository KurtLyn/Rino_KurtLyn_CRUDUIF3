<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: Isla_CafeController
 * 
 * Automatically generated via CLI.
 */
class Isla_CafeController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }
    function view_all_items() 
    {
         $data['isla_cafe'] = $this->Isla_CafeModel->all();
         $this->call->view('View_All_Items', $data);
    }
    
 public function create()
{
    if ($this->io->method() === 'post') {
        $name        = $this->io->post('name');
        $description = $this->io->post('description');
        $price       = $this->io->post('price');

        $imageName = null;
        if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $tmpName   = $_FILES['image']['tmp_name'];
            $imageName = uniqid() . '_' . basename($_FILES['image']['name']);
            $uploadDir = __DIR__ . '/../../public/uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            move_uploaded_file($tmpName, $uploadDir . $imageName);
        }

        $data = [
            'name'        => $name,
            'description' => $description,
            'price'       => $price,
            'image'       => $imageName,
            'created_at'  => date('Y-m-d H:i:s'),
        ];

        if ($this->Isla_CafeModel->insert($data)) {
            header('Location: ' . site_url('cafe/view-all-items'));
            exit;
        } else {
            echo "Error inserting Item.";
        }
    }
    $this->call->view('CreateItemsView');
}


      public function update($id)
{
    $item = $this->Isla_CafeModel->find($id);

    if ($this->io->method() === 'post') {
        $name        = $this->io->post('name');
        $description = $this->io->post('description');
        $price       = $this->io->post('price');

        $imageName = $item['image'];

        if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $tmpName   = $_FILES['image']['tmp_name'];
            $newName   = uniqid() . '_' . basename($_FILES['image']['name']);
            $uploadDir = __DIR__ . '/../../public/uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            move_uploaded_file($tmpName, $uploadDir . $newName);
            $imageName = $newName; 
        }

        $data = [
            'name'        => $name,
            'description' => $description,
            'price'       => $price,
            'image'       => $imageName,
        ];

        if ($this->Isla_CafeModel->update($id, $data)) {
            header('Location: ' . site_url('cafe/view-all-items'));
            exit;
        } else {
            echo "Error updating Item.";
        }
    }
    $this->call->view('UpdateItemsView', ['isla_cafe' => $item]);
}


        
        public function soft_delete($id)
        {
            if ($this->Isla_CafeModel->soft_delete($id)) {
                redirect('cafe/view-all-items');
                echo "item deleted successfully.";
            } else {
                echo "Error deleting item.";
            }
        }

        public function restore($id)
        {
            if ($this->Isla_CafeModel->restore($id)) {
                redirect('cafe/view-all-items');
                echo "item restored successfully.";
            } else {
                echo "Error restoring item.";
            }

        }
}